-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 24 Mei 2015 pada 04.06
-- Versi Server: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ujianonline`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jawaban`
--

CREATE TABLE IF NOT EXISTS `jawaban` (
  `id` int(11) NOT NULL,
  `npm` varchar(255) NOT NULL,
  `id_soal` varchar(255) NOT NULL,
  `no_soal` varchar(255) NOT NULL,
  `jawaban` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `npm` varchar(255) NOT NULL,
  `nama_mhs` varchar(255) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`npm`, `nama_mhs`, `kelas`, `semester`, `password`) VALUES
('15010101001', 'adi purwadi', 'MI-R', 'I', 'e10adc3949ba59abbe56e057f20f883e'),
('15010101002', 'alief r. m', 'MI-R', 'I', 'e10adc3949ba59abbe56e057f20f883e'),
('15010101004', 'andika f. s.', 'MI-R', 'I', 'e10adc3949ba59abbe56e057f20f883e'),
('15010101005', 'ari s. u.', 'MI-R', 'I', 'e10adc3949ba59abbe56e057f20f883e'),
('15010101006', 'dede m. f.', 'MI-R', 'I', 'e10adc3949ba59abbe56e057f20f883e'),
('15010101007', 'dedi s.', 'MI-R', 'I', 'e10adc3949ba59abbe56e057f20f883e'),
('15010101009', 'ferdi g.', 'MI-R', 'I', 'e10adc3949ba59abbe56e057f20f883e'),
('15010101011', 'galang a.', 'MI-R', 'I', 'e10adc3949ba59abbe56e057f20f883e'),
('15010101012', 'gigih g. m.', 'MI-R', 'I', 'e10adc3949ba59abbe56e057f20f883e'),
('15010101013', 'heriyandi', 'MI-R', 'I', 'e10adc3949ba59abbe56e057f20f883e'),
('15010101014', 'juhanadi', 'MI-R', 'I', 'e10adc3949ba59abbe56e057f20f883e'),
('15010101017', 'm. alimuddin', 'MI-R', 'I', 'e10adc3949ba59abbe56e057f20f883e'),
('15010101020', 'rahmat', 'MI-R', 'I', 'e10adc3949ba59abbe56e057f20f883e'),
('15010101023', 'sadam husen', 'MI-R', 'I', 'e10adc3949ba59abbe56e057f20f883e'),
('15010101026', 'taufik r.', 'MI-R', 'I', 'e10adc3949ba59abbe56e057f20f883e'),
('15010101027', 'wahid n.', 'MI-R', 'I', 'e10adc3949ba59abbe56e057f20f883e'),
('15010102003', 'amalia', 'MI-R', 'I', 'e10adc3949ba59abbe56e057f20f883e'),
('15010102008', 'erica tamara', 'MI-R', 'I', 'e10adc3949ba59abbe56e057f20f883e'),
('15010102010', 'fuani r.', 'MI-R', 'I', 'e10adc3949ba59abbe56e057f20f883e'),
('15010102015', 'khairun nisa', 'MI-R', 'I', 'e10adc3949ba59abbe56e057f20f883e'),
('15010102016', 'lima putri a.', 'MI-R', 'I', 'e10adc3949ba59abbe56e057f20f883e'),
('15010102019', 'maryana', 'MI-R', 'I', 'e10adc3949ba59abbe56e057f20f883e'),
('15010102022', 'riska desta s.', 'MI-R', 'I', 'e10adc3949ba59abbe56e057f20f883e'),
('15010102024', 'saputri a.', 'MI-R', 'I', 'e10adc3949ba59abbe56e057f20f883e'),
('15010102025', 'selfiana', 'MI-R', 'I', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE IF NOT EXISTS `nilai` (
  `id` int(10) NOT NULL,
  `npm` varchar(255) NOT NULL,
  `id_soal` varchar(255) NOT NULL,
  `nilai` varchar(255) NOT NULL,
  `jumlah_benar` varchar(255) NOT NULL,
  `jumlah_soal` varchar(255) NOT NULL,
  `matkul` varchar(255) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `soal`
--

CREATE TABLE IF NOT EXISTS `soal` (
  `id` int(11) NOT NULL,
  `id_soal` varchar(255) NOT NULL,
  `no_soal` varchar(255) NOT NULL,
  `soal` text NOT NULL,
  `jwb_benar` varchar(255) NOT NULL,
  `jmlh_soal` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `matkul` varchar(255) NOT NULL,
  `pembuat` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `soal`
--

INSERT INTO `soal` (`id`, `id_soal`, `no_soal`, `soal`, `jwb_benar`, `jmlh_soal`, `semester`, `kelas`, `matkul`, `pembuat`) VALUES
(1, 'IMI-RProgram Aplikasi', '1', 'berikut ini termasuk program aplikasi word prosesor bawaan microsoft windoes adalah\r\nA. Internet Explorer\r\nB. Windows Explorer\r\nC. MIcrosoft Word\r\nD. Soliter\r\nE. Word Pad', 'E', '40', 'I', 'MI-R', 'Program Aplikasi', ''),
(2, 'IMI-RProgram Aplikasi', '2', 'Nama tempat untuk menyimpan pengelompokan beberapa file terutama yang sejenis, adalah..\r\nA. Explorer\r\nB. Folder\r\nC. Drive\r\nD. Dokumen\r\nE. Desktop', 'B', '40', 'I', 'MI-R', 'Program Aplikasi', ''),
(3, 'IMI-RProgram Aplikasi', '3', 'Shortcut perintah yang digunakan untuk membuka lembar kerja baru, adalah...\r\n\r\nA. Alt+N\r\nB. Ctrl+N\r\nC. Shift+N\r\nD. Alt+Ctrl+N\r\nE. Space+N', 'B', '40', 'I', 'MI-R', 'Program Aplikasi', ''),
(4, 'IMI-RProgram Aplikasi', '4', 'Kegunaan tombol "Caps Lock" pada pengeditan dokumen pada aplikasi microsoft word adalah...\r\n\r\nA. Mengunci kata menjadi besar\r\nB. Mengunci huruf menjadi besar\r\nC. Mengunci kalimat menjadi besar\r\nD. Mengunci Paragraf Menjadi besar\r\nE. Mengunci naskah menjadi besar', 'B', '40', 'I', 'MI-R', 'Program Aplikasi', ''),
(5, 'IMI-RProgram Aplikasi', '5', 'Perintah untuk menampilkan fasilitas header dan footer adalah..\r\n\r\nA. Format-header and footer\r\nB. File-header and footer\r\nC. View-header and footer\r\nD. Tools-header and footer\r\nE. Edit-header and footer', 'C', '40', 'I', 'MI-R', 'Program Aplikasi', ''),
(6, 'IMI-RProgram Aplikasi', '6', 'perintah untuk mencetak dokumen ke layar, adalah...\r\n\r\nA. file-print out\r\nB. File-page print\r\nC. file-print preview\r\nD. file-print\r\nE. File-print-preview', 'C', '40', 'I', 'MI-R', 'Program Aplikasi', ''),
(7, 'IMI-RProgram Aplikasi', '7', 'Fungsi dari tombol X yang terdapat pada ujung kanan suatu tampilan windows adalah..\r\n\r\nA. Restore\r\nB. Maximize\r\nC. Minimize\r\nD. Close\r\nE. Save', 'D', '40', 'I', 'MI-R', 'Program Aplikasi', ''),
(8, 'IMI-RProgram Aplikasi', '8', 'fasilitas yang digunakan untuk membuat tulisan matematika dalam micosoft word, adalah...\r\n\r\nA. Symbol\r\nB. Equation\r\nC. Diagram\r\nD. Shape\r\nE. Word Art', 'B', '40', 'I', 'MI-R', 'Program Aplikasi', ''),
(9, 'IMI-RProgram Aplikasi', '9', 'Perintah untuk mengubah ukuran kertas adalah...\r\n\r\nA. Picture\r\nB. Page setup\r\nC. Page number\r\nD. Header\r\nE. Footer', 'B', '40', 'I', 'MI-R', 'Program Aplikasi', ''),
(10, 'IMI-RProgram Aplikasi', '10', 'Penyedia akses internet, disebut..\r\n\r\nA. Protokol\r\nB. Provider\r\nC. Server\r\nD. Situs\r\nE. Browser', 'B', '40', 'I', 'MI-R', 'Program Aplikasi', ''),
(11, 'IMI-RProgram Aplikasi', '11', 'Manakah yang merupakan browser?\r\n\r\nA. Ms. Word\r\nB. Adobe Photoshop\r\nC. Paint\r\nD. Internet Explorer\r\nE. Corel draw', 'D', '40', 'I', 'MI-R', 'Program Aplikasi', ''),
(12, 'IMI-RProgram Aplikasi', '12', 'Aplikasi manakah yang dapat digunakan sebagai pengolah vektor?\r\n\r\nA. Ms. Word\r\nB. Ms. Excel\r\nC. mozilla\r\nD. Internet Explorer\r\nE. Adobe Illustrator ', 'E', '40', 'I', 'MI-R', 'Program Aplikasi', ''),
(13, 'IMI-RProgram Aplikasi', '13', 'surat yang berbentuk elektronik dan dikirim dengan jaringan internet, disebut..\r\n\r\nA. Chatting\r\nB. E-Mail\r\nC. Sending\r\nD. MIRC\r\nE. Telnet', 'B', '40', 'I', 'MI-R', 'Program Aplikasi', ''),
(14, 'IMI-RProgram Aplikasi', '14', 'manakah dibawah ini, yang merupakan browser bawaan microsoft windows?\r\n\r\nA. Mozilla\r\nB. Safari\r\nC. Internet Explorer\r\nD. Google Chrome\r\nE. Opera Mini', 'C', '40', 'I', 'MI-R', 'Program Aplikasi', ''),
(15, 'IMI-RProgram Aplikasi', '15', 'Proses pengambilan data dari internet disebut...\r\n\r\nA. Upload\r\nB. Download\r\nC. Copy\r\nD. Loading\r\nE. Get', 'B', '40', 'I', 'MI-R', 'Program Aplikasi', ''),
(16, 'IMI-RProgram Aplikasi', '16', 'Salah satu fasilitas internet yang dijalankan melalui browser untuk mencari informasi yang diinginkan adalah...\r\n\r\nA. Search Engine\r\nB. Portal\r\nC. Situs\r\nD. Web site\r\nE. Spider', 'A', '40', 'I', 'MI-R', 'Program Aplikasi', ''),
(17, 'IMI-RProgram Aplikasi', '17', 'Bagian komputer yang berfungsi sebagai otak pemrosesan data adalah...\r\n\r\nA. Hardisk\r\nB. Processor\r\nC. Memory\r\nD. Sound card\r\nE. Vga card', 'B', '40', 'I', 'MI-R', 'Program Aplikasi', ''),
(18, 'IMI-RProgram Aplikasi', '18', 'Microsoft windows xp profesional termasuk ke dalam bagian software...\r\n\r\nA. Sistem pengolah data\r\nB. Sistem operasi\r\nC. Sistem pengolah kata\r\nD. Sistem pengolah angka\r\nE. Browser', 'B', '40', 'I', 'MI-R', 'Program Aplikasi', ''),
(19, 'IMI-RProgram Aplikasi', '19', 'Microsoft office word termasuk ke dalam bagian software....\r\n\r\nA. Sistem pengolah data\r\nB. Sistem operasi\r\nC. Sistem pengolah kata\r\nD. Sistem pengolah angka\r\nE. Browser', 'C', '40', 'I', 'MI-R', 'Program Aplikasi', ''),
(20, 'IMI-RProgram Aplikasi', '20', 'Cara membuka file dalam Microsoft word adalah..\r\n\r\nA. file-page setup\r\nB. file-new\r\nC. file print previes\r\nD. file-open\r\nE. file-save', 'D', '40', 'I', 'MI-R', 'Program Aplikasi', ''),
(21, 'IMI-RProgram Aplikasi', '21', 'Microsoft excel merupakan software yang termasuk ke dalam kelompok...\r\n\r\nA. SpreadSheet\r\nB. Word Processor\r\nC. Design Graphic\r\nD. Bahasa Pemrograman\r\nE. Aplikasi Database', 'A', '40', 'I', 'MI-R', 'Program Aplikasi', ''),
(22, 'IMI-RProgram Aplikasi', '22', 'Ms. Excel merupakan software keluaran dari..\r\n\r\nA. Borland Delphi\r\nB. Microsoft Corporation\r\nC. Apple Macintos\r\nD. Software House\r\nE. Adobe', 'B', '40', 'I', 'MI-R', 'Program Aplikasi', ''),
(23, 'IMI-RProgram Aplikasi', '23', 'Folder yang berfungsi sebagai tempat menyimpan email yang masuk pada yahoo mail, adalah...\r\n\r\nA. Inbox\r\nB. Outbox\r\nC. Draft\r\nD. Trash\r\nE. Check mail', 'A', '40', 'I', 'MI-R', 'Program Aplikasi', ''),
(24, 'IMI-RProgram Aplikasi', '24', 'Folder yang berfungsi sebagai tempat menyimpan email yang pernah dikirim pada yahoo mail, adalah...\r\n\r\nA. Inbox\r\nB. Outbox\r\nC. Draft\r\nD. Trash\r\nE. Check mail', 'B', '40', 'I', 'MI-R', 'Program Aplikasi', ''),
(25, 'IMI-RProgram Aplikasi', '25', 'Perangkat lunak yang berfungsi menjembatani manusia dan komputer dalam hal intruksi atau perintah, disebut..\r\n\r\nA. Terminal\r\nB. Sistem Operasi\r\nC. Software Aplikasi\r\nD. Antivirus\r\nE. Periferal', 'C', '40', 'I', 'MI-R', 'Program Aplikasi', ''),
(26, 'IMI-RProgram Aplikasi', '26', 'Versi Terakhir sistem operasi windows yang sudah dirilis, adalah..\r\n\r\nA. Windows Xp\r\nB. Windows 7\r\nC. Windows 8\r\nD. Windows 8.1\r\nE. Linux', 'D', '40', 'I', 'MI-R', 'Program Aplikasi', ''),
(27, 'IMI-RProgram Aplikasi', '27', 'CPU menerima arus listrik melalui sebuah komponen yang disebut..\r\n\r\nA. processor\r\nB. floppy\r\nC. power suply\r\nD. DVD room\r\nE. port serial', 'C', '40', 'I', 'MI-R', 'Program Aplikasi', ''),
(28, 'IMI-RProgram Aplikasi', '28', 'dibawah ini yang merupakan sistem operasi, adalah..\r\n\r\nA. Linux\r\nB. Corel Draw\r\nC. Movie Maker\r\nD. Adobe Photoshop\r\nE. Ms. Word', 'A', '40', 'I', 'MI-R', 'Program Aplikasi', ''),
(29, 'IMI-RProgram Aplikasi', '29', 'Dibawah ini merupakan software yang dapat digunakan untuk mengedit video, adalah..\r\n\r\nA. Ulead\r\nB. Adobe Photoshop\r\nC. Adobe Illustrator\r\nD. Corel Draw\r\nE. Paint', 'A', '40', 'I', 'MI-R', 'Program Aplikasi', ''),
(30, 'IMI-RProgram Aplikasi', '30', 'Alat yang bertugas untuk menukar data dari digital ke analog dan sebaliknya dalam akses internet, Disebut..\r\n\r\nA. Modem\r\nB. Monitor\r\nC. USB\r\nD. CPU\r\nE. Keyboard', 'A', '40', 'I', 'MI-R', 'Program Aplikasi', ''),
(31, 'IMI-RProgram Aplikasi', '31', 'Manakah software dibawah ini, yang dapat digunakan untuk mengolah database....\r\n\r\nA. MS. Powerpoint\r\nB. Ms. Word\r\nC. Ms. Excel\r\nD. Ms. Access\r\nE. Ms. Visio', 'D', '40', 'I', 'MI-R', 'Program Aplikasi', ''),
(32, 'IMI-RProgram Aplikasi', '32', 'salah satu penyedia layanan search engine, adalah...\r\n\r\nA. Facebook\r\nB. Path\r\nC. Google\r\nD. Twitter\r\nE. Lazada', 'C', '40', 'I', 'MI-R', 'Program Aplikasi', ''),
(33, 'IMI-RProgram Aplikasi', '33', 'Shortcut untuk mengcopy suatu file adalah..\r\n\r\nA. Ctrl+C\r\nB. Ctrl+V\r\nC. Ctrl+D\r\nD. Ctrl+AltD\r\nE. Ctrl+N ', 'A', '40', 'I', 'MI-R', 'Program Aplikasi', ''),
(34, 'IMI-RProgram Aplikasi', '34', 'Shortcut untuk mengpaste suatu file adalah..\r\n\r\nA. Ctrl+C\r\nB. Ctrl+V\r\nC. Ctrl+D\r\nD. Ctrl+AltD\r\nE. Ctrl+N ', 'B', '40', 'I', 'MI-R', 'Program Aplikasi', ''),
(35, 'IMI-RProgram Aplikasi', '35', 'undo berfungsi untuk...\r\n\r\nA. Membatalkan perintah\r\nB. Menyalin format\r\nC. Mencetak dokumen\r\nD. Menyimpan dokumen\r\nE. Membuka dokumen', 'A', '40', 'I', 'MI-R', 'Program Aplikasi', ''),
(36, 'IMI-RProgram Aplikasi', '36', 'perintah untuk mematikan komputer adalah..\r\n\r\nA. Shut down\r\nB. Copy\r\nC. New\r\nD. Paste\r\nE. search', 'A', '40', 'I', 'MI-R', 'Program Aplikasi', ''),
(37, 'IMI-RProgram Aplikasi', '37', 'berikut ini yang tidak tergolong hardware yang dibutukan untuk akses internet\r\n\r\nA. CPU\r\nB. Modem\r\nC. Yahoo Messenger\r\nD. RAM', 'C', '40', 'I', 'MI-R', 'Program Aplikasi', ''),
(38, 'IMI-RProgram Aplikasi', '38', 'sebutan bagi kamera yang gambarnya bisa diakses atau melalui world wide web, program instant messaging, atau video call adalah...\r\n\r\nA. Televisi\r\nB. CCTV\r\nC. Webcam\r\nD. Monitor\r\nE. Camera 360', 'C', '40', 'I', 'MI-R', 'Program Aplikasi', ''),
(39, 'IMI-RProgram Aplikasi', '39', 'perintah untuk mencari suatu kata atau kalimat tertentu berdasarkan kriteria yang ditentukan menggunakan perintah..\r\n\r\nA. Find\r\nB. Undo\r\nC. Redo\r\nD. replace\r\nE. delete', 'A', '40', 'I', 'MI-R', 'Program Aplikasi', ''),
(40, 'IMI-RProgram Aplikasi', '40', 'jaringan nirkabel dapat disebut dengan?\r\n\r\nA. wifi\r\nB. LAN\r\nC. MAN\r\nD. WAN\r\nE. Client-Server', 'A', '40', 'I', 'MI-R', 'Program Aplikasi', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sudah`
--

CREATE TABLE IF NOT EXISTS `sudah` (
  `id_sudah` varchar(255) NOT NULL,
  `matkul` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `tanggal_isi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `username`, `password`, `level`) VALUES
(1, 'okta pilopa', 'goldroger27', '29f407c056a49df82ff273a37a82999f', 'master'),
(2, 'iqbal', 'iqbal', 'eedae20fc3c7a6e9c5b1102098771c70', 'operator'),
(3, 'okta pilopa', '1011080037', 'e10adc3949ba59abbe56e057f20f883e', 'operator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jawaban`
--
ALTER TABLE `jawaban`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`npm`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sudah`
--
ALTER TABLE `sudah`
  ADD PRIMARY KEY (`id_sudah`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jawaban`
--
ALTER TABLE `jawaban`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `soal`
--
ALTER TABLE `soal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
