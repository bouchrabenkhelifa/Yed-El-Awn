<?php
class UserNavbarView {
    public function afficher() {
        echo "<!DOCTYPE html>
<html lang='fr'>
<head>
    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'/>
    <title>Navigation</title>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link href='https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css' rel='stylesheet'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css'>
    <script src='../Js/Script.js'></script>
    <style> 
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
    </style>
</head>
<body class='bg-gray-100'>
    <nav class='gradient-custom shadow-md'>
        <div class='container mx-auto px-4 py-3'>
            <div class='flex justify-end items-center space-x-8'>
                <a href='../Pages/Remises.php' class='text-white hover:text-gray-200 font-medium'>
                    <i class='fas fa-tag mr-1'></i>
                    Remises
                </a>
                <a href='../Pages/DemandeAide.php' class='text-white hover:text-gray-200 font-medium'>
                    <i class='fas fa-hands-helping mr-1'></i>
                    Demande d'aide
                </a>
                  <a href='../Pages/FaireDon.php' class='text-white hover:text-gray-200 font-medium'>
<i class='fas fa-donate mr-1'></i>
                    Don
                </a>
                <a href='../Pages/Adhesion.php' class='text-white hover:text-gray-200 font-medium'>
                    <i class='fas fa-user-plus mr-1'></i>
                    Inscription
                </a>
                <div class='relative'>
                    <button id='settingsButton' class='text-white hover:text-gray-200 focus:outline-none p-1 rounded-full hover:bg-indigo-500 transition-colors duration-200'>
                        <i class='fas fa-sign-out-alt text-xl'></i>
                    </button>
                    <div id='settingsDropdown' class='settings-dropdown'>
                        <a href='../Pages/Connexion.php' 
                           class='flex items-center px-4 py-3 text-red-600 hover:bg-red-50 hover:text-red-700 rounded-md transition-colors duration-200'>
                            <i class='fas fa-sign-out-alt mr-2'></i>
                            <span>Déconnexion</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <script>
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
    </script>
</body>
</html>";
    }
}
?>