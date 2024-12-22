<?php
require_once 'PartenairesController.php';
require_once 'HeaderController.php';
require_once 'SidebarController.php';
require_once '../Configuration/Database.php';
class test {
    public function Afficher()
   {
        $database = new Database();
        $db = $database->getConnection();
        $HeaderController = new HeaderController($db);
        $HeaderController->EnvoyerHeader();
        $partenairesController = new PartenairesController($db);
        $partenairesController->afficherPartenaires();
        $SidebarController = new SidebarController();
        $SidebarController->Afficher();
    

    }
}


$admin = new test();
$admin->Afficher();
?>
