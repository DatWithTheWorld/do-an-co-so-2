-- phpMyAdmin SQL Dump
-- version 5.2.1deb1ubuntu0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th1 02, 2024 lúc 04:31 AM
-- Phiên bản máy phục vụ: 8.0.35-0ubuntu0.23.04.1
-- Phiên bản PHP: 8.1.12-1ubuntu4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `vaccination`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `access_logs`
--

CREATE TABLE `access_logs` (
  `id` int NOT NULL,
  `counter` int DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `access_logs`
--

INSERT INTO `access_logs` (`id`, `counter`) VALUES
(1, 157);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `Account`
--

CREATE TABLE `Account` (
  `Account` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `CID` int NOT NULL,
  `ID` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `Account`
--

INSERT INTO `Account` (`Account`, `Password`, `CID`, `ID`) VALUES
('NguyenDat', '12345', 44204006, 14);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `CID` int NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Phone` int NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Timess` int NOT NULL,
  `Email` varchar(50) NOT NULL,
  `avt` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`CID`, `Name`, `Phone`, `Address`, `Timess`, `Email`, `avt`) VALUES
(44204006, 'NguyenDat', 826329970, 'Da Nang', 2, 'nguyenducdat592004@gmail.com', ''),
(123456784, 'Nguyễn Trịnh Xuân Quốc', 808055220, 'Quảng Trị', 1, '', ''),
(123975648, 'Lê Thành Công', 808055221, 'Quảng Nam', 1, '', ''),
(125476398, 'Nguyễn Thành Công', 789465213, 'Hà Nội', 1, '', ''),
(145632987, 'Huỳnh Thị Búp', 763128169, 'Quảng Bình', 1, '', ''),
(146325978, 'Nguyễn Tấn Bảo', 707066050, 'Quảng Trị', 1, '', ''),
(146975238, 'Nguyễn Đức Hiếu', 625893417, 'Quảng Trị', 1, '', ''),
(147852369, 'Nguyễn Đức Thành', 935930399, 'Quảng Bình', 1, '', ''),
(158423697, 'Trần Quang Thành ', 905060442, 'TP. Cần Thơ', 2, '', ''),
(159357624, 'Lê Minh Quý', 705633220, 'TP. Hồ Chí Minh', 2, '', ''),
(225544112, 'Trần Thị Cẩm Hoa', 789469867, 'Đà Nẵng', 1, '', ''),
(442040040, 'Nguyễn Đức Đạt', 826329970, 'Lệ Thủy', 2, '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `message`
--

CREATE TABLE `message` (
  `msid` int NOT NULL,
  `incoming_msg_id` varchar(255) DEFAULT NULL,
  `outgoing_msg_id` varchar(255) DEFAULT NULL,
  `msg` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `schedule`
--

CREATE TABLE `schedule` (
  `MID` int NOT NULL,
  `VID` int NOT NULL,
  `CID` int NOT NULL,
  `VSID` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `schedule`
--

INSERT INTO `schedule` (`MID`, `VID`, `CID`, `VSID`) VALUES
(9, 1, 125476398, 1),
(5, 1, 225544112, 1),
(6, 2, 123456784, 1),
(7, 2, 145632987, 1),
(1, 3, 442040040, 1),
(32, 4, 44204006, 1),
(11, 4, 146325978, 1),
(13, 4, 159357624, 1),
(3, 4, 1234567890, 1),
(10, 6, 123975648, 1),
(12, 7, 146975238, 1),
(8, 7, 147852369, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vsession`
--

CREATE TABLE `vsession` (
  `VSID` int NOT NULL,
  `Date` date NOT NULL,
  `Session` int NOT NULL,
  `Location` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `vsession`
--

INSERT INTO `vsession` (`VSID`, `Date`, `Session`, `Location`) VALUES
(1, '2022-03-12', 1, 'Da Nang'),
(2, '2022-12-03', 2, 'Da Nang'),
(3, '2023-03-12', 3, 'Da Nang');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vtype`
--

CREATE TABLE `vtype` (
  `VID` int NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Desciption` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Price` double NOT NULL,
  `Image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `vtype`
--

INSERT INTO `vtype` (`VID`, `Name`, `Desciption`, `Price`, `Image`) VALUES
(1, 'AstraZeneca', '8-12 weeks to the second', 500, 'https://media.vneconomy.vn/images/upload/2021/04/20/210215-astrazeneca-vaccine-jm-1214-4d19b6660bbf4911e60060a852410a8b-fit-2000w-161345800382595707217-106-0-1230-2000-crop-1613458009485637017901.jpg'),
(2, 'Vero Cell ', '8-12 weeks to the second', 500, 'https://storage-vnportal.vnpt.vn/btn-ubnd/sitefolders/root/6055/2021/thang10/ngay13/h33.jpg'),
(3, 'Comirnaty', '8-12 weeks to the second', 500, 'https://media.vneconomy.vn/images/upload/2022/01/11/4d8d9cd0-bb0c-40b2-b95d-920e450a9a30.jpeg'),
(4, 'Spikevax', '8-12 weeks to the second', 500, 'https://www.pei.de/SharedDocs/Bilder/EN/newsroom-en/hp-news-pm/spikevax-xbb-15.jpg?__blob=thumbnail&v=2'),
(5, 'Janssen', '8-12 weeks to the second', 500, 'https://upload.wikimedia.org/wikipedia/commons/5/58/Janssen_COVID-19_vaccine_%282021%29_F_%28cropped%29_2.jpg'),
(6, 'Hayat - Vax', '8-12 weeks to the second', 500, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSCVjRznWH6f8ooMUrsCCMrgZcZHVelKnDgRkt8MpsL_6362YS9GU0nnsB6BXhTDYD9crI&usqp=CAU'),
(7, 'Gam-COVID-Vac', '8-12 weeks to the second', 500, 'https://moh.gov.vn/documents/174521/987201/2.8+V%E1%BA%AFc+xin+1.jpg/6a452e44-f469-4942-a376-5909361b1dd3?t=1627910085598'),
(8, 'Abdala', '8-12 weeks to the second', 500, 'https://suckhoedoisong.qltns.mediacdn.vn/324455921873985536/2021/9/18/vaccine-abdala-16319297904032048435703.png');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `access_logs`
--
ALTER TABLE `access_logs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `Account`
--
ALTER TABLE `Account`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CID`);

--
-- Chỉ mục cho bảng `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`msid`);

--
-- Chỉ mục cho bảng `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`MID`),
  ADD KEY `VID` (`VID`,`CID`,`VSID`);

--
-- Chỉ mục cho bảng `vsession`
--
ALTER TABLE `vsession`
  ADD PRIMARY KEY (`VSID`);

--
-- Chỉ mục cho bảng `vtype`
--
ALTER TABLE `vtype`
  ADD PRIMARY KEY (`VID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `access_logs`
--
ALTER TABLE `access_logs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `Account`
--
ALTER TABLE `Account`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `schedule`
--
ALTER TABLE `schedule`
  MODIFY `MID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `vsession`
--
ALTER TABLE `vsession`
  MODIFY `VSID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `vtype`
--
ALTER TABLE `vtype`
  MODIFY `VID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
