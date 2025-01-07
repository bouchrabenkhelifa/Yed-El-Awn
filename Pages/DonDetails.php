<?php
require_once '../Controllers/DonController.php';
require_once '../Controllers/HeaderController.php';
require_once '../Controllers/SidebarController.php';
require_once '../Configuration/Database.php';
class Gestion {
    public function Afficher()
   {   session_start();
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
        $DonController = new DonController($db);
        if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $DonController->getDonDetails($id);
        }
    
    
    }
}


$admin = new Gestion();
$admin->Afficher();
?>
