-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Apr 26, 2019 at 01:48 PM
-- Server version: 10.3.13-MariaDB-1:10.3.13+maria~bionic
-- PHP Version: 7.2.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wallframes`
--

-- --------------------------------------------------------

--
-- Table structure for table `dislikes`
--

CREATE TABLE `dislikes` (
  `id` int(11) NOT NULL,
  `imageId` int(11) NOT NULL,
  `userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `userId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image`, `userId`) VALUES
(15, '483_1_s.jpg', NULL),
(21, 'notting-hill-05.jpg', NULL),
(23, 'look-make-up-insta.jpg', NULL),
(24, 'adam-mcewen-soloshow-iceicebaby-galerieartconcept-artconceptgallery-paris-2017-005-1.jpg', NULL),
(25, 'il_794xN.1096241631_575v.jpg', NULL),
(26, 'montpellier-arbre-blanc.jpg', NULL),
(27, 'Untitled-design-1.jpg', NULL),
(29, '_103357205_30685501038_6f7f55d2da_h.jpg', NULL),
(30, 'images.jpeg', NULL),
(31, 'library 2.jpg', NULL),
(32, 'milkdecoration_instaseptembre08_.png', NULL),
(33, 'AC_20151019_insta_geneve_3.jpg', NULL),
(34, 'l1090396.jpg', NULL),
(35, '268x0w.jpg', NULL),
(36, '2-freres.jpg', NULL),
(37, 'superthumb.jpg', NULL),
(38, 'milkdecoration_instafevrier20180207_0016.png', NULL),
(39, 'milkdecoration_instafevrier20180207_0013.png', NULL),
(40, 'dd72f951bd00662f2189d309607dfc79.jpg', NULL),
(41, 'raw.jpeg', NULL),
(42, 'New-arrival-From-Art-School-Tumblr-Style-Shirt-trumblr-t-shirt-high-quality-cotton-tees-Tumblr.jpg_640x640.jpg', NULL),
(44, 'tumblr-12-L-wDFAK7.jpeg', NULL),
(45, '7485571b298d1d094fcff8544ec244e1.jpg', NULL),
(46, 'imagessss.jpeg', NULL),
(47, 'imagesooo.jpeg', NULL),
(50, '17-best-images-about-photos-poloroid-on-pinterest-photo-displays.jpg', NULL),
(51, 'javier-perez-estrella-03-tt-width-600-height-600-lazyload-0-crop-1-bgcolor-000000-except_gif-1.jpg', NULL),
(52, '112114-fashion-art-insta-embed-2-480.jpg', NULL),
(55, '08.jpg', 2),
(60, 'je_peux_pas_j39ai_moto--i:1413857961651413851;x:1;w:520;m:1.jpg.png', 2),
(61, 'petite-moto-tricycle-plastique-arigomoto.jpg', 2),
(62, 'Aasin-s-creed.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `imageId` int(11) NOT NULL,
  `userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `pseudo`, `password`) VALUES
(1, 'sheim', '$2y$10$2Y7S7KzjcENjPHl4eCoX8eGKTYiWjvEvqgw8i01ttRtF5QzXBTkym'),
(2, 'azerty', '$2y$10$TVi.k6u6YYFP67zw4nRwReAhqtLObM/u1rXYzdW/AbahcxmVAQEHu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dislikes`
--
ALTER TABLE `dislikes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`),
  ADD KEY `dislikes_ibfk_1` (`imageId`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`),
  ADD KEY `likes_ibfk_1` (`imageId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dislikes`
--
ALTER TABLE `dislikes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`id`);

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`imageId`) REFERENCES `images` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
