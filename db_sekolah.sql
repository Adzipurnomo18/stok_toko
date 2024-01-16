-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Des 2023 pada 15.06
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sekolah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ekstrakulikuler`
--

CREATE TABLE `ekstrakulikuler` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `ekstrakulikuler`
--

INSERT INTO `ekstrakulikuler` (`id`, `nama`, `keterangan`, `gambar`) VALUES
(7, 'Pramuka', '<p>Pelatih Pramuka Pak Riski</p>', 'ekstrakulikuler1701439985.jpg'),
(10, 'Karate', '<p>Pelatih Pak Ari</p>', 'ekstrakulikuler1701439799.jpg'),
(11, 'Pencak Silat', '<p>Pelatih Pencak Silat Pak Ari</p>', 'ekstrakulikuler1701440205.jpg'),
(13, 'Pramuka2', '<p>eerer</p>', 'ekstrakulikuler1701750689.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id`, `foto`, `keterangan`) VALUES
(3, 'galeri1700641387.jpg', 'Lomba O2sn, FLS2n, PKPS Di GUGUS Sembubuk'),
(4, 'galeri1700652050.jpg', 'Juara 2 KARATE Tingkat Kabupaten'),
(5, 'galeri1701440371.jpg', 'Juara Tartil Gugus');

-- --------------------------------------------------------

--
-- Struktur dari tabel `informasi`
--

CREATE TABLE `informasi` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `informasi`
--

INSERT INTO `informasi` (`id`, `judul`, `keterangan`, `gambar`, `created_at`, `updated_at`, `created_by`) VALUES
(2, 'Pembongkaran Bangunan Sekolah Tahun 2023', '<p>Tanggal 01 Agustus 2023, Bangunan sekolah akan di renovasi</p>', 'informasi1695654176.jpg', '2023-09-25 15:02:56', '2023-12-02 15:28:18', 2),
(4, '17 Agustus 2023', '<p>Seluruh Warga SD 048/IX Sarang Burung Besok Upacara di Aliyah Sarang Burung</p>', 'informasi1701442795.jpg', '2023-12-01 14:59:55', '2023-12-02 15:22:46', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaturan`
--

CREATE TABLE `pengaturan` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `logo` varchar(50) NOT NULL,
  `favicon` varchar(50) NOT NULL,
  `tentang_sekolah` text NOT NULL,
  `foto_sekolah` varchar(50) NOT NULL,
  `google_maps` text NOT NULL,
  `nama_kepsek` varchar(50) NOT NULL,
  `foto_kepsek` varchar(50) NOT NULL,
  `sambutan_kepsek` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pengaturan`
--

INSERT INTO `pengaturan` (`id`, `nama`, `email`, `telepon`, `alamat`, `logo`, `favicon`, `tentang_sekolah`, `foto_sekolah`, `google_maps`, `nama_kepsek`, `foto_kepsek`, `sambutan_kepsek`, `created_at`, `updated_at`) VALUES
(1, 'SDN 048/IX SARANG BURUNG JAMBI', 'sdn48sarangburungjmb@gmail.com', '12345678901', 'Jl. abd gaffar RT 07 Desa Sarang Burung', 'logo1695913234.jpg', 'favicon1695909998.png', '<p style=\"text-align: center;\"><strong>Sekolah Dasar Negeri</strong></p>\r\n<p style=\"text-align: center;\"><strong>visi</strong></p>\r\n<p style=\"text-align: center;\"><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 200%; font-family: \'Times New Roman\',serif; color: black; mso-themecolor: text1; mso-ansi-language: EN-US;\">Adapun visi dari sekolah ini yaitu m</span><span lang=\"IN\" style=\"font-size: 12.0pt; line-height: 200%; font-family: \'Times New Roman\',serif; color: black; mso-themecolor: text1;\">enciptakan Pribadi Yang Beriman, Berilmu, Trampil, Cerdas, Unggul Dalam Prestasi Dan Berakhlak Mulia Serta Berpihak Pada Kebersamaan</span><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 200%; font-family: \'Times New Roman\',serif; color: black; mso-themecolor: text1; mso-ansi-language: EN-US;\">.</span><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 200%; font-family: \'Times New Roman\',serif; color: black; mso-themecolor: text1;\">&nbsp;</span></p>\r\n<p style=\"text-align: center;\"><strong>Misi</strong></p>\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left: 46.35pt; text-indent: -18pt; text-align: center;\"><span lang=\"IN\" style=\"font-size: 12.0pt; line-height: 200%; font-family: \'Times New Roman\',serif; color: black; mso-themecolor: text1;\">Memberikan Pelayanan Pendidikan Yang Terpadu Dengan Memperhatikan Bakat Dan Minat Siswa.</span></p>\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left: 46.35pt; text-indent: -18pt; text-align: center;\"><!-- [if !supportLists]--><span lang=\"IN\" style=\"font-size: 12.0pt; line-height: 200%; font-family: \'Times New Roman\',serif; color: black; mso-themecolor: text1;\">Mengoptimalkan Kegiatan Pembelajaran.</span></p>\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left: 46.35pt; text-indent: -18pt; text-align: center;\"><!-- [if !supportLists]--><span lang=\"IN\" style=\"font-size: 12.0pt; line-height: 200%; font-family: \'Times New Roman\',serif; color: black; mso-themecolor: text1;\">Menanamkan Pemahaman Tentang Kegiatan Keagamaan.</span></p>\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left: 46.35pt; text-indent: -18pt; text-align: center;\"><!-- [if !supportLists]--><span lang=\"IN\" style=\"font-size: 12.0pt; line-height: 200%; font-family: \'Times New Roman\',serif; color: black; mso-themecolor: text1;\">Membudayakan Kegiatan Akhlak Mulia Terencana Dan Terprogram.</span></p>\r\n<p style=\"text-align: center;\"><strong>Tujuan</strong></p>\r\n<p class=\"MsoListParagraphCxSpFirst\" style=\"margin-left: 46.35pt; text-indent: -18pt; text-align: center;\"><!-- [if !supportLists]--><span lang=\"IN\" style=\"font-size: 12.0pt; line-height: 200%; font-family: \'Times New Roman\',serif; color: black; mso-themecolor: text1;\">Meningkatkan Frekuensi Kegiatan Ekstrakulikuler</span></p>\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left: 46.35pt; text-indent: -18pt; text-align: center;\"><span lang=\"IN\" style=\"font-size: 12.0pt; line-height: 200%; font-family: \'Times New Roman\',serif; color: black; mso-themecolor: text1;\">Meningkatkan Rata-rata Hasil Ujian Akhir Sekolah</span></p>\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left: 46.35pt; text-indent: -18pt; text-align: center;\"><span lang=\"IN\" style=\"font-size: 12.0pt; line-height: 200%; font-family: \'Times New Roman\',serif; color: black; mso-themecolor: text1;\">Melaksanakan Pembinaan Kegiatan Keagamaan</span></p>\r\n<p class=\"MsoListParagraphCxSpLast\" style=\"margin-left: 46.35pt; text-indent: -18pt; text-align: center;\"><span lang=\"IN\" style=\"font-size: 12.0pt; line-height: 200%; font-family: \'Times New Roman\',serif; color: black; mso-themecolor: text1;\">Meningkatkan Profesional Guru Agar Dapat Menjalankan Kegiatan Pembelajaran Dengan Benar Sesuai Dengan Tupoksi Masing-Masing</span><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 200%; font-family: \'Times New Roman\',serif; color: black; mso-themecolor: text1; mso-ansi-language: EN-US;\">.</span></p>\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left: 46.35pt; text-indent: -18pt; text-align: center;\">&nbsp;</p>', 'sekolah1703000958.jpg', '<p><iframe style=\"border: 0;\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.3241509655695!2d103.5225951741343!3d-1.5681028359973168!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e2f6216a0de1307%3A0x99130c6a83e8c627!2sSD%20Negeri%2048%20%2F%20IX%20Sarang%20Burung!5e0!3m2!1sid!2sid!4v1699362551591!5m2!1sid!2sid\" width=\"600\" height=\"450\" allowfullscreen=\"allowfullscreen\" loading=\"lazy\"></iframe></p>', 'Fajri Mubaroq Z', 'kepsek1701442266.jpg', '<p style=\"text-align: center;\"><strong>sambutan kepala sekolah kepada tamu</strong></p>\r\n<p style=\"text-align: center;\">&nbsp;</p>\r\n<p style=\"text-align: center;\">Assalamu\'alaikum Warohmatullohi Wabarokatuh</p>\r\n<p style=\"text-align: center;\">Puji syukur kita panjatkan kehadirat Allah SWT yang telah memberikan karunia hidayah dan taufik-Nya serta kesehatan sehingga kita masih mampu beraktivitas dengan nyaman sampai hari ini.&nbsp;Shalawat teriring salam kita sanjungkan kepada junjungan kita Nabi Muhammad SAW beserta keluarganya, para sahabatnya dan umatnya sampai akhir zaman.</p>\r\n<p style=\"text-align: center;\">Pendidikan adalah aset terbesar yang berperan dalam membangun negara yang tinggi peradabannya, karena dengan pendidikanlah SDM yang mengisi pembangunan negara ini mampu menjaga persatuan dan kesatuan, keutuhan dan kelestarian lingkungan hidup.</p>\r\n<p style=\"text-align: center;\">Dalam rangka ikut serta dalam bidang pendidikan, SD Negeri 048/IX Sarang Burung, menyiapkan program pendidikan yang berkualitas dengan lingkungan yang sehat, asri dan nyaman serta didukung oleh tenaga pendidik yang profesional serta sarana yang memadai akan menghasilkan lulusan yang Cerdas, Disiplin, Inovatif<em>, </em>dan<em>&nbsp;Kompetitif</em>&nbsp;&nbsp;.</p>\r\n<p style=\"text-align: center;\">Penanaman karakter pada siswa merupakan hal terpenting dalam proses pembelajaran di sekolah kami&nbsp;<em>,&nbsp;</em>&nbsp;yaitu Religius, Jujur, Adil, Berpikir Kritis, Bekerja Keras, Peduli, Bertanggung Jawab, Komunikatif dan Literat.</p>\r\n<p style=\"text-align: center;\">Berikut ini profil sekolah kami, selamat menikmati dan kami tunggu kedatangan Bapak dan Ibu di SD Negeri 048/IX Sarang Burung.</p>\r\n<p style=\"text-align: center;\">Wabillahi taufik wal hidayah wassalamu\'alaikum Warohmatullohi Wabarokatuh</p>', '2023-09-28 03:48:26', '2023-12-19 22:49:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('Super Admin','Umum') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `email`, `username`, `password`, `level`) VALUES
(1, 'Ari', 'sa', '827ccb0eea8a706c4c34a16891f84e7b', 'Super Admin'),
(22, 'fmubaroqz@gmail.com', 'fajri', '827ccb0eea8a706c4c34a16891f84e7b', 'Umum'),
(29, 'syamsiar13@guru.sd.belajar.id', 'sym', '827ccb0eea8a706c4c34a16891f84e7b', 'Umum');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa_baru`
--

CREATE TABLE `siswa_baru` (
  `id_siswa` int(50) NOT NULL,
  `nama_siswa` varchar(30) NOT NULL,
  `nama_panggilan` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(30) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(10) NOT NULL,
  `kewarganegaraan` varchar(50) NOT NULL,
  `anak_nomor` varchar(20) NOT NULL,
  `jumlah_saudara` varchar(20) NOT NULL,
  `jumlah_saudara_tiri` varchar(20) NOT NULL,
  `jumlah_saudara_angkat` varchar(20) NOT NULL,
  `bahasa_harian` varchar(30) NOT NULL,
  `berat_badan` varchar(3) NOT NULL,
  `tinggi_badan` varchar(3) NOT NULL,
  `gol_darah` varchar(2) NOT NULL,
  `penyakit` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `no_hp` varchar(9) NOT NULL,
  `tempat_tinggal` varchar(30) NOT NULL,
  `nama_ayah` varchar(30) NOT NULL,
  `nama_ibu` varchar(30) NOT NULL,
  `pendidikan_ayah` varchar(30) NOT NULL,
  `pendidikan_ibu` varchar(30) NOT NULL,
  `pekerjaan_ayah_upah` varchar(50) NOT NULL,
  `pekerjaan_ibu_upah` varchar(50) NOT NULL,
  `nama_wali` varchar(30) NOT NULL,
  `pendidikan_wali` varchar(30) NOT NULL,
  `hub_anak` varchar(30) NOT NULL,
  `pekerjaan_wali` varchar(30) NOT NULL,
  `masuk_sekolah` varchar(20) NOT NULL,
  `asal_anak` varchar(30) NOT NULL,
  `nama_tk` varchar(50) NOT NULL,
  `nomor_tsk` varchar(30) NOT NULL,
  `lama_belajar` varchar(20) NOT NULL,
  `nama_sa` varchar(100) NOT NULL,
  `tanggal_sa` date NOT NULL,
  `dari_kelas_sa` varchar(30) NOT NULL,
  `tanggal_dsi` date NOT NULL,
  `dikelas_dsi` varchar(30) NOT NULL,
  `id_pengguna` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `siswa_baru`
--

INSERT INTO `siswa_baru` (`id_siswa`, `nama_siswa`, `nama_panggilan`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `agama`, `kewarganegaraan`, `anak_nomor`, `jumlah_saudara`, `jumlah_saudara_tiri`, `jumlah_saudara_angkat`, `bahasa_harian`, `berat_badan`, `tinggi_badan`, `gol_darah`, `penyakit`, `alamat`, `kota`, `no_hp`, `tempat_tinggal`, `nama_ayah`, `nama_ibu`, `pendidikan_ayah`, `pendidikan_ibu`, `pekerjaan_ayah_upah`, `pekerjaan_ibu_upah`, `nama_wali`, `pendidikan_wali`, `hub_anak`, `pekerjaan_wali`, `masuk_sekolah`, `asal_anak`, `nama_tk`, `nomor_tsk`, `lama_belajar`, `nama_sa`, `tanggal_sa`, `dari_kelas_sa`, `tanggal_dsi`, `dikelas_dsi`, `id_pengguna`) VALUES
(24, 'Fajri Mubaroq Z', 'ari', 'L', 'Pasaman', '2023-12-20', 'ISLAM', 'WNI', '1', '4', 'tidak ada', 'tidak ada', 'Bahasa ibu', '55 ', '166', 'A', 'tidak ada penyakit', 'SImpang 5', 'Kota Jambi', '123', 'Orang Tua', 'ayah', 'Ibu', 'S2', 'S1', 'tidak bekerja', 'ibu rumah tangga', 'tidak ada', 'Tidak Ada', 'tidak ada', 'tidak ada', 'Siswa_baru', 'rumah_tangga', 'tk gelora', '1123', '1 tahun', 'sd 12 danau teluk', '2023-12-20', 'tidak ada', '2023-12-20', 'tidak ada', NULL),
(29, 'Adzi', 'aji', 'L', 'Palembang', '2023-12-21', 'ISLAM', 'WNI', '2', '3', '-', '-', 'Indonesia', '55', '170', 'O', '-', 'Perumahan Permataland Blok Ruby 05, Bagan Pete, Ko', 'Muaro Jambi', '082212121', 'Orang Tua', 'Test', 'testt', 'S1', 'S2', 'Tani', 'rumah tangga', 'Test', 'S2', 'test', 'okoko', 'pindahan', 'tk', 'Lkmskd', 'asas', '6', '-', '2023-12-21', '5', '2023-12-21', '121212', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kota`
--

CREATE TABLE `tb_kota` (
  `id` int(50) NOT NULL,
  `nama_kota` enum('Kota Jambi','Muaro Jambi','Tanjab Barat','Tanjab Timur') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_kota`
--

INSERT INTO `tb_kota` (`id`, `nama_kota`) VALUES
(1, 'Kota Jambi'),
(2, 'Muaro Jambi'),
(3, 'Tanjab Barat'),
(4, 'Tanjab Timur');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pekerjaan`
--

CREATE TABLE `tb_pekerjaan` (
  `id_pekerjaan` int(11) NOT NULL,
  `pekerjaan` enum('PNS','Pegawai BUMN','TNI Polri','Pegawai Swasta','Dagang','Lain-lain') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pendidikan`
--

CREATE TABLE `tb_pendidikan` (
  `id_pendidikan` int(11) NOT NULL,
  `pendidikan_ayah` enum('SD','SMP','SMA','D1','D2','D3','D4','S1','S2') NOT NULL,
  `pendidikan_ibu` enum('SD','SMP','SMA','D1','D2','D3','D4','S1','S2') NOT NULL,
  `pekerjaan_wali` enum('SD','SMP','SMA','D1','D2','D3','D4','S1','S2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `ekstrakulikuler`
--
ALTER TABLE `ekstrakulikuler`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengaturan`
--
ALTER TABLE `pengaturan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indeks untuk tabel `siswa_baru`
--
ALTER TABLE `siswa_baru`
  ADD PRIMARY KEY (`id_siswa`),
  ADD UNIQUE KEY `id_pengguna` (`id_pengguna`);

--
-- Indeks untuk tabel `tb_kota`
--
ALTER TABLE `tb_kota`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pekerjaan`
--
ALTER TABLE `tb_pekerjaan`
  ADD PRIMARY KEY (`id_pekerjaan`);

--
-- Indeks untuk tabel `tb_pendidikan`
--
ALTER TABLE `tb_pendidikan`
  ADD PRIMARY KEY (`id_pendidikan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `ekstrakulikuler`
--
ALTER TABLE `ekstrakulikuler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pengaturan`
--
ALTER TABLE `pengaturan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `siswa_baru`
--
ALTER TABLE `siswa_baru`
  MODIFY `id_siswa` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `tb_kota`
--
ALTER TABLE `tb_kota`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_pekerjaan`
--
ALTER TABLE `tb_pekerjaan`
  MODIFY `id_pekerjaan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_pendidikan`
--
ALTER TABLE `tb_pendidikan`
  MODIFY `id_pendidikan` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `siswa_baru`
--
ALTER TABLE `siswa_baru`
  ADD CONSTRAINT `siswa_baru_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
