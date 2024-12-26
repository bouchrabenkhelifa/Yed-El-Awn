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
/*
document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('villeFilter').addEventListener('change', function() {
        var selectedVille = this.value;
        filterRowsByVille(selectedVille); 
    });
});

// Fonction pour filtrer les lignes du tableau en fonction de la ville
function filterRowsByVille(selectedVille) {
    var rows = document.querySelectorAll('#tableBody .partenaire-row'); // Sélectionner toutes les lignes du tableau
    rows.forEach(function(row) {
        var rowVille = row.getAttribute('data-ville'); // Récupérer la ville de la ligne

        // Afficher ou masquer la ligne en fonction de la ville sélectionnée
        if (selectedVille === '' || rowVille === selectedVille) {
            row.style.display = ''; // Affiche la ligne
        } else {
            row.style.display = 'none'; // Cache la ligne
        }
    });
}*/

// tri pour les membres
document.addEventListener('DOMContentLoaded', function () {
    const trierNom = document.getElementById('triermembre');
    trierNom.addEventListener('click', function() {
        const table = document.querySelector('table tbody'); 
        const rows = Array.from(table.rows); 
        rows.sort(function(a, b) {
            const keyA = a.cells[0].textContent.trim(); 
            const keyB = b.cells[0].textContent.trim(); 
            return keyA.localeCompare(keyB); 
        });
        rows.forEach(function(row) {
            table.appendChild(row); 
        });
    });
});
