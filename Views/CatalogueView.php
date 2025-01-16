<?php
require_once '../Controllers/CatalogueController.php';

class CatalogueView {
    public function afficher($categories) {
        echo "<head>";
        echo "<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'/>";
        echo "<title>Partenaires</title>";
        echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
        echo "<link href='https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css' rel='stylesheet'>";
        echo "<link href='../output.css' rel='stylesheet' type='text/css'/>";
        echo "<style>
                .partner-card {
                    background-color: #ffffff;
                    border: 1px solid #e5e7eb;
                    border-radius: 0.5rem;
                    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                    padding: 1rem;
                    margin-bottom: 1rem;
                }
                .partner-card:hover {
                    border-color: #6B46C1;
                    background-color: #f9f7fd;
                    transform: scale(1.02);
                    transition: all 0.3s ease;
                }
                .category-header {
                    color: #6B46C1;
                    font-size: 1.5rem;
                    font-weight: bold;
                    text-align: center;
                    margin-top: 2rem;
                }
                .partner-logo {
                    width: 4rem;
                    height: 4rem;
                    border-radius: 50%;
                    object-fit: cover;
                    margin-right: 1rem;
                }
                .partner-info {
                    font-size: 0.875rem;
                    color: #4a5568;
                }
                .sort-button {
                    background-color: #6B46C1;
                    color: white;
                    padding: 0.5rem 1rem;
                    border-radius: 0.375rem;
                    margin-left: 1rem;
                    transition: background-color 0.3s;
                }
                .sort-button:hover {
                    background-color: #553c9a;
                }
                .controls {
                    display: flex;
                    align-items: center;
                    margin: 1rem;
                    gap: 1rem;
                }
              </style>";
        
        echo "<script>
            document.addEventListener('DOMContentLoaded', function() {
                // Fonction de filtrage
                const villeFilter = document.getElementById('villeFilterCatalogue');
                if (villeFilter) {
                    villeFilter.addEventListener('change', function() {
                        const selectedVille = this.value.toLowerCase();
                        const partnerCards = document.querySelectorAll('.partner-card');
                        
                        partnerCards.forEach(card => {
                            const villeInfo = card.querySelector('p.partner-info:first-of-type');
                            if (villeInfo) {
                                const ville = villeInfo.textContent.toLowerCase().replace('ville :', '').trim();
                                if (selectedVille === '' || ville === selectedVille) {
                                    card.style.display = 'flex';
                                } else {
                                    card.style.display = 'none';
                                }
                            }
                        });
                    });
                }

                // Fonction de tri
                const trierVille = document.getElementById('trierville');
                if (trierVille) {
                    trierVille.addEventListener('click', function() {
                        const sections = document.querySelectorAll('.category-section');
                        
                        sections.forEach(section => {
                            const container = section.querySelector('.grid');
                            if (container) {
                                const cards = Array.from(container.children);
                                
                                cards.sort((a, b) => {
                                    const villeA = a.querySelector('p.partner-info:first-of-type')
                                        .textContent.toLowerCase().replace('ville :', '').trim();
                                    const villeB = b.querySelector('p.partner-info:first-of-type')
                                        .textContent.toLowerCase().replace('ville :', '').trim();
                                    return villeA.localeCompare(villeB);
                                });
                                
                                // Vider et reremplir le container avec les cartes triées
                                cards.forEach(card => container.appendChild(card));
                            }
                        });
                        
                        // Inverser l'ordre si on clique à nouveau
                        this.dataset.order = this.dataset.order === 'asc' ? 'desc' : 'asc';
                        if (this.dataset.order === 'asc') {
                            sections.forEach(section => {
                                const container = section.querySelector('.grid');
                                if (container) {
                                    Array.from(container.children)
                                        .reverse()
                                        .forEach(card => container.appendChild(card));
                                }
                            });
                        }
                    });
                }
            });
        </script>";
        echo "</head>";

        echo "<body class='bg-gray-50'>";
        echo "<div class='controls'>";
        echo "<select id='villeFilterCatalogue' class='border-2 ml-20 border-blue-500 text-[#344054] p-1 px-3 text-sm rounded-lg'>
            <option value=''>Toutes les villes</option>
            <option value='alger'>Alger</option>
            <option value='oran'>Oran</option>
            <option value='constantine'>Constantine</option>
            <option value='Mila'>Mila</option>
        </select>";
        echo "<button id='trierville' class='sort-button' data-order='asc'>Trier par ville</button>";
        echo "</div>";
        
        foreach ($categories as $category) {
            echo "<div class='category-section'>";
            echo "<h2 class='category-header'>" . htmlspecialchars($category['categorie_nom']) . "</h2>";

            if (!empty($category['partenaires'])) {
                echo "<div class='grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mx-4 lg:mx-16 mt-8'>";
                foreach ($category['partenaires'] as $partner) {
                    echo "<div class='partner-card flex items-center'>";
                    echo "<img src='" . htmlspecialchars($partner['logo']) . "' alt='Logo' class='partner-logo'>";
                    echo "<div>";
                    echo "<h3 class='text-lg font-semibold text-gray-800'>" . htmlspecialchars($partner['nom']) . "</h3>";
                    echo "<p class='partner-info'>Ville : " . htmlspecialchars($partner['ville']) . "</p>";
                    echo "<p class='partner-info'>Téléphone : " . htmlspecialchars($partner['telephone']) . "</p>";
                    echo "<p class='partner-info'>Email : " . htmlspecialchars($partner['email']) . "</p>";
                    echo "</div>";
                    echo "</div>";
                }
                echo "</div>";
            } else {
                echo "<p class='text-center text-gray-600 mt-4 mb-8'>Aucun partenaire disponible pour cette catégorie.</p>";
            }
            echo "</div>";
        }
        echo "</body>";
    }
}
?>