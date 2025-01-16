<?php
require_once '../Controllers/OffresController.php';
require_once '../Controllers/HeaderController.php';
require_once '../Controllers/SidebarController.php';
require_once '../Controllers/OffresController.php';
require_once '../Views/AjouterOffreView.php';
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
        $AjouterOffreView = new AjouterOffreView();
        $AjouterOffreView->Form();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $idpartenaire = $_POST['idpartenaire'] ?? '';
            $titre = $_POST['titre'] ?? '';
            $datedebut = $_POST['datedebut'] ?? '';
            $datefin = $_POST['datefin'] ?? '';
            $description = $_POST['description'] ?? '';
            $OffreController = new OffresController($db);
            $OffreController->Ajouter($idpartenaire, $titre, $datedebut, $datefin, $description);
        }
        
    
    
    }
}


$admin = new Gestion();
$admin->Afficher();
?>
