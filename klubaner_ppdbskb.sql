-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 18 Sep 2019 pada 14.10
-- Versi Server: 10.1.38-MariaDB-0+deb9u1
-- PHP Version: 7.0.33-0+deb9u3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klubaner_ppdbskb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cpd`
--

CREATE TABLE `cpd` (
  `nisn` int(10) UNSIGNED NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `sandi` varchar(32) DEFAULT NULL,
  `jkel` enum('L','P') DEFAULT 'L',
  `tplahir` varchar(20) DEFAULT NULL,
  `tglahir` date DEFAULT NULL,
  `sd` int(8) UNSIGNED DEFAULT NULL,
  `smp` int(8) UNSIGNED DEFAULT NULL,
  `nbin` float(6,2) DEFAULT '0.00',
  `nmat` float(6,2) DEFAULT '0.00',
  `nipa` float(6,2) DEFAULT '0.00',
  `alamat` tinytext,
  `verifikasi` enum('1','0') DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `cpd`
--

INSERT INTO `cpd` (`nisn`, `nama`, `sandi`, `jkel`, `tplahir`, `tglahir`, `sd`, `smp`, `nbin`, `nmat`, `nipa`, `alamat`, `verifikasi`) VALUES
(123, 'wawa', 'c9cc595cdb7482ecf033c72f1ed4bcd2', 'L', 'banjar', '2007-02-10', 12343343, 11223344, 78.00, 67.00, 89.00, 'kuabanjar 4/2', '0'),
(12345, 'amin', 'f6473c16da840038fcee41374013f964', 'P', 'Banjarnegara', '2006-09-17', 1234, 34566, 76.00, 68.00, 77.00, 'Singamerta', '0'),
(12346, 'aminah', '896ea8a1c09c45ba1bbcf293b1ce4a9d', 'P', 'Banjarnegara', '2006-09-17', 1235, 34566, 76.00, 68.00, 77.00, 'Singamerta', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `smp`
--

CREATE TABLE `smp` (
  `npsn` int(8) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` tinytext,
  `kecamatan` varchar(20) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `quota` int(3) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cpd`
--
ALTER TABLE `cpd`
  ADD PRIMARY KEY (`nisn`);

--
-- Indexes for table `smp`
--
ALTER TABLE `smp`
  ADD PRIMARY KEY (`npsn`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
