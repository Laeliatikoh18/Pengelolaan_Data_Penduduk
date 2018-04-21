-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 03. Oktober 2017 jam 12:37
-- Versi Server: 5.5.8
-- Versi PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_penduduk`
--

CREATE TABLE IF NOT EXISTS `data_penduduk` (
  `no_kk` varchar(100) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `nama_lgkp` varchar(200) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `rt` int(5) NOT NULL,
  `rw` int(5) NOT NULL,
  `shdk` varchar(50) NOT NULL,
  `tmpt_lhr` varchar(200) NOT NULL,
  `tgl_lhr` date NOT NULL,
  `jk` varchar(50) NOT NULL,
  `gol_darah` varchar(10) NOT NULL,
  `status_kwn` varchar(100) NOT NULL,
  `no_akta_lhr` varchar(100) NOT NULL,
  `no_akta_kwn` varchar(100) NOT NULL,
  `nik_ibu` varchar(100) NOT NULL,
  `nama_lgkp_ibu` varchar(200) NOT NULL,
  `nik_ayah` varchar(100) NOT NULL,
  `nama_lgkp_ayah` varchar(200) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `pendidikan` varchar(100) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `foto` varchar(500) NOT NULL,
  `no_id` varchar(12) NOT NULL,
  PRIMARY KEY (`nik`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_penduduk`
--

INSERT INTO `data_penduduk` (`no_kk`, `nik`, `nama_lgkp`, `alamat`, `rt`, `rw`, `shdk`, `tmpt_lhr`, `tgl_lhr`, `jk`, `gol_darah`, `status_kwn`, `no_akta_lhr`, `no_akta_kwn`, `nik_ibu`, `nama_lgkp_ibu`, `nik_ayah`, `nama_lgkp_ayah`, `agama`, `pendidikan`, `pekerjaan`, `foto`, `no_id`) VALUES
('3305120501100018', '3305122012930004', 'DEDI SAPUTRO', 'Dusun Karang', 2, 1, 'Anak', 'KEBUMEN', '1993-12-20', 'Perempuan', 'A', 'Belum Kawin', '-', '-', '3305124507600000', 'TASMINAH', '3305121505560000', 'SURANTO', 'Islam', 'SLTP Sederajat', 'Buruh Harian Lepas', 'images/Foto1135.jpg', 'AA0003'),
('3305120111120010', '3305122904810000', 'KHANAPI ', 'Dusun Karang', 1, 1, 'KK', 'KEBUMEN', '1981-04-29', 'Laki Laki', 'A', 'Kawin', '-', '19/19/I/2012 ', '3305120107330080 ', 'SUPRAPTI ', '3305120107330081', 'DULHAMID ', 'Islam', 'SLTP Sederajat', 'Buruh Harian Lepas', 'images/Foto0217.jpg', 'AA0004'),
('3305120111120017', '3305124511120002', 'DINNA AQILLAH HUSNA', 'Dusun Karang', 1, 1, '', 'KEBUMEN ', '2012-11-05', 'Perempuan', '', '', '', '', '3326135507770000', 'JUMIATI', '3305122904810000', 'KHANAPI', '', '', '', 'images/05042009231.jpg', 'AA0005'),
('3305120403100024', '3305125105850005', 'ANISSATUROFIAH', 'Dusun Karang', 1, 1, 'Istri', 'MAGELANG', '1988-09-14', 'Perempuan', 'A', 'Kawin', '-', '423/49/V/2004', '-', 'KONIYAH', '-', 'ABDUL KHAMID', 'Islam', 'SLTP Sederajat', 'Mengurus Rumah Tangga', 'images/Foto1132.jpg', 'AA0006');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelahiran`
--

CREATE TABLE IF NOT EXISTS `kelahiran` (
  `id_kelahiran` varchar(65) NOT NULL,
  `pukul` time NOT NULL,
  `jenis_kelahiran` varchar(30) NOT NULL,
  `kelahiran_ke` int(10) NOT NULL,
  `penolong_kelahiran` varchar(30) NOT NULL,
  `berat_bayi` int(10) NOT NULL,
  `panjang_bayi` int(10) NOT NULL,
  `pelapor` varchar(200) NOT NULL,
  `nik_saksi` varchar(100) NOT NULL,
  `nama_saksi` varchar(250) NOT NULL,
  `tgl_lhr_saksi` date NOT NULL,
  `alamat_saksi` varchar(250) NOT NULL,
  `tanggal_pernikahan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelahiran`
--

INSERT INTO `kelahiran` (`id_kelahiran`, `pukul`, `jenis_kelahiran`, `kelahiran_ke`, `penolong_kelahiran`, `berat_bayi`, `panjang_bayi`, `pelapor`, `nik_saksi`, `nama_saksi`, `tgl_lhr_saksi`, `alamat_saksi`, `tanggal_pernikahan`) VALUES
('AA0005', '13:00:00', 'NORMAL', 0, 'Bidan', 3, 40, 'KHANAPI', '3305120107330080', 'DULHAMID', '1933-07-01', 'Desa Argopeni rt:02 rw:03 Kecamatan Kebumen Kabupaten Kebumen Jawa Tengah', '1933-07-01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kematian`
--

CREATE TABLE IF NOT EXISTS `kematian` (
  `nik` varchar(30) NOT NULL,
  `tgl_kematian` date NOT NULL,
  `pukul` time NOT NULL,
  `sebab_kematian` varchar(200) NOT NULL,
  `tmpt_kematian` varchar(100) NOT NULL,
  `yg_menerangkan` varchar(100) NOT NULL,
  `nama_pelapor` varchar(200) NOT NULL,
  `nama_lgkp` varchar(100) NOT NULL,
  `tgl_lhr` date NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `jk` varchar(50) NOT NULL,
  `nik_saksi` varchar(100) NOT NULL,
  `nama_saksi` varchar(250) NOT NULL,
  `tgl_lhr_saksi` date NOT NULL,
  `alamat_saksi` varchar(250) NOT NULL,
  `no_id` int(12) NOT NULL AUTO_INCREMENT,
  `konfirm` int(1) NOT NULL,
  `send` int(1) NOT NULL,
  PRIMARY KEY (`no_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data untuk tabel `kematian`
--

INSERT INTO `kematian` (`nik`, `tgl_kematian`, `pukul`, `sebab_kematian`, `tmpt_kematian`, `yg_menerangkan`, `nama_pelapor`, `nama_lgkp`, `tgl_lhr`, `alamat`, `jk`, `nik_saksi`, `nama_saksi`, `tgl_lhr_saksi`, `alamat_saksi`, `no_id`, `konfirm`, `send`) VALUES
('3305124507600005', '2015-04-22', '04:00:00', 'Sakit biasa/ tua', 'Puskesmas Kebumen 1', 'Tenaga Kesehatan', 'SUPRIYATNO', 'TASMINAH', '1976-02-03', 'alamat', 'Perempuan', '3305121701140003', 'LINDI ASTUTI', '1981-05-11', 'Perum RSS Jatimulyo jl.Raflesia blok d no 06  Kebumen Jawa Tengah', 1, 2, 2),
('3305121505560005', '2015-07-20', '23:00:00', 'Sakit biasa/ tua', 'Rumah Duka', 'Dokter', 'HERMAWAN', 'SURANTO', '1956-05-13', 'alamat', 'Laki Laki', '3305121605130016', 'SAKHRONI', '1975-06-19', 'TEGAL', 2, 1, 1),
('3305122910120001', '2017-07-24', '09:00:00', 'Sakit biasa/ tua', 'JXNJX', 'Dokter', 'JDNDJ', 'ADHYASTHA NAUFAL ABDILLAH', '2012-05-22', 'alamat', 'Laki Laki', '783484', 'BHDD', '2017-07-19', 'JDJDD', 3, 1, 1),
('3305120401140002', '2017-08-09', '00:00:00', 'Sakit biasa/ tua', '', 'Dokter', '', 'ABDURRAHMAN EL SHARAWYY', '2014-01-04', 'alamat', 'Laki Laki', '', '', '0000-00-00', '', 6, 2, 2),
('3326135507770000', '2017-08-13', '12:00:00', 'Wabah Penyakit', 'CANDIWULAN', 'Tenaga Kesehatan', 'ASTI', 'JUMIATI ', '1977-06-15', 'alamat', 'Perempuan', '3305120107330067', 'RATIH', '2017-08-01', 'KEBUMEN', 7, 0, 0),
('3305122904810087', '0000-00-00', '00:00:00', 'Sakit biasa/ tua', '', 'Dokter', '', 'HIMA', '2017-08-08', 'alamat', 'Perempuan', '', '', '0000-00-00', '', 9, 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penduduk_keluar`
--

CREATE TABLE IF NOT EXISTS `penduduk_keluar` (
  `nik` varchar(30) NOT NULL,
  `nama_lgkp` varchar(200) NOT NULL,
  `jk` varchar(50) NOT NULL,
  `tgl_lhr` date NOT NULL,
  `agama` varchar(25) NOT NULL,
  `status_kwn` varchar(50) NOT NULL,
  `alamat_asal` varchar(200) NOT NULL,
  `alamat_tujuan` varchar(200) NOT NULL,
  `alasan_pindah` varchar(300) NOT NULL,
  `no_id` int(12) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`no_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `penduduk_keluar`
--

INSERT INTO `penduduk_keluar` (`nik`, `nama_lgkp`, `jk`, `tgl_lhr`, `agama`, `status_kwn`, `alamat_asal`, `alamat_tujuan`, `alasan_pindah`, `no_id`) VALUES
('3305120108760007', 'SUPRIYATNO', 'Perempuan', '1976-01-08', '', 'Kawin', 'Dusun Karang31 RT 3 RW 1', 'Perum Setrojenar Kembaran blok a no 12 Kebumen Jawa Tengah', 'Menempati Rumah Sendiri ', 1),
('3305120303770001', 'SUBAGIONO', 'Perempuan', '1977-03-03', '', 'Kawin', 'Dusun Karang RT 1 RW 1', 'bogor', 'kerja', 3),
('3326135507770054', 'ANDREA', 'Perempuan', '2017-08-01', '', 'Belum Kawin', 'Dusun Karang RT 2 RW 1', 'BOGOR', 'IKUT ORTU', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penduduk_masuk`
--

CREATE TABLE IF NOT EXISTS `penduduk_masuk` (
  `no_id` varchar(30) NOT NULL,
  `alamat_asal` varchar(200) NOT NULL,
  `alasan_pindah` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penduduk_masuk`
--

INSERT INTO `penduduk_masuk` (`no_id`, `alamat_asal`, `alasan_pindah`) VALUES
('AA0006', 'MAGELANG', 'Ikut Suami');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `no` int(200) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `level` varchar(200) NOT NULL,
  `Valid` varchar(10) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`no`, `username`, `password`, `level`, `Valid`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', '1'),
(5, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'user', '1'),
(6, 'leli', 'e4873a2bead4047fb903f110a126371a', 'user', '1'),
(7, 'KAUR UMUM', 'c41b8435d4723720ab09e892b3346812', 'user', '1'),
(8, 'Ratih', '0cfa66469d25bd0d9e55d7ba583f9f2f', 'kades', '1');
