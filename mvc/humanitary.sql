-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Lun 11 Septembre 2017 à 11:58
-- Version du serveur: 5.5.55-0ubuntu0.14.04.1
-- Version de PHP: 5.5.9-1ubuntu4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `humanitary`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_user` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(1023) COLLATE utf8_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `images` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id`, `id_user`, `title`, `content`, `date`, `images`) VALUES
(3, 1, 'dazdazdazdaz', 'dazdazdazdaz', '2017-09-11 09:05:06', '');

-- --------------------------------------------------------

--
-- Structure de la table `associations`
--

CREATE TABLE IF NOT EXISTS `associations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_sponsor` int(10) unsigned NOT NULL,
  `description` varchar(510) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `nom` varchar(65) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_article` int(10) unsigned NOT NULL,
  `id_user` int(10) unsigned NOT NULL,
  `content` varchar(1023) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `state` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `comments`
--

INSERT INTO `comments` (`id`, `id_article`, `id_user`, `content`, `date`, `state`) VALUES
(1, 3, 1, 'aaaaaaaaaaaaaaaa', '2017-09-11 09:07:24', 0),
(2, 3, 1, 'bbbbbbbbbbbbb', '2017-09-11 09:07:24', 0);

-- --------------------------------------------------------

--
-- Structure de la table `sponsors`
--

CREATE TABLE IF NOT EXISTS `sponsors` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(65) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `participation` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(65) CHARACTER SET latin1 NOT NULL,
  `nickname` varchar(65) CHARACTER SET latin1 NOT NULL,
  `telephone` varchar(15) CHARACTER SET latin1 NOT NULL,
  `adresse` varchar(255) CHARACTER SET latin1 NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(63) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `name`, `nickname`, `telephone`, `adresse`, `password`, `email`) VALUES
(1, 'toto', 'toto', '0123456789', 'toto', 'toto', 'toto@toto.toto'),
(2, 'never', 'trust', '0000', 'xcvvxc', '1234', '111111111'),
(3, '', '', '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
