-- Création de la base de données
CREATE DATABASE IF NOT EXISTS blog;

-- Utilisation de la base de données
USE blog;

-- Table pour les utilisateurs
CREATE TABLE IF NOT EXISTS users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Table pour les articles
CREATE TABLE IF NOT EXISTS articles (
    article_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(user_id) ON DELETE CASCADE
);

-- Table pour les commentaires
CREATE TABLE IF NOT EXISTS comments (
    comment_id INT AUTO_INCREMENT PRIMARY KEY,
    article_id INT,
    user_id INT,
    content TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (article_id) REFERENCES articles(article_id) ON DELETE CASCADE,
    FOREIGN KEY (user_id) REFERENCES users(user_id) ON DELETE CASCADE
);

-- Insérer des utilisateurs
INSERT INTO users (username, email, password) VALUES
('john_doe', 'john@example.com', 'password123'),
('jane_smith', 'jane@example.com', 'secret987'),
('bob_marley', 'bob@example.com', 'bobspassword');

-- Insérer des articles
INSERT INTO articles (user_id, title, content) VALUES
(1, 'Premier article', 'Ceci est le contenu du premier article écrit par John.'),
(2, 'Introduction à la programmation', 'Dans cet article, nous allons explorer les bases de la programmation.'),
(3, 'Voyage à travers la jungle', 'Récit des aventures de Bob lors de son voyage dans la jungle amazonienne.');

-- Insérer des commentaires
INSERT INTO comments (article_id, user_id, content) VALUES
(1, 2, 'Excellent article John, merci pour le partage !'),
(1, 3, 'J\'ai trouvé cet article très intéressant, merci pour ces informations.'),
(2, 1, 'J'ai hâte de lire la suite de cet article sur la programmation.'),
(3, 2, 'Wow Bob, quelle aventure ! Merci de partager votre expérience avec nous.');
