CREATE DATABASE Washafo ;

CREATE TABLE prestation (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(255) NOT NULL,
    description TEXT,
    actif TINYINT(1) NOT NULL DEFAULT 1
);



CREATE TABLE tarif (
    id INT PRIMARY KEY AUTO_INCREMENT,
    prestation_id INT NOT NULL,
    nom VARCHAR(255) NOT NULL,
    prix DECIMAL(10,2) NOT NULL,
    FOREIGN KEY (prestation_id) REFERENCES prestation(id) ON DELETE CASCADE
);

INSERT INTO prestation (nom, description, actif) VALUES
('Nettoyage canapé', 'Canapés en tissu ou cuir nettoyés à domicile', 1),
('Nettoyage voiture', 'Nettoyage intérieur et extérieur de véhicules', 1),
('Nettoyage camionnette', 'Utilitaires et camionnettes nettoyés en profondeur', 1),
('Nettoyage matelas', 'Désinfection en profondeur des matelas à domicile', 1);


-- Tarifs pour canapé (prestation_id = 1)
INSERT INTO tarif (prestation_id, nom, prix) VALUES
(1, '1 place', 50.00),
(1, '2 places', 70.00),
(1, '3/4 places', 90.00),
(1, '5 places', 100.00),
(1, '6 places', 110.00),
(1, '7 places', 120.00),
(1, '8 places', 130.00);

-- Tarifs pour voiture (prestation_id = 2)
INSERT INTO tarif (prestation_id, nom, prix) VALUES
(2, 'Citadine', 60.00),
(2, 'Berline', 70.00),
(2, 'Break', 80.00),
(2, 'SUV', 80.00),
(2, 'Monospace', 90.00);

-- Tarifs pour camionnette (prestation_id = 3)
INSERT INTO tarif (prestation_id, nom, prix) VALUES
(3, '2/3 places', 70.00),
(3, '5/7 places', 110.00);

-- Tarifs pour matelas (prestation_id = 4)
INSERT INTO tarif (prestation_id, nom, prix) VALUES
(4, '1 place', 60.00),
(4, '2 places', 90.00);


ALTER TABLE prestation_tarif ADD COLUMN image VARCHAR(255);
