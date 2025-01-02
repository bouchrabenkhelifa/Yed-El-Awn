<?php

require_once '../Views/HeaderPartView.php';
require_once '../Configuration/Database.php';
class Gestion {
    public function Afficher()
   {  session_start();
    if (!isset($_SESSION['partenaire'])) {
        header("Location: Connexion.php");  
        exit();
    }
        $database = new Database();
        $db = $database->getConnection();
        $log= new HeaderPartView();
        $log->afficher();
   
    
    
    }
}


$admin = new Gestion();
$admin->Afficher();
?>
