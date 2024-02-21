-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2024 at 04:54 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `galeri`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `AlbumID` int(11) NOT NULL,
  `NamaAlbum` varchar(225) NOT NULL,
  `Deskripsi` text NOT NULL,
  `TanggalDibuat` date NOT NULL,
  `UserID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`AlbumID`, `NamaAlbum`, `Deskripsi`, `TanggalDibuat`, `UserID`) VALUES
(2, 'CCC', 'ggg', '2024-01-24', 3),
(3, 'trht', 'gfgr', '0000-00-00', 3);

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE `foto` (
  `FotoID` int(11) NOT NULL,
  `JudulFoto` varchar(225) NOT NULL,
  `DeskripsiFoto` text NOT NULL,
  `TanggalUnggah` date NOT NULL,
  `LokasiFile` varchar(225) NOT NULL,
  `AlbumID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foto`
--

INSERT INTO `foto` (`FotoID`, `JudulFoto`, `DeskripsiFoto`, `TanggalUnggah`, `LokasiFile`, `AlbumID`, `UserID`) VALUES
(2, 'bersama', 'bersama ayang', '2024-02-09', 'foto rida.jpeg', 2, 2),
(7, 'foto bunga', 'bunga kamboja', '2024-01-30', 'gambar bunga.jpg', 1, 3),
(12, 'presiden', ' presiden suharto', '2024-02-20', 'suharto.jpg', 0, 0),
(13, 'yju7u', 'u6u56', '2024-02-19', 'pay bali.jpg', 0, 0),
(14, 'aaa', 'sss', '2024-02-21', 'pathways-background.jpg', 0, 0),
(15, 'AAA', 'SSS', '2024-02-21', 'foto rida.jpeg', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `komentarfoto`
--

CREATE TABLE `komentarfoto` (
  `KomentarID` int(11) NOT NULL,
  `FotoID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `IsiKomentar` text NOT NULL,
  `TanggalKomentar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentarfoto`
--

INSERT INTO `komentarfoto` (`KomentarID`, `FotoID`, `UserID`, `IsiKomentar`, `TanggalKomentar`) VALUES
(22, 1, 1, 'wahhh', '2024-02-07'),
(23, 1, 1, 'wihh', '2024-02-07'),
(25, 7, 2, 'wkwk', '2024-02-13'),
(26, 2, 1, 'wkwk', '2024-02-20'),
(27, 2, 1, 'wihh', '2024-02-20'),
(28, 13, 4, 'enak', '2024-02-21'),
(29, 2, 4, 'hitamm', '2024-02-21'),
(30, 2, 4, 'jelek', '2024-02-21'),
(31, 12, 1, 'kiw', '2024-02-21');

-- --------------------------------------------------------

--
-- Table structure for table `likefoto`
--

CREATE TABLE `likefoto` (
  `LikeID` int(11) NOT NULL,
  `FotoID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `TanggalLike` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `likefoto`
--

INSERT INTO `likefoto` (`LikeID`, `FotoID`, `UserID`, `TanggalLike`) VALUES
(68, 1, 2, '2024-02-07'),
(69, 7, 2, '2024-02-07'),
(70, 2, 2, '2024-02-07'),
(71, 10, 1, '2024-02-20'),
(72, 12, 1, '2024-02-20'),
(73, 13, 1, '2024-02-20'),
(74, 12, 2, '2024-02-20'),
(75, 13, 2, '2024-02-20'),
(76, 12, 3, '2024-02-20'),
(77, 13, 3, '2024-02-20'),
(78, 7, 3, '2024-02-20'),
(79, 2, 3, '2024-02-20'),
(80, 1, 3, '2024-02-20'),
(81, 1, 4, '2024-02-21'),
(82, 2, 4, '2024-02-21'),
(83, 7, 4, '2024-02-21'),
(84, 12, 4, '2024-02-21'),
(85, 13, 4, '2024-02-21'),
(86, 1, 5, '2024-02-21'),
(87, 2, 5, '2024-02-21'),
(88, 7, 5, '2024-02-21'),
(89, 12, 5, '2024-02-21'),
(90, 13, 5, '2024-02-21');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserID` int(11) NOT NULL,
  `Username` varchar(225) NOT NULL,
  `Password` varchar(225) NOT NULL,
  `Email` varchar(225) NOT NULL,
  `NamaLengkap` varchar(225) NOT NULL,
  `Alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `Username`, `Password`, `Email`, `NamaLengkap`, `Alamat`) VALUES
(1, 'ridaa', '11111', 'ridariski@gmail.com', 'rida riski', 'sapuran'),
(2, 'riski', '22222', 'riski61@gmail.com', 'riskianto', 'Sapuran'),
(3, 'fifi', '3333', 'fifi@gmail.com', 'fifiiiiii', 'kepil'),
(4, 'ida', '44444', 'ida@gmail.com', 'ida aja', 'kepil'),
(5, 'adi', '55555', 'adi@gmail.com', 'adii', 'Sapuran');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`AlbumID`);

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`FotoID`);

--
-- Indexes for table `komentarfoto`
--
ALTER TABLE `komentarfoto`
  ADD PRIMARY KEY (`KomentarID`);

--
-- Indexes for table `likefoto`
--
ALTER TABLE `likefoto`
  ADD PRIMARY KEY (`LikeID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `AlbumID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
  MODIFY `FotoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `komentarfoto`
--
ALTER TABLE `komentarfoto`
  MODIFY `KomentarID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `likefoto`
--
ALTER TABLE `likefoto`
  MODIFY `LikeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
