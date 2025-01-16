<?php
require_once '../Controllers/PartenairesController.php';

class LogosSectionView {
    public function afficher($partenaires) {
        echo "<!DOCTYPE html>";
        echo "<html lang='en'>";
        echo "<head>";
        echo "    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'/>";
        echo "    <title>LOGOS</title>";
        echo "    <meta name='viewport' content='width=device-width, initial-scale=1.0'>";
        echo "    <link href='https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css' rel='stylesheet'>";
        echo "    <link href='../output.css' rel='stylesheet' type='text/css'/>";
        echo "    <script src='../Js/Script.js'></script>";
        echo "    <style>
                    .purple-shadow:hover {
                        box-shadow: 0 0 25px rgba(107, 70, 193, 0.5);
                    }
                </style>";
        echo "</head>";
        echo "<body class='bg-gray-50 min-h-screen'>";
        echo" <section id='partenaires'>";
        echo "<div class='max-w-7xl mx-auto px-4 '>";
        
        echo "<div class='text-center mb-12'>";
        echo "    <a href='../Pages/Catalogue.php' class='inline-block group'>";
        echo "        <h2 style='color: #6B46C1' class='text-3xl font-bold mb-2 transform transition-transform group-hover:scale-105'>Nos partenaires</h2>";
        echo "    </a>";
        echo "</div>";

        echo "<div class='relative'>";
        echo "    <div class='absolute inset-0 bg-gradient-to-r from-transparent via-purple-50 to-transparent opacity-50'></div>";
        
        echo "    <div class='relative flex overflow-x-auto space-x-12 py-8 px-4 justify-center items-center'>";
        
        foreach ($partenaires as $partenaire) {
        
            echo "<div class='flex-shrink-0 transform transition-all duration-300 hover:scale-105'>";
            echo" <a href='http://localhost/projets/YadElAwn/Pages/Catalogue.php'>";
            echo "    <div class='relative group'>";
            echo "        <img src='" . htmlspecialchars($partenaire['logo']) . "' 
                          alt='Logo de " . htmlspecialchars($partenaire['nom']) . "' 
                          class='w-32 h-32 object-contain bg-white rounded-full p-4 
                                 transition-all duration-300 purple-shadow'>";
            echo "    </div>";
            echo" </a>";

            echo "    <p class='text-center mt-3 text-sm font-medium text-purple-800 opacity-0 group-hover:opacity-100 
                         transition-opacity duration-300'>" . htmlspecialchars($partenaire['nom']) . "</p>";
            echo "</div>";
           

        }

        echo "    </div>";
        echo "</div>";
        
        echo "</div>";
        echo" </section>";
        echo "</body>";
        echo "</html>";
    }
}
?>