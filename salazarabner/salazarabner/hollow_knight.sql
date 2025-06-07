-- Crear la base de datos
CREATE DATABASE IF NOT EXISTS hollow_knight;
USE hollow_knight;

-- Tabla 1: Personajes
CREATE TABLE personajes (
    id_personaje INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(50) NOT NULL,
    rol VARCHAR(50),
    ubicacion VARCHAR(50)
);

-- Tabla 2: Jefes
CREATE TABLE jefes (
    id_jefe INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(50) NOT NULL,
    dificultad VARCHAR(20),
    ubicacion VARCHAR(50)
);

-- Tabla 3: Lugares del Mapa
CREATE TABLE lugares_mapa (
    id_lugar INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(50) NOT NULL,
    descripcion VARCHAR(100),
    region VARCHAR(50)
);

-- Tabla 4: Hechizos
CREATE TABLE hechizos (
    id_hechizo INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(50) NOT NULL,
    descripcion VARCHAR(100),
    coste_alma INT
);

-- Tabla 5: Amuletos
CREATE TABLE amuletos (
    id_amuleto INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(50) NOT NULL,
    efecto VARCHAR(100),
    muescas INT
);

-- Tabla 6: Preferencias (tabla principal con relaciones)
CREATE TABLE preferencias (
    id INT PRIMARY KEY AUTO_INCREMENT,
    id_personaje INT,
    id_jefe INT,
    id_lugar INT,
    id_hechizo INT,
    id_amuleto INT,
    FOREIGN KEY (id_personaje) REFERENCES personajes(id_personaje),
    FOREIGN KEY (id_jefe) REFERENCES jefes(id_jefe),
    FOREIGN KEY (id_lugar) REFERENCES lugares_mapa(id_lugar),
    FOREIGN KEY (id_hechizo) REFERENCES hechizos(id_hechizo),
    FOREIGN KEY (id_amuleto) REFERENCES amuletos(id_amuleto)
);

-- Insertar datos de ejemplo
INSERT INTO personajes (nombre, rol, ubicacion) VALUES
('Hornet', 'Guerrera', 'Greenpath'),
('Grimm', 'Líder del Troupe', 'Dirtmouth');

INSERT INTO jefes (nombre, dificultad, ubicacion) VALUES
('False Knight', 'Fácil', 'Forgotten Crossroads'),
('Nightmare King', 'Muy Difícil', 'Nightmare Realm');

INSERT INTO lugares_mapa (nombre, descripcion, region) VALUES
('Greenpath', 'Área verde y frondosa', 'Hallownest'),
('Deepnest', 'Cueva oscura y peligrosa', 'Hallownest');

INSERT INTO hechizos (nombre, descripcion, coste_alma) VALUES
('Vengeful Spirit', 'Dispara un proyectil de alma', 33),
('Abyss Shriek', 'Grito poderoso desde el abismo', 40);

INSERT INTO amuletos (nombre, efecto, muescas) VALUES
('Wayward Compass', 'Muestra tu ubicación en el mapa', 1),
('Sprintmaster', 'Aumenta la velocidad al correr', 1);

INSERT INTO preferencias (id_personaje, id_jefe, id_lugar, id_hechizo, id_amuleto) VALUES
(1, 1, 1, 1, 1), -- Hornet, False Knight, Greenpath, Vengeful Spirit, Wayward Compass
(2, 2, 2, 2, 2); -- Grimm, Nightmare King, Deepnest, Abyss Shriek, Sprintmaster

-- Consulta para mostrar las preferencias relacionadas
SELECT 
    p.id AS 'ID',
    per.nombre AS 'Personaje Favorito',
    j.nombre AS 'Jefe Favorito',
    l.nombre AS 'Lugar Favorito',
    h.nombre AS 'Hechizo Favorito',
    a.nombre AS 'Amuleto Favorito'
FROM preferencias p
LEFT JOIN personajes per ON p.id_personaje = per.id_personaje
LEFT JOIN jefes j ON p.id_jefe = j.id_jefe
LEFT JOIN lugares_mapa l ON p.id_lugar = l.id_lugar
LEFT JOIN hechizos h ON p.id_hechizo = h.id_hechizo
LEFT JOIN amuletos a ON p.id_amuleto = a.id_amuleto;