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
   public function modifierPartenaire() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'modifierPartenaire') {
        echo "Méthode modifierPartenaire atteinte !"; // Debug

        if (isset($_POST['idpartenaire']) && isset($_POST['nom']) && isset($_POST['telephone']) && isset($_POST['email']) && isset($_POST['ville'])) {
            $idpartenaire = $_POST['idpartenaire'];
            $nom = $_POST['nom'];
            $telephone = $_POST['telephone'];
            $email = $_POST['email'];
            $ville = $_POST['ville'];
            $result = $this->PartenaireModel->updatePartenaire($idpartenaire, $nom, $telephone, $email, $ville);
       
        }
    }
}
   
public function ajouterPartenaire($nom, $idcategorie, $telephone, $email, $ville, $logo, $password) {
    try {
        if (empty($nom) || empty($idcategorie) || empty($telephone) || empty($email) || empty($ville) || empty($password)) {
            throw new Exception("Tous les champs requis doivent être remplis.");
        }

        if (!isset($logo['name']) || $logo['error'] !== UPLOAD_ERR_OK) {
            throw new Exception("Erreur lors du téléchargement du logo.");
        }

        $targetDir = "../uploads/";  
        $targetFile = $targetDir . basename($logo["name"]);
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        $allowedTypes = array("jpg","svg", "jpeg", "png", "gif");
        if (!in_array($imageFileType, $allowedTypes)) {
            throw new Exception("Seuls les fichiers JPG,SVG, JPEG, PNG et GIF sont autorisés.");
        }

        if (!move_uploaded_file($logo["tmp_name"], $targetFile)) {
            throw new Exception("Erreur lors du téléchargement du logo.");
        }
        $this->PartenaireModel->ajouter($nom, $idcategorie, $telephone, $email, $ville, $targetFile, $password);
        echo "Partenaire ajouté avec succès.";
    } catch (Exception $e) {
        echo "Erreur : " . $e->getMessage();
    }
}

}

  ?>