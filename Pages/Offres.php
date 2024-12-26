<?php
require_once '../Controllers/HeaderController.php';
require_once '../Controllers/OffresController.php';
require_once '../Controllers/SidebarController.php';
require_once '../Configuration/Database.php';
class test {
    public function Afficher()
   {
        $database = new Database();
        $db = $database->getConnection();
        $HeaderController = new HeaderController($db);
        $HeaderController->EnvoyerHeader();
        $OffresController = new OffresController($db);
        $OffresController->afficherOffres();
        $SidebarController = new SidebarController();
        $SidebarController->Afficher();
    

    }
}


$admin = new test();
$admin->Afficher();
?>
