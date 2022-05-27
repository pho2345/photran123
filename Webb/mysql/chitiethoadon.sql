-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 26, 2019 lúc 10:23 AM
-- Phiên bản máy phục vụ: 10.1.38-MariaDB
-- Phiên bản PHP: 7.2.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webbansach`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `MaHD` varchar(10) NOT NULL,
  `MaSach` varchar(10) NOT NULL,
  `SoLuong` int(20) NOT NULL,
  `TongTienCT` int(20) NOT NULL,
  `NgayGiaoHang` varchar(100) NOT NULL,
  `TinhTrangCT` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`MaHD`, `MaSach`, `SoLuong`, `TongTienCT`, `NgayGiaoHang`, `TinhTrangCT`) VALUES
('HD0', 'KNS0', 1, 169150, '15/2/2017', 'Hàng đang nhập từ kho'),
('HD0', 'KT5', 1, 159200, '16/2/2017', 'Hàng đang nhập từ kho'),
('HD0', 'TN4', 1, 127500, '17/2/2017', 'Hàng đang nhập từ kho'),
('HD0', 'TT0', 1, 74800, '15/2/2017', 'Hàng đang nhập từ kho'),
('HD1', 'CN1', 1, 68000, '14/02/2019', 'Đã giao hàng'),
('HD1', 'CN11', 1, 94400, '14/02/2019', 'Đã giao hàng'),
('HD1', 'TN1', 1, 78000, '15/2/2019', 'Đã giao hàng'),
('HD2', 'KT0', 1, 84150, '08/01/2018', 'Đã giao hàng'),
('HD2', 'TN2', 1, 123250, '08/01/2018', 'Đã giao hàng'),
('HD3', 'LS0', 1, 160000, '29/4/2019', 'Hàng đang nhập từ kho'),
('HD3', 'LS4', 1, 151200, '29/4/2019', 'Hàng đang nhập từ kho'),
('HD4', 'NN0', 1, 74700, '30/4/2019', 'Hàng đang nhập từ kho'),
('HD4', 'TT10', 1, 56700, '30/4/2019', 'Hàng đang nhập từ kho'),
('HD4', 'VH10', 1, 148000, '30/4/2019', 'Hàng đang nhập từ kho'),
('HD4', 'VH3', 1, 67500, '30/4/2019', 'Hàng đang nhập từ kho'),
('HD4', 'VH5', 1, 76000, '30/4/2019', 'Hàng đang nhập từ kho');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
