<?php
// Start session and include files at the very top
session_start();
require_once '../Controllers/DonController.php';
require_once '../Controllers/HeaderController.php';
require_once '../Controllers/SidebarController.php';
require_once '../Configuration/Database.php';

class Gestion {
    public function Afficher() {
        // Check session first, before any output
        if (!isset($_SESSION['admin'])) {
            header("Location: AdminConnexion.php");
            exit();
        }

        $database = new Database();
        $db = $database->getConnection();
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id_don'], $_POST['statut'])) {
            $DonController = new DonController($db);
            $id_don = $_POST['id_don'];
            $statut = $_POST['statut'];
            
            if ($DonController->modifierStatut($id_don, $statut)) {
                header("Location: Dons.php?id_don=$id_don&success=StatutModifié");
                exit();
            }
        }

        // After all potential redirects, start output
        $HeaderController = new HeaderController($db);
        $HeaderController->EnvoyerHeader();
        
        $SidebarController = new SidebarController();
        $SidebarController->Afficher();
        
        $DonController = new DonController($db);
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $DonController->getDonDetails($id);
        }
    }
}

$admin = new Gestion();
$admin->Afficher();
?>