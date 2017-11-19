-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 19, 2017 at 08:10 PM
-- Server version: 10.0.31-MariaDB-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shortenu_coba`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(100) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `beli`
--

CREATE TABLE `beli` (
  `id_beli` int(11) NOT NULL,
  `nama_member` varchar(100) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `jumlah_beli` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `beli`
--

INSERT INTO `beli` (`id_beli`, `nama_member`, `nama_barang`, `jumlah_beli`) VALUES
(15, 'isti', 'permen', 3);

--
-- Triggers `beli`
--
DELIMITER $$
CREATE TRIGGER `pembelian` AFTER INSERT ON `beli` FOR EACH ROW begin
insert into databarang set
databarang.nama_barang=new.nama_barang
on duplicate key
update
databarang.stok_barang=databarang.stok_barang-new.jumlah_beli;
end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `databarang`
--

CREATE TABLE `databarang` (
  `nama_barang` varchar(100) NOT NULL,
  `harga_barang` int(50) NOT NULL,
  `stok_barang` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `databarang`
--

INSERT INTO `databarang` (`nama_barang`, `harga_barang`, `stok_barang`) VALUES
('kuaci', 1000, 50),
('Permen', 500, 84),
('sunlight', 7000, 27);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_member` int(11) NOT NULL,
  `nama_member` varchar(100) NOT NULL,
  `password_member` varchar(10) NOT NULL,
  `alamat_member` varchar(100) NOT NULL,
  `notelp_member` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `nama_member`, `password_member`, `alamat_member`, `notelp_member`) VALUES
(9, 'azhar', 'azhar', 'azhar', 34343),
(8, 'fanny', 'fanny', 'jln bathin', 2147483647),
(6, 'ismail', 'ismail', 'jln batin', 14324343),
(1, 'isti', 'istii', 'JLn. USA', 832424244),
(5, 'istiii', '18', 'Jln.USA', 2147483647),
(7, 'ulfa', 'ulfa', 'jln budisari', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `nama_supplier` varchar(100) NOT NULL,
  `alamat_supplier` varchar(100) NOT NULL,
  `notelp_supplier` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`nama_supplier`, `alamat_supplier`, `notelp_supplier`) VALUES
('paijo', 'jln. us', 1111111),
('santi', 'jln usa', 35242545);

-- --------------------------------------------------------

--
-- Table structure for table `supply`
--

CREATE TABLE `supply` (
  `id_supply` int(11) NOT NULL,
  `nama_supplier` varchar(100) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `stok_barang` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supply`
--

INSERT INTO `supply` (`id_supply`, `nama_supplier`, `nama_barang`, `stok_barang`) VALUES
(4, 'paijo', 'permen', 7),
(7, 'santi', 'sunlight', 3);

--
-- Triggers `supply`
--
DELIMITER $$
CREATE TRIGGER `stoksupplier` AFTER INSERT ON `supply` FOR EACH ROW begin
insert into databarang set
databarang.nama_barang=new.nama_barang
on duplicate key
update
databarang.stok_barang=databarang.stok_barang+new.stok_barang;
end
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `beli`
--
ALTER TABLE `beli`
  ADD PRIMARY KEY (`id_beli`),
  ADD KEY `nama_member` (`nama_member`,`nama_barang`),
  ADD KEY `nama_barang` (`nama_barang`);

--
-- Indexes for table `databarang`
--
ALTER TABLE `databarang`
  ADD PRIMARY KEY (`nama_barang`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`nama_member`),
  ADD UNIQUE KEY `id_member` (`id_member`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`nama_supplier`);

--
-- Indexes for table `supply`
--
ALTER TABLE `supply`
  ADD PRIMARY KEY (`id_supply`),
  ADD KEY `nama_supplier` (`nama_supplier`,`nama_barang`),
  ADD KEY `nama_barang` (`nama_barang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beli`
--
ALTER TABLE `beli`
  MODIFY `id_beli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `supply`
--
ALTER TABLE `supply`
  MODIFY `id_supply` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `beli`
--
ALTER TABLE `beli`
  ADD CONSTRAINT `beli_ibfk_1` FOREIGN KEY (`nama_barang`) REFERENCES `databarang` (`nama_barang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `beli_ibfk_2` FOREIGN KEY (`nama_member`) REFERENCES `member` (`nama_member`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `supply`
--
ALTER TABLE `supply`
  ADD CONSTRAINT `supply_ibfk_1` FOREIGN KEY (`nama_supplier`) REFERENCES `supplier` (`nama_supplier`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `supply_ibfk_2` FOREIGN KEY (`nama_barang`) REFERENCES `databarang` (`nama_barang`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
