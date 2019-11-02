-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Nov 2019 pada 05.02
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_loker`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_applicant`
--

CREATE TABLE `t_applicant` (
  `applicant_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `nick_name` varchar(50) NOT NULL,
  `level` varchar(10) NOT NULL,
  `majors_id` int(11) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `address` text NOT NULL,
  `code_wilayah` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telp` varchar(12) NOT NULL,
  `birth_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_company`
--

CREATE TABLE `t_company` (
  `company_id` int(11) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `company_logo` varchar(100) NOT NULL,
  `company_telp` varchar(12) NOT NULL,
  `company_email` varchar(100) NOT NULL,
  `company_address` text NOT NULL,
  `code_wilayah` varchar(10) NOT NULL,
  `attch_siup` varchar(100) DEFAULT NULL,
  `attch_tdp` varchar(100) DEFAULT NULL,
  `attch_npwp` varchar(100) DEFAULT NULL,
  `attch_photo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_company`
--

INSERT INTO `t_company` (`company_id`, `company_name`, `company_logo`, `company_telp`, `company_email`, `company_address`, `code_wilayah`, `attch_siup`, `attch_tdp`, `attch_npwp`, `attch_photo`) VALUES
(78, 'Fingerspot', 'Telkom_hi_res-01.png', '14789', 'programer1.fingerspot@gmail.com', 'sby', '123', 'Telkom_hi_res-01.png', 'Telkom_hi_res-01.png', 'Telkom_hi_res-01.png', 'Telkom_hi_res-01.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_majors`
--

CREATE TABLE `t_majors` (
  `majors_id` int(11) NOT NULL,
  `majors_name` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_school`
--

CREATE TABLE `t_school` (
  `school_id` int(11) NOT NULL,
  `school_name` varchar(200) NOT NULL,
  `school_logo` varchar(100) NOT NULL,
  `school_telp` varchar(12) NOT NULL,
  `school_email` varchar(200) NOT NULL,
  `school_address` text NOT NULL,
  `level` varchar(10) NOT NULL,
  `code_wilayah` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_user`
--

CREATE TABLE `t_user` (
  `user_id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `mode` int(11) NOT NULL,
  `mode_id` int(11) NOT NULL,
  `privilege` int(11) NOT NULL DEFAULT 1,
  `verified` int(11) NOT NULL DEFAULT 0,
  `token` varchar(200) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_user`
--

INSERT INTO `t_user` (`user_id`, `email`, `password`, `mode`, `mode_id`, `privilege`, `verified`, `token`, `remember_token`, `created_at`, `updated_at`) VALUES
(61, 'programer1.fingerspot@gmail.com', 'ebc9a68376441801aa50d68cf7be78d2ff1109d5', 1, 78, 1, 1, 'pvCVBMIQHCOg4ZGlhtDSiQvYmDO36FIPUi2udb08', NULL, '2019-10-25 03:56:04', '2019-10-28 04:10:02'),
(83, 'programer1.fingerspot@gmail.com', NULL, 1, 100, 1, 0, 'eL71Yuscpo6TZVpBrjfURMOLGJqXQ3vrn17JFCdH', NULL, '2019-11-02 02:49:20', '2019-11-02 02:49:20');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `t_applicant`
--
ALTER TABLE `t_applicant`
  ADD PRIMARY KEY (`applicant_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `majors_id` (`majors_id`);

--
-- Indeks untuk tabel `t_company`
--
ALTER TABLE `t_company`
  ADD PRIMARY KEY (`company_id`),
  ADD UNIQUE KEY `company_email` (`company_email`);

--
-- Indeks untuk tabel `t_majors`
--
ALTER TABLE `t_majors`
  ADD PRIMARY KEY (`majors_id`);

--
-- Indeks untuk tabel `t_school`
--
ALTER TABLE `t_school`
  ADD PRIMARY KEY (`school_id`),
  ADD UNIQUE KEY `school_email` (`school_email`);

--
-- Indeks untuk tabel `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `t_applicant`
--
ALTER TABLE `t_applicant`
  MODIFY `applicant_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `t_company`
--
ALTER TABLE `t_company`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT untuk tabel `t_majors`
--
ALTER TABLE `t_majors`
  MODIFY `majors_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `t_school`
--
ALTER TABLE `t_school`
  MODIFY `school_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `t_user`
--
ALTER TABLE `t_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `t_applicant`
--
ALTER TABLE `t_applicant`
  ADD CONSTRAINT `t_applicant_ibfk_1` FOREIGN KEY (`majors_id`) REFERENCES `t_majors` (`majors_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
