<?php

class BeneficierView {
    public function afficher($Membres) {
       
        echo "<head>";
        echo "<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'/>";
        echo "<title>Membres</title>";
        echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
        echo "<link href='https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css' rel='stylesheet'>";
        echo "<link href='../output.css' rel='stylesheet' type='text/css'/>";
        echo "<script src='../Js/Script.js'></script>";
        echo "</head>";
        echo "<body class='bg-gray-50'>";

        echo "<div class='mt-20 p-4'>";
        echo "<table class='min-w-full border-collapse border-2 border-yellow-500'>";  

        echo "<thead class='bg-yellow-300'>";  
        echo "<tr class='text-gray-500'>";
        echo "<td class='px-6 py-3 text-left'> Nom ";
        echo "</td>";
        echo "<td class='px-6 py-3 text-left'>Téléphone</td>";
        echo "<td class='px-6 py-3 text-left'>Adresse</td>";
        echo "</tr>";
        echo "</thead>";
        
        echo "<tbody>";
        foreach ($Membres as $Membre) {
            echo "<tr class='bg-white'>";
            echo "<td class='px-6 py-3 border-t border-gray-200'>" . htmlspecialchars($Membre['nom']) . "</td>";
            echo "<td class='px-6 py-3 border-t border-gray-200'>" . htmlspecialchars($Membre['telephone']) . "</td>";         
            echo "<td class='px-6 py-3 border-t border-gray-200'>" . htmlspecialchars($Membre['adresse']) . "</td>";         
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";

        echo "</div>";
        echo "</div>";
        echo "</body>";
    }
}

?>