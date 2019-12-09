-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2019 at 11:46 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cr13_elia_gerges_bigevent`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `capacity` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `URL` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `date`, `description`, `image`, `capacity`, `email`, `number`, `address`, `URL`, `type`) VALUES
(4, 'Riesenrad', '2022-08-13 16:00:00', 'test', 'https://www.wienerriesenrad.com/media/lightbox_gallery/stadtgasthaus-eisvogel-in-wien-big-156.jpg', 5, 'riesenrad@email.com', '123456789', 'Wien Prater', 'https://www.getyourguide.at/wiener-riesenrad-l20087/fahrt-mit-dem-wiener-riesenrad-t41837/?referrer_view_id=4181ace0f70d271b7d820fd5fe0f02cd&referrer_view_position=1', 'Sport'),
(5, 'Riesenrad', '2022-08-13 16:00:00', 'test', 'https://cdn.getyourguide.com/img/tour_img-2223902-92.jpg', 5, 'riesenrad@email.com', '123456789', 'Wien Prater', 'https://www.getyourguide.at/wiener-riesenrad-l20087/fahrt-mit-dem-wiener-riesenrad-t41837/?referrer_view_id=4181ace0f70d271b7d820fd5fe0f02cd&referrer_view_position=1', 'Activity'),
(6, 'Mozart-Konzert im Goldenen Saal', '2019-08-20 10:19:00', 'Erleben Sie die besten Stücke von Mozart und Strauß persönlich in einem der besten Konzertsäle Wiens. Bestaunen Sie das Wiener Mozart Orchester in ihren Kostumen unter anderem im Goldenen Saal des Musikvereins und dem Konzerthaus.', 'https://cdn.getyourguide.com/img/tour_img-987180-92.jpg', 500, 'mozart@email.com', '87191917419', 'Wien Goldener Saal', 'https://www.getyourguide.at/wien-l7/wien-exklusives-mozart-konzert-im-goldenen-saal-t613/?referrer_view_id=27dec868346b6e502477debb6a16b331&referrer_view_position=4', 'Music\r\n'),
(7, 'Schönbrunn', '2019-08-12 12:42:42', 'Machen Sie einen informativen Rundgang durch Schloss Schönbrunn und erhalten Sie Zutritt ohne Anstehen. Folgen Sie Ihrem Guide und erfahren Sie mehr über die Geschichte des Schlosses und seiner Gärten.', 'https://cdn.getyourguide.com/img/tour_img-1756382-92.jpg', 1000, 'schönbrunn@email.com', '96419816', 'Wien Schönbrunn', 'https://www.getyourguide.at/wien-l7/ohne-anstehen-fuehrung-durch-schloss-schoenbrunn-t100233/?referrer_view_id=27dec868346b6e502477debb6a16b331&referrer_view_position=2', 'Activity'),
(8, 'Fahrrad Tour', '2019-08-19 06:17:19', 'Erfahren Sie Wien mit dieser Radtour und erleben Sie eine schöne Auswahl von den Sehenswürdigkeiten dieser herrlichen Stadt.', 'https://cdn.getyourguide.com/img/tour_img-239534-92.jpg', 15, 'tour@email.com', '94194949', 'Wien Tour', 'https://www.getyourguide.at/wien-l7/gefuehrte-bike-tour-klassisches-wien-morgentour-t219/?referrer_view_id=27dec868346b6e502477debb6a16b331&referrer_view_position=9', 'Sport'),
(9, 'Filmfestival', '2019-08-04 21:00:00', 'Vor der einzigartigen Kulisse des Wiener Rathauses werden wieder von 29.6. bis 1.9.2019 aktuelle Top-Produktionen sowie Klassiker aus den Bereichen Musik, Oper und Tanz gezeigt.', 'https://filmfestival-rathausplatz.at/typo3temp/_processed_/csm_Film_Festival_2017_DSC01065___c_stadtwienmarketing__Sebastian_Toth_02_d59dc2f8f1.jpg', 800, 'filme@email.com', '16568419684', 'Wien Rathausplatz', 'https://filmfestival-rathausplatz.at/home/', 'Movie');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
