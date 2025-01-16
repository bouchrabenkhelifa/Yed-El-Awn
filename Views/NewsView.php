<?php
class NewsView {
    public function afficher($News) {
        echo "<!DOCTYPE html>";
        echo "<html lang='en'>";
        echo "<head>";
        echo "    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'/>";
        echo "    <title>Actualités</title>";
        echo "    <meta name='viewport' content='width=device-width, initial-scale=1.0'>";
        echo "    <link href='https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css' rel='stylesheet'>";
        echo "    <link href='../output.css' rel='stylesheet' type='text/css'/>";
        echo "    <script src='../Js/Script.js'></script>";
        echo "    <style>
                    html {
                        scroll-behavior: smooth;
                    }
                  </style>";
        echo "</head>";
        echo "<body class='bg-gray-100'>";
        
        echo "<div id='zone'  class='flex justify-center pt-12 min-h-screen'>";
        echo "    <div class='container max-w-4xl py-12 py-4'>";
        
        echo "        <h2 class='text-3xl font-bold text-center mb-6' style='color: #6B46C1'>Nouvelles & Evenements</h2>";
        
        echo "        <div class='space-y-4 py-8'>";
        
        foreach ($News as $nouvelle) {
          
            
            echo "<div class='bg-white rounded-md shadow hover:shadow-md transition duration-300 mx-auto'>";
            echo "    <div class='flex flex-col mb-5 md:flex-row'>";
            
            echo "        <div class='md:w-1/4'>";
            echo "            <img src='" . htmlspecialchars($nouvelle['image']) . "' 
                              alt='News' 
                              class='w-full h-40 md:h-full object-cover'>";
            echo "        </div>";
            
            echo "        <div class='md:w-3/4 p-4'>";
            echo "            <span class='text-xs text-gray-500'>" . 
                              date('d/m/Y', strtotime($nouvelle['date'])) . "</span>";
            echo "            <h2 class='text-lg font-semibold mt-1 mb-2' style='color: #6B46C1'>" . 
                              htmlspecialchars($nouvelle['titre']) . "</h2>";
            echo "            <p class='text-sm text-gray-600 mb-3'>" . 
                              htmlspecialchars($nouvelle['description']) . "</p>";
            echo "            <a href='#' class='inline-block px-4 py-1 text-sm rounded-full text-white' 
                              style='background-color: #6B46C1'>Lire plus</a>";
            echo "        </div>";
            echo "    </div>";
            echo "</div>";
        }
        
        echo "        </div>";
        echo "    </div>";
        echo "</div>";
        
        echo "</body>";
        echo "</html>";
    }
}
?>
