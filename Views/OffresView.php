<?php
require_once '../Controllers/OffresController.php';

class OffresView {
    public function afficherListePartenaires($partenaires) {
        // Paramètres de pagination
        $items_par_page = 4;
        $page_courante = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $total_items = count($partenaires);
        $total_pages = ceil($total_items / $items_par_page);
        
        // Calculer l'index de début et de fin pour la page courante
        $debut = ($page_courante - 1) * $items_par_page;
        $partenaires_page = array_slice($partenaires, $debut, $items_par_page);

        echo "<head>";
        header('Content-Type: text/html; charset=UTF-8');
        echo "<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'/>";
        echo "<title>Partenaires</title>";
        echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
        echo "<link href='https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css' rel='stylesheet'>";
        echo "<link href='../output.css' rel='stylesheet' type='text/css'/>";
        echo "<script src='../Js/Script.js'></script>";
        echo "</head>";
        
        echo "<body class='bg-gray-50'>";
        echo "<div class='w-3/4 float-right mr-12 p-6'>
            <div class='px-4 mb-4'>
                <a href='http://localhost/projets/YadElAwn/Controllers/GestionPartenaires.php'>
                    <button class='bg-blue-500 border-2 border-blue-500 text-white p-1 px-3 text-sm rounded-lg'>
                        <img src='../Images/Add.png' alt='Ajouter' class='inline-block mr-1 w-4 h-4'> Ajouter un offre
                    </button>
                </a>
            </div>

            <div class='p-4'>
                <table class='min-w-full border-collapse'>
                    <thead>
                        <tr class='bg-gray-200'>
                            <td class='px-4 py-2 text-left text-gray-500'>Logo</td>
                            <td class='px-4 py-2 text-left text-gray-500'>L'etablissement</td>
                            <td class='px-4 py-2 text-left text-gray-500'>Offres</td>
                        </tr>
                    </thead>
                    <tbody>";

        foreach ($partenaires_page as $partenaire) {
            echo "<tr class='bg-white'>
                <td class='px-4 py-2'>
                    <img src='" . htmlspecialchars($partenaire['logo']) . "' alt='Logo de " . htmlspecialchars($partenaire['nom']) . "' class='w-12 h-12 border-gray-400 rounded-full'>
                </td>
                <td class='px-4 py-2'>" . htmlspecialchars($partenaire['nom']) . "</td>
                <td class='px-4 py-2 text-blue-500'><a href=''>Consulter ses offres</a></td>
            </tr>";
        }

        echo "</tbody>
                </table>

                <!-- Pagination -->
                <div class='mt-4 flex justify-center items-center space-x-2'>";
        
        // Bouton précédent
        if ($page_courante > 1) {
            echo "<a href='?page=" . ($page_courante - 1) . "' class='px-4 py-2 border rounded-lg hover:bg-gray-100'>Précédent</a>";
        }

        // Affichage des numéros de page
        for ($i = 1; $i <= $total_pages; $i++) {
            $active_class = $i === $page_courante ? 'bg-blue-500 text-white' : 'hover:bg-gray-100';
            echo "<a href='?page=$i' class='px-4 py-2 border rounded-lg $active_class'>$i</a>";
        }

        // Bouton suivant
        if ($page_courante < $total_pages) {
            echo "<a href='?page=" . ($page_courante + 1) . "' class='px-4 py-2 border rounded-lg hover:bg-gray-100'>Suivant</a>";
        }

        echo "</div>
            </div>
        </div>
        </body>";
    }
}
?>