<?php
class HeaderPartView {
    public function afficher() {
        $nomPartenaire = $_SESSION['nompartenaire'];
        $logoPartenaire = $_SESSION['logopartenaire'];

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
        echo "<body class='bg-yellow-50 font-sans h-screen flex'>";

        // Sidebar
        echo "<div class='bg-yellow-300 text-white w-70 h-full flex flex-col items-center p-4'>";
        echo "    <div class='flex justify-center w-full mb-6'>";
        echo "        <img src='$logoPartenaire' alt='Logo' class='w-26 h-16 rounded-full'>";
        echo "    </div>";
        echo "    <ul class='space-y-4 w-full'>";
       echo" <li class='flex items-center space-x-2 cursor-pointer px-4 py-2 rounded hover:bg-yellow-400'>
        <a href='DashboardPartenaire' class='flex'> 
            <img src='../Images/dash.png' alt='Dashboard' class='w-6 h-6'>
            <span>Dashboard</span> 
        </a>
    </li>";
    
        echo "        <li class='flex items-center space-x-2 cursor-pointer px-4 py-2 rounded hover:bg-yellow-400'>";
        echo "            <img src='../Images/QRB.png' alt='Scan QR' class='w-6 h-6'>";
        echo "            <span>Scan QR</span>";
        echo "        </li>";

        echo "        <li class='flex items-center space-x-2 cursor-pointer px-4 py-2 rounded hover:bg-yellow-400'>";
        echo '            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M16 17v2c0 1.1-.9 2-2 2H5c-1.1 0-2-.9-2-2V5c0-1.1.9-2 2-2h9c1.1 0 2 .9 2 2v2h-2V5H5v14h9v-2h2z"/>
                            <path fill="currentColor" d="M21 12l-4-4v3H9v2h8v3l4-4z"/>
                         </svg>';
        echo "            <a href='../Pages/Logout.php' class='text-white font-semibold  hover:text-gray-900'><span>Déconnexion</span></a>";
        echo "        </li>";
        echo "    </ul>";
        echo "</div>";

        // Main Content
        echo "<h2 class='text-lg p-2 font-bold text-yellow-700'>Hello {$nomPartenaire}!</h2>";
        

        echo "</body>";
        echo "</html>";
    }
}
?>
