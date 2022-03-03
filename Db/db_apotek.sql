-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2018 at 10:21 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_apotek`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_apotek`
--

CREATE TABLE `data_apotek` (
  `title` varchar(100) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `telp` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_apotek`
--

INSERT INTO `data_apotek` (`title`, `nama`, `alamat`, `telp`) VALUES
('Apoek ABC', 'Apotek XXX', 'Jln. Soekarno Hatta No. 19', '082386440998');

-- --------------------------------------------------------

--
-- Table structure for table `db_user`
--

CREATE TABLE `db_user` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `akses` enum('Adminstrator','Dokter','Apoteker') DEFAULT NULL,
  `tempat_lahir` varchar(100) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jk` enum('Laki - Laki','Perempuan') DEFAULT NULL,
  `domisili` varchar(100) DEFAULT NULL,
  `telp` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `alamat` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_user`
--

INSERT INTO `db_user` (`username`, `password`, `nama`, `akses`, `tempat_lahir`, `tgl_lahir`, `jk`, `domisili`, `telp`, `email`, `alamat`) VALUES
('a', 'a', 'a', 'Apoteker', 'tembilahan', '1984-04-13', 'Laki - Laki', 'oiuio', 'oiuiouio', 'iou', 'ouiouoi'),
('aziezgt', '1234', 'muhammad', 'Adminstrator', 'tembilahan', '1996-09-11', 'Perempuan', 'Pekanbaru12', '09873214', 'aziezgt@gmail.com', 'ini alamat'),
('dokter', 'a', 'aziezgt', 'Dokter', 'kij', '1985-02-18', 'Laki - Laki', 'ooo', '980', '898908', '09890');

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

CREATE TABLE `detail` (
  `id` varchar(20) DEFAULT NULL,
  `kode_obat` int(11) DEFAULT NULL,
  `harga` double DEFAULT NULL,
  `diskon` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `subtotal` double DEFAULT NULL,
  `pot` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail`
--

INSERT INTO `detail` (`id`, `kode_obat`, `harga`, `diskon`, `qty`, `subtotal`, `pot`) VALUES
('Trx0000001', 6, 20000, 10, 3, 54000, 6000),
('Trx0000001', 5, 15000, 50, 3, 22500, 22500),
('Trx0000002', 5, 15000, 0, 1, 15000, 0),
('Trx0000003', 5, 15000, 0, 50, 750000, 0),
('Trx0000008', 5, 15000, 0, 6, 90000, 0),
('Trx0000010', 5, 15000, 0, 10, 150000, 0),
('Trx0000011', 5, 15000, 0, 10, 150000, 0),
('Trx0000011', 6, 20000, 0, 2, 40000, 0),
('Trx0000012', 5, 15000, 0, 10, 150000, 0),
('Trx0000012', 6, 20000, 0, 11, 220000, 0);

-- --------------------------------------------------------

--
-- Stand-in structure for view `grafik`
-- (See below for the actual view)
--
CREATE TABLE `grafik` (
`bulan` int(2)
,`kodeob` int(11)
,`namaob` varchar(100)
,`jumlah_jual` decimal(32,0)
);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `kode` int(11) NOT NULL,
  `nama` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kode`, `nama`) VALUES
(14, 'asi'),
(16, 'harfi'),
(17, 'obat cair');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id` varchar(20) NOT NULL,
  `customer` varchar(100) DEFAULT NULL,
  `tgl` date DEFAULT NULL,
  `total_harga` double DEFAULT NULL,
  `total_bayar` double DEFAULT NULL,
  `kembali` double DEFAULT NULL,
  `diskon` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`id`, `customer`, `tgl`, `total_harga`, `total_bayar`, `kembali`, `diskon`) VALUES
('Trx0000001', 'umum', '2018-10-03', 800000, 76500, 0, 28500),
('Trx0000002', 'eeek', '2018-10-03', 15000, 20000, 5000, 0),
('Trx0000003', 'hermanto', '2018-10-03', 1000000, 800000, 50000, 0),
('Trx0000004', 'hermanto', '2018-11-01', 16000000, 800000, 800000, 0),
('Trx0000005', '', '2018-10-03', 0, 0, 0, 0),
('Trx0000006', 'hermanto', '2018-10-03', 0, 800000, 800000, 0),
('Trx0000007', '', '2018-10-03', 0, 0, 0, 0),
('Trx0000008', 'umum', '2018-10-03', 90000, 10000, -80000, 0),
('Trx0000009', '', '2018-10-03', 0, 0, 0, 0),
('Trx0000010', 'umum', '2018-10-03', 150000, 200000, 50000, 0),
('Trx0000011', 'pop', '2018-10-08', 190000, 200000, 10000, 0),
('Trx0000012', 'umum', '2018-10-08', 370000, 400000, 30000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `satuan`
--

CREATE TABLE `satuan` (
  `kode` int(11) NOT NULL,
  `nama` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `satuan`
--

INSERT INTO `satuan` (`kode`, `nama`) VALUES
(8, 'Legend'),
(9, 'bang bang');

-- --------------------------------------------------------

--
-- Stand-in structure for view `statis_lap`
-- (See below for the actual view)
--
CREATE TABLE `statis_lap` (
`kode` int(11)
,`nama` varchar(100)
,`tgl` date
,`total_terjual` bigint(21)
,`jumlah` decimal(32,0)
);

-- --------------------------------------------------------

--
-- Table structure for table `suplier`
--

CREATE TABLE `suplier` (
  `kode` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `kota` varchar(100) DEFAULT NULL,
  `telp` varchar(20) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `alamat` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suplier`
--

INSERT INTO `suplier` (`kode`, `nama`, `kota`, `telp`, `email`, `alamat`) VALUES
(2, 'PT SEHAT INDO', 'PEKANBARU', '09873214', 'aziezgt@gmail.com', 'Pekanararar');

-- --------------------------------------------------------

--
-- Table structure for table `tb_obat`
--

CREATE TABLE `tb_obat` (
  `kode` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `suplierid` varchar(100) DEFAULT NULL,
  `kategori` varchar(100) DEFAULT NULL,
  `satuan` varchar(100) DEFAULT NULL,
  `beli` double DEFAULT NULL,
  `jual` double DEFAULT NULL,
  `expired` date DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_obat`
--

INSERT INTO `tb_obat` (`kode`, `nama`, `suplierid`, `kategori`, `satuan`, `beli`, `jual`, `expired`, `stok`, `status`) VALUES
(5, 'Paramex', 'a', 'Obat Keras', 'aS', 10000, 15000, '2018-08-06', 65, NULL),
(6, 'Konidin77', 'Konimex', 'Obat Keras', 'mm', 12000, 20000, '2018-10-18', 889, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `temp`
--

CREATE TABLE `temp` (
  `id` varchar(20) DEFAULT NULL,
  `kode_obat` int(11) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `harga` double DEFAULT NULL,
  `diskon` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `subtotal` double DEFAULT NULL,
  `pot` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `up_stok`
--

CREATE TABLE `up_stok` (
  `kode_obat` int(11) DEFAULT NULL,
  `tgl_update` date DEFAULT NULL,
  `ket` varchar(100) DEFAULT NULL,
  `masuk` int(11) DEFAULT NULL,
  `keluar` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure for view `grafik`
--
DROP TABLE IF EXISTS `grafik`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `grafik`  AS  select month(`penjualan`.`tgl`) AS `bulan`,`tb_obat`.`kode` AS `kodeob`,`tb_obat`.`nama` AS `namaob`,sum(`detail`.`qty`) AS `jumlah_jual` from ((`penjualan` join `detail`) join `tb_obat`) where ((`penjualan`.`id` = `detail`.`id`) and (`tb_obat`.`kode` = `detail`.`kode_obat`) and (month(`penjualan`.`tgl`) = month(now()))) group by `detail`.`kode_obat` ;

-- --------------------------------------------------------

--
-- Structure for view `statis_lap`
--
DROP TABLE IF EXISTS `statis_lap`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `statis_lap`  AS  select `tb_obat`.`kode` AS `kode`,`tb_obat`.`nama` AS `nama`,`penjualan`.`tgl` AS `tgl`,count(`tb_obat`.`kode`) AS `total_terjual`,sum(`detail`.`qty`) AS `jumlah` from ((`tb_obat` join `detail`) join `penjualan`) where ((`tb_obat`.`kode` = `detail`.`kode_obat`) and (`detail`.`id` = `penjualan`.`id`)) group by `tb_obat`.`nama` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_user`
--
ALTER TABLE `db_user`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `detail`
--
ALTER TABLE `detail`
  ADD KEY `kode_obat` (`kode_obat`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `satuan`
--
ALTER TABLE `satuan`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `suplier`
--
ALTER TABLE `suplier`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `tb_obat`
--
ALTER TABLE `tb_obat`
  ADD PRIMARY KEY (`kode`),
  ADD KEY `suplierid` (`suplierid`);

--
-- Indexes for table `temp`
--
ALTER TABLE `temp`
  ADD KEY `kode_obat` (`kode_obat`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `up_stok`
--
ALTER TABLE `up_stok`
  ADD KEY `kode_obat` (`kode_obat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `satuan`
--
ALTER TABLE `satuan`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `suplier`
--
ALTER TABLE `suplier`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_obat`
--
ALTER TABLE `tb_obat`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail`
--
ALTER TABLE `detail`
  ADD CONSTRAINT `detail_ibfk_1` FOREIGN KEY (`kode_obat`) REFERENCES `tb_obat` (`kode`),
  ADD CONSTRAINT `detail_ibfk_2` FOREIGN KEY (`id`) REFERENCES `penjualan` (`id`);

--
-- Constraints for table `up_stok`
--
ALTER TABLE `up_stok`
  ADD CONSTRAINT `up_stok_ibfk_1` FOREIGN KEY (`kode_obat`) REFERENCES `tb_obat` (`kode`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
