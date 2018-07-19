-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  jeu. 19 juil. 2018 à 03:18
-- Version du serveur :  5.6.38
-- Version de PHP :  7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `minegamers`
--

-- --------------------------------------------------------

--
-- Structure de la table `buildings`
--

CREATE TABLE `buildings` (
  `id` int(11) NOT NULL,
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
  `energy_evolution_consume` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `buildings`
--

INSERT INTO `buildings` (`id`, `name`, `descr`, `img`, `initial_amount`, `initial_production`, `initial_storage`, `progress_amount`, `progress_production`, `progress_storage`, `initial_time`, `progress_time`, `initial_point`, `progress_point`, `active_construct_instant`, `active_construct_infinite`, `active_point`, `max_level`, `energy_initial_produce`, `energy_initial_consume`, `energy_evolution_produce`, `energy_evolution_consume`) VALUES
(1, 'Building 1', 'Le premier batiment', '', '10,10', '1,1', '0,0', '42,42', '54,54', '0,0', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, 'toto', 'toto est un batiment basique', '', '10,20', '42,42', '0,0', '42,42', '42,42', '0,0', '12', '25', '', '', '', '', '', '', '', '', '', ''),
(9, 'Quartier General', 'Dans le quartier général du village, vous pouvez construire de nouveaux bâtiments ou améliorer ceux existants. Plus le niveau de votre quartier général est élevé, plus vos constructions se font rapidement.', '', '90,80', '0,0', '0,0', '25,25', '0,0', '0,0', '10', '25', '1', '33', '0', '0', '1', '30', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Structure de la table `ressources`
--

CREATE TABLE `ressources` (
  `id` int(11) NOT NULL,
  `name` longtext NOT NULL,
  `descr` longtext NOT NULL,
  `img` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ressources`
--

INSERT INTO `ressources` (`id`, `name`, `descr`, `img`) VALUES
(3, 'Ressource 3', 'La ressource 3 est une troisième ressource qui peux etre utilises pour de nombreux batiments!', ''),
(4, 'Ressource 4', 'La ressource 4 est une nouvelle ressource creer pour essayer la notification de creation', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `buildings`
--
ALTER TABLE `buildings`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ressources`
--
ALTER TABLE `ressources`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `buildings`
--
ALTER TABLE `buildings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `ressources`
--
ALTER TABLE `ressources`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

