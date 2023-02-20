-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 20 fév. 2023 à 08:57
-- Version du serveur : 5.7.40
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `movieflix`
--

-- --------------------------------------------------------

--
-- Structure de la table `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `email` varchar(250) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` varchar(250) NOT NULL,
  `prices` varchar(30) NOT NULL,
  `password` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  UNIQUE KEY `registerEmail` (`email`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf16;

--
-- Déchargement des données de la table `register`
--

INSERT INTO `register` (`email`, `name`, `address`, `prices`, `password`, `username`) VALUES
('admin@movieflix.be', 'x', 'Mapple Street, CA, USA', 'essentiel', '$2y$10$8yzERbJnjro5rnxAavuBxe44EdhkjYJxp7Qn1iY97ADCCVTx.9ULa', 'adminMovieFlix'),
('test@gmail.be', 'Calcagno Loïc', 'Rue des joncs, 32, Hainaut, Belgique', 'standard', '$2y$10$BkalmPeEJi44SDkPXqYdR.QtiQGB9YikgkH9oPVQjz0akSbkYY/MC', 'Lowiiiq');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
