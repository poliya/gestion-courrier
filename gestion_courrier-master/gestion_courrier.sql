-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2017 at 09:31 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gestion_courrier`
--

CREATE DATABASE `gestion_courrier` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `gestion_courrier`;

-- --------------------------------------------------------

--
-- Table structure for table `courrier`
--

CREATE TABLE `courrier` (
  `courrier_id` int(11) NOT NULL,
  `ref_courrier` varchar(60) CHARACTER SET utf8 NOT NULL,
  `date_saisie` date NOT NULL,
  `date_exp` date NOT NULL,
  `source` varchar(100) CHARACTER SET utf8 NOT NULL,
  `destination` varchar(100) CHARACTER SET utf8 NOT NULL,
  `objet` text CHARACTER SET utf8 NOT NULL,
  `image_lien` text CHARACTER SET utf8 NOT NULL,
  `nature` varchar(100) CHARACTER SET utf8 NOT NULL,
  `etat_traitement` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courrier`
--

INSERT INTO `courrier` (`courrier_id`, `ref_courrier`, `date_saisie`, `date_exp`, `source`, `destination`, `objet`, `image_lien`, `nature`, `etat_traitement`) VALUES
(29, 'sqdfsd', '2017-04-11', '2017-04-11', 'سيشسيب', 'شسيب', 'شسيب', 'شسيب', 'سيبالسشيب', 'سشيب');

-- --------------------------------------------------------

--
-- Table structure for table `dossier`
--

CREATE TABLE `dossier` (
  `dossier_id` int(11) NOT NULL,
  `objet` text CHARACTER SET utf8 NOT NULL,
  `ref_id` int(11) NOT NULL,
  `type_dossier` int(11) NOT NULL,
  `date_service_fait` date NOT NULL,
  `delai_paiement` datetime NOT NULL,
  `etat_traitement` varchar(60) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `utilisateur_id` int(11) NOT NULL,
  `nom_utilisateur` varchar(50) CHARACTER SET utf8 NOT NULL,
  `nom` varchar(50) CHARACTER SET utf8 NOT NULL,
  `prenom` varchar(50) CHARACTER SET utf8 NOT NULL,
  `mot_de_pass` varchar(80) CHARACTER SET utf8 NOT NULL,
  `service` varchar(35) CHARACTER SET utf8 NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courrier`
--
ALTER TABLE `courrier`
  ADD PRIMARY KEY (`courrier_id`);

--
-- Indexes for table `dossier`
--
ALTER TABLE `dossier`
  ADD PRIMARY KEY (`dossier_id`);

--
-- Indexes for table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`utilisateur_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courrier`
--
ALTER TABLE `courrier`
  MODIFY `courrier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `dossier`
--
ALTER TABLE `dossier`
  MODIFY `dossier_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `utilisateur_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;