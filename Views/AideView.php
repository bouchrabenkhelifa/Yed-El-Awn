<?php
require_once  '../Controllers/AideController.php';


class AideView {

    public function afficherListeAide($Aides) {
        echo"<head>";
            echo"<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'/>";
            echo"<title>Demandes d'aide</title>";
            echo"<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
            echo "<link href='https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css' rel='stylesheet'>"  ;       
            echo "<link href='../output.css' rel='stylesheet' type='text/css'/>";
            echo "  <script src='../Js/Script.js'></script>";
        echo "</head>";
        echo" <body class='bg-gray-50 '>";

        echo "<div class='w-3/4 float-right mr-12  p-6'>
            <div class='p-4 mb-4'>
        
                 <a href ='http://localhost/projets/YadElAwn/Controllers/GestionPartenaires.php'>
                <button  class='bg-blue-500 border-2 border-blue-500 text-white p-1 px-3 text-sm rounded-lg'>
                    <img src='../Images/Add.png' alt='Ajouter' class='inline-block mr-1 w-4 h-4'> Ajouter une demande d'aide
                </button> </a>
            </div>

            <div class='p-4'>
                <table class='min-w-full border-collapse'>
                    <thead>
                        <tr class='bg-gray-200'>
                            <td class='px-4 py-2 text-left  text-gray-500'>Nom du demandeur </td>
                            <td class='px-4 py-2 text-left  text-gray-500'>Date de la demande </td>
                            <td class='px-4 py-2 text-left text-gray-500'>Type d'aide demandé</td>
                            <td class='px-4 py-2 text-left text-gray-500'>Détails de la demande</td>

                            </tr>
                    </thead>
                    <tbody>";
                    foreach ($Aides as $Aide) {
                        echo "<tr class='bg-white'>
                            <td class='px-4 py-2'>" . htmlspecialchars($Aide['nom_demandeur']) . " </td>
                            <td class='px-4 py-2'>" . htmlspecialchars($Aide['date_demande']) . " </td>
                            <td class='px-4 py-2'>" . htmlspecialchars($Aide['type_aide']) . " </td> 
                            <td class='px-4 py-2 text-left text-blue-500'> <a href =''> ici </a> </td>
       
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
