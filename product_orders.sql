-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 19 sep. 2022 à 23:27
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `lusbook`
--

-- --------------------------------------------------------

--
-- Structure de la table `product_orders`
--

CREATE TABLE `product_orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantite` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `product_orders`
--

INSERT INTO `product_orders` (`id`, `order_id`, `user_id`, `product_id`, `name`, `author`, `price`, `category`, `photo`, `quantite`, `created_at`, `updated_at`) VALUES
(5, 4, 1, 108, 'Adulting 101', 'Josh Burnette', '80', 'Finance', '1657143013.jpg', '4', '2022-08-02 21:36:10', '2022-08-02 21:36:10'),
(6, 4, 1, 104, 'The Automatic Millionaire, Expanded and Updated', 'David Bach', '80', 'Finance', '1657142634.jpg', '4', '2022-08-02 21:36:10', '2022-08-02 21:36:10'),
(7, 4, 1, 44, 'Spy x Family, Vol. 4', 'Tatsuya Endo', '60', 'Manga', '1657064368.jpg', '4', '2022-08-02 21:36:10', '2022-08-02 21:36:10'),
(8, 4, 1, 10, 'Paralegal Career For Dummies', 'Scott A. Hatch', '130', 'Droit', '1657034561.jpg', '2', '2022-08-02 21:36:10', '2022-08-02 21:36:10'),
(9, 4, 1, 105, 'I Will Teach You to Be Rich, Second Edition', 'Ramit Sethi', '110', 'Finance', '1657142705.jpg', '2', '2022-08-02 21:36:10', '2022-08-02 21:36:10'),
(10, 5, 1, 54, 'From Manassas To Appomattox', 'General James Longstreet', '200', 'Histoire', '1657067378.jpg', '4', '2022-08-04 07:07:49', '2022-08-04 07:07:49'),
(11, 5, 1, 51, 'Komi Can’t Communicate', 'Tomohito Oda', '68', 'Manga', '1657065293.jpg', '2', '2022-08-04 07:07:49', '2022-08-04 07:07:49'),
(12, 6, 6, 107, 'Why Didn\'t They Teach Me This in School?', 'Cary Siegel', '140', 'Finance', '1657142881.jpg', '2', '2022-08-20 17:53:53', '2022-08-20 17:53:53'),
(13, 6, 6, 105, 'I Will Teach You to Be Rich, Second Edition', 'Ramit Sethi', '110', 'Finance', '1657142705.jpg', '3', '2022-08-20 17:53:53', '2022-08-20 17:53:53'),
(14, 6, 6, 90, 'Elon Musk: Tesla, SpaceX, and the Quest for a Fantastic Future', 'Ashlee Vance', '80', 'Science', '1657125349.jpg', '5', '2022-08-20 17:53:53', '2022-08-20 17:53:53'),
(15, 7, 6, 104, 'The Automatic Millionaire, Expanded and Updated', 'David Bach', '80', 'Finance', '1657142634.jpg', '1', '2022-08-20 17:55:02', '2022-08-20 17:55:02'),
(16, 7, 6, 95, 'My Favorite Universe', 'Neil deGrasse Tyson', '120', 'Science', '1657140579.jpg', '1', '2022-08-20 17:55:02', '2022-08-20 17:55:02'),
(17, 8, 2, 44, 'Spy x Family, Vol. 4', 'Tatsuya Endo', '60', 'Manga', '1657064368.jpg', '1', '2022-08-20 17:56:41', '2022-08-20 17:56:41'),
(18, 8, 2, 49, 'Berserk (41 book series)', 'Kentaro Miura', '500', 'Manga', '1657065019.jpg', '1', '2022-08-20 17:56:41', '2022-08-20 17:56:41'),
(19, 8, 2, 28, 'When the Game Was Ours', 'Dick Hill', '90', 'Sport', '1657056779.jpg', '1', '2022-08-20 17:56:41', '2022-08-20 17:56:41'),
(20, 9, 1, 106, 'Breaking The Habit of Being Yourself', 'Dr. Joe Dispenza', '90', 'Finance', '1657142787.jpg', '1', '2022-08-20 18:04:23', '2022-08-20 18:04:23'),
(21, 10, 8, 36, 'Conditioning for Soccer', 'Dr. Raymond Verheijen', '240', 'Sport', '1657058292.jpg', '1', '2022-08-20 18:06:25', '2022-08-20 18:06:25'),
(22, 10, 8, 105, 'I Will Teach You to Be Rich, Second Edition', 'Ramit Sethi', '110', 'Finance', '1657142705.jpg', '1', '2022-08-20 18:06:25', '2022-08-20 18:06:25');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `product_orders`
--
ALTER TABLE `product_orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_orders_order_id_foreign` (`order_id`),
  ADD KEY `product_orders_product_id_foreign` (`product_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `product_orders`
--
ALTER TABLE `product_orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `product_orders`
--
ALTER TABLE `product_orders`
  ADD CONSTRAINT `product_orders_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_orders_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
