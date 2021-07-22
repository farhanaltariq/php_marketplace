-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Jul 2021 pada 10.08
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
(24, 'abc@mail.com', 19, '2021-07-15'),
(107, 'test@mail.com', 20, '2021-07-18'),
(111, 'test@mail.com', 15, '2021-07-18'),
(112, 'test@mail.com', 16, '2021-07-18'),
(115, 'test@mail.com', 17, '2021-07-18');

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
(2, 'test@mail.com', 0x616c6c5f696d616765732f7061796d656e742f31366263353965306261326434373631646439363564323466373065653464393139373739393636365f3633343033353737373437393930305f383230343435313839373934393638373135375f6e2e6a7067);

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
(12, 'KOM0DO', 3000, 43, 11, 0x616c6c5f696d616765732f66363634343161623532323963366364376336633635393064633134376337373230313439353037315f313230353935353239363530373231385f313731333938383739313134373430393134365f6e2e6a7067),
(15, 'Morolean', 444909, 42, 12, 0x616c6c5f696d616765732f3136353761383536653438623433663837623034336465626263306462356435626c75652e6a7067),
(16, 'Satanic', 666666, 10, 1, 0x616c6c5f696d616765732f3938306530656561393136623836633835633731323666643262636333313536736e65616b657273322e706e67),
(17, 'Blessed 212', 212000, 43, 1, 0x616c6c5f696d616765732f3838353661373766376637666166396439313231636236393931343562326631726564626c61636b77686974652e6a7067),
(18, '123', 222222, 12, 1, 0x616c6c5f696d616765732f6361346436356635353337346232323037333839303437306234656236643235736e65616b657273322e706e67),
(19, '999', 124, 42, 12, 0x616c6c5f696d616765732f3562643433373563353736306564373236323236316438383162646135626338736e65616b6572732e6a7067),
(20, 'Sapi', 450000, 44, 30, 0x616c6c5f696d616765732f61326636646437646438613830663538643966386235613030366635383863373230323831363535345f3339383736303430343733303732305f393131383131363737353938363033303035315f6e2e6a7067),
(21, 'Minerva TTx 7', 125000, 41, 10, 0x616c6c5f696d616765732f36306533326233623936663065333930346566636338323436643339356166323230303735383935325f343033343033343735363731353835335f313830323230393830313839343837363437325f6e2e6a7067);

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
('abc@mail.com', '0cc175b9c0f1b6a831c399e269772661', 'Tester', '2021-06-16', 'MALE', 'tester', 'Rumah', 'test', 88123456999),
('p@mail.com', '0cc175b9c0f1b6a831c399e269772661', 'Tester', '2021-06-16', 'MALE', 'tester', 'virtual address', 'test', 88123456999),
('test@mail.com', '098f6bcd4621d373cade4e832627b4f6', 'Sapi', '2021-06-16', 'MALE', 'tester', 'virtual address', 'test', 88123456999),
('yamero@mail.com', '0cc175b9c0f1b6a831c399e269772661', 'Tester', '2021-06-16', 'MALE', 'tester', 'virtual address', 'test', 88123456999),
('yanto@mail.com', '0cc175b9c0f1b6a831c399e269772661', 'Tester', '2021-06-16', 'MALE', 'tester', 'virtual Yanto', 'test', 88123456999);

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
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT untuk tabel `payment`
--
ALTER TABLE `payment`
  MODIFY `id_payment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

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
