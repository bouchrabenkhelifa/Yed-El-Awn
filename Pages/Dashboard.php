<?php
require_once '../Controllers/PartenairesController.php';
require_once '../Controllers/HeaderController.php';
require_once '../Controllers/SidebarController.php';
require_once '../Controllers/StatistiquesController.php';
require_once '../Configuration/Database.php';
class test {
    public function Afficher()
   { session_start();
    if (!isset($_SESSION['admin'])) {
        header("Location: AdminConnexion.php");  
        exit();
    }
        $database = new Database();
        $db = $database->getConnection();
        $HeaderController = new HeaderController($db);
        $HeaderController->EnvoyerHeader();
        $SidebarController = new SidebarController();
        $SidebarController->Afficher();
        $StatistiquesController = new StatistiquesController($db);
        $StatistiquesController->AfficherDashboard();

    }
}


$admin = new test();
$admin->Afficher();
?>
