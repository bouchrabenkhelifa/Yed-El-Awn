<?php
require_once '../Controllers/HeaderController.php';
require_once '../Controllers/PartenairesController.php';
require_once '../Controllers/SidebarController.php';
require_once '../Configuration/Database.php';
class test {
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
        $partenairesController = new PartenairesController($db);
        $partenairesController->handleRequest(); // This will now handle the delete action
        $partenairesController->afficherPartenaires();
        $SidebarController = new SidebarController();
        $SidebarController->Afficher();
    

    }
}


$admin = new test();
$admin->Afficher();
?>
