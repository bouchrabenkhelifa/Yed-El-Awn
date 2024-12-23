<?php

class HeaderView {

    public function AfficherHeader($adminInfo){
        echo"<head>";
        echo"<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'/>";
        echo"<title>Header</title>";
        echo"<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
    echo "    <link href='https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css' rel='stylesheet'>"  ;       
    echo "<link href='../output.css' rel='stylesheet' type='text/css'/>";
    echo "</head>";
        if ($adminInfo) {
            echo " <div class='flex justify-between float-right w-3/4 items-center mb-10 mt-4 p-4 mr-12 bg-[#F8FAFC] shadow-lg shadow-gray-300 rounded-lg'>";

            echo "<p class='text-lg text-[#363740] font-semibold flex items-center'>";  
            echo "Bienvenue, " . htmlspecialchars($adminInfo['nom']) . "!";
            echo "<img src='../Images/Hello.png' alt='' class='ml-2 inline-block w-6 h-6'/>"; // Taille de l'image ajustée
            echo "</p>";

            echo "<div class='flex items-center justify-between ml-auto space-x-8'>";
            echo "<input placeholder='Rechercher ici' type='text' class='border-2 border-gray-300  p-2 rounded-2xl bg-white text-[#363740]'/>";  
        
            echo "<img src='" . htmlspecialchars($adminInfo['photo']) . "' alt='Photo de profil' class=' w-10 h-10 rounded-full border-4 border-white'/>";

            echo "</div>";
            echo "</div>"; 
        } 
    }
}
?>
