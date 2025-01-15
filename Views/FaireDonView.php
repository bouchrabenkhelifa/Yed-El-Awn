<?php

class FaireDonView {
    public function Form() {
        echo "<!DOCTYPE html>";
        echo "<html lang='fr'>";
        echo "<head>";
        echo "    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'/>";
        echo "    <title>Ajouter un Don - YAD EL AWN</title>";
        echo "    <meta name='viewport' content='width=device-width, initial-scale=1.0'>";
        echo "    <link href='https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css' rel='stylesheet'>";
        echo "    <link href='../output.css' rel='stylesheet' type='text/css'/>";
        echo "</head>";
        echo "<body class='bg-white font-sans'>";
        echo "<div class='max-w-4xl mx-auto mt-12 p-6 bg-gray-200 rounded-xl shadow-xl'>";
        echo "    <h2 class='text-2xl font-semibold text-center text-indigo-600 mb-6'>Formulaire d'Ajout de Don</h2>";
        echo "    <form action='../Pages/FaireDon.php' method='POST' enctype='multipart/form-data'>";
        
        // Nom du donneur
        echo "    <div class='mb-4'>";
        echo "        <label for='nom_donneur' class='block text-sm font-medium text-gray-700'>Nom du donneur</label>";
        echo "        <input type='text' id='nom_donneur' name='nom_donneur' placeholder='Nom du donneur' required 
                        class='mt-1 block w-full rounded-md border-gray-300 shadow-sm p-2 focus:border-indigo-500 focus:ring-indigo-500'>";
        echo "    </div>";
        
        // Montant
        echo "    <div class='mb-4'>";
        echo "        <label for='montant' class='block text-sm font-medium text-gray-700'>Montant</label>";
        echo "        <input type='number' id='montant' name='montant' placeholder='Montant du don' required 
                        class='mt-1 block w-full rounded-md border-gray-300 shadow-sm p-2 focus:border-indigo-500 focus:ring-indigo-500'>";
        echo "    </div>";

        // Reçu
        echo "    <div class='mb-4'>";
        echo "        <label for='recu' class='block text-sm font-medium text-gray-700'>Reçu (image)</label>";
        echo "        <input type='file' id='recu' name='recu' accept='image/*' required 
                        class='mt-1 block w-full rounded-md border-gray-300 shadow-sm p-2 focus:border-indigo-500 focus:ring-indigo-500'>";
        echo "    </div>";

        // Méthode de paiement
        echo "    <div class='mb-4'>";
        echo "        <label for='methode_payement' class='block text-sm font-medium text-gray-700'>Méthode de paiement</label>";
        echo "        <select id='methode_payement' name='methode_payement' required 
                        class='mt-1 block w-full rounded-md border-gray-300 shadow-sm p-2 focus:border-indigo-500 focus:ring-indigo-500'>";
        echo "            <option value='' disabled selected>Choisir une méthode</option>";
        echo "            <option value='credit_card'>Carte de crédit</option>";
        echo "            <option value='paypal'>PayPal</option>";
        echo "            <option value='bank_transfer'>Virement bancaire</option>";
        echo "        </select>";
        echo "    </div>";

        // Date du don
        echo "    <div class='mb-4'>";
        echo "        <label for='date_don' class='block text-sm font-medium text-gray-700'>Date du don</label>";
        echo "        <input type='date' id='date_don' name='date_don' required 
                        class='mt-1 block w-full rounded-md border-gray-300 shadow-sm p-2 focus:border-indigo-500 focus:ring-indigo-500'>";
        echo "    </div>";

        // Type de don
        echo "    <div class='mb-4'>";
        echo "        <label for='type_don' class='block text-sm font-medium text-gray-700'>Type de don</label>";
        echo "        <select id='type_don' name='type_don' required 
                        class='mt-1 block w-full rounded-md border-gray-300 shadow-sm p-2 focus:border-indigo-500 focus:ring-indigo-500'>";
        echo "            <option value='' disabled selected>Choisir un type</option>";
        echo "            <option value='one_time'>Unique</option>";
        echo "            <option value='recurring'>Récurrent</option>";
        echo "        </select>";
        echo "    </div>
        <div>
        <label for='statut' class='block text-gray-700 font-medium mb-2'>Statut</label>
 <select name='statut' id='statut' class='w-full border-2 border-gray-100 rounded-lg shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500' required>
            <option value='' disabled selected>Choisir un type</option>
            <option value='En attente'>En Attente</option>
        </select>                        </div>";

        // Bouton de soumission
        echo "    <div class='flex justify-center'>";
        echo "        <button type='submit' class='bg-indigo-600 text-white px-6 py-2 rounded-md hover:bg-indigo-700 
                          focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500'>
                          Ajouter le Don
                      </button>";
        echo "    </div>";

        echo "    </form>";
        echo "</div>";
        echo "</body>";
        echo "</html>";
    }
}

?>
