<?php
require_once  '../Controllers/BenevoleController.php';


class BenevoleView {

    public function afficherListeBenevole($Benevoles) {
        echo"<head>";
            echo"<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'/>";
            echo"<title>Benevoles</title>";
            echo"<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
            echo "<link href='https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css' rel='stylesheet'>"  ;       
            echo "<link href='../output.css' rel='stylesheet' type='text/css'/>";
            echo "  <script src='../Js/Script.js'></script>";
        echo "</head>";
        echo" <body class='bg-gray-50 '>";

        echo "<div class='w-3/4 float-right mr-12  p-6'>
            <div class='p-4 mb-4'>
           
                 <a href ='../Pages/GestionBenevole.php'>
                <button  class='bg-blue-500 border-2 border-blue-500 text-white p-1 px-3 text-sm rounded-lg'>
                    <img src='../Images/Add.png' alt='Ajouter' class='inline-block mr-1 w-4 h-4'> Ajouter un bénévole
                </button> </a>
            </div>

            <div class='p-4'>
                <table class='min-w-full border-collapse'>
                    <thead>
                        <tr class='bg-gray-200'>
                            <td class='px-4 py-2 text-left  text-gray-500'>Logo     
                            </td>
                            <td class='px-4 py-2 text-left flex text-gray-500'>Nom du bénévole </td>
                            <td class='px-4 py-2 text-left text-gray-500'>Evenement</td>
                            <td class='px-4 py-2 flex text-left text-gray-500'>Domainde d'interet  </td>
                            <td class='px-4 py-2 text-left text-gray-500'>Disponibité</td>
                            <td class='px-4 py-2 text-left text-gray-500'>Télépdone</td>
                        </tr>
                    </thead>
                    <tbody>";
                    foreach ($Benevoles as $Benevole) {
                        echo "<tr class='bg-white'>
                            <td class='px-4 py-2'>" . htmlspecialchars($Benevole['nom']) . " </td>
                            <td class='px-4 py-2'>" . htmlspecialchars($Benevole['title']) . "</td>
                            <td class='px-4 py-2'>" . htmlspecialchars($Benevole['domaine_interet']) . "</td>
                            <td class='px-4 py-2'>" . htmlspecialchars($Benevole['disponibilite']) . "</td>
                            <td class='px-4 py-2'>" . htmlspecialchars($Benevole['telephone']) . "</td>
                            <td class='px-4 py-2 flex space-x-2'>
                    <button >
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
        echo" </body>";

    }
}

?>
