CREATE DATABASE buscadorCan; --Llamamos asi la base de datos en lugar de prueba.
USE buscadorCan;

CREATE TABLE IF NOT EXISTS buscador (
    id INT AUTO_INCREMENT PRIMARY KEY,
    canciones VARCHAR(255) NOT NULL
);

INSERT INTO buscador (canciones) VALUES
('Bohemian Rhapsody'),
('Hotel California'),
('Shape of You'),
('Despacito'),
('Wonderwall');