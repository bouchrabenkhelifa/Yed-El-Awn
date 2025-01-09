<?php
require_once '../Models/UserModel.php';
require_once '../Views/UsersView.php';

class UserController {
    private $UserModel;
    private $LoginView;
    private $UsersView;

    public function __construct($db) {
        $this->UserModel = new UserModel($db);
        $this->UsersView= new UsersView();

    }
    public function afficherUsers() {
        $stmt = $this->UserModel->getAll();
        $Users = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $this->UsersView->afficher($Users);
    }

    public function login($email, $password) {
        $User = $this->UserModel->getUser($email);
        if($User === 'bloque') {
            return "Votre compte est bloqué. Veuillez contacter l'administrateur.";
        }
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
    public function updateUserStatus($id, $statut) {
        if (!in_array($statut, ['validé', 'bloqué'], true)) {
            return false;
        }
        return $this->UserModel->updateStatus($id, $statut);
    }
    
}

?>

