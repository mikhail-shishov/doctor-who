-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 04, 2024 at 12:05 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doctor_who`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `title` text NOT NULL,
  `summary` text NOT NULL,
  `content` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `qna`
--

CREATE TABLE `qna` (
  `id` int(11) NOT NULL,
  `otazka` varchar(255) NOT NULL,
  `odpoved` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `qna`
--

INSERT INTO `qna` (`id`, `otazka`, `odpoved`) VALUES
(1, 'Kedy sa začalo vysielanie seriálu?', '23. novembra v roku 1963 odvysielala britská BBC prvý diel prvej série seriálu Doctor Who (niekedy v preklade Pán času). Je najdlhšie vysielaným a najúspešnejším seriálom v histórii. Zatiaľ sa odvysielalo takmer 40 sérií a vyše 850 dielov. Hlavnú úlohu si zahralo už 13 hercov a 1 herečka.'),
(2, '\"Starý\" a \"nový\" Doctor Who', 'Vysielanie sa začalo roku 1963 a pokračovalo až do roku 1989. Počas tohto obdobia vznikli dva filmy (roky 1965, 1966). Následne bol v roku 1996 natočený film, ktorý mal slúžiť ako pilotná snímka k novej sérii (k jej natočeniu nikdy nedošlo). Ku skutočnému znovuzrodeniu Doktora došlo až v roku 2005, opäť pod taktovkou BBC a kanadskej spoločnosti CBC ako ko-producenta.'),
(3, 'Prečo on je \"Doktor\"?', 'Doktor je naozaj doktorom, hoci nie je jasné, akým. Svoje meno si zvolil aj kvôli tomu, že „lieči“ svet, ochraňuje Zem a vesmír pred zlom a neprávosťami.');

-- --------------------------------------------------------

--
-- Table structure for table `udaje`
--

CREATE TABLE `udaje` (
  `id` int(11) NOT NULL,
  `meno` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sprava` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `udaje`
--

INSERT INTO `udaje` (`id`, `meno`, `email`, `sprava`) VALUES
(1, '', '', ''),
(2, '', '', ''),
(3, '', '', ''),
(4, '', '', ''),
(5, '', '', ''),
(6, 'test', '', ''),
(7, 'Mikhail', 'funtasticlad@gmail.com', ''),
(8, 'Mikhail', 'shishovmike96@gmail.com', ''),
(9, 'Mikhail', 'shishovmike96@gmail.com', ''),
(10, 'Mikhail', 'shishovmike96@gmail.com', '12312123'),
(11, 'ewfhwef', 'funtasticlad@gmail.com', 'wefew'),
(12, 'ewfhwef', 'funtasticlad@gmail.com', 'wefwef'),
(13, 'ewfhwef', 'shishovmike96@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qna`
--
ALTER TABLE `qna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `udaje`
--
ALTER TABLE `udaje`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `qna`
--
ALTER TABLE `qna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `udaje`
--
ALTER TABLE `udaje`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
