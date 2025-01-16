<?php

require_once '../Controllers/DonController.php';
require_once '../Views/FaireDonView.php';
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

        $AjouterDonView = new FaireDonView();
        $AjouterDonView->Form();
        $FooterController = new FooterController();
        $FooterController->afficherFooter();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $nom_donneur = trim($_POST['nom_donneur'] ?? '');
                $montant = trim($_POST['montant'] ?? '');
                $methode_payement = trim($_POST['methode_payement'] ?? '');
                $type_don = trim($_POST['type_don'] ?? '');
                $_FILES['recu'];
                $statut = trim($_POST['statut'] ?? '');
                $date_don = trim($_POST['date_don'] ?? '');
                $DonController = new DonController($db);
                $DonController->AjouterDon(
                    $nom_donneur,
                    $montant,
                    $_FILES['recu'],
                    $methode_payement,
                    $type_don,
                    $statut,
                    $date_don

                );
                exit;

          
        }
    }
}

$gestion = new GestionDon();
$gestion->Afficher();
?>