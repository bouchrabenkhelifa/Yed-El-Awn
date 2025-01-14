<?php
class NavbarMembreView {
    public function afficher() {
        echo "<html lang='fr'>";
        echo "<head>";
        echo "    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'/>";
        echo "    <title>Navigation</title>";
        echo "    <meta name='viewport' content='width=device-width, initial-scale=1.0'>";
        echo "    <link href='https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css' rel='stylesheet'>";
        echo "    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css'>";
        echo "    <script src='../Js/Script.js'></script>";
        echo "</head>";
        
        echo "<style> 
        .gradient-custom { 
            background: linear-gradient(90deg, #6366f1 0%, #8b5cf6 100%);
        } 
        .hover-gradient:hover { 
            background: linear-gradient(90deg, #8b5cf6 0%, #6366f1 100%); 
        }
        .custom-shadow { 
            box-shadow: 0 4px 20px rgba(99, 102, 241, 0.1);
        }
        .settings-dropdown {
            display: none;
            position: absolute;
            right: 0;
            top: 100%;
            background-color: white;
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            min-width: 160px;
            z-index: 50;
        }
        .settings-dropdown.show {
            display: block;
        }
        </style>";

        echo "<body class='bg-gray-100'>";

        // Navbar
        echo "    <nav class='gradient-custom shadow-md'>";      
        echo "        <div class='container mx-auto px-4 py-3 flex items-center justify-between'>";
        echo "            <div class='flex items-center space-x-6 ml-auto'>";
        echo "                <a href='../Pages/Remises.php' class='text-white font-semibold hover:text-gray-200'>Remises</a>";
        echo "                <a href='../Pages/DemandeAide.php' class='text-white font-semibold hover:text-gray-200'>Demande d'aide</a>";
        echo "                <a href='../Pages/FaireDon.php' class='text-white font-semibold hover:text-gray-200'>Don</a>";
        echo "                <a href='../Pages/Adhesion.php' class='text-white font-semibold hover:text-gray-200'>Acheter Carte</a>";
        echo "                <a href='#' class='text-white hover:text-gray-200'><img src='../Images/notification.png' alt='Notifications'></a>";
        
        echo "                <div class='relative'>";
        echo "                    <button id='settingsButton' class='text-white pt-1 hover:text-gray-200 focus:outline-none'>
                                        <svg class='w-6 h-6' fill='#FFFFFF' viewBox='0 0 24 24'>
                                            <path d='M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zM12 5c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.2c-2.5 0-4.71-1.28-6-3.22.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08-1.29 1.94-3.5 3.22-6 3.22z'/>
                                        </svg>
                                   </button>";
echo "                      <div id='settingsDropdown' class='settings-dropdown'>";
echo "                        <a href='../Pages/Parametres.php' class='block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-gray-900'>";
echo "                            <i class='fas fa-cog mr-2'></i>Paramètres";
echo "                        </a>";
echo "                        <a href='../Pages/Historique.php' class='block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-gray-900'>";
echo "                            <i class='fas fa-history mr-2'></i>Historique";
echo "                        </a>";
echo "                        <hr class='my-1 border-gray-200'>";
echo "                        <a href='../Auth/logout.php' class='block px-4 py-2 text-red-600 hover:bg-red-50 hover:text-red-700'>";
echo "                            <i class='fas fa-sign-out-alt mr-2'></i>Déconnexion";
echo "                        </a>";
echo "                    </div>";
echo "                </div>";
echo "            </div>";
echo "        </div>";
echo "    </nav>";

        echo "<script>
            document.addEventListener('DOMContentLoaded', function() {
                const settingsButton = document.getElementById('settingsButton');
                const settingsDropdown = document.getElementById('settingsDropdown');

                settingsButton.addEventListener('click', function(e) {
                    e.stopPropagation();
                    settingsDropdown.classList.toggle('show');
                });

                document.addEventListener('click', function(e) {
                    if (!settingsButton.contains(e.target)) {
                        settingsDropdown.classList.remove('show');
                    }
                });
            });
        </script>";

        echo "</body>";
        echo "</html>";
    }
}
?>