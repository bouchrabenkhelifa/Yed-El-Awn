<?php
require_once '../Configuration/Database.php';

class InscrireBenevoleView {
    function Form() {
        echo "<!DOCTYPE html>";
        echo "<html lang='fr'>";
        echo "<head>";
        echo "    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'/>";
        echo "    <title>Ajouter un Bénévole - YAD EL AWN</title>";
        echo "    <meta name='viewport' content='width=device-width, initial-scale=1.0'>";
        echo "    <link href='https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css' rel='stylesheet'>";
        echo "    <link href='../output.css' rel='stylesheet' type='text/css'/>";
        echo "</head>";
        echo "<body class='bg-white font-sans'>";
        echo "<div class='max-w-4xl mx-auto mt-12 p-6 bg-gray-200 rounded-xl shadow-xl'>";
        echo "    <h2 class='text-2xl font-semibold text-center text-indigo-600 mb-6'>Formulaire d'Ajout de Bénévole</h2>";
        echo "    <form action='../Pages/GestionBenevoles.php' method='POST' enctype='multipart/form-data'>";
        
      
        
        // Disponibilité
        echo "    <div class='mb-4'>";
        echo "        <label for='disponibilite' class='block text-sm font-medium text-gray-700'>Disponibilité</label>";
        echo "        <input type='text' id='disponibilite' name='disponibilite' placeholder='Disponibilité' required 
                        class='mt-1 block w-full rounded-md border-gray-300 shadow-sm p-2 focus:border-indigo-500 focus:ring-indigo-500'>";
        echo "    </div>";

        // Domaine d'intérêt
        echo "    <div class='mb-4'>";
        echo "        <label for='domaine_interet' class='block text-sm font-medium text-gray-700'>Domaine d'Intérêt</label>";
        echo "        <input type='text' id='domaine_interet' name='domaine_interet' placeholder='Domaine d intérêt' required 
                        class='mt-1 block w-full rounded-md border-gray-300 shadow-sm p-2 focus:border-indigo-500 focus:ring-indigo-500'>";
        echo "    </div>";

        // Date d'inscription
        echo "    <div class='mb-4'>";
        echo "        <label for='date_inscription' class='block text-sm font-medium text-gray-700'>Date d'Inscription</label>";
        echo "        <input type='date' id='date_inscription' name='date_inscription' required 
                        class='mt-1 block w-full rounded-md border-gray-300 shadow-sm p-2 focus:border-indigo-500 focus:ring-indigo-500'>";
        echo "    </div>";

   

        echo "<div class='mb-4'>";
        echo "    <label for='id_evenement' class='block text-sm font-medium text-gray-700'>Événement</label>";
        echo "    <select id='id_evenement' name='id_evenement' required 
                        class='mt-1 block w-full rounded-md border-gray-300 shadow-sm p-2 focus:border-indigo-500 focus:ring-indigo-500'>";
        echo "        <option value='' disabled selected>Sélectionnez un événement</option>";
        
        
        $database = new Database();
        $db = $database->getConnection();
        $query = "SELECT id_evenement, title FROM evenement";
        $stmt = $db->prepare($query);
        $stmt->execute();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $id_evenement = htmlspecialchars($row['id_evenement']);
            $title = htmlspecialchars($row['title']);
            echo "        <option value='$id_evenement'>$title</option>";
        }
        
        echo "    </select>";
        echo "</div>";
        

        echo "    <div class='flex justify-center'>";
        echo "        <button type='submit' class='bg-indigo-600 text-white px-6 py-2 rounded-md hover:bg-indigo-700 
                          focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500'>
                          Ajouter le Don
                      </button>";
        echo "    </div>";

        echo "    </form>";        echo "</div>";
        echo "</body>";
        echo "</html>";
    }
}
?>