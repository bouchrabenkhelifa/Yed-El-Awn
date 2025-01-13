<?php

class DemandeAideView {
    
    public function afficher() {
        echo "<!DOCTYPE html>";
        echo "<html lang='fr'>";
        echo "<head>";
        echo "    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'/>";
        echo "    <title>Demande d'aide - YAD EL AWN</title>";
        echo "    <meta name='viewport' content='width=device-width, initial-scale=1.0'>";
        echo "    <link href='https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css' rel='stylesheet'>";
        echo "    <link href='../output.css' rel='stylesheet' type='text/css'/>";
        echo "    <script src='../Js/Script.js'></script>";
        echo "</head>";
        echo "<body class='bg-white font-sans'>";
        
        echo "<div class='max-w-4xl mx-auto mt-12 p-6 bg-gray-200 rounded-xl shadow-xl'>";
        echo "    <h2 class='text-2xl font-semibold text-center text-indigo-600 mb-6'>Formulaire de Demande d'Aide</h2>";
        echo "<form action='../Pages/DemandeAide.php' method='POST' enctype='multipart/form-data'>";
        echo "    <div class='mb-4'>";
        echo "        <label for='nom_demandeur' class='block text-sm font-medium text-gray-700'>Nom du demandeur</label>";
       echo" <input type='text' id='nom_demandeur' name='nom_demandeur' required 
        class='mt-1 block w-full rounded-md border-gray-300 shadow-sm p-2 focus:border-indigo-500 focus:ring-indigo-500'>";
        echo "    </div>";
        echo "    <div class='mb-4'>";
        echo "        <label for='date_naissance' class='block text-sm font-medium text-gray-700'>Date de naissance</label>";
        echo "        <input type='date' id='date_naissance' name='date_naissance' required 
                      class='mt-1 block w-full rounded-md border-gray-300 shadow-sm p-2 focus:border-indigo-500 focus:ring-indigo-500'>";
        echo "    </div>";
        echo "    <div class='mb-4'>";
        echo "        <label for='date_demande' class='block text-sm font-medium text-gray-700'>Date de demande</label>";
        echo "        <input type='date' id='date_demande' name='date_demande' required 
                      class='mt-1 block w-full rounded-md border-gray-300 shadow-sm p-2 focus:border-indigo-500 focus:ring-indigo-500'>";
        echo "    </div>";
        
        echo "    <div class='mb-4'>";
        echo "        <label for='type_aide' class='block text-sm font-medium text-gray-700'>Type d'aide</label>";
        echo "        <select id='type_aide' name='type_aide' required 
                      class='mt-1 block w-full rounded-md border-gray-300 shadow-sm p-2 focus:border-indigo-500 focus:ring-indigo-500'>";
        echo "            <option value=''>Sélectionnez un type d'aide</option>";
        echo "            <option value='financière'>Aide financière</option>";
        echo "            <option value='materièlle'>Aide matérielle</option>";
        echo "            <option value='médicale'>Aide médicale</option>";
        echo "            <option value='autre'>Autre</option>";
        echo "        </select>";
        echo "    </div>";
        echo "    <div class='mb-4'>";
        echo "        <label for='description' class='block text-sm font-medium text-gray-700'>Description de la demande</label>";
        echo "        <textarea id='description' name='description' rows='4' required 
                      class='mt-1 block w-full rounded-md border-gray-300 shadow-sm p-2 focus:border-indigo-500 focus:ring-indigo-500'></textarea>";
        echo "    </div>";
        
        
        echo "    <div class='flex justify-center'>";
        echo "        <button type='submit' class='bg-indigo-600 text-white px-6 py-2 rounded-md hover:bg-indigo-700 
                      focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500'>
                      Soumettre la demande
                      </button>";
        echo "    </div>";
        
        echo "    </form>";
        echo "</div>";
        
        echo "</body>";
        echo "</html>";
    }
}
?>