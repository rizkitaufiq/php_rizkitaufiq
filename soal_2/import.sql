CREATE DATABASE IF NOT EXISTS testdb;
USE testdb;

DROP TABLE IF EXISTS person;
CREATE TABLE person (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    alamat VARCHAR(255) DEFAULT NULL
);

DROP TABLE IF EXISTS hobi;
CREATE TABLE hobi (
    id INT AUTO_INCREMENT PRIMARY KEY,
    person_id INT,
    hobby VARCHAR(100),
    FOREIGN KEY (person_id) REFERENCES person(id) ON DELETE CASCADE
);

INSERT INTO person (nama, alamat) VALUES
('Sentot', 'bandung'),
('ali', 'jakarta'),
('mahmud', 'bali'),
('shena', 'USA');

INSERT INTO hobi (person_id, hobby) VALUES
(1, 'Membaca'),
(1, 'Menulis'),
(2, 'renang'),
(3, 'futsal'),
(3, 'renang'),
(3, 'membaca'),
(4, 'renang');
