-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  Dim 06 déc. 2020 à 14:54
-- Version du serveur :  10.1.26-MariaDB
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `courant`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `codeAdmin` int(11) NOT NULL,
  `NomAdmin` varchar(60) DEFAULT NULL,
  `PostnomUser` varchar(60) DEFAULT NULL,
  `Email` varchar(60) DEFAULT NULL,
  `UserNameAdmin` varchar(60) DEFAULT NULL,
  `Pass` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`codeAdmin`, `NomAdmin`, `PostnomUser`, `Email`, `UserNameAdmin`, `Pass`) VALUES
(1, 'SHETI', 'MALIKEWA Joe', 'shetimalikewajoe@gmail.com', 'sheti', '123'),
(2, 'BEN', 'WOLF', 'benwolf@gmail.com', 'ben', 'wolf'),
(3, 'BEN', 'WOLF', 'wolf@gmail.com', 'wolf', '1212');

-- --------------------------------------------------------

--
-- Structure de la table `avenue`
--

CREATE TABLE `avenue` (
  `codeAvenue` int(11) NOT NULL,
  `designationAvenue` varchar(60) DEFAULT NULL,
  `nomResponsable` varchar(60) DEFAULT NULL,
  `addresseResponsable` varchar(60) DEFAULT NULL,
  `codeUser` int(11) DEFAULT NULL,
  `codeAdmin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `avenue`
--

INSERT INTO `avenue` (`codeAvenue`, `designationAvenue`, `nomResponsable`, `addresseResponsable`, `codeUser`, `codeAdmin`) VALUES
(1, 'SPORT', 'PAPI', 'GOMA/Q.VIRUNGA', 2, 2),
(2, 'LAC', 'POPO', 'GOMA/Q.VIRUNGA/VILLE', 2, 1);

-- --------------------------------------------------------

--
-- Structure de la table `tmaison`
--

CREATE TABLE `tmaison` (
  `codeMaison` int(11) NOT NULL,
  `NumeroMaison` int(11) DEFAULT NULL,
  `ResponsableMaison` varchar(60) DEFAULT NULL,
  `AccesCourant` varchar(20) DEFAULT NULL,
  `NombreDeFoisAcces` varchar(100) DEFAULT NULL,
  `codeAvenue` int(11) DEFAULT NULL,
  `codeUser` int(11) DEFAULT NULL,
  `codeAdmin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tmaison`
--

INSERT INTO `tmaison` (`codeMaison`, `NumeroMaison`, `ResponsableMaison`, `AccesCourant`, `NombreDeFoisAcces`, `codeAvenue`, `codeUser`, `codeAdmin`) VALUES
(1, 2, 'JOSEPH', 'NON', '10', 2, 2, 2),
(2, 3, 'SOLEIL', 'OUI', '2', 1, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `tuser`
--

CREATE TABLE `tuser` (
  `codeUser` int(11) NOT NULL,
  `NomUser` varchar(60) DEFAULT NULL,
  `PostnomUser` varchar(60) DEFAULT NULL,
  `codeAdmin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tuser`
--

INSERT INTO `tuser` (`codeUser`, `NomUser`, `PostnomUser`, `codeAdmin`) VALUES
(1, 'jo', 'malikewa', 2),
(2, 'sheti', 'Mal', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`codeAdmin`);

--
-- Index pour la table `avenue`
--
ALTER TABLE `avenue`
  ADD PRIMARY KEY (`codeAvenue`),
  ADD KEY `FK_adminAv` (`codeAdmin`),
  ADD KEY `FK_userAv` (`codeUser`);

--
-- Index pour la table `tmaison`
--
ALTER TABLE `tmaison`
  ADD PRIMARY KEY (`codeMaison`),
  ADD KEY `FK_adminM` (`codeAdmin`),
  ADD KEY `FK_userM` (`codeUser`),
  ADD KEY `FK_avenueM` (`codeAvenue`);

--
-- Index pour la table `tuser`
--
ALTER TABLE `tuser`
  ADD PRIMARY KEY (`codeUser`),
  ADD KEY `FK_admin` (`codeAdmin`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `codeAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `avenue`
--
ALTER TABLE `avenue`
  MODIFY `codeAvenue` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `tmaison`
--
ALTER TABLE `tmaison`
  MODIFY `codeMaison` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `tuser`
--
ALTER TABLE `tuser`
  MODIFY `codeUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `avenue`
--
ALTER TABLE `avenue`
  ADD CONSTRAINT `FK_adminAv` FOREIGN KEY (`codeAdmin`) REFERENCES `admin` (`codeAdmin`),
  ADD CONSTRAINT `FK_userAv` FOREIGN KEY (`codeUser`) REFERENCES `tuser` (`codeUser`);

--
-- Contraintes pour la table `tmaison`
--
ALTER TABLE `tmaison`
  ADD CONSTRAINT `FK_adminM` FOREIGN KEY (`codeAdmin`) REFERENCES `admin` (`codeAdmin`),
  ADD CONSTRAINT `FK_avenueM` FOREIGN KEY (`codeAvenue`) REFERENCES `avenue` (`codeAvenue`),
  ADD CONSTRAINT `FK_userM` FOREIGN KEY (`codeUser`) REFERENCES `tuser` (`codeUser`);

--
-- Contraintes pour la table `tuser`
--
ALTER TABLE `tuser`
  ADD CONSTRAINT `FK_admin` FOREIGN KEY (`codeAdmin`) REFERENCES `admin` (`codeAdmin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
