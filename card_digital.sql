-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2023 at 09:54 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `card_digital`
--

-- --------------------------------------------------------

--
-- Table structure for table `catalog`
--

CREATE TABLE `catalog` (
  `katalog_id` int(1) NOT NULL,
  `nama_katalog` varchar(28) NOT NULL,
  `deskripsi_katalog` text NOT NULL,
  `gambar` varchar(45) NOT NULL,
  `harga` varchar(28) NOT NULL,
  `stock` int(28) NOT NULL,
  `sold` int(28) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `catalog`
--

INSERT INTO `catalog` (`katalog_id`, `nama_katalog`, `deskripsi_katalog`, `gambar`, `harga`, `stock`, `sold`) VALUES
(1, 'Card Digital', 'Apa Ajaweh22', '6502b945e761e.enc', 'Rp.65,000', 10, 0);

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE `gambar` (
  `gambar_id` int(11) NOT NULL,
  `type_gambar` varchar(58) NOT NULL,
  `nama_gambar` varchar(28) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL,
  `status_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `status_kategori`) VALUES
(1, 'Card Digital', 'Active'),
(2, 'Web Teamplate', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_user` int(11) NOT NULL,
  `email` varchar(256) NOT NULL,
  `username` varchar(28) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `no_telepon` varchar(28) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_user`, `email`, `username`, `password`, `role_id`, `is_active`, `no_telepon`) VALUES
(13, 'admin2@admin.com', 'admin2', '$2y$10$WFLRbAYojYQx./HB7681YOdl6B3GPkJGDjp5kLO66SVQNlBDoFLqq', 1, 1, '+6289602648689'),
(14, 'takiya@takiya.com', 'takiya', '$2y$10$SDfiIasCV336CHexhXdmj.Nt1RaZWoiNletag7ZZwmsozcORORMca', 2, 1, '+628765432678');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `role` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `trx_id` int(11) NOT NULL,
  `kode_trx` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL,
  `katalog_id` int(11) NOT NULL,
  `metode_trx` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `status_trx` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`trx_id`, `kode_trx`, `id_user`, `katalog_id`, `metode_trx`, `jumlah`, `status_trx`) VALUES
(1, '4', 13, 0, 'MANDIRI', 1, 'lunas');

--
-- Triggers `transaksi`
--
DELIMITER $$
CREATE TRIGGER `Stokkaluar` AFTER INSERT ON `transaksi` FOR EACH ROW BEGIN 
	UPDATE catalog SET stock = stock - NEW.jumlah
    WHERE katalog_id = NEW.katalog_id;
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`katalog_id`);

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`gambar_id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`trx_id`),
  ADD KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catalog`
--
ALTER TABLE `catalog`
  MODIFY `katalog_id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gambar`
--
ALTER TABLE `gambar`
  MODIFY `gambar_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `trx_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`role_id`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `Trx_join_login` FOREIGN KEY (`id_user`) REFERENCES `login` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
