<?php
require_once  '../Controllers/PartenairesController.php';


class PartenairesView {

    public function afficherListePartenaires($partenaires) {
        echo"<head>";
            echo"<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'/>";
            echo"<title>Partenaires</title>";
            echo"<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
            echo "<link href='https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css' rel='stylesheet'>"  ;       
            echo "<link href='../output.css' rel='stylesheet' type='text/css'/>";
            echo "  <script src='../Js/Script.js'></script>";
        echo "</head>";
        echo "<div class='w-3/4 float-right mr-12  p-6'>
            <div class='p-4 mb-4'>
           <select id='villeFilter' class='border-2 border-blue-500 text-[#344054] p-1 px-3 text-sm rounded-lg'>
                    <option value=''>Filtrer par ville                 
                    <img src='../Images/Filter.png' id='villeFilter' alt='Filtrer' class='inline-block mr-1 w-4 h-2'> 
                    </option>
                    <option value='Alger'>Alger</option>
                    <option value='Oran'>Oran</option>
                    <option value='Constantine'>Constantine</option>
                </select>
                 <a href ='../Pages/GestionPartenaires.php'>
                <button  class='bg-blue-500 border-2 border-blue-500 text-white p-1 px-3 text-sm rounded-lg'>
                    <img src='../Images/Add.png' alt='Ajouter' class='inline-block mr-1 w-4 h-4'> Ajouter un partenaire
                </button> </a>
            </div>

            <div class='p-4'>
                <table class='min-w-full border-collapse'>
                    <thead>
                        <tr class='bg-gray-200'>
                            <td class='px-4 py-2 text-left  text-gray-500'>Logo     
                            </td>
                            <td class='px-4 py-2 text-left flex text-gray-500'>Nom       
                                <img id='triernom' src='../Images/Tri.png' alt='Modifier' class='w-3 h-4 ml-2 mt-1 cursor-pointer'>
                            </td>
                            <td class='px-4 py-2 text-left text-gray-500'>Catégorie</td>
                            <td class='px-4 py-2 flex text-left text-gray-500'>Ville   
                                 <img id='trierville' src='../Images/Tri.png' alt='Modifier' class='w-3 h-4 ml-2 mt-1 cursor-pointer'>
                            </td>
                            <td class='px-4 py-2 text-left text-gray-500'>Email</td>
                            <td class='px-4 py-2 text-left text-gray-500'>Télépdone</td>
                            <td class='px-4 py-2 text-left text-gray-500'>Gestion</td>
                        </tr>
                    </thead>
                    <tbody>";
                    foreach ($partenaires as $partenaire) {
                        echo "<tr class='bg-white'>
                           <td class='px-4 py-2'>
                                <img src='" . htmlspecialchars($partenaire['logo']) . "' alt='Logo de " . htmlspecialchars($partenaire['nom']) . "' class='w-12 h-12 border-gray-400 rounded-full'>
                            </td>
                            <td class='px-4 py-2'>" . htmlspecialchars($partenaire['nom']) . " </td>
                            <td class='px-4 py-2'>" . htmlspecialchars($partenaire['idcategorie']) . "</td>
                            <td class='px-4 py-2'>" . htmlspecialchars($partenaire['ville']) . "</td>
                            <td class='px-4 py-2'>" . htmlspecialchars($partenaire['email']) . "</td>
                            <td class='px-4 py-2'>" . htmlspecialchars($partenaire['telephone']) . "</td>
                            <td class='px-4 py-2 flex space-x-2'>
                              <button idpartenaire='".$partenaire['idpartenaire']."'>
                                  <img src='../Images/Trash.png' alt='Supprimer' class='cursor-pointer'>
                              </button>
                 <img src='../Images/Modify.png' alt='Modifier' class='w-5 h-5 mt-2 cursor-pointer'>
                   </td>
                 </tr>";
                    }
                echo "</tbody>
                </table>
            </div>
        </div>
        ";
    }
}

?>
