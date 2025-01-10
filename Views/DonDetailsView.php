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

        echo "<div class='max-w-2xl mx-auto py-8 px-4'>";
        echo "<div class='bg-white rounded-lg shadow-md p-6'>";

        // Header section
        echo "<div class='border-b border-gray-200 pb-3 mb-5'>";
        echo "<h1 class='text-xl font-semibold text-gray-800'>Détails du Don #" . htmlspecialchars($Don['id_don']) . "</h1>";
        echo "<p class='text-xs text-gray-500 mt-1'>Créé le " . htmlspecialchars($Don['date_don']) . "</p>";
        echo "</div>";

        echo "<div class='grid grid-cols-1 md:grid-cols-2 gap-4'>";

        // Informations du donneur
        echo "<div>";
        echo "<h2 class='text-base font-semibold text-gray-700 mb-3'>Informations du Donneur</h2>";
        echo "<div class='bg-gray-50 p-3 rounded-lg space-y-2'>";
        echo "<div class='flex items-center'>";
        echo "<i class='bx bx-user text-blue-500 mr-2'></i>";
        echo "<p class='text-sm text-gray-600'><strong>Nom:</strong> " . htmlspecialchars($Don['nom_donneur']) . "</p>";
        echo "</div>";

        // Statut avec formulaire
        echo "<form action='' method='POST' class='mt-3'>";
        echo "<label for='statut' class='block text-xs text-gray-600 mb-2'>Statut:</label>";
        echo "<select name='statut' id='statut' class='block w-full p-2 border border-gray-300 rounded-md text-sm'>";
        echo "<option value='En attente' " . ($Don['statut'] === 'En attente' ? 'selected' : '') . ">En attente</option>";
        echo "<option value='Accepté' " . ($Don['statut'] === 'Accepté' ? 'selected' : '') . ">Accepté</option>";
        echo "<option value='Refusé' " . ($Don['statut'] === 'Refusé' ? 'selected' : '') . ">Refusé</option>";
        echo "</select>";
        echo "<input type='hidden' name='id_don' value='" . htmlspecialchars($Don['id_don']) . "'>";
        echo "<button type='submit' class='mt-3 bg-blue-500 text-white px-4 py-1 rounded-md text-xs hover:bg-blue-600'>Modifier</button>";
        echo "</form>";
        echo "</div>";
        echo "</div>";

        // Détails du don
        echo "<div>";
        echo "<h2 class='text-base font-semibold text-gray-700 mb-3'>Détails du Don</h2>";
        echo "<div class='bg-gray-50 p-3 rounded-lg space-y-2'>";

        echo "<div class='flex items-center'>";
        echo "<i class='bx bx-money text-blue-500 mr-2'></i>";
        echo "<p class='text-sm text-gray-600'><strong>Montant:</strong> " . number_format($Don['montant'], 2, ',', ' ') . " DA</p>";
        echo "</div>";

        echo "<div class='flex items-center'>";
        echo "<i class='bx bx-category text-blue-500 mr-2'></i>";
        echo "<p class='text-sm text-gray-600'><strong>Type:</strong> " . htmlspecialchars($Don['type_don']) . "</p>";
        echo "</div>";

        echo "<div class='flex items-center'>";
        echo "<i class='bx bx-credit-card text-blue-500 mr-2'></i>";
        echo "<p class='text-sm text-gray-600'><strong>Paiement:</strong> " . htmlspecialchars($Don['methode_payement']) . "</p>";
        echo "</div>";

        echo "</div>";
        echo "</div>";

        // Reçu
        echo "<div class='md:col-span-2 mt-4'>";
        echo "<h2 class='text-base font-semibold text-gray-700 mb-3'>Reçu</h2>";
        echo "<div class='bg-gray-50 p-3 rounded-lg'>";
        echo "<img src='" . htmlspecialchars($Don['recu']) . "' alt='Reçu' class='w-full h-48 object-contain'>";
        echo "</div>";
        echo "</div>";

        echo "</div>"; // Fin de la grille
        echo "</div>"; // Fin du conteneur principal
        echo "</div>"; // Fin de la page

        echo "</body>";
        echo "</html>";
    }
}
?>
