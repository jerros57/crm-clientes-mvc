<?php
// Configura la zona horaria a Guayaquil / Bogotá (UTC-5)
date_default_timezone_set('America/Guayaquil');

require_once __DIR__ . '/controllers/ClienteController.php';

$controller = new ClienteController();
$action = $_GET['action'] ?? 'index';

switch ($action) {
    case 'create':
        $controller->create();
        break;
    case 'store':
        $controller->store();
        break;
    case 'index':
    default:
        $controller->index();
        break;
}