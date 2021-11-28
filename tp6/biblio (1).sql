-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2021 at 05:24 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biblio`
--

-- --------------------------------------------------------

--
-- Table structure for table `emprunter`
--

CREATE TABLE `emprunter` (
  `DateEmprunt` date NOT NULL,
  `codeEtudient` int(20) NOT NULL,
  `CodeLivre` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emprunter`
--

INSERT INTO `emprunter` (`DateEmprunt`, `codeEtudient`, `CodeLivre`) VALUES
('0000-00-00', 1234, 4321);

-- --------------------------------------------------------

--
-- Table structure for table `etudiant`
--

CREATE TABLE `etudiant` (
  `codeEtudient` int(20) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `Adresse` varchar(20) NOT NULL,
  `class` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `etudiant`
--

INSERT INTO `etudiant` (`codeEtudient`, `nom`, `prenom`, `Adresse`, `class`) VALUES
(1234, 'zied', 'bousnina', 'منزل تميم', 'dsi21');

-- --------------------------------------------------------

--
-- Table structure for table `livre`
--

CREATE TABLE `livre` (
  `CodeLivre` int(20) NOT NULL,
  `titre` varchar(20) NOT NULL,
  `auteur` text NOT NULL,
  `dateEdition` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `livre`
--

INSERT INTO `livre` (`CodeLivre`, `titre`, `auteur`, `dateEdition`) VALUES
(4321, 'PHP', 'ZIED', '2021-11-23'),
(6458, 'php', 'zied', '2021-11-16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emprunter`
--
ALTER TABLE `emprunter`
  ADD PRIMARY KEY (`codeEtudient`,`CodeLivre`),
  ADD KEY `CodeLivre` (`CodeLivre`);

--
-- Indexes for table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`codeEtudient`);

--
-- Indexes for table `livre`
--
ALTER TABLE `livre`
  ADD PRIMARY KEY (`CodeLivre`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `emprunter`
--
ALTER TABLE `emprunter`
  ADD CONSTRAINT `emprunter_ibfk_1` FOREIGN KEY (`codeEtudient`) REFERENCES `etudiant` (`codeEtudient`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `emprunter_ibfk_2` FOREIGN KEY (`CodeLivre`) REFERENCES `livre` (`CodeLivre`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
