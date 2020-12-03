-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2020 at 12:21 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_netlitbang`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(32) NOT NULL,
  `status` enum('active','nonactive') NOT NULL,
  `level` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `email`, `password`, `status`, `level`, `created_at`, `updated_at`) VALUES
(1, 'Admin Yayasan', 'yayasan@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'active', 1, '2020-08-04 09:30:42', NULL),
(2, 'Ragil Manggalaning Y', 'ragilmanggalaning42@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'active', 1, '2020-08-04 09:31:17', NULL),
(3, 'Admin MTs', 'mts@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'active', 3, '2020-11-22 06:59:20', NULL),
(4, 'Admin MI', 'mi@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'active', 2, '2020-11-22 06:59:45', NULL),
(5, 'Admin MA', 'ma@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'active', 4, '2020-11-22 07:00:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(250) DEFAULT NULL,
  `content` text NOT NULL,
  `file` varchar(55) DEFAULT NULL,
  `type` enum('profile','images','news') DEFAULT NULL,
  `slug` varchar(250) DEFAULT NULL,
  `views` int(11) NOT NULL DEFAULT '0',
  `level` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `file`, `type`, `slug`, `views`, `level`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'What is Lorem Ipsum b?', '<p style=\"margin-left: 0px; text-align: justify;\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p><p style=\"margin-left: 0px; text-align: justify;\">Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p><p style=\"margin-left: 0px; text-align: justify;\">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p><p style=\"margin-left: 0px; text-align: justify;\">Harus diedit. Y</p>', '1606776708.jpg', 'profile', 'what-is-lorem-ipsum-b-1606776711', 0, 'institution', '2020-07-26 02:58:34', 1, '2020-11-29 17:00:00', 1),
(2, 'Where can I get some?', '<p><span style=\"color: rgb(0, 0, 0);\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.</span></p><p><span style=\"color: rgb(0, 0, 0);\">If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</span></p><p><span style=\"color: rgb(0, 0, 0);\">It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</span><br></p>', '1606776722.jpg', 'profile', 'where-can-i-get-some-1606776725', 0, 'mi', '2020-07-26 02:58:34', 1, '2020-11-29 17:00:00', 1),
(10, 'ANALISIS STANDAR SATUAN BELANJA (ASSB) KABUPATEN BOMBANA', '<p><font color=\"#000000\">Analisis Standar Satuan Belanja (ASSB) sebagai dasar pengukuran kinerja keuangan dalam penyusunan APBD dengan pendekatan kinerja dan untuk menganalisis kewajaran beban kerja atau biaya setiap program atau kegiatan yang akan dilaksanakan oleh Organisasi Perangkat Daerah Kabupaten Bombana dalam penyusunan Rencana Kerja dan Anggaran Organisasi Perangkat Daerah&nbsp; di Kabupaten Bombana.</font></p><p><font color=\"#000000\">Manfaat kegiatan Analisis Standar Satuan Belanja (ASSB)&nbsp; untuk memudahkan bagi Organisasi Perangkat Daerah dalam Penyusunan Anggaran Program/Kegiatan dan meningkatnya kinerja dan pelayanan Organisasi Perangkat Daerah dalam hal pengelolaan anggaran program/kegiatan.</font></p><p><font color=\"#000000\">Output :</font></p><p><font color=\"#000000\">1. Tersusunnya Dokumen Analisis Standar Satuan Belanja Kabupaten Bombana.</font></p><p><font color=\"#000000\">2. Terbitnya Peraturan Bupati Bombana tentang Analisis Standar Satuan Belanja di Lingkungan Pemerintah Kabupaten Bombana</font></p>', '1601467802.jpg', 'profile', 'analisis-standar-satuan-belanja-assb-kabupaten-bombana-1601467802', 0, 'ma', '2020-08-04 03:45:03', 1, '2020-09-29 17:00:00', 1),
(76, 'EMPAT GURU TAMU DARI AMERIKA MENGAJAR DI UMMUSSHABRI', '<p>Sekretaris Mabigus, Mohamad Anwar, saat menyematkan tanda kepesertaan PTA</p><p>&nbsp;</p><p>Sebagai lembaga pendidikan, Madrasah Aliyah Pesri Kendari tidak hanya disibukkan dengan aktifitas pembelajaran dalam kelas, akan tetapi juga aktif mendorong berbagai kegiatan dalam bidang organisasi kesiswaan.<br>Salah satu kegiatan yang dilaksanakan adalah Penerimaan Tamu Ambalan (PTA) Gerakan Pramuka Gugus Depan Ummusshabri Kendari yang berlangsung dari tanggal 30 Agustus - 1 September 2019 bertempat di Bumi Perkemahan Pesantren Ummusshabri Kendari.<br>Sekretaris Mabigus Mohamad Anwar, S.Ag., M.Si dalam amanahnya ketika membuka kegitan mengatakan : Gerakan Pramuka yang berpangkalan di satuan pendidikan seperti di MA Pesri Kendari menjadi wadah yang penting bagi peserta didik, untuk<br>menambah pengetahuan dan wawasan, melaui berbagai kegiatan yang didesain sesuai dengan karakter dan tujuan pendidikan kepramukaan, yang diarahkan pada fungsi pengembangan, sosial, rekreatif dan persiapan karir bagi peserta didik. Terlebih dalam kurikulum Pendidikan Nasional menempatkan kegiatan pramuka sebagai kegiatan ekstrakurikuler wajib, ini artinya kegiatan kepramukaan tidak ditempatkan sebagai pengisi waktu luang akan tetapi sebagai sarana peningkatan mutu pendidikan Madrasah.<br>Anwar juga mengingatkan \"sesuai dengan Undang-undang RI No. 12 tahun 2010 bahwa tujuan pramuka adalah untuk membentuk setiap pramuka agar memiliki kepribadian yang beriman, bertakwa, berakhlak mulia, berjiwa patriotik, taat hukum, disiplin, menjunjung tinggi nilai-nilai luhur bangsa, dan memiliki kecakapan hidup sebagai kader bangsa dalam menjaga dan membangun Negara Kesatuan Republik Indonesia, mengamalkan Pancasila, serta melestarikan lingkungan hidup\".</p>', '1606000633.jpg', 'profile', 'empat-guru-tamu-dari-amerika-mengajar-di-ummusshabri-1606000633', 9, 'mts', '2020-11-21 23:17:13', 1, NULL, NULL),
(80, 'ccc', '', '1606777871.jpg', 'images', 'ccc-1606778052', 0, 'institution', '2020-11-30 23:11:14', 1, '2020-11-30 17:00:00', 1),
(81, 'sads', '', '1606778468.jpg', 'images', 'sads-1606778471', 0, 'mi', '2020-11-30 23:21:11', 4, NULL, NULL),
(82, 'dsa a sdsa e wewqewqe', '<p>d ddwdsadsad</p>', '1606778489.jpg', 'news', 'dsa-a-sdsa-e-wewqewqe-1606778492', 0, 'mi', '2020-11-30 23:21:32', 4, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
