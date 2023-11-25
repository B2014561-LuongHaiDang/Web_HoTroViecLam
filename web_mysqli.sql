-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 25, 2023 lúc 07:18 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web_mysqli`
--

DELIMITER $$
--
-- Thủ tục
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `phanhoi` (IN `record_id` INT, IN `new_phan_hoi` VARCHAR(1000))   BEGIN
    UPDATE tbl_phanhoikhachhang
    SET phan_hoi = new_phan_hoi
    WHERE id_phanhoikhachhang = record_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `suavieclam` (IN `record_id` INT, IN `new_vitri_tuyendung` VARCHAR(200), IN `new_tencongty` VARCHAR(200), IN `new_vitri_congty` VARCHAR(200), IN `new_mucluong_tuyendung` VARCHAR(100), IN `new_images` VARCHAR(1000), IN `new_link` VARCHAR(1000))   BEGIN
    UPDATE tbl_thongtintuyendung
    SET vitri_tuyendung = new_vitri_tuyendung,
        tencongty = new_tencongty,
        vitri_congty = new_vitri_congty,
        mucluong_tuyendung = new_mucluong_tuyendung,
        images = new_images,
        link = new_link
    WHERE id_thongtintuyendung = record_id;
END$$

--
-- Các hàm
--
CREATE DEFINER=`root`@`localhost` FUNCTION `soluongvieclam` () RETURNS INT(11)  BEGIN
    DECLARE soluong INT;
    SELECT COUNT(*) INTO soluong FROM tbl_thongtintuyendung WHERE da_duyet=1;
    RETURN soluong;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`, `admin_status`) VALUES
(5, 'admin@gmail.com', 'b0baee9d279d34fa1dfd71aadb908c3f', 0),
(6, 'admin2@gmail.com', '3d2172418ce305c7d16d4b05597c6a59', 0),
(7, 'admin3@gmail.com', 'b7bc2a2f5bb6d521e64c8974c143e9a0', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_dangky_nguoitimviec`
--

CREATE TABLE `tbl_dangky_nguoitimviec` (
  `id_dangky` int(11) NOT NULL,
  `tenkhachhang` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `diachi` varchar(200) NOT NULL,
  `dienthoai` varchar(10) NOT NULL,
  `matkhau` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_dangky_nguoitimviec`
--

INSERT INTO `tbl_dangky_nguoitimviec` (`id_dangky`, `tenkhachhang`, `email`, `diachi`, `dienthoai`, `matkhau`) VALUES
(24, 'Đăng', 'admin@gmail.com', 'Bạc Liêu', '0941673654', 'b0baee9d279d34fa1dfd71aadb908c3f');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_dangky_nhatuyendung`
--

CREATE TABLE `tbl_dangky_nhatuyendung` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `matkhau` varchar(100) NOT NULL,
  `tencongty` varchar(200) NOT NULL,
  `sonhanvien` int(11) NOT NULL,
  `sodienthoai` varchar(10) NOT NULL,
  `diachi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_dangky_nhatuyendung`
--

INSERT INTO `tbl_dangky_nhatuyendung` (`id`, `email`, `matkhau`, `tencongty`, `sonhanvien`, `sodienthoai`, `diachi`) VALUES
(16, 'admin@gmail.com', 'b0baee9d279d34fa1dfd71aadb908c3f', 'Lương Đăng', 100, '0941673654', 'Bạc Liêu');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_phanhoikhachhang`
--

CREATE TABLE `tbl_phanhoikhachhang` (
  `id_phanhoikhachhang` int(11) NOT NULL,
  `ten` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `nhanxet` varchar(1000) NOT NULL,
  `ngay_nhanxet` timestamp NOT NULL DEFAULT current_timestamp(),
  `phan_hoi` varchar(1000) NOT NULL,
  `gia_tri` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_phanhoikhachhang`
--

INSERT INTO `tbl_phanhoikhachhang` (`id_phanhoikhachhang`, `ten`, `email`, `nhanxet`, `ngay_nhanxet`, `phan_hoi`, `gia_tri`) VALUES
(45, 'Lương Hải Đăng', 'admin@gmail.com', '.......', '2023-11-24 14:32:33', '', 0),
(46, 'Đăng', 'admin@gmail.com', '..................', '2023-11-24 15:36:57', '.......', 1),
(47, 'Admin', 'admin@gmail.com', '11111', '2023-11-24 15:51:42', '', 0),
(48, 'Admin', 'admin@gmail.com', '11111', '2023-11-24 15:52:31', '', 0),
(49, 'dang123', 'luonghaidang4561@gmail.com', '11111111', '2023-11-24 16:21:08', '', 0),
(50, 'Admin', 'admin@gmail.com', '1111111111111111', '2023-11-24 16:51:10', '', 0),
(51, 'Đăng', 'admin@gmail.com', '111111111111111111', '2023-11-25 05:05:10', '', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_thongtintuyendung`
--

CREATE TABLE `tbl_thongtintuyendung` (
  `id_thongtintuyendung` int(11) NOT NULL,
  `vitri_tuyendung` varchar(200) NOT NULL,
  `tencongty` varchar(200) NOT NULL,
  `vitri_congty` varchar(200) NOT NULL,
  `mucluong_tuyendung` varchar(100) NOT NULL,
  `images` varchar(1000) NOT NULL,
  `da_duyet` tinyint(1) NOT NULL DEFAULT 0,
  `link` varchar(255) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `expired_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_thongtintuyendung`
--

INSERT INTO `tbl_thongtintuyendung` (`id_thongtintuyendung`, `vitri_tuyendung`, `tencongty`, `vitri_congty`, `mucluong_tuyendung`, `images`, `da_duyet`, `link`, `created_at`, `expired_at`) VALUES
(17, 'KĨ THUẬT CƠ KHÍ', 'CTY TNHH VIỆT Á CHÂU', 'Bà Rịa - Vũng Tàu', '15 triệu', 'https://vietachautravel.com.vn/wp-content/uploads/2021/01/Logo-VIETACHAU-1536x988-1.jpg', 1, 'https://vietachau.com.vn/', '2023-11-10', '2023-11-30'),
(21, 'NHÂN VIÊN PHỤ KHO', 'CTY OPPO VIỆT NAM', 'Hà Nội', '10 triệu', 'https://d3nax9sawz4kbl.cloudfront.net/company_logos/ce0e5f7cd227a464ea605c56cd649c23.png', 1, 'https://www.oppo.com/vn/', '2023-11-10', '2023-11-30'),
(22, 'NHÂN VIÊN BÁN HÀNG', 'CTY CỔ PHẦN KĨ THUẬT SỐ FPT', 'Bình Dương', '11 triệu - 13 triệu', 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/11/FPT_logo_2010.svg/800px-FPT_logo_2010.svg.png', 1, 'https://frt.vn/', '2023-11-10', '2023-11-30'),
(23, 'TƯ VẤN VIÊN', 'CTY CỔ PHẦN VÀNG BẠC ĐÁ QUÝ', 'Bà Rịa - Vũng Tàu', '6 triệu', 'https://cdn.haitrieu.com/wp-content/uploads/2022/01/Logo-PNJ-Wh-Sl.png', 1, 'https://pnj.com.vn/', '2023-11-10', '2023-11-30'),
(24, 'NHÂN VIÊN KẾ TOÁN', 'TẬP ĐOÀN GIÁO DỤC RES', 'Cần Thơ', '6 triệu', 'https://data.canthojob.vn/canthojob/2023/9/9/tap-doan-giao-duc-res-canthojobvn-638298545024730116.png', 1, 'https://res.edu.vn/', '2023-11-10', '2023-11-30'),
(30, 'KẾ TOÁN TRƯỞNG', 'CTY TTNN TẬP ĐOÀN THÀNH', 'Hồ Chí Minh', '10 triệu', ' images/4.png', 1, 'https://thanhconghome.com/ ', '2023-11-10', '2023-11-30'),
(32, 'NHÂN VIÊN KẾ TOÁN', 'CÔNG TY TNHH IMAX', 'Hồ Chí Minh', '10 triệu', 'https://dxwd4tssreb4w.cloudfront.net/image/144a1a63d921993b30ae470d7745a4aa', 1, 'http://imaxvietnam.vn/', '2023-11-10', '2023-11-30'),
(33, 'Nhân Viên QC', 'Công Ty TNHH DSM Việt Nam', 'Hưng Yên', 'Thương lượng', 'https://dxwd4tssreb4w.cloudfront.net/image/8f51809f6b1b19f41c0e2bbe1542abdb', 1, 'https://www.dsm.com/', '2023-11-10', '2023-11-30'),
(34, 'Nhân Viên Tư Vấn', 'CTY CỔ PHẦN BÁN LẺ KỸ THUẬT', 'Đồng Nai', '7 triệu', 'https://vietachautravel.com.vn/wp-content/uploads/2021/01/Logo-VIETACHAU-1536x988-1.jpg', 1, 'https://frt.vn/', '2023-11-10', '2023-11-30'),
(35, 'CHUYÊN VIÊN Y TẾ', 'CTY CỔ PHẦN DƯỢC PHẨM', 'Bạc Liêu', '12 triệu', 'https://dxwd4tssreb4w.cloudfront.net/image/aef36760030e0bfa021a3ca79f47b0e6      ', 1, 'https://nhathuocthanthien.com.vn/thuong-hieu/pasteur-phap/      ', '2023-11-10', '2023-11-30'),
(39, 'CHUYÊN VIÊN', 'CTY OPPO VIỆT NAM', 'Bạc Liêu', '10 triệu', 'https://d3nax9sawz4kbl.cloudfront.net/company_logos/ce0e5f7cd227a464ea605c56cd649c23.png', 1, 'https://www.oppo.com/vn/', '2023-11-13', '2023-11-30'),
(40, 'TRỢ GIẢNG TIẾNG ANH', 'CTY TTHH ĐẦU TƯ CHÂU Á', 'Hải Phòng', '11 triệu', 'https://dxwd4tssreb4w.cloudfront.net/image/97d86cb447a780d685b345d610ddfec6', 1, 'https://apeci.com.vn/', '2023-11-15', '2023-11-30'),
(41, 'LẬP TRÌNH VIÊN', 'REGINA MIRACLE INTERNATIONAL', 'Hải Phòng', '14 triệu', 'https://dxwd4tssreb4w.cloudfront.net/image/c37908acc172f56bdffbe48ddc623136', 1, 'https://reginamiracle.com.vn/', '2023-11-15', '2023-11-30'),
(42, 'BỘ PHẬN BẢO TRÌ', 'PILGRIMAGE VILLAGE BOUTIQUE', 'Thừa Thiên - Huế', '17 triệu', 'https://d3nax9sawz4kbl.cloudfront.net/company_logos/fdbd9c32299fc7ea6e95cc44714ca1d0.png', 1, 'https://www.pilgrimagevillage.com/', '2023-11-15', '2023-11-30'),
(43, 'NHÂN VIÊN TƯ VẤN', 'FE CREDIT', 'Bạc Liêu', '12 triệu', 'https://dxwd4tssreb4w.cloudfront.net/image/41d1e102d18cfdeda24cc519e8cc0865', 1, 'https://fecredit.com.vn/', '2023-11-15', '2023-11-30'),
(44, 'NHÂN VIÊN BOOKING', 'TẬP ĐOÀN GIÁO DỤC RES', 'Hà Nội', '18 triệu', 'https://d3nax9sawz4kbl.cloudfront.net/company_logos/007351838bd26c968f77d5102b2a44e2.png', 1, 'https://res.edu.vn/', '2023-11-15', '2023-11-30'),
(45, 'PROJECT MANAGER', 'CTY CP TẬP ĐOÀN OMI GROUP', 'Hà Nội', 'Cạnh Tranh', 'https://d3nax9sawz4kbl.cloudfront.net/company_logos/6d702a1d6824d6e5bc24359f5cd080d0.png', 1, 'https://omigroup.vn/', '2023-11-15', '2023-11-30'),
(50, 'NHÂN VIÊN BÁN HÀNG', 'CÔNG TY CỔ PHẦN ABC', 'Đông Hải, Bạc Liêu', '10.000.000 vnđ', 'logo_cty5.png ', 2, ' ', '2023-11-21', '2023-11-30'),
(52, 'NHÂN VIÊN BÁN HÀNG', 'CÔNG TY CỔ PHẦN ABC', 'Đông Hải, Bạc Liêu', '10.000.000vnđ', 'https://vietachautravel.com.vn/wp-content/uploads/2021/01/Logo-VIETACHAU-1536x988-1.jpg', 3, '', '2023-11-21', '2023-11-20'),
(53, 'NHÂN VIÊN BÁN HÀNG', 'CÔNG TY CỔ PHẦN ABC', 'Đông Hải, Bạc Liêu', '10.000.000vnđ', 'https://vietachautravel.com.vn/wp-content/uploads/2021/01/Logo-VIETACHAU-1536x988-1.jpg', 2, '', '2023-11-24', '2023-12-09'),
(54, 'NHÂN VIÊN BÁN HÀNG', 'CÔNG TY CỔ PHẦN ABC', 'Đông Hải, Bạc Liêu', '10.000.000vnđ', 'https://vietachautravel.com.vn/wp-content/uploads/2021/01/Logo-VIETACHAU-1536x988-1.jpg', 2, '', '2023-11-24', '2023-12-01'),
(55, 'LẬP TRÌNH VIÊN', 'CTY OPPO VIỆT NAM', 'Bạc Liêu', '15 triệu', 'images/logo_cty6.png  ', 1, '  1', '2023-11-24', '2023-12-01'),
(56, 'NHÂN VIÊN BÁN HÀNG', 'CÔNG TY CỔ PHẦN ', 'Đông Hải, Bạc Liêu', '12 triệu', 'images/login_NTD.png ', 1, 'https://www.oppo.com/vn/ ', '2023-11-25', '2023-12-10');

--
-- Bẫy `tbl_thongtintuyendung`
--
DELIMITER $$
CREATE TRIGGER `tu_dong_xoa` BEFORE UPDATE ON `tbl_thongtintuyendung` FOR EACH ROW BEGIN
    IF NEW.expired_at <= CURDATE() THEN
        SET NEW.da_duyet = 3;
    END IF;
END

CREATE TRIGGER `tu_dong_xoa` BEFORE DELETE ON `tbl_thongtintuyendung`
FOR EACH ROW
BEGIN
    IF OLD.expired_at <= CURDATE() THEN
        DELETE FROM `tbl_thongtintuyendung` WHERE `expired_at` <= CURDATE();
    END IF;
END;
$$
DELIMITER ;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Chỉ mục cho bảng `tbl_dangky_nguoitimviec`
--
ALTER TABLE `tbl_dangky_nguoitimviec`
  ADD PRIMARY KEY (`id_dangky`);

--
-- Chỉ mục cho bảng `tbl_dangky_nhatuyendung`
--
ALTER TABLE `tbl_dangky_nhatuyendung`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_phanhoikhachhang`
--
ALTER TABLE `tbl_phanhoikhachhang`
  ADD PRIMARY KEY (`id_phanhoikhachhang`);

--
-- Chỉ mục cho bảng `tbl_thongtintuyendung`
--
ALTER TABLE `tbl_thongtintuyendung`
  ADD PRIMARY KEY (`id_thongtintuyendung`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `tbl_dangky_nguoitimviec`
--
ALTER TABLE `tbl_dangky_nguoitimviec`
  MODIFY `id_dangky` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `tbl_dangky_nhatuyendung`
--
ALTER TABLE `tbl_dangky_nhatuyendung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `tbl_phanhoikhachhang`
--
ALTER TABLE `tbl_phanhoikhachhang`
  MODIFY `id_phanhoikhachhang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT cho bảng `tbl_thongtintuyendung`
--
ALTER TABLE `tbl_thongtintuyendung`
  MODIFY `id_thongtintuyendung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
