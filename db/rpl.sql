-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jan 2023 pada 03.05
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rpl`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absen`
--

CREATE TABLE `absen` (
  `id` int(11) NOT NULL,
  `Nama_lengkap` varchar(25) NOT NULL,
  `Jurusan` varchar(5) NOT NULL,
  `Kelas` varchar(5) NOT NULL,
  `Waktu` time(6) NOT NULL,
  `Tanggal` date NOT NULL,
  `Kehadiran` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `absen`
--

INSERT INTO `absen` (`id`, `Nama_lengkap`, `Jurusan`, `Kelas`, `Waktu`, `Tanggal`, `Kehadiran`) VALUES
(1, 'Dita Nurul Ramadhan', 'IPA', '9-A', '18:26:00.000000', '2023-01-02', 'Izin'),
(2, 'Azzahra', 'IPA', '8-A', '18:25:00.000000', '2023-01-02', 'Hadir'),
(3, 'Azzahra', 'IPA', '8-A', '18:25:00.000000', '2023-01-02', 'Hadir'),
(4, 'Dita', 'IPS', '9-A', '14:23:00.000000', '2023-01-02', 'Izin'),
(5, 'Dita Nurul Ramadhan', 'IPA', '8-A', '18:07:00.000000', '2023-01-02', 'Izin'),
(6, 'Dita Nurul Ramadhan', 'IPA', '8-A', '18:04:00.000000', '2023-01-02', 'Hadir');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dataguru`
--

CREATE TABLE `dataguru` (
  `id` int(5) NOT NULL,
  `Nama_lengkap` varchar(25) NOT NULL,
  `NIP` int(10) NOT NULL,
  `Jabatan` varchar(15) NOT NULL,
  `Alamat` varchar(25) NOT NULL,
  `Tempat_tanggal_lahir` varchar(15) NOT NULL,
  `Jenis_kelamin` varchar(10) NOT NULL,
  `Agama` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dataguru`
--

INSERT INTO `dataguru` (`id`, `Nama_lengkap`, `NIP`, `Jabatan`, `Alamat`, `Tempat_tanggal_lahir`, `Jenis_kelamin`, `Agama`) VALUES
(1, 'Ida Farida,S.Pd', 2147483647, 'Guru Sejarah', 'Garut', 'Garut,7 April 1', 'perempuan', 'islam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datasiswa`
--

CREATE TABLE `datasiswa` (
  `id` int(11) NOT NULL,
  `Nama_lengkap` varchar(25) NOT NULL,
  `NISN` int(10) NOT NULL,
  `Alamat` varchar(25) NOT NULL,
  `Tempat_tanggal_lahir` varchar(20) NOT NULL,
  `Jenis_kelamin` varchar(10) NOT NULL,
  `Agama` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `datasiswa`
--

INSERT INTO `datasiswa` (`id`, `Nama_lengkap`, `NISN`, `Alamat`, `Tempat_tanggal_lahir`, `Jenis_kelamin`, `Agama`) VALUES
(1, 'Azzahra', 212211123, 'Garut', '2005-07-28', 'Perempuan', 'islam'),
(2, 'Annisa', 212211123, 'garut', '2005-08-18', 'Perempuan', 'islam'),
(3, 'Andika Pratama', 212211125, 'Tarogong', '2005-04-14', 'Laki-laki', 'islam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `id` int(11) NOT NULL,
  `Pukul` time NOT NULL,
  `Senin` varchar(25) NOT NULL,
  `Selasa` varchar(25) NOT NULL,
  `Rabu` varchar(25) NOT NULL,
  `Kamis` varchar(25) NOT NULL,
  `Jumat` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`id`, `Pukul`, `Senin`, `Selasa`, `Rabu`, `Kamis`, `Jumat`) VALUES
(1, '07:00:00', 'Pendidikan Agama Islam', 'Bahasa Indonesia', 'Sejarah', 'Matematika Wajib', 'Bahasa Inggris'),
(2, '08:30:00', 'PPKN', 'Matematika Minat', 'Bahasa Jepang', 'Kewirausahaan', 'Seni Budaya'),
(3, '10:00:00', 'Istirahat', 'Istirahat', 'Istirahat', 'Istirahat', 'Istirahat'),
(4, '10:30:00', 'Fisika', 'Biologi', 'Kimia', 'Bahasa Sunda', 'Bahasa Indonesia');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`id`,`Nama_lengkap`);

--
-- Indeks untuk tabel `dataguru`
--
ALTER TABLE `dataguru`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Nama_lengkap` (`Nama_lengkap`) USING BTREE;

--
-- Indeks untuk tabel `datasiswa`
--
ALTER TABLE `datasiswa`
  ADD PRIMARY KEY (`id`,`Nama_lengkap`);

--
-- Indeks untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `absen`
--
ALTER TABLE `absen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `dataguru`
--
ALTER TABLE `dataguru`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `datasiswa`
--
ALTER TABLE `datasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
