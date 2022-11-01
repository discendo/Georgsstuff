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
-- Tabellenstruktur für Tabelle `gruppenarbeit`
--

CREATE TABLE `gruppenarbeit` (
  `id` int(11) NOT NULL,
  `stufe` varchar(30) NOT NULL,
  `arbeitsname` varchar(1000) DEFAULT NULL,
  `auftrag` varchar(300) NOT NULL,
  `material` varchar(600) NOT NULL,
  `gruppenanzahl` int(11) NOT NULL,
  `zeit` int(11) NOT NULL,
  `anmerkung` varchar(30) NOT NULL,
  `maxteilnehmer` int(11) NOT NULL,
  `bild` varchar(50) NOT NULL,
  `bildloes` varchar(50) NOT NULL,
  `loesung` varchar(300) NOT NULL,
  `link` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `gruppenarbeit`
--

INSERT INTO `gruppenarbeit` (`id`, `stufe`, `arbeitsname`, `auftrag`, `material`, `gruppenanzahl`, `zeit`, `anmerkung`, `maxteilnehmer`, `bild`, `bildloes`, `loesung`, `link`) VALUES
(793, 'Stufe 9', 'LGS', 'Nehmt euch vorne bitte Material. <br>\nSchreibt euren Rechenweg formal sauber auf das Plakat. \n', 'Plakat, Stifte', 6, 20, 'Viel Spaß! :) ', 5, '', '', '', '');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `gruppenarbeit`
--
ALTER TABLE `gruppenarbeit`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `gruppenarbeit`
--
ALTER TABLE `gruppenarbeit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=794;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
