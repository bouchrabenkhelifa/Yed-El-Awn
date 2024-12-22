<?php
require_once "../Views/SidebarView.php";



class SidebarController
{
    public function Afficher()
    {
        $sidebar = new SidebarView();
        $sidebar->AfficherSidebar();
    

    }
}

?>
