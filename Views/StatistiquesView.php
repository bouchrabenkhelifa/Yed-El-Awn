<?php
class StatistiquesView {
    public function afficherDashboard($stats) {
        echo "<!DOCTYPE html>";
        echo "<html lang='fr'>";
        echo "<head>";
        echo "<meta charset='UTF-8'>";
        echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
        echo "<title>Dashboard Association</title>";
        echo "<link href='https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css' rel='stylesheet'>";
        echo "<link href='../output.css' rel='stylesheet'>";
        // Ajout des icônes Boxicons
        echo "<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>";
        echo "<style>
            @keyframes float {
                0% { transform: translateY(0px); }
                50% { transform: translateY(-10px); }
                100% { transform: translateY(0px); }
            }
            .card-animation:hover {
                animation: float 2s ease-in-out infinite;
            }
            </style>";
        echo "</head>";
        echo "<body class='bg-gray-50 '>";
        
        echo "<div class='max-w-lg mx-auto pt-24'>";
                echo "<div class='space-y-6 mt-5'>";
        
        echo "<div class='card-animation bg-white backdrop-blur-sm rounded-xl p-4 border border-blue-100 
              shadow-lg hover:shadow-2xl transition-all duration-300 
              hover:bg-gradient-to-r hover:from-blue-50 hover:to-indigo-50 
              transform hover:scale-105 cursor-pointer'>";
        echo "<div class='flex items-center justify-between'>";
        echo "<h2 class='text-lg font-semibold text-gray-700 mb-2'>Membres</h2>";
        echo "<i class='bx bx-group text-2xl text-blue-500'></i>";
        echo "</div>";
        echo "<p class='text-4xl font-bold text-blue-600 mt-2'>" . htmlspecialchars($stats['nbMembres']) . "</p>";
        echo "<div class='mt-2 text-sm text-gray-500'>Membres actifs</div>";
        echo "</div>";
        
        echo "<div class='card-animation bg-white backdrop-blur-sm rounded-xl p-4 border border-green-100 
              shadow-lg hover:shadow-2xl transition-all duration-300 
              hover:bg-gradient-to-r hover:from-green-50 hover:to-emerald-50 
              transform hover:scale-105 cursor-pointer'>";
        echo "<div class='flex items-center justify-between'>";
        echo "<h2 class='text-lg font-semibold text-gray-700 mb-2'>Partenaires</h2>";
        echo "<i class='bx bx-building-house text-2xl text-green-500'></i>";
        echo "</div>";
        echo "<p class='text-4xl font-bold text-green-600 mt-2'>" . htmlspecialchars($stats['nbPartenaires']) . "</p>";
        echo "<div class='mt-2 text-sm text-gray-500'>Partenaires actifs</div>";
        echo "</div>";
        
        echo "<div class='card-animation bg-white backdrop-blur-sm rounded-xl p-4 border border-purple-100 
              shadow-lg hover:shadow-2xl transition-all duration-300 
              hover:bg-gradient-to-r hover:from-purple-50 hover:to-pink-50 
              transform hover:scale-105 cursor-pointer'>";
        echo "<div class='flex items-center justify-between'>";
        echo "<h2 class='text-lg font-semibold text-gray-700 mb-2'>Total des dons</h2>";
        echo "<i class='bx bx-donate-heart text-2xl text-purple-500'></i>";
        echo "</div>";
        echo "<p class='text-4xl font-bold text-purple-600 mt-2'>" . number_format($stats['totalDons'], 2, ',', ' ') . " DA</p>";
        echo "<div class='mt-2 text-sm text-gray-500'>Total des contributions</div>";
        echo "</div>";
        
        echo "</div>";
        echo "</div>";
        echo "</body>";
        echo "</html>";
    }
}
?>