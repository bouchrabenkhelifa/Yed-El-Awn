<?php

require_once __DIR__ . '/../Models/DiaporamaModel.php';
require_once __DIR__ . '/../Views/ParametresView.php';

class ParametresController {
    private $DiaporamaModel;
    private $ParametresView;

    public function __construct($db) {
        $this->DiaporamaModel = new DiaporamaModel($db);
        $this->ParametresView = new ParametresView();
    }

    public function afficher() {
        $stmt = $this->DiaporamaModel->getDiapo();
        $Diapos = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $this->ParametresView->afficher($Diapos);
    }


    public function supprimer($id) {
        if ($this->DiaporamaModel->supprimer($id)) {
            header('Location: ../Pages/Parametres.php'); 
            exit();
        }
    }
    public function handleRequest() {
        if (isset($_GET['action'])) {
            switch ($_GET['action']) {
                case 'supprimer':
                    if (isset($_GET['id'])) {
                        $id = $_GET['id'];
                        $this->supprimer($id);
                    }
                    break;
            }
        }
    }
    
}
?>