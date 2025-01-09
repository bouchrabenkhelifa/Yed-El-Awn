<?php
require_once '../Controllers/MenuController.php';
require_once '../Controllers/FooterController.php';
require_once '../Controllers/UserController.php';
require_once '../Views/LoginnView.php';
require_once '../Configuration/Database.php';
class Gestion {
    public function Afficher()
   {   
        $database = new Database();
        $db = $database->getConnection();
        $MenuController = new MenuController($db);
        $MenuController->afficherAsso();
        $UserController = new UserController($db);
        $log= new LoginnView();
        $error = null; 
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email'], $_POST['password'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $error = $UserController->login($email, $password);
        }
        $log->afficher($error);
        $FooterController = new FooterController();
        $FooterController->afficherFooter();
    
    
    }
}


$admin = new Gestion();
$admin->Afficher();
?>
