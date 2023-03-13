-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2020 at 10:55 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `disbudpar`
--

-- --------------------------------------------------------

--
-- Table structure for table `destinasiwisata`
--

CREATE TABLE `destinasiwisata` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_kabupaten` int(11) NOT NULL,
  `namaobjek` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `destinasiwisata`
--

INSERT INTO `destinasiwisata` (`id`, `id_kabupaten`, `namaobjek`, `jenis`, `lokasi`, `foto`, `created_at`, `updated_at`) VALUES
(1, 10, 'Pantai Kuala Leguee', 'Alam', 'Kec Peurelak', 'image004.png', '2020-04-06 12:27:45', '2020-04-06 12:27:45'),
(2, 10, 'Pantai Kuala beukah', 'Alam', 'Kec Peurelak', 'image064.png', '2020-04-06 12:31:08', '2020-04-06 12:31:08'),
(3, 8, 'Agro Wisata dan Wisata Kuliner Kebun Nenas pegasing', 'Buatan', 'Pegasing Kec. Pegasing', 'image013.png', '2020-04-06 12:36:14', '2020-04-06 12:36:14'),
(4, 8, 'Air Terjun Mengaya', 'Alam', 'Kp. Mengaya Kec. Bintang', 'image016.png', '2020-04-06 12:37:59', '2020-04-06 12:37:59'),
(5, 8, 'Atu Belah', 'Alam', 'Kp. Penarun Kec. Linge', 'image021.png', '2020-04-06 12:39:30', '2020-04-06 12:39:30'),
(6, 8, 'Dermaga Lukup Penalam', 'Buatan', 'Kp. Dedalu Kec. Lut Tawar', 'image023.png', '2020-04-06 12:42:26', '2020-04-06 12:42:26'),
(7, 8, 'Desa Wisata Kelitu', 'Buatan', 'Kp. Kelitu Kec. Bintang', 'image025.png', '2020-04-06 12:43:21', '2020-04-06 12:43:21'),
(8, 8, 'Grafiti Tanoh Gayo', 'Alam', 'Bur Gayo Kec. Lut Tawar', 'image027.png', '2020-04-06 12:45:09', '2020-04-06 12:45:09'),
(9, 8, 'Pantan Terong', 'Alam', 'Kp. Bahgie Kec. Bebesen', 'image035.png', '2020-04-06 12:46:00', '2020-04-06 12:46:00'),
(10, 8, 'Pante Gemasih', 'Alam', 'Kec. Kebayakan', 'image038.png', '2020-04-06 12:46:44', '2020-04-06 12:46:44'),
(38, 3, 'Air Terjun Kuta Malaka', 'Alam', 'Desa Lam Ara Kec. Kutamalaka', 'image062.png', '2020-04-06 12:47:57', '2020-04-06 12:47:57'),
(39, 3, 'Kolam Pemandian Air Panas (Ie Seuum)', 'Alam', 'Desa Ie Seum', 'image081.png', '2020-04-06 12:49:18', '2020-04-06 12:49:18'),
(40, 3, 'Pantai Babah Kuala Lhoknga', 'Alam', 'Kec. Lhoknga', 'image125.png', '2020-04-06 12:50:17', '2020-04-06 12:50:17'),
(41, 3, 'Pantai Cemara (Pulo Kapok)', 'Alam', 'Desa Mon Ikeun Kec. Lhok Nga', 'image097.png', '2020-04-06 12:51:24', '2020-04-06 12:51:24'),
(42, 3, 'Pantai Lampuuk', 'Alam', 'Kec. Lhok Nga', 'image103.png', '2020-04-06 12:52:20', '2020-04-06 12:52:20'),
(43, 3, 'Pantai Pasir Putih Lhok Mee (Lamreeh)', 'Alam', 'Desa Lamreh Kec. Mesjid Raya', 'image531.png', '2020-04-06 12:53:25', '2020-04-06 12:53:25'),
(44, 3, 'Pantai Ujong Batee', 'Alam', 'Desa Durung Kec. Mesjid Raya', 'image533.png', '2020-04-06 12:55:44', '2020-04-06 12:55:44'),
(45, 3, 'Taman Rusa Sibreh', 'Buatan', 'Desa Lamtanjong Kec. Sukamakmur', 'image535.png', '2020-04-06 12:57:02', '2020-04-06 12:57:02'),
(46, 3, 'Waduk  Brayeung Leupung', 'Alam', 'Desa Mns Mesjid Kec. Leupung', 'image141.png', '2020-04-06 12:58:09', '2020-04-06 12:58:09'),
(47, 3, 'Waduk Keliling Kuta Cot Glie', 'Buatan', 'Desa Bak Sukon Kec. Kuta Cotglie', 'image143.png', '2020-04-06 12:59:42', '2020-04-06 12:59:42'),
(48, 3, 'Wahana Impian Malaka 69', 'Buatan', 'Desa Lam Ara Kec. Kutamalaka', 'image145.png', '2020-04-06 13:00:59', '2020-04-06 13:00:59');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_kabupaten` int(10) UNSIGNED NOT NULL,
  `nama_hotel` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pimpinan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_kamar` int(10) UNSIGNED NOT NULL,
  `detail_kamar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`id`, `id_kabupaten`, `nama_hotel`, `kategori`, `pimpinan`, `alamat`, `no_telp`, `jumlah_kamar`, `detail_kamar`, `foto`, `created_at`, `updated_at`) VALUES
(1, 8, 'Renggali Hotel', '2', 'Alamsyah', 'Jl. Takengon-Bintang, Ujung Baro', '064321144', 30, 'Suite Rp. 400.000\r\nDeluxe Rp. 350.000\r\nStandar Rp. 300.000', 'image004.png', '2020-04-08 00:29:07', '2020-04-08 01:45:10'),
(2, 8, 'Mahara Hotel', '1', 'M.Yusuf.Isa', 'Jl. Sengeda', '0643-21728/2429', 28, 'Deluxe Rp. 350.000\r\nSuperior Rp. 275.000\r\nStandar Rp. 225.000', 'image007.png', '2020-04-08 00:33:13', '2020-04-08 01:45:31'),
(3, 1, 'Hotel Meuligo', '3', 'H.T. Kausar Nash', 'Jl. Iskandar Muda no. 36 Meulaboh', '-', 60, 'Deluxe Rp. 550.000\r\nSuperior Rp. 350.000\r\nStandar Rp. 250.000', 'image010.png', '2020-04-08 00:35:47', '2020-04-08 00:35:47'),
(4, 3, 'Hotel The Pade', '3', 'Reckyanto Mella', 'Jln. Sukarno Hatta Kec. Darul Imarah', '-', 65, 'VIP Rp. 1.810.000\r\nGrand Deluxe Rp. 988.000\r\nDeluxe Rp. 818.000', 'image010.png', '2020-04-08 00:38:43', '2020-04-08 00:38:43'),
(5, 21, 'Grand Blang Asan', '1', 'Rahmadi', 'Jl. Tenang No. 2 Sigli', '-', 30, 'Deluxe Rp. 400.000\r\nExecutive Rp. 525.000\r\nVIP Rp. 625.000', 'image013.png', '2020-04-08 00:41:18', '2020-04-08 00:41:18'),
(6, 21, 'Lestari Hotel', '1', 'Adi Mulyono', 'Jl. Prof. A. Majid Ibrahim Sigli', '-', 27, 'Standar Rp. 200.000\r\nDeluxe Rp. 300.000', 'image015.png', '2020-04-08 00:44:44', '2020-04-08 00:44:44'),
(7, 21, 'Hotel Cempaka', '1', 'Iskandar', 'Jl. Tgk. Chik Di Tiro No. 27 Sigli', '-', 20, 'Standar Rp. 250.000\r\nDeluxe Rp. 350.000\r\nExecutive Rp. 450.000\r\nVIP Rp. 550.000', 'Hotel Cempaka Pidie.jpg', '2020-04-08 01:05:55', '2020-04-08 01:05:55'),
(8, 15, 'PT. Berlian Global Perkasa (Hermes Palace Hotel)', '5', 'Andreas Thamrin', 'Jl. T. P.Nyak Makam Lambhuk Ulee Kareng', '(0651) 7417722', 163, 'Deluxe Rp. 950.000\r\nGrand Deluxe Rp. 1.150.000\r\nJunior Suite Rp. 1.450.000\r\nExecutive Suite Rp. 1.950.000\r\nPresident Suite Rp. 3.650.000', 'image020.png', '2020-04-08 01:27:23', '2020-04-08 01:45:54'),
(9, 15, 'PT.Dipo Raya Aceh (Sultan Hotel)', '3', 'H. Firmandez. SE', 'Jl. Sultan Hotel No. 1 Peunayong', '(0651) 22469', 160, 'Suite Room Rp.700.000\r\nExecutive Rp. 430.000\r\nDeluxe Rp. 390.000\r\nSuperior Rp. 350.000\r\nStandar Rp. 299.000', 'image023.png', '2020-04-08 01:30:34', '2020-04-08 01:46:29'),
(10, 15, 'Kyriad Muraya Hotel Aceh', '3', 'Pahrizal', 'Tengku H. Mohd. Daud Beureueh No. 5 Simpang Lima – Kuta Alam', '(0651) 630012', 126, 'Superior Rp. 1.100.000\r\nDeluxe Rp. 1.200.000\r\nFamily Rp. 1.400.000\r\nBusiness Rp. 1.500.000 \r\nHoneymoon Rp. 1.700.000\r\nPresident Suite Rp. 5.100.000', 'image029.png', '2020-04-08 01:35:09', '2020-04-08 01:46:46'),
(11, 15, 'PT. Tri Bangun Perkasa (Hotel Grand Nanggoe)', '3', 'Mirwan Amir', 'Jl. Tgk. Imum Lueng Bata Kec. Lueng Bata', '(0651) 22469', 82, 'Deluxe Rp. 637.428\r\nGrand Deluxe Rp. 892.980 \r\nSuite Rp. 1.785.960', 'image025.png', '2020-04-08 01:41:29', '2020-04-08 01:47:13');

-- --------------------------------------------------------

--
-- Table structure for table `kabupaten`
--

CREATE TABLE `kabupaten` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kabupaten` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kabupaten`
--

INSERT INTO `kabupaten` (`id`, `nama_kabupaten`, `created_at`, `updated_at`) VALUES
(1, 'Aceh Barat', NULL, NULL),
(2, 'Aceh Barat Daya', NULL, NULL),
(3, 'Aceh Besar', NULL, NULL),
(4, 'Aceh Jaya', NULL, NULL),
(5, 'Aceh Selatan', NULL, NULL),
(6, 'Aceh Singkil', NULL, NULL),
(7, 'Aceh Tamiang', NULL, NULL),
(8, 'Aceh Tengah', NULL, NULL),
(9, 'Aceh Tenggara', NULL, NULL),
(10, 'Aceh Timur', NULL, NULL),
(11, 'Aceh Utara', NULL, NULL),
(12, 'Bener Meriah', NULL, NULL),
(13, 'Bireuen', NULL, NULL),
(14, 'Gayo Lues', NULL, NULL),
(15, 'Kota Banda Aceh', NULL, NULL),
(16, 'Kota Langsa', NULL, NULL),
(17, 'Kota Lhokseumawe', NULL, NULL),
(18, 'Kota Sabang', NULL, NULL),
(19, 'Kota Subulussalam', NULL, NULL),
(20, 'Nagan Raya', NULL, NULL),
(21, 'Pidie', NULL, NULL),
(22, 'Pidie Jaya', NULL, NULL),
(23, 'Simeulue', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kuliner`
--

CREATE TABLE `kuliner` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_kabupaten` int(10) UNSIGNED NOT NULL,
  `nama_kuliner` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pemilik` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail_kuliner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kontak` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kuliner`
--

INSERT INTO `kuliner` (`id`, `id_kabupaten`, `nama_kuliner`, `pemilik`, `detail_kuliner`, `kontak`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 15, 'Banda Seafood', 'Abubakar Usman', 'Seafood', '081234567890', 'Jl. Prof. Dr. Ibrahim Hasan, Mba Gp.  Blang Kec. Meuraxa', '2020-04-07 11:40:48', '2020-04-07 11:40:48'),
(2, 15, 'BBC Coffee & Tomyam', 'Darmuda, S.Sos', 'Coffee dan Tomyam', '081234567890', 'Jl. T. Nyak Arief No. 3 Gp. Lamgugop Kec. Syiah Kuala', '2020-04-07 11:42:09', '2020-04-07 11:42:09'),
(3, 15, 'Country Steak House', 'Andriani', 'Steak', '081234567890', 'Jl. Sri Ratu Safiatuddin No. 46  Gp.Peunayong Kec. Kuta Alam', '2020-04-07 11:43:45', '2020-04-07 11:43:45'),
(4, 15, 'Grand Seafood', 'Amir Ridha', 'Seafood', '0813601663536', 'Jl. St.Iskandar Muda Kec. Meuraxa', '2020-04-07 11:45:14', '2020-04-07 11:45:14'),
(5, 15, 'Imperial Kitchen Restaurant', 'Rusli Irwan', 'Restoran', '081234567890', 'Jl. T. Umar Gp. Seutui Kec. Baiturrahman', '2020-04-07 11:47:29', '2020-04-07 11:47:29'),
(6, 15, 'Restaurant Bunda', 'Sutardjo Jono', 'Restoran Padang', '081234567890', 'Jl. Pante Pirak No. 8 Gp. Kuta Alam Kec. Kuta Alam', '2020-04-07 11:50:47', '2020-04-07 11:50:47'),
(7, 15, 'Restoran Istana', 'Hasbidin Putra,S', 'Restoran', '081360677077', 'Jl. T. Iskandar No. 64 Gp. Lambhuk Kec. Ulee Kareng', '2020-04-07 11:51:58', '2020-04-07 11:51:58'),
(8, 15, 'Ayam Sambal Spesial', 'Reza Fahlefy', 'Ayam Sambal', '085260006301', 'Jl. T. Hasan Dek Kec. Kuta Alam', '2020-04-07 11:54:17', '2020-04-07 11:54:17'),
(9, 15, 'Bakso Ampera', 'Muhctar', 'Bakso', '081317433446', 'Jl ST. Iskandar Muda  Gp. Punge Ujong Kec. Meuraxa', '2020-04-07 11:55:27', '2020-04-07 11:55:27'),
(10, 15, 'Burger Blasteran', 'Munarsyah', 'Burger', '082310050285', 'Jl. ST.Iskandar Muda Gp. Blang Oi Kec. Meuraxa', '2020-04-07 11:56:55', '2020-04-07 11:56:55'),
(11, 15, 'Canai Mamak', 'Tomy', 'Makanan dan Minuman', '081360256220', 'Jl. Ali Hasyimi Gp. Lamteh Kec. Ulee Kareng', '2020-04-07 11:58:05', '2020-04-07 11:58:05'),
(12, 15, 'Coffee Shop Ice Cream & Gunung Salju', 'Indra Putra', 'Minuman dan Ice Cream', '081234567890', 'Jl. T. P. Polem No. 45 Gp. Peunayong Kec. Kuta Alam', '2020-04-07 11:59:54', '2020-04-07 11:59:54'),
(13, 5, 'Resto Rangkang Nana', 'Nirwanda', 'Makanan dan Minuman', '082366272797', 'Jl. Tapaktuan-Meulaboh Gp. Batee Tunggai. Air Dingin Kec. Samadua', '2020-04-07 12:00:59', '2020-04-07 12:00:59'),
(14, 5, 'Cafe Khayangan', 'Lukman', 'Mie dan Minuman', '081362873230', 'Jl. Tapaktuan-Meulaboh Gp. Sawang Bunga. Samadua', '2020-04-07 12:02:47', '2020-04-07 12:02:47'),
(15, 5, 'Cafe Terasse Cafe', 'Efrizaldi', 'Makanan dan Minuman', '085277671358', 'Jl. Nyak Adam Kamil No. 49 A Kec. Tapaktuan', '2020-04-07 12:03:48', '2020-04-07 12:03:48'),
(16, 9, 'Family', 'Elvia Ridwan, SP', 'Makanan Khas Padang', '085297621636', 'Jln. A. Yani No. 21 Kutacane', '2020-04-07 12:05:27', '2020-04-07 12:05:27'),
(17, 9, 'Dame', 'Abdul Rahman', 'Makanan', '062921243', 'Jln. A. Yani Kutacane', '2020-04-07 12:06:57', '2020-04-07 12:06:57'),
(18, 3, 'Jantho Green Land Resto', 'HJ. Maslaila', 'Nasi Putih, Ikan Bakar, Nasi Goreng Seafood, Mie Goreng Aceh, Aneka Minuman Kaleng & Jus dlll.', '081234567890', 'Jantho', '2020-04-07 12:08:28', '2020-04-07 12:08:28'),
(19, 3, 'Mie Aceh Abu Bakar Leupung', 'Abu Bakar', 'Mie Goreng/Rebus Udang, Kepiting, Jamur, Cumi cumi, Aneka Jus, Teh, Kelapa Muda dll.', '081234567890', 'Leupung', '2020-04-07 12:09:47', '2020-04-07 12:09:47'),
(20, 3, 'Lhoknga Cemara Beach Inn & Resto', 'T Samsul Bahri', 'Nasi Putih, Ikan Bakar, Nasi Goreng Seafood, Mie Goreng Aceh, Aneka Minuman Kaleng & Jus dlll.', '081234567890', 'Pantai Cemara Gampong Mon Ikeun Kec. Lhoknga Kab. Aceh Besar', '2020-04-07 12:10:40', '2020-04-07 12:10:40'),
(21, 3, 'The Atjeh Resto & Kafee', 'Rita Satria Syarboini', 'Nasi Putih, Ayam Tangkap,Kuah Kari, Sop Daging, Sie Reuboh, Kuah Beulangong,Ikan Panggang, Air Timun, Air Pepaya dll', '-', 'Jl. Dr. Mr. Muhammad Hasan Gp. Lampeuneurut Gampong Kec. Darul Imarah Kab. Aceh Besar', '2020-04-07 12:12:21', '2020-04-07 12:12:21'),
(22, 3, 'Camp Mou Kupi', 'Mussanif', 'Kopi Robusta, Teh, Sanger, Telur Setengah Matang, Srikaya, Kue - Kue Basah dll.', '-', 'Gp. Lam Senong Kec. Kuta Baro Kab. Aceh Besar', '2020-04-07 12:15:32', '2020-04-07 12:15:32'),
(23, 3, 'Rumah Makan Eungkot Paya', 'Khalidan', 'Nasi Putih, Eungkot Paya,  Ikan Paya Goreng, Air Timun, Air Pepaya dll.', '-', 'Simpang Rima', '2020-04-07 12:17:00', '2020-04-07 12:17:00'),
(24, 3, 'RM. Selera Ujoeng Batee', 'Hanisullah', 'Nasi Putih, Ayam Tangkap, Sop Daging, Sie Reuboh, Kuah Beulangong, Ikan Panggang, Aneka Seafood Masak Aceh lainnya, Air Timun, Air Pepaya dll', '-', 'Jl. Laksamana Malahayati Gp. Kajhu Kec. Baitussalam Kabupaten Aceh Besar', '2020-04-07 12:17:53', '2020-04-07 12:17:53'),
(25, 3, 'RM. Krueng Woyla', 'Junaidi', 'Nasi Putih, Ayam Tangkap, Sop Daging, Sie Reuboh, Kuah Beulangong,Ikan Panggang, Air Timun, Air Pepaya dll', '-', 'Jl. Mesjid Pasar Lambaro Gp. Lambaro Kec. Ingin Jaya Kabupaten Aceh Besar', '2020-04-07 12:18:57', '2020-04-07 12:18:57');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_08_19_000000_create_failed_jobs_table', 1),
(2, '2020_01_25_053609_create_destinasiwisata_table', 1),
(3, '2020_01_25_055543_create_pemanduwisata_table', 2),
(4, '2020_01_25_060025_create_souvenir_table', 2),
(5, '2020_01_25_061241_create_hotel_table', 3),
(6, '2020_01_25_062350_create_kabupaten_table', 3),
(7, '2020_01_25_063407_create_hargatransportasi_table', 3),
(8, '2020_01_25_063633_create_hargatiket_table', 4),
(9, '2020_02_27_085305_create_travel_table', 5),
(10, '2020_02_27_090311_create_hotel_table', 6),
(11, '2020_02_27_091221_create_hotel_table', 7),
(12, '2020_02_27_194349_create_travel_table', 8),
(13, '2020_03_11_172235_create_kuliner_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pemanduwisata`
--

CREATE TABLE `pemanduwisata` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_kabupaten` int(11) NOT NULL,
  `nama_pemandu` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spesifikasi_bahasa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pemanduwisata`
--

INSERT INTO `pemanduwisata` (`id`, `id_kabupaten`, `nama_pemandu`, `spesifikasi_bahasa`, `alamat`, `no_hp`, `created_at`, `updated_at`) VALUES
(1, 15, 'Afrizal', 'Inggris', 'Desa Punge Blang Cut Kec. Jaya Baru', '08126935044', '2020-04-08 12:52:51', '2020-04-08 13:03:34'),
(2, 18, 'Fatwa Amri', 'Inggris', 'Gp. Aneuk Laot Dalam', '085359931668', '2020-04-08 12:53:35', '2020-04-08 13:03:44'),
(3, 18, 'Dofa Rahmana', 'Inggris', 'Gp. Ie Meulee', '085362745435', '2020-04-08 12:54:10', '2020-04-08 13:03:54'),
(4, 5, 'Hendri Firnandi', 'Inggris/Indonesia', 'Desa Ujung Karang Kecamatan Sawang', '081360130641', '2020-04-08 12:56:45', '2020-04-08 13:04:21'),
(5, 5, 'Kafrawi', 'Inggris/Indonesia', 'Jl. T. Raja Angkasah Desa Lhok Bengkuang Kec. Tapaktuan', '085362745435', '2020-04-08 12:57:36', '2020-04-08 13:04:06'),
(6, 5, 'Ridho Vahlevi', 'Inggris/Indonesia', 'Gampong Lhok Rukam  Kecamatan Tapaktuan', '085264462662', '2020-04-08 12:58:20', '2020-04-08 13:04:30'),
(7, 5, 'Muhajir Umra', 'Inggris/Indonesia', 'Desa Gadang Kasik Putih Kecamatan Samadua', '085359931668', '2020-04-08 13:00:00', '2020-04-08 13:04:44'),
(8, 5, 'Nasrul Fakhri', 'Inggris/Indonesia', 'Jl. Tribrata Desa Ujung Tanah Kec. Samadua', '085264462662', '2020-04-08 13:00:56', '2020-04-08 13:00:56'),
(9, 5, 'Henni Damawijaya', 'Inggris/Indonesia', 'Desa Ujung Karang Kec. Sawang', '085359931668', '2020-04-08 13:01:37', '2020-04-08 13:01:37'),
(10, 5, 'Ilmanis', 'Inggris/Indonesia', 'Jl. Bunga Desa Desa Lhok Rukam Kecamatan Tapaktuan', '085362745435', '2020-04-08 13:02:27', '2020-04-08 13:02:27'),
(11, 5, 'Tasdi Kamsal, SE', 'Inggris/Indonesia', 'Desa Ujung Karang Kecamatan Sawang', '085362745435', '2020-04-08 13:03:13', '2020-04-08 13:03:13');

-- --------------------------------------------------------

--
-- Table structure for table `souvenir`
--

CREATE TABLE `souvenir` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_kabupaten` int(11) NOT NULL,
  `nama_usaha` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pemilik` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_produk` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `souvenir`
--

INSERT INTO `souvenir` (`id`, `id_kabupaten`, `nama_usaha`, `nama_pemilik`, `jenis_produk`, `alamat`, `no_hp`, `foto`, `created_at`, `updated_at`) VALUES
(1, 15, 'Anita Souvenir', 'Azimah', 'Souvenir', 'Lr. Kechik Abbas Gp. Surien', '085359931668', 'souveniraceh.jpg', '2020-04-08 02:34:49', '2020-04-08 02:34:49'),
(2, 15, 'Bolu Aceh Bhoi', 'Salmaita', 'Kue Khas Aceh', 'Dsn. Mawar', '085260177074', 'makanan-khas-aceh-bhoi.png', '2020-04-08 02:39:59', '2020-04-08 02:39:59'),
(3, 15, 'Dendeng Pak mahdi', 'T. Mahdi Usman', 'Dendeng Sapi', 'Gp. Setui', '08126962622', 'dendeng.jpg', '2020-04-08 02:41:52', '2020-04-08 02:41:52'),
(4, 15, 'Putra Aceh Souvenir', 'Drs. Hasbi', 'Souvenir', 'Jl. Merduati', '-', 'kerajinan_aceh.jpg', '2020-04-08 02:43:25', '2020-04-08 02:43:25'),
(5, 5, 'Cahaya Ricky', 'Suriati', 'Olahan Pala', 'Jl. Jend.Sudirman. Lr. Pemuda No.55 Gp.Padang', '085362745435', 'kue_pala.jpg', '2020-04-08 02:46:57', '2020-04-08 02:46:57'),
(6, 3, 'Kopi Ulee Kareng', 'Asnawi', 'Kopi', 'Lung Ie Kec. Krueng Barona Jaya', '-', 'kopi.jpg', '2020-04-08 02:50:56', '2020-04-08 02:50:56'),
(7, 21, 'Souvenir Putroe Aceh', 'Wardiah', 'Sulam Bordir', 'Jl. Iskandar Muda Sigli', '081360130641', 'sulaman aceh.jpg', '2020-04-08 02:57:49', '2020-04-08 02:57:49'),
(8, 3, 'Peci THHND Bakoy', 'H. Udin Bakoy', 'Peci', 'Bakoy Kec. Ingin Jaya', '08126935044', 'peci.jpeg', '2020-04-08 03:05:29', '2020-04-08 03:05:29'),
(9, 11, 'Bungoeng Rauza', 'Syaifuddin', 'Bordiran', 'Jln. Raya Banda Aceh Medan Kec. Lhoksukon', '-', 'sulaman aceh.jpg', '2020-04-08 03:09:40', '2020-04-08 03:09:40'),
(10, 15, 'Cut Nyak Souvenir', 'Kak Upik', 'Souvenir', 'Jl. Mohd. Jam', '-', 'souvenir.jpg', '2020-04-08 03:11:25', '2020-04-08 03:11:25'),
(11, 15, 'Kue Bungong Kaye', 'Mainar', 'Kue Khas Aceh', 'Jl. Merpati 4. Gp. Blang Oi', '082168396712', 'makanankhasaceh.jpg', '2020-04-08 03:13:20', '2020-04-08 03:13:20');

-- --------------------------------------------------------

--
-- Table structure for table `travel`
--

CREATE TABLE `travel` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_kabupaten` int(10) UNSIGNED NOT NULL,
  `nama_travel` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_izin` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pimpinan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kontak` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `travel`
--

INSERT INTO `travel` (`id`, `id_kabupaten`, `nama_travel`, `jenis`, `no_izin`, `pimpinan`, `alamat`, `kontak`, `created_at`, `updated_at`) VALUES
(1, 8, 'Iskandaria Tour and Travel', 'Agen Penjalanan Wisata (APW)', '511.3/1282/2011', 'Hj. Hasanah Chalid', 'Jln. Baleatu No. 281 Takengon', '081234567890', '2020-04-08 02:00:54', '2020-04-08 10:22:46'),
(2, 13, 'PT. Natari Tour & Travel', 'Biro Perjalanan Wisata (BPW)', '008/01-12/KPPTSP/IV/2010', 'Ir. Aiyub', 'Jln. Sultan Malikussaleh  Gp. Bandar Bireuen', '(0644) 22037', '2020-04-08 02:02:35', '2020-04-08 10:25:10'),
(3, 15, 'Aceh Panorama Tour & Travel', 'Biro Perjalanan Wisata (BPW)', '503/69/KPPTSP/2013 Tgl. 12 Desember 2013', 'Yed Mun', 'Jl. T. Hasan Dek No. 167 Gp. Beurawe', '(0651) 2594', '2020-04-08 02:04:44', '2020-04-08 02:04:44'),
(4, 15, 'CV. Aceh Great Familiar Tour', 'Biro Perjalanan Wisata (BPW)', '503/136/DPMPTSP/2017 Tgl. 23 Nopember 2017', 'Ismail Taib', 'Jl. Cut Meutia No. 3 Gp. Kampung Baru Kec. Baiturrahman Kota Banda Aceh', '-', '2020-04-08 02:06:01', '2020-04-08 02:06:01'),
(5, 15, 'Belangi', 'Agen Penjalanan Wisata (APW)', '503/47/KPPTSP/2015 Tgl. 22 April 2015', 'Ricky Alfandi,SE, MM', 'Jl. Belakang Pendopo Walikota Gp. Kp. Baru Kec. Baiturrahman Kota Banda Aceh', '081269988051', '2020-04-08 02:07:32', '2020-04-08 02:07:32'),
(6, 15, 'CV. Aceh Guide Travel & Tours', 'Agen Penjalanan Wisata (APW)', '503/115/KPPTSP/2015 Tgl. 23 Oktober 2015', 'Zaki Anisak', 'Jl. T. Nyak Arief No. 23 Gp. Lamgugob Kec. Syiah Kuala Kota Banda Aceh', '-', '2020-04-08 02:08:55', '2020-04-08 02:08:55'),
(7, 15, 'CV. Afifi Tour & Travel', 'Agen Penjalanan Wisata (APW)', '503/ 84 / KPPTSP/ 2012 Tgl. 6 September 2012', 'Satria', 'Jl. Tgk. Chik Dipineung Raya Gp. Pineung Kec. Syiah Kuala Banda Aceh', '081360731317', '2020-04-08 02:10:11', '2020-04-08 02:10:11'),
(8, 15, 'CV. Extra Ordinary Ticketing &  Travel Service', 'Agen Penjalanan Wisata (APW)', '503/27/KPPTSP/2016 Tgl. 17 Februari 2016', 'Fitrah Marghfirah', 'Jl. T. Umar No. 09 Gp. Seutui Kec. Baiturrahman Kota Banda Aceh', '085277115445', '2020-04-08 02:12:08', '2020-04-08 02:12:08'),
(9, 15, 'CV. Glory Tour & Travel', 'Agen Penjalanan Wisata (APW)', '503/28/DPMPTSP/2018 Tgl. 20 Februari 2018', 'Ridha Syahputra,SE', 'Jl. Frof. DR. Mr. Mohd Hasan No.32 Gp. Sukadamai Kec. Lueng Bata Kota Banda Aceh', '085260230469', '2020-04-08 02:13:56', '2020-04-08 02:13:56'),
(10, 3, 'dr. Marzuki Travel', 'Agen Penjalanan Wisata (APW)', '001/16/KTPSP/2012', 'dr. Marzuki', 'Jl. Banda Aceh Medan KM. 15 Samahani Kec. Kuta Malaka', '-', '2020-04-08 02:16:38', '2020-04-08 02:16:38'),
(11, 3, 'CV. Azmi Tour & Travel', 'Biro Perjalanan Wisata (BPW)', '002/IJP/AB/2015', 'Nur Azmi Lubis', 'Jl. Mata Ie - Keutapang Dusun Lambheu Barat Gampong Lambheu Kec. Darul Imarah', '-', '2020-04-08 02:17:46', '2020-04-08 02:17:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Rinaldi', 'rinaldiudrasuhanda98@gmail.com', NULL, '$2y$10$xn0dOhXgUNWak4LJAdNsduUUpnVlMxzzxuCmxeqOaXxvcg9lNs9u.', 'fp07OZJMPq3PdnEkXDGUwTLG3evPbPeBmG7Jh1UpOzppI0ICIN4DVY4r04Tc', '2020-01-25 11:01:32', '2020-01-25 11:01:32'),
(2, 'admin', 'admin@email.com', NULL, '$2y$10$OWtcqN7hjHCLpJhbYYrPJOmj5XuYqcE75rH5R3SQngJBx48XJEQf2', NULL, '2020-01-25 11:51:37', '2020-01-25 11:51:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `destinasiwisata`
--
ALTER TABLE `destinasiwisata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kabupaten`
--
ALTER TABLE `kabupaten`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kuliner`
--
ALTER TABLE `kuliner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemanduwisata`
--
ALTER TABLE `pemanduwisata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `souvenir`
--
ALTER TABLE `souvenir`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `travel`
--
ALTER TABLE `travel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `destinasiwisata`
--
ALTER TABLE `destinasiwisata`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `kabupaten`
--
ALTER TABLE `kabupaten`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `kuliner`
--
ALTER TABLE `kuliner`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pemanduwisata`
--
ALTER TABLE `pemanduwisata`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `souvenir`
--
ALTER TABLE `souvenir`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `travel`
--
ALTER TABLE `travel`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
