<?php
require_once __DIR__ . '/../Models/TracabiliteModel.php';
require_once __DIR__ . '/../Views/TraceView.php';

class TracabiliteController {
    private $TracabiliteModel;
    private $TraceView;
    
    public function __construct($db) {
        $this->TracabiliteModel = new TracabiliteModel($db);
        $this->TraceView = new TraceView();
    }

    public function afficher($id_membre) {
        $stmt = $this->TracabiliteModel->getTrace($id_membre);
        
        if (!$stmt) {
            // Si aucune trace n'est trouvée, vous pouvez rediriger ou afficher un message
            echo "Aucune trace trouvée pour ce membre.";
        } else {
            $this->TraceView->afficherListe($stmt);  // Passer les traces au view pour l'affichage
        }
    }
}

  ?>
