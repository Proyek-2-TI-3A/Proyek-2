-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Nov 2019 pada 01.44
-- Versi server: 10.1.39-MariaDB
-- Versi PHP: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `websekolah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kampus`
--

CREATE TABLE `kampus` (
  `id` int(11) NOT NULL,
  `nama_kampus` varchar(50) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `deskripsi_singkat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kampus`
--

INSERT INTO `kampus` (`id`, `nama_kampus`, `deskripsi`, `deskripsi_singkat`) VALUES
(1, 'Politeknik Negri Malang', 'Politeknik Negeri Malang adalah institusi pendidikan vokasi di Malang, Jawa Timur. Malang adalah kota terbesar kedua di Jawa Timur. Kota yang sejuk ini merupakan tempat yang nyaman untuk belajar karena Malang dikenal sebagai kota yang tenang. Selain itu, Malang memiliki beberapa institusi pendidikan berkualitas yang memberikan beragam pilihan program studi.\r\n\r\nPoliteknik Negeri Malang atau yang dikenal dengan Polinema adalah salah satu institusi pendidikan yang menawarkan berbagai program studi ', 'Politeknik Negeri Malang adalah perguruan tinggi negeri yang terdapat di Kota Malang, Provinsi Jawa Timur, Indonesia.'),
(2, 'Universitas Brawijaya', 'Universitas Brawijaya (UB) berkedudukan di Kota Malang, Jawa Timur, didirikan pada tanggal 5 Januari 1963 dengan Surat Keputusan Menteri Perguruan Tinggi dan Ilmu Pengetahuan (PTIP) Nomor 1 Tahun 1963, dan kemudian dikukuhkan dengan Keputusan Presiden Republik Indonesia Nomor 196 Tahun 1963 tertanggal 23 September 1963.\r\n\r\nUniversitas Brawijaya merupakan kampus elit di Indonesia dan secara konsisten menduduki peringkat 5 terbaik bersama dengan Universitas Indonesia, Institut Pertanian Bogor, Uni', 'Universitas Brawijaya (UB) berkedudukan di Kota Malang, Jawa Timur, didirikan pada tanggal 5 Januari 1963 dengan Surat Keputusan Menteri Perguruan Tinggi dan Ilmu Pengetahuan (PTIP) Nomor 1 Tahun 1963, dan kemudian dikukuhkan dengan Keputusan Presiden Rep');

-- --------------------------------------------------------

--
-- Struktur dari tabel `program_studi`
--

CREATE TABLE `program_studi` (
  `id` int(11) NOT NULL,
  `nama_program_studi` varchar(50) NOT NULL,
  `tingkat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `program_studi`
--

INSERT INTO `program_studi` (`id`, `nama_program_studi`, `tingkat`) VALUES
(1, 'Teknik Informatika', 'Sarjana'),
(2, 'Teknik Elektronika', 'Sarjana'),
(5, 'Sistem Kelistrikan', 'Sarjana'),
(7, 'Jaringan Tekelomunikasi Digital', 'Sarjana'),
(8, 'Jaringan Tekelomunikasi Digital', 'Sarjana'),
(9, 'Teknik Mesin Produksi dan Perawatan', 'Sarjana'),
(10, 'Teknik Otomotif Elektronika', 'Sarjana'),
(11, 'Managemen Rekayasa Konstruksi', 'Sarjana'),
(12, 'Teknik Kimia Industri', 'Sarjana'),
(13, 'Akuntansi Manajemen', 'Sarjana'),
(14, 'Manajemen Pemasaran', 'Sarjana'),
(15, 'Keuangan', 'Sarjana');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kampus`
--
ALTER TABLE `kampus`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `program_studi`
--
ALTER TABLE `program_studi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kampus`
--
ALTER TABLE `kampus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `program_studi`
--
ALTER TABLE `program_studi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
