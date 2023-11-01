-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2023 at 04:53 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rps`
--

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

CREATE TABLE `materi` (
  `kode_matkul` varchar(16) NOT NULL,
  `pertemuan` varchar(2) NOT NULL,
  `judul_materi` varchar(255) NOT NULL,
  `desk_materi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `materi`
--

INSERT INTO `materi` (`kode_matkul`, `pertemuan`, `judul_materi`, `desk_materi`) VALUES
('DT-001', '', 'Angle Kamera', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. '),
('DT-001', '', 'Movement Kamera', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. '),
('DT-001', '', 'Editing Online', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. '),
('DT-001', '', 'Editing Offline', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. '),
('DT-001', '', 'Penataan Set ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. '),
('DT-001', '', 'MUA dan Wardrobe', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. '),
('DT-001', '', 'Lighting', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. '),
('DT-001', '', 'Syuting', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. '),
('DT-001', '', 'Pascaproduksi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. '),
('DT-001', '', 'Sound Design', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. '),
('DT-001', '', 'Visual Effect', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. '),
('DT-001', '', 'Naskah', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. '),
('DT-001', '', 'Screening', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. '),
('DT-001', '', 'Film Pendek', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
('DT-002', '', 'Instalasi Wordpress', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. '),
('DT-002', '', 'Copywriting', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. '),
('DT-002', '', 'Backlink', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. '),
('DT-002', '', 'Optimisasi SEO', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. '),
('DT-002', '', 'Power Word', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. '),
('DT-002', '', 'Negative/Positive Sentiment', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. '),
('DT-002', '', 'Responsi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. '),
('DT-002', '', 'Hosting', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. '),
('DT-002', '', 'Domain', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. '),
('DT-002', '', 'CPanel', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. '),
('DT-002', '', 'Hostinger', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. '),
('DT-002', '', 'Domainesia', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. '),
('DT-002', '', 'Azure', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. '),
('DT-002', '', 'VPS', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. '),
('DT-003', '', 'Membangun Suasana', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. '),
('DT-003', '', 'Thematic Apperception Test', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. '),
('DT-003', '', 'Inventarisasi Reaksi Sosial', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. '),
('DT-003', '', 'Komunikasi Efektif', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. '),
('DT-003', '', 'Sikap Mental Positive', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. '),
('DT-003', '', 'Membangun Identitas Diri', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. '),
('DT-003', '', 'Keswadayaan', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. '),
('DT-003', '', 'Diskusi Kegemilangan', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. '),
('DT-003', '', 'Joe Harry Window', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. '),
('DT-003', '', 'Goal Setting', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. '),
('DT-003', '', 'Scheduling', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. '),
('DT-003', '', 'Mengetahui Jenis Kepribadian', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. '),
('DT-003', '', 'Mindset', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. '),
('DT-004', '', 'Kalimat', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
('DT-004', '', 'Kalimat Efektif', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
('DT-004', '', 'Kalimat Tidak Efektif', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
('DT-004', '', 'Struktur Kalimat', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
('DT-004', '', 'Konjungsi Kalimat', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
('DT-004', '', 'Kalimat Dialog', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
('DT-004', '', 'Diksi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
('DT-004', '', 'Tanda Baca', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
('DT-004', '', 'Sajak', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
('DT-004', '', 'Rima', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
('DT-004', '', 'Sastra Klasik', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
('DT-004', '', 'Puisi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
('DT-004', '', 'Naskah', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.');

-- --------------------------------------------------------

--
-- Table structure for table `matkul`
--

CREATE TABLE `matkul` (
  `nama_matkul` varchar(255) NOT NULL,
  `desk_matkul` varchar(8000) NOT NULL,
  `kode_matkul` varchar(16) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `matkul`
--

INSERT INTO `matkul` (`nama_matkul`, `desk_matkul`, `kode_matkul`, `created_at`) VALUES
('Multimedia', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vulputate, nunc rutrum tempor pharetra, odio diam finibus urna, at consectetur justo ipsum eget orci. Integer tempor laoreet ligula eget tristique. Nam imperdiet lacus ac enim malesuada, et consectetur nisi tincidunt. Vestibulum pretium dictum ipsum in eleifend. Donec quis ullamcorper risus. Nullam faucibus, mi nec volutpat feugiat, dui elit euismod enim, nec tincidunt eros tellus quis purus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.', 'DT-001', '2023-10-30 19:22:58'),
('E-Commerce', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vulputate, nunc rutrum tempor pharetra, odio diam finibus urna, at consectetur justo ipsum eget orci. Integer tempor laoreet ligula eget tristique. Nam imperdiet lacus ac enim malesuada, et consectetur nisi tincidunt. Vestibulum pretium dictum ipsum in eleifend. Donec quis ullamcorper risus. Nullam faucibus, mi nec volutpat feugiat, dui elit euismod enim, nec tincidunt eros tellus quis purus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.', 'DT-002', '2023-10-30 19:24:56'),
('Success Skill', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vulputate, nunc rutrum tempor pharetra, odio diam finibus urna, at consectetur justo ipsum eget orci. Integer tempor laoreet ligula eget tristique. Nam imperdiet lacus ac enim malesuada, et consectetur nisi tincidunt. Vestibulum pretium dictum ipsum in eleifend. Donec quis ullamcorper risus. Nullam faucibus, mi nec volutpat feugiat, dui elit euismod enim, nec tincidunt eros tellus quis purus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.', 'DT-003', '2023-10-30 19:32:16'),
('Bahasa Indonesia', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vulputate, nunc rutrum tempor pharetra, odio diam finibus urna, at consectetur justo ipsum eget orci. Integer tempor laoreet ligula eget tristique. Nam imperdiet lacus ac enim malesuada, et consectetur nisi tincidunt. Vestibulum pretium dictum ipsum in eleifend. Donec quis ullamcorper risus. Nullam faucibus, mi nec volutpat feugiat, dui elit euismod enim, nec tincidunt eros tellus quis purus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.', 'DT-004', '2023-10-31 03:40:07');

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE `userlogin` (
  `nama` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`nama`, `user`, `password`) VALUES
('Fahmi Muhammad Hanif', '22.01.4842', 'b0454ea073cbc84874203cc9a8cabd1a');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
