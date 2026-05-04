CREATE DATABASE IF NOT EXISTS photorent_market;
USE photorent_market;

CREATE TABLE produits (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    categorie VARCHAR(100) NOT NULL,
    description TEXT NOT NULL,
    prix_vente DECIMAL(10,2),
    prix_location_jour DECIMAL(10,2),
    image VARCHAR(255),
    disponible BOOLEAN DEFAULT TRUE
);

INSERT INTO produits 
(nom, categorie, description, prix_vente, prix_location_jour, image, disponible)
VALUES
('Canon EOS 250D', 'Appareil photo reflex', 'Appareil photo reflex léger, idéal pour débuter en photographie.', 520.00, 25.00, 'https://images.unsplash.com/photo-1516035069371-29a1b244cc32', TRUE),

('Sony Alpha 7 III', 'Appareil photo hybride', 'Appareil photo hybride plein format, adapté aux portraits, vidéos et événements.', 1350.00, 45.00, 'https://images.unsplash.com/photo-1502920917128-1aa500764cbd', TRUE),

('Nikon D750', 'Appareil photo reflex', 'Reflex professionnel avec une excellente qualité d’image.', 890.00, 35.00, 'https://images.unsplash.com/photo-1510127034890-ba27508e9f1c', TRUE),

('Objectif Canon 50mm f/1.8', 'Objectif', 'Objectif lumineux parfait pour les portraits et les photos avec flou d’arrière-plan.', 130.00, 10.00, 'https://images.unsplash.com/photo-1617005082133-548c4dd27f35', TRUE),

('Trépied Manfrotto', 'Accessoire', 'Trépied stable pour photographie et vidéo.', 95.00, 8.00, 'https://images.unsplash.com/photo-1495707902641-75cac588d2e9', TRUE),

('Kit éclairage studio', 'Éclairage', 'Kit d’éclairage pour shooting photo, portraits et vidéos professionnelles.', 220.00, 18.00, 'https://images.unsplash.com/photo-1519741497674-611481863552', TRUE);