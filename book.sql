-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Bulan Mei 2020 pada 17.51
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bookingan`
--

CREATE TABLE `bookingan` (
  `id` int(12) NOT NULL,
  `id_booking` varchar(12) NOT NULL,
  `id_kamar` varchar(12) NOT NULL,
  `nama_penginapan` varchar(100) NOT NULL,
  `nama_penyewa` varchar(100) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `stok` int(11) NOT NULL,
  `total_harga` varchar(90) NOT NULL,
  `tgl_chekin` date NOT NULL,
  `tgl_chekout` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bookingan`
--

INSERT INTO `bookingan` (`id`, `id_booking`, `id_kamar`, `nama_penginapan`, `nama_penyewa`, `no_hp`, `stok`, `total_harga`, `tgl_chekin`, `tgl_chekout`) VALUES
(1, 'KM_906859', '542', 'Basecamp 1', 'Dendy Febrian', '08138485639', 1, 'Rp. 60000', '2020-05-13', '2020-05-15');

--
-- Trigger `bookingan`
--
DELIMITER $$
CREATE TRIGGER `booking_kamar` AFTER INSERT ON `bookingan` FOR EACH ROW UPDATE kamar SET kamar.stok=kamar.stok - new.stok
    WHERE kamar.nama_penginapan = NEW.nama_penginapan
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kamar`
--

CREATE TABLE `kamar` (
  `id` int(11) NOT NULL,
  `nama_penginapan` varchar(100) NOT NULL,
  `pemilik` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `price` varchar(90) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kamar`
--

INSERT INTO `kamar` (`id`, `nama_penginapan`, `pemilik`, `keterangan`, `gambar`, `price`, `stok`) VALUES
(3, 'Basecamp 1', 'Abah Gondrong', 'Tempat ruangan untuk tidur 2, Kasur 4, Bantal 4, Selimut 3, Kamar mandi 1', 'vila121.jpg', '30000', 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id` int(11) NOT NULL,
  `id_booking` varchar(12) NOT NULL,
  `total_pembayaran` varchar(25) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(90) NOT NULL,
  `password` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bookingan`
--
ALTER TABLE `bookingan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bookingan`
--
ALTER TABLE `bookingan`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kamar`
--
ALTER TABLE `kamar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
