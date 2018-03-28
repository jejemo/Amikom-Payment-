-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2018 at 01:29 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugasrpl`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(5) NOT NULL,
  `user` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user`, `pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id_akun` int(200) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id_akun`, `nama`, `nim`, `email`, `pass`) VALUES
(1, 'Achmad Wratsongko', '15.11.8722', 'achmadwratsongko@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `idQr` varchar(100) NOT NULL,
  `namaitem` varchar(100) NOT NULL,
  `harga` double NOT NULL,
  `tokoh` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`idQr`, `namaitem`, `harga`, `tokoh`) VALUES
('qr123', 'Mie ayam', 7500, 'toko A'),
('qr124', 'Soto', 7000, 'toko B'),
('qr125', 'chicken katsu', 10000, 'toko C'),
('qr126', 'Nasi uduk', 9000, 'toko A'),
('qr144', 'Gado-Gado', 8500, 'toko B');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat`
--

CREATE TABLE `riwayat` (
  `Noriwayat` varchar(100) NOT NULL,
  `Riwayatdetail` varchar(100) DEFAULT NULL,
  `kodetransaksi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `riwayat`
--

INSERT INTO `riwayat` (`Noriwayat`, `Riwayatdetail`, `kodetransaksi`) VALUES
('r123', '', 't123'),
('r124', '', 't124'),
('r125', '', 't125'),
('r126', '', 't126'),
('r144', '', 't144');

-- --------------------------------------------------------

--
-- Table structure for table `riwayatsaldo`
--

CREATE TABLE `riwayatsaldo` (
  `id_riwayatSaldo` int(10) NOT NULL,
  `idSaldo` varchar(10) NOT NULL,
  `tanggal` varchar(30) NOT NULL,
  `amount` int(50) NOT NULL,
  `type` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `riwayatsaldo`
--

INSERT INTO `riwayatsaldo` (`id_riwayatSaldo`, `idSaldo`, `tanggal`, `amount`, `type`, `status`) VALUES
(8, 's125', 'Tuesday, 02-01-18', 700000, 'Complete', 'Isi Saldo'),
(9, 's125', 'Tuesday, 03-01-18', 50000, 'Complete', 'Isi Saldo'),
(10, 's125', 'Tuesday, 02-01-18', 100000, 'Complete', 'Isi Saldo'),
(11, 's125', 'Tuesday, 02-01-18', 150000, 'Complete', 'Isi Saldo'),
(12, 's125', 'Tuesday, 02-01-18', 200000, 'Complete', 'Isi Saldo'),
(13, 's125', 'Tuesday, 02-01-18', 250000, 'Complete', 'Isi Saldo'),
(14, 's125', 'Tuesday, 02-01-18', 300000, 'Complete', 'Isi Saldo'),
(15, 's125', 'Tuesday, 02-01-18', 450000, 'Complete', 'Isi Saldo'),
(16, 's125', 'Tuesday, 02-01-18', 50000, 'Complete', 'Isi Saldo'),
(17, 's125', 'Tuesday, 02-01-18', 50000, 'Complete', 'Isi Saldo'),
(18, 's125', 'Tuesday, 02-01-18', 200000, 'Complete', 'Isi Saldo'),
(19, 's125', 'Tuesday, 02-01-18', 250000, 'Complete', 'Isi Saldo'),
(20, 's125', 'Tuesday, 02-01-18', 100000, 'Complete', 'Isi Saldo'),
(21, 's125', 'Tuesday, 02-01-18', 50000, 'Complete', 'Isi Saldo'),
(22, 's125', 'Tuesday, 02-01-18', 50000, 'Complete', 'Isi Saldo'),
(23, 's125', 'Tuesday, 02-01-18', 300000, 'Complete', 'Isi Saldo'),
(24, 's123', 'Tuesday, 02-01-18', 50000, 'Complete', 'Isi Saldo'),
(25, 's123', 'Tuesday, 02-01-18', 250000, 'Complete', 'Isi Saldo'),
(26, 's123', 'Tuesday, 02-01-18', 50000, 'Complete', 'Isi Saldo'),
(27, 's123', 'Tuesday, 02-01-18', 100000, 'Complete', 'Isi Saldo'),
(28, 's123', 'Tuesday, 02-01-18', 50000, 'Complete', 'Isi Saldo'),
(29, 's123', 'Tuesday, 02-01-18', 350000, 'Complete', 'Isi Saldo'),
(30, 's123', 'Tuesday, 02-01-18', 50000, 'Complete', 'Isi Saldo'),
(31, 's123', 'Tuesday, 02-01-18', 150000, 'Complete', 'Isi Saldo'),
(32, 's123', 'Tuesday, 02-01-18', 100000, 'Complete', 'Isi Saldo'),
(33, 's123', 'Tuesday, 02-01-18', 250000, 'Complete', 'Isi Saldo'),
(34, 's123', 'Tuesday, 02-01-18', 50000, 'Complete', 'Isi Saldo'),
(35, 's125', 'Wednesday, 03-01-18', 50000, 'Complete', 'Isi Saldo'),
(36, 's125', 'Wednesday, 03-01-18', 50000, 'Complete', 'Isi Saldo'),
(37, 's125', 'Wednesday, 03-01-18', 50000, 'Complete', 'Isi Saldo'),
(38, 's125', 'Wednesday, 03-01-18', 50000, 'Complete', 'Isi Saldo'),
(39, 's125', 'Wednesday, 03-01-18', 50000, 'Complete', 'Isi Saldo'),
(40, 's125', 'Wednesday, 03-01-18', 150000, 'Complete', 'Isi Saldo'),
(41, 's144', 'Wednesday, 03-01-18', 50000, 'Complete', 'Isi Saldo'),
(42, 's144', 'Wednesday, 03-01-18', 50000, 'Complete', 'Isi Saldo'),
(43, 's144', 'Wednesday, 03-01-18', 100000, 'Complete', 'Isi Saldo'),
(44, 's144', 'Wednesday, 03-01-18', 50000, 'Complete', 'Isi Saldo'),
(45, 's144', 'Wednesday, 03-01-18', 50000, 'Complete', 'Isi Saldo'),
(46, 's144', 'Wednesday, 03-01-18', 50000, 'Complete', 'Isi Saldo'),
(47, 's144', 'Wednesday, 03-01-18', 50000, 'Complete', 'Isi Saldo'),
(48, 's144', 'Wednesday, 03-01-18', 50000, 'Complete', 'Isi Saldo'),
(49, 's144', 'Wednesday, 03-01-18', 50000, 'Complete', 'Isi Saldo'),
(50, 's144', 'Wednesday, 03-01-18', 250000, 'Complete', 'Isi Saldo'),
(51, 's144', 'Wednesday, 03-01-18', 50000, 'Complete', 'Isi Saldo'),
(52, 's144', 'Wednesday, 03-01-18', 50000, 'Complete', 'Isi Saldo'),
(53, 's144', 'Wednesday, 03-01-18', 50000, 'Complete', 'Isi Saldo'),
(54, 's144', 'Wednesday, 03-01-18', 100000, 'Complete', 'Isi Saldo'),
(55, 's144', 'Wednesday, 03-01-18', 50000, 'Complete', 'Isi Saldo'),
(56, 's144', 'Wednesday, 03-01-18', 50000, 'Complete', 'Isi Saldo'),
(57, 's144', 'Wednesday, 03-01-18', 250000, 'Complete', 'Isi Saldo'),
(58, 's123', 'Wednesday, 03-01-18', 50000, 'Complete', 'Isi Saldo'),
(59, 's123', 'Wednesday, 03-01-18', 50000, 'Complete', 'Isi Saldo'),
(60, 's123', 'Wednesday, 03-01-18', 350000, 'Complete', 'Isi Saldo'),
(61, 's123', 'Wednesday, 03-01-18', 50000, 'Complete', 'Isi Saldo'),
(62, 's123', 'Wednesday, 03-01-18', 50000, 'Complete', 'Isi Saldo'),
(63, 's123', 'Wednesday, 03-01-18', 150000, 'Complete', 'Isi Saldo'),
(64, 's123', 'Thursday, 04-01-18', 50000, 'Complete', 'Isi Saldo'),
(65, 's123', 'Thursday, 04-01-18', 50000, 'Complete', 'Isi Saldo'),
(66, 's144', 'Saturday, 06-01-18', 50000, 'Complete', 'Isi Saldo'),
(67, 's126', 'Saturday, 06-01-18', 300000, 'Complete', 'Isi Saldo'),
(68, 's126', 'Saturday, 06-01-18', 300000, 'Complete', 'Isi Saldo'),
(69, 's126', 'Saturday, 06-01-18', 50000, 'Complete', 'Isi Saldo'),
(70, 's126', 'Saturday, 06-01-18', 50000, 'Complete', 'Isi Saldo'),
(71, 's144', 'Saturday, 06-01-18', 350000, 'Complete', 'Isi Saldo'),
(72, 's123', 'Saturday, 06-01-18', 350000, 'Complete', 'Isi Saldo'),
(73, 's123', 'Saturday, 06-01-18', 50000, 'Complete', 'Isi Saldo'),
(74, 's123', 'Saturday, 06-01-18', 50000, 'Complete', 'Isi Saldo'),
(75, '', '', 0, '', ''),
(76, '', '', 0, '', ''),
(77, 's144', 'Saturday, 06-01-18', 350000, 'Complete', 'Isi Saldo'),
(78, 's144', 'Saturday, 06-01-18', 350000, 'Complete', 'Isi Saldo'),
(79, 's144', 'Saturday, 06-01-18', 200000, 'Complete', 'Isi Saldo'),
(80, 's144', 'Saturday, 06-01-18', 350000, 'Complete', 'Isi Saldo'),
(81, '100', 'Saturday, 06-01-18', 350000, 'Complete', 'Isi Saldo'),
(82, '15.11.8700', 'Saturday, 06-01-18', 200000, 'Complete', 'Isi Saldo'),
(83, '15.11.8700', 'Saturday, 06-01-18', 150000, 'Complete', 'Isi Saldo'),
(84, '15.11.8729', 'Saturday, 06-01-18', 250000, 'Complete', 'Isi Saldo'),
(85, '15.11.8729', 'Saturday, 06-01-18', 250000, 'Complete', 'Isi Saldo'),
(86, '15.11.8729', 'Saturday, 06-01-18', 50000, 'Complete', 'Isi Saldo'),
(87, '15.11.8748', 'Monday, 08-01-18', 50000, 'Complete', 'Isi Saldo'),
(88, '15.11.8729', 'Tuesday, 09-01-18', 50000, 'Complete', 'Isi Saldo'),
(89, '15.11.8729', 'Tuesday, 09-01-18', 50000, 'Complete', 'Isi Saldo'),
(90, '15.11.8729', 'Tuesday, 09-01-18', 100000, 'Complete', 'Isi Saldo'),
(91, '15.11.8729', 'Tuesday, 09-01-18', 50000, 'Complete', 'Isi Saldo');

-- --------------------------------------------------------

--
-- Table structure for table `saldo`
--

CREATE TABLE `saldo` (
  `idsaldo` varchar(100) NOT NULL,
  `jumlahsaldo` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `saldo`
--

INSERT INTO `saldo` (`idsaldo`, `jumlahsaldo`) VALUES
('100', 350000),
('15.11.8700', 800000),
('15.11.8703', 2900000),
('15.11.8722', 1950000),
('15.11.8729', 184223),
('15.11.8732', 950000),
('15.11.8748', 50000);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `kodetransaksi` varchar(100) NOT NULL,
  `idQr` varchar(100) NOT NULL,
  `Tgltransaksi` datetime NOT NULL,
  `nim` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`kodetransaksi`, `idQr`, `Tgltransaksi`, `nim`) VALUES
('t123', 'qr123', '2017-11-23 08:09:00', '15.11.8700'),
('t124', 'qr124', '2017-11-28 10:23:12', '15.11.8703'),
('t125', 'qr125', '2017-11-25 08:10:05', '15.11.8722'),
('t126', 'qr126', '2017-11-16 07:00:00', '15.11.8732'),
('t144', 'qr144', '2017-11-22 08:05:00', '15.11.8729');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `nim` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `pin` varchar(100) NOT NULL,
  `idsaldo` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nim`, `nama`, `pin`, `idsaldo`, `email`) VALUES
('100', '100', '100', '100', '100@gmail.com'),
('15.11.8700', 'Doveri F', 'p123', '15.11.8700', ''),
('15.11.8703', 'Tegas Gumilar Ardianto', 'p124', '15.11.8703', ''),
('15.11.8722', 'Achmad Wratsongko Damarjati', 'p125', '15.11.8722', ''),
('15.11.8729', 'Alvin', 'p144', '15.11.8729', ''),
('15.11.8732', 'Jupri Istomo', 'p126', '15.11.8732', ''),
('15.11.8748', 'Mahe', '12345', '15.11.8748', 'mahe@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`idQr`);

--
-- Indexes for table `riwayat`
--
ALTER TABLE `riwayat`
  ADD PRIMARY KEY (`Noriwayat`),
  ADD KEY `kodetransaksi` (`kodetransaksi`);

--
-- Indexes for table `riwayatsaldo`
--
ALTER TABLE `riwayatsaldo`
  ADD PRIMARY KEY (`id_riwayatSaldo`);

--
-- Indexes for table `saldo`
--
ALTER TABLE `saldo`
  ADD PRIMARY KEY (`idsaldo`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`kodetransaksi`),
  ADD KEY `nim` (`nim`),
  ADD KEY `idQr` (`idQr`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id_akun` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `riwayatsaldo`
--
ALTER TABLE `riwayatsaldo`
  MODIFY `id_riwayatSaldo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
