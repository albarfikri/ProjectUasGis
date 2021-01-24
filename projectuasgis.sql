-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2021 at 08:54 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectuasgis`
--

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `id_hotel` int(11) NOT NULL,
  `nama_hotel` varchar(255) DEFAULT NULL,
  `status` varchar(12) NOT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `bintang` int(11) NOT NULL,
  `lat` varchar(255) DEFAULT NULL,
  `lon` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) NOT NULL,
  `ket` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`id_hotel`, `nama_hotel`, `status`, `alamat`, `bintang`, `lat`, `lon`, `gambar`, `ket`) VALUES
(8, 'Grand Zuri Hotel', 'Swasta', 'Jl. Teuku Umar No.7, Rintis, Kec. Lima Puluh, Kota Pekanbaru, Riau 28141', 4, '0.5323518', '101.448799', '26.Grand Zuri Pekanbaru.jpg', 'Hotel mewah di pusat kota ini berjarak satu menit berjalan kaki dari Mal Senapelan Pekanbaru, 5 km dari pameran budaya di Museum Sang Nila Utama, 9 km dari Bandara Internasional Sultan Syarif Kasim II.'),
(9, 'The Premiere Hotel', 'Swasta', 'Jl. Jend. Sudirman No.389, Simpang Empat, Kec. Pekanbaru Kota, Kota Pekanbaru, Riau 28121', 5, '0.5127915', '101.4465195', '2.Premiere.jpg', 'Terletak di sebuah menara tinggi di pusat kota Pekanbaru, hotel mewah ini berjarak 5 km dari Museum Sang Nila Utama dan 3 km dari Perpustakaan Soeman HS Provinsi Riau'),
(10, 'Hotel Aryaduta Pekanbaru', 'Swasta', 'Jl. Diponegoro No.34, Simpang Empat, Kec. Pekanbaru Kota, Kota Pekanbaru, Riau 28116', 5, '0.5205417', '101.4400941', '3.Hotel Aryaduta.jpeg', 'Ini hotelHotel megah yang terletak di antara taman jalanan utama di kawasan pemerintahan ini berjarak 2 km dari Masjid Agung An-Nur Pekanbaru dan 7 km dari Bandara Internasional Sultan Syarif Kasim II.'),
(11, 'Amaris Hotel Pekanbaru', 'Swasta', 'Jalan KH. Wahid Hasyim Pinang Sebatang No.30, Sumahilang, Kec. Pekanbaru Kota, Kota Pekanbaru, Riau 28133', 2, '0.5204988', '101.440137', '4.Amaris.jpg', 'Hotel modern dengan fasad penuh warna di pusat kota ini berjarak 9 km dari Bandara Internasional Sultan Syarif Kasim II, 2 menit berjalan kaki dari Masjid Raya An-Nur Provinsi Riau, dan 3 km dari Kuantan Regency Waterpark'),
(12, 'Hotel Ameera', 'Swasta', 'Jl. Jend. Ahmad Yani No.42A, Tanah Datar, Kec. Senapelan, Kota Pekanbaru, Riau 28156', 3, '0.5205846', '101.4400512', '5.Ameera.jpeg', 'Hotel Ameera terletak di kawasan bisnis Pekanbaru yang aman, nyaman, jauh dari kebisingan kota dan cocok untuk pebisnis dan ekspatriat.'),
(13, 'Hotel Novotel Pekanbaru', 'Swasta', 'Jl. Riau No.59, Kp. Baru, Kec. Senapelan, Kota Pekanbaru, Riau 28154', 4, '0.53541', '101.4208463', '7.Novotel.jpg', 'Terletak di Central Business District, hotel santai ini berjarak 10 km dari Bandara Internasional Sultan Syarif Kasim II dan pameran budaya di Museum Sang Nila Utama'),
(14, 'Grand Jatra Hotel Pekanbaru', 'Swasta', 'Jl. Tengku Zainal Abidin No.1, Kota Tinggi, Kec. Pekanbaru Kota, Kota Pekanbaru, Riau 28116', 5, '0.5307542', '101.4461512', '6.Grand Jatra.jpeg', 'Hotel mewah bergaya kolonial ini berjarak 2 menit berjalan kaki dari Mall Pekanbaru, 9 menit berjalan kaki dari Masjid Agung An-Nur Pekanbaru, dan 5 km dari Museum budaya Sang Nila Utama.'),
(15, 'FOX Hotel Pekanbaru', 'Swasta', 'Jl. Riau No.147, Kp. Baru, Kec. Senapelan, Kota Pekanbaru, Riau 28154', 4, '0.5343958', '101.4272486', '8.FoxHotel.jpeg', 'Menawarkan pemandangan kota, hotel santai ini berjarak 11 km dari Bandara Internasional Sultan Syarif Kasim II dan 20 km dari Boombara Waterpark'),
(16, 'Pesonna Hotel Pekanbaru', 'Swasta', 'Jl. Jend. Sudirman No.455, Simpang Empat, Kec. Pekanbaru Kota, Kota Pekanbaru, Riau 28127', 3, '0.5081629', '101.4422337', '9.Pesonna.jpg', 'Hotel penuh warna dan nyaman yang berada di area yang ramai ini berjarak 2 km dari Museum Sang Nila Utama, yang menyimpan artefak budaya Melayu Riau tradisional, dan 8 km dari Bandara Internasional Sultan Syarif Kasim II.'),
(17, 'Whiz Hotel Sudirman Pekanbaru', 'Swasta', 'Jl. Jend. Sudirman No.345, Sumahilang, Kec. Pekanbaru Kota, Kota Pekanbaru, Riau 28111', 3, '0.5207562', '101.4398795', '10.Whiz.jpg', 'Hotel santai yang dikelilingi restoran di pusat kota ini berjarak 9 menit berjalan kaki dari Masjid Raya An-Nur, 5 km dari Museum Sang Nila Utama, dan 7 km dari Bandara Internasional Sultan Syarif Kasim II.'),
(18, 'Red Planet Hotels Pekanbaru', 'Swasta', 'Jalan Tengku Zainal Abidin No.23 Rejosari, Kota Tinggi, Kec. Pekanbaru Kota, Kota Pekanbaru, Riau 28112', 1, '0.53074', '101.4476103', '28.Red Planet Hotels.jpg', 'Hotel simpel dan murah yang diapit restoran ini terletak di daerah yang ramai, berjarak 9 menit berjalan kaki dari Masjid An-Nur, 4 km dari Stadion Utama Riau, dan 7 km dari toko-toko yang sibuk di Mal Pekanbaru.'),
(19, 'Dharma Utama Hotel', 'Swasta', 'Jl. Sisingamangaraja No.10, Sumahilang, Kec. Pekanbaru Kota, Kota Pekanbaru, Riau 28111', 1, '0.5281996', '101.4459612', '12.Dharma Utama.jpg', 'Dharma Utama terletak di kawasan bisnis Pekanbaru yang aman, nyaman, jauh dari kebisingan kota dan cocok untuk pebisnis dan ekspatriat.'),
(20, 'Cititel Hotel ', 'Swasta', 'Jl. Sisingamangaraja No.32, Sumahilang, Kec. Pekanbaru Kota, Kota Pekanbaru, Riau 28156', 3, '0.5280245', '101.4469459', '13.Cititel Hotel.jpg', 'Hotel kasual yang terletak di area yang ramai dengan pertokoan ini berjarak 1 km dari Masjid Agung An-Nur Pekanbaru, 7 km dari Museum Sang Nila Utama, dan 4 km dari Jembatan Siak 1.'),
(21, 'Grand Hawaii Hotel Pekanbaru', 'Swasta', 'Jl. Gatot Subroto No.8, Kota Tinggi, Kec. Pekanbaru Kota, Kota Pekanbaru, Riau 28115', 3, '0.5295937', '101.4460219', '14.Grand Hawaii.jpg', 'Terletak di jalan yang ramai di dekat jalan raya utama, hotel kasual ini berjarak 1 km dari Masjid Raya An-Nur dan 7 km dari Museum Sang Nila Utama. Bandara Internasional Sultan Syarif Kasim II berjarak 9 km.'),
(22, 'CitiSmart Hotel Bidadari', 'Swasta', 'Jalan Gatot Subroto No.2. CitiSmart, Kota Tinggi, Kec. Pekanbaru Kota, Kota Pekanbaru, Riau 28155', 0, '0.5297545', '101.4459079', '15.City Smart.jpg', 'Terletak di sebuah bangunan dengan eksterior warna-warni dan eklektik, hotel kasual murah ini berjarak satu menit berjalan kaki dari halte bus terdekat dan 9 menit berjalan kaki dari Masjid Agung An Nur.'),
(23, 'RedDoorz Plus', 'Swasta', 'Jl. Teuku Umar No.20A, Kota Tinggi, Kec. Pekanbaru Kota, Kota Pekanbaru, Riau 28155', 0, '0.5321493', '101.4480974', '16.Red doorz plus.jpg', 'Sebuah Hotel Bintang 4 yang Mewah di Pekanbaru\r\n\r\nGrand Elite Hotel Pekanbaru terletak di Pekanbaru yang semarak. Fasilitas dan pelayanan yang ditawarkan Grand Elite Hotel Pekanbaru menjamin masa menginap yang menyenangkan bagi para tamu. Hotel mewah ini menyediakan akses ke sejumlah pelayanan dan fasilitas terbaik yang akan memuaskan segala kebutuhan tamu.'),
(24, 'iShine Hotel', 'Swasta', 'Jl. Jend. Sudirman No.158, Sukaramai, Kec. Pekanbaru Kota, Kota Pekanbaru, Sumatera Barat 28282', 0, '0.5311654', '101.4450724', '17.IShine.jpg', 'Hotel bujet simpel yang terletak di antara pertokoan dan tempat makan kasual ini berjarak 12 menit berjalan kaki dari Masjid Agung An-Nur dan 5 km dari pameran warisan budaya lokal di Museum Sang Nila Utama. Bandara Internasional Sultan Syarif Kasim II berjarak 8 km.'),
(25, 'Zuri Express Pekanbaru', 'Swasta', 'Jl. Gatot Subroto No.39B, Kota Tinggi, Kec. Pekanbaru Kota, Kota Pekanbaru, Riau 28112', 2, '0.5300011', '101.4488919', '18.Zuri Express.jpg', 'Hotel modern murah di gedung memukau ini terletak di jalan dengan berbagai tempat makan, berjarak 6 menit berjalan kaki dari Masjid Raya An-Nur Provinsi Riau dan 9 km dari Bandar Udara Internasional Sultan Syarif Kasim II.\r\n'),
(26, 'Angkasa Garden Hotel Pekanbaru', 'Swasta', 'Jl. Dr. Setia Budhi No.107, Pesisir, Kec. Lima Puluh, Kota Pekanbaru, Riau 28141', 3, '0.5359834', '101.450432', '19.Angkasa Garden.jpg', 'Hotel simpel ini berjarak 9 km dari Taman Wisata Alam Mayang Pekanbaru, dan 2 km dari Waterpark Kuantan Regency serta Masjid Agung An-Nur Provinsi Riau'),
(27, 'Hotel Dafam Pekanbaru', 'Swasta', 'Jl. Sultan Syarif Qasim Kav. 150, Kota Tinggi, Lima Puluh, Kota Tinggi, Kec. Pekanbaru Kota, Kota Pekanbaru, Riau 28155', 3, '0.5305058', '101.4512764', '20.Dafam.jpg', 'Hotel kasual yang berada di jalan yang rindang ini dekat dengan pertokoan dan restoran, serta berjarak 7 km dari pameran budaya di Museum Sang Nila Utama dan Bandara Internasional Sultan Syarif Kasim II.'),
(28, 'New Hollywood Hotel', 'Swasta', 'Jl. Kuantan Raya No.120, Sekip, Kec. Lima Puluh, Kota Pekanbaru, Riau 28151', 3, '0.530538', '101.4446781', '21.New Hollywood.jpg', 'Hotel santai yang dikelilingi kafe dan tempat makan ini berjarak 2 km dari Masjid Agung An Nur yang memiliki 10 kubah dan 4 menara, serta 3 km dari Mal Pekanbaru. Hotel ini berjarak 10 km dari Bandara Internasional Sultan Syarif Kasim II.'),
(29, 'Damon Butik Hotel', 'Swasta', 'Jl. Hangtuah Ujung No.46-A, Suka Mulia, Kec. Sail, Kota Pekanbaru, Riau 28132', 2, '0.5305809', '101.4446352', '22.Damon Butik.jpg', 'Terletak di jalan dengan deretan pepohonan di dekat restoran, hotel kasual murah ini berjarak 8 menit berjalan kaki dari Masjid Agung An-Nur, yang memiliki 10 kubah dan 4 menara. Hotel ini juga berjarak 8 km dari Bandara Internasional Sultan Syarif Kasim II.'),
(30, 'Hotel Edotel Nilam Sari', 'Swasta', 'Jl. Sarwo Edhi No.110, Suka Mulia, Kec. Sail, Kota Pekanbaru, Riau 28156', 2, '0.521619', '101.452752', '23.Edotel Nilam Sari.jpg', 'Hotel simpel dan murah di jalan rindang dekat tempat makan kasual ini berjarak 13 menit berjalan kaki dari Masjid Agung An Nur, masjid luas dengan 10 kubah, 2 km dari terminal bus antarkota.'),
(31, 'Grand Elite Hotel Pekanbaru', 'Swasta', 'Komplek Riau Business Centre, Jl. Riau, Air Hitam, Kec. Payung Sekaki, Kota Pekanbaru, Riau 28292', 4, '0.5321819', '101.4219883', '24.Grand Elite Hotel.jpg', 'Sebuah Hotel Bintang 4 yang Mewah di Pekanbaru\r\n\r\nGrand Elite Hotel Pekanbaru terletak di Pekanbaru yang semarak. Fasilitas dan pelayanan yang ditawarkan Grand Elite Hotel Pekanbaru menjamin masa menginap yang menyenangkan bagi para tamu. Hotel mewah ini menyediakan akses ke sejumlah pelayanan dan fasilitas terbaik yang akan memuaskan segala kebutuhan tamu.'),
(32, 'Hotel Mutiara Merdeka', 'Swasta', 'Jalan Yos Sudarso No.12-A Kampung Bandar, Kp. Baru, Kec. Senapelan, Kota Pekanbaru, Riau 28154', 4, '0.5370935', '101.4338249', '25.Mutiara Merdeka.jpg', 'Di pinggiran kota Pekanbaru, hotel bernuansa hangat ini berjarak 3 km dari Masjid Agung An-Nur, 6 km dari Mall SKA Pekanbaru, dan 10 km dari Bandara Internasional Sultan Syarif Kasim II.'),
(33, 'Grand Zuri Hotel Pekanbaru', 'Swasta', 'Jl. Teuku Umar No.7, Rintis, Kec. Lima Puluh, Kota Pekanbaru, Riau 28141', 4, '0.53515', '101.44796', '1.Grand Zuri.jpg', 'Hotel mewah di pusat kota ini berjarak satu menit berjalan kaki dari Mal Senapelan Pekanbaru, 5 km dari pameran budaya di Museum Sang Nila Utama, 9 km dari Bandara Internasional Sultan Syarif Kasim II.'),
(34, 'Hotel Dafam Pekanbaru', 'Swasta', 'Jl. Sultan Syarif Qasim Kav. 150, Kota Tinggi, Lima Puluh, Kota Tinggi, Kec. Pekanbaru Kota, Kota Pekanbaru, Riau 28155', 3, '0.53643', '101.45286', '20.Dafam.jpg', 'Hotel kasual yang berada di jalan yang rindang ini dekat dengan pertokoan dan restoran, serta berjarak 7 km dari pameran budaya di Museum Sang Nila Utama dan Bandara Internasional Sultan Syarif Kasim II.'),
(35, 'Red Planet Hotels Pekanbaru', 'Swasta', 'Jalan Tengku Zainal Abidin No.23 Rejosari, Kota Tinggi, Kec. Pekanbaru Kota, Kota Pekanbaru, Riau 28112', 1, '0.53486', '101.44920', '11.Red Plannet.jpg', 'Hotel simpel dan murah yang diapit restoran ini terletak di daerah yang ramai, berjarak 9 menit berjalan kaki dari Masjid An-Nur, 4 km dari Stadion Utama Riau, dan 7 km dari toko-toko yang sibuk di Mal Pekanbaru.'),
(36, 'Hotel Tampan', 'Swasta', 'Jl. Riau No.2 A, Kp. Baru, Kec. Senapelan, Kota Pekanbaru, Kepulauan Riau 28284', 0, '0.53985', '101.43356', '29.Tampan.jpg', 'Hotel simpel dan murah yang terletak di jalan sibuk dengan pertokoan dan restoran ini berjarak 5 km dari Water Park Kabupaten Kuantan dan 11 km dari Bandara Internasional Sultan Syarif Kasim II'),
(37, 'Edotel Amanah HOTEL Syariah By Smk Muhammadiyah 1', 'Swasta', 'Jl. Senapelan No.10A, Kp. Bandar, Kec. Senapelan, Kota Pekanbaru, Riau 28155', 0, '0.54194', '101.44110', '30.Edotel Amanah Syariah By Smk Muhammadiyah 1.jpg', 'Edotel Amanah terletak di kawasan bisnis Pekanbaru yang aman, nyaman, jauh dari kebisingan kota dan cocok untuk pebisnis dan ekspatriat.'),
(38, 'Winstar Hotel Pekanbaru', 'Swasta', 'Jl. Moh. Ali No.118, Padang Terubuk, Kec. Senapelan, Kota Pekanbaru, Riau 28155', 3, '0.53588', '101.44141', '31.Winstar.jpg', 'Sebuah Hotel yang Nyaman, Lengkap, dan Terjangkau di Pekanbaru\r\n\r\nTerletak di Pekanbaru, Winstar Hotel Pekanbaru menyediakan pelayanan yang ramah dan fasilitas modern. Kami menjamin masa menginap yang menyenangkan bagi para tamu dengan layanan kami yang personal dan berbagai macam fasilitas modern yang tersedia di hotel kami.'),
(39, 'Hotel Intan', 'Swasta', 'Jl. Tuanku Tambusai No.No, Labuh Baru Tim., Kec. Payung Sekaki, Kota Pekanbaru, Riau 28124', 3, '0.50891', '101.42611', '32.Intan.jpg', 'Hotel Intan terletak di kawasan bisnis Pekanbaru yang aman, nyaman, jauh dari kebisingan kota dan cocok untuk pebisnis dan ekspatriat'),
(40, 'Angkasa Garden Hotel Pekanbaru', 'Swasta', 'Jl. Dr. Setia Budhi No.107, Pesisir, Kec. Lima Puluh, Kota Pekanbaru, Riau 28141', 3, '0.54010', '101.45322', '19.Angkasa Garden.jpg', 'Pilihan akomodasi yang tepat bersama keluarga di Pekanbaru\r\n\r\nAngkasa Garden Hotel,sebuah hotel internasional bintang tiga yang terletak hanya 15 menit dari Sultan Syarif Kasim II Airport.Ketika mengunjungi Pekanbaru,Anda akan merasa seperti di rumah ketika Anda berada di Angkasa Garden Hotel Pekanbaru yang menawarkan akomodasi yang berkualitas dengan layanan besar.'),
(41, 'New Hollywood Hotel', 'Swasta', 'Jl. Kuantan Raya No.120, Sekip, Kec. Lima Puluh, Kota Pekanbaru, Riau 28151', 3, '0.53583', '101.46077', '21.New Hollywood.jpg', 'Penginapan Yang Cocok Untuk Bisnis Dan Berlibur di Pekanbaru\r\n\r\nTerletak di Pekanbaru, New Hollywood Hotel menyediakan pelayanan yang ramah dan fasilitas modern. Kami menjamin masa menginap yang menyenangkan bagi para tamu dengan layanan kami yang personal dan berbagai macam fasilitas modern yang tersedia di hotel kami. Dari sini, para tamu dapat menikmati akses mudah ke sebuah kota yang hidup yang ditawarkan.'),
(42, 'Hotel Furaya', 'Swasta', 'Jl. Jend. Sudirman No.72-74, Sago, Kec. Senapelan, Kota Pekanbaru, Riau 28151', 3, '0.53874', '101.44722', '35.Furaya.jpg', 'Hotel bintang 3 yang terletak di Kota Pekanbaru.\r\n\r\nHotel Furaya dirancang untuk tujuan berbisnis maupun berlibur. Kami menyediakan layanan dan fasilitas terbaik seperti 24 Jam kedai kopi, 24 Jam mini market, spa dan pusat kebugaran serta restoran di mana anda dapat menemukan campuran lezat masakan Indonesia, Internasional dan Cina. Rasakan kenyamanan menginap bersama kami'),
(43, 'Damon Butik Hotel', 'Swasta', 'Jl. Hangtuah Ujung No.46-A, Suka Mulia, Kec. Sail, Kota Pekanbaru, Riau 28132', 2, '0.52829', '101.45394', '22.Damon Butik.jpg', 'Akomodasi yang nyaman dan modern di Pekanbaru\r\n\r\nAkomodasi yang tak kalah nyaman dan terjangkau, Damon Butik Hotel sebuah penginapan yang luar biasa berlokasi strategis. Pilihan yang fantastis untuk mendapatkan pengalaman yang tidak terlupakan. Nikmati layanan professional, penuh perhatian, ramah dan intim demi kenyamanan Anda selama menginap.'),
(44, 'Hotel Drego', 'Swasta', 'Jl. Jend. Sudirman, Tengkerang Tengah, Kec. Marpoyan Damai, Kota Pekanbaru, Riau 28128', 3, '0.49874', '101.45473', '37.Drego.jpg', 'Sebuah Hotel yang Nyaman, Lengkap, dan Terjangkau di Pekanbaru, Riau\r\n\r\nTerletak secara strategis di tengah kota, Drego Hotel Pekanbaru menyediakan pelayanan yang ramah dan fasilitas modern. Kami menjamin masa menginap yang menyenangkan bagi para tamu dengan layanan kami yang personal dan berbagai macam fasilitas modern yang tersedia di hotel kami.'),
(45, 'The Zuri Pekanbaru', 'Swasta', 'Kompleks Transmart, Jl. Soekarno - Hatta, Labuh Baru Tim., Kec. Payung Sekaki, Kota Pekanbaru, Riau 28292', 4, '0.50749', '101.42054', '26.Grand Zuri Pekanbaru.jpg', 'Pilihan akomodasi ideal untuk Wisatawan Bisnis dan Liburan Keluarga.\r\n\r\nThe Zuri Hotel Pekanbaru dibuka pada Maret 2019, terletak di salah satu kompleks pusat perbelanjaan baru yang paling semarak di Pekanbaru. The Zuri Hotel Pekanbaru menyediakan Tempat Makan, sebuah kafe yang menyajikan kelezatan lokal dan internasional, Grand Ballroom dan 5 ruang pertemuan. Para tamu dapat menuju ke atap tempat kolam renang tanpa batas, skylounge, dan gym.'),
(46, 'Hotel Aquatel Pekanbaru', 'Swasta', 'Labuh Baru Tim., Kec. Payung Sekaki, Kota Pekanbaru, Riau 28292', 0, '0.50736', '101.42786', '39.Aquatel.jpg', 'Pilihan akomodasi yang ideal untuk Pasangan, Backpacker dan Liburan Keluarga.\r\n\r\nAquatel Hotel sebuah hunian yang berlokasi di Pekanbaru. Suasana ruangan yang bersih dan nyaman, cocok bagi Anda yang akan berlibur atau mengadakan kunjungan bisnis. Lokasi yang strategis sehingga mudah untuk diakses, dan harga yang terjangkau bisa menjadi pilihan akomodasi perjalanan Anda.\r\n\r\n'),
(47, 'D\'Lira Syariah Hotel', 'Swasta', 'Jl. Pepaya No.73, Jadirejo, Kec. Pekanbaru Kota, Kota Pekanbaru, Riau 28284', 2, '0.51433', '101.44729', '40.D_Lira Syariah.jpg', 'D\'lira Syariah Hotel terletak di kawasan bisnis Pekanbaru yang aman, nyaman, jauh dari kebisingan kota dan cocok untuk pebisnis dan ekspatriat'),
(49, 'Alpha Hotel', 'Swasta', 'Jl. Imam Munandar No.17, Tengkerang Utara, Kec. Bukit Raya, Kota Pekanbaru, Riau 28128', 3, '0.50274', '101.45509', '42.Alpha.jpg', 'Hotel bintang 3 yang nyaman dan bersih di Pekanbaru\r\n\r\nAlpha Hotel adalah hotel modernis & minimalis untuk anda dengan anggaran yang terjangkau. Strategis terletak di jantung kota Pekanbaru, sekitar 10 menit dari Bandara sementara serta 10 menit dari pusat kota. Di Alpha Hotel, kami menghargai kenyamanan pelanggan kami, dan menyediakan Anda dengan layanan terbaik yang pernah Anda butuhkan dalam akomodasi'),
(50, 'Parma Paus Hotel', 'Swasta', 'Jl. Paus, Wonorejo, Kec. Marpoyan Damai, Kota Pekanbaru, Riau 28124', 3, '0.50748', '101.43927', '43.Parma Paus.jpg', 'Hotel yang dapat menjanjinkan pengalaman menginap yang tidak terlupakan dengan harga yang terjangkau\r\n\r\nAkomodasi yang tak kalah nyaman dan terjangkau, Paus Hotel sebuah penginapan yang luar biasa berlokasi strategis. Pilihan yang fantastis untuk mendapatkan pengalaman yang tidak terlupakan. Nikmati layanan professional, penuh perhatian, ramah dan intim demi kenyamanan Anda selama menginap.'),
(51, 'Favehotel Pekanbaru', 'Swasta', 'Jl. Pinang No.10, Wonorejo, Kec. Marpoyan Damai, Kota Pekanbaru, Riau 28125', 3, '0.50848', '101.45212', '44.Fave.jpg', 'Salah satu persembahan dari favehotel Group di Pekanbaru Riau\r\n\r\nfavehotel Pekanbaru yang strategis terletak di pusat kota Pekanbaru Riau. favehotel Pekanbaru menawarkan sebagai tempat bersantai, dekat dengan pusat perbelanjaan dan akses mudah dari dan ke Bandara Internasional Sultan Syarif Qasim II, sekitar 10 menit berkendara. favehotel Pekanbaru adalah pilihan yang cerdas untuk hotel budget dengan lingkungan menyenangkan dan layanan profesional.'),
(52, 'OYO Life 2597 Km Kost', 'Swasta', 'Jl. Pontianak No.25, Tengkerang Utara, Kec. Bukit Raya, Kota Pekanbaru, Riau 28126', 0, '0.50643', '101.46387', '45.OYO Life 2597 Km Kost.jpg', 'OYO 805 Hotel Dyan Graha terletak di kawasan bisnis Pekanbaru yang aman, nyaman, jauh dari kebisingan kota dan cocok untuk pebisnis dan ekspatriat.'),
(53, 'Sabrina Hotel Sisingamangaraja', 'Swasta', 'Jl. Sisingamangaraja, Rintis, Kec. Pekanbaru Kota, Kota Pekanbaru, Riau 28156', 0, '0.53125', '101.44850', '46.Sabrina Sisingamangaraja.jpg', 'Akomodasi yang luar biasa di Pekanbaru.\r\n\r\nAkomodasi yang tak kalah nyaman dan terjangkau, Delta Hotel Pekanbaru sebuah penginapan yang luar biasa berlokasi strategis. Pilihan yang fantastis untuk mendapatkan pengalaman yang tidak terlupakan. Nikmati layanan professional, penuh perhatian, ramah dan intim demi kenyamanan Anda selama menginap'),
(54, 'Dyan Graha Hotel', 'Swasta', 'Jl. Gatot Subroto No.7, Kota Tinggi, Kec. Pekanbaru Kota, Kota Pekanbaru, Riau 28112', 3, '0.53418', '101.44886', '47.Dyan Graha.jpg', 'OYO 805 Hotel Dyan Graha terletak di kawasan bisnis Pekanbaru yang aman, nyaman, jauh dari kebisingan kota dan cocok untuk pebisnis dan ekspatriat.'),
(55, 'Hotel Resty Menara', 'Swasta', 'Jl. Sisingamangaraja No.102, Rintis, Kec. Lima Puluh, Kota Pekanbaru, Riau 28156', 3, '0.53110', '101.45440', '48.Resty Menara.jpg', 'Strategis terletak di kota Pekanbaru. New Resty Menara Hotel adalah tempat yang sempurna untuk wisatawan atau backpacker. Akses dari hotel ke berbagai tujuan wisata di kota ini dalam jarak dekat. Properti bersih dan nyaman ini menawarkan 59 kamar tamu.'),
(56, 'Parma Panam Hotel', 'Swasta', 'Jalan HR Subrantas (Simpang Tabek Gadang)No.28, Tampan, Tuah Karya, Pekanbaru, Kota Pekanbaru, Riau 28292', 3, '0.46662', '101.39401', '49.Parma Panam.jpg', 'Hotel simpel ini terletak di jalan yang ramai di pusat kota Pekanbaru, berjarak 2 menit berjalan kaki dari terminal bus terdekat, dan 8 km dari pusat perbelanjaan Mal Ska Pekanbaru. Bandara Sultan Syarif Kasim II berjarak 13 km dari hotel ini.'),
(57, 'Royal Asnof Hotel Pekanbaru', 'Swasta', 'Jl. Tuanku Tambusai No.106, Tengkerang Bar., Kec. Marpoyan Damai, Kota Pekanbaru, Riau 28312', 4, '0.50778', '101.42776', '50.Royal Asnof.jpg', 'Terletak 3 menit berjalan kaki dari halte bus terdekat, hotel santai ini berjarak 5 km dari Masjid Agung An-Nur, masjid agung dengan kapasitas 4.500 jemaah, dan 6 km dari CitraLand Waterpark'),
(58, 'Benteng Hotel', 'Swasta', 'Jl. Soekarno - Hatta No.16, Labuh Baru Tim., Kec. Payung Sekaki, Kota Pekanbaru, Riau 28292', 3, '0.49731', '101.41818', '41.Benteng.jpg', 'Hotel bisnis dan keluarga di Pekanbaru\r\n\r\nHotel yang letaknya strategis di kota Pekanbaru. Daerah kawasan bisnis yang sedang berkembang dikelilingi perusahaan-perusahaan terkemuka dan dekat pusat perbelanjaan seperti Mall SKA. Hotel butik pertama di Riau yang menawarkan kenyamanan untuk pebisnis maupun keluarga dengan fasilitas dan pelayanan terbaik dari kami.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `akses_level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `alamat`, `username`, `password`, `akses_level`) VALUES
(1, 'admin', 'admin', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id_hotel`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id_hotel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
