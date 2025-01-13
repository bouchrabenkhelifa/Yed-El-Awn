<?php
require_once '../Controllers/MenuController.php';
require_once '../Controllers/FooterController.php';
require_once '../Controllers/AideController.php';
require_once '../Views/UserNavbarView.php';
require_once '../Configuration/Database.php';
class Gestion {
    public function Afficher()
   { 

        $database = new Database();
        $db = $database->getConnection();
        $MenuController = new MenuController($db);
        $MenuController->afficherAsso();
        $Navbar = new UserNavbarView();
        $Navbar->afficher();
        $Aide = new DemandeAideView();
        $Aide->afficher();
        $FooterController = new FooterController();
        $FooterController->afficherFooter();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nom_demandeur = trim($_POST['nom_demandeur'] ?? '');
            $date_naissance = trim($_POST['date_naissance'] ?? '');
            $type_aide = trim($_POST['type_aide'] ?? '');
            $date_demande = trim($_POST['date_demande'] ?? '');
            $description = trim($_POST['description'] ?? '');
            $AideController= new AideController($db);
            $AideController->Ajouter($nom_demandeur, $date_naissance, $type_aide, $description,$date_demande);
    
    
    }
}

}
$admin = new Gestion();
$admin->Afficher();
?>
