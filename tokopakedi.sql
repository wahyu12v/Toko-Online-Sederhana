-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2022 at 11:10 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tokopakedi`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `username` varchar(30) NOT NULL,
  `pass` varchar(32) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `status` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `id_checkout` int(5) NOT NULL,
  `username` varchar(30) NOT NULL,
  `id_produk` int(10) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `ukuran` int(2) NOT NULL,
  `jumlah` int(4) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT current_timestamp(),
  `seri_sepatu` varchar(15) NOT NULL,
  `total_harga` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`id_checkout`, `username`, `id_produk`, `alamat`, `ukuran`, `jumlah`, `tanggal`, `seri_sepatu`, `total_harga`) VALUES
(10, 'hafizd', 1, 'JL. Sialang Bungkuk', 32, 3, '2022-08-20 04:05:50', 'NK4021', 120000),
(11, 'hafizd', 1, 'JL. Sialang Bungkuk', 32, 3, '2022-08-20 04:15:01', 'NK4021', 120000),
(12, 'hafizd', 1, 'JL. Sialang Bungkuk', 32, 2, '2022-08-20 04:15:16', 'NK4021', 80000),
(13, 'hafizd', 3, 'JL. Sialang Bungkuk', 28, 3, '2022-08-20 04:16:53', 'nk 444', 366663),
(14, 'hafizd', 1, 'jl. bangau', 28, 1, '2022-08-22 12:30:17', 'NK4021', 40000),
(15, 'hafidh', 1, 'jl. sisingamaraja', 28, 1, '2022-08-22 13:39:26', 'NK4021', 40000),
(16, 'hafizd', 1, 'JL. Sialang Bungkuk', 28, 2, '2022-08-22 14:06:39', 'NK4021', 80000),
(17, 'hafizd', 1, 'JL. Sialang Bungkuk', 28, 2, '2022-08-22 14:08:18', 'NK4021', 80000),
(18, 'hafizd', 1, 'JL. Sialang Bungkuk', 28, 2, '2022-08-22 14:09:16', 'NK4021', 80000),
(19, 'hafizd', 1, 'JL. Sialang Bungkuk', 28, 2, '2022-08-22 14:11:04', 'NK4021', 80000),
(20, 'hafizd', 2, 'JL. Sialang Bungkuk', 31, 4, '2022-08-22 14:11:13', 'NK 011', 177776),
(21, 'hafizd', 1, 'JL. Sialang Bungkuk', 28, 2, '2022-08-22 14:12:33', 'NK4021', 80000),
(22, 'hafizd', 1, 'jl. bangau', 28, 10, '2022-08-22 14:12:48', 'NK4021', 400000),
(23, 'hafizd', 1, 'JL. Sialang Bungkuk', 28, 55, '2022-08-22 14:15:03', 'NK4021', 2200000),
(24, 'hafizd', 1, 'JL. Sialang Bungkuk', 28, -5, '2022-08-22 14:15:19', 'NK4021', -200000),
(25, 'hafizd', 1, 'jl. bangau', 28, 2, '2022-08-22 14:15:50', 'NK4021', 80000),
(26, 'hafizd', 1, 'JL. Sialang Bungkuk', 28, 2, '2022-08-22 14:16:11', 'NK4021', 80000),
(27, 'hafizd', 1, 'JL. Sialang Bungkuk', 28, 2, '2022-08-22 14:16:21', 'NK4021', 80000),
(28, 'hafizd', 1, 'jl. bangau', 28, 10, '2022-08-22 14:16:47', 'NK4021', 400000),
(29, 'hafizd', 2, 'jl. bangau', 28, 2, '2022-08-22 15:07:14', 'NK 011', 80000),
(30, 'hafizd', 2, 'JL. Sialang Bungkuk', 28, 3, '2022-08-22 15:09:10', 'NK 011', 120000),
(31, 'hafizd', 2, 'JL. Sialang Bungkuk', 28, 3, '2022-08-22 15:10:14', 'NK 011', 120000),
(32, 'hafizd', 2, 'JL. Sialang Bungkuk', 28, 8, '2022-08-22 15:12:21', 'NK 011', 320000),
(33, 'hafizd', 4, 'JL. Sialang Bungkuk', 28, 9, '2022-08-22 15:30:58', '1gq', 199998);

-- --------------------------------------------------------

--
-- Table structure for table `pembeli`
--

CREATE TABLE `pembeli` (
  `username` varchar(30) NOT NULL,
  `pass` varchar(32) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `no_hp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembeli`
--

INSERT INTO `pembeli` (`username`, `pass`, `nama`, `no_hp`) VALUES
('hafidh', '123', 'hafidh', '51521'),
('hafis', '123', 'hafis', '4141'),
('hafizd', '123', 'hafizd', '08080');

-- --------------------------------------------------------

--
-- Table structure for table `penjual`
--

CREATE TABLE `penjual` (
  `username` varchar(30) NOT NULL,
  `pass` varchar(32) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `no_hp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penjual`
--

INSERT INTO `penjual` (`username`, `pass`, `nama`, `no_hp`) VALUES
('ADIDAS', '123', 'adidas', '1251'),
('admin', 'admin', 'admin', '12441'),
('NIKE', '123', 'NIKE', '08088'),
('PUMA', '1412', 'Puma', '12412');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `merek` varchar(15) NOT NULL,
  `seri_sepatu` varchar(15) NOT NULL,
  `ukuran_sepatu` varchar(2) NOT NULL,
  `harga` int(12) NOT NULL,
  `gambar` varchar(190) NOT NULL,
  `stok` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `merek`, `seri_sepatu`, `ukuran_sepatu`, `harga`, `gambar`, `stok`) VALUES
(2, 'Nike', 'NK 011', '28', 40000, 'a.png', 20),
(3, 'NIKE', 'nk 444', '28', 122221, '', 0),
(4, 'ADIDAS', '1gq', '28', 22222, '', -9),
(6, 'ADIDAS', 'AD 2212', '28', 40000, '', 0),
(7, 'NIKE', 'NNK2 21', '28', 44444, '', 0),
(8, 'NIKE', 'nk 444', '28', 90000, '', 8),
(9, 'NIKE', 'tr123', '28', 4124123, '', 2),
(10, 'NIKE', 'nk 661', '31', 22222, '', 32),
(11, 'NIKE', 'nk111', '28', 30000, 'a.png', 22);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id_checkout`);

--
-- Indexes for table `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `penjual`
--
ALTER TABLE `penjual`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id_checkout` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
