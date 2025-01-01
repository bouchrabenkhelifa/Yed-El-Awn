<?php
class HeaderPartView {

    public function afficher() {
        echo "<!DOCTYPE html>";
        echo "<html lang='en'>";
        echo "<head>";
        echo "    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'/>";
        echo "    <title>Menu</title>";
        echo "    <meta name='viewport' content='width=device-width, initial-scale=1.0'>";
        echo "    <link href='https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css' rel='stylesheet'>";
        echo "    <link href='../output.css' rel='stylesheet' type='text/css'/>";
        echo "    <script src='../Js/Script.js'></script>";
        echo "</head>";
        echo "<body class='bg-yellow-50 font-sans h-screen flex'>

        <!-- Sidebar -->
        <div class='bg-yellow-300 text-white w-70 h-full flex flex-col items-center p-4'>
            <div class='flex justify-center w-full mb-6'>
                <img src='../Images/Logo.png' alt='Logo' class='w-26 h-16 rounded-full'>
            </div>
            <ul class='space-y-4 w-full'>
                <li class='flex items-center space-x-2 cursor-pointer px-4 py-2 rounded hover:bg-yellow-400'>
                    <img src='../Images/dash.png' alt='Dashboard' class='w-6 h-6'>
                    <span>Dashboard</span>
                </li>
                <li class='flex items-center space-x-2 cursor-pointer px-4 py-2 rounded hover:bg-yellow-400'>
                    <img src='../Images/QRB.png' alt='Scan QR' class='w-6 h-6'>
                    <span>Scan QR</span>
                </li>
                <li class='flex items-center space-x-2 cursor-pointer px-4 py-2 rounded hover:bg-yellow-400'>
                    <img src='../Images/settings.png' alt='Vérifier manuellement' class='w-6 h-6'>
                    <span>Vérifier manuellement</span>
                </li>
                <li class='flex items-center space-x-2 cursor-pointer px-4 py-2 rounded hover:bg-yellow-400'>
                    <img src='../Images/team.png' alt='Mon compte' class='w-6 h-6'>
                    <span>Mon compte</span>
                </li>
            </ul>
        </div>
    
        <!-- Main Content -->
        <div class='flex-1 flex flex-col'>
            <!-- Header -->
            <div class='p-4 flex justify-between items-center'>
                <h2 class='text-lg font-bold text-yellow-700'>Hello Nom !</h2>
                <button class='bg-yellow-500 text-white px-4 py-2 rounded shadow hover:bg-yellow-400'>
                    Ajouter
                </button>
            </div>
        </div>";
    


        echo "</body>";
        echo "</html>";
    }
}
?>