<?php
require_once '../Configuration/Database.php';

class AjouterOffreView {
    function Form() {
        echo "
        <head>
            <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'/>
            <title>Ajouter une offre</title>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <link href='https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css' rel='stylesheet'>       
            <link href='../output.css' rel='stylesheet' type='text/css'/>
        </head>
                <body class='bg-gray-50 '>

            <div class='  ml-80 flex items-center justify-center'>
                <div class='bg-white shadow-lg rounded-lg p-6 w-full max-w-3xl ml-auto mr-40'>
                    <h4 class='text-2xl text-blue-500 font-semibold mb-4 text-gray-800 text-center'>Ajouter une offre</h4>
                    <div class='h-1 bg-blue-500 rounded mb-6'></div>
                    <form action='../Pages/GestionOffre.php' method='POST' enctype='multipart/form-data' class='grid grid-cols-2 gap-6'>
                        <div class='col-span-2'>
                            <label for='titre' class='block text-gray-700 font-medium mb-2'>Titre</label>
                            <input type='text' name='titre' id='titre' placeholder='Titre de loffre' class='w-full border-2 border-gray-100 rounded-lg p-2 shadow-sm focus:ring-blue-500 focus:border-blue-500' required>
                        </div>
                
                        <div class='col-span-2'>
                            <label for='description' class='block text-gray-700 font-medium mb-2'>Description</label>
                            <input type='text' name='description' id='description' placeholder='Description' class='w-full border-2 border-gray-100 p-2 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500' required>
                        </div>
 


  <div class='col-span-2'>
  <label for='idpartenaire' class='block text-gray-700 font-medium mb-2'>Partenaire</label>
  <select name='idpartenaire' id='idpartenaire' class='w-full border-2 border-gray-100 p-2 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500' required>
      <option value='' disabled selected>Sélectionnez un partenaire</option> ";
      
          $database = new Database();
          $db = $database->getConnection();
          $query = "SELECT idpartenaire, nom FROM partenaire";
          $stmt = $db->prepare($query);
          $stmt->execute(); // Exécution de la requête
          while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
              $id_partenaire = htmlspecialchars($row['idpartenaire']);
              $nom = htmlspecialchars($row['nom']);
              // Affichage de l'option dans la liste déroulante
              echo "<option value='$id_partenaire'>$nom</option>";
          }

 echo" </select>
</div>


                          <div>
                            <label for='datedebut' class='block text-gray-700 font-medium mb-2'>Date de debut de l'offre</label>
                            <input type='date' name='datedebut' id='datedebut' class='w-full p-2 border-2 border-gray-100 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500' required>
                        </div>   <div>
                            <label for='datefin' class='block text-gray-700 font-medium mb-2'>Date fin de l'offre</label>
                            <input type='date' name='datefin' id='datefin' class='w-full p-2 border-2 border-gray-100 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500' required>
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






