-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Apr 2021 pada 10.46
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_coding`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `carousel`
--

CREATE TABLE `carousel` (
  `id_carousel` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `carousel`
--

INSERT INTO `carousel` (`id_carousel`, `gambar`) VALUES
(1, 'v502_724.png'),
(2, 'v502_724.png'),
(3, 'v502_724.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `carousel_2`
--

CREATE TABLE `carousel_2` (
  `id_carousel2` int(5) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `caption` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `carousel_2`
--

INSERT INTO `carousel_2` (`id_carousel2`, `gambar`, `caption`) VALUES
(1, 'v502_1483.png', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis cupiditate voluptatibus cum quae ea voluptate deserunt ex quasi voluptatem impedit? Tempore molestias ut est eaque, doloremque perspiciatis magni, ad totam!'),
(2, 'v502_1483.png', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis cupiditate voluptatibus cum quae ea voluptate deserunt ex quasi voluptatem impedit? Tempore molestias ut est eaque, doloremque perspiciatis magni, ad totam!'),
(3, 'v502_1483.png', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis cupiditate voluptatibus cum quae ea voluptate deserunt ex quasi voluptatem impedit? Tempore molestias ut est eaque, doloremque perspiciatis magni, ad totam!');

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id_products` int(5) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `caption` varchar(255) NOT NULL,
  `bg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id_products`, `gambar`, `caption`, `bg`) VALUES
(1, 'bali.png', 'BALI UNITED FC', '#ffad08'),
(2, 'bali.png', 'BALI UNITED BASKETBALL', '#c94d4d'),
(3, '118.png', 'ISLAND OF GODS', '#101010'),
(4, '13.png', 'KVIBES', '#6e5c5c'),
(5, 'rahasia-gadis.png', 'RAHASIA GADIS', '#fcc2c2'),
(6, 'laper.png', 'LAPER STORY GROUP', '#ffc247'),
(7, 'mask_group.png', 'PARENTING GROUP', '#7989e8'),
(8, '81.png', 'MILENNIALS GROUP', '#bf99f0'),
(9, 'komik.png', 'KOMIK DIMSUM', '#262f4a'),
(10, 'bola.png', 'BOLA NUSANTARA', '#660d28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `services`
--

CREATE TABLE `services` (
  `id_services` int(5) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `caption` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `services`
--

INSERT INTO `services` (`id_services`, `gambar`, `caption`) VALUES
(1, 'studio.png', 'STUDIO RENTAL'),
(2, 'marketing.png', 'DIGITAL MARKETING'),
(3, 'production.png', 'PRODUCTION HOUSE'),
(4, 'animation.png', 'ANIMATION HOUSE'),
(5, 'live.png', 'LIVE STREAMING'),
(6, 'talent.png', 'TALENT MANAGEMENT'),
(7, 'event.png', 'EVENT ORGANIZER'),
(8, 'brand.png', 'PR & BRAND REPUTATION'),
(9, 'sports.png', 'SPORTS AGENCY'),
(10, 'merchandising.png', 'MERCHANDISING');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id_carousel`);

--
-- Indeks untuk tabel `carousel_2`
--
ALTER TABLE `carousel_2`
  ADD PRIMARY KEY (`id_carousel2`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_products`);

--
-- Indeks untuk tabel `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id_services`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id_carousel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `carousel_2`
--
ALTER TABLE `carousel_2`
  MODIFY `id_carousel2` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id_products` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `services`
--
ALTER TABLE `services`
  MODIFY `id_services` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
