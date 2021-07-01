-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Jul 2021 pada 16.45
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aerostreet`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `email` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`email`, `password`) VALUES
('admin@admin.com', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `tipe` varchar(128) NOT NULL,
  `harga` int(11) NOT NULL,
  `ukuran` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `img` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `product`
--

INSERT INTO `product` (`id`, `tipe`, `harga`, `ukuran`, `stok`, `img`) VALUES
(12, 'KOMDO', 3000, 43, 12, 0x616c6c5f696d616765732f38636637613964303039663861353062643163326634326433393032626234363236392d6f726967696e616c2e6a7067),
(13, 'Albino', 250000, 45, 22, 0x616c6c5f696d616765732f6461393339623238653135636663353139356561373838396566366331353534782e6a7067),
(14, 'TEST', 132000, 44, 1, 0x616c6c5f696d616765732f66633138616137303339636163363536366332366630303763666264346433394475636b4475636b476f2d656d626c656d2e6a7067);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `email` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `name` varchar(128) NOT NULL,
  `birthdate` date NOT NULL,
  `gender` varchar(6) NOT NULL,
  `profession` varchar(128) NOT NULL,
  `address` text NOT NULL,
  `instagram` varchar(128) NOT NULL,
  `phone` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`email`, `password`, `name`, `birthdate`, `gender`, `profession`, `address`, `instagram`, `phone`) VALUES
('', 'd41d8cd98f00b204e9800998ecf8427e', '', '0000-00-00', '', '', '', '', 0),
('aaa@mail.com', '47bce5c74f589f4867dbd57e9ca9f808', 'aaa', '2021-06-01', '', 'aaa', 'aaa', 'aaa', 111),
('abc@mail.com', '900150983cd24fb0d6963f7d28e17f72', 'abc', '2021-06-09', 'MALE', 'abc', 'abc', 'aa', 123),
('tes1t@mail.com', '5a105e8b9d40e1329780d62ea2265d8a', 'test1', '2021-06-15', 'MALE', 'test1', 'test1', 'test1', 111),
('test@mail.com', '098f6bcd4621d373cade4e832627b4f6', 'Tester', '2021-06-16', 'MALE', 'tester', 'virtual address', 'test', 88123456999);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
