-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 12, 2022 lúc 05:19 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ltmt`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phim`
--

CREATE TABLE `phim` (
  `maphim` int(10) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `theloai` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `namsx` int(10) NOT NULL,
  `phim` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `noidung` varchar(5000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phim`
--

INSERT INTO `phim` (`maphim`, `name`, `picture`, `theloai`, `namsx`, `phim`, `noidung`) VALUES
(1, 'hello', 'img/1.jfif', 'Hành động Phiêu lưu Kinh dị Viễn tưởng ', 2019, '', ''),
(2, 'xin chào', 'img/4.jpg', 'Hành động Phiêu lưu ', 2020, '', ''),
(3, 'à lố', 'img/5.jpg', 'Hành động Viễn tưởng ', 2018, '', 'Một bộ phim'),
(4, 'Bubble', 'img/bubble.png', 'Hành động Phiêu lưu Viễn tưởng ', 2020, 'phim/Bubble.2022.1080p.NF.WEB-DL.DUAL.DDP5.1.x264-TBD/Bubble.2022.1080p.NF.WEB-DL.DUAL.DDP5.1.x264-TBD.mkv', 'sfererer'),
(5, '12345', 'img/5.png', 'Hành động Phiêu lưu ', 2019, 'phim/gì đấy', 'fdggd'),
(8, 'không biết', 'img/8.png', 'Hành động Phiêu lưu ', 2020, 'phim/Bubble.2022.1080p.NF.WEB-DL.DUAL.DDP5.1.x264-TBD/Bubble.2022.1080p.NF.WEB-DL.DUAL.DDP5.1.x264-T', 'không viết'),
(9, 'Nguyễn Đắc Chiến', 'img/9.png', 'Hành động Phiêu lưu ', 2020, 'phim/Bubble.2022.1080p.NF.WEB-DL.DUAL.DDP5.1.x264-TBD/Bubble.2022.1080p.NF.WEB-DL.DUAL.DDP5.1.x264-TBD.mkv', 'xin chào'),
(10, 'Ryuu to Sobakasu no Hime', 'img/10.png', 'Hành động Phiêu lưu Viễn tưởng ', 2020, 'phim/Ryuu to Sobakasu no Hime [WEB x264 1920x800 AACx4] [6BD03AED]/Ryuu to Sobakasu no Hime [WEB x264 1920x800 AACx4] [6BD03AED].mkv', 'àdsf'),
(11, 'Thiên thần hộ mệnh', 'img/11.png', 'Hành động Kinh dị ', 2020, 'phim/thienthanhomenh/thienthanhomenh.mp4', 'Ẹc'),
(12, 'Sonic the Hedgehog', 'img/12.png', 'Hành động Phiêu lưu Viễn tưởng ', 2020, 'phim/Sonic.the.Hedgehog.2.2022.1080p.WEBRip.AAC2.0.x264-SHITBOX/Sonic.the.Hedgehog.2.2022.1080p.WEBRip.AAC2.0.x264-SHITBOX.mp4', 'hello'),
(13, 'Em là bà nội của anh', 'img/13.png', 'Viễn tưởng ', 2020, 'phim/Sweet.20.2015.1080p.WEBRip.x264.AAC-[YTS.MX]/Sweet.20.2015.1080p.WEBRip.x264.AAC-[YTS.MX].mp4', 'kdhasd'),
(14, 'Sword Art Online Progressive - Aria of a Starless Night', 'img/14.png', 'Hành động ', 2018, 'phim/[MTBB] Sword Art Online Progressive - Aria of a Starless Night [A3B6A482]/[MTBB] Sword Art Online Progressive - Aria of a Starless Night [A3B6A482].mkv', 'ádasd'),
(15, 'The Batman 2022', 'img/15.png', 'Hành động Viễn tưởng ', 2020, 'phim/The.Batman.2022.1080p.WEBRip.DDP5.1.x264-NOGRP/The.Batman.2022.1080p.WEBRip.DDP5.1.x264-NOGRP.mkv', 'cfsdf');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theloai`
--

CREATE TABLE `theloai` (
  `matheloai` int(10) NOT NULL,
  `theloai` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `theloai`
--

INSERT INTO `theloai` (`matheloai`, `theloai`) VALUES
(1, 'Hành động'),
(2, 'Phiêu lưu'),
(3, 'Kinh dị'),
(4, 'Viễn tưởng');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `phim`
--
ALTER TABLE `phim`
  ADD PRIMARY KEY (`maphim`);

--
-- Chỉ mục cho bảng `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`matheloai`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `phim`
--
ALTER TABLE `phim`
  MODIFY `maphim` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `theloai`
--
ALTER TABLE `theloai`
  MODIFY `matheloai` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
