-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Bulan Mei 2021 pada 04.11
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_moora_siswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin_acc`
--

CREATE TABLE `admin_acc` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(42) NOT NULL,
  `level` enum('admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin_acc`
--

INSERT INTO `admin_acc` (`id_admin`, `nama_admin`, `username`, `password`, `level`) VALUES
(1, 'Pegawai', 'pegawai', '5b6ba13f79129a74a3e819b78e36b922', 'admin'),
(2, 'Administrator Petugas 2', 'admin2', '21232f297a57a5a743894a0e4a801fc3', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_siswa`
--

CREATE TABLE `data_siswa` (
  `id_siswa` int(11) NOT NULL,
  `namasiswa` varchar(50) NOT NULL,
  `penghasilan` set('Lebih dari Rp 4.000.000','Rp 2.000.000 - Rp 4.000.000','Rp 1.000.000 - Rp 2.000.000','Rp 50.000 - Rp 1.000.000') NOT NULL,
  `jarak` varchar(20) NOT NULL,
  `tanggungan` int(3) NOT NULL,
  `pendidikan` set('SARJANA','DIPLOMA','SMA','SMP','SD') NOT NULL,
  `ratanilai` int(3) NOT NULL,
  `kehadiran` int(3) NOT NULL,
  `nis` int(50) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `pekerjaan_ayah` varchar(50) NOT NULL,
  `pekerjaan_ibu` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `data_siswa`
--

INSERT INTO `data_siswa` (`id_siswa`, `namasiswa`, `penghasilan`, `jarak`, `tanggungan`, `pendidikan`, `ratanilai`, `kehadiran`, `nis`, `nama_ayah`, `nama_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `alamat`) VALUES
(1, 'Angel Sondang Valerina Sihombing', 'Lebih dari Rp 4.000.000', '4', 1, 'SARJANA', 71, 98, 8757, 'Rustam Sihombing', 'Rumia Adelina Sijabat', 'SWASTA', 'IBU RUMAH TANGGA', 'Cahaya gedong residance 1 no 43 kel. Gedong kec. Ps rebo jaktim'),
(2, 'Adelien wina resya', 'Rp 1.000.000 - Rp 2.000.000', '5', 2, 'SARJANA', 73, 77, 8753, 'Willie ramayandi', 'Irinna restu', 'BURUH', 'IBU RUMAH TANGGA', 'Jl.raya pkp gg persatuan rt7 rw9'),
(3, 'Alexander Togar Abadi', 'Rp 2.000.000 - Rp 4.000.000', '4.5', 1, 'SARJANA', 89, 73, 8754, 'Rudi Markus', 'Melfrida', 'TNI/POLRI', 'IBU RUMAH TANGGA', 'Jalan Kaja 2 RT 014 RW 011 No. 1'),
(4, 'Alexsandra Matilda Eva putri', 'Lebih dari Rp 4.000.000', '2.8', 2, 'SMA', 80, 71, 8755, 'Rusli', 'Ivonne', 'WIRASWASTA', 'IBU RUMAH TANGGA', 'Jl raya Ciracas no 12'),
(5, 'Andreas Arya Satya erland gunawan', 'Lebih dari Rp 4.000.000', '1.9', 1, 'SARJANA', 70, 68, 8756, 'Fransiskus Asisi Hendry Gunawan', 'Ratna suliantiningsih', 'SWASTA', 'SWASTA', 'Jl.haji baping gg.bhinekavii 0011/09 no 20B ciracas'),
(6, 'Aqila salsabila mardhiyah', 'Rp 1.000.000 - Rp 2.000.000', '9.4', 2, 'SMA', 93, 83, 8758, 'Ending sukardi', 'Engkar karsiah', 'WIRASWASTA', 'IBU RUMAH TANGGA', 'Jln.pengantin ali gg.mawar 013/06 ciracas jakarta timur 13740'),
(7, 'Assyifa Nabila Putri', 'Rp 50.000 - Rp 1.000.000', '1.2', 3, 'SMP', 80, 71, 8759, 'Maryono', 'Marlena', 'BURUH', 'IBU RUMAH TANGGA', 'Jl.suci gg.leo rt 04 rw 04'),
(8, 'DAFA ARDIANSYAH', 'Rp 1.000.000 - Rp 2.000.000', '3.5', 4, 'SMA', 70, 74, 8760, 'Sudirman', 'Wasitah', 'WIRASWASTA', 'IBU RUMAH TANGGA', 'Jl. Dewa Rt006/ Rw02 No.68 Ciracas'),
(9, 'Dewi Sekar Ayu', 'Rp 1.000.000 - Rp 2.000.000', '1.8', 1, 'SMP', 97, 88, 8761, 'Drajat', 'Maryati', 'BURUH', 'IBU RUMAH TANGGA', 'Jl.haji marjuki rt 6 rw 1'),
(10, 'Dipa luat Rado sianipar', 'Rp 2.000.000 - Rp 4.000.000', '1.9', 2, 'SARJANA', 74, 97, 8762, 'Aria bangsa sianipar', 'Dormani pardede', 'SWASTA', 'IBU RUMAH TANGGA', 'Jln. Masjid RT.04 RW.10 no. 93 c'),
(11, 'Evan Stevano Nainggolan', 'Rp 1.000.000 - Rp 2.000.000', '2.4', 1, 'SARJANA', 83, 64, 8763, 'Juspen Nainggolan', 'Anjelina Lastiar Tumanggor', 'WIRASWASTA', 'IBU RUMAH TANGGA', 'Jl.Pertiwi rt.05 rw.06 no 39 kel.Susukan .kec.Ciracas Jakarta timur'),
(12, 'Fathonah Assyifa', 'Rp 2.000.000 - Rp 4.000.000', '5.2', 1, 'SMA', 98, 85, 8764, 'Tahiruddin', 'Saiyah', 'WIRASWASTA', 'IBU RUMAH TANGGA', 'Jl Raya centex RT009/010'),
(13, 'FEBRIAN SCHUBERTH SIAHAYA', 'Lebih dari Rp 4.000.000', '2.7', 1, 'SARJANA', 93, 68, 8765, 'Flishenger V.D Siahaya', 'Desi Suhing Widi', 'PNS', 'SWASTA', 'Jalan Raya Ciracas no.69 rt 005/06\nJakarta Timur,13740'),
(14, 'JONGGURAN MAIMA SAMUEL OSCARIO SIJABAT', 'Rp 2.000.000 - Rp 4.000.000', '1.4', 2, 'SARJANA', 77, 95, 8766, 'MF JOYO DISASTRO', 'Lasmariana sibuea', 'WIRASWASTA', 'IBU RUMAH TANGGA', 'Jl. Tanah merdeka 2a no.49 rt.005 rw.04 rambutan, kec.ciracas-jakarta timur'),
(15, 'KARLDHIKA ARYASATYA', 'Lebih dari Rp 4.000.000', '5.2', 3, 'SARJANA', 86, 62, 8767, 'ARIEF KOESTIAWAN', 'AIRLINA SETIAWATI', 'SWASTA', 'SWASTA', 'Jl. Ikhlas no.14 Rt.002/011 Kelapa Dua  Wetan, Ciracas Jakarta Timur'),
(16, 'KESIA KRISNA ELGA PRIANI SITUMORANG', 'Rp 2.000.000 - Rp 4.000.000', '2.7', 1, 'SMA', 88, 62, 8768, 'SEDAR SITUMORANG', 'MELDA SINAGA', 'SWASTA', 'IBU RUMAH TANGGA', 'Jl tanah merdeka 1a gg yanto  rt 07/04 no 42.kel rambutan kec ciracas jakarta timur.'),
(17, 'Khailla Annisa Putri Susanto', 'Rp 2.000.000 - Rp 4.000.000', '3.4', 1, 'SMA', 80, 73, 8769, 'Joko susanto', 'Widihastuti', 'SWASTA', 'BURUH', 'Jl.Dukuh V Rt 013/003 no.25 Kel.Dukuh Kec.Kramatjati'),
(18, 'M. VIKRI FAJAR ILHAM', 'Rp 2.000.000 - Rp 4.000.000', '2.6', 1, 'SMA', 73, 84, 8770, 'PARMAN', 'LELA NURSARI', 'SWASTA', 'IBU RUMAH TANGGA', 'Jl raya ciracas rt 04/03 kel ciracas kec ciracas jakarta timur'),
(19, 'Margaretha Zefanya Wardhani', 'Rp 2.000.000 - Rp 4.000.000', '2.6', 3, 'SMA', 65, 62, 8771, 'Warsana', 'E Tri Murtiningsih', 'WIRASWASTA', 'IBU RUMAH TANGGA', 'Jl raya centex gg epatik no 54 rt 15/rw 10\nCiracas Jakarta Timur'),
(20, 'Maria enti laura barutu', 'Rp 2.000.000 - Rp 4.000.000', '10.2', 1, 'SMA', 90, 75, 8772, 'Gaul Barutu', 'Rumade Marpaung', 'WIRASWASTA', 'IBU RUMAH TANGGA', 'Jl.tanah merdeka x no 86 rt 18/06'),
(21, 'Monica Renata Putri Irvandawisnu', 'Lebih dari Rp 4.000.000', '7.4', 1, 'SARJANA', 90, 81, 8773, 'Henricus Andreka Irvandawisnu', 'Veronica Sinta Haryati', 'SWASTA', 'IBU RUMAH TANGGA', 'Jl Tanah Merdeka 2 No. 45 Rt 05/04 Ciracas Kp. Rambutan 13830'),
(22, 'Muhamad Azriel Maulana', 'Rp 1.000.000 - Rp 2.000.000', '3.3', 4, 'SMA', 82, 71, 8774, 'Sutisna', 'Linda Ernawati', 'SWASTA', 'IBU RUMAH TANGGA', 'Jl.tanah merdeka 10 gg.siran rt12/04 kel.rambutan kec.ciracas jakarta timur'),
(23, 'Muhammad Rafli', 'Rp 50.000 - Rp 1.000.000', '3.5', 3, 'SD', 73, 79, 8775, 'Subur', 'Rosmawati', 'BURUH', 'IBU RUMAH TANGGA', 'Jl. Asmin rt 01/ rw 03 kelurahan susukan kecamatan ciracas jakarta timur'),
(24, 'Muhammad Rizkky Ramadhan', 'Rp 1.000.000 - Rp 2.000.000', '1.9', 4, 'SMA', 95, 100, 8776, 'Misar Sulaeman', 'Wiwik Nuryani', 'SWASTA', 'BURUH', 'Jl.penganten Ali kel.Ciracas kec. Ciracas Jakarta Timur'),
(25, 'Muhammad Zidan', 'Rp 2.000.000 - Rp 4.000.000', '1.2', 3, 'SMA', 89, 77, 8777, 'AMIR MAHMUD', 'HILDA', 'BURUH', 'IBU RUMAH TANGGA', 'JL.PERCETAKAN BUDI LUHUR RT.01 RW.01 CIRACAS, JAKARTA TIMUR 13740'),
(26, 'NADIA UTAMI', 'Rp 2.000.000 - Rp 4.000.000', '3.5', 4, 'SMA', 96, 75, 8778, 'DEDE KOSASIH', 'DIAN MELAWATI', 'BURUH', 'IBU RUMAH TANGGA', 'Jln Tanah merdeka RT 05 RW 06 Kelurahan Susukan Kecamatan Ciracas Jakarta Timur'),
(27, 'NAILAH PUTRI SYABANI', 'Rp 1.000.000 - Rp 2.000.000', '1.8', 2, 'SMA', 96, 66, 8779, 'ruswandi', 'lailitarwiyah', 'SWASTA', 'IBU RUMAH TANGGA', 'jln.h.samin neong rt 007 rw005'),
(28, 'NAJWA ALFINA ZAHIRA', 'Rp 2.000.000 - Rp 4.000.000', '1.9', 3, 'SMA', 77, 93, 8780, 'ONNY KRESPATI', 'SOFIA', 'SWASTA', 'SWASTA', 'JLN. TANAH MERDEKA 10 RT14/06 KEL: RAMBUTAN KEC : CIRACA JAKARTA TIMUR'),
(29, 'Naurah natasia', 'Rp 50.000 - Rp 1.000.000', '2.4', 2, 'SMP', 76, 66, 8781, 'Adi', 'Marlinah', 'WIRASWASTA', 'IBU RUMAH TANGGA', 'Jalan raya poncol , gang asem , rt 06 rw 09 Ciracas '),
(30, 'Naysilla nursyifa', 'Lebih dari Rp 4.000.000', '5.2', 2, 'SMA', 97, 90, 8782, 'Sartono', 'Samisem', 'SWASTA', 'IBU RUMAH TANGGA', 'Jalan suci rt 004 rw 003 kelurahan susukan kecamatan ciracas jakarta timur'),
(31, 'Nur Maqrifah ', 'Rp 1.000.000 - Rp 2.000.000', '2.7', 2, 'SMA', 94, 67, 8783, 'Darsito', 'Daryati', 'SWASTA', 'IBU RUMAH TANGGA', 'Jl.Asmin Rt 08/Rw 03 no 72D Kelurahan Susukan Kecamatan Ciracas Jakarta Timur'),
(32, 'Panji Rosiyanto', 'Rp 2.000.000 - Rp 4.000.000', '1.4', 2, 'SMA', 85, 81, 8784, 'Eli Susanto', 'Munjiah Ningsih', 'SWASTA', 'IBU RUMAH TANGGA', 'Jl. H. Baping Gang Asem Rt 11 Rw 09 Ciracas'),
(33, 'Rahmadianti Nursayfitri', 'Rp 50.000 - Rp 1.000.000', '5.2', 1, 'SMA', 87, 78, 8785, 'Alm. Sumiarjo', 'Iin supriyatin', 'SWASTA', 'IBU RUMAH TANGGA', 'Jln. Mujahidin rt. 001 rw. 03 no. 173'),
(34, 'Syahnaz Aprilia Mandai', 'Rp 50.000 - Rp 1.000.000', '2.7', 1, 'SMA', 70, 93, 8786, 'Nazaruddin', 'Nani', 'BURUH', 'IBU RUMAH TANGGA', 'Jl. H. Jum rt 009 rw 001 kelurahan rambutan kecamatan ciracas jakarta Timur '),
(35, 'Tesalonika Felicia Dameria Nababan', 'Lebih dari Rp 4.000.000', '3.8', 1, 'SARJANA', 95, 98, 8787, 'Bernat Nababan', 'M Melani Tian Pans Nainggolan', 'PNS', 'SWASTA', 'Jl. Dewa Ujung No. 72 RT 16/007 Ciracas JakTim'),
(36, 'Yohana Theresia Nababan', 'Rp 2.000.000 - Rp 4.000.000', '2.6', 4, 'SMA', 75, 65, 8788, 'Berthon Nababan', 'Rida Mauli Banjarnahor', 'WIRASWASTA', 'IBU RUMAH TANGGA', 'Jln.SMPN 171,RT007/04 NO 55'),
(37, 'Agnes Martha Pasaribu', 'Lebih dari Rp 4.000.000', '2.6', 3, 'SARJANA', 79, 72, 8789, 'Pittor Pasaribu', 'Elisabet lapu pademme', 'SWASTA', 'WIRASWASTA', 'jl.tanah merdeka gang siran no.28 rt 12 rw 04 kel:Rambutan .kec:ciracas'),
(38, 'Albert Darius Budiman', 'Rp 2.000.000 - Rp 4.000.000', '1.9', 3, 'SMA', 84, 89, 8790, 'Jo mulyadi', 'Karta  kartika mega', 'SWASTA', 'IBU RUMAH TANGGA', 'Jl A M D Rt 01 / Rw 06 no 42  Ciracas jak tim'),
(39, 'Angel Antonio Wattimena', 'Rp 2.000.000 - Rp 4.000.000', '1.4', 1, 'SMA', 90, 73, 8791, 'Johan Yakonoas Wattimena', 'Siti Juleha', 'BURUH', 'IBU RUMAH TANGGA', 'Jln Pule RT 012 Rw 04. Kel:Rambutan Kec:Ciracas'),
(40, 'Anggun Adelia', 'Rp 2.000.000 - Rp 4.000.000', '3.3', 1, 'SMA', 88, 65, 8792, 'Suryo supartono', 'Nana Riana', 'WIRASWASTA', 'IBU RUMAH TANGGA', 'jln raya centex gg kramat rt 10 rw 10 no 9'),
(41, 'Anisah diah apriani', 'Rp 2.000.000 - Rp 4.000.000', '3.5', 3, 'SMP', 89, 95, 8793, 'Suparlan', 'Ida aryani', 'SWASTA', 'IBU RUMAH TANGGA', 'Jln suci gg regalia rt01 rw06'),
(42, 'ashiila Andini putri a', 'Rp 2.000.000 - Rp 4.000.000', '1.9', 2, 'SARJANA', 98, 62, 8794, 'Erwin aulia', 'Lina budiarti', 'SWASTA', 'SWASTA', 'Kam baru rt2rw2 No 7 kelapaduawetan'),
(43, 'Briyan V.Kapitan', 'Rp 50.000 - Rp 1.000.000', '2.7', 3, 'SMA', 98, 78, 8795, 'Freddy.M.Kapitan', 'Yosefina Solissa', 'SWASTA', 'PNS', 'Jalan Pule rt 14/10'),
(44, 'CLARISA VALERINA SIAHAAN', 'Rp 2.000.000 - Rp 4.000.000', '11.2', 5, 'SMA', 71, 95, 8796, 'SAHAT ULI SIAHAAN', 'SRI NOVITA ADRIANI LINGGA', 'SWASTA', 'SWASTA', 'Jl.Mustika Ratu RT.008 RW.08  Ciracas\nDomisili sekarang Jl.Cipinang gg.Darussalam RT.013 RW.04 Cirac'),
(45, 'Daud Immanuel', 'Rp 1.000.000 - Rp 2.000.000', '5.2', 5, 'SMA', 68, 71, 8797, 'Pandapotan Sidabutar', 'Verawaty Simanjuntak', 'BURUH', 'IBU RUMAH TANGGA', 'Jln. Lewa rt05/rw010 kel.pekayon.kec.pasar rebo JAKARTA TIMUR'),
(46, 'Dewi Anggraeni', 'Rp 2.000.000 - Rp 4.000.000', '2.7', 2, 'SMA', 82, 65, 8798, 'Hairudin', 'Yunita mulyandari', 'SWASTA', 'IBU RUMAH TANGGA', 'Jalan haji jusin rt 02/01 no.51 kelurahan susukan kecamatan ciracas jakarta timur 13750'),
(47, 'Dzaky arrosyid', 'Rp 50.000 - Rp 1.000.000', '6.4', 4, 'SMA', 81, 93, 8799, 'Ahmad sukri', 'Ernayuni sukartini', 'WIRASWASTA', 'WIRASWASTA', 'Jalan dewaja, ciracas, rt004/02 jakarta timur'),
(48, 'Gabriel Roberto Saragih', 'Lebih dari Rp 4.000.000', '2.6', 3, 'SMA', 83, 91, 8800, 'Tohap parulian saragih', 'Rafima Fitriani Nainggolan', 'TNI/POLRI', 'IBU RUMAH TANGGA', 'Jl rya ciracas gg nisin rt 07 rw07'),
(49, 'Hanny zaskia septiani', 'Rp 2.000.000 - Rp 4.000.000', '6.6', 1, 'SMA', 94, 84, 8801, 'Hasim', 'Nani wirdaningsih', 'SWASTA', 'IBU RUMAH TANGGA', 'Jl Raya centex gg.masjid Rt005/010 no. 103 ciracas jaktim'),
(50, 'Intan Auralia Fatimah', 'Rp 50.000 - Rp 1.000.000', '1.2', 3, 'SMA', 79, 87, 8802, 'Andri Erwin', 'Melva Ervida', 'BURUH', 'PNS', 'Gg.Asem RT,10/09 No.135 Ciracas Jakarta Timur'),
(51, 'JOSEPHINE ARTATI LASMIDA SINAGA', 'Lebih dari Rp 4.000.000', '1.4', 3, 'SARJANA', 89, 97, 8803, 'Rimson Hasudungan Sinaga', 'Theresia Lusiana Sari Sagala', 'WIRASWASTA', 'PNS', 'Jl. Raya center Rt. 04/10 No. 61 Ciracas Jakarta Timur. '),
(52, 'Leonarwin del Grosso Nainggolan', 'Rp 2.000.000 - Rp 4.000.000', '3.3', 3, 'SMA', 93, 81, 8804, 'Gunawan Nainggolan', 'Bhernike Sitohang', 'SWASTA', 'IBU RUMAH TANGGA', 'Jl.Raya Centex Gg.Epatik 1 Rt08 Rw02 No.96 Ciracas Jakarta Timur 13740'),
(53, 'Maria Shania Marcella Napitupulu ', 'Rp 1.000.000 - Rp 2.000.000', '3.5', 4, 'SMA', 72, 75, 8805, 'Hendra E P Napitupulu ', 'Ester Purnama Matondang ', 'SWASTA', 'IBU RUMAH TANGGA', 'Jl haji marjukih no 137 rt 05 rw 01 Ciracas Jakarta Timur '),
(54, 'Michael Okber Constantinovel Wantania', 'Rp 50.000 - Rp 1.000.000', '1.9', 3, 'SMA', 93, 73, 8806, 'Antonius Wantania', 'Verry Elviwati Hutauruk', 'BURUH', 'SWASTA', 'Jl.Tanah Merdeka 5 Rt14/Rw04'),
(55, 'Muhammad Asyafiq Hardiantono', 'Rp 2.000.000 - Rp 4.000.000', '1.4', 2, 'SMA', 86, 75, 8807, 'Hartono', 'Hardiah', 'SWASTA', 'IBU RUMAH TANGGA', 'Jln Gudang air rt 03 rw 02 no 33 Rambutan Ciracas Jakarta timur'),
(56, 'MUHAMMAD FAWWAZ FADHLULLAH', 'Rp 1.000.000 - Rp 2.000.000', '9.2', 5, 'SMA', 98, 73, 8808, 'Juhana', 'Dewi Setyaningsih', 'BURUH', 'IBU RUMAH TANGGA', 'Jalan pertiwi rt 007 rw 06 susukan'),
(57, 'Muhammad Nabiel Alkhalifi', 'Lebih dari Rp 4.000.000', '6.7', 4, 'SMA', 85, 66, 8809, 'Dwi bambang supriyanto', 'Wiwi windyarwati', 'SWASTA', 'IBU RUMAH TANGGA', 'Jl tanah merdeka rt001 rw05 no 14 susukan - ciracas jakarta timur'),
(58, 'Nabila Apriliyani', 'Rp 2.000.000 - Rp 4.000.000', '3.4', 2, 'SD', 87, 74, 8810, 'Mariman', 'Margiyati', 'BURUH', 'IBU RUMAH TANGGA', 'Jln Suci rt 11 rw 06 susukan ciracas jakarta timur'),
(59, 'Nadya Putri Pratama', 'Rp 2.000.000 - Rp 4.000.000', '2.6', 3, 'SD', 84, 84, 8811, 'Maman', 'Nurlela', 'WIRASWASTA', 'IBU RUMAH TANGGA', 'Jln suci gg waru rt 07/04 kel susukan kec ciracas'),
(60, 'Najwa Rahmatillah ', 'Rp 50.000 - Rp 1.000.000', '2.6', 2, 'DIPLOMA', 66, 68, 8812, 'Rizaldi rusydi', 'Indrijati', 'WIRASWASTA', 'IBU RUMAH TANGGA', 'Jln.tanah merdeka no.10 rt8/rw6'),
(61, 'Nasswa Nuraini', 'Lebih dari Rp 4.000.000', '1.2', 4, 'SMA', 90, 72, 8813, 'Ujang Sodikin', 'Sulis Tiawati', 'SWASTA', 'IBU RUMAH TANGGA', 'Jl.H.Baping gg.Tk.Bina Putra RT04/RW09 nomor 36'),
(62, 'NUR ABIL', 'Rp 50.000 - Rp 1.000.000', '11.4', 4, 'SMP', 86, 73, 8814, 'NURMAN', 'Gunipah', 'BURUH', 'IBU RUMAH TANGGA', 'Jl tanah merdeka kelas rambutan rt 8 RW3 kec ciracas'),
(63, 'Putri Ayu Nurliyani', 'Rp 1.000.000 - Rp 2.000.000', '3.3', 1, 'SMA', 93, 83, 8815, 'Ahmad Yani', 'Dahlia Rahmawati', 'BURUH', 'IBU RUMAH TANGGA', 'Jl. Tanah merdeka II rt 002 rw 06 kel. Rambutan kec. Ciracas'),
(64, 'Rajib Khalifah ', 'Rp 50.000 - Rp 1.000.000', '3.5', 1, 'SMP', 73, 81, 8816, 'Suhendra', 'Kodariah', 'BURUH', 'IBU RUMAH TANGGA', 'Jl.tanah merdeka rt002/rw005'),
(65, 'Restu Bumi Kanahaya Prianggodo', 'Rp 1.000.000 - Rp 2.000.000', '1.9', 2, 'SMA', 83, 77, 8817, 'Wawang Agus Prianggodo', 'Dian Anggarani', 'WIRASWASTA', 'IBU RUMAH TANGGA', 'Jln Tanjung Rt009/05 no 105 Ciracas'),
(66, 'Saskia asmorowati', 'Rp 2.000.000 - Rp 4.000.000', '2.7', 6, 'SMA', 73, 68, 8818, 'Dony ekosetyo', 'kriswati', 'WIRASWASTA', 'IBU RUMAH TANGGA', 'jln raya centex rt003/rw010 ciracas jakarta timur'),
(67, 'Tubagus aal maulana', 'Rp 50.000 - Rp 1.000.000', '3.4', 3, 'SARJANA', 89, 62, 8820, 'Tubagus amin fadilah', 'Heni ratna sari', 'WIRASWASTA', 'IBU RUMAH TANGGA', 'Centex rt07rw02ciracas jaktim'),
(68, 'William justinico Pandjaitan', 'Rp 2.000.000 - Rp 4.000.000', '2.6', 3, 'SARJANA', 79, 87, 8822, 'Rudiyanto', 'Eva Laurencia', 'SWASTA', 'SWASTA', 'Jl.Nyaman Gang Dewa Ujung rt 008/002 no 123 ciracas'),
(69, 'Yoanna Refris Meilan', 'Rp 50.000 - Rp 1.000.000', '2.6', 2, 'DIPLOMA', 77, 87, 8823, 'S.Manerang S.T', 'Dewi kristina H.', 'WIRASWASTA', 'IBU RUMAH TANGGA', 'jln raya centex gg masjid 6 no 107d rt 04 rw 10'),
(70, 'Yoshua Angga Ayal', 'Rp 2.000.000 - Rp 4.000.000', '10.2', 1, 'SARJANA', 65, 98, 8824, 'Tri Putra Ayal', 'Sudiana Ayal', 'WIRASWASTA', 'IBU RUMAH TANGGA', 'Jln asgo 2 no 9 rt 16 rw 03'),
(71, 'Bunga Raudhatul Jannah', 'Rp 2.000.000 - Rp 4.000.000', '1.4', 2, 'DIPLOMA', 81, 77, 9011, 'Indrajat Ramdhani', 'Komariah', 'WIRASWASTA', 'SWASTA', 'Jl. Tanjung Ciracas rt 009/05 no. 120 Ciracas Jakarta Timur'),
(72, 'Ahmad Hendra Adikurnia', 'Rp 2.000.000 - Rp 4.000.000', '5.3', 4, 'SMA', 96, 74, 8825, 'Askuri', 'Muryati', 'WIRASWASTA', 'WIRASWASTA', 'Jl. Tb. Simatupang no. 51A rt. 012 rw. 005 Susukan Ciracas Jakarta Timur'),
(73, 'ALBAN DARELL IBNU JALALLUDIN', 'Rp 2.000.000 - Rp 4.000.000', '3.5', 3, 'SMA', 83, 72, 8826, 'EFNU SUBROTO', 'NINA HERYYATI', 'WIRASWASTA', 'IBU RUMAH TANGGA', 'Jl. Raya Centex, Gg. Jengki RT013/010'),
(74, 'Alya Dwi Anjani', 'Rp 50.000 - Rp 1.000.000', '4.5', 3, 'SMP', 84, 70, 8827, 'slamet prihatin prasetyo budi', 'suminem', 'BURUH', 'SWASTA', 'jl.mustika ratu rt 002/rw04 gg niman'),
(75, 'AMELIA APRILIYANTI', 'Rp 2.000.000 - Rp 4.000.000', '2.8', 4, 'SD', 87, 67, 8828, 'JANGKUNG WIDODO', 'SUPRIHATIN', 'BURUH', 'IBU RUMAH TANGGA', 'Gang Saibun RT005/RW04 No. 18.H Kelurahan Susukan,  Kecamatan Ciracas Jak-Tim 13750'),
(76, 'Andra ibrahimovic', 'Rp 2.000.000 - Rp 4.000.000', '1.9', 2, 'SMA', 96, 82, 8829, 'Suhendra', 'Linda', 'BURUH', 'IBU RUMAH TANGGA', 'Jln asmin rt02/03 sususukan-ciracas'),
(77, 'Anisa aulia', 'Rp 50.000 - Rp 1.000.000', '9.4', 3, 'SMA', 78, 66, 8830, 'Alm.faidul rachman', 'Danah', 'BURUH', 'IBU RUMAH TANGGA', 'Jl.poncol, RT012/007 Kel.Susukan, Kec.Ciracas, Jakarta Timur'),
(78, 'ARDY FIRMANSYAH', 'Rp 2.000.000 - Rp 4.000.000', '1.2', 1, 'SMP', 75, 95, 8831, 'SAMAN', 'SITI MARYAM', 'WIRASWASTA', 'IBU RUMAH TANGGA', 'Jl suci Gg H.saibun RT 04 RW 10 kelurahan susukan kecamatan susukan jakarta timur'),
(79, 'Citra Riany Pertiwi', 'Lebih dari Rp 4.000.000', '1.4', 1, 'SARJANA', 73, 81, 8832, 'Wiyartono', 'Normaria', 'GURU', 'IBU RUMAH TANGGA', 'Jl. Kp baru no. 70 rt 8/9 kdw ciracas jaktim'),
(80, 'Clarisyah Luvilianti Putri Ariella', 'Rp 50.000 - Rp 1.000.000', '3.3', 1, 'SMA', 89, 99, 8833, 'Arief budiman', 'Rusmala dewi', 'BURUH', 'BURUH', 'Jln.Masjid no.29.rt.04.rw.07.kel.susukan.kec.ciracas.jakarta timur.'),
(81, 'Fadhilla Adhia Garini', 'Rp 1.000.000 - Rp 2.000.000', '3.5', 3, 'SMA', 77, 93, 8834, 'Doni Rusmanto', 'Eniah', 'WIRASWASTA', 'WIRASWASTA', 'Jl. Al-fallah RT.007/02 No. 10 Kel. Kebon Pala Jakarta Timur'),
(82, 'Farah Nur Azizah', 'Rp 2.000.000 - Rp 4.000.000', '3.9', 3, 'SMA', 78, 70, 8835, 'Eko Agung Istiyono', 'Yati Hayati', 'SWASTA', 'IBU RUMAH TANGGA', 'Jl Damai rt 015/04'),
(83, 'Fira Syah Fitri', 'Rp 2.000.000 - Rp 4.000.000', '1.4', 2, 'SMA', 87, 65, 8836, 'Erwin Syah Putra', 'Maemunah ', 'WIRASWASTA', 'IBU RUMAH TANGGA', 'Jl. Tanah merdeka 1 rt/rw 08/04'),
(84, 'GHULAM MUHAMMAD IHSAN', 'Lebih dari Rp 4.000.000', '8.2', 1, 'SARJANA', 89, 60, 8837, 'EKO PURWANTO', 'DWI RETNO KUSUMANINGSIH', 'PNS', 'IBU RUMAH TANGGA', 'Jalan masjid no.47 rt.04 rw.07 kel.susukan kec ciracas jakarta timur'),
(85, 'Jaufi Azhar fadhil', 'Rp 1.000.000 - Rp 2.000.000', '2.7', 3, 'SMA', 95, 90, 8838, 'Ali mardani', 'Fitriyani', 'SWASTA', 'IBU RUMAH TANGGA', 'Jln.DEWA GG. Darussalam 2 no 79 RT. 13/02'),
(86, 'Keyza Aprillia Hafsah Fauzi', 'Rp 2.000.000 - Rp 4.000.000', '3.4', 3, 'SMA', 80, 82, 8839, 'Achmad Fauzi', 'Kurniasih', 'BURUH', 'IBU RUMAH TANGGA', 'Kp. Tipar rt. 04 rw. 07 no.78 mekarsari cimanggis DEPOK'),
(87, 'LUQMAN COKRO LONGSO', 'Rp 1.000.000 - Rp 2.000.000', '2.6', 2, 'SMA', 82, 66, 8840, 'MUSLICHI LONGSO', 'ESTI SILPIANA', 'WIRASWASTA', 'IBU RUMAH TANGGA', 'JL.RAYA CENTEX GG KRAMAT NO13D. RT09.RW 10. CIRACAS'),
(88, 'Marsya Dewi Anjani', 'Rp 1.000.000 - Rp 2.000.000', '2.6', 1, 'SMA', 83, 87, 8841, 'Syarif Hidayat', 'Lina Marlina ', 'BURUH', 'IBU RUMAH TANGGA', 'Jalan damai gang fitrah rt 12/rw 004'),
(89, 'Maulidina Eka Riswanti', 'Rp 2.000.000 - Rp 4.000.000', '8.2', 3, 'SMA', 87, 60, 8842, 'Galih riswanto', 'Rahmi Yanti', 'SWASTA', 'SWASTA', 'Jl. Raya centex gang e patik 1 rt 008 rw 002 ciracas,  jakarta timur'),
(90, 'Muhamad andhika nugraha', 'Rp 2.000.000 - Rp 4.000.000', '1.4', 3, 'SMA', 91, 69, 8843, 'Subono manto fani', 'rina rahmatilah', 'BURUH', 'IBU RUMAH TANGGA', 'jalan centex'),
(91, 'MUHAMAD RAIHAN FAUZI', 'Rp 2.000.000 - Rp 4.000.000', '3.3', 3, 'SMA', 97, 81, 8844, 'MUHAMAD SUHANDI', 'HERNAMAS', 'SWASTA', 'IBU RUMAH TANGGA', 'Jalan saibun Rt008 Rw004 No.97 kelurahan susukan kecamatan ciracas jakarta timur'),
(92, 'Muhammad Raafi Ilham', 'Rp 2.000.000 - Rp 4.000.000', '3.5', 2, 'SMA', 80, 83, 8845, 'Jayusman', 'Mila Erawati', 'WIRASWASTA', 'SWASTA', 'Jl. Suci No 36 RT 04 RW 04 Kel. Susukan Kec. Ciracas Jaktim 13750'),
(93, 'MUHAMMAD ZAKY NAWAWI', 'Lebih dari Rp 4.000.000', '1.9', 2, 'SARJANA', 89, 88, 8846, 'M ALIEF NAWAWI', 'IDA WIDANINGSIH', 'SWASTA', 'IBU RUMAH TANGGA', 'JL MUSTIKA RATU NO 01 RT/RW 004/04 CIRACAS JAKARTA TIMUR'),
(94, 'Nabila Salwa Salsabila', 'Rp 1.000.000 - Rp 2.000.000', '2.7', 3, 'SMP', 93, 98, 8847, 'Sobirin', 'Enung Nur Jamilah', 'WIRASWASTA', 'IBU RUMAH TANGGA', 'GG.Dewa RT:12 Rw:07'),
(95, 'Nadia Rahmadina', 'Rp 2.000.000 - Rp 4.000.000', '3.4', 1, 'SMA', 95, 98, 8848, 'Ipi', 'Sri hayati', 'SWASTA', 'IBU RUMAH TANGGA', 'Jl Suci Rt 009/06 kel: Susukan,  Ciracas Jakarta Timur 13750'),
(96, 'Nadine Aprilia', 'Rp 2.000.000 - Rp 4.000.000', '3.6', 6, 'SMA', 87, 67, 8849, 'Supriyatno Ahmad Nugraha', 'Fitrianah', 'WIRASWASTA', 'IBU RUMAH TANGGA', 'Jalan SMPN 171 RT 008 RW 04 NO 39 C'),
(97, 'NALA TANISA', 'Rp 2.000.000 - Rp 4.000.000', '5.6', 4, 'SMA', 85, 78, 8850, 'NINOL FENANDA', 'R.K. SRI MEINAWATI', 'SWASTA', 'IBU RUMAH TANGGA', 'KOMP. BLKI NO.17 RT.08/01 KEL. SUSUKAN KEC. CIRACAS JAKARTA TIMUR'),
(98, 'Nastiti Mahanani', 'Rp 1.000.000 - Rp 2.000.000', '3.2', 2, 'SMA', 84, 69, 8851, 'Sigit Trihadi', 'Kladina Primayanti', 'BURUH', 'IBU RUMAH TANGGA', 'Jalan Tanjung RT 009 RW 05'),
(99, 'Naufal Syauqiy hafidz', 'Lebih dari Rp 4.000.000', '5.4', 2, 'SMA', 78, 79, 8852, 'Mochamad fauzi', 'Inamsih', 'TNI/POLRI', 'IBU RUMAH TANGGA', 'Jl.raya ciracas rt.01 rw.05\nCiracas - jakarta timur'),
(100, 'NIKITA INDRIANI RAHMADITA', 'Rp 2.000.000 - Rp 4.000.000', '6.2', 5, 'SD', 89, 80, 8853, 'MOHAMAD KOMARUDIN', 'NANI RAHAYUNINGSIH', 'SWASTA', 'PNS', 'JL.DAMAI RT 014 RW 004 KEL.SUSUKAN KEC.CIRACAS JAKARTA TIMUR');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteriajarak`
--

CREATE TABLE `kriteriajarak` (
  `id_jarak` int(11) NOT NULL,
  `jarak` varchar(20) NOT NULL,
  `nilai` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `kriteriajarak`
--

INSERT INTO `kriteriajarak` (`id_jarak`, `jarak`, `nilai`) VALUES
(1, '2', '40'),
(2, '6', '30'),
(3, '4', '20'),
(4, '1', '10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteriakehadiran`
--

CREATE TABLE `kriteriakehadiran` (
  `id_kehadiran` int(11) NOT NULL,
  `kehadiran` varchar(20) NOT NULL,
  `nilai` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `kriteriakehadiran`
--

INSERT INTO `kriteriakehadiran` (`id_kehadiran`, `kehadiran`, `nilai`) VALUES
(1, '100', '30'),
(2, '89', '20'),
(3, '69', '10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteriapendidikan`
--

CREATE TABLE `kriteriapendidikan` (
  `id_pendidikan` int(11) NOT NULL,
  `pendidikan` varchar(20) NOT NULL,
  `nilai` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `kriteriapendidikan`
--

INSERT INTO `kriteriapendidikan` (`id_pendidikan`, `pendidikan`, `nilai`) VALUES
(1, 'SD', '50'),
(2, 'SMP', '40'),
(3, 'SMA', '30'),
(4, 'DIPLOMA', '20'),
(5, 'SARJANA', '10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteriapenghasilanortu`
--

CREATE TABLE `kriteriapenghasilanortu` (
  `id_penghasilan` int(11) NOT NULL,
  `penghasilan` varchar(50) NOT NULL,
  `nilai` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `kriteriapenghasilanortu`
--

INSERT INTO `kriteriapenghasilanortu` (`id_penghasilan`, `penghasilan`, `nilai`) VALUES
(1, 'Rp 50.000 - Rp 1.000.000', '50'),
(2, 'Rp 1.000.000 - Rp 2.000.000', '40'),
(3, 'Rp 2.000.000 - Rp 4.000.000', '20'),
(4, 'Lebih dari Rp 4.000.000', '10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteriaratanilai`
--

CREATE TABLE `kriteriaratanilai` (
  `id_ratanilai` int(11) NOT NULL,
  `ratanilai` varchar(20) NOT NULL,
  `nilai` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `kriteriaratanilai`
--

INSERT INTO `kriteriaratanilai` (`id_ratanilai`, `ratanilai`, `nilai`) VALUES
(1, '91', '40'),
(2, '81', '30'),
(3, '61', '20'),
(4, '60', '10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteriatanggungan`
--

CREATE TABLE `kriteriatanggungan` (
  `id_tanggungan` int(11) NOT NULL,
  `tanggungan` varchar(20) NOT NULL,
  `nilai` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `kriteriatanggungan`
--

INSERT INTO `kriteriatanggungan` (`id_tanggungan`, `tanggungan`, `nilai`) VALUES
(1, '8', '40'),
(2, '5', '30'),
(3, '3', '20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `moo_alternatif`
--

CREATE TABLE `moo_alternatif` (
  `id_alternatif` tinyint(3) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `alternatif` varchar(50) NOT NULL,
  `jarak` varchar(20) NOT NULL,
  `ratanilai` varchar(20) NOT NULL,
  `penghasilan` varchar(20) NOT NULL,
  `tanggungan` varchar(20) NOT NULL,
  `kehadiran` varchar(20) NOT NULL,
  `pendidikan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `moo_alternatif`
--

INSERT INTO `moo_alternatif` (`id_alternatif`, `id_siswa`, `alternatif`, `jarak`, `ratanilai`, `penghasilan`, `tanggungan`, `kehadiran`, `pendidikan`) VALUES
(1, 1, 'Angel Sondang Valerina Sihombing', '4', '71', 'Lebih dari Rp 4.000.', '1', '98', 'SARJANA'),
(2, 2, 'Adelien wina resya', '5', '73', 'Rp 1.000.000 - Rp 2.', '2', '77', 'SARJANA'),
(3, 3, 'Alexander Togar Abadi', '4.5', '89', 'Rp 2.000.000 - Rp 4.', '1', '73', 'SARJANA'),
(4, 4, 'Alexsandra Matilda Eva putri', '2.8', '80', 'Lebih dari Rp 4.000.', '2', '71', 'SMA'),
(5, 5, 'Andreas Arya Satya erland gunawan', '1.9', '70', 'Lebih dari Rp 4.000.', '1', '68', 'SARJANA'),
(6, 6, 'Aqila salsabila mardhiyah', '9.4', '93', 'Rp 1.000.000 - Rp 2.', '2', '83', 'SMA'),
(7, 7, 'Assyifa Nabila Putri', '1.2', '80', 'Rp 50.000 - Rp 1.000', '3', '71', 'SMP'),
(8, 8, 'DAFA ARDIANSYAH', '3.5', '70', 'Rp 1.000.000 - Rp 2.', '4', '74', 'SMA'),
(9, 9, 'Dewi Sekar Ayu', '1.8', '97', 'Rp 1.000.000 - Rp 2.', '1', '88', 'SMP'),
(10, 10, 'Dipa luat Rado sianipar', '1.9', '74', 'Rp 2.000.000 - Rp 4.', '2', '97', 'SARJANA'),
(11, 11, 'Evan Stevano Nainggolan', '2.4', '83', 'Rp 1.000.000 - Rp 2.', '1', '64', 'SARJANA'),
(12, 12, 'Fathonah Assyifa', '5.2', '98', 'Rp 2.000.000 - Rp 4.', '1', '85', 'SMA'),
(13, 13, 'FEBRIAN SCHUBERTH SIAHAYA', '2.7', '93', 'Lebih dari Rp 4.000.', '1', '68', 'SARJANA'),
(14, 14, 'JONGGURAN MAIMA SAMUEL OSCARIO SIJABAT', '1.4', '77', 'Rp 2.000.000 - Rp 4.', '2', '95', 'SARJANA'),
(15, 15, 'KARLDHIKA ARYASATYA', '5.2', '86', 'Lebih dari Rp 4.000.', '3', '62', 'SARJANA'),
(16, 16, 'KESIA KRISNA ELGA PRIANI SITUMORANG', '2.7', '88', 'Rp 2.000.000 - Rp 4.', '1', '62', 'SMA'),
(17, 17, 'Khailla Annisa Putri Susanto', '3.4', '80', 'Rp 2.000.000 - Rp 4.', '1', '73', 'SMA'),
(18, 18, 'M. VIKRI FAJAR ILHAM', '2.6', '73', 'Rp 2.000.000 - Rp 4.', '1', '84', 'SMA'),
(19, 19, 'Margaretha Zefanya Wardhani', '2.6', '65', 'Rp 2.000.000 - Rp 4.', '3', '62', 'SMA'),
(20, 20, 'Maria enti laura barutu', '10.2', '90', 'Rp 2.000.000 - Rp 4.', '1', '75', 'SMA'),
(21, 21, 'Monica Renata Putri Irvandawisnu', '7.4', '90', 'Lebih dari Rp 4.000.', '1', '81', 'SARJANA'),
(22, 22, 'Muhamad Azriel Maulana', '3.3', '82', 'Rp 1.000.000 - Rp 2.', '4', '71', 'SMA'),
(23, 23, 'Muhammad Rafli', '3.5', '73', 'Rp 50.000 - Rp 1.000', '3', '79', 'SD'),
(24, 24, 'Muhammad Rizkky Ramadhan', '1.9', '95', 'Rp 1.000.000 - Rp 2.', '4', '100', 'SMA'),
(25, 25, 'Muhammad Zidan', '1.2', '89', 'Rp 2.000.000 - Rp 4.', '3', '77', 'SMA'),
(26, 26, 'NADIA UTAMI', '3.5', '96', 'Rp 2.000.000 - Rp 4.', '4', '75', 'SMA'),
(27, 27, 'NAILAH PUTRI SYABANI', '1.8', '96', 'Rp 1.000.000 - Rp 2.', '2', '66', 'SMA'),
(28, 28, 'NAJWA ALFINA ZAHIRA', '1.9', '77', 'Rp 2.000.000 - Rp 4.', '3', '93', 'SMA'),
(29, 29, 'Naurah natasia', '2.4', '76', 'Rp 50.000 - Rp 1.000', '2', '66', 'SMP'),
(30, 30, 'Naysilla nursyifa', '5.2', '97', 'Lebih dari Rp 4.000.', '2', '90', 'SMA'),
(31, 31, 'Nur Maqrifah ', '2.7', '94', 'Rp 1.000.000 - Rp 2.', '2', '67', 'SMA'),
(32, 32, 'Panji Rosiyanto', '1.4', '85', 'Rp 2.000.000 - Rp 4.', '2', '81', 'SMA'),
(33, 33, 'Rahmadianti Nursayfitri', '5.2', '87', 'Rp 50.000 - Rp 1.000', '1', '78', 'SMA'),
(34, 34, 'Syahnaz Aprilia Mandai', '2.7', '70', 'Rp 50.000 - Rp 1.000', '1', '93', 'SMA'),
(35, 35, 'Tesalonika Felicia Dameria Nababan', '3.8', '95', 'Lebih dari Rp 4.000.', '1', '98', 'SARJANA'),
(36, 36, 'Yohana Theresia Nababan', '2.6', '75', 'Rp 2.000.000 - Rp 4.', '4', '65', 'SMA'),
(37, 37, 'Agnes Martha Pasaribu', '2.6', '79', 'Lebih dari Rp 4.000.', '3', '72', 'SARJANA'),
(38, 38, 'Albert Darius Budiman', '1.9', '84', 'Rp 2.000.000 - Rp 4.', '3', '89', 'SMA'),
(39, 39, 'Angel Antonio Wattimena', '1.4', '90', 'Rp 2.000.000 - Rp 4.', '1', '73', 'SMA'),
(40, 40, 'Anggun Adelia', '3.3', '88', 'Rp 2.000.000 - Rp 4.', '1', '65', 'SMA'),
(41, 41, 'Anisah diah apriani', '3.5', '89', 'Rp 2.000.000 - Rp 4.', '3', '95', 'SMP'),
(42, 42, 'ashiila Andini putri a', '1.9', '98', 'Rp 2.000.000 - Rp 4.', '2', '62', 'SARJANA'),
(43, 43, 'Briyan V.Kapitan', '2.7', '98', 'Rp 50.000 - Rp 1.000', '3', '78', 'SMA'),
(44, 44, 'CLARISA VALERINA SIAHAAN', '11.2', '71', 'Rp 2.000.000 - Rp 4.', '5', '95', 'SMA'),
(45, 45, 'Daud Immanuel', '5.2', '68', 'Rp 1.000.000 - Rp 2.', '5', '71', 'SMA'),
(46, 46, 'Dewi Anggraeni', '2.7', '82', 'Rp 2.000.000 - Rp 4.', '2', '65', 'SMA'),
(47, 47, 'Dzaky arrosyid', '6.4', '81', 'Rp 50.000 - Rp 1.000', '4', '93', 'SMA'),
(48, 48, 'Gabriel Roberto Saragih', '2.6', '83', 'Lebih dari Rp 4.000.', '3', '91', 'SMA'),
(49, 49, 'Hanny zaskia septiani', '6.6', '94', 'Rp 2.000.000 - Rp 4.', '1', '84', 'SMA'),
(50, 50, 'Intan Auralia Fatimah', '1.2', '79', 'Rp 50.000 - Rp 1.000', '3', '87', 'SMA'),
(51, 51, 'JOSEPHINE ARTATI LASMIDA SINAGA', '1.4', '89', 'Lebih dari Rp 4.000.', '3', '97', 'SARJANA'),
(52, 52, 'Leonarwin del Grosso Nainggolan', '3.3', '93', 'Rp 2.000.000 - Rp 4.', '3', '81', 'SMA'),
(53, 53, 'Maria Shania Marcella Napitupulu ', '3.5', '72', 'Rp 1.000.000 - Rp 2.', '4', '75', 'SMA'),
(54, 54, 'Michael Okber Constantinovel Wantania', '1.9', '93', 'Rp 50.000 - Rp 1.000', '3', '73', 'SMA'),
(55, 55, 'Muhammad Asyafiq Hardiantono', '1.4', '86', 'Rp 2.000.000 - Rp 4.', '2', '75', 'SMA'),
(56, 56, 'MUHAMMAD FAWWAZ FADHLULLAH', '9.2', '98', 'Rp 1.000.000 - Rp 2.', '5', '73', 'SMA'),
(57, 57, 'Muhammad Nabiel Alkhalifi', '6.7', '85', 'Lebih dari Rp 4.000.', '4', '66', 'SMA'),
(58, 58, 'Nabila Apriliyani', '3.4', '87', 'Rp 2.000.000 - Rp 4.', '2', '74', 'SD'),
(59, 59, 'Nadya Putri Pratama', '2.6', '84', 'Rp 2.000.000 - Rp 4.', '3', '84', 'SD'),
(60, 60, 'Najwa Rahmatillah ', '2.6', '66', 'Rp 50.000 - Rp 1.000', '2', '68', 'DIPLOMA'),
(61, 61, 'Nasswa Nuraini', '1.2', '90', 'Lebih dari Rp 4.000.', '4', '72', 'SMA'),
(62, 62, 'NUR ABIL', '11.4', '86', 'Rp 50.000 - Rp 1.000', '4', '73', 'SMP'),
(63, 63, 'Putri Ayu Nurliyani', '3.3', '93', 'Rp 1.000.000 - Rp 2.', '1', '83', 'SMA'),
(64, 64, 'Rajib Khalifah ', '3.5', '73', 'Rp 50.000 - Rp 1.000', '1', '81', 'SMP'),
(65, 65, 'Restu Bumi Kanahaya Prianggodo', '1.9', '83', 'Rp 1.000.000 - Rp 2.', '2', '77', 'SMA'),
(66, 66, 'Saskia asmorowati', '2.7', '73', 'Rp 2.000.000 - Rp 4.', '6', '68', 'SMA'),
(67, 67, 'Tubagus aal maulana', '3.4', '89', 'Rp 50.000 - Rp 1.000', '3', '62', 'SARJANA'),
(68, 68, 'William justinico Pandjaitan', '2.6', '79', 'Rp 2.000.000 - Rp 4.', '3', '87', 'SARJANA'),
(69, 69, 'Yoanna Refris Meilan', '2.6', '77', 'Rp 50.000 - Rp 1.000', '2', '87', 'DIPLOMA'),
(70, 70, 'Yoshua Angga Ayal', '10.2', '65', 'Rp 2.000.000 - Rp 4.', '1', '98', 'SARJANA'),
(71, 71, 'Bunga Raudhatul Jannah', '1.4', '81', 'Rp 2.000.000 - Rp 4.', '2', '77', 'DIPLOMA'),
(72, 72, 'Ahmad Hendra Adikurnia', '5.3', '96', 'Rp 2.000.000 - Rp 4.', '4', '74', 'SMA'),
(73, 73, 'ALBAN DARELL IBNU JALALLUDIN', '3.5', '83', 'Rp 2.000.000 - Rp 4.', '3', '72', 'SMA'),
(74, 74, 'Alya Dwi Anjani', '4.5', '84', 'Rp 50.000 - Rp 1.000', '3', '70', 'SMP'),
(75, 75, 'AMELIA APRILIYANTI', '2.8', '87', 'Rp 2.000.000 - Rp 4.', '4', '67', 'SD'),
(76, 76, 'Andra ibrahimovic', '1.9', '96', 'Rp 2.000.000 - Rp 4.', '2', '82', 'SMA'),
(77, 77, 'Anisa aulia', '9.4', '78', 'Rp 50.000 - Rp 1.000', '3', '66', 'SMA'),
(78, 78, 'ARDY FIRMANSYAH', '1.2', '75', 'Rp 2.000.000 - Rp 4.', '1', '95', 'SMP'),
(79, 79, 'Citra Riany Pertiwi', '1.4', '73', 'Lebih dari Rp 4.000.', '1', '81', 'SARJANA'),
(80, 80, 'Clarisyah Luvilianti Putri Ariella', '3.3', '89', 'Rp 50.000 - Rp 1.000', '1', '99', 'SMA'),
(81, 81, 'Fadhilla Adhia Garini', '3.5', '77', 'Rp 1.000.000 - Rp 2.', '3', '93', 'SMA'),
(82, 82, 'Farah Nur Azizah', '3.9', '78', 'Rp 2.000.000 - Rp 4.', '3', '70', 'SMA'),
(83, 83, 'Fira Syah Fitri', '1.4', '87', 'Rp 2.000.000 - Rp 4.', '2', '65', 'SMA'),
(84, 84, 'GHULAM MUHAMMAD IHSAN', '8.2', '89', 'Lebih dari Rp 4.000.', '1', '60', 'SARJANA'),
(85, 85, 'Jaufi Azhar fadhil', '2.7', '95', 'Rp 1.000.000 - Rp 2.', '3', '90', 'SMA'),
(86, 86, 'Keyza Aprillia Hafsah Fauzi', '3.4', '80', 'Rp 2.000.000 - Rp 4.', '3', '82', 'SMA'),
(87, 87, 'LUQMAN COKRO LONGSO', '2.6', '82', 'Rp 1.000.000 - Rp 2.', '2', '66', 'SMA'),
(88, 88, 'Marsya Dewi Anjani', '2.6', '83', 'Rp 1.000.000 - Rp 2.', '1', '87', 'SMA'),
(89, 89, 'Maulidina Eka Riswanti', '8.2', '87', 'Rp 2.000.000 - Rp 4.', '3', '60', 'SMA'),
(90, 90, 'Muhamad andhika nugraha', '1.4', '91', 'Rp 2.000.000 - Rp 4.', '3', '69', 'SMA'),
(91, 91, 'MUHAMAD RAIHAN FAUZI', '3.3', '97', 'Rp 2.000.000 - Rp 4.', '3', '81', 'SMA'),
(92, 92, 'Muhammad Raafi Ilham', '3.5', '80', 'Rp 2.000.000 - Rp 4.', '2', '83', 'SMA'),
(93, 93, 'MUHAMMAD ZAKY NAWAWI', '1.9', '89', 'Lebih dari Rp 4.000.', '2', '88', 'SARJANA'),
(94, 94, 'Nabila Salwa Salsabila', '2.7', '93', 'Rp 1.000.000 - Rp 2.', '3', '98', 'SMP'),
(95, 95, 'Nadia Rahmadina', '3.4', '95', 'Rp 2.000.000 - Rp 4.', '1', '98', 'SMA'),
(96, 96, 'Nadine Aprilia', '3.6', '87', 'Rp 2.000.000 - Rp 4.', '6', '67', 'SMA'),
(97, 97, 'NALA TANISA', '5.6', '85', 'Rp 2.000.000 - Rp 4.', '4', '78', 'SMA'),
(98, 98, 'Nastiti Mahanani', '3.2', '84', 'Rp 1.000.000 - Rp 2.', '2', '69', 'SMA'),
(99, 99, 'Naufal Syauqiy hafidz', '5.4', '78', 'Lebih dari Rp 4.000.', '2', '79', 'SMA'),
(100, 100, 'NIKITA INDRIANI RAHMADITA', '6.2', '89', 'Rp 2.000.000 - Rp 4.', '5', '80', 'SD');

-- --------------------------------------------------------

--
-- Struktur dari tabel `moo_kriteria`
--

CREATE TABLE `moo_kriteria` (
  `id_kriteria` tinyint(3) UNSIGNED NOT NULL,
  `kode` varchar(5) NOT NULL,
  `kriteria` varchar(100) NOT NULL,
  `type` set('Benefit','Cost') NOT NULL,
  `bobot` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `moo_kriteria`
--

INSERT INTO `moo_kriteria` (`id_kriteria`, `kode`, `kriteria`, `type`, `bobot`) VALUES
(1, 'C1', 'Penghasilan Orang Tua', 'Cost', 0.3),
(2, 'C2', 'Jarak yang Ditempuh', 'Cost', 0.15),
(3, 'C3', 'Jumlah Tanggungan', 'Benefit', 0.25),
(4, 'C4', 'Pendidikan Terakhir Orang Tua', 'Benefit', 0.15),
(5, 'C5', 'Nilai Rata-Rata Siswa', 'Benefit', 0.1),
(6, 'C6', 'Kehadiran Siswa ku murah', 'Benefit', 0.05);

-- --------------------------------------------------------

--
-- Struktur dari tabel `moo_nilai`
--

CREATE TABLE `moo_nilai` (
  `id_nilai` int(11) UNSIGNED NOT NULL,
  `id_alternatif` tinyint(3) UNSIGNED DEFAULT NULL,
  `id_kriteria` tinyint(3) UNSIGNED DEFAULT NULL,
  `nilai` tinyint(3) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `moo_nilai`
--

INSERT INTO `moo_nilai` (`id_nilai`, `id_alternatif`, `id_kriteria`, `nilai`) VALUES
(1, 51, 1, 10),
(2, 51, 2, 10),
(3, 51, 3, 20),
(4, 51, 4, 10),
(5, 51, 5, 30),
(6, 51, 6, 30),
(7, 65, 1, 30),
(8, 65, 2, 10),
(9, 65, 3, 10),
(10, 65, 4, 30),
(11, 65, 5, 30),
(12, 65, 6, 20),
(13, 66, 1, 20),
(14, 66, 2, 10),
(15, 66, 3, 30),
(16, 66, 4, 30),
(17, 66, 5, 20),
(18, 66, 6, 10),
(19, 67, 1, 40),
(20, 67, 2, 20),
(21, 67, 3, 20),
(22, 67, 4, 10),
(23, 67, 5, 30),
(24, 67, 6, 10),
(25, 68, 1, 20),
(26, 68, 2, 10),
(27, 68, 3, 20),
(28, 68, 4, 10),
(29, 68, 5, 20),
(30, 68, 6, 20),
(31, 69, 1, 40),
(32, 69, 2, 10),
(33, 69, 3, 10),
(34, 69, 4, 20),
(35, 69, 5, 20),
(36, 69, 6, 20),
(37, 70, 1, 20),
(38, 70, 2, 40),
(39, 70, 3, 10),
(40, 70, 4, 10),
(41, 70, 5, 20),
(42, 70, 6, 30),
(43, 71, 1, 20),
(44, 71, 2, 10),
(45, 71, 3, 10),
(46, 71, 4, 20),
(47, 71, 5, 30),
(48, 71, 6, 20),
(49, 72, 1, 20),
(50, 72, 2, 30),
(51, 72, 3, 20),
(52, 72, 4, 30),
(53, 72, 5, 40),
(54, 72, 6, 20),
(55, 73, 1, 20),
(56, 73, 2, 20),
(57, 73, 3, 20),
(58, 73, 4, 30),
(59, 73, 5, 30),
(60, 73, 6, 20),
(61, 74, 1, 40),
(62, 74, 2, 20),
(63, 74, 3, 20),
(64, 74, 4, 40),
(65, 74, 5, 30),
(66, 74, 6, 20),
(67, 64, 1, 40),
(68, 64, 2, 20),
(69, 64, 3, 10),
(70, 64, 4, 40),
(71, 64, 5, 20),
(72, 64, 6, 20),
(73, 63, 1, 30),
(74, 63, 2, 20),
(75, 63, 3, 10),
(76, 63, 4, 30),
(77, 63, 5, 40),
(78, 63, 6, 20),
(79, 62, 1, 40),
(80, 62, 2, 40),
(81, 62, 3, 20),
(82, 62, 4, 40),
(83, 62, 5, 30),
(84, 62, 6, 20),
(85, 52, 1, 20),
(86, 52, 2, 20),
(87, 52, 3, 20),
(88, 52, 4, 30),
(89, 52, 5, 40),
(90, 52, 6, 20),
(91, 53, 1, 30),
(92, 53, 2, 20),
(93, 53, 3, 20),
(94, 53, 4, 30),
(95, 53, 5, 20),
(96, 53, 6, 20),
(97, 54, 1, 40),
(98, 54, 2, 10),
(99, 54, 3, 20),
(100, 54, 4, 30),
(101, 54, 5, 40),
(102, 54, 6, 20),
(103, 55, 1, 20),
(104, 55, 2, 10),
(105, 55, 3, 10),
(106, 55, 4, 30),
(107, 55, 5, 30),
(108, 55, 6, 20),
(109, 56, 1, 30),
(110, 56, 2, 30),
(111, 56, 3, 30),
(112, 56, 4, 30),
(113, 56, 5, 40),
(114, 56, 6, 20),
(115, 57, 1, 10),
(116, 57, 2, 30),
(117, 57, 3, 20),
(118, 57, 4, 30),
(119, 57, 5, 30),
(120, 57, 6, 10),
(121, 58, 1, 20),
(122, 58, 2, 20),
(123, 58, 3, 10),
(124, 58, 4, 50),
(125, 58, 5, 30),
(126, 58, 6, 20),
(127, 59, 1, 20),
(128, 59, 2, 10),
(129, 59, 3, 20),
(130, 59, 4, 50),
(131, 59, 5, 30),
(132, 59, 6, 20),
(133, 60, 1, 40),
(134, 60, 2, 10),
(135, 60, 3, 10),
(136, 60, 4, 20),
(137, 60, 5, 20),
(138, 60, 6, 10),
(139, 61, 1, 10),
(140, 61, 2, 10),
(141, 61, 3, 20),
(142, 61, 4, 30),
(143, 61, 5, 30),
(144, 61, 6, 20),
(145, 75, 1, 20),
(146, 75, 2, 10),
(147, 75, 3, 20),
(148, 75, 4, 50),
(149, 75, 5, 30),
(150, 75, 6, 10),
(151, 76, 1, 20),
(152, 76, 2, 10),
(153, 76, 3, 10),
(154, 76, 4, 30),
(155, 76, 5, 40),
(156, 76, 6, 20),
(157, 90, 1, 20),
(158, 90, 2, 10),
(159, 90, 3, 20),
(160, 90, 4, 30),
(161, 90, 5, 40),
(162, 90, 6, 10),
(163, 91, 1, 20),
(164, 91, 2, 20),
(165, 91, 3, 20),
(166, 91, 4, 30),
(167, 91, 5, 40),
(168, 91, 6, 20),
(169, 92, 1, 20),
(170, 92, 2, 20),
(171, 92, 3, 10),
(172, 92, 4, 30),
(173, 92, 5, 20),
(174, 92, 6, 20),
(175, 93, 1, 10),
(176, 93, 2, 10),
(177, 93, 3, 10),
(178, 93, 4, 10),
(179, 93, 5, 30),
(180, 93, 6, 20),
(181, 94, 1, 30),
(182, 94, 2, 10),
(183, 94, 3, 20),
(184, 94, 4, 40),
(185, 94, 5, 40),
(186, 94, 6, 30),
(187, 95, 1, 20),
(188, 95, 2, 20),
(189, 95, 3, 10),
(190, 95, 4, 30),
(191, 95, 5, 40),
(192, 95, 6, 30),
(193, 96, 1, 20),
(194, 96, 2, 20),
(195, 96, 3, 30),
(196, 96, 4, 30),
(197, 96, 5, 30),
(198, 96, 6, 10),
(199, 97, 1, 20),
(200, 97, 2, 30),
(201, 97, 3, 20),
(202, 97, 4, 30),
(203, 97, 5, 30),
(204, 97, 6, 20),
(205, 98, 1, 30),
(206, 98, 2, 20),
(207, 98, 3, 10),
(208, 98, 4, 30),
(209, 98, 5, 30),
(210, 98, 6, 10),
(211, 99, 1, 10),
(212, 99, 2, 30),
(213, 99, 3, 10),
(214, 99, 4, 30),
(215, 99, 5, 20),
(216, 99, 6, 20),
(217, 89, 1, 20),
(218, 89, 2, 30),
(219, 89, 3, 20),
(220, 89, 4, 30),
(221, 89, 5, 30),
(222, 89, 6, 10),
(223, 88, 1, 30),
(224, 88, 2, 10),
(225, 88, 3, 10),
(226, 88, 4, 30),
(227, 88, 5, 30),
(228, 88, 6, 20),
(229, 87, 1, 30),
(230, 87, 2, 10),
(231, 87, 3, 10),
(232, 87, 4, 30),
(233, 87, 5, 30),
(234, 87, 6, 10),
(235, 77, 1, 40),
(236, 77, 2, 30),
(237, 77, 3, 20),
(238, 77, 4, 30),
(239, 77, 5, 20),
(240, 77, 6, 10),
(241, 78, 1, 20),
(242, 78, 2, 10),
(243, 78, 3, 10),
(244, 78, 4, 40),
(245, 78, 5, 20),
(246, 78, 6, 30),
(247, 79, 1, 10),
(248, 79, 2, 10),
(249, 79, 3, 10),
(250, 79, 4, 10),
(251, 79, 5, 20),
(252, 79, 6, 20),
(253, 80, 1, 40),
(254, 80, 2, 20),
(255, 80, 3, 10),
(256, 80, 4, 30),
(257, 80, 5, 30),
(258, 80, 6, 30),
(259, 81, 1, 30),
(260, 81, 2, 20),
(261, 81, 3, 20),
(262, 81, 4, 30),
(263, 81, 5, 20),
(264, 81, 6, 30),
(265, 82, 1, 20),
(266, 82, 2, 20),
(267, 82, 3, 20),
(268, 82, 4, 30),
(269, 82, 5, 20),
(270, 82, 6, 20),
(271, 83, 1, 20),
(272, 83, 2, 10),
(273, 83, 3, 10),
(274, 83, 4, 30),
(275, 83, 5, 30),
(276, 83, 6, 10),
(277, 84, 1, 10),
(278, 84, 2, 30),
(279, 84, 3, 10),
(280, 84, 4, 10),
(281, 84, 5, 30),
(282, 84, 6, 10),
(283, 85, 1, 30),
(284, 85, 2, 10),
(285, 85, 3, 20),
(286, 85, 4, 30),
(287, 85, 5, 40),
(288, 85, 6, 30),
(289, 86, 1, 20),
(290, 86, 2, 20),
(291, 86, 3, 20),
(292, 86, 4, 30),
(293, 86, 5, 20),
(294, 86, 6, 20),
(295, 100, 1, 20),
(296, 100, 2, 30),
(297, 100, 3, 30),
(298, 100, 4, 50),
(299, 100, 5, 30),
(300, 100, 6, 20),
(301, 1, 1, 10),
(302, 1, 2, 20),
(303, 1, 3, 10),
(304, 1, 4, 10),
(305, 1, 5, 20),
(306, 1, 6, 30),
(307, 15, 1, 10),
(308, 15, 2, 30),
(309, 15, 3, 20),
(310, 15, 4, 10),
(311, 15, 5, 30),
(312, 15, 6, 10),
(313, 16, 1, 20),
(314, 16, 2, 10),
(315, 16, 3, 10),
(316, 16, 4, 30),
(317, 16, 5, 30),
(318, 16, 6, 10),
(319, 17, 1, 20),
(320, 17, 2, 20),
(321, 17, 3, 10),
(322, 17, 4, 30),
(323, 17, 5, 20),
(324, 17, 6, 20),
(325, 18, 1, 20),
(326, 18, 2, 10),
(327, 18, 3, 10),
(328, 18, 4, 30),
(329, 18, 5, 20),
(330, 18, 6, 20),
(331, 19, 1, 20),
(332, 19, 2, 10),
(333, 19, 3, 20),
(334, 19, 4, 30),
(335, 19, 5, 20),
(336, 19, 6, 10),
(337, 20, 1, 20),
(338, 20, 2, 40),
(339, 20, 3, 10),
(340, 20, 4, 30),
(341, 20, 5, 30),
(342, 20, 6, 20),
(343, 21, 1, 10),
(344, 21, 2, 30),
(345, 21, 3, 10),
(346, 21, 4, 10),
(347, 21, 5, 30),
(348, 21, 6, 20),
(349, 22, 1, 30),
(350, 22, 2, 20),
(351, 22, 3, 20),
(352, 22, 4, 30),
(353, 22, 5, 30),
(354, 22, 6, 20),
(355, 23, 1, 40),
(356, 23, 2, 20),
(357, 23, 3, 20),
(358, 23, 4, 50),
(359, 23, 5, 20),
(360, 23, 6, 20),
(361, 24, 1, 30),
(362, 24, 2, 10),
(363, 24, 3, 20),
(364, 24, 4, 30),
(365, 24, 5, 40),
(366, 24, 6, 30),
(367, 14, 1, 20),
(368, 14, 2, 10),
(369, 14, 3, 10),
(370, 14, 4, 10),
(371, 14, 5, 20),
(372, 14, 6, 30),
(373, 13, 1, 10),
(374, 13, 2, 10),
(375, 13, 3, 10),
(376, 13, 4, 10),
(377, 13, 5, 40),
(378, 13, 6, 10),
(379, 12, 1, 20),
(380, 12, 2, 30),
(381, 12, 3, 10),
(382, 12, 4, 30),
(383, 12, 5, 40),
(384, 12, 6, 20),
(385, 2, 1, 30),
(386, 2, 2, 20),
(387, 2, 3, 10),
(388, 2, 4, 10),
(389, 2, 5, 20),
(390, 2, 6, 20),
(391, 3, 1, 20),
(392, 3, 2, 20),
(393, 3, 3, 10),
(394, 3, 4, 10),
(395, 3, 5, 30),
(396, 3, 6, 20),
(397, 4, 1, 10),
(398, 4, 2, 10),
(399, 4, 3, 10),
(400, 4, 4, 30),
(401, 4, 5, 20),
(402, 4, 6, 20),
(403, 5, 1, 10),
(404, 5, 2, 10),
(405, 5, 3, 10),
(406, 5, 4, 10),
(407, 5, 5, 20),
(408, 5, 6, 10),
(409, 6, 1, 30),
(410, 6, 2, 30),
(411, 6, 3, 10),
(412, 6, 4, 30),
(413, 6, 5, 40),
(414, 6, 6, 20),
(415, 7, 1, 40),
(416, 7, 2, 10),
(417, 7, 3, 20),
(418, 7, 4, 40),
(419, 7, 5, 20),
(420, 7, 6, 20),
(421, 8, 1, 30),
(422, 8, 2, 20),
(423, 8, 3, 20),
(424, 8, 4, 30),
(425, 8, 5, 20),
(426, 8, 6, 20),
(427, 9, 1, 30),
(428, 9, 2, 10),
(429, 9, 3, 10),
(430, 9, 4, 40),
(431, 9, 5, 40),
(432, 9, 6, 20),
(433, 10, 1, 20),
(434, 10, 2, 10),
(435, 10, 3, 10),
(436, 10, 4, 10),
(437, 10, 5, 20),
(438, 10, 6, 30),
(439, 11, 1, 30),
(440, 11, 2, 10),
(441, 11, 3, 10),
(442, 11, 4, 10),
(443, 11, 5, 30),
(444, 11, 6, 10),
(445, 25, 1, 20),
(446, 25, 2, 10),
(447, 25, 3, 20),
(448, 25, 4, 30),
(449, 25, 5, 30),
(450, 25, 6, 20),
(451, 26, 1, 20),
(452, 26, 2, 20),
(453, 26, 3, 20),
(454, 26, 4, 30),
(455, 26, 5, 40),
(456, 26, 6, 20),
(457, 40, 1, 20),
(458, 40, 2, 20),
(459, 40, 3, 10),
(460, 40, 4, 30),
(461, 40, 5, 30),
(462, 40, 6, 10),
(463, 41, 1, 20),
(464, 41, 2, 20),
(465, 41, 3, 20),
(466, 41, 4, 40),
(467, 41, 5, 30),
(468, 41, 6, 30),
(469, 42, 1, 20),
(470, 42, 2, 10),
(471, 42, 3, 10),
(472, 42, 4, 10),
(473, 42, 5, 40),
(474, 42, 6, 10),
(475, 43, 1, 40),
(476, 43, 2, 10),
(477, 43, 3, 20),
(478, 43, 4, 30),
(479, 43, 5, 40),
(480, 43, 6, 20),
(481, 44, 1, 20),
(482, 44, 2, 40),
(483, 44, 3, 30),
(484, 44, 4, 30),
(485, 44, 5, 20),
(486, 44, 6, 30),
(487, 45, 1, 30),
(488, 45, 2, 30),
(489, 45, 3, 30),
(490, 45, 4, 30),
(491, 45, 5, 20),
(492, 45, 6, 20),
(493, 46, 1, 20),
(494, 46, 2, 10),
(495, 46, 3, 10),
(496, 46, 4, 30),
(497, 46, 5, 30),
(498, 46, 6, 10),
(499, 47, 1, 40),
(500, 47, 2, 30),
(501, 47, 3, 20),
(502, 47, 4, 30),
(503, 47, 5, 30),
(504, 47, 6, 30),
(505, 48, 1, 10),
(506, 48, 2, 10),
(507, 48, 3, 20),
(508, 48, 4, 30),
(509, 48, 5, 30),
(510, 48, 6, 30),
(511, 49, 1, 20),
(512, 49, 2, 30),
(513, 49, 3, 10),
(514, 49, 4, 30),
(515, 49, 5, 40),
(516, 49, 6, 20),
(517, 39, 1, 20),
(518, 39, 2, 10),
(519, 39, 3, 10),
(520, 39, 4, 30),
(521, 39, 5, 30),
(522, 39, 6, 20),
(523, 38, 1, 20),
(524, 38, 2, 10),
(525, 38, 3, 20),
(526, 38, 4, 30),
(527, 38, 5, 30),
(528, 38, 6, 20),
(529, 37, 1, 10),
(530, 37, 2, 10),
(531, 37, 3, 20),
(532, 37, 4, 10),
(533, 37, 5, 20),
(534, 37, 6, 20),
(535, 27, 1, 30),
(536, 27, 2, 10),
(537, 27, 3, 10),
(538, 27, 4, 30),
(539, 27, 5, 40),
(540, 27, 6, 10),
(541, 28, 1, 20),
(542, 28, 2, 10),
(543, 28, 3, 20),
(544, 28, 4, 30),
(545, 28, 5, 20),
(546, 28, 6, 30),
(547, 29, 1, 40),
(548, 29, 2, 10),
(549, 29, 3, 10),
(550, 29, 4, 40),
(551, 29, 5, 20),
(552, 29, 6, 10),
(553, 30, 1, 10),
(554, 30, 2, 30),
(555, 30, 3, 10),
(556, 30, 4, 30),
(557, 30, 5, 40),
(558, 30, 6, 30),
(559, 31, 1, 30),
(560, 31, 2, 10),
(561, 31, 3, 10),
(562, 31, 4, 30),
(563, 31, 5, 40),
(564, 31, 6, 10),
(565, 32, 1, 20),
(566, 32, 2, 10),
(567, 32, 3, 10),
(568, 32, 4, 30),
(569, 32, 5, 30),
(570, 32, 6, 20),
(571, 33, 1, 40),
(572, 33, 2, 30),
(573, 33, 3, 10),
(574, 33, 4, 30),
(575, 33, 5, 30),
(576, 33, 6, 20),
(577, 34, 1, 40),
(578, 34, 2, 10),
(579, 34, 3, 10),
(580, 34, 4, 30),
(581, 34, 5, 20),
(582, 34, 6, 30),
(583, 35, 1, 10),
(584, 35, 2, 20),
(585, 35, 3, 10),
(586, 35, 4, 10),
(587, 35, 5, 40),
(588, 35, 6, 30),
(589, 36, 1, 20),
(590, 36, 2, 10),
(591, 36, 3, 20),
(592, 36, 4, 30),
(593, 36, 5, 20),
(594, 36, 6, 10),
(595, 50, 1, 40),
(596, 50, 2, 10),
(597, 50, 3, 20),
(598, 50, 4, 30),
(599, 50, 5, 20),
(600, 50, 6, 20);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_acc`
--

CREATE TABLE `user_acc` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(42) NOT NULL,
  `level` enum('User') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_acc`
--

INSERT INTO `user_acc` (`id_user`, `nama_user`, `username`, `password`, `level`) VALUES
(1, 'Rasyid Misbahuddin', 'rasyidm', '5b6ba13f79129a74a3e819b78e36b922', 'User'),
(2, 'rasyid', 'rasyid', '21232f297a57a5a743894a0e4a801fc3', 'User');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin_acc`
--
ALTER TABLE `admin_acc`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indeks untuk tabel `kriteriajarak`
--
ALTER TABLE `kriteriajarak`
  ADD PRIMARY KEY (`id_jarak`);

--
-- Indeks untuk tabel `kriteriakehadiran`
--
ALTER TABLE `kriteriakehadiran`
  ADD PRIMARY KEY (`id_kehadiran`);

--
-- Indeks untuk tabel `kriteriapendidikan`
--
ALTER TABLE `kriteriapendidikan`
  ADD PRIMARY KEY (`id_pendidikan`);

--
-- Indeks untuk tabel `kriteriapenghasilanortu`
--
ALTER TABLE `kriteriapenghasilanortu`
  ADD PRIMARY KEY (`id_penghasilan`);

--
-- Indeks untuk tabel `kriteriaratanilai`
--
ALTER TABLE `kriteriaratanilai`
  ADD PRIMARY KEY (`id_ratanilai`);

--
-- Indeks untuk tabel `kriteriatanggungan`
--
ALTER TABLE `kriteriatanggungan`
  ADD PRIMARY KEY (`id_tanggungan`);

--
-- Indeks untuk tabel `moo_alternatif`
--
ALTER TABLE `moo_alternatif`
  ADD PRIMARY KEY (`id_alternatif`),
  ADD KEY `id_alat` (`id_siswa`);

--
-- Indeks untuk tabel `moo_kriteria`
--
ALTER TABLE `moo_kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indeks untuk tabel `moo_nilai`
--
ALTER TABLE `moo_nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indeks untuk tabel `user_acc`
--
ALTER TABLE `user_acc`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin_acc`
--
ALTER TABLE `admin_acc`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kriteriajarak`
--
ALTER TABLE `kriteriajarak`
  MODIFY `id_jarak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `kriteriakehadiran`
--
ALTER TABLE `kriteriakehadiran`
  MODIFY `id_kehadiran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `kriteriapendidikan`
--
ALTER TABLE `kriteriapendidikan`
  MODIFY `id_pendidikan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `kriteriapenghasilanortu`
--
ALTER TABLE `kriteriapenghasilanortu`
  MODIFY `id_penghasilan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `kriteriaratanilai`
--
ALTER TABLE `kriteriaratanilai`
  MODIFY `id_ratanilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `kriteriatanggungan`
--
ALTER TABLE `kriteriatanggungan`
  MODIFY `id_tanggungan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `moo_kriteria`
--
ALTER TABLE `moo_kriteria`
  MODIFY `id_kriteria` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `moo_nilai`
--
ALTER TABLE `moo_nilai`
  MODIFY `id_nilai` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=601;

--
-- AUTO_INCREMENT untuk tabel `user_acc`
--
ALTER TABLE `user_acc`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `moo_alternatif`
--
ALTER TABLE `moo_alternatif`
  ADD CONSTRAINT `moo_alternatif_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `data_siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
