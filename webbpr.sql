-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Mar 2020 pada 04.33
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webbpr`
--
CREATE DATABASE IF NOT EXISTS `webbpr` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `webbpr`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tentang`
--
-- Pembuatan: 17 Mar 2020 pada 09.37
--

DROP TABLE IF EXISTS `tentang`;
CREATE TABLE `tentang` (
  `id_tentang` int(11) NOT NULL,
  `company` varchar(255) NOT NULL,
  `story` text NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `whatsapp` varchar(30) NOT NULL,
  `facebook` varchar(30) NOT NULL,
  `instagram` varchar(30) NOT NULL,
  `youtube` varchar(30) NOT NULL,
  `linkedin` varchar(30) NOT NULL,
  `twitter` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tentang`
--

INSERT INTO `tentang` (`id_tentang`, `company`, `story`, `alamat`, `phone`, `email`, `whatsapp`, `facebook`, `instagram`, `youtube`, `linkedin`, `twitter`) VALUES
(1, 'PT. Bank Perkreditan Rakyat Unisritama', '<p class=\"h5 style=\"text-align:justify\"><em>Bank Unisritama yang semula bernama PT. Bank Perkreditan Rakyat Unisri (BPR Unisri) berdiri sejak tahun 1991 dan berkedudukan di Desa Kubang Jaya, Kecamatan Siak Hulu, Kabupaten Kampar, Provinsi Riau. Pendirian Bank Unisritama mempunyai maksud dan tujuan untuk menghimpun dana dari masyarakat dalam bentuk deposito berjangka dan tabungan serta memberikan kredit bagi pengusaha kecil dan atau masyarakat pedesaan. </em></p>', 'Jalan Soekarno-Hatta No. 03, Pekanbaru - Riau', '(0761) - 63381', 'unisritamabpr@yahoo.co.id', '6282391031212', 'bankunisritama', 'bpr_unisritama', 'UCDXod80EPm_B-YndX4AMlIw', 'pt-bpr-unisritama', 'bpr_unisritama');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tentang`
--
ALTER TABLE `tentang`
  ADD PRIMARY KEY (`id_tentang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
