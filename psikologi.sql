-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 17. Januari 2018 jam 13:39
-- Versi Server: 5.5.16
-- Versi PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `psikologi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `adminuser`
--

CREATE TABLE IF NOT EXISTS `adminuser` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `adminuser`
--

INSERT INTO `adminuser` (`no`, `username`, `password`) VALUES
(1, 'adminpsi', 'ps1k0l0g1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
  `noid` int(11) NOT NULL AUTO_INCREMENT,
  `foto` varchar(100) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `tanggal` date NOT NULL,
  `isi` varchar(500) NOT NULL,
  `link` text NOT NULL,
  PRIMARY KEY (`noid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`noid`, `foto`, `judul`, `tanggal`, `isi`, `link`) VALUES
(1, 'n1.jpg', 'DKI Waspadai Ancaman Kesehatan Mental', '2017-12-25', 'Tingginya tekanan hidup di Jakarta membuat Ibu Kota ini rentan terhadap ancaman kesehatan mental,', 'https://www.kompasiana.com/dinsosdki/dki-waspadai-ancaman-kesehatan-mental_5807329b0ab0bdd01a955865'),
(2, 'n2.jpg', 'Teknik-Teknik Motivasi', '2017-12-25', 'Motivasi mempunyai peranan yang penting pada diri individu baik di strata pimpinan maupun anggota,', 'https://www.kompasiana.com/dinsosdki/dki-waspadai-ancaman-kesehatan-mental_5807329b0ab0bdd01a955865'),
(3, 'n3.jpg', 'Teknik-Teknik Motivasi', '2017-12-26', 'Motivasi mempunyai peranan yang penting pada diri individu baik di strata pimpinan maupun anggota,', 'https://www.kompasiana.com/dinsosdki/dki-waspadai-ancaman-kesehatan-mental_5807329b0ab0bdd01a955865');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `noid` int(11) NOT NULL AUTO_INCREMENT,
  `img` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`noid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`noid`, `img`, `email`, `password`, `nama`, `tanggal_lahir`, `no_telp`, `status`) VALUES
(1, 'Foto Onta.jpg', 'thedyarmstrong@gmail.com', '123', 'Tedi Hermawan', '2017-12-15', '0213911140', 'Mahasiswa'),
(2, 'no_img.jpg', 'anugrahtendaterpal@gmail.com', '12345', 'Siapa Aja', '2017-12-08', '02140404040', 'Pendaftar'),
(3, 'no_img.jpg', 'coba@gmail.com', 'adadad', 'Adsada', '2017-12-06', '1233213123123', 'Pendaftar'),
(4, 'no_img.jpg', 'uu@gmail.com', '123', 'Hahahah Hahahha', '2017-12-18', '1233213123123', 'Pendaftar'),
(6, '2kak_wfu-x234.png', 'mteguhh12@gmail.com', '12121994', 'Teguh Hermawan', '1994-12-12', '088888888888', 'Mahasiswa'),
(7, 'no_img.JPEG', 'ichbindiesel@gmail.com', 'teddy1992', 'Tedi Tedi', '2018-01-09', '1234567890', 'Pendaftar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE IF NOT EXISTS `pembayaran` (
  `noid` int(11) NOT NULL AUTO_INCREMENT,
  `nama_mahasiswa` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nama_rekening` varchar(100) NOT NULL,
  `transfer_ke` varchar(20) NOT NULL,
  `jumlah_transfer` varchar(30) NOT NULL,
  `nm_bank_mhs` varchar(100) NOT NULL,
  `no_rek_mhs` varchar(100) NOT NULL,
  `tanggal_transfer` date NOT NULL,
  `status_pembayaran` varchar(20) NOT NULL,
  PRIMARY KEY (`noid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`noid`, `nama_mahasiswa`, `email`, `nama_rekening`, `transfer_ke`, `jumlah_transfer`, `nm_bank_mhs`, `no_rek_mhs`, `tanggal_transfer`, `status_pembayaran`) VALUES
(7, 'Tedi Hermawan', 'thedyarmstrong@gmail.com', 'tedy', 'BCA', '200000', 'bca', '10000000000000', '2017-12-23', 'DONE'),
(8, 'Tedi Hermawan', 'thedyarmstrong@gmail.com', 'asdada', 'BCA', '20000', 'bca', '121212', '2018-01-10', 'DONE');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
