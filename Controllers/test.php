<?php
require_once '../Configuration/Database.php';
require_once __DIR__ . '/MembresController.php';
$database = new Database();
$db = $database->getConnection();
$MembresController= new MembresController($db);
$MembresController->afficherMembres();
?>