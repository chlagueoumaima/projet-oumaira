-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 15 fév. 2021 à 23:11
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
(19, 'oumaima chlague', 'kljdkj-1892@hotmail.com', '11/03/1983', 'qssddgf124', '.jpeg', ',skqlldkf', ''),
(20, 'oumaima chlague', 'kljdkj-1892@hotmail.com', '11/03/1983', 'qssddgf124', 'oumaima chlague.jpeg', ',skqlldkf', ''),
(21, 'oumaima chlague', 'oum.chlague@gmail.com', '15/05/1980', 'hjsjkdsk', 'inconnu.jpg', '', ''),
(22, 'oumaima chlague', 'oum.chlague@gmail.com', '9/04/1980', 'frtgbdd', 'oumaima chlague.png', 'n,dsjkjkdskjlsqlkjsqlmkfdkjqsklj', ''),
(23, 'oumaima chlague', 'oum.chlague@gmail.com', '9/04/1980', 'frtgbdd', 'oumaima chlague.png', 'n,dsjkjkdskjlsqlkjsqlmkfdkjqsklj', ''),
(24, 'oumaima chlague', 'oum.chlague@gmail.com', '9/04/1980', 'frtgbdd', 'oumaima chlague.png', 'n,dsjkjkdskjlsqlkjsqlmkfdkjqsklj', ''),
(25, 'oumaima chlague', 'oum.chlague@gmail.com', '9/04/1980', 'jksjkkkk', 'oumaima chlague.png', 'etttuio', ''),
(26, '', '', '', '', 'inconnu.jpg', '', ''),
(27, 'ssoso', 'kljdkj-1892@hotmail.com', '14/04/1982', 'jklkllk', 'ssoso.png', 'drbvyoo', ''),
(28, 'ssoso', 'kljdkj-1892@hotmail.com', '14/04/1982', 'azsff', 'ssoso.png', 'drbvyoo', ''),
(29, 'ssoso', 'kljdkj-1892@hotmail.com', '14/04/1982', 'azsff', 'ssoso.png', 'drbvyoo', ''),
(30, '', '', '', '', 'inconnu.jpg', '', ''),
(31, 'oumaima chlague', 'kljdkj-1892@hotmail.com', '14/04/1986', 'ghhgdd', 'oumaima chlague.png', 'ggghhjj', ''),
(32, 'oumaima chlague', 'kljdkj-1892@hotmail.com', '14/04/1986', 'ghhgdd', 'oumaima chlague.png', 'ggghhjj', 'plotique local,Football,Musique classique,Pop,films'),
(33, 'oumaima chlague', 'oum.chlague@gmail.com', '13/06/2000', 'afrteh', 'oumaima chlague.jpeg', 'ana oumaima', 'plotique local,Football,Musique classique,films');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
