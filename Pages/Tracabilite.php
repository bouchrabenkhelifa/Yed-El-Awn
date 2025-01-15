<?php
require_once '../Controllers/MenuController.php';
require_once '../Controllers/FooterController.php';
require_once '../Controllers/TracabiliteController.php';
require_once '../Views/NavbarMembre.php';
require_once '../Configuration/Database.php';
require_once '../Controllers/MenuController.php';
require_once '../Controllers/FooterController.php';
require_once '../Controllers/TracabiliteController.php';
require_once '../Views/NavbarMembre.php';
require_once '../Configuration/Database.php';

class Test {
    public function Afficher() {
        session_start();
        
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

        $idmembre = $_SESSION['membre_id'];

        $TracabiliteController = new TracabiliteController($db);
        $TracabiliteController->afficher($idmembre);

        $FooterController = new FooterController();
        $FooterController->afficherFooter();
    }
}

$admin = new Test();
$admin->Afficher();

?>
