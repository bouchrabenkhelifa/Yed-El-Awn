<?php

require_once __DIR__ . '/../Models/OffresModel.php';
require_once __DIR__ . '/../Views/OffresView.php';
require_once __DIR__ . '/../Models/PartenairesModel.php';

class OffresController {
    private $PartenaireModel;
    private $OffresView;
    private $OffresModel;


    public function __construct($db) {
        $this->PartenaireModel = new PartenairesModel($db);
        $this->OffresModel = new OffresModel($db);
        $this->OffresView = new OffresView();
    }

    public function afficherOffres() {
        $stmt = $this->PartenaireModel->getAll();
        $Offres = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $this->OffresView->afficherListePartenaires($Offres);
    }

    public function Ajouter($idpartenaire, $titre, $datedebut, $datefin, $description) {
      try {
          if (empty($idpartenaire) || empty($titre) || empty($datedebut) || empty($datefin) || empty($description)) {
              throw new Exception("Tous les champs requis doivent être remplis.");
          }
      
          $this->OffresModel->ajouter($idpartenaire, $titre, $datedebut, $datefin, $description);
          echo "Offre ajouté avec succès.";
      } catch (Exception $e) {
          echo "Erreur : " . $e->getMessage();
      }
  }
  
  
  
  
  }



  ?>
