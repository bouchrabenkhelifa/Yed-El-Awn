<?php
class AjouterDonView {
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
                    <h4 class='text-2xl text-blue-500 font-semibold mb-4 text-gray-800 text-center'>Ajouter un Don</h4>
                    <div class='h-1 bg-blue-500 rounded mb-6'></div>
                    <form action='../Pages/GestionDons.php' method='POST' enctype='multipart/form-data' class='grid grid-cols-2 gap-6'>
                        <div class='col-span-2'>
                            <label for='nom_donneur' class='block text-gray-700 font-medium mb-2'>Nom du donneur</label>
                            <input type='text' name='nom_donneur' id='nom_donneur' placeholder='Nom du donneur' class='w-full border-2 border-gray-100 rounded-lg p-2 shadow-sm focus:ring-blue-500 focus:border-blue-500' required>
                        </div>
                        <div>
                            <label for='montant' class='block text-gray-700 font-medium mb-2'>Montant</label>
                            <input type='number' name='montant' id='montant' placeholder='Montant du don' class='w-full p-2 border-2 border-gray-100 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500' required>
                        </div>
                        <div>
                            <label for='recu' class='block text-gray-700 font-medium mb-2'>Reçu</label>
                            <input type='file' name='recu' id='recu' accept='image/*' class='w-full p-2 border-2 border-gray-100 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500' required>
                        </div>
                        <div class='col-span-1'>
                            <label for='methode_payement' class='block text-gray-700 font-medium mb-2'>Méthode de paiement</label>
                            <select name='methode_payement' id='methode_payement' class='w-full border-2 border-gray-100 rounded-lg shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500' required>
                                <option value='' disabled selected>Choisir une méthode</option>
                                <option value='credit_card'>Carte de crédit</option>
                                <option value='paypal'>PayPal</option>
                                <option value='bank_transfer'>Virement bancaire</option>
                            </select>
                        </div><div>
    <label for='date_don' class='block text-gray-700 font-medium mb-2'>Date du don</label>
    <input type='date' name='date_don' id='date_don' class='w-full p-2 border-2 border-gray-100 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500' required>
</div>

                        <div>
                            <label for='type_don' class='block text-gray-700 font-medium mb-2'>Type de don</label>
                            <select name='type_don' id='type_don' class='w-full border-2 border-gray-100 rounded-lg shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500' required>
                                <option value='' disabled selected>Choisir un type</option>
                                <option value='one_time'>Unique</option>
                                <option value='recurring'>Récurrent</option>
                            </select>
                        </div>
                        <div>
                            <label for='statut' class='block text-gray-700 font-medium mb-2'>Statut</label>
                     <select name='statut' id='statut' class='w-full border-2 border-gray-100 rounded-lg shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500' required>
                                <option value='' disabled selected>Choisir un type</option>
                                <option value='En attente'>En Attente</option>
                            </select>                        </div>
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






