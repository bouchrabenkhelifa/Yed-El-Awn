<?php
require_once '../Controllers/OffresController.php';

class MesOffresView {
    public function Afficher($Offres) {
        echo "<head>";
        header('Content-Type: text/html; charset=UTF-8');
        echo "<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'/>";
        echo "<title>Mes Offres</title>";
        echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
        echo "<link href='https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css' rel='stylesheet'>";
        echo "<link href='../output.css' rel='stylesheet' type='text/css'/>";
        echo "<script src='../Js/Script.js'></script>";
        echo "</head>";  
        echo "<body class='bg-gray-50'>";
        echo "<div class='w-3/4 float-right mt-20 mr-12 p-6'>";
        echo "<div class='grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6'>";
        foreach ($Offres as $Offre) {
            echo "<a href='../Pages/Beneficier.php?id=" . htmlspecialchars($Offre['idoffre']) . "' class='pt-2 '> ";
            echo "<div class='bg-white rounded-lg shadow-lg overflow-hidden transition-transform duration-300 hover:scale-105'>";
            echo "<div class='p-6'>";
            echo "<div class='text-xl font-bold text-gray-800 mb-3'>";
            echo htmlspecialchars($Offre['titre']);
            echo "</div>";
            echo "<div class='space-y-3'>";
            echo "<div class='text-gray-600'>";
            echo "<p class='font-medium'>Description:</p>";
            echo "<p class='text-sm'>" . htmlspecialchars($Offre['description']) . "</p>";
            echo "</div>"; 
            echo "<div class='grid grid-cols-2 gap-4 text-sm'>";
            echo "<div class='text-gray-600'>";
            echo "<p class='font-medium'>Date de début:</p>";
            echo "<p>" . htmlspecialchars($Offre['datedebut']) . "</p>";
            echo "</div>";
            
            echo "<div class='text-gray-600'>";
            echo "<p class='font-medium'>Date de fin:</p>";
            echo "<p>" . htmlspecialchars($Offre['datefin']) . "</p>";
            echo "</div>";
            
            echo "</div>"; 
            
            echo "</div>"; 
            echo "</div>";
            echo "</div>"; 
            echo"</a>";
        }
        
        echo "</div>"; 
        echo "</div>"; 
        echo "</body>";
    }
}
?>