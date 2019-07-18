-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Jul 2019 pada 08.44
-- Versi server: 10.1.35-MariaDB
-- Versi PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pakar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_data_rule`
--

CREATE TABLE `tb_data_rule` (
  `kd_rule` varchar(11) NOT NULL,
  `kd_penyakit` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_data_rule`
--

INSERT INTO `tb_data_rule` (`kd_rule`, `kd_penyakit`) VALUES
('R01', 'P01'),
('R02', 'P01'),
('R03', 'P03'),
('R04', 'P04'),
('R05', 'P05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_detail_rule`
--

CREATE TABLE `tb_detail_rule` (
  `kd_detail_rule` int(50) NOT NULL,
  `kd_rule` varchar(50) NOT NULL,
  `kd_gejala` varchar(50) NOT NULL,
  `bobot` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_detail_rule`
--

INSERT INTO `tb_detail_rule` (`kd_detail_rule`, `kd_rule`, `kd_gejala`, `bobot`) VALUES
(1, 'R01', 'G01', '1'),
(2, 'R01', 'G02', '1'),
(3, 'R01', 'G03', '1'),
(4, 'R01', 'G04', '1'),
(5, 'R01', 'G05', '1'),
(6, 'R01', 'G06', '2'),
(7, 'R01', 'G07', '2'),
(8, 'R01', 'G08', '2'),
(9, 'R01', 'G09', '2'),
(10, 'R01', 'G10', '2'),
(11, 'R01', 'G11', '2'),
(12, 'R01', 'G12', '2'),
(13, 'R01', 'G13', '2'),
(14, 'R01', 'G14', '2'),
(15, 'R01', 'G15', '2'),
(16, 'R01', 'G16', '2'),
(17, 'R01', 'G17', '2'),
(18, 'R01', 'G18', '2'),
(19, 'R01', 'G19', '2'),
(20, 'R01', 'G20', '2'),
(21, 'R01', 'G21', '2'),
(22, 'R01', 'G22', '2'),
(23, 'R01', 'G23', '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gejala`
--

CREATE TABLE `tb_gejala` (
  `kd_gejala` varchar(50) NOT NULL,
  `gejala` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_gejala`
--

INSERT INTO `tb_gejala` (`kd_gejala`, `gejala`) VALUES
('G01', ' Bercak coklat keputihan'),
('G02', 'Pelepah kering'),
('G03', 'Bercak pada malai'),
('G04', 'Bercak pada biji'),
('G05', 'Bulir padi hampa (kosong)'),
('G06', 'Daun busuk yang dimulai dengan adanya bercak berbentuk belahketupat kemudian bercak maeluas menuruti urat tulang daun, kadang-kandang beberapa bercak daun bergabung menjadi satu seperti terbakar (malai belum keluar)'),
('G07', 'Pangkal batang tanaman mengkerut, berwarna coklat kehitaman dan mudah rebah'),
('G08', 'Pelepah daun terlihat bercak basah berbentuk bulat, bercak membesar dengan bagian tengah berwarna abu-abu dan bagian tepi berwarna coklat'),
('G09', 'Bercak abu kehijauan pada pelepah daun dekat permukaan air'),
('G10', 'Tanaman mati'),
('G11', 'Tanaman menjadi kerdil'),
('G12', 'Pertumbuhan tidak normal'),
('G13', 'Daun-daun memendek, menyempit, kaku'),
('G14', 'Warna daun hijau kekuningan dipenuhi bercak seperti karat'),
('G15', 'Warna daun menjadi kuning sampai coklat yang dimulai dari ujung daun'),
('G16', 'Pembentukan dan perkembangan akar terhambat'),
('G17', 'Pembentukan bunga tertunda'),
('G18', 'Bercak pada daun warna hijau pucat'),
('G19', 'Waktu panen tertunda'),
('G20', 'Tepi daun terdapat garis gelombang berwarna kuning'),
('G21', 'Pelepah daun menguning'),
('G22', 'Daun menjadi hijau kelabu dan menggulung dibagian ujung dan tepi daun'),
('G23', 'Terdapat bercak kuning pada daun yang dimulai dari ujung daun kemudian menjalar ke bawah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_hasildiagnosa`
--

CREATE TABLE `tb_hasildiagnosa` (
  `id_diagnosa` int(11) NOT NULL,
  `presentase` varchar(50) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_relasi` int(11) NOT NULL,
  `kd_kendali` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kendali`
--

CREATE TABLE `tb_kendali` (
  `kd_kendali` varchar(50) NOT NULL,
  `kendali` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kendali`
--

INSERT INTO `tb_kendali` (`kd_kendali`, `kendali`) VALUES
('K01', 'Pemupukan berimbang, Penanaman varietas tahan, pergiliran varietas tahan, Hindari waktu tanam dimana pada saat keluar malai dan awal berbunga terdapat banayak embun, curah hujan, kelembaban, dan kecepatan angin semakin tinggi pula intensitas blas. Membakar jerami dari pertanaman yang sakit untuk mengurangi sumber jamur.'),
('K02', 'Pemupukan berimbang, Perbaikan sarana tata air, menggunakan fungisida berbahan aktif antara lain : difenokonazol, heksakonazol, belerang, tembaga tiodozol, metribuzin'),
('K03', 'Pengendalian hayati Antagois Trichoderma harzianum. Penyemprotan pada bagian pangkal maupun padi secara merata pada sore hari, Fungisida dengan dosis yang tepat Beberapa fungisida yang dapat digunakan : Metribuzin, mankozeb, Fenbekunazol'),
('K04', 'Pemupukan berimbang, Menggunakan biji yang bebas penyakit dengan cara seed treatment sebelum penanaman, Pengendalian hayati dengan non-patogenik Fussarium Trichoderma spp');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penyakit`
--

CREATE TABLE `tb_penyakit` (
  `kd_penyakit` varchar(50) NOT NULL,
  `penyakit` text NOT NULL,
  `deskripsi` text NOT NULL,
  `kendali` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_penyakit`
--

INSERT INTO `tb_penyakit` (`kd_penyakit`, `penyakit`, `deskripsi`, `kendali`) VALUES
('P01', 'Blas (Pyricularia Oryzae Cav.)', 'Penyakit blas disebabkan oleh jamur Pyricularia  grisea. Awalnya penyakit ini berkembang di pertanaman padi gogo, tetapi akhir-akhir ini sudah menyebar di lahan sawah irigasi. Di sentra-sentra produksi padi Jawa Barat seperti di Karawang, Subang, dan Indramayu; Jawa Tengah  di Pemalang, Pati, Sragen, dan Banyumas; Jawa Timur di Lamongan, Jombang, Pasuruan, Probolinggo dan Lumajang, penyakit blas banyak ditemukan berkembang di pertanaman padi sawah.', ''),
('P02', 'Hawar Pelepah daun dan busuk Batang (Rhizoctonia solani kuhn).', 'Penyakit busuk pelepah atau hawar upih daun yang disebabkan oleh Rhizoctonia solani merupakan penyakit utama pada tanaman jagung dan sorgum yang dan penyebarannya semakin luas. Cendawan R. solani adalah patogen tular tanah yang banyak merusak tanaman, mempunyai kemampuan adaptasi yang tinggi, dan dapat bertahan hidup dalam tanah dengan waktu yang lama dalam bentuk sklerotia', ''),
('P03', 'Kerdil rumput (Grassy stunt)', 'Tanaman yang terinfeksi berat akan menjadi kerdil dengan anakan yang berlebihan. Daun tanaman padi menjadi sempit, pendek, kaku, berwarna hijau pucat sampai hijau, dan kadang-kadang terdapat bercak karat. Tanaman yang terinfeksi biasanya dapat hidup sampai fase pemasakan tetapi tidak memproduksi malai. Stadia pertumbuhan tanaman yang paling rentan adalah pada saat tanam pindah sampai bunting. Penyakit ini disebabkan oleh virus yang ditularkan oleh wereng coklat dan tanaman inangnya haya padi. Cara pengendiannya dilakukan terhadap vektornya yaitu wereng coklat.', ''),
('P04', 'Tungro', 'Tungro merupakan penyakit yang disebabkan oleh infeksi ganda dari 2 jenis virus yang berlainan. Kedua virus yang dimaksud adalah Rice Tungro Spherical Virus (RTSV) dan Rice Tungro Bacilliform Virus (RTBV). Sebenarnya, penyakit ini bisa ditularkan oleh beberapa jenis hewan serangga, tetapi yang paling cepat menularkan dan menyebarkannya adalah spesies wereng hijau. Penyebaran tungro sangat dipengaruhi oleh populasi wereng hijau. Dengan kata lain, semakin padat dan luas populasi wereng hijau, maka semakin luas penyebaran penyakitnya. Jadi, penyakit tungro dan wereng hijau memang berkesinambungan. Untuk bisa mengatasi penyakitnya, mau tidak mau harus membasmi wereng hijau. ', ''),
('P05', 'Hawar daun bakteri (HDB)  (Xanthomonas campestris pv.oryzae.)', 'Penyakit hawar daun bakteri (HDB) merupakan salah satu penyakit penting tanaman padi di negaranegara penghasil padi, termasuk di Indonesia. Penyakit ini disebabkan oleh bakteri Xanthomonas oryzae pv. oryzae (Xoo). Patogen ini menginfeksi daun padi pada semua fase pertumbuhan tanaman, mulai dari pesemaian sampai menjelang panen. ', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jk` varchar(50) NOT NULL,
  `alamat` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `level`, `nama`, `jk`, `alamat`) VALUES
(1, 'irinwindiyati48@gmail.com', 'admin', 'admin', 'Irin Windiyati', 'perempuan', 'karpel'),
(2, 'irin', 'user', 'user', 'irin', 'perempuan', 'kedokan'),
(3, 'windi', 'pakar', 'pakar', 'Windiyati', 'perempuan', 'kedokan'),
(4, 'windi', 'pakar', 'pakar', 'Windiyati', 'perempuan', 'kedokan');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_data_rule`
--
ALTER TABLE `tb_data_rule`
  ADD PRIMARY KEY (`kd_rule`);

--
-- Indeks untuk tabel `tb_detail_rule`
--
ALTER TABLE `tb_detail_rule`
  ADD PRIMARY KEY (`kd_detail_rule`);

--
-- Indeks untuk tabel `tb_gejala`
--
ALTER TABLE `tb_gejala`
  ADD PRIMARY KEY (`kd_gejala`);

--
-- Indeks untuk tabel `tb_hasildiagnosa`
--
ALTER TABLE `tb_hasildiagnosa`
  ADD PRIMARY KEY (`id_diagnosa`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_relasi` (`id_relasi`),
  ADD KEY `kd_kendali` (`kd_kendali`);

--
-- Indeks untuk tabel `tb_kendali`
--
ALTER TABLE `tb_kendali`
  ADD PRIMARY KEY (`kd_kendali`);

--
-- Indeks untuk tabel `tb_penyakit`
--
ALTER TABLE `tb_penyakit`
  ADD PRIMARY KEY (`kd_penyakit`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_detail_rule`
--
ALTER TABLE `tb_detail_rule`
  MODIFY `kd_detail_rule` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `tb_hasildiagnosa`
--
ALTER TABLE `tb_hasildiagnosa`
  MODIFY `id_diagnosa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_hasildiagnosa`
--
ALTER TABLE `tb_hasildiagnosa`
  ADD CONSTRAINT `tb_hasildiagnosa_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`),
  ADD CONSTRAINT `tb_hasildiagnosa_ibfk_2` FOREIGN KEY (`id_relasi`) REFERENCES `tb_rule` (`id_rule`),
  ADD CONSTRAINT `tb_hasildiagnosa_ibfk_3` FOREIGN KEY (`kd_kendali`) REFERENCES `tb_kendali` (`kd_kendali`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
