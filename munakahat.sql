-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2023 at 05:26 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `munakahat`
--

-- --------------------------------------------------------

--
-- Table structure for table `info_saksi`
--

CREATE TABLE `info_saksi` (
  `SaksiNoIc1` int(50) NOT NULL,
  `appID` int(50) NOT NULL,
  `namaSaksi1` varchar(50) NOT NULL,
  `alamatSaksi1` varchar(50) NOT NULL,
  `noTekSaksi1` int(20) NOT NULL,
  `saksiNoIC2` int(20) NOT NULL,
  `namaSaksi2` varchar(50) NOT NULL,
  `alamatSaksi2` varchar(50) NOT NULL,
  `noTelSaksi2` int(20) NOT NULL,
  `kategoriNikah` varchar(20) NOT NULL,
  `tarikhNikahTerdahulu` date NOT NULL,
  `bakiTalak` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `info_wali`
--

CREATE TABLE `info_wali` (
  `waliNoIC` int(50) NOT NULL,
  `appID` int(50) NOT NULL,
  `hubunganWali` varchar(50) NOT NULL,
  `namaWali` varchar(20) NOT NULL,
  `DOBWali` date NOT NULL,
  `umurWali` int(50) NOT NULL,
  `noTelWali` int(20) NOT NULL,
  `TarikhNikahPenjaga` date NOT NULL,
  `NoNikahPenjaga` int(20) NOT NULL,
  `namaPelulus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pasangan`
--

CREATE TABLE `pasangan` (
  `pasanganID` int(50) NOT NULL,
  `noIC` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pekerja`
--

CREATE TABLE `pekerja` (
  `staffID` int(20) NOT NULL,
  `namaPekerja` varchar(20) NOT NULL,
  `noTelPekerja` int(20) NOT NULL,
  `emailPekerja` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `bayaranID` int(20) NOT NULL,
  `noIC` int(20) NOT NULL,
  `jumlahBayaran` int(20) NOT NULL,
  `tarikh` date NOT NULL,
  `masa` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran_perkahwinan`
--

CREATE TABLE `pendaftaran_perkahwinan` (
  `appID` int(50) NOT NULL,
  `noIC` int(50) NOT NULL,
  `pasanganID` int(50) NOT NULL,
  `tarikhPermohonan` date NOT NULL,
  `negara` varchar(50) NOT NULL,
  `negeri` varchar(50) NOT NULL,
  `tarikhAkad` date NOT NULL,
  `alamatKahwin` varchar(50) NOT NULL,
  `jenisMasKahwin` varchar(20) NOT NULL,
  `jumMasKahwin` int(100) NOT NULL,
  `hantaran` int(100) NOT NULL,
  `pemberianLain` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `tarikhpermohonan` date NOT NULL DEFAULT current_timestamp(),
  `no.kp` varchar(50) NOT NULL,
  `nomborpermohonan` int(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no.Tel` int(20) NOT NULL,
  `tarikhkelahiran` date NOT NULL,
  `tempatkelahiran` varchar(50) NOT NULL,
  `kewarganegaraan` varchar(20) NOT NULL,
  `namabank` varchar(20) NOT NULL,
  `nomborbank` int(20) NOT NULL,
  `bil` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `jantina` varchar(20) NOT NULL,
  `NRICpolis_lama` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`tarikhpermohonan`, `no.kp`, `nomborpermohonan`, `nama`, `alamat`, `no.Tel`, `tarikhkelahiran`, `tempatkelahiran`, `kewarganegaraan`, `namabank`, `nomborbank`, `bil`, `email`, `jantina`, `NRICpolis_lama`) VALUES
('2021-06-17', '0132930449423', 323445, 'AHMAD ABU BIN DAUD', 'LOT 47 JALAN BAYA BESAR, 16150 KELUANG, PERAK', 192004433, '2003-06-10', 'HOSPITAL BAYA BESAR, 16150 KELUANG, PERAK', 'MALAYSIA', 'BANK ISLAM', 320304343, 1, '', '', 0),
('2023-06-02', '013293044947', 34422545, 'AHMAD AIMAN BIN ADAM', 'LOT 97 JALAN BAYA BESAR, 16150 KELUANG, PERAK', 192004424, '2013-06-19', 'HOSPITAL BAYA BESAR, 16150 KELUANG, PERAK', 'MALAYSIA', 'BANK RAKYAT', 320304020, 2, '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `permohonan_konsultasi`
--

CREATE TABLE `permohonan_konsultasi` (
  `konsultasiID` int(20) NOT NULL,
  `noIC` int(20) NOT NULL,
  `staffID` int(20) NOT NULL,
  `tarikh` date NOT NULL,
  `masa` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `praperkahwinan`
--

CREATE TABLE `praperkahwinan` (
  `praperkahwinanID` int(50) NOT NULL,
  `noSijilPerkahwinan` int(50) NOT NULL,
  `anjuran` varchar(50) NOT NULL,
  `tempat` varchar(20) NOT NULL,
  `tarikh` date NOT NULL,
  `kapasiti` int(50) NOT NULL,
  `kekosongan` int(20) NOT NULL,
  `siriTaklimat` varchar(20) NOT NULL,
  `staffID` int(20) NOT NULL,
  `catatan` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info_saksi`
--
ALTER TABLE `info_saksi`
  ADD PRIMARY KEY (`SaksiNoIc1`);

--
-- Indexes for table `info_wali`
--
ALTER TABLE `info_wali`
  ADD PRIMARY KEY (`waliNoIC`);

--
-- Indexes for table `pekerja`
--
ALTER TABLE `pekerja`
  ADD PRIMARY KEY (`staffID`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`bayaranID`);

--
-- Indexes for table `pendaftaran_perkahwinan`
--
ALTER TABLE `pendaftaran_perkahwinan`
  ADD PRIMARY KEY (`appID`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`no.kp`);

--
-- Indexes for table `permohonan_konsultasi`
--
ALTER TABLE `permohonan_konsultasi`
  ADD PRIMARY KEY (`konsultasiID`);

--
-- Indexes for table `praperkahwinan`
--
ALTER TABLE `praperkahwinan`
  ADD PRIMARY KEY (`praperkahwinanID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
