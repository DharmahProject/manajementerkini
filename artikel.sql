-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2020 at 01:16 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `artikel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `kd_admin` varchar(12) NOT NULL,
  `nm_admin` varchar(64) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(30) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `status` varchar(2) NOT NULL,
  `telepon` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `kd_admin`, `nm_admin`, `email`, `password`, `level`, `foto`, `status`, `telepon`) VALUES
(20, 'krisbn01', 'Kris Banarto', 'krisbanarto@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Super Admin', 'IMG_0388.JPG', '1', '089605550662');

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id_article` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `title` varchar(126) NOT NULL,
  `content` text NOT NULL,
  `author` varchar(64) NOT NULL,
  `date` varchar(24) NOT NULL,
  `status` int(11) NOT NULL,
  `picture` varchar(200) NOT NULL,
  `ref_link1` varchar(100) NOT NULL,
  `ref_link2` varchar(100) NOT NULL,
  `ref_link3` varchar(100) NOT NULL,
  `views` bigint(20) NOT NULL,
  `likes` bigint(20) NOT NULL,
  `comments` bigint(20) NOT NULL,
  `tags` varchar(120) NOT NULL,
  `kode` varchar(200) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_dt` datetime DEFAULT NULL,
  `changed_by` varchar(50) NOT NULL,
  `changed_dt` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id_article`, `id_category`, `title`, `content`, `author`, `date`, `status`, `picture`, `ref_link1`, `ref_link2`, `ref_link3`, `views`, `likes`, `comments`, `tags`, `kode`, `created_by`, `created_dt`, `changed_by`, `changed_dt`) VALUES
(13, 1, 'Hidup benar di hadapan Allah', '<p style="text-align:justify"><span style="font-family:Arial,Helvetica,sans-serif"><span style="font-size:12px">Allah memangil kita bukan untuk melakukan apa yang cemar melainkan apa yang kudus. Oleh karena itu, dalam <strong>ayat 1 </strong>berkata bahwa &ldquo;..<em>buanglah segala kejahatan, kemunafikan, kedengkian dan fitnah</em>&rdquo;. Mengapa kita harus membuang semua itu?&nbsp; Karena Dalam <strong>1 Petrus 1:18-19 </strong>dikatakan bahwa kita telah ditebus oleh darah yang mahal yaitu darah Kristus.</span></span></p>\n\n<p style="text-align:justify"><span style="font-family:Arial,Helvetica,sans-serif"><span style="font-size:12px"><strong>1 Petrus 4:2</strong> dikatakan bahwa &ldquo;<em>supaya waktu yang sisa jangan kamu pergunakan menurut keinginan manusia, tetapi menurut kehendak Allah</em>.&rdquo; Tidak lama lagi Tuhan Yesus datang, dalam waktu yang sisa ini biarlah kita pakai untuk melakukan apa yang Tuhan kehendaki. Dalam <strong>1 Korintus 7:29 </strong>dikatakan bahwa &ldquo;<em>Saudara-saudara, inilah yang kumaksudkan, yaitu: waktu telah singkat! Karena itu dalam waktu yang masih sisa ini orang-orang yang beristeri harus berlaku seolah-olah mereka tidak beristeri</em>&rdquo;. Ayat ini berarti bahwa, sekalipun mungkin dalam kehidupan rumah tangga terjadi permasalahan. Namun saat datang ke hadirat Tuhan kita mengesampingkan semua itu, artinya tidak terpengaruh dengan keadaan sekitar ataupun apa yang sementara terjadi, karena <u>kemerdekaan yang sesunguhnya aalah kita terlepas dari segala seuatu yang kita alami dan kita tidak terpenaruh olehnya</u>. </span></span></p>\n\n<p style="text-align:justify"><span style="font-family:Arial,Helvetica,sans-serif"><span style="font-size:12px">Firman Tuhan kali ini juga mengajarkan kita untuk jadi sama seperti bayi yang selalu merindukan air susu yang murni dan rohani. Mengapa kita harus menjadi sama seperti bayi? Karena dalam <strong>1 petrus 1:23</strong> dikatakan bahwa kita telah dilahirkan kembali dalam ciptaan yang baru, yang lama telah berlalu dan yang baru telah terbit. Dalam <strong>Matius 18:3</strong> juga berkata bahwa, supaya kita masuk dalam kerajan Sorga kita harus bertobat dan jadi sama seperti anak kecil.</span></span></p>\n\n<p style="text-align:justify"><span style="font-family:Arial,Helvetica,sans-serif"><span style="font-size:12px">Bila kita telah mengecap kebaikan Tuhan biarlah kita mau datang kepada batu penjuru hidup (Tuhan) karena saat kita datang pada batu penjuru itu kita dapat memperoleh perlindungan pada masa kesesakan (<strong>Mazmur 9:10</strong>)<strong>. </strong>Seperti halnya Daud yang memiliki pengalaman dengan Tuhan saat melawan Goliat. Daud menjadikan Tuhan sebagai tempat perlindungan sehingga Goliat dapat dikalahkan.<strong> </strong>Daud datang datang dengan nama Tuhan dan dengan apa yang ada pada dirinya. Mungkin hari-hari ini kita sedang mengahadapi roh Goliat yang mencoba menjatuhkan hidup kita, jaganlah kita menjadi takut, tetapi datanglah kepada Tuhan yang enjadi tempat perlindungan dan Tuhan lah yang akan membela kita (<strong>Mazmur 9:5</strong>).&nbsp; Tetaplah percaya kepada Tuhan, karena dalam <strong>Yesaya 49: 23</strong> berkata bahwa &ldquo;<em>...orang-orang yang menanti-nantikan Aku tidak akan mendapat malu.</em>&rdquo;</span></span></p>\n\n<p style="text-align:justify"><span style="font-family:Arial,Helvetica,sans-serif"><span style="font-size:12px">Mari melangkah dengan iman, sudah ditolong atau belum tetaplah percaya kepada Tuhan, karena Ia tidak akan membiarkan kita mendapat malu. Tuhan akan menolong, meluputkkan, dan saat kita tetap menati-natikan Tuhan dan tetaplah percaya bahwa Tuhan sanggup melakukan segala sesuatu dan tidak ada rencanaNya yang gagal.</span></span></p>\n', 'Pdt. Jan Moses Nanuru', '2020-05-14', 0, 'bg7.jpg', '', '', '', 40, 0, 1, 'etika', '0k9dk30dj3kk3nf', 'Dharma', '2017-10-08 00:00:00', 'Dharma', '2018-03-04 00:00:00'),
(14, 1, 'Tinggal dalam ketetapanNya', '<p style="text-align:justify"><span style="font-size:14px"><em>Gereja Tuhan</em> perlu berdamai dengan <em>Tuhan</em>. Kata &ldquo;damai&rdquo; dalam hal ini berarti melakukan sesuatu, yaitu dengan kerendahan hati mengakui tingkah laku kita yang tidak berkenan di hadapan Tuhan. Seringkali ketika teguran itu datang, kita mengeraskan hati, tidak mau berdamai dengan diri kita, terlebih dengan Tuhan. Seorang yang berdamai akan memiliki janji Tuhan yang luar biasa, sehingga hidupnya pun akan menjadi hebat.</span></p>\n\n<p style="text-align:justify"><span style="font-size:14px">Tak ada agama lain yang berkata, &ldquo;<em>Tinggallah di dalam Aku dan Aku akan tinggal di dalam kamu</em>&rdquo;. Jika seseorang tinggal di dalam Tuhan dan Tuhan tinggal di dalam dia, maka ia menjadi seorang yang hebat. Namun kehebatan itu hilang dari dalam hidupnya, ketika ia tidak mau berdamai dan meninggalkan Tuhan. Kalimat &ldquo;tinggallah di dalam Aku&rdquo; juga berarti tinggal di dalam hukum dan ketetapan Tuhan.</span></p>\n\n<p style="text-align:justify"><span style="font-size:14px">Waktu melangkah ke dalam Rumah Tuhan, tanamkan di pikiran kita, bahwa Tuhan beri kita kekuatan agar bisa berbalik dari jalan yang jahat! Janganlah sering ke gereja tetapi karakter tidak berubah! Jika demikian, dimana kehebatan itu? <em>Iblis</em> hanya bisa menakut-nakuti, menipu melalui tantangan dan masalah, supaya kita berpaling dari Tuhan dan kembali berbuat jahat. Tetap tinggal di dalam Tuhan, supaya semua tantangan dan masalah yang besar sekalipun dapat dikalahkan, bersama Tuhan yang lebih besar! Iblis dapat dikalahkan oleh puji-pujian yang kita naikkan jika kita hidup kudus, karena puji-pujian mengundang hadirat Allah turun. Tapi jika hidup kita tidak kudus, maka roh <em>Setan</em>-lah yang akan turun. Jadi sebelum melayani, hendaknya kita berdamai dengan Tuhan.</span></p>\n\n<p style="text-align:justify"><span style="font-size:14px"><em>Tanda orang hebat adalah memiliki kerinduan untuk lebih mengenal Dia</em>. Jangan melakukan ibadah hanya sebagai rutinitas saja, karena ada keterikatan dengan harta kekayaan atau hal duniawi lainnya. Untuk lebih dekat dan mengenal Dia, tentulah ada harga yang harus dibayar. Namun ketika kita berani melepaskan apa yang ada pada diri kita, maka Tuhan akan berkenan kepada kita. Dan saat Tuhan berkenan kepada kita, maka setiap musuh pun akan dibuat berdamai dengan kita.</span></p>\n\n<p style="text-align:justify"><span style="font-size:14px">Tetaplah tinggal dalam hukum dan peraturan Tuhan. Apa saja yang Tuhan perintahkan, mengerti atau tidak, tetap lakukan saja! Karena untuk ke <em>Sorga</em>, hanya butuh belajar <em>kerendahan hati</em>. Mari kita menjadi Gereja Tuhan yang hebat untuk memuliakan Tuhan, supaya semua orang dapat melihat kemuliaan Tuhan itu. Mari kita berdamai dengan Tuhan, supaya kita bisa menikmati janji-Nya, memiliki hidup yang luar biasa, karena DIA menjadikan kita orang-orang hebat-Nya.</span></p>\n', 'Pdt. Jan Moses Nanuru', '2020-05-14', 1, 'bg7.jpg', '', '', '', 58, 0, 3, 'etika', '0k4i3oj3dkd', 'Dharma', '2017-10-09 00:00:00', 'Pdt. Jan Moses Nanuru', '2020-05-24 15:03:31'),
(15, 1, 'Hidup sebagai hamba yang setia', '<p style="text-align:justify"><span style="font-size:14px">Injil Markus menilai bahwa Yesus adalah seorang Raja Hamba, karena IA datang bukan untuk dilayani melainkan melayani. Salah satu contoh adalah saat Yesus membasuh kaki murid-muridNya (<strong>Yohanes 13:12</strong>). Yesus memberi satu teladan, sekalipun IA berkuasa, seorang Pemimpin, dan penuh dengan hikmat, tetapi mau merendahkan diriNya. Yesus tahu bahwa akan ada yang mengkhianati dan menyangkal DIA, tetapi IA taat bahkan sampai mati di Kayu Salib. Jika kita ukur hidup kita dengan teladan Yesus, sudah sampai manakah diri kita? Adakah hati hamba itu tetap ada dalam diri kita?</span></p>\n\n<p style="text-align:justify"><span style="font-size:14px">Ketika murid-muridNya bertengkar mengenai siapa yang terbesar di antara mereka, Yesus berkata, &ldquo;..yang terbesar di antara kamu hendaklah menjadi sebagai yang paling muda dan pemimpin sebagai pelayan..&rdquo; Yesus menganggap diriNya sendiri sebagai pelayan dan bukan sebagai seorang yang akan duduk makan (<strong>Lukas 22:24-27</strong>). Sehebat apapun kita dipakai Tuhan, ingatlah bahwa kita hanya seorang pelayan, bukan seorang yang duduk makan, kita adalah seorang hamba.</span></p>\n\n<p style="text-align:justify"><span style="font-size:14px">Sekalipun kita telah memiliki hati hamba, kita tidak terlepas dari ujian (pencobaan), seperti:</span></p>\n\n<ol>\n	<li style="text-align:justify"><span style="font-size:14px"><span style="color:red">Kebutuhan hidup (<strong>Matius 4:1-2</strong>).</span></span></li>\n</ol>\n\n<p style="text-align:justify"><span style="font-size:14px">Iblis mencobai Yesus ketika IA merasa lapar setelah berpuasa empat puluh hari dan empat puluh malam di padang gurun. Jika kita hidup dalam firman Tuhan, maka firman itu yang akan menolong kita, sehingga saat pencobaan datang, kita tidak jatuh di dalamnya. <strong>Matius 6:25 </strong>berkata bahwa &ldquo;Janganlah kuatir akan hidupmu...&rdquo;, janganlah kita menjadi kuatir, tetaplah berharap dan tinggal di dalam firmanNya.</span></p>\n\n<p style="text-align:justify"><span style="font-size:14px">Tuhan tahu apa yang menjadi kebutuhan hidup kita, di dalam DIA selalu ada masa depan dan harapan kita takkan hilang. Karena ALLAH sanggup melakukan segala sesuatu dan tidak ada rencanaNya yang gagal (<strong>Ayub 42:2</strong>). Sekalipun apa yang kita miliki saat ini tak seberapa, tetaplah mengucap syukur karena Tuhan sanggup menjadikan sesuatu yang besar dari yang sedikit itu.</span></p>\n\n<ol>\n	<li style="text-align:justify"><span style="font-size:14px"><span style="color:red">Mengenai Pengajaran Firman Tuhan (<strong>Matius 4:6</strong>).</span></span></li>\n</ol>\n\n<p style="text-align:justify"><span style="font-size:14px">Iblis memakai <strong>Mazmur 91:11-12</strong> untuk mencobai Yesus, sepertinya kelihatan benar, tetapi itu bukan kehendak ALLAH. Ada suatu saat dimana iblis akan datang menguji orang percaya menggunakan firman Tuhan. Jika kita tidak memiliki pengetahuan yang benar akan firman Tuhan, maka kita akan jatuh. Sebab itu, bacalah firman Tuhan dan hidup di dalamnya agar kita tidak mudah terkena tipu daya iblis.</span></p>\n', 'Pdt. Jan Moses Nanuru', '2020-05-14', 0, 'bg7.jpg', '', '', '', 1, 0, 0, 'marketing', '739839jsknknke90', 'Dharma', '2017-10-09 00:00:00', 'Pdt. Jan Moses Nanuru', '2020-05-29 10:54:40'),
(16, 1, 'Lakukanlah segala pekerjaanmu dalam kasih!', '<p style="text-align:justify"><span style="font-size:16px"><span style="font-family:Times New Roman,Times,serif">Kata kasih dalam Bahasa Yunani terdiri dari beberapa macam:</span></span></p>\n\n<p style="text-align:justify"><span style="font-size:16px"><span style="font-family:Times New Roman,Times,serif"><strong>1.&nbsp; Agape</strong></span></span></p>\n\n<p style="text-align:justify"><span style="font-size:16px"><span style="font-family:Times New Roman,Times,serif">Agape merupakan kasih yang tidak bersyarat atau kasih yang tidak membeda-bedakan. Kasih agape ini adalah kasih yang menggambarkan pribadi Allah. Dalam <strong>Yohanes 3:16</strong> dikatakan bahwa, &ldquo;..karena begitu besar kasih Allah akan dunia ini sehingga Ia mengarunaikan Anaknya yang tunggal..&rdquo;Sebelum kita mengasihi Tuhan, Tuhan sudah lebih dahulu mengasihi kita dan melakukan sesuatu bagi kita dengan mati dikayu salib untuk menebus dosa kita.</span></span></p>\n\n<p style="text-align:justify"><span style="font-size:16px"><span style="font-family:Times New Roman,Times,serif"><strong>2.&nbsp; Eros</strong></span></span></p>\n\n<p style="text-align:justify"><span style="font-size:16px"><span style="font-family:Times New Roman,Times,serif">Kasih seorang pria dengan seorang wanita.Ketika Allah mencipakan Adam tidak ada penolong yang sepadan dengan Adam, oleh sebab itu Allah menciptakan Hawa . <strong>Kidung Agung 8:6</strong></span></span></p>\n\n<p style="text-align:justify"><span style="font-size:16px"><span style="font-family:Times New Roman,Times,serif"><strong>3. Kasih Pileo</strong></span></span></p>\n\n<p style="text-align:justify"><span style="font-size:16px"><span style="font-family:Times New Roman,Times,serif">Kasih Pileo adaah kasih persahabatan.Seperti contoh:</span></span></p>\n\n<p style="text-align:justify"><span style="font-size:16px"><span style="font-family:Times New Roman,Times,serif">Yonathan mengasihi daud, demikian daud mengasihi yonathan <strong>1 Samuel 1:1-3</strong>. Klo kita mengasihi sahabat tidak akan <strong>Amsal 17:17.</strong></span></span></p>\n\n<p style="text-align:justify"><span style="font-size:16px"><span style="font-family:Times New Roman,Times,serif">&ldquo;Seorang sahabat menaruh kasih setiap waktu, dan menjadi seorang saudara dalam kesukaran.&rdquo;</span></span></p>\n\n<p style="text-align:justify"><span style="font-size:16px"><span style="font-family:Times New Roman,Times,serif"><strong>4.&nbsp; Kasih Sorge</strong></span></span></p>\n\n<p style="text-align:justify"><span style="font-size:16px"><span style="font-family:Times New Roman,Times,serif">antara orang Tua dengan anak. Sering kali dibeda2kam <strong>Kejadian 25:27 </strong>Isak lebih senang Esau kareana suka makan daging buruan esau, tetapi ribka lebih menyukai yakub karean yakub orag yang suka tinggal d kemah/ tenang. Balajar bersikap adil dalam membagi kasih kita kepada anak-anak.</span></span></p>\n\n<p style="text-align:justify"><span style="font-size:16px"><span style="font-family:Times New Roman,Times,serif"><strong>1 korintus 13:4-7 </strong>Rasul Paulus manesehati jemat korintus lakukanlah segala pekerjaanmu dalam kasih, jagan melakukan sesautu karna kita sombong tatapi dasarnya harus kasih</span></span></p>\n\n<p style="text-align:justify"><span style="font-size:16px"><span style="font-family:Times New Roman,Times,serif">Mengapa kita harus melakukan segala sesuatudasarnya harus kasih<strong> Yohanes 21:15:17</strong> ?</span></span></p>\n\n<p style="text-align:justify"><span style="font-size:16px"><span style="font-family:Times New Roman,Times,serif">Yang yesus inginkan kita melakukan dengan kasih supaya kita melayaini tuhan dengan dasar kasih dan tulys bukan karna kita mau di pandang orang lain, kita melayani tuhana bukan karna kita ingin diberkati oleh tuhan tapi karena mengasihi Tuhan</span></span></p>\n', 'Pdt. Jan Moses Nanuru', '2020-05-14', 1, 'bg7.jpg', '', '', '', 55, 0, 3, 'bisnis', '09993u992jfnk8939k', 'Dharma', '2017-10-12 00:00:00', 'Pdt. Jan Moses Nanuru', '2020-05-29 10:54:25'),
(26, 3, 'Tinggalkan Strategi 4P Gunakan 4C', '<p style="margin-left:0in; margin-right:0in; text-align:justify"><span style="color:null"><span style="font-size:16px"><span style="font-family:Times New Roman,Times,serif"><span style="background-color:white">Test Sebagai praktisi marketing pasti mengenal bauran pemasaran atau marketing mix P4 (Product, Price, Place, and Promotion) strategi dalam pemasaran yang dipopulerkan oleh Jerome McCarthy tahun 1968, tatapi sampai sekarang masih up to date dan dipakai banyak praktisi marketing.</span></span></span></span></p>\n\n<p style="margin-left:0in; margin-right:0in; text-align:justify"><span style="color:null"><span style="font-size:16px"><span style="font-family:Times New Roman,Times,serif">Sebegitu pentingnya konsep ini diajarkan melalui training tenaga penjualan dan pemasaran, bahkan diajarkan sampai ke mahasiswa jurusan manajemen. Sebenarnya konsep marketing mix ini cukup bagus, tetapi lebih cenderung ke kepentingan pemasar/perusahaan, sedangkan kepentingan konsumen kurang dipertimbangkan. </span></span></span></p>\n\n<p style="margin-left:0in; margin-right:0in; text-align:justify"><span style="color:null"><span style="font-size:16px"><span style="font-family:Times New Roman,Times,serif">Adalah Philip Kotler (1999) yang mengkritik 4P yang berorientasi pada produk bukan pelanggan, hehingga 4P ini apabila dijalankan harus mempertimbangkan 4C (<span style="background-color:white">Consumer, Cost, Convenience, Communication).</span></span></span></span></p>\n\n<p style="margin-left:0in; margin-right:0in; text-align:justify"><span style="color:null"><span style="font-size:16px"><span style="font-family:Times New Roman,Times,serif"><strong>Apakah 4 C itu?</strong></span></span></span></p>\n\n<p style="margin-left:0in; margin-right:0in; text-align:justify"><span style="color:null"><span style="font-size:16px"><span style="font-family:Times New Roman,Times,serif">Konsep 4 C, yang terdiri dari <span style="background-color:white">Consumer, Cost, Convenience, Communication, (</span>keinginan dan kebutuhan Konsumen, Biaya, Kenyamanan, dan Komunikasi) bisa dikatakan &nbsp;jauh lebih bernilai bagi bauran pemasaran dibandingkan 4 P.</span></span></span></p>\n\n<p style="margin-left:0in; margin-right:0in; text-align:justify"><span style="color:null"><span style="font-size:16px"><span style="font-family:Times New Roman,Times,serif">Mereka fokus tidak hanya pada pemasaran dan penjualan produk tetapi juga pada komunikasi dengan target pelanggan dari awal proses hingga akhir.</span></span></span></p>\n\n<p style="margin-left:0in; margin-right:0in; text-align:justify"><span style="color:null"><span style="font-size:16px"><span style="font-family:Times New Roman,Times,serif">Fokus 4 P pada strategi pemasaran berorientasi penjual, yang bisa sangat efektif untuk penjualan. Namun 4 C menawarkan perspektif yang lebih berbasis konsumen pada strategi pemasaran.</span></span></span></p>\n\n<h3 style="margin-left:0in; margin-right:0in; text-align:justify"><span style="color:null"><span style="font-size:16px"><strong><span style="font-family:Times New Roman,Times,serif"><span style="background-color:white">1. Customer Vs Product </span></span></strong></span></span></h3>\n\n<p style="margin-left:0in; margin-right:0in; text-align:justify"><span style="color:null"><span style="font-size:16px"><span style="font-family:Times New Roman,Times,serif">4 C pertama yaitu Customer (konsumen) menggantikan P pertama dalam 4P yaitu Product. Produk yang bagus bisa menjadi tidak berarti manakala produk tersebut tidak sesuai dengan keinginan dan kebutuhan konsumen. </span></span></span></p>\n\n<p style="margin-left:0in; margin-right:0in; text-align:justify"><span style="color:null"><span style="font-size:16px"><span style="font-family:Times New Roman,Times,serif">Alih-alih berfokus pada produk itu sendiri, Customer berfokus pada mengisi kekosongan dalam kehidupan pelanggan.</span></span></span></p>\n\n<p style="margin-left:0in; margin-right:0in; text-align:justify"><span style="color:null"><span style="font-size:16px"><span style="font-family:Times New Roman,Times,serif">Strategi pemasaran ini penting untuk bisnis yang tertarik untuk mencari pemahaman pelanggan mereka. Setelah Anda memahami pelanggan Anda, akan jauh lebih mudah untuk menciptakan produk yang akan bermanfaat bagi mereka. </span></span></span></p>\n\n<p style="margin-left:0in; margin-right:0in; text-align:justify"><span style="color:null"><span style="font-size:16px"><span style="font-family:Times New Roman,Times,serif">Pelanggan membuat keputusan pembelian dan karenanya merupakan sumber daya paling berharga dalam strategi pemasaran apa pun. Jadi sebaiknya lakukan riset konsumen terlebih dahulu untuk mengetahui keinginan dan kebutuhan konsumen.</span></span></span></p>\n\n<h3 style="margin-left:0in; margin-right:0in; text-align:justify"><span style="color:null"><span style="font-size:16px"><span style="font-family:Times New Roman,Times,serif"><span style="background-color:white">2. <strong>Cost Vs Price</strong></span></span></span></span></h3>\n\n<p style="margin-left:0in; margin-right:0in; text-align:justify"><span style="color:null"><span style="font-size:16px"><span style="font-family:Times New Roman,Times,serif">C kedua dalam bauran pemasaran ini adalah Cost (biaya), menggantikan P kedua dalam 4P yaitu Price (harga). Jangan bingung biaya produk Anda dengan harganya. Harga hanya sebagian kecil dari keseluruhan biaya pembelian suatu produk kepada pelanggan. </span></span></span></p>\n\n<p style="margin-left:0in; margin-right:0in; text-align:justify"><span style="color:null"><span style="font-size:16px"><span style="font-family:Times New Roman,Times,serif">Penting untuk menentukan biaya keseluruhan - bukan harga - produk Anda kepada pelanggan. Biaya tidak hanya mencakup harga barang, tetapi juga dapat mencakup hal-hal seperti waktu yang dibutuhkan pelanggan untuk sampai ke lokasi Anda untuk membeli produk Anda, atau biaya bensin yang diperlukan untuk membawanya ke sana. </span></span></span></p>\n\n<p style="margin-left:0in; margin-right:0in; text-align:justify"><span style="color:null"><span style="font-size:16px"><span style="font-family:Times New Roman,Times,serif">Biaya juga dapat mencakup manfaat atau kurangnya manfaat produk bagi pelanggan. Konsumen akan menghitung keseluruhan biaya yang dikeluarkan untuk mendapatkan barang, dibandingkan dengan nilai yang didapat dari barang tersebut.</span></span></span></p>\n\n<h3 style="margin-left:0in; margin-right:0in; text-align:justify"><span style="color:null"><span style="font-size:16px"><span style="font-family:Times New Roman,Times,serif"><span style="background-color:white">3. <strong>Convenience Vs Place</strong></span></span></span></span></h3>\n\n<p style="margin-left:0in; margin-right:0in; text-align:justify"><span style="color:null"><span style="font-size:16px"><span style="font-family:Times New Roman,Times,serif">C Ketiga dalam bauran pemasaran ini adalah Convinience (kenyamanan) menggantikan P ketiga dalam 4P yaitu Place (tempat/distribusi). Kenyamanan serupa dengan &quot;tempat&quot; dalam strategi pemasaran 4P. Namun, keduanya sangat berbeda. </span></span></span></p>\n\n<p style="margin-left:0in; margin-right:0in; text-align:justify"><span style="color:null"><span style="font-size:16px"><span style="font-family:Times New Roman,Times,serif">Place hanya merujuk ke tempat/distribusi produk akan dijual. Convinience adalah pendekatan yang jauh lebih berorientasi pelanggan terhadap strategi pemasaran ini.</span></span></span></p>\n\n<p style="margin-left:0in; margin-right:0in; text-align:justify"><span style="color:null"><span style="font-size:16px"><span style="font-family:Times New Roman,Times,serif">Setelah Anda menganalisis kebiasaan pelanggan Anda, Anda harus dapat mengetahui apakah mereka berbelanja online atau di toko serta apa yang mereka mau lakukan untuk membeli produk Anda. </span></span></span></p>\n\n<p style="margin-left:0in; margin-right:0in; text-align:justify"><span style="color:null"><span style="font-size:16px"><span style="font-family:Times New Roman,Times,serif">Tujuannya adalah untuk membuat biaya produk efektif dan cukup sederhana bagi pelanggan untuk mencapai produk tanpa harus melewati rintangan. Ada baiknya pemasar melakukan survei perilaku konsumen dalam berbelanja, sehingga dapat menentukan startegi yang tepat untuk memberikan kenyamanan konsumen.</span></span></span></p>\n\n<h3 style="margin-left:0in; margin-right:0in; text-align:justify"><span style="color:null"><span style="font-size:16px"><span style="font-family:Times New Roman,Times,serif"><span style="background-color:white">&nbsp;4. <strong>Communication Vs Promotion</strong></span></span></span></span></h3>\n\n<p style="margin-left:0in; margin-right:0in; text-align:justify"><span style="color:null"><span style="font-size:16px"><span style="font-family:Times New Roman,Times,serif">C keempat dan terakhir dalam bauran pemasaran ini adalah Communicaton menjawab P ke-empat dari 4P yaitu Promotion. Komunikasi selalu menjadi kunci bagi pemasaran bisnis, tanpanya, 4 C tidak akan efektif. </span></span></span></p>\n\n<p style="margin-left:0in; margin-right:0in; text-align:justify"><span style="color:null"><span style="font-size:16px"><span style="font-family:Times New Roman,Times,serif">Komunikasi mirip dengan P keempat, Promosi namun ini sangat berbeda. Promosi suatu produk digunakan untuk mempengaruhi pelanggan agar mereka membeli suatu produk. </span></span></span></p>\n\n<p style="margin-left:0in; margin-right:0in; text-align:justify"><span style="color:null"><span style="font-size:16px"><span style="font-family:Times New Roman,Times,serif">Promosi sering kali bisa manipulatif dan tidak efektif. Namun, komunikasi merupakan pendekatan yang berorientasi pelanggan terhadap tugas penjualan produk. Komunikasi membutuhkan interaksi antara pembeli dan penjual.</span></span></span></p>\n\n<p style="margin-left:0in; margin-right:0in; text-align:justify"><span style="color:null"><span style="font-size:16px"><span style="font-family:Times New Roman,Times,serif">Strategi pemasaran ini dapat dengan mudah diimplementasikan melalui penggunaan media sosial.Pemasaran produk di situs media sosial, atau bahkan termasuk tautan ke profil media sosial Anda dapat sangat bermanfaat bagi pelanggan. </span></span></span></p>\n\n<p style="margin-left:0in; margin-right:0in; text-align:justify"><span style="color:null"><span style="font-size:16px"><span style="font-family:Times New Roman,Times,serif">Ini memungkinkan mereka untuk berinteraksi dengan merek Anda di tingkat pribadi dan pada akhirnya akan mengarah pada loyalitas merek yang lebih besar di antara para pelanggan Anda. Saat ini komunikasi begitu terbuka bahkan masyarakat umum bisa mengawasi komunikasi antara perusahaan dan pelanggan. </span></span></span></p>\n\n<p style="margin-left:0in; margin-right:0in; text-align:justify"><span style="color:null"><span style="font-size:16px"><span style="font-family:Times New Roman,Times,serif">Lakukanlah komunikasi baik sebelum, selama maupun sesudah barang dibeli oleh konsumen.</span></span></span></p>\n\n<p style="margin-left:0in; margin-right:0in; text-align:justify"><span style="color:null"><span style="font-size:16px"><span style="font-family:Times New Roman,Times,serif"><strong>Menerapkan 4 C</strong></span></span></span></p>\n\n<p style="margin-left:0in; margin-right:0in; text-align:justify"><span style="color:null"><span style="font-size:16px"><span style="font-family:Times New Roman,Times,serif">Pemasaran 4 C dapat sangat bermanfaat bagi strategi pemasaran apa pun. Strategi ini memaksa pemasar untuk benar-benar memahami pelanggan mereka sebelum mereka bahkan mengembangkan produk. </span></span></span></p>\n\n<p style="margin-left:0in; margin-right:0in; text-align:justify"><span style="color:null"><span style="font-size:16px"><span style="font-family:Times New Roman,Times,serif">Strategi ini membutuhkan komunikasi di seluruh proses, dari awal hingga selesai, dan dimulai dengan memahami apa yang diinginkan dan dibutuhkan pelanggan dari produk Anda.</span></span></span></p>\n\n<p style="text-align:justify"><span style="color:null"><span style="font-size:16px"><span style="font-family:Times New Roman,Times,serif">Saat menggunakan 4 C, ingatlah untuk selalu memikirkan pelanggan Anda terlebih dahulu, dan berkomunikasi dengan mereka di sepanjang jalan. Akibatnya, pelanggan Anda akan merasa seperti Anda berbicara langsung kepada mereka dan kebutuhan mereka.</span></span></span></p>\n', 'Kris Banarto', '2020-05-15', 0, 'iklan2.png', 'catmediatheagency.com', '', '', 229, 0, 1, 'etika', 'knkfjwijfi02892', 'Kris Banarto', '2020-05-15 00:00:00', 'Kris Banarto', '2020-05-31 08:49:12'),
(27, 2, 'Teknik marketing', '<p>Sebagai praktisi marketing pasti mengenal bauran pemasaran atau marketing mix P4 (Product, Price, Place, and Promotion) strategi dalam pemasaran yang dipopulerkan oleh Jerome McCarthy tahun 1968, tatapi sampai sekarang masih up to date dan dipakai banyak praktisi marketing.</p>\n\n<p>Sebegitu pentingnya konsep ini diajarkan melalui training tenaga penjualan dan pemasaran, bahkan diajarkan sampai ke mahasiswa jurusan manajemen. Sebenarnya konsep marketing mix ini cukup bagus, tetapi lebih cenderung ke kepentingan pemasar/perusahaan, sedangkan kepentingan konsumen kurang dipertimbangkan.</p>\n\n<p>Adalah Philip Kotler (1999) yang mengkritik 4P yang berorientasi pada produk bukan pelanggan, hehingga 4P ini apabila dijalankan harus mempertimbangkan 4C (Consumer, Cost, Convenience, Communication).</p>\n\n<p><strong>Apakah 4 C itu?</strong></p>\n\n<p>Konsep 4 C, yang terdiri dari&nbsp;Consumer, Cost, Convenience, Communication, (keinginan dan kebutuhan Konsumen, Biaya, Kenyamanan, dan Komunikasi) bisa dikatakan &nbsp;jauh lebih bernilai bagi bauran pemasaran dibandingkan 4 P.</p>\n\n<p>Mereka fokus tidak hanya pada pemasaran dan penjualan produk tetapi juga pada komunikasi dengan target pelanggan dari awal proses hingga akhir.</p>\n', 'Kris Banarto', '2020-05-24 09:4', 0, '3.jpg', 'rumahbukitcimanggu.com', '', '', 19, 0, 0, 'Cimanggu', '0899399jdhsk8', 'Kris Banarto', '2020-05-24 09:49:08', 'Kris Banarto', '2020-05-29 10:53:54'),
(28, 5, 'Tinggalkan Strategi 4P Gunakan 4C', '<p>Test Sebagai praktisi marketing pasti mengenal bauran pemasaran atau marketing mix P4 (Product, Price, Place, and Promotion) strategi dalam pemasaran yang dipopulerkan oleh Jerome McCarthy tahun 1968, tatapi sampai sekarang masih up to date dan dipakai banyak praktisi marketing.</p>\n\n<p>Sebegitu pentingnya konsep ini diajarkan melalui training tenaga penjualan dan pemasaran, bahkan diajarkan sampai ke mahasiswa jurusan manajemen. Sebenarnya konsep marketing mix ini cukup bagus, tetapi lebih cenderung ke kepentingan pemasar/perusahaan, sedangkan kepentingan konsumen kurang dipertimbangkan.</p>\n\n<p>Adalah Philip Kotler (1999) yang mengkritik 4P yang berorientasi pada produk bukan pelanggan, hehingga 4P ini apabila dijalankan harus mempertimbangkan 4C (Consumer, Cost, Convenience, Communication).</p>\n\n<p><strong>Apakah 4 C itu?</strong></p>\n\n<p>Konsep 4 C, yang terdiri dari&nbsp;Consumer, Cost, Convenience, Communication, (keinginan dan kebutuhan Konsumen, Biaya, Kenyamanan, dan Komunikasi) bisa dikatakan &nbsp;jauh lebih bernilai bagi bauran pemasaran dibandingkan 4 P.</p>\n\n<p>Mereka fokus tidak hanya pada pemasaran dan penjualan produk tetapi juga pada komunikasi dengan target pelanggan dari awal proses hingga akhir.</p>\n', 'Kris Banarto', '2020-05-24 09:5', 0, '2.jpg', 'rumahcimnggucity.com', '', '', 17, 0, 0, 'Etika', 'd41d8cd98f00b204e9800998ecf8427e1', 'Kris Banarto', '2020-05-26 09:52:24', 'Kris Banarto', '2020-05-31 08:48:37'),
(29, 2, 'Hidup benar di hadapan Allah', '<p>Sebagai praktisi marketing pasti mengenal bauran pemasaran atau marketing mix P4 (Product, Price, Place, and Promotion) strategi dalam pemasaran yang dipopulerkan oleh Jerome McCarthy tahun 1968, tatapi sampai sekarang masih up to date dan dipakai banyak praktisi marketing.</p>\n\n<p>Sebegitu pentingnya konsep ini diajarkan melalui training tenaga penjualan dan pemasaran, bahkan diajarkan sampai ke mahasiswa jurusan manajemen. Sebenarnya konsep marketing mix ini cukup bagus, tetapi lebih cender</p>\n\n<p>Sebagai praktisi marketing pasti mengenal bauran pemasaran atau marketing mix P4 (Product, Price, Place, and Promotion) strategi dalam pemasaran yang dipopulerkan oleh Jerome McCarthy tahun 1968, tatapi sampai sekarang masih up to date dan dipakai banyak praktisi marketing.</p>\n\n<p>Sebegitu pentingnya konsep ini diajarkan melalui training tenaga penjualan dan pemasaran, bahkan diajarkan sampai ke mahasiswa jurusan manajemen. Sebenarnya konsep marketing mix ini cukup bagus, tetapi lebih cender</p>\n\n<p>Sebagai praktisi marketing pasti mengenal bauran pemasaran atau marketing mix P4 (Product, Price, Place, and Promotion) strategi dalam pemasaran yang dipopulerkan oleh Jerome McCarthy tahun 1968, tatapi sampai sekarang masih up to date dan dipakai banyak praktisi marketing.</p>\n\n<p>Sebegitu pentingnya konsep ini diajarkan melalui training tenaga penjualan dan pemasaran, bahkan diajarkan sampai ke mahasiswa jurusan manajemen. Sebenarnya konsep marketing mix ini cukup bagus, tetapi lebih cender</p>\n', 'Kris Banarto', '2020-06-22 09:34:50', 0, 'beach-2836300_1280.jpg', '', '', '', 8, 0, 0, 'marketing', 'd41d8cd98f00b204e9800998ecf8427e2', 'Kris Banarto', '2020-06-22 09:34:50', '', NULL),
(30, 5, 'Artikel manajemen binsis', '<p>Artikel adalah sebuah esai yang sebenarnya lengkap dengan panjang tertentu yang dibuat untuk dipublikasikan (melalui koran, majalah, buletin, dll) dan bertujuan untuk menyajikan ide-ide dan fakta-fakta yang dapat meyakinkan, mendidik, dan menghibur. Isi artikel bisa bermacam &ndash; macam, beberapa contoh yang sering kita bacaseperti Sejarah, Petualangan, argumentasi, penelitian, bimbingan untuk melakukan / mengajarkan sesuatu</p>\n\n<p>Artikel adalah sebuah esai yang sebenarnya lengkap dengan panjang tertentu yang dibuat untuk dipublikasikan (melalui koran, majalah, buletin, dll) dan bertujuan untuk menyajikan ide-ide dan fakta-fakta yang dapat meyakinkan, mendidik, dan menghibur. Isi artikel bisa bermacam &ndash; macam, beberapa contoh yang sering kita bacaseperti Sejarah, Petualangan, argumentasi, penelitian, bimbingan untuk melakukan / mengajarkan sesuatu</p>\n\n<p>Artikel adalah sebuah esai yang sebenarnya lengkap dengan panjang tertentu yang dibuat untuk dipublikasikan (melalui koran, majalah, buletin, dll) dan bertujuan untuk menyajikan ide-ide dan fakta-fakta yang dapat meyakinkan, mendidik, dan menghibur. Isi artikel bisa bermacam &ndash; macam, beberapa contoh yang sering kita bacaseperti Sejarah, Petualangan, argumentasi, penelitian, bimbingan untuk melakukan / mengajarkan sesuatu</p>\n\n<p>Artikel adalah sebuah esai yang sebenarnya lengkap dengan panjang tertentu yang dibuat untuk dipublikasikan (melalui koran, majalah, buletin, dll) dan bertujuan untuk menyajikan ide-ide dan fakta-fakta yang dapat meyakinkan, mendidik, dan menghibur. Isi artikel bisa bermacam &ndash; macam, beberapa contoh yang sering kita bacaseperti Sejarah, Petualangan, argumentasi, penelitian, bimbingan untuk melakukan / mengajarkan sesuatu</p>\n', 'Kris Banarto', '2020-06-23 11:16:25', 0, 'coast-192979_1280.jpg', '', '', '', 8, 0, 0, 'manajemen', 'd41d8cd98f00b204e9800998ecf8427e3', 'Kris Banarto', '2020-06-23 11:16:25', '', NULL),
(31, 5, 'Manajemen bisnis analis', '<p>Artikel adalah sebuah esai yang sebenarnya lengkap dengan panjang tertentu yang dibuat untuk dipublikasikan (melalui koran, majalah, buletin, dll) dan bertujuan untuk menyajikan ide-ide dan fakta-fakta yang dapat meyakinkan, mendidik, dan menghibur. Isi artikel bisa bermacam &ndash; macam, beberapa contoh yang sering kita bacaseperti Sejarah, Petualangan, argumentasi, penelitian, bimbingan untuk melakukan / mengajarkan sesuatu</p>\n\n<p>Artikel adalah sebuah esai yang sebenarnya lengkap dengan panjang tertentu yang dibuat untuk dipublikasikan (melalui koran, majalah, buletin, dll) dan bertujuan untuk menyajikan ide-ide dan fakta-fakta yang dapat meyakinkan, mendidik, dan menghibur. Isi artikel bisa bermacam &ndash; macam, beberapa contoh yang sering kita bacaseperti Sejarah, Petualangan, argumentasi, penelitian, bimbingan untuk melakukan / mengajarkan sesuatu</p>\n\n<p>Artikel adalah sebuah esai yang sebenarnya lengkap dengan panjang tertentu yang dibuat untuk dipublikasikan (melalui koran, majalah, buletin, dll) dan bertujuan untuk menyajikan ide-ide dan fakta-fakta yang dapat meyakinkan, mendidik, dan menghibur. Isi artikel bisa bermacam &ndash; macam, beberapa contoh yang sering kita bacaseperti Sejarah, Petualangan, argumentasi, penelitian, bimbingan untuk melakukan / mengajarkan sesuatu</p>\n\n<p>Artikel adalah sebuah esai yang sebenarnya lengkap dengan panjang tertentu yang dibuat untuk dipublikasikan (melalui koran, majalah, buletin, dll) dan bertujuan untuk menyajikan ide-ide dan fakta-fakta yang dapat meyakinkan, mendidik, dan menghibur. Isi artikel bisa bermacam &ndash; macam, beberapa contoh yang sering kita bacaseperti Sejarah, Petualangan, argumentasi, penelitian, bimbingan untuk melakukan / mengajarkan sesuatu</p>\n', 'Kris Banarto', '2020-06-23 11:17:30', 0, 's1.png', '', '', '', 16, 0, 0, 'bisnis', 'd41d8cd98f00b204e9800998ecf8427e4', 'Kris Banarto', '2020-06-23 11:17:30', '', NULL),
(32, 3, 'Sales man ship aja', '<p>Artikel adalah sebuah esai yang sebenarnya lengkap dengan panjang tertentu yang dibuat untuk dipublikasikan (melalui koran, majalah, buletin, dll) dan bertujuan untuk menyajikan ide-ide dan fakta-fakta yang dapat meyakinkan, mendidik, dan menghibur. Isi artikel bisa bermacam &ndash; macam, beberapa contoh yang sering kita bacaseperti Sejarah, Petualangan, argumentasi, penelitian, bimbingan untuk melakukan / mengajarkan sesuatu</p>\n\n<p>Artikel adalah sebuah esai yang sebenarnya lengkap dengan panjang tertentu yang dibuat untuk dipublikasikan (melalui koran, majalah, buletin, dll) dan bertujuan untuk menyajikan ide-ide dan fakta-fakta yang dapat meyakinkan, mendidik, dan menghibur. Isi artikel bisa bermacam &ndash; macam, beberapa contoh yang sering kita bacaseperti Sejarah, Petualangan, argumentasi, penelitian, bimbingan untuk melakukan / mengajarkan sesuatu</p>\n\n<p>Artikel adalah sebuah esai yang sebenarnya lengkap dengan panjang tertentu yang dibuat untuk dipublikasikan (melalui koran, majalah, buletin, dll) dan bertujuan untuk menyajikan ide-ide dan fakta-fakta yang dapat meyakinkan, mendidik, dan menghibur. Isi artikel bisa bermacam &ndash; macam, beberapa contoh yang sering kita bacaseperti Sejarah, Petualangan, argumentasi, penelitian, bimbingan untuk melakukan / mengajarkan sesuatu</p>\n\n<p>Artikel adalah sebuah esai yang sebenarnya lengkap dengan panjang tertentu yang dibuat untuk dipublikasikan (melalui koran, majalah, buletin, dll) dan bertujuan untuk menyajikan ide-ide dan fakta-fakta yang dapat meyakinkan, mendidik, dan menghibur. Isi artikel bisa bermacam &ndash; macam, beberapa contoh yang sering kita bacaseperti Sejarah, Petualangan, argumentasi, penelitian, bimbingan untuk melakukan / mengajarkan sesuatu</p>\n', 'Kris Banarto', '2020-06-23 11:18:43', 0, '149895.jpg', '', '', '', 8, 0, 0, 'test', 'd41d8cd98f00b204e9800998ecf8427e7', 'Kris Banarto', '2020-06-23 11:18:43', '', NULL),
(33, 3, 'Salesman  ship Artikel', '<p>Artikel adalah sebuah esai yang sebenarnya lengkap dengan panjang tertentu yang dibuat untuk dipublikasikan (melalui koran, majalah, buletin, dll) dan bertujuan untuk menyajikan ide-ide dan fakta-fakta yang dapat meyakinkan, mendidik, dan menghibur. Isi artikel bisa bermacam &ndash; macam, beberapa contoh yang sering kita bacaseperti Sejarah, Petualangan, argumentasi, penelitian, bimbingan untuk melakukan / mengajarkan sesuatu</p>\n\n<p>Artikel adalah sebuah esai yang sebenarnya lengkap dengan panjang tertentu yang dibuat untuk dipublikasikan (melalui koran, majalah, buletin, dll) dan bertujuan untuk menyajikan ide-ide dan fakta-fakta yang dapat meyakinkan, mendidik, dan menghibur. Isi artikel bisa bermacam &ndash; macam, beberapa contoh yang sering kita bacaseperti Sejarah, Petualangan, argumentasi, penelitian, bimbingan untuk melakukan / mengajarkan sesuatu</p>\n\n<p>Artikel adalah sebuah esai yang sebenarnya lengkap dengan panjang tertentu yang dibuat untuk dipublikasikan (melalui koran, majalah, buletin, dll) dan bertujuan untuk menyajikan ide-ide dan fakta-fakta yang dapat meyakinkan, mendidik, dan menghibur. Isi artikel bisa bermacam &ndash; macam, beberapa contoh yang sering kita bacaseperti Sejarah, Petualangan, argumentasi, penelitian, bimbingan untuk melakukan / mengajarkan sesuatu</p>\n\n<p>Artikel adalah sebuah esai yang sebenarnya lengkap dengan panjang tertentu yang dibuat untuk dipublikasikan (melalui koran, majalah, buletin, dll) dan bertujuan untuk menyajikan ide-ide dan fakta-fakta yang dapat meyakinkan, mendidik, dan menghibur. Isi artikel bisa bermacam &ndash; macam, beberapa contoh yang sering kita bacaseperti Sejarah, Petualangan, argumentasi, penelitian, bimbingan untuk melakukan / mengajarkan sesuatu</p>\n', 'Kris Banarto', '2020-06-23 11:20:06', 0, 's1.png', '', '', '', 8, 0, 0, 'test', 'd41d8cd98f00b204e9800998ecf8427e5', 'Kris Banarto', '2020-06-23 11:20:06', '', NULL),
(34, 4, 'Properti properti properti', '<p>Artikel adalah sebuah esai yang sebenarnya lengkap dengan panjang tertentu yang dibuat untuk dipublikasikan (melalui koran, majalah, buletin, dll) dan bertujuan untuk menyajikan ide-ide dan fakta-fakta yang dapat meyakinkan, mendidik, dan menghibur. Isi artikel bisa bermacam &ndash; macam, beberapa contoh yang sering kita bacaseperti Sejarah, Petualangan, argumentasi, penelitian, bimbingan untuk melakukan / mengajarkan sesuatu</p>\n\n<p>Artikel adalah sebuah esai yang sebenarnya lengkap dengan panjang tertentu yang dibuat untuk dipublikasikan (melalui koran, majalah, buletin, dll) dan bertujuan untuk menyajikan ide-ide dan fakta-fakta yang dapat meyakinkan, mendidik, dan menghibur. Isi artikel bisa bermacam &ndash; macam, beberapa contoh yang sering kita bacaseperti Sejarah, Petualangan, argumentasi, penelitian, bimbingan untuk melakukan / mengajarkan sesuatu</p>\n\n<p>Artikel adalah sebuah esai yang sebenarnya lengkap dengan panjang tertentu yang dibuat untuk dipublikasikan (melalui koran, majalah, buletin, dll) dan bertujuan untuk menyajikan ide-ide dan fakta-fakta yang dapat meyakinkan, mendidik, dan menghibur. Isi artikel bisa bermacam &ndash; macam, beberapa contoh yang sering kita bacaseperti Sejarah, Petualangan, argumentasi, penelitian, bimbingan untuk melakukan / mengajarkan sesuatu</p>\n\n<p>Artikel adalah sebuah esai yang sebenarnya lengkap dengan panjang tertentu yang dibuat untuk dipublikasikan (melalui koran, majalah, buletin, dll) dan bertujuan untuk menyajikan ide-ide dan fakta-fakta yang dapat meyakinkan, mendidik, dan menghibur. Isi artikel bisa bermacam &ndash; macam, beberapa contoh yang sering kita bacaseperti Sejarah, Petualangan, argumentasi, penelitian, bimbingan untuk melakukan / mengajarkan sesuatu</p>\n\n<p>Artikel adalah sebuah esai yang sebenarnya lengkap dengan panjang tertentu yang dibuat untuk dipublikasikan (melalui koran, majalah, buletin, dll) dan bertujuan untuk menyajikan ide-ide dan fakta-fakta yang dapat meyakinkan, mendidik, dan menghibur. Isi artikel bisa bermacam &ndash; macam, beberapa contoh yang sering kita bacaseperti Sejarah, Petualangan, argumentasi, penelitian, bimbingan untuk melakukan / mengajarkan sesuatu</p>\n\n<p>Artikel adalah sebuah esai yang sebenarnya lengkap dengan panjang tertentu yang dibuat untuk dipublikasikan (melalui koran, majalah, buletin, dll) dan bertujuan untuk menyajikan ide-ide dan fakta-fakta yang dapat meyakinkan, mendidik, dan menghibur. Isi artikel bisa bermacam &ndash; macam, beberapa contoh yang sering kita bacaseperti Sejarah, Petualangan, argumentasi, penelitian, bimbingan untuk melakukan / mengajarkan sesuatu</p>\n', 'Kris Banarto', '2020-06-23 11:40:25', 0, 'BC 4.jpeg', '', '', '', 8, 0, 0, 'tas', 'd41d8cd98f00b204e9800998ecf8427e6', 'Kris Banarto', '2020-06-23 11:40:25', '', NULL),
(35, 4, 'Properti', '<p>Artikel adalah sebuah esai yang sebenarnya lengkap dengan panjang tertentu yang dibuat untuk dipublikasikan (melalui koran, majalah, buletin, dll) dan bertujuan untuk menyajikan ide-ide dan fakta-fakta yang dapat meyakinkan, mendidik, dan menghibur. Isi artikel bisa bermacam &ndash; macam, beberapa contoh yang sering kita bacaseperti Sejarah, Petualangan, argumentasi, penelitian, bimbingan untuk melakukan / mengajarkan sesuatu</p>\n\n<p>Artikel adalah sebuah esai yang sebenarnya lengkap dengan panjang tertentu yang dibuat untuk dipublikasikan (melalui koran, majalah, buletin, dll) dan bertujuan untuk menyajikan ide-ide dan fakta-fakta yang dapat meyakinkan, mendidik, dan menghibur. Isi artikel bisa bermacam &ndash; macam, beberapa contoh yang sering kita bacaseperti Sejarah, Petualangan, argumentasi, penelitian, bimbingan untuk melakukan / mengajarkan sesuatu</p>\n\n<p>Artikel adalah sebuah esai yang sebenarnya lengkap dengan panjang tertentu yang dibuat untuk dipublikasikan (melalui koran, majalah, buletin, dll) dan bertujuan untuk menyajikan ide-ide dan fakta-fakta yang dapat meyakinkan, mendidik, dan menghibur. Isi artikel bisa bermacam &ndash; macam, beberapa contoh yang sering kita bacaseperti Sejarah, Petualangan, argumentasi, penelitian, bimbingan untuk melakukan / mengajarkan sesuatu</p>\n\n<p>Artikel adalah sebuah esai yang sebenarnya lengkap dengan panjang tertentu yang dibuat untuk dipublikasikan (melalui koran, majalah, buletin, dll) dan bertujuan untuk menyajikan ide-ide dan fakta-fakta yang dapat meyakinkan, mendidik, dan menghibur. Isi artikel bisa bermacam &ndash; macam, beberapa contoh yang sering kita bacaseperti Sejarah, Petualangan, argumentasi, penelitian, bimbingan untuk melakukan / mengajarkan sesuatu</p>\n\n<p>Artikel adalah sebuah esai yang sebenarnya lengkap dengan panjang tertentu yang dibuat untuk dipublikasikan (melalui koran, majalah, buletin, dll) dan bertujuan untuk menyajikan ide-ide dan fakta-fakta yang dapat meyakinkan, mendidik, dan menghibur. Isi artikel bisa bermacam &ndash; macam, beberapa contoh yang sering kita bacaseperti Sejarah, Petualangan, argumentasi, penelitian, bimbingan untuk melakukan / mengajarkan sesuatu</p>\n', 'Kris Banarto', '2020-06-23 11:41:56', 0, '9.png', '', '', '', 16, 0, 0, 'bisnis', 'd41d8cd98f00b204e9800998ecf8427e8', 'Kris Banarto', '2020-06-23 11:41:56', '', NULL),
(36, 6, 'Etika Bisnis ajaaa', '<p>Artikel adalah sebuah esai yang sebenarnya lengkap dengan panjang tertentu yang dibuat untuk dipublikasikan (melalui koran, majalah, buletin, dll) dan bertujuan untuk menyajikan ide-ide dan fakta-fakta yang dapat meyakinkan, mendidik, dan menghibur. Isi artikel bisa bermacam &ndash; macam, beberapa contoh yang sering kita bacaseperti Sejarah, Petualangan, argumentasi, penelitian, bimbingan untuk melakukan / mengajarkan sesuatu</p>\n\n<p>Artikel adalah sebuah esai yang sebenarnya lengkap dengan panjang tertentu yang dibuat untuk dipublikasikan (melalui koran, majalah, buletin, dll) dan bertujuan untuk menyajikan ide-ide dan fakta-fakta yang dapat meyakinkan, mendidik, dan menghibur. Isi artikel bisa bermacam &ndash; macam, beberapa contoh yang sering kita bacaseperti Sejarah, Petualangan, argumentasi, penelitian, bimbingan untuk melakukan / mengajarkan sesuatu</p>\n\n<p>Artikel adalah sebuah esai yang sebenarnya lengkap dengan panjang tertentu yang dibuat untuk dipublikasikan (melalui koran, majalah, buletin, dll) dan bertujuan untuk menyajikan ide-ide dan fakta-fakta yang dapat meyakinkan, mendidik, dan menghibur. Isi artikel bisa bermacam &ndash; macam, beberapa contoh yang sering kita bacaseperti Sejarah, Petualangan, argumentasi, penelitian, bimbingan untuk melakukan / mengajarkan sesuatu</p>\n\n<p>Artikel adalah sebuah esai yang sebenarnya lengkap dengan panjang tertentu yang dibuat untuk dipublikasikan (melalui koran, majalah, buletin, dll) dan bertujuan untuk menyajikan ide-ide dan fakta-fakta yang dapat meyakinkan, mendidik, dan menghibur. Isi artikel bisa bermacam &ndash; macam, beberapa contoh yang sering kita bacaseperti Sejarah, Petualangan, argumentasi, penelitian, bimbingan untuk melakukan / mengajarkan sesuatu</p>\n\n<p>Artikel adalah sebuah esai yang sebenarnya lengkap dengan panjang tertentu yang dibuat untuk dipublikasikan (melalui koran, majalah, buletin, dll) dan bertujuan untuk menyajikan ide-ide dan fakta-fakta yang dapat meyakinkan, mendidik, dan menghibur. Isi artikel bisa bermacam &ndash; macam, beberapa contoh yang sering kita bacaseperti Sejarah, Petualangan, argumentasi, penelitian, bimbingan untuk melakukan / mengajarkan sesuatu</p>\n\n<p>Artikel adalah sebuah esai yang sebenarnya lengkap dengan panjang tertentu yang dibuat untuk dipublikasikan (melalui koran, majalah, buletin, dll) dan bertujuan untuk menyajikan ide-ide dan fakta-fakta yang dapat meyakinkan, mendidik, dan menghibur. Isi artikel bisa bermacam &ndash; macam, beberapa contoh yang sering kita bacaseperti Sejarah, Petualangan, argumentasi, penelitian, bimbingan untuk melakukan / mengajarkan sesuatu</p>\n\n<p>Artikel adalah sebuah esai yang sebenarnya lengkap dengan panjang tertentu yang dibuat untuk dipublikasikan (melalui koran, majalah, buletin, dll) dan bertujuan untuk menyajikan ide-ide dan fakta-fakta yang dapat meyakinkan, mendidik, dan menghibur. Isi artikel bisa bermacam &ndash; macam, beberapa contoh yang sering kita bacaseperti Sejarah, Petualangan, argumentasi, penelitian, bimbingan untuk melakukan / mengajarkan sesuatu</p>\n', 'Kris Banarto', '2020-06-23 11:51:48', 0, 'BC5.jpeg', '', '', '', 10, 0, 0, 'etika bisnis', 'd41d8cd98f00b204e9800998ecf8427e', 'Kris Banarto', '2020-06-23 11:51:48', '', NULL);
INSERT INTO `article` (`id_article`, `id_category`, `title`, `content`, `author`, `date`, `status`, `picture`, `ref_link1`, `ref_link2`, `ref_link3`, `views`, `likes`, `comments`, `tags`, `kode`, `created_by`, `created_dt`, `changed_by`, `changed_dt`) VALUES
(37, 6, 'Etika bisnis 1', '<p>Artikel adalah sebuah esai yang sebenarnya lengkap dengan panjang tertentu yang dibuat untuk dipublikasikan (melalui koran, majalah, buletin, dll) dan bertujuan untuk menyajikan ide-ide dan fakta-fakta yang dapat meyakinkan, mendidik, dan menghibur. Isi artikel bisa bermacam &ndash; macam, beberapa contoh yang sering kita bacaseperti Sejarah, Petualangan, argumentasi, penelitian, bimbingan untuk melakukan / mengajarkan sesuatu</p>\n\n<p>Artikel adalah sebuah esai yang sebenarnya lengkap dengan panjang tertentu yang dibuat untuk dipublikasikan (melalui koran, majalah, buletin, dll) dan bertujuan untuk menyajikan ide-ide dan fakta-fakta yang dapat meyakinkan, mendidik, dan menghibur. Isi artikel bisa bermacam &ndash; macam, beberapa contoh yang sering kita bacaseperti Sejarah, Petualangan, argumentasi, penelitian, bimbingan untuk melakukan / mengajarkan sesuatu</p>\n\n<p>Artikel adalah sebuah esai yang sebenarnya lengkap dengan panjang tertentu yang dibuat untuk dipublikasikan (melalui koran, majalah, buletin, dll) dan bertujuan untuk menyajikan ide-ide dan fakta-fakta yang dapat meyakinkan, mendidik, dan menghibur. Isi artikel bisa bermacam &ndash; macam, beberapa contoh yang sering kita bacaseperti Sejarah, Petualangan, argumentasi, penelitian, bimbingan untuk melakukan / mengajarkan sesuatu</p>\n\n<p>Artikel adalah sebuah esai yang sebenarnya lengkap dengan panjang tertentu yang dibuat untuk dipublikasikan (melalui koran, majalah, buletin, dll) dan bertujuan untuk menyajikan ide-ide dan fakta-fakta yang dapat meyakinkan, mendidik, dan menghibur. Isi artikel bisa bermacam &ndash; macam, beberapa contoh yang sering kita bacaseperti Sejarah, Petualangan, argumentasi, penelitian, bimbingan untuk melakukan / mengajarkan sesuatu</p>\n\n<p>Artikel adalah sebuah esai yang sebenarnya lengkap dengan panjang tertentu yang dibuat untuk dipublikasikan (melalui koran, majalah, buletin, dll) dan bertujuan untuk menyajikan ide-ide dan fakta-fakta yang dapat meyakinkan, mendidik, dan menghibur. Isi artikel bisa bermacam &ndash; macam, beberapa contoh yang sering kita bacaseperti Sejarah, Petualangan, argumentasi, penelitian, bimbingan untuk melakukan / mengajarkan sesuatu</p>\n\n<p>Artikel adalah sebuah esai yang sebenarnya lengkap dengan panjang tertentu yang dibuat untuk dipublikasikan (melalui koran, majalah, buletin, dll) dan bertujuan untuk menyajikan ide-ide dan fakta-fakta yang dapat meyakinkan, mendidik, dan menghibur. Isi artikel bisa bermacam &ndash; macam, beberapa contoh yang sering kita bacaseperti Sejarah, Petualangan, argumentasi, penelitian, bimbingan untuk melakukan / mengajarkan sesuatu</p>\n', 'Kris Banarto', '2020-06-23 11:52:47', 0, 'bcc 1.jpeg', '', '', '', 11, 0, 0, 'etika bisnis', 'd41d8cd98f00b204e9800998ecf8427e9', 'Kris Banarto', '2020-06-23 11:52:47', '', NULL),
(39, 1, 'Add Article', '<p>Test Sebagai praktisi marketing pasti mengenal bauran pemasaran atau marketing mix P4 (Product, Price, Place, and Promotion) strategi dalam pemasaran yang dipopulerkan oleh Jerome McCarthy tahun 1968, tatapi sampai sekarang masih up to date dan dipakai banyak praktisi marketing.</p>\n\n<p>Sebegitu pentingnya konsep ini diajarkan melalui training tenaga penjualan dan pemasaran, bahkan diajarkan sampai ke mahasiswa jurusan manajemen. Sebenarnya konsep marketing mix ini cukup bagus, tetapi lebih cenderung ke kepentingan pemasar/perusahaan, sedangkan kepentingan konsumen kurang dipertimbangkan.</p>\n\n<p>Adalah Philip Kotler (1999) yang mengkritik 4P yang berorientasi pada produk bukan pelanggan, hehingga 4P ini apabila dijalankan harus mempertimbangkan 4C (Consumer, Cost, Convenience, Communication).</p>\n', 'kris', '2020-07-09 16:16:18', 0, '149895.jpg', '', '', '', 45, 0, 4, 'tets', '1a80ecbd968c5e1da8ca64badeffcfef', 'kris', '2020-07-09 16:16:18', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `article_category`
--

CREATE TABLE `article_category` (
  `id_category` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `created_dt` date NOT NULL,
  `changed_by` varchar(100) NOT NULL,
  `changed_dt` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article_category`
--

INSERT INTO `article_category` (`id_category`, `category_name`, `created_by`, `created_dt`, `changed_by`, `changed_dt`) VALUES
(1, 'Bisnis', 'Kris Banarto', '2020-05-30', '', '0000-00-00'),
(2, 'Marketing', 'Kris Banarto', '2020-05-30', '', '0000-00-00'),
(3, 'Salesmanship', 'Kris Banarto', '2020-05-29', '', '0000-00-00'),
(4, 'Properti', 'Kris Banarto', '2020-05-30', '', '0000-00-00'),
(5, 'Manajemen', 'Kris Banarto', '2020-05-30', '', '0000-00-00'),
(6, 'Etika Bisnis', 'Kris Banarto', '2020-05-30', 'Kris Banarto', '2020-05-30');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id_comment` int(11) NOT NULL,
  `id_member` int(100) NOT NULL,
  `id_article` int(11) NOT NULL,
  `comment` text NOT NULL,
  `comment_date` datetime NOT NULL,
  `status` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id_comment`, `id_member`, `id_article`, `comment`, `comment_date`, `status`) VALUES
(13, 4, 14, 'testing aj yah..', '2020-05-28 17:38:45', '1'),
(14, 4, 16, 'tests comment ya\n', '2020-05-29 05:21:16', '0'),
(16, 4, 13, 'okay deh', '2020-05-29 05:45:44', '0'),
(17, 4, 26, 'Artikel nya sangat bagus', '2020-05-30 07:33:55', '1'),
(18, 4, 39, 'test commnet aja ya..', '2020-07-12 05:39:51', '1'),
(19, 15, 39, 'edad', '2020-07-14 16:15:27', '1'),
(20, 16, 39, 'ssssss', '2020-07-14 16:39:50', '1');

-- --------------------------------------------------------

--
-- Table structure for table `comments_detail`
--

CREATE TABLE `comments_detail` (
  `id_detail` int(11) NOT NULL,
  `id_comment` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `id_article` int(11) NOT NULL,
  `comment` text NOT NULL,
  `comment_date` datetime NOT NULL,
  `status` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments_detail`
--

INSERT INTO `comments_detail` (`id_detail`, `id_comment`, `id_member`, `id_article`, `comment`, `comment_date`, `status`) VALUES
(16, 13, 14, 14, 'okay deh kalo gtu\n', '2020-05-29 04:54:01', '0'),
(18, 14, 4, 16, 'okay\n', '2020-05-29 05:26:43', '1');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id_member` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(64) NOT NULL,
  `image` varchar(256) NOT NULL,
  `status` varchar(2) NOT NULL,
  `created_dt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id_member`, `email`, `password`, `name`, `image`, `status`, `created_dt`) VALUES
(2, 'lielie002@gmail.com', '', 'Priscila Lie', 'img1.png', '0', '2020-05-25 00:00:00'),
(3, 'lielie@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'lielie', 'img1.png', '1', '2020-05-27 06:53:07'),
(4, 'dharmahermanda001@gmail.com', 'dharmahermanda001@gmail.com', 'Dharma Hermanda', 'https://lh4.googleusercontent.com/-j7BQZ8pD1aA/AAAAAAAAAAI/AAAAAAAAAAA/AMZuuclefTH2gq-GKBLZXFkZbzPLNPpiCA/s96-c/photo.jpg', '0', '2020-05-28 10:26:35'),
(14, 'websitetesthermanda@gmail.com', 'websitetesthermanda@gmail.com', 'websitetest hermanda', 'https://lh4.googleusercontent.com/-LU770cLlTs4/AAAAAAAAAAI/AAAAAAAAAAA/AMZuuckRArxEZOWdXeoWZZHQgl26vKyosg/s96-c/photo.jpg', '1', '2020-05-28 18:31:33'),
(15, 'dada@gmail.com', '1', 'ddd', 'img.png', '0', '2020-07-14 16:15:27'),
(16, 'dd@f.bom', '1', 'wwwww', 'img.png', '0', '2020-07-14 16:39:50');

-- --------------------------------------------------------

--
-- Table structure for table `saran_komentar`
--

CREATE TABLE `saran_komentar` (
  `id` int(11) NOT NULL,
  `nama` varchar(24) NOT NULL,
  `email` varchar(126) NOT NULL,
  `komentar` text NOT NULL,
  `tanggal` varchar(12) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `saran_komentar`
--

INSERT INTO `saran_komentar` (`id`, `nama`, `email`, `komentar`, `tanggal`, `status`) VALUES
(16, 'vvvfvf', 'dharmahermanda@gmail.com', 'fvfvfvdsc', '2018-03-14', 1),
(17, 'vfvssdvdvdsv', 'dharmahermanda@gmail.com', 'dvsdcsdcsd', '2018-03-14', 1),
(18, 'dharma hermanda', 'dharmahermanda001@gmail.com', 'boleh kita bertemu pak? saya ingin bahas kerja sama dengan bapak, karena semua tulisan bapak sangat mengisnpirasi.. terimakasih', '2020-07-08', 1),
(19, 'dharma hermanda', 'dharmahermanda001@gmail.com', 'boleh kita bertemu pak? saya ingin bahas kerja sama dengan bapak, karena semua tulisan bapak sangat mengisnpirasi.. terimakasih', '2020-07-08', 1),
(20, 'dharma@whiteopen.com', 'dharmahermanda001@gmail.com', 'Maecenas luctus nisi in sem fermentum blat. In nec elit solliudin, elementum, dictum pur quam volutpat suscipit antena', '2020-07-08', 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_hubungi_kami`
--

CREATE TABLE `t_hubungi_kami` (
  `id` int(11) NOT NULL,
  `about` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `linkedin` varchar(100) NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `whatsapp` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_hubungi_kami`
--

INSERT INTO `t_hubungi_kami` (`id`, `about`, `email`, `linkedin`, `instagram`, `facebook`, `twitter`, `whatsapp`) VALUES
(1, 'Maecenas luctus nisi in sem fermentum blat. In nec elit solliudin, elementum, dictum pur quam volutpat suscipit antena', 'krisbanarto@gmail.com', 'https://www.linkedin.com/in/kris-banarto-52a8a054', 'https://www.instagram.com/kris_bernart', 'https://www.facebook.com/krisbanarto', 'https://twitter.com/krisbanarto', '08151866481');

-- --------------------------------------------------------

--
-- Table structure for table `t_tentang_kami`
--

CREATE TABLE `t_tentang_kami` (
  `id` int(11) NOT NULL,
  `sejarah` text NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `utilitas`
--

CREATE TABLE `utilitas` (
  `id` int(11) NOT NULL,
  `nama` varchar(26) NOT NULL,
  `isi` text NOT NULL,
  `created_by` varchar(26) NOT NULL,
  `created_dt` date NOT NULL,
  `changed_by` varchar(24) DEFAULT NULL,
  `changed_dt` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `utilitas`
--

INSERT INTO `utilitas` (`id`, `nama`, `isi`, `created_by`, `created_dt`, `changed_by`, `changed_dt`) VALUES
(1, 'Visi', '<p><span style="color:null">Menjadikan seluruh jemaat murid Kristus yang terus berakar, bertumbuh dan berbuah untuk kemuliaan Kristus Yesus</span></p>\r\n', 'Dharma', '2017-05-10', 'Dharma', '2018-03-15'),
(2, 'Misi', '<p><span style="color:null">Menjadikan seluruh jemaat murid Kristus yang terus berakar, bertumbuh dan berbuah untuk kemuliaan Kristus Yesus</span></p>\r\n', 'Dharma', '2017-05-10', 'Dharma', '2018-03-07'),
(3, 'Ayat Emas 2018', 'GEREJA di ATAS BATU KARANG (MATIUS 16:18)\r\n', 'Dharma', '2017-05-10', 'Dharma', '2017-09-26'),
(15, 'Sejarah Singkat GPdI Bait ', '<p>Salam sejahtera dalam kasih Kristus. Selamat datang di website GPdI Barito. Puji Syukur ke hadirat Tuhan kita Yesus Kristus dengan terciptanya website ini diharapkan dapat menjadi salah satu sarana komunikasi untuk menyampaikan segala infomasi yang berhubungan dengan kegiatan di GPdI Barito.<br />Dan tentu saja segala kegiatan yang kami lakukan di dalam maupun diluar gereja, kami lakukan demi hormat dan kemuliaan nama Tuhan kita Yesus Kristus.<br />Terima kasih telah berkunjung ke website kami. Tuhan Yesus memberkati</p>', 'Dharma', '2018-03-03', 'Dharma', '2018-03-03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id_article`);

--
-- Indexes for table `article_category`
--
ALTER TABLE `article_category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id_comment`);

--
-- Indexes for table `comments_detail`
--
ALTER TABLE `comments_detail`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `saran_komentar`
--
ALTER TABLE `saran_komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_hubungi_kami`
--
ALTER TABLE `t_hubungi_kami`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_tentang_kami`
--
ALTER TABLE `t_tentang_kami`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `utilitas`
--
ALTER TABLE `utilitas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id_article` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `article_category`
--
ALTER TABLE `article_category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `comments_detail`
--
ALTER TABLE `comments_detail`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `saran_komentar`
--
ALTER TABLE `saran_komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `t_hubungi_kami`
--
ALTER TABLE `t_hubungi_kami`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `t_tentang_kami`
--
ALTER TABLE `t_tentang_kami`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `utilitas`
--
ALTER TABLE `utilitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
