<?php
require_once '../Controllers/MenuController.php';
require_once '../Controllers/FooterController.php';
require_once '../Controllers/UserController.php';
require_once '../Controllers/PartenaireLoginController.php';
require_once '../Views/LoginView.php';
require_once '../Configuration/Database.php';

class Gestion {
    public function Afficher() {
        $database = new Database();
        $db = $database->getConnection();
        
        // Afficher le menu
        $MenuController = new MenuController($db);
        $MenuController->afficherAsso();
        
        // Initialiser les controllers
        $UserController = new UserController($db);
        $PartenaireController = new PartenaireLoginController($db);
        $log = new LoginView();
        $error = null;
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email'], $_POST['password'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $userType = $_POST['user_type'] ?? 'user'; // Par défaut 'user' si non spécifié
            
            // Gérer le login selon le type d'utilisateur
            if ($userType === 'user') {
                $error = $UserController->login($email, $password);
            } else if ($userType === 'partenaire') {
                $error = $PartenaireController->login($email, $password);
            }
        }
        
        // Afficher le formulaire
        $log->afficher($error);
        
        // Afficher le footer
        $FooterController = new FooterController();
        $FooterController->afficherFooter();
    }
}

$admin = new Gestion();
$admin->Afficher();
?>