-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2022 at 02:48 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

CREATE Database db_perpus;
USE db_perpus;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_perpus`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `ID_BUKU` int(11) NOT NULL,
  `NAMA_BUKU` varchar(100) NOT NULL,
  `PENGARANG` varchar(100) NOT NULL,
  `DESKRIPSI` text NOT NULL,
  `FOTO` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`ID_BUKU`, `NAMA_BUKU`, `PENGARANG`, `DESKRIPSI`, `FOTO`) VALUES
(1, 'The C Programming Language', 'Dennis M. Ritche', 'The C Programming Language (dapat disebut juga dengan K&R (Brian Kernignan dan Denis Ritchie)) adalah buku ilmu komputer yang ditulis oleh Brian Kernighan dan Dennis Ritchie. Dennis Ritchie merupakan yang pertama mendesain dan mengeimplementasi bahasa tersebut bersamaan dengan perkembangan sistem operasi Unix (yang mana dia juga merupakan kodesainernya). Buku ini diterbitkan oleh Prentice Hall, dan pada saat ini telah diterjemahkan ke dalam berbagai bahasa di dunia', 'penguin_language.png'),
(2, 'Operating Systems: Design and Implementation', 'Andrew S. Tanenbaum', 'Sistem Operasi: Desain dan Implementasi ISBN 0-13-142938-8 ISBN 978-0136373315 adalah buku teks ilmu komputer yang ditulis oleh Andrew S. Tanenbaum, dengan bantuan dari Albert S. Woodhull. Buku ini menjelaskan, secara rinci, topik Merancang Sistem Operasi, Ini termasuk MINIX Tanenbaum, sistem operasi mirip Unix yang dirancang untuk tujuan pengajaran.', 'minix.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `detail_peminjaman_buku`
--

CREATE TABLE `detail_peminjaman_buku` (
  `ID_DETAIL_PEMINJAMAN_BUKU` int(11) NOT NULL,
  `ID_PEMINJAMAN_BUKU` int(11) NOT NULL,
  `ID_BUKU` int(11) NOT NULL,
  `QTY` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `ID_KELAS` int(11) NOT NULL,
  `NAMA_KELAS` varchar(20) NOT NULL,
  `KELOMPOK` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`ID_KELAS`, `NAMA_KELAS`, `KELOMPOK`) VALUES
(1, 'XIRPL7', 'Asik');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman_buku`
--

CREATE TABLE `peminjaman_buku` (
  `ID_PEMINJAMAN_BUKU` int(11) NOT NULL,
  `ID_SISWA` int(11) NOT NULL,
  `TANGGAL_PINJAM` date NOT NULL,
  `TANGGAL_KEMBALI` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pengembalian_buku`
--

CREATE TABLE `pengembalian_buku` (
  `ID_PEMBELIAN_BUKU` int(11) NOT NULL,
  `ID_PEMINJAMAN_BUKU` int(11) NOT NULL,
  `TANGGAL_PENGEMBALIAN` date NOT NULL,
  `DENDA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `ID_SISWA` int(11) NOT NULL,
  `NAMA_SISWA` varchar(100) DEFAULT NULL,
  `TANGGAL_LAHIR` date NOT NULL,
  `GENDER` enum('L','P') NOT NULL,
  `ALAMAT` text NOT NULL,
  `USERNAME` varchar(255) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `ID_KELAS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`ID_SISWA`, `NAMA_SISWA`, `TANGGAL_LAHIR`, `GENDER`, `ALAMAT`, `USERNAME`, `PASSWORD`, `ID_KELAS`) VALUES
(1, 'Penguin', '2022-09-05', 'L', 'Jauh dari sekolah', 'penguin', '99625fa1cac27bb6a2b33b7638afe47f', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`ID_BUKU`);

--
-- Indexes for table `detail_peminjaman_buku`
--
ALTER TABLE `detail_peminjaman_buku`
  ADD PRIMARY KEY (`ID_DETAIL_PEMINJAMAN_BUKU`),
  ADD KEY `ID_PEMINJAMAN_BUKU` (`ID_PEMINJAMAN_BUKU`),
  ADD KEY `ID_BUKU` (`ID_BUKU`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`ID_KELAS`);

--
-- Indexes for table `peminjaman_buku`
--
ALTER TABLE `peminjaman_buku`
  ADD PRIMARY KEY (`ID_PEMINJAMAN_BUKU`),
  ADD KEY `ID_SISWA` (`ID_SISWA`);

--
-- Indexes for table `pengembalian_buku`
--
ALTER TABLE `pengembalian_buku`
  ADD PRIMARY KEY (`ID_PEMBELIAN_BUKU`),
  ADD KEY `ID_PEMINJAMAN_BUKU` (`ID_PEMINJAMAN_BUKU`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`ID_SISWA`),
  ADD KEY `ID_KELAS` (`ID_KELAS`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_peminjaman_buku`
--
ALTER TABLE `detail_peminjaman_buku`
  ADD CONSTRAINT `detail_peminjaman_buku_ibfk_1` FOREIGN KEY (`ID_PEMINJAMAN_BUKU`) REFERENCES `peminjaman_buku` (`ID_PEMINJAMAN_BUKU`),
  ADD CONSTRAINT `detail_peminjaman_buku_ibfk_2` FOREIGN KEY (`ID_BUKU`) REFERENCES `buku` (`ID_BUKU`);

--
-- Constraints for table `peminjaman_buku`
--
ALTER TABLE `peminjaman_buku`
  ADD CONSTRAINT `peminjaman_buku_ibfk_1` FOREIGN KEY (`ID_SISWA`) REFERENCES `siswa` (`ID_SISWA`);

--
-- Constraints for table `pengembalian_buku`
--
ALTER TABLE `pengembalian_buku`
  ADD CONSTRAINT `pengembalian_buku_ibfk_1` FOREIGN KEY (`ID_PEMINJAMAN_BUKU`) REFERENCES `peminjaman_buku` (`ID_PEMINJAMAN_BUKU`);

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`ID_KELAS`) REFERENCES `kelas` (`ID_KELAS`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
