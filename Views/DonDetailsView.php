<?php
class DonDetailsView {
    public function afficher($Don) {
        echo "<!DOCTYPE html>";
        echo "<html lang='fr'>";
        echo "<head>";
        echo "<meta charset='UTF-8'>";
        echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
        echo "<title>Détails du Don</title>";
        echo "<link href='https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css' rel='stylesheet'>";
        echo "<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>";
        echo "</head>";
        echo "<body class='bg-gray-50'>";

        echo "<div class='max-w-3xl mx-80 py-28 px-4'>";
        

        echo "<div class='bg-white rounded-xl shadow-lg p-6'>";

        echo "<div class='border-b border-gray-200 pb-4'>";
        echo "<h1 class='text-2xl font-bold text-gray-800'>Don #" . htmlspecialchars($Don['id_don']) . "</h1>";
        echo "<p class='text-sm text-gray-500 mt-1'>Créé le " . htmlspecialchars($Don['date_don']) . "</p>";
        echo "</div>";

        echo "<div class='grid grid-cols-1 md:grid-cols-2 gap-6 mt-6'>";

        echo "<div class='space-y-4'>";
        echo "<h2 class='text-lg font-semibold text-gray-700'>Informations du donneur</h2>";
        echo "<div class='bg-gray-50 rounded-lg p-4 space-y-2'>";
        echo "<div class='flex items-center'>";
        echo "<i class='bx bx-user text-blue-500 mr-2'></i>";
        echo "<p><span class='text-gray-600'>Nom:</span> <span class='font-medium'>" . htmlspecialchars($Don['nom_donneur']) . "</span></p>";
        echo "</div>";
        echo "<div class='flex items-center'>";
        echo "<span class='px-3 py-1 rounded-full text-sm font-semibold " . 
             ($Don['statut'] == 'Accepté' ? 'bg-green-100 text-green-800' : 
             ($Don['statut'] == 'En attente' ? 'bg-yellow-100 text-yellow-800' : 
             'bg-red-100 text-red-800')) . "'>" . 
             htmlspecialchars($Don['statut']) . "</span>";
        echo "</div>";
        echo "</div>";
        echo "</div>";

        echo "<div class='space-y-4'>";
        echo "<h2 class='text-lg font-semibold text-gray-700'>Détails du don</h2>";
        echo "<div class='bg-gray-50 rounded-lg p-4 space-y-3'>";

        echo "<div class='flex items-center'>";
        echo "<i class='bx bx-money text-blue-500 mr-2'></i>";
        echo "<p><span class='text-gray-600'>Montant:</span> <span class='font-medium text-blue-500'>" . number_format($Don['montant'], 2, ',', ' ') . " DA</span></p>";
        echo "</div>";

        echo "<div class='flex items-center'>";
        echo "<i class='bx bx-category text-blue-500 mr-2'></i>";
        echo "<p><span class='text-gray-600'>Type:</span> <span class='font-medium'>" . htmlspecialchars($Don['type_don']) . "</span></p>";
        echo "</div>";

        echo "<div class='flex items-center'>";
        echo "<i class='bx bx-credit-card text-blue-500 mr-2'></i>";
        echo "<p><span class='text-gray-600'>Paiement:</span> <span class='font-medium'>" . htmlspecialchars($Don['methode_payement']) . "</span></p>";
        echo "</div>";

        echo "</div>";
        echo "</div>";

        echo "<div class='col-span-1 md:col-span-2 mt-4'>";

       

        echo "<div class='flex items-center'>";
        echo "<i class='bx bx-receipt text-blue-500 mr-2'></i>";
        echo "<span class='text-gray-600'>Reçu:</span> ";
        echo "<img src='" . htmlspecialchars($Don['recu']) . "' alt='Reçu' class='w-90 h-60 object-contain ml-2'>";
        echo "</div>";
        echo "</div>";

        echo "</div>"; 

        echo "</div>"; 
        echo "</div>"; 
        echo "</body>";
        echo "</html>";
    }
}
?>
