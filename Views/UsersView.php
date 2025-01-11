<?php
require_once '../Controllers/UserController.php';

class UsersView {

    public function afficher($Users) {
        $items_par_page = 5; 
        $page_courante = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $total_items = count($Users);
        $total_pages = ceil($total_items / $items_par_page);
        $debut = ($page_courante - 1) * $items_par_page;
        $Users_page = array_slice($Users, $debut, $items_par_page);

        echo "<head>";
        echo "<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'/>";
        echo "<title>Utilisateurs</title>";
        echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
        echo "<link href='https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css' rel='stylesheet'>";
        echo "<link href='../output.css' rel='stylesheet' type='text/css'/>";
        echo "<script src='../Js/Script.js'></script>";
        echo "</head>";
        echo "<body class='bg-gray-50'>";

        echo "<div class='w-3/4 float-right mr-12 p-6'>";
        echo "<div class='p-4'>";

        echo "<table class='min-w-full border-collapse border border-gray-300'>";
        echo "<thead>";
        echo "<tr class='bg-gray-200'>";
        echo "<td class='px-4 py-2 text-left text-gray-500'>Email</td>";
        echo "<td class='px-4 py-2 text-left text-gray-500'>Statut</td>";
        echo "<td class='px-4 py-2 text-left text-gray-500'>Gestion</td>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";

        foreach ($Users_page as $user) {
            echo "<tr class='border-t border-gray-300'>";
            echo "<td class='px-4 py-2 text-gray-700'>" . htmlspecialchars($user['email']) . "</td>";
            echo "<td class='px-4 py-2 text-gray-700'>" . htmlspecialchars($user['statut']) . "</td>";
            echo "<td class='px-4 py-2'>";
            echo "<form action='../Pages/Users.php' method='POST' class='inline-block'>";
            echo "<input type='hidden' name='id' value='" . htmlspecialchars($user['id']) . "'>";
            echo "<select name='statut' class='border border-gray-300 rounded px-2 py-1'>";
            echo "<option value='validé'" . ($user['statut'] == 'validé' ? ' selected' : '') . ">Validé</option>";
            echo "<option value='bloqué'" . ($user['statut'] == 'bloqué' ? ' selected' : '') . ">Bloqué</option>";
            echo "</select>";
            echo "<button type='submit' class='ml-2 bg-blue-500 text-white px-3 py-1 rounded'>Modifier</button>";
            echo "</form>";
            echo "</td>";
            echo "</tr>";
        }

        echo "</tbody>";
        echo "</table>";

        echo "<div class='mt-4 flex justify-center items-center space-x-2'>";
        if ($page_courante > 1) {
            echo "<a href='?page=" . ($page_courante - 1) . "' class='px-4 py-2 border rounded-lg hover:bg-gray-100'>Précédent</a>";
        }
        for ($i = 1; $i <= $total_pages; $i++) {
            $active_class = $i === $page_courante ? 'bg-blue-500 text-white' : 'hover:bg-gray-100';
            echo "<a href='?page=$i' class='px-4 py-2 border rounded-lg $active_class'>$i</a>";
        }
        if ($page_courante < $total_pages) {
            echo "<a href='?page=" . ($page_courante + 1) . "' class='px-4 py-2 border rounded-lg hover:bg-gray-100'>Suivant</a>";
        }
        echo "</div>";

        echo "</div>"; 
        echo "</div>"; 
        echo "</body>";
    }
}
?>
