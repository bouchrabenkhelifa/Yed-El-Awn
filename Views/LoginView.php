<?php
class LoginView {
    public function afficher($error = null) {
        ?>
        <!DOCTYPE html>
        <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Connexion</title>
            <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        </head>
        <body class="bg-gradient-to-br from-blue-50 via-white to-indigo-50 min-h-screen">
            <div class="max-w-md mx-auto mt-10 p-6 bg-white rounded-lg shadow-xl">
                <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Connexion</h2>
                
                <?php if ($error): ?>
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                        <span class="block sm:inline"><?php echo htmlspecialchars($error); ?></span>
                    </div>
                <?php endif; ?>

                <form method="POST" class="space-y-6">
                    <!-- Sélection du type d'utilisateur -->
                    <div class="flex justify-center space-x-4 mb-6">
                        <label class="inline-flex items-center">
                            <input type="radio" name="user_type" value="user" checked
                                   class="form-radio text-indigo-600">
                            <span class="ml-2">Utilisateur</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input type="radio" name="user_type" value="partenaire"
                                   class="form-radio text-indigo-600">
                            <span class="ml-2">Partenaire</span>
                        </label>
                    </div>

                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" id="email" name="email" required
                               class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                    </div>

                    <!-- Mot de passe -->
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700">Mot de passe</label>
                        <input type="password" id="password" name="password" required
                               class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                    </div>

                    <!-- Bouton de connexion -->
                    <div>
                        <button type="submit"
                                class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Se connecter
                        </button>
            
                    </div>
                    <div class='mt-4 text-center'>
                    <p class='text-sm text-gray-600'>
                        Créer un compte? 
                        <a href='../Pages/Inscription.php' class='text-blue-600 hover:text-blue-800 font-semibold'>Sign up</a>
                    </p>
                </div>
                </form>
            </div>
        </body>
        </html>
        <?php
    }
}
?>