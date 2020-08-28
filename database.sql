-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 28, 2020 lúc 01:27 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `abc`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiettintuc`
--

CREATE TABLE `chitiettintuc` (
  `machitiet` int(5) NOT NULL,
  `ngaydang` varchar(100) NOT NULL,
  `tacgia` varchar(100) CHARACTER SET utf32 COLLATE utf32_vietnamese_ci NOT NULL,
  `matintuc` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `chitiettintuc`
--

INSERT INTO `chitiettintuc` (`machitiet`, `ngaydang`, `tacgia`, `matintuc`) VALUES
(1, '20/09/2020', 'Hoàn6', 1),
(3, '20/08/2020', 'Hoàn2', 2),
(5, '20/07/2020', 'Hoàn5', 4),
(6, '20/06/2020', 'Hoàn4', 3),
(9, '20/05/2020', 'Hoàn3', 6),
(10, '20/04/2020', 'Hoàn2', 7),
(11, '20/03/2020', 'HOàn1', 8),
(20, '20/02/2020', 'HOàn', 9),
(21, '20/02/2020', 'hoan9tuoi', 10),
(23, '20/02/2020', 'hoan9tuoi', 13);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chuyenmuc`
--

CREATE TABLE `chuyenmuc` (
  `machuyenmuc` int(4) NOT NULL,
  `tenchuyenmuc` varchar(50) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `chuyenmuc`
--

INSERT INTO `chuyenmuc` (`machuyenmuc`, `tenchuyenmuc`, `user_id`) VALUES
(1, 'Thể thao', 1),
(2, 'Sức khỏe', 2),
(3, 'Tài chính', 3),
(4, 'Sản phẩm công nghệ', 4),
(6, 'Du lịch', 10),
(7, 'Xe', 12);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc`
--

CREATE TABLE `tintuc` (
  `matintuc` int(5) NOT NULL,
  `title` varchar(100) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `mota` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `tag` varchar(20) DEFAULT NULL,
  `image` varchar(150) DEFAULT NULL,
  `machuyenmuc` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `tintuc`
--

INSERT INTO `tintuc` (`matintuc`, `title`, `mota`, `tag`, `image`, `machuyenmuc`) VALUES
(1, 'Hp Elitebook 2560p 15 inch Core i5 a', 'Thiết kế chắc chắn, khỏe\r\nBên ngoài Aspire E1 572 được thiết kế bằng chất liệu nhựa, bề mặt khá mềm mại, được mài hơi nhám, cảm giác tay sờ rất mát và dễ chịu. Màu sắc của máy khá đồng bộ kể cả bàn ph', 'lap', 'aces2.jpg', 4),
(2, 'Pogba nhiễm nCoV', 'Tiền vệ Paul Pogba phải rút khỏi đợt tập trung của đội tuyển Pháp do dương tính với nCoV.\r\nThông tin được HLV tuyển Pháp Didier Deschamps tiết lộ hôm nay 27/8, khi công bố đội hình cho hai trận gặp Thụy Điển (5/9) và Croatia (8/9) ở giải giao hữu dành cho các đội tuyển châu Âu Nations League.\r\nDeschamps đã gọi bổ sung tiền vệ 17 tuổi Eduardo Camavinga, người đang chơi cho CLB Rennes, để thay thế Pogba.', 'covid, ', 'thethao.jpg', 1),
(3, 'bãi biển đẹp cho kỳ nghỉ 2/9', 'Hòn đảo từ lâu được mệnh danh là \"Maldives Việt Nam\" với các bãi biển trong xanh nhìn thấu đáy. Bên cạnh cảnh quan hoang sơ, trên đảo có nhiều dịch vụ du lịch hấp dẫn thích hợp cho mọi lứa tuổi như trò chơi nhóm, các điểm chụp ảnh \"sống ảo\", chế biến tôm hùm tại chỗ... với giá phải chăng... Du khách có thể khám phá đảo Bình Hưng trong ngày hoặc ở lại qua đêm.', 'dichoi', 'dulich.jpg', 6),
(4, 'Hitzfeld Bayern có thể thống trị như thập kỷ 1970', 'Thiết kế chắc chắn, khỏe\r\nBên ngoài Aspire E1 572 được thiết kế bằng chất liệu nhựa, bề mặt khá mềm mại, được mài hơi nhám, cảm giác tay sờ rất mát và dễ chịu. Màu sắc của máy khá đồng bộ kể cả bàn ph', 'Hitzfeld', 'thethao1.jpg', 1),
(6, 'Vietlott dừng hoạt động vì sự cố kỹ thuật', 'Cuối ngày 27/8, Công ty Xổ số Điện toán Việt Nam (Vietlott) phát đi thông cáo cho biết, hệ thống kinh doanh xổ số tự chọn của doanh nghiệp này phải dừng hoạt động do sự cố kỹ thuật. Vietlott đang tích cực xử lý để sớm đưa hệ thống hoạt động trở lại, đảm bảo quyền lợi của khách hàng.', 'Vietlott', 'taichinh.jpg', 3),
(7, 'nCoV tồn tại hơn ba tuần trên thực phẩm đông lạnh', 'Các nhà nghiên cứu từ Singapore và Ireland đã công bố kết quả nghiên cứu này trên tạp chí bioRxiv, ngày 18/8.\r\nNhóm nghiên cứu cho nCoV xâm nhập vào lát cá hồi, thịt gà và thịt lợn mua ở siêu thị tại Singapore. Sau đó, họ lưu các mẫu ở ba nhiệt độ khác nhau (4oC, -20oC, -80oC) và kiểm tra mẫu ở các mốc thời gian (1, 2, 5, 7, 14 và 21 ngày sau khi cấy virus). Kết quả thực phẩm vẫn bị nhiễm virus sau 3 tuần ở cả 3 mức nhiệt độ.\r\n', 'covid', 'suckhoe.jpg', 2),
(8, 'Hp Elitebook 2560p 15 inch Core i5', 'Thiết kế chắc chắn, khỏe Bên ngoài Aspire E1 572 được thiết kế bằng chất liệu nhựa, bề mặt khá mềm mại, được mài hơi nhám, cảm giác tay sờ rất mát và dễ chịu. ', 'lap', 'hp3.jpg', 4),
(9, 'Hp Camera 1000000000000', 'hiết kế chắc chắn, khỏe Bên ngoài Aspire E1 572 được thiết kế bằng chất liệu nhựa, bề mặt khá mềm mại, được mài hơi nhám, cảm giác tay sờ rất mát và dễ chịu.', 'lap', 'hp4.jpg', 4),
(10, 'BMW i8 2020 vừa ra mắt có gì mới? Giá bao nhiêu?', 'Cùng ngắm lại chiếc siêu xe BMW i8 màu trắng độc nhất tại Hà Nội đang rao bán giá hơn 3 tỷ đồng. Đây là chiếc xe đã từng rất được dân tình quan tâm.\r\nBMW I8 tại Việt nam có khoảng 15 chiếc, phân bổ tại các thành phố lớn từ Bắc vào Nam.', 'bmwi8', 'xe.jpg', 7),
(13, 'xe i8 hot hay không', 'MW i8 là mẫu siêu xe thể thao hybrid sạc điện ngoài (plug-in hybrid sports car) được phát triển bởi hãng xe BMW, Đức. Phiên bản sản xuất của BMW i8 đã được ra mắt lần đầu tại Triển lãm ô tô Frankfurt 2013 và bán ra chính thức từ tháng 6/2014 tại Đức. Đến nay BMW i8 vẫn đang ở thế hệ đầu tiên', 'i8', 'xe1.jpg', 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `Id_User` int(5) NOT NULL,
  `username` varchar(150) NOT NULL,
  `Email` varchar(150) NOT NULL,
  `matkhau` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`Id_User`, `username`, `Email`, `matkhau`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitiettintuc`
--
ALTER TABLE `chitiettintuc`
  ADD PRIMARY KEY (`machitiet`),
  ADD KEY `matintuc` (`matintuc`) USING BTREE,
  ADD KEY `matintuc_2` (`matintuc`);

--
-- Chỉ mục cho bảng `chuyenmuc`
--
ALTER TABLE `chuyenmuc`
  ADD PRIMARY KEY (`machuyenmuc`);

--
-- Chỉ mục cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`matintuc`),
  ADD KEY `machuyenmuc` (`machuyenmuc`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id_User`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chitiettintuc`
--
ALTER TABLE `chitiettintuc`
  MODIFY `machitiet` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `chuyenmuc`
--
ALTER TABLE `chuyenmuc`
  MODIFY `machuyenmuc` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `matintuc` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `Id_User` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitiettintuc`
--
ALTER TABLE `chitiettintuc`
  ADD CONSTRAINT `chitiettintuc_ibfk_1` FOREIGN KEY (`matintuc`) REFERENCES `tintuc` (`matintuc`);

--
-- Các ràng buộc cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD CONSTRAINT `tintuc_ibfk_1` FOREIGN KEY (`machuyenmuc`) REFERENCES `chuyenmuc` (`machuyenmuc`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
