-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2016 at 12:04 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doan_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `nn_chungloai`
--

CREATE TABLE `nn_chungloai` (
  `idCL` int(255) NOT NULL,
  `TenCL` varchar(255) NOT NULL,
  `ThuTu` int(4) NOT NULL,
  `AnHien` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nn_chungloai`
--

INSERT INTO `nn_chungloai` (`idCL`, `TenCL`, `ThuTu`, `AnHien`) VALUES
(1, 'Gấu bông', 1, 1),
(2, 'Móc khóa', 2, 1),
(3, 'Đồ chơi', 3, 1),
(4, 'Quà lưu niệm', 4, 1),
(5, 'Thời trang', 5, 1),
(6, 'Trang sức', 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `nn_donhang`
--

CREATE TABLE `nn_donhang` (
  `idDH` int(255) NOT NULL,
  `idNguoiDung` int(255) NOT NULL,
  `ThoiGianDat` datetime NOT NULL,
  `TenNguoiNhan` varchar(100) NOT NULL,
  `DiaDiemGiao` varchar(500) NOT NULL,
  `NgayGiaoHang` datetime NOT NULL,
  `Email` varchar(255) NOT NULL,
  `DienThoai` varchar(100) NOT NULL,
  `GhiChu` varchar(500) DEFAULT NULL,
  `TinhTrang` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nn_donhang`
--

INSERT INTO `nn_donhang` (`idDH`, `idNguoiDung`, `ThoiGianDat`, `TenNguoiNhan`, `DiaDiemGiao`, `NgayGiaoHang`, `Email`, `DienThoai`, `GhiChu`, `TinhTrang`) VALUES
(7, 106, '2013-03-06 20:48:42', 'Teo', '', '2013-03-07 00:00:00', 'abc@abc.abc', '0901234567', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `nn_donhangchitiet`
--

CREATE TABLE `nn_donhangchitiet` (
  `idDH` int(255) NOT NULL,
  `idSP` int(255) NOT NULL,
  `SoLuong` int(255) NOT NULL,
  `Gia` decimal(15,4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nn_donhangchitiet`
--

INSERT INTO `nn_donhangchitiet` (`idDH`, `idSP`, `SoLuong`, `Gia`) VALUES
(5, 382, 10, '13199000.0000'),
(5, 371, 1, '14799000.0000');

-- --------------------------------------------------------

--
-- Table structure for table `nn_loaisp`
--

CREATE TABLE `nn_loaisp` (
  `idLoai` int(255) NOT NULL,
  `idCL` int(255) NOT NULL,
  `TenLoai` varchar(255) NOT NULL,
  `ThuTu` int(4) NOT NULL,
  `AnHien` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nn_loaisp`
--

INSERT INTO `nn_loaisp` (`idLoai`, `idCL`, `TenLoai`, `ThuTu`, `AnHien`) VALUES
(1, 1, 'Gấu bông xinh', 1, 1),
(3, 1, 'Gấu hoạt hình', 1, 1),
(5, 1, 'Gấu bông ghi âm', 1, 1),
(7, 2, 'Móc khóa inox', 1, 1),
(9, 2, 'Móc khóa đôi', 1, 1),
(10, 2, 'Móc khóa vải', 1, 1),
(11, 3, 'Siêu nhân', 1, 1),
(12, 3, 'Xe điều khiển', 1, 1),
(13, 3, 'Xe mô hình', 1, 1),
(14, 3, 'Búp bê', 1, 1),
(15, 3, 'Đồ hàng', 1, 1),
(16, 3, 'Đồ chơi mô hình', 1, 1),
(17, 4, 'Tượng', 1, 1),
(18, 4, 'Bình hoa', 1, 1),
(19, 4, 'Hộp nhạc', 1, 1),
(20, 4, 'Khung hình', 1, 1),
(21, 4, 'Hũ sao', 1, 1),
(22, 4, 'Handmade', 1, 1),
(23, 5, 'Áo đôi', 1, 1),
(24, 5, 'Áo team', 1, 1),
(25, 5, 'Thắt lưng', 1, 1),
(26, 5, 'Bóp da', 1, 1),
(27, 6, 'Dây chuyền', 1, 1),
(28, 6, 'Lắc tay', 1, 1),
(29, 6, 'Nhẫn', 1, 1),
(30, 6, 'Bông tai', 1, 1),
(31, 6, 'Đồng hồ', 1, 1),
(87, 28, 'Sang1', 2, 0),
(85, 28, 'sang1', 1, 1),
(88, 28, 'aaaa', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `nn_luachon`
--

CREATE TABLE `nn_luachon` (
  `id` int(11) NOT NULL,
  `id_poll` int(11) NOT NULL,
  `content` varchar(500) NOT NULL,
  `n_order` int(11) NOT NULL,
  `vote` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nn_luachon`
--

INSERT INTO `nn_luachon` (`id`, `id_poll`, `content`, `n_order`, `vote`) VALUES
(1, 1, 'Nokia', 1, 8),
(2, 1, 'SamSung', 2, 3),
(3, 1, 'LG', 3, 3),
(4, 1, 'IPhone', 4, 2),
(5, 2, 'Đẹp', 1, 13),
(6, 2, 'Bình thường', 2, 4),
(7, 2, 'Không đẹp lắm', 3, 1),
(8, 2, 'Xấu', 4, 7);

-- --------------------------------------------------------

--
-- Table structure for table `nn_nguoidung`
--

CREATE TABLE `nn_nguoidung` (
  `idNguoiDung` int(255) NOT NULL,
  `MatKhau` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `HoTen` varchar(100) NOT NULL,
  `DienThoai` varchar(100) NOT NULL,
  `DiaChi` varchar(500) NOT NULL,
  `NgaySinh` date NOT NULL,
  `GioiTinh` tinyint(4) NOT NULL,
  `NgayDangKy` date NOT NULL,
  `idNhom` int(10) NOT NULL,
  `KichHoat` tinyint(4) NOT NULL,
  `MaNgauNhien` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nn_nguoidung`
--

INSERT INTO `nn_nguoidung` (`idNguoiDung`, `MatKhau`, `Email`, `HoTen`, `DienThoai`, `DiaChi`, `NgaySinh`, `GioiTinh`, `NgayDangKy`, `idNhom`, `KichHoat`, `MaNgauNhien`) VALUES
(1, '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'sangnt1905@gmail.com', 'Nguyễn Thanh Sang', '0963226785', 'TP. Hồ Chí Minh', '1994-04-10', 1, '0000-00-00', 0, 1, ''),
(2, '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'user@gmail.com', 'Nguyễn Ngọc Tũn', '0963226785', 'Bình Dương', '1995-05-19', 0, '0000-00-00', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `nn_quangcao`
--

CREATE TABLE `nn_quangcao` (
  `idQC` int(255) NOT NULL,
  `MoTa` varchar(255) NOT NULL,
  `UrlQC` varchar(400) NOT NULL,
  `UrlHinh` varchar(400) NOT NULL,
  `ViTri` varchar(30) NOT NULL,
  `idMenu` int(255) NOT NULL,
  `SoLanBam` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nn_quangcao`
--

INSERT INTO `nn_quangcao` (`idQC`, `MoTa`, `UrlQC`, `UrlHinh`, `ViTri`, `idMenu`, `SoLanBam`) VALUES
(1, '', '', '1.gif', '', 0, 0),
(2, '', '', '2.jpg', '', 0, 0),
(3, '', '', '3.swf', '', 0, 0),
(4, '', '', '4.swf', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `nn_quantri`
--

CREATE TABLE `nn_quantri` (
  `idNguoiDung` int(255) NOT NULL,
  `MatKhau` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `HoTen` varchar(100) NOT NULL,
  `idNhom` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nn_quantri`
--

INSERT INTO `nn_quantri` (`idNguoiDung`, `MatKhau`, `Email`, `HoTen`, `idNhom`) VALUES
(100, '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'admin@gmail.com', 'Lê Văn Test', 0);

-- --------------------------------------------------------

--
-- Table structure for table `nn_sanpham`
--

CREATE TABLE `nn_sanpham` (
  `idSP` int(255) NOT NULL,
  `idLoai` int(255) NOT NULL,
  `idSukien` int(255) NOT NULL,
  `TenSP` varchar(255) NOT NULL,
  `Gia` decimal(15,0) NOT NULL,
  `MoTa` text,
  `ChiTiet` text,
  `UrlHinh` varchar(255) NOT NULL,
  `NgayDang` varchar(255) NOT NULL,
  `TonKho` int(255) NOT NULL DEFAULT '0',
  `GhiChu` varchar(500) DEFAULT NULL,
  `SoLanMua` int(255) NOT NULL DEFAULT '0',
  `SoLanXem` int(255) NOT NULL DEFAULT '0',
  `AnHien` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nn_sanpham`
--

INSERT INTO `nn_sanpham` (`idSP`, `idLoai`, `idSukien`, `TenSP`, `Gia`, `MoTa`, `ChiTiet`, `UrlHinh`, `NgayDang`, `TonKho`, `GhiChu`, `SoLanMua`, `SoLanXem`, `AnHien`) VALUES
(1, 1, 1, 'Gấu Bông 1', '11449000', '', NULL, 'gau1.jpg', '0000-00-00', 100, NULL, 0, 18, 1),
(2, 1, 1, 'Gấu Bông 2', '9899000', '', NULL, 'gau2.jpg', '0000-00-00', 100, NULL, 0, 6, 1),
(4, 1, 1, 'Gấu Bông 3', '9799000', '', NULL, 'gau3.jpg', '0000-00-00', 100, NULL, 0, 3, 1),
(5, 1, 1, 'Gấu Bông 4', '9549000', '', NULL, 'gau4.jpg', '0000-00-00', 100, NULL, 0, 0, 1),
(6, 1, 1, 'Gấu Bông 5', '9049000', '', NULL, 'gau5.jpg', '0000-00-00', 100, NULL, 0, 0, 1),
(7, 1, 2, 'Gấu Bông 6', '8679000', '', NULL, 'gau6.jpg', '0000-00-00', 100, NULL, 0, 0, 1),
(8, 1, 2, 'Gấu Bông 7', '7899000', '', NULL, 'gau7.jpg', '0000-00-00', 100, NULL, 0, 0, 1),
(9, 1, 2, 'Gấu Bông 8', '7699000', '', NULL, 'gau8.jpg', '0000-00-00', 100, NULL, 0, 0, 1),
(10, 1, 1, 'Gấu Bông 9', '7699000', '', NULL, 'gau9.jpg', '0000-00-00', 100, NULL, 0, 0, 1),
(11, 1, 1, 'Gấu Bông 10', '7699000', '', NULL, 'gau10.jpg', '0000-00-00', 100, NULL, 0, 0, 1),
(12, 1, 1, 'Gấu Bông 11', '7199000', '', NULL, 'gau11.jpg', '0000-00-00', 100, NULL, 0, 0, 1),
(13, 1, 1, 'Gấu Bông 12', '719900', '', NULL, 'gau12.jpg', '0000-00-00', 100, NULL, 0, 0, 1),
(14, 3, 1, 'Gấu Bông 13', '6379000', '', NULL, 'gau13.jpg', '0000-00-00', 100, NULL, 0, 0, 1),
(15, 3, 1, 'Gấu Bông 14', '6099000', '', NULL, 'gau14.jpg', '0000-00-00', 100, NULL, 0, 0, 1),
(16, 3, 3, 'Gấu Bông 15', '5949000', '', NULL, 'gau15.jpg', '0000-00-00', 100, NULL, 0, 0, 1),
(17, 3, 1, 'Gấu Bông 16', '5899000', '', NULL, 'gau16.jpg', '0000-00-00', 100, NULL, 0, 0, 1),
(18, 3, 3, 'Gấu Bông 17', '5899000', '', NULL, 'gau17.jpg', '0000-00-00', 100, NULL, 0, 0, 1),
(19, 5, 3, 'Gấu Bông 18', '5849000', '', NULL, 'gau18.jpg', '0000-00-00', 100, NULL, 0, 0, 1),
(20, 5, 3, 'Gấu Bông 19', '5459000', '', NULL, 'gau19.jpg', '0000-00-00', 100, NULL, 0, 0, 1),
(21, 5, 3, 'Gấu Bông 20', '5399000', '', NULL, 'gau20.jpg', '0000-00-00', 100, NULL, 0, 0, 1),
(22, 7, 5, 'Móc khóa 1', '5279000', '', NULL, 'inox1.jpg', '0000-00-00', 100, NULL, 0, 0, 1),
(23, 7, 5, 'Móc khóa 2', '5259000', '', NULL, 'inox2.jpg', '0000-00-00', 100, NULL, 0, 0, 1),
(24, 7, 5, 'Móc khóa 3', '5259000', '', NULL, 'inox3.jpg', '0000-00-00', 100, NULL, 0, 0, 1),
(25, 7, 4, 'Móc khóa 4', '5179000', '', NULL, 'inox4.jpg', '0000-00-00', 100, NULL, 0, 0, 1),
(26, 7, 4, 'Móc khóa 5', '4599000', '', NULL, 'inox5.jpg', '0000-00-00', 100, NULL, 0, 0, 1),
(27, 7, 5, 'Móc khóa 6', '4539000', '', NULL, 'inox6.jpg', '0000-00-00', 100, NULL, 0, 0, 1),
(28, 7, 4, 'Móc khóa 7', '4499000', '', NULL, 'inox7.jpg', '0000-00-00', 100, NULL, 0, 0, 1),
(29, 7, 4, 'Móc khóa 8', '4399000', '', NULL, 'inox8.jpg', '0000-00-00', 100, NULL, 0, 0, 1),
(30, 7, 5, 'Móc khóa 9', '3459000', '', NULL, 'inox9.jpg', '0000-00-00', 100, NULL, 0, 0, 1),
(31, 7, 4, 'Móc khóa 10', '3149000', '', NULL, 'inox10.jpg', '0000-00-00', 100, NULL, 0, 0, 1),
(32, 9, 4, 'Móc khóa 11', '3099000', '', NULL, 'moc-xinh1.jpg', '0000-00-00', 100, NULL, 0, 0, 1),
(33, 9, 5, 'Móc khóa 12', '3089000', '', NULL, 'moc-xinh3.jpg', '0000-00-00', 100, NULL, 0, 0, 1),
(34, 10, 5, 'Móc khóa 13', '2979000', '', NULL, 'moc-xinh7.jpg', '0000-00-00', 100, NULL, 0, 0, 1),
(35, 10, 5, 'Móc khóa 14', '2889000', '', NULL, 'moc-xinh4.jpg', '0000-00-00', 100, NULL, 0, 0, 1),
(489, 23, 5, 'Áo đôi 1', '3099000', '', NULL, 'aodoi1.jpg', '0000-00-00', 100, NULL, 0, 0, 1),
(490, 23, 5, 'Áo đôi 2', '3089000', '', NULL, 'aodoi2.jpg', '0000-00-00', 100, NULL, 0, 0, 1),
(491, 23, 5, 'Áo đôi 3', '2979000', '', NULL, 'aodoi3.jpg', '0000-00-00', 100, NULL, 0, 0, 1),
(492, 23, 5, 'Áo đôi 4', '2889000', '', NULL, 'aodoi4.jpg', '0000-00-00', 100, NULL, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `nn_sukien`
--

CREATE TABLE `nn_sukien` (
  `idSukien` int(255) NOT NULL,
  `TieuDe` varchar(255) NOT NULL,
  `ThuTu` int(10) NOT NULL,
  `AnHien` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nn_sukien`
--

INSERT INTO `nn_sukien` (`idSukien`, `TieuDe`, `ThuTu`, `AnHien`) VALUES
(1, 'Noel', 1, 1),
(2, 'Valentina', 2, 1),
(3, 'Birthday', 3, 1),
(5, '8/3', 5, 1),
(4, 'Halloween', 4, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nn_chungloai`
--
ALTER TABLE `nn_chungloai`
  ADD PRIMARY KEY (`idCL`);

--
-- Indexes for table `nn_donhang`
--
ALTER TABLE `nn_donhang`
  ADD PRIMARY KEY (`idDH`);

--
-- Indexes for table `nn_donhangchitiet`
--
ALTER TABLE `nn_donhangchitiet`
  ADD PRIMARY KEY (`idDH`,`idSP`);

--
-- Indexes for table `nn_loaisp`
--
ALTER TABLE `nn_loaisp`
  ADD PRIMARY KEY (`idLoai`);

--
-- Indexes for table `nn_luachon`
--
ALTER TABLE `nn_luachon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nn_nguoidung`
--
ALTER TABLE `nn_nguoidung`
  ADD PRIMARY KEY (`idNguoiDung`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `nn_quangcao`
--
ALTER TABLE `nn_quangcao`
  ADD PRIMARY KEY (`idQC`);

--
-- Indexes for table `nn_quantri`
--
ALTER TABLE `nn_quantri`
  ADD PRIMARY KEY (`idNguoiDung`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `nn_sanpham`
--
ALTER TABLE `nn_sanpham`
  ADD PRIMARY KEY (`idSP`);

--
-- Indexes for table `nn_sukien`
--
ALTER TABLE `nn_sukien`
  ADD PRIMARY KEY (`idSukien`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nn_chungloai`
--
ALTER TABLE `nn_chungloai`
  MODIFY `idCL` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `nn_donhang`
--
ALTER TABLE `nn_donhang`
  MODIFY `idDH` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `nn_loaisp`
--
ALTER TABLE `nn_loaisp`
  MODIFY `idLoai` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
--
-- AUTO_INCREMENT for table `nn_luachon`
--
ALTER TABLE `nn_luachon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `nn_nguoidung`
--
ALTER TABLE `nn_nguoidung`
  MODIFY `idNguoiDung` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;
--
-- AUTO_INCREMENT for table `nn_quangcao`
--
ALTER TABLE `nn_quangcao`
  MODIFY `idQC` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `nn_quantri`
--
ALTER TABLE `nn_quantri`
  MODIFY `idNguoiDung` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;
--
-- AUTO_INCREMENT for table `nn_sanpham`
--
ALTER TABLE `nn_sanpham`
  MODIFY `idSP` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=497;
--
-- AUTO_INCREMENT for table `nn_sukien`
--
ALTER TABLE `nn_sukien`
  MODIFY `idSukien` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
