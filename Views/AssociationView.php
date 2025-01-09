<?php
require_once '../Controllers/MenuController.php';

class AssoView {
    public function afficherAsso($Association) {
        echo "<!DOCTYPE html>";
        echo "<html lang='en'>";
        echo "<head>";
        echo "    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'/>";
        echo "    <title>YAD EL AWN</title>";
        echo "    <meta name='viewport' content='width=device-width, initial-scale=1.0'>";
        echo "    <link href='https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css' rel='stylesheet'>";
        echo "    <link href='../output.css' rel='stylesheet' type='text/css'/>";
        echo "    <script src='https://unpkg.com/lucide@latest'></script>";
        echo "    <script src='../Js/Script.js'></script>";
        echo "    <style>
                    .navbar-custom {
                        background: linear-gradient(90deg, #ddd6fe 0%, #e9d5ff 100%);
                    }
                    .social-icon {
                        color: #6B46C1;
                        transition: all 0.3s ease;
                    }
                    .social-icon:hover {
                        color: #7C3AED;
                        transform: translateY(-2px);
                    }
                    .social-link {
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        width: 52px;
                        height: 52px;
                        border-radius: 50%;
                        background-color: #F3F4F6;
                        transition: all 0.3s ease;
                    }
                    .social-link:hover {
                        background-color: #EDE9FE;
                        box-shadow: 0 4px 6px -1px rgba(107, 70, 193, 0.2);
                    }
                </style>";
        echo "</head>";
        echo "<body class='font-sans'>";

        // Association Section
        echo "<div class='w-full p-2 mb-6'>";
        if (!empty($Association)) {
            echo "<div class='flex flex-col md:flex-row items-center justify-between max-w-6xl mx-auto'>";
            foreach ($Association as $asso) {
                echo "<div class='flex items-center space-x-6'>";
                echo "    <img src='" . htmlspecialchars($asso['logo']) . "' alt='Logo' class='w-16 h-13 rounded-full'>";
                echo "    <div style='color:#6B46C1' class='text-2xl font-semibold'>" . htmlspecialchars($asso['nom']) . "</div>";
                echo "</div>";
                
                echo "<div class='flex space-x-8 items-center mt-4 md:mt-0'>";
                
                echo "    <a href='https://www.facebook.com/bou.ch.3990?mibextid=ZbWKwL' class='social-link' title='Facebook'>";
                echo "        <i data-lucide='facebook' class='social-icon w-7 h-7'></i>";
                echo "    </a>";
                
                echo "    <a href='#' class='social-link' title='Twitter'>";
                echo "        <i data-lucide='twitter' class='social-icon w-9 h-7'></i>";
                echo "    </a>";
                
                echo "    <a href='https://www.instagram.com/bouchra_benkhelifa/?next=%2F' class='social-link' title='Instagram'>";
                echo "        <i data-lucide='instagram' class='social-icon w-7 h-7'></i>";
                echo "    </a>";
                
                echo "    <a href='https://www.linkedin.com/in/bouchra-benkhelifa-830461284/' class='social-link' title='LinkedIn'>";
                echo "        <i data-lucide='linkedin' class='social-icon w-8 h-7'></i>";
                echo "    </a>";
                
                echo "</div>";
            }
            echo "</div>";
        } else {
            echo "<div class='text-center text-gray-600'>No associations available.</div>";
        }
        echo "</div>";

        echo "<script>
                lucide.createIcons();
              </script>";

        echo "</body>";
        echo "</html>";
    }
}
?>