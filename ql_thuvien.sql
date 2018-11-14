-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th10 14, 2018 lúc 12:17 PM
-- Phiên bản máy phục vụ: 5.7.21
-- Phiên bản PHP: 5.6.35

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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ma_muontra` int(11) NOT NULL,
  `ma_sach` int(11) NOT NULL,
  `ghi_chu` text,
  `da_tra` int(11) NOT NULL,
  `ngay_tra` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `ct_muontra`
--

INSERT INTO `ct_muontra` (`id`, `ma_muontra`, `ma_sach`, `ghi_chu`, `da_tra`, `ngay_tra`) VALUES
(1, 7, 1, '', 1, '14/11/2018 12:00 AM'),
(2, 11, 2, NULL, 0, NULL),
(3, 12, 4, NULL, 0, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `docgia`
--

DROP TABLE IF EXISTS `docgia`;
CREATE TABLE IF NOT EXISTS `docgia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ten_docgia` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phai` int(11) DEFAULT NULL,
  `ngay_sinh` varchar(255) DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `diachi` varchar(255) DEFAULT NULL,
  `so_dienthoai` varchar(255) DEFAULT NULL,
  `so_the` varchar(11) DEFAULT NULL,
  `ghi_chu` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `docgia`
--

INSERT INTO `docgia` (`id`, `ten_docgia`, `email`, `phai`, `ngay_sinh`, `images`, `diachi`, `so_dienthoai`, `so_the`, `ghi_chu`) VALUES
(1, 'Nguyễn Văn Tèo', 'trongnguyen@asiantechhub.com', 0, '10/10/1993', 'upload/44717948_2312054872406678_5642637895006158848_o.jpg', '184/38/49/72 Âu Dương Lân , Phường 3, Quận 8, Tp.HCM', '01698991355', '000001', 'asd');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `muon_tra`
--

DROP TABLE IF EXISTS `muon_tra`;
CREATE TABLE IF NOT EXISTS `muon_tra` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `so_the` varchar(255) NOT NULL,
  `ma_nhanvien` int(11) NOT NULL,
  `ma_sach` int(11) NOT NULL,
  `ngay_muon` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `muon_tra`
--

INSERT INTO `muon_tra` (`id`, `so_the`, `ma_nhanvien`, `ma_sach`, `ngay_muon`) VALUES
(7, '000001', 1, 1, '10/10/2018 12:00 AM'),
(9, '000001', 1, 1, '10/10/2018 12:00 AM'),
(10, '000001', 1, 4, '10/10/2018 12:00 AM'),
(11, '000001', 1, 2, '10/10/2018 12:00 AM'),
(12, '000003', 1, 4, '10/10/2018 12:00 AM');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhan_vien`
--

DROP TABLE IF EXISTS `nhan_vien`;
CREATE TABLE IF NOT EXISTS `nhan_vien` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ten_nhanvien` varchar(255) DEFAULT NULL,
  `phai` tinyint(4) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `dia_chi` text,
  `ngay_sinh` varchar(255) DEFAULT NULL,
  `so_dienthoai` varchar(255) DEFAULT NULL,
  `ghi_chu` text,
  `images` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhaxuatban`
--

DROP TABLE IF EXISTS `nhaxuatban`;
CREATE TABLE IF NOT EXISTS `nhaxuatban` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ten_nxb` varchar(255) NOT NULL,
  `dia_chi` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `thong_tin` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `nhaxuatban`
--

INSERT INTO `nhaxuatban` (`id`, `ten_nxb`, `dia_chi`, `email`, `thong_tin`) VALUES
(1, 'NXB Trẻ', '161 Lý Chính Thắng, Phường 7, Quận 3, Hồ Chí Minh', 'hopthubandoc@nxbtre.com.vn', 'Nhà xuất bản Trẻ xuất bản sách và văn hóa phẩm các loại, phục vụ chủ yếu cho thanh niên, thiếu nhi, tổ chức Đoàn các cấp của thành phố, đồng thời phục vụ bạn đọc trong và ngoài nước.\r\n\r\nXuất bản phẩm chủ yếu của NXB Trẻ là:\r\n\r\n- Sách, tài liệu chính trị, pháp luật về thanh niên và thiếu nhi\r\n- Sách kiến thức phổ thông về khoa học – công nghệ, kinh tế\r\n- Sách thiếu niên, nhi đồng; sách văn hóa – xã hội, nghệ thuật; văn học\r\n- Từ điển các loại (trừ từ điển chuyên ngành); sách tham khảo cho học sinh các bậc học phổ thông\r\n- Sách kinh tế, sách doanh nhân, kỹ năng sống và truyện tiểu thuyết hay, nổi tiếng.\r\n- Các xuất bản phẩm khác phù hợp với tôn chỉ, mục đích, đối tượng phục vụ của Nhà Xuất bản Trẻ.\r\n\r\nCác tựa sách nổi tiếng của NXB Trẻ ở thể loại văn học, sách kinh doanh như: Ngồi Khóc Trên Cây, Ngày Xưa Có Một Con Bò, Có Hai Con Mèo Ngồi Bên Cửa Sổ, Đừng Bao Giờ Đi Ăn Một Mình ...'),
(2, 'Nhà Xuất Bản Văn Học', '59 Đỗ Quang, KĐT Trung Hòa Nhân Chính, Cầu Giấy, Hà Nội', '$nhanamtrans@gmail.com', 'Công Ty Sách Nhã Nam là công ty chuyên về xuất bản sách văn học, truyện tiểu thuyết. Nhã Nam được độc giả yêu thích qua những cuốn sách tạo ra cơn sốt như Nhật Ký Đặng Thùy Trâm, Rừng Nauy, Nếu Em Không Phải Một Giấc Mơ, Nhóc Nicolas Những Chuyện Chưa Kể... Sách của Nhã Nam không những hay, đẹp mà còn rất phong phú, xứng đáng là cầu nối giữa độc giả Việt Nam với nền văn hóa đọc mênh mông của thế giới. Ngoài sách văn học độc giả có thể tìm mua một số tựa sách kinh tế, sách doanh nhân do Nhã Nam xuất bản tại Tiki.vn\r\n\r\nMột số tác phẩm văn học, truyện tiểu thuyết hay, sách kinh doanh, truyện trinh thám bán chạy của Nhã Nam là: Chuyện Con Mèo Dạy Hải Âu Bay,Em Sẽ Đến Cùng Cơn Mưa, Một Lít Nước Mắt,  , Nhà Đầu Tư Thông Minh, Triết Lý Kinh Doanh Thực Tiễn , Nụ Hôn Của Casanova...'),
(3, 'Nhà Xuất Bản Tổng hợp TP.HCM', '11H Nguyễn Thị Minh Khai, Bến Nghé, Quận 1, Hồ Chí Minh', '$triviet@firstnews.com.vn', 'Công Ty Sách First News được thành lập ngày 10/12/1994 với tên gọi Ban Biên Dịch First News với ý tưởng lúc bấy giờ là “Mang đến cho bạn đọc những thông tin, kiến thức mới nhất và hữu ích nhất\" . First News hiện có Nhà sách Trí Việt và hơn 150 đại lý liên kết phát hành trên toàn quốc và một số đại lý phát hành ở nước ngoài.\r\n\r\nCho đến nay, First News đã có gần 1000 đầu sách và ấn phẩm các loại phát hành với hàng triệu bản in được bạn đọc yêu thích thuộc các tủ sách: Sống đẹp, Hạt giống Tâm hồn, Sách Kinh doanh, Sách doanh nhân, Phong thủy, Thường thức Gia đình, Danh nhân, Thiếu nhi, Sách Ngoại ngữ, Kiến trúc, Âm nhạc và Truyện tiểu thuyết văn học. Một số tựa sách bán chạy nhất của First News: Đắc Nhân Tâm, 22 Quy Luật Bất Biến Trong Marketing (sách kinh tế),  7 Thói Quen Để Thành Đạt, Sống Cho Điều Ý Nghĩa Hơn - Nick Vujicic ...'),
(4, 'Nhà Xuất Bản Phụ Nữ', '211 – 213 Võ Văn Tần, P. 5, Quận 3, TP. HCM  Xem chi tiết tại: https://tgmbooks.vn/mua-tai-nha-sach/', '$bandoc@tgmbooks.vn', 'TGM Books là công ty chuyên về xuất bản sách phát triển bản thân tại Việt Nam.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sach`
--

DROP TABLE IF EXISTS `sach`;
CREATE TABLE IF NOT EXISTS `sach` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ten_sach` varchar(255) DEFAULT NULL,
  `ma_tacgia` varchar(255) DEFAULT NULL,
  `ma_theloai` varchar(255) DEFAULT NULL,
  `ma_nxb` varchar(255) DEFAULT NULL,
  `nam_xuatban` varchar(255) DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `ghi_chu` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `sach`
--

INSERT INTO `sach` (`id`, `ten_sach`, `ma_tacgia`, `ma_theloai`, `ma_nxb`, `nam_xuatban`, `images`, `ghi_chu`) VALUES
(1, 'Đời Ngắn Đừng Ngủ Dài', '1', '2', '2', '05-2014', 'upload/doi-ngan-dung-ngu-dai.jpg', '       “Mọi lựa chọn đều giá trị. Mọi bước đi đều quan trọng. Cuộc sống vẫn diễn ra theo cách của nó, không phải theo cách của ta. Hãy kiên nhẫn. Tin tưởng. Hãy giống như người thợ cắt đá, đều đặn từng nhịp, ngày qua ngày. Cuối cùng, một nhát cắt duy nhất sẽ phá vỡ tảng đá và lộ ra viên kim cương. Người tràn đầy nhiệt huyết và tận tâm với việc mình làm không bao giờ bị chối bỏ. Sự thật là thế.”\r\n\r\nBằng những lời chia sẻ thật ngắn gọn, dễ hiểu về những trải nghiệm và suy ngẫm trong đời, Robin Sharma tiếp tục phong cách viết của ông từ cuốn sách Điều vĩ đại đời thường để mang đến cho độc giả những bài viết như lời tâm sự, vừa chân thành vừa sâu sắc.'),
(2, 'Nhà Giả Kim', '2', '2', '2', '10-2013', 'upload/img117.u3059.d20170616.t100547.729023.jpg', 'Tất cả những trải nghiệm trong chuyến phiêu du theo đuổi vận mệnh của mình đã giúp Santiago thấu hiểu được ý nghĩa sâu xa nhất của hạnh phúc, hòa hợp với vũ trụ và con người.\r\n\r\nTiểu thuyết Nhà giả kim của Paulo Coelho như một câu chuyện cổ tích giản dị, nhân ái, giàu chất thơ, thấm đẫm những minh triết huyền bí của phương Đông. Trong lần xuất bản đầu tiên tại Brazil vào năm 1988, sách chỉ bán được 900 bản. Nhưng, với số phận đặc biệt của cuốn sách dành cho toàn nhân loại, vượt ra ngoài biên giới quốc gia, Nhà giả kim đã làm rung động hàng triệu tâm hồn, trở thành một trong những cuốn sách bán chạy nhất mọi thời đại, và có thể làm thay đổi cuộc đời người đọc.\r\n\r\n“Nhưng nhà luyện kim đan không quan tâm mấy đến những điều ấy. Ông đã từng thấy nhiều người đến rồi đi, trong khi ốc đảo và sa mạc vẫn là ốc đảo và sa mạc. Ông đã thấy vua chúa và kẻ ăn xin đi qua biển cát này, cái biển cát thường xuyên thay hình đổi dạng vì gió thổi nhưng vẫn mãi mãi là biển cát mà ông đã biết từ thuở nhỏ. Tuy vậy, tự đáy lòng mình, ông không thể không cảm thấy vui trước hạnh phúc của mỗi người lữ khách, sau bao ngày chỉ có cát vàng với trời xanh nay được thấy chà là xanh tươi hiện ra trước mắt. ‘Có thể Thượng đế tạo ra sa mạc chỉ để cho con người biết quý trọng cây chà là,’ ông nghĩ.”\r\n\r\n- Trích Nhà giả kim'),
(3, 'Đắc Nhân Tâm (Khổ Lớn)', '3', '1', '3', '03-2016', 'upload/9558a365adde6688d4c71a200d78310c.jpg', 'Tại sao Đắc Nhân Tâm luôn trong Top sách bán chạy nhất thế giới?\r\n\r\nBởi vì đó là cuốn sách mọi người đều nên đọc.\r\n\r\nHiện nay có một sự hiểu nhầm đã xảy ra. Tuy Đắc Nhân Tâm là tựa sách hầu hết mọi người đều biết đến, vì những danh tiếng và mức độ phổ biến, nhưng một số người lại “ngại” đọc. Lý do vì họ tưởng đây là cuốn sách “dạy làm người” nên có tâm lý e ngại. Có lẽ là do khi giới thiệu về cuốn sách, người ta luôn gắn với miêu tả đây là “nghệ thuật đối nhân xử thế”, “nghệ thuật thu phục lòng người”… Những cụm từ này đã không còn hợp với hiện nay nữa, gây cảm giác xa lạ và không thực tế.'),
(4, 'Tôi Tài Giỏi - Bạn Cũng Thế', '4', '1', '4', '08-2010', 'upload/toi-tai-gioi.jpg', 'Khi bạn cầm trên tay quyển sách này, có nghĩa là bạn đã có chiếc chìa khóa đến sự thành công cùng bảng hướng dẫn sử dụng.\r\n\r\nTrong chúng ta, bất kỳ ai cũng muốn chính bản thân mình trở thành người tài giỏi, có thể giải quyết mọi vấn đề một cách hiệu quả nhất. Và để có được những điều đó quyển sách này sẽ giúp bạn bằng những hướng dẫn học tập chi tiết nhất.\r\n\r\nTác giả không chỉ đơn thuần giải thích người khác đã thành công như thế nào, mà còn nói làm sao để họ làm được như thế để giúp người đọc khám phá ra tiềm năng của bản thân, và phát huy điều đó. Ngoài ra, sách còn cung cấp những phương pháp học thông minh (như áp dụng các công cụ học bằng cả não bộ như Sơ Đồ Tư Duy, phát triển trí nhớ siêu việt để ghi nhớ các sự kiện, con số một cách dễ dàng, thành thạo việc quản lý thời gian và xác định mục tiêu). Adam Khoo đã cho thấy, tài giỏi mang lại sự tự tin như thế nào và còn hướng dẫn bạn cách thức trở thành người tài giỏi. Qua đó độc giả sẽ lập được kế hoạch cho cuộc đời của chính mình.\r\n\r\nTôi Tài Giỏi - Bạn Cũng Thế sẽ giúp tìm ra giải pháp tốt nhất cho mọi vấn đề, và giúp nhận ra cách thức để thành công. Tuy nhiên để làm một người tài giỏi thì người đọc cần đặt quyển sách xuống và thực thi ngay các kế hoạch. Đương nhiên, không phải chỉ chăm chỉ ngày một, ngày hai mà mỗi người phải thực hiện lâu dài, thậm chí cả đời thì mới đạt được những gì mình muốn.\r\n\r\nThật sự đây là một quyển sách rất tuyệt vời và bổ ích, đem lại cho chúng ta những kinh nghiệm quý báu. Một quyển sách không - thể - thiếu trong tủ sách!\r\n\r\n©\r\n\r\n“Thật không biết phải làm sao với con trai chúng tôi. Nó được gởi đi học thêm khắp nơi mà vẫn làm bài thi tệ hại. Chúng tôi tự hỏi sau này nó có làm nên trò trống gì không nữa”…\r\n\r\nĐó chính là những gì mà cha mẹ của Adam Khoo đã từng than vãn về sự kém cõi và kết quả thi cử thảm hại của cậu bé Adam nhiều năm về trước. May mắn thay, vào thời điểm tăm tối nhất trong đời, Adam đã tìm thấy và học tập theo công thức thành công của những người tài giỏi vượt bậc. Chính vì thế, từ một cậu học trò kém cỏi nhất trong số những học sinh kém, không những anh đã vươn lên để đạt đuợc kết quả xuất sắc trong các kỳ thi cuối cấp hai và cấp ba, anh còn đuợc xếp hạng trong số 1% sinh viên tài năng nhất của trường Đại học Quốc Gia Singapore (NUS).\r\n\r\nTôi tài giỏi, bạn cũng thế ! tổng hợp những kỹ năng và phương pháp đã mang tới thành công vượt bậc cho cậu bé Adam kém cõi và dĩ nhiên bạn cũng có thể thành công như vậy! Quyển sách này dành cho các học sinh, sinh viên, các bậc phụ huynh, các nhà giáo và bất kỳ ai luôn mong muốn tăng cường khả năng tận dụng não bộ hoặc phát huy tối đa tiềm năng của mình.\r\n\r\nNếu bạn muốn “tài giỏi” trong các phương pháp học tập và suy nghĩ vượt bậc, hãy đọc quyển sách này. Bạn sẽ học đuợc cách:\r\n\r\nTăng cường sự tự tin và làm chủ cuộc sống của bạn\r\n\r\nÁp dụng các công cụ học bằng cả não bộ như Sơ Đồ tư Duy\r\n\r\nPhát huy trí nhớ siêu việt để nhớ lại các sự kiện, con số một cách dễ dàng\r\n\r\nThành thạo việc quản lý thời gian và xác định mục tiêu\r\n\r\nMang lại khả năng đạt được những thành tích cao nhất có thể\r\n\r\nÁp dụng các phương pháp thi cử hiệu quả để “chiến đấu” và “Chiến thắng” trong các kỳ thi quan trọng.\r\n\r\nTài năng đặc biệt của Adam nằm ở việc anh có thể hệ thống và chia sẻ các kỹ thuật và phương pháp mà bất kỳ học sinh nào cũng có thể áp dụng để đạt được những kết quả xuất sắc như anh đã từng đạt được.\r\n\r\nMục Lục Sách Tôi Tài Giỏi, Bạn Cũng Thế !\r\n\r\nLời mở đầu của Tony Buzan và Ernest Wong\r\nPhần 1: Tôi tài giỏi, bạn cũng thế!\r\n\r\nChương 1: Từ đần độn trở thành thiên tài\r\nChương 2: Quá trình học tập hiệu quả\r\nChương 3: Bạn đã sẵn sàng để thành công chưa?\r\nChương 4: Tôi tin tôi có thể bay cao… và tôi làm được\r\nPhần 2: Những phương pháp học siêu đẳng\r\n\r\nChương 5: Bạn sở hữu bộ não của một thiên tài\r\nChương 6: Phương pháp đọc để nắm bắt thông tin\r\nChương 7: Sơ đồ tư duy: Công cụ ghi chú tối ưu\r\nChương 8: Trí nhờ siêu đẳng dành cho từ\r\nChương 9: Trí nhớ siêu đẳng dành cho số\r\nChương 10: Mô hình trí nhớ\r\nChương 11: Nghệ thuật ứng dụng lý thuyết vào thực hành\r\nPhần 3: Động lực cá nhân của bạn\r\n\r\nChương 12: Dám mơ ước: Sức mạnh của mục tiêu\r\nChương 13: Động lực mạnh mẽ - vượt qua sự lười biếng\r\nChương 14: Công thức để đạt điểm tuyệt đối\r\nChương 15: Thời gian là tiền bạc\r\nChương 16: Tạo quyết tâm mạnh mẽ tức thì\r\nPhần 4: Phương pháp thi cử\r\n\r\nChương 17: Tăng tốc về đích\r\nChương 18: Chiến thắng và vinh quang.\r\nMời bạn đón đọc.'),
(5, 'Ai Lấy Miếng Pho Mát Của Tôi (Tái Bản)', '5', '4', '3', '04-2016', 'upload/ai-lay-mieng-pho-mat-cua-toi-a.u547.d20160407.t084016.jpg', 'Đây là một câu chuyện giản dị chứa đựng những triết lý sâu sắc về cách vượt qua những khó khăn và thay đổi trong cuộc sống.\r\n\r\nCâu chuyện kể về hai chú chuột và hai con người tí hon cùng chung sống trong một mê cung rộng lớn luôn tất bật đi tìm những miếng phó mát để nuôi sống mình và để cảm thấy hạnh phúc. Hai chú chuột Đánh Hơi và Nhanh Nhẹn chỉ có bộ não đơn giản của loài gặm nhắm, vốn không có óc phân tích và phán đoán, nhưng chúng lại có bản năng rất nhanh nhạy và sắc sảo. Như các con chuột khác, chúng đặc biệt rất thích pho mát và sẵn sàng làm bất cứ điều gì để có pho mát.\r\n\r\nTrong khi đó, Chậm Chạp và và U Lì là những con người tí hon – một sinh vật cũng nhỏ như chuột nhưng có hình dạng và cách suy nghĩ giống như con người bây giờ. Họ dùng khả năng tư duy và trí thông minh vốn có của loài người để tìm ra những loại phó mát đặc biệt. Cho đến một ngày kia, cả bốn nhân vật phải đối mặt với sự thay đổi, một biến cố khủng khiếp: Đó là toàn bộ số pho mát trong kho của họ đã biến mất. Và mỗi nhân vật có những phản ứng khác nhau tùy theo tính cách riêng của mỗi người.\r\n\r\nChúng ta phải chuẩn bị tâm lý, tư thế sẵn sàng để ứng phó với những thay đổi và hãy tham gia cùng với sự thay đổi, vứt bỏ cái cũ và mạnh dạn làm những gì mình có thể; nếu không tự mỗi người sẽ tự hủy hoại cơ hội tồn tại của mình.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tacgia`
--

DROP TABLE IF EXISTS `tacgia`;
CREATE TABLE IF NOT EXISTS `tacgia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ten_tacgia` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `ghichu` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tacgia`
--

INSERT INTO `tacgia` (`id`, `ten_tacgia`, `website`, `ghichu`) VALUES
(1, 'Robin Sharma', 'tiki.vn', 'Bằng những lời chia sẻ thật ngắn gọn, dễ hiểu về những trải nghiệm và suy ngẫm trong đời, Robin Sharma tiếp tục phong cách viết của ông từ cuốn sách Điều vĩ đại đời thường để mang đến cho độc giả những bài viết như lời tâm sự, vừa chân thành vừa sâu sắc.'),
(2, 'Paulo Coelho', 'tiki.vn', 'Tất cả những trải nghiệm trong chuyến phiêu du theo đuổi vận mệnh của mình đã giúp Santiago thấu hiểu được ý nghĩa sâu xa nhất của hạnh phúc, hòa hợp với vũ trụ và con người.'),
(3, 'Dale Carnegie', 'tiki.vn', 'Đắc Nhân Tâm cụ thể và chi tiết với những chỉ dẫn để dẫn đạo người, để gây thiện cảm và dẫn dắt người khác,... những hướng dẫn ấy, qua thời gian'),
(4, 'Adam Khoo', 'tiki.vn', 'Quyển sách sẽ giúp tìm ra giải pháp tốt nhất cho mọi vấn đề, và giúp nhận ra cách thức để thành công'),
(5, 'Spencer Johnson', 'tiki.vn', 'Đây là một câu chuyện giản dị chứa đựng những triết lý sâu sắc về cách vượt qua những khó khăn và thay đổi trong cuộc sống');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theloai`
--

DROP TABLE IF EXISTS `theloai`;
CREATE TABLE IF NOT EXISTS `theloai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ten_theloai` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `theloai`
--

INSERT INTO `theloai` (`id`, `ten_theloai`) VALUES
(1, 'Kỹ năng'),
(2, 'Văn Học'),
(3, 'Kinh Tế'),
(4, 'Thiếu Nhi');

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
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `thethuvien`
--

INSERT INTO `thethuvien` (`id`, `ngay_batdau`, `ngay_ketthuc`, `ghi_chu`) VALUES
(000001, '10/10/2018', '17/10/1993', ''),
(000002, '10/10/2018', '17/10/1993', ''),
(000003, '10/10/2018', '17/10/1993', ''),
(000004, '10/10/2018', '17/10/1993', ''),
(000005, '10/10/2018', '17/10/1993', ''),
(000006, '10/10/2018', '17/10/1993', ''),
(000007, '10/10/2018', '17/10/1993', ''),
(000008, '10/10/2018', '17/10/1993', ''),
(000009, '10/10/2018', '17/10/1993', ''),
(000010, '10/10/2018', '17/10/1993', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
