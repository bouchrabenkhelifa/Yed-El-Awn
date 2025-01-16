<?php
require_once '../Controllers/DonController.php';

class DonsView {

    public function afficherListeDons($Dons) {
        $items_par_page = 5; 
        $page_courante = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $total_items = count($Dons);
        $total_pages = ceil($total_items / $items_par_page);
        $debut = ($page_courante - 1) * $items_par_page;
        $Dons_page = array_slice($Dons, $debut, $items_par_page);

        echo "<head>";
        header('Content-Type: text/html; charset=UTF-8');
        echo "<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'/>";
        echo "<title>Dons</title>";
        echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
        echo "<link href='https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css' rel='stylesheet'>";
        echo "<link href='../output.css' rel='stylesheet' type='text/css'/>";
        echo "<script src='../Js/Script.js'></script>";
        echo "</head>";
        echo "<body class='bg-gray-50'>";

        echo "<div class='w-3/4 float-right mr-12 p-6'>";
        echo "<div class='p-4 mb-4'>";
        echo "<a href ='../Pages/GestionDons.php'>";
        echo "<button class='bg-blue-500 border-2 border-blue-500 text-white p-1 px-3 text-sm rounded-lg'>";
        echo "<img src='../Images/Add.png' alt='Ajouter' class='inline-block mr-1 w-4 h-4'> Ajouter un don";
        echo "</button>";
        echo "</a>";
        echo "</div>";

        echo "<div class='p-4'>";
        echo "<table class='min-w-full border-collapse'>";
        echo "<thead>";
        echo "<tr class='bg-gray-200'>";
        echo "<td class='px-4 py-2 text-left text-gray-500'>Nom du donneur</td>";
        echo "<td class='px-4 py-2 text-left text-gray-500'>Date</td>";
        echo "<td class='px-4 py-2 text-left text-gray-500'>Montant</td>";
        echo "<td class='px-4 py-2 text-left text-gray-500'>Méthode de paiement</td>";
        echo "<td class='px-4 py-2 text-left text-gray-500'>Type de don</td>";
        echo "<td class='px-4 py-2 text-left text-gray-500'>Statut</td>";
        echo "<td class='px-4 py-2 text-left text-gray-500'>Details</td>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";

        foreach ($Dons_page as $Don) {
            $statutClass = '';
            switch ($Don['statut']) {
                case 'Accepté':
                    $statutClass = 'bg-green-500 text-white px-5 py-1 rounded-full';
                    break;
                case 'Refusé':
                    $statutClass = 'bg-red-500 text-white px-6 py-1 rounded-full';
                    break;
                case 'En attente':
                    $statutClass = 'bg-gray-500 text-white px-3 py-1 rounded-full';
                    break;
            }

            echo "<tr class='bg-white mt-8'>";
            echo "<td class='px-4 py-2'>" . htmlspecialchars($Don['nom_donneur']) . "</td>";
            echo "<td class='px-4 py-2'>" . htmlspecialchars($Don['date_don']) . "</td>";
            echo "<td class='px-4 py-2'>" . htmlspecialchars($Don['montant']) . "</td>";
            echo "<td class='px-4 py-2'>" . htmlspecialchars($Don['methode_payement']) . "</td>";
            echo "<td class='px-4 py-2'>" . htmlspecialchars($Don['type_don']) . "</td>";
            echo "<td class='px-4 py-2'>";
            echo "<a href='../Pages/DonDetails.php?id=" . htmlspecialchars($Don['id_don']) . "'>";
            echo "<span class='$statutClass'>" . htmlspecialchars($Don['statut']) . "</span>";
            echo "</a>";
            echo "</td>";
            echo "<td class='py-2 text-blue-500 flex space-x-2'>";
            echo "<a href='../Pages/DonDetails.php?id=" . htmlspecialchars($Don['id_don']) . "' class='pt-2 '> Cliquer ici</a>";
            echo "</td>";
            echo "</tr>";
        }

        echo "</tbody>";
        echo "</table>";

        // Pagination
        echo "<div class='mt-4 flex justify-center items-center space-x-2'>";
        if ($page_courante > 1) {
            echo "<a href='?page=" . ($page_courante - 1) . "' class='px-4 py-2 border rounded-lg hover:bg-gray-100'>Précédent</a>";
        }
        for ($i = 1; $i <= $total_pages; $i++) {
            $active_class = $i === $page_courante ? 'bg-blue-500 text-white' : 'hover:bg-gray-100';
            echo "<a href='?page=$i' class='px-4 py-2 border rounded-lg $active_class'>$i</a>";
        }
        if ($page_courante < $total_pages) {
            echo "<a href='?page=" . ($page_courante + 1) . "' class='px-4 py-2 border rounded-lg hover:bg-gray-100'>Suivant</a>";
        }
        echo "</div>";

        echo "</div>"; 
        echo "</div>"; 
        echo "</body>";
    }
}
?>
