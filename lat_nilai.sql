-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2017 at 03:31 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lat_nilai`
--

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id_guru` char(5) NOT NULL,
  `nm_guru` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jenis_kelamin` char(1) NOT NULL,
  `id_mapel` char(5) NOT NULL,
  `wali_kelas` char(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id_guru`, `nm_guru`, `alamat`, `jenis_kelamin`, `id_mapel`, `wali_kelas`, `password`) VALUES
('11111', 'Henki Wisnu Subakti, S.Kom', 'Welar Rt 02 Rw 09 Pandeyan Ngemplak Boyolali', 'L', 'MP01', '7A', '21232f297a57a5a743894a0e4a801fc3'),
('22222', 'Tatas Surya Subakti', 'Pandeyan', 'L', 'MP03', '7B', '21232f297a57a5a743894a0e4a801fc3'),
('33333', 'Forda Brofi Subakti', 'Sengkleyan', 'L', 'MP08', '7C', '21232f297a57a5a743894a0e4a801fc3'),
('44444', 'dian', 'mojoasri', 'P', 'MP06', '8A', '21232f297a57a5a743894a0e4a801fc3'),
('55555', 'andin bro', 'jakarta', 'L', 'MP09', '8B', '21232f297a57a5a743894a0e4a801fc3'),
('66666', 'dhea', 'mojoasri', 'P', 'MP07', '8C', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `keterampilan`
--

CREATE TABLE `keterampilan` (
  `id_keterampilan` char(5) NOT NULL,
  `nm_keterampilan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keterampilan`
--

INSERT INTO `keterampilan` (`id_keterampilan`, `nm_keterampilan`) VALUES
('01', 'Budi Pekerti'),
('02', 'Pramuka'),
('03', 'Extrakulikuler');

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `id_mapel` char(5) NOT NULL,
  `nm_mapel` varchar(255) NOT NULL,
  `kkm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`id_mapel`, `nm_mapel`, `kkm`) VALUES
('MP01', 'Pendidikan Agama Islam', 75),
('MP02', 'Bahasa Indonesia', 75),
('MP03', 'Bahasa Inggris', 75),
('MP04', 'Matematika', 75),
('MP05', 'Ilmu Pengetahuan Alam', 75),
('MP06', 'Ilmu Pengetahuan Sosial', 75),
('MP07', 'Bahasa Jawa', 75),
('MP08', 'Fisika', 75),
('MP09', 'Biologi', 75),
('MP10', 'Olahraga', 75),
('MP11', 'Kesenian Daerah', 75);

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(11) NOT NULL,
  `nis` char(20) NOT NULL,
  `id_mapel` char(20) NOT NULL,
  `uts` int(11) NOT NULL,
  `uas` int(11) NOT NULL,
  `tahun_ajaran` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `nis`, `id_mapel`, `uts`, `uas`, `tahun_ajaran`) VALUES
(1, '12001', 'MP01', 89, 0, '2017/2018'),
(2, '12001', 'MP02', 90, 0, '2017/2018'),
(3, '12001', 'MP03', 88, 0, '2017/2018'),
(4, '12001', 'MP04', 90, 0, '2017/2018'),
(5, '12001', 'MP05', 88, 0, '2017/2018'),
(6, '12001', 'MP06', 86, 0, '2017/2018'),
(7, '12001', 'MP07', 74, 0, '2017/2018'),
(8, '12001', 'MP08', 80, 0, '2017/2018'),
(9, '12001', 'MP09', 80, 0, '2017/2018'),
(10, '12001', 'MP10', 78, 0, '2017/2018'),
(11, '12001', 'MP11', 79, 0, '2017/2018');

-- --------------------------------------------------------

--
-- Table structure for table `nilai_keterampilan`
--

CREATE TABLE `nilai_keterampilan` (
  `id_nk` char(5) NOT NULL,
  `nis` char(10) NOT NULL,
  `nilai` char(1) NOT NULL,
  `tahun_ajaran` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nis` char(10) NOT NULL,
  `nm_siswa` varchar(255) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jenis_kelamin` char(1) NOT NULL,
  `kelas` char(10) NOT NULL,
  `status` char(50) NOT NULL,
  `tahun_masuk` char(25) NOT NULL,
  `tahun_lulus` char(25) NOT NULL,
  `absen_alfa` int(11) NOT NULL,
  `absen_ijin` int(11) NOT NULL,
  `absen_sakit` int(11) NOT NULL,
  `status_uts` int(11) NOT NULL,
  `status_uas` int(11) NOT NULL,
  `nm_ortu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nis`, `nm_siswa`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `jenis_kelamin`, `kelas`, `status`, `tahun_masuk`, `tahun_lulus`, `absen_alfa`, `absen_ijin`, `absen_sakit`, `status_uts`, `status_uas`, `nm_ortu`) VALUES
('12001', 'mishka azahra subakti', 'Boyolali', '2001-11-01', 'sengkleyan', 'P', '7a', 'aktif', '2017', '-', 0, 2, 1, 1, 0, 'slameto'),
('12002', 'henki wisnu subakti', 'Boyolali', '2001-11-01', 'welar', 'L', '7b', 'aktif', '2017', '-', 0, 0, 0, 0, 0, 'sri suyatni'),
('12003', 'forda brofi subakti', 'Boyolali', '2001-11-01', 'sragen', 'L', '7c', 'aktif', '2017', '-', 0, 0, 0, 0, 0, 'dewi'),
('12004', 'tatas surya subakti', 'Boyolali', '2001-11-01', 'pandeyan', 'L', '7b', 'aktif', '2017', '-', 0, 0, 0, 0, 0, 'dwi'),
('12005', 'vanesa', 'Boyolali', '2001-11-01', 'mojoasri', 'P', '7b', 'aktif', '2017', '-', 0, 0, 0, 0, 0, 'mulyono'),
('12006', 'iwan', 'Boyolali', '2001-11-01', 'kurukan', 'L', '7a', 'aktif', '2017', '-', 0, 0, 0, 1, 0, 'raden'),
('12007', 'adi', 'solo', '2001-11-01', 'solo', 'L', '7a', 'aktif', '2017', '', 0, 0, 0, 1, 0, 'gimo'),
('12008', 'murti', 'sragen', '2001-11-01', 'solo', 'P', '7a', 'aktif', '2017', '', 0, 0, 0, 1, 0, 'sumadi'),
('12009', 'rafi', 'boyolali', '0000-00-00', 'welar', 'L', '7c', 'aktif', '2017', '', 0, 0, 0, 0, 0, 'ngadinem'),
('12010', 'yogi', 'solo', '', 'solo', 'L', '7c', 'aktif', '2017', '', 0, 0, 0, 0, 0, 'aseh'),
('12011', 'ginda', 'solo', '13-11-2012', 'solo', 'L', '7c', 'aktif', '2017', '', 0, 0, 0, 0, 0, 'andi');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` char(5) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `sebagai` char(30) NOT NULL,
  `log_terakhir` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama`, `sebagai`, `log_terakhir`) VALUES
('A001', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'henki wisnu subakti', 'administrator', '27-10-2017');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`),
  ADD KEY `id_mapel` (`id_mapel`);

--
-- Indexes for table `keterampilan`
--
ALTER TABLE `keterampilan`
  ADD PRIMARY KEY (`id_keterampilan`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `nilai_keterampilan`
--
ALTER TABLE `nilai_keterampilan`
  ADD PRIMARY KEY (`id_nk`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `guru`
--
ALTER TABLE `guru`
  ADD CONSTRAINT `guru_ibfk_1` FOREIGN KEY (`id_mapel`) REFERENCES `mapel` (`id_mapel`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
