-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 19, 2019 at 09:41 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_learning`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_quote`
--

CREATE TABLE `tb_quote` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `foto` varchar(225) NOT NULL,
  `text_quote` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_quote`
--

INSERT INTO `tb_quote` (`id`, `nama`, `foto`, `text_quote`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Nelson Mandela', 'https://www.sahistory.org.za/sites/default/files/bio_pics/nelson_rolihlahla_mandela.jpg', '“Pendidikan adalah senjata paling mematikan di dunia, karena dengan pendidikan, Anda dapat mengubah dunia”', NULL, '2019-02-16 20:07:35', '2019-02-16 20:07:35'),
(2, 'Albert Einstein', 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d3/Albert_Einstein_Head.jpg/220px-Albert_Einstein_Head.jpg', 'Agama tanpa ilmu adalah buta. Ilmu tanpa agama adalah lumpuh', NULL, '2019-02-16 20:07:32', '2019-02-16 20:07:32'),
(3, 'Bill Gates', '1550349529.jpg', 'Adalah baik untuk merayakan kesuksesan, tapi hal yang lebih penting adalah untuk mengambil pelajaran dari kegagalan', NULL, '2019-02-16 20:08:41', '2019-02-16 20:08:41'),
(12, 'Mahatma Gandhi', '1550368740.jpg', 'Hiduplah seolah engkau mati besok. Belajarlah seolah engkau hidup selamanya.', '2019-02-16 18:58:15', '2019-02-18 17:34:48', NULL),
(13, 'Bill Gates', '1550347558.jpg', 'Adalah baik untuk merayakan kesuksesan, tapi hal yang lebih penting adalah untuk mengambil pelajaran dari kegagalan', '2019-02-16 19:05:58', '2019-02-17 00:17:33', NULL),
(14, 'Albert Einstein', '1550368985.jpg', 'Agama tanpa ilmu adalah buta. Ilmu tanpa agama adalah lumpuh', '2019-02-16 19:07:45', '2019-02-18 17:34:15', NULL),
(15, 'Nelson Mandela', '1550347699.jpg', 'Pendidikan adalah senjata paling mematikan di dunia, karena dengan pendidikan, Anda dapat mengubah dunia', '2019-02-16 19:08:19', '2019-02-17 00:16:53', NULL),
(16, 'Henry Ford', '1550368813.jpg', 'Berpikir adalah kegiatan tersulit yang pernah ada. Oleh karena itu hanya sedikit yang melakukannya.', '2019-02-17 01:00:13', '2019-02-17 01:00:13', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_quote`
--
ALTER TABLE `tb_quote`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_quote`
--
ALTER TABLE `tb_quote`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
