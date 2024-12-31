<?php

require_once __DIR__ . '/../Models/CatalogueModel.php';
require_once __DIR__ . '/../Views/CatalogueView.php';

class CatalogueController {
    private $CatalogueModel;
    private $CatalogueView;

    public function __construct($db) {
        $this->CatalogueModel = new CatalogueModel($db);
        $this->CatalogueView = new CatalogueView();
    }


    public function afficherCatalogue() {
        $stmt = $this->CatalogueModel->getAll();
        $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Organiser les données par catégorie
        $organisedCategories = [];
        foreach ($categories as $row) {
            $categoryId = $row['idcategorie'];
            if (!isset($organisedCategories[$categoryId])) {
                $organisedCategories[$categoryId] = [
                    'categorie_nom' => $row['categorie_nom'],
                    'partenaires' => []
                ];
            }

            if ($row['idpartenaire']) {
                $organisedCategories[$categoryId]['partenaires'][] = [
                    'idpartenaire' => $row['idpartenaire'],
                    'nom' => $row['partenaire_nom'],
                    'logo' => $row['logo'],
                    'telephone' => $row['telephone'],
                    'email' => $row['email'],
                    'ville' => $row['ville']
                ];
            }
        }

        $this->CatalogueView->afficher($organisedCategories);
    }
}
?>
