<?php
class HeaderPartView {
    public function afficher() {
        session_start();

        // Check if the partner is logged in
        if (!isset($_SESSION['partenaire'])) {
            header("Location: Connexion.php");
            exit();
        }

        // Get partner name and logo from session
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
        echo "        <li class='flex items-center space-x-2 cursor-pointer px-4 py-2 rounded hover:bg-yellow-400'>";
        echo "            <img src='../Images/dash.png' alt='Dashboard' class='w-6 h-6'>";
        echo "            <span>Dashboard</span>";
        echo "        </li>";
        echo "        <li class='flex items-center space-x-2 cursor-pointer px-4 py-2 rounded hover:bg-yellow-400'>";
        echo "            <img src='../Images/QRB.png' alt='Scan QR' class='w-6 h-6'>";
        echo "            <span>Scan QR</span>";
        echo "        </li>";
        echo "        <li class='flex items-center space-x-2 cursor-pointer px-4 py-2 rounded hover:bg-yellow-400'>";
        echo "            <img src='../Images/settings.png' alt='Vérifier manuellement' class='w-6 h-6'>";
        echo "            <span>Vérifier manuellement</span>";
        echo "        </li>";
        echo "        <li class='flex items-center space-x-2 cursor-pointer px-4 py-2 rounded hover:bg-yellow-400'>";
        echo "            <img src='../Images/team.png' alt='Mon compte' class='w-6 h-6'>";
        echo "            <span>Mon compte</span>";
        echo "        </li>";
        echo "    </ul>";
        echo "</div>";

        // Main Content
        echo "<div class='flex-1 flex flex-col'>";
        echo "    <div class='p-4 flex justify-between items-center'>";
        echo "        <h2 class='text-lg font-bold text-yellow-700'>Hello " . $nomPartenaire . "!</h2>";
        echo "        <button class='bg-yellow-500 text-white px-4 py-2 rounded shadow hover:bg-yellow-400'>";
        echo "            Ajouter";
        echo "        </button>";
        echo "    </div>";
        echo "</div>";

        echo "</body>";
        echo "</html>";
    }
}
?>
