-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le : sam. 11 nov. 2023 à 15:28
-- Version du serveur : 8.0.31
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bookphp`
--

-- --------------------------------------------------------

--
-- Structure de la table `books`
--

DROP TABLE IF EXISTS `books`;
CREATE TABLE IF NOT EXISTS `books` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `price` int NOT NULL,
  `discount` int NOT NULL,
  `isbn` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `published_at` date NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `books`
--

INSERT INTO `books` (`id`, `title`, `price`, `discount`, `isbn`, `author`, `published_at`, `image`) VALUES
(1, 'Quae dolor itaque natus reiciendis ad quae.', 38, 19, '8248827583739', 'Denise-Sabine Bernard', '2014-08-18', 'uploads/06.jpg'),
(2, 'In in facilis quam vitae.', 26, 0, '3680780915', 'Nicolas de la Courtois', '1987-10-22', 'uploads/05.jpg'),
(3, 'Dolorum sit veritatis atque rerum cum quaerat.', 78, 20, '0432990694820', 'Aimé Martineau', '2008-08-07', 'uploads/02.jpg'),
(4, 'Illo deleniti commodi ex.', 29, 18, '7445094667310', 'Arthur Allard', '1991-07-23', 'uploads/01.jpg'),
(5, 'Et modi sit dolorum.', 45, 18, '0857622132295', 'Alphonse Gros', '1981-10-04', 'uploads/02.jpg'),
(6, 'Quam iusto natus eos.', 62, 11, '9478341825490', 'Théodore Francois', '2013-02-09', 'uploads/03.jpg'),
(7, 'Natus possimus modi sint hic ut tempore.', 68, 10, '0873356029069', 'René Joly', '1996-01-30', 'uploads/06.jpg'),
(8, 'Maxime vel ut similique.', 25, 10, '0593548548504', 'Henriette Gomes', '1975-08-20', 'uploads/05.jpg'),
(9, 'Quia officia dignissimos et natus a.', 50, 11, '1309708700366', 'Guillaume Leleu', '2021-09-29', 'uploads/05.jpg'),
(10, 'Enim et omnis aliquid.', 60, 14, '1223719243691', 'Louise Guyon', '1994-04-24', 'uploads/05.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `movies`
--

DROP TABLE IF EXISTS `movies`;
CREATE TABLE IF NOT EXISTS `movies` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `duration` int NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `movies`
--

INSERT INTO `movies` (`id`, `title`, `duration`, `image`) VALUES
(1, 'Shrek Forever After', 93, 'https://image.tmdb.org/t/p/original/6HrfPZtKcGmX2tUWW3cnciZTaSD.jpg'),
(2, 'Planes', 91, 'https://image.tmdb.org/t/p/original/9uqCaPEIep4iBG3U4AqSP20LGjq.jpg'),
(3, 'La Pat Patrouille', 85, 'https://image.tmdb.org/t/p/original/iuEmUPqigSBFdu8vRZvVA4parQg.jpg'),
(4, 'Gran Turismo', 95, 'https://image.tmdb.org/t/p/original/vRIHkkuI6FKqUHPJbABbNLRM3VI.jpg'),
(5, 'Avatar', 162, 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/3npygfmEhqnmNTmDWhHLz1LPcbA.jpg'),
(6, 'Avatar : la voie de l\'eau', 192, 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/hYeB9GpFaT7ysabBoGG5rbo9mF4.jpg'),
(7, 'Elémentaire', 102, 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/rzY5kUJJ1zGfingV2oHyyxtlGNa.jpg'),
(8, 'Super Mario Bros', 92, 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/ahMxyHMSJXingQr4yJBMzMU9k42.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
