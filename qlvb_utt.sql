-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 29, 2019 lúc 09:24 AM
-- Phiên bản máy phục vụ: 10.1.34-MariaDB
-- Phiên bản PHP: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlvb_utt`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_admin`
--

CREATE TABLE `db_admin` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(64) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `img` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `trash` tinyint(1) NOT NULL,
  `access` tinyint(4) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `db_admin`
--

INSERT INTO `db_admin` (`id`, `fullname`, `username`, `password`, `email`, `phone`, `img`, `created`, `trash`, `access`, `status`) VALUES
(1, 'Phùng Xuân Hải', 'madmin', '64F020910AEE24F1F4C8986946031818C4B00647', 'xuanhai6622@gmail.com', '0347136622', 'avata.jpg', '2018-11-01 00:00:01', 1, 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_congvanden`
--

CREATE TABLE `db_congvanden` (
  `id` int(11) NOT NULL,
  `cv_loaivanban` int(11) NOT NULL,
  `cv_no` varchar(50) NOT NULL,
  `cv_incomeno` varchar(50) NOT NULL,
  `cv_senddate` varchar(50) NOT NULL,
  `cv_receivedate` varchar(50) NOT NULL,
  `created` varchar(50) NOT NULL,
  `cv_signer` varchar(50) NOT NULL,
  `cv_summary` varchar(500) NOT NULL,
  `cv_access` tinyint(4) NOT NULL,
  `cv_status` tinyint(4) NOT NULL,
  `cv_fullcontents` varchar(200) NOT NULL,
  `cv_notes` varchar(255) NOT NULL,
  `cv_groupview` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `db_congvanden`
--

INSERT INTO `db_congvanden` (`id`, `cv_loaivanban`, `cv_no`, `cv_incomeno`, `cv_senddate`, `cv_receivedate`, `created`, `cv_signer`, `cv_summary`, `cv_access`, `cv_status`, `cv_fullcontents`, `cv_notes`, `cv_groupview`) VALUES
(21, 1, '01', '1201', '10-11-2018', '12-11-2018', '2018/11/20', 'Xuân Hải', 'Sau chiến thắng trước Malaysia, ĐT Việt Nam đang rất rộng cửa đi tiếp', 1, 1, 'IMG_0051.JPG', 'Việt nam vô địch ', ''),
(22, 2, '02', '1202', '13-11-2018', '14-11-2018', '2018/11/20', 'Xuân Hải', 'Cụ thể, nếu tiếp tục thắng Myanmar, thầy trò ông Park sẽ có 9 điểm, giật lấy ngôi đầu và vào bán kết sớm 1 vòng đấu', 1, 1, 'IMG_00511.JPG', 'Việt nam vô địch', ''),
(24, 3, '03', '1203', '15-11-2018', '17-11-2018', '2018/11/20', 'Đình Duy', 'Công Phượng (áo trắng) và đồng đội đã sẵn sàng sút tung lưới Myanmar để sớm có vé vào ', 1, 1, 'myanmar-vietnam1.jpg', 'Việt nam vô địch', ''),
(25, 5, '04', '1204', '13-11-2018', '20-11-2018', '2018/11/20', 'Minh Quang', 'Chiến thắng trước Malaysia có ý nghĩa cực kỳ quan trọng với ĐT Việt Nam', 1, 1, 'myanmar-vietnam11.jpg', 'Việt Nam vô địch', ''),
(26, 4, '05', '1205', '14-11-2018', '27-11-2018', '2018/11/20', 'Minh Quang', 'Ngoài việc giải mã được đối thủ khó chơi nhất như chính thừa nhận của HLV Park Hang Seo, ĐT Việt Nam cũng tiến một bước dài đến bán kết.', 1, 1, 'myanmar-vietnam12.jpg', 'Việt Nam vô địch', ''),
(27, 2, '06', '1206', '19-11-2018', '16-11-2018', '2018/11/20', 'Xuân Hải', 'Nhiều khả năng, vị chiến lược gia 59 tuổi này tiếp tục có những sự điều chỉnh trong đội hình để mang đến bất ngờ cho đội chủ nhà', 1, 1, 'myanmar-vietnam.jpg', 'Việt Nam vô địch', ''),
(28, 1, '07', '1207', '09-11-2018', '15-11-2018', '2018/11/20', 'Xuân Hải', 'Rất bất ngờ, cánh phóng viên được ghi hình thoải mái trong buổi tập cuối cùng của ĐT Myanmar trước trận \"đại chiến\" với ĐT Việt Nam.', 1, 1, 'myanmar-vietnam2.jpg', 'Việt Nam vô địch', ''),
(29, 4, '08', '1208', '01-11-2018', '02-11-2018', '2018/11/20', 'Đình Duy', 'Mọi thông tin của Myanmar trước trận gặp ĐT Việt Nam đều được giữ kín trong những ngày qua', 1, 1, 'myanmar-vietnam3.jpg', 'Việt Nam vô địch', ''),
(30, 5, '09', '1209', '03-11-2018', '19-11-2018', '2018/11/20', 'Minh Quang', 'Sau khi nhận được lệnh từ vị chiến lược gia người Đức, một nhân viên thuộc BTC tiến lại gần các phóng viên thông báo tin vui: “Buổi tập hôm nay mở.Các anh được tự do ghi hình thoải mái suốt quá trình tập luyện”', 1, 1, '', 'Việt Nam vô địch', ''),
(31, 2, '10', '1210', '02-11-2018', '03-11-2018', '2018/11/20', 'Đình Duy', 'Trận đấu giữa ĐT Myanmar và ĐT Việt Nam sẽ diễn ra vào lúc 18h30 tối nay (giờ Việt Nam)', 1, 1, 'myanmar-vietnam13.jpg', 'Việt Nam vô địch', ''),
(32, 4, '11', '1211', '16-11-2018', '23-11-2018', '2018/11/20', 'Xuân Hải', 'Để rộng đường vào bán kết, đội chủ nhà quyết tâm giành trọn 3 điểm, trong khi một kết quả hòa cũng là thuận lợi cho ĐT Việt Nam trên con đường tiến vào vòng đấu loại trực tiếp.\r\n', 1, 1, 'myanmar-vietnam14.jpg', 'Việt Nam vô địch', ''),
(33, 2, '86', '228', '', '', '2018/11/21', '', '', 1, 1, '', '', ''),
(35, 1, '1', '227', '08-11-2018', '22-11-2018', '2018/11/21', 'Xuân Hải', 'abc', 1, 1, 'FMUC43962.JPG', 'ko', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_congvandi`
--

CREATE TABLE `db_congvandi` (
  `id` int(11) NOT NULL,
  `cv_no` varchar(50) NOT NULL,
  `cv_loaivanban` int(11) NOT NULL,
  `cv_senddate` varchar(50) NOT NULL,
  `created` varchar(50) NOT NULL,
  `cv_summary` varchar(500) NOT NULL,
  `cv_signer` varchar(50) NOT NULL,
  `cv_status` tinyint(4) NOT NULL,
  `cv_access` tinyint(4) NOT NULL,
  `cv_fullcontents` varchar(200) NOT NULL,
  `cv_notes` varchar(255) NOT NULL,
  `cv_groupview` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `db_congvandi`
--

INSERT INTO `db_congvandi` (`id`, `cv_no`, `cv_loaivanban`, `cv_senddate`, `created`, `cv_summary`, `cv_signer`, `cv_status`, `cv_access`, `cv_fullcontents`, `cv_notes`, `cv_groupview`) VALUES
(3, '03', 2, '05-11-2018', '2018/11/15', 'Sân Thuwunna ở thủ đô Yangon có sức chứa 32.000 chỗ ngồi, đang được gấp rút chuẩn bị cho trận đấu quan trọng giữa Myanmar và Việt Nam vào tối 20/11.', 'Minh Quang', 1, 1, '', '', ' 2'),
(4, '02', 1, '15-11-2018', '2018/11/18', 'Tôi không biết, mặt cỏ sân có đẹp không nữa. Ngày đó, anh đến đây rồi sẽ biết”, cô gái xinh đẹp ngồi cầm từng nắm cỏ trước cầu môn sân Thuwunna nói với giọng nửa đùa nửa thật.', 'Xuân Hải', 1, 1, '', '', ' 1'),
(5, '01', 2, '09-11-2018', '2018/11/18', 'Mặt sân là điều mà HLV Park Hang Seo rất quan tâm bởi nó ảnh hưởng đối lối chơi của ĐT Việt Nam. Một ví dụ, trong trận ra quân với Lào, các học trò của ông Park đã gặp rất nhiều khó khăn khi triển khai lối chơi bóng ngắn, nhỏ.  \r\n', 'Minh Quang', 1, 1, '', '', ' 3');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_donvi`
--

CREATE TABLE `db_donvi` (
  `id` int(4) NOT NULL,
  `tendonvi` varchar(50) NOT NULL,
  `status` tinyint(2) NOT NULL,
  `access` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `db_donvi`
--

INSERT INTO `db_donvi` (`id`, `tendonvi`, `status`, `access`) VALUES
(1, 'Hành chính - Tổ chức', 1, 1),
(2, 'Hiệu Trưởng', 1, 1),
(3, 'Tài chính - Kế toán', 1, 1),
(7, 'Hanh Chinh 2', 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_loaivanban`
--

CREATE TABLE `db_loaivanban` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `access` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `db_loaivanban`
--

INSERT INTO `db_loaivanban` (`id`, `name`, `access`, `status`) VALUES
(1, 'Quyết định', 1, 1),
(2, 'Công văn', 1, 1),
(3, 'Thông báo', 1, 1),
(4, 'Văn bản nội bộ', 1, 1),
(5, 'Báo cáo', 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_thongbao`
--

CREATE TABLE `db_thongbao` (
  `id` int(11) NOT NULL,
  `contents` varchar(255) NOT NULL,
  `access` int(2) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `db_thongbao`
--

INSERT INTO `db_thongbao` (`id`, `contents`, `access`, `status`) VALUES
(2, '<p>Xin Chào-Phùng Xuân Hải</p>', 1, 1),
(3, '<p>thong bao moi</p>\r\n', 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_user`
--

CREATE TABLE `db_user` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(64) NOT NULL,
  `donvi_id` int(2) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `img` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `trash` tinyint(1) NOT NULL DEFAULT '1',
  `access` tinyint(4) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `db_user`
--

INSERT INTO `db_user` (`id`, `fullname`, `username`, `password`, `donvi_id`, `email`, `gender`, `phone`, `img`, `created`, `trash`, `access`, `status`) VALUES
(1, 'Hành chính Tổ chức', 'hanhchinh', '64f020910aee24f1f4c8986946031818c4b00647', 1, 'xuanhai6622@gmail.com', 1, '0347136622', 'avata.jpg', '2017-05-18 07:30:00', 1, 1, 1),
(2, 'Tài chính - Kế toán', 'taichinhketoan', '64f020910aee24f1f4c8986946031818c4b00647', 3, 'xuanhai6622@gmail.com', 1, '0347136622', 'avata.jpg', '2017-05-18 07:30:00', 1, 1, 1),
(3, 'Ban Giám đốc', 'bangiamdoc', '64f020910aee24f1f4c8986946031818c4b00647', 11, 'xuanhai6622@gmail.com', 1, '0347136622', 'avata.jpg', '2017-05-18 07:30:00', 1, 1, 1),
(23, 'GUEST', 'guest1', '64f020910aee24f1f4c8986946031818c4b00647', 0, 'xuanhai6622@gmail.com', 1, '0347136622', 'avata.jpg', '2017-06-21 09:13:27', 1, 1, 1),
(25, 'phùng xuân hải', 'phhunghai', '64f020910aee24f1f4c8986946031818c4b00647', 7, 'madmin', 1, '08235465', '1', '2018-11-21 10:11:06', 1, 1, 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `db_admin`
--
ALTER TABLE `db_admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `db_congvanden`
--
ALTER TABLE `db_congvanden`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `db_congvandi`
--
ALTER TABLE `db_congvandi`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `db_donvi`
--
ALTER TABLE `db_donvi`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `db_loaivanban`
--
ALTER TABLE `db_loaivanban`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `db_thongbao`
--
ALTER TABLE `db_thongbao`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `db_user`
--
ALTER TABLE `db_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `db_admin`
--
ALTER TABLE `db_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `db_congvanden`
--
ALTER TABLE `db_congvanden`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `db_congvandi`
--
ALTER TABLE `db_congvandi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `db_donvi`
--
ALTER TABLE `db_donvi`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `db_loaivanban`
--
ALTER TABLE `db_loaivanban`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `db_thongbao`
--
ALTER TABLE `db_thongbao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `db_user`
--
ALTER TABLE `db_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
