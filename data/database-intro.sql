-- INTRODUCTION SQL


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


-- Création d'une nouvelle table
CREATE TABLE IF NOT EXISTS addresses (
    id SMALLINT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
    rue VARCHAR(38) NOT NULL,
    code_postal CHAR(5) NOT NULL,
    ville VARCHAR(33) Not NULL
);


-- Creation d'une nouvelle table
CREATE TABLE IF NOT EXISTS orders (
    id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    date_commande DATE NOT NULL,
    montant DECIMAL(6,2) NOT NULL
);


-- Permet de filtrer dans la table persons pour la ligne first_name commencant par un a.
SELECT * FROM persons WHERE first_name LIKE 'A%';


-- Permet de filtrer dans la table persons pour la ligne first_name qui correspond au info dans le tableau apres le IN.
SELECT * FROM persons WHERE first_name IN ('Martin', 'Tillet');


-- Donne le resultat de toutes les persons dont le prenom est different de 'Martin'
SELECT * FROM persons WHERE first_name != 'Martin';



-- Création d'une nouvelle table
DROP TABLE IF EXISTS `livres_simples`;
CREATE TABLE `livres_simples` (
`id` mediumint unsigned NOT NULL AUTO_INCREMENT,
`titre` varchar(80) NOT NULL,
`prix` decimal(5,2) NOT NULL,
`auteur` varchar(50) NOT NULL,
`editeur` varchar(50) NOT NULL,
`genre` varchar(50) NOT NULL,
`date_publication` date DEFAULT NULL,
`nationalite_auteur` varchar(50) DEFAULT NULL,
`langue` varchar(50) DEFAULT NULL,
`auteur_prenom` varchar(50) DEFAULT NULL,
`auteur_nom` varchar(50) DEFAULT NULL,
PRIMARY KEY (`id`)
);


-- Recuperer tous les livres de la catégorie Informatique ecris en Francais
SELECT * FROM livres_simples WHERE genre = 'Informatique' AND langue = 'français';


-- Recuperer tous les livres ecrits en italien et en castillan
SELECT * FROM livres_simples WHERE langue = 'italien' OR langue = 'castillan'; 
-- OU
SELECT * FROM livres_simples WHERE langue IN ('italien','castillan'); 


-- Recuperer les livres qui NE sont PAS ecrits en Anglais et dont le prix est inferieur à 12
SELECT * FROM livres_simples WHERE langue != 'anglais' AND prix < 12 ORDER BY prix DESC;

-- Les livres edité par Hachette
SELECT * FROM livres_simples WHERE editeur = 'Hachette';


-- Les livres ecrits par Joe Celko 
SELECT * FROM livres_simples WHERE auteur_nom = 'Celko' AND auteur_prenom = 'Joe';



-- INSERT INTO `livres_simples` VALUES ('1', 'Le guide du routard intergallactique', '13.00', 'Douglas Adams', 'Grasset', 'Science fiction', '2000-02-08', 'anglais', 'français',
-- 'Douglas', 'Adams'), ('2', 'Dune', '18.00', 'Frank Herbert', 'Hachette', 'Science fiction', '1995-03-09', 'américan', 'français', 'Frank', 'Herbert'), ('3', 'La nausée', '12.50',
-- 'J.P. Sartre', 'PUF', 'Essai', '1988-12-11', 'français', 'français', 'J.P.', 'Sartre'), ('4', 'Désir et servitude', '9.00', 'F. Lordon', 'PUF', 'Essai', '2002-06-26', 'français',
-- 'français', 'F.', 'Lordon'), ('5', 'Elévation', '11.00', 'David Brin', 'Grasset', 'Science fiction', '1998-12-17', 'américain', 'français', 'David', 'Brin'), ('6', 'Critique de la
-- raison pure', '12.00', 'Emmanuel Kant', 'PUF', 'Philosophie', '2000-09-04', 'français', 'français', 'Emmanuel', 'Kant'), ('7', 'Propos sur le bonheur', '9.00', ' Alain', 'PUF',
-- 'Philosophie', '1989-11-09', 'français', 'français', null, 'Alain'), ('8', 'Fondation', '14.00', 'Isaac Asimov', 'Robert Laffont', 'Science fiction', '1990-07-26', 'américain',
-- 'français', 'Isaac', 'Asimov'), ('9', 'En terre étrangère', '10.00', 'Robert Heinlein', 'Robert Laffont', 'Science fiction', '1996-08-01', 'américain', 'français', 'Robert',
-- 'Heinlein'), ('10', 'La République', '8.00', ' Platon', 'PUF', 'Philosophie', '1994-07-30', 'grecque', 'français', null, 'Platon'), ('11', 'Pensées', '11.00', 'Blaise Pascal',
-- 'Hachette', 'Philosophie', '1996-06-16', 'français', 'français', 'Blaise', 'Pascal'), ('12', 'Discours de la méthode', '9.00', 'Blaise Pascal', 'Hachette', 'Philosophie',
-- '2011-11-25', 'français', 'français', 'Blaise', 'Pascal'), ('13', 'Coder proprement', '18.00', 'Robert Martin', 'Dunod', 'Informatique', '1993-07-07', 'américain', 'français',
-- 'Robert', 'Martin'), ('14', 'SQL Avancé', '45.00', 'Joe Celko', 'Dunod', 'Informatique', '2005-02-28', 'américain', 'français', 'Joe', 'Celko'), ('15', 'Programmer avec MySQL',
-- '35.00', 'Christian Soutou', 'Eyrolles', 'Informatique', '1998-08-20', 'français', 'français', 'Christian', 'Soutou'), ('16', 'Crimes presque parfaits', '28.00', 'Patricia Highsmith',
-- 'Hachette', 'Roman policier', '1991-01-08', 'américain', 'français', 'Patricia', 'Highsmith'), ('17', 'Carol', '22.00', 'Patricia Highsmith', 'Hachette', 'Roman policier',
-- '2002-07-04', 'américain', 'français', 'Patricia', 'Highsmith'), ('18', 'Des chats et des hommes', '22.00', 'Patricia Highsmith', 'Hachette', 'Roman policier', '1992-11-03',
-- 'américain', 'français', 'Patricia', 'Highsmith'), ('19', 'Sur les pas de Ripley', '22.00', 'Patricia Highsmith', 'Hachette', 'Roman policier', '2000-01-02', 'américain', 'français',
-- 'Patricia', 'Highsmith'), ('20', 'L\'inconnu du Nord Express', '22.00', 'Patricia Highsmith', 'Hachette', 'Roman policier', '2004-11-04', 'américain', 'français', 'Patricia',
-- 'Highsmith'), ('21', 'Ripley et les ombres', '22.00', 'Patricia Highsmith', 'Hachette', 'Roman policier', '2007-07-26', 'américain', 'français', 'Patricia', 'Highsmith'), ('26',
-- 'D\'un retournement l\'autre', '9.00', 'F. Lordon', 'La Fabrique', 'Théâtre', '2006-08-24', 'français', 'français', 'F.', 'Lordon'), ('27', 'Imperium', '15.00', 'F. Lordon', 'La
-- Fabrique', 'Essai', '1993-11-19', 'français', 'français', 'F.', 'Lordon'), ('28', 'Et la vertu sauvera le monde', '6.00', 'F. Lordon', 'La Fabrique', 'Essai', '1992-10-16',
-- 'français', 'français', 'F.', 'Lordon'), ('29', 'Economistes à gages', '7.50', 'F. Lordon', 'La Fabrique', 'Essai', '1995-08-23', 'français', 'français', 'F.', 'Lordon'), ('30', 'SQL
-- for smarties', '55.86', 'Joe Celko', 'Morgan Kauffmann', 'Informatique', '2013-03-01', 'américain', 'anglais', 'Joe', 'Celko'), ('31', 'Data and Databases : Concepts in Practice',
-- '67.47', 'Joe Celko', 'Morgan Kauffmann', 'Informatique', '2002-04-15', 'américain', 'anglais', 'Joe', 'Celko'), ('32', 'Thinking in Sets : Auxiliary, Temporal, and Virtual Tables in
-- SQL', '28.43', 'Joe Celko', 'Morgan Kauffmann', 'Informatique', '2015-04-02', 'américain', 'anglais', 'Joe', 'Celko'), ('33', 'SQL Antipatterns', '33.44', 'Bill Karwin', 'O\'Reilly',
-- 'Informatique', '1992-10-12', 'américain', 'anglais', 'Bill', 'Karwin'), ('34', 'The pragmatic programmer : Form journeyman to master', '33.85', 'Andrew Hunt', 'Addison Wesley',
-- 'Informatique', '1991-06-15', 'américain', 'anglais', 'Andrew', 'Hunt'), ('35', 'Sei personaggi in cerca d\'autore', '12.00', 'Luigi Pirandello', 'Grasset', 'Théâtre', '1921-06-09',
-- 'italien', 'italien', 'Luigi', 'Pirandello'), ('36', 'La nuova colonia', '9.00', 'Luigi Pirandello', 'Grasset', 'Théâtre', '1926-03-24', 'italien', 'italien', 'Luigi', 'Pirandello'),
-- ('37', 'Il nome della rosa', '10.00', 'Umberto Ecco', 'Hachette', 'Roman historique', '1980-11-12', 'italien', 'italien', 'Umberto', 'Ecco'), ('38', 'Clean code', '24.00', 'Robert
-- Martin', 'Dunod', 'Informatique', '1989-11-04', 'Américain', 'anglais', 'Robert', 'Martin'), ('39', 'De bellum gallicum', '8.00', 'Julius Caesar', 'Hachette', 'Essai', '1990-06-12',
-- 'romain', 'latin', 'Julius', 'Caesar'), ('40', 'El Ingenioso Hidalgo Don Quijote de la Mancha', '8.00', 'Miguel de Cervantes', 'Hachette', 'Roman', '1970-10-16', 'espagnol',
-- 'castillan', 'Miguel', 'de Cervantes'), ('41', 'Los versos del capitán', '6.00', 'Pablo Neruda', 'Grasset', 'Poésie', '1984-11-25', 'chilien', 'castillan', 'Pablo', 'Neruda'), ('42',
-- 'Elogio de la sombra', '8.00', 'Jorge luis Borges', 'Grasset', 'Essai', '1978-02-05', 'argentin', 'castillan', 'Jorge Luis', 'Borges'), ('43', 'Pride and prejudice', '9.00', 'Jane
-- Austen', 'Hachette', 'Roman', '1982-08-14', 'anglais', 'anglais', 'Jane', 'Austen');



-- *****************************
-- AGREGATIONS
-- *****************************


SELECT  
        editeur, 
        sum(prix) as 'total',
        avg(prix) as 'moyenne',
        min(prix) as 'min',
        max(prix) as 'max',
        count(*) as 'nb',
        std(prix) as 'ecart-type' 
    FROM livres_simples
    GROUP BY editeur
    HAVING nb >= 3;


SELECT genre, count(*) as nb
FROM livres_simples 
GROUP BY genre;


SELECT DISTINCT editeur FROM livres_simples ORDER BY editeur;


SELECT count(distinct langue) FROM livres_simples;


SELECT  
    editeur,
    count(distinct genre) as nb
    FROM livres_simples
    GROUP BY editeur
    HAVING nb > 2;



SELECT 
    editeur,
    count(DISTINCT langue) as 'langue' 
    FROM livres_simples 
    GROUP BY editeur 
    HAVING langue > 2;

SELECT  last_name, count(*) as nb FROM persons
GROUP BY last_name
HAVING nb > 1;





-- /*************************
-- / LIAISON ENTRES TABLES
-- /*********************************

-- Ajout de la clef étrangère

ALTER TABLE persons
ADD COLUMN address_id SMALLINT UNSIGNED;


INSERT INTO addresses (rue, code_postal, ville) VALUES ('5 rue du caca', '75000', 'Paris');
INSERT INTO addresses (rue, code_postal, ville) VALUES ('5 rue du pipi', '69000', 'Lyon');
INSERT INTO addresses (rue, code_postal, ville) VALUES ('5 rue de la belle-ville', '13000', 'Marseille');

SELECT persons.id as id_persons, first_name, last_name, ville, addresses.id
FROM persons, addresses 
WHERE persons.address_id = addresses.id;

SELECT 
p.id as id_persons, first_name, last_name, ville, a.id as id_adresse
FROM persons as p 
JOIN  addresses as a
ON p.address_id = a.id 
WHERE ville = 'Paris';

SELECT 
p.id as id_persons, first_name, 
last_name, ville, a.id as id_adresse
FROM persons as p 
LEFT JOIN  addresses as a
ON p.address_id = a.id 
WHERE ville = 'Paris';

INSERT INTO orders (date_commande, montant, client_id) VALUES ('2021-11-02', '350', '1');



-- INTEGRITE REFERENTIELLE
ALTER TABLE persons ADD CONSTRAINT
persons_to_addresses
FOREIGN KEY (address_id)
REFERENCES addresses(id);


ALTER TABLE orders ADD COLUMN client_id INT UNSIGNED NOT NULL;

SELECT o.date_commande, o.montant, p.first_name, p.last_name, a.ville
FROM orders as o 
JOIN persons as p ON o.client_id = p.id
JOIN addresses as a ON p.address_id = a.id;



SET foreign_key_checks = 0;
CREATE TABLE IF NOT EXISTS livres(
    `id` mediumint unsigned AUTO_INCREMENT,
    `titre` varchar(80) NOT NULL,
    `prix` decimal(5,2) NOT NULL,
    `date_publication` date DEFAULT NULL,
    id_auteurs MEDIUMINT UNSIGNED,
    id_editeurs MEDIUMINT UNSIGNED,
    id_genres MEDIUMINT UNSIGNED,
    id_langues MEDIUMINT UNSIGNED,
    PRIMARY KEY (`id`),
    CONSTRAINT livres_to_auteurs 
    FOREIGN KEY (`id_auteurs`)
    REFERENCES auteurs(id),
    CONSTRAINT livres_to_editeurs 
    FOREIGN KEY (`id_editeurs`)
    REFERENCES editeurs(id),
    CONSTRAINT livres_to_genres 
    FOREIGN KEY (`id_genres`)
    REFERENCES genres(id),
    CONSTRAINT livres_to_langues 
    FOREIGN KEY (`id_langues`)
    REFERENCES langues(id)
);


TRUNCATE langues;

INSERT INTO langues (langues) 
(SELECT DISTINCT langue FROM livres_simples);


TRUNCATE genres;

INSERT INTO genres (genres) 
(SELECT DISTINCT genre FROM livres_simples);

TRUNCATE editeurs;

INSERT INTO editeurs (nom) 
(SELECT DISTINCT editeur FROM livres_simples);


TRUNCATE auteurs;

INSERT INTO auteurs (nom, prenom, nationalite_auteur) 
(SELECT DISTINCT auteur_nom, auteur_prenom, nationalite_auteur FROM livres_simples);


TRUNCATE livres;

INSERT INTO livres (nom, prenom, nationalite_auteur) 
(SELECT DISTINCT auteur_nom, auteur_prenom, nationalite_auteur FROM livres_simples);


TRUNCATE livres;


INSERT INTO livres (titre, prix, date_publication, id_auteurs, id_editeurs, id_genres, id_langues) 
(
    SELECT 
    titre, 
    prix, 
    date_publication,
    a.id as auteur_id,
    e.id as editeur_id,
    g.id as genre_id,
    l.id as langue_id
    FROM livres_simples as ls
    JOIN auteurs as a ON a.nom = ls.auteur_nom
    JOIN editeurs as e ON e.nom = ls.editeur
    JOIN genres as g ON g.genres = ls.genre
    JOIN langues as l ON l.langues = ls.langue
);

SET foreign_key_checks = 1;

-- Requete avec jointure pour obtenir toutes les infos du livres 
CREATE OR REPLACE VIEW vue_livres AS
SELECT 
l.id, titre, prix, 
DATE_FORMAT (date_publication, '%d/%m/%Y') as date_edition,
FLOOR(DATEDIFF(NOW(), date_publication)/365.25) as age_du_livre,
a.nom, a.prenom, 
CONCAT_WS(' ', a.prenom, a.nom) as auteur,
a.nationalite_auteur,
e.nom as editeurs,
g.genres, lg.langues
FROM livres as l
JOIN auteurs as a ON a.id = l.id_auteurs
JOIN editeurs as e ON e.id = l.id_editeurs
JOIN genres as g on g.id = l.id_genres
JOIN langues as lg on lg.id = l.id_langues;


SELECT * FROM vue_livres ORDER BY RAND() LIMIT 1;

SELECT * FROM vue_livres;



SELECT YEAR(date_publication) as annee, COUNT(*) as nb FROM livres GROUP BY annee;



CREATE TABLE IF NOT EXISTS auteurs (
    `id` mediumint unsigned AUTO_INCREMENT,
    `prenom` varchar(50) DEFAULT NULL,
    `nom` varchar(50) DEFAULT NULL,
    `nationalite_auteur` varchar(50) DEFAULT NULL,
    PRIMARY KEY (`id`)
);

CREATE TABLE IF NOT EXISTS editeurs (
    `id` mediumint unsigned AUTO_INCREMENT,
    `nom` varchar(50) DEFAULT NULL,
    PRIMARY KEY (`id`)
);

CREATE TABLE IF NOT EXISTS genres (
    `id` mediumint unsigned AUTO_INCREMENT,
    `genres` varchar(50) DEFAULT NULL,
    PRIMARY KEY (`id`)
);


CREATE TABLE IF NOT EXISTS langues (
    `id` mediumint unsigned AUTO_INCREMENT,
    `langues` varchar(50) DEFAULT NULL,
    PRIMARY KEY (`id`)
);






