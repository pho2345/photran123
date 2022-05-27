-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 19, 2019 lúc 10:55 AM
-- Phiên bản máy phục vụ: 10.1.38-MariaDB
-- Phiên bản PHP: 7.2.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webbansach`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sach`
--

CREATE TABLE `sach` (
  `MaSach` varchar(10) NOT NULL,
  `MaTheLoai` varchar(10) NOT NULL,
  `TenTacGia` varchar(100) NOT NULL,
  `TenSach` varchar(100) NOT NULL,
  `HinhAnh` varchar(255) NOT NULL,
  `Gia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sach`
--

INSERT INTO `sach` (`MaSach`, `MaTheLoai`, `TenTacGia`, `TenSach`, `HinhAnh`, `Gia`) VALUES
('CN0', 'CN', 'Nhã Nam', '101 Bộ Phim Việt Nam Hay Nhất', 'CN0.png', 178500),
('CN1', 'CN', 'Neil deGrasse Tyson', 'Vật Lý Thiên Văn Cho Người Vội Vã', 'CN1.png', 68000),
('CN10', 'CN', 'Ji Soo-Yeon', 'Cửa Hàng Kỳ Ảo', 'CN10.png', 49600),
('CN11', 'CN', 'Michio Kaku', 'Các Thế Giới Song Song', 'CN11.png', 94400),
('CN12', 'CN', 'Song Ji Hye', 'Khu Vườn Thời Gian', 'CN12.png', 55200),
('CN13', 'CN', 'Nancy Peña', 'Haiku - Đồng Vọng Bốn Mùa', 'CN13.png', 64000),
('CN14', 'CN', 'Millie Marotta', 'Thiên Đường Nhiệt Đới', 'CN14.png', 54400),
('CN15', 'CN', 'Nhiều tác giả', 'Lịch Sử Tự Nhiên', 'CN15.png', 586500),
('CN16', 'CN', 'Lê Thành Khôi', 'Lịch Sử Việt Nam, Từ Nguồn Gốc Đến Giữa Thế Kỷ XX', 'CN16.png', 144000),
('CN17', 'CN', 'Robert B.Laughlin', 'Khoa Học Khám Phá - Một Vũ Trụ Lạ Thường', 'CN17.png', 126650),
('CN18', 'CN', 'Minh Quang', 'Ai Cập Sinh Tử Kỳ Thư', 'CN18.png', 76000),
('CN2', 'CN', 'Lương Đức Thiệp', 'Xã Hội Việt Nam', 'CN2.png', 73100),
('CN3', 'CN', 'Fukuzawa Yukichi', 'BÀN VỀ VĂN MINH', 'CN3.png', 118150),
('CN4', 'CN', 'William L. Shirer', 'Sự Trỗi Dậy Và Suy Tàn Của Đế Chế Thứ Ba - Lịch Sử Đức Quốc Xã', 'CN4.png', 276000),
('CN5', 'CN', 'Andrew Roberts', 'NAPOLEON Đại Đế', 'CN5.png', 346800),
('CN6', 'CN', 'Thucydides', 'Lịch Sử Chiến Tranh Peloponnese', 'CN6.png', 207200),
('CN7', 'CN', 'Thucydides', 'Trí Tuệ Giả Tạo - Internet Đã Làm Gì Chúng Ta?', 'CN7.png', 72250),
('CN8', 'CN', 'E. H. Gombrich', 'Chuyện Nhỏ Trong Thế Giới Lớn', 'CN8.png', 93500),
('CN9', 'CN', 'Juliet Jue - Sunghee Shin', 'Chín Tháng Mười Ngày', 'CN9.png', 52000),
('KNS0', 'KNS', 'Garance Doré', 'YÊU X SỐNG X PHONG CÁCH', 'KNS0.png', 169150),
('KNS1', 'KNS', 'Niki Brantmark', 'LAGOM – BIẾT ĐỦ MỚI LÀ TỰ DO', 'KNS1.png', 127200),
('KNS10', 'KNS', 'Michael Hyatt - Daniel Harkavy', 'Bản Kế Hoạch Thay Đổi Định Mệnh', 'KNS10.png', 63200),
('KNS11', 'KNS', 'Rolf Dobelli', 'Nghệ Thuật Tư Duy Rành Mạch', 'KNS11.png', 87150),
('KNS12', 'KNS', 'Steve Harvey', 'Nói Luôn Cho Nó Vuông', 'KNS12.png', 64000),
('KNS2', 'KNS', 'Ehara Hiroyuki', 'Hộ chiếu hạnh phúc', 'KNS2.png', 55200),
('KNS3', 'KNS', 'Gong Ji Young', 'Công Thức Nấu Ăn Tặng Con Gái', 'KNS3.png', 117300),
('KNS4', 'KNS', 'Michel Piquemal, Thomas Baas', 'Những Câu Hỏi Triết Học Từ Bé Tới Lớn', 'KNS4.png', 93500),
('KNS5', 'KNS', 'Windy', 'Thả Thính Là Phải Dính! - 54 Cách Giúp Bạn Tán Đổ \"Crush\"', 'KNS5.png', 95200),
('KNS6', 'KNS', 'David McKee', 'Bộ Sách - Elmer Và Những Người Bạn (Bộ 6 Cuốn)', 'KNS6.png', 140400),
('KNS7', 'KNS', 'Takeshi Furukawa', 'Mình Là Cá, Việc Của Mình Là Bơi', 'KNS7.png', 71200),
('KNS8', 'KNS', 'Mari Tamagawa', 'Mặc Kệ Thiên Hạ - Sống Như Người Nhật', 'KNS8.png', 63200),
('KNS9', 'KNS', 'Rhonda Byrne', 'The Secret – Sức Mạnh', 'KNS9.png', 178200),
('KT0', 'KT', 'Napoleon Hill', 'Quyền Năng Làm Giàu', 'KT0.PNG', 84150),
('KT1', 'KT', 'John Sviokla, Mitch Cohen', 'Bí Quyết Của Các Tỷ Phú Tư Thân Lập Nghiệp', 'KT1.PNG', 95200),
('KT10', 'KT', 'Nhiều tác giả', 'Lý Thuyết Trò Chơi Trong Kinh Doanh', 'KT10.PNG', 88000),
('KT11', 'KT', 'Đào Trinh Nhất', 'Nhật Bản Duy Tân 30 Năm', 'KT11.PNG', 87200),
('KT12', 'KT', 'Thomas Friedman', 'Nóng, Phẳng, Chật (Tái Bản 2014)', 'KT12.PNG', 140250),
('KT13', 'KT', 'Radha Chadha, Paul Husband', 'Tình Yêu Hàng Hiệu', 'KT13.PNG', 176800),
('KT14', 'KT', 'Chris Anderson', 'Hùng Biện Kiểu Ted 1 - Bí Quyết Diễn Thuyết Trước Đám Đông “Chuẩn” Ted (Tái Bản 2018)', 'KT14.PNG', 135200),
('KT15', 'KT', 'Kim Rando', 'Tương Lai Nghề Nghiệp Của Tôi', 'KT15.PNG', 103200),
('KT16', 'KT', 'John C Maxwell', 'Lãnh Đạo Giỏi Hỏi Câu Hỏi Hay', 'KT16.PNG', 103200),
('KT17', 'KT', 'Đỗ Huân', 'Nhà Đào Tạo Sành Sỏi', 'KT17.PNG', 119200),
('KT18', 'KT', 'Nassim Nicholas Taleb', 'Khả Năng Cải Thiện Nghịch Cảnh', 'KT18.PNG', 170000),
('KT2', 'KT', 'Napoleon Hill', 'Làm Giàu', 'KT2.PNG', 90100),
('KT3', 'KT', 'Russell Brunson', 'Bí Mật Dotcom', 'KT3.PNG', 142800),
('KT4', 'KT', 'Duncan Clark', 'Tỷ Phú \"Khùng\" Jack Ma Và Đế Chế Alibaba', 'KT4.PNG', 82170),
('KT5', 'KT', 'Adam Lashinsky', 'Uber - Chuyến Đi Bão Táp', 'KT5.PNG', 159200),
('KT6', 'KT', 'Phil Knight', 'Gã Nghiện Giày - Tự Truyện Của Nhà Sáng Lập NIKE', 'KT6.PNG', 136000),
('KT7', 'KT', 'Rich DeVos', 'Con Đường Tỷ Phú - Hồi Ký Rich Devos', 'KT7.PNG', 134300),
('KT8', 'KT', 'Howard Schultz', 'Tiến Bước', 'KT8.PNG', 123250),
('KT9', 'KT', 'Philip E. Tetlock, Dan Gardner', 'Siêu dự báo', 'KT9.PNG', 175200),
('LS0', 'LS', 'Đào Duy Anh', 'Lịch sử Việt Nam', 'LS0.png', 160000),
('LS1', 'LS', 'Hoàng Quốc Hải', 'Bão táp triều Trần', 'LS1.png', 600000),
('LS2', 'LS', 'Alfred Thayer Mahan', 'Lịch sử của sức mạnh trên biển', 'LS2.png', 161500),
('LS3', 'LS', 'Nguyễn Đức Hiệp', 'SÀI GÒN - CHỢ LỚN QUA NHỮNG TƯ LIỆU QUÝ TRƯỚC 1945', 'LS3.png', 119000),
('LS4', 'LS', 'Tôn Thất Hân - Hồng Nhung - Hồng Thiết', 'Việt sử diễn nghĩa ', 'LS4.png', 151200),
('LS5', 'LS', 'Vĩnh Sính', 'Giao điểm giữa hai nên văn hóa Việt Nam - Nhật Bản', 'LS5.png', 100000),
('NN0', 'NN', 'Romi Park', 'Thần Chú Ngữ Pháp Của Winnie - Học Tiếng Anh Dễ Như Ăn Bánh', 'NN0.PNG', 74700),
('NN1', 'NN', 'Richie Hahn', 'Master Toefl Junior Basic (CEFR Level A2) - Kèm 1 CD', 'NN1.PNG', 158000),
('NN2', 'NN', 'Nhiều tác giả', 'IELTS Success Formula - Academic (Kèm 1 CD)', 'NN2.PNG', 298000),
('NN3', 'NN', 'Nhiều tác giả', 'Model Essays For IELTS Writing', 'NN3.PNG', 198000),
('NN4', 'NN', 'Nhiều tác giả', 'TOEFL 600 Essential Flashcards For Toefl iBT', 'NN4.PNG', 185300),
('NN5', 'NN', 'Nhiều tác giả', 'Developing Skills For The TOEFL iBT Intermediate (Kèm 10 CD)', 'NN5.PNG', 272000),
('TN0', 'TN', 'Ulysses Moore', 'Ở Tiệm Những Tấm Bản Đồ Bị Lãng Quên', 'TN0.png', 87200),
('TN1', 'TN', 'Hwang Sun-mi', 'Chó Xanh Lông Dài', 'TN1.png', 78000),
('TN2', 'TN', 'Virginie Aladjidi - Emmanuelle Tchoukriel', 'Atlas Muôn Loài', 'TN2.png', 123250),
('TN3', 'TN', 'Tô Hoài', 'Dế Mèn Phiêu Lưu Ký', 'TN3.png', 108000),
('TN4', 'TN', 'Nhiều tác giả', 'Những Nàng Tiên Trên Cây Màu Nhiệm', 'TN4.png', 127500),
('TN5', 'TN', 'Nhã Nam', 'Tom Sawyer Trên Khinh Khí Cầu & Tom Sawyer Làm Thám Tử', 'TN5.png', 56000),
('TT0', 'TT', 'MISA', 'Bạn Trai Bản Giới Hạn', 'TT0.PNG', 74800),
('TT1', 'TT', 'Higuchi Yuko', 'Con Mèo Số Một Thế Giới', 'TT1.PNG', 69700),
('TT10', 'TT', 'Phan Hồn Nhiên', 'Chuỗi Hạt Azoth', 'TT10.PNG', 56700),
('TT11', 'TT', 'Nguyễn Nhật Ánh', 'Chúc Một Ngày Tốt Lành', 'TT11.PNG', 84150),
('TT12', 'TT', 'Nguyễn Nhật Ánh', 'Ngồi Khóc Trên Cây', 'TT12.PNG', 93500),
('TT13', 'TT', 'Nguyễn Nhật Ánh', 'Có Hai Con Mèo Ngồi Bên Cửa Sổ', 'TT13.PNG', 72250),
('TT14', 'TT', 'Nguyễn Nhật Ánh', 'Lá Nằm Trong Lá', 'TT14.PNG', 59500),
('TT15', 'TT', 'Nguyễn Nhật Ánh', 'Cô Gái Đến Từ Hôm Qua', 'TT15.PNG', 38250),
('TT16', 'TT', 'Nguyễn Nhật Ánh', 'Những Cô Em Gái', 'TT16.PNG', 43350),
('TT17', 'TT', 'Nguyễn Nhật Ánh', 'Quán Gò Đi Lên', 'TT17.PNG', 52700),
('TT18', 'TT', 'Nguyễn Nhật Ánh', 'Ngôi Trường Mọi Khi', 'TT18.PNG', 50150),
('TT2', 'TT', 'Sasaki Masahiro', 'Ngàn Hạc Giấy Của Sadako', 'TT2.PNG', 58500),
('TT3', 'TT', 'Sarah Anderson', 'Đống Mềm Nhũn Hạnh Phúc', 'TT3.PNG', 61200),
('TT4', 'TT', 'Nguyễn Nhật Ánh', 'Tôi Thấy Hoa Vàng Trên Cỏ Xanh', 'TT4.PNG', 69700),
('TT5', 'TT', 'Nguyễn Nhật Ánh', 'Con Chó Nhỏ Mang Giỏ Hoa Hồng', 'TT5.PNG', 76500),
('TT6', 'TT', 'Arikawa Hiro', 'Nana Du Ký', 'TT6.PNG', 72000),
('TT7', 'TT', 'Nguyễn Nhật Ánh', 'Tôi Là Bêtô', 'TT7.PNG', 51000),
('TT8', 'TT', 'Nguyễn Nhật Ánh', 'Cho Tôi Xin Một Vé Đi Tuổi Thơ', 'TT8.PNG', 53550),
('TT9', 'TT', 'Vũ Hữu Nhân', 'Trời Xanh Của Táo', 'TT9.PNG', 63200),
('VH0', 'VH', 'Lý Dịch Phong', '1987 Rồi', 'VH0.PNG', 126400),
('VH1', 'VH', 'Chu Mặc', 'Thành Long Chưa Lớn Đã Già', 'VH1.PNG', 124000),
('VH10', 'VH', 'Dan Brown', 'Điểm Dối Lừa (Tái Bản 2018)', 'VH10.PNG', 148000),
('VH11', 'VH', 'Guillermo Del Toro - Chuck Hogan', 'Dị Chủng', 'VH11.PNG', 96000),
('VH12', 'VH', 'TADA Project', 'Hành Trình Tarot – Hiểu Về Quá Khứ, Tin Ở Hiện Tại, Nắm Lấy Tương Lai', 'VH12.PNG', 79200),
('VH13', 'VH', 'Stendhal', 'Đỏ Và Đen', 'VH13.PNG', 110700),
('VH14', 'VH', 'Charlotte Bronte', 'Jane Eyre', 'VH14.PNG', 108000),
('VH15', 'VH', 'Sakai Kikuko', 'Bài Hát Tuổi 17', 'VH15.PNG', 75200),
('VH16', 'VH', 'Nhiều tác giả', 'Dear Your Love - Gửi Người Yêu Dấu', 'VH16.PNG', 95200),
('VH17', 'VH', 'Cinderella', 'Tất Cả Đều Là Sự Sắp Xếp Tốt Nhất ', 'VH17.PNG', 94400),
('VH18', 'VH', 'George Saunders', 'Ngày Mười Tháng Mười Hai', 'VH18.PNG', 64780),
('VH2', 'VH', 'Jake Adelstein', 'Thế Giới Ngầm Tokyo', 'VH2.PNG', 127200),
('VH3', 'VH', 'Haruki Murakami', 'Nhật Ký Tuổi Trẻ - Lắng Nghe Gió Hát', 'VH3.PNG', 67500),
('VH4', 'VH', 'Tani Mizue', 'Ở Đây Sửa Kỷ Niệm Xưa - Tập 1', 'VH4.PNG', 92650),
('VH5', 'VH', 'Thủy Miểu', 'Cùng Nhau Lớn Lên, Cùng Nhau Già Đi', 'VH5.PNG', 76000),
('VH6', 'VH', 'Next Entertainment World', 'Chuyến tàu sinh tử', 'VH6.PNG', 119200),
('VH7', 'VH', 'Émile Gaboriau', 'Tội ác ở Orcival', 'VH7.PNG', 125600),
('VH8', 'VH', 'Higashino Keigo', 'Ảo Dạ', 'VH8.PNG', 126640),
('VH9', 'VH', 'Stephenie Meyer', 'Sinh Tử (Chạng Vạng Mới)', 'VH9.PNG', 153000);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `sach`
--
ALTER TABLE `sach`
  ADD PRIMARY KEY (`MaSach`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
