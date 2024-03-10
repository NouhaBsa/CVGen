-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 09 mars 2024 à 18:10
-- Version du serveur : 8.2.0
-- Version de PHP : 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bd_cv`
--

-- --------------------------------------------------------

--
-- Structure de la table `signup`
--

DROP TABLE IF EXISTS `signup`;
CREATE TABLE IF NOT EXISTS `signup` (
  `nom` varchar(20) NOT NULL,
  `mdp` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  `mail` varchar(40) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `mail` (`mail`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `signup`
--

INSERT INTO `signup` (`nom`, `mdp`, `id`, `mail`) VALUES
('ben ammar', 'erty', 1, 'emna@gmail.com'),
('emna', '123', 9, 'emnagharsallah@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(10) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `adresse` varchar(30) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `competences` varchar(100) NOT NULL,
  `nomentre` varchar(10) NOT NULL,
  `poste` varchar(20) NOT NULL,
  `date_deb` date NOT NULL,
  `date_fin` date NOT NULL,
  `diplome` varchar(10) NOT NULL,
  `ecole` varchar(10) NOT NULL,
  `date` varchar(10) NOT NULL,
  `club` varchar(10) NOT NULL,
  `tache` varchar(10) NOT NULL,
  `langues` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=167 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `adresse`, `tel`, `email`, `competences`, `nomentre`, `poste`, `date_deb`, `date_fin`, `diplome`, `ecole`, `date`, `club`, `tache`, `langues`) VALUES
(156, 'baccar', 'iheb', 'aaaaaaaa', 'aaaaaaaaa', 'aaaaaaaaaaa@aaaaa', 'aaaaaaaa', 'aaaaa', 'aaaaaa', '1203-07-14', '5255-07-14', 'aaaaaa', 'aaaaa', 'aaaaa', 'aaaaaa', 'aaaaaaaaa', 'aaaaaaaa'),
(166, 'gharsallah', 'emna', 'rades', 'membre com', '************@gmail.c', 'je peux programmer en java c python ainsi que le développement web html css et backend (php)', 'teleperfor', 'teleconseillere ', '2023-06-12', '2023-09-12', 'licence en', 'essect', '2024', 'infolab', 'membre com', 'arabe,fran');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
