-- phpMyAdmin SQL Dump
-- version 4.1.0
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Jeu 13 Février 2014 à 12:54
-- Version du serveur :  5.5.31-0+wheezy1
-- Version de PHP :  5.4.23-1~dotdeb.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `bdd`
--
CREATE DATABASE IF NOT EXISTS `bdd` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bdd`;

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id_contact` int(11) NOT NULL AUTO_INCREMENT,
  `title_contact` varchar(255) NOT NULL,
  `sujet_contact` varchar(255) NOT NULL,
  `content_contact` text NOT NULL,
  `nom_contact` varchar(255) NOT NULL,
  `prenom_contact` varchar(255) NOT NULL,
  `mail_contact` varchar(255) NOT NULL,
  `tel_contact` int(11) NOT NULL,
  PRIMARY KEY (`id_contact`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `education`
--

DROP TABLE IF EXISTS `education`;
CREATE TABLE IF NOT EXISTS `education` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title_education` varchar(255) NOT NULL,
  `datedebut_education` date NOT NULL,
  `datefin_education` date NOT NULL,
  `ecole_education` varchar(255) NOT NULL,
  `content_education` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `experience`
--

DROP TABLE IF EXISTS `experience`;
CREATE TABLE IF NOT EXISTS `experience` (
  `id_experience` int(11) NOT NULL AUTO_INCREMENT,
  `title_experience` varchar(255) NOT NULL,
  `datedebut_experience` date NOT NULL,
  `datefin_experience` date NOT NULL,
  `entreprise_experience` varchar(11) NOT NULL,
  `content_experience` text NOT NULL,
  PRIMARY KEY (`id_experience`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `realisation`
--

DROP TABLE IF EXISTS `realisation`;
CREATE TABLE IF NOT EXISTS `realisation` (
  `realisation_id` int(11) NOT NULL AUTO_INCREMENT,
  `title_realisation` varchar(255) NOT NULL,
  `date_realisation` date NOT NULL,
  `content_realisation` varchar(255) NOT NULL,
  `image_realisation` varchar(255) NOT NULL,
  PRIMARY KEY (`realisation_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nom_user` varchar(255) NOT NULL,
  `prenom_user` varchar(255) NOT NULL,
  `login_user` varchar(255) NOT NULL,
  `mdp_user` varchar(255) NOT NULL,
  `mail_user` varchar(255) NOT NULL,
  `naissance_user` date NOT NULL,
  `sexe_user` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
