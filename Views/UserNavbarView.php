<?php

class UserNavbarView {
    public function afficher() {
        echo "<!DOCTYPE html>";
        echo "<html lang='fr'>";
        echo "<head>";
        echo "    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'/>";
        echo "    <title>Navigation</title>";
        echo "    <meta name='viewport' content='width=device-width, initial-scale=1.0'>";
        echo "    <link href='https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css' rel='stylesheet'>";
        echo "    <script src='../Js/Script.js'></script>";
        echo "</head>
        <style> 
        .gradient-custom { 
        background: linear-gradient(90deg, #6366f1 0%, #8b5cf6 100%);
         } 
        .hover-gradient:hover { 
        background: linear-gradient(90deg, #8b5cf6 0%, #6366f1 100%); 
        }
         .custom-shadow { box-shadow: 0 4px 20px rgba(99, 102, 241, 0.1);
          } 
         </style>";
        echo "<body class='bg-gray-100'>";

        // Navbar
        echo "    <nav class='gradient-custom shadow-md'>";
        echo "        <div class='container mx-auto px-4 py-3 flex  items-center'>";
      
        echo "            <div class='ml-auto space-x-6'>";
        echo "                <a href='../Pages/Remises.php' class='text-white hover:text-gray-200'>Remises</a>";
        echo "                <a href='../Pages/DemandeAide.php' class='text-white hover:text-gray-200'>Demande d'aide</a>";
        echo "                <a href='../Pages/Adhesion.php' class='text-white hover:text-gray-200'>Inscription</a>";
        echo "                <a href='#' class='text-white hover:text-gray-200'>Se deconnecter</a>";
        echo "            </div>";
        echo "        </div>";
        echo "    </nav>";

        echo "</body>";
        echo "</html>";
    }
}
?>
