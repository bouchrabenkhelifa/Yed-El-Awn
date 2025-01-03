<?php
require_once  '../Controllers/MembresController.php';


class MembresView {

    public function afficherListeMembres($Membres) {
        echo"<head>";
            header('Content-Type: text/html; charset=UTF-8');
            echo"<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'/>";
            echo"<title>Membres</title>";
            echo"<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
            echo "<link href='https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css' rel='stylesheet'>"  ;       
            echo "<link href='../output.css' rel='stylesheet' type='text/css'/>";
            echo "  <script src='../Js/Script.js'></script>";
        echo "</head>";
        echo "<div class='w-3/4 float-right mr-12  p-6'>
            <div class='p-4 mb-4'>
           <select id='Filter' class='border-2 border-blue-500 text-[#344054] p-1 px-3 text-sm rounded-lg'>
                    <option value=''>Filtrer par nom                   
                    <img src='../Images/Filter.png' id='Filter' alt='Filtrer' class='inline-block mr-1 w-4 h-2'> 
                    </option>
                    <option value='Alger'>Alger</option>
                    <option value='Oran'>Oran</option>
                    <option value='Constantine'>Constantine</option>
                </select>
                 <a href ='../Pages/GestionMembres.php'>
                <button  class='bg-blue-500 border-2 border-blue-500 text-white p-1 px-3 text-sm rounded-lg'>
                    <img src='../Images/Add.png' alt='Ajouter' class='inline-block mr-1 w-4 h-4'> Ajouter un membre
                </button> </a>
            </div>

            <div class='p-4'>
                <table class='min-w-full border-collapse'>
                    <thead>
                        <tr class='bg-gray-200'>
                       
                            <td class='px-4 py-2 text-left flex text-gray-500'>Nom       
                                <img id='triermembre' src='../Images/Tri.png' alt='tri' class='w-3 h-4 ml-2 mt-1 cursor-pointer'>
                            </td>
                            <td class='px-4 py-2 text-left text-gray-500'>Adresse</td>
                            <td class='px-4 py-2 text-left text-gray-500'>Email</td>
                            <td class='px-4 py-2 text-left text-gray-500'>Télépdone</td>
                            <td class='px-4 py-2 text-left text-gray-500'>Gestion</td>
                        </tr>
                    </thead>
                    <tbody>";
                    foreach ($Membres as $Membre) {
                        echo "<tr class='bg-white'>
                            <td class='px-4 py-2'>" . htmlspecialchars($Membre['nom']) . " </td>
                            <td class='px-4 py-2'>" . htmlspecialchars($Membre['adresse']) . "</td>
                            <td class='px-4 py-2'>" . htmlspecialchars($Membre['email']) . "</td>
                            <td class='px-4 py-2'>" . htmlspecialchars($Membre['telephone']) . "</td>
                            <td class='px-4 py-2 flex space-x-2'>
                    <button data-id=".$Membre['id'].">
                      <img src='../Images/Trash.png' alt='Supprimer' class='cursor-pointer'>
                    </button>
                     <a href='../Pages/ModifierMembre.php?id=" . htmlspecialchars($Membre['id']) . "'>
                                  <img src='../Images/Modify.png' alt='Modifier' class='w-5 h-5 mt-2 cursor-pointer'>
                     </a>                     </td>
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
