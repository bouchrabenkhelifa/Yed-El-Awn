<?php
class Navbar2 {
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
        echo "                <a href='../Pages/Acceuil.php' class='text-white font-semibold hover:text-gray-200'>Acceuil</a>";
        echo "                <a href='#zone' class='text-white font-semibold hover:text-gray-200'>Nouvelles </a>";
        echo "                <a href='#avantages' class='text-white font-semibold hover:text-gray-200'>Avantages</a>";
        echo "                <a href='#partenaires' class='text-white font-semibold hover:text-gray-200'>Nos partenaires</a>";
        echo "                <a href='#contact' class='text-white font-semibold hover:text-gray-200'>Contact</a>";
        
  
echo "            </div>";
echo "        </div>";
echo "    </nav>";

    

        echo "</body>";
        echo "</html>";
    }
}
?>