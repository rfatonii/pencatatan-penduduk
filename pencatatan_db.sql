-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 07 Mei 2021 pada 09.55
-- Versi Server: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pencatatan_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar`
--

CREATE TABLE IF NOT EXISTS `daftar` (
  `email` varchar(50) NOT NULL,
  `handphone` varchar(13) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `conpassword` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `daftar`
--

INSERT INTO `daftar` (`email`, `handphone`, `username`, `password`, `conpassword`) VALUES
('arbaan9@gmail.com', '085810540160', 'arbaan', 'baan', 'baan'),
('fatir21@gmai.com', '08787654768', 'fatir', '12345678', '12345678'),
('fatonirizki12@gmail.com', '085811835954', 'rizkiawaliaf', 'duaribusatu', 'duaribusatu'),
('fatuha18@gmail.com', '0818176564433', 'fatuha', 'fatuha', 'fatuha'),
('gunawan88@gmail.com', '0828277689098', 'gungun', 'awaluddin', 'awaluddin'),
('jaini12@gmail.com', '08787654768', 'zaini', 'duaratus', 'duaratus'),
('jujung@gmail.com', '08787654768', 'jujung', '1878787', '1878787'),
('kamila14@gmail.com', '02135654432', 'kamila', 'kamilahasna', 'kamilahasna'),
('rojak12@gmail.com', '085811835954', 'rizkifatoni', 'duapuluh', 'duapuluh'),
('tuja17@gmail.com', '08787654768', 'tuja', 'rorotoil', 'rorotoil');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`email`, `password`) VALUES
('', 'satu'),
('fatonirizki12@gmail.com', 'satu'),
('fatonirizki12@gmail.com', 'satu'),
('fatonirizki12@gmail.com', 'dua'),
('fatonirizki12@gmail.com', 'dua'),
('jamiah', 'skjkjdkdj'),
('fatonirizki12@gmail.com', 'haji'),
('', ''),
('zamila12@gmail.com', 'lapanlapan'),
('', ''),
('fatonirizki12@gmail.com', 'duaribusatu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mutasi_penduduk`
--

CREATE TABLE IF NOT EXISTS `mutasi_penduduk` (
  `nik` varchar(50) NOT NULL,
  `nokk` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempat` varchar(10) NOT NULL,
  `lahir` date NOT NULL,
  `jekel` varchar(10) NOT NULL,
  `agama` enum('budha','hindu','islam','katholik','konghucu','protestan') NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mutasi_penduduk`
--

INSERT INTO `mutasi_penduduk` (`nik`, `nokk`, `nama`, `tempat`, `lahir`, `jekel`, `agama`, `alamat`) VALUES
('320192998390299', '0029029001111982', 'muhammad alamsyah', 'Bogor', '2000-09-17', 'Laki-Laki', 'islam', 'Prum BKI blok B9/06 Ds. Cikahuripan Kec. Klapanunggal'),
('3201998277787369', '900009109920000', 'siti aisyah', 'jakarta', '2000-02-02', 'Perempuan', 'islam', 'Prum BKI blok B2/06 RT01/017');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penduduk_baru`
--

CREATE TABLE IF NOT EXISTS `penduduk_baru` (
  `nik` varchar(50) NOT NULL,
  `nokk` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempat` varchar(30) NOT NULL,
  `lahir` date NOT NULL,
  `jekel` varchar(10) NOT NULL,
  `agama` enum('Budha','Hindu','Islam','Katholik','Protestan','Konghucu') NOT NULL,
  `asal` text NOT NULL,
  `baru` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penduduk_baru`
--

INSERT INTO `penduduk_baru` (`nik`, `nokk`, `nama`, `tempat`, `lahir`, `jekel`, `agama`, `asal`, `baru`) VALUES
('090909099992992', '900009109920000', 'irfan mahya fathurahman', 'Bekasi', '2007-01-12', 'Laki-Laki', 'Islam', 'tambun', 'prum BKI blok B2/06 RT 01/017 cikahuripan klapanunggal'),
('320132120209012', '900009109920000', 'Rizki Awalia Fatoni', 'Margatiga', '2001-02-12', 'Laki-Laki', 'Islam', 'tambun', 'prum BKI blok B2/06 RT 01/017 cikahuripan klapanunggal'),
('3201889287377287', '1000092988838289', 'Zainal Abidin Anwar', 'tangkil', '1999-12-16', 'Laki-Laki', 'Islam', 'parakan salak no.30 rt 17/09 sukabumi', 'prum villa asri rt 01/08 ds. cikahuripan'),
('3201992872787718', '0029029001111982', 'abdul kadir', 'jakarta', '1998-07-18', 'Laki-Laki', 'Islam', 'bekasi permai', 'prum villa asri rt 01/08 ds. cikahuripan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar`
--
ALTER TABLE `daftar`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `mutasi_penduduk`
--
ALTER TABLE `mutasi_penduduk`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `penduduk_baru`
--
ALTER TABLE `penduduk_baru`
  ADD PRIMARY KEY (`nik`,`nokk`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
