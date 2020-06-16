-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 15 Feb 2018 pada 07.00
-- Versi Server: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_lpo`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pelanggan`
--

CREATE TABLE IF NOT EXISTS `tb_pelanggan` (
  `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT,
  `no_meter` int(15) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `kd_tarif` int(11) NOT NULL,
  PRIMARY KEY (`id_pelanggan`),
  KEY `kd_tarif` (`kd_tarif`),
  KEY `id_pelanggan` (`id_pelanggan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data untuk tabel `tb_pelanggan`
--

INSERT INTO `tb_pelanggan` (`id_pelanggan`, `no_meter`, `nama`, `alamat`, `kd_tarif`) VALUES
(12, 500215000, 'Hinazu', 'Alamat Jalan Raya', 1),
(14, 2555000, 'Test', 'Alamat jalan', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pembayaran`
--

CREATE TABLE IF NOT EXISTS `tb_pembayaran` (
  `id_bayar` int(11) NOT NULL AUTO_INCREMENT,
  `id_pelanggan` int(11) NOT NULL,
  `tanggal` int(2) NOT NULL,
  `bulan` varchar(10) NOT NULL,
  `biaya_adm` int(11) NOT NULL,
  PRIMARY KEY (`id_bayar`),
  KEY `id_pelanggan` (`id_pelanggan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penggunaan`
--

CREATE TABLE IF NOT EXISTS `tb_penggunaan` (
  `id_pelanggan` int(11) DEFAULT NULL,
  `bulan` varchar(10) NOT NULL,
  `tahun` int(5) NOT NULL,
  `meterawal` float NOT NULL,
  `meterakhir` float NOT NULL,
  PRIMARY KEY (`bulan`,`tahun`),
  KEY `id_pelanggan` (`id_pelanggan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_penggunaan`
--

INSERT INTO `tb_penggunaan` (`id_pelanggan`, `bulan`, `tahun`, `meterawal`, `meterakhir`) VALUES
(12, 'April', 2000, 1700, 3200),
(12, 'Februari', 2000, 500, 1000),
(14, 'Februari', 2011, 800, 1800),
(12, 'Januari', 2000, 0, 500),
(14, 'Januari', 2011, 0, 800),
(12, 'Maret', 2000, 1000, 1700),
(12, 'Mei', 2000, 3200, 3500);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tagihan`
--

CREATE TABLE IF NOT EXISTS `tb_tagihan` (
  `id_pelanggan` int(11) DEFAULT NULL,
  `bulan` varchar(10) NOT NULL,
  `tahun` int(5) NOT NULL,
  `jumlah_meter` float NOT NULL,
  `status` varchar(25) NOT NULL,
  PRIMARY KEY (`bulan`,`tahun`),
  KEY `id_pelanggan` (`id_pelanggan`),
  KEY `bulan` (`bulan`,`tahun`),
  KEY `bulan_2` (`bulan`,`tahun`),
  KEY `id_penggunaan_2` (`id_pelanggan`,`bulan`,`tahun`),
  KEY `id_penggunaan_3` (`id_pelanggan`,`bulan`,`tahun`),
  KEY `id_pelanggan_2` (`id_pelanggan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_tagihan`
--

INSERT INTO `tb_tagihan` (`id_pelanggan`, `bulan`, `tahun`, `jumlah_meter`, `status`) VALUES
(12, 'April', 2000, 1500, 'Belum Lunas'),
(12, 'Februari', 2000, 500, 'Belum Lunas'),
(14, 'Februari', 2011, 1000, 'Belum Lunas'),
(12, 'Januari', 2000, 500, 'Belum Lunas'),
(14, 'Januari', 2011, 800, 'Belum Lunas'),
(12, 'Maret', 2000, 700, 'Belum Lunas'),
(12, 'Mei', 2000, 300, 'Belum Lunas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tarif`
--

CREATE TABLE IF NOT EXISTS `tb_tarif` (
  `kd_tarif` int(11) NOT NULL AUTO_INCREMENT,
  `tp_tarif` int(11) NOT NULL,
  `daya` varchar(15) NOT NULL,
  `tarifperkwh` float NOT NULL,
  PRIMARY KEY (`kd_tarif`),
  KEY `tp_tarif` (`tp_tarif`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `tb_tarif`
--

INSERT INTO `tb_tarif` (`kd_tarif`, `tp_tarif`, `daya`, `tarifperkwh`) VALUES
(1, 1, '450 VA', 415),
(2, 2, '1300 VA', 818);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tipetarif`
--

CREATE TABLE IF NOT EXISTS `tb_tipetarif` (
  `id_tptarif` int(11) NOT NULL AUTO_INCREMENT,
  `tipe_tarif` varchar(25) NOT NULL,
  PRIMARY KEY (`id_tptarif`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `tb_tipetarif`
--

INSERT INTO `tb_tipetarif` (`id_tptarif`, `tipe_tarif`) VALUES
(1, 'R-1'),
(2, 'R-2'),
(3, 'R-3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `akses` enum('administrator','operator','pelanggan','') NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `alamat`, `akses`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Jalan Werkudara no.8 A', 'administrator');

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD CONSTRAINT `tb_pelanggan_ibfk_1` FOREIGN KEY (`kd_tarif`) REFERENCES `tb_tarif` (`kd_tarif`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD CONSTRAINT `tb_pembayaran_ibfk_1` FOREIGN KEY (`id_pelanggan`) REFERENCES `tb_pelanggan` (`id_pelanggan`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `tb_penggunaan`
--
ALTER TABLE `tb_penggunaan`
  ADD CONSTRAINT `tb_penggunaan_ibfk_1` FOREIGN KEY (`id_pelanggan`) REFERENCES `tb_pelanggan` (`id_pelanggan`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `tb_tagihan`
--
ALTER TABLE `tb_tagihan`
  ADD CONSTRAINT `tb_tagihan_ibfk_1` FOREIGN KEY (`id_pelanggan`) REFERENCES `tb_pelanggan` (`id_pelanggan`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `tb_tarif`
--
ALTER TABLE `tb_tarif`
  ADD CONSTRAINT `tb_tarif_ibfk_1` FOREIGN KEY (`tp_tarif`) REFERENCES `tb_tipetarif` (`id_tptarif`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
