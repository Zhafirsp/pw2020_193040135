-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2020 at 04:04 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_193040135`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `Id` int(11) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Nrp` char(9) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Jurusan` varchar(100) NOT NULL,
  `Gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`Id`, `Nama`, `Nrp`, `Email`, `Jurusan`, `Gambar`) VALUES
(1, 'Muhammad Zhafir Sunandy Pramana', '193040135', '193040135.muhammad@mail.unpas.ac.id', 'Teknik Informatika', 'zhafir.jpg'),
(2, 'Siti Ropeah', '193040147', '193040147.siti@mail.unpas.ac.id', 'Teknik Informatika', 'siti.jpg'),
(3, 'Gigi Ramdhani', '193040100', '193040100.gigi@mail.unpas.ac.id', 'Teknik Informatika', 'gigi.jpg'),
(4, 'Nessa Khoirunisa', '193040119', '193040119.nessa@mail.unpas.ac.id', 'Teknik Informatika', 'nessa.jpg'),
(5, 'Rizky Dwi', '193040130', '193040130.rizky@mail.unpas.ac.id', 'Teknik Informatika', 'rizky.jpg'),
(6, 'Nelly Kharistun', '193040150', '193040150.nelly@mail.unpas.ac.id', 'Teknik Informatika', 'nelly.jpg'),
(7, 'Jeremy tetoot', '193040199', '193040199.jeremy@mail.unpas.ac.id', 'Teknik Informatika', 'jeremy.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
