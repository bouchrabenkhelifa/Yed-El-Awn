<?php
require_once '../Controllers/HeaderController.php';
require_once '../Controllers/SidebarController.php';
require_once '../Controllers/DonController.php';
require_once '../Views/AjouterDonView.php';

require_once '../Configuration/Database.php';

class GestionDon {
    public function Afficher() {
        session_start();
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
        $AjouterDonView = new AjouterDonView();
        $AjouterDonView->Form();


        // Traitement du formulaire
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