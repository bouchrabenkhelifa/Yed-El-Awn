<?php
    echo '<link rel="stylesheet" href="../output.css">';
    echo '<link rel="stylesheet" href="../All.css">';
class SidebarView
{
    public function AfficherSidebar()
    {
        echo "
        <div class='bg-gray-600 w-64 h-screen fixed p-4'>
            <div class='flex justify-center mb-6'>
                <img src='../Images/Logo.png' alt='Logo' class='w-24'>
            </div>
            <ul class='space-y-4'>
                <li class='flex items-center space-x-3 hover:bg-gray-700'>
                <a href ='http://localhost/projets/YadElAwn/Controllers/Dashboard.php' class='flex items-center space-x-3 p-2 rounded'>
                        <img src='../Images/Dashboard.png' alt='Dashboard' class='w-5 h-5'>
                        <span class='text-white text-sm'>Dashboard</span>
                    </a>
                </li>
                <li class='flex items-center space-x-3 hover:bg-gray-700'>
                    <a href='http://localhost/projets/YadElAwn/Controllers/GestionPartenaires.php' class='flex items-center space-x-3 p-2 rounded'>
                        <img src='../Images/Personne.png' alt='Partenaires' class='w-5 h-5'>
                        <span class='text-white text-sm'>Gestion des Partenaires</span>
                    </a>
                </li>
                <li class='flex items-center space-x-3 hover:bg-gray-700'>
                    <a href='/offres' class='flex items-center space-x-3 p-2 rounded'>
                        <img src='../Images/Offres.png' alt='Offres' class='w-5 h-5'>
                        <span class='text-white text-sm'>Gestion des Offres</span>
                    </a>
                </li>
                <li class='flex items-center space-x-3 hover:bg-gray-700'>
                    <a href='/membres' class='flex items-center space-x-3 p-2 rounded'>
                        <img src='../Images/Personne.png' alt='Membres' class='w-5 h-4'>
                        <span class='text-white text-sm'>Gestion des Membres</span>
                    </a>
                </li>
                <li class='flex items-center space-x-3 hover:bg-gray-700'>
                    <a href='/dons' class='flex items-center space-x-3 p-2 rounded'>
                        <img src='../Images/Dons.png' alt='Dons' class='w-5 h-6'>
                        <span class='text-white text-sm'>Gestion des Dons</span>
                    </a>
                </li>
                <li class='flex items-center space-x-3 hover:bg-gray-700'>
                    <a href='/benevoles' class='flex items-center space-x-3 p-2 rounded'>
                        <img src='../Images/Personne.png' alt='Bénévoles' class='w-5 h-4'>
                        <span class='text-white text-sm'>Gestion des Bénévoles</span>
                    </a>
                </li>
                <li class='flex items-center space-x-3 hover:bg-gray-700'>
                    <a href='/parametres' class='flex items-center space-x-3 p-2 rounded'>
                        <img src='../Images/Parametres.png' alt='Paramètres' class='w-5 h-5'>
                        <span class='text-white text-sm'>Paramètres</span>
                    </a>
                </li>
            </ul>
        </div>
        ";
    }
}
?>
