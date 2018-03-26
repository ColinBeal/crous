-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 26, 2018 at 11:57 AM
-- Server version: 5.6.34-log
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crous`
--

-- --------------------------------------------------------

--
-- Table structure for table `statut`
--

CREATE TABLE IF NOT EXISTS `statut` (
  `login` varchar(20) NOT NULL,
  `bourse` varchar(20) NOT NULL DEFAULT 'oui',
  `montant` int(11) NOT NULL DEFAULT '155'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `statut`
--

INSERT INTO `statut` (`login`, `bourse`, `montant`) VALUES
('alce95', 'oui', 155),
('clhy98', 'oui', 255),
('elco95', 'oui', 660),
('kedi78', 'non', 0),
('phtr97', 'oui', 123);

-- --------------------------------------------------------

--
-- Table structure for table `utilisateurs`
--

CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `genre` varchar(10) NOT NULL,
  `date de naissance` date NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `login` varchar(20) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `type` varchar(20) NOT NULL DEFAULT 'etudiant'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `utilisateurs`
--

INSERT INTO `utilisateurs` (`nom`, `prenom`, `genre`, `date de naissance`, `adresse`, `mail`, `login`, `pass`, `type`) VALUES
('Ception', 'Alex', 'Homme', '1995-02-22', '3 rue Jean Vilar BERGERAC 21400', 'alex.ception@crous.fr', 'alce95', '$2y$10$7dXCZM45zQjNyXupTMwS3eFTHsQQNouCzMGzwiciVH6GVPEQwmaj2', 'etudiant'),
('Hyère', 'Claire', 'Femme', '1998-06-05', '26 rue Adolphe Wurtz LE PUY-EN-VELAY 43000', 'claire.hyère@crous.fr', 'clhy98', '', 'etudiant'),
('Coptère', 'Elie', 'Homme', '1995-04-26', '2 rue de Raymond Poincaré NANTES 44300', 'elie.coptère@crous.fr', 'elco95', '', 'etudiant'),
('Diote', 'Kelly', 'Femme', '1978-10-07', '1 avenue Ferdinand de Lesseps GRADIGNAN 33170', 'kelly.diote@crous.fr', 'kedi78', '', 'admin'),
('Trahuile', 'Phil', 'Homme', '1997-11-13', '99 rue Banaudon LYON 69008', 'phil.trahuile@crous.fr', 'phtr97', '', 'etudiant');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `statut`
--
ALTER TABLE `statut`
  ADD PRIMARY KEY (`login`);

--
-- Indexes for table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`login`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
