-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 17, 2023 at 05:48 PM
-- Server version: 10.5.16-MariaDB
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id20753194_inosktech`
--

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE `productos` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Marca` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Precio` int(11) NOT NULL,
  `Detalles` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Descuento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`ID`, `Nombre`, `Marca`, `Precio`, `Detalles`, `Descuento`) VALUES
(1, 'Primer Colmillo', 'InoskTech', 1900000, 'PrimerColmillo ', 10),
(2, 'Segundo Colmillo', 'InoskTech', 2300000, 'InoskTech2', 0),
(3, 'Tercer Colmillo', 'InoskTech', 2300000, 'InoskTech2', 0),
(4, 'Cuarto Colmillo', 'InoskTech', 2300000, 'InoskTech2', 0),
(5, 'Tercer Colmillo', 'InoskTech', 2300000, 'InoskTech2', 0),
(6, 'Cuarto Colmillo', 'InoskTech', 2300000, 'InoskTech2', 0),
(7, 'Quinto Colmillo', 'InoskTech', 2300000, 'InoskTech2', 0),
(8, 'Sexto Colmillo', 'InoskTech', 2300000, 'InoskTech2', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID_USER` int(11) NOT NULL,
  `NOMBRE_USER` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `NUMERO_USER` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `MAIL_USER` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `PASSWORD_USER` varchar(120) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID_USER`, `NOMBRE_USER`, `NUMERO_USER`, `MAIL_USER`, `PASSWORD_USER`) VALUES
(1, 'kanye', '312', 'west@kanye.com', '$2y$10$BJBLZaEOfblX2o/mCbi2peXtNiizEAzAhtWzLEtsHZsnab9msqpZW'),
(2, 'kanyee', '312', 'weset@kanye.com', '$2y$10$Klk/mH3Qn1QAvIJNkYqzl.IBJbHE6tCm6jrrRc4QvN06NyU/xmqdK'),
(3, 'kendrick', '312323232', 'kendrick@kendrick.com', '$2y$10$OtNaQeoSkLa8DYZs9lADCeiVzaFO6fCUeGNLeG6TZKM6TtJj9vpqO'),
(4, 'lamar', '123', 'lamar@lamar.com', '$2y$10$Ziwjsvaek3aEohpcq47lV.DumBZZg3S3K4/VUEHQ8nEb0bz04N6W6'),
(5, '', '', '', '$2y$10$cDoHHuKKIt8wiY7cxVrgnuqu0iL8c.zJ974H1z/T../UM9xbAVXoC'),
(6, 'dasda', '23313131', 'asdsa@fdsadsa.com', '$2y$10$7X2yq3QanIQyrBU7JvvCD.C3VHXNGiWDMeyqS.CRLjBTYl7JVQufy'),
(7, 'Kendick', '31232232332', 'Lamarkendrick@gmail.com', '$2y$10$SVDpRsJ2sRvZcODAUyA4C.AoO21YEATRTUpuOMp1FAVpz.aU8Ndji'),
(8, 'kevin', '3123542154', 'kevinpopis@gmail.com', '$2y$10$gKAuLo9CQrpxHTOVmlV08emOoiH93NkREJ1LVcZQbtoS0jcxegrCi'),
(9, 'popo', '123', 'popo@123', '$2y$10$fIZVQaAEA5jXsAHGraoTrOLVA7GLrBR7QD3cxY2SZrJGUnhG68vX.'),
(10, 'Gadszzz', '3213460641', 'felipee6868hc@gmail.com', '$2y$10$yFJNyyGPWEMT8vKF52MTjuXZcDw6.EJ7.WrYj4QBZvH8MtcnYGH/a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID_USER`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `productos`
--
ALTER TABLE `productos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID_USER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
