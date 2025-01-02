<?php
require_once '../Models/PartenairesModel.php';
require_once '../Views/LoginView.php';

class PartenaireLoginController {
    private $PartenairesModel;
    private $LoginView;


    public function __construct($db) {
        $this->PartenairesModel = new PartenairesModel($db);

    }

    public function login($email, $password) {
        $partenaire = $this->PartenairesModel->getPartenaire($email);
    
        if (!$partenaire) {
            return "Nom d'utilisateur incorrect.";
        }
        if ($password !== $partenaire['password']) {
            return "Mot de passe incorrect.";
        }
        session_start();
        $_SESSION['partenaire'] = $partenaire;
        header("Location: ../Pages/DashboardPartenaire.php");
        exit();  
    
    }
    
    
}

?>

