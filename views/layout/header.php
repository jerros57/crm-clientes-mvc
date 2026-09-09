<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRM Clientes - Sistema MVC</title>
    <!-- Bootstrap 5 CSS para diseño responsivo -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="public/css/styles.css">
</head>
<body class="bg-light d-flex flex-column min-vh-100">
<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm mb-4">
    <div class="container">
        <a class="navbar-brand fw-bold" href="index.php?action=index">CRM Clientes</a>
        <div class="navbar-nav ms-auto">
            <a class="nav-link text-white" href="index.php?action=index">Listado de Clientes</a>
            <a class="btn btn-outline-light ms-3" href="index.php?action=create">+ Nuevo Cliente</a>
        </div>
    </div>
</nav>
<main class="container flex-grow-1">