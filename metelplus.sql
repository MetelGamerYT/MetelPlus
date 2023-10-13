-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 23. Mai 2023 um 19:28
-- Server-Version: 10.4.24-MariaDB
-- PHP-Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `metelplus`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `movies`
--

CREATE TABLE `movies` (
  `id` int(8) NOT NULL,
  `movie_name` varchar(255) NOT NULL,
  `movie_description` text NOT NULL,
  `movie_filename` varchar(255) NOT NULL,
  `movie_thumbnail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `movies`
--

INSERT INTO `movies` (`id`, `movie_name`, `movie_description`, `movie_filename`, `movie_thumbnail`) VALUES
(1, 'Er ist wieder da', '\'Er ist wieder da\' ist eine deutsche Filmkomödie aus dem Jahr 2015, basierend auf dem gleichnamigen Roman von Timur Vermes. Der Film handelt von der fiktiven Rückkehr Adolf Hitlers in die Gegenwart. Nach 70 Jahren erwacht Hitler plötzlich in Berlin und wird von den Menschen zunächst für einen Imitator oder Schauspieler gehalten. Er nutzt die moderne Medienlandschaft und wird unbeabsichtigt zum viralen Internetphänomen. Während er seinen Weg zurück zur politischen Macht plant, zeigt der Film satirisch die Reaktionen der Menschen auf Hitlers Auftauchen und enthüllt dabei auch ihre Vorurteile und politischen Strömungen. Der Film kombiniert politische Satire mit humorvollen und nachdenklichen Elementen, um die Relevanz von Hitlers Ideologie in der heutigen Gesellschaft zu hinterfragen.', 'eristwiederda.mp4', 'er_ist_wieder_da.jpg'),
(2, 'Der Super Mario bros. Film', '\'Der Super Mario Bros. Film\' ist eine US-amerikanische Fantasy-Abenteuerkomödie aus dem Jahr 1993, basierend auf der beliebten Videospielreihe \"Super Mario Bros.\" von Nintendo. Der Film spielt in einer dystopischen Version von New York City, bekannt als Dinohattan, die von humanoiden Dinosauriern regiert wird. Die Brüder Mario, Mario und Luigi, werden in eine Parallelwelt gezogen, als sie einer entführten Prinzessin namens Daisy helfen wollen. Dort treffen sie auf verschiedene Charaktere aus dem Videospiel, wie den bösen König Koopa, und müssen ihre Kräfte nutzen, um die Prinzessin zu retten und die Dimensionen wieder in Ordnung zu bringen. Der Film kombiniert Action, Abenteuer und Comedy und ist bekannt für seine ungewöhnliche Interpretation der beliebten Videospielreihe, die von den Fans oft kontrovers diskutiert wird.', 'supermariofilm.mp4', 'der_super_mario_bros_film.jpg'),
(3, 'Avatar: The Way of Water', 'N/A', 'avatar_way_of_water.mp4', 'avatar-the-way-of-water.jpg'),
(4, 'Passengers', 'N/A', 'passengers.mp4', 'passengers.jpg'),
(5, 'Voyagers', 'N/A', 'voyagers.mp4', 'voyagers.jpg'),
(6, 'Shiny Flakes: The Teenage Drug Lord', 'N/A', 'shinyflakes.mp4', 'shiny-flakes-the-teenage-drug-lord.jpg'),
(7, 'Einer flog über das Kuckucksnest', 'N/A', 'einerflogüberdaskuckucksnest.mp4', 'einer-flog-uber-das-kuckucksnest.jpg'),
(8, 'Dieses bescheuerte Herz', 'N/A', 'diesesbescheuerteherz.mp4', 'dieses-bescheuerte-herz.jpg'),
(9, 'Avatar – Aufbruch nach Pandora', 'N/A', 'avataraufbruchnachpandora.mp4', 'avatar-aufbruch-nach-pandora.jpg');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `id` int(8) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`) VALUES
(1, 'Horst', 'Baum', 'dermetelgameryt@gmail.com', '$2y$10$qV4MOoj5KRjf9fCOG5vZueFY.b1TXOuCMza7L/6RnOMEDRImo5d0u');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
