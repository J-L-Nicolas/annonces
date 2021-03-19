-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3307
-- Généré le : ven. 19 mars 2021 à 16:56
-- Version du serveur :  10.4.13-MariaDB
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `annonces`
--

-- --------------------------------------------------------

--
-- Structure de la table `annonces`
--

DROP TABLE IF EXISTS `annonces`;
CREATE TABLE IF NOT EXISTS `annonces` (
  `idAnnonce` int(11) NOT NULL AUTO_INCREMENT,
  `idUserAnnonce` int(11) NOT NULL,
  `idCategoryAnnonce` int(11) NOT NULL,
  `nameAnnonce` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `moreAnnonce` text COLLATE utf8mb4_bin NOT NULL,
  `priceAnnonce` float NOT NULL,
  `pictureAnnonce` varchar(254) COLLATE utf8mb4_bin NOT NULL,
  `dateCreateAnnonce` datetime(6) NOT NULL,
  PRIMARY KEY (`idAnnonce`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `annonces`
--

INSERT INTO `annonces` (`idAnnonce`, `idUserAnnonce`, `idCategoryAnnonce`, `nameAnnonce`, `moreAnnonce`, `priceAnnonce`, `pictureAnnonce`, `dateCreateAnnonce`) VALUES
(1, 4, 3, 'rtg 3090', 'un gpuultra puissant de 3e génération 20', 550.23, '1616091705_a3b20727e2b8bd940bf4.jpg', '2021-03-18 07:54:23.000000'),
(2, 4, 2, 'kamasutra ultime', 'différentes façons de faire du sport en équipe. ', 16.5, '1616073283_007e6a6e1f2da20ef769.jpg', '2021-03-18 08:14:43.000000'),
(3, 5, 4, 'jean', 'jean usager mode poussière très très très sale!!', 112.98, '1616073664_36dfdf44721530d4ff3f.jpg', '2021-03-18 08:21:04.000000'),
(4, 5, 3, 'RX 6800 XT', 'carte graphique haut de game ati 16go vram ', 450.98, '1616092107_fef2914766c46ba6c5a3.png', '2021-03-18 13:25:18.000000'),
(5, 5, 8, 'pripri', 'bad ass girl power in madinina!', 1.25, '1616092197_105e5ad550f6b06f16a1.jpg', '2021-03-18 13:29:57.000000'),
(6, 5, 3, 'ryzen 7 ', 'cpu bla bla bla 4.5ghz', 80.01, '1616095802_5674b9a99bc3bd1d63ca.jpg', '2021-03-18 14:30:02.000000'),
(7, 5, 1, 'moto', 'la moto de david super bien', 18785.6, '1616095838_2615b205a51f27c1ac0b.png', '2021-03-18 14:30:38.000000'),
(8, 5, 7, 'burger', 'de la viande super bonne a manger super la famille', 7.99, '1616095881_2467f2f6a36946134412.jpg', '2021-03-18 14:31:21.000000'),
(9, 5, 5, 'canapé', 'tres tres doux il est gris', 489.11, '1616095926_346cbbf7a334c322e031.jpg', '2021-03-18 14:32:06.000000'),
(10, 5, 2, 'really', 'livre de la vie sur la vie mdr life', 21.45, '1616095965_1c68cc35ecfe251995a5.jpg', '2021-03-18 14:32:45.000000'),
(11, 5, 2, 'smily', 'il fait du sourir lool mdr ptdr', 1.99, '1616096010_225a0d5bb1b16331770c.png', '2021-03-18 14:33:30.000000'),
(12, 4, 9, 'Tase', 'Très bien pour boire du café est regroupé tt les boissons', 7.36, '1616164839_06257de9cc24991ab194.jpg', '2021-03-19 09:35:29.000000');

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `idcategory` int(11) NOT NULL AUTO_INCREMENT,
  `nameCategory` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`idcategory`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`idcategory`, `nameCategory`) VALUES
(1, 'auto'),
(2, 'book'),
(3, 'informatique'),
(4, 'Vetements'),
(5, 'maison'),
(6, 'meuble'),
(7, 'nouriture'),
(8, 'film'),
(9, 'object');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `idUser` int(11) NOT NULL AUTO_INCREMENT,
  `nameUser` varchar(60) COLLATE utf8mb4_bin NOT NULL,
  `pwdUser` varchar(254) COLLATE utf8mb4_bin NOT NULL,
  `emailUser` varchar(60) COLLATE utf8mb4_bin NOT NULL,
  `telUser` varchar(15) COLLATE utf8mb4_bin NOT NULL,
  `sexUser` varchar(1) COLLATE utf8mb4_bin NOT NULL,
  `dateCreateUser` datetime(6) NOT NULL,
  PRIMARY KEY (`idUser`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`idUser`, `nameUser`, `pwdUser`, `emailUser`, `telUser`, `sexUser`, `dateCreateUser`) VALUES
(5, 'lemony', '$2y$10$w32DTC2.jTsiKPYv7aLEZ.YoFVJEJ51oPPEPL8c8NvWbRNKQFJXKu', 'lemony@live.fr', '0806034452', 'f', '0000-00-00 00:00:00.000000'),
(4, 'jeremy', '$2y$10$sIduTmAFDNWiCmcc3NLiXenBUuTaGacHvNixkcECGP9kK5sL1VTfC', 'jeremy@live.fr', '0696569874', 'h', '0000-00-00 00:00:00.000000');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
