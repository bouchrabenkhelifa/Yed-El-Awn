<?php
require_once  '../Controllers/AideController.php';

class AideView {

    public function afficherListeAide($Aides) {
        $items_par_page = 5; 
        $page_courante = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $total_items = count($Aides);
        $total_pages = ceil($total_items / $items_par_page);
        $debut = ($page_courante - 1) * $items_par_page;
        $Aides_page = array_slice($Aides, $debut, $items_par_page);

        echo "<head>";
        echo "<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'/>";
        echo "<title>Demandes d'aide</title>";
        echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
        echo "<link href='https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css' rel='stylesheet'>";
        echo "<link href='../output.css' rel='stylesheet' type='text/css'/>";
        echo "<script src='../Js/Script.js'></script>";
        echo "</head>";
        echo "<body class='bg-gray-50'>";

        echo "<div class='w-3/4 float-right mr-12 p-6'>";
        echo "<div class='p-4 mb-4'>";
        echo "<a href ='http://localhost/projets/YadElAwn/Controllers/GestionPartenaires.php'>";

        echo "</a>";
        echo "</div>";

        echo "<div class='p-4'>";
        echo "<table class='min-w-full border-collapse'>";
        echo "<thead>";
        echo "<tr class='bg-gray-200'>";
        echo "<td class='px-4 py-2 text-left text-gray-500'>Nom du demandeur</td>";
        echo "<td class='px-4 py-2 text-left text-gray-500'>Date de la demande</td>";
        echo "<td class='px-4 py-2 text-left text-gray-500'>Type d'aide demandé</td>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";

        foreach ($Aides_page as $Aide) {
            echo "<tr class='bg-white'>";
            echo "<td class='px-4 py-2'>" . htmlspecialchars($Aide['nom_demandeur']) . "</td>";
            echo "<td class='px-4 py-2'>" . htmlspecialchars($Aide['date_demande']) . "</td>";
            echo "<td class='px-4 py-2'>" . htmlspecialchars($Aide['type_aide']) . "</td>";
            echo "</tr>";
        }

        echo "</tbody>";
        echo "</table>";

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
