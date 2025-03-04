<?php
if (!defined('STARTED_OUTPUT_BUFFERING')) {
    ob_start();
    define('STARTED_OUTPUT_BUFFERING', true);
}
class SidebarView
{
    public function AfficherSidebar()
    { echo"<head>";
        echo"<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'/>";
        echo"<title>Partenaires</title>";
        echo"<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
        echo "<link href='https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css' rel='stylesheet'>"  ;       
        echo "<link href='../output.css' rel='stylesheet' type='text/css'/>";
        echo "  <script src='../Js/Script.js'></script>";
    echo "</head>";
        echo  " <div class='bg-gray-600 w-64 h-screen fixed p-4'>
        <div class='flex justify-center mb-6'>
            <img src='../Images/Logo.png' alt='Logo' class='w-24'>
        </div>
        <ul class='space-y-2'> <!-- Réduit l'espacement vertical entre les éléments -->
            <li class='flex items-center space-x-3 hover:bg-gray-700 '>
                <a href ='../Pages/Dashboard.php' class='flex items-center space-x-3 p-2 rounded'>
                        <img src='../Images/Dashboard.png' alt='Dashboard' class='w-5 h-5'>
                        <span class='text-white text-sm'>Dashboard</span>
                    </a>
            </li>
            <li class='flex items-center space-x-3 hover:bg-gray-700 '>
                <a href='../Pages/Users.php' class='flex items-center space-x-3 p-2 rounded'>
                    <img src='../Images/Personne.png' alt='Partenaires' class='w-5 h-5'>
                    <span class='text-white text-sm'>Gestion des utilisateurs</span>
                </a>
            </li>
            <li class='flex items-center space-x-3 hover:bg-gray-700 '>
                <a href='../Pages/Partenaires.php' class='flex items-center space-x-3 p-2 rounded'>
                    <img src='../Images/Personne.png' alt='Partenaires' class='w-5 h-5'>
                    <span class='text-white text-sm'>Gestion des Partenaires</span>
                </a>
            </li>
            <li class='flex items-center space-x-3 hover:bg-gray-700 '>
                <a href='../Pages/Annonces.php' class='flex items-center space-x-3 p-2 rounded'>
                    <img src='../Images/Annonce.png' alt='Annonces' class='w-6 h-6'>
                    <span class='text-white text-sm'>Gestion des annonces & Notifications</span>
                </a>
            </li>
            <li class='flex items-center space-x-3 hover:bg-gray-700 '>
                <a href='../Pages/Membres.php' class='flex items-center space-x-3 p-2 rounded'>
                    <img src='../Images/Personne.png' alt='Membres' class='w-5 h-4'>
                    <span class='text-white text-sm'>Gestion des Membres</span>
                </a>
            </li>
            <li class='flex items-center space-x-3 hover:bg-gray-700 '>
                <a href='../Pages/Offres' class='flex items-center space-x-3 p-2 rounded'>
                    <img src='../Images/Offres.png' alt='Offres' class='w-5 h-5'>
                    <span class='text-white text-sm'>Gestion des Offres</span>
                </a>
            </li>
            <li class='flex items-center space-x-3 hover:bg-gray-700 '>
                <a href='../Pages/Dons' class='flex items-center space-x-3 p-2 rounded'>
                    <img src='../Images/Dons.png' alt='Dons' class='w-5 h-6'>
                    <span class='text-white text-sm'>Gestion des Dons</span>
                </a>
            </li>
            <li class='flex items-center space-x-3 hover:bg-gray-700 '>
                <a href='../Pages/Benevoles.php' class='flex items-center space-x-3 p-2 rounded'>
                    <img src='../Images/Personne.png' alt='Bénévoles' class='w-5 h-4'>
                    <span class='text-white text-sm'>Gestion des Bénévoles</span>
                </a>
            </li>
            <li class='flex items-center space-x-3 hover:bg-gray-700 '>
                <a href='../Pages/GestionDemandesAides.php' class='flex items-center space-x-3 p-2 rounded'>
                    <img src='../Images/Dons.png' alt='Bénévoles' class='w-5 h-6'>
                    <span class='text-white text-sm'>Les demandes d'aide</span>
                </a>
            </li>
            <li class='flex items-center space-x-3 hover:bg-gray-700 '>
                <a href='../Pages/Parametres.php' class='flex items-center space-x-3 p-2 rounded'>
                    <img src='../Images/Parametres.png' alt='Paramètres' class='w-5 h-5'>
                    <span class='text-white text-sm'>Paramètres</span>
                </a>
            </li>
            <li class='flex items-center space-x-3 hover:bg-gray-700 mt-auto'>
                    <a href='../Pages/Logout.php' class='flex items-center space-x-3 p-2 rounded text-red-300'>
                        <svg class='w-5 h-5' fill='none' stroke='currentColor' viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'>
                            <path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1'></path>
                        </svg>
                        <span class='text-sm'>Déconnexion</span>
                    </a>
                </li>
        </ul>
    </div>";

    }
}
?>
