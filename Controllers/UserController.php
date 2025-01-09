<?php
require_once '../Models/UserModel.php';

class UserController {
    private $UserModel;
    private $LoginView;


    public function __construct($db) {
        $this->UserModel = new UserModel($db);

    }

    public function login($email, $password) {
        $User = $this->UserModel->getUser($email);
    
        if (!$User) {
            return "Nom d'utilisateur incorrect.";
        }
        if ($password !== $User['password']) {
            return "Mot de passe incorrect.";
        }
        session_start();
        $_SESSION['id'] = $User['id'];
        $_SESSION['email'] = $User['email'];
        header("Location: ../Pages/Adhesion.php");
        exit();  
    
    }
    
    
}

?>

