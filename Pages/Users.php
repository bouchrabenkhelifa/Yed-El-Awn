<?php
require_once '../Controllers/UserController.php';
require_once '../Controllers/HeaderController.php';
require_once '../Controllers/SidebarController.php';
require_once '../Configuration/Database.php';

class Users {
    public function Afficher()
   {session_start();
    if (!isset($_SESSION['admin'])) {
        header("Location: AdminConnexion.php");  
        exit();
    }
        $database = new Database();
        $db = $database->getConnection();
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'], $_POST['statut'])) {
            $userController = new UserController($db);
            $id = $_POST['id'];
            $statut = $_POST['statut'];

            $result = $userController->updateUserStatus($id, $statut);
            if ($result) {
                header("Location: ../Pages/Users.php?success=StatutModifié");
            } else {
                header("Location: ../Pages/Users.php?error=ErreurModification");
            }
            exit();
        }

        $HeaderController = new HeaderController($db);
        $HeaderController->EnvoyerHeader();
        $UserController = new UserController($db);
        $UserController->afficherUsers();
        $SidebarController = new SidebarController();
        $SidebarController->Afficher();
    

    }
}


$admin = new Users();
$admin->Afficher();
?>
