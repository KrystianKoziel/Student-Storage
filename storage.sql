-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas generowania: 27 Maj 2017, 14:42
-- Wersja serwera: 10.1.19-MariaDB
-- Wersja PHP: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `storage`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `elektryczny`
--

CREATE TABLE `elektryczny` (
  `idprzedmiotu` int(11) NOT NULL,
  `przedmiot` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `kierunek` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `semestr` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `studenci`
--

CREATE TABLE `studenci` (
  `idstudenta` int(11) NOT NULL,
  `imie` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `nazwisko` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `haslo` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `email` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `nr_indeksu` int(11) NOT NULL,
  `wydzial` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `kierunek` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `studenci`
--

INSERT INTO `studenci` (`idstudenta`, `imie`, `nazwisko`, `haslo`, `email`, `nr_indeksu`, `wydzial`, `kierunek`) VALUES
(1, 'Jan', 'Kowalski', ' 040b7cf4a55014e185813e0644502ea9', 'jak.kowalski@gmail.com', 256194, 'Mechatronika', 'Maechatronika'),
(2, 'Mateusz', 'Nowak', '9be00b007ef836db60e642b9e812ab12', 'mateusz.nowak@gmail.com', 280543, 'Elektryczny', 'Informatyka');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wydział elektroniki i technik informacyjnych`
--

CREATE TABLE `wydział elektroniki i technik informacyjnych` (
  `idprzedmiotu` int(11) NOT NULL,
  `przedmiot` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `kierunek` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `semestr` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wydział mechatroniki`
--

CREATE TABLE `wydział mechatroniki` (
  `idprzedmiotu` int(11) NOT NULL,
  `przedmiot` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `wydzial` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `semestr` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `elektryczny`
--
ALTER TABLE `elektryczny`
  ADD PRIMARY KEY (`idprzedmiotu`);

--
-- Indexes for table `studenci`
--
ALTER TABLE `studenci`
  ADD PRIMARY KEY (`idstudenta`);

--
-- Indexes for table `wydział elektroniki i technik informacyjnych`
--
ALTER TABLE `wydział elektroniki i technik informacyjnych`
  ADD PRIMARY KEY (`idprzedmiotu`);

--
-- Indexes for table `wydział mechatroniki`
--
ALTER TABLE `wydział mechatroniki`
  ADD PRIMARY KEY (`idprzedmiotu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `elektryczny`
--
ALTER TABLE `elektryczny`
  MODIFY `idprzedmiotu` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT dla tabeli `studenci`
--
ALTER TABLE `studenci`
  MODIFY `idstudenta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT dla tabeli `wydział elektroniki i technik informacyjnych`
--
ALTER TABLE `wydział elektroniki i technik informacyjnych`
  MODIFY `idprzedmiotu` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT dla tabeli `wydział mechatroniki`
--
ALTER TABLE `wydział mechatroniki`
  MODIFY `idprzedmiotu` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
