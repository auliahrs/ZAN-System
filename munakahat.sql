-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2023 at 04:53 PM
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
-- Database: `munakahat`
--

-- --------------------------------------------------------

--
-- Table structure for table `info_saksi`
--

CREATE TABLE `info_saksi` (
  `SaksiNoIc1` varchar(12) NOT NULL,
  `appID` int(11) NOT NULL,
  `SS_namaSaksi1` varchar(50) NOT NULL,
  `SS_alamatSaksi1` varchar(50) NOT NULL,
  `SS_noTelSaksi1` varchar(12) NOT NULL,
  `saksiNoIC2` varchar(12) NOT NULL,
  `SS_namaSaksi2` varchar(50) NOT NULL,
  `SS_alamatSaksi2` varchar(50) NOT NULL,
  `SS_noTelSaksi2` varchar(12) NOT NULL,
  `SS_kategoriNikah` varchar(30) NOT NULL,
  `SS_tarikhNikahTerdahulu` date NOT NULL,
  `SS_bakiTalak` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `info_wali`
--

CREATE TABLE `info_wali` (
  `waliNoIC` int(12) NOT NULL,
  `appID` int(20) NOT NULL,
  `W_hubunganWali` varchar(50) NOT NULL,
  `W_namaWali` varchar(50) NOT NULL,
  `W_DOBWali` date NOT NULL,
  `W_umurWali` int(11) NOT NULL,
  `W_noTelWali` int(11) NOT NULL,
  `W_TarikhNikahPenjaga` date NOT NULL,
  `W_NoNikahPenjaga` varchar(10) NOT NULL,
  `W_namaPelulus` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `insentif_perkahwinan`
--

CREATE TABLE `insentif_perkahwinan` (
  `insentifID` int(11) NOT NULL,
  `noIC` varchar(20) NOT NULL,
  `praPerkahwinanID` int(50) NOT NULL,
  `staffID` int(10) NOT NULL,
  `I_tarikh` date NOT NULL,
  `I_slipPendapatan` blob NOT NULL,
  `I_penyataBank` blob NOT NULL,
  `I_namaBank` varchar(20) NOT NULL,
  `I_noAkaunBank` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `matlumat_kursus`
--

CREATE TABLE `matlumat_kursus` (
  `kursus_ID` int(11) NOT NULL,
  `tempat_ID` int(11) NOT NULL,
  `MK_PAID` varchar(50) NOT NULL,
  `MK_tarikhMula` date NOT NULL,
  `MK_tarikhTamat` date NOT NULL,
  `MK_masaMula` time NOT NULL,
  `MK_masaTamat` time NOT NULL,
  `MK_kapasiti` int(11) NOT NULL,
  `MK_catatan` longtext NOT NULL,
  `MK_terbitUmum` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pasangan`
--

CREATE TABLE `pasangan` (
  `pasanganID` int(50) NOT NULL,
  `noIC` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pekerja`
--

CREATE TABLE `pekerja` (
  `staffID` int(10) NOT NULL,
  `S_namaPekerja` varchar(20) NOT NULL,
  `S_noTelPekerja` varchar(20) NOT NULL,
  `S_emailPekerja` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `bayaranID` int(20) NOT NULL,
  `noIC` varchar(12) NOT NULL,
  `B_jumlahBayaran` varchar(10) NOT NULL,
  `B_tarikh` date NOT NULL,
  `B_masa` time NOT NULL,
  `B_buktiPembayaran` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran_perkahwinan`
--

CREATE TABLE `pendaftaran_perkahwinan` (
  `appID` int(20) NOT NULL,
  `noIC` varchar(12) NOT NULL,
  `pasanganID` int(50) NOT NULL,
  `PEN_tarikhPermohonan` date NOT NULL,
  `PEN_ negara` varchar(20) NOT NULL,
  `PEN_ negeri` varchar(20) NOT NULL,
  `PEN_ tarikhAkad` date NOT NULL,
  `PEN_ alamatKahwin` varchar(50) NOT NULL,
  `PEN_ jenisMasKahwin` varchar(20) NOT NULL,
  `PEN_ jumMasKahwin` double NOT NULL,
  `PEN_ hantaran` varchar(20) NOT NULL,
  `PEN_ pemberianLain` varchar(50) NOT NULL,
  `PEN_statusPendaftaran` varchar(10) NOT NULL,
  `PEN_ jenisKahwin` varchar(50) NOT NULL,
  `PEN_ sijilKahwin` varchar(50) NOT NULL,
  `PEN_ kadKahwin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `noIC` varchar(12) NOT NULL,
  `P_nama` varchar(50) NOT NULL,
  `P_ email` varchar(20) NOT NULL,
  `P_ jantina` varchar(10) NOT NULL,
  `P_ NRICpolis_lama` varchar(20) NOT NULL,
  `P_ tarikhLahir` date NOT NULL DEFAULT current_timestamp(),
  `P_ umur` int(11) NOT NULL,
  `P_ bangsa` varchar(20) NOT NULL,
  `P_ warganegara` varchar(20) NOT NULL,
  `P_ alamatIC` varchar(50) NOT NULL,
  `P_ alamatSemasa` varchar(50) NOT NULL,
  `P_ NoTelRumah` varchar(15) NOT NULL,
  `P_ statusPelajaran` varchar(20) NOT NULL,
  `P_ bahagianPekerjaan` varchar(20) NOT NULL,
  `P_ jawatanPekerjaan` varchar(20) NOT NULL,
  `P_ noTelPejabat` varchar(15) NOT NULL,
  `P_ statusPerkahwinan` varchar(10) NOT NULL,
  `P_ praPerkahwinanID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`noIC`, `P_nama`, `P_ email`, `P_ jantina`, `P_ NRICpolis_lama`, `P_ tarikhLahir`, `P_ umur`, `P_ bangsa`, `P_ warganegara`, `P_ alamatIC`, `P_ alamatSemasa`, `P_ NoTelRumah`, `P_ statusPelajaran`, `P_ bahagianPekerjaan`, `P_ jawatanPekerjaan`, `P_ noTelPejabat`, `P_ statusPerkahwinan`, `P_ praPerkahwinanID`) VALUES
('013293044942', 'AHMAD ABU BIN DAUD', '', '', '', '2023-06-12', 0, '', '', '', '', '', '', '', '', '', '', ''),
('013293044947', 'AHMAD AIMAN BIN ADAM', '', '', '', '2023-06-12', 0, '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `permohonan_konsultasi`
--

CREATE TABLE `permohonan_konsultasi` (
  `konsultasiID` int(20) NOT NULL,
  `noIC` varchar(12) NOT NULL,
  `staffID` int(10) NOT NULL,
  `K_tarikh` date NOT NULL,
  `K_masa` time NOT NULL,
  `K_ butiranKonsultasi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `praperkahwinan`
--

CREATE TABLE `praperkahwinan` (
  `praperkahwinanID` int(50) NOT NULL,
  `Kursus_ID` int(11) NOT NULL,
  `PP_noSijilPerkahwinan` varchar(20) NOT NULL,
  `PP_ siriTaklimat` varchar(20) NOT NULL,
  `PP_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tempat_kursus`
--

CREATE TABLE `tempat_kursus` (
  `tempat_ID` int(11) NOT NULL,
  `staffID` int(10) NOT NULL,
  `T_tempat` varchar(50) NOT NULL,
  `T_alamat` varchar(50) NOT NULL,
  `T_daerah` varchar(50) NOT NULL,
  `T_noTel` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info_saksi`
--
ALTER TABLE `info_saksi`
  ADD PRIMARY KEY (`SaksiNoIc1`),
  ADD KEY `appID` (`appID`);

--
-- Indexes for table `info_wali`
--
ALTER TABLE `info_wali`
  ADD PRIMARY KEY (`waliNoIC`),
  ADD KEY `appID` (`appID`);

--
-- Indexes for table `insentif_perkahwinan`
--
ALTER TABLE `insentif_perkahwinan`
  ADD PRIMARY KEY (`insentifID`),
  ADD KEY `noIC` (`noIC`),
  ADD KEY `praPerkahwinanID` (`praPerkahwinanID`),
  ADD KEY `staffID` (`staffID`);

--
-- Indexes for table `matlumat_kursus`
--
ALTER TABLE `matlumat_kursus`
  ADD PRIMARY KEY (`kursus_ID`),
  ADD KEY `tempat_ID` (`tempat_ID`);

--
-- Indexes for table `pasangan`
--
ALTER TABLE `pasangan`
  ADD PRIMARY KEY (`pasanganID`),
  ADD KEY `noIC` (`noIC`);

--
-- Indexes for table `pekerja`
--
ALTER TABLE `pekerja`
  ADD PRIMARY KEY (`staffID`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`bayaranID`),
  ADD KEY `noIC` (`noIC`);

--
-- Indexes for table `pendaftaran_perkahwinan`
--
ALTER TABLE `pendaftaran_perkahwinan`
  ADD PRIMARY KEY (`appID`),
  ADD KEY `noIC` (`noIC`),
  ADD KEY `pasanganID` (`pasanganID`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`noIC`);

--
-- Indexes for table `permohonan_konsultasi`
--
ALTER TABLE `permohonan_konsultasi`
  ADD PRIMARY KEY (`konsultasiID`),
  ADD KEY `noIC` (`noIC`),
  ADD KEY `staffID` (`staffID`);

--
-- Indexes for table `praperkahwinan`
--
ALTER TABLE `praperkahwinan`
  ADD PRIMARY KEY (`praperkahwinanID`),
  ADD KEY `Kursus_ID` (`Kursus_ID`);

--
-- Indexes for table `tempat_kursus`
--
ALTER TABLE `tempat_kursus`
  ADD PRIMARY KEY (`tempat_ID`),
  ADD KEY `staffID` (`staffID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info_wali`
--
ALTER TABLE `info_wali`
  MODIFY `waliNoIC` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `insentif_perkahwinan`
--
ALTER TABLE `insentif_perkahwinan`
  MODIFY `insentifID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `matlumat_kursus`
--
ALTER TABLE `matlumat_kursus`
  MODIFY `kursus_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pasangan`
--
ALTER TABLE `pasangan`
  MODIFY `pasanganID` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pekerja`
--
ALTER TABLE `pekerja`
  MODIFY `staffID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `bayaranID` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pendaftaran_perkahwinan`
--
ALTER TABLE `pendaftaran_perkahwinan`
  MODIFY `appID` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permohonan_konsultasi`
--
ALTER TABLE `permohonan_konsultasi`
  MODIFY `konsultasiID` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `praperkahwinan`
--
ALTER TABLE `praperkahwinan`
  MODIFY `praperkahwinanID` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tempat_kursus`
--
ALTER TABLE `tempat_kursus`
  MODIFY `tempat_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `info_saksi`
--
ALTER TABLE `info_saksi`
  ADD CONSTRAINT `info_saksi_ibfk_1` FOREIGN KEY (`appID`) REFERENCES `pendaftaran_perkahwinan` (`appID`);

--
-- Constraints for table `info_wali`
--
ALTER TABLE `info_wali`
  ADD CONSTRAINT `info_wali_ibfk_1` FOREIGN KEY (`appID`) REFERENCES `pendaftaran_perkahwinan` (`appID`);

--
-- Constraints for table `insentif_perkahwinan`
--
ALTER TABLE `insentif_perkahwinan`
  ADD CONSTRAINT `insentif_perkahwinan_ibfk_1` FOREIGN KEY (`noIC`) REFERENCES `pengguna` (`noIC`),
  ADD CONSTRAINT `insentif_perkahwinan_ibfk_2` FOREIGN KEY (`praPerkahwinanID`) REFERENCES `praperkahwinan` (`praperkahwinanID`),
  ADD CONSTRAINT `insentif_perkahwinan_ibfk_3` FOREIGN KEY (`staffID`) REFERENCES `pekerja` (`staffID`);

--
-- Constraints for table `matlumat_kursus`
--
ALTER TABLE `matlumat_kursus`
  ADD CONSTRAINT `matlumat_kursus_ibfk_1` FOREIGN KEY (`tempat_ID`) REFERENCES `tempat_kursus` (`tempat_ID`);

--
-- Constraints for table `pasangan`
--
ALTER TABLE `pasangan`
  ADD CONSTRAINT `pasangan_ibfk_1` FOREIGN KEY (`noIC`) REFERENCES `pengguna` (`noIC`);

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`noIC`) REFERENCES `pengguna` (`noIC`);

--
-- Constraints for table `pendaftaran_perkahwinan`
--
ALTER TABLE `pendaftaran_perkahwinan`
  ADD CONSTRAINT `pendaftaran_perkahwinan_ibfk_1` FOREIGN KEY (`noIC`) REFERENCES `pengguna` (`noIC`),
  ADD CONSTRAINT `pendaftaran_perkahwinan_ibfk_2` FOREIGN KEY (`pasanganID`) REFERENCES `pasangan` (`pasanganID`);

--
-- Constraints for table `permohonan_konsultasi`
--
ALTER TABLE `permohonan_konsultasi`
  ADD CONSTRAINT `permohonan_konsultasi_ibfk_1` FOREIGN KEY (`noIC`) REFERENCES `pengguna` (`noIC`),
  ADD CONSTRAINT `permohonan_konsultasi_ibfk_2` FOREIGN KEY (`staffID`) REFERENCES `pekerja` (`staffID`);

--
-- Constraints for table `praperkahwinan`
--
ALTER TABLE `praperkahwinan`
  ADD CONSTRAINT `praperkahwinan_ibfk_1` FOREIGN KEY (`Kursus_ID`) REFERENCES `matlumat_kursus` (`kursus_ID`);

--
-- Constraints for table `tempat_kursus`
--
ALTER TABLE `tempat_kursus`
  ADD CONSTRAINT `tempat_kursus_ibfk_1` FOREIGN KEY (`staffID`) REFERENCES `pekerja` (`staffID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
