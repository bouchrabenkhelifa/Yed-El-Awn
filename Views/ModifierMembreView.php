<?php
require_once __DIR__ . '/../Controllers/MembresController.php';

class ModiferMembreView {
    function Modifier($membre) {
        echo "
        <head>
            <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'/>
            <title>Modifier un Membre</title>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <link href='https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css' rel='stylesheet'>       
            <link href='../output.css' rel='stylesheet' type='text/css'/>
        </head>
        <body>
            <div class='ml-80 flex items-center justify-center'>
                <div class='bg-white shadow-lg rounded-lg p-6 w-full max-w-3xl ml-auto mr-40'>
                    <h4 class='text-2xl text-blue-500 font-semibold mb-4 text-gray-800 text-center'>Modifier un membre</h4>
                    <div class='h-1 bg-blue-500 rounded mb-6'></div>
<form action='../Pages/ModifierMembre.php?action=modifierMembre' method='POST' enctype='multipart/form-data' class='grid grid-cols-2 gap-6'>
                          <input type='hidden' name='action' value='modifierMembre'>
                          <input type='hidden' name='id' value='{$membre['id']}'>

                        <div class='col-span-2'>
                            <label for='nom' class='block text-gray-700 font-medium mb-2'>Nom complet</label>
                            <input type='text' name='nom' id='nom' placeholder='Nom de l établissement' value='{$membre['nom']}' class='w-full border-2 border-gray-100 rounded-lg p-2 shadow-sm focus:ring-blue-500 focus:border-blue-500' required>
                        </div>
                
                        <div>
                            <label for='telephone' class='block text-gray-700 font-medium mb-2'>Numéro de téléphone</label>
                            <input type='text' name='telephone' id='telephone' placeholder='Numéro de téléphone' value='{$membre['telephone']}' class='w-full p-2 border-2 border-gray-100 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500' required>
                        </div>
                   
                        <div class='col-span-2'>
                            <label for='adresse' class='block text-gray-700 font-medium mb-2'>Adresse</label>
                            <input type='text' name='adresse' id='adresse' value='{$membre['adresse']}' class='w-full border-2 border-gray-100 p-2 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500' required>
                        </div>  
                        <div class='col-span-2 flex justify-end'>
                            <button type='submit' class='bg-blue-500 text-white py-2 px-6 rounded-lg shadow hover:bg-blue-600 transition duration-300'>
                                Modifier
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
