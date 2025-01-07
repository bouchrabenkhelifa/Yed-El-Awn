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
        echo "   <style> 
        .gradient-custom { 
        background: linear-gradient(90deg, #6366f1 0%, #8b5cf6 100%);
         } 
        .hover-gradient:hover { 
        background: linear-gradient(90deg, #8b5cf6 0%, #6366f1 100%); 
        }
         .custom-shadow { box-shadow: 0 4px 20px rgba(99, 102, 241, 0.1);
          } 
         </style>";
        echo "</head>";
        echo "<body class='bg-gray-50'>";

        echo "<form action='' method='POST'>
            <div class='max-w-md mx-auto p-6 bg-white shadow-lg rounded-lg mt-16'>
                <h2 class='text-center text-2xl font-bold mb-6 gradient-custom bg-clip-text text-transparent'>Connexion Admin</h2>";

        if ($error) {
            echo "<p class='text-red-600 text-center mb-4'>$error</p>";
        }

        echo "<div class='mb-4'>
                    <label for='nom' class='block text-lg font-medium text-gray-700'>Nom d'utilisateur</label>
                    <input type='text' 
                           id='nom' 
                           name='nom' 
                           class='mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg 
                                  focus:outline-none focus:ring-2 focus:ring-opacity-50'
                           style='focus:ring-color: #FFB30E; focus:border-color: #FFB30E'
                           placeholder='Entrez votre nom d utilisateur' 
                           required>
                </div>

                <div class='mb-4'>
                    <label for='motdepasse' class='block text-lg font-medium text-gray-700'>Mot de passe</label>
                    <input type='password' 
                           id='motdepasse' 
                           name='motdepasse' 
                           class='mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg 
                                  focus:outline-none focus:ring-2 focus:ring-opacity-50'
                           style='focus:ring-color: #FFB30E; focus:border-color: #FFB30E'
                           placeholder='Entrez votre mot de passe' 
                           required>
                </div>

                <button type='submit' 
                        class='w-full py-2.5 px-4 text-white font-medium rounded-lg
                               focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500
                               transition duration-200 gradient-custom hover-gradient mb-6'>
                    Se connecter
                </button>

                <div class='mt-4 text-center'>
                    <p class='text-sm text-gray-600'>
                        Vous n'avez pas de compte ? 
                        <a href='signup.php' 
                           class='font-semibold gradient-custom bg-clip-text text-transparent hover:opacity-80 transition duration-300'>
                            Inscrivez-vous
                        </a>
                    </p>
                </div>
            </div>
        </form>";

        echo "</body>";
        echo "</html>";
    }
}
?>