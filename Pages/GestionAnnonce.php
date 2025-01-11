<?php
ob_start(); 
require_once '../Controllers/AjouterAnnonceController.php';
require_once '../Controllers/HeaderController.php';
require_once '../Controllers/SidebarController.php';
require_once '../Controllers/AnnoncesController.php';
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

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $titre = $_POST['titre'] ?? null;
            $description = $_POST['description'] ?? null;
            $date_publication = $_POST['date_publication'] ?? null; // Si le champ est dans le formulaire
        
            $AnnoncesController = new AnnoncesController($db);
            if ($AnnoncesController->ajouterAnnonce($titre, $description, $date_publication)) {
                header("Location: Annonces.php");
                exit();
            }
        }
        

        $HeaderController = new HeaderController($db);
        $HeaderController->EnvoyerHeader();
        
        $SidebarController = new SidebarController();
        $SidebarController->Afficher();
        
        $AjouterAnnonceController = new AjouterAnnonceController();
        $AjouterAnnonceController->afficherFormulaire();
    }
}

$admin = new Gestion();
$admin->Afficher();
ob_end_flush();
?>