-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2023 at 03:29 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vendorposdb`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `allPesanan` ()   BEGIN
    SELECT * FROM pesanan;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `inputPelanggan` (`kode` VARCHAR(10), `nama_pelanggan` VARCHAR(50), `jk` CHAR(1), `tmp_lahir` VARCHAR(30), `tgl_lahir` DATE, `email` VARCHAR(45), `alamat` VARCHAR(40), `kartu_id` INT)   BEGIN
    INSERT INTO pelanggan (kode, nama_pelanggan, jk, tmp_lahir, tgl_lahir, email, alamat, kartu_id)  
	VALUES (kode, nama_pelanggan, jk, tmp_lahir, tgl_lahir, email, alamat, kartu_id);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `inputProduk` (`kode` VARCHAR(10), `nama` VARCHAR(45), `harga_beli` DOUBLE, `harga_jual` DOUBLE, `stok` INT, `min_stok` INT, `jenis_produk_id` INT)   BEGIN
    INSERT INTO produk (kode, nama, harga_beli, harga_jual, stok, min_stok, jenis_produk_id)  
	VALUES (kode, nama, harga_beli, harga_jual, stok, min_stok, jenis_produk_id);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `showPelanggan` ()   BEGIN
    SELECT * FROM pelanggan;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `showProduk` ()   BEGIN
    SELECT * FROM produk;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `totalPesanan` ()   BEGIN
    SELECT COUNT(harga) AS total_harga FROM pesanan_items GROUP BY harga;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_produk`
--

CREATE TABLE `jenis_produk` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `ket` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jenis_produk`
--

INSERT INTO `jenis_produk` (`id`, `nama`, `ket`) VALUES
(1, 'elektronik', 'tersedia'),
(2, 'makanan', 'tersedia'),
(3, 'minuman', 'tidak tersedia'),
(4, 'furniture', ' tersedia');

-- --------------------------------------------------------

--
-- Table structure for table `kartu`
--

CREATE TABLE `kartu` (
  `id` int(11) NOT NULL,
  `kode` varchar(4) DEFAULT NULL,
  `nama` varchar(30) NOT NULL,
  `diskon` double DEFAULT 0,
  `iuran` double DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kartu`
--

INSERT INTO `kartu` (`id`, `kode`, `nama`, `diskon`, `iuran`) VALUES
(1, 'BC00', 'Bronce Card', 0, 10000),
(2, 'SC00', 'Silver Card', 5, 50000),
(3, 'GC00', 'Gold Card', 10, 150000),
(4, 'PC00', 'Platinum Card', 20, 500000),
(5, 'Test', 'TestCardKu', 10, 30000);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(75) NOT NULL,
  `role` enum('admin','manager','staff') DEFAULT NULL,
  `fotouser` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `fullname`, `username`, `password`, `role`, `fotouser`) VALUES
(1, 'superadmin', 'superadmin@admin.com', '6b6e2b6a57bb6224abd3cb6d1f243ec86b995ce1', 'admin', 'superadmin.png'),
(2, 'admin', 'admin@admin.com', 'af7e0928fcba501d8ed0385c794e690fe151bf16', 'admin', 'admin.png'),
(3, 'supernamager', 'supermanager@manager.com', '605dcdf6c6a2c0c5a44309186c503f5f97eb45c8', 'manager', 'supermanager.png'),
(4, 'manager', 'manager@manager.com', '54dd75eddaa72e610b060ae82548b2430a4dfbdc', 'manager', 'manager.png'),
(5, 'staff', 'staff@staff.com', 'ae186d20e1a1b46737a98ef69fc0896ba7cca385', 'staff', 'staff.png');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id` int(11) NOT NULL,
  `kode` varchar(10) DEFAULT NULL,
  `nama_pelanggan` varchar(50) DEFAULT NULL,
  `jk` char(1) DEFAULT NULL,
  `tmp_lahir` varchar(30) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `alamat` varchar(40) DEFAULT NULL,
  `kartu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id`, `kode`, `nama_pelanggan`, `jk`, `tmp_lahir`, `tgl_lahir`, `email`, `alamat`, `kartu_id`) VALUES
(1, '0001', 'Fitri', 'P', 'Pontianak', '2000-01-01', 'fitri@gmail', 'Jl. Martabak Manis No.26', 1),
(2, '0002', 'Zeeta', 'L', 'Banjarmasin', '2003-02-11', 'zeeta@gmail.com', 'Jl. Malam No.99', 2),
(3, '0003', 'Vicky', 'L', 'Ngimbang', '1998-04-03', 'vicky@gmail.com', 'Jl. Ngawi Timur No.23', 3),
(4, '0004', 'Meii', 'P', 'Malang', '2000-07-27', 'meii@gmail.com', 'Jl. Ngaglik Timur No.22', 4),
(7, '0005', 'Gilang', 'L', 'Borneo', '2002-01-09', 'gilang@gmail.com', 'Jl. Suka Madu No.12', 2),
(8, '0006', 'Made in Jahe', 'L', 'Bali', '1999-06-19', 'kangjahe@gmail.com', 'Jl. Jahe Merah No.9', 1),
(9, '0007', 'Kovi', 'L', 'Medan', '1998-12-29', 'kovi@gmail.com', 'Jl. Kopi Luwak No.65', 4),
(10, '0008', 'Gita', 'P', 'Gresik', '2001-10-03', 'gita@gmail.com', 'Jl. Jus Mangga No.5', 3),
(11, '0009', 'Mitai', 'P', 'Solo', '2000-02-18', 'mitai@gmail.com', 'Jl. Violet No.5', 3),
(12, '0010', 'Dio', 'L', 'Makassar', '2003-05-12', 'dio@gmail.com', 'Jl. Matahari Timur No.71', 2),
(14, '0011', 'Slamet', 'L', 'Surabaya', '2001-11-14', 'slamet@gmail.com', 'Jl. Merbabu Selatan No.44', 2),
(16, 'LoremIpsum', 'Ubah LoremIpsum', 'L', 'LoremIpsum', '2000-01-05', 'LoremIpsum@gmail.com', 'Jl. LoremIpsum', 4);

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id` int(11) NOT NULL,
  `nokuitansi` varchar(10) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `jumlah` double DEFAULT NULL,
  `ke` int(11) DEFAULT NULL,
  `status_pembayaran` varchar(25) DEFAULT NULL,
  `pesanan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id`, `nokuitansi`, `tanggal`, `jumlah`, `ke`, `status_pembayaran`, `pesanan_id`) VALUES
(1, 'QWE112', '2022-05-14', 330000, 1, NULL, 1),
(2, 'QWE113', '2022-05-14', 670000, 2, NULL, 2),
(3, 'QWE114', '2022-05-14', 510000, 3, NULL, 3),
(4, 'QWE115', '2022-05-14', 500000, 4, NULL, 4),
(5, 'QWE116', '2022-05-14', 430000, 5, NULL, 5),
(6, 'QWE117', '2022-05-14', 680000, 6, NULL, 6),
(7, 'QWE118', '2022-05-14', 1530000, 7, NULL, 7),
(13, 'QWE127', '2022-01-14', 530000, 1, NULL, 8),
(14, 'QWE128', '2022-01-14', 270000, 2, NULL, 9),
(15, 'QWE129', '2022-01-14', 710000, 3, NULL, 10),
(16, 'QWE130', '2022-02-14', 900000, 4, NULL, 11),
(17, 'QWE131', '2022-02-14', 1130000, 5, NULL, 12);

--
-- Triggers `pembayaran`
--
DELIMITER $$
CREATE TRIGGER `onPayOrder` BEFORE INSERT ON `pembayaran` FOR EACH ROW BEGIN
UPDATE pembayaran SET status_pembayaran = 'Lunas' WHERE id = NEW.pesanan_id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(45) DEFAULT NULL,
  `nomor` varchar(10) DEFAULT NULL,
  `produk_id` int(11) NOT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `harga` double DEFAULT NULL,
  `vendor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `total` double DEFAULT NULL,
  `pelanggan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id`, `tanggal`, `total`, `pelanggan_id`) VALUES
(1, '2022-05-14', 330000, 3),
(2, '2022-05-14', 670000, 1),
(3, '2022-05-14', 510000, 1),
(4, '2022-05-14', 500000, 2),
(5, '2022-05-14', 430000, 5),
(6, '2022-05-14', 680000, 6),
(7, '2022-05-14', 1530000, 9),
(8, '2022-01-14', 530000, 3),
(9, '2022-01-14', 270000, 1),
(10, '2022-01-14', 710000, 1),
(11, '2022-02-14', 900000, 2),
(12, '2022-02-14', 1130000, 5),
(13, '2022-02-14', 610000, 6),
(14, '2022-02-14', 530000, 9),
(15, '2023-03-14', 300000, 4),
(16, '2023-03-14', 4000000, 3);

-- --------------------------------------------------------

--
-- Table structure for table `pesanan_items`
--

CREATE TABLE `pesanan_items` (
  `id` int(11) NOT NULL,
  `produk_id` int(11) NOT NULL,
  `pesanan_id` int(11) NOT NULL,
  `qty` int(11) DEFAULT NULL,
  `harga` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pesanan_items`
--

INSERT INTO `pesanan_items` (`id`, `produk_id`, `pesanan_id`, `qty`, `harga`) VALUES
(1, 1, 1, 5, 330000),
(2, 2, 2, 2, 670000),
(3, 4, 3, 5, 510000),
(4, 5, 4, 8, 510000),
(5, 6, 5, 3, 430000),
(6, 8, 6, 8, 680000),
(7, 2, 7, 7, 1530000);

-- --------------------------------------------------------

--
-- Stand-in structure for view `pesanan_produk_vw`
-- (See below for the actual view)
--
CREATE TABLE `pesanan_produk_vw` (
`id` int(11)
,`nama_pelanggan` varchar(50)
,`jenis_produk_id` int(11)
,`nama_produk` varchar(45)
,`harga_beli` double
);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `kode` varchar(10) DEFAULT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `harga_beli` double DEFAULT 0,
  `harga_jual` double DEFAULT 0,
  `stok` int(11) DEFAULT NULL,
  `min_stok` int(11) DEFAULT NULL,
  `jenis_produk_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `kode`, `nama`, `harga_beli`, `harga_jual`, `stok`, `min_stok`, `jenis_produk_id`) VALUES
(1, 'E001', 'Monitor 24 Inch', 2200000, 2400000, 30, 3, 1),
(2, 'E002', 'Laptop Lama Ram 2GB', 400000, 600000, 10, 1, 1),
(3, 'E003', 'Keyboard Mechanical', 200000, 240000, 60, 10, 1),
(4, 'F001', 'Meja Belajar Anak', 70000, 95000, 100, 3, 4),
(5, 'F002', 'Kursi Plastik Anak', 50000, 74000, 30, 5, 4),
(6, 'F003', 'Tas', 160000, 200000, 25, 4, 4),
(7, 'MA001', 'Pizza Combo Spesial', 2200000, 2400000, 65, 1, 2),
(8, 'MA002', 'Ayam Bakar Ngimbang', 120000, 135000, 35, 1, 2),
(9, 'MA003', 'Beef Lasagna', 60000, 72000, 90, 2, 2),
(10, 'E004', 'Smartphone Ram 4GB', 1400000, 1550000, 35, 1, 1),
(11, 'F004', 'Kursi Gaming', 3000000, 3400000, 40, 1, 4),
(12, 'E005', 'Smartphone Ram 8GB', 5000000, 5400000, 25, 1, 1),
(15, 'F006', 'Lemari Anak', 300000, 350000, 23, 2, 4),
(16, 'TV013', 'TV MURAH 40 INCH', 550000, 500000, 300, 10, 4),
(17, '', '', 0, 0, 0, 0, 0),
(19, 'kawawd', 'oihwoidh', 214112, 631912, 123, 1, 5),
(20, 'awhdi', 'ioawhd', 3523523, 213131, 433, 12, 6),
(21, 'F007', 'Meja Komputer', 550000, 500000, 80, 12, 4),
(22, 'tfytfy', 'yugawud', 7123, 762138, 2342, 34, 5),
(23, 'ugawuygu', 'gawugd', 7652135, 7216771, 213423, 12, 532),
(24, 'wqe', 'Gimbal', 721361, 7216312, 23423, 2342, 2),
(25, '892732', 'Test Product 1', 500000, 400000, 30, 12, 2);

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `id` int(11) NOT NULL,
  `nomor` varchar(4) DEFAULT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `kota` varchar(30) DEFAULT NULL,
  `kontak` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure for view `pesanan_produk_vw`
--
DROP TABLE IF EXISTS `pesanan_produk_vw`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `pesanan_produk_vw`  AS SELECT `pelanggan`.`id` AS `id`, `pelanggan`.`nama_pelanggan` AS `nama_pelanggan`, `produk`.`jenis_produk_id` AS `jenis_produk_id`, `produk`.`nama` AS `nama_produk`, `produk`.`harga_beli` AS `harga_beli` FROM ((`produk` join `pesanan` on(`produk`.`id` = `pesanan`.`pelanggan_id`)) join `pelanggan` on(`pelanggan`.`id` = `pesanan`.`pelanggan_id`))  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenis_produk`
--
ALTER TABLE `jenis_produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kartu`
--
ALTER TABLE `kartu`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode` (`kode`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode` (`kode`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nokuitansi` (`nokuitansi`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nomor` (`nomor`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanan_items`
--
ALTER TABLE `pesanan_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode` (`kode`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nomor` (`nomor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jenis_produk`
--
ALTER TABLE `jenis_produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kartu`
--
ALTER TABLE `kartu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `pesanan_items`
--
ALTER TABLE `pesanan_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
