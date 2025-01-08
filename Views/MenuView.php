<?php
require_once '../Controllers/MenuController.php';

class MenuView {

    public function afficherMenu($Menu) {
        echo "<!DOCTYPE html>";
        echo "<html lang='en'>";
        echo "<head>";
        echo "    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'/>";
        echo "    <title>YAD EL AWN</title>";
        echo "    <meta name='viewport' content='width=device-width, initial-scale=1.0'>";
        echo "    <link href='https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css' rel='stylesheet'>";
        echo "    <link href='../output.css' rel='stylesheet' type='text/css'/>";
        echo "    <script src='../Js/Script.js'></script>
        <style>
        .menu-gradient {
            background: linear-gradient(90deg, #a5b4fc 0%, #c4b5fd 100%);
        }
        </style>";
        echo "</head>";
        echo "<body class='bg-gray-100 font-sans'>";
        
        echo "<div class='menu-gradient p-4'>";

        if (!empty($Menu)) {
            echo "<div class='flex justify-end items-center space-x-6 max-w-6xl text-white font-semibold text-lg mx-auto'>";
            foreach ($Menu as $element) {
                echo "<a href='" . htmlspecialchars($element['liensvers']) . "' class='menu-link'>";
                echo htmlspecialchars($element['Section']);
                echo "</a>";
            }
            echo "</div>";
        } else {
            echo "<div class='text-center text-gray-800 text-sm'>No menu items available.</div>";
        }
        echo "</div>";

        echo "</body>";
        echo "</html>";
    }
}
?>