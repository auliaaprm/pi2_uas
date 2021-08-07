-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Agu 2021 pada 23.29
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `profile`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak`
--

CREATE TABLE `kontak` (
  `kontak_id` int(11) NOT NULL,
  `kontak` varchar(50) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kontak`
--

INSERT INTO `kontak` (`kontak_id`, `kontak`, `keterangan`) VALUES
(1, 'auliaapriliani80@gmail.com', 'Email'),
(2, '085721293506', 'Nomor Handphone'),
(3, 'liaaapy', 'Instagram'),
(4, 'liaaaapy', 'Line ID');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pekerjaan`
--

CREATE TABLE `pekerjaan` (
  `pekerjaan_id` int(11) NOT NULL,
  `nama_tempat` varchar(50) NOT NULL,
  `jabatan` varchar(40) NOT NULL,
  `masa_jabatan` varchar(20) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pekerjaan`
--

INSERT INTO `pekerjaan` (`pekerjaan_id`, `nama_tempat`, `jabatan`, `masa_jabatan`, `deskripsi`) VALUES
(1, 'Katiasa Baru Village', 'August Comittee', '2018 - 2020', 'Responsible for all preparations for activities commemorating Indonesia\'s independence day. Work closely with the team according to their respective responsibilities.'),
(2, 'Grafis Berbicara', 'Documentation Division', '2017', 'Carry out documentation activities together with the team and be responsible for all matters relating to documentation.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendidikan`
--

CREATE TABLE `pendidikan` (
  `pendidikan_id` int(11) NOT NULL,
  `tingkat` varchar(50) NOT NULL,
  `nama_tempat` varchar(100) NOT NULL,
  `tahun` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pendidikan`
--

INSERT INTO `pendidikan` (`pendidikan_id`, `tingkat`, `nama_tempat`, `tahun`) VALUES
(1, 'Taman Kanak-Kanak', 'BKB Kemas Bougenville', '2006'),
(2, 'Sekolah Dasar', 'SD Negeri Kuranji', '2007 - 2012'),
(3, 'Sekolah Menengah Pertama', 'SMP Negeri 8 Cirebon', '2013 - 2016'),
(4, 'Sekolah Menengah Atas', 'SMA Negeri 4 Cirebon', '2016 - 2019'),
(5, 'Sarjana', 'Universitas Catur Insan Cendekia', '2019 - Sekarang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pribadi`
--

CREATE TABLE `pribadi` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `kewarganegaraan` varchar(20) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `gol_darah` varchar(2) NOT NULL,
  `status` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pribadi`
--

INSERT INTO `pribadi` (`id`, `nama`, `tgl_lahir`, `gender`, `kewarganegaraan`, `agama`, `gol_darah`, `status`, `alamat`, `foto`) VALUES
(2, 'Aulia Apriliani Mulyadi', '2002-04-04', 'Perempuan', 'Indonesia', 'Islam', 'A', 'Mahasiswa', 'Katiasa Baru, Cirebon, Jawa Barat', 'aul.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `image` text NOT NULL,
  `role_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `password`, `image`, `role_id`) VALUES
(3, 'Aulia', 'aulia@gmail.com', '$2y$10$ICkBukHNN5IAKSTvoc4WO.C1J2CkTFcoodlB5Ak1G0FVYwcN1Y3AS', 'default.jpg', 1),
(10, 'Apriliani', 'april@gmail.com', '$2y$10$egKN8fKh97x.ggNIyMNuzOIntF3Sg/kfn0YpEenuxygSU29hj5/eG', 'default.jpg', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `role_id` int(11) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`role_id`, `role`) VALUES
(1, 'Admin'),
(2, 'Member');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`kontak_id`);

--
-- Indeks untuk tabel `pekerjaan`
--
ALTER TABLE `pekerjaan`
  ADD PRIMARY KEY (`pekerjaan_id`);

--
-- Indeks untuk tabel `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`pendidikan_id`);

--
-- Indeks untuk tabel `pribadi`
--
ALTER TABLE `pribadi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`role_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kontak`
--
ALTER TABLE `kontak`
  MODIFY `kontak_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pekerjaan`
--
ALTER TABLE `pekerjaan`
  MODIFY `pekerjaan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `pendidikan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pribadi`
--
ALTER TABLE `pribadi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
