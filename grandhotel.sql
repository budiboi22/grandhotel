-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 21 Agu 2014 pada 03.28
-- Versi Server: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `grandhotel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id_admin`),
  UNIQUE KEY `id_admin` (`id_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `content`
--

CREATE TABLE IF NOT EXISTS `content` (
  `content_id` int(11) NOT NULL AUTO_INCREMENT,
  `content_nama` varchar(100) NOT NULL,
  `content_deskripsi` text NOT NULL,
  PRIMARY KEY (`content_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `gambarkamar`
--

CREATE TABLE IF NOT EXISTS `gambarkamar` (
  `gamkam_id` int(11) NOT NULL AUTO_INCREMENT,
  `gamkam_nama` varchar(20) NOT NULL,
  `gamkam_src` varchar(100) NOT NULL,
  `tipe_id` int(11) NOT NULL,
  PRIMARY KEY (`gamkam_id`),
  KEY `tipe_id` (`tipe_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `gambarnews`
--

CREATE TABLE IF NOT EXISTS `gambarnews` (
  `gamnews_id` int(11) NOT NULL AUTO_INCREMENT,
  `gamnews_nama` varchar(100) NOT NULL,
  `gamnews_image` varchar(100) NOT NULL,
  `news_id` int(11) NOT NULL,
  PRIMARY KEY (`gamnews_id`),
  KEY `news_id` (`news_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kamar`
--

CREATE TABLE IF NOT EXISTS `kamar` (
  `kamar_id` int(11) NOT NULL AUTO_INCREMENT,
  `tipe_id` int(11) NOT NULL,
  `promo_id` int(11) NOT NULL,
  `kamar_status` enum('Available','Reserved','','') NOT NULL,
  PRIMARY KEY (`kamar_id`),
  KEY `tipe_id` (`tipe_id`,`promo_id`),
  KEY `promo_id` (`promo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfirmasi`
--

CREATE TABLE IF NOT EXISTS `konfirmasi` (
  `kon_id` int(11) NOT NULL,
  `kon_date` date NOT NULL,
  `re_id` int(11) NOT NULL,
  `kon_bank` varchar(10) NOT NULL,
  `kon_bayar` int(11) NOT NULL,
  `kon_namarek` varchar(25) NOT NULL,
  `kon_status` enum('Waiting','Confirmed','','') NOT NULL,
  `admin_id` int(11) NOT NULL,
  KEY `admin_id` (`admin_id`),
  KEY `re_id` (`re_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `news_id` int(11) NOT NULL AUTO_INCREMENT,
  `news_judul` varchar(100) NOT NULL,
  `news_deskripsi` text NOT NULL,
  `news_created` date NOT NULL,
  PRIMARY KEY (`news_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `promo`
--

CREATE TABLE IF NOT EXISTS `promo` (
  `promo_id` int(11) NOT NULL AUTO_INCREMENT,
  `promo_nama` varchar(25) NOT NULL,
  `promo_start` date NOT NULL,
  `promo_end` date NOT NULL,
  `promo_diskon` int(11) NOT NULL,
  `promo_deskripsi` text NOT NULL,
  PRIMARY KEY (`promo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `reservasi`
--

CREATE TABLE IF NOT EXISTS `reservasi` (
  `re_id` int(11) NOT NULL AUTO_INCREMENT,
  `re_date` date NOT NULL,
  `re_checkin` date NOT NULL,
  `re_checkout` date NOT NULL,
  `re_tamudewasa` int(11) NOT NULL,
  `re_tamuanak` int(11) NOT NULL,
  `kamar_id` int(11) NOT NULL,
  `tamu_id` int(11) NOT NULL,
  `re_total` int(11) NOT NULL,
  `re_status` enum('Booking','Issued','','') NOT NULL,
  PRIMARY KEY (`re_id`),
  KEY `kamar_id` (`kamar_id`,`tamu_id`),
  KEY `tamu_id` (`tamu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `slideshow`
--

CREATE TABLE IF NOT EXISTS `slideshow` (
  `slideshow_id` int(11) NOT NULL AUTO_INCREMENT,
  `slideshow_nama` varchar(100) NOT NULL,
  `slideshow_img` varchar(100) NOT NULL,
  PRIMARY KEY (`slideshow_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tamu`
--

CREATE TABLE IF NOT EXISTS `tamu` (
  `tamu_id` int(11) NOT NULL AUTO_INCREMENT,
  `tamu_namadepan` varchar(10) NOT NULL,
  `tamu_namabelakang` varchar(15) NOT NULL,
  `tamu_alamat` varchar(50) NOT NULL,
  `tamu_email` varchar(25) NOT NULL,
  `tamu_telepon` varchar(12) NOT NULL,
  PRIMARY KEY (`tamu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tipekamar`
--

CREATE TABLE IF NOT EXISTS `tipekamar` (
  `tipe_id` int(11) NOT NULL AUTO_INCREMENT,
  `tipe_nama` varchar(15) NOT NULL,
  `tipe_hargadewasa` int(11) NOT NULL,
  `tipe_hargaanak` int(11) NOT NULL,
  `tipe_deskripsi` text NOT NULL,
  `tipe_fasilitas` text NOT NULL,
  PRIMARY KEY (`tipe_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `tipekamar`
--

INSERT INTO `tipekamar` (`tipe_id`, `tipe_nama`, `tipe_hargadewasa`, `tipe_hargaanak`, `tipe_deskripsi`, `tipe_fasilitas`) VALUES
(1, '', 0, 0, '', ''),
(2, 'Deluxe Room', 350000, 200000, '', '');

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `gambarkamar`
--
ALTER TABLE `gambarkamar`
  ADD CONSTRAINT `gambarkamar_ibfk_1` FOREIGN KEY (`tipe_id`) REFERENCES `tipekamar` (`tipe_id`);

--
-- Ketidakleluasaan untuk tabel `gambarnews`
--
ALTER TABLE `gambarnews`
  ADD CONSTRAINT `gambarnews_ibfk_1` FOREIGN KEY (`news_id`) REFERENCES `news` (`news_id`);

--
-- Ketidakleluasaan untuk tabel `kamar`
--
ALTER TABLE `kamar`
  ADD CONSTRAINT `kamar_ibfk_1` FOREIGN KEY (`promo_id`) REFERENCES `promo` (`promo_id`),
  ADD CONSTRAINT `kamar_ibfk_2` FOREIGN KEY (`tipe_id`) REFERENCES `tipekamar` (`tipe_id`);

--
-- Ketidakleluasaan untuk tabel `konfirmasi`
--
ALTER TABLE `konfirmasi`
  ADD CONSTRAINT `konfirmasi_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id_admin`),
  ADD CONSTRAINT `konfirmasi_ibfk_2` FOREIGN KEY (`re_id`) REFERENCES `reservasi` (`re_id`);

--
-- Ketidakleluasaan untuk tabel `reservasi`
--
ALTER TABLE `reservasi`
  ADD CONSTRAINT `reservasi_ibfk_1` FOREIGN KEY (`kamar_id`) REFERENCES `kamar` (`kamar_id`),
  ADD CONSTRAINT `reservasi_ibfk_2` FOREIGN KEY (`tamu_id`) REFERENCES `tamu` (`tamu_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
