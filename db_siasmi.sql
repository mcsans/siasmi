-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Apr 2022 pada 12.18
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_siasmi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_admin`
--

CREATE TABLE `t_admin` (
  `id` int(1) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_admin`
--

INSERT INTO `t_admin` (`id`, `nama`, `email`, `password`) VALUES
(1, 'Administrator', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_berita`
--

CREATE TABLE `t_berita` (
  `id` int(1) NOT NULL,
  `judul` varchar(125) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_berita`
--

INSERT INTO `t_berita` (`id`, `judul`, `gambar`, `isi`, `tanggal`) VALUES
(9, 'KIP Kuliah untuk UTBK SBMPTN 2022: Jadwal, Syarat, Cara Daftar, Besaran Bantuan yang Diterima Pesert', 'cobaberita2.jpg', '<div>Jadwal pendaftaran KIP Kuliah 2022 untuk UTBK SBMPTN telah dibuka pada hari Selasa 22 Maret 2022. Sementara penutupan pendaftarannya adalah pada tanggal 14 April 2022.<br><br>Program KIP (Kartu Indonesia Pintar) Kuliah yang akan memberikan bantuan biaya untuk calon mahasiswa tidak mampu memang dibuka untuk beberapa jalur penerimaan mahasiswa baru. Salah satunya adalah pada seleksi Ujian Tulis Berbasis Komputer Seleksi Bersama Masuk Perguruan Tinggi Negeri (UTBK SBMPTN) 2022.<br><br>Setiap mahasiswa penerima KIP Kuliah Merdeka 2022 untuk UTBK SBMPTN 2022 akan mendapatkan jaminan biaya pendidikan yang akan dibayarkan langsung ke perguruan tinggi berdasarkan Akreditasi Program Studi (Prodi).<br><br>Mahasiswa penerima KIP Kuliah Merdeka nantinya juga akan mendapatkan bantuan biaya hidup. Hal ini seperti tercantum dalam Pedoman Pendaftaran KIP Kuliah-KIP Kuliah Merdeka 2022 di laman KIP Kuliah. <br><br>Berapa besaran biaya pendidikan yang akan diberikan? <br><br>Biaya pendidikan diusulkan oleh Perguruan Tinggi pada Puslapdik Kemendidkbudristek dengan besaran sebagai berikut:<br><br>1. Prodi dengan Akreditasi A maksimal sampai Rp12 juta. <br><br>2. Akreditasi B maksimal sebesar R p4 juta. <br><br>3. Akreditasi C maksimal sebesar Rp 2,4 juta.<br><br><br>Pada 2022, biaya hidup mahasiswa juga akan diberikan dalam 5 klaster wilayah biaya hidup, yaitu mulai dari Rp 800 ribu, Rp 950 ribu, Rp 1,1 juta, Rp 1,25 juta, dan Rp 1,4 juta per bulan. Besaran biaya hidup yang diberikan didasarkan pada hasil survei besaran biaya hidup kota/kabupaten dan survei sosial ekonomi nasional yang dilakukan oleh BPS.<br><br>Persyaratan KIP Kuliah untuk UTBK SBMPTN 2022<br><br>1. Penerima KIP Kuliah Merdeka adalah lulusan SMA, SMK, atau bentuk lain yang sederajat yang lulus pada tahun berjalan atau maksimal lulus 2 tahun sebelumnya.<br><br>2. Telah lulus seleksi penerimaan mahasiswa baru melalui semua jalur masuk Perguruan Tinggi Akademik dan Perguruan Tinggi Vokasi dan diterima di PTN maupun PTS pada Program Studi yang telah terakreditasi secara resmi dan tercatat pada sistem akreditasi nasional perguruan tinggi.<br><br>3. Memiliki potensi akademik baik, tetapi memiliki keterbatasan ekonomi atau berasal dari keluarga miskin/rentan miskin dan/atau dengan pertimbangan khusus yang didukung dengan bukti dokumen yang sah.<br><br>Jangka waktu pemberian bantuan<br><br>Program Regular:<br><br>1. Sarjana maksimal 8 semester<br><br>2. Diploma Empat maksimal 8 semester<br><br>3. Diploma Tiga maksimal 6 semester<br><br>4. Diploma Dua maksimal 4 semester<br><br>Program Profesi:<br><br>1. Dokter maksimal 4 semester<br><br>2. Dokter Gigi maksimal 4 semester<br><br>3. Dokter Hewan maksimal 4 semester<br><br>4. Ners maksimal 2 semester<br><br>5. Apoteker maksimal 2 semester<br><br>6. Guru maksimal 2 semester.<br><br><br>Cara Daftar KIP Kuliah untuk UTBK SBMPTN 2022<br><br>Pendaftaran KIP Kuliah 2022 dimulai dengan tahapan pembuatan akun di kip.kuliah.kemdikbud.go.id. Setelah itu, calon mahasiswa bisa mendaftar jalur masuk PTN dan PTS di situs tersebut, termasuk juga jalur UTBK SBMPTN 2022.<br><br>Perlu diingat, mendaftar jalur masuk PTN dan PTS di situs KIP Kuliah berbeda dengan cara mendaftar di jalur masuk itu sendiri.<br><br>Contohnya, jika kamu mendaftar jalur UTBK SBMPTN di laman KIP Kuliah, maka itu artinya kamu memproses agar bisa terdaftar sebagai peserta UTBK SBMPTN dengan KIP Kuliah. Dengan begitu, kamu bisa mendapat gratis biaya ujian.<br><br>Itulah penjelasan seputar KIP Kuliah untuk UTBK SBMPTN 2022, mulai dari jadwal, syarat daftar hingga besaran bantuan yang diterima peserta.</div>', '2022-04-20 08:05:40'),
(10, 'Kampus UMKM Shopee Malang Diresmikan, Yang Ke-8 di Indonesia', 'cobaberita1.jpg', '<div>Shopee meresmikan Kampus UMKM Shopee Malang, Jawa Timur pada Selasa (12/4/2022). Ini adalah kampus Shopee UMKM ke delapan di Indonesia.<br><br>Direktur Eksekutif Shopee Indonesia, Handhika Jahja mengatakan, pihaknya menghadirkan Kampus UMKM Shopee di berbagai kota untuk membantu peningkatan keterampilan digital UMKM lokal agar lebih berdaya saing.<br><br>\"Hari ini kami dengan bangga menghadirkan Kampus UMKM Shopee Malang sebagai solusi atas tantangan yang dihadapi para pelaku UMKM,\" kata Handhika.<br><br>Kampus UMKM Shopee Malang ini berlokasi di UPT Pelatihan Dinas Koperasi dan UKM Provinsi Jawa Timur, Jl. Raya Ki Ageng Gribig, Madyopuro, Kec. Kedungkandang, Kota Malang.<br><br>Kampus UMKM Shopee Malang ini memberikan program pelatihan, fasilitas, dan layanan yang tersedia secara gratis bagi seluruh UMKM yang mencakup:<br><br>Program Pelatihan Intensif<br>Pelaku UMKM dapat mendaftarkan diri untuk mengikuti berbagai kelas yang akan diberikan oleh trainer Shopee, meliputi kelas pendaftaran dan pembuatan toko di Shopee, pengaturan pengiriman dan pengelolaan seller centre, pengembangan usaha, cara mengoptimalkan sistem pemasaran secara digital, serta fitur-fitur penunjang bisnis yang tersedia di aplikasi Shopee.<br><br>Pendampingan Pertumbuhan Bisnis<br>Trainer Shopee akan memberikan bantuan terkait administrasi dan operasional toko, hingga peningkatan performa bisnis termasuk pembukuan.<br><br>Fasilitas Studio Foto<br>Fasilitas ini lengkap dengan peralatan pencahayaan dan fotografer agar UMKM bisa mengambil foto produk yang menarik.<br><br>Fasilitas Ruang Live Streaming<br>Ini diperuntukkan bagi UMKM yang ingin memanfaatkan fitur Shopee Live untuk mempromosikan produk.<br><br>Fasilitas Penunjang<br>Kampus UMKM Shopee Malang ini juga memiliki beberapa fasilitas penunjang seperti ruang pertemuan, pusat edukasi dan simulasi sistem gudang, hingga area pameran produk.<br><br>Handhika menambahkan, Kampus UMKM Shopee Malang dirancang untuk menjadi pusat pertumbuhan UMKM lokal. Mereka bisa datang ke fasilitas ini untuk belajar, berjejaring, dan memanfaatkan berbagai fasilitas untuk meningkatkan keterampilan hingga penjualan.<br><br>\"Shopee hadir sebagai mitra UMKM Indonesia untuk terus tangguh, tumbuh, dan menciptakan dampak positif,” jelas Handhika.</div>', '2022-04-20 08:06:17'),
(11, 'Viral Gegara Sebut Orba Lebih Bebas, Koordinator BEM SI Kaharuddin Beri Koreksi Begini', 'cobaberita3.jpg', '<div>Koordinator BEM SI, Kaharuddin sempat tranding dengan pernyataannya yang menyebutkan jika orde baru atau orban lebih memberikan kebebasan dibandingkan orde lama.<br><br>Pernyataan ini disampaiksan saat diwawancara Hotman Paris di acara yang diempunya. Sontak, pernyataan tersebut langsung menarik perdebatan di media sosial.<br><br>Perdebatan itu membuat Kaharuddin pun menjadi viral di media sosial. Belakangan Koordinator BEM SI memberikan koreksi dan klarifikasi atas pernyataannya tersebut.<br><br>Mahasiswa asal Riau ini pun memberikan klariifikasi atas pernyataan Orde Baru di media sosial. Mulanya dia menegaskan jika akan memberikan koreksi.<br><br>Dia menegaskan jika koreksi berasal dari Ketua BEM SI. Dia menegaskan jika Orde Baru, masyarakat mendapatkan kesejahteraan tetapi tanpa kebebasan dan keadilan.<br><br>\"Koreksi dari Ketua BEM SI: Orde Baru kita dapat kesejahteraan, tapi tanpa kebebasan dan keadilan,\" kata Kaharuddin seperti dikutip Hops.ID-jaringan Suara.com.<br><br>Kaharuddin juga menematkan pernyataan yang seolah memberikan motivasi bagi mahasiswa agar terus memperjuangkan. \"Panjang nafas perjuangan (emoji bunga matahari),\" tegas Kaharuddin.<br><br>Dia pun menambahkan dengan pernyataan jika Order lama, masyarakat mendapatkan kebebasan tetapi kurang mendapatkan kesejahteraan.<br><br>Selain itu,  Reformasi harusnya menjadi sintesa dari orde lama dan orde baru.<br><br>\"Yaitu mendapatkan Kesejahteraan dan Kebebasan, karena itulah cita-cita dan semangat dari reformasi,\" tutup Kaharuddin.<br><br>Kaharuddin adalah mahasiswa Fakultas MIPA dari UNRI yang viral. Saat ditanya tujuan aksi demonstrasi di depan gedung DPR pada 11 April lalu, Kaharuddin menyebutkan mahasiswa tengah memperjuangkan kebebasan dan kesejahteraan rakyat.<br><br>Saat, itu dia kemudian membandingkan kondisi rakyat pada Orde Lama atau era Presiden Sukarno, Order Baru saat dipimpin Presiden Soeharto dan masa kini.</div>', '2022-04-20 08:07:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_galeri`
--

CREATE TABLE `t_galeri` (
  `id` int(3) NOT NULL,
  `judul` varchar(125) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_galeri`
--

INSERT INTO `t_galeri` (`id`, `judul`, `gambar`) VALUES
(4, 'M Advie Rifaldy', 'hero-bg.jpg'),
(6, 'Logo STMIK', 'logo1.jpeg'),
(7, 'Logo CSA', '1649498959723.jpg'),
(8, 'Logo UDMI', 'udmi.jpg'),
(9, 'Prestasi CSA', '11.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_section`
--

CREATE TABLE `t_section` (
  `id` int(1) NOT NULL,
  `section` varchar(25) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_section`
--

INSERT INTO `t_section` (`id`, `section`, `gambar`, `isi`) VALUES
(1, 'Tentang', 'logo.jpg', '<div>STMIK Mardira Indonesia merupakan salah satu kampus favorit calon mahasiswa baru di Jawa Barat.Lokasinya berada di Jalan Soekarno Hatta No 211 40235 Jawa Barat, Indonesia. Setiap tahunnya, kampus ini selalu ramai dipadati calon mahasiswa baru. Sebagai informasi umum, STMIK Mardira Indonesia berdiri pada tanggal 11 February 1998 dengan nomor SK 18. Saat ini, STMIK Mardira Indonesia belum terakreditasi oleh BAN-PT.<br><br>Adapun total jumlah mahasiswa saat ini sekitar 563, dengan total jumlah dosen sebanyak 21. Dengan tenaga pengajar profesional, STMIK Mardira Indonesia mampu menjadikan lulusan memiliki skill dan pengetahuan yang cukup luas. Selain itu, kampus telah dilengkapi dengan sarana dan prasarana pembelajar yang memadai, sehingga memungkinkan mahasiswa dapat fokus belajar demi menggapai asa.<br><br>Bagi mahasiswa yang tertarik masuk ke STMIK Mardira Indonesia, silakan cek informasi mahasiswa baru di laman www.stmik-mi.ac.id. Beberapa contoh jurusan di kampus ini yaitu Teknik Informatika, Komputerisasi Akuntansi, Manajemen Informatika, Teknik Informatika, Komputerisasi Akuntansi, dll. Anda dapat melihat berbagai jurusan yang ada di tabel bawah.<br><br>STMIK Mardira Indonesia di laman Ayokuliah memiliki total smart skor 25.49. Hasil smart skor ini diraih dari total nilai Webo Country, Webo World, 4Icu, QS, Fasilitas Kampus, Fasilitas Terdekat, Jumlah Dosen vs Mahasiswa. Lihat tabel informasi pembagiannya.</div>'),
(2, 'Visi', '11.jpg', '<div>Membentu Manusia intelek yang terunggul dalam ilmu pengetahuan & Teknologi informasi yang mempunyai kwalitas dalam bidang pembangunan perangkat lunak & Pengelolaan Sistem Informasi.</div>'),
(3, 'Misi', '5.jpg', '<ol><li>Memiliki wawasan tentang pemanfaatan komputer dalam berbagai bidang penerapan & penguasaan teknik</li><li>Mampu menganalisa, Merancang, mengimplementasikan Sistem Informasi berbasis Komputer</li><li>Memiliki Kesiapan bersaing di era Teknologi Informasi pada bidang Pemrograman Sistem</li></ol>'),
(4, 'Jurusan', '11.jpg', '<ol><li>Kompterisasi Akutansi</li><li>Manajemen Informatika</li><li>Teknik Informatika - Sistem Informasi</li><li>Teknik Informatika - Rekayasa Perangkat Lunak</li></ol>'),
(6, 'Alamat', '', 'Jl. Soekarno-Hatta No. 211 Leuwipanjang Bandung'),
(7, 'Telepon', '', '(022)-5230382'),
(8, 'Email', '', 'info@stmik-mi.ac.id'),
(9, 'Whatsapp', '', '+62 813-9512-1113');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_ukm`
--

CREATE TABLE `t_ukm` (
  `id` int(2) NOT NULL,
  `nama` varchar(125) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_ukm`
--

INSERT INTO `t_ukm` (`id`, `nama`, `gambar`) VALUES
(1, 'Badan Eksekutif Mahasiswa (BEM)', 'WhatsApp_Image_2022-04-20_at_10_06_19.jpeg'),
(2, 'Creative Student Association (CSA)', 'WhatsApp_Image_2022-04-20_at_15_26_05_(1).jpeg'),
(3, 'Komunitas Seni dan Teater (KST)', 'WhatsApp_Image_2022-04-20_at_10_17_23.jpeg'),
(4, 'Unit Dakwah Mahasiswa Islam (UDMI)', 'WhatsApp_Image_2022-04-20_at_10_21_56.jpeg'),
(5, 'Persekutuan Mahasiswa Kristen (PMK)', 'WhatsApp_Image_2022-04-20_at_10_23_50.jpeg'),
(6, 'Himpunan Mahasiswa Pecinta Alam WALET', 'WhatsApp_Image_2022-04-20_at_10_11_48.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `t_admin`
--
ALTER TABLE `t_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `t_berita`
--
ALTER TABLE `t_berita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `t_galeri`
--
ALTER TABLE `t_galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `t_section`
--
ALTER TABLE `t_section`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `t_ukm`
--
ALTER TABLE `t_ukm`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `t_admin`
--
ALTER TABLE `t_admin`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `t_berita`
--
ALTER TABLE `t_berita`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `t_galeri`
--
ALTER TABLE `t_galeri`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `t_section`
--
ALTER TABLE `t_section`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `t_ukm`
--
ALTER TABLE `t_ukm`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
