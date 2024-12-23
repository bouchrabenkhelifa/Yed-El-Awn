document.addEventListener('DOMContentLoaded', function () {
    // Sélectionner l'élément de l'image
    const trierNom = document.getElementById('triernom');
    
    trierNom.addEventListener('click', function() {
        const table = document.querySelector('table tbody'); // Sélectionner le corps du tableau
        const rows = Array.from(table.rows); // Convertir les lignes en tableau

        // Trier les lignes par ordre alphabétique en fonction du texte de la première cellule
        rows.sort(function(a, b) {
            const keyA = a.cells[1].textContent.trim(); // Contenu texte de la première cellule
            const keyB = b.cells[1].textContent.trim(); // Contenu texte de la première cellule
            return keyA.localeCompare(keyB); // Comparaison alphabétique
        });

        // Ajouter les lignes triées au tableau
        rows.forEach(function(row) {
            table.appendChild(row); // Ajoute chaque ligne triée dans le corps du tableau
        });
    });
});
document.addEventListener('DOMContentLoaded', function () {
 
    // Sélectionner l'élément de l'image pour trier par ville
    const trierVille = document.getElementById('trierville');
    trierVille.addEventListener('click', function() {
        trierTable(4); // Trie par la cinquième colonne (Ville, index 4)
    });

    // Fonction générique de tri
    function trierTable(colonneIndex) {
        const table = document.querySelector('table tbody'); // Sélectionner le corps du tableau
        const rows = Array.from(table.rows); // Convertir les lignes en tableau

        // Trier les lignes par ordre alphabétique en fonction du texte de la cellule spécifiée
        rows.sort(function(a, b) {
            const keyA = a.cells[3].textContent.trim(); // Contenu texte de la cellule à l'index spécifié
            const keyB = b.cells[3].textContent.trim(); // Contenu texte de la cellule à l'index spécifié
            return keyA.localeCompare(keyB); // Comparaison alphabétique
        });

        // Ajouter les lignes triées au tableau
        rows.forEach(function(row) {
            table.appendChild(row); // Ajoute chaque ligne triée dans le corps du tableau
        });
    }
});
document.addEventListener('DOMContentLoaded', function() {
    // Écouteur d'événement pour filtrer les lignes par ville
    document.getElementById('villeFilter').addEventListener('change', function() {
        var selectedVille = this.value; // Ville sélectionnée
        filterRowsByVille(selectedVille); // Appel de la fonction de filtrage
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
}



