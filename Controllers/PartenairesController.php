<?php
require_once __DIR__ . '/../Models/PartenairesModel.php';
require_once __DIR__ . '/../Views/PartenairesView.php';


class PartenairesController {
    private $PartenaireModel;
    private $PartenairesView;

    public function __construct($db) {
        $this->PartenaireModel = new PartenairesModel($db);  
        $this->PartenairesView = new PartenairesView();     
    }

    public function afficherPartenaires() {
        $stmt = $this->PartenaireModel->getAll();
        $partenaires = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $this->PartenairesView->afficherListePartenaires($partenaires);
        
    }
}
?>
