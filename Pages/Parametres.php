
<?php
require_once '../Controllers/HeaderController.php';
require_once '../Controllers/SidebarController.php';
require_once '../Controllers/ParametresController.php';
require_once '../Configuration/Database.php';
class Gestion {
    public function Afficher()
   {   session_start();
    if (!isset($_SESSION['admin'])) {
        header("Location: AdminConnexion.php");  
        exit();
    }
        $database = new Database();
        $db = $database->getConnection();
        $HeaderController = new HeaderController($db);
        $HeaderController->EnvoyerHeader();
        $SidebarController = new SidebarController();
        $SidebarController->Afficher();
        $ParametresController = new ParametresController($db);
        $ParametresController->Afficher();
        $ParametresController->handleRequest();

       /* if (isset($_POST['action']) && $_POST['action'] === 'modifier') {
            $ParametresController->modifier();
        }*/
      
}

}
$admin = new Gestion();
$admin->Afficher();
?>
