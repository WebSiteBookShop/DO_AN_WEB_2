-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2022 at 11:05 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopbansach`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `Id` int(11) NOT NULL,
  `HinhAnh` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`Id`, `HinhAnh`) VALUES
(2, 'img/banners/abc2.jpg'),
(3, 'img/banners/abc1.jpg'),
(4, 'img/banners/abc3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `MaHD` int(11) NOT NULL,
  `MaSP` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `DonGia` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`MaHD`, `MaSP`, `SoLuong`, `DonGia`) VALUES
(10, 75, 2, 290000);

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `MaDM` int(11) NOT NULL,
  `TenDM` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`MaDM`, `TenDM`) VALUES
(1, 'VĂN HỌC'),
(2, 'NGHỆ THUẬT'),
(3, 'KHOA HỌC'),
(4, 'SÁCH GIÁO KHOA'),
(5, 'THIẾU NHI'),
(6, 'KĨ NĂNG');

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `MaHD` int(11) NOT NULL,
  `MaND` int(11) NOT NULL,
  `NgayLap` datetime NOT NULL,
  `NguoiNhan` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `SDT` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `DiaChi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `PhuongThucTT` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `TongTien` float NOT NULL,
  `TrangThai` varchar(70) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`MaHD`, `MaND`, `NgayLap`, `NguoiNhan`, `SDT`, `DiaChi`, `PhuongThucTT`, `TongTien`, `TrangThai`) VALUES
(10, 20, '2022-01-02 15:44:20', 'hieu admin', '0987654321', '12 La Văn Hiếu', '', 580000, '1');

-- --------------------------------------------------------

--
-- Table structure for table `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `MaKM` int(11) NOT NULL,
  `TenKM` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `LoaiKM` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `GiaTriKM` float(11,0) NOT NULL,
  `NgayBD` datetime NOT NULL,
  `TrangThai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `khuyenmai`
--

INSERT INTO `khuyenmai` (`MaKM`, `TenKM`, `LoaiKM`, `GiaTriKM`, `NgayBD`, `TrangThai`) VALUES
(1, 'Không khuyến mãi', 'Nothing', 0, '2019-04-08 00:00:00', 1),
(2, 'Giảm giá', 'GiamGia', 500000, '2019-05-01 00:00:00', 1),
(3, 'Giá rẻ online', 'GiaReOnline', 650000, '2019-05-01 00:00:00', 1),
(4, 'Trả góp', 'TraGop', 0, '2019-05-01 00:00:00', 1),
(5, 'Mới ra mắt', 'MoiRaMat', 0, '2019-05-01 00:00:00', 1),
(13, 'Thích thì khuyến mãi', 'Khuyến mãi Ok', 100, '2020-07-18 11:26:06', 1),
(14, '', '', 0, '2020-07-21 10:10:45', 1);

-- --------------------------------------------------------

--
-- Table structure for table `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `MaLSP` int(11) NOT NULL,
  `TenLSP` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `HinhAnh` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Mota` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `MaDM` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `loaisanpham`
--

INSERT INTO `loaisanpham` (`MaLSP`, `TenLSP`, `HinhAnh`, `Mota`, `MaDM`) VALUES
(44, 'DÂN GIAN', '', 'dân gian', 1),
(45, 'HIỆN ĐẠI', '', 'hiện đại', 1),
(46, 'CỔ ĐIỂN', '', 'cổ điển', 1),
(47, 'TIỂU THUYẾT', '', 'tiểu thuyết', 1),
(48, 'MỸ THUẬT', '', 'mỹ thuật', 2),
(49, 'KIẾN TRÚC', '', 'kiến trúc', 2),
(50, 'TÂM LÝ', '', 'tâm lý', 2),
(51, 'VŨ TRỤ', '', 'vũ trụ', 3),
(52, 'TƯƠNG LAI', '', 'tương lai', 3),
(53, 'LỊCH SỬ', '', 'lịch sử', 3),
(54, 'GIÁO KHOA ', '', 'giao khoa', 4),
(55, 'SÁCH THAM KHẢO', '', 'tham khảo', 4),
(56, 'TRUYỆN TRANH', '', '', 5),
(57, 'SÁCH TÔ MÀU', '', '', 5);

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
--

CREATE TABLE `nguoidung` (
  `MaND` int(11) NOT NULL,
  `Ho` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Ten` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `GioiTinh` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `SDT` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `DiaChi` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `TaiKhoan` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `MatKhau` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `MaQuyen` int(11) NOT NULL,
  `TrangThai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `nguoidung`
--

INSERT INTO `nguoidung` (`MaND`, `Ho`, `Ten`, `GioiTinh`, `SDT`, `Email`, `DiaChi`, `TaiKhoan`, `MatKhau`, `MaQuyen`, `TrangThai`) VALUES
(20, 'hieu', 'admin', 'nam', NULL, '', '', 'admin', '21232f297a57a5a743894a0e4a801fc3', 2, 1),
(21, 'khách', 'hàng', '', '0378308180', 'khachhang@gmail.com', '', 'khachhang', 'b9bc4dd06b7d2d49cb9fb3d8d9fba6c1', 1, 1),
(22, 'Huỳnh', 'Tấn Minh', 'Nam', '0987654321', 'Minh123@gmail.com', '15 Ngô Thì Nhậm', 'TanMinh', '14e1b600b1fd579f47433b88e8d85291', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `phanquyen`
--

CREATE TABLE `phanquyen` (
  `MaQuyen` int(11) NOT NULL,
  `TenQuyen` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ChiTietQuyen` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `phanquyen`
--

INSERT INTO `phanquyen` (`MaQuyen`, `TenQuyen`, `ChiTietQuyen`) VALUES
(1, 'Customer', 'Khách hàng có tài khoản'),
(2, 'Admin', 'Quản trị viên'),
(3, 'Personnel', 'Nhân Viên');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `MaSP` int(11) NOT NULL,
  `MaLSP` int(11) NOT NULL,
  `MaDM` int(11) NOT NULL,
  `TenSP` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `DonGia` int(11) NOT NULL,
  `tacgia` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SoLuong` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `HinhAnh1` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `HinhAnh2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `HinhAnh3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MaKM` int(11) NOT NULL,
  `SoSao` int(11) NOT NULL,
  `SoDanhGia` int(11) NOT NULL,
  `TrangThai` int(11) NOT NULL,
  `MoTa` text COLLATE utf8_unicode_ci NOT NULL,
  `ThoiGian` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`MaSP`, `MaLSP`, `MaDM`, `TenSP`, `DonGia`, `tacgia`, `SoLuong`, `HinhAnh1`, `HinhAnh2`, `HinhAnh3`, `MaKM`, `SoSao`, `SoDanhGia`, `TrangThai`, `MoTa`, `ThoiGian`) VALUES
(58, 44, 1, '1190 Câu Đố Dân Gian Việt Nam', 64000, NULL, 100, 'img/products/sach1.jpg', '', '', 1, 0, 0, 1, '', '2020-11-29 22:33:04'),
(59, 44, 1, 'Truyện cổ dân gian Việt Nam', 58000, NULL, 100, 'img/products/sach2.jpg', '', '', 1, 0, 0, 1, '', '2020-11-29 22:33:29'),
(60, 44, 1, 'Truyện Cổ Tích Việt Nam', 50000, NULL, 100, 'img/products/sach3.jpg', '', '', 1, 0, 0, 1, '', '2020-11-29 22:33:41'),
(61, 44, 1, '100 Truyện Cổ Tích Việt Nam', 44000, NULL, 100, 'img/products/sach4.jpg', '', '', 1, 0, 0, 1, '', '2020-11-29 22:34:02'),
(62, 45, 1, 'Thuyết Khắc Kỷ', 76400, NULL, 100, 'img/products/hiendai1.jpg', '', '', 1, 0, 0, 1, '', '2020-11-29 22:43:09'),
(63, 45, 1, 'Hoàn cảnh hậu hiện đại', 93000, NULL, 100, 'img/products/hiendai2.jpg', '', '', 1, 0, 0, 1, '', '2020-11-29 22:43:27'),
(64, 45, 1, 'Văn Học Hậu Hiện Đại', 419000, NULL, 100, 'img/products/hiendai3.jpg', '', '', 1, 0, 0, 1, '', '2020-11-29 22:43:42'),
(65, 45, 1, 'Đại Gia Gatsby', 320000, NULL, 100, 'img/products/hiendai4.jpg', '', '', 1, 0, 0, 1, '', '2020-11-29 22:44:01'),
(66, 45, 1, 'Một Góc Nhìn Đông Á Cận Hiện Đại', 66500, NULL, 100, 'img/products/hiendai5.jpg', '', '', 1, 0, 0, 1, '', '2020-11-29 22:44:23'),
(67, 45, 1, 'Đại Dịch Tâm Lý Thời Hiện Đại', 92000, NULL, 100, 'img/products/hiendai6.jpg', '', '', 1, 0, 0, 1, '', '2020-11-29 22:44:38'),
(68, 47, 1, 'Nhà Giả Kim', 94000, NULL, 100, 'img/products/tieuthuyet1.jpg', '', '', 1, 0, 0, 1, '', '2020-11-29 22:46:26'),
(69, 46, 1, 'Hai Số Phận', 87000, NULL, 100, 'img/products/codien1.jpg', '', '', 1, 0, 0, 1, '', '2020-11-29 22:46:44'),
(70, 46, 1, 'Mọi người đều nói dối', 78000, NULL, 100, 'img/products/codien2.jpg', '', '', 1, 0, 0, 1, '', '2020-11-29 22:47:01'),
(71, 47, 1, 'Bà Nội Gangster', 69000, NULL, 100, 'img/products/tieuthuyet2.jpg', '', '', 1, 0, 0, 1, '', '2020-11-29 22:47:21'),
(72, 47, 1, 'Tôi, Em Và Cuốn Tiểu Thuyết Còn Dang Dở', 218000, NULL, 100, 'img/products/tieuthuyet3.jpg', '', '', 1, 0, 0, 1, '', '2020-11-29 22:47:53'),
(73, 47, 1, 'Kiếp Nào Ta Cũng Tìm Thấy Nhau', 77000, NULL, 100, 'img/products/tieuthuyet4.jpg', '', '', 1, 0, 0, 1, '', '2020-11-29 22:48:09'),
(74, 44, 1, 'Những Câu Chuyện Dân Gian Hay Nhất Thế Giới', 85000, NULL, 100, 'img/products/sach5.jpg', '', '', 1, 0, 0, 1, '', '2020-11-29 22:48:26'),
(75, 47, 1, 'Tớ Thích Cậu Hơn Cả Harvard', 290000, NULL, 100, 'img/products/tieuthuyet5.jpg', '', '', 1, 0, 0, 1, '', '2020-11-29 22:48:52'),
(76, 48, 2, 'Một Cuốn Sách Buồn… Cười', 79300, NULL, 100, 'img/products/mythuat1.jpg', '', '', 1, 0, 0, 1, '', '2020-11-29 22:49:39'),
(77, 48, 2, 'Mình ngồi xuống kể tổn thương trong lòng', 250000, NULL, 100, 'img/products/mythuat2.jpg', '', '', 1, 0, 0, 1, '', '2020-11-29 22:49:59'),
(78, 48, 2, 'Đôi Điều Nói Lại', 146000, NULL, 100, 'img/products/mythuat3.jpg', '', '', 1, 0, 0, 1, '', '2020-11-29 22:50:19'),
(79, 48, 2, 'Thiên Tài Bên Trái, Kẻ Điên Bên Phải', 275000, NULL, 100, 'img/products/mythuat4.jpg', '', '', 1, 0, 0, 1, '', '2020-11-29 22:50:45'),
(80, 49, 2, 'Kỹ Thuật Kiến Trúc Cảnh Quan', 219000, NULL, 100, 'img/products/kientruc1.jpg', '', '', 1, 0, 0, 1, '', '2020-11-29 22:51:13'),
(81, 49, 2, 'Nguyên Lý Thiết Kế Kiến Trúc Nhà Ở', 520000, NULL, 100, 'img/products/kientruc2.jpg', '', '', 1, 0, 0, 1, '', '2020-11-29 22:51:37'),
(82, 49, 2, 'Lịch Sử Kiến Trúc Thế Giới Qua Hình Vẽ', 190000, NULL, 100, 'img/products/kientruc3.jpg', '', '', 1, 0, 0, 1, '', '2020-11-29 22:51:58'),
(83, 49, 2, 'Phương Pháp Thể Hiện Kiến Trúc', 88000, NULL, 100, 'img/products/kientruc4.jpg', '', '', 1, 0, 0, 1, '', '2020-11-29 22:52:22'),
(84, 50, 2, 'Nghệ Thuật Giải Mã Hành Vi', 273000, NULL, 100, 'img/products/tamly1.jpg', '', '', 1, 0, 0, 1, '', '2020-11-29 22:52:47'),
(85, 50, 2, 'Tâm Lý Học Hài Hước', 112000, NULL, 100, 'img/products/tamly2.jpg', '', '', 1, 0, 0, 1, '', '2020-11-29 22:53:08'),
(86, 50, 2, 'Đừng Chạy Theo Số Đông', 172000, NULL, 100, 'img/products/tamly3.jpg', '', '', 1, 0, 0, 1, '', '2020-11-29 22:53:35'),
(87, 50, 2, 'Sự Thật Tàn Nhẫn Về Gia Đình, Con Cái Và Tiền Bạc', 224000, NULL, 100, 'img/products/tamly4.jpg', '', '', 1, 0, 0, 1, '', '2020-11-29 22:53:56'),
(88, 51, 3, 'Các Thế Giới Song Song', 100000, NULL, 100, 'img/products/vutru1.jpg', '', '', 1, 0, 0, 1, '', '2020-11-29 22:55:11'),
(89, 51, 3, 'Vũ Trụ Trong Vỏ Hạt Dẻ', 438000, NULL, 100, 'img/products/vutru2.jpg', '', '', 1, 0, 0, 1, '', '2020-11-29 22:55:30'),
(90, 51, 3, 'Bách Khoa Vũ Trụ', 150000, NULL, 100, 'img/products/vutru3.jpg', '', '', 1, 0, 0, 1, '', '2020-11-29 22:55:47'),
(91, 51, 3, 'Vũ Trụ Qua Lăng Kính Số', 142000, NULL, 100, 'img/products/vutru4.jpg', '', '', 1, 0, 0, 1, '', '2020-11-29 22:56:04'),
(92, 51, 3, 'Vũ Trụ Từ Hư Không', 109000, NULL, 100, 'img/products/vutru5.jpg', '', '', 1, 0, 0, 1, '', '2020-11-29 22:56:21'),
(93, 52, 3, 'Mở Cửa Tương Lai', 1150000, NULL, 100, 'img/products/tuonglai1.jpg', '', '', 1, 0, 0, 1, '', '2020-11-29 22:57:06'),
(94, 52, 3, 'Lịch Sử Và Tương Lai Của Nhân Loại', 220000, NULL, 100, 'img/products/tuonglai2.jpg', '', '', 1, 0, 0, 1, '', '2020-11-29 22:57:29'),
(95, 52, 3, 'Hiện Tại Kiên Trì Tương Lai Kiên Cố', 91000, NULL, 100, 'img/products/tuonglai3.jpg', '', '', 1, 0, 0, 1, '', '2020-11-29 22:57:52'),
(96, 52, 3, 'Tôi, Tương Lai Và Thế Giới', 63500, NULL, 100, 'img/products/tuonglai4.jpg', '', '', 1, 0, 0, 1, '', '2020-11-29 22:58:14'),
(97, 53, 3, 'Bách Khoa Thư Đầu Đời Về Lịch Sử Loài Người', 373000, NULL, 100, 'img/products/lichsu1.jpg', '', '', 1, 0, 0, 1, '', '2020-11-29 22:58:35'),
(98, 53, 3, 'Lược Sử Vạn Vật', 275000, NULL, 100, 'img/products/lichsu2.jpg', '', '', 1, 0, 0, 1, '', '2020-11-29 22:58:53'),
(99, 53, 3, 'Trò Chơi Giải Mã Mê Cung', 340000, NULL, 100, 'img/products/lichsu3.jpg', '', '', 1, 0, 0, 1, '', '2020-11-29 22:59:09'),
(100, 53, 3, 'Bách Khoa Tri Thức Cho Trẻ Em', 43000, NULL, 100, 'img/products/lichsu4.jpg', '', '', 1, 0, 0, 1, '', '2020-11-29 22:59:36'),
(101, 53, 3, 'Muốn Học Giỏi Lịch Sử Không? Tớ Cho Cậu Mượn Vở', 120000, NULL, 100, 'img/products/lichsu5.jpg', '', '', 1, 0, 0, 1, '', '2020-11-29 22:59:56'),
(300, 54, 4, 'Sách Giáo Khoa Bộ Lớp 1 Cánh Diều ', 151000, NULL, 100, 'img/products/giaokhoa1.jpg', NULL, NULL, 1, 0, 0, 1, '', '2021-12-18 11:35:23'),
(301, 54, 4, 'Sách Giáo Khoa Bộ Lớp 12 - Sách Bài Học (Bộ 13 Cuốn - Không Tiếng Anh)', 123000, 'a low', 0, 'img/products/giaokhoa2.jpg', NULL, NULL, 1, 0, 0, 1, '', '2021-12-18 11:46:28'),
(302, 50, 1, 'Nhà Giả Kim', 120000, 'Tấn Minh', 50, 'img/products/1_1.jpg', '', '', 1, 0, 0, 1, 'Nhà giả kim', '2022-01-02 15:51:11'),
(303, 52, 6, 'Bố già', 100000, 'Tấn Minh', 70, 'img/products/3_1.jpg', 'img/products/3_2.jpg', 'img/products/3_3.jpg', 5, 0, 0, 1, 'Bố già', '2022-01-02 15:58:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`Id`) USING BTREE;

--
-- Indexes for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD KEY `MaHD` (`MaHD`) USING BTREE,
  ADD KEY `MaSP` (`MaSP`) USING BTREE;

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`MaDM`) USING BTREE;

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`MaHD`) USING BTREE,
  ADD KEY `MaKH` (`MaND`) USING BTREE;

--
-- Indexes for table `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`MaKM`) USING BTREE;

--
-- Indexes for table `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`MaLSP`) USING BTREE,
  ADD KEY `MaDM` (`MaDM`) USING BTREE,
  ADD KEY `MaLSP` (`MaLSP`,`MaDM`) USING BTREE,
  ADD KEY `MaLSP_2` (`MaLSP`) USING BTREE;

--
-- Indexes for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`MaND`) USING BTREE,
  ADD KEY `MaQuyen` (`MaQuyen`) USING BTREE;

--
-- Indexes for table `phanquyen`
--
ALTER TABLE `phanquyen`
  ADD PRIMARY KEY (`MaQuyen`) USING BTREE;

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaSP`) USING BTREE,
  ADD KEY `LoaiSP` (`MaLSP`) USING BTREE,
  ADD KEY `MaKM` (`MaKM`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `MaHD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `khuyenmai`
--
ALTER TABLE `khuyenmai`
  MODIFY `MaKM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `loaisanpham`
--
ALTER TABLE `loaisanpham`
  MODIFY `MaLSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `MaND` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `phanquyen`
--
ALTER TABLE `phanquyen`
  MODIFY `MaQuyen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `MaSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=304;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `chitiethoadon_ibfk_1` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chitiethoadon_ibfk_2` FOREIGN KEY (`MaHD`) REFERENCES `hoadon` (`MaHD`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`MaND`) REFERENCES `nguoidung` (`MaND`);

--
-- Constraints for table `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD CONSTRAINT `MaDM` FOREIGN KEY (`MaDM`) REFERENCES `danhmuc` (`MaDM`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD CONSTRAINT `nguoidung_ibfk_1` FOREIGN KEY (`MaQuyen`) REFERENCES `phanquyen` (`MaQuyen`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_2` FOREIGN KEY (`MaKM`) REFERENCES `khuyenmai` (`MaKM`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sanpham_ibfk_3` FOREIGN KEY (`MaLSP`) REFERENCES `loaisanpham` (`MaLSP`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
