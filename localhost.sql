-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : jeu. 03 mars 2022 à 20:03
-- Version du serveur :  10.5.12-MariaDB
-- Version de PHP : 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `id17127196_monforfait`
--
CREATE DATABASE IF NOT EXISTS `id17127196_monforfait` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `id17127196_monforfait`;

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `idclient` int(11) NOT NULL,
  `nom` varchar(54) NOT NULL,
  `prenom` varchar(54) NOT NULL,
  `sexe` varchar(54) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `ville` varchar(255) DEFAULT NULL,
  `quartier` varchar(255) DEFAULT NULL,
  `x` float DEFAULT NULL,
  `y` float DEFAULT NULL,
  `numContact` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `idstatus` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`idclient`, `nom`, `prenom`, `sexe`, `adresse`, `ville`, `quartier`, `x`, `y`, `numContact`, `email`, `password`, `idstatus`) VALUES
(1, 'Ng', 'Dn', 'homme', 'BERKANE', NULL, NULL, NULL, NULL, '078559888', 'dddd.dev@gmail.com', '123789', 1),
(2, 'c', 'x', 'homme', 'x', NULL, NULL, NULL, NULL, '02222', 'xxxx@', '12222', 1),
(3, 'BERKANE', 'INSTITUT SPECALTSE DE TECHNOLOGTE', '', 'Berkane', NULL, NULL, NULL, NULL, '', 'nougaouidounia.dev@gmail.com', '', 1),
(4, '', '', '', 'BERKANE,DDDDD', NULL, NULL, NULL, NULL, '', '', '', 1);

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `idcommande` int(11) NOT NULL,
  `idclient` int(11) NOT NULL,
  `date_cmd` date NOT NULL,
  `status` varchar(54) NOT NULL,
  `idstatus` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`idcommande`, `idclient`, `date_cmd`, `status`, `idstatus`) VALUES
(1, 1, '2021-07-21', '', 1),
(2, 2, '2021-07-21', '', 1),
(3, 3, '2021-07-22', '', 1),
(4, 3, '2021-07-23', '', 1),
(5, 1, '2021-07-21', '', 1),
(6, 2, '2021-07-21', '', 1),
(7, 3, '2021-07-21', '', 1),
(8, 3, '2021-04-23', '', 1);

-- --------------------------------------------------------

--
-- Structure de la table `engagement`
--

CREATE TABLE `engagement` (
  `idengagement` tinyint(3) UNSIGNED NOT NULL,
  `engagement` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `nb_month` smallint(5) UNSIGNED NOT NULL DEFAULT 0,
  `idstatus` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `engagement`
--

INSERT INTO `engagement` (`idengagement`, `engagement`, `nb_month`, `idstatus`) VALUES
(1, 'sans engagement', 0, 1),
(2, '12 mois', 12, 1),
(3, '24 mois', 24, 1);

-- --------------------------------------------------------

--
-- Structure de la table `extra`
--

CREATE TABLE `extra` (
  `idextra` smallint(5) UNSIGNED NOT NULL,
  `extra` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `logo` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `idstatus` tinyint(3) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `extra`
--

INSERT INTO `extra` (`idextra`, `extra`, `logo`, `idstatus`) VALUES
(1, 'TV', 'icon-tv', 1),
(2, '4G', '', 1),
(3, 'Wi-Fi', '', 1),
(4, 'Modem', '', 1),
(5, 'VoIP', '', 1);

-- --------------------------------------------------------

--
-- Structure de la table `family`
--

CREATE TABLE `family` (
  `idfamily` int(10) UNSIGNED NOT NULL,
  `family` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `idstatus` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `family`
--

INSERT INTO `family` (`idfamily`, `family`, `idstatus`) VALUES
(1, 'Internet', 1),
(2, 'Mobile', 1);

-- --------------------------------------------------------

--
-- Structure de la table `forfait_family`
--

CREATE TABLE `forfait_family` (
  `idforfait_family` int(11) NOT NULL,
  `idfamily` int(11) NOT NULL,
  `forfait` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `idstatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `forfait_family`
--

INSERT INTO `forfait_family` (`idforfait_family`, `idfamily`, `forfait`, `idstatus`) VALUES
(1, 1, 'ADSL', 1),
(2, 1, 'Fibre optique', 1),
(3, 1, '4G', 1);

-- --------------------------------------------------------

--
-- Structure de la table `ligne_commande`
--

CREATE TABLE `ligne_commande` (
  `id_ligne_commande` int(11) NOT NULL,
  `idcommade` int(11) NOT NULL,
  `idoffer` int(11) NOT NULL,
  `quantité` int(11) NOT NULL,
  `prix` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ligne_commande`
--

INSERT INTO `ligne_commande` (`id_ligne_commande`, `idcommade`, `idoffer`, `quantité`, `prix`) VALUES
(1, 1, 60, 1, 180),
(2, 2, 60, 1, 180),
(3, 3, 60, 1, 200),
(4, 2, 59, 1, 200),
(5, 4, 59, 1, 200),
(6, 1, 61, 1, 200),
(7, 3, 61, 1, 180),
(8, 2, 62, 1, 500),
(9, 5, 62, 1, 180),
(10, 6, 62, 1, 180),
(11, 7, 9, 1, 200),
(12, 8, 10, 1, 200),
(13, 9, 11, 1, 200),
(14, 5, 11, 1, 200),
(15, 3, 11, 1, 180),
(16, 2, 11, 1, 500),
(17, 2, 9, 1, 500);

-- --------------------------------------------------------

--
-- Structure de la table `offer`
--

CREATE TABLE `offer` (
  `idoffer` bigint(20) UNSIGNED NOT NULL,
  `idsupplier` smallint(5) UNSIGNED NOT NULL,
  `idengagement` tinyint(3) UNSIGNED NOT NULL,
  `idfamily` int(10) UNSIGNED NOT NULL,
  `idforfait_family` int(11) NOT NULL,
  `offer` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(16,2) NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `date_save` datetime NOT NULL,
  `date_begin` date NOT NULL,
  `date_end` date NOT NULL,
  `promotion` int(11) NOT NULL DEFAULT 0,
  `idstatus` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `offer`
--

INSERT INTO `offer` (`idoffer`, `idsupplier`, `idengagement`, `idfamily`, `idforfait_family`, `offer`, `price`, `description`, `link`, `date_save`, `date_begin`, `date_end`, `promotion`, `idstatus`) VALUES
(59, 2, 2, 1, 1, ' ', 149.00, 'ADSL XTRA by inwi', 'https://inwi.ma/particuliers/offres-internet/adsl-xtra.html', '2021-06-25 22:39:55', '2021-06-25', '2021-08-25', 1, 1),
(60, 2, 1, 1, 3, ' ', 99.00, 'Forfait 22Go + 2H', 'https://inwi.ma/cart', '2021-07-22 19:10:00', '2021-07-22', '2021-08-17', 0, 1),
(61, 1, 2, 1, 1, ' ', 499.00, 'Forfait illimite tout inclus', 'https://boutique.orange.ma/fr/choix-de-parcours/forfait-illimite-appel-et-internet.html', '2021-07-22 19:46:42', '2021-07-22', '2021-08-20', 1, 1),
(62, 3, 3, 1, 2, ' ', 500.00, 'Fibre optique jusqu\'a 200Méga', 'https://www.iam.ma/catalogue/abonnements/abonnement-fo.aspx', '2021-07-22 21:04:22', '2021-07-22', '2021-08-17', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `offer_extra`
--

CREATE TABLE `offer_extra` (
  `idoffer_extra` bigint(20) UNSIGNED NOT NULL,
  `idoffer` bigint(20) UNSIGNED NOT NULL,
  `idextra` smallint(5) UNSIGNED NOT NULL,
  `idstatus` int(10) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `offer_extra`
--

INSERT INTO `offer_extra` (`idoffer_extra`, `idoffer`, `idextra`, `idstatus`) VALUES
(9, 9, 1, 1),
(10, 9, 4, 1),
(11, 10, 4, 1),
(12, 11, 1, 1),
(13, 11, 4, 1);

-- --------------------------------------------------------

--
-- Structure de la table `offer_promotion`
--

CREATE TABLE `offer_promotion` (
  `id_offer_promotion` int(11) NOT NULL,
  `idoffer` int(11) NOT NULL,
  `price` double NOT NULL,
  `descriptions` text DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `Date_Debut` date NOT NULL,
  `Date_Fin` date DEFAULT NULL,
  `promo` int(11) NOT NULL DEFAULT 0,
  `idstatus` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `offer_promotion`
--

INSERT INTO `offer_promotion` (`id_offer_promotion`, `idoffer`, `price`, `descriptions`, `link`, `Date_Debut`, `Date_Fin`, `promo`, `idstatus`) VALUES
(1, 59, 149, NULL, NULL, '2021-04-24', '2021-09-09', 1, 1),
(2, 59, 200, NULL, NULL, '2021-04-18', NULL, 0, 1),
(8, 61, 499, NULL, NULL, '2021-07-22', '2021-08-20', 1, 1),
(9, 61, 550, NULL, NULL, '2021-07-18', '2021-08-20', 0, 1),
(10, 62, 1000, NULL, NULL, '2021-06-18', '2021-06-20', 0, 1),
(11, 62, 550, NULL, NULL, '2021-07-22', '2021-08-20', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `offer_service`
--

CREATE TABLE `offer_service` (
  `idoffer_service` bigint(20) NOT NULL,
  `idoffer` bigint(20) UNSIGNED NOT NULL,
  `idservice` bigint(20) UNSIGNED NOT NULL,
  `idstatus` tinyint(3) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `offer_service`
--

INSERT INTO `offer_service` (`idoffer_service`, `idoffer`, `idservice`, `idstatus`) VALUES
(88, 59, 4, 1),
(89, 59, 7, 1),
(90, 59, 3, 1),
(91, 59, 9, 1),
(92, 60, 3, 1),
(93, 60, 7, 1),
(94, 60, 9, 1),
(98, 61, 3, 1),
(99, 61, 11, 1),
(100, 61, 7, 1),
(101, 61, 9, 1),
(106, 62, 2, 1),
(107, 62, 6, 1);

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

CREATE TABLE `service` (
  `idservice` bigint(20) UNSIGNED NOT NULL,
  `idservice_type` smallint(6) UNSIGNED NOT NULL,
  `service` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `unlimited` tinyint(3) UNSIGNED NOT NULL,
  `quota` bigint(20) UNSIGNED NOT NULL,
  `idstatus` tinyint(3) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `service`
--

INSERT INTO `service` (`idservice`, `idservice_type`, `service`, `unlimited`, `quota`, `idstatus`) VALUES
(2, 1, 'illimités vers fixes', 1, 0, 1),
(3, 1, 'illimités vers fixes et mobiles', 1, 0, 1),
(4, 5, '20 Mb', 20, 0, 1),
(5, 5, '1 Gb', 1, 0, 1),
(6, 5, '220 Mb', 220, 0, 1),
(7, 6, 'Oui', 0, 0, 1),
(8, 6, 'Livebox 4', 0, 0, 1),
(9, 7, '200', 0, 0, 1),
(10, 7, '180', 0, 0, 1),
(11, 5, '4G', 1, 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `service_type`
--

CREATE TABLE `service_type` (
  `idservice_type` smallint(5) UNSIGNED NOT NULL,
  `service_type` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `unity` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `idstatus` tinyint(4) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `service_type`
--

INSERT INTO `service_type` (`idservice_type`, `service_type`, `icon`, `unity`, `idstatus`) VALUES
(1, 'Appels', 'fas fa-phone-alt', 'H', 1),
(5, 'Debit', 'far fa-tachometer-alt-slow', '', 1),
(6, 'modem', 'fas fa-ethernet', '', 1),
(7, 'TV', 'fas fa-tv', '', 1);

-- --------------------------------------------------------

--
-- Structure de la table `supplier`
--

CREATE TABLE `supplier` (
  `idsupplier` smallint(5) UNSIGNED NOT NULL,
  `supplier` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `idfamily` int(11) DEFAULT NULL,
  `designation` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `logo` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `eligibilite` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cmd` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `idstatus` tinyint(3) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `supplier`
--

INSERT INTO `supplier` (`idsupplier`, `supplier`, `idfamily`, `designation`, `logo`, `image`, `eligibilite`, `cmd`, `idstatus`) VALUES
(1, 'Orange', 1, '', 'https://data.monforfait.fr/fournisseur/120/orange.png', 'https://www.weblife.fr/wp-content/uploads/2012/02/logo-orange.jpg', 'https://boutique.orange.fr/eligibilite', 'https://boutique.orange.ma/', 1),
(2, 'INWI', 1, '', 'https://upload.wikimedia.org/wikipedia/commons/d/dc/Inwi-Logo.png', 'https://2.bp.blogspot.com/-GL00jyXlX5c/UO3SmyB6ZWI/AAAAAAAAAFk/US9UiuCIhIg/s1600/INWI.PNG', 'https://inwi.ma/particuliers/offres-internet.html', NULL, 1),
(3, 'MAROC Telecom', 1, '', 'https://cmf.typepad.com/.a/6a01b7c6d86f99970b0240a46b69f4200d-600wi', 'https://www.infomediaire.net/wp-content/uploads/2017/07/maroc-telecom.jpg', 'http://www.iam.ma/particulier/aide-et-assistance/offremtbox/eligibilite-de-la-ligne.aspx', NULL, 1);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `iduser` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `login` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`iduser`, `name`, `login`, `password`) VALUES
(1, 'dounia', 'Dounia', '555d322f93a33b978b17acbdde960a3a');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`idclient`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`idcommande`);

--
-- Index pour la table `engagement`
--
ALTER TABLE `engagement`
  ADD PRIMARY KEY (`idengagement`);

--
-- Index pour la table `extra`
--
ALTER TABLE `extra`
  ADD PRIMARY KEY (`idextra`);

--
-- Index pour la table `family`
--
ALTER TABLE `family`
  ADD PRIMARY KEY (`idfamily`);

--
-- Index pour la table `forfait_family`
--
ALTER TABLE `forfait_family`
  ADD PRIMARY KEY (`idforfait_family`);

--
-- Index pour la table `ligne_commande`
--
ALTER TABLE `ligne_commande`
  ADD PRIMARY KEY (`id_ligne_commande`);

--
-- Index pour la table `offer`
--
ALTER TABLE `offer`
  ADD PRIMARY KEY (`idoffer`),
  ADD KEY `idengagement` (`idengagement`),
  ADD KEY `offer_ibfk_1` (`idfamily`),
  ADD KEY `idsupplier` (`idsupplier`);

--
-- Index pour la table `offer_extra`
--
ALTER TABLE `offer_extra`
  ADD PRIMARY KEY (`idoffer_extra`);

--
-- Index pour la table `offer_promotion`
--
ALTER TABLE `offer_promotion`
  ADD PRIMARY KEY (`id_offer_promotion`);

--
-- Index pour la table `offer_service`
--
ALTER TABLE `offer_service`
  ADD PRIMARY KEY (`idoffer_service`);

--
-- Index pour la table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`idservice`);

--
-- Index pour la table `service_type`
--
ALTER TABLE `service_type`
  ADD PRIMARY KEY (`idservice_type`);

--
-- Index pour la table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`idsupplier`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `idclient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `idcommande` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `engagement`
--
ALTER TABLE `engagement`
  MODIFY `idengagement` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `extra`
--
ALTER TABLE `extra`
  MODIFY `idextra` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `family`
--
ALTER TABLE `family`
  MODIFY `idfamily` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `forfait_family`
--
ALTER TABLE `forfait_family`
  MODIFY `idforfait_family` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `ligne_commande`
--
ALTER TABLE `ligne_commande`
  MODIFY `id_ligne_commande` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `offer`
--
ALTER TABLE `offer`
  MODIFY `idoffer` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT pour la table `offer_extra`
--
ALTER TABLE `offer_extra`
  MODIFY `idoffer_extra` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `offer_promotion`
--
ALTER TABLE `offer_promotion`
  MODIFY `id_offer_promotion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `offer_service`
--
ALTER TABLE `offer_service`
  MODIFY `idoffer_service` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT pour la table `service`
--
ALTER TABLE `service`
  MODIFY `idservice` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `service_type`
--
ALTER TABLE `service_type`
  MODIFY `idservice_type` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `idsupplier` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `offer`
--
ALTER TABLE `offer`
  ADD CONSTRAINT `offer_ibfk_1` FOREIGN KEY (`idfamily`) REFERENCES `family` (`idfamily`),
  ADD CONSTRAINT `offer_ibfk_2` FOREIGN KEY (`idsupplier`) REFERENCES `supplier` (`idsupplier`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
