<?php
require_once '../Controllers/AideController.php';
require_once '../Controllers/HeaderController.php';
require_once '../Controllers/SidebarController.php';
require_once '../Controllers/PartenairesController.php';
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
        $PartenairesController = new PartenairesController($db);
        $PartenairesController->Afficher();
        if (isset($_POST['action']) && $_POST['action'] === 'modifierPartenaire') {
            $PartenairesController->modifierPartenaire();
        }
      
    
    
    }
}


$admin = new Gestion();
$admin->Afficher();
?>
