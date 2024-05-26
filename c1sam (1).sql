-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 27 juil. 2021 à 16:50
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `c1sam`
--

-- --------------------------------------------------------

--
-- Structure de la table `archives`
--

DROP TABLE IF EXISTS `archives`;
CREATE TABLE IF NOT EXISTS `archives` (
  `commande_ID` int(11) NOT NULL,
  `cmd_proprio_id` int(11) DEFAULT NULL,
  `cmd_debut` date DEFAULT NULL,
  `cmd_fin` date DEFAULT NULL,
  `cmd_presta` varchar(100) DEFAULT NULL,
  `cmd_reception` varchar(100) DEFAULT NULL,
  `cmd_drap_1` int(11) DEFAULT NULL,
  `cmd_drap_2` int(11) DEFAULT NULL,
  `cmd_couette_1` int(11) DEFAULT NULL,
  `cmd_couette_2` int(11) DEFAULT NULL,
  `cmd_kit_bebe` int(11) DEFAULT NULL,
  `cmd_lit_bebe` int(11) DEFAULT NULL,
  `cmd_srv` int(11) DEFAULT NULL,
  `cmd_srv_piscine` int(11) DEFAULT NULL,
  `cmd_tapis_bain` int(11) DEFAULT NULL,
  `cmd_torchon` int(11) DEFAULT NULL,
  `cmd_hygiene` int(11) DEFAULT NULL,
  `cmd_entretien` int(11) DEFAULT NULL,
  `cmd_mena_fin_prix` int(11) DEFAULT NULL,
  `cmd_deg` int(11) DEFAULT NULL,
  `cmd_remarque` varchar(10000) DEFAULT NULL,
  `cmd_client` varchar(100) DEFAULT NULL,
  `cmd_client_tel` varchar(20) DEFAULT NULL,
  `cmd_paiement` varchar(100) DEFAULT NULL,
  `cmd_presta_valide` int(11) DEFAULT '0',
  `cmd_valide` int(11) DEFAULT '0',
  `cmd_annexe` int(11) DEFAULT NULL,
  `cmd_date` date DEFAULT NULL,
  `cmd_prix` int(11) DEFAULT NULL,
  `cmd_date_validation_presta` datetime DEFAULT NULL,
  `cmd_date_validation_acceuil` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `archives`
--

INSERT INTO `archives` (`commande_ID`, `cmd_proprio_id`, `cmd_debut`, `cmd_fin`, `cmd_presta`, `cmd_reception`, `cmd_drap_1`, `cmd_drap_2`, `cmd_couette_1`, `cmd_couette_2`, `cmd_kit_bebe`, `cmd_lit_bebe`, `cmd_srv`, `cmd_srv_piscine`, `cmd_tapis_bain`, `cmd_torchon`, `cmd_hygiene`, `cmd_entretien`, `cmd_mena_fin_prix`, `cmd_deg`, `cmd_remarque`, `cmd_client`, `cmd_client_tel`, `cmd_paiement`, `cmd_presta_valide`, `cmd_valide`, `cmd_annexe`, `cmd_date`, `cmd_prix`, `cmd_date_validation_presta`, `cmd_date_validation_acceuil`) VALUES
(1, 2, '2020-05-22', '2020-05-31', 'Confort', 'location', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 'sdgsdf', 'ssdfsdf', 'sdfsdfsd', 'reglement_totale', 0, 0, 0, '2020-05-13', 194, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `commandes`
--

DROP TABLE IF EXISTS `commandes`;
CREATE TABLE IF NOT EXISTS `commandes` (
  `commande_ID` int(11) NOT NULL AUTO_INCREMENT,
  `cmd_proprio_id` int(11) DEFAULT NULL,
  `cmd_debut` date DEFAULT NULL,
  `cmd_fin` date DEFAULT NULL,
  `cmd_presta` varchar(100) DEFAULT NULL,
  `cmd_reception` varchar(100) DEFAULT NULL,
  `cmd_drap_1` int(11) DEFAULT NULL,
  `cmd_drap_2` int(11) DEFAULT NULL,
  `cmd_couette_1` int(11) DEFAULT NULL,
  `cmd_couette_2` int(11) DEFAULT NULL,
  `cmd_kit_bebe` int(11) DEFAULT NULL,
  `cmd_lit_bebe` int(11) DEFAULT NULL,
  `cmd_srv` int(11) DEFAULT NULL,
  `cmd_srv_piscine` int(11) DEFAULT NULL,
  `cmd_tapis_bain` int(11) DEFAULT NULL,
  `cmd_torchon` int(11) DEFAULT NULL,
  `cmd_hygiene` int(11) DEFAULT NULL,
  `cmd_entretien` int(11) DEFAULT NULL,
  `cmd_mena_fin_prix` int(11) DEFAULT NULL,
  `cmd_deg` int(11) DEFAULT NULL,
  `cmd_remarque` varchar(10000) DEFAULT NULL,
  `cmd_client` varchar(100) DEFAULT NULL,
  `cmd_client_tel` varchar(20) DEFAULT NULL,
  `cmd_paiement` varchar(100) DEFAULT NULL,
  `cmd_presta_valide` int(11) DEFAULT '0',
  `cmd_valide` int(11) DEFAULT '0',
  `cmd_annexe` int(11) DEFAULT NULL,
  `cmd_date` date DEFAULT NULL,
  `cmd_prix` int(11) DEFAULT NULL,
  `cmd_date_validation_presta` datetime DEFAULT NULL,
  `cmd_date_validation_acceuil` datetime DEFAULT NULL,
  PRIMARY KEY (`commande_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commandes`
--

INSERT INTO `commandes` (`commande_ID`, `cmd_proprio_id`, `cmd_debut`, `cmd_fin`, `cmd_presta`, `cmd_reception`, `cmd_drap_1`, `cmd_drap_2`, `cmd_couette_1`, `cmd_couette_2`, `cmd_kit_bebe`, `cmd_lit_bebe`, `cmd_srv`, `cmd_srv_piscine`, `cmd_tapis_bain`, `cmd_torchon`, `cmd_hygiene`, `cmd_entretien`, `cmd_mena_fin_prix`, `cmd_deg`, `cmd_remarque`, `cmd_client`, `cmd_client_tel`, `cmd_paiement`, `cmd_presta_valide`, `cmd_valide`, `cmd_annexe`, `cmd_date`, `cmd_prix`, `cmd_date_validation_presta`, `cmd_date_validation_acceuil`) VALUES
(2, 4, '2020-11-14', '2020-11-16', 'Confort', 'location', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2, 0, 110, 'dsf', 'srg', '', 'reglement_totale', 0, 1, 0, '2020-06-02', 318, NULL, NULL),
(3, 2, '2020-11-18', '2020-11-30', 'Confort', 'location', 18, 2, 3, 1, 1, 1, 1, 1, 1, 1, 1, 9, 45, 110, 'test modif ', 'nom ', 'tel', 'acompte', 0, 0, 436, '2020-10-16', 620, NULL, NULL),
(7, 2, '2020-11-22', '2020-12-01', 'Confort', 'location', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 'test0fr', 'test0', 'test0', 'reglement_totale', 0, 0, 0, '2020-11-09', 201, NULL, NULL),
(8, 2, '2020-11-22', '2020-11-29', 'Confort', 'location', 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 0, 110, '', '', '', 'reglement_totale', 0, 0, 0, '2020-11-09', 438, NULL, NULL),
(6, 2, '2020-11-13', '2020-11-15', 'Confort+', 'bureau', 13, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 13, 45, 110, 'test inverse', 'locataire nom', 'numero', 'acompte', 0, 0, 839, '2020-11-09', 1056, NULL, NULL),
(9, 2, '2020-11-20', '2020-11-22', 'Confort', 'location', 20, 19, 1, 1, 1, 1, 1, 1, 1, 1, 21, 22, 0, 0, 'test19', 'nom', 'numero', 'reglement_totale', 0, 0, 0, '2020-11-09', 894, NULL, NULL),
(10, 2, '2020-12-02', '2020-12-30', 'Confort', 'location', 1, 2, 0, 0, 0, 0, 0, 0, 0, 0, 30, 31, 0, 0, '', '', '', 'reglement_totale', 0, 0, 0, '2020-11-09', 535, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `proprio`
--

DROP TABLE IF EXISTS `proprio`;
CREATE TABLE IF NOT EXISTS `proprio` (
  `proprio_ID` int(11) NOT NULL AUTO_INCREMENT,
  `proprio_pseudo` varchar(100) NOT NULL,
  `proprio_mdp` varchar(1800) NOT NULL,
  `proprio_nom_prenom` varchar(100) DEFAULT NULL,
  `proprio_adresse_1` varchar(100) DEFAULT NULL,
  `propriete_adresse_1_1` varchar(100) DEFAULT NULL,
  `proprio_adresse_2` varchar(100) DEFAULT NULL,
  `proprio_tel` varchar(100) DEFAULT NULL,
  `proprio_email` varchar(100) DEFAULT NULL,
  `proprio_type` varchar(100) DEFAULT NULL,
  `propriete_adresse_1` varchar(100) DEFAULT NULL,
  `propriete_adresse_2` varchar(100) DEFAULT NULL,
  `propriete_superficie` int(11) DEFAULT NULL,
  `propriete_pieces` int(11) DEFAULT NULL,
  `propriete_couchage` int(11) DEFAULT NULL,
  `parking_type` int(11) DEFAULT NULL,
  `propriete_garage` varchar(20) DEFAULT NULL,
  `proprio_saison` varchar(20) DEFAULT NULL,
  `proprio_secteur` varchar(2) DEFAULT '1',
  `proprio_paiement` varchar(100) DEFAULT NULL,
  `proprio_date_inscri` datetime NOT NULL,
  `proprio_paiement_date` varchar(100) NOT NULL,
  PRIMARY KEY (`proprio_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `proprio`
--

INSERT INTO `proprio` (`proprio_ID`, `proprio_pseudo`, `proprio_mdp`, `proprio_nom_prenom`, `proprio_adresse_1`, `propriete_adresse_1_1`, `proprio_adresse_2`, `proprio_tel`, `proprio_email`, `proprio_type`, `propriete_adresse_1`, `propriete_adresse_2`, `propriete_superficie`, `propriete_pieces`, `propriete_couchage`, `parking_type`, `propriete_garage`, `proprio_saison`, `proprio_secteur`, `proprio_paiement`, `proprio_date_inscri`, `proprio_paiement_date`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'admin', 'admin', 'admin', 'admin', 'admin', 'admin', 'admin', 'admin', 7, 7, 7, 1, 'admin', 'admin', '1', 'fin_mois', '2020-05-11 00:00:00', 'Aucune'),
(2, 'test', '098f6bcd4621d373cade4e832627b4f6', 'test', 'test', 'test', 'test', 'test', 'test@test.com', 'pro', 'test', 'test', 1, 1, 1, 0, 'AOT', 'hiver_etee', '1', 'fin_mois', '2020-05-11 04:09:49', 'aucune'),
(3, 'testgrp1', '098f6bcd4621d373cade4e832627b4f6', 'test', 'test', '', 'test', 'test', 'testgrp1@sam.com', 'pro', 'test', 'test', 2, 2, 2, 0, '3', 'hiver_etee', '1', 'fin_mois', '2020-05-13 03:42:02', 'Aucune'),
(4, 'testemail', '098f6bcd4621d373cade4e832627b4f6', 'tet', 'CITE RES. ALBERT CAMUS', 'T302', 'VILLENEUVE D ASCQ', '0627442521', 'test@test.com', 'pro', 'CITE RES. ALBERT CAMUS', 'VILLENEUVE D ASCQ', 2, 1, 1, 0, '10', 'hiver_etee', '1', 'fin_saison', '2020-06-02 14:35:45', 'Aucune');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
