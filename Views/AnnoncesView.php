<?php
class AnnoncesView {
    public function afficherListeAnnonces($Annonces) {
        echo "<head>";
        echo "<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'/>";
        echo "<title>Annonces</title>";
        echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
        echo "<link href='https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css' rel='stylesheet'>";
        echo "</head>";
        echo "<script>
        function confirmerSuppression(id) {
            if(confirm('Êtes-vous sûr de vouloir supprimer cet annonce ?')) {
                window.location.href = 'Annonces.php?supprimer=' + id;
            }
        }
        </script>";
        
        echo "<body class='bg-gray-50'>";
        echo "<div class='flex-1 mr-10 p-2 float-right'>";
        
        echo "<h1 class='text-3xl font-bold text-blue-600 mb-8'>Annonces</h1>";
        echo "<div class='grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4'>"; 
        
        foreach ($Annonces as $Annonce) {
            echo "<div class='bg-white rounded-lg shadow-lg p-3 hover:shadow-xl transition-shadow max-w-xs mx-auto'>";  
            echo "<h2 class='text-lg font-semibold text-gray-800 mb-2'>" . 
                 htmlspecialchars($Annonce['titre']) . "</h2>";
            
            echo "<p class='text-sm text-gray-500 mb-3'>" . 
                 date('d/m/Y', strtotime($Annonce['date_publication'])) . "</p>";
            
            echo "<p class='text-gray-600 mb-3'>" . 
                 htmlspecialchars($Annonce['description']) . "</p>";
            
            // Corrected 'Supprimer' link and class
            echo "<a href='../Pages/Annonces.php?action=supprimer&id=" . htmlspecialchars($Annonce['id']) . "' onclick='confirmerSuppression(" . $Annonce['id'] . ")' class='inline-block bg-blue-500 text-white px-3 py-2 rounded hover:bg-blue-600 transition-colors'>Supprimer</a>";
            echo "</div>";
        }
        
        echo "</div>"; 
        echo "</div>"; 
        
        echo "</body>";
    }
}
?>
