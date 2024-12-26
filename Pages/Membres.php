<?php
require_once '../Controllers/MembresController.php';
require_once '../Controllers/HeaderController.php';
require_once '../Controllers/SidebarController.php';
require_once '../Configuration/Database.php';

class Membres {
    public function Afficher()
   {
        $database = new Database();
        $db = $database->getConnection();
        $HeaderController = new HeaderController($db);
        $HeaderController->EnvoyerHeader();
        $MembresController = new MembresController($db);
        $MembresController->afficherMembres();
        $SidebarController = new SidebarController();
        $SidebarController->Afficher();
    

    }
}


$admin = new Membres();
$admin->Afficher();
?>
