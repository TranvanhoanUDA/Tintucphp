-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 13, 2020 lúc 12:52 PM
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
-- Cấu trúc bảng cho bảng `ads`
--

CREATE TABLE `ads` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `link` text NOT NULL,
  `image` text NOT NULL,
  `start_at` int(11) NOT NULL,
  `end_at` int(11) NOT NULL,
  `page` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `ads`
--

INSERT INTO `ads` (`id`, `name`, `link`, `image`, `start_at`, `end_at`, `page`, `status`, `created`) VALUES
(1, 'Home Banner', 'https://facebook.com', '906f95745cb93616554aad14f43f1848134dac48_3af6ea62589c83af3304b1d837b644cf42811a25.jpg', 1473890400, 1476309600, '/', 'enabled', 1473717930),
(2, 'Another Ad', 'https://google.com', '6bb061c7980c809f8a94c9768f1e2d576a129288_0f401cbf10f2eb36094391a36fd771e9c0ee311d.jpg', 1475272800, 1475791200, '/', 'enabled', 1475716731);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `name`, `status`) VALUES
(6, 0, 'Sports', 'enabled'),
(7, 0, 'Politics', 'enabled'),
(8, 0, 'Fashion', 'enabled');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `created` datetime NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `post_id`, `comment`, `created`, `status`) VALUES
(31, 1, 9, 'fsdfsdfsdfdsf', '2020-09-11 00:00:00', 'enabled'),
(33, 1, 9, 'hello', '0000-00-00 00:00:00', 'enabled'),
(34, 1, 9, 'dhfdvsgfdsvfgdsvfgsdf', '2020-09-11 00:00:00', 'enabled'),
(35, 1, 9, 'ádsadâd', '2020-09-11 17:28:11', 'enabled'),
(36, 1, 9, 'dfgfdgdfgdfgdgdf', '2020-09-11 17:29:00', 'enabled'),
(37, 1, 9, 'Anh làm nó hiện ra ngày h rồi đấy còn cái format theo kiểu dd/mm/yyyy thì em search mang coi thử hoặc để như thế này cũng đc không ai nói gì đâu', '2020-09-11 17:31:52', 'enabled'),
(38, 1, 9, 'Hello', '2020-09-11 12:34:59', 'enabled'),
(39, 1, 2, 'ấy đẹp thế', '2020-09-12 05:19:15', 'enabled');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(96) NOT NULL,
  `phone` varchar(40) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `reply` text NOT NULL,
  `replied_by` int(11) NOT NULL,
  `replied_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `online_users`
--

CREATE TABLE `online_users` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `tags` text NOT NULL,
  `related_posts` text NOT NULL,
  `views` int(11) NOT NULL,
  `created` int(11) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `user_id`, `title`, `details`, `image`, `tags`, `related_posts`, `views`, `created`, `status`) VALUES
(2, 6, 1, 'á a', '&lt;p&gt;Nếu thấy ảnh đẹp th&amp;igrave; commet c&amp;aacute;i để tui thấy c&amp;aacute;i post n&amp;agrave;y ổn đi, thấy đẹp th&amp;igrave; commet... kh&amp;ocirc;ng đẹp cũng commet nhen&lt;/p&gt;', 'ae3e9c3bddb218bbc0075f9ea10b0022843c990e_8cb52b1ab534fc8b1ff0e5ae95a2e26e65da7f5c.jpg', 'one,more,post', '', 0, 1473715692, 'enabled'),
(3, 8, 1, 'Another Post', '&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.&lt;/p&gt;\r\n', '130afd6e1cca3b57fb3e1ebbaa5f188aaf509dac_70179df8b93a775a420008f474858d11352f989e.jpg', 'another,post', '', 0, 1473715714, 'enabled'),
(4, 7, 1, 'Economics In The world', '&lt;p&gt;&lt;strong&gt;Lorem Ipsum&lt;/strong&gt;&amp;nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&amp;#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;/p&gt;\r\n', 'b42efa1a28d7b02036baba9d1b94f37dfc096f3a_e88bbca510ec4a49c8355c005ccc0ea97098fe60.jpg', 'test,post', '', 0, 1475716328, 'enabled'),
(5, 7, 1, 'Some Text', '&lt;p&gt;dfafadsfasd&lt;/p&gt;', '2b6ac153099bcca98d9667c5bc8ed7039cab7872_b40f3b6df62406ff1d2524f4186a39d86eb6910c.jpg', 'fdsaf', '', 0, 1476166134, 'enabled'),
(6, 7, 1, 'Some Text 2', '&lt;p&gt;Some Text 2&lt;/p&gt;', 'f4521f164c752ac2e57821d949124f0d5035e325_efef6d0c9738c065d5dbd0d3809ef38a93012bfd.jpg', 'text', '3', 0, 1476166139, 'enabled'),
(7, 7, 1, 'Some Text 3', '&lt;p&gt;dfafadsfasd&lt;/p&gt;', '6925d9ea6c9e72474483f5839ee92ec3da2040de_9c82a446d4a751514764cca2df7fb8ae78e4fea1.jpg', 'fdsaf', '', 0, 1476166196, 'enabled'),
(8, 7, 1, 'Some Text 4', '&lt;p&gt;dfafadsfasd&lt;/p&gt;', '2c6243d90845c1380f7da9196298287bac19b584_e79099c86a91b96a77aa57eb1998b2739f35bcab.jpg', 'fdsaf', '', 0, 1476166207, 'enabled'),
(9, 7, 1, 'Some Text 5', '&lt;p&gt;Some Text 5&lt;/p&gt;', '96e6b118fd699d09f1522acb9dbc13ee7f53724a_70b963602fd29119694aa36597786f099ea16cd3.jpg', 'Text', '2,3', 0, 1476166294, 'enabled'),
(10, 7, 1, 'Some Text 6', '&lt;p&gt;Some Text 6&lt;/p&gt;', '81359b55cc908f6baa302d32eb1a97f17cf1c342_6ad99fbd5bc25acf59bce8f0a931dc45ebdcf609.jpg', 'text', '2,4', 0, 1476166574, 'enabled'),
(11, 8, 1, 'test cái title', '&lt;p&gt;TP HCMCựu Ph&amp;oacute; chủ tịch Nguyễn Th&amp;agrave;nh T&amp;agrave;i bị xét xử từ ngày 16/9, v&amp;ecirc;̀ cáo bu&amp;ocirc;̣c giao 5.000 m2 đ&amp;acirc;́t &amp;quot;vàng&amp;quot; tr&amp;aacute;i luật, g&amp;acirc;y thiệt hại hơn 1.927 tỷ đồng.&lt;/p&gt;\r\n\r\n&lt;p&gt;Phi&amp;ecirc;n t&amp;ograve;a sẽ k&amp;eacute;o d&amp;agrave;i đến ng&amp;agrave;y 21/9. HĐXX gồm chủ tọa Nguyễn Thị Thanh B&amp;igrave;nh, thẩm ph&amp;aacute;n Đo&amp;agrave;n Thị Hương Giang v&amp;agrave; 3 hội thẩm nh&amp;acirc;n d&amp;acirc;n. Đại diện VKS thực h&amp;agrave;nh quyền c&amp;ocirc;ng tố l&amp;agrave; kiểm s&amp;aacute;t vi&amp;ecirc;n Nguyễn Đức Bằng, Nguyễn Ngọc Ước, Ng&amp;ocirc; Phạm Việt, Trương Bảo Ngọc v&amp;agrave; Trần Thị Li&amp;ecirc;n.&lt;/p&gt;\r\n\r\n&lt;p&gt;Cựu Ph&amp;oacute; chủ tịch thường trực UBND TP HCM Nguyễn Th&amp;agrave;nh T&amp;agrave;i, 68 tuổi, bị x&amp;eacute;t xử về tội&amp;nbsp;&lt;em&gt;Vi phạm quy định về quản l&amp;yacute;, sử dụng t&amp;agrave;i sản Nh&amp;agrave; nước g&amp;acirc;y thất tho&amp;aacute;t, l&amp;atilde;ng ph&amp;iacute;&lt;/em&gt;&amp;nbsp;theo khoản 3 Điều 219 BLHS 2015, khung h&amp;igrave;nh phạt 10-20 năm t&amp;ugrave;.&lt;/p&gt;\r\n\r\n&lt;p&gt;Bị c&amp;aacute;o buộc vai tr&amp;ograve; đồng phạm l&amp;agrave; &amp;ocirc;ng&amp;nbsp;&lt;a href=&quot;https://vnexpress.net/cuu-giam-doc-so-tai-nguyen-moi-truong-tp-hcm-keu-oan-4033422.html&quot; rel=&quot;dofollow&quot;&gt;Đ&amp;agrave;o Anh Kiệt&amp;nbsp;&lt;/a&gt;(nguy&amp;ecirc;n Gi&amp;aacute;m đốc Sở T&amp;agrave;i nguy&amp;ecirc;n v&amp;agrave; M&amp;ocirc;i trường),&amp;nbsp;&lt;a href=&quot;https://vnexpress.net/chu-tich-hdqt-cong-ty-lavenue-bi-bat-3994485.html&quot; rel=&quot;dofollow&quot;&gt;L&amp;ecirc; Thị Thanh Th&amp;uacute;y&lt;/a&gt;&amp;nbsp;(41 tuổi, Chủ tịch C&amp;ocirc;ng ty Hoa Th&amp;aacute;ng Năm v&amp;agrave; C&amp;ocirc;ng ty CP Đầu tư Lavenue), Nguyễn Ho&amp;agrave;i Nam (cựu B&amp;iacute; thư quận 2) v&amp;agrave; Trương Văn &amp;Uacute;t (cựu Ph&amp;oacute; ph&amp;ograve;ng Quản l&amp;yacute; đất thuộc Sở T&amp;agrave;i Nguy&amp;ecirc;n v&amp;agrave; M&amp;ocirc;i trường).&lt;/p&gt;\r\n\r\n&lt;p&gt;Li&amp;ecirc;n quan đến vụ &amp;aacute;n, Nguyễn Thị Thu Thủy (61 tuổi, nguy&amp;ecirc;n Gi&amp;aacute;m đốc C&amp;ocirc;ng ty Quản l&amp;yacute; kinh doanh nh&amp;agrave; TP HCM) đang bị truy n&amp;atilde;, cơ quan điều tra t&amp;aacute;ch ra xử l&amp;yacute; sau.&lt;/p&gt;\r\n\r\n&lt;p&gt;C&amp;oacute; hơn 10 luật sư b&amp;agrave;o chữa cho c&amp;aacute;c bị c&amp;aacute;o. Trong đ&amp;oacute;, &amp;ocirc;ng T&amp;agrave;i được luật sư Trương Trọng Nghĩa v&amp;agrave; Ng&amp;ocirc; Minh Hưng (Đo&amp;agrave;n luật sư TP HCM) bảo vệ; &amp;ocirc;ng Kiệt c&amp;oacute; luật sư Nguyễn Th&amp;agrave;nh C&amp;ocirc;ng (Đo&amp;agrave;n luật sư TP HCM)...&lt;/p&gt;\r\n\r\n&lt;p&gt;Qu&amp;aacute; tr&amp;igrave;nh điều tra, truy tố, L&amp;ecirc; Thị Thanh Th&amp;uacute;y c&amp;oacute; 4 luật sư. Tuy nhi&amp;ecirc;n, trước phi&amp;ecirc;n xử b&amp;agrave; n&amp;agrave;y từ chối 3 người, hiện chỉ c&amp;ograve;n luật sư Nguyễn Hữu Thế Trạch b&amp;agrave;o chữa. &amp;quot;Th&amp;uacute;y k&amp;ecirc;u oan về nhiều nội dung trong c&amp;aacute;o trạng. C&amp;ocirc; ấy tiều tụy, c&amp;oacute; biểu hiện sa s&amp;uacute;t tinh thần, sức khỏe&amp;quot;, luật sư Trạch cho biết.&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;img alt=&quot;Ông Tài và Thúy lúc bị bắt. Ảnh: Bộ Công an.&quot; src=&quot;https://i1-vnexpress.vnecdn.net/2020/09/11/Nguyen-Thanh-Tai-1-2990-159617-5418-1968-1599801701.jpg?w=680&amp;amp;h=0&amp;amp;q=100&amp;amp;dpr=1&amp;amp;fit=crop&amp;amp;s=5FdmZ6WdvcTUpSQrj3b-Qg&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;Ocirc;ng T&amp;agrave;i v&amp;agrave; Th&amp;uacute;y l&amp;uacute;c bị bắt. Ảnh:&amp;nbsp;&lt;em&gt;Bộ C&amp;ocirc;ng an.&lt;/em&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;Để phục vụ việc x&amp;eacute;t xử, t&amp;ograve;a triệu tập 11 c&amp;aacute; nh&amp;acirc;n, trong đ&amp;oacute; c&amp;oacute; một số bị can đang bị điều tra trong vụ &amp;aacute;n kh&amp;aacute;c; h&amp;agrave;ng loạt đơn vị, ph&amp;aacute;p nh&amp;acirc;n với tư c&amp;aacute;ch&amp;nbsp;&lt;em&gt;người c&amp;oacute; quyền lợi v&amp;agrave; nghĩa vụ li&amp;ecirc;n quan&lt;/em&gt;&amp;nbsp;gồm: UBND TP HCM; Sở T&amp;agrave;i nguy&amp;ecirc;n v&amp;agrave; M&amp;ocirc;i trường; Sở T&amp;agrave;i ch&amp;iacute;nh; Ban chỉ đạo sắp xếp, xử l&amp;yacute; nh&amp;agrave; đất thuộc sở hữu Nh&amp;agrave; nước tại TP HCM (Ban chỉ đạo 09); C&amp;ocirc;ng ty quản l&amp;yacute; Kinh doanh nh&amp;agrave; TP HCM (QLKDN); C&amp;ocirc;ng ty TNHH MTV Hoa Th&amp;aacute;ng Năm; C&amp;ocirc;ng ty cổ phần đầu tư Lavenue...&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Theo c&amp;aacute;o trạng của VKSND Tối cao&lt;/strong&gt;, năm 2007, khu đất số 8-12 L&amp;ecirc; Duẩn (quận 1) do C&amp;ocirc;ng ty QLKDN quản l&amp;yacute;, cho 4 c&amp;ocirc;ng ty thuộc Bộ C&amp;ocirc;ng thương thu&amp;ecirc; l&amp;agrave;m trụ sở. Khu đất &amp;quot;v&amp;agrave;ng&amp;quot; n&amp;agrave;y được Ban chỉ đạo 09 - do Chủ tịch UBND TP HCM L&amp;ecirc; Ho&amp;agrave;ng Qu&amp;acirc;n l&amp;agrave;m Trưởng ban, đề xuất giao C&amp;ocirc;ng ty QLKDN lập thủ tục b&amp;aacute;n đấu gi&amp;aacute; v&amp;agrave; chuyển nhượng quyền sử dụng đất để thực hiện dự &amp;aacute;n. Y&amp;ecirc;u cầu đưa ra l&amp;agrave; &amp;quot;nh&amp;agrave; đầu tư thực hiện dự &amp;aacute;n phải c&amp;oacute; năng lực, kinh nghiệm trong lĩnh vực kh&amp;aacute;ch sạn&amp;quot;.&lt;/p&gt;\r\n\r\n&lt;p&gt;C&amp;ocirc;ng ty QLKDN được UBND TP HCM chấp thuận cho l&amp;agrave;m chủ đầu tư, g&amp;oacute;p 50% vốn dự &amp;aacute;n c&amp;ograve;n lại do 4 c&amp;ocirc;ng ty thuộc Bộ C&amp;ocirc;ng thương g&amp;oacute;p (chia đều mỗi c&amp;ocirc;ng ty l&amp;agrave; 12,5%). Tuy nhi&amp;ecirc;n, ngay sau khi được UBND th&amp;agrave;nh phố cho tham gia cổ phần, c&amp;aacute;c c&amp;ocirc;ng ty của Bộ C&amp;ocirc;ng thương&amp;nbsp;&lt;a href=&quot;https://vnexpress.net/bon-cong-ty-cua-bo-cong-thuong-bo-tui-200-ty-tu-lo-dat-vang-sai-gon-3754936.html&quot; rel=&quot;dofollow&quot;&gt;sang nhượng quyền đầu tư ph&amp;aacute;t triển dự &amp;aacute;n&lt;/a&gt;&amp;nbsp;cho một c&amp;ocirc;ng ty tư nh&amp;acirc;n để kiếm lời.&lt;/p&gt;\r\n\r\n&lt;p&gt;L&amp;ecirc; Thị Thanh Th&amp;uacute;y được x&amp;aacute;c định l&amp;agrave; lợi dụng mối quan hệ t&amp;igrave;nh cảm với &amp;ocirc;ng T&amp;agrave;i, gửi văn bản cho C&amp;ocirc;ng ty QLKDN, tự nhận Hoa Th&amp;aacute;ng Năm l&amp;agrave; c&amp;ocirc;ng ty &amp;quot;c&amp;oacute; kinh nghiệm trong lĩnh vực bất động sản, nh&amp;agrave; h&amp;agrave;ng, kh&amp;aacute;ch sạn, c&amp;oacute; năng lực t&amp;agrave;i ch&amp;iacute;nh&amp;quot; để t&amp;aacute;c động xin tham gia dự &amp;aacute;n kh&amp;ocirc;ng phải cạnh tranh, kh&amp;ocirc;ng đấu gi&amp;aacute; quyền sử dụng đất hay đấu thầu dự &amp;aacute;n. Thực tế, C&amp;ocirc;ng ty Hoa Th&amp;aacute;ng Năm kh&amp;ocirc;ng c&amp;oacute; năng lực t&amp;agrave;i ch&amp;iacute;nh v&amp;agrave; kinh nghiệm, chưa tham gia bất cứ dự &amp;aacute;n n&amp;agrave;o.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;Ocirc;ng T&amp;agrave;i gọi điện cho b&amp;agrave; Nguyễn Thị Thu Thủy, y&amp;ecirc;u cầu tạo điều kiện cho c&amp;ocirc;ng ty của Th&amp;uacute;y. Ng&amp;agrave;y 23/7/2010, b&amp;agrave; Thủy đề xuất th&amp;agrave;nh lập ph&amp;aacute;p nh&amp;acirc;n mới l&amp;agrave; C&amp;ocirc;ng ty Cổ phần đầu tư Lavenue, đồng thời kiến nghị cho C&amp;ocirc;ng ty TNHH Một th&amp;agrave;nh vi&amp;ecirc;n Hoa Th&amp;aacute;ng Năm hợp t&amp;aacute;c đầu tư 30% vốn (trong tỷ lệ g&amp;oacute;p vốn 50% của C&amp;ocirc;ng ty QLKDN) c&amp;ugrave;ng thực hiện dự &amp;aacute;n.&lt;/p&gt;\r\n\r\n&lt;p&gt;Từ đề xuất của C&amp;ocirc;ng ty QLKDN, th&amp;aacute;ng 8/2010, &amp;ocirc;ng T&amp;agrave;i tổ chức họp, chấp thuận cho c&amp;ocirc;ng ty của Th&amp;uacute;y được thực hiện dự &amp;aacute;n kh&amp;aacute;ch sạn ti&amp;ecirc;u chuẩn 5 sao v&amp;agrave; một phần trung t&amp;acirc;m thương mại. Đồng thời, Ph&amp;oacute; chủ tịch th&amp;agrave;nh phố cũng c&amp;oacute; nhiều văn bản chỉ đạo c&amp;aacute;c sở ng&amp;agrave;nh ho&amp;agrave;n tất thủ tục cho c&amp;ocirc;ng ty n&amp;agrave;y được giao v&amp;agrave; thu&amp;ecirc; đất.&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;img alt=&quot;Khu đất vàng 8-12 Lê Duẩn hiện đang dùng làm bãi giữ xe. Ảnh: Như Quỳnh.&quot; src=&quot;https://i1-vnexpress.vnecdn.net/2020/09/11/Dat-vang-1137-1599801701.jpg?w=680&amp;amp;h=0&amp;amp;q=100&amp;amp;dpr=1&amp;amp;fit=crop&amp;amp;s=xpVLEeoH5V2qa5Ccu-0Ocw&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;Khu đất v&amp;agrave;ng 8-12 L&amp;ecirc; Duẩn hiện đang d&amp;ugrave;ng l&amp;agrave;m b&amp;atilde;i giữ xe. Ảnh:&amp;nbsp;&lt;em&gt;Như Quỳnh&lt;/em&gt;.&lt;/p&gt;\r\n\r\n&lt;p&gt;Th&amp;aacute;ng 6/2011, &amp;ocirc;ng T&amp;agrave;i k&amp;yacute; quyết định cho C&amp;ocirc;ng ty Lavenue sử dụng to&amp;agrave;n bộ khu đất x&amp;acirc;y kh&amp;aacute;ch sạn cao cấp, thương mại dịch vụ, căn hộ cho thu&amp;ecirc; với thời hạn sử dụng đất l&amp;agrave; 50 năm. H&amp;igrave;nh thức sử dụng l&amp;agrave; Nh&amp;agrave; nước giao đất c&amp;oacute; thu tiền sử dụng tại số 8 L&amp;ecirc; Duẩn v&amp;agrave; cho thu&amp;ecirc; h&amp;agrave;ng năm với khu đất số 12 L&amp;ecirc; Duẩn. Tổng nghĩa vụ t&amp;agrave;i ch&amp;iacute;nh c&amp;ocirc;ng ty n&amp;agrave;y phải nộp ng&amp;acirc;n s&amp;aacute;ch l&amp;agrave; hơn 647 tỷ đồng bao gồm cả thuế gi&amp;aacute; trị gia tăng v&amp;agrave; tiền thu&amp;ecirc; theo đơn gi&amp;aacute; thị trường.&lt;/p&gt;\r\n\r\n&lt;p&gt;Cơ quan c&amp;ocirc;ng tố x&amp;aacute;c định, việc &amp;ocirc;ng T&amp;agrave;i chấp thuận &amp;aacute;p dụng hai h&amp;igrave;nh thức giao đất v&amp;agrave; cho thu&amp;ecirc; đất đối với c&amp;ugrave;ng một dự &amp;aacute;n, cũng như chấp thuận cho C&amp;ocirc;ng ty Lavenue thanh l&amp;yacute; nh&amp;agrave; số 12 L&amp;ecirc; Duẩn m&amp;agrave; kh&amp;ocirc;ng giao cơ quan chức năng thẩm định gi&amp;aacute; trị c&amp;ograve;n lại l&amp;agrave; tr&amp;aacute;i quy định.&lt;/p&gt;\r\n\r\n&lt;p&gt;Từ sự chỉ đạo của &amp;ocirc;ng T&amp;agrave;i, c&amp;aacute;c bị can Kiệt, Nam, &amp;Uacute;t d&amp;ugrave; biết hồ sơ dự &amp;aacute;n chưa đầy đủ, chưa được ph&amp;ecirc; duyệt, chưa thẩm định... nhưng vẫn đề xuất k&amp;yacute; c&amp;aacute;c quyết định vi phạm ph&amp;aacute;p luật dẫn đến khu đất &amp;quot;v&amp;agrave;ng&amp;quot; bị chuyển nhượng sang c&amp;ocirc;ng ty của Th&amp;uacute;y.&lt;/p&gt;\r\n\r\n&lt;p&gt;Nh&amp;agrave; chức tr&amp;aacute;ch x&amp;aacute;c định h&amp;agrave;nh vi sai phạm của &amp;ocirc;ng T&amp;agrave;i l&amp;agrave; &amp;quot;c&amp;oacute; t&amp;iacute;nh hệ thống, xảy ra trong một thời gian d&amp;agrave;i, l&amp;agrave; nguy&amp;ecirc;n nh&amp;acirc;n ch&amp;iacute;nh dẫn đến c&amp;aacute;c vi phạm ph&amp;aacute;p luật tại dự &amp;aacute;n số 8-12 L&amp;ecirc; Duẩn&amp;quot;.&lt;/p&gt;\r\n\r\n&lt;p&gt;Thiệt hại m&amp;agrave; &amp;ocirc;ng T&amp;agrave;i v&amp;agrave; c&amp;aacute;c đồng phạm g&amp;acirc;y l&amp;agrave; 2.554 tỷ đồng - tương đương gi&amp;aacute; trị quyền sử dụng đất. Do C&amp;ocirc;ng ty Lavender đ&amp;atilde; nộp ng&amp;acirc;n s&amp;aacute;ch 647 tỷ đồng, n&amp;ecirc;n thiệt hại c&amp;ograve;n 1.927 tỷ.&lt;/p&gt;', 'b5e7b8f933e42b8122bfd6f3e76242b07acc19f2_229b23a53e28a9beb30d0d2e5d44938aed749520.jpg', 'a', '', 0, 1599867551, 'enabled');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `key` varchar(100) NOT NULL,
  `value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`) VALUES
(17, 'site_name', 'Blog độc thân vui tính'),
(18, 'site_email', 'admin@my-blog.com'),
(19, 'site_status', 'enabled'),
(20, 'site_close_msg', '&lt;p&gt;&lt;strong&gt;&lt;span style=&quot;font-size:48px&quot;&gt;Trang web hiện đang ở chế độ bảo tr&amp;igrave;&lt;/span&gt;&lt;/strong&gt;&lt;/p&gt;');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `users_group_id` int(11) NOT NULL,
  `first_name` varchar(40) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `email` varchar(96) NOT NULL,
  `password` varchar(128) NOT NULL,
  `image` varchar(255) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `birthday` int(11) NOT NULL,
  `created` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `ip` varchar(32) NOT NULL,
  `code` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `users_group_id`, `first_name`, `last_name`, `email`, `password`, `image`, `gender`, `birthday`, `created`, `status`, `ip`, `code`) VALUES
(1, 1, 'Trần Văn', 'Hoàn', 'Hoan.uda@gmail.com', '$2y$10$JnSQbKd.JyrMSNYZHWkqDOhcd3VTjuELk52IF/t2CONLSoJtjpAi.', '5e169011e9cf891d8540480985ebad865e8af5df_97eee531facda57ee6ce23b15cb258b4a7999fe5.jpg', 'male', 0, 1471429381, '', '', '80a315d99d01b28e68e58c0c899bc4ce2197c524'),
(6, 2, 'tran van', 'hoan', 'hoan123@gmail.com', '$2y$10$FdXiaIyxxUZljzuZv64Axere/yC0T/CopmfmHWF5K2f1Ox3DzNnTe', 'c1328adc42eea1227c6da568db2a28772692abb3_1c1644d3e949951dab7e42e8cdf8979095eb8de7.jpg', 'male', 0, 1599856324, '', '::1', '5765a2950da1a313d955973f95bf8da01fac046a');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `users_groups`
--

INSERT INTO `users_groups` (`id`, `name`) VALUES
(1, 'Super Administrators'),
(2, 'Users'),
(3, 'CTV');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users_group_permissions`
--

CREATE TABLE `users_group_permissions` (
  `id` int(11) NOT NULL,
  `users_group_id` int(11) NOT NULL,
  `page` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `users_group_permissions`
--

INSERT INTO `users_group_permissions` (`id`, `users_group_id`, `page`) VALUES
(48, 0, '/admin/login'),
(49, 0, '/admin/login/submit'),
(50, 0, '/admin'),
(51, 0, '/admin/dashboard'),
(52, 0, '/admin/submit'),
(53, 0, '/admin/users'),
(54, 0, '/admin/users/add'),
(55, 0, '/admin/users/submit'),
(56, 0, '/admin/users/edit/:id'),
(57, 0, '/admin/users/save/:id'),
(58, 0, '/admin/users/delete/:id'),
(59, 0, '/admin/profile/update'),
(60, 0, '/admin/users-groups'),
(61, 0, '/admin/users-groups/add'),
(62, 0, '/admin/users-groups/submit'),
(63, 0, '/admin/users-groups/edit/:id'),
(64, 0, '/admin/users-groups/save/:id'),
(65, 0, '/admin/users-groups/delete/:id'),
(66, 0, '/admin/posts'),
(67, 0, '/admin/posts/add'),
(68, 0, '/admin/posts/submit'),
(69, 0, '/admin/posts/edit/:id'),
(70, 0, '/admin/posts/save/:id'),
(71, 0, '/admin/posts/delete/:id'),
(72, 0, '/admin/posts/:id/comments'),
(73, 0, '/admin/comments/edit/:id'),
(74, 0, '/admin/comments/save/:id'),
(75, 0, '/admin/comments/delete/:id'),
(76, 0, '/admin/categories'),
(77, 0, '/admin/categories/add'),
(78, 0, '/admin/categories/submit'),
(79, 0, '/admin/categories/edit/:id'),
(80, 0, '/admin/categories/save/:id'),
(81, 0, '/admin/categories/delete/:id'),
(82, 0, '/admin/settings'),
(83, 0, '/admin/settings/save'),
(84, 0, '/admin/contacts'),
(85, 0, '/admin/contacts/reply/:id'),
(86, 0, '/admin/contacts/send/:id'),
(87, 0, '/admin/ads'),
(88, 0, '/admin/ads/add'),
(89, 0, '/admin/ads/submit'),
(90, 0, '/admin/ads/edit/:id'),
(91, 0, '/admin/ads/save/:id'),
(92, 0, '/admin/ads/delete/:id'),
(93, 0, '/admin/logout'),
(94, 0, '/admin/login'),
(95, 0, '/admin/login/submit'),
(96, 0, '/admin'),
(97, 0, '/admin/dashboard'),
(98, 0, '/admin/submit'),
(99, 0, '/admin/users'),
(100, 0, '/admin/users/add'),
(101, 0, '/admin/users/submit'),
(102, 0, '/admin/users/edit/:id'),
(103, 0, '/admin/users/save/:id'),
(104, 0, '/admin/users/delete/:id'),
(105, 0, '/admin/profile/update'),
(106, 0, '/admin/users-groups'),
(107, 0, '/admin/users-groups/add'),
(108, 0, '/admin/users-groups/submit'),
(109, 0, '/admin/users-groups/edit/:id'),
(110, 0, '/admin/users-groups/save/:id'),
(111, 0, '/admin/users-groups/delete/:id'),
(112, 0, '/admin/posts'),
(113, 0, '/admin/posts/add'),
(114, 0, '/admin/posts/submit'),
(115, 0, '/admin/posts/edit/:id'),
(116, 0, '/admin/posts/save/:id'),
(117, 0, '/admin/posts/delete/:id'),
(118, 0, '/admin/posts/:id/comments'),
(119, 0, '/admin/comments/edit/:id'),
(120, 0, '/admin/comments/save/:id'),
(121, 0, '/admin/comments/delete/:id'),
(122, 0, '/admin/categories'),
(123, 0, '/admin/categories/add'),
(124, 0, '/admin/categories/submit'),
(125, 0, '/admin/categories/edit/:id'),
(126, 0, '/admin/categories/save/:id'),
(127, 0, '/admin/categories/delete/:id'),
(128, 0, '/admin/settings'),
(129, 0, '/admin/settings/save'),
(130, 0, '/admin/contacts'),
(131, 0, '/admin/contacts/reply/:id'),
(132, 0, '/admin/contacts/send/:id'),
(133, 0, '/admin/ads'),
(134, 0, '/admin/ads/add'),
(135, 0, '/admin/ads/submit'),
(136, 0, '/admin/ads/edit/:id'),
(137, 0, '/admin/ads/save/:id'),
(138, 0, '/admin/ads/delete/:id'),
(139, 0, '/admin/logout'),
(186, 1, '/admin/login'),
(187, 1, '/admin/login/submit'),
(188, 1, '/admin'),
(189, 1, '/admin/dashboard'),
(190, 1, '/admin/submit'),
(191, 1, '/admin/users'),
(192, 1, '/admin/users/add'),
(193, 1, '/admin/users/submit'),
(194, 1, '/admin/users/edit/:id'),
(195, 1, '/admin/users/save/:id'),
(196, 1, '/admin/users/delete/:id'),
(197, 1, '/admin/profile/update'),
(198, 1, '/admin/users-groups'),
(199, 1, '/admin/users-groups/add'),
(200, 1, '/admin/users-groups/submit'),
(201, 1, '/admin/users-groups/edit/:id'),
(202, 1, '/admin/users-groups/save/:id'),
(203, 1, '/admin/users-groups/delete/:id'),
(204, 1, '/admin/posts'),
(205, 1, '/admin/posts/add'),
(206, 1, '/admin/posts/submit'),
(207, 1, '/admin/posts/edit/:id'),
(208, 1, '/admin/posts/save/:id'),
(209, 1, '/admin/posts/delete/:id'),
(210, 1, '/admin/categories'),
(211, 1, '/admin/categories/add'),
(212, 1, '/admin/categories/submit'),
(213, 1, '/admin/categories/edit/:id'),
(214, 1, '/admin/categories/save/:id'),
(215, 1, '/admin/categories/delete/:id'),
(216, 1, '/admin/settings'),
(217, 1, '/admin/settings/save'),
(218, 1, '/admin/contacts'),
(219, 1, '/admin/contacts/reply/:id'),
(220, 1, '/admin/contacts/send/:id'),
(221, 1, '/admin/ads'),
(222, 1, '/admin/ads/add'),
(223, 1, '/admin/ads/submit'),
(224, 1, '/admin/ads/edit/:id'),
(225, 1, '/admin/ads/save/:id'),
(226, 1, '/admin/ads/delete/:id'),
(227, 1, '/admin/logout'),
(229, 3, '/admin/login/submit'),
(231, 2, '/admin/login');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `online_users`
--
ALTER TABLE `online_users`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users_group_permissions`
--
ALTER TABLE `users_group_permissions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `ads`
--
ALTER TABLE `ads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT cho bảng `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `online_users`
--
ALTER TABLE `online_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `users_group_permissions`
--
ALTER TABLE `users_group_permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=232;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
