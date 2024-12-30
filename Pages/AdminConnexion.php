<?php
require_once '../Controllers/MenuController.php';
require_once '../Controllers/FooterController.php';
require_once '../Views/AdminLogin.php';
require_once '../Configuration/Database.php';
class Gestion {
    public function Afficher() {   
        $database = new Database();
        $db = $database->getConnection();
        $MenuController = new MenuController($db);
        $MenuController->afficherAsso();
        $adminController = new AdminLoginController($db);
        $loginView = new AdminLoginView(); 
        $error = null; 
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nom'], $_POST['motdepasse'])) {
            $nom = $_POST['nom'];
            $motdepasse = $_POST['motdepasse'];
            $error = $adminController->login($nom, $motdepasse);
        }
        $loginView->afficher($error); 
        $FooterController = new FooterController();
        $FooterController->afficherFooter();
    }
    
}


$admin = new Gestion();
$admin->Afficher();
?>
