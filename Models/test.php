<?php

require_once __DIR__ . '/PartenairesModel.php';
$database = new Database();
$db = $database->getConnection();
$PartenaireModel = new PartenairesModel($db);

?>
