-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 25 mai 2020 à 01:13
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `id_product` int(11) NOT NULL AUTO_INCREMENT,
  `marque` varchar(255) NOT NULL,
  `modele` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `prix` float NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `sexe` varchar(1) NOT NULL DEFAULT 'h',
  `etat` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_product`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id_product`, `marque`, `modele`, `color`, `prix`, `img`, `sexe`, `etat`) VALUES
(1, 'Adidas', 'Yeezy 700 V3', 'Alvah', 300, 'yeezy.jpg', 'h', 1),
(3, 'Jordan', '1', 'Fearless UNC Chicago', 270, 'j1.jpg', 'h', 1),
(4, 'Nike', 'Dunk Low', 'Off White Pine Green', 395, 'sb.jpg', 'h', 1),
(5, 'Nike', 'Sacai', 'Summit White', 300, 'sacai.jpg', 'h', 1),
(6, 'Nike', 'Spiridon', 'Stussy', 270, 'stussy.png', 'h', 1),
(7, 'Nike', 'P-6000', 'Total Orange Black', 95, 'p6.jpg', 'h', 1),
(8, 'Nike', 'Air Max 270 React', 'Just Do It Grey', 130, '270.jpg', 'h', 1),
(9, 'Puma', 'Cell Alien OG ', 'White Black', 100, 'cell.jpg', 'h', 1),
(10, 'Jordan', '1 ', 'Maison Chateau Rouge', 250, 'fearless.jpg', 'h', 1),
(11, 'Jordan', '12', 'Fiba (2019)', 250, 'fiba.jpg', 'h', 1),
(12, 'Adidas', 'Yeezy 500', 'Stone', 350, '500.jpg', 'h', 1),
(13, 'Nike', 'Zoom Fly', 'Off-White Black Silver', 250, 'zoom.jpg', 'h', 1),
(14, 'Nike', 'Cortez', 'Particle Beige', 150, 'cortez.jpg', 'f', 1),
(15, 'Converse', 'Chuck Taylor', 'Comme Des Garcons PLAY Black', 130, 'cdg.jpg', 'f', 1),
(16, 'Nike', 'Air Max 2090', 'Women\'s', 150, '2090.jpg', 'f', 1),
(17, 'Nike', 'Air Max 97', 'Metallic Particle Beige', 180, '97.jpg', 'f', 1),
(18, 'Adidas', 'Yung-1', 'Collegiate Navy', 100, 'y1.jpg', 'f', 1),
(19, 'Nike', 'Air VaporMax', 'Triple Pink', 185, 'vp.jpg', 'f', 1),
(20, 'Adidas', 'Ozweego', 'Pusha T Tech Mineral', 100, 'oz.jpg', 'f', 1),
(21, 'Vans', 'Authentic', 'Platform Checkerboard', 70, 'vans.jpg', 'f', 1),
(22, 'Nike', 'Air Force 1', 'LX Tear Away Sail', 130, 'tear.jpg', 'f', 1),
(23, 'Converse ', 'Run Star Hike Hi', 'Black White Gum', 130, 'hike.jpg', 'f', 1),
(24, 'Nike', 'Air Force 1', 'Shadow Pale Ivory', 210, 'pale.jpg', 'f', 1),
(25, 'Jordan', '3', 'UNC', 250, 'unc.jpg', 'f', 1);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `Civilité` enum('Homme','Femme','Autre','') DEFAULT NULL,
  `Nom` varchar(55) NOT NULL,
  `Prenom` varchar(55) NOT NULL,
  `Adresse` varchar(255) DEFAULT NULL,
  `Ville` varchar(255) DEFAULT NULL,
  `CodePostal` int(20) DEFAULT NULL,
  `Telephone` int(20) DEFAULT NULL,
  `Email` varchar(255) NOT NULL,
  `MotDePasse` varchar(255) NOT NULL,
  `admin` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_user`, `Civilité`, `Nom`, `Prenom`, `Adresse`, `Ville`, `CodePostal`, `Telephone`, `Email`, `MotDePasse`, `admin`) VALUES
(1, NULL, 'Cai', 'Cedric', NULL, NULL, NULL, NULL, 'cai.cedric.95@gmail.com', 'azerty', 0),
(2, NULL, 'EL ASHRY', 'Sameh', NULL, NULL, NULL, NULL, 'SamehPro@outlook.fr', 'azerty', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
