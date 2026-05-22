-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Bulan Mei 2026 pada 11.25
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user20236019`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `grafik_keahlian`
--

CREATE TABLE `grafik_keahlian` (
  `id` int(11) NOT NULL,
  `keahlian` varchar(100) NOT NULL,
  `persentase` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `grafik_keahlian`
--

INSERT INTO `grafik_keahlian` (`id`, `keahlian`, `persentase`) VALUES
(1, 'Desain Sistem Mekatronika', 90),
(2, 'Pemrograman Arduino, PLC & Embedded', 95),
(3, 'Maintenance Mesin Otomatis', 85),
(4, 'Pemodelan 3D & Prototyping', 80),
(5, 'Integrasi Sensor & Aktuator', 88);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak_pesan`
--

CREATE TABLE `kontak_pesan` (
  `id` int(11) NOT NULL,
  `nama_pengirim` varchar(150) NOT NULL,
  `email_pengirim` varchar(150) NOT NULL,
  `detail_proyek` text NOT NULL,
  `waktu_kirim` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kontak_pesan`
--

INSERT INTO `kontak_pesan` (`id`, `nama_pengirim`, `email_pengirim`, `detail_proyek`, `waktu_kirim`) VALUES
(1, 'fff', 'fff@gmial.com', 'dsgfdsg', '2026-05-19 08:21:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ulasan_jasa`
--

CREATE TABLE `ulasan_jasa` (
  `id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `komentar` text NOT NULL,
  `foto_kerja` varchar(255) DEFAULT NULL,
  `waktu_ulasan` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `grafik_keahlian`
--
ALTER TABLE `grafik_keahlian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kontak_pesan`
--
ALTER TABLE `kontak_pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ulasan_jasa`
--
ALTER TABLE `ulasan_jasa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `grafik_keahlian`
--
ALTER TABLE `grafik_keahlian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `kontak_pesan`
--
ALTER TABLE `kontak_pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `ulasan_jasa`
--
ALTER TABLE `ulasan_jasa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
