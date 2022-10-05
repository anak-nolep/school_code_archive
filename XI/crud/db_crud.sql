-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2022 at 03:01 AM
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
-- Database: `db_crud`
--
CREATE DATABASE IF NOT EXISTS `db_crud` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_crud`;

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
(1, 'Penguin', '2022-09-05', 'L', 'Jauh dari sekolah', 'penguin', 'penguin@localhost.local', 'admin_1_penguin.jpg', '0a4346f806b28b3ce94905c3ac56fcd5ee2337d8613161696aba52eb0c3551cc');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id_history` int(11) NOT NULL,
  `id_pembeli` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `nama_pembeli` varchar(255) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id_history`, `id_pembeli`, `id_produk`, `nama_pembeli`, `nama_produk`, `jumlah`, `tanggal`) VALUES
(32, 1, 1, 'Penguin', 'Buku \"The C Programming Language\"', 1, '2022-09-18'),
(33, 1, 2, 'Penguin', 'Buku \"Minix Operating Systems: Design and Implementation\"', 5, '2022-09-18'),
(35, 4, 2, 'test', 'Buku \"Minix Operating Systems: Design and Implementation\"', 5, '2022-10-05');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `jumlah_transaksi` int(11) NOT NULL DEFAULT 0,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `deskripsi`, `jumlah_transaksi`, `foto`) VALUES
(1, 'Buku \"The C Programming Language\"', 'Bahasa Pemrograman C (kadang-kadang disebut K&R, setelah inisial penulisnya) adalah buku pemrograman komputer yang ditulis oleh Brian Kernighan dan Dennis Ritchie, yang terakhir merancang dan mengimplementasikan bahasa tersebut, serta ikut merancang sistem operasi Unix dengan yang perkembangan bahasanya saling terkait erat.', 2, 'penguin_language.png'),
(2, 'Buku \"Minix Operating Systems: Design and Implementation\"', 'Sistem Operasi: Desain dan Implementasi adalah buku teks ilmu komputer yang ditulis oleh Andrew S. Tanenbaum, dengan bantuan dari Albert S. Woodhull. Buku ini menjelaskan, secara rinci, topik Merancang Sistem Operasi, Ini termasuk MINIX Tanenbaum, sistem operasi mirip Unix gratis yang dirancang untuk tujuan pengajaran.', 10, 'minix.jpg'),
(3, 'Buku \"Sistem Operasi\"', 'Teknologi informasi dan Komunikasi OS logo penguin', 0, 'os_logo_penguin.png'),
(4, 'Buku \"Administrasi Server\"', 'Cara agar tidak kesulitan mengunakan OS logo penguin pada server', 0, 'server_admin.png'),
(5, 'Buku \"Dasar Pemograman C\"', 'Bahasa pemrograman C sangat cocok untuk memperkenalkan konsep pemrograman untuk pemula. Dalam artian, pemula yang belum pernah nyobain coding. Usia bahasa pemrograman C memang sudah tua, namun masih banyak orang yang menggunakannya hingga saat ini.\r\n\r\nHave fu\r\nSegmentation fault (core dumped)', 0, 'dasar_c.jpg'),
(26, 'test', 'test', 0, '26_os_logo_penguin.png');

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
  ADD KEY `id_pembeli` (`id_pembeli`),
  ADD KEY `id_produk` (`id_produk`),
  ADD KEY `nama_pembeli` (`nama_pembeli`),
  ADD KEY `nama_produk` (`nama_produk`);

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
  MODIFY `id_history` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

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
