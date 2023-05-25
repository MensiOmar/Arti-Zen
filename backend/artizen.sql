-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 25 mai 2023 à 18:14
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `artizen`
--

-- --------------------------------------------------------

--
-- Structure de la table `feedback`
--

CREATE TABLE `feedback` (
  `id_feedback` int(11) NOT NULL,
  `name_sender` varchar(255) NOT NULL,
  `mail_sender` varchar(255) NOT NULL,
  `text_feedback` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `feedback`
--

INSERT INTO `feedback` (`id_feedback`, `name_sender`, `mail_sender`, `text_feedback`) VALUES
(1, 'Mensi Omar', 'mensiomar80@gmail.com', 'great website !!'),
(2, 'Anis Wesleti', 'anisanous@gmail.com', 'good job ');

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

CREATE TABLE `orders` (
  `id_order` int(11) NOT NULL,
  `name_buyer` varchar(255) NOT NULL,
  `mail_buyer` varchar(255) NOT NULL,
  `adress_buyer` varchar(255) NOT NULL,
  `tel_buyer` int(11) NOT NULL,
  `notes_buyer` varchar(255) NOT NULL,
  `id_prod` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `id_prod` int(11) NOT NULL,
  `name_prod` varchar(255) NOT NULL,
  `name_creator` varchar(255) NOT NULL,
  `tel_creator` int(11) NOT NULL,
  `mail_creator` varchar(255) NOT NULL,
  `material_prod` varchar(255) NOT NULL,
  `price_prod` int(11) NOT NULL,
  `description_prod` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id_prod`, `name_prod`, `name_creator`, `tel_creator`, `mail_creator`, `material_prod`, `price_prod`, `description_prod`) VALUES
(1, 'Cracle', 'Ezzdin Benmoussa', 96696969, 'Ezzdin69@gmail.com', 'Acier , fake diamonds', 30, 'necklace'),
(2, 'Candle holders', 'Ezzdin Benmoussa', 96696969, 'Ezzdin69@gmail.com', 'Siramik', 40, 'Siramik Candle holders'),
(3, 'Wood guitar', 'Mohsen Errebhi', 28765789, 'Errebhi69@gmail.com', 'Wood', 450, 'old fashion wood guitar'),
(4, 'Leather backpack', 'Mohsen Errebhi', 28765789, 'Errebhi69@gmail.com', 'leather', 100, 'high quality leather backpack');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id_feedback`);

--
-- Index pour la table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_prod` (`id_prod`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_prod`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id_feedback` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `orders`
--
ALTER TABLE `orders`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `id_prod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`id_prod`) REFERENCES `products` (`id_prod`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
