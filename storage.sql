-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas generowania: 27 Maj 2017, 23:21
-- Wersja serwera: 10.1.16-MariaDB
-- Wersja PHP: 5.6.24

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
-- Struktura tabeli dla tabeli `elektroniki`
--

CREATE TABLE `elektroniki` (
  `idprzedmiotu` int(11) NOT NULL,
  `przedmiot` text COLLATE utf8_polish_ci NOT NULL,
  `kierunek` text COLLATE utf8_polish_ci NOT NULL,
  `semestr` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `elektroniki`
--

INSERT INTO `elektroniki` (`idprzedmiotu`, `przedmiot`, `kierunek`, `semestr`) VALUES
(1, 'Podstawy Pomiarów', 'Telekomunikacja', 2),
(2, 'Teoria Obwodów', 'Elektronika', 3);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `elektryczny`
--

CREATE TABLE `elektryczny` (
  `idprzedmiotu` int(11) NOT NULL,
  `przedmiot` text COLLATE utf8_polish_ci NOT NULL,
  `kierunek` text COLLATE utf8_polish_ci NOT NULL,
  `semestr` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `elektryczny`
--

INSERT INTO `elektryczny` (`idprzedmiotu`, `przedmiot`, `kierunek`, `semestr`) VALUES
(1, 'Języki i Metody Programowania 1', 'Informatyka', 1),
(2, 'Podstawy Inżynierii Oprogramowania', 'Informatyka', 2),
(3, 'Algorytmy i Struktury Danych', 'Informatyka', 3),
(4, 'Języki i Metody Programowania 2', 'Informatyka', 2),
(8, 'Matematyka', 'Informatyka', 2),
(9, 'Polska Języka - Trudna Języka', 'Informatyka', 2);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `języki i metody programowania`
--

CREATE TABLE `języki i metody programowania` (
  `id_przedmiotu` int(11) NOT NULL,
  `nazwa_pliku` text COLLATE utf8_polish_ci NOT NULL,
  `autor` text COLLATE utf8_polish_ci NOT NULL,
  `ocena_przydatnosci` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `języki i metody programowania`
--

INSERT INTO `języki i metody programowania` (`id_przedmiotu`, `nazwa_pliku`, `autor`, `ocena_przydatnosci`) VALUES
(1, 'Notatki z wykladu', 'Jan', 4),
(2, 'programy z wykladu', 'Mariusz', 4);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `mechatroniki`
--

CREATE TABLE `mechatroniki` (
  `idprzedmiotu` int(11) NOT NULL,
  `przedmiot` text COLLATE utf8_polish_ci NOT NULL,
  `kierunek` text COLLATE utf8_polish_ci NOT NULL,
  `semestr` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `mechatroniki`
--

INSERT INTO `mechatroniki` (`idprzedmiotu`, `przedmiot`, `kierunek`, `semestr`) VALUES
(1, 'Fizyka 1', 'Mechatronika', 1),
(2, 'Podstawy Automatyki', 'Automatyka i Robotyka', 2);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `studenci`
--

CREATE TABLE `studenci` (
  `idstudenta` int(11) NOT NULL,
  `imie` text COLLATE utf8_polish_ci NOT NULL,
  `nazwisko` text COLLATE utf8_polish_ci NOT NULL,
  `haslo` text COLLATE utf8_polish_ci NOT NULL,
  `email` text COLLATE utf8_polish_ci NOT NULL,
  `nr_indeksu` int(11) NOT NULL,
  `wydzial` text COLLATE utf8_polish_ci NOT NULL,
  `kierunek` text COLLATE utf8_polish_ci NOT NULL,
  `semestr` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `studenci`
--

INSERT INTO `studenci` (`idstudenta`, `imie`, `nazwisko`, `haslo`, `email`, `nr_indeksu`, `wydzial`, `kierunek`, `semestr`) VALUES
(1, 'Janść', 'Kowalski', ' 040b7cf4a55014e185813e0644502ea9', 'jak.kowalski@gmail.com', 256194, 'Mechatronika', 'Mechatronika', 2),
(2, 'Mateusz', 'Nowak', '9be00b007ef836db60e642b9e812ab12', 'mateusz.nowak@gmail.com', 280543, 'Elektryczny', 'Informatyka', 1),
(3, 'jan', 'kowalski', '$2y$10$P1LTGyunhro2LxFs6DZtJukRNIZy/50GYDFPPLBOnAcNsTUTPXhKS', 'marek@gmail.com', 278345, 'elektryczny', 'informatyka', 1),
(4, 'Marek', 'Noworolnik', '$2y$10$pe2oN0xpJhMq2PvnHqDLmet1ycyQfoE2HWSbfi.xrZwQRkzylTGkC', 'marnow955@gmail.com', 269880, 'elektryczny', 'informatyka', 2);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `elektroniki`
--
ALTER TABLE `elektroniki`
  ADD PRIMARY KEY (`idprzedmiotu`);

--
-- Indexes for table `elektryczny`
--
ALTER TABLE `elektryczny`
  ADD PRIMARY KEY (`idprzedmiotu`);

--
-- Indexes for table `języki i metody programowania`
--
ALTER TABLE `języki i metody programowania`
  ADD PRIMARY KEY (`id_przedmiotu`);

--
-- Indexes for table `mechatroniki`
--
ALTER TABLE `mechatroniki`
  ADD PRIMARY KEY (`idprzedmiotu`);

--
-- Indexes for table `studenci`
--
ALTER TABLE `studenci`
  ADD PRIMARY KEY (`idstudenta`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `elektroniki`
--
ALTER TABLE `elektroniki`
  MODIFY `idprzedmiotu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT dla tabeli `elektryczny`
--
ALTER TABLE `elektryczny`
  MODIFY `idprzedmiotu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT dla tabeli `języki i metody programowania`
--
ALTER TABLE `języki i metody programowania`
  MODIFY `id_przedmiotu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT dla tabeli `mechatroniki`
--
ALTER TABLE `mechatroniki`
  MODIFY `idprzedmiotu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT dla tabeli `studenci`
--
ALTER TABLE `studenci`
  MODIFY `idstudenta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
