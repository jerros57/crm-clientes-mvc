<?php
require_once __DIR__ . '/controllers/ClienteController.php';

$controller = new ClienteController();
$action = $_GET['action'] ?? 'index';

// Enrutamiento según la acción solicitada
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