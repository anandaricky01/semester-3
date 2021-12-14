-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Nov 2021 pada 14.11
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iot-tikub`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ketinggian`
--

CREATE TABLE `ketinggian` (
  `id_data` int(11) NOT NULL,
  `id_sensor` varchar(255) NOT NULL,
  `nilai_sensor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ketinggian`
--

INSERT INTO `ketinggian` (`id_data`, `id_sensor`, `nilai_sensor`) VALUES
(1, 'sensorC', 10),
(2, 'sensorC', 30),
(3, 'sensorB', 30),
(4, 'sensorC', 25),
(5, 'sensorC', 10),
(6, 'sensorC', 30),
(7, 'sensorC', 12),
(8, 'sensorC', 23),
(9, 'sensorC', 27),
(10, 'sensor_C', 30),
(11, 'sensorC', 10),
(12, 'sensor_D', 25),
(13, 'sensor_D', 25),
(14, 'sensor_D', 8),
(15, 'sensor_D', 30),
(16, 'sensor_D', 37),
(17, 'sensor_D', 37),
(18, 'sensor_D', 30),
(19, 'sensor_D', 30),
(20, 'sensorC', 10),
(21, 'sensorC', 30),
(22, 'sensorC', 25),
(23, 'sensorC', 20);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `ketinggian`
--
ALTER TABLE `ketinggian`
  ADD PRIMARY KEY (`id_data`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `ketinggian`
--
ALTER TABLE `ketinggian`
  MODIFY `id_data` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
