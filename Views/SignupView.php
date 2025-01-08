<?php
require_once '../Controllers/MenuController.php';

class SignupView {

    public function afficher() {
        echo "<!DOCTYPE html>";
        echo "<html lang='en'>";
        echo "<head>";
        echo "    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'/>";
        echo "    <title>Sign Up</title>";
        echo "    <meta name='viewport' content='width=device-width, initial-scale=1.0'>";
        echo "    <link href='https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css' rel='stylesheet'>";
        echo "    <link href='../output.css' rel='stylesheet' type='text/css'/>";
        echo "    <script src='../Js/Script.js'></script>";
        echo "</head>";
        echo "<body class='bg-gray-100'>";

        echo " <div class='max-w-md mx-auto p-6 bg-white shadow-lg rounded-lg mt-16'>
                <h2 class='text-2xl font-semibold text-center text-gray-700 mb-6'>Créer un nouveau compte</h2>
                
                <div class='mb-4'>
                    <label for='username' class='block text-lg font-medium text-gray-700'>Nom d'utilisateur</label>
                    <input type='text' id='username' name='username' class='mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500' placeholder='Choisissez votre nom d utilisateur'>
                </div>

                <div class='mb-4'>
                    <label for='email' class='block text-lg font-medium text-gray-700'>Adresse email</label>
                    <input type='email' id='email' name='email' class='mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500' placeholder='Entrez votre adresse email'>
                </div>

                <div class='mb-4'>
                    <label for='password' class='block text-lg font-medium text-gray-700'>Mot de passe</label>
                    <input type='password' id='password' name='password' class='mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500' placeholder='Choisissez un mot de passe'>
                </div>

                <div class='mb-4'>
                    <label for='confirm_password' class='block text-lg font-medium text-gray-700'>Confirmer le mot de passe</label>
                    <input type='password' id='confirm_password' name='confirm_password' class='mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500' placeholder='Confirmez votre mot de passe'>
                </div>

                <button type='submit' class='w-full py-2 px-4 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50'>
                    S'inscrire
                </button>

                <div class='mt-4 text-center'>
                    <p class='text-sm text-gray-600'>
                        Vous avez déjà un compte ? 
                        <a href='../Pages/Connexion.php' class='text-blue-600 hover:text-blue-800 font-semibold'>Se connecter</a>
                    </p>
                </div>
            </div>";
        
        echo "</body>";
        echo "</html>";
    }
}
?>
