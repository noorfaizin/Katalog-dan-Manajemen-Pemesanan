-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2020 at 03:37 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `orderentry`
--

-- --------------------------------------------------------

--
-- Table structure for table `beli`
--

CREATE TABLE `beli` (
  `beli_num` int(11) DEFAULT NULL,
  `beli_date` datetime DEFAULT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `beliitems`
--

CREATE TABLE `beliitems` (
  `beli_num` int(11) DEFAULT NULL,
  `prod_name` varchar(120) DEFAULT NULL,
  `prod_id` varchar(30) DEFAULT NULL,
  `quantity` int(11) DEFAULT '0',
  `prod_price` double NOT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Triggers `beliitems`
--
DELIMITER $$
CREATE TRIGGER `beli_barang` AFTER INSERT ON `beliitems` FOR EACH ROW begin
update products set quantity=quantity+new.quantity
where prod_id = new.prod_id;
end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `prod_id` int(11) NOT NULL,
  `prod_name` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL DEFAULT '0',
  `price` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cart_beli`
--

CREATE TABLE `cart_beli` (
  `prod_id` int(11) NOT NULL,
  `prod_name` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL DEFAULT '0',
  `price` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(1, 'Biji Kopi Arabika'),
(2, 'Biji Kopi Robusta'),
(3, 'Biji Kopi Luwak'),
(6, 'Tidak Berkategori'),
(7, 'Menu Kopi'),
(8, 'Menu Tidak Kopi');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `komen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `nama`, `email`, `telp`, `komen`) VALUES
(5, 'aaa', 'nunoakbar3@gmail.com', '', 'ok'),
(6, 'ok', 'ardian@gmail.com', '', 'ok\r\n'),
(7, 'nuno', 'nuno@gmail.com', '', 'tes');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user_id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `level` int(1) NOT NULL COMMENT '1:admin, 2:customer',
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_id`, `username`, `password`, `name`, `address`, `level`, `role`) VALUES
(1, 'faiz', '21232f297a57a5a743894a0e4a801fc3', 'Noor Faizin', 'Kudus, jawa tengah', 1, 'admin'),
(2, 'nuno', '32e35f41e104ac0c67cfe51879d013b8', 'Nuno Akbar', 'Kudus', 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `orderitems`
--

CREATE TABLE `orderitems` (
  `order_num` int(11) DEFAULT NULL,
  `prod_name` varchar(120) DEFAULT NULL,
  `prod_id` varchar(30) DEFAULT NULL,
  `quantity` int(11) DEFAULT '0',
  `prod_price` double NOT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Triggers `orderitems`
--
DELIMITER $$
CREATE TRIGGER `jual_barang` AFTER INSERT ON `orderitems` FOR EACH ROW begin
update products set quantity=quantity-new.quantity
where prod_id = new.prod_id;
end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_num` int(11) DEFAULT NULL,
  `order_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `productnotes`
--

CREATE TABLE `productnotes` (
  `note_id` char(9) DEFAULT NULL,
  `prod_id` varchar(30) DEFAULT NULL,
  `note_date` date DEFAULT NULL,
  `note_text` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `prod_id` int(16) NOT NULL,
  `vend_id` char(11) NOT NULL,
  `prod_name` varchar(32) NOT NULL,
  `prod_price` int(11) NOT NULL,
  `harga_beli` int(11) NOT NULL,
  `prod_desc` text,
  `prod_img` varchar(120) DEFAULT 'default.jpg',
  `prod_img2` varchar(120) DEFAULT 'default.jpg',
  `prod_img3` varchar(120) DEFAULT 'default.jpg',
  `cat_id` int(10) DEFAULT '6',
  `quantity` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`prod_id`, `vend_id`, `prod_name`, `prod_price`, `harga_beli`, `prod_desc`, `prod_img`, `prod_img2`, `prod_img3`, `cat_id`, `quantity`) VALUES
(1, 'A001', 'Robusta Colo', 30000, 25000, 'Kopi robusta, merupakan keturunan dari beberapa jenis spesies kopi. Mengenai kualitas dari buah kopi, faktanya ini lebih rendah dibandingkan dengan kopi Arabika dan juga Liberika. Kopi jenis ini menguasai sekitar 30% pasar dunia.', '1.png', 'default.jpg', 'default.jpg', 2, 19),
(2, 'A001', 'Arabika Colo', 32000, 25000, 'Kopi jenis ini tumbuh pada daerah dengan ketinggian 700-1700 mdpl. Suhu yang dimiliki adalah 16-20 °C. Yang perlu diketahui mengenai jenis kopi ini adalah mengenai aspek kepekaan terhadap jenis penyakit karat daun atau lebih dikenal dengan HV atau Hemileia Vastatrix. Ini terutama bila ditanam pada daerah yang memiliki elevasi kurang dari 700 mdpl.', '2.png', 'default.jpg', 'default.jpg', 1, 19),
(3, 'A001', 'Bergendal', 34000, 25000, 'Kopi Bergendal adalah varietas kopi arabika dari kebun petani di Bener Meriah Provinsi Aceh. Bergendal sendiri terkenal setelah dinamai oleh Belanda. Menurut cerita petani sekitar, di tempat inilah Belanda menanam kopi pertama kali di Indonesia.', '3.png', 'default.jpg', 'default.jpg', 1, 10),
(4, 'A001', 'Robusta Leluhur', 35000, 25000, 'Kopi robusta, merupakan keturunan dari beberapa jenis spesies kopi. Mengenai kualitas dari buah kopi, faktanya ini lebih rendah dibandingkan dengan kopi Arabika dan juga Liberika. Kopi jenis ini menguasai sekitar 30% pasar dunia.', '4.png', 'default.jpg', 'default.jpg', 2, 23),
(5, 'A001', 'Papandayan', 36000, 25000, 'Sesuai dengan namanya, kopi ini muncul dari Gunung Papandayan. Kopi asal Garut ini sudah mendunia dengan kopi Arabica dengan Indikasi Geografis (IG) Gunung Papandayan. Kopi yang berasal dari IG Papandayan berada di tiga kecamatan, yaitu Cisurupan, Cikajang dan Pamulihan. Proses pembudidayaannya mengacu pada elevasi pegunungan di atas 1.000 MDPL.', '5.png', 'default.jpg', 'default.jpg', 1, 13),
(6, 'A001', 'Kepahiang', 31000, 25000, 'Petani kopi di Provinsi Bengkulu mulai mengalihkan pola tanaman kopi tradisional yang selama ini dipertahankan kepada sistem stek. Kebun kopi yang didominasi tanaman tua itu mulai diremajakan dengan menggunakan sistem sambung atau stek.', '6.png', 'default.jpg', 'default.jpg', 2, 20),
(7, 'A001', 'Megasari', 33000, 25000, 'Kawasan perkebunan di Megasari yang berada diatas ketinggian 1000 meter dari permukaan laut (mdpl), ternyata ada sekitar tiga ribu hektar pohon kopi varietas Blue Mountain disana. Hasil peninjauan sementara lokasi perkebunan yang ditanami Blue Mountain ada di kawasan Megasari dan sekitarnya. Di kawasan tersebut ada sekitar 300 hektar lahan yang ditumbuhi kopi varietas Blue Mountain.', '7.png', 'default.jpg', 'default.jpg', 1, 25),
(8, 'A001', 'Patrol', 33500, 25000, 'Dia memakai nama molong kopi beserta musik patrol madura tersebut agar lebih khas. Sebab, masyarakat Bondowoso mayoritas orang madura dan menggunakan bahasa madura. Apalagi patrol juga sering diaplikasikan mqsyarakat bondowoso, terutama pada saat ramadan tiba. Maksud gerakan di tari molong kopi tersebut adalah menggambarkan petani itu panen kopi.', '8.png', 'default.jpg', 'default.jpg', 6, 11),
(9, 'A001', 'Bajawa', 32500, 25000, 'Bajawa datang dari kata Bhajawa, yang datang dari dua kata “Bha” serta Jawa”. Bha mempunyai artik “piring”, serta Jawa mempunyai makna “perdamaian”. Bhajawa mempunyai makna sebagai piring perdamaian atau daerah yang mengawali perdamaian untuk mempersatukan keseluruhnya Flores jadi utuh.', '9.png', 'default.jpg', 'default.jpg', 1, 16),
(10, '', 'Coffee Latte', 20000, 0, '', 'cafelatte.jpg', 'default.jpg', 'default.jpg', 7, 20),
(11, '', 'Cappucinno', 25000, 0, '', 'cappucino.jpg', 'default.jpg', 'default.jpg', 7, 24),
(12, '', 'Coffee Milo', 18000, 0, '', 'cofeemilo.jpg', 'default.jpg', 'default.jpg', 7, 18),
(13, '', 'Espresso', 10000, 0, '', 'esspreso.jpg', 'default.jpg', 'default.jpg', 7, 16),
(14, '', 'Kopi Hitam', 15000, 0, '', 'kopihitam.jpg', 'default.jpg', 'default.jpg', 7, 15),
(15, '', 'Coffee Milk', 23000, 0, '', 'kopisusu.jpg', 'default.jpg', 'default.jpg', 7, 23),
(16, '', 'Dark Choco', 25000, 0, '', 'darkchoco.jpg', 'default.jpg', 'default.jpg', 8, 25),
(17, '', 'Matcha', 20000, 0, '', 'macha.jpg', 'default.jpg', 'default.jpg', 8, 19),
(18, '', 'Mineral Water', 5000, 0, '', 'mineralwater.jpg', 'default.jpg', 'default.jpg', 8, 0),
(19, '', 'Red Velvet', 23000, 0, '', 'redvelved.jpg', 'default.jpg', 'default.jpg', 8, 21);

--
-- Triggers `products`
--
DELIMITER $$
CREATE TRIGGER `hapus_barang` AFTER DELETE ON `products` FOR EACH ROW BEGIN
INSERT INTO produk_hapus
(
prod_id,
vend_id,
prod_name,
prod_price,
prod_desc,
prod_img,
cat_id,
quantity,
tgl_hapus,
user
)
VALUES
(
OLD.prod_id,
OLD.vend_id,
OLD.prod_name,
OLD.prod_price,
OLD.prod_desc,
OLD.prod_img,
OLD.cat_id,
OLD.quantity,
SYSDATE(),
CURRENT_USER
);
end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `produk_hapus`
--

CREATE TABLE `produk_hapus` (
  `prod_id` int(16) NOT NULL,
  `vend_id` char(11) NOT NULL,
  `prod_name` varchar(32) NOT NULL,
  `prod_price` int(11) NOT NULL,
  `prod_desc` text,
  `prod_img` varchar(120) DEFAULT 'default.jpg',
  `cat_id` int(10) NOT NULL,
  `quantity` int(11) NOT NULL,
  `tgl_hapus` datetime DEFAULT NULL,
  `user` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk_hapus`
--

INSERT INTO `produk_hapus` (`prod_id`, `vend_id`, `prod_name`, `prod_price`, `prod_desc`, `prod_img`, `cat_id`, `quantity`, `tgl_hapus`, `user`) VALUES
(14, '', 'okok', 123, '', 'jmbt2.jpg', 7, 12, '2020-05-30 02:01:49', 'root@localhost'),
(13, '', 'asd', 123, '', 'default1.jpg', 6, 12, '2020-05-30 02:01:53', 'root@localhost'),
(11, 'a002', 'ok', 1200, '', 'cafelatte.png', 6, 12, '2020-05-30 02:01:58', 'root@localhost'),
(12, 'asdas', 'asd', 123123, '', 'cafelatte.png', 7, 12, '2020-05-30 02:02:03', 'root@localhost'),
(10, 'A002', 'Produk Berhasil', 10000, 'Produk gagal', 'box-null1.png', 6, 10, '2020-05-30 02:02:08', 'root@localhost'),
(15, '', 'Coffee Latte', 20000, '', '', 7, 20, '2020-05-30 02:23:42', 'root@localhost'),
(16, '', 'Coffee Latte', 20000, '', 'cafelatte.png', 7, 20, '2020-05-30 02:23:42', 'root@localhost'),
(17, '', 'Coffee Latte', 20000, '', 'default2.jpg', 7, 2, '2020-05-30 02:23:42', 'root@localhost'),
(18, '', 'Coffee Latte', 20000, '', '', 6, 20, '2020-05-30 02:54:14', 'root@localhost'),
(19, '', 'Coffee Latte', 20000, '', 'box-null1.png', 6, 2, '2020-05-30 03:17:16', 'root@localhost'),
(20, '', '', 0, NULL, 'cafelatte.png', 6, 0, '2020-05-30 03:17:16', 'root@localhost'),
(21, '', '', 0, '', 'cafelatte.jpg', 6, 0, '2020-05-30 03:32:20', 'root@localhost'),
(1, 'A001', 'Robusta Coloo', 20000, 'Kopi robusta, merupakan keturunan dari beberapa jenis spesies kopi. Mengenai kualitas dari buah kopi, faktanya ini lebih rendah dibandingkan dengan kopi Arabika dan juga Liberika. Kopi jenis ini menguasai sekitar 30% pasar dunia. ', '1.png', 2, 24, '2020-06-01 16:45:19', 'root@localhost'),
(2, 'A001', 'Arabika Colo', 15000, 'Kopi jenis ini tumbuh pada daerah dengan ketinggian 700-1700 mdpl. Suhu yang dimiliki adalah 16-20 °C. Yang perlu diketahui mengenai jenis kopi ini adalah mengenai aspek kepekaan terhadap jenis penyakit karat daun atau lebih dikenal dengan HV atau Hemileia Vastatrix. Ini terutama bila ditanam pada daerah yang memiliki elevasi kurang dari 700 mdpl.', '2.png', 1, 20, '2020-06-01 16:45:19', 'root@localhost'),
(3, 'A001', 'Bergendal', 18000, 'Kopi Bergendal adalah varietas kopi arabika dari kebun petani di Bener Meriah Provinsi Aceh. Bergendal sendiri terkenal setelah dinamai oleh Belanda. Menurut cerita petani sekitar, di tempat inilah Belanda menanam kopi pertama kali di Indonesia.', '3.png', 1, 20, '2020-06-01 16:45:20', 'root@localhost'),
(4, 'A001', 'Robusta Leluhur', 20000, 'Kopi robusta, merupakan keturunan dari beberapa jenis spesies kopi. Mengenai kualitas dari buah kopi, faktanya ini lebih rendah dibandingkan dengan kopi Arabika dan juga Liberika. Kopi jenis ini menguasai sekitar 30% pasar dunia.', '4.png', 2, 21, '2020-06-01 16:45:20', 'root@localhost'),
(5, 'A001', 'Papandayan', 25000, 'Sesuai dengan namanya, kopi ini muncul dari Gunung Papandayan. Kopi asal Garut ini sudah mendunia dengan kopi Arabica dengan Indikasi Geografis (IG) Gunung Papandayan. Kopi yang berasal dari IG Papandayan berada di tiga kecamatan, yaitu Cisurupan, Cikajang dan Pamulihan. Proses pembudidayaannya mengacu pada elevasi pegunungan di atas 1.000 MDPL.', '5.png', 3, 20, '2020-06-01 16:45:20', 'root@localhost'),
(6, 'A001', 'Kepahiang', 18000, 'Kopi baru', '6.png', 3, 20, '2020-06-01 16:45:20', 'root@localhost'),
(7, 'A001', 'Megasari', 30000, 'Kopi baru', '7.png', 6, 19, '2020-06-01 16:45:20', 'root@localhost'),
(8, 'A001', 'Patrol', 25000, 'Kopi baru', '8.png', 6, 14, '2020-06-01 16:45:20', 'root@localhost'),
(9, 'A001', 'Bajawa', 26000, 'Kopi baru', '9.png', 6, 18, '2020-06-01 16:45:20', 'root@localhost'),
(22, '', 'Coffee Latte', 20000, '', 'cafelatte.jpg', 7, 20, '2020-06-01 16:45:20', 'root@localhost'),
(23, '', 'Cappucinno', 15000, '', 'cappucino.jpg', 7, 15, '2020-06-01 16:45:20', 'root@localhost'),
(24, '', 'Espresso Single', 8000, '', 'esspreso.jpg', 7, 8, '2020-06-01 16:45:20', 'root@localhost'),
(25, '', 'Kopi Susu', 13000, '', 'kopisusu.jpg', 7, 12, '2020-06-01 16:45:20', 'root@localhost'),
(26, '', 'Coffee Milo', 15000, '', 'cofeemilo.jpg', 7, 13, '2020-06-01 16:45:20', 'root@localhost'),
(27, '', 'Kopi Hitam', 13000, '', 'kopihitam.jpg', 7, 13, '2020-06-01 16:45:20', 'root@localhost'),
(28, '', 'Dark Choco', 13000, '', 'darkchoco.jpg', 7, 13, '2020-06-01 16:45:20', 'root@localhost'),
(20, '', 'Coba', 20000, '', 'photo-profile.png', 6, 12, '2020-06-22 00:02:37', 'root@localhost'),
(21, '', 'ok', 8000, '', 'IMG_20200529_152411-01.jpeg', 6, 89, '2020-06-22 00:04:09', 'root@localhost'),
(22, '', '', 0, NULL, 'default.jpg', 6, 0, '2020-06-22 00:05:19', 'root@localhost'),
(23, '', '', 0, NULL, 'default.jpg', 6, 0, '2020-06-22 00:19:05', 'root@localhost');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `j_kel` varchar(11) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL,
  `role` varchar(20) NOT NULL,
  `verif_akun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama`, `email`, `alamat`, `j_kel`, `nohp`, `username`, `password`, `role`, `verif_akun`) VALUES
(6, 'Noor Faizin', 'faiz.jetak@gmail.com', 'Jetak kedungdowo kaliwungu rt01/05\r\nKudus, Jawa Tengah', 'laki-laki', '089504468800', 'noorfaizin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 1),
(7, 'Nuno Kusir', 'nunoakbar@gmail.com', 'Nganguk melati lor. Kudus, jawa tengah', 'laki-laki', '089111222333', 'nuno', '32e35f41e104ac0c67cfe51879d013b8', '', 0),
(16, 'Ardian Nugrahanta', 'ardiannugrahanta@gmail.com', 'Semarang', 'Laki - Laki', '089876556787', 'ardian', '46632a526b980b41478ca6078fb02c28', '', 1),
(17, 'Noor Faizin', 'faizsmp03@gmail.com', 'kudus, jawa tengah', 'Laki - Laki', '089504468800', 'faiz', '67f27ddf40a0dd24fe50fbe33c4460bb', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `vend_id` char(12) DEFAULT NULL,
  `vend_name` varchar(75) DEFAULT NULL,
  `vend_address` varchar(90) DEFAULT NULL,
  `vend_city` varchar(60) DEFAULT NULL,
  `vend_state` varchar(15) DEFAULT NULL,
  `vend_zip` varchar(21) DEFAULT NULL,
  `vend_country` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`,`email`,`username`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `prod_id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
