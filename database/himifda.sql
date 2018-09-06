-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2018 at 07:49 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `himifda`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `id` int(5) NOT NULL,
  `nim` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `angkatan` int(5) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp` int(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tgl_lahir` varchar(20) NOT NULL,
  `agama` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`id`, `nim`, `nama`, `angkatan`, `jk`, `alamat`, `no_hp`, `email`, `tempat_lahir`, `tgl_lahir`, `agama`) VALUES
(1, 2012233, 'nle', 20122, 'p', 'ala', 3333, 'email1@gmail.com', 'temp', '2018-07-03', 'agama'),
(2, 2015230071, 'jungkook', 13, 'jk', 'al', 9999999, 'email@gmail.com', 'tl', '2018-07-06', 'ag'),
(4, 201517817, 'seo in guk', 2015, 'l', 'seoul', 897198711, 'jhg@gmail.com', 'seoul', '2018-09-10', 'islam');

-- --------------------------------------------------------

--
-- Table structure for table `anggota_resmi`
--

CREATE TABLE `anggota_resmi` (
  `id` int(5) NOT NULL,
  `nim` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nama_panggilan` varchar(30) NOT NULL,
  `angkatan` int(5) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` varchar(10) NOT NULL,
  `jabatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota_resmi`
--

INSERT INTO `anggota_resmi` (`id`, `nim`, `nama`, `nama_panggilan`, `angkatan`, `jk`, `alamat`, `no_hp`, `email`, `tempat_lahir`, `tgl_lahir`, `agama`, `jabatan`) VALUES
(5, 2015230004, 'Riska Amelia', 'dua', 2015, 'P', 'tiga', '897917917', 'sembilan@gmail.com', 'bekasi', '2018-07-05', 'tujuh', 'Kabid Iptek'),
(6, 2015230078, 'Irza Faraby Bahalwan', 'Peyem', 2015, 'L', 'Bekasi', '2147483647', 'farabyirza53@gmail.com', 'nganjuk', '2018-07-10', 'islam', 'Ketua Himpunan'),
(7, 2105230019, 'gita', 'gijun', 78, 'p', 'bekasi', '097979797', 'ghg@gmail.com', 'bekasi', '2018-09-12', 'islam', 'gjhg');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(30) NOT NULL,
  `kode_berita` varchar(30) NOT NULL,
  `tgl` date NOT NULL,
  `judul` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `read_more` varchar(40) NOT NULL,
  `deskripsi` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(5) NOT NULL,
  `answer` varchar(200) NOT NULL,
  `question` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `answer`, `question`) VALUES
(1, 'Himpunan Mahasiswa Informatika Universitas Darma Persada', 'Apakah kepanjangan dari HIMIFDA?');

-- --------------------------------------------------------

--
-- Table structure for table `galery`
--

CREATE TABLE `galery` (
  `id` int(11) NOT NULL,
  `foto` varchar(60) NOT NULL,
  `caption` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galery`
--

INSERT INTO `galery` (`id`, `foto`, `caption`) VALUES
(1, '../galery/himifda.jpg', 'himifda'),
(2, '../galery/1.jpg', 'djbjkzbfjdsgfjshfsjdgfjzdshjz\\gfz\\s'),
(3, '../galery/2.jpg', 'jdsfjksdgfkashKLAGfsjk.gfdsjkgfdsjk');

-- --------------------------------------------------------

--
-- Table structure for table `info_beasiswa`
--

CREATE TABLE `info_beasiswa` (
  `id` int(5) NOT NULL,
  `beasiswa` varchar(40) NOT NULL,
  `info_beasiswa` varchar(50) NOT NULL,
  `tgl` date NOT NULL,
  `penyelenggara` varchar(50) NOT NULL,
  `file` varchar(100) NOT NULL,
  `deskripsi` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ipk`
--

CREATE TABLE `ipk` (
  `id` int(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nim` int(10) NOT NULL,
  `semester` int(5) NOT NULL,
  `ipk` varchar(5) NOT NULL,
  `ips` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ipk`
--

INSERT INTO `ipk` (`id`, `nama`, `nim`, `semester`, `ipk`, `ips`) VALUES
(5, 'Bagus Budhi Riyanto', 2016230148, 3, '3,73', '3,57'),
(6, 'Riska Amelia', 2015230004, 5, '3,44', '3,58'),
(7, 'Dinda Putri Hardanti', 2015230082, 5, '3,59', '3,50');

-- --------------------------------------------------------

--
-- Table structure for table `kalender_akademik`
--

CREATE TABLE `kalender_akademik` (
  `id` int(5) NOT NULL,
  `kegiatan` varchar(100) NOT NULL,
  `tglmulai` date NOT NULL,
  `tglselesai` date NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `libur` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id` int(5) NOT NULL,
  `kode_event` varchar(50) NOT NULL,
  `tgl` date NOT NULL,
  `nama_kegiatan` varchar(30) NOT NULL,
  `bidang` varchar(20) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `deskripsi` varchar(5000) NOT NULL,
  `kegiatan` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id`, `kode_event`, `tgl`, `nama_kegiatan`, `bidang`, `gambar`, `deskripsi`, `kegiatan`) VALUES
(7, '76876', '2016-09-09', 'HIFASCO 2016', 'IPTEK', '../../../../images/40.jpeg', 'HIFASCO 2016 - HIMIFDA Seminar and Competition 2016', 'HIFASCO adalah salah satu program kerja di Himpunan Mahasiswa Informatika Universitas Darma Persada. HIFASCO sendiri merupakan kepanjangan dari HIMIFDA Seminar and Competition.'),
(8, '98798', '2016-09-27', 'Wisuda ke-26 UNSADA', '-', '../../../../images/41.jpeg', 'Foto HIMIFDA ALL BASE Wisuda ke-26 UNSADA', 'Foto bersama para lulusan teknik informatika dengan keluarga HIMIFDA ALL BASE pada Wisuda ke-26 UNSADA'),
(9, '7987', '2018-09-02', 'DEVTALK I', 'IPTEK', '../../../../images/42.jpeg', 'DEVTALK I - DEVELOPER TALK I ( Pertama ) yang bertempat di Ruang Seminar Fakultas Teknologi Kelautan, lantai 3.', 'DEVTALK I merupakan kepanjangan dari Developer Talk I. DEVTALK merupakan salah satu program kerja yang ada di Himpunan Mahasiswa Informatika Universitas Darma Persada.');

-- --------------------------------------------------------

--
-- Table structure for table `kritiksaran`
--

CREATE TABLE `kritiksaran` (
  `id` int(5) NOT NULL,
  `email` varchar(50) NOT NULL,
  `kritik` varchar(200) NOT NULL,
  `saran` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kritiksaran`
--

INSERT INTO `kritiksaran` (`id`, `email`, `kritik`, `saran`) VALUES
(1, 'email@gmail.com', 'kri', 'sar'),
(3, 'erma@gmail.com', 'kritik', 'kjh'),
(4, 'erma@gmail.com', 'hgh', 'hgh'),
(5, 'erma@gmail.com', 'hgjh', 'jghj\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `mata_kuliah`
--

CREATE TABLE `mata_kuliah` (
  `id` int(5) NOT NULL,
  `semester` int(5) NOT NULL,
  `mata_kuliah` varchar(30) NOT NULL,
  `bobot_sks` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `modul`
--

CREATE TABLE `modul` (
  `id` int(5) NOT NULL,
  `Semester` varchar(100) NOT NULL,
  `Mata_Kuliah` varchar(100) NOT NULL,
  `Judul_Materi` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `modul`
--

INSERT INTO `modul` (`id`, `Semester`, `Mata_Kuliah`, `Judul_Materi`, `file`) VALUES
(19, '6', 'Praktikum Mobile Computing', 'Pengenalan Android', '../modul/Praktikum 1 MC.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `sejarah`
--

CREATE TABLE `sejarah` (
  `id` int(40) NOT NULL,
  `sejarah` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `struktural`
--

CREATE TABLE `struktural` (
  `id` int(5) NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `tgl_upload` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `struktural`
--

INSERT INTO `struktural` (`id`, `nama_file`, `deskripsi`, `tgl_upload`) VALUES
(18, '../../../images/periodedua.jpg', 'Structure of HIMIFDA Periode 2018', '2018-09-04');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`) VALUES
(1, 'himifdaa', 'admin', '3d5ecd506443410b40692e95efbb9ed9'),
(4, 'erma', 'erma', '0be574d221b6e8226582695acf048b86');

-- --------------------------------------------------------

--
-- Table structure for table `visimisi`
--

CREATE TABLE `visimisi` (
  `id` int(5) NOT NULL,
  `visi` varchar(500) NOT NULL,
  `misi` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visimisi`
--

INSERT INTO `visimisi` (`id`, `visi`, `misi`) VALUES
(1, 'Menjadi institusi Pendidikan yang unggul dibidang Teknologi Informasi dan tanggap terhadap perkembangan ilmu pengetahuan dan teknologi, serta kebutuhan pengguna.', 'Menyelenggarakan program studi dibidang Teknik Informatika dengan kurikulum berbasis kompetensi.'),
(2, '', 'Melakukan kerjasama dengan pihak luar yang terkait dengan bidang Teknik Informatika.'),
(4, '', 'Menyelenggarakan pelatihan-pelatihan perangkat lunak (Software) dan perangkat keras (Hardware).');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `anggota_resmi`
--
ALTER TABLE `anggota_resmi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galery`
--
ALTER TABLE `galery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info_beasiswa`
--
ALTER TABLE `info_beasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ipk`
--
ALTER TABLE `ipk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kalender_akademik`
--
ALTER TABLE `kalender_akademik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kritiksaran`
--
ALTER TABLE `kritiksaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modul`
--
ALTER TABLE `modul`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sejarah`
--
ALTER TABLE `sejarah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `struktural`
--
ALTER TABLE `struktural`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `visimisi`
--
ALTER TABLE `visimisi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `anggota_resmi`
--
ALTER TABLE `anggota_resmi`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `galery`
--
ALTER TABLE `galery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `info_beasiswa`
--
ALTER TABLE `info_beasiswa`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ipk`
--
ALTER TABLE `ipk`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kalender_akademik`
--
ALTER TABLE `kalender_akademik`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `kritiksaran`
--
ALTER TABLE `kritiksaran`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `modul`
--
ALTER TABLE `modul`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `sejarah`
--
ALTER TABLE `sejarah`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `struktural`
--
ALTER TABLE `struktural`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `visimisi`
--
ALTER TABLE `visimisi`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
