-- Activation de la BDD
USE php_cda_2022;

-- Création de la table 
CREATE TABLE IF NOT EXISTS persons (
	id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
	last_name VARCHAR(30) NOT NULL,
	first_name VARCHAR(30) NOT NULL
);

-- Insertion de données
INSERT INTO persons (last_name, first_name) VALUES ('Tillet', 'Jeremy');
INSERT INTO persons (last_name, first_name) VALUES ('BB', 'Marie');
INSERT INTO persons (last_name, first_name) VALUES ('Sacco', 'Thibaut');
INSERT INTO persons (last_name, first_name) VALUES ('Ronaldo', 'Cristiano');


-- Supprimer des données
DELETE FROM persons WHERE id = 2;


-- Modification des données
UPDATE persons SET last_name = 'Bastard' WHERE id = 5;


-- Affichage des données
SELECT *  FROM persons;