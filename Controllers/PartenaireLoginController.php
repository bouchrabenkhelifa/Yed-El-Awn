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
        $_SESSION['id'] = $partenaire['idpartenaire'];
        $_SESSION['nompartenaire'] = $partenaire['nom'];
        $_SESSION['logopartenaire'] = $partenaire['logo'];
        $_SESSION['partenaire'] = $partenaire;
        header("Location: ../Pages/DashboardPartenaire.php");
        exit();  
    
    
    }

    public function logout() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        $_SESSION = array();
        if (isset($_COOKIE[session_name()])) {
            setcookie(session_name(), '', time()-3600, '/');
        }
        session_destroy();
        header("Location: ../Pages/Connexion.php");
        exit();
    }    
    
    
}

?>

