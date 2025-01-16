<?php

require_once __DIR__ . '/../Models/BeneficierModel.php';
require_once __DIR__ . '/../Views/BeneficierView.php';

class BeneficierController {
    private $BeneficierModel;
    private $BeneficierView;



    public function __construct($db) {
        $this->BeneficierModel = new BeneficierModel($db);
        $this->BeneficierView = new BeneficierView();
    }
    public function MembreBeneficies($idoffre) {
        $stmt = $this->BeneficierModel->get($idoffre);
        $Offres = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $this->BeneficierView->afficher($Offres);
    }



  
  
  
  }



  ?>
