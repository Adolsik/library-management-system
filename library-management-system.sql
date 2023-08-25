-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 25 Sie 2023, 13:16
-- Wersja serwera: 10.4.21-MariaDB
-- Wersja PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `library-management-system`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `author` text NOT NULL,
  `availability` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `books`
--

INSERT INTO `books` (`id`, `name`, `author`, `availability`) VALUES
(1, 'Harry Potter and Philosopher\'s Stone', 'J.K Rowling', 1),
(2, 'Harry Potter and Prisoner of Azkaban', 'J.K Rowling', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `requests`
--

CREATE TABLE `requests` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `surname` text NOT NULL,
  `title` text NOT NULL,
  `accepted` text NOT NULL,
  `requested_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `requests`
--

INSERT INTO `requests` (`id`, `name`, `surname`, `title`, `accepted`, `requested_date`) VALUES
(5, 'Adrian', 'Uryga', 'Harry Potter and Philosopher\'s Stone', 'Yes', '2023-08-21'),
(6, 'Adrian', 'Uryga', 'Harry Potter and Philosopher\'s Stone', 'No', '2023-08-25');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `surname` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `verified` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `email`, `password`, `verified`) VALUES
(4, 'admin', 'admin', 'admin', '$2y$10$gwB6RjjGNK44AhmvWE7OpupqLg2RrdMPeEe78GBiH6yjevmVZczA6', 1),
(5, 'Adrian', 'Uryga', 'adols@gmail.com', '$2y$10$xwe8Y.G55asHvztHgwBOjOfNzz8VkcLo9MfbonGOTo3dsbQx1.VbK', 1),
(7, 'Adrian', 'Uryga', 'test@gmail.com', '$2y$10$p9P5NffPy0/Rv8IDHdl5JOu4Deaq0nxWaOXPYIowF0Jw22SCR79Vq', 1),
(8, 'adolsik', 'nowak', 'adolsik@gmail.com', '$2y$10$Fqw.rAJsTWpWTSTEUnoJt.1CELzEXp.DI8q.c/tVysTWHyB4uY9Cy', 1);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
