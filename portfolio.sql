-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 18 oct. 2020 à 14:33
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `portfolio`
--

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `firstName`, `lastName`, `mail`, `content`, `createdAt`) VALUES
(3, 'momo', 'amin', 'test@gmail.com', 'test numero 2', '2020-10-18 14:23:02'),
(4, 'bbb', 'academy', 'tesgggt@gmail.com', 'ici le test numero 2', '2020-10-18 14:24:53');

-- --------------------------------------------------------

--
-- Structure de la table `projets`
--

DROP TABLE IF EXISTS `projets`;
CREATE TABLE IF NOT EXISTS `projets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `lienSite` varchar(255) NOT NULL,
  `maquette` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `projets`
--

INSERT INTO `projets` (`id`, `titre`, `description`, `lienSite`, `maquette`) VALUES
(5, 'Musculation Bras de Fer App', 'PHP, Bootstrap, JavaScript, MySQL', 'https://www.bras-de-fer-france.mohamed-bensersa.fr/', 'Fitness.jpg'),
(9, 'Le Café Shop', 'Responsive Design, JavaScript, HTML5,CSS3', 'https://www.accro-cafe.mohamed-bensersa.fr/', '2.jpg'),
(10, 'Dragon-Slayer App', 'un jeu de combat basé sur JavaScript, HTML5, CSS3', 'https://github.com/Momo1991Amin/Dragon-Slayer-', 'dragon.jpg'),
(11, 'math-mental', 'jeu de calcul mental avec JavaScript, HTML ,CSS', 'https://www.math-mental.mohamed-bensersa.fr/', 'math.jpg'),
(12, 'Dynamique Responsive Portfolio (ce site Web)', 'réalisé en HTML , CSS , PHP ,JavaScript et MYSQL.', 'https://www.mohamed-bensersa.fr/', '5.jpg'),
(13, 'Cup-of-Tea', 'Javascript , HTML ,CSS', 'https://github.com/Momo1991Amin/Cup-of-Tea', 'cop-of-tea.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(100) NOT NULL DEFAULT 'client',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `firstName`, `lastName`, `email`, `password`, `role`) VALUES
(1, 'mohamed', 'admnistrateur', 'admin@gmail.com', '$2y$10$VZjxPTIVdj75MLkxLijuwOjkez8LBfWS2NuyEHzLYnRlEUKbUStYq', 'admin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
