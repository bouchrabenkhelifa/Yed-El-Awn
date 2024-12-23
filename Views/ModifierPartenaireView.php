<?php
require_once __DIR__ . '/../Controllers/PartenairesController.php';

class ModifierPartenaireView {
    function ModifierPartenaire() {
        echo "
        <head>
            <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'/>
            <title>Ajouter un Partenaire</title>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <link href='https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css' rel='stylesheet'>       
            <link href='../output.css' rel='stylesheet' type='text/css'/>
        </head>
        <body>
            <div class='bg-gray-100 min-h-screen flex items-center justify-center'>
                <div class='bg-white shadow-lg rounded-lg p-6 w-full max-w-3xl ml-auto mr-40'>
                    <h4 class='text-2xl text-blue-500 font-semibold mb-4 text-gray-800 text-center'>Ajouter un partenaire</h4>
                    <div class='h-1 bg-blue-500 rounded mb-6'></div>
                    <form action='../Controllers/PartenairesController.php' method='POST' enctype='multipart/form-data' class='grid grid-cols-2 gap-6'>
                        <div class='col-span-2'>
                            <label for='nom' class='block text-gray-700 font-medium mb-2'>Nom de l'établissement</label>
                            <input type='text' name='nom' id='nom' placeholder='Nom de l établissement' class='w-full border-2 border-gray-100 rounded-lg p-2 shadow-sm focus:ring-blue-500 focus:border-blue-500' required>
                        </div>
                        <div class='col-span-2'>
                            <label for='categorie' class='block text-gray-700 font-medium mb-2'>Catégorie</label>
                            <select name='idcategorie' id='categorie' class='w-full border-2 border-gray-100 rounded-lg shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500' required>
                                <option value='' disabled selected>Choisir une catégorie</option>
                                <option value='1'>1</option>
                                <option value='2'>2</option>
                                <option value='3'>3</option>
                                <option value='4'>4</option>
                            </select>
                        </div>
                        <div>
                            <label for='telephone' class='block text-gray-700 font-medium mb-2'>Numéro de téléphone</label>
                            <input type='text' name='telephone' id='telephone' placeholder='Numéro de téléphone' class='w-full p-2 border-2 border-gray-100 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500' required>
                        </div>
                        <div>
                            <label for='email' class='block text-gray-700 font-medium mb-2'>Email</label>
                            <input type='email' name='email' id='email' placeholder='Email' class='w-full border-2 border-gray-100 p-2 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500' required>
                        </div>
                        <div>
                            <label for='ville' class='block text-gray-700 font-medium mb-2'>Ville</label>
                            <input type='text' name='ville' id='ville' placeholder='Ville' class='w-full border-2 border-gray-100 p-2 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500' required>
                        </div>
                        <div>
                            <label for='logo' class='block text-gray-700 font-medium mb-2'>Logo</label>
                            <input type='file' name='logo' id='logo' class='w-full border-2 border-gray-100 rounded-lg shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500'>
                        </div>
                        <div class='col-span-2'>
                            <label for='password' class='block text-gray-700 font-medium mb-2'>Mot de passe</label>
                            <input type='password' name='password' id='password' placeholder='Mot de passe' class='w-full p-2 border-2 border-gray-100 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500' required>
                        </div>
                        <div class='col-span-2 flex justify-end'>
                            <button type='submit' class='bg-blue-500 text-white py-2 px-6 rounded-lg shadow hover:bg-blue-600 transition duration-300'>
                                Ajouter
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </body>
        ";
    }
}

?>






