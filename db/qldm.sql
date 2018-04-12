articlecategory-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2018 at 09:57 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `qldm`
--
CREATE DATABASE IF NOT EXISTS `qldm` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `qldm`;

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
`article_id` int(11) NOT NULL,
  `article_name` varchar(255) NOT NULL,
  `article_content` mediumtext NOT NULL,
  `article_cat_id` int(11) NOT NULL,
  `article_des` varchar(500) NOT NULL,
  `article_thumbnail` varchar(200) NOT NULL,
  `article_created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `article_modified_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `article_status` int(2) DEFAULT '0',
  `article_tags` varchar(150) DEFAULT NULL,
  `article_slug` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`article_id`, `article_name`, `article_content`, `article_cat_id`, `article_des`, `article_thumbnail`, `article_created_date`, `article_modified_date`, `article_status`, `article_tags`, `article_slug`) VALUES
(1, 'Happy new year', '<p>newnenqwnewqeqwewq</p>\r\n', 2, '<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>\r\n', 'new_year.jpg', '2018-01-29 06:48:05', '2018-02-06 09:25:51', 1, 'something,stuff', 'happy-new-year'),
(2, 'Triều cường dâng cao', '<table align="center">\r\n	<tbody>\r\n		<tr>\r\n			<td>S&aacute;ng 2/2,&nbsp;<a href="https://news.zing.vn/hien-tuong-trieu-cuong-tieu-diem.html">triều cường</a>&nbsp;d&acirc;ng cao ở TP.HCM khiến nhiều tuyến đường như quốc lộ 1, quốc lộ 50 (huyện B&igrave;nh Ch&aacute;nh), L&ecirc; Văn Lương (Nh&agrave; B&egrave;) ch&igrave;m trong nước.</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table align="center">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><img alt="Sai Gon vo de bao, ket xe trong ngay trieu cuong dat dinh hinh anh 2" src="https://znews-photo-td.zadn.vn/w860/Uploaded/zxgorz/2018_02_02/ngap_zing.jpg" style="height:334px; width:500px" /></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Theo Đ&agrave;i kh&iacute; tượng Thủy văn Khu vực Nam Bộ, mực triều đo được tại trạm Ph&uacute; An đạt mức 1,61 m</p>\r\n			&nbsp;\r\n\r\n			<p>, ở Nh&agrave; B&egrave; l&agrave; 1,58 m.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 5, '<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>\r\n', '555555.jpg', '2018-01-29 06:48:05', '2018-02-06 06:59:05', 1, 'sport,u23,news', 'trieu-cuong-dang-cao'),
(3, 'Báo Cuba: Con trai cả của Fidel Castro tự sát', '<p>Fidel Castro Diaz-Balart, 68 tuổi, con trai cả của Fidel Castro, đ&atilde; tự s&aacute;t h&ocirc;m 1/2. Th&ocirc;ng tin n&agrave;y được truyền th&ocirc;ng nh&agrave; nước Cuba loan tải h&ocirc;m 2/2.</p>\r\n\r\n<blockquote>\r\n<p>&quot;Diaz-Balart đ&atilde; được một nh&oacute;m b&aacute;c sĩ điều trị trong v&agrave;i th&aacute;ng qua do trầm cảm nặng. &Ocirc;ng đ&atilde; tự s&aacute;t s&aacute;ng nay&quot;, trang chủ của&nbsp;<em>Cubadebate&nbsp;</em>th&ocirc;ng b&aacute;o.</p>\r\n</blockquote>\r\n\r\n<p>Fidel Castro Diaz-Balart c&oacute; biệt danh &quot;Fidelito&quot; bởi &ocirc;ng c&oacute; ngoại h&igrave;nh rất giống cha m&igrave;nh, nh&agrave; l&atilde;nh đạo của c&aacute;ch mạng Cuba. &Ocirc;ng đ&atilde; trải qua một thời gian điều trị tại bệnh viện ở thủ đ&ocirc; Havana trước khi xuất viện v&agrave; tiếp tục điều trị tại gia.</p>\r\n\r\n<table align="center">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><img alt="Bao Cuba: Con trai ca cua Fidel Castro tu sat hinh anh 1" src="https://znews-photo-td.zadn.vn/w660/Uploaded/jaegtn/2018_02_02/con_trai_fidel.JPG" style="height:685px; width:1000px" /></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Fidel Castro Diaz-Balart, con trai cả của Fidel Castro. Ảnh:&nbsp;<em>Reuters</em>.</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Diaz-Balart l&agrave; con cả v&agrave; cũng l&agrave; người con ch&iacute;nh thức duy nhất của Fidel Castro với người vợ đầu ti&ecirc;n l&agrave; Mirta Diaz Balart. &Ocirc;ng l&agrave; nh&agrave; khoa học hạt nh&acirc;n, từng điều h&agrave;nh Ủy ban Năng lượng hạt nh&acirc;n của Cuba trước khi bị ch&iacute;nh cha m&igrave;nh b&atilde;i chức đầu thập kỷ 90.</p>\r\n\r\n<p>Ngo&agrave;i Diaz-Balart, Fidel Castro c&oacute; 10 người con với 6 phụ nữ kh&aacute;c.</p>\r\n\r\n<p>Fidel Castro l&agrave; người l&atilde;nh đạo đảng Cộng sản Cuba từ năm 1961 - 2011 trước khi nhường lại vị tr&iacute; cho người em trai Raul Castro. Fidel Castro qua đời ng&agrave;y 25/11/2016.</p>\r\n\r\n<p>Sau c&aacute;i chết của Fidel, ch&iacute;nh phủ Cuba cấm đặt t&ecirc;n c&aacute;c địa điểm, c&ocirc;ng tr&igrave;nh c&ocirc;ng cộng theo t&ecirc;n &ocirc;ng cũng như cấm x&acirc;y dựng tượng Fidel Castro, thể theo nguyện vọng của ch&iacute;nh Fidel, nhằm ngăn chặn t&igrave;nh trạng thần th&aacute;nh h&oacute;a c&aacute; nh&acirc;n ở Cuba.</p>\r\n', 3, '<p>Truyền th&ocirc;ng nh&agrave; nước Cuba cho biết con trai cả của Fidel Castro đ&atilde; tự s&aacute;t sau một thời gian mắc chứng trầm cảm</p>\r\n', 'con_trai_fidel1.JPG', '2018-01-29 06:48:05', '2018-02-05 07:54:36', 1, 'cuba,fidel,tự sát', 'bao-cuba-con-trai-ca-cua-fidel-castro-tu-sat'),
(4, 'Chuyên gia Fox Sport cảnh báo Việt Nam trước trận chung kết', '<p>U23 Việt Nam đ&atilde; trải qua h&agrave;nh tr&igrave;nh k&eacute;o d&agrave;i 510 ph&uacute;t thần kỳ với điểm nhấn l&agrave; những si&ecirc;u phẩm m&atilde;n nh&atilde;n v&agrave; những loạt s&uacute;t lu&acirc;n lưu c&acirc;n n&atilde;o. Trước mắt thầy tr&ograve; HLV Park Hang-seo chỉ c&ograve;n lại thử th&aacute;ch cuối c&ugrave;ng mang t&ecirc;n U23 Uzbekistan.</p>\r\n\r\n<p>Theo chuy&ecirc;n gia Gabriel Tan, U23 Việt Nam phải đặc biệt quan t&acirc;m đến h&agrave;ng c&ocirc;ng đầy tốc độ v&agrave; s&aacute;ng tạo của đối thủ đến từ Trung &Aacute; nếu kh&ocirc;ng muốn phải nhận tr&aacute;i đắng ở trận chung kết.</p>\r\n\r\n<p>Tổng cộng, đo&agrave;n qu&acirc;n của HLV Ravshan Khaydarov đ&atilde; ghi 10 b&agrave;n tại giải năm nay.&nbsp;Đội trưởng Zabikhillo Urinboev l&agrave; c&aacute;i t&ecirc;n đầu ti&ecirc;n phải lưu t&acirc;m. Để theo k&egrave;m tiền đạo số 9, c&aacute;c đối thủ của Uzbekistan thường phải cắt cử trung vệ giỏi nhất, thậm ch&iacute; l&agrave; cả 2 trung vệ. Khi đ&oacute;, 3 mũi tấn c&ocirc;ng ph&iacute;a sau gồm Khamdamov, Sidikov v&agrave; Yakhshiboev sẽ c&oacute; khoảng trống th&ecirc;nh thang để bắn ph&aacute; khung th&agrave;nh đối phương.</p>\r\n\r\n<table align="center">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><img alt="Chuyen gia Fox Sports canh bao U23 Viet Nam truoc tran chung ket hinh anh 1" src="https://znews-photo-td.zadn.vn/w660/Uploaded/natmzz/2018_01_25/1_11.jpg" style="height:735px; width:606px" /></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Đội h&igrave;nh 4-2-3-1 của Uzbekistan từng v&ugrave;i dập cả Nhật Bản v&agrave; H&agrave;n Quốc.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>B&ecirc;n c&aacute;nh tr&aacute;i, Khamdamov đặc biệt ưa th&iacute;ch thực hiện những pha xuy&ecirc;n ph&aacute; h&agrave;ng ph&ograve;ng ngự dựa tr&ecirc;n tốc độ của m&igrave;nh. Nếu bị theo k&egrave;m qu&aacute; chặt, anh sẽ c&ugrave;ng hậu vệ Komilov thực hiện những pha chồng bi&ecirc;n trước khi đưa b&oacute;ng v&agrave;o ph&iacute;a trong cho tiền đạo dứt điểm.</p>\r\n\r\n<p>Mũi tấn c&ocirc;ng đ&aacute;ng sợ nhất của U23 Uzbekistan lại l&agrave; cầu thủ chạy c&aacute;nh phải, Jasurbek Yakhshiboev. Cầu thủ trẻ thuộc bi&ecirc;n chế Pakhtakor hội tụ những phẩm chất của một ng&ocirc;i sao chạy c&aacute;nh h&agrave;ng đầu, từ tốc độ, sự kh&eacute;o l&eacute;o đến khả năng dứt điểm, tất cả đều ở mức tiệm cận ho&agrave;n hảo. Anh đang l&agrave; ch&acirc;n s&uacute;t hiệu quả nhất của Uzbekistan tại giải năm nay với 3 b&agrave;n thắng.</p>\r\n\r\n<p>H&agrave;ng ph&ograve;ng ngự của Nhật Bản v&agrave; H&agrave;n Quốc đ&atilde; bất lực trong việc theo k&egrave;m số 8 của Uzbekistan ở trận tứ kết v&agrave; b&aacute;n kết. Nhiệm vụ đối đầu với cầu thủ tấn c&ocirc;ng tốt nhất giải sẽ được trao cho Vũ Văn Thanh của U23 Việt Nam.</p>\r\n\r\n<table align="center">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><img alt="Chuyen gia Fox Sports canh bao U23 Viet Nam truoc tran chung ket hinh anh 2" src="https://znews-photo-td.zadn.vn/w660/Uploaded/natmzz/2018_01_25/907104978_1.jpg" style="height:396px; width:594px" /></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Yakhshiboev l&agrave; c&aacute;i t&ecirc;n h&agrave;ng ph&ograve;ng ngự Việt Nam phải đặc biệt quan t&acirc;m ở trận chung kết. Ảnh: Getty Images.</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Theo Gabriel Tan, trận chung kết giải U23 ch&acirc;u &Aacute; năm nay sẽ được định đoạt bởi cuộc đối đầu giữa Yakhshiboev v&agrave; Văn Thanh. Hậu vệ số 17 của Việt Nam cần giữ vị tr&iacute; v&agrave; tỉnh t&aacute;o trong từng pha tranh chấp với số 8 b&ecirc;n ph&iacute;a Uzbekistan.</p>\r\n\r\n<blockquote>\r\n<p>Chuy&ecirc;n gia của&nbsp;<em>Fox Sports</em>&nbsp;cũng đưa ra một v&agrave;i nhận định về lối chơi của 2 ứng vi&ecirc;n cho chức v&ocirc; địch ch&acirc;u &Aacute; năm nay: &quot;Th&agrave;nh c&ocirc;ng của U23 Việt Nam chủ yếu dựa tr&ecirc;n m&agrave;n tr&igrave;nh diễn ch&oacute;i s&aacute;ng của cầu thủ chạy c&aacute;nh Nguyễn Quang Hải. Kỷ luật v&agrave; quyết đo&aacute;n l&agrave; những từ ngữ để mi&ecirc;u tả về m&agrave;n tr&igrave;nh diễn của đại diện đến từ Đ&ocirc;ng Nam &Aacute;&quot;.</p>\r\n</blockquote>\r\n\r\n<p>&quot;Trong khi đ&oacute;, U23 Uzebekistan nổi l&ecirc;n l&agrave; một trong những đội tuyển c&oacute; lối đ&aacute; đẹp mắt bậc nhất tại giải đấu. Họ chỉ để thua đ&uacute;ng một lần ở trận ra qu&acirc;n trước Qatar, sau đ&oacute; l&agrave; 4 chiến thắng li&ecirc;n tiếp, trong đ&oacute; c&oacute; 2 m&agrave;n hủy diệt đương kim v&ocirc; địch Nhật Bản (4-0) v&agrave; đương kim &aacute; qu&acirc;n H&agrave;n Quốc (4-1) để ghi danh v&agrave;o trận chung kết&quot;, Gabriel Tan n&oacute;i th&ecirc;m.</p>\r\n\r\n<p>Đ&atilde; ghi t&ecirc;n v&agrave;o trận chung kết nhưng U23 Việt Nam vẫn kh&ocirc;ng được đ&aacute;nh gi&aacute; cao bằng c&aacute;c đối thủ kh&aacute;c. Tuy nhi&ecirc;n tất cả sẽ phải nh&igrave;n thầy tr&ograve; Park Hang-seo bằng một con mắt kh&aacute;c nếu họ đ&aacute;nh bại đội tuyển được coi l&agrave; mạnh nhất giải đấu, Uzbekistan ở trận đấu cuối c&ugrave;ng tại Thường</p>\r\n\r\n<p><strong><a href="https://news.zing.vn/video-nhin-lai-hanh-trinh-vao-chung-ket-cua-u23-uzbekistan-post814526.html" target="_blank">Nh&igrave;n lại h&agrave;nh tr&igrave;nh v&agrave;o chung kết của U23 Uzbekistan</a></strong>&nbsp;Khởi đầu kh&aacute; chậm chạp ở v&ograve;ng bảng, tuy nhi&ecirc;n U23 Uzbekistan đ&atilde; thi đấu rất hay trước U23 H&agrave;n Quốc v&agrave; U23 Nhật Bản để gi&agrave;nh quyền v&agrave;o chung kết U23 ch&acirc;u &Aacute;.</p>\r\n\r\n<table align="center">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><img alt="Chuyen gia Fox Sports canh bao U23 Viet Nam truoc tran chung ket hinh anh 3" src="https://znews-photo-td.zadn.vn/w660/Uploaded/natmzz/2018_01_25/3_3.jpg" style="height:595px; width:1300px" /></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Đ&aacute;nh đầu kh&ocirc;ng phải l&agrave; điểm mạnh của h&agrave;ng c&ocirc;ng U23 Uzbekistan. Số liệu:&nbsp;<em>AFC.</em></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 4, '<p>Chuy&ecirc;n gia Gabriel Tan cho rằng U23 Vi&ecirc;̣t Nam c&acirc;̀n đặc bi&ecirc;̣t c&acirc;̉n trọng với t&ocirc;́c đ&ocirc;̣ và sự sáng tạo của Uzbekistan n&ecirc;́u kh&ocirc;ng mu&ocirc;́n nh&acirc;̣n th&acirc;́t bại ở tr&acirc;̣n chung k&ecirc;́t.</p>\r\n', '907104978.jpg', '2018-01-29 06:48:05', '2018-02-06 07:00:28', 1, 'news,u23,finale', 'chuyen-gia-fox-sport-canh-bao-viet-nam-truoc-tran-chung-ket'),
(5, 'Khởi đầu', '<p>U23 Việt Nam đ&atilde; trải qua h&agrave;nh tr&igrave;nh k&eacute;o d&agrave;i 510 ph&uacute;t thần kỳ với điểm nhấn l&agrave; những si&ecirc;u phẩm m&atilde;n nh&atilde;n v&agrave; những loạt s&uacute;t lu&acirc;n lưu c&acirc;n n&atilde;o. Trước mắt thầy tr&ograve; HLV Park Hang-seo chỉ c&ograve;n lại thử th&aacute;ch cuối c&ugrave;ng mang t&ecirc;n U23 Uzbekistan.</p>\r\n\r\n<p>Theo chuy&ecirc;n gia Gabriel Tan, U23 Việt Nam phải đặc biệt quan t&acirc;m đến h&agrave;ng c&ocirc;ng đầy tốc độ v&agrave; s&aacute;ng tạo của đối thủ đến từ Trung &Aacute; nếu kh&ocirc;ng muốn phải nhận tr&aacute;i đắng ở trận chung kết.</p>\r\n\r\n<p>Tổng cộng, đo&agrave;n qu&acirc;n của HLV Ravshan Khaydarov đ&atilde; ghi 10 b&agrave;n tại giải năm nay.&nbsp;Đội trưởng Zabikhillo Urinboev l&agrave; c&aacute;i t&ecirc;n đầu ti&ecirc;n phải lưu t&acirc;m. Để theo k&egrave;m tiền đạo số 9, c&aacute;c đối thủ của Uzbekistan thường phải cắt cử trung vệ giỏi nhất, thậm ch&iacute; l&agrave; cả 2 trung vệ. Khi đ&oacute;, 3 mũi tấn c&ocirc;ng ph&iacute;a sau gồm Khamdamov, Sidikov v&agrave; Yakhshiboev sẽ c&oacute; khoảng trống th&ecirc;nh thang để bắn ph&aacute; khung th&agrave;nh đối phương.</p>\r\n\r\n<table align="center">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><img alt="Chuyen gia Fox Sports canh bao U23 Viet Nam truoc tran chung ket hinh anh 1" src="https://znews-photo-td.zadn.vn/w660/Uploaded/natmzz/2018_01_25/1_11.jpg" style="height:735px; width:606px" /></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Đội h&igrave;nh 4-2-3-1 của Uzbekistan từng v&ugrave;i dập cả Nhật Bản v&agrave; H&agrave;n Quốc.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>B&ecirc;n c&aacute;nh tr&aacute;i, Khamdamov đặc biệt ưa th&iacute;ch thực hiện những pha xuy&ecirc;n ph&aacute; h&agrave;ng ph&ograve;ng ngự dựa tr&ecirc;n tốc độ của m&igrave;nh. Nếu bị theo k&egrave;m qu&aacute; chặt, anh sẽ c&ugrave;ng hậu vệ Komilov thực hiện những pha chồng bi&ecirc;n trước khi đưa b&oacute;ng v&agrave;o ph&iacute;a trong cho tiền đạo dứt điểm.</p>\r\n\r\n<p>Mũi tấn c&ocirc;ng đ&aacute;ng sợ nhất của U23 Uzbekistan lại l&agrave; cầu thủ chạy c&aacute;nh phải, Jasurbek Yakhshiboev. Cầu thủ trẻ thuộc bi&ecirc;n chế Pakhtakor hội tụ những phẩm chất của một ng&ocirc;i sao chạy c&aacute;nh h&agrave;ng đầu, từ tốc độ, sự kh&eacute;o l&eacute;o đến khả năng dứt điểm, tất cả đều ở mức tiệm cận ho&agrave;n hảo. Anh đang l&agrave; ch&acirc;n s&uacute;t hiệu quả nhất của Uzbekistan tại giải năm nay với 3 b&agrave;n thắng.</p>\r\n\r\n<p>H&agrave;ng ph&ograve;ng ngự của Nhật Bản v&agrave; H&agrave;n Quốc đ&atilde; bất lực trong việc theo k&egrave;m số 8 của Uzbekistan ở trận tứ kết v&agrave; b&aacute;n kết. Nhiệm vụ đối đầu với cầu thủ tấn c&ocirc;ng tốt nhất giải sẽ được trao cho Vũ Văn Thanh của U23 Việt Nam.</p>\r\n\r\n<table align="center">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><img alt="Chuyen gia Fox Sports canh bao U23 Viet Nam truoc tran chung ket hinh anh 2" src="https://znews-photo-td.zadn.vn/w660/Uploaded/natmzz/2018_01_25/907104978_1.jpg" style="height:396px; width:594px" /></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Yakhshiboev l&agrave; c&aacute;i t&ecirc;n h&agrave;ng ph&ograve;ng ngự Việt Nam phải đặc biệt quan t&acirc;m ở trận chung kết. Ảnh: Getty Images.</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Theo Gabriel Tan, trận chung kết giải U23 ch&acirc;u &Aacute; năm nay sẽ được định đoạt bởi cuộc đối đầu giữa Yakhshiboev v&agrave; Văn Thanh. Hậu vệ số 17 của Việt Nam cần giữ vị tr&iacute; v&agrave; tỉnh t&aacute;o trong từng pha tranh chấp với số 8 b&ecirc;n ph&iacute;a Uzbekistan.</p>\r\n\r\n<blockquote>\r\n<p>Chuy&ecirc;n gia của&nbsp;<em>Fox Sports</em>&nbsp;cũng đưa ra một v&agrave;i nhận định về lối chơi của 2 ứng vi&ecirc;n cho chức v&ocirc; địch ch&acirc;u &Aacute; năm nay: &quot;Th&agrave;nh c&ocirc;ng của U23 Việt Nam chủ yếu dựa tr&ecirc;n m&agrave;n tr&igrave;nh diễn ch&oacute;i s&aacute;ng của cầu thủ chạy c&aacute;nh Nguyễn Quang Hải. Kỷ luật v&agrave; quyết đo&aacute;n l&agrave; những từ ngữ để mi&ecirc;u tả về m&agrave;n tr&igrave;nh diễn của đại diện đến từ Đ&ocirc;ng Nam &Aacute;&quot;.</p>\r\n</blockquote>\r\n\r\n<p>&quot;Trong khi đ&oacute;, U23 Uzebekistan nổi l&ecirc;n l&agrave; một trong những đội tuyển c&oacute; lối đ&aacute; đẹp mắt bậc nhất tại giải đấu. Họ chỉ để thua đ&uacute;ng một lần ở trận ra qu&acirc;n trước Qatar, sau đ&oacute; l&agrave; 4 chiến thắng li&ecirc;n tiếp, trong đ&oacute; c&oacute; 2 m&agrave;n hủy diệt đương kim v&ocirc; địch Nhật Bản (4-0) v&agrave; đương kim &aacute; qu&acirc;n H&agrave;n Quốc (4-1) để ghi danh v&agrave;o trận chung kết&quot;, Gabriel Tan n&oacute;i th&ecirc;m.</p>\r\n\r\n<p>Đ&atilde; ghi t&ecirc;n v&agrave;o trận chung kết nhưng U23 Việt Nam vẫn kh&ocirc;ng được đ&aacute;nh gi&aacute; cao bằng c&aacute;c đối thủ kh&aacute;c. Tuy nhi&ecirc;n tất cả sẽ phải nh&igrave;n thầy tr&ograve; Park Hang-seo bằng một con mắt kh&aacute;c nếu họ đ&aacute;nh bại đội tuyển được coi l&agrave; mạnh nhất giải đấu, Uzbekistan ở trận đấu cuối c&ugrave;ng tại Thường</p>\r\n\r\n<p><strong><a href="https://news.zing.vn/video-nhin-lai-hanh-trinh-vao-chung-ket-cua-u23-uzbekistan-post814526.html" target="_blank">Nh&igrave;n lại h&agrave;nh tr&igrave;nh v&agrave;o chung kết của U23 Uzbekistan</a></strong>&nbsp;Khởi đầu kh&aacute; chậm chạp ở v&ograve;ng bảng, tuy nhi&ecirc;n U23 Uzbekistan đ&atilde; thi đấu rất hay trước U23 H&agrave;n Quốc v&agrave; U23 Nhật Bản để gi&agrave;nh quyền v&agrave;o chung kết U23 ch&acirc;u &Aacute;.</p>\r\n', 3, '<p>Chuy&ecirc;n gia Gabriel Tan cho rằng U23 Vi&ecirc;̣t Nam c&acirc;̀n đặc bi&ecirc;̣t c&acirc;̉n trọng với t&ocirc;́c đ&ocirc;̣ và sự sáng tạo của Uzbekistan n&ecirc;́u kh&ocirc;ng mu&ocirc;́n nh&acirc;̣n th&acirc;́t bại ở tr&acirc;̣n chung k&ecirc;́t.</p>\r\n', '907104978.jpg', '2018-01-29 06:48:05', '2018-02-06 09:25:18', 1, 'wild,natural,man', 'khoi-dau-moi'),
(6, 'Chân dung vua Quang Trung', '<p>Gần đ&acirc;y, khi nh&agrave; nghi&ecirc;n cứu Trần Quang Đức c&ocirc;ng bố bức ảnh chụp tranh ch&acirc;n dung quốc vương Nguyễn Quang B&igrave;nh (t&ecirc;n của vua Quang Trung khi sang Trung Quốc), dư luận đ&atilde; phản ứng dữ dội cho rằng người trong tranh kh&ocirc;ng phải vua Quang Trung; thậm ch&iacute; c&oacute; &yacute; kiến cho rằng bức ảnh chụp tranh vẽ đ&oacute; kh&ocirc;ng c&oacute; thật, m&agrave; n&oacute; được ngụy tạo nhằm những mục đ&iacute;ch xấu.</p>\r\n\r\n<p><strong>Những tranh c&atilde;i về ch&acirc;n dung vua Quang Trung kh&ocirc;ng chỉ đưa c&acirc;u hỏi đ&acirc;u l&agrave; dung mạo thực của vua Quang Trung, m&agrave; c&ograve;n đặt ra nhiều vấn đề về nghi&ecirc;n cứu lịch sử như: phương ph&aacute;p nghi&ecirc;n cứu, quan điểm nghi&ecirc;n cứu, văn h&oacute;a tranh luận, gi&aacute;o dục lịch sử&hellip;</strong></p>\r\n\r\n<p>Nh&agrave; nghi&ecirc;n cứu Trần Quang Đức đ&atilde; trả lời<em>&nbsp;Zing.vn</em>&nbsp;một số vấn đề quanh bức ảnh, cũng như quan điểm của anh về phương ph&aacute;p nghi&ecirc;n cứu lịch sử.</p>\r\n\r\n<table align="center">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><img alt="Tran Quang Duc: Tranh chan dung ''Quang Trung'' gan ''su thuc'' hon ca hinh anh 1" src="https://znews-photo-td.zadn.vn/w660/Uploaded/oplukaa/2018_02_02/TQD_1.jpg" style="height:277px; width:500px" /></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Nh&agrave; nghi&ecirc;n cứu Trần Quang Đức.</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<h3><strong>Bức tranh ch&acirc;n dung &ldquo;Quang Trung&rdquo; tả thực người sang mừng thọ C&agrave;n Long</strong></h3>\r\n\r\n<p><em>- Anh mới c&ocirc;ng bố cuốn catalogue của nh&agrave; Sotheby&rsquo;s ph&aacute;t h&agrave;nh năm 1981, trong đ&oacute; in h&igrave;nh bức tranh được cho l&agrave; vẽ vua Quang Trung. Vậy, cuốn catalogue n&oacute;i l&ecirc;n được điều g&igrave;?</em></p>\r\n\r\n<blockquote>\r\n<p>- Cuốn catalogue cho thấy bức tranh l&agrave; một sử liệu thật (hiện vật đ&atilde; được Sotheby&rsquo;s đấu gi&aacute; năm 1981). Bởi vậy, kh&ocirc;ng c&oacute; chuyện đ&acirc;y l&agrave; ảnh giả chụp tranh, hay một dạng &#39;&#39;sử liệu&#39;&#39; c&oacute; t&iacute;nh ngụy tạo như một số người suy diễn với h&agrave;m &yacute; cho rằng người c&ocirc;ng bố c&oacute; &yacute; đồ n&agrave;o đ&oacute;.</p>\r\n</blockquote>\r\n\r\n<p><em>- Vậy anh c&oacute; thể ph&acirc;n t&iacute;ch th&ecirc;m h&igrave;nh ảnh thể hiện trong bức ảnh đ&oacute;?</em></p>\r\n\r\n<p>- Thứ nhất, qua tập catalogue n&agrave;y, c&oacute; thể x&aacute;c định được đ&acirc;y l&agrave; bức tranh ch&acirc;n dung vẽ Nguyễn Quang B&igrave;nh (t&ecirc;n của vua Quang Trung khi sang Trung Hoa, sau đ&acirc;y gọi tắt l&agrave; &quot;Quang Trung&quot;) do họa sĩ Mậu B&iacute;nh Th&aacute;i thực hiện dưới sự chỉ đạo của vua C&agrave;n Long, l&agrave; bức tranh ch&acirc;n dung b&aacute;n th&acirc;n m&agrave; sử liệu của Trung Quốc như&nbsp;<em>Thanh thực lục</em>, hay sử liệu của Việt Nam l&agrave;&nbsp;<em>Đại Nam thực lục, Dụ am văn tập</em>&nbsp;của Phan Huy &Iacute;ch đề cập.</p>\r\n\r\n<p>Thứ hai, sau khi đ&atilde; x&aacute;c định được lai lịch của bức tranh, kh&ocirc;ng phải sản phẩm ngụy tạo sau n&agrave;y; vấn đề đặt ra l&agrave;, bức tranh c&oacute; mang t&iacute;nh tả thực kh&ocirc;ng, hay c&oacute; &yacute; đồ b&ocirc;i nhọ, vẽ xấu đi? T&ocirc;i cho rằng đ&acirc;y l&agrave; tranh tả thực.</p>\r\n\r\n<p>Bởi, họa sĩ Mậu B&iacute;nh Th&aacute;i l&agrave; bậc th&agrave;y vẽ tranh ch&acirc;n dung tả thực v&agrave;o thời C&agrave;n Long, sau khi vẽ xong hai bức tranh ch&acirc;n dung &quot;Quang Trung&quot;, một bức đ&atilde; được gửi lại sứ đo&agrave;n T&acirc;y Sơn cầm về Đại Việt. Trong&nbsp;<em>Dụ am văn tập</em>, Phan Huy &Iacute;ch đ&atilde; x&aacute;c nhận điều n&agrave;y.</p>\r\n\r\n<p>B&ecirc;n cạnh đ&oacute;, sử liệu cho thấy C&agrave;n Long c&oacute; t&igrave;nh cảm qu&yacute; mến đặc biệt với Quang Trung, c&oacute; thể kiểm chứng qua nhiều thư từ trao đổi từ khi &quot;Quang Trung&quot; sang Thanh cho đến sau khi về nước. Ngo&agrave;i ra, vị vua &quot;Quang Trung&quot; sang Thanh cũng đ&atilde; gặp c&aacute;c sứ thần Triều Ti&ecirc;n, được họ mi&ecirc;u tả l&agrave; người c&oacute; ngoại h&igrave;nh &quot;thanh t&uacute;&quot;. N&ecirc;n kh&ocirc;ng c&oacute; chuyện vẽ xấu đi nhằm mục đ&iacute;ch b&ocirc;i nhọ, hay c&oacute; mưu đồ g&igrave; kh&aacute;c.</p>\r\n\r\n<p>Cuối c&ugrave;ng, vị vua &#39;&#39;Quang Trung&#39;&#39; sang gặp C&agrave;n Long l&agrave; thật hay giả, sẽ quyết định t&iacute;nh x&aacute;c thực của bức tranh ch&acirc;n dung n&agrave;y. Nếu Quang Trung sang Thanh l&agrave; thật, th&igrave; bức tranh đương nhi&ecirc;n l&agrave; vua Quang Trung rồi. C&ograve;n nếu &quot;Quang Trung&quot; sang Thanh l&agrave; giả th&igrave; sao? Dĩ nhi&ecirc;n nh&acirc;n vật được thể hiện trong bức tranh l&agrave; vị vua giả th&ocirc;i.</p>\r\n\r\n<p>Trong trường hợp vị vua Quang Trung sang Thanh l&agrave; giả, th&igrave; ch&iacute;nh những nguồn sử liệu ghi nhận điều n&agrave;y, vẫn nhấn mạnh rằng, Quang Trung đ&atilde; phải t&igrave;m người giống m&igrave;nh để thay thế sang Thanh. Vậy th&igrave;, ch&iacute; &iacute;t, ch&acirc;n dung nh&acirc;n vật đang g&acirc;y tranh c&atilde;i ở đ&acirc;y, nh&acirc;n vật trong tranh ấy vẫn gần với vị Quang Trung thật hơn cả, hơn l&agrave; những bức tranh do người đời sau vẽ lại theo tr&iacute; tưởng tượng.</p>\r\n', 3, '<p>Những tranh c&atilde;i về ch&acirc;n dung vua Quang Trung kh&ocirc;ng chỉ đưa c&acirc;u hỏi đ&acirc;u l&agrave; dung mạo thực của vua Quang Trung, m&agrave; c&ograve;n đặt ra nhiều vấn đề về nghi&ecirc;n cứu lịch sử.</p>\r\n', 'con_trai_fidel1.JPG', '2018-02-02 07:52:55', '2018-02-07 01:35:11', 1, 'doanh nhân,lịch sử', 'chan-dung-vua-quang-trung');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
`cat_id` int(11) NOT NULL,
  `cat_name` varchar(100) NOT NULL,
  `cat_des` text NOT NULL,
  `cat_parent_id` int(11) NOT NULL,
  `cat_thumbnail` varchar(200) NOT NULL,
  `cat_created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `cat_modified_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `cat_status` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `cat_des`, `cat_parent_id`, `cat_thumbnail`, `cat_created_date`, `cat_modified_date`, `cat_status`) VALUES
(2, 'Horse', '<p>horse</p>\r\n', 6, '', '2018-01-29 03:29:18', '2018-02-06 09:26:09', 1),
(3, 'News', 'News', 0, '', '2018-01-29 03:29:18', '2018-02-05 09:26:23', 1),
(4, 'Sport', '<p>sport</p>\r\n', 3, '907104978.jpg', '2018-01-29 03:29:18', '2018-02-06 07:02:09', 1),
(5, 'Magazine', '', 0, '', '2018-01-29 03:29:18', '2018-02-06 07:04:38', 1),
(6, 'Animals', '', 3, '', '2018-01-29 03:29:18', '2018-01-29 03:30:54', 0),
(7, 'Lion', '', 6, '', '2018-01-29 03:29:18', '2018-01-29 03:30:54', 0),
(8, 'Fashion', '', 5, '', '2018-01-29 03:29:18', '2018-02-06 07:04:59', 0),
(9, 'Whale', '', 6, 'new_year.jpg', '2018-01-29 03:32:59', '2018-02-02 02:13:04', 0),
(10, 'Football', '', 4, '907104978.jpg', '2018-01-29 06:22:25', '2018-01-29 06:22:25', 0);

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE IF NOT EXISTS `slide` (
`slide_id` int(11) NOT NULL,
  `slide_title` varchar(255) DEFAULT NULL,
  `slide_path` varchar(255) DEFAULT NULL,
  `slide_url` varchar(255) DEFAULT NULL,
  `slide_created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `slide_modified_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `slide_status` int(2) DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`slide_id`, `slide_title`, `slide_path`, `slide_url`, `slide_created_date`, `slide_modified_date`, `slide_status`) VALUES
(1, 'N3P2', '', 'google.com', '2018-02-07 08:04:53', '2018-02-07 08:41:56', 1),
(2, 'N3P s2', '2018/02/07/9f7f357fc55cac5aee24dba9af800ba9db2f20be.jpg', 'google.com', '2018-02-07 08:05:05', '2018-02-07 08:05:05', 1),
(3, 'N3P s2', '2018/02/07/128c8985ff76ec07803555da5c18a53ab2d3e741.jpg', 'google.com', '2018-02-07 08:05:10', '2018-02-07 08:05:10', 1),
(4, 'New Slide', '2018/02/07/2062cfb30aa1b3f67458771d0839f38eb82fd92c.jpg', 'google.com', '2018-02-07 08:10:20', '2018-02-07 08:10:20', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`user_id` int(11) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(200) NOT NULL,
  `user_status` int(2) DEFAULT '0',
  `user_registered_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_name` varchar(255) DEFAULT NULL,
  `user_avatar` varchar(500) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_email`, `user_password`, `user_status`, `user_registered_date`, `user_name`, `user_avatar`) VALUES
(1, 'phuong.nam1712@gmail.com', '', 2, '2018-02-06 04:17:30', 'Nguyễn Ngọc Phương Nam', 'https://scontent.xx.fbcdn.net/v/t1.0-1/c0.0.100.100/p100x100/10385297_736159686442735_4089956323335916095_n.jpg?oh=4dd22d5fa44f8e2d60c226a08cfbffe8&oe=5B1A6942'),
(2, 'nam.nam951712@gmail.com', '', 2, '2018-02-06 06:37:05', 'Nam Nguyễn', 'https://lh3.googleusercontent.com/-XdUIqdMkCWA/AAAAAAAAAAI/AAAAAAAAAAA/4252rscbv5M/photo.jpg'),
(3, 'Nam1712Nam', '', 2, '2018-02-06 06:37:20', 'Nguyễn Nam', 'https://abs.twimg.com/sticky/default_profile_images/default_profile_normal.png'),
(4, 'nam.nguyen@gmail.com', '$2y$10$AxS/7SMcgZZM0JVImOIVouYR6Kj.1BUPFiI0tAPMuf8ThI1J9Sbbm', 1, '2018-02-06 06:38:52', 'N3P', 'avatar.png'),
(5, 'min.min@gmail.com', '$2y$10$a3YUmbtUYHK.71DY2jOCmuVmIbeW4AolEYrg/uU1no96Y5XdiPXGu', 1, '2018-02-06 06:41:39', 'Minh Meo Nguyen', 'avatar.png'),
(6, 'tt2@gmail.com', '$2y$10$kvRli7kC0ruLUcmsYcbDy.Q7la9iFAmuVDWTtaz3jbT8stN32eIQW', 1, '2018-02-06 06:50:11', 'John March', 'avatar.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
 ADD PRIMARY KEY (`article_id`), ADD FULLTEXT KEY `idx1` (`article_name`,`article_content`,`article_des`,`article_tags`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
 ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
 ADD PRIMARY KEY (`slide_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
MODIFY `slide_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
