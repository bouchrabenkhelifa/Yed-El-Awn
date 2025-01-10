<?php
ob_start(); // Add output buffering at the very start
require_once '../Controllers/AjouterMembreController.php';
require_once '../Controllers/HeaderController.php';
require_once '../Controllers/SidebarController.php';
require_once '../Controllers/MembresController.php';
require_once '../Configuration/Database.php';

class Gestion {
    public function Afficher() {
        session_start();
        
        if (!isset($_SESSION['admin'])) {
            header("Location: AdminConnexion.php");
            exit();
        }

        $database = new Database();
        $db = $database->getConnection();

        // Handle form submission
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nom = $_POST['nom'];
            $telephone = $_POST['telephone'];
            $adresse = $_POST['adresse'];
            $motdepasse = $_POST['motdepasse'];
            
            $MembresController = new MembresController($db);
            // Remove extra parenthesis and fix the if statement
            if ($MembresController->ajouterMembre($nom, $telephone, $adresse, $motdepasse)) {
                header("Location: Membres.php");
                exit(); // Add exit after redirect
            }
        }

        // Only output content if we're not redirecting
        $HeaderController = new HeaderController($db);
        $HeaderController->EnvoyerHeader();
        
        $SidebarController = new SidebarController();
        $SidebarController->Afficher();
        
        $AjouterMembresController = new AjouterMembresController();
        $AjouterMembresController->afficherFormulaire();
    }
}

// Add output buffering end
$admin = new Gestion();
$admin->Afficher();
ob_end_flush();
?>