<?php
require_once '../Controllers/HeaderController.php';
require_once '../Controllers/SidebarController.php';
require_once '../Controllers/BenevoleController.php';
require_once '../Views/AjouterBenevoleView.php';
require_once '../Configuration/Database.php';

class Gestion{
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
        $AjouterBenevoleView = new AjouterBenevoleView();
        $AjouterBenevoleView->Form();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id_membre = trim($_POST['id_membre'] ?? '');
            $disponibilite = trim($_POST['disponibilite'] ?? '');
            $domaine_interet = trim($_POST['domaine_interet'] ?? '');
            $date_inscription = trim($_POST['date_inscription'] ?? '');
            $id_evenement = trim($_POST['id_evenement'] ?? '');
            $BenevoleController = new BenevoleController($db);
            $BenevoleController->Ajouter($id_membre, $domaine_interet, $date_inscription, $id_evenement, $disponibilite);}
    }}
$gestion = new Gestion();
$gestion->Afficher();
?>