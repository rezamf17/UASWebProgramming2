-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 05, 2020 at 06:59 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas_baru`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_mahasiswa`
--

CREATE TABLE `data_mahasiswa` (
  `id` int(3) NOT NULL,
  `npm` int(12) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `kelas` varchar(15) NOT NULL,
  `semester` int(1) NOT NULL,
  `jurusan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_mahasiswa`
--

INSERT INTO `data_mahasiswa` (`id`, `npm`, `nama`, `kelas`, `semester`, `jurusan`) VALUES
(1, 17111117, 'Reza M Fauzi', 'TIF RP 17 CID C', 5, 'Teknik Informatika'),
(2, 16111567, 'Asep Knalpot', 'DKV19C', 1, 'DKV'),
(5, 14117890, 'Layla Shikamaru', 'AV18B', 6, 'Audio Video'),
(6, 17115456, 'Cinta Laura', 'P16D', 1, 'Keperawatan'),
(7, 17111632, 'Taeyeon', 'TIFRM19A', 1, 'Sastra Korea'),
(8, 17111110, 'Asep', 'CNS17A', 6, 'Teknik Informatika'),
(9, 17111323, 'Anggi', 'TIFRP17CIDC', 5, 'Teknik Informatika'),
(11, 15118321, 'Dingdong', 'TI15A', 4, 'Teknik Industri'),
(12, 17111111, 'Tanti', '16CIDC', 8, 'Teknik Industri');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(3) NOT NULL,
  `username` int(12) NOT NULL,
  `password` int(20) NOT NULL,
  `level` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `level`) VALUES
(1, 0, 0, 1),
(2, 17111117, 0, 1),
(3, 17111117, 0, 1),
(4, 0, 0, 1),
(5, 17111111, 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `login_mahasiswa`
--

CREATE TABLE `login_mahasiswa` (
  `id` int(3) NOT NULL,
  `username` int(15) NOT NULL,
  `password` int(15) NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_mahasiswa`
--

INSERT INTO `login_mahasiswa` (`id`, `username`, `password`, `level`) VALUES
(1, 17111117, 0, 2),
(2, 17111323, 0, 2),
(3, 17111111, 0, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_mahasiswa`
--
ALTER TABLE `data_mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_mahasiswa`
--
ALTER TABLE `login_mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_mahasiswa`
--
ALTER TABLE `data_mahasiswa`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `login_mahasiswa`
--
ALTER TABLE `login_mahasiswa`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
