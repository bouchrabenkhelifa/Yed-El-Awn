<?php
require_once '../Controllers/PartenairesController.php';

class LogosSectionView {

    public function afficher($partenaires) {
        echo "<!DOCTYPE html>";
        echo "<html lang='en'>";
        echo "<head>";
        echo "    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'/>";
        echo "    <title>Menu</title>";
        echo "    <meta name='viewport' content='width=device-width, initial-scale=1.0'>";
        echo "    <link href='https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css' rel='stylesheet'>";
        echo "    <link href='../output.css' rel='stylesheet' type='text/css'/>";
        echo "    <script src='../Js/Script.js'></script>";
        echo "</head>";
        echo "<body class='bg-gray-100 p-8'>";

        echo "<h1 class='text-blue-900 text-center font-bold mb-6'>Nos partenaires</h1>";

        // Container for horizontal scrolling
        echo "<div class='flex overflow-x-auto space-x-8 py-4 justify-center'>"; 

        // Loop through the partners and display their logos
        foreach ($partenaires as $partenaire) {
            echo "<div class='flex-shrink-0'>";  // Prevent logos from shrinking
            echo "    <img src='" . htmlspecialchars($partenaire['logo']) . "' alt='Logo de " . htmlspecialchars($partenaire['nom']) . "' class='w-28 h-28 object-contain bg-white shadow-md rounded-full'>";
            echo "</div>";
        }

        echo "</div>";  // End of flex container

        echo "</body>";
        echo "</html>";
    }
}
?>
