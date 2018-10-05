-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  ven. 28 sep. 2018 à 14:19
-- Version du serveur :  10.1.35-MariaDB
-- Version de PHP :  7.1.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `lushi_food_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie_item`
--

CREATE TABLE `categorie_item` (
  `id` int(11) NOT NULL,
  `nom_cat` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `mail` varchar(30) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `id_client` int(11) NOT NULL,
  `adresse_livraison` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `conversation`
--

CREATE TABLE `conversation` (
  `id` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `msg` varchar(100) NOT NULL,
  `date_conv` date DEFAULT NULL,
  `id_rest` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `cotation_item`
--

CREATE TABLE `cotation_item` (
  `id` int(11) NOT NULL,
  `id_item` int(11) NOT NULL,
  `nb_etoile` int(11) NOT NULL,
  `id_usr` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `cotation_resto`
--

CREATE TABLE `cotation_resto` (
  `id` int(11) NOT NULL,
  `id_resto` int(11) NOT NULL,
  `nb_etoile` int(11) NOT NULL,
  `id_client` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `detail_cmd`
--

CREATE TABLE `detail_cmd` (
  `id` int(11) NOT NULL,
  `id_cmd` int(11) NOT NULL,
  `id_item` int(11) NOT NULL,
  `qte` int(11) NOT NULL,
  `prix_total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `item`
--

CREATE TABLE `item` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `description` varchar(20) NOT NULL,
  `prix_unit` double NOT NULL,
  `id_categorie` int(11) NOT NULL,
  `id_resto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Message`
--

CREATE TABLE `Message` (
  `id` int(11) NOT NULL,
  `message` varchar(100) NOT NULL,
  `date_msg` date NOT NULL,
  `id_conv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `restaurent`
--

CREATE TABLE `restaurent` (
  `id` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `longitude` double NOT NULL,
  `latitude` double NOT NULL,
  `numero_contact` varchar(13) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categorie_item`
--
ALTER TABLE `categorie_item`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_client` (`id_client`);

--
-- Index pour la table `conversation`
--
ALTER TABLE `conversation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_conv` (`id_client`),
  ADD KEY `fk_conv_rest` (`id_rest`);

--
-- Index pour la table `cotation_item`
--
ALTER TABLE `cotation_item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cotation_item` (`id_item`),
  ADD KEY `id_usr` (`id_usr`);

--
-- Index pour la table `cotation_resto`
--
ALTER TABLE `cotation_resto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cotation` (`id_resto`),
  ADD KEY `id_client` (`id_client`);

--
-- Index pour la table `detail_cmd`
--
ALTER TABLE `detail_cmd`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_dtail_cmd` (`id_cmd`),
  ADD KEY `fk_dtail_item` (`id_item`);

--
-- Index pour la table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_item` (`id_categorie`),
  ADD KEY `fk_item_deux` (`id_resto`);

--
-- Index pour la table `Message`
--
ALTER TABLE `Message`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_conv` (`id_conv`);

--
-- Index pour la table `restaurent`
--
ALTER TABLE `restaurent`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categorie_item`
--
ALTER TABLE `categorie_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `conversation`
--
ALTER TABLE `conversation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `cotation_item`
--
ALTER TABLE `cotation_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `cotation_resto`
--
ALTER TABLE `cotation_resto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `detail_cmd`
--
ALTER TABLE `detail_cmd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Message`
--
ALTER TABLE `Message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `restaurent`
--
ALTER TABLE `restaurent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `client` (`id`);

--
-- Contraintes pour la table `conversation`
--
ALTER TABLE `conversation`
  ADD CONSTRAINT `fk_conv` FOREIGN KEY (`id_client`) REFERENCES `client` (`id`),
  ADD CONSTRAINT `fk_conv_rest` FOREIGN KEY (`id_rest`) REFERENCES `restaurent` (`id`);

--
-- Contraintes pour la table `cotation_item`
--
ALTER TABLE `cotation_item`
  ADD CONSTRAINT `cotation_item_ibfk_1` FOREIGN KEY (`id_usr`) REFERENCES `client` (`id`),
  ADD CONSTRAINT `fk_cotation_item` FOREIGN KEY (`id_item`) REFERENCES `item` (`id`);

--
-- Contraintes pour la table `cotation_resto`
--
ALTER TABLE `cotation_resto`
  ADD CONSTRAINT `cotation_resto_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `client` (`id`),
  ADD CONSTRAINT `fk_cotation` FOREIGN KEY (`id_resto`) REFERENCES `restaurent` (`id`);

--
-- Contraintes pour la table `detail_cmd`
--
ALTER TABLE `detail_cmd`
  ADD CONSTRAINT `fk_dtail_cmd` FOREIGN KEY (`id_cmd`) REFERENCES `commande` (`id`),
  ADD CONSTRAINT `fk_dtail_item` FOREIGN KEY (`id_item`) REFERENCES `item` (`id`);

--
-- Contraintes pour la table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `fk_item` FOREIGN KEY (`id_categorie`) REFERENCES `categorie_item` (`id`),
  ADD CONSTRAINT `fk_item2` FOREIGN KEY (`id_resto`) REFERENCES `restaurent` (`id`),
  ADD CONSTRAINT `fk_item_deux` FOREIGN KEY (`id_resto`) REFERENCES `restaurent` (`id`);

--
-- Contraintes pour la table `Message`
--
ALTER TABLE `Message`
  ADD CONSTRAINT `Message_ibfk_1` FOREIGN KEY (`id_conv`) REFERENCES `conversation` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
