-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Jul 2021 pada 21.40
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
  `nama` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_users`
--

INSERT INTO `tbl_users` (`id_users`, `nama`, `username`, `password`, `role`) VALUES
(1, 'Operator', 'operator', 'icaditama123', 1),
(2, 'Wahfian Rahman', 'wahfian', 'icaditama123', 0),
(3, 'Irsyaditama Amru', 'irsyad', 'icaditama123', 0),
(4, 'Sumarni', 'sumarni', 'icaditama123', 2),
(6, 'Bella ', 'Bella', 'icaditama123', 0),
(7, 'Nadia Tri', 'nadiatri', 'icaditama123', 0),
(9, 'Mulyoto Ahmad', 'muyot', 'icaditama123', 0),
(10, 'rofi ikshan', 'rofi11', 'icaditama123', 0),
(11, 'Farhan Ali', 'farhan11', 'icaditama123', 0),
(12, 'Novan Tri Rusli', 'novan', 'icaditama123', 0),
(13, 'Rido Ramadhan', 'rido112', 'icaditama123', 0),
(14, 'Dina Wulandari', 'dina', 'icaditama123', 0),
(15, 'Risa Febriana', 'risa12', 'icaditama123', 0),
(16, 'Arman Wahfian', 'arman1190', 'icaditama123', 0),
(17, 'Faiqul Ghozi', 'goji11', 'icaditama123', 0),
(18, 'Dani Idham', 'dani19', 'icaditama123', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_buka_pendaftaran`
--

CREATE TABLE `tb_buka_pendaftaran` (
  `id_buka` int(11) NOT NULL,
  `jenis_pendaftaran` varchar(30) NOT NULL,
  `gelombang` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_buka_pendaftaran`
--

INSERT INTO `tb_buka_pendaftaran` (`id_buka`, `jenis_pendaftaran`, `gelombang`, `status`) VALUES
(1, 'pendaftaran guru', 4, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kriteria`
--

CREATE TABLE `tb_kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `kriteria` varchar(30) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `bobot` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kriteria`
--

INSERT INTO `tb_kriteria` (`id_kriteria`, `kriteria`, `jenis`, `bobot`) VALUES
(1, 'pengalaman', 'Benefit', 0.3),
(2, 'pendidikan', 'Benefit', 0.2),
(6, 'usia', 'Cost', 0.1),
(7, 'wawancara', 'Benefit', 0.2),
(8, 'kepribadian', 'Benefit', 0.2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_nilai_kriteria`
--

CREATE TABLE `tb_nilai_kriteria` (
  `id_nilai_kriteria` int(11) NOT NULL,
  `id_pendaftaran` int(11) NOT NULL,
  `pengalaman` int(11) NOT NULL,
  `pendidikan` int(11) NOT NULL,
  `usia` int(11) NOT NULL,
  `kepribadian` int(11) DEFAULT NULL,
  `wawancara` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `status_penerimaan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_nilai_kriteria`
--

INSERT INTO `tb_nilai_kriteria` (`id_nilai_kriteria`, `id_pendaftaran`, `pengalaman`, `pendidikan`, `usia`, `kepribadian`, `wawancara`, `status`, `status_penerimaan`) VALUES
(131, 243, 2, 7, 12, 18, 14, 1, 1),
(132, 244, 1, 8, 11, 18, 15, 1, 1),
(133, 245, 2, 7, 11, 17, 14, 1, 1),
(139, 251, 2, 7, 11, 18, 14, 1, 1),
(140, 252, 2, 7, 11, 19, 14, 1, 1),
(141, 253, 2, 7, 10, 17, 15, 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_normalisasi`
--

CREATE TABLE `tb_normalisasi` (
  `id_normalisasi` int(11) NOT NULL,
  `id_nilai_kriteria` int(11) NOT NULL,
  `n_pengalaman` float NOT NULL,
  `n_pendidikan` float NOT NULL,
  `n_usia` float NOT NULL,
  `n_kepribadian` float NOT NULL,
  `n_wawancara` float NOT NULL,
  `n_total` float NOT NULL,
  `tgl_penerimaan` date NOT NULL,
  `status_normalisasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_normalisasi`
--

INSERT INTO `tb_normalisasi` (`id_normalisasi`, `id_nilai_kriteria`, `n_pengalaman`, `n_pendidikan`, `n_usia`, `n_kepribadian`, `n_wawancara`, `n_total`, `tgl_penerimaan`, `status_normalisasi`) VALUES
(417, 131, 0.714286, 1, 1, 0.7, 1, 0.848016, '2021-07-27', 1),
(418, 132, 1, 0.428571, 0.428571, 0.7, 0.7, 0.6905, '2021-07-27', 1),
(419, 133, 0.714286, 1, 0.428571, 1, 1, 0.843845, '2021-07-27', 1),
(424, 139, 0.714286, 1, 0.428571, 0.7, 1, 0.785253, '2021-07-28', 0),
(425, 140, 0.714286, 1, 0.428571, 0.3, 1, 0.684977, '2021-07-28', 0),
(426, 141, 0.714286, 1, 0.3, 1, 0.7, 0.765276, '2021-07-28', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pendaftaran`
--

CREATE TABLE `tb_pendaftaran` (
  `id_pendaftaran` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `gelombang` int(11) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `alamat` text NOT NULL,
  `tgl_pendaftaran` date NOT NULL,
  `usia` varchar(15) NOT NULL,
  `bukti_pendidikan` varchar(20) NOT NULL,
  `bukti_pengalaman` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `cv` varchar(20) NOT NULL,
  `ijazah` varchar(20) NOT NULL,
  `ktp` varchar(20) NOT NULL,
  `is_verified` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pendaftaran`
--

INSERT INTO `tb_pendaftaran` (`id_pendaftaran`, `id_users`, `gelombang`, `nama_lengkap`, `nik`, `no_telp`, `email`, `alamat`, `tgl_pendaftaran`, `usia`, `bukti_pendidikan`, `bukti_pengalaman`, `tanggal_lahir`, `cv`, `ijazah`, `ktp`, `is_verified`) VALUES
(243, 3, 2, 'Irsyaditama Amru', '8690157234365512', '081283603650', 'irsyadittamru@gmail.com', 'jl.caman raya utara II no.33', '2021-07-27', '22-30', 'S1', '3 tahun', '1990-02-27', 'cv56.jpg', 'ijazah57.jpg', 'ktp57.jpg', 1),
(244, 7, 2, 'Nadia Tri Saputri', '8690157234365512', '081283603650', 'siswantosis861@gmail.com', 'jl.caman raya utara II no.33', '2021-07-27', '30-40', 'D3', '> 3 Tahun', '1989-02-27', 'cv57.jpg', 'ijazah58.jpg', 'ktp58.jpg', 1),
(245, 10, 2, 'Rofi ikshan saputra', '8690157234365512', '081283603650', 'irsyadittamru@gmail.com', 'jl.caman raya utara II no.33', '2021-07-27', '30-40', 'S1', '3 tahun', '1987-01-04', 'cv58.jpg', 'ijazah59.jpg', 'ktp59.jpg', 1),
(251, 18, 4, 'Dani Idham', '8690157234365512', '081383603650', 'siswantosis861@gmail.com', 'jl.caman raya utara II no.33', '2021-07-28', '30-40', 'S1', '3 tahun', '2021-01-03', 'cv64.jpg', 'ijazah65.jpg', 'ktp65.jpg', 1),
(252, 15, 4, 'Risa febriana', '8690157234365512', '081283603650', 'irsyadittamru@gmail.com', 'jl.caman raya utara II no.33', '2021-07-28', '30-40', 'S1', '3 tahun', '2021-07-11', 'cv65.jpg', 'ijazah66.jpg', 'ktp66.jpg', 1),
(253, 2, 4, 'Wahfian Rahmandicka', '8690157234365512', '081283603650', 'irsyadittamru@gmail.com', 'jl.caman raya utara II no.33', '2021-07-28', '40-50', 'S1', '3 tahun', '2021-07-18', 'cv66.jpg', 'ijazah67.jpg', 'ktp67.jpg', 1);

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
(1, 1, '> 3 Tahun', 35),
(2, 1, '3 tahun', 25),
(3, 1, '2 tahun', 20),
(4, 1, '1 tahun', 15),
(5, 1, '< 1 tahun', 5),
(6, 2, 'S2 ', 50),
(7, 2, 'S1', 35),
(8, 2, 'D3', 15),
(10, 6, '40-50', 50),
(11, 6, '30-40', 35),
(12, 6, '22-30', 15),
(14, 7, 'Sangat Bagus', 50),
(15, 7, 'Bagus', 35),
(16, 7, 'Kurang Bagus', 15),
(17, 8, 'Sangat Baik', 50),
(18, 8, 'Baik', 35),
(19, 8, 'Kurang Baik', 15),
(20, 7, 'Belum Dinilai', 0),
(21, 8, 'Belum Dinilai', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_verifikasi`
--

CREATE TABLE `tb_verifikasi` (
  `id_verifikasi` int(11) NOT NULL,
  `id_nilai_kriteria` int(11) NOT NULL,
  `c_nik` int(11) NOT NULL,
  `c_nama` int(11) NOT NULL,
  `c_tgl_lahir` int(11) NOT NULL,
  `c_usia` int(11) NOT NULL,
  `c_pendidikan` int(11) NOT NULL,
  `c_pengalaman` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_verifikasi`
--

INSERT INTO `tb_verifikasi` (`id_verifikasi`, `id_nilai_kriteria`, `c_nik`, `c_nama`, `c_tgl_lahir`, `c_usia`, `c_pendidikan`, `c_pengalaman`) VALUES
(24, 131, 1, 1, 1, 1, 1, 1),
(25, 132, 1, 1, 1, 1, 1, 1),
(26, 133, 1, 1, 1, 1, 1, 1),
(32, 139, 1, 1, 1, 1, 1, 1),
(33, 140, 1, 1, 1, 1, 1, 1),
(34, 141, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_wawancara`
--

CREATE TABLE `tb_wawancara` (
  `id_wawancara` int(11) NOT NULL,
  `id_pendaftaran` int(11) NOT NULL,
  `waktu` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `is_verif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_wawancara`
--

INSERT INTO `tb_wawancara` (`id_wawancara`, `id_pendaftaran`, `waktu`, `tanggal`, `is_verif`) VALUES
(125, 243, '10.30', '2021-07-28', 2),
(126, 244, '8.30', '2021-07-29', 2),
(127, 245, '8.30', '2021-07-29', 2),
(132, 251, '8.30', '2021-07-28', 2),
(133, 252, '10.30', '2021-07-28', 2),
(134, 253, '12.30', '2021-07-28', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id_users`);

--
-- Indeks untuk tabel `tb_buka_pendaftaran`
--
ALTER TABLE `tb_buka_pendaftaran`
  ADD PRIMARY KEY (`id_buka`);

--
-- Indeks untuk tabel `tb_kriteria`
--
ALTER TABLE `tb_kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indeks untuk tabel `tb_nilai_kriteria`
--
ALTER TABLE `tb_nilai_kriteria`
  ADD PRIMARY KEY (`id_nilai_kriteria`),
  ADD KEY `tb_nilai_kriteria_ibfk_1` (`id_pendaftaran`),
  ADD KEY `pendidikan` (`pendidikan`),
  ADD KEY `pengalaman` (`pengalaman`),
  ADD KEY `kepribadian` (`kepribadian`),
  ADD KEY `wawancara` (`wawancara`),
  ADD KEY `tb_nilai_kriteria_ibfk_6` (`usia`);

--
-- Indeks untuk tabel `tb_normalisasi`
--
ALTER TABLE `tb_normalisasi`
  ADD PRIMARY KEY (`id_normalisasi`),
  ADD KEY `id_nilai_kriteria` (`id_nilai_kriteria`);

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
-- Indeks untuk tabel `tb_verifikasi`
--
ALTER TABLE `tb_verifikasi`
  ADD PRIMARY KEY (`id_verifikasi`),
  ADD KEY `tb_verifikasi_ibfk_1` (`id_nilai_kriteria`);

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
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `tb_buka_pendaftaran`
--
ALTER TABLE `tb_buka_pendaftaran`
  MODIFY `id_buka` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_kriteria`
--
ALTER TABLE `tb_kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tb_nilai_kriteria`
--
ALTER TABLE `tb_nilai_kriteria`
  MODIFY `id_nilai_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT untuk tabel `tb_normalisasi`
--
ALTER TABLE `tb_normalisasi`
  MODIFY `id_normalisasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=427;

--
-- AUTO_INCREMENT untuk tabel `tb_pendaftaran`
--
ALTER TABLE `tb_pendaftaran`
  MODIFY `id_pendaftaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=254;

--
-- AUTO_INCREMENT untuk tabel `tb_subkriteria`
--
ALTER TABLE `tb_subkriteria`
  MODIFY `id_subkriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `tb_verifikasi`
--
ALTER TABLE `tb_verifikasi`
  MODIFY `id_verifikasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `tb_wawancara`
--
ALTER TABLE `tb_wawancara`
  MODIFY `id_wawancara` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_nilai_kriteria`
--
ALTER TABLE `tb_nilai_kriteria`
  ADD CONSTRAINT `tb_nilai_kriteria_ibfk_1` FOREIGN KEY (`id_pendaftaran`) REFERENCES `tb_pendaftaran` (`id_pendaftaran`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_nilai_kriteria_ibfk_2` FOREIGN KEY (`pendidikan`) REFERENCES `tb_subkriteria` (`id_subkriteria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_nilai_kriteria_ibfk_3` FOREIGN KEY (`pengalaman`) REFERENCES `tb_subkriteria` (`id_subkriteria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_nilai_kriteria_ibfk_4` FOREIGN KEY (`kepribadian`) REFERENCES `tb_subkriteria` (`id_subkriteria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_nilai_kriteria_ibfk_5` FOREIGN KEY (`wawancara`) REFERENCES `tb_subkriteria` (`id_subkriteria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_nilai_kriteria_ibfk_6` FOREIGN KEY (`usia`) REFERENCES `tb_subkriteria` (`id_subkriteria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_normalisasi`
--
ALTER TABLE `tb_normalisasi`
  ADD CONSTRAINT `tb_normalisasi_ibfk_1` FOREIGN KEY (`id_nilai_kriteria`) REFERENCES `tb_nilai_kriteria` (`id_nilai_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE;

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
-- Ketidakleluasaan untuk tabel `tb_verifikasi`
--
ALTER TABLE `tb_verifikasi`
  ADD CONSTRAINT `tb_verifikasi_ibfk_1` FOREIGN KEY (`id_nilai_kriteria`) REFERENCES `tb_nilai_kriteria` (`id_nilai_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_wawancara`
--
ALTER TABLE `tb_wawancara`
  ADD CONSTRAINT `tb_wawancara_ibfk_1` FOREIGN KEY (`id_pendaftaran`) REFERENCES `tb_pendaftaran` (`id_pendaftaran`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
