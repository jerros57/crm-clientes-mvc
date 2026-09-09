<?php
require_once __DIR__ . '/../config/database.php';

class Cliente {
    private $conn;
    private $table = "clientes";

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    // Consultar todos los clientes almacenados
    public function listar() {
        $query = "SELECT * FROM " . $this->table . " ORDER BY id DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    // Insertar un nuevo cliente en la base de datos
    public function registrar($nombre, $correo, $telefono, $edad) {
        $query = "INSERT INTO " . $this->table . " (nombre, correo, telefono, edad) 
                  VALUES (:nombre, :correo, :telefono, :edad)";
        
        $stmt = $this->conn->prepare($query);

        // Sanitización para evitar inyecciones de código
        $nombre = htmlspecialchars(strip_tags($nombre));
        $correo = htmlspecialchars(strip_tags($correo));
        $telefono = htmlspecialchars(strip_tags($telefono));
        $edad = (int)$edad;

        $stmt->bindParam(":nombre", $nombre);
        $stmt->bindParam(":correo", $correo);
        $stmt->bindParam(":telefono", $telefono);
        $stmt->bindParam(":edad", $edad);

        return $stmt->execute();
    }
}