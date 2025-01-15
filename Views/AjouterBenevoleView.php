<?php
class AjouterBenevoleView {
    function Form() {
        echo "
        <head>
            <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'/>
            <title>Ajouter un Don</title>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <link href='https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css' rel='stylesheet'>
            <link href='../output.css' rel='stylesheet' type='text/css'/>
        </head>
        <body class='bg-gray-50'>
            <div class='ml-80 flex items-center justify-center'>
                <div class='bg-white shadow-lg rounded-lg p-6 w-full max-w-3xl ml-auto mr-40'>
                    <h4 class='text-2xl text-blue-500 font-semibold mb-4 text-gray-800 text-center'>Ajouter un Bénévole</h4>
                    <div class='h-1 bg-blue-500 rounded mb-6'></div>
                    <form action='../Pages/GestionBenevoles.php' method='POST' enctype='multipart/form-data' class='grid grid-cols-2 gap-6'>
                        <div>
                            <label for='id_membre' class='block text-gray-700 font-medium mb-2'>ID Membre</label>
                            <input type='number' name='id_membre' id='id_membre' placeholder='ID Membre' class='w-full border-2 border-gray-100 rounded-lg p-2 shadow-sm focus:ring-blue-500 focus:border-blue-500' required>
                        </div>
                        <div>
                            <label for='domaine_interet' class='block text-gray-700 font-medium mb-2'>Domaine d'Intérêt</label>
                            <input type='text' name='domaine_interet' id='domaine_interet' placeholder='Domaine d Intérêt' class='w-full p-2 border-2 border-gray-100 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500' required>
                        </div>
                        <div>
                            <label for='date_inscription' class='block text-gray-700 font-medium mb-2'>Date d'Inscription</label>
                            <input type='date' name='date_inscription' id='date_inscription' class='w-full p-2 border-2 border-gray-100 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500' required>
                        </div>
                        <div>
                            <label for='id_evenement' class='block text-gray-700 font-medium mb-2'>ID Événement</label>
                            <input type='number' name='id_evenement' id='id_evenement' placeholder='ID Événement' class='w-full p-2 border-2 border-gray-100 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500' required>
                        </div>

                        <div>
                            <label for='disponibilite' class='block text-gray-700 font-medium mb-2'>Disponibilité</label>
                            <input type='text' name='disponibilite' id='disponibilite' placeholder='Disponibilité' class='w-full p-2 border-2 border-gray-100 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500' required>
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
