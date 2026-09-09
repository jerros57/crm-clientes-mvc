# CRM Clientes - Arquitectura MVC con PHP & MySQL

Aplicación web para la gestión y registro de clientes desarrollada bajo el patrón de diseño **MVC (Modelo - Vista - Controlador)**, cumpliendo con los estándares de validación en frontend (JavaScript), backend seguro mediante **PDO**, y persistencia de datos relacional.

---

## 🛠 Justificación Técnica de Entorno: ¿Por qué Docker y no XAMPP?

Este proyecto fue desarrollado y empaquetado utilizando **contenedores Docker** en lugar de paquetes tradicionales como XAMPP / WampServer.

### Compatibilidad Multi-Arquitectura (ARM64 / Apple Silicon / Windows on ARM)
Los entornos clásicos como XAMPP dependen de binarios monolíticos precompilados en arquitecturas x86/x64, presentando fallos críticos de dependencias (`vcruntime140.dll`, bloqueos de socket en MySQL y degradación por emulación en Windows on ARM y Apple Silicon). 

Mediante Docker y Docker Compose, la aplicación se ejecuta de forma nativa e idéntica en:
* **Windows on ARM (ARM64)**
* **Apple Silicon (M1 / M2 / M3 / M4)**
* **Linux aarch64**


Garantiza portabilidad inmediata, aislamiento total de dependencias y despliegue en un solo comando sin requerir configuraciones manuales de puertos o servidores locales.

---

## 📂 Estructura del Proyecto

El código sigue estrictamente la separación de responsabilidades:

```text
crm-clientes-mvc/
├── config/
│   └── database.php           # Configuración de conexión PDO (UTF-8, usuario: root, BD: integradora)
├── controllers/
│   └── ClienteController.php  # Coordinador entre la lógica de negocio y las vistas
├── models/
│   └── Cliente.php            # Operaciones SQL con MySQL (SELECT, INSERT con Prepared Statements)
├── views/
│   ├── layout/
│   │   ├── header.php         # Estructura superior y navegación Bootstrap
│   │   └── footer.php         # Cierre de plantilla e inyección de scripts
│   ├── listar.php             # Tabla HTML para visualización de registros
│   └── crear.php              # Formulario interactivo de registro
├── public/
│   ├── css/
│   └── styles.css         # Reglas de estilo personalizadas
│   └── js/
│       └── validaciones.js    # Validaciones en cliente (campos vacíos, regex email, teléfono y rangos)
├── sql/
│   └── init.sql               # Script DDL/DML con la creación de la BD y registros iniciales
├── Dockerfile                 # Definición de Apache + PHP 8.2 con extensiones PDO MySQL
├── docker-compose.yml         # Orquestación de servicios (Web, MySQL 8.0 y phpMyAdmin)
└── index.php                  # Enrutador frontal del sistema