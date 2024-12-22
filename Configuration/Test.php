<?php
include_once 'Database.php';

$database = new Database();

$conn = $database->getConnection();

if ($conn) {
    echo "Connexion réussie à la base de données.";
} else {
    echo "La connexion a échoué.";
}
?>
