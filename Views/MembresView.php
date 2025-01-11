<?php
require_once '../Controllers/MembresController.php';

class MembresView {

    public function afficherListeMembres($Membres) {
        // Paramètres de pagination
        $items_par_page = 5; // Nombre de membres par page
        $page_courante = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $total_items = count($Membres);
        $total_pages = ceil($total_items / $items_par_page);

        // Calcul des index de début et de fin pour la page courante
        $debut = ($page_courante - 1) * $items_par_page;
        $Membres_page = array_slice($Membres, $debut, $items_par_page);

        echo "<head>";
        echo "<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'/>";
        echo "<title>Membres</title>";
        echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
        echo "<link href='https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css' rel='stylesheet'>";
        echo "<link href='../output.css' rel='stylesheet' type='text/css'/>";
        echo "<script src='../Js/Script.js'></script>";
        echo "</head>";
        echo "<body class='bg-gray-50'>";

        echo "<div class='w-3/4 float-right mr-12 p-6'>";
        echo "<div class='p-4 mb-4'>";
        echo "<select id='Filter' class='border-2 border-blue-500 text-[#344054] p-1 px-3 text-sm rounded-lg'>";
        echo "<option value=''>Filtrer par nom</option>";
        echo "<option value='Alger'>Alger</option>";
        echo "<option value='Oran'>Oran</option>";
        echo "<option value='Constantine'>Constantine</option>";
        echo "</select>";
        echo "<a href ='../Pages/GestionMembres.php'>";
        echo "<button class='bg-blue-500 border-2 border-blue-500 text-white p-1 px-3 text-sm rounded-lg'>";
        echo "<img src='../Images/Add.png' alt='Ajouter' class='inline-block mr-1 w-4 h-4'> Ajouter un membre";
        echo "</button>";
        echo "</a>";
        echo "</div>";

        // Tableau des membres
        echo "<div class='p-4'>";
        echo "<table class='min-w-full border-collapse'>";
        echo "<thead>";
        echo "<tr class='bg-gray-200'>";
        echo "<td class='px-4 py-2 text-left flex text-gray-500'>Nom";
        echo "<img id='triermembre' src='../Images/Tri.png' alt='tri' class='w-3 h-4 ml-2 mt-1 cursor-pointer'>";
        echo "</td>";
        echo "<td class='px-4 py-2 text-left text-gray-500'>Adresse</td>";
        echo "<td class='px-4 py-2 text-left text-gray-500'>Téléphone</td>";
        echo "<td class='px-4 py-2 text-left text-gray-500'>Gestion</td>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";

        foreach ($Membres_page as $Membre) {
            echo "<tr class='bg-white'>";
            echo "<td class='px-4 py-2'>" . htmlspecialchars($Membre['nom']) . "</td>";
            echo "<td class='px-4 py-2'>" . htmlspecialchars($Membre['adresse']) . "</td>";
            echo "<td class='px-4 py-2'>" . htmlspecialchars($Membre['telephone']) . "</td>";
            echo "<td class='px-4 py-2 flex space-x-2'>";
            echo "<a href='../Pages/Membres.php?action=supprimerMembre&id=" . htmlspecialchars($Membre['id']) . "'>";
            echo "<img src='../Images/Trash.png' alt='Supprimer' class='cursor-pointer'>";
            echo "</a>";
            echo "<a href='../Pages/ModifierMembre.php?id=" . htmlspecialchars($Membre['id']) . "'>";
            echo "<img src='../Images/Modify.png' alt='Modifier' class='w-5 h-5 mt-2 cursor-pointer'>";
            echo "</a>";
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

        echo "</div>"; // Fermeture de la div table
        echo "</div>"; // Fermeture de la div principale
        echo "</body>";
    }
}
?>
