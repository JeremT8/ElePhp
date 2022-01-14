-- Activation de la BD
USE php_cda_2022;

-- Création de la table
CREATE TABLE IF NOT EXISTS persons (
    id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    last_name VARCHAR(30) NOT NULL,
    first_name VARCHAR(30) NOT NULL
);

-- Insertion de données
INSERT INTO persons (first_name, last_name)
VALUES 
('Ada', 'Lovelace'),
('Sinead', 'O''Connor'),
('Algernon', 'Lovelace');


-- suppression des données
DELETE FROM persons WHERE id=2;

-- modification des données
UPDATE persons SET first_name = 'Siobhan' WHERE id= 3;

-- affichage des données
SELECT * FROM persons WHERE last_name='Lovelace';


--
CREATE TABLE IF NOT EXISTS addresses (
    id SMALLINT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
    rue VARCHAR(38) NOT NULL,
    code_postal CHAR(5) NOT NULL,
    ville VARCHAR(33) Not NULL
);


CREATE TABLE IF NOT EXISTS orders (
    id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    date_commande DATE NOT NULL,
    montant DECIMAL(6,2) NOT NULL
);