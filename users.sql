DROP DATABASE IF EXISTS gsb;
CREATE DATABASE gsb;
USE gsb;

DROP TABLE IF EXISTS users;
CREATE TABLE users (
id INT AUTO_INCREMENT PRIMARY KEY,
        nom VARCHAR(50),
        prenom VARCHAR(50),
        email VARCHAR(100),
        pass VARCHAR(255),
        ville VARCHAR(100),
        role_compte VARCHAR(100),
        age INT(11)
    );
INSERT INTO users (`nom`, `prenom`, `email`, `pass`, `ville`, `role_compte`, `age`) VALUES
('Jean', 'Dupont', 'jean.dupont@gsb.com', 'password123', 'Lyon', 'admin', '38'),
('Pierre', 'Richard', 'pierre.richard@gsb.com', 'password456', 'Villeurbanne', 'utilisateur', '26'),
('Marie', 'Dupont', 'marie.dupont@gsb.com', 'password789', 'Lyon', 'comptable', '32');

SELECT * FROM users;