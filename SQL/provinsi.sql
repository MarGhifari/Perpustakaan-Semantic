-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2020 at 07:57 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `provinsi`
--

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE `provinsi` (
  `id` int(11) NOT NULL,
  `id_provinsi` int(11) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `provinsi`
--

INSERT INTO `provinsi` (`id`, `id_provinsi`, `provinsi`, `image`) VALUES
(1, 1, 'Jawa Barat', 'https://4.bp.blogspot.com/-0WDb4S7MAJk/Vtg-XO97dzI/AAAAAAAAAcc/wvn5vJw4q08/s1600/13.jpg'),
(2, 2, 'Jawa Timur', 'https://ik.imagekit.io/tvlk/blog/2019/11/large-surabaya-10d00186ea5398bd3b65888bdc65eba6.jpg?tr=dpr-1,w-675'),
(3, 3, 'Jawa Tengah', 'https://cdn-2.tstatic.net/jateng/foto/bank/images/candi-borobudur_20171225_074356.jpg'),
(4, 4, 'DKI Jakarta', 'https://www.yukpiknik.com/wp-content/uploads/2015/03/monas1.jpg'),
(5, 5, 'Sumatera Utara', 'https://indone5ia.files.wordpress.com/2011/06/mesjid-raya-medan.jpg'),
(6, 6, 'Sumatera Barat', 'https://asset.kompas.com/crops/a7HwsDiJ_sZLOlrnoM5hfqBw_Zg=/0x0:729x486/750x500/data/photo/2020/06/12/5ee30a5cac0fa.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
