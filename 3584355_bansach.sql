-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: fdb30.awardspace.net
-- Thời gian đã tạo: Th10 13, 2020 lúc 09:04 AM
-- Phiên bản máy phục vụ: 5.7.20-log
-- Phiên bản PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `3584355_bansach`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idsp` int(11) NOT NULL,
  `noidung` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postdate` date DEFAULT NULL,
  `iduser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

UPDATE `binhluan` SET `id` = 73,`name` = '',`idsp` = 1,`noidung` = 'hay',`postdate` = NULL,`iduser` = 1 WHERE `binhluan`.`id` = 73;
UPDATE `binhluan` SET `id` = 74,`name` = '',`idsp` = 2,`noidung` = 'Gặp tôi là tôi...',`postdate` = NULL,`iduser` = 1 WHERE `binhluan`.`id` = 74;
UPDATE `binhluan` SET `id` = 77,`name` = '',`idsp` = 2,`noidung` = 'Đấm cho mấy nhát.',`postdate` = NULL,`iduser` = 1 WHERE `binhluan`.`id` = 77;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bxh`
--

CREATE TABLE `bxh` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` double(11,2) DEFAULT NULL,
  `imgtop` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bxh`
--

UPDATE `bxh` SET `id` = 1,`name` = 'ndsy0***',`img` = NULL,`time` = 10.54,`imgtop` = '../view/img/rowthirtdanhmuc/c15ae0b01164ec3ab575.jpg' WHERE `bxh`.`id` = 1;
UPDATE `bxh` SET `id` = 2,`name` = 'sherry8***',`img` = '../view/img/rowthirtdanhmuc/top2.JPG',`time` = 10.01,`imgtop` = NULL WHERE `bxh`.`id` = 2;
UPDATE `bxh` SET `id` = 3,`name` = 'trangiang2**',`img` = '../view/img/rowthirtdanhmuc/top3.JPG',`time` = 7.46,`imgtop` = NULL WHERE `bxh`.`id` = 3;
UPDATE `bxh` SET `id` = 4,`name` = 'tunganh85**',`img` = '../view/img/rowthirtdanhmuc/top4.JPG',`time` = 7.00,`imgtop` = NULL WHERE `bxh`.`id` = 4;
UPDATE `bxh` SET `id` = 5,`name` = 'thanhtran8**',`img` = '../view/img/rowthirtdanhmuc/top5.JPG',`time` = 6.71,`imgtop` = NULL WHERE `bxh`.`id` = 5;
UPDATE `bxh` SET `id` = 6,`name` = 'huongn9***',`img` = '../view/img/rowthirtdanhmuc/top6.JPG',`time` = 6.51,`imgtop` = NULL WHERE `bxh`.`id` = 6;
UPDATE `bxh` SET `id` = 7,`name` = 'thamho64**',`img` = '../view/img/rowthirtdanhmuc/top7.JPG',`time` = 6.39,`imgtop` = NULL WHERE `bxh`.`id` = 7;
UPDATE `bxh` SET `id` = 8,`name` = 'uyentra75**',`img` = '../view/img/rowthirtdanhmuc/top8.JPG',`time` = 6.16,`imgtop` = NULL WHERE `bxh`.`id` = 8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  `hot` tinyint(4) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

UPDATE `danhmuc` SET `id` = 2,`name` = 'Sách nói',`sort` = 12,`hot` = 1 WHERE `danhmuc`.`id` = 2;
UPDATE `danhmuc` SET `id` = 3,`name` = 'Linh dị',`sort` = 1,`hot` = 0 WHERE `danhmuc`.`id` = 3;
UPDATE `danhmuc` SET `id` = 4,`name` = 'Kinh doanh',`sort` = 1140,`hot` = 1 WHERE `danhmuc`.`id` = 4;
UPDATE `danhmuc` SET `id` = 5,`name` = 'Tác giả',`sort` = 3906,`hot` = 1 WHERE `danhmuc`.`id` = 5;
UPDATE `danhmuc` SET `id` = 6,`name` = 'Thiếu nhi',`sort` = 1217,`hot` = 1 WHERE `danhmuc`.`id` = 6;
UPDATE `danhmuc` SET `id` = 7,`name` = 'Tạp chí & Chuyên đề',`sort` = 551,`hot` = 0 WHERE `danhmuc`.`id` = 7;
UPDATE `danhmuc` SET `id` = 8,`name` = 'Tủ sách liên kết',`sort` = 1217,`hot` = 0 WHERE `danhmuc`.`id` = 8;
UPDATE `danhmuc` SET `id` = 9,`name` = 'Truyện tranh',`sort` = 432,`hot` = 0 WHERE `danhmuc`.`id` = 9;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `docnhieu`
--

CREATE TABLE `docnhieu` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `docnhieu`
--

UPDATE `docnhieu` SET `id` = 1,`name` = 'Tất cả' WHERE `docnhieu`.`id` = 1;
UPDATE `docnhieu` SET `id` = 2,`name` = 'Kỹ năng ' WHERE `docnhieu`.`id` = 2;
UPDATE `docnhieu` SET `id` = 3,`name` = 'Hiện đại' WHERE `docnhieu`.`id` = 3;
UPDATE `docnhieu` SET `id` = 4,`name` = 'Nuôi dạy con' WHERE `docnhieu`.`id` = 4;
UPDATE `docnhieu` SET `id` = 5,`name` = 'Quản trị ' WHERE `docnhieu`.`id` = 5;
UPDATE `docnhieu` SET `id` = 6,`name` = 'Truyện dài ' WHERE `docnhieu`.`id` = 6;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `new`
--

CREATE TABLE `new` (
  `id` int(11) NOT NULL,
  `name` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tacgia` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `votes` int(10) DEFAULT '0',
  `xephang` float DEFAULT NULL,
  `imgsp` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `new`
--

UPDATE `new` SET `id` = 1,`name` = 'Cưng chiều cô vợ quân nhân - Tập 50',`tacgia` = 'Huỳnh Hạ',`votes` = 47,`xephang` = 5,`imgsp` = 'https://307a0e78.vws.vegacdn.vn/view/v2/image/img.book/0/0/0/23787.jpg?v=1&w=340&h=497' WHERE `new`.`id` = 1;
UPDATE `new` SET `id` = 2,`name` = 'Thịnh thế kiều y - Tập 14',`tacgia` = 'Phương Phương',`votes` = 12,`xephang` = 5,`imgsp` = 'https://307a0e78.vws.vegacdn.vn/view/v2/image/img.book/0/0/0/26182.jpg?v=1&w=340&h=497' WHERE `new`.`id` = 2;
UPDATE `new` SET `id` = 3,`name` = 'Yêu tinh quán - Tập 1',`tacgia` = 'Huỳnh Hạ',`votes` = 15,`xephang` = 5,`imgsp` = 'https://307a0e78.vws.vegacdn.vn/view/v2/image/img.book/0/0/0/26181.jpg?v=1&w=340&h=497' WHERE `new`.`id` = 3;
UPDATE `new` SET `id` = 4,`name` = 'Đông thủy hạ hàm - Tập 15',`tacgia` = 'Miêu Lão Sư',`votes` = 47,`xephang` = 5,`imgsp` = 'https://307a0e78.vws.vegacdn.vn/view/v2/image/img.book/0/0/0/26178.jpg?v=1&w=340&h=497' WHERE `new`.`id` = 4;
UPDATE `new` SET `id` = 5,`name` = 'Marketting điểm bán',`tacgia` = 'Doug Stephen',`votes` = 0,`xephang` = 0,`imgsp` = 'https://307a0e78.vws.vegacdn.vn/view/v2/image/img.book/0/0/0/26176.jpg?v=1&w=340&h=497' WHERE `new`.`id` = 5;
UPDATE `new` SET `id` = 6,`name` = 'Gió ấm không bằng âm thanh tình - Tập...',`tacgia` = 'Thanh Thanh Thùy Tiêu',`votes` = 53,`xephang` = 4.92,`imgsp` = 'https://307a0e78.vws.vegacdn.vn/view/v2/image/img.book/0/0/0/26170.jpg?v=1&w=340&h=497' WHERE `new`.`id` = 6;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `new2`
--

CREATE TABLE `new2` (
  `id` int(10) NOT NULL,
  `iddm` int(11) NOT NULL,
  `name` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tacgia` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `votes` int(10) DEFAULT '0',
  `xephang` float DEFAULT '0',
  `imgsp` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `theloai` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nxb` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ngaycapnhap` date DEFAULT NULL,
  `hot` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `new2`
--

UPDATE `new2` SET `id` = 78,`iddm` = 4,`name` = 'Nhân sự cốt cán',`tacgia` = 'Seth Godin',`votes` = 0,`xephang` = 0,`imgsp` = '1.jpg',`theloai` = NULL,`nxb` = NULL,`ngaycapnhap` = NULL,`hot` = 1 WHERE `new2`.`id` = 78;
UPDATE `new2` SET `id` = 79,`iddm` = 4,`name` = 'Cẩm nang mở nhà hàng',`tacgia` = 'Roger Fields',`votes` = 0,`xephang` = 0,`imgsp` = '2.jpg',`theloai` = NULL,`nxb` = NULL,`ngaycapnhap` = NULL,`hot` = 1 WHERE `new2`.`id` = 79;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nghenhieu`
--

CREATE TABLE `nghenhieu` (
  `id` int(11) NOT NULL,
  `name` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heard` int(50) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nghenhieu`
--

UPDATE `nghenhieu` SET `id` = 1,`name` = 'Người giỏi không phải là người làm tất cả',`heard` = 0 WHERE `nghenhieu`.`id` = 1;
UPDATE `nghenhieu` SET `id` = 2,`name` = 'Đánh thức con người phi thường của bạn',`heard` = 0 WHERE `nghenhieu`.`id` = 2;
UPDATE `nghenhieu` SET `id` = 3,`name` = 'Nghĩ giàu làm giàu',`heard` = 0 WHERE `nghenhieu`.`id` = 3;
UPDATE `nghenhieu` SET `id` = 4,`name` = 'Để trở thành người bán hàng xuất sắc',`heard` = 0 WHERE `nghenhieu`.`id` = 4;
UPDATE `nghenhieu` SET `id` = 5,`name` = 'Đắc nhân tâm',`heard` = 0 WHERE `nghenhieu`.`id` = 5;
UPDATE `nghenhieu` SET `id` = 6,`name` = 'Hạt giống tâm hồn - Đừng từ bỏ ước mơ',`heard` = 0 WHERE `nghenhieu`.`id` = 6;
UPDATE `nghenhieu` SET `id` = 7,`name` = 'Bí mật của may mắn',`heard` = 0 WHERE `nghenhieu`.`id` = 7;
UPDATE `nghenhieu` SET `id` = 8,`name` = 'Tư duy đột phá',`heard` = 0 WHERE `nghenhieu`.`id` = 8;
UPDATE `nghenhieu` SET `id` = 9,`name` = '[Tóm tắt sách] - Một tư duy hoàn toàn mới',`heard` = 0 WHERE `nghenhieu`.`id` = 9;
UPDATE `nghenhieu` SET `id` = 10,`name` = 'Quẳng gánh lo đi và vui sống',`heard` = 0 WHERE `nghenhieu`.`id` = 10;
UPDATE `nghenhieu` SET `id` = 11,`name` = 'Hạt giống tâm hồn - Đừng từ bỏ ước mơ',`heard` = 0 WHERE `nghenhieu`.`id` = 11;
UPDATE `nghenhieu` SET `id` = 12,`name` = 'Không yêu thì biến',`heard` = 0 WHERE `nghenhieu`.`id` = 12;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sachnoi`
--

CREATE TABLE `sachnoi` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sachnoi`
--

UPDATE `sachnoi` SET `id` = 1,`name` = 'Tất cả' WHERE `sachnoi`.`id` = 1;
UPDATE `sachnoi` SET `id` = 2,`name` = 'Truyện đọc' WHERE `sachnoi`.`id` = 2;
UPDATE `sachnoi` SET `id` = 3,`name` = 'Phát triển' WHERE `sachnoi`.`id` = 3;
UPDATE `sachnoi` SET `id` = 4,`name` = 'Kinh doanh' WHERE `sachnoi`.`id` = 4;
UPDATE `sachnoi` SET `id` = 5,`name` = 'Hạt giống ' WHERE `sachnoi`.`id` = 5;
UPDATE `sachnoi` SET `id` = 6,`name` = 'Thiếu nhi' WHERE `sachnoi`.`id` = 6;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `idsp` int(11) NOT NULL,
  `namesp` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tacgia` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `votes` int(10) DEFAULT '0',
  `tomtatsp` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `viewsp` float DEFAULT '0',
  `imgsp` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hot` int(11) DEFAULT '0',
  `xephang` float DEFAULT '0',
  `theloai` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nxb` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ngaycapnhap` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

UPDATE `sanpham` SET `idsp` = 1,`namesp` = 'Yêu em thật là xui xẻo (Tập 1)',`tacgia` = 'Tinh Dã Anh',`votes` = 138,`tomtatsp` = 'Tóm tắt tiểu thuyết\r\n"Yêu Em Thật X...',`viewsp` = 0,`imgsp` = 'https://307a0e78.vws.vegacdn.vn/view/v2/image/img.book/0/0/0/1509.jpg?v=2&w=340&h=497',`hot` = 0,`xephang` = 4.91,`theloai` = 'Pháp luật ',`nxb` = 'đang cập nhập',`ngaycapnhap` = '2020-08-01' WHERE `sanpham`.`idsp` = 1;
UPDATE `sanpham` SET `idsp` = 2,`namesp` = 'Xuất khẩu cười - Phần 1',`tacgia` = 'Lê Hoàng',`votes` = 57,`tomtatsp` = '"Nụ cười nước ta vốn\r\nthâm, sâu, bền...',`viewsp` = 0,`imgsp` = 'https://307a0e78.vws.vegacdn.vn/view/v2/image/img.book/0/0/0/7203.jpg?v=3&w=340&h=497',`hot` = 1,`xephang` = 4.97,`theloai` = 'Làm giàu',`nxb` = 'đang cập nhập',`ngaycapnhap` = '2020-07-16' WHERE `sanpham`.`idsp` = 2;
UPDATE `sanpham` SET `idsp` = 3,`namesp` = '1981 (Phần 1)',`tacgia` = 'Nguyễn Quỳnh Trang',`votes` = 7,`tomtatsp` = '1981" là một\r\ncâu chuyện thấm ...',`viewsp` = 0,`imgsp` = 'https://307a0e78.vws.vegacdn.vn/view/v2/image/img.book/0/0/0/7086.jpg?v=2&w=340&h=497',`hot` = 0,`xephang` = 5,`theloai` = 'Dậy kinh doanh',`nxb` = 'đang cập nhập',`ngaycapnhap` = '2020-06-01' WHERE `sanpham`.`idsp` = 3;
UPDATE `sanpham` SET `idsp` = 4,`namesp` = 'Giết chết người đưa thư',`tacgia` = 'Tami Hoag',`votes` = 27,`tomtatsp` = 'Giết người đưa\r\nthư là tác phẩm...',`viewsp` = 0,`imgsp` = 'https://307a0e78.vws.vegacdn.vn/view/v2/image/img.book/0/0/0/949.jpg?v=2&w=340&h=497',`hot` = 1,`xephang` = 0,`theloai` = NULL,`nxb` = NULL,`ngaycapnhap` = NULL WHERE `sanpham`.`idsp` = 4;
UPDATE `sanpham` SET `idsp` = 5,`namesp` = 'Sào huyệt của những ông trùm',`tacgia` = 'James B.Stewart',`votes` = 58,`tomtatsp` = 'Cuốn sách Sào\r\nhuyệt của những...',`viewsp` = 0,`imgsp` = 'https://307a0e78.vws.vegacdn.vn/view/v2/image/img.book/0/0/0/4552.jpg?v=2&w=340&h=497',`hot` = 0,`xephang` = 0,`theloai` = NULL,`nxb` = NULL,`ngaycapnhap` = NULL WHERE `sanpham`.`idsp` = 5;
UPDATE `sanpham` SET `idsp` = 6,`namesp` = 'Chân trời góc bể (Tập 1)',`tacgia` = 'Diệp Lạc Vô Tâm',`votes` = 256,`tomtatsp` = 'Đối với nhiều bạn\r\ntrẻ yêu thích truyện...',`viewsp` = 0,`imgsp` = 'https://307a0e78.vws.vegacdn.vn/view/v2/image/img.book/0/0/0/721.jpg?v=2&w=340&h=497',`hot` = 0,`xephang` = 0,`theloai` = NULL,`nxb` = NULL,`ngaycapnhap` = NULL WHERE `sanpham`.`idsp` = 6;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham2`
--

CREATE TABLE `sanpham2` (
  `idsp` int(11) NOT NULL,
  `namesp` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tacgia` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `votes` int(10) DEFAULT NULL,
  `tomtatsp` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imgsp` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `viewsp` float DEFAULT '0',
  `hot` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham2`
--

UPDATE `sanpham2` SET `idsp` = 1,`namesp` = 'Hỏi đáp về chủng Virus...',`tacgia` = 'Đang cập nhật',`votes` = 64,`tomtatsp` = 'Virus Corona mới\r\nnăm 2019 (gọi...',`imgsp` = '../view/img/rowthirtcontent/1.jpg',`viewsp` = 0,`hot` = 0 WHERE `sanpham2`.`idsp` = 1;
UPDATE `sanpham2` SET `idsp` = 2,`namesp` = 'Cẩm nang phòng bệnh..',`tacgia` = 'ETS',`votes` = 51,`tomtatsp` = 'Sang xuân là thời\r\nđiểm virus, vi...',`imgsp` = '../view/img/rowthirtcontent/2.jpg',`viewsp` = 0,`hot` = 0 WHERE `sanpham2`.`idsp` = 2;
UPDATE `sanpham2` SET `idsp` = 3,`namesp` = 'Content marketing tro...',`tacgia` = 'Randy Frisch',`votes` = 63,`tomtatsp` = 'Đúng như những gì\r\nđược nêu trong ...',`imgsp` = '../view/img/rowthirtcontent/3.jpg',`viewsp` = 0,`hot` = 1 WHERE `sanpham2`.`idsp` = 3;
UPDATE `sanpham2` SET `idsp` = 4,`namesp` = 'Nghề tay trái hái ra tiền',`tacgia` = 'Chris Guillebeau',`votes` = 191,`tomtatsp` = 'Với một số người,\r\nsuy nghĩ nghỉ việ...',`imgsp` = '../view/img/rowthirtcontent/4.jpg',`viewsp` = 0,`hot` = 0 WHERE `sanpham2`.`idsp` = 4;
UPDATE `sanpham2` SET `idsp` = 5,`namesp` = 'Bạn là ai trong mắt người khác',`tacgia` = 'Seth Price, Barry...',`votes` = 278,`tomtatsp` = 'Để thành công\r\ntrong thời đại bù...',`imgsp` = '../view/img/rowthirtcontent/5.jpg',`viewsp` = 0,`hot` = 0 WHERE `sanpham2`.`idsp` = 5;
UPDATE `sanpham2` SET `idsp` = 6,`namesp` = 'Cách tạo ra những sản...',`tacgia` = 'Ryan Holiday',`votes` = 33,`tomtatsp` = 'Từ những kinh\r\nnghiệm được đú...',`imgsp` = '../view/img/rowthirtcontent/6.jpg',`viewsp` = 0,`hot` = 0 WHERE `sanpham2`.`idsp` = 6;
UPDATE `sanpham2` SET `idsp` = 7,`namesp` = 'Hộ chiếu tình yêu',`tacgia` = 'Hồ Thu Hương',`votes` = 48,`tomtatsp` = 'Cuốn sách là kinh\r\nnghiệm yêu ngư...',`imgsp` = '../view/img/rowthirtcontent/7.jpg',`viewsp` = 0,`hot` = 0 WHERE `sanpham2`.`idsp` = 7;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `spsachnoi`
--

CREATE TABLE `spsachnoi` (
  `id` int(12) NOT NULL,
  `name` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tacgia` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `luotnghe` int(10) DEFAULT NULL,
  `time` text COLLATE utf8mb4_unicode_ci,
  `soure` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(222) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `spsachnoi`
--

UPDATE `spsachnoi` SET `id` = 1,`name` = 'Hoa tấu âm dương - Tập 17',`tacgia` = 'A Thất',`luotnghe` = 456,`time` = '1 giờ , 46 phút',`soure` = 'Sách nói , Truyện đọc',`img` = '../view/img/contentsachnoi/1.jpg' WHERE `spsachnoi`.`id` = 1;
UPDATE `spsachnoi` SET `id` = 2,`name` = 'Nghệ thuật bán hàng bậc cao',`tacgia` = 'Zig Ziglar',`luotnghe` = 5217,`time` = '46 phút',`soure` = 'Sách nói , Bí quyết kinh doanh',`img` = '../view/img/contentsachnoi/2.jpg' WHERE `spsachnoi`.`id` = 2;
UPDATE `spsachnoi` SET `id` = 3,`name` = 'Lãnh đạo và sự tự lừa dối',`tacgia` = 'Nhiều tác giả',`luotnghe` = 7674,`time` = '34 phút',`soure` = 'Sách nói , Bí quyết kinh doanh',`img` = '../view/img/contentsachnoi/3.jpg' WHERE `spsachnoi`.`id` = 3;
UPDATE `spsachnoi` SET `id` = 4,`name` = 'Tinh thần Samurai trong thế giới phẳng',`tacgia` = 'Barian Klemmer',`luotnghe` = 6326,`time` = '23 phút',`soure` = 'Sách nói , Phát triển bản thân',`img` = '../view/img/contentsachnoi/5.jpg' WHERE `spsachnoi`.`id` = 4;
UPDATE `spsachnoi` SET `id` = 5,`name` = '[Tóm tắt sách]- Bí mật phía sau điện toán đám...',`tacgia` = 'Marc Benioff',`luotnghe` = 4345,`time` = '43 phút',`soure` = 'Sách nói , Bí quyết kinh doanh',`img` = '../view/img/contentsachnoi/4.jpg' WHERE `spsachnoi`.`id` = 5;
UPDATE `spsachnoi` SET `id` = 6,`name` = 'Tư duy đột phá',`tacgia` = 'Hibino Shozo',`luotnghe` = 17148,`time` = '16 phút',`soure` = 'Sách nói , Phát triển bản thân',`img` = '../view/img/contentsachnoi/6.jpg' WHERE `spsachnoi`.`id` = 6;
UPDATE `spsachnoi` SET `id` = 7,`name` = 'Nghĩ giàu làm giàu',`tacgia` = 'Napoleon Hill',`luotnghe` = 19612,`time` = '04 giờ , 23 phút',`soure` = 'Sách nói , Phát triển bản thân',`img` = '../view/img/contentsachnoi/7.jpg' WHERE `spsachnoi`.`id` = 7;
UPDATE `spsachnoi` SET `id` = 8,`name` = 'Hoàng Hạ phục yêu truyện - Tập 3',`tacgia` = 'Long Phi Có Yêu Kh',`luotnghe` = 266,`time` = '01 giờ , 16 phút',`soure` = 'Sách nói , Truyện đọc',`img` = '../view/img/contentsachnoi/8.jpg' WHERE `spsachnoi`.`id` = 8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

UPDATE `user` SET `id` = 1,`user` = 'Nguyễn Hữu Đa',`pass` = '123',`email` = NULL,`role` = 0 WHERE `user`.`id` = 1;
UPDATE `user` SET `id` = 2,`user` = 'ADMIN',`pass` = '08112001',`email` = '',`role` = 1 WHERE `user`.`id` = 2;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idsp` (`idsp`),
  ADD KEY `binhluan_ibfk_1` (`iduser`);

--
-- Chỉ mục cho bảng `bxh`
--
ALTER TABLE `bxh`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `docnhieu`
--
ALTER TABLE `docnhieu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `new`
--
ALTER TABLE `new`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `new2`
--
ALTER TABLE `new2`
  ADD PRIMARY KEY (`id`),
  ADD KEY `iddm` (`iddm`);

--
-- Chỉ mục cho bảng `nghenhieu`
--
ALTER TABLE `nghenhieu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sachnoi`
--
ALTER TABLE `sachnoi`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`idsp`);

--
-- Chỉ mục cho bảng `sanpham2`
--
ALTER TABLE `sanpham2`
  ADD PRIMARY KEY (`idsp`);

--
-- Chỉ mục cho bảng `spsachnoi`
--
ALTER TABLE `spsachnoi`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
--
-- AUTO_INCREMENT cho bảng `bxh`
--
ALTER TABLE `bxh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT cho bảng `docnhieu`
--
ALTER TABLE `docnhieu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT cho bảng `new`
--
ALTER TABLE `new`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT cho bảng `new2`
--
ALTER TABLE `new2`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
--
-- AUTO_INCREMENT cho bảng `nghenhieu`
--
ALTER TABLE `nghenhieu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT cho bảng `sachnoi`
--
ALTER TABLE `sachnoi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `idsp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT cho bảng `sanpham2`
--
ALTER TABLE `sanpham2`
  MODIFY `idsp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT cho bảng `spsachnoi`
--
ALTER TABLE `spsachnoi`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_1` FOREIGN KEY (`iduser`) REFERENCES `user` (`id`);

--
-- Các ràng buộc cho bảng `new2`
--
ALTER TABLE `new2`
  ADD CONSTRAINT `new2_ibfk_1` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
