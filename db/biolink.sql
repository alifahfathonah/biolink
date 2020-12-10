-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 10 Des 2020 pada 20.43
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biolink`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_account`
--

CREATE TABLE `t_account` (
  `account_id` int(11) NOT NULL,
  `account_email` text NOT NULL,
  `account_url` text NOT NULL,
  `account_title` text NOT NULL,
  `account_deskripsi` text NOT NULL,
  `account_teks` text NOT NULL,
  `account_bg_type` set('preset','file') NOT NULL,
  `account_bg` text,
  `account_preset` text NOT NULL,
  `account_twitter` text NOT NULL,
  `account_instagram` text NOT NULL,
  `account_facebook` text NOT NULL,
  `account_youtube` text NOT NULL,
  `account_branding_status` enum('0','1') NOT NULL,
  `account_branding_name` text NOT NULL,
  `account_branding_analytics` text NOT NULL,
  `account_branding_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_account`
--

INSERT INTO `t_account` (`account_id`, `account_email`, `account_url`, `account_title`, `account_deskripsi`, `account_teks`, `account_bg_type`, `account_bg`, `account_preset`, `account_twitter`, `account_instagram`, `account_facebook`, `account_youtube`, `account_branding_status`, `account_branding_name`, `account_branding_analytics`, `account_branding_url`) VALUES
(7, 'bagaspramono78@gmail.com', 'bagas78', 'Belajar Ngoding', 'disini tempatnya belajar ngoding', '#f2f2f2', 'preset', 'a612a0166e07ced49e2942d2e43009a5.jpg', 'zelenyi-fon-tekstura-abstract-background-green-color.jpg', 'https://twitter.com/sarahvi10064221', 'https://www.instagram.com/sarahvilo.id/?hl=id', 'https://www.facebook.com/vilooo.id/', 'https://www.youtube.com/channel/UCXL90_ZHbh-EEwkyV_Tfp2A', '1', 'Bagas78', 'analitik', 'url');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_detail`
--

CREATE TABLE `t_detail` (
  `detail_id` int(11) NOT NULL,
  `detail_user` int(11) DEFAULT NULL,
  `detail_tempat_lahir` text,
  `detail_tanggal_lahir` date DEFAULT NULL,
  `detail_umur` text,
  `detail_alamat` text,
  `detail_nohp` text,
  `detail_ktp` text,
  `detail_tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_detail`
--

INSERT INTO `t_detail` (`detail_id`, `detail_user`, `detail_tempat_lahir`, `detail_tanggal_lahir`, `detail_umur`, `detail_alamat`, `detail_nohp`, `detail_ktp`, `detail_tanggal`) VALUES
(1, 2, 'Blitar', '1999-01-19', '21', 'Dsn. Krajan RT01 RW01 Ds. Sumberjo Kec. Kademangan Kab. Blitar', '085855011542', '35046883789393', '2020-12-05'),
(2, 5, '', '0000-00-00', '', '', '', '', '2020-12-10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_notifikasi`
--

CREATE TABLE `t_notifikasi` (
  `notifikasi_id` int(11) NOT NULL,
  `notifikasi_isi` text,
  `notifikasi_view` text NOT NULL,
  `notifikasi_hapus` int(11) NOT NULL DEFAULT '0',
  `notifikasi_tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_notifikasi`
--

INSERT INTO `t_notifikasi` (`notifikasi_id`, `notifikasi_isi`, `notifikasi_view`, `notifikasi_hapus`, `notifikasi_tanggal`) VALUES
(11, 'Berhasil registrasi "Bagas78"', '2,4,4,4,4,4,', 1, '2020-12-03'),
(12, 'Berhasil registrasi "admin@admin.com"', '2,', 1, '2020-12-07'),
(13, 'Berhasil registrasi "admin@admin.com"', '2,', 1, '2020-12-07'),
(14, 'Berhasil registrasi "admin@admin.com"', '2,', 1, '2020-12-07'),
(15, 'Berhasil registrasi "admin@admin.com"', '2,', 1, '2020-12-07'),
(16, 'Berhasil registrasi "admin@admin.com"', '2,', 1, '2020-12-07'),
(17, 'Berhasil registrasi "admin@admin.com"', '2,', 1, '2020-12-07'),
(18, 'Berhasil registrasi "admin@admin.com"', '2,', 1, '2020-12-07'),
(19, 'Berhasil registrasi "admin@admin.com"', '2,', 1, '2020-12-07'),
(20, 'Berhasil registrasi "admin@admin.com"', '2,', 1, '2020-12-07'),
(21, 'Berhasil registrasi "admin@admin.com"', '2,', 1, '2020-12-07'),
(22, 'Berhasil registrasi "admin@admin.com"', '2,', 1, '2020-12-07'),
(23, 'Berhasil registrasi "admin@admin.com"', '2,', 1, '2020-12-07'),
(24, 'Berhasil registrasi "Bagas Pramono"', '2,', 0, '2020-12-10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_preset`
--

CREATE TABLE `t_preset` (
  `preset_id` int(11) NOT NULL,
  `preset_nama` text NOT NULL,
  `preset_file` text NOT NULL,
  `preset_hapus` int(11) NOT NULL DEFAULT '0',
  `preset_tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_preset`
--

INSERT INTO `t_preset` (`preset_id`, `preset_nama`, `preset_file`, `preset_hapus`, `preset_tanggal`) VALUES
(7, 'Preset 1', '1_o8tTGo3vsocTKnCUyz0wHA.jpeg', 0, '2020-12-11'),
(8, 'Preset 2', 'color_strips_linii_background_fon.jpg', 1, '2020-12-11'),
(9, 'Preset 2', 'color-strips-linii-background-fon.jpg', 0, '2020-12-11'),
(10, 'Preset 3', 'UeGbja.jpg', 0, '2020-12-11'),
(11, 'Preset 4', 'zelenyi-fon-tekstura-abstract-background-green-color.jpg', 0, '2020-12-11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_registrasi`
--

CREATE TABLE `t_registrasi` (
  `registrasi_id` int(11) NOT NULL,
  `registrasi_user` int(11) NOT NULL,
  `registrasi_start` datetime DEFAULT NULL,
  `registrasi_end` datetime DEFAULT NULL,
  `registrasi_power` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_registrasi`
--

INSERT INTO `t_registrasi` (`registrasi_id`, `registrasi_user`, `registrasi_start`, `registrasi_end`, `registrasi_power`) VALUES
(28, 2, '2020-12-03 17:06:44', NULL, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_user`
--

CREATE TABLE `t_user` (
  `user_id` int(11) NOT NULL,
  `user_nama` text,
  `user_email` text,
  `user_password` text,
  `user_level` int(11) DEFAULT NULL,
  `user_foto` text,
  `user_hapus` int(11) DEFAULT '0',
  `user_tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_user`
--

INSERT INTO `t_user` (`user_id`, `user_nama`, `user_email`, `user_password`, `user_level`, `user_foto`, `user_hapus`, `user_tanggal`) VALUES
(2, 'admin', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3', 1, '', 0, '2020-05-10'),
(5, 'Bagas Pramono', 'bagaspramono78@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 2, 'avatar.jpg', 0, '2020-12-10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_account`
--
ALTER TABLE `t_account`
  ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `t_detail`
--
ALTER TABLE `t_detail`
  ADD PRIMARY KEY (`detail_id`);

--
-- Indexes for table `t_notifikasi`
--
ALTER TABLE `t_notifikasi`
  ADD PRIMARY KEY (`notifikasi_id`);

--
-- Indexes for table `t_preset`
--
ALTER TABLE `t_preset`
  ADD PRIMARY KEY (`preset_id`);

--
-- Indexes for table `t_registrasi`
--
ALTER TABLE `t_registrasi`
  ADD PRIMARY KEY (`registrasi_id`);

--
-- Indexes for table `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_account`
--
ALTER TABLE `t_account`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `t_detail`
--
ALTER TABLE `t_detail`
  MODIFY `detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `t_notifikasi`
--
ALTER TABLE `t_notifikasi`
  MODIFY `notifikasi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `t_preset`
--
ALTER TABLE `t_preset`
  MODIFY `preset_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `t_registrasi`
--
ALTER TABLE `t_registrasi`
  MODIFY `registrasi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `t_user`
--
ALTER TABLE `t_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
