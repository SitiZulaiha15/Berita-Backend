-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2019 at 05:44 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_berita`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_artikel`
--

CREATE TABLE `tb_artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `isi` text NOT NULL,
  `picture` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_galeri`
--

CREATE TABLE `tb_galeri` (
  `id_galeri` int(11) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_galeri`
--

INSERT INTO `tb_galeri` (`id_galeri`, `judul`, `deskripsi`, `gambar`) VALUES
(8, 'Belajar Web2', 'PHP merupakan bahasa wajib programmer web. Berdasarkan data w3techs.com pada Juli 2019, PHP dipakai oleh lebih dari 79% web server di seluruh dunia. Dalam Tutorial Belajar PHP Dasar Untuk Pemula ini saya akan mencoba memberikan tutorial lengkap tentang PHP.\r\n\r\nTutorial Belajar PHP cocok untuk pemula yang ingin menguasai PHP maupun yang sudah mahir sebagai penyegaran dan bahan referensi. Untuk belajar PHP, anda dianggap telah mengetahui sedikit tentang HTML. Karena pada dasarnya PHP digunakan untuk memanipulasi HTML agar bisa tampil dinamis.\r\n\r\nPengetahuan tentang MySQL, CSS dan Javascript juga akan membantu dalam memahami PHP, walaupun ini bukan hal yang mutlak. Jika belum menguasai HTML dan CSS, silahkan mempelajarinya pada Tutorial Belajar HTML, dan Tutorial Belajar CSS.\r\n\r\nPada halaman ini saya akan meng-index seluruh artikel Tutorial Belajar PHP di duniailkom.', 'pic-1567222951.jpg'),
(9, 'Belajar Web', 'Struktur Pemograman PHP:\r\nTutorial PHP Part 29: Pengertian dan Cara Penulisan Struktur Logika IF dalam PHP\r\nTutorial PHP Part 30: Pengertian dan Cara Penulisan Struktur Logika ELSE dalam PHP\r\nTutorial PHP Part 31: Pengertian dan Cara Penulisan Struktur Logika ELSE-IF PHP\r\nTutorial PHP Part 32: Pengertian dan Cara Penulisan Struktur Logika Switch dalam PHP\r\nTutorial PHP Part 33: Pengertian dan Cara Penulisan Perulangan For dalam PHP\r\nTutorial PHP Part 34: Pengertian dan Cara Penulisan Perulangan While dalam PHP\r\nTutorial PHP Part 35: Pengertian dan Cara Penulisan Perulangan Do-While dalam PHP\r\nTutorial PHP Part 36: Fungsi dan Cara Penulisan Perintah Break Dalam Perulangan PHP\r\nTutorial PHP Part 37: Fungsi dan Cara Penulisan Continue Dalam Perulangan PHP\r\nTutorial PHP Part 38: Pengertian dan Fungsi Perulangan Foreach dalam PHP\r\nCara Pembuatan Fungsi PHP:\r\nTutorial PHP Part 39: Pengertian Function PHP dan Cara Penggunaan Fungsi PHP\r\nTutorial PHP Part 40: Cara Penulisan dan Pembuatan Fungsi PHP\r\nTutorial PHP Part 41: Pengertian Variabel Scope, Global Variabel, & Static Variabel PHP\r\nTutorial PHP Part 42: Cara Pengecekan Tipe Data Argumen untuk Fungsi PHP\r\nTutorial PHP Part 43: Cara Pembuatan Default Parameter pada Fungsi PHP\r\nTutorial PHP Part 44: Pengertian Variable Parameter dalam Fungsi PHP\r\nSetelah menguasai dasar-dasar pemograman PHP, anda bisa melanjutkan mempelajari Tutorial PHP lanjutan, seperti cara menyimpan data dari PHP kedalam MySQL, cara pemrosesan form HTML dengan PHP, atau lanjut mempelajari Pemograman Objek/Object Oriented Programming (OOP) PHP.\r\n\r\n*** Artikel Terkait ***\r\nTags: Index Tutorial, tutorial belajar PHP dasar, tutorial dasar, tutorial php199 COMMENTS', 'pic-1567222961.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_artikel`
--
ALTER TABLE `tb_artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `tb_galeri`
--
ALTER TABLE `tb_galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_artikel`
--
ALTER TABLE `tb_artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_galeri`
--
ALTER TABLE `tb_galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
