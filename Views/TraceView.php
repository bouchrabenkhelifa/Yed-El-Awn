<?php
require_once '../Controllers/DonController.php';

class TraceView {

    public function afficherListe($Dons) {
      
        echo "<!DOCTYPE html>
<html lang='fr'>
<head>
    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'/>
    <title>Dons</title>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link href='https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css' rel='stylesheet'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css'>
    <script src='../Js/Script.js'></script>
</head>
<body class='bg-gray-50 flex flex-col min-h-screen'>"; // Add flexbox for full height

        echo "<div class='flex-1 p-6'>";  // This will take up the remaining space
        echo "<div class='grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 p-4'>";

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

            echo "<div class='bg-white p-4 rounded-lg shadow-md hover:shadow-lg transition duration-300'>";
            echo "<h3 class='text-xl font-semibold'>" . htmlspecialchars($Don['nom_donneur']) . "</h3>";
            echo "<p class='text-gray-500'>" . htmlspecialchars($Don['date_don']) . "</p>";
            echo "<p class='text-gray-800 font-bold'>" . htmlspecialchars($Don['montant']) . " DZD</p>";
            echo "<p class='text-gray-500'>" . htmlspecialchars($Don['methode_payement']) . "</p>";
            echo "<p class='text-gray-500'>" . htmlspecialchars($Don['type_don']) . "</p>";
            echo "<div class='mt-2'>";
 
            echo "<span class='$statutClass'>" . htmlspecialchars($Don['statut']) . "</span>";
            echo "</div>";
            echo "</div>";
        }

        echo "</div>"; 
        echo "</div>"; 



        echo "</body>";
        echo "</html>";
    }
}

?>
