-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : Dim 14 mars 2021 à 23:10
-- Version du serveur :  10.4.16-MariaDB
-- Version de PHP : 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `glowfe`
--

-- --------------------------------------------------------

--
-- Structure de la table `abonnee`
--

CREATE TABLE `abonnee` (
  `id` int(11) NOT NULL,
  `id_follower` int(11) NOT NULL,
  `id_following` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `abonnee`
--

INSERT INTO `abonnee` (`id`, `id_follower`, `id_following`) VALUES
(1, 61, '62'),
(2, 61, '62'),
(3, 61, '62'),
(4, 61, ''),
(5, 61, '62');

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `id_expediteur` varchar(50) NOT NULL,
  `id_destinataire` varchar(50) NOT NULL,
  `message` varchar(255) NOT NULL,
  `lu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `message`
--

INSERT INTO `message` (`id`, `id_expediteur`, `id_destinataire`, `message`, `lu`) VALUES
(74, 'samia.chlague@gmail.com', 'oum.chlague@gmail.com', 'hii', 0),
(75, 'oum.chlague@gmail.com', 'samia.chlague@gmail.com', 'hii', 0),
(76, 'oum.chlague@gmail.com', 'samia.chlague@gmail.com', 'gf', 0),
(77, 'oum.chlague@gmail.com', 'samia.chlague@gmail.com', 'bbb', 0);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nom_prenom` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `date_naissance` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `decrire` varchar(160) NOT NULL,
  `centre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `nom_prenom`, `mail`, `date_naissance`, `password`, `photo`, `decrire`, `centre`) VALUES
(61, 'oumaima chlague', 'oum.chlague@gmail.com', 'jour/mois/annee', 'adam13', 'oumaima chlague.png', '', ''),
(62, 'samia chlague', 'samia.chlague@gmail.com', 'jour/mois/annee', 'samia13', 'samia chlague.png', '', ''),
(63, 'saliim', 'salim@gmal.com', '', 'salim13', '', '', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `abonnee`
--
ALTER TABLE `abonnee`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_follower` (`id_follower`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `abonnee`
--
ALTER TABLE `abonnee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `abonnee`
--
ALTER TABLE `abonnee`
  ADD CONSTRAINT `abonnee_ibfk_1` FOREIGN KEY (`id_follower`) REFERENCES `user` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
