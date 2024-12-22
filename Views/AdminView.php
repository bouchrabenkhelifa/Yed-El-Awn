<?php
require_once "SidebarView.php";



class AdminView
{
    public function AfficherAdminPage()
    {
        $sidebar = new SidebarView();
        $sidebar->AfficherSidebar();
    

    }
}


$adminView = new AdminView();
$adminView->AfficherAdminPage();
?>
