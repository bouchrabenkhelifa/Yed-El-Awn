<?php
require_once __DIR__ . '/../Controllers/AjouterAnnonceController.php';

class AjouterAnnonceView {
    function Form() {
        echo "
        <head>
            <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'/>
            <title>Ajouter un Membre</title>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <link href='https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css' rel='stylesheet'>       
            <link href='../output.css' rel='stylesheet' type='text/css'/>
        </head>
        <body class='bg-gray-50 '>
            <div class='  ml-80 flex items-center justify-center'>
                <div class='bg-white shadow-lg rounded-lg p-6 w-full max-w-3xl ml-auto mr-40'>
                    <h4 class='text-2xl text-blue-500 font-semibold mb-4 text-gray-800 text-center'>Ajouter un membre</h4>
                    <div class='h-1 bg-blue-500 rounded mb-6'></div>
                    <form action='../Pages/GestionAnnonce.php' method='POST' enctype='multipart/form-data' class='grid grid-cols-2 gap-6'>
                        <div class='col-span-2'>
                            <label for='titre' class='block text-gray-700 font-medium mb-2'>Titre</label>
                            <input type='text' name='titre' id='titre' placeholder='titre de l annonce' class='w-full border-2 border-gray-100 rounded-lg p-2 shadow-sm focus:ring-blue-500 focus:border-blue-500' required>
                        </div>
                
                        <div>
                            <label for='description' class='block text-gray-700 font-medium mb-2'>Description de l'annonce</label>
                            <input type='text' name='description' id='description' placeholder='Description de l'annonce' class='w-full p-2 border-2 border-gray-100 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500' required>
                        </div>
                           <div>
                            <label for='date_publication' class='block text-gray-700 font-medium mb-2'>Date de publication</label>
                            <input type='date' name='date_publication' id='date_publication' placeholder='date_publication de l'annonce' class='w-full p-2 border-2 border-gray-100 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500' required>
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






