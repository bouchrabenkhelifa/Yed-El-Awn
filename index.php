<?php
require_once 'Controllers/PartenairesController.php';
require_once 'Configuration/Database.php';
class test {
    public function Afficher()
    {   $database = new Database();
        $db = $database->getConnection();
        $partenairesController = new PartenairesController($db);
        $partenairesController->afficherPartenaires();
    

    }
}


$admin = new test();
$admin->Afficher();
?>
