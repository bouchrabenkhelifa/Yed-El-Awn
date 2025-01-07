<?php

require_once __DIR__ . '/../Models/NewsModel.php';
require_once __DIR__ . '/../Views/NewsView.php';

class NewsController {
    private $NewsModel;
    private $NewsView;

    public function __construct($db) {
        $this->NewsModel = new NewsModel($db);
        $this->NewsView = new NewsView();
    }

    public function afficherNews() {
        $stmt = $this->NewsModel->getAll();
        $News = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $this->NewsView->afficher($News);
    }
}
  ?>
