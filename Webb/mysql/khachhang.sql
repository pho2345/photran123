-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2019 at 07:33 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webbansach`
--

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `MaKH` varchar(10) NOT NULL,
  `HoTen` varchar(100) NOT NULL,
  `TenDangNhap` varchar(100) NOT NULL,
  `MatKhau` varchar(100) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `SĐT` varchar(20) NOT NULL,
  `TrangThai` varchar(5) NOT NULL,
  `MaQuyen` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`MaKH`, `HoTen`, `TenDangNhap`, `MatKhau`, `Email`, `SĐT`, `TrangThai`, `MaQuyen`) VALUES
('KH0', 'Lê Lai', 'lelai2010', 'lai123456', 'lelai2010@gmail.com', '0909123456', '0', '0'),
('KH1', 'Hoàng Minh', 'minhcute123456', '123456789', 'minhhoang@gmail.com', '0965456789', '0', '0'),
('KH10', 'Đoàn Nhật Minh', 'MinhL1', 'minh123456', 'minhdoan@gmail.com', '0909356118', '0', '0'),
('KH11', 'Cao Quốc Đạt', 'datcao', '147777999', 'caodat@gmail.com', '0909789123', '0', '0'),
('KH12', 'Nguyễn Khanh ', 'khanhkhanh', 'khanh123456', 'khanhnguyen@gmail.com', '0122892010', '0', '0'),
('KH13', 'Nguyễn Nguyên Bình', 'binhgold', '123456', 'binhnguyen@gmail.com', '0123456789', '0', '0'),
('KH14', 'Nguyễn Thúy Quỳnh', 'datcao33', 'quynh123456', 'quynhthuy@gmail.com', '0909111122', '0', '0'),
('KH15', 'Nguyễn Nhân', 'nhando123', 'nhan1456', 'nhandinh@gmail.com', '0111234555', '0', '0'),
('KH2', 'Hoàng Hiệp', 'hieppro123654', 'hiep1234', 'hiephhh999@gmail.com', '0978888233', '0', '0'),
('KH3', 'Đỗ Quang Hải', 'haiquang123456', 'haihai123456', 'doquanghai@gmail.com', '0123333456', '0', '0'),
('KH4', 'Bùi Tiến Dũng', 'dungtien456', '147852369', 'buitiendung@gmail.com', '0995644332', '0', '0'),
('KH5', 'Trần Nguyên Chương', 'chuongbolao123456', '123456', 'chuongtran@gmail.com', '0112454323', '0', '0'),
('KH6', 'Vũ Quang Huy', 'huyhuy1111', 'QuangHUy123456', 'vuhuy@gmail.com', '0244565333', '0', '0'),
('KH7', 'Đỗ Hữu Phước', 'phuocbolao123456', 'pbl1999', 'dohuuphuoc@gmail.com', '0998566472', '0', '0'),
('KH8', 'Cù Anh Đức', 'ducanh123', 'duccop123456', 'cuanhduc@gmail.com', '0355674832', '0', '0'),
('KH9', 'Hoàng Nhung', 'nhunghoang123456', 'HoangNhung123456', 'nhungnun@gmail.com', '0933852813', '0', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MaKH`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
