-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 09 Sty 2022, 12:13
-- Wersja serwera: 10.4.21-MariaDB
-- Wersja PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `aurora`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `category` text NOT NULL,
  `stats` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `category`, `stats`) VALUES
(1, 'First', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Placeat totam reprehenderit libero eum cum ipsum repudiandae dicta voluptas temporibus possimus vero consectetur, excepturi, illo eligendi error nostrum incidunt, accusamus beatae quis exercit', 'Category', 'R'),
(2, 'Second', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Placeat totam reprehenderit libero eum cum ipsum repudiandae dicta voluptas temporibus possimus vero consectetur, excepturi, illo eligendi error nostrum incidunt, accusamus beatae quis exercit', 'Category2', 'T'),
(3, 'third', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Placeat totam reprehenderit libero eum cum ipsum repudiandae dicta voluptas temporibus possimus vero consectetur, excepturi, illo eligendi error nostrum incidunt, accusamus beatae quis exercit', 'Category3', 'L'),
(54, 'Test', 'Test', 'Test', 'S');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `member`
--

INSERT INTO `member` (`id`, `fname`, `lname`, `email`, `password`) VALUES
(1, 'First', 'Last', 'email@email.com', '$2y$12$6XfnsSsbNzjqhCcv4zLcHuEcQ/iG3eqW8O9gyBNbjG8dwptkZfDLq'),
(2, 'Name', 'Name2', 'name2@name.com', '$2y$12$sW4aS0VrItD7/uebjJpdR.v0oGxU9Po33Zze5NAGoq5mZw.6GruiO');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT dla tabeli `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
