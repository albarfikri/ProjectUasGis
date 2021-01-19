-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2021 at 05:44 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectuasgis`
--

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `id_hotel` int(11) NOT NULL,
  `nama_hotel` varchar(255) DEFAULT NULL,
  `status` varchar(12) NOT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `bintang` int(11) NOT NULL,
  `lat` varchar(255) DEFAULT NULL,
  `lon` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) NOT NULL,
  `ket` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`id_hotel`, `nama_hotel`, `status`, `alamat`, `bintang`, `lat`, `lon`, `gambar`, `ket`) VALUES
(1, 'Hotel Aryaduta', 'Swasta', 'Jl. Sudirman', 4, '0.5143954797008172', '101.42885940894162', '13.Cititel Hotel.jpg', 'Dekat hutan kota nyaman dan aman jaya\r\n'),
(2, 'Hotel Pesonna', 'Negeri', 'Jl. Sudirman', 4, '0.5171038045216894', '101.4295836437661', '6.Grand Jatra.jpeg', 'Didepan point coffee atau rumah '),
(3, 'Hotel Wiz', 'Swasta', 'Jl. Nangka no 2', 4, '0.5234502472519152', '101.45777423532806', '12.Dharma Utama.jpg', 'Hotel yang mewah dengan harga murah'),
(5, 'Hotel Wizz', 'Swasta', 'Jl. Bunga asoka', 3, '0.5175234031716865', '101.43068904351823', '10.Whiz.jpg', 'Hotel murah meriah'),
(6, 'Hotel Amaris', 'Swasta', 'Jl. Suka Maju', 4, '0.5152346786400185', '101.43065092754894', '4.Amaris.jpg', 'Sangat bagus dan murah meriah');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id_hotel`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id_hotel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
