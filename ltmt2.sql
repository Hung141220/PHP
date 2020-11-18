-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 18, 2020 lúc 01:43 PM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ltmt2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `info1`
--

CREATE TABLE `info1` (
  `id` int(11) NOT NULL,
  `fullname` varchar(30) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(15) DEFAULT NULL,
  `picture` varchar(30) DEFAULT NULL,
  `gender` varchar(3) DEFAULT NULL,
  `birthday` varchar(30) DEFAULT NULL,
  `likes` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `info1`
--

INSERT INTO `info1` (`id`, `fullname`, `email`, `pass`, `picture`, `gender`, `birthday`, `likes`) VALUES
(1, 'Hung', 'maiv4875@gmail.com', '1', '../../img/Screenshot (1).png', 'Nam', '2222-12-14', 'nghenhac ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `login`
--

CREATE TABLE `login` (
  `fullname` varchar(30) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `login`
--

INSERT INTO `login` (`fullname`, `email`, `pass`) VALUES
('Hung', 'maiv4875@gmail.com', '1');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `info1`
--
ALTER TABLE `info1`
  ADD PRIMARY KEY (`id`,`email`);

--
-- Chỉ mục cho bảng `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `info1`
--
ALTER TABLE `info1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
