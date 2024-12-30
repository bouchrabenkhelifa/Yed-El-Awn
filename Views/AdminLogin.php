<?php
require_once '../Controllers/AdminLoginController.php';

class AdminLoginView {
    public function afficher($error = null) {
        echo "<!DOCTYPE html>";
        echo "<html lang='en'>";
        echo "<head>";
        echo "    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'/>";
        echo "    <title>Connexion Admin</title>";
        echo "    <meta name='viewport' content='width=device-width, initial-scale=1.0'>";
        echo "    <link href='https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css' rel='stylesheet'>";
        echo "</head>";
        echo "<body class='bg-gray-100'>";

        echo "<form action='' method='POST'> 
        <div class='max-w-md mx-auto p-6 bg-white shadow-lg rounded-lg mt-16'>
                <h2 class='text-center text-2xl font-bold mb-6'>Connexion Admin</h2>";
                
        if ($error) {
            echo "<p class='text-red-600 text-center mb-4'>$error</p>";
        }

        echo "<div class='mb-4'>
                    <label for='nom' class='block text-lg font-medium text-gray-700'>Nom d'utilisateur</label>
                    <input type='text' id='nom' name='nom' class='mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500' placeholder='Entrez votre nom d utilisateur' required>
                </div>

                <div class='mb-4'>
                    <label for='motdepasse' class='block text-lg font-medium text-gray-700'>Mot de passe</label>
                    <input type='password' id='motdepasse' name='motdepasse' class='mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500' placeholder='Entrez votre mot de passe' required>
                </div>
                
                <button type='submit' class='w-full py-2 px-4 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50'>
                    Se connecter
                </button>
                
                <div class='mt-4 text-center'>
                    <p class='text-sm text-gray-600'>
                        Vous n'avez pas de compte ? 
                        <a href='signup.php' class='text-blue-600 hover:text-blue-800 font-semibold'>Inscrivez-vous</a>
                    </p>
                </div>
            </div>            
    </form>";

        echo "</body>";
        echo "</html>";
    }
}
?>
