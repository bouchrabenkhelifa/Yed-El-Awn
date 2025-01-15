<?php

require_once __DIR__ . '/../Models/DonModel.php';
require_once __DIR__ . '/../Views/DonsView.php';
require_once __DIR__ . '/../Views/DonDetailsView.php';

class DonController {
    private $DonModel;
    private $DonsView;
    private $DonDetailsView;
    
    public function __construct($db) {
        $this->DonModel = new DonModel($db);
        $this->DonsView = new DonsView();
        $this->DonDetailsView = new DonDetailsView();
    }

    public function afficherDon() {
        $stmt = $this->DonModel->getAll();
        $Don = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $this->DonsView->afficherListeDons($Don);
    }
    public function getDonDetails($id) {
        $Don = $this->DonModel->getDonById($id);
        $this->DonDetailsView->afficher($Don);

    
} 
public function AjouterDon($nom_donneur, $montant, $recu, $methode_payement, $type_don, $statut, $date_don) {
    try {
        // Vérification des champs obligatoires
        if (empty($nom_donneur) || empty($montant) || empty($recu) || empty($methode_payement) || empty($type_don) || empty($statut) || empty($date_don)) {
            throw new Exception("Tous les champs requis doivent être remplis.");
        }
       
        $targetDir = "../uploads/"; // Dossier de destination
        $targetFile = $targetDir . basename($recu["name"]);
        $allowedTypes = ["jpg", "jpeg", "png", "gif"];
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        if (!in_array($imageFileType, $allowedTypes)) {
            throw new Exception("Seuls les fichiers JPG, JPEG, PNG et GIF sont autorisés.");
        }

        if (!move_uploaded_file($recu["tmp_name"], $targetFile)) {
            throw new Exception("Erreur lors du téléchargement du reçu.");
        }

        // Enregistrer les données
        $this->DonModel->ajouter($nom_donneur, $montant, $targetFile, $methode_payement, $type_don, $statut, $date_don);
        echo "Don ajouté avec succès.";
    } catch (Exception $e) {
        echo "Erreur : " . $e->getMessage();
    }
}


public function modifierStatut($id_don, $statut) {
    if (!in_array($statut, ['En attente', 'Accepté', 'Refusé'], true)) {
        return false;
    }
    return $this->DonModel->updateStatut($id_don, $statut);
}
}
  ?>
