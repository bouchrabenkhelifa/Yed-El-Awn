<?php
require_once '../Controllers/PartenaireLoginController.php';

class LoginnView {

    public function afficher($error = null) {
        
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
        echo "<body class='bg-gray-100'>";
        echo "<form action='' method='POST'> ";

        echo " <div class='max-w-md mx-auto p-6 bg-white shadow-lg rounded-lg mt-16'>";
        if (isset($_GET['error'])) {
            echo "<p class='text-red-600 text-center mb-4'>{$_GET['error']}</p>";
        }
        
               echo" <div class='mb-4'>
                    <label for='email' class='block text-lg font-medium text-gray-700'>Email</label>
                    <input type='email' id='email' name='email' class='mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500' placeholder='Entrez votre email'>
                </div>

                <div class='mb-4'>
                    <label for='password' class='block text-lg font-medium text-gray-700'>Mot de passe</label>
                    <input type='password' id='password' name='password' class='mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500' placeholder='Entrez votre mot de passe'>
                </div>
                
                <button type='submit' class='w-full py-2 px-4 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50'>
                    Se connecter
                </button>
                
                <div class='mt-4 text-center'>
                    <p class='text-sm text-gray-600'>
                        Vous n'avez pas de compte ? 
                        <a href='../Pages/Inscription' class='text-blue-600 hover:text-blue-800 font-semibold'>Inscrivez-vous</a>
                    </p>
                </div>
            </div>    </form>";

        echo "</body>";
        echo "</html>";
    }
}
?>
