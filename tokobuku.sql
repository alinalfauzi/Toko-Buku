-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2018 at 10:08 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tokobuku`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `usename_admin` varchar(50) NOT NULL,
  `password_admin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `usename_admin`, `password_admin`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `data_buku`
--

CREATE TABLE `data_buku` (
  `id_buku` int(11) NOT NULL,
  `foto_buku` varchar(100) NOT NULL,
  `nama_buku` varchar(110) NOT NULL,
  `pengarang_buku` varchar(50) NOT NULL,
  `kategori_buku` varchar(50) NOT NULL,
  `harga_buku` varchar(110) NOT NULL,
  `stok_buku` int(11) NOT NULL,
  `terjual_buku` int(11) NOT NULL,
  `deskripsi_buku` text NOT NULL,
  `tglentri_buku` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_buku`
--

INSERT INTO `data_buku` (`id_buku`, `foto_buku`, `nama_buku`, `pengarang_buku`, `kategori_buku`, `harga_buku`, `stok_buku`, `terjual_buku`, `deskripsi_buku`, `tglentri_buku`) VALUES
(1, 'kaligrafi_bismillah99.jpg', 'Mimake', 'Mimake', 'Mimake', 'Rp.200.000', 3, 1, 'gak ada', '2018-04-30 07:01:00');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_trans` int(11) NOT NULL,
  `nama_trans` varchar(100) NOT NULL,
  `buku_trans` varchar(100) NOT NULL,
  `pengarang_trans` varchar(100) NOT NULL,
  `harga_trans` varchar(100) NOT NULL,
  `jumlah_trans` int(11) NOT NULL,
  `total_trans` int(11) NOT NULL,
  `tgl_trans` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_buku`
--

CREATE TABLE `user_buku` (
  `id_user` int(11) NOT NULL,
  `foto_user` varchar(100) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `level_user` varchar(100) NOT NULL,
  `jk_user` varchar(20) NOT NULL,
  `alamat_user` varchar(100) NOT NULL,
  `user_user` varchar(30) NOT NULL,
  `pasword_user` varchar(30) NOT NULL,
  `tglentri_user` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_buku`
--

INSERT INTO `user_buku` (`id_user`, `foto_user`, `nama_user`, `level_user`, `jk_user`, `alamat_user`, `user_user`, `pasword_user`, `tglentri_user`) VALUES
(21, '', 'Admin', 'admin', 'L', 'Gadog', 'admin', 'admin', '2018-04-30 08:01:00'),
(22, '', 'User', 'user', 'L', 'Subang', 'siswa', 'siswa', '2018-04-30 08:01:00'),
(25, '', 'a', 'user', 'l', 'a', 'alinal', 'alinal', '2018-05-03 03:01:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `data_buku`
--
ALTER TABLE `data_buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_trans`);

--
-- Indexes for table `user_buku`
--
ALTER TABLE `user_buku`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `data_buku`
--
ALTER TABLE `data_buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_trans` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_buku`
--
ALTER TABLE `user_buku`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
