<?php
require_once  '../Controllers/OffresController.php';


class OffresView {

    public function afficherListePartenaires($partenaires) {
        echo"<head>";
            header('Content-Type: text/html; charset=UTF-8');
            echo"<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'/>";
            echo"<title>Partenaires</title>";
            echo"<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
            echo "<link href='https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css' rel='stylesheet'>"  ;       
            echo "<link href='../output.css' rel='stylesheet' type='text/css'/>";
            echo "  <script src='../Js/Script.js'></script>";
        echo "</head>";
        echo "<div class='w-3/4 float-right mr-12  p-6'>
            <div class='p-4 mb-4'>
        
                 <a href ='http://localhost/projets/YadElAwn/Controllers/GestionPartenaires.php'>
                <button  class='bg-blue-500 border-2 border-blue-500 text-white p-1 px-3 text-sm rounded-lg'>
                    <img src='../Images/Add.png' alt='Ajouter' class='inline-block mr-1 w-4 h-4'> Ajouter un offre
                </button> </a>
            </div>

            <div class='p-4'>
                <table class='min-w-full border-collapse'>
                    <thead>
                        <tr class='bg-gray-200'>
                            <td class='px-4 py-2 text-left  text-gray-500'>Logo </td>
                            <td class='px-4 py-2 text-left  text-gray-500'>L'etablissement </td>
                            <td class='px-4 py-2 text-left text-gray-500'>Offres</td>
                            </tr>
                    </thead>
                    <tbody>";
                    foreach ($partenaires as $partenaire) {
                        echo "<tr class='bg-white'>
                           <td class='px-4 py-2'>
                                <img src='" . htmlspecialchars($partenaire['logo']) . "' alt='Logo de " . htmlspecialchars($partenaire['nom']) . "' class='w-12 h-12 border-gray-400 rounded-full'>
                            </td>
                            <td class='px-4 py-2'>" . htmlspecialchars($partenaire['nom']) . " </td>
                            <td class='px-4 py-2 text-blue-500'>  <a href ='' >Consulter</a></td>
        
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
