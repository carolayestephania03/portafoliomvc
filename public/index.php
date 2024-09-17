<?php

require_once '../config/config.php';
$config = require '../config/config.php';

try {
    $db = new PDO("mysql:host={$config['db']['host']};dbname={$config['db']['dbname']}", $config['db']['user'], $config['db']['password']);
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
    exit;
}

require '../app/controllers/PortfolioController.php';

$controller = new PortfolioController($db);
$controller->index();
