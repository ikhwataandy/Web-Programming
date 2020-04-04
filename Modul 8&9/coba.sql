-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Apr 2020 pada 19.35
-- Versi server: 10.1.35-MariaDB
-- Versi PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coba`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `harga`, `stok`) VALUES
(1, 'odol', 200000, 70),
(2, 'sepatu', 200000, 40);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jualbeli`
--

CREATE TABLE `jualbeli` (
  `idjualbeli` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jualbeli`
--

INSERT INTO `jualbeli` (`idjualbeli`, `id_barang`, `jenis`, `jumlah`) VALUES
(1, 2, 'beli', 20),
(2, 1, 'beli', 1),
(3, 2, 'jual', 1),
(4, 2, 'beli', 1),
(5, 1, 'beli', 1),
(6, 1, 'jual', 2),
(7, 2, 'beli', 20),
(8, 2, 'jual', 20);

--
-- Trigger `jualbeli`
--
DELIMITER $$
CREATE TRIGGER `trigger_jualbeli` AFTER INSERT ON `jualbeli` FOR EACH ROW BEGIN
	IF (NEW.jenis = 'beli') THEN
        UPDATE barang SET barang.stok = barang.stok + NEW.jumlah
        WHERE barang.id_barang = NEW.id_barang;
    ELSEIF (NEW.jenis = 'jual') THEN 
        UPDATE barang SET barang.stok = barang.stok - NEW.jumlah
        WHERE barang.id_barang = NEW.id_barang;
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `registrasi`
--

CREATE TABLE `registrasi` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `registrasi`
--

INSERT INTO `registrasi` (`username`, `password`, `email`, `nama`, `level`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@gmail.com', 'admin', 'admin'),
('pengguna', '8b097b8a86f9d6a991357d40d3d58634', 'pengguna@gmail.com', 'pengguna', 'pengguna');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `jualbeli`
--
ALTER TABLE `jualbeli`
  ADD PRIMARY KEY (`idjualbeli`),
  ADD KEY `fk_idjualbeli` (`id_barang`);

--
-- Indeks untuk tabel `registrasi`
--
ALTER TABLE `registrasi`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `jualbeli`
--
ALTER TABLE `jualbeli`
  MODIFY `idjualbeli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `jualbeli`
--
ALTER TABLE `jualbeli`
  ADD CONSTRAINT `fk_idjualbeli` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
