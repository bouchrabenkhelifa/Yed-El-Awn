<?php
require_once '../Controllers/ParametresController.php';
class ParametresView {
    public function afficher($Diapos) {
        echo "<!DOCTYPE html>";
        echo "<html lang='en'>";
        echo "<head>";
        echo "    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'/>";
        echo "    <title>Parametres</title>";
        echo "    <meta name='viewport' content='width=device-width, initial-scale=1.0'>";
        echo "    <link href='https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css' rel='stylesheet'>";
        echo "    <link href='../output.css' rel='stylesheet' type='text/css'/>";
        echo "    <script src='../Js/Script.js'></script>";
        echo "</head>";
        echo "<body class='bg-gray-100'>";
        
        echo "<div class='ml-80'>"; 
        echo "    <div class='p-4'>";
        echo "        <h1 class='text-xl font-semibold text-gray-800 mb-4'>Gestion des Diaporamas</h1>";
        
        echo "        <div class='grid grid-cols-3 gap-10'>";
        
        foreach ($Diapos as $diapo) {
            echo "<div class='w-60 bg-white rounded shadow-sm p-2'>";
            echo "    <img src='" . htmlspecialchars($diapo['photo']) . "' class='w-full h-32 object-cover rounded mb-2' alt='Diaporama'>";
            echo "    <h4 class='text-sm font-medium mb-2 truncate'>" . htmlspecialchars($diapo['title']) . "</h4>";
            echo "    <div class='flex gap-1'>";
            echo "        <button onclick='ouvrirModifier(" . $diapo['id'] . ", \"" . htmlspecialchars($diapo['title']) . "\", \"" . htmlspecialchars($diapo['photo']) . "\")' ";
            echo "                class='flex-1 bg-blue-500 hover:bg-blue-600 text-white text-xs py-1 px-2 rounded'>";
            echo "            Modifier";
            echo "        </button>";
            echo "        <button href='../Pages/Parametres.php?action=supprimer&id=" . htmlspecialchars($diapo['id']) . "' onclick='confirmerSuppression(" . $diapo['id'] . ")' ";
            echo "                class='flex-1 bg-red-500 hover:bg-red-600 text-white text-xs py-1 px-2 rounded'>";
            echo "            Supprimer";
            echo "        </button>";
            echo "    </div>";
            echo "</div>";
        }
        
        echo "        </div>";
        echo "    </div>";
        echo "</div>";

        echo "<script>
            function confirmerSuppression(id) {
                if(confirm('Êtes-vous sûr de vouloir supprimer ce diaporama ?')) {
                    window.location.href = 'parametres.php?supprimer=' + id;
                }
            }
            
            function ouvrirModifier(id, title, photo) {
                console.log('Modifier:', id, title, photo);
            }
        </script>";
        
        echo "</body>";
        echo "</html>";
    }
}
?>