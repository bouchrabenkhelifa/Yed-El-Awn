<?php
require_once '../Controllers/MembresController.php';

class CarteView {
    public function afficherCarte($Membre, $Association) {
        echo "
        <!DOCTYPE html>
        <html lang='fr'>
        <head>
            <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'/>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Carte de Membre</title>
            <link href='https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css' rel='stylesheet'>
            <link href='../output.css' rel='stylesheet' type='text/css'/>
            <script src='../Js/Script.js'></script>
        </head>
        <body class='bg-gray-100 flex justify-center items-center min-h-screen'>
            <div class='bg-white shadow-md rounded-lg p-4 max-w-sm w-full'>
                <!-- En-tête avec logo et nom -->
                <div class='flex  items-center mb-4 border-b pb-3'>
                    <div class='flex-shrink-0'>
                        <img src='" . htmlspecialchars($Association[0]['logo']) . "' 
                             alt='Logo de l association' 
                             class='w-12 h-12 rounded-lg object-cover'>
                    </div>
                    <div class='text-right'>
                        <h2 class='text-xl ml-5 font-bold text-gray-500'>" . 
                            htmlspecialchars($Association[0]['nom']) . "
                        </h2>
                    </div>
                </div>
                
                <!-- Coordonnées du membre -->
                <!-- Coordonnées du membre avec photo -->
<div class='space-y-2 mt-3'>
    <div class='flex items-center space-x-4'>
        <img src='" . htmlspecialchars($Membre['photo']) . "' 
             alt='Photo du membre' 
             class='w-16 h-18 object-cover border border-gray-300'>
        <div>
            <p class='text-gray-700 text-sm'>
                <span class='font-semibold'>ID du Membre :</span> 
                <span class='ml-1'>" . htmlspecialchars($Membre['id']) . "</span>
            </p>
            <p class='text-gray-700 text-sm'>
                <span class='font-semibold'>Nom :</span> 
                <span class='ml-1'>" . htmlspecialchars($Membre['nom']) . "</span>
            </p>
            <p class='text-gray-700 text-sm'>
                <span class='font-semibold'>Adresse :</span> 
                <span class='ml-1'>" . htmlspecialchars($Membre['adresse']) . "</span>
            </p>
        </div>
    </div>
</div>

                <!-- Pied de carte -->
                <div class='mt-4 pt-3 border-t'>
                    <p class='text-center text-xs text-gray-500'>
                        Carte de membre officielle
                    </p>
                </div>
            </div>
        </body>
        </html>
        ";
    }
}

?>