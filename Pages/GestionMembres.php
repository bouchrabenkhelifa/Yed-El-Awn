<?php
require_once '../Controllers/AjouterMembreController.php';
require_once '../Controllers/HeaderController.php';
require_once '../Controllers/SidebarController.php';
require_once '../Controllers/MembresController.php';
require_once '../Configuration/Database.php';
class Gestion {
    public function Afficher()
   {  session_start();
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
        $AjouterMembresController = new AjouterMembresController();
        $AjouterMembresController->afficherFormulaire();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nom = $_POST['nom'];
            $telephone = $_POST['telephone'];
            $email = $_POST['email'];
            $adresse = $_POST['adresse'];
            $motdepasse = $_POST['motdepasse'];
            $MembresController = new MembresController($db);
            $MembresController->ajouterMembre($nom, $telephone, $email, $adresse, $motdepasse);
    
    
    }
}
}

$admin = new Gestion();
$admin->Afficher();
?>
