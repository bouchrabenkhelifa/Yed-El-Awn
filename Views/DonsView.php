<?php
require_once '../Controllers/DonController.php';

class DonsView {

    public function afficherListeDons($Dons) {
        echo "<head>";
        header('Content-Type: text/html; charset=UTF-8');
        echo "<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'/>";
        echo "<title>Dons</title>";
        echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
        echo "<link href='https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css' rel='stylesheet'>";
        echo "<link href='../output.css' rel='stylesheet' type='text/css'/>";
        echo "<script src='../Js/Script.js'></script>";
        echo "</head>";
        echo "<div class='w-3/4 float-right mr-12 p-6'>
            <div class='p-4 mb-4'>
                 <a href ='../Pages/GestionPartenaires.php'>
                <button class='bg-blue-500 border-2 border-blue-500 text-white p-1 px-3 text-sm rounded-lg'>
                    <img src='../Images/Add.png' alt='Ajouter' class='inline-block mr-1 w-4 h-4'> Ajouter un don
                </button>
                </a>
            </div>

            <div class='p-4'>
                <table class='min-w-full border-collapse'>
                    <thead>
                        <tr class='bg-gray-200'>
                            <td class='px-4 py-2 text-left text-gray-500'>Nom du donneur</td>
                            <td class='px-4 py-2 text-left text-gray-500'>Date</td>
                            <td class='px-4 py-2 text-left text-gray-500'>Montant</td>
                            <td class='px-4 py-2 text-left text-gray-500'>Méthode de paiement</td>
                            <td class='px-4 py-2 text-left text-gray-500'>Type de don</td>
                            <td class='px-4 py-2 text-left text-gray-500'>Statut</td>
                        </tr>
                    </thead>
                    <tbody>";
                    foreach ($Dons as $Don) {
                    $statutClass = '';
                        switch ($Don['statut']) {
                            case 'Accepté':
                                $statutClass = 'bg-green-500 text-white px-5 py-1 rounded-full';
                                break;
                            case 'Refusé':
                                $statutClass = 'bg-red-500 text-white px-6 py-1 rounded-full';
                                break;
                            case 'En attente':
                                $statutClass = 'bg-gray-500 text-white px-3 py-1 rounded-full';
                                break;
                        }

                        echo "<tr class='bg-white mt-4'>
                            <td class='px-4 py-2'>" . htmlspecialchars($Don['nom_donneur']) . "</td>
                            <td class='px-4 py-2'>" . htmlspecialchars($Don['date_don']) . "</td>
                            <td class='px-4 py-2'>" . htmlspecialchars($Don['montant']) . "</td>
                            <td class='px-4 py-2'>" . htmlspecialchars($Don['methode_payement']) . "</td>
                            <td class='px-4 py-2'>" . htmlspecialchars($Don['type_don']) . "</td>
                            <td class='px-4 py-2'>
                              <a href='../Pages/DonDetails.php?id=" . htmlspecialchars($Don['id_don']) . "'>
                                 <span class='$statutClass'>" . htmlspecialchars($Don['statut']) . "</span>
                            </td>
                        </tr>";
                    }
                echo "</tbody>
                </table>
            </div>
        </div>";
    }
}

?>
