-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 01. Nov 2022 um 14:01
-- Server-Version: 10.4.24-MariaDB
-- PHP-Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `schule`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `gruppenuser`
--

CREATE TABLE `gruppenuser` (
  `personenid` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `nachname` varchar(50) NOT NULL,
  `gruppe` int(4) DEFAULT NULL,
  `klasse` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `gruppenuser`
--

INSERT INTO `gruppenuser` (`personenid`, `name`, `nachname`, `gruppe`, `klasse`) VALUES
(1, '', '', 0, ''),
(2, 'schorschi', '', 2, ''),
(3, 'sius', '', 1, ''),
(4, 'Liam', '', 3, ''),
(5, 'Hans', '', 1, ''),
(6, 'Georg', '', 3, ''),
(7, 'linus', '', 3, ''),
(8, 'sf', '', 1, ''),
(9, 'sabine', '', 2, ''),
(10, 'sdfs', '', 5, ''),
(11, 'sdfsf', '', 4, ''),
(12, 'batu', '', 3, ''),
(13, 'sdf', '', 4, ''),
(14, 'vinc', '', 4, ''),
(15, 'asdasd', '', 3, ''),
(16, 'wer', '', 2, '');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `gruppenuser`
--
ALTER TABLE `gruppenuser`
  ADD PRIMARY KEY (`personenid`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `gruppenuser`
--
ALTER TABLE `gruppenuser`
  MODIFY `personenid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
