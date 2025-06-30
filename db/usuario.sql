CREATE DATABASE secureweb;
USE secureweb;
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    usuario VARCHAR(50) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    rol ENUM('admin', 'cliente') NOT NULL
);

INSERT INTO usuarios (nombre, usuario, password, rol)
VALUES 
('Admin', 'alejandra', SHA2('alejandra', 256), 'admin'),
('Cliente', 'allan', SHA2('allan', 256), 'cliente'),
('Cliente', 'pedro', SHA2('pedro', 256), 'cliente');