<?php
require_once __DIR__ . '/../models/Cliente.php';

class ClienteController {
    private $model;

    public function __construct() {
        $this->model = new Cliente();
    }

    // Cargar la lista de clientes hacia la vista
    public function index() {
        $clientes = $this->model->listar();
        require_once __DIR__ . '/../views/listar.php';
    }

    // Mostrar la vista del formulario
    public function create() {
        require_once __DIR__ . '/../views/crear.php';
    }

    // Procesar el formulario recibido por POST
    public function store() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = $_POST['nombre'] ?? '';
            $correo = $_POST['correo'] ?? '';
            $telefono = $_POST['telefono'] ?? '';
            $edad = $_POST['edad'] ?? 0;

            // Validación en servidor
            if (!empty($nombre) && !empty($correo) && !empty($telefono) && !empty($edad)) {
                $resultado = $this->model->registrar($nombre, $correo, $telefono, $edad);
                if ($resultado) {
                    header("Location: index.php?action=index&status=success");
                    exit;
                }
            }
            header("Location: index.php?action=create&status=error");
            exit;
        }
    }
}