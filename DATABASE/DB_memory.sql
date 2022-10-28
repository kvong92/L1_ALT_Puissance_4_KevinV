-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : ven. 28 oct. 2022 à 09:02
-- Version du serveur :  5.7.34
-- Version de PHP : 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `DB_memory`
--

-- --------------------------------------------------------

--
-- Structure de la table `game`
--

CREATE TABLE `game` (
  `id` int(11) UNSIGNED NOT NULL,
  `game_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `game`
--

INSERT INTO `game` (`id`, `game_name`) VALUES
(1, 'Facile'),
(2, 'Intermediaire'),
(3, 'Expert'),
(4, 'Impossible');

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) UNSIGNED NOT NULL,
  `gameID` int(11) UNSIGNED NOT NULL,
  `userID` int(11) UNSIGNED NOT NULL,
  `messages` varchar(255) NOT NULL,
  `messages_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `score`
--

CREATE TABLE `score` (
  `id` int(11) UNSIGNED NOT NULL,
  `userID` int(11) UNSIGNED NOT NULL,
  `gameID` int(11) UNSIGNED NOT NULL,
  `difficulty` varchar(255) NOT NULL,
  `score` int(255) NOT NULL,
  `game_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `score`
--

INSERT INTO `score` (`id`, `userID`, `gameID`, `difficulty`, `score`, `game_time`) VALUES
(1, 1, 1, 'easy', 100, '2022-10-26 15:01:12'),
(2, 4, 1, 'easy', 211, '2022-10-26 15:01:28'),
(3, 2, 1, 'easy', 442, '2022-10-26 15:01:28'),
(4, 5, 1, 'hard', 232, '2022-10-26 15:02:11'),
(5, 1, 1, 'hard', 34, '2022-10-26 15:02:26'),
(6, 4, 1, 'hard', 12, '2022-10-26 15:02:37'),
(7, 6, 2, 'medium', 20, '2022-10-28 07:55:25');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_password` varchar(64) NOT NULL,
  `username` varchar(255) NOT NULL,
  `member_since` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_seen` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `email`, `user_password`, `username`, `member_since`, `last_seen`) VALUES
(1, 'kevin@gmail.com', 'qwe', 'Kevin', '2022-10-26 16:56:16', '2022-10-26 14:55:42'),
(2, 'ilan@gmail.com', 'qwe', 'Ilan', '2022-10-26 16:56:16', '2022-10-26 14:55:42'),
(3, 'alexandre@gmail.com', 'qwe', 'Alexandre', '2022-10-26 16:56:46', '2022-10-26 14:56:20'),
(4, 'elisa@gmail.com', 'qwe', 'Elisa', '2022-10-26 16:56:46', '2022-10-26 14:56:20'),
(5, 'jay@gmail.com', 'qwe', 'Jay', '2022-10-26 16:57:06', '2022-10-26 14:56:48'),
(6, 'qwerty@gmail.com', '7e01d4a6a28659c5c0844f75c1e864ec5d09bca7d3d5a9b4c6a32dadf9e6296c', 'qwerty', '2022-10-27 11:05:34', '2022-10-28 11:01:35');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_MESSAGES_ID_GAME` (`gameID`),
  ADD KEY `FK_MESSAGES_ID_USER` (`userID`);

--
-- Index pour la table `score`
--
ALTER TABLE `score`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_SCORE_ID_USER` (`userID`),
  ADD KEY `FK_SCORE_ID_GAME` (`gameID`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `game`
--
ALTER TABLE `game`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `score`
--
ALTER TABLE `score`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `FK_MESSAGES_ID_GAME` FOREIGN KEY (`gameID`) REFERENCES `game` (`id`),
  ADD CONSTRAINT `FK_MESSAGES_ID_USER` FOREIGN KEY (`userID`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `score`
--
ALTER TABLE `score`
  ADD CONSTRAINT `FK_SCORE_ID_GAME` FOREIGN KEY (`gameID`) REFERENCES `game` (`id`),
  ADD CONSTRAINT `FK_SCORE_ID_USER` FOREIGN KEY (`userID`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
