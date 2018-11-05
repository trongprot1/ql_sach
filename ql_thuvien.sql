-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th10 05, 2018 lúc 05:12 AM
-- Phiên bản máy phục vụ: 5.7.23
-- Phiên bản PHP: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ql_thuvien`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ct_muontra`
--

DROP TABLE IF EXISTS `ct_muontra`;
CREATE TABLE IF NOT EXISTS `ct_muontra` (
  `id` int(11) NOT NULL,
  `ma_muontra` int(11) NOT NULL,
  `ma_sach` int(11) NOT NULL,
  `ghichu` text NOT NULL,
  `da_tra` tinyint(4) NOT NULL,
  `ngay_tra` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `docgia`
--

DROP TABLE IF EXISTS `docgia`;
CREATE TABLE IF NOT EXISTS `docgia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ten_docgia` varchar(255) NOT NULL,
  `phai` int(11) NOT NULL,
  `ngay_sinh` varchar(255) NOT NULL,
  `images` varchar(255) DEFAULT NULL,
  `diachi` varchar(255) DEFAULT NULL,
  `so_dienthoai` varchar(255) NOT NULL,
  `so_the` int(11) NOT NULL,
  `ghi_chu` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `muon_tra`
--

DROP TABLE IF EXISTS `muon_tra`;
CREATE TABLE IF NOT EXISTS `muon_tra` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `so_the` varchar(255) NOT NULL,
  `ma_nhanvien` int(11) NOT NULL,
  `ngay_muon` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhan_vien`
--

DROP TABLE IF EXISTS `nhan_vien`;
CREATE TABLE IF NOT EXISTS `nhan_vien` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ten_nhanvien` varchar(255) NOT NULL,
  `phai` tinyint(4) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dia_chi` text NOT NULL,
  `ngay_sinh` varchar(255) NOT NULL,
  `so_dienthoai` varchar(255) NOT NULL,
  `ghi_chu` int(11) NOT NULL,
  `images` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhaxuatban`
--

DROP TABLE IF EXISTS `nhaxuatban`;
CREATE TABLE IF NOT EXISTS `nhaxuatban` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ten_nxb` varchar(255) NOT NULL,
  `dia_chi` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `thong_tin` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sach`
--

DROP TABLE IF EXISTS `sach`;
CREATE TABLE IF NOT EXISTS `sach` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ten_sach` varchar(255) NOT NULL,
  `ma_tacgia` varchar(255) NOT NULL,
  `ma_theloai` varchar(255) NOT NULL,
  `ma_nxb` varchar(255) NOT NULL,
  `nam_xuatban` int(11) NOT NULL,
  `images` varchar(255) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `ghi_chu` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tacgia`
--

DROP TABLE IF EXISTS `tacgia`;
CREATE TABLE IF NOT EXISTS `tacgia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ten_tacgia` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `ghichu` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theloai`
--

DROP TABLE IF EXISTS `theloai`;
CREATE TABLE IF NOT EXISTS `theloai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ten_theloai` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thethuvien`
--

DROP TABLE IF EXISTS `thethuvien`;
CREATE TABLE IF NOT EXISTS `thethuvien` (
  `id` int(6) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
  `ngay_batdau` varchar(255) NOT NULL,
  `ngay_ketthuc` varchar(255) NOT NULL,
  `ghi_chu` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
