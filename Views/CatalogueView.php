<?php
require_once  '../Controllers/CatalogueController.php';

class CatalogueView {

    public function afficher($categories) {
        // Parcourir chaque catégorie et afficher son nom et ses partenaires
        foreach ($categories as $category) {
            echo"<head>";
            echo"<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'/>";
            echo"<title>Partenaires</title>";
            echo"<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
            echo "<link href='https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css' rel='stylesheet'>"  ;       
            echo "<link href='../output.css' rel='stylesheet' type='text/css'/>";
            echo "  <script src='../Js/Script.js'></script>";
        echo "</head>";
            echo "<h2 class='text-2xl font-medium text-center my-6'>" . htmlspecialchars($category['categorie_nom']) . "</h2>"; // Titre plus petit

            // Si la catégorie a des partenaires, les afficher
            if (!empty($category['partenaires'])) {
                echo "<div class='overflow-x-auto mx-4 lg:mx-16'> <!-- Marge à gauche et à droite --> 
                        <table class='min-w-full table-auto text-left border-collapse'>
                            <thead class='bg-blue-600 text-white'>
                                <tr>
                                    <th class='px-4 py-2 text-sm'>Logo</th> <!-- Petite taille de texte -->
                                    <th class='px-4 flex py-2 text-sm'>Nom du partenaire<img id='triernom' src='../Images/trii.png' alt='Modifier' class='w-3 h-4 ml-2 pb-1 mt-1 cursor-pointer'></th>
                                    <th class='px-4 py-2 text-sm'>Téléphone</th>
                                    <th class='flex px-4 py-2  text-sm'>Ville<img id='trierville' src='../Images/trii.png' alt='Modifier' class='w-3 h-4 ml-2 mt-1 pb-1 cursor-pointer'></th>

                                    <th class='px-4 py-2 text-sm'>Email</th>
                                </tr>
                            </thead>
                            <tbody class='bg-white'>
                ";

                // Parcourir les partenaires et les afficher dans le tableau
                foreach ($category['partenaires'] as $partner) {
                    echo "<tr class='border-b hover:bg-purple-100'>
                            <td class='px-4 py-2'><img src='" . htmlspecialchars($partner['logo']) . "' alt='Logo' class='w-10 h-10 rounded-full'></td> <!-- Logo plus petit -->
                            <td class='px-4 py-2 text-sm'>" . htmlspecialchars($partner['nom']) . "</td> <!-- Petite taille de texte -->
                            <td class='px-4 py-2 text-sm'>" . htmlspecialchars($partner['telephone']) . "</td>
                            <td class='px-4 py-2 text-sm'>" . htmlspecialchars($partner['ville']) . "</td>
                            <td class='px-4 py-2 text-sm'>" . htmlspecialchars($partner['email']) . "</td>
                          </tr>";
                }

                echo "</tbody>
                    </table>
                </div>";
            } else {
                echo "<p class='text-center text-gray-600 mt-4'>Aucun partenaire disponible pour cette catégorie.</p>";
            }
        }
    }
}
?>
