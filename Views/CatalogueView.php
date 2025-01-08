<?php
require_once  '../Controllers/CatalogueController.php';

class CatalogueView {
    public function afficher($categories) {
        echo "<head>";
        echo "<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'/>";
        echo "<title>Partenaires</title>";
        echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
        echo "<link href='https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css' rel='stylesheet'>";
        echo "<link href='../output.css' rel='stylesheet' type='text/css'/>";
        echo "<script src='../Js/Script.js'></script>";
        echo "<style>
                .category-section:not(:first-child) {
                    margin-top: 4rem;
                    padding-top: 2rem;
                    border-top: 1px solid #e5e7eb;
                }
                .purple-header {
                    background-color: #6B46C1;
                    background-image: linear-gradient(to right, #6B46C1, #7C3AED);
                }
              </style>";
        echo "</head>";

        foreach ($categories as $category) {
            echo "<div class='category-section'>";
            echo "<h2 class='text-2xl font-medium text-center my-8 text-purple-800'>" . 
                    htmlspecialchars($category['categorie_nom']) . "</h2>";

            if (!empty($category['partenaires'])) {
                echo "<div class='overflow-x-auto mx-4 lg:mx-16 shadow-lg rounded-lg'>";
                echo "<table class='min-w-full table-auto text-left border-collapse bg-white rounded-lg overflow-hidden'>";
                
                // Enhanced header with purple gradient
                echo "<thead class='purple-header text-white'>
                        <tr>
                            <th class='px-6 py-4 text-sm font-semibold'>Logo</th>
                            <th class='px-6 py-4 text-sm font-semibold'>
                                <div class='flex items-center'>
                                    Nom du partenaire
                                    <img id='triernom' src='../Images/trii.png' alt='Modifier' 
                                         class='w-3 h-4 ml-2 cursor-pointer opacity-80 hover:opacity-100 transition-opacity'>
                                </div>
                            </th>
                            <th class='px-6 py-4 text-sm font-semibold'>Téléphone</th>
                            <th class='px-6 py-4 text-sm font-semibold'>
                                <div class='flex items-center'>
                                    Ville
                                    <img id='trierville' src='../Images/trii.png' alt='Modifier' 
                                         class='w-3 h-4 ml-2 cursor-pointer opacity-80 hover:opacity-100 transition-opacity'>
                                </div>
                            </th>
                            <th class='px-6 py-4 text-sm font-semibold'>Email</th>
                        </tr>
                    </thead>";
                
                echo "<tbody class='bg-white divide-y divide-gray-200'>";
                
                foreach ($category['partenaires'] as $partner) {
                    echo "<tr class='hover:bg-purple-50 transition-colors duration-200'>
                            <td class='px-6 py-4'>
                                <img src='" . htmlspecialchars($partner['logo']) . "' 
                                     alt='Logo' 
                                     class='w-12 h-12 rounded-full object-contain bg-white shadow-sm'>
                            </td>
                            <td class='px-6 py-4 text-sm text-gray-800'>" . htmlspecialchars($partner['nom']) . "</td>
                            <td class='px-6 py-4 text-sm text-gray-600'>" . htmlspecialchars($partner['telephone']) . "</td>
                            <td class='px-6 py-4 text-sm text-gray-600'>" . htmlspecialchars($partner['ville']) . "</td>
                            <td class='px-6 py-4 text-sm text-gray-600'>" . htmlspecialchars($partner['email']) . "</td>
                          </tr>";
                }

                echo "</tbody></table></div>";
            } else {
                echo "<p class='text-center text-gray-600 mt-4 mb-8'>
                        Aucun partenaire disponible pour cette catégorie.
                      </p>";
            }
            echo "</div>";
        }
    }
}
?>