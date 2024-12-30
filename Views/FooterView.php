<?php
require_once '../Controllers/FooterController.php';

class FooterView {

    public function afficherFooter() {
        echo "<!DOCTYPE html>";
        echo "<html lang='en'>";
        echo "<head>";
        echo "    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'/>";
        echo "    <title>Footer</title>";
        echo "    <meta name='viewport' content='width=device-width, initial-scale=1.0'>";
        echo "    <link href='https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css' rel='stylesheet'>";
        echo "    <link href='../output.css' rel='stylesheet' type='text/css'/>";
        echo "</head>";
        echo "<body>";
        echo "<footer class='bg-gray-800 text-gray-300 mt-20 py-8'>";
        echo "    <div class='container mx-auto px-4'>";
        
        // Section principale
        echo "        <div class='text-center'>";
        echo "            <h2 class='text-2xl font-bold text-white'>YAD EL AWN</h2>";
        echo "            <p class='mt-4 leading-6 text-gray-400'>";
        echo "                Yad El Awn est une association caritative dédiée à apporter soutien et assistance aux personnes dans le besoin. ";
        echo "                Fondée sur des valeurs de solidarité et de générosité, l'association œuvre activement pour améliorer les ";
        echo "                conditions de vie des communautés vulnérables à travers diverses initiatives humanitaires et sociales.";
        echo "            </p>";
        
        // Icônes de réseaux sociaux sous le texte
        echo "            <div class='mt-6 flex justify-center space-x-8'>";
        echo "                <a href='#'><img src='../Images/facebook.png' alt='Facebook' class='w-3 h-5 hover:opacity-75'></a>";
        echo "                <a href='#'><img src='../Images/Twitter.png' alt='Twitter' class='w-6 h-5 hover:opacity-75'></a>";
        echo "                <a href='#'><img src='../Images/Instagram.png' alt='Instagram' class='w-6 h-5 hover:opacity-75'></a>";
        echo "                <a href='#'><img src='../Images/Linkdin.png' alt='LinkedIn' class='w-6 h-5 hover:opacity-75'></a>";
        echo "            </div>";
        echo "        </div>";
        
        // Texte de copyright
        echo "        <div class='text-center text-sm mt-6 text-gray-500'>";
        echo "            &copy; " . date("Y") . " Yad El Awn. Tous droits réservés.";
        echo "        </div>";

        echo "    </div>";
        echo "</footer>";
        echo "</body>";
        echo "</html>";
    }
}
?>
