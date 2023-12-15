-- Creare un nuovo database
CREATE DATABASE IF NOT EXISTS videoteca;
USE videoteca;

CREATE TABLE IF NOT EXISTS attori(
    id_attori INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50) NOT NULL,
    nascita DATE
);

CREATE TABLE IF NOT EXISTS film (
    id_film INT AUTO_INCREMENT PRIMARY KEY,
    nome_film VARCHAR(50) NOT NULL,
);

 CREATE TABLE IF NOT EXISTS contratto(
    id_contratto INT AUTO_INCREMENT PRIMARY KEY,
    id_film INT,
    FOREIGN KEY(id_film) REFERENCES film (id_film),
    id_attori INT,
    FOREIGN KEY(id_attori) REFERENCES attori (id_attori)
);

INSERT INTO (atorre1,attore2,attore3) VALEUS(‘Johnny Depp,’’,Jennifer Lawrence’,’Chris Hemsworth’)