CREATE DATABASE crud_personas
    CHARACTER SET utf8mb4
    COLLATE utf8mb4_unicode_ci;

USE crud_personas;

CREATE TABLE personas (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    apellido VARCHAR(100) NOT NULL,
    correo VARCHAR(150) NULL
);
