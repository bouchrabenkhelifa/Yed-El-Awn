<?php
require_once  '../Controllers/RemisesController.php';

class RemisesView {
    public function afficher($Remises) {
        
    
                echo "<!DOCTYPE html>";
                echo "<html lang='en'>";
                echo "<head>";
                echo "    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'/>";
                echo "    <title>Liste des Remises</title>";
                echo "    <meta name='viewport' content='width=device-width, initial-scale=1.0'>";
                echo "    <link href='https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css' rel='stylesheet'>";
                echo "    <script src='../Js/Script.js'></script>";
                echo "</head>";
                echo "<body class='bg-gray-50 font-sans '>";
        
                // Header
                echo "<div id='avantages' class=' text-white text-center p-4'>
                        <h1 style='color:#6B46C1' class='text-3xl font-semibold'>Remises & Avantages</h1>
                      </div>";
        
                // Container for the list of remises
                echo "<div class='container mx-auto p-4'>";
        
                // Loop through the remises and display them
                echo "<div class='grid grid-cols-1 mb-20 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6'>"; // responsive grid layout
        
                foreach ($Remises as $remise) {
                    echo "<div class='bg-white p-4 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300'>";
                    echo "    <img src='" . htmlspecialchars($remise['image']) . "' alt='" . htmlspecialchars($remise['titre']) . "' class='w-full h-48 object-cover rounded-t-lg'>";
                    echo "    <div class='mt-4 text-center'>";
                    echo "        <h3 class='text-xl font-semibold text-yellow-700'>" . htmlspecialchars($remise['titre']) . "</h3>";
                    echo "    </div>";
                    echo "</div>";
                }
        
                echo "</div>"; // Close grid
        
                echo "</div>"; // Close container
        
                echo "</body>";
                echo "</html>";
            }
                
}
?>
