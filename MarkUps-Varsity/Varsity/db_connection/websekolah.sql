-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Des 2019 pada 17.01
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
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `nama`, `password`) VALUES
(0, 'taufik', 'Muhammad Taufik Hidayat', 'taufik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kampus`
--

CREATE TABLE `kampus` (
  `id` int(11) NOT NULL,
  `nama_kampus` varchar(100) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `deskripsi_singkat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kampus`
--

INSERT INTO `kampus` (`id`, `nama_kampus`, `deskripsi`, `deskripsi_singkat`) VALUES
(1, 'Politeknik Negri Malang', 'Masa pendidikan program Diploma III (Ahli Madya) di Politeknik Negeri Malang adalah 6 semester, dengan rincian 5 semester kuliah di kampus dan 1 semester terakhir digunakan untuk praktik kerja lapangan (PKL) dan penyelesaian laporan akhir studi. Masa pendidikan program Diploma IV (Sarjana Sains Terapan) adalah 8 semester, dengan rincian 7 semester kuliah di kampus dan 1 semester terakhir digunakan untuk praktik kerja lapangan (PKL) dan penyelesaian skripsi', 'Politeknik Negeri Malang adalah perguruan tinggi negeri yang terdapat di Kota Malang, Provinsi Jawa Timur, Indonesia.'),
(2, 'Universitas Brawijaya', 'Universitas Brawijaya (disingkat UB), didirikan pada 5 Januari 1963 dan berlokasi di Malang.UB adalah universitas negeri otonom di Indonesia. Universitas Brawijaya diakui sebagai salah satu kampus elit di Indonesia dan secara konsisten peringkat 5 di tingkat nasional dengan rilis resmi dari Kemenristekdikti bersama dengan Universitas Indonesia (UI), Institut Pertanian Bogor (IPB), Universitas Gadjah Mada (UGM), dan Institut Teknologi Bandung (ITB).', 'Universitas Brawijaya (UB) berkedudukan di Kota Malang, Jawa Timur, didirikan pada tanggal 5 Januari 1963 dengan Surat Keputusan Menteri Perguruan Tinggi dan Ilmu Pengetahuan (PTIP) Nomor 1 Tahun 1963, dan kemudian dikukuhkan dengan Keputusan Presiden Rep'),
(3, 'Universitas Negeri Malang', 'Universitas Negeri Malang (disingkat UM), sebelumnya Institut Pendidikan Guru dan Ilmu Pendidikan Kota Malang (disingkat IKIP Malang), adalah salah satu universitas negeri di Indonesia yang  terletak di Malang dan Blitar, Jawa Timur, UM didirikan pada 18 Oktober 1954 sebagai PTPG Malang, sebagai Sekolah Pendidikan Universitas Airlangga, menjadikannya salah satu lembaga pengajaran tertua di Indonesia. UM dipisahkan dari Universitas Airlangga pada 20 Mei 1964 untuk menjadi IKIP Malang.', 'Universitas Negeri Malang adalah salah satu universitas negeri di Indonesia yang  terletak di Malang,Jawa Timur'),
(4, 'Universitas Merdeka Malang', 'Universitas Merdeka Malang, disingkat Unmer Malang, adalah perguruan tinggi swasta terkemuka di Kota Malang di bawah pengelolaan Yayasan Perguruan Tinggi Merdeka Malang (YPTM) yang saat ini diketuai Kolonel Purn. H. Toegino Sokarno, SE, yang berdiri pada tahun 1964. Rektor saat ini adalah Prof. Dr. H. Anwar Sanusi, SE., M.Si. Kampus ini terletak di Jl. Terusan Raya Dieng No. 62-64 Kota Malang.', 'Universitas Merdeka Malang adalah perguruan tinggi swasta terkemuka di Kota Malang'),
(5, 'Universitas Islam Negeri Maulana Malik Ibrahim Malang', 'Universitas Negeri Islam Maulana Malik Ibrahim Malang (sering UIN Malang atau UIN Maliki) adalah universitas negeri Islam di Malang, Indonesia. Sebagai universitas yang dioperasikan oleh negara, ia berpartisipasi dalam sistem penerimaan SNMPTN.\r\nSalah satu dari tiga universitas negeri dan banyak lainnya di kota ini, pada awalnya didirikan sebagai cabang dari Universitas Islam Negeri Sunan Ampel Surabaya pada tahun 1965.', 'Universitas Negeri Islam Maulana Malik Ibrahim Malang (sering UIN Malang atau UIN Maliki) adalah universitas negeri Islam di Malang, Indonesia'),
(6, 'Universitas Kanjuruhan', 'Universitas Kanjuruhan Malang adalah salah satu Perguruan Tinggi Swasta terkemuka di Kota Malang dan merupakan proses pengembangan merger antara IKIP PGRI Malang dengan Sekolah Tinggi Bahasa Asing (STIBA) Kanjuruhan Malang yang bernaung di bawah bendera Yayasan Pembina Lembaga Perguruan Tinggi PGRI. Yayasan ini kemudian berubah menjadi Perkumpulan Pembina Lembaga Pendidikan Perguruan Tinggi PGRI (PPLP PT PGRI).', 'Universitas Kanjuruhan Malang adalah salah satu Perguruan Tinggi Swasta terkemuka di Kota Malang'),
(7, 'Universitas Gajayana', 'Universitas Gajayana Malang, adalah perguruan tinggi swasta di Malang, Indonesia,Universitas ini di bawah Yayasan Pendidikan Gajayana. Berdirinya Universitas Gajayana diawali dengan sebuah Akademi Manajemen Perusahaan dan Akuntasi Malang pada tahun 1980. Empat tahun sesudah itu akademi ini ditingkatkan menjadi Sekolah Tinggi Ilmu Ekonomi Gajayana Malang. Selanjutnya mulai pada tanggal 28 Oktober 1986 statusnya berubah menjadi Universitas Gajayana hingga sekarang.', 'Universitas Gajayana Merupakan Perguruan TInggi Swasta Yang terletak di Kota Malang'),
(8, 'Universitas Muhammadiyah Malang', 'Universitas Muhammadiyah Malang (UMM) adalah perguruan tinggi swasta terakreditasi \"A\" dengan Nomor SK: 074/SK/BAN-PT/Ak-IV/PT/II/2013, yang berpusat di kampus III terpadu Universitas Muhammadiyah Malang, Jalan Raya Tlogomas 246 Kota Malang, Jawa Timur. Universitas yang berdiri pada tahun 1964 ini berinduk pada organisasi Muhammadiyah dan merupakan perguruan tinggi Muhammadiyah terbesar di Jawa Timur. UMM termasuk dalam jajaran PTS terkemuka di Indonesia.', 'Universitas Muhammadiyah Malang (UMM) adalah perguruan tinggi swasta terakreditasi \"A\" dengan Nomor SK: 074/SK/BAN-PT/Ak-IV/PT/II/2013, yang berpusat di kampus III terpadu Universitas Muhammadiyah Malang, Jalan Raya Tlogomas 246 Kota Malang, Jawa Timur.'),
(9, 'Politeknik Kota Malang', 'Politeknik Kota Malang, dikenal juga sebagai POLTEKOM, adalah sebuah perguruan tinggi milik pemerintah yang terletak di Kota Malang, Jawa Timur, Indonesia.\r\n\r\nDidirikan pada tahun 2008 dengan SK Perguruan Tinggi nomor 104/D0/2008 [1] bersamaan dengan 14 Politeknik lainya secara serentak sebagai wujud peningkatan perguruan tinggi dalam pendidikan vokasi di Indonesia. Politeknik Kota Malang menekankan pendidikan pada teknologi terapan (applied technology) khususnya di bidang teknik (engineering).', 'Politeknik Kota Malang, dikenal juga sebagai POLTEKOM, adalah sebuah perguruan tinggi milik pemerintah yang terletak di Kota Malang, Jawa Timur, Indonesia.'),
(10, 'Universitas Ma Chung', 'Universitas Ma Chung adalah sebuah universitas swasta Indonesia yang berlokasi di Villa Puncak Tidar N-01, Kota Malang, Jawa Timur. Universitas ini berada di bawah naungan Yayasan Harapan Bangsa Sejahtera.', 'Universitas Ma Chung adalah universitas swasta Indonesia yang berlokasi di Villa Puncak Tidar N-01, Kota Malang, Jawa Timur'),
(11, 'Universitas Tribhuwana Tungga Dewi', 'Universitas Tribhuwana Tungga Dewi (UNITRI) adalah merupakan salah satu perguruan tinggi swasta yang berbentuk Universitas yang terletak di Kota Malang, Jawa Timur Indonesia yang beralamatkan di Jalan Telaga Warna Tlogomas, Lowokwaru, Kota Malang 65144. Perguruan tinggi ini memiliki slogan \"Pendidikan Tinggi Untuk Semua\".', 'Universitas Tribhuwana Tungga Dewi (UNITRI) adalah merupakan salah satu perguruan tinggi swasta yang berbentuk Universitas yang terletak di Kota Malang, Jawa Timur Indonesia yang beralamatkan di Jalan Telaga Warna Tlogomas, Lowokwaru, Kota Malang 65144'),
(12, 'Institut Teknologi Kreatif Bina Nusantara Malang', 'Institut Teknologi Kreatif Bina Nusantara Malang juga dikenal dengan ITK BINUS Malang atau BINUS Malang adalah salah satu perguruan tinggi swasta berbentuk institut yang berlokasi di Malang, Indonesia. ITK BINUS Malang merupakan bagian dari Bina Nusantara Higher Education System.', 'nstitut Teknologi Kreatif Bina Nusantara Malang juga dikenal dengan ITK BINUS Malang atau BINUS Malang adalah salah satu perguruan tinggi swasta berbentuk institut yang berlokasi di Malang, Indonesia.'),
(13, 'Politeknik Kesehatan Kementerian Kesehatan Malang', 'Politeknik Kesehatan Kemenkes Malang disingkat Poltekkes Kemenkes Malang atau lebih dikenal dengan Polkesma, merupakan perguruan tinggi di bidang Kesehatan milik Kementerian Kesehatan Republik Indonesia.Berdasarkan SK Menkes RI Nomor: 1207/Menkes/SK/X/2001, 7 (tujuh) Akademi Kesehatan digabung menjadi Politeknik Kesehatan Departemen Kesehatan Malang yang berpusat di Jl. Ijen No 77 C Malang', 'Politeknik Kesehatan Kemenkes Malang disingkat Poltekkes Kemenkes Malang atau lebih dikenal dengan Polkesma, merupakan perguruan tinggi di bidang Kesehatan milik Kementerian Kesehatan Republik Indonesia.'),
(14, 'Universitas Terbuka', 'Universitas Terbuka (UT) adalah Perguruan Tinggi Negeri (PTN) ke-45 di Indonesia yang menerapkan sistem belajar terbuka dan jarak jauh. Sistem belajar ini terbukti efektif untuk meningkatkan daya jangkau dan pemerataan kesempatan pendidikan tinggi yang berkualitas bagi semua warga negara Indonesia, termasuk mereka yang tinggal di daerah-daerah terpencil, baik di seluruh nusantara maupun di berbagai belahan dunia.', 'Universitas Terbuka (UT) adalah Perguruan Tinggi Negeri (PTN) ke-45 di Indonesia yang menerapkan sistem belajar terbuka dan jarak jauh.'),
(15, 'Universitas Widyagama', 'Universitas Widyagama Malang adalah universitas perguruan tinggi swastaswasta di Malang, Jawa Timur, Indonesia,\r\n\r\nUniversitas Widyagama Malang didirikan oleh yayasan yang bernama Yayasan Pembina Pendidikan Indonesia (YPPI) pada tahun 1971. Semula Universitas ini didirikan sebagai Akademi Bank Widyagama Malang pada tanggal 24 Februari 1971. Pada tanggal yang sama tahun 1974, berdiri pula Akademi Manajemen Widyagama Malang.t', 'Universitas Widyagama Malang adalah universitas perguruan tinggi swastaswasta di Malang, Jawa Timur, Indonesias');

-- --------------------------------------------------------

--
-- Struktur dari tabel `program_studi`
--

CREATE TABLE `program_studi` (
  `id` int(11) NOT NULL,
  `nama_program_studi` varchar(100) NOT NULL,
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
(15, 'Keuangan', 'Sarjana'),
(19, 'Teknik Elektronika', 'Diploma'),
(20, 'Teknik Listrik', 'Diploma'),
(21, 'Teknik Telekomunikasi', 'Diploma'),
(22, 'Manajemen Informatika', 'Diploma'),
(23, 'Teknik Mesin', 'Diploma'),
(24, 'Teknik Sipil', 'Diploma'),
(25, 'Teknik Konstruksi Jalan, Jembatan, dan Bangunan Air', 'Diploma'),
(26, 'Manajemen Rekayasa Konstruksi', 'Diploma'),
(27, 'Teknik Kimia', 'Diploma'),
(28, 'Akuntansi', 'Diploma'),
(29, 'Administrasi Bisnis', 'Diploma'),
(31, 'Bahasa Inggris', 'Diploma');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `program_studi`
--
ALTER TABLE `program_studi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
