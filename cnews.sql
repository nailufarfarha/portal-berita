-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2022 at 04:54 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cnews`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `kode_news` char(3) NOT NULL,
  `title` varchar(100) NOT NULL,
  `isi` varchar(500) NOT NULL,
  `kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`kode_news`, `title`, `isi`, `kategori`) VALUES
('ED1', 'Apa Itu PDSS di SNBP 2023? Ini Penjelasan hingga Jadwal Pengisian', 'PDSS adalah basis data yang berisi rekam jejak kinerja sekolah dan nilai rapor siswa yang eligible untuk mendaftar.\r\nPengisian PDSS ini dilakukan oleh sekolah, bukan siswa. Maka dari itu, kebenaran data yang diisikan menjadi tanggung jawab pihak sekolah.\r\nPDSS mengakomodasi kurikulum nasional 2006 KTSP dan kurikulum 2013 (Sistem Paket dan SKS). Sekolah yang tidak menggunakan kurikulum nasional tidak diperbolehkan mendaftar PDSS.\r\nUntuk tahun ajaran dan tingkat yang sama, PDSS mengakomodasi perbe', 'ed'),
('ED2', 'FIK UI Terus Perkuat Peningkatan Kesehatan Jiwa dan Mental Anak Sekolah di SDN Tegallega 1 Bogor', 'Fakultas Ilmu Keperawatan (FIK) Universitas Indonesia terus berupaya memperkuat peningkatan kesehatan jiwa anak sekolah sebagai generasi masa depan bangsa di SDN Tegallega 1 Kota Bogor, Jawa Barat pada 14 Desember 2022.\r\nAdapun tujuan kegiatan ini untuk memperkuat perkembangan psikososial anak sekolah dasar sebagai generasi penerus masa depan bangsa.\r\n“Kami terus melanjutkan kegiatan promosi kesehatan jiwa khususnya pada anak usia sekolah ini, sebagai upaya menurunkan prevalensi gangguan mental ', 'ed'),
('ED3', 'Kisah Solah, sang Harry Potter UMM Peraih Berbagai Beasiswa Mancanegara', 'Harry Potter merupakan film yang pernah booming pada masanya. Dengan sekian banyak rangkaian cerita, tak jarang para Potterhead, penggemar seri Harry Potter, terbuai dan terpikat dengan detail-detail di dalam filmnya. Salah satu yang terpikat dan termotivasi karena film ini adalah M. Solahudin Al Ayubi, wisudawan terbaik Periode IV Universitas Muhammadiyah Malang (UMM).\r\nSolah, sapaan akrabnya, senantiasa memupuk mimpi untuk terbang ke Inggris sejak kecil. Ia juga mulai tertarik dengan aksen dan', 'ed'),
('ED4', '5 PTN dengan Biaya Kuliah Termurah, Referensi SNPMB 2023', 'Calon mahasiswa, perlu tahu mana saja Perguruan Tinggi Negeri (PTN) yang memiliki biaya kuliah termurah dengan kualitas pendidikan yang sangat baik. Di PTN, biaya kuliah disebut dengan Uang Kuliah Tunggal (UKT) yang dibayarkan setiap semester. UKT terbagi atas beberapa golongan, dibedakan berdasarkan kemampuan keuangan orangtua mahasiswa dan pertimbangan lain yang ditentukan PTN. Biasanya, UKT akan berbeda bagi masing-masing mahasiswa tergantung jalur masuknya. Contoh, biaya kuliah berupa UKT ak', 'ed'),
('ED5', 'Beasiswa S2 ke Qatar, Kuliah Gratis dan Ada Uang Saku Bulanan  Artikel ini telah diterbitkan di hala', 'Perhatian dunia kini tertuju ke Qatar karena menjadi tuan rumah Piala Dunia 2022. Sebagai negara kaya di Timur Tengah, Qatar menawarkan kuliah S2 dengan beasiswa di Doha Institute for Graduate Studies. Tawaran kuliah S2 di salah satu negara produsen minyak dan gas terkemuka dunia ini ditujukan bagi mahasiswa internasional dan juga warga Qatar yang membutuhkan dukungan biaya untuk melanjutkan studi magisternya di sana. Salah satu skema beasiswa Doha Institute for Graduate Studies dibuka dengan na', 'ed'),
('IN1', 'Jong Dae Comeback, Intip Gambar Teaser Mini Album Terbarunya', 'Kim Jong Dae atau dikenal dengan Chen EXO akan kembali menyapa penggemarnya lewat mini album terbarunya bertajuk Last Scene yang akan rilis pada 31 Oktober 2022. Menjelang perilisan, SM Entertainment Group telah memposting cuplikan gambar konsep album terbaru personel EXO tersebut.', 'ent');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(1) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `pass`) VALUES
(1, 'nay', 'tes123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`kode_news`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
