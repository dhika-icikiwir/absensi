-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2026 at 10:28 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `absensi`
--

-- --------------------------------------------------------

--
-- Table structure for table `absen`
--

CREATE TABLE IF NOT EXISTS `absen` (
  `id_absen` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `id_jrs` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `tgl_absen` date NOT NULL,
  `waktu_absen` varchar(12) NOT NULL,
  `kehadiran` enum('hadir','sakit','izin','alpa') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `absen`
--

INSERT INTO `absen` (`id_absen`, `id_siswa`, `id_jrs`, `id_kelas`, `tgl_absen`, `waktu_absen`, `kehadiran`) VALUES
(1, 1, 1, 1, '2026-05-19', '08:38', 'hadir'),
(2, 2, 1, 1, '2026-05-18', '08:38', 'hadir'),
(3, 3, 1, 1, '2026-05-18', '08:38', 'hadir'),
(5, 4, 1, 1, '2026-05-19', '08:41', 'hadir');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE IF NOT EXISTS `jurusan` (
  `id_jrs` int(11) NOT NULL,
  `nm_jrs` varchar(10) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jrs`, `nm_jrs`, `id_user`) VALUES
(1, 'RPL', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(10) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `id_user`) VALUES
(1, 'XI', 1);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `id_siswa` int(11) NOT NULL,
  `nm_siswa` varchar(25) NOT NULL,
  `nis_siswa` varchar(20) NOT NULL,
  `jk_siswa` enum('laki-laki','perempuan') NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat_siswa` text NOT NULL,
  `no_telp_siswa` varchar(12) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nm_siswa`, `nis_siswa`, `jk_siswa`, `tgl_lahir`, `alamat_siswa`, `no_telp_siswa`, `id_user`) VALUES
(1, 'ADHIKA DIPTA WIDAGDHA', '48679486', 'laki-laki', '2008-10-27', 'Ardipura No. 21', '085159776075', 1),
(2, 'AGIL PRATAMA', '5830395', 'laki-laki', '2008-06-19', 'Dok 9 Jalan Ardipura', '08120894223', 1),
(3, 'AISYAH NURUL SYIFA', '5830411', 'perempuan', '2009-01-12', 'Skyline Indah', '082198765432', 1),
(4, 'ANDI RIZKY SUNHAJI', '5830522', 'laki-laki', '2008-11-05', 'Kloofkamp', '081344556677', 1),
(5, 'ANDI ALTHAF FIKRI ALFARIS', '583409543', 'laki-laki', '2008-07-18', 'Kloofkamp', '08129834738', 1),
(6, 'ALZALLI ALVAR', '5830633', 'laki-laki', '2008-05-22', 'Hamadi Dalam', '085244112233', 1),
(7, 'JESSICA FERBI MAHARANI', '5830744', 'perempuan', '2009-02-28', 'Polimak IV', '081255667788', 1),
(8, 'LUKMAN', '5830855', 'laki-laki', '2008-08-09', 'Argapura', '081399887766', 1),
(9, 'MUHAMMAD SALMAN TATROMAN', '5830966', 'laki-laki', '2008-12-15', 'Entrop', '082211223344', 1),
(10, 'MUHAMMAD KAFKHA AFRIANSYA', '5831077', 'laki-laki', '2008-04-03', 'Kotaraja', '085344556611', 1),
(11, 'MEYLIAN PUTRI UTAMY', '5832188', 'perempuan', '2009-05-20', 'Abepura', '081288990011', 1),
(12, 'NUR MARISA', '12456', 'perempuan', '2009-04-18', 'Dok 9', '081276511', 1),
(13, 'PUTRA SATRIYO UTOMO', '5833299', 'laki-laki', '2008-09-11', 'Waena', '081377889922', 1),
(14, 'RAHLIL IVAN', '5834311', 'laki-laki', '2008-01-25', 'Dok 8 Atas', '085211335577', 1),
(15, 'RESKY AURA RUZIVA', '5835422', 'perempuan', '2009-07-07', 'Angkasa', '081255443322', 1),
(16, 'RIDHO', '5836533', 'laki-laki', '2008-06-30', 'Base G', '081366778899', 1),
(17, 'ROVIE SHAFFINAH PUTRI', '5838755', 'perempuan', '2009-09-19', 'Dok 7', '081233221100', 1),
(18, 'RAHMAT RIANTO', '5839866', 'laki-laki', '2008-02-14', 'Hamadi Lapangan', '081355664433', 1),
(19, 'SATRIA RAMADHAN', '5840977', 'laki-laki', '2008-11-20', 'Skyline Resimen', '082166778899', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(1, 'admin dhika', '123'),
(2, 'admin altaf', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`id_absen`), ADD KEY `id_siswa` (`id_siswa`), ADD KEY `id_jrs` (`id_jrs`), ADD KEY `id_kelas` (`id_kelas`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jrs`), ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`), ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`), ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absen`
--
ALTER TABLE `absen`
  MODIFY `id_absen` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jrs` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
