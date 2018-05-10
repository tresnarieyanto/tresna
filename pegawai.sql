-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2018 at 04:41 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pegawai`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(100) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_tlp` varchar(15) NOT NULL,
  `jk` enum('p','l') NOT NULL,
  `alamat` text NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `nama_admin`, `email`, `no_tlp`, `jk`, `alamat`, `password`) VALUES
('tresnarieyanto', 'Tresna Riyanto', 'tresnarieyanto16@gmail.com', '087826408525', 'p', 'jl. Gatot subroto, bandung', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `kelompokkerja`
--

CREATE TABLE `kelompokkerja` (
  `kelkerja` varchar(20) NOT NULL,
  `kelompok` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelompokkerja`
--

INSERT INTO `kelompokkerja` (`kelkerja`, `kelompok`) VALUES
('PSG02KP', 'kepegawaian'),
('PSG04KP', 'Sistem Informasi'),
('bg01SI', 'Sistem Informasi'),
('MG01KCP', 'Surveyor'),
('PSG02KbG', 'Umum'),
('PSG03KMD', 'Peralatan');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nama_pegawai` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(20) NOT NULL,
  `tahun_angkatan` date NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_tlp` varchar(15) NOT NULL,
  `jk` enum('p','l') NOT NULL,
  `alamat` text NOT NULL,
  `lokasi_kerja` varchar(50) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama_pegawai`, `tempat_lahir`, `tanggal_lahir`, `agama`, `tahun_angkatan`, `jabatan`, `email`, `no_tlp`, `jk`, `alamat`, `lokasi_kerja`, `gambar`) VALUES
(1, 'Amalia Saraswati', 'Sukaraja', '1996-03-08', 'Islam', '2015-08-20', 'Eselon 1', 'Nengamaliasaras@yahoo.com', '0878264452', 'p', 'Sukaraja, Tasikmalaya', 'Gd 01 SETDA', 'am.jpg'),
(2, 'bunga Astri', 'Cibeureum', '1996-06-18', 'Islam', '2015-05-17', 'Eselon 1', 'ngacsiastrimutz@gmail.com', '0986427765', 'p', 'Talun, Tanjungjaya', 'Gd bappeda 03', 'as.jpg'),
(3, 'De Nurul Maya', 'Cisongom', '1996-11-22', 'Islam', '2015-11-12', 'Eselon 1', 'Denurlmay@gmail.com', '0876543213342', 'p', 'Cisongom, Tanjungjaya', 'Gd 03 bappeda', 'de.jpg'),
(4, 'Dini Febriyani', 'Cikeusal', '1996-02-18', 'Islam', '2015-05-17', 'Eselon 1', 'Diniaifeb@gmail.com', '098642788937', 'p', 'Tanjungjaya, Tasikmalaya', 'Gd bappeda 02', 'di.jpg'),
(5, 'Entin Siti Nurjannah', 'Sukaraja', '1996-09-21', 'Islam', '2015-08-20', 'Eselon 1', 'enteensn12@gmail.com', '08765437133', 'p', 'Sukaraja, Tasikmalaya', 'Gd 01 SETDA', 'en.jpg'),
(6, 'Eva Sofiah', 'Sukaraja', '1996-06-26', 'Islam', '2015-11-12', 'Eselon 1', 'Evasofielf@gmail.com', '087621432166', 'p', 'Sukaraja, Tasikmalaya', 'Gd 02 bappeda', 'ev.jpg'),
(7, 'Febi Nurhasanah', 'Cibeureum', '1996-07-19', 'Islam', '2016-10-12', 'Eselon 1', 'Febinurhasanah@gmail.com', '09864274233', 'p', 'Tanjungjaya, Tasikmalaya', 'Gd bappeda 02', 'fe,jpg'),
(8, 'Fuji Astuti', 'Sukaraja', '1996-07-22', 'Islam', '2016-01-01', 'Eselon 1', 'fujiastuti@gmail.com', '08225432133', 'p', 'Sukaraja, Tasikmalaya', 'Gd 02 SETDA', 'fu.jpg'),
(9, 'Iman Abdurrahman', 'Singaparna', '1986-08-11', 'Islam', '2015-05-17', 'Eselon 1', 'Sikakangimanabdrhmn@gmail.com', '09864274265', 'l', 'Singaparna, Tasikmalaya', 'Gd bappeda 02', 'iman.jpg'),
(10, 'Krismanto', 'Singaparna', '1988-01-13', 'Islam', '2015-05-17', 'Eselon 1', 'Kriesman2too@gmail.com', '087621887623', 'l', 'Singaparna, Tasikmalaya', 'Gd 02 Setda', 'kris.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
