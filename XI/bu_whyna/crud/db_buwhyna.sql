-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2022 at 03:13 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_buwhyna`
--
CREATE DATABASE IF NOT EXISTS `db_buwhyna` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_buwhyna`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `tanggal_lahir` date NOT NULL,
  `gender` enum('L','P') NOT NULL,
  `alamat` text NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL DEFAULT 'empty.png',
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_user`, `nama`, `tanggal_lahir`, `gender`, `alamat`, `username`, `email`, `foto`, `password`) VALUES
(1, 'Penguin', '2022-09-05', 'L', 'Jauh dari sekolah', 'penguin_admin', 'penguin@localhost.local', 'admin_1_penguin.jpg', '0a4346f806b28b3ce94905c3ac56fcd5ee2337d8613161696aba52eb0c3551cc');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id_history` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp(),
  `total_harga` int(20) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id_history`, `id_user`, `total`, `tanggal`, `total_harga`, `status`) VALUES
(41, 1, 1, '2022-10-23 07:54:57', 139999, ''),
(42, 1, 4, '2022-10-23 07:55:26', 2389996, '');

-- --------------------------------------------------------

--
-- Table structure for table `history_detail`
--

CREATE TABLE `history_detail` (
  `id_history` int(11) NOT NULL,
  `id_urutan` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history_detail`
--

INSERT INTO `history_detail` (`id_history`, `id_urutan`, `id_produk`, `nama_produk`, `jumlah`) VALUES
(41, 1, 1, 'Arduino Uno', 1),
(42, 1, 2, 'Raspberry pi zero', 3),
(42, 2, 3, 'Raspberry pi 4 type b', 1);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah_transaksi` int(11) NOT NULL DEFAULT 0,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `deskripsi`, `harga`, `jumlah_transaksi`, `foto`) VALUES
(1, 'Arduino Uno', 'Papan ini dilengkapi dengan set pin input/output (I/O) digital dan analog yang dapat dihubungkan ke berbagai papan ekspansi (perisai) dan sirkuit lainnya.', 139999, 6, 'arduino.jpg'),
(2, 'Raspberry pi zero', 'A Raspberry Pi Zero with smaller size and reduced input/output (I/O) and general-purpose input/output (GPIO) capabilities was released in November 2015 for US$5.', 129999, 15, 'pi0.jpg'),
(3, 'Raspberry pi 4 type b', 'Raspberry Pi 4 Model B dirilis pada Juni 2019[1] dengan prosesor ARM Cortex-A72 quad core 64-bit 64-bit 1,5 GHz, Wi-Fi 802.11ac on-board, Bluetooth 5, Ethernet gigabit penuh (throughput tidak terbatas), dua port USB 2.0, dua port USB 3.0, 1–8 GB RAM, dan dukungan dua monitor melalui sepasang port micro HDMI (HDMI Tipe D) hingga resolusi 4K', 1999999, 2, 'pi4b.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `tanggal_lahir` date NOT NULL,
  `gender` enum('L','P') NOT NULL,
  `alamat` text NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL DEFAULT 'empty.png',
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `tanggal_lahir`, `gender`, `alamat`, `username`, `email`, `foto`, `password`) VALUES
(1, 'Penguin', '2022-09-05', 'L', 'Jauh dari sekolah e', 'penguin', 'penguin@localhost.local', 'user_1_penguin.png', '0a4346f806b28b3ce94905c3ac56fcd5ee2337d8613161696aba52eb0c3551cc'),
(4, 'test', '2022-09-01', 'L', 'alamat', 'test', 'email', '4_user_spotopi.png', '0a4346f806b28b3ce94905c3ac56fcd5ee2337d8613161696aba52eb0c3551cc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id_history`),
  ADD KEY `id_pembeli` (`id_user`),
  ADD KEY `total` (`total`);

--
-- Indexes for table `history_detail`
--
ALTER TABLE `history_detail`
  ADD KEY `id_produk` (`id_produk`),
  ADD KEY `id_history` (`id_history`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id_history` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
