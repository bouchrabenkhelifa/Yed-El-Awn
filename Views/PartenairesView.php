<?php
require_once '../Controllers/PartenairesController.php';
require_once '../Configuration/Database.php';

class PartenairesView {
    public function afficherListePartenaires($partenaires) {
        $items_par_page = 4;
        $page_courante = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $total_items = count($partenaires);
        $total_pages = ceil($total_items / $items_par_page);
        $debut = ($page_courante - 1) * $items_par_page;
        $partenaires_page = array_slice($partenaires, $debut, $items_par_page);

        echo "<head>";
        echo "<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'/>";
        echo "<title>Partenaires</title>";
        echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
        echo "<link href='https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css' rel='stylesheet'>";
        echo "<link href='../output.css' rel='stylesheet' type='text/css'/>";
        echo "<script src='../Js/Partenaires.js' defer></script>"; // Ajout de 'defer'
        echo "</head>";
        echo "<script>
        
document.addEventListener('DOMContentLoaded', function() {
    // Récupérer le select de filtrage
    const villeFilter = document.getElementById('villeFilter');
    
    // Ajouter l'événement de changement
    villeFilter.addEventListener('change', function() {
        // Récupérer la valeur sélectionnée
        const selectedVille = this.value.toLowerCase();
        
        // Récupérer toutes les lignes du tableau sauf l'en-tête
        const rows = document.querySelectorAll('tbody tr');
        
        // Pour chaque ligne
        rows.forEach(row => {
            // Récupérer la cellule contenant la ville (4ème colonne, index 3)
            const villeCell = row.querySelector('td:nth-child(4)');
            const ville = villeCell.textContent.toLowerCase().trim();
            
            // Si aucune ville n'est sélectionnée ou si la ville correspond
            if (selectedVille === '' || ville === selectedVille) {
                row.style.display = ''; // Afficher la ligne
            } else {
                row.style.display = 'none'; // Cacher la ligne
            }
        });
    });

    // Afficher dans la console pour le débogage
    console.log('Script de filtrage chargé');
});
        
        
            </script>";
        
        echo "<body class='bg-gray-50'>";
        echo "<div class='w-3/4 float-right mr-12 px-6'>
            <div class='p-4 mb-4'>
               <select id='villeFilter' class='border-2 border-blue-500 text-[#344054] p-1 px-3 text-sm rounded-lg'>
    <option value=''>Toutes les villes</option>
    <option value='alger'>Alger</option>
    <option value='oran'>Oran</option>
    <option value='constantine'>Constantine</option>
</select>
                <a href='../Pages/GestionPartenaires.php'>
                    <button class='bg-blue-500 border-2 border-blue-500 text-white p-1 px-3 text-sm rounded-lg'>
                        <img src='../Images/Add.png' alt='Ajouter' class='inline-block mr-1 w-4 h-4'> Ajouter un partenaire
                    </button>
                </a>
            </div>

            <div class='p-4'>
                <table id='partenairesTable' class='min-w-full border-collapse'> <!-- Ajout de l'ID -->
                    <thead>
                        <tr class='bg-gray-200'>
                            <td class='px-4 py-2 text-left text-gray-500'>Logo</td>
                            <td class='px-4 py-2 text-left flex text-gray-500'>Nom       
                                <img id='triernom' src='../Images/Tri.png' alt='Modifier' class='w-3 h-4 ml-2 mt-1 cursor-pointer'>
                            </td>
                            <td class='px-4 py-2 text-left text-gray-500'>Catégorie</td>
                            <td class='px-4 py-2 flex text-left text-gray-500'>Ville   
                                <img id='trierville' src='../Images/Tri.png' alt='Modifier' class='w-3 h-4 ml-2 mt-1 cursor-pointer'>
                            </td>
                            <td class='px-4 py-2 text-left text-gray-500'>Email</td>
                            <td class='px-4 py-2 text-left text-gray-500'>Téléphone</td>
                            <td class='px-4 py-2 text-left text-gray-500'>Gestion</td>
                        </tr>
                    </thead>
                    <tbody id='partenairesTableBody'>"; // Ajout de l'ID

        foreach ($partenaires_page as $partenaire) {
            echo "<tr class='bg-white' data-ville='" . strtolower(htmlspecialchars($partenaire['ville'])) . "'> 
                <td class='px-4 py-2'>
                    <img src='" . htmlspecialchars($partenaire['logo']) . "' alt='Logo de " . htmlspecialchars($partenaire['nom']) . "' class='w-12 h-12 border-gray-400 rounded-full'>
                </td>
                <td class='px-4 py-2'>" . htmlspecialchars($partenaire['nom']) . "</td>
                <td class='px-4 py-2'>" . htmlspecialchars($partenaire['idcategorie']) . "</td>
                <td class='px-4 py-2 ville-cell'>" . htmlspecialchars($partenaire['ville']) . "</td> <!-- Ajout de la classe ville-cell -->
                <td class='px-4 py-2'>" . htmlspecialchars($partenaire['email']) . "</td>
                <td class='px-4 py-2'>" . htmlspecialchars($partenaire['telephone']) . "</td>
                <td class='px-4 py-2 flex space-x-2'>
                    <a href='../Pages/Partenaires.php?action=supprimerPartenaire&id=" . htmlspecialchars($partenaire['idpartenaire']) . "'>
                        <img src='../Images/Trash.png' alt='Supprimer' class='cursor-pointer'>
                    </a>
                    <a href='../Pages/ModifierPartenaire.php?id=" . htmlspecialchars($partenaire['idpartenaire']) . "'>
                        <img src='../Images/Modify.png' alt='Modifier' class='w-5 h-5 mt-2 cursor-pointer'>
                    </a>
                </td>
            </tr>";
        }

        echo "</tbody>
                </table>

                <!-- Pagination -->
                <div id='pagination' class='mt-4 flex justify-center items-center space-x-2'>"; // Ajout de l'ID
        
        if ($page_courante > 1) {
            echo "<a href='?page=" . ($page_courante - 1) . "' class='pagination-link px-4 py-2 border rounded-lg hover:bg-gray-100'>Précédent</a>"; // Ajout de la classe
        }

        for ($i = 1; $i <= $total_pages; $i++) {
            $active_class = $i === $page_courante ? 'bg-blue-500 text-white' : 'hover:bg-gray-100';
            echo "<a href='?page=$i' class='pagination-link px-4 py-2 border rounded-lg $active_class' data-page='$i'>$i</a>"; // Ajout de la classe et data-page
        }

        if ($page_courante < $total_pages) {
            echo "<a href='?page=" . ($page_courante + 1) . "' class='pagination-link px-4 py-2 border rounded-lg hover:bg-gray-100'>Suivant</a>"; // Ajout de la classe
        }

        echo "</div>
            </div>
        </div>
        </body>";
    }
}
?>