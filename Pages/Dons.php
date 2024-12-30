<?php
require_once '../Controllers/DonController.php';
require_once '../Controllers/HeaderController.php';
require_once '../Controllers/SidebarController.php';
require_once '../Configuration/Database.php';

class Don {
    public function Afficher()
   {session_start();
    if (!isset($_SESSION['admin'])) {
        header("Location: AdminConnexion.php");  
        exit();
    }
        $database = new Database();
        $db = $database->getConnection();
        $HeaderController = new HeaderController($db);
        $HeaderController->EnvoyerHeader();
        $DonController = new DonController($db);
        $DonController->afficherDon();
        $SidebarController = new SidebarController();
        $SidebarController->Afficher();
    

    }
}


$admin = new Don();
$admin->Afficher();
?>
