-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Bulan Mei 2021 pada 19.24
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id_users` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_users`
--

INSERT INTO `tbl_users` (`id_users`, `username`, `password`, `role`) VALUES
(1, 'nyancat', 'icaditama123', 1),
(2, 'irsyaditt', 'icaditama123', 0),
(3, 'irsyad', 'icaditama123', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kriteria`
--

CREATE TABLE `tb_kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `kriteria` varchar(30) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `bobot` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kriteria`
--

INSERT INTO `tb_kriteria` (`id_kriteria`, `kriteria`, `jenis`, `bobot`) VALUES
(1, 'Pengalaman', 'Benefit', 35),
(2, 'Pendidikan', 'Benefit', 30),
(6, 'Gaji', 'Cost', 10),
(7, 'Komunikasi', 'Benefit', 10),
(8, 'Kepribadian', 'Benefit', 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_nilai_kriteria`
--

CREATE TABLE `tb_nilai_kriteria` (
  `id_nilai_kriteria` int(11) NOT NULL,
  `id_pendaftaran` int(11) NOT NULL,
  `pengalaman` int(11) NOT NULL,
  `pendidikan` int(11) NOT NULL,
  `gaji` int(11) NOT NULL,
  `kepribadian` int(11) DEFAULT NULL,
  `komunikasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pendaftaran`
--

CREATE TABLE `tb_pendaftaran` (
  `id_pendaftaran` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `alamat` text NOT NULL,
  `pendidikan` varchar(20) NOT NULL,
  `pengalaman` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `cv` varchar(20) NOT NULL,
  `ijazah` varchar(20) NOT NULL,
  `ktp` varchar(20) NOT NULL,
  `is_verified` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pendaftaran`
--

INSERT INTO `tb_pendaftaran` (`id_pendaftaran`, `id_users`, `nama_lengkap`, `nik`, `no_telp`, `email`, `alamat`, `pendidikan`, `pengalaman`, `tanggal_lahir`, `cv`, `ijazah`, `ktp`, `is_verified`) VALUES
(97, 2, 'Irsyaditama Amru', '86901572343655', '081383603650', 'irsyadittamru@gmail.com', 'jl.caman raya utara II no.33', '2', '1', '2021-05-23', 'cost7.PNG', 'lambangtk3.PNG', 'cost8.PNG', 0),
(98, 3, 'anyanbeakasi123', '869015723436', '081383603650', 'irsyadittamru@gmail.com', 'jl.caman raya utara II no.33', '2', '1', '2021-05-13', 'cost9.PNG', 'alur6.jpg', 'lambangtk4.PNG', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_subkriteria`
--

CREATE TABLE `tb_subkriteria` (
  `id_subkriteria` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `crips` varchar(30) NOT NULL,
  `nilai_sub` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_subkriteria`
--

INSERT INTO `tb_subkriteria` (`id_subkriteria`, `id_kriteria`, `crips`, `nilai_sub`) VALUES
(1, 1, '> 3 Tahun', 100),
(2, 1, '3 tahun', 80),
(3, 1, '2 tahun', 60),
(4, 1, '1 tahun', 40),
(5, 1, '< 1 tahun', 20),
(6, 2, 'S1 - Pendidikan', 100),
(7, 2, 'S1 - Lainnya', 80),
(8, 2, 'D3 - Paud', 60),
(9, 2, 'SMA', 40),
(10, 6, '> 2.000.000', 65),
(11, 6, '2.000.000', 75),
(12, 6, '1.000.000', 85),
(13, 6, '500.000', 100),
(14, 7, 'Sangat Baik', 100),
(15, 7, 'Cukup Baik', 80),
(16, 7, 'Kurang Baik', 60),
(17, 8, 'Sangat Baik', 100),
(18, 8, 'Cukup Baik', 60),
(19, 8, 'Kurang Baik', 40);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_wawancara`
--

CREATE TABLE `tb_wawancara` (
  `id_wawancara` int(11) NOT NULL,
  `id_pendaftaran` int(11) NOT NULL,
  `is_verif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_wawancara`
--

INSERT INTO `tb_wawancara` (`id_wawancara`, `id_pendaftaran`, `is_verif`) VALUES
(2, 97, 0),
(3, 98, 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id_users`);

--
-- Indeks untuk tabel `tb_kriteria`
--
ALTER TABLE `tb_kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indeks untuk tabel `tb_nilai_kriteria`
--
ALTER TABLE `tb_nilai_kriteria`
  ADD PRIMARY KEY (`id_nilai_kriteria`);

--
-- Indeks untuk tabel `tb_pendaftaran`
--
ALTER TABLE `tb_pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`),
  ADD KEY `id_users` (`id_users`);

--
-- Indeks untuk tabel `tb_subkriteria`
--
ALTER TABLE `tb_subkriteria`
  ADD PRIMARY KEY (`id_subkriteria`),
  ADD KEY `id_kriteria` (`id_kriteria`);

--
-- Indeks untuk tabel `tb_wawancara`
--
ALTER TABLE `tb_wawancara`
  ADD PRIMARY KEY (`id_wawancara`),
  ADD KEY `id_pendaftaran` (`id_pendaftaran`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_kriteria`
--
ALTER TABLE `tb_kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_nilai_kriteria`
--
ALTER TABLE `tb_nilai_kriteria`
  MODIFY `id_nilai_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_pendaftaran`
--
ALTER TABLE `tb_pendaftaran`
  MODIFY `id_pendaftaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT untuk tabel `tb_subkriteria`
--
ALTER TABLE `tb_subkriteria`
  MODIFY `id_subkriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `tb_wawancara`
--
ALTER TABLE `tb_wawancara`
  MODIFY `id_wawancara` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_pendaftaran`
--
ALTER TABLE `tb_pendaftaran`
  ADD CONSTRAINT `tb_pendaftaran_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `tbl_users` (`id_users`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_subkriteria`
--
ALTER TABLE `tb_subkriteria`
  ADD CONSTRAINT `tb_subkriteria_ibfk_1` FOREIGN KEY (`id_kriteria`) REFERENCES `tb_kriteria` (`id_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_wawancara`
--
ALTER TABLE `tb_wawancara`
  ADD CONSTRAINT `tb_wawancara_ibfk_1` FOREIGN KEY (`id_pendaftaran`) REFERENCES `tb_pendaftaran` (`id_pendaftaran`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
