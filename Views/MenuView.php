<?php
require_once '../Controllers/MenuController.php';

class MenuView {

    public function afficherMenu($Menu) {
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
         echo "<div class='w-full bg-gray-800  shadow-md p-4'>";
        if (!empty($Menu)) {
            echo "<div class='flex justify-end items-center space-x-6 max-w-6xl  mx-auto'>";
            foreach ($Menu as $element) {
                echo "<a href='#' class='text-white text-sm font-medium hover:text-blue-200 transition duration-200'>";
                echo htmlspecialchars($element['Section']);
                echo "</a>";
            }
            echo "</div>";
        } else {
            echo "<div class='text-center text-white text-sm'>No menu items available.</div>";
        }
        echo "</div>";
    }}

?>