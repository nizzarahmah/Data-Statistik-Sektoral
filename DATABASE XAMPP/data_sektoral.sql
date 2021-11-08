-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Okt 2021 pada 08.49
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_sektoral`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bidang_urusan_pemerintahan`
--

CREATE TABLE `bidang_urusan_pemerintahan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_opd` int(11) NOT NULL,
  `nama_bidang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_dibuat` datetime DEFAULT NULL,
  `dibuat_oleh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_diubah` datetime DEFAULT NULL,
  `diubah_oleh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `bidang_urusan_pemerintahan`
--

INSERT INTO `bidang_urusan_pemerintahan` (`id`, `id_opd`, `nama_bidang`, `tanggal_dibuat`, `dibuat_oleh`, `tanggal_diubah`, `diubah_oleh`) VALUES
(14, 27, 'Bidang Perekonomian dan SDA', '2021-10-12 03:04:17', 'Mutia Kharisma', NULL, NULL),
(15, 27, 'Bidang Pembangunan SDM, Sosial dan Budaya', '2021-10-12 03:04:53', 'Mutia Kharisma', NULL, NULL),
(16, 27, 'Bidang Infrastruktur dan Pengembangan Wilayah', '2021-10-12 03:05:32', 'Mutia Kharisma', NULL, NULL),
(17, 27, 'Bidang Data Perencanaan dan Litbang', '2021-10-12 03:06:04', 'Mutia Kharisma', NULL, NULL),
(18, 28, 'Bidang Pengadaan, Pemberhentian dan Informasi Kepegawaian', '2021-10-12 03:06:50', 'Mutia Kharisma', NULL, NULL),
(19, 28, 'Bidang Pengembangan Karier, Mutasi dan Kepangkatan', '2021-10-12 03:07:31', 'Mutia Kharisma', NULL, NULL),
(20, 28, 'Bidang Pengembangan Kompetensi Aparatur', '2021-10-12 03:08:00', 'Mutia Kharisma', NULL, NULL),
(21, 28, 'Bidang Penilaian Kinerja dan Pembinaan Disiplin Aparatur', '2021-10-12 03:08:34', 'Mutia Kharisma', NULL, NULL),
(22, 29, 'Bidang Pencegahan Kesiapsiagaan', '2021-10-12 03:09:22', 'Mutia Kharisma', NULL, NULL),
(23, 29, 'Bidang Kedarutan dan Logistic', '2021-10-12 03:09:53', 'Mutia Kharisma', NULL, NULL),
(24, 29, 'Bidang Rehabilitasi dan Rekontruksi', '2021-10-12 03:10:25', 'Mutia Kharisma', NULL, NULL),
(25, 30, 'Bidang Pelayanan dan Penetapan dan Data DPRD', '2021-10-12 03:11:27', 'Mutia Kharisma', NULL, NULL),
(26, 30, 'Bidang Penagihan dan Pelaporan', '2021-10-12 03:12:09', 'Mutia Kharisma', NULL, NULL),
(27, 30, 'Bidang Anggaran', '2021-10-12 03:12:29', 'Mutia Kharisma', NULL, NULL),
(28, 30, 'Bidang Akuntansi dan Pelaporan', '2021-10-12 03:12:59', 'Mutia Kharisma', NULL, NULL),
(29, 30, 'Bidang Pengelolaan Barang Milik Daerah', '2021-10-12 03:13:26', 'Mutia Kharisma', NULL, NULL),
(30, 32, 'Bidang Pemberdayaan Sosial', '2021-10-12 03:13:56', 'Mutia Kharisma', NULL, NULL),
(31, 32, 'Bidang Pelayanan dan Rehabilitas Sosial', '2021-10-12 03:14:34', 'Mutia Kharisma', NULL, NULL),
(32, 32, 'Bidang Bantuan dan Perlindungan Sosial', '2021-10-12 03:15:03', 'Mutia Kharisma', NULL, NULL),
(33, 33, 'Bidang Pengolahan, Layanan dan Pelestarian Bahan Perpustakaan', '2021-10-12 03:16:13', 'Mutia Kharisma', NULL, NULL),
(34, 33, 'Bidang Pengembangan Perpustakaan dan Pembudayaan Kegemaran Membaca', '2021-10-12 03:17:20', 'Mutia Kharisma', NULL, NULL),
(35, 33, 'Bidang Kearsipan', '2021-10-12 03:17:45', 'Mutia Kharisma', NULL, NULL),
(36, 34, 'Bidang Kebudayaan', '2021-10-12 03:18:12', 'Mutia Kharisma', NULL, NULL),
(37, 34, 'Bidang Kepemudaan dan Kepramukaan', '2021-10-12 03:18:39', 'Mutia Kharisma', NULL, NULL),
(38, 34, 'Bidang Keolahragaan', '2021-10-12 03:19:05', 'Mutia Kharisma', NULL, NULL),
(39, 35, 'Bidang Pembinaan Sekolah Dasar', '2021-10-12 03:19:32', 'Mutia Kharisma', NULL, NULL),
(40, 35, 'Bidang Pembinaan Sekolah Menengah Pertama', '2021-10-12 03:19:58', 'Mutia Kharisma', NULL, NULL),
(41, 35, 'Bidang Pembinaan Pendidikan Anak Usia Dini dan Pendidikan Non Formal', '2021-10-12 03:20:31', 'Mutia Kharisma', NULL, NULL),
(42, 35, 'Bidang Pembinaan Ketenagaan', '2021-10-12 03:20:54', 'Mutia Kharisma', NULL, NULL),
(43, 36, 'Bidang Pelayanan Pendaftaran Penduduk', '2021-10-12 03:21:27', 'Mutia Kharisma', NULL, NULL),
(44, 36, 'Bidang Pelayanan Pencatatan Sipil', '2021-10-12 03:21:57', 'Mutia Kharisma', NULL, NULL),
(45, 36, 'Bidang Pengelolaan Informasi Administrasi Kependudukan', '2021-10-12 03:23:10', 'Mutia Kharisma', NULL, NULL),
(46, 36, 'Bidang Pemanfaatan Data dan Inovasi Pelayanan', '2021-10-12 03:23:38', 'Mutia Kharisma', NULL, NULL),
(47, 37, 'Bidang Angkutan', '2021-10-12 03:24:01', 'Mutia Kharisma', NULL, NULL),
(48, 37, 'Bidang Lalu Lintas', '2021-10-12 03:24:19', 'Mutia Kharisma', NULL, NULL),
(49, 37, 'Bidang Teksar dan Keselamatan', '2021-10-12 03:24:46', 'Mutia Kharisma', NULL, NULL),
(50, 38, 'Bidang Sarana Komunikasi dan Diseminasi Informasi', '2021-10-12 03:25:40', 'Mutia Kharisma', NULL, NULL),
(51, 38, 'Bidang Persandian dan Telematika', '2021-10-12 03:26:07', 'Mutia Kharisma', NULL, NULL),
(52, 38, 'Bidang Pengelolaan Statistik dan Data Elektronik', '2021-10-12 03:26:37', 'Mutia Kharisma', NULL, NULL),
(53, 39, 'Bidang Pemanfaatan dan Pengendalian Sumberdaya Perikanan', '2021-10-12 03:27:10', 'Mutia Kharisma', NULL, NULL),
(54, 39, 'Bidang Produksi Prasarana dan Sarana Peternakan', '2021-10-12 03:27:48', 'Mutia Kharisma', NULL, NULL),
(55, 39, 'Bidang Kesehatan Hewan, Ikan, Kesehatan Masyarakat', '2021-10-12 03:28:24', 'Mutia Kharisma', NULL, NULL),
(56, 39, 'Bidang Kesehatan Hewan, Ikan, Kesehatan Masyarakat Veteriner Pengolahan dan Pemasaran', '2021-10-12 03:29:20', 'Mutia Kharisma', NULL, NULL),
(57, 40, 'Bidang Pelatihan dan Produktivitas Tenaga Kerja', '2021-10-12 03:29:51', 'Mutia Kharisma', NULL, NULL),
(58, 40, 'Bidang Perlindungan dan Jaminan Sosial Tenaga Kerja', '2021-10-12 03:30:34', 'Mutia Kharisma', NULL, NULL),
(59, 40, 'Bidang Penempatan Tenaga Kerja dan Transmigrasi', '2021-10-12 03:31:02', 'Mutia Kharisma', NULL, NULL),
(60, 41, 'Bidang Kebudayaan', '2021-10-12 03:31:28', 'Mutia Kharisma', NULL, NULL),
(61, 41, 'Bidang Kesenian dan Perfilman', '2021-10-12 03:31:53', 'Mutia Kharisma', NULL, NULL),
(62, 41, 'Bidang Kepariwisataan', '2021-10-12 03:32:16', 'Mutia Kharisma', NULL, NULL),
(63, 41, 'Bidang Pemasaran', '2021-10-12 03:32:40', 'Mutia Kharisma', NULL, NULL),
(64, 42, 'Bidang Koperasi, Usaha Mikro, Kecil dan Menengah', '2021-10-12 03:33:13', 'Mutia Kharisma', NULL, NULL),
(65, 42, 'Bidang Industri', '2021-10-12 03:33:35', 'Mutia Kharisma', NULL, NULL),
(66, 42, 'Bidang Perdagangan', '2021-10-12 03:33:56', 'Mutia Kharisma', NULL, NULL),
(67, 42, 'Bidang Pengelolaan Pasar', '2021-10-12 03:34:19', 'Mutia Kharisma', NULL, NULL),
(68, 43, 'Bidang Prasarana dan Sarana', '2021-10-12 03:34:51', 'Mutia Kharisma', NULL, NULL),
(69, 43, 'Bidang Tanaman Pangan', '2021-10-12 03:35:13', 'Mutia Kharisma', NULL, NULL),
(70, 43, 'Bidang Holtikultura dan Perkebunan', '2021-10-12 03:35:38', 'Mutia Kharisma', NULL, NULL),
(71, 43, 'Bidang Penyuluhan', '2021-10-12 03:35:57', 'Mutia Kharisma', NULL, NULL),
(72, 43, 'Bidang Ketahanan Pangan', '2021-10-12 03:36:22', 'Mutia Kharisma', NULL, NULL),
(73, 46, 'Bidang Pengendalian Penduduk Penyuluhan dan Penggerakan', '2021-10-12 03:37:04', 'Mutia Kharisma', NULL, NULL),
(74, 46, 'Bidang Keluarga Berencana Ketahanan dan Kesejahteraan Keluarga', '2021-10-12 03:47:25', 'Mutia Kharisma', NULL, NULL),
(75, 46, 'Bidang Pemberdayaan Perempuan dan Perlindungan Anak', '2021-10-12 03:47:56', 'Mutia Kharisma', NULL, NULL),
(76, 47, 'Bidang Perumahan dan Kawasan Pemukiman', '2021-10-12 03:48:30', 'Mutia Kharisma', NULL, NULL),
(77, 47, 'Bidang Kebersihan, Persampahan dan Pertamanan', '2021-10-12 03:49:15', 'Mutia Kharisma', NULL, NULL),
(78, 47, 'Bidang Tata Lingkungan', '2021-10-12 03:49:41', 'Mutia Kharisma', NULL, NULL),
(79, 47, 'Bidang Pencemaran dan Kerusakan Lingkungan', '2021-10-12 03:50:13', 'Mutia Kharisma', NULL, NULL),
(80, 47, 'Bidang Penataan dan Peningkatan Kapasitas Lingkungan Hidup', '2021-10-12 03:50:51', 'Mutia Kharisma', NULL, NULL),
(81, 48, 'Bidang Bina Marga', '2021-10-12 03:51:27', 'Mutia Kharisma', NULL, NULL),
(82, 48, 'Bidang Pengelolaan Sumber Daya Air', '2021-10-12 03:51:54', 'Mutia Kharisma', NULL, NULL),
(83, 48, 'Bidang Keciptakaryaan', '2021-10-12 03:52:16', 'Mutia Kharisma', NULL, NULL),
(84, 48, 'Bidang Tata Ruang dan Pertahanan', '2021-10-12 03:52:42', 'Mutia Kharisma', NULL, NULL),
(85, 49, 'Bidang Perencanaan dan Program', '2021-10-12 03:53:13', 'Mutia Kharisma', NULL, NULL),
(86, 49, 'Bidang Administrasi dan Umum', '2021-10-12 03:53:38', 'Mutia Kharisma', NULL, NULL),
(87, 49, 'Bidang Evaluasi dan Pelaporan', '2021-10-12 03:54:04', 'Mutia Kharisma', NULL, NULL),
(88, 49, 'Bidang Inspektur Pembantu Wilayah', '2021-10-12 03:54:34', 'Mutia Kharisma', NULL, NULL),
(89, 50, 'Bidang Penegakan Perundang-undangan Daerah', '2021-10-12 03:55:09', 'Mutia Kharisma', NULL, NULL),
(90, 50, 'Bidang Trantibumtranmas', '2021-10-12 03:55:36', 'Mutia Kharisma', NULL, NULL),
(91, 50, 'Bidang Perlindungan Masyarakat', '2021-10-12 03:56:20', 'Mutia Kharisma', NULL, NULL),
(92, 50, 'Bidang Pemadam Kebakaran dan Penyelamatan', '2021-10-12 03:56:52', 'Mutia Kharisma', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `file_manajemen`
--

CREATE TABLE `file_manajemen` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_referensi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bidang_urusan_pemerintahan_id` int(11) NOT NULL,
  `pd_pengampu_id` int(11) NOT NULL,
  `tahun_rilis` year(4) NOT NULL,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ketersediaan_metadata` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `klasifikasi_data` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `upload_file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dibuat_oleh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_dibuat` datetime DEFAULT NULL,
  `diubah_oleh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_diubah` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `file_manajemen`
--

INSERT INTO `file_manajemen` (`id`, `kode_referensi`, `nama_file`, `bidang_urusan_pemerintahan_id`, `pd_pengampu_id`, `tahun_rilis`, `status`, `ketersediaan_metadata`, `klasifikasi_data`, `upload_file`, `keterangan`, `dibuat_oleh`, `tanggal_dibuat`, `diubah_oleh`, `tanggal_diubah`) VALUES
(9, '12345', 'file pdf', 14, 27, 2021, 'berhasil', 'Ya', 'Rahasia', '31997-75676626953-1-PB.pdf-1634224360.pdf', 'bappeda', 'Mutia Kharisma', '2021-10-14 15:12:43', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_09_27_110450_add_column_to_users_table', 1),
(6, '2021_09_27_141735_create_file_manajemen_table', 2),
(7, '2021_09_27_150135_create_pemerintahan_daerah_pengampu_table', 3),
(8, '2021_09_27_150203_create_bidang_urusan_pemerintahan_table', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('azmiiskandar0@gmail.com', '$2y$10$NR81wQs./QMRHULGyPmg9uISPRcVSNOlqbG2F6QP8Oewd288GnGZS', '2021-10-01 06:01:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemerintahan_daerah_pengampu`
--

CREATE TABLE `pemerintahan_daerah_pengampu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_opd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_dibuat` datetime DEFAULT NULL,
  `dibuat_oleh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_diubah` datetime DEFAULT NULL,
  `diubah_oleh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pemerintahan_daerah_pengampu`
--

INSERT INTO `pemerintahan_daerah_pengampu` (`id`, `nama_opd`, `tanggal_dibuat`, `dibuat_oleh`, `tanggal_diubah`, `diubah_oleh`) VALUES
(27, 'BAPPEDA', '2021-10-12 02:51:56', 'Mutia Kharisma', NULL, NULL),
(28, 'BKPSDM', '2021-10-12 02:52:18', 'Mutia Kharisma', NULL, NULL),
(29, 'BPBD', '2021-10-12 02:52:35', 'Mutia Kharisma', NULL, NULL),
(30, 'BPKD', '2021-10-12 02:52:49', 'Mutia Kharisma', NULL, NULL),
(31, 'DINKES', '2021-10-12 02:53:05', 'Mutia Kharisma', NULL, NULL),
(32, 'DINSOS', '2021-10-12 02:53:20', 'Mutia Kharisma', NULL, NULL),
(33, 'DIPERPUSKA', '2021-10-12 02:53:37', 'Mutia Kharisma', NULL, NULL),
(34, 'DISBUDPORA', '2021-10-12 02:53:53', 'Mutia Kharisma', NULL, NULL),
(35, 'DISDIK', '2021-10-12 02:54:07', 'Mutia Kharisma', NULL, NULL),
(36, 'DISDUKCAPIL', '2021-10-12 02:54:28', 'Mutia Kharisma', NULL, NULL),
(37, 'DISHUB', '2021-10-12 02:54:47', 'Mutia Kharisma', NULL, NULL),
(38, 'DISKOMINFO', '2021-10-12 02:55:00', 'Mutia Kharisma', NULL, NULL),
(39, 'DISNAKAN', '2021-10-12 02:55:16', 'Mutia Kharisma', NULL, NULL),
(40, 'DISNAKER', '2021-10-12 02:55:29', 'Mutia Kharisma', NULL, NULL),
(41, 'DISPAR', '2021-10-12 02:55:47', 'Mutia Kharisma', NULL, NULL),
(42, 'DKUKMP', '2021-10-12 02:56:03', 'Mutia Kharisma', NULL, NULL),
(43, 'DPKP', '2021-10-12 02:56:18', 'Mutia Kharisma', NULL, NULL),
(44, 'DPMD', '2021-10-12 02:56:36', 'Mutia Kharisma', NULL, NULL),
(45, 'DPMPTSP', '2021-10-12 02:56:53', 'Mutia Kharisma', NULL, NULL),
(46, 'DPPKBPPPA', '2021-10-12 02:57:09', 'Mutia Kharisma', NULL, NULL),
(47, 'DPRKPLH', '2021-10-12 02:57:25', 'Mutia Kharisma', NULL, NULL),
(48, 'DPUPRP', '2021-10-12 02:57:40', 'Mutia Kharisma', NULL, NULL),
(49, 'INSPEKTORAT', '2021-10-12 02:57:57', 'Mutia Kharisma', '2021-10-12 02:59:09', 'Mutia Kharisma'),
(50, 'SATPOLPP', '2021-10-12 02:58:10', 'Mutia Kharisma', '2021-10-12 02:58:40', 'Mutia Kharisma'),
(51, 'SETDA', '2021-10-12 02:58:23', 'Mutia Kharisma', NULL, NULL),
(52, 'SETDPRD', '2021-10-12 02:59:34', 'Mutia Kharisma', '2021-10-12 02:59:52', 'Mutia Kharisma');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(40, 'Mutia Kharisma', 'mutia', 'kharismam190998@gmail.com', NULL, '$2y$10$VMVabDZyoigm0UhiTpWWyueELHVsaMOZMFApTFOCzAMAVx8qMPhTi', NULL, '2021-10-11 18:58:32', '2021-10-11 18:58:32');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bidang_urusan_pemerintahan`
--
ALTER TABLE `bidang_urusan_pemerintahan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `file_manajemen`
--
ALTER TABLE `file_manajemen`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pemerintahan_daerah_pengampu`
--
ALTER TABLE `pemerintahan_daerah_pengampu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bidang_urusan_pemerintahan`
--
ALTER TABLE `bidang_urusan_pemerintahan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `file_manajemen`
--
ALTER TABLE `file_manajemen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `pemerintahan_daerah_pengampu`
--
ALTER TABLE `pemerintahan_daerah_pengampu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
