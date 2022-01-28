-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Czas generowania: 28 Sty 2022, 21:11
-- Wersja serwera: 5.7.35-cll-lve
-- Wersja PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `p578288_karty`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kartygraf`
--

CREATE TABLE `kartygraf` (
  `id` int(11) NOT NULL,
  `date` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `id_karty` int(11) NOT NULL,
  `id_producenta` int(11) NOT NULL,
  `cena` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `kartygraf`
--

INSERT INTO `kartygraf` (`id`, `date`, `id_karty`, `id_producenta`, `cena`) VALUES
(1, '2022/01/28 20:45:41', 0, 0, 3799),
(2, '2022/01/28 20:45:42', 1, 0, 5465),
(3, '2022/01/28 20:45:43', 2, 0, 6999),
(4, '2022/01/28 20:45:44', 3, 0, 13889),
(5, '2022/01/28 20:45:45', 4, 1, 3749),
(6, '2022/01/28 20:45:47', 5, 1, 4539),
(7, '2022/01/28 20:45:48', 6, 1, 6299),
(8, '2022/01/28 20:45:49', 7, 1, 7799);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `modele`
--

CREATE TABLE `modele` (
  `id` int(11) NOT NULL,
  `nazwa_modelu` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `link_modelu` varchar(256) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `modele`
--

INSERT INTO `modele` (`id`, `nazwa_modelu`, `link_modelu`) VALUES
(0, 'RTX 3060', 'https://www.morele.net/karta-graficzna-gigabyte-geforce-rtx-3060-gaming-oc-12g-gv-n3060gaming-oc-12gd-2-0-5948081/'),
(1, 'RTX 3070', 'https://www.morele.net/karta-graficzna-gigabyte-geforce-rtx-3070-gaming-oc-8gb-gddr6-gv-n3070gaming-oc-8gd-5944660/'),
(2, 'RTX 3080', 'https://www.morele.net/karta-graficzna-gigabyte-geforce-rtx-3080-turbo-10gb-gddr6x-gv-n3080turbo-10gd-2-0-5948873/'),
(3, 'RTX 3090', 'https://www.morele.net/karta-graficzna-gigabyte-geforce-rtx-3090-turbo-24gb-gddr6-gv-n3090turbo-24gd-7308688/'),
(4, 'RX 6600 XT', 'https://www.morele.net/karta-graficzna-gigabyte-radeon-rx-6600-xt-gaming-oc-pro-8gb-gddr6-gv-r66xtgamingoc-pro-8gd-8852734/'),
(5, 'RX 6700 XT', 'https://www.morele.net/karta-graficzna-gigabyte-radeon-rx-6700-xt-gaming-oc-12gb-gddr6-gv-r67xtgaming-oc-12gd-5946529/'),
(6, 'RX 6800 XT', 'https://www.morele.net/karta-graficzna-gigabyte-radeon-rx-6800-xt-gaming-oc-16gb-gddr6-gv-r68xtgaming-oc-16gd-7497484/'),
(7, 'RX 6900 XT', 'https://www.morele.net/karta-graficzna-gigabyte-radeon-rx-6900-xt-gaming-oc-16gb-gddr6-gv-r69xtgaming-oc-16gd-5945953/');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `producenci`
--

CREATE TABLE `producenci` (
  `id` int(11) NOT NULL,
  `nazwa_prod` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `producenci`
--

INSERT INTO `producenci` (`id`, `nazwa_prod`) VALUES
(0, 'NVIDIA'),
(1, 'AMD');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `kartygraf`
--
ALTER TABLE `kartygraf`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `kartygraf`
--
ALTER TABLE `kartygraf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
