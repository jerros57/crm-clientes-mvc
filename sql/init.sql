CREATE DATABASE IF NOT EXISTS integradora;
USE integradora;

CREATE TABLE IF NOT EXISTS clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    correo VARCHAR(100) NOT NULL UNIQUE,
    telefono VARCHAR(20) NOT NULL,
    edad INT NOT NULL,
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Datos iniciales de demostración
INSERT INTO clientes (nombre, correo, telefono, edad) VALUES
('Carlos Mendoza', 'carlos.mendoza@email.com', '0991234567', 28),
('Lucía Fernández', 'lucia.f@email.com', '0987654321', 34);