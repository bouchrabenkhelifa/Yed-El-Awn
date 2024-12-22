<?php
require_once 'HeaderController.php';
require_once '../Configuration/Database.php';
class headtest {


    public function Afficher()
    {   $database = new Database();
        $db = $database->getConnection();
        $HeaderController = new HeaderController($db);
        $HeaderController->EnvoyerHeader();
    

    }
}


$admin = new headtest();
$admin->Afficher();
?>
