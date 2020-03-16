USE Biblioteca;
CREATE TABLE IF NOT EXISTS libro(
    id int NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(200) NOT NULL,
    isbr VARCHAR(50) NOT NULL,
    autor VARCHAR(256) NOT NULL,
    editorial VARCHAR(10) NOT NULL,
    paginas int NOT NULL,
    clave VARCHAR(200) NOT NULL,
    PRIMARY KEY (id));