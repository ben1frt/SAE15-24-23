-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 03 juin 2022 à 17:55
-- Version du serveur :  5.7.17
-- Version de PHP :  5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `wc902563`
--

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

CREATE TABLE `images` (
  `idImg` int(11) NOT NULL,
  `nomImg` varchar(70) NOT NULL,
  `nomTest` varchar(70) NOT NULL,
  `dateImg` date NOT NULL,
  `heure` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `images`
--

INSERT INTO `images` (`idImg`, `nomImg`, `nomTest`, `dateImg`, `heure`) VALUES
(13, 'img1', 'Test1', '2022-02-27', '18:34:25'),
(14, 'img2', 'Test1', '2021-02-27', '17:34:25'),
(15, 'img4', 'Test1', '2020-02-27', '16:34:25'),
(16, 'img1', 'Test2', '2019-02-27', '15:34:25'),
(17, 'img2', 'Test2', '2018-02-27', '14:34:25'),
(18, 'img5', 'Test2', '2017-02-27', '13:34:25');

-- --------------------------------------------------------

--
-- Structure de la table `personnel`
--

CREATE TABLE `personnel` (
  `id` int(11) NOT NULL,
  `nom` varchar(70) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `login` varchar(30) NOT NULL,
  `mdp` varchar(64) NOT NULL,
  `admin` tinyint(1) DEFAULT NULL,
  `cpt_renouvellement` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `personnel`
--

INSERT INTO `personnel` (`id`, `nom`, `prenom`, `login`, `mdp`, `admin`, `cpt_renouvellement`) VALUES
(10, 'faretie', 'benjamin', 'fb', '35ce1d4eb0f666cd136987d34f64aedc', 1, 5),
(11, 'perre', 'matthieu', 'pm', '5109d85d95fece7816d9704e6e5b1279', 0, 30),
(12, 'woodman', 'clara', 'wc', 'f19dd0a394936417e1b89b4a4d7b1b2d', 0, 90),
(13, 'pcam', 'pcam', 'pcam', '6d0007e52f7afb7d5a0650b0ffb8a4d1', 0, 90);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`idImg`);

--
-- Index pour la table `personnel`
--
ALTER TABLE `personnel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `images`
--
ALTER TABLE `images`
  MODIFY `idImg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT pour la table `personnel`
--
ALTER TABLE `personnel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
