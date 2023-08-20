-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jan 2023 pada 03.04
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
-- Database: `loginbase`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `create_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `create_datetime`) VALUES
(2, 'dita', 'dita666@gmail.com', 'e6b047aa9378bce37a5260a949d1ea3e', '2022-03-27 06:50:31'),
(13, 'ditanrlr', 'ditanrlr@gmail.com', 'c6f057b86584942e415435ffb1fa93d4', '2022-07-02 07:36:15'),
(14, 'admin', 'ditanrlr@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '2022-12-09 12:47:15'),
(15, 'ditanrlr', 'dita@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2023-01-11 03:03:36');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
