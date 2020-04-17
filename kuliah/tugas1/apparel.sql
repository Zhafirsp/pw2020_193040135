-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2020 at 11:08 AM
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
(2, 'var.jpeg', 'Vetements Artisanal Jeans Jacket \'Blue\'', 'Zürich, Swiss', 'Blue', 27074000, 'Vetements', 'vet.jpeg'),
(3, 'sl.jpeg', 'Saint Laurent Printed Short Sleeve Shirt \'Black\'', 'Paris, Perancis', 'Black', 11272000, 'Yves Saint Laurent', 'ysl.png'),
(4, 'mango.jpeg', 'Mango Man Striped Cotton Shirt', 'Palau-solità i Plegamans, Spanyol', 'Ecru', 649000, 'Mango Man', 'mango.jpeg'),
(5, 'bbc.jpg', 'ID / C-TEE LS Neighborhood', '7 Mercer St, New York, NY 10012', 'White', 1875000, 'Billionaire Boys Club', 'bbc.png'),
(6, 'sd.jpeg', 'Surplus Goods Boxy Graphic T-Shirt', 'Cheltenham, Gloucestershire, Britania Raya', 'Black Charcoal', 285000, 'Superdry', 'sd.png'),
(7, 'bbcc.jpg', 'Billionaire Boys Club Trek Jean \'Trek Jeans\'', '7 Mercer St, New York, NY 10012', 'Blue Trek Jeans', 3186000, 'Billionaire Boys Club', 'bbc.png'),
(8, 'qs.jpeg', 'Quiksilver Everyday Chino Light Short', 'Huntington Beach, California, Amerika', 'Black', 699000, 'Quiksilver', 'qs.jpeg'),
(9, 'nike.jpeg', 'Air Jordan 1 Retro High OG \'Wings\'', 'Beaverton, Oregon, Amerika', 'Copper Black/Metallic Gold-Black', 8159000, 'Air Jordan', 'nike.png'),
(10, 'conv.jpeg', 'Unisex Waterproof GORE-TEX Leather Chuck 70 High Top', 'Boston, Massachusetts, Amerika', 'white alyssum/black/egret', 1923000, 'Converse', 'conv.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apparel`
--
ALTER TABLE `apparel`
  ADD PRIMARY KEY (`no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
