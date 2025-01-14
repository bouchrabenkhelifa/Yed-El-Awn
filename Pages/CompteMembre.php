<?php
require_once '../Controllers/MenuController.php';
require_once '../Controllers/FooterController.php';
require_once '../Controllers/MembresController.php';
require_once '../Views/NavbarMembre.php';
require_once '../Configuration/Database.php';
class test {
    public function Afficher()
   { session_start();
    if (!isset($_SESSION['membre_id'])) {
        header("Location: ../Pages/Connexion.php");
        exit();
    }
        $database = new Database();
        $db = $database->getConnection();
        $MenuController = new MenuController($db);
        $MenuController->afficherAsso();
        $Navbar = new NavbarMembreView();
        $Navbar->afficher();
        $MembresController = new MembresController($db);
        $idmembre = $_SESSION['membre_id'];
        $MembresController->AfficherCarte($idmembre);
        $FooterController = new FooterController();
        $FooterController->afficherFooter();
   
    }
}
$admin = new test();
$admin->Afficher();
?>
