-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Agu 2021 pada 17.43
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
-- Struktur dari tabel `orders`
--

CREATE TABLE `orders` (
  `id_order` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `product_id` int(11) NOT NULL,
  `cartdate` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `orders`
--

INSERT INTO `orders` (`id_order`, `email`, `product_id`, `cartdate`) VALUES
(124, 'test@mail.com', 38, '2021-08-04'),
(125, 'test@mail.com', 39, '2021-08-04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `payment`
--

CREATE TABLE `payment` (
  `id_payment` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `payment_img` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `payment`
--

INSERT INTO `payment` (`id_payment`, `email`, `payment_img`) VALUES
(11, 'test@mail.com', 0x616c6c5f696d616765732f7061796d656e742f3465386261383635306431346538653838653136343935663762343639313834706e672d7472616e73706172656e742d756e6974792d746563686e6f6c6f676965732d61646f62652d666c6173682d636f6d70757465722d736f6674776172652d746563686e6f6c6f67792d756e6974792d656d626c656d2d656c656374726f6e6963732d636f6d70616e792e706e67),
(12, 'abc@mail.com', 0x616c6c5f696d616765732f7061796d656e742f633130386466376537656562333837636132623762363038313037646232336373756e547269676765722e6a7067);

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
(37, 'Blue Bird', 119900, 41, 12, 0x616c6c5f696d616765732f6664613832343630303530353031346563653664613633366434323562303162626c75652e6a7067),
(38, 'Black Shark', 99000, 39, 14, 0x616c6c5f696d616765732f3461653532373733633632643335343530636435356361393261323535333836736e65616b6572732e6a7067),
(39, 'Classica', 98500, 42, 11, 0x616c6c5f696d616765732f65373162396564386630303836363430616165313634643431366666336631396c6561746865722e6a7067),
(40, 'Red Scarlet', 89900, 42, 14, 0x616c6c5f696d616765732f3938643130646634343632313231306332313033323536633164366232623335726564626c61636b77686974652e6a7067),
(41, 'Rainbow', 120000, 43, 9, 0x616c6c5f696d616765732f6162303538663235633039376633336666396364366463326464393731316462736e65616b657273322e706e67);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `email` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `uname` varchar(128) NOT NULL,
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

INSERT INTO `user` (`email`, `password`, `uname`, `birthdate`, `gender`, `profession`, `address`, `instagram`, `phone`) VALUES
('abc@mail.com', '900150983cd24fb0d6963f7d28e17f72', 'Tester', '2021-06-16', 'MALE', 'tester', 'Rumah', 'test', 88123456999),
('p@mail.com', '0cc175b9c0f1b6a831c399e269772661', 'Tester', '2021-06-16', 'MALE', 'tester', 'virtual address', 'test', 88123456999),
('test@mail.com', '098f6bcd4621d373cade4e832627b4f6', 'Sapi', '2021-06-16', 'MALE', 'tester', 'virtual address', 'test', 88123456999);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_order`),
  ADD UNIQUE KEY `email` (`email`,`product_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indeks untuk tabel `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id_payment`),
  ADD KEY `email` (`email`);

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
-- AUTO_INCREMENT untuk tabel `orders`
--
ALTER TABLE `orders`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT untuk tabel `payment`
--
ALTER TABLE `payment`
  MODIFY `id_payment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`email`) REFERENCES `user` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`email`) REFERENCES `user` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
