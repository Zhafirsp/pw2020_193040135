-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2020 at 03:55 AM
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
-- Database: `tubes_193040135`
--

-- --------------------------------------------------------

--
-- Table structure for table `apparel`
--

CREATE TABLE `apparel` (
  `no` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `nama_barang` varchar(200) NOT NULL,
  `kantor_utama` varchar(200) NOT NULL,
  `warna` varchar(50) NOT NULL,
  `harga` double NOT NULL,
  `merk` varchar(100) NOT NULL,
  `logo_merk` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `apparel`
--

INSERT INTO `apparel` (`no`, `foto`, `nama_barang`, `kantor_utama`, `warna`, `harga`, `merk`, `logo_merk`) VALUES
(1, 'phillipworks.jpg', 'Pride Of Indonesia', 'Jl. Karangsari No.3, Pasteur, Kec.Sukajadi, Kota Bandung, Jawa Barat 40161', 'White', 525000, 'Phillip Works', 'phillip.png'),
(2, 'var.jpg', 'Vetements Artisanal Jeans Jacket \'Blue\'', 'Zürich, Swiss', 'Blue', 27074000, 'Vetements', 'vet.png'),
(3, 'sl.jpg', 'Saint Laurent Printed Short Sleeve Shirt \'Black\'', 'Paris, Perancis', 'Black', 11272000, 'Yves Saint Laurent', 'ysl.png'),
(4, 'mango.jpg', 'Mango Man Striped Cotton Shirt', 'Palau-solità i Plegamans, Spanyol', 'Ecru', 649000, 'Mango Man', 'mango.png'),
(5, 'bbc.jpg', 'ID / C-TEE LS Neighborhood', '7 Mercer St, New York, NY 10012', 'White', 1875000, 'Billionaire Boys Club', 'bbc.png'),
(6, 'sd.jpg', 'Surplus Goods Boxy Graphic T-Shirt', 'Cheltenham, Gloucestershire, Britania Raya', 'Black Charcoal', 285000, 'Superdry', 'sd.png'),
(7, 'bbcc.jpg', 'Billionaire Boys Club Trek Jean \'Trek Jeans\'', '7 Mercer St, New York, NY 10012', 'Blue Trek Jeans', 3186000, 'Billionaire Boys Club', 'bbc.png'),
(8, 'qs.jpg', 'Quiksilver Everyday Chino Light Short', 'Huntington Beach, California, Amerika', 'Black', 699000, 'Quiksilver', 'qs.png'),
(9, 'nike.jpg', 'Air Jordan 1 Retro High OG \'Wings\'', 'Beaverton, Oregon, Amerika', 'Copper Black/Metallic Gold-Black', 8159000, 'Air Jordan', 'nike.png'),
(10, 'conv.jpg', 'Unisex Waterproof GORE-TEX Leather Chuck 70 High Top', 'Boston, Massachusetts, Amerika', 'white alyssum/black/egret', 1923000, 'Converse', 'conv.png');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `img` varchar(100) NOT NULL,
  `nrp` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `img`, `nrp`, `nama`, `email`, `jurusan`) VALUES
(1, 'zhafir.jpeg', '193040135', 'Muhammad Zhafir Sunandy Pramana', '193040135.muhammad@mail.unpas.ac.id', 'Teknik Informatika'),
(2, 'aisyah.jpeg', '193020115', 'Aisyah Ardania Kusuma dewi', '193020115.aisyah@mail.unpas.ac.id', 'Teknik Pangan'),
(3, 'seiri.jpeg', '193010140', 'Sieri Nurul Iman', '1930410140.seiri@mail.unpas.ac.id', 'Teknik Industri'),
(4, 'agus.jpeg', '193030006', 'Agus Dewanto Putra', '193030006.agus@mail.unpas.ac.id', 'Teknik Mesin'),
(5, 'raden.jpeg', '193050025', 'Raden Wulan Dewi Lestari', '193050025.raden@mail.unpas.ac.id', 'Teknik Lingkungan'),
(6, 'siti.jpeg', '193020060', 'Siti Aisah', '193020060.siti@mail.unpas.ac.id', 'Teknik Lingkungan'),
(7, 'fahrul.jpeg', '193030120', 'Fachrul Rozi', '193030120.fachrul@mail.unpas.ac.id', 'Teknik Mesin'),
(8, 'nandia.jpeg', '193010073', 'Nandia Windi Widyaningrum', '193010073.nandia@mail.unpas.ac.id', 'Teknik Industri'),
(9, 'dani.jpeg', '193010073', 'Dani Ramdhani', '193010073.dani@mail.unpas.ac.id', 'Teknik Industri'),
(10, 'belinda.jpeg', '193040281', 'Belinda Dwi Khaerunnisa', '193040281.belinda@mail.unpas.ac.id', 'Teknik Informatika');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'zhafir', '$2y$10$BEUR13mGEAa27JkIF87cwOr/d.GHtxsR/JnQGzOw3ZeIM5PivLthi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apparel`
--
ALTER TABLE `apparel`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
