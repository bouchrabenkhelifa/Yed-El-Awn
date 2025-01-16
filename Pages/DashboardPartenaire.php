<?php

require_once '../Views/HeaderPartView.php';
require_once '../Controllers/OffresController.php';
require_once '../Configuration/Database.php';

class Gestion {
    public function Afficher() {
        session_start();

        if (!isset($_SESSION['partenaire'])) {
            header("Location: Connexion.php");
            exit();
        }

        $idpartenaire = $_SESSION['id'];
        $headerView = new HeaderPartView();
        $headerView->afficher();

        $database = new Database();
        $db = $database->getConnection();        
        $offresController = new OffresController($db);
        $offresController->AfficherPartenaireOffres($idpartenaire);
    }


}
$admin = new Gestion();
$admin->Afficher();
?>
