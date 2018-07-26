-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  jeu. 26 juil. 2018 à 19:19
-- Version du serveur :  5.6.38
-- Version de PHP :  7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `minegamers`
--
CREATE DATABASE IF NOT EXISTS `minegamers` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `minegamers`;

-- --------------------------------------------------------

--
-- Structure de la table `buildings`
--

DROP TABLE IF EXISTS `buildings`;
CREATE TABLE IF NOT EXISTS `buildings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` longtext NOT NULL,
  `descr` longtext NOT NULL,
  `img` longtext NOT NULL,
  `initial_amount` longtext NOT NULL,
  `initial_production` longtext NOT NULL,
  `initial_storage` longtext NOT NULL,
  `progress_amount` longtext NOT NULL,
  `progress_production` longtext NOT NULL,
  `progress_storage` longtext NOT NULL,
  `initial_time` longtext NOT NULL,
  `progress_time` longtext NOT NULL,
  `initial_point` longtext NOT NULL,
  `progress_point` longtext NOT NULL,
  `active_construct_instant` longtext NOT NULL,
  `active_construct_infinite` longtext NOT NULL,
  `active_point` longtext NOT NULL,
  `max_level` longtext NOT NULL,
  `energy_initial_produce` longtext NOT NULL,
  `energy_initial_consume` longtext NOT NULL,
  `energy_evolution_produce` longtext NOT NULL,
  `energy_evolution_consume` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Node`
--

DROP TABLE IF EXISTS `Node`;
CREATE TABLE IF NOT EXISTS `Node` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `owner` int(11) NOT NULL,
  `name` longtext NOT NULL,
  `buildings` longtext NOT NULL,
  `ressources` longtext NOT NULL,
  `last_update` int(16) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ressources`
--

DROP TABLE IF EXISTS `ressources`;
CREATE TABLE IF NOT EXISTS `ressources` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` longtext NOT NULL,
  `descr` longtext NOT NULL,
  `img` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` longtext NOT NULL,
  `descr` longtext NOT NULL,
  `img` longtext NOT NULL,
  `pass` longtext NOT NULL,
  `mail` longtext NOT NULL,
  `rank` varchar(60) NOT NULL DEFAULT 'Joueur',
  `actual_node` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
