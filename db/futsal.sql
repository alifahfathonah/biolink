-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 25 Jun 2020 pada 14.14
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `futsal`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_aspek`
--

CREATE TABLE `t_aspek` (
  `aspek_id` int(11) NOT NULL,
  `aspek_kode` text NOT NULL,
  `aspek_title` text NOT NULL,
  `aspek_bobot` text NOT NULL,
  `aspek_cf` text NOT NULL,
  `aspek_sf` text NOT NULL,
  `aspek_hapus` int(11) NOT NULL DEFAULT '0',
  `aspek_tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_aspek`
--

INSERT INTO `t_aspek` (`aspek_id`, `aspek_kode`, `aspek_title`, `aspek_bobot`, `aspek_cf`, `aspek_sf`, `aspek_hapus`, `aspek_tanggal`) VALUES
(2, 'AS01', 'Kecerdasan', '20', '60', '40', 0, '2020-06-23'),
(3, 'AS02', 'sikap kerja', '30', '60', '40', 0, '2020-06-23'),
(4, 'AS03', 'prilaku', '50', '60', '40', 0, '2020-06-23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_cfsf`
--

CREATE TABLE `t_cfsf` (
  `cfsf_id` int(11) NOT NULL,
  `cfsf_user` int(11) DEFAULT NULL,
  `cfsf_aspek` text,
  `cfsf_cf` text,
  `cfsf_sf` text,
  `cfsf_nilai` text,
  `cfsf_status` int(11) DEFAULT '0',
  `cfsf_tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_cfsf`
--

INSERT INTO `t_cfsf` (`cfsf_id`, `cfsf_user`, `cfsf_aspek`, `cfsf_cf`, `cfsf_sf`, `cfsf_nilai`, `cfsf_status`, `cfsf_tanggal`) VALUES
(12, 6, 'AS01', '0.6', '0.4', '3.94', 1, '2020-06-25'),
(13, 6, 'AS02', '0.6', '0.4', '4.13', 1, '2020-06-25'),
(14, 6, 'AS03', '0.6', '0.4', '4.5', 1, '2020-06-25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_detail`
--

CREATE TABLE `t_detail` (
  `detail_id` int(11) NOT NULL,
  `detail_user` int(11) NOT NULL,
  `detail_tempat_lahir` text NOT NULL,
  `detail_tanggal_lahir` date DEFAULT NULL,
  `detail_umur` text,
  `detail_alamat` text NOT NULL,
  `detail_nohp` text NOT NULL,
  `detail_ktp` text NOT NULL,
  `detail_tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_faktor`
--

CREATE TABLE `t_faktor` (
  `faktor_id` int(11) NOT NULL,
  `faktor_kode` text NOT NULL,
  `faktor_aspek` text NOT NULL,
  `faktor_title` text NOT NULL,
  `faktor_nilai_target` text NOT NULL,
  `faktor_target_1` text NOT NULL,
  `faktor_target_2` text NOT NULL,
  `faktor_target_3` text NOT NULL,
  `faktor_target_4` text NOT NULL,
  `faktor_target_5` text NOT NULL,
  `faktor_type` text NOT NULL,
  `faktor_hapus` int(11) NOT NULL DEFAULT '0',
  `faktor_tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_faktor`
--

INSERT INTO `t_faktor` (`faktor_id`, `faktor_kode`, `faktor_aspek`, `faktor_title`, `faktor_nilai_target`, `faktor_target_1`, `faktor_target_2`, `faktor_target_3`, `faktor_target_4`, `faktor_target_5`, `faktor_type`, `faktor_hapus`, `faktor_tanggal`) VALUES
(5, 'FK01', '2', 'Common Sense', '3', 'x', 'x', 'x', 'x', 'x', 'cf', 0, '2020-06-23'),
(6, 'FK02', '2', 'Verbalisasi Ide', '3', 'x', 'x', 'x', 'x', 'x', 'cf', 0, '2020-06-23'),
(7, 'FK03', '2', 'Sistematika Berpikir', '4', 'x', 'x', 'x', 'x', 'x', 'sf', 0, '2020-06-23'),
(8, 'FK04', '2', 'Penalaran dan Solusi Real', '4', 'x', 'x', 'x', 'x', 'x', 'sf', 0, '2020-06-23'),
(9, 'FK05', '2', 'Konsentrasi', '3', 'x', 'x', 'x', 'x', 'x', 'cf', 0, '2020-06-23'),
(10, 'FK06', '2', 'Logika Praktis', '4', 'x', 'x', 'x', 'x', 'x', 'sf', 0, '2020-06-23'),
(11, 'FK07', '2', 'Fleksibilitas Berpikir', '4', 'x', 'x', 'x', 'x', 'x', 'sf', 0, '2020-06-23'),
(12, 'FK08', '2', 'Imajinasi Kreatif', '5', 'x', 'x', 'x', 'x', 'x', 'cf', 0, '2020-06-23'),
(13, 'FK09', '2', 'Antisipasi', '3', 'x', 'x', 'x', 'x', 'x', 'cf', 0, '2020-06-23'),
(14, 'FK010', '2', 'Potensi Kecerdasan', '4', 'x', 'x', 'x', 'x', 'x', 'sf', 0, '2020-06-23'),
(15, 'FK011', '3', 'Energi Psikis', '3', 'x', 'x', 'x', 'x', 'x', 'cf', 0, '2020-06-23'),
(16, 'FK012', '3', 'Ketelitian dan tanggung jawab', '4', 'x', 'x', 'x', 'x', 'x', 'cf', 0, '2020-06-23'),
(17, 'FK013', '3', 'Kehati-hatian	', '2', 'x', 'x', 'x', 'x', 'x', 'sf', 0, '2020-06-23'),
(18, 'FK014', '3', 'Pengendalian Perasaan', '3', 'x', 'x', 'x', 'x', 'x', 'sf', 0, '2020-06-23'),
(19, 'FK015', '3', 'Dorongan Berprestasi	', '3', 'x', 'x', 'x', 'x', 'x', 'cf', 0, '2020-06-23'),
(20, 'FK016', '3', 'Vitalitas dan Perencanaan', '5', 'x', 'x', 'x', 'x', 'x', 'sf', 0, '2020-06-23'),
(21, 'FK017', '4', 'Dominance (Kekuasaan)', '3', 'x', 'x', 'x', 'x', 'x', 'cf', 0, '2020-06-23'),
(22, 'FK018', '4', 'Influences (Pengaruh)', '3', 'x', 'x', 'x', 'x', 'x', 'cf', 0, '2020-06-23'),
(23, 'FK019', '4', 'Steadiness (Keteguhan Hati)', '4', 'x', 'x', 'x', 'x', 'x', 'sf', 0, '2020-06-23'),
(24, 'FK020', '4', 'Compliance (Pemenuhan)', '5', 'x', 'x', 'x', 'x', 'x', 'sf', 0, '2020-06-23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_gap`
--

CREATE TABLE `t_gap` (
  `gap_id` int(11) NOT NULL,
  `gap_user` int(11) NOT NULL,
  `gap_aspek` text NOT NULL,
  `gap_faktor` text NOT NULL,
  `gap_hasil` text NOT NULL,
  `gap_status` int(11) NOT NULL DEFAULT '0',
  `gap_tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_gap`
--

INSERT INTO `t_gap` (`gap_id`, `gap_user`, `gap_aspek`, `gap_faktor`, `gap_hasil`, `gap_status`, `gap_tanggal`) VALUES
(65, 6, 'AS01', 'FK01', '-1', 1, '2020-06-25'),
(66, 6, 'AS01', 'FK02', '1', 1, '2020-06-25'),
(67, 6, 'AS01', 'FK03', '-1', 1, '2020-06-25'),
(68, 6, 'AS01', 'FK04', '-1', 1, '2020-06-25'),
(69, 6, 'AS01', 'FK05', '-1', 1, '2020-06-25'),
(70, 6, 'AS01', 'FK06', '-2', 1, '2020-06-25'),
(71, 6, 'AS01', 'FK07', '0', 1, '2020-06-25'),
(72, 6, 'AS01', 'FK08', '-2', 1, '2020-06-25'),
(73, 6, 'AS01', 'FK09', '-1', 1, '2020-06-25'),
(74, 6, 'AS01', 'FK010', '-1', 1, '2020-06-25'),
(75, 6, 'AS02', 'FK011', '0', 1, '2020-06-25'),
(76, 6, 'AS02', 'FK012', '0', 1, '2020-06-25'),
(77, 6, 'AS02', 'FK013', '1', 1, '2020-06-25'),
(78, 6, 'AS02', 'FK014', '-2', 1, '2020-06-25'),
(79, 6, 'AS02', 'FK015', '0', 1, '2020-06-25'),
(80, 6, 'AS02', 'FK016', '-4', 1, '2020-06-25'),
(81, 6, 'AS03', 'FK017', '1', 1, '2020-06-25'),
(82, 6, 'AS03', 'FK018', '1', 1, '2020-06-25'),
(83, 6, 'AS03', 'FK019', '0', 1, '2020-06-25'),
(84, 6, 'AS03', 'FK020', '-1', 1, '2020-06-25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_hasil_konversi`
--

CREATE TABLE `t_hasil_konversi` (
  `hasil_konversi_id` int(11) NOT NULL,
  `hasil_konversi_user` int(11) NOT NULL,
  `hasil_konversi_aspek` text NOT NULL,
  `hasil_konversi_faktor` text NOT NULL,
  `hasil_konversi_nilai` text NOT NULL,
  `hasil_konversi_status` int(11) NOT NULL DEFAULT '0',
  `hasil_konversi_tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_hasil_konversi`
--

INSERT INTO `t_hasil_konversi` (`hasil_konversi_id`, `hasil_konversi_user`, `hasil_konversi_aspek`, `hasil_konversi_faktor`, `hasil_konversi_nilai`, `hasil_konversi_status`, `hasil_konversi_tanggal`) VALUES
(65, 6, 'AS01', 'FK07', '5', 1, '2020-06-25'),
(66, 6, 'AS02', 'FK011', '5', 1, '2020-06-25'),
(67, 6, 'AS02', 'FK012', '5', 1, '2020-06-25'),
(68, 6, 'AS02', 'FK015', '5', 1, '2020-06-25'),
(69, 6, 'AS03', 'FK019', '5', 1, '2020-06-25'),
(70, 6, 'AS01', 'FK02', '4.5', 1, '2020-06-25'),
(71, 6, 'AS02', 'FK013', '4.5', 1, '2020-06-25'),
(72, 6, 'AS03', 'FK017', '4.5', 1, '2020-06-25'),
(73, 6, 'AS03', 'FK018', '4.5', 1, '2020-06-25'),
(74, 6, 'AS01', 'FK01', '4', 1, '2020-06-25'),
(75, 6, 'AS01', 'FK03', '4', 1, '2020-06-25'),
(76, 6, 'AS01', 'FK04', '4', 1, '2020-06-25'),
(77, 6, 'AS01', 'FK05', '4', 1, '2020-06-25'),
(78, 6, 'AS01', 'FK09', '4', 1, '2020-06-25'),
(79, 6, 'AS01', 'FK010', '4', 1, '2020-06-25'),
(80, 6, 'AS03', 'FK020', '4', 1, '2020-06-25'),
(81, 6, 'AS01', 'FK06', '3', 1, '2020-06-25'),
(82, 6, 'AS01', 'FK08', '3', 1, '2020-06-25'),
(83, 6, 'AS02', 'FK014', '3', 1, '2020-06-25'),
(84, 6, 'AS02', 'FK016', '1', 1, '2020-06-25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_konversi`
--

CREATE TABLE `t_konversi` (
  `konversi_id` int(11) NOT NULL,
  `konversi_title` text NOT NULL,
  `konversi_selisih` text NOT NULL,
  `konversi_bobot_nilai` text NOT NULL,
  `konversi_tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_konversi`
--

INSERT INTO `t_konversi` (`konversi_id`, `konversi_title`, `konversi_selisih`, `konversi_bobot_nilai`, `konversi_tanggal`) VALUES
(1, 'Tidak ada selisih (kompetensi sesuai dgn yg dibutuhkan)', '0', '5', '2020-05-17'),
(2, 'Kompetensi individu kelebihan 1 tingkat', '1', '4,5', '2020-05-17'),
(3, 'Kompetensi individu kekurangan 1 tingkat', '-1', '4', '2020-05-17'),
(4, 'Kompetensi individu kelebihan 2 tingkat', '2', '3,5', '2020-05-18'),
(5, 'Kompetensi individu kekurangan 2 tingkat', '-2', '3', '2020-05-18'),
(6, 'Kompetensi individu kelebihan 3 tingkat', '3', '2.5', '2020-05-18'),
(7, 'Kompetensi individu kekurangan 3 tingkat', '-3', '2', '2020-05-18'),
(8, 'Kompetensi individu kelebihan 4 tingkat', '4', '1,5', '2020-05-18'),
(9, 'Kompetensi individu kekurangan 4 tingkat', '-4', '1', '2020-05-18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_level`
--

CREATE TABLE `t_level` (
  `level_id` int(11) NOT NULL,
  `level_set` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_level`
--

INSERT INTO `t_level` (`level_id`, `level_set`) VALUES
(1, 'Manager'),
(2, 'Pelatih'),
(3, 'Pemain');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_lolos`
--

CREATE TABLE `t_lolos` (
  `lolos_id` int(11) NOT NULL,
  `lolos_user` text,
  `lolos_nilai` text,
  `lolos_rangking` text,
  `lolos_team` int(11) DEFAULT NULL,
  `lolos_tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_lolos`
--

INSERT INTO `t_lolos` (`lolos_id`, `lolos_user`, `lolos_nilai`, `lolos_rangking`, `lolos_team`, `lolos_tanggal`) VALUES
(6, '6', '4.28', '1', 1, '2020-06-25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_matching`
--

CREATE TABLE `t_matching` (
  `matching_id` int(11) NOT NULL,
  `matching_user` int(11) NOT NULL,
  `matching_hapus` int(11) DEFAULT '0',
  `matching_tanggal` date DEFAULT NULL,
  `matching_status` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_matching`
--

INSERT INTO `t_matching` (`matching_id`, `matching_user`, `matching_hapus`, `matching_tanggal`, `matching_status`) VALUES
(20, 6, 0, '2020-06-25', 1);

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
(1, 'test', '2,', 1, '2020-06-10'),
(2, 'Berhasil registrasi \"test\"', '2,', 0, '2020-06-18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_pengumuman`
--

CREATE TABLE `t_pengumuman` (
  `pengumuman_id` int(11) NOT NULL,
  `pengumuman_title` text NOT NULL,
  `pengumuman_user` text NOT NULL,
  `pengumuman_note` text NOT NULL,
  `pengumuman_tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_penilaian`
--

CREATE TABLE `t_penilaian` (
  `penilaian_id` int(11) NOT NULL,
  `penilaian_user` int(11) NOT NULL,
  `penilaian_aspek` text NOT NULL,
  `penilaian_faktor` text,
  `penilaian_nilai` text NOT NULL,
  `penilaian_tanggal` date DEFAULT NULL,
  `penilaian_status` int(11) DEFAULT '0',
  `penilaian_hapus` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_penilaian`
--

INSERT INTO `t_penilaian` (`penilaian_id`, `penilaian_user`, `penilaian_aspek`, `penilaian_faktor`, `penilaian_nilai`, `penilaian_tanggal`, `penilaian_status`, `penilaian_hapus`) VALUES
(97, 6, 'AS01', 'FK01', '2', '2020-06-25', 1, 0),
(98, 6, 'AS01', 'FK02', '4', '2020-06-25', 1, 0),
(99, 6, 'AS01', 'FK03', '3', '2020-06-25', 1, 0),
(100, 6, 'AS01', 'FK04', '3', '2020-06-25', 1, 0),
(101, 6, 'AS01', 'FK05', '2', '2020-06-25', 1, 0),
(102, 6, 'AS01', 'FK06', '2', '2020-06-25', 1, 0),
(103, 6, 'AS01', 'FK07', '4', '2020-06-25', 1, 0),
(104, 6, 'AS01', 'FK08', '3', '2020-06-25', 1, 0),
(105, 6, 'AS01', 'FK09', '2', '2020-06-25', 1, 0),
(106, 6, 'AS01', 'FK010', '3', '2020-06-25', 1, 0),
(107, 6, 'AS02', 'FK011', '3', '2020-06-25', 1, 0),
(108, 6, 'AS02', 'FK012', '4', '2020-06-25', 1, 0),
(109, 6, 'AS02', 'FK013', '3', '2020-06-25', 1, 0),
(110, 6, 'AS02', 'FK014', '1', '2020-06-25', 1, 0),
(111, 6, 'AS02', 'FK015', '3', '2020-06-25', 1, 0),
(112, 6, 'AS02', 'FK016', '1', '2020-06-25', 1, 0),
(113, 6, 'AS03', 'FK017', '4', '2020-06-25', 1, 0),
(114, 6, 'AS03', 'FK018', '4', '2020-06-25', 1, 0),
(115, 6, 'AS03', 'FK019', '4', '2020-06-25', 1, 0),
(116, 6, 'AS03', 'FK020', '4', '2020-06-25', 1, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_posisi`
--

CREATE TABLE `t_posisi` (
  `posisi_id` int(11) NOT NULL,
  `posisi_set` text,
  `posisi_status` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_posisi`
--

INSERT INTO `t_posisi` (`posisi_id`, `posisi_set`, `posisi_status`) VALUES
(1, 'Kiper', 0),
(2, 'Anchor', 0),
(3, 'Flank Kanan', 0),
(4, 'Flank Kiri', 0),
(5, 'Pivot', 0);

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
(17, 2, '2020-05-27 11:01:54', '2020-06-05 12:12:16', 0),
(18, 2, '2020-06-05 12:12:22', NULL, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_sparing`
--

CREATE TABLE `t_sparing` (
  `sparing_id` int(11) NOT NULL,
  `sparing_title` text,
  `sparing_team` text,
  `sparing_lawan` text,
  `sparing_waktu` datetime DEFAULT NULL,
  `sparing_note` text,
  `sparing_hapus` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_sparing`
--

INSERT INTO `t_sparing` (`sparing_id`, `sparing_title`, `sparing_team`, `sparing_lawan`, `sparing_waktu`, `sparing_note`, `sparing_hapus`) VALUES
(1, 'mm', '1', 'mmmm', '2020-07-03 00:28:00', 'mmmmm', 1),
(2, 'cc', '1', 'cc', '2020-07-03 08:29:00', 'ccccc', 1),
(3, 'Laga Tarkam', '1', 'Kademangan FC', '2020-07-03 20:55:00', 'Pasti menang', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_team`
--

CREATE TABLE `t_team` (
  `team_id` int(11) NOT NULL,
  `team_nama` text,
  `team_status` int(11) DEFAULT '0',
  `team_tanggal` date DEFAULT NULL,
  `team_hapus` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_team`
--

INSERT INTO `t_team` (`team_id`, `team_nama`, `team_status`, `team_tanggal`, `team_hapus`) VALUES
(1, 'Blitar FC', 1, '2020-06-05', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_total`
--

CREATE TABLE `t_total` (
  `total_id` int(11) NOT NULL,
  `total_user` text NOT NULL,
  `total_nilai` text NOT NULL,
  `total_status` int(11) NOT NULL DEFAULT '0',
  `total_tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_total`
--

INSERT INTO `t_total` (`total_id`, `total_user`, `total_nilai`, `total_status`, `total_tanggal`) VALUES
(6, '6', '4.28', 1, '2020-06-25');

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
  `user_tanggal` date DEFAULT NULL,
  `user_foto` text,
  `user_posisi` text,
  `user_status` int(11) DEFAULT '0',
  `user_seleksi` int(11) DEFAULT '0',
  `user_hapus` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_user`
--

INSERT INTO `t_user` (`user_id`, `user_nama`, `user_email`, `user_password`, `user_level`, `user_tanggal`, `user_foto`, `user_posisi`, `user_status`, `user_seleksi`, `user_hapus`) VALUES
(2, 'admin', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3', 1, '2020-05-10', 'avatar.jpg', '', 0, 0, 0),
(6, 'Gede', 'gede@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 3, '2020-06-23', NULL, '1', 1, 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_aspek`
--
ALTER TABLE `t_aspek`
  ADD PRIMARY KEY (`aspek_id`);

--
-- Indexes for table `t_cfsf`
--
ALTER TABLE `t_cfsf`
  ADD PRIMARY KEY (`cfsf_id`);

--
-- Indexes for table `t_detail`
--
ALTER TABLE `t_detail`
  ADD PRIMARY KEY (`detail_id`);

--
-- Indexes for table `t_faktor`
--
ALTER TABLE `t_faktor`
  ADD PRIMARY KEY (`faktor_id`);

--
-- Indexes for table `t_gap`
--
ALTER TABLE `t_gap`
  ADD PRIMARY KEY (`gap_id`);

--
-- Indexes for table `t_hasil_konversi`
--
ALTER TABLE `t_hasil_konversi`
  ADD PRIMARY KEY (`hasil_konversi_id`);

--
-- Indexes for table `t_konversi`
--
ALTER TABLE `t_konversi`
  ADD PRIMARY KEY (`konversi_id`);

--
-- Indexes for table `t_level`
--
ALTER TABLE `t_level`
  ADD PRIMARY KEY (`level_id`);

--
-- Indexes for table `t_lolos`
--
ALTER TABLE `t_lolos`
  ADD PRIMARY KEY (`lolos_id`);

--
-- Indexes for table `t_matching`
--
ALTER TABLE `t_matching`
  ADD PRIMARY KEY (`matching_id`);

--
-- Indexes for table `t_notifikasi`
--
ALTER TABLE `t_notifikasi`
  ADD PRIMARY KEY (`notifikasi_id`);

--
-- Indexes for table `t_pengumuman`
--
ALTER TABLE `t_pengumuman`
  ADD PRIMARY KEY (`pengumuman_id`);

--
-- Indexes for table `t_penilaian`
--
ALTER TABLE `t_penilaian`
  ADD PRIMARY KEY (`penilaian_id`);

--
-- Indexes for table `t_posisi`
--
ALTER TABLE `t_posisi`
  ADD PRIMARY KEY (`posisi_id`);

--
-- Indexes for table `t_registrasi`
--
ALTER TABLE `t_registrasi`
  ADD PRIMARY KEY (`registrasi_id`);

--
-- Indexes for table `t_sparing`
--
ALTER TABLE `t_sparing`
  ADD PRIMARY KEY (`sparing_id`);

--
-- Indexes for table `t_team`
--
ALTER TABLE `t_team`
  ADD PRIMARY KEY (`team_id`);

--
-- Indexes for table `t_total`
--
ALTER TABLE `t_total`
  ADD PRIMARY KEY (`total_id`);

--
-- Indexes for table `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_aspek`
--
ALTER TABLE `t_aspek`
  MODIFY `aspek_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `t_cfsf`
--
ALTER TABLE `t_cfsf`
  MODIFY `cfsf_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `t_detail`
--
ALTER TABLE `t_detail`
  MODIFY `detail_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_faktor`
--
ALTER TABLE `t_faktor`
  MODIFY `faktor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `t_gap`
--
ALTER TABLE `t_gap`
  MODIFY `gap_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
--
-- AUTO_INCREMENT for table `t_hasil_konversi`
--
ALTER TABLE `t_hasil_konversi`
  MODIFY `hasil_konversi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
--
-- AUTO_INCREMENT for table `t_konversi`
--
ALTER TABLE `t_konversi`
  MODIFY `konversi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `t_level`
--
ALTER TABLE `t_level`
  MODIFY `level_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `t_lolos`
--
ALTER TABLE `t_lolos`
  MODIFY `lolos_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `t_matching`
--
ALTER TABLE `t_matching`
  MODIFY `matching_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `t_notifikasi`
--
ALTER TABLE `t_notifikasi`
  MODIFY `notifikasi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `t_pengumuman`
--
ALTER TABLE `t_pengumuman`
  MODIFY `pengumuman_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_penilaian`
--
ALTER TABLE `t_penilaian`
  MODIFY `penilaian_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;
--
-- AUTO_INCREMENT for table `t_posisi`
--
ALTER TABLE `t_posisi`
  MODIFY `posisi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `t_registrasi`
--
ALTER TABLE `t_registrasi`
  MODIFY `registrasi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `t_sparing`
--
ALTER TABLE `t_sparing`
  MODIFY `sparing_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `t_team`
--
ALTER TABLE `t_team`
  MODIFY `team_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `t_total`
--
ALTER TABLE `t_total`
  MODIFY `total_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `t_user`
--
ALTER TABLE `t_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
