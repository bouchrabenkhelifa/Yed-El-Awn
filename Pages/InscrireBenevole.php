<?php

require_once '../Controllers/BenevoleController.php';
require_once '../Views/InscrireBenevoleView.php';
require_once '../Controllers/MenuController.php';
require_once '../Controllers/FooterController.php';
require_once '../Views/UserNavbarView.php';
require_once '../Views/NavbarMembre.php'; 
require_once '../Configuration/Database.php';

class GestionDon {
    public function Afficher() {
        
       
        session_start(); 
        
        $database = new Database();
        $db = $database->getConnection();
        $MenuController = new MenuController($db);
        $MenuController->afficherAsso();

        if (isset($_SESSION['membre_id']) && $_SESSION['membre_id'] !== null) {
            $Navbar = new NavbarMembre();
        } else {
            $Navbar = new UserNavbarView();
        }
        $Navbar->afficher();

        $InscrireBenevoleView = new InscrireBenevoleView();
        $InscrireBenevoleView->Form();
        $FooterController = new FooterController();
        $FooterController->afficherFooter();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id_membre = trim($_POST['id_membre'] ?? '');
            $disponibilite = trim($_POST['disponibilite'] ?? '');
            $domaine_interet = trim($_POST['domaine_interet'] ?? '');
            $date_inscription = trim($_POST['date_inscription'] ?? '');
            $id_evenement = trim($_POST['id_evenement'] ?? '');
            $BenevoleController = new BenevoleController($db);
            $BenevoleController->Ajouter($id_membre, $domaine_interet, $date_inscription, $id_evenement, $disponibilite);}
        
    }
}

$gestion = new GestionDon();
$gestion->Afficher();
?>