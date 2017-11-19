-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2017 at 09:43 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `penjualan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(100) NOT NULL,
  `password` varchar(10) NOT NULL,
  PRIMARY KEY (`username`)
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

CREATE TABLE IF NOT EXISTS `beli` (
  `id_beli` int(11) NOT NULL AUTO_INCREMENT,
  `nama_member` varchar(100) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `jumlah_beli` int(50) NOT NULL,
  PRIMARY KEY (`id_beli`),
  KEY `nama_member` (`nama_member`,`nama_barang`),
  KEY `nama_barang` (`nama_barang`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `beli`
--

INSERT INTO `beli` (`id_beli`, `nama_member`, `nama_barang`, `jumlah_beli`) VALUES
(9, 'isti', 'sunlight', 3);

--
-- Triggers `beli`
--
DROP TRIGGER IF EXISTS `pembelian`;
DELIMITER //
CREATE TRIGGER `pembelian` AFTER INSERT ON `beli`
 FOR EACH ROW begin
insert into databarang set
databarang.nama_barang=new.nama_barang
on duplicate key
update
databarang.stok_barang=databarang.stok_barang-new.jumlah_beli;
end
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `databarang`
--

CREATE TABLE IF NOT EXISTS `databarang` (
  `nama_barang` varchar(100) NOT NULL,
  `harga_barang` int(50) NOT NULL,
  `stok_barang` int(50) NOT NULL,
  PRIMARY KEY (`nama_barang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `databarang`
--

INSERT INTO `databarang` (`nama_barang`, `harga_barang`, `stok_barang`) VALUES
('Permen', 500, 107),
('sunlight', 7000, 15);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `id_member` int(11) NOT NULL AUTO_INCREMENT,
  `nama_member` varchar(100) NOT NULL,
  `password_member` varchar(10) NOT NULL,
  `alamat_member` varchar(100) NOT NULL,
  `notelp_member` int(11) NOT NULL,
  PRIMARY KEY (`nama_member`),
  UNIQUE KEY `id_member` (`id_member`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `nama_member`, `password_member`, `alamat_member`, `notelp_member`) VALUES
(2, 'azhar', 'azhar', 'jln patin', 2147483647),
(1, 'isti', 'istii', 'JLn. USA', 832424244);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE IF NOT EXISTS `supplier` (
  `nama_supplier` varchar(100) NOT NULL,
  `alamat_supplier` varchar(100) NOT NULL,
  `notelp_supplier` int(12) NOT NULL,
  PRIMARY KEY (`nama_supplier`)
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

CREATE TABLE IF NOT EXISTS `supply` (
  `id_supply` int(11) NOT NULL AUTO_INCREMENT,
  `nama_supplier` varchar(100) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `stok_barang` int(50) NOT NULL,
  PRIMARY KEY (`id_supply`),
  KEY `nama_supplier` (`nama_supplier`,`nama_barang`),
  KEY `nama_barang` (`nama_barang`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `supply`
--

INSERT INTO `supply` (`id_supply`, `nama_supplier`, `nama_barang`, `stok_barang`) VALUES
(4, 'paijo', 'permen', 7),
(7, 'santi', 'sunlight', 3);

--
-- Triggers `supply`
--
DROP TRIGGER IF EXISTS `stoksupplier`;
DELIMITER //
CREATE TRIGGER `stoksupplier` AFTER INSERT ON `supply`
 FOR EACH ROW begin
insert into databarang set
databarang.nama_barang=new.nama_barang
on duplicate key
update
databarang.stok_barang=databarang.stok_barang+new.stok_barang;
end
//
DELIMITER ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `beli`
--
ALTER TABLE `beli`
  ADD CONSTRAINT `beli_ibfk_2` FOREIGN KEY (`nama_member`) REFERENCES `member` (`nama_member`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `beli_ibfk_1` FOREIGN KEY (`nama_barang`) REFERENCES `databarang` (`nama_barang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `supply`
--
ALTER TABLE `supply`
  ADD CONSTRAINT `supply_ibfk_2` FOREIGN KEY (`nama_barang`) REFERENCES `databarang` (`nama_barang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `supply_ibfk_1` FOREIGN KEY (`nama_supplier`) REFERENCES `supplier` (`nama_supplier`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
