-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2021 at 05:19 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendataan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_anak`
--

CREATE TABLE `tb_anak` (
  `NIK` char(12) NOT NULL,
  `kd_sekolah` varchar(7) NOT NULL,
  `kd_padukuhan` varchar(7) NOT NULL,
  `nama_anak` varchar(128) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `nama_ibu` varchar(128) NOT NULL,
  `nama_ayah` varchar(128) NOT NULL,
  `pekerjaan_ibu` varchar(50) NOT NULL,
  `pekerjaan_ayah` varchar(50) NOT NULL,
  `jml_pendapatan` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_anak`
--

INSERT INTO `tb_anak` (`NIK`, `kd_sekolah`, `kd_padukuhan`, `nama_anak`, `tempat_lahir`, `tanggal_lahir`, `nama_ibu`, `nama_ayah`, `pekerjaan_ibu`, `pekerjaan_ayah`, `jml_pendapatan`) VALUES
('123456789101', 'SD01', 'DK01', 'Asti', 'Jakarta', '2004-01-15', 'Asiyah', 'Heru', 'Ibu Rumah Tangga', 'Wiraswasta', 7000000),
('123456789102', 'SD02', 'DK02', 'Amanda', 'Yogyakarta', '2005-06-07', 'Sri', 'Barka', 'Pegawai Negeri Sipil', 'Wiraswasta', 9000000),
('123456789103', 'SMP01', 'DK01', 'ageng', 'Sleman', '1994-11-17', 'Asiyah', 'Heru', 'Ibu Rumah Tangga', 'Wiraswasta', 7000000),
('123456789104', 'SMP02', 'DK01', 'gina', 'Sleman', '2006-02-08', 'Asiyah', 'Santo', 'Wiraswasta', 'Karyawan', 1000000),
('123456789105', 'SMP01', 'DK01', 'Sandra', 'Yogyakarta', '2005-11-11', 'Asiyah', 'Huda', 'Wiraswasta', 'Wiraswasta', 11000000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_padukuhan`
--

CREATE TABLE `tb_padukuhan` (
  `kd_padukuhan` varchar(7) NOT NULL,
  `nama_padukuhan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_sekolah`
--

CREATE TABLE `tb_sekolah` (
  `kd_sekolah` varchar(7) NOT NULL,
  `nama_sekolah` varchar(25) NOT NULL,
  `alamat_sekolah` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_anak`
--
ALTER TABLE `tb_anak`
  ADD PRIMARY KEY (`NIK`);

--
-- Indexes for table `tb_padukuhan`
--
ALTER TABLE `tb_padukuhan`
  ADD PRIMARY KEY (`kd_padukuhan`);

--
-- Indexes for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `tb_sekolah`
--
ALTER TABLE `tb_sekolah`
  ADD PRIMARY KEY (`kd_sekolah`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
