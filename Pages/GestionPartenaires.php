<?php
require_once '../Controllers/AjouterPartenairesController.php';
require_once '../Controllers/HeaderController.php';
require_once '../Controllers/SidebarController.php';
require_once '../Controllers/PartenairesController.php';
require_once '../Controllers/../Configuration/Database.php';
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
        $AjouterpartenairesController = new AjouterPartenairesController();
        $AjouterpartenairesController->afficherFormulaire();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nom = $_POST['nom'] ?? '';
            $idcategorie = $_POST['idcategorie'] ?? '';
            $telephone = $_POST['telephone'] ?? '';
            $email = $_POST['email'] ?? '';
            $ville = $_POST['ville'] ?? '';
            $logo = $_FILES['logo'] ?? '';
            $password = $_POST['password'] ?? '';
            $partenairesController = new PartenairesController($db);
            $partenairesController->ajouterPartenaire($nom, $idcategorie, $telephone, $email, $ville, $logo, $password);
        }
        
    
    
    }
}


$admin = new Gestion();
$admin->Afficher();
?>
