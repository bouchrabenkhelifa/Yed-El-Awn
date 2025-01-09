<?php
require_once '../Controllers/MenuController.php';
require_once '../Controllers/FooterController.php';
require_once '../Controllers/AdhesionController.php';
require_once '../Configuration/Database.php';
class Gestion {
    public function Afficher()
   {   
        $database = new Database();
        $db = $database->getConnection();
        $MenuController = new MenuController($db);
        $MenuController->afficherAsso();
        $AdhesionController = new AdhesionController($db);
        $AdhesionController->afficherForm();
        $FooterController = new FooterController();
        $FooterController->afficherFooter();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nom = $_POST['nom'];
            $telephone = $_POST['telephone'];
            $adresse = $_POST['adresse'];
            $carteidentite = $_FILES['carteidentite']['name'];
            $photo = $_FILES['photo']['name'];
            $recu = $_FILES['recu']['name'];
            $AdhesionController = new AdhesionController($db);
            $AdhesionController->Join($nom, $telephone, $adresse,$photo,$carteidentite,$recu);
    
    
    }
    
    
    }
}


$admin = new Gestion();
$admin->Afficher();
?>
