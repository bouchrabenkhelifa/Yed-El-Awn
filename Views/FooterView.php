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
        echo "    <style>
                .menu-gradient {
                    background: linear-gradient(90deg, #a5b4fc 0%, #c4b5fd 100%);
                }
                </style>";
        echo "</head>";
        echo "<body>";
echo"<section id='contact'>"; 
echo "<footer style='background-color: #6B46C1; color: #ffffff;' class='py-8 mt-20 '>";
echo "    <div class='container  mx-auto px-4'>";

        echo "        <div class='text-center'>";
        echo "           <a href='../Pages/AdminConnexion'> <h2 class='text-2xl font-bold'>YAD EL AWN</h2></a>";
        echo "            <p class='mt-4 leading-6'>";
        echo "                Yad El Awn est une association caritative dédiée à apporter soutien et assistance aux personnes dans le besoin. ";
        echo "                Fondée sur des valeurs de solidarité et de générosité, l'association œuvre activement pour améliorer les ";
        echo "                conditions de vie des communautés vulnérables à travers diverses initiatives humanitaires et sociales.";
        echo "                <br> <a href='../Pages/AdminConnexion' class='font-bold underlined'> ADMINISTRATEUR </p>";

        echo "            <div class='mt-6 flex justify-center space-x-8'>";
        echo "                <a href='https://www.facebook.com/bou.ch.3990?mibextid=ZbWKwL'><img src='../Images/facebook.png' alt='Facebook' class='w-4 h-5 hover:opacity-75'></a>";
        echo "                <a href='#'><img src='../Images/Twitter.png' alt='Twitter' class='w-5 h-5 hover:opacity-75'></a>";
        echo "                <a href='https://www.instagram.com/bouchra_benkhelifa/?next=%2F'><img src='../Images/Instagram.png' alt='Instagram' class='w-5 h-6 hover:opacity-75'></a>";
        echo "                <a href='https://www.linkedin.com/in/bouchra-benkhelifa-830461284/'><img src='../Images/Linkdin.png' alt='LinkedIn' class='w-5 h-5 hover:opacity-75'></a>";
        echo "            </div>";
        echo "        </div>";

        echo "        <div class='text-center text-sm mt-6'>";
            "&copy; " . date("Y") . " Yad El Awn. Tous droits réservés.";
        echo "        </div>";

        echo "    </div>";
        echo "</footer>";
        echo"</section>";
        echo "</body>";
        echo "</html>";
    }
}
?>
