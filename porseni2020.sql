-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Agu 2020 pada 04.31
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `porseni2020`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `id` int(11) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`id`, `uname`, `pass`) VALUES
(1, 'admin', 'admin'),
(2, 'iqbal', 'iqbal');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cabor`
--

CREATE TABLE `cabor` (
  `id` int(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nim` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `tingkat` int(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nohp` varchar(20) NOT NULL,
  `cabang` varchar(50) NOT NULL,
  `berat` int(50) NOT NULL,
  `tinggi` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `cabor`
--

INSERT INTO `cabor` (`id`, `nama`, `nim`, `jenis_kelamin`, `jurusan`, `prodi`, `tingkat`, `alamat`, `agama`, `email`, `nohp`, `cabang`, `berat`, `tinggi`) VALUES
(8, 'Jodi Usnanda Eka Putra', '1221122', 'Laki-laki', 'TIK', 'Teknik Informatika', 2, 'Jalan jalan', 'islam', 'jodisayangpapa@gmail.com', '08212121223', 'atletik', 0, 0),
(9, 'Hammam Sap', '23322112', 'Laki-laki', 'TIK', 'Teknik Informatika', 4, 'Jalan kemana ya', 'islam', 'hammamapala@gmail.com', '082145456363', 'catur', 0, 0),
(10, 'Hammam Sap', '23322112', 'Laki-laki', 'TIK', 'Teknik Informatika', 4, 'Jalan kemana ya', 'islam', 'hammamapala@gmail.com', '082145456363', 'catur', 0, 0),
(11, 'MahdiW', '54664464', 'Laki-laki', 'TIK', 'Teknik Informatika', 4, 'Jalan Jalan bareng', 'islam', 'mahdiaisild@gmail.com', '085271772324', 'basket', 0, 0),
(12, 'MahdiW', '54664464', 'Laki-laki', 'TIK', 'Teknik Informatika', 4, 'Jalan Jalan bareng', 'islam', 'mahdiaisild@gmail.com', '085271772324', 'basket', 0, 0),
(13, 'MahdiW', '54664464', 'Laki-laki', 'TIK', 'Teknik Informatika', 4, 'Jalan Jalan bareng', 'islam', 'mahdiaisild@gmail.com', '085271772324', 'basket', 0, 0),
(14, 'Ahmad', '123123', 'Laki-laki', 'TIK', 'Teknik Informatika', 2, 'kadadawqd', 'islam', 'qdqwdqwdqwd', '12312312323', 'Panjat Dinding', 150, 200),
(19, 'Iqbal Ridho Fitra', '4617010031', 'Laki-laki', 'Elektro', 'Telekomunikasi', 2, 'Jalan Teh Tareek', 'Islam', 'iqbalridho51@gmail.com', '+62811622500', 'Badminton', 55, 160);

-- --------------------------------------------------------

--
-- Struktur dari tabel `casen`
--

CREATE TABLE `casen` (
  `id` int(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nim` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `prodi` varchar(100) NOT NULL,
  `tingkat` int(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nohp` varchar(20) NOT NULL,
  `cabang` varchar(50) NOT NULL,
  `berat` int(20) NOT NULL,
  `tinggi` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `casen`
--

INSERT INTO `casen` (`id`, `nama`, `nim`, `jenis_kelamin`, `jurusan`, `prodi`, `tingkat`, `alamat`, `agama`, `email`, `nohp`, `cabang`, `berat`, `tinggi`) VALUES
(4, 'Dendy', '1221122', 'Perempuan', 'TIK', 'Teknik Informatika', 4, 'sdfwadfasdf', 'islam', 'denddddd@gmail.com', '08212121223', 'standupcom', 100, 160),
(5, 'dijess', '212121111', 'Perempuan', 'TIK', 'Teknik Informatika', 2, 'jalan kuysss', 'islam', 'dije@mapala.com', '08212121223', 'nasyid', 60, 160),
(6, 'dije', '212121111', 'Perempuan', 'TIK', 'Teknik Informatika', 2, 'jalan kuysss', 'islam', 'dije@mapala.com', '08212121223', 'photography', 60, 160);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `cabor`
--
ALTER TABLE `cabor`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `casen`
--
ALTER TABLE `casen`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `cabor`
--
ALTER TABLE `cabor`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `casen`
--
ALTER TABLE `casen`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
