//Tri des partenaires par nom 
document.addEventListener('DOMContentLoaded', function () {
    const trierNom = document.getElementById('triernom');
    trierNom.addEventListener('click', function() {
        const table = document.querySelector('table tbody'); 
        const rows = Array.from(table.rows); 
        rows.sort(function(a, b) {
            const keyA = a.cells[1].textContent.trim(); 
            const keyB = b.cells[1].textContent.trim(); 
            return keyA.localeCompare(keyB); 
        });
        rows.forEach(function(row) {
            table.appendChild(row); 
        });
    });
});
//Tri des partenaires par ville
document.addEventListener('DOMContentLoaded', function () {
     const trierVille = document.getElementById('trierville');
    trierVille.addEventListener('click', function() {
        trierTable(4); 
    });
    function trierTable(colonneIndex) {
        const table = document.querySelector('table tbody');
        const rows = Array.from(table.rows);
        rows.sort(function(a, b) {
            const keyA = a.cells[3].textContent.trim(); 
            const keyB = b.cells[3].textContent.trim(); 
            return keyA.localeCompare(keyB); 
        });
        rows.forEach(function(row) {
            table.appendChild(row);
        });
    }
});



//Filtre chez l'admin
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




        
        
        