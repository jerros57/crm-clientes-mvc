FROM php:8.2-apache

# Instalar extensiones necesarias para conectar PHP con MySQL mediante PDO y MySQLi
RUN docker-php-ext-install pdo pdo_mysql mysqli

# Habilitar mod_rewrite de Apache por si se requiere enrutamiento amigable
RUN a2enmod rewrite