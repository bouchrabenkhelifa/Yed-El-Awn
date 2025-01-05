<?php

require_once __DIR__ . '/../Models/PartenairesModel.php';
require_once __DIR__ . '/../Views/PartenairesView.php';
require_once __DIR__ . '/../Views/ModifierPartenaireView.php';
require_once __DIR__ . '/../Views/LogosSectionView.php';


class PartenairesController {
    private $PartenaireModel;
    private $PartenairesView;
    private $LogosSectionView;
    private $ModifierPartenaireView;
    public function __construct($db) {
        $this->PartenaireModel = new PartenairesModel($db);
        $this->PartenairesView = new PartenairesView();
        $this->LogosSectionView = new LogosSectionView();
        $this->ModifierPartenaireView = new ModifierPartenaireView();
    }
    public function handleRequest() {
      if (isset($_GET['action'])) {
          switch ($_GET['action']) {
              case 'supprimerPartenaire':
                  if (isset($_GET['id'])) {
                      $idpartenaire = $_GET['id'];
                      $this->supprimerPartenaire($idpartenaire);
                  }
                  break;
          }
      }
  }
    public function afficherPartenaires() {
        $stmt = $this->PartenaireModel->getAll();
        $partenaires = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $this->PartenairesView->afficherListePartenaires($partenaires);
    }
    public function afficherlogos() {
    $stmt = $this->PartenaireModel->getAll();
    $partenaires = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $this->LogosSectionView->afficher($partenaires);
    }
    public function supprimerPartenaire($idpartenaire) {
      if ($this->PartenaireModel->supprimer($idpartenaire)) {
          header('Location: ../Pages/Partenaires.php'); 
          exit();
      }
  }
  
    public function Afficher() {
      if (isset($_GET['id'])) {
          $idPartenaire = $_GET['id'];
          $partenaire = $this->PartenaireModel->getPartenaireById($idPartenaire);
          $this->ModifierPartenaireView->Modifier($partenaire);
      } else {
          echo "ID du partenaire manquant.";
      }
   }
   
}

  //  public function ajouterPartenaire($nom, $idcategorie, $telephone, $email, $ville, $logo, $password) {
   //     try {
     //       if (empty($nom) || empty($idcategorie) || empty($telephone) || empty($email) || empty($ville) || empty($password)) {
       //         throw new Exception("Tous les champs requis doivent être remplis.");
         //   }

   //         if (!isset($logo['name']) || $logo['error'] !== UPLOAD_ERR_OK) {
     //           throw new Exception("Erreur lors du téléchargement du logo.");
       //     }

         //   $this->PartenaireModel->ajouter($nom, $idcategorie, $telephone, $email, $ville, $logo, $password);
           // echo "Partenaire ajouté avec succès.";
      //  } catch (Exception $e) {
        //    echo "Erreur : " . $e->getMessage();
     //   }
  //  }

  ?>