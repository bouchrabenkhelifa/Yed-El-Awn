<?php

require_once '../Views/HeaderPartView.php';
require_once '../Configuration/Database.php';
class Gestion {
    public function Afficher()
   {  
        $log= new HeaderPartView();
        $log->afficher();
   
    
    
    }
}


$admin = new Gestion();
$admin->Afficher();
?>
