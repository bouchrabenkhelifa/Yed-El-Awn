<?php
require_once '../Controllers/UserController.php';
require_once '../Configuration/Database.php';

// Initialize database connection
$database = new Database();
$db = $database->getConnection();

// Create UserController instance
$userController = new UserController($db);

// Call logout method
$userController->logout();
?>