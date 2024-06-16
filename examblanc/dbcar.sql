-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : ven. 14 juin 2024 à 13:19
-- Version du serveur : 5.7.39
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `dbcar`
--

-- --------------------------------------------------------

--
-- Structure de la table `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `img` text NOT NULL,
  `brand` text NOT NULL,
  `model` text NOT NULL,
  `year` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `discount` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `cars`
--

INSERT INTO `cars` (`id`, `name`, `img`, `brand`, `model`, `year`, `price`, `discount`) VALUES
(1, '2023 Fastback Turbo', 'http://localhost:8888/examblanc/img/car-1.webp', 'Speedster', 'Fastback Turbo', 2023, 35000, 0),
(2, '2022 Cruiser Deluxe', 'http://localhost:8888/examblanc/img/car-2.webp', 'Roadmaster', 'Cruiser Deluxe', 2022, 28500, 1),
(3, '2021 Eco Friendly', 'http://localhost:8888/examblanc/img/car-3.jpg', 'GreenMachine', 'Eco Friendly', 2021, 22000, 0),
(4, '2020 Classic Muscle', 'http://localhost:8888/examblanc/img/car-4.jpg', 'Powerhouse', 'Classic Muscle', 2020, 45000, 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
