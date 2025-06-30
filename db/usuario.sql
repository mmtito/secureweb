INSERT INTO usuarios (nombre, usuario, password, rol)
VALUES 
('Admin', 'alejandra', SHA2('alejandra', 256), 'admin'),
('Cliente', 'allan', SHA2('allan', 256), 'cliente'),
('Cliente', 'pedro', SHA2('pedro', 256), 'cliente');