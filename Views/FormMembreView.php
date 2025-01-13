<?php

class FormMembreView {

    public function afficher() {
        echo "<!DOCTYPE html>";
        echo "<html lang='en'>";
        echo "<head>";
        echo "    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'/>";
        echo "    <title>Menu</title>";
        echo "    <meta name='viewport' content='width=device-width, initial-scale=1.0'>";
        echo "    <link href='https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css' rel='stylesheet'>";
        echo "    <link href='../output.css' rel='stylesheet' type='text/css'/>";
        echo "    <script src='../Js/Script.js'></script>";
        echo "</head>";
        echo "<body class='bg-white font-sans'>

        <div class='max-w-4xl mx-auto mt-12 p-6 bg-gray-200 from-indigo-400 to-blue-400 rounded-xl shadow-xl'>
            <h2 class='text-2xl font-semibold text-center text-indigo-600 mb-6'>Devenir Membre dans YAD EL AWN</h2>
            <form action='../Pages/Adhesion.php' method='POST' enctype='multipart/form-data'>
                <div class='grid grid-cols-1 md:grid-cols-2 gap-4 mb-6'>
                    <div>
                        <label for='nom' class='block text-sm font-medium text-black'>Nom</label>
                        <input type='text' id='nom' name='nom' required class='w-full px-3 py-2 mt-1 bg-white text-gray-700 rounded-lg shadow-sm focus:ring-2 focus:ring-indigo-300'>
                    </div>

    
                    <div>
                        <label for='telephone' class='block text-sm font-medium text-black'>Téléphone</label>
                        <input type='tel' id='telephone' name='telephone' required class='w-full px-3 py-2 mt-1 bg-white text-gray-700 rounded-lg shadow-sm focus:ring-2 focus:ring-indigo-300'>
                    </div>
                </div>

                <div class='mb-4'>
                    <label for='adresse' class='block text-sm font-medium text-black'>Adresse</label>
                    <input type='text' id='adresse' name='adresse' required class='w-full px-3 py-2 mt-1 bg-white text-gray-700 rounded-lg shadow-sm focus:ring-2 focus:ring-indigo-300'>
                </div>

                <div class='mb-4'>
                    <label for='photo' class='block text-sm font-medium text-black'>Photo</label>
                    <input type='file' id='photo' name='photo' accept='image/*' required class='w-full px-3 py-2 mt-1 bg-white text-gray-700 rounded-lg shadow-sm focus:ring-2 focus:ring-indigo-300'>
                </div>

                <div class='mb-4'>
                    <label for='carteidentite' class='block text-sm font-medium text-black'>Pièce d'identité</label>
                    <input type='file' id='carteidentite' name='carteidentite' accept='image/*, application/pdf' required class='w-full px-3 py-2 mt-1 bg-white text-gray-700 rounded-lg shadow-sm focus:ring-2 focus:ring-indigo-300'>
                </div>

                <div class='mb-6'>
                    <label for='recu' class='block text-sm font-medium text-black'>Reçu de paiement</label>
                    <input type='file' id='recu' name='recu' accept='image/*, application/pdf' required class='w-full px-3 py-2 mt-1 bg-white text-gray-700 rounded-lg shadow-sm focus:ring-2 focus:ring-indigo-300'>
                </div>

                <div class='mt-4 text-center'>
                    <button type='submit' class='px-6 py-2 bg-indigo-600 text-white text-lg font-semibold rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 transition duration-200 ease-in-out'>
                        Soumettre
                    </button>
                </div>
            </form>
        </div>";
        echo "</body>";
        echo "</html>";
    }
}
?>
