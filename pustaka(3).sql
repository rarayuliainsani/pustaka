-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 23 Des 2018 pada 08.50
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pustaka`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE IF NOT EXISTS `buku` (
`idbuku` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `kategori_buku` varchar(50) NOT NULL,
  `isbn` varchar(15) NOT NULL,
  `keterangan` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`idbuku`, `judul`, `pengarang`, `penerbit`, `kategori_buku`, `isbn`, `keterangan`) VALUES
(2, 'Sejarah', 'Rina', 'Yudhistira', 'Pilihan Matkul', '4567', 'Pengantaran'),
(3, 'Algoritma', 'Yance', 'Erlangga', 'Wajib', '123', 'Pemula'),
(4, 'Agama', 'Abdul', 'Yudhistira', 'Tidak Wajib', '456', 'pegangan'),
(5, 'basis data', 'Ervan', 'Erlangga', 'Wajib', '432', 'Pegangan ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
`id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `nama`, `keterangan`) VALUES
(1, 'Algoritma', 'Wajib');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penerbit`
--

CREATE TABLE IF NOT EXISTS `penerbit` (
`idpenerbit` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(70) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengarang`
--

CREATE TABLE IF NOT EXISTS `pengarang` (
`idpengarang` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(70) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengarang`
--

INSERT INTO `pengarang` (`idpengarang`, `nama`, `email`, `no_telp`, `alamat`) VALUES
(1, 'Dea Annona PP', 'deannona.pputri04@yahoo.co.id', '082273540456', 'padang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`iduser` smallint(6) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`iduser`, `username`, `password`, `level`) VALUES
(6, 'admin', 'ee10c315eba2c75b403ea99136f5b48d', 'administrator'),
(7, 'user', 'ff8327971a89cf8f238030f4c3fff871', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
 ADD PRIMARY KEY (`idbuku`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penerbit`
--
ALTER TABLE `penerbit`
 ADD PRIMARY KEY (`idpenerbit`);

--
-- Indexes for table `pengarang`
--
ALTER TABLE `pengarang`
 ADD PRIMARY KEY (`idpengarang`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
MODIFY `idbuku` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `penerbit`
--
ALTER TABLE `penerbit`
MODIFY `idpenerbit` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pengarang`
--
ALTER TABLE `pengarang`
MODIFY `idpengarang` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `iduser` smallint(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
