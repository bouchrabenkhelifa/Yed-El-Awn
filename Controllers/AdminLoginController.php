<?php
require_once '../Models/AdminModel.php';
require_once '../Views/AdminLogin.php';

class AdminLoginController {
    private $adminModel;
    private $AdminLogin;


    public function __construct($db) {
        $this->adminModel = new AdminModel($db);

    }

    public function login($nom, $motdepasse) {
        $admin = $this->adminModel->getAdmin($nom);
    
        if (!$admin) {
            return "Nom d'utilisateur incorrect.";
        }
        if ($motdepasse !== $admin['motdepasse']) {
            return "Mot de passe incorrect.";
        }
        
    
    }
    
    
}

?>

