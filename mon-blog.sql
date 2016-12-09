-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 09 Décembre 2016 à 15:55
-- Version du serveur :  10.1.13-MariaDB
-- Version de PHP :  5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `mon-blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `custom_data` longtext NOT NULL,
  `categorie` varchar(255) NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `pages`
--

INSERT INTO `pages` (`id`, `slug`, `titre`, `custom_data`, `categorie`, `user_id`) VALUES
(1, 'test', 'Test', 'a:2:{s:14:"''presentation''";s:0:"";s:13:"''competences''";s:0:"";}', 'Test-categorie', NULL),
(2, 'test', 'Test', 'a:2:{s:14:"''presentation''";s:6:"blabla";s:13:"''competences''";s:3:"php";}', 'Test-categorie', NULL),
(3, 'test', 'Test', 'a:2:{s:14:"''presentation''";s:6:"blabla";s:13:"''competences''";s:3:"php";}', 'Test-categorie', NULL),
(4, 'ma-page', 'Ma page', 'a:2:{s:14:"''presentation''";s:9:"ezfzefzef";s:13:"''competences''";s:4:"fzef";}', 'equipe', 2),
(7, 'ma-page', 'Ma page', 'a:2:{s:12:"presentation";s:12:"YOOOOOOOOOOO";s:11:"competences";s:12:"YAAAAAAAAAAA";}', 'equipe', 1),
(8, 'ma-super-page', 'Ma Super page', 'a:2:{s:12:"presentation";s:6:"Hello ";s:11:"competences";s:0:"";}', 'basique', 1),
(9, 'contact', 'contact', 'a:2:{s:12:"presentation";s:30:"Vous êtes sur la page contact";s:11:"competences";s:6:"erzrze";}', 'basique', 0),
(10, 'a-propos', 'a propos', 'a:2:{s:12:"presentation";s:31:"Vous êtes sur la page a propos";s:11:"competences";s:0:"";}', 'basique', 1);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(62) NOT NULL,
  `email` varchar(62) NOT NULL,
  `password` varchar(62) NOT NULL,
  `role` varchar(62) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`) VALUES
(1, 'Nico', 'test@mail.com', '$2y$10$wnif3kWJKrHniA61igbm0OkknYdGaWiBuLQc/AhYahc6LCjnZ5Owq', 'admin'),
(2, 'Jane Doe', 'jane.doe@example.com', '$2y$10$YMMDKmpPYWDzph/NnxuhkucbOfo9dlkTWBI86V2pxfX4SZ5v276C2', 'admin');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
