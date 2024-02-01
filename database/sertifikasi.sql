-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Feb 2024 pada 05.08
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sertifikasi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `peserta`
--

CREATE TABLE `peserta` (
  `id` int(10) NOT NULL,
  `kd_skema` varchar(10) NOT NULL,
  `nm_peserta` varchar(50) NOT NULL,
  `nik` int(16) NOT NULL,
  `jenkel` enum('Laki-laki','Perempuan') NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `peserta`
--

INSERT INTO `peserta` (`id`, `kd_skema`, `nm_peserta`, `nik`, `jenkel`, `alamat`, `no_hp`) VALUES
(3, 'SKM-001', 'Eki Mulyadi', 2147483647, 'Laki-laki', 'Bandung', 2147483647),
(4, 'SKM-002', 'Muhammad Zaki Ghifari', 2147483647, 'Laki-laki', 'Jakarta', 2147483647),
(5, 'SKM-001', 'Putri Anetta', 2147483647, 'Perempuan', 'Bandung', 2147483647);

-- --------------------------------------------------------

--
-- Struktur dari tabel `skema`
--

CREATE TABLE `skema` (
  `id` int(11) NOT NULL,
  `kd_skema` varchar(50) NOT NULL,
  `nm_skema` varchar(50) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `jml_unit` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `skema`
--

INSERT INTO `skema` (`id`, `kd_skema`, `nm_skema`, `jenis`, `jml_unit`) VALUES
(3, 'SKM-001', 'Junior Web Depelover', 'KKNI', 6),
(4, 'SKM-002', 'Digital Marketing', 'Klaster', 10),
(5, 'SKM-003', 'Desainer Multimedia Muda', 'KKNI', 10);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `skema`
--
ALTER TABLE `skema`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `peserta`
--
ALTER TABLE `peserta`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `skema`
--
ALTER TABLE `skema`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
