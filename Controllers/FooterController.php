<?php
require_once __DIR__ . '/../Views/FooterView.php';

class FooterController {
    private $FooterView;

    public function __construct() {
        $this->FooterView = new FooterView();
    }

    public function afficherFooter() {
        $this->FooterView->afficherFooter();
    }
}

?>
