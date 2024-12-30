<?php
require_once '../Controllers/MenuController.php';

class AssoView {

    public function afficherAsso($Association) {
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
        echo "<body class='bg-gray-100 font-sans'>";

        // Association Section
        echo "<div class='w-full  bg-gray-800 p-2 mb-6'>";
        if (!empty($Association)) {
            echo "<div class='flex flex-col md:flex-row items-center justify-between max-w-6xl mx-auto'>";
            foreach ($Association as $asso) {
                echo "<div class='flex items-center space-x-6'>";
                echo "    <img src='" . htmlspecialchars($asso['logo']) . "' alt='Logo' class='w-16 h-13  rounded-full'>";
                echo "    <div class='text-white text-xl font-semibold'>" . htmlspecialchars($asso['nom']) . "</div>";
                echo "</div>";
                echo "<div class='flex space-x-12 mt-4 md:mt-0'>";
                echo "    <a href='#'><img src='../Images/facebook.png' alt='Facebook' class='w-3 h-5 cursor-pointer'></a>";
                echo "    <a href='#'><img src='../Images/Twitter.png' alt='Twitter' class='w-5 h-5 cursor-pointer'></a>";
                echo "    <a href='#'><img src='../Images/Instagram.png' alt='Instagram' class='w-5 h-5 cursor-pointer'></a>";
                echo "    <a href='#'><img src='../Images/Linkdin.png' alt='LinkedIn' class='w-5 h-5 cursor-pointer'></a>";
                echo "</div>";
            }
            echo "</div>";
        } else {
            echo "<div class='text-center text-white'>No associations available.</div>";
        }
        echo "</div>";

       

        echo "</body>";
        echo "</html>";
    }
}
?>
