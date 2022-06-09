-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 09 Cze 2022, 14:14
-- Wersja serwera: 10.4.24-MariaDB
-- Wersja PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `s24953`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `odpowiedzi`
--

CREATE TABLE `odpowiedzi` (
  `id` int(11) NOT NULL,
  `odpowiedz` text COLLATE utf8_bin NOT NULL,
  `poprawna` tinyint(1) NOT NULL,
  `idPytanie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Zrzut danych tabeli `odpowiedzi`
--

INSERT INTO `odpowiedzi` (`id`, `odpowiedz`, `poprawna`, `idPytanie`) VALUES
(1, 'fget \"egzamin.php\";', 0, 1),
(2, 'file_connect \"egzamin.php\";', 0, 1),
(3, 'include \"egzamin.php\";', 1, 1),
(4, 'fopen \"egzamin.php\";', 0, 1),
(5, 'skompilowany po stronie klienta', 0, 2),
(6, 'zinterpretowany po stronie serwera', 1, 2),
(7, 'skompilowany po stronie serwera', 0, 2),
(8, 'zinterpretowany po stronie klienta', 0, 2),
(9, 'zdefiniowaną przez twórcę strony, służącą do przekazywania danych z formularza przez adres strony', 0, 3),
(10, 'zwykłą, zdefiniowaną przez twórcę strony', 0, 3),
(11, 'predefiniowaną, używaną do gromadzenia wartości formularza po nagłówkach zlecenia HTTP (danych z formularza nie można zobaczyć w adresie)', 0, 3),
(12, 'predefiniowaną, używaną do przekazywania danych do skryptów PHP poprzez adres strony', 1, 3),
(13, 'początek komentarza jednoliniowego', 1, 4),
(14, 'operator alternatywy', 0, 4),
(15, 'operator dzielenia całkowitego', 0, 4),
(16, 'początek komentarza wieloliniowego', 0, 4),
(17, 'połączenia z bazą danych', 1, 5),
(18, 'pobrania liczby zwróconych rekordów', 1, 5),
(19, 'pobrania jednego wiersza ze wszystkich zwróconych rekordów', 1, 5),
(20, 'wykonania zapytania do bazy danych', 1, 5);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `odpowiedzi`
--
ALTER TABLE `odpowiedzi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `odpowiedzi`
--
ALTER TABLE `odpowiedzi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
