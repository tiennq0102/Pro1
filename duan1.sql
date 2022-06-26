/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 100422
 Source Host           : localhost:3306
 Source Schema         : duan1

 Target Server Type    : MySQL
 Target Server Version : 100422
 File Encoding         : 65001

 Date: 26/06/2022 17:34:46
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for bai_viet
-- ----------------------------
DROP TABLE IF EXISTS `bai_viet`;
CREATE TABLE `bai_viet`  (
  `ma_bai_viet` int NOT NULL AUTO_INCREMENT,
  `tieu_de` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `noi_dung_bv` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `anh_bai_viet` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngay_dang` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`ma_bai_viet`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 22 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bai_viet
-- ----------------------------
INSERT INTO `bai_viet` VALUES (1, 'Nhóm lập trình viên tuyên bố giải mã PlayStation 5 sắp thành công, mục tiêu mới cài game “chùa” lên hệ máy mới của Sony', 'Không giống như lửa, những game bom tấn trên PlayStation 5 không hề miễn phí và để duy trì kho game cũng nhưng tận hưởng tối đa những gì cỗ máy PS5 có thể mang lại, rất nhiều người đã phải cắn răng chi trả những khoản tiền kếch sù để sắm cho mình những đĩa DVD hay key bản quyền trên cửa hàng trực tuyến, dù cho việc “trao đổi đĩa” giữa người chơi vẫn diễn ra thường xuyên, nhưng không thể phủ nhận độ hút máu của hệ máy đến từ ông lớn của ngành giải trí Nhật Bản – Sony vẫn là cực kỳ khủng khiếp. <br>\r\nNhưng tình trạng này có thể sớm chấm dứt bởi mới đây, các hacker đã đạt được tiến bộ đáng kể trong việc vượt qua bảo mật của PS5. Cụ thể, nhóm Fail0verflow đã báo cáo rằng họ đã bóc tách được những “tập lệnh gốc rễ” nằm trong firmware của PS5, giúp họ tiến thêm một bước nữa để có thể tự do cài đặt phần mềm mà không bị Sony phát hiện.', 'bv1.jpg', '04/12/2021');
INSERT INTO `bai_viet` VALUES (14, 'Bộ sưu tập những bộ máy đẹp được khách hàng build tại HACOM: Lian Li O11 Dynamic XL ', 'Trọn bộ PC được khách hàng lựa chọn và đặt mua tại HANOICOMPUTER. Đây là một bộ PC với tản nhiệt nước Custom có tông trắng đen kết hợp với nước trong suốt. Tổng thể bộ máy sẽ đem lại cho chủ nhân một không gian làm việc cũng như giải trí vô cùng mát mẻ. <br>Thiết kế dựa trên form mẫu của vỏ case Lian Li O11 Dynamic XL, mẫu vỏ case hàng đầu cho tản nhiệt nước Custom với khả năng hỗ trợ tối đa cùng với đó là không gian rộng rãi và dễ dàng show ra các linh kiện bên trong. <br>Toàn bộ các thành phần của bộ tản nhiệt nước Custom đều được trang bị đèn led RGB 5v cho hiệu ứng màu sắc chuyển động, tạo nên sự rực rỡ cho bộ máy.\r\n', 'bv2.jpg', '05/12/2021');
INSERT INTO `bai_viet` VALUES (20, 'Nvidia chính thức công bố về Card đồ họa RTX 2060 12GB', 'Nvidia mới đây đã chính thức xác nhận thông tin về chiếc Card đồ họa RTX 2060 phiên bản 12GB sẽ đến tay người tiêu dùng trong thời gian tới. <br>Đúng như những gì dự kiến từ trước, RTX 2060 sẽ được làm lại và mang tới các thông số được cải thiện nhằm đáp ứng nhu cầu người dùng hiện nay. Đây chính là một phần trong kế hoạch nâng cấp các mẫu Card đồ họa RTX của Nvidia để khởi đầu cho năm 2022 sắp đến gần.<br>Khác với model ra mắt vào 2019, RTX 2060 12GB sẽ được tân trang với một vài điều chỉnh cải tiến. Cụ thể số nhân CUDA của phiên bản này là 2176 – ngang bằng với biến thể SUPER của 2 năm trước. Ở nền tảng GPU, chiếc Card giữ nguyên kiến trúc Turing và sử dụng GPU TU106. Xung nhịp cơ bản ở mức 1470Mhz và có thể boost lên đến 1650Mhz.', 'bv5.jpg', '08/12/2021');
INSERT INTO `bai_viet` VALUES (21, 'Card đồ họa RTX 3050 Desktop lộ ngày mở bán chính thức', 'Liên quan tới RTX 3050 dành cho phân khúc Desktop, thông tin mới đây đến từ một leaker cho biết chiếc Card đồ họa này sẽ được chính thức ra mắt và mở bán vào ngay trong tháng 1 năm 2022 tới.<br>Như đã đề cập ở bài viết trước, RTX 3050 sẽ là một trong số nhiều chiếc Card mà Nvidia chuẩn bị ra mắt người dùng ở tương lai gần. Một vài thông số cùng hiệu năng của sản phẩm này cũng đã lộ diện và được xác nhận bởi nhiều nguồn tin khác nhau.<br>Dự kiến sẽ có 2 phiên bản RTX 3050 Desktop là thường và Ti. So với những gì đang có ở trên các mẫu laptop hiện tại, nền tảng kiến trúc nhân GPU sẽ có vài cải tiến nhất định. Cụ thể thay vì sử dụng GPU GA107 của phân khúc mobile, Card đồ họa RTX 3050 Desktop sẽ mang nhân GA106 giống của 3060 và được tinh chỉnh lại.\r\n', 'bv3.jpg', '08/12/2021');

-- ----------------------------
-- Table structure for binh_luan
-- ----------------------------
DROP TABLE IF EXISTS `binh_luan`;
CREATE TABLE `binh_luan`  (
  `ma_binh_luan` int NOT NULL AUTO_INCREMENT,
  `ma_khach_hang` int NULL DEFAULT NULL,
  `ma_san_pham` int NULL DEFAULT NULL,
  `ma_bai_viet` int NULL DEFAULT NULL,
  `ten_khach_hang` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `noi_dung_bl` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `thoi_gian` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`ma_binh_luan`) USING BTREE,
  INDEX `lk_khachhang_binhluan`(`ma_khach_hang` ASC) USING BTREE,
  INDEX `lk_sanpham_binhluan`(`ma_san_pham` ASC) USING BTREE,
  INDEX `lk_baiviet_binhluan`(`ma_bai_viet` ASC) USING BTREE,
  CONSTRAINT `lk_baiviet_binhluan` FOREIGN KEY (`ma_bai_viet`) REFERENCES `bai_viet` (`ma_bai_viet`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `lk_khachhang_binhluan` FOREIGN KEY (`ma_khach_hang`) REFERENCES `khach_hang` (`ma_khach_hang`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `lk_sanpham_binhluan` FOREIGN KEY (`ma_san_pham`) REFERENCES `san_pham` (`ma_san_pham`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 118 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of binh_luan
-- ----------------------------
INSERT INTO `binh_luan` VALUES (107, NULL, 87, NULL, 'Ngô Việt Dũng', 'Xịn quá', '22:12:56 pm 08/12/2021');
INSERT INTO `binh_luan` VALUES (108, NULL, 87, NULL, 'Ngô Việt Dũng', 'Xịn quá', '22:13:00 pm 08/12/2021');
INSERT INTO `binh_luan` VALUES (111, NULL, NULL, 21, 'Ngô Việt Dũng', 'Con này chơi game sướng lắm !', '22:16:35 pm 08/12/2021');
INSERT INTO `binh_luan` VALUES (112, NULL, 49, NULL, 'Ngô Việt Dũng', 'Đắt quá !', '22:17:17 pm 08/12/2021');
INSERT INTO `binh_luan` VALUES (113, NULL, 49, NULL, 'Ngô Việt Dũng', 'Đắt quá !', '22:17:20 pm 08/12/2021');
INSERT INTO `binh_luan` VALUES (114, NULL, 49, NULL, 'Ngô Việt Dũng', 'Đắt quá !', '22:19:36 pm 08/12/2021');
INSERT INTO `binh_luan` VALUES (115, NULL, 104, NULL, 'Ngô Việt Dũng', 'Chuột này dởm quá ! Tiền nào của nấy :V', '22:31:43 pm 08/12/2021');
INSERT INTO `binh_luan` VALUES (116, NULL, 49, NULL, 'Tiến Buồn Ngủ', 'Hàng ngon', '22:35:25 pm 08/12/2021');
INSERT INTO `binh_luan` VALUES (117, NULL, 49, NULL, 'Tiến Buồn Ngủ', 'Hàng ngon', '22:35:28 pm 08/12/2021');

-- ----------------------------
-- Table structure for chi_tiet_hoa_don
-- ----------------------------
DROP TABLE IF EXISTS `chi_tiet_hoa_don`;
CREATE TABLE `chi_tiet_hoa_don`  (
  `ma_hoa_don` int NOT NULL,
  `ma_san_pham` int NOT NULL,
  `so_luong` int NOT NULL,
  `don_gia` int NOT NULL,
  `hinh_san_pham` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  INDEX `lk_hoadon_chitiethoadon`(`ma_hoa_don` ASC) USING BTREE,
  INDEX `lk_sanpham_chitiethoadon`(`ma_san_pham` ASC) USING BTREE,
  CONSTRAINT `lk_hoadon_chitiethoadon` FOREIGN KEY (`ma_hoa_don`) REFERENCES `hoa_don` (`ma_hoa_don`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `lk_sanpham_chitiethoadon` FOREIGN KEY (`ma_san_pham`) REFERENCES `san_pham` (`ma_san_pham`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of chi_tiet_hoa_don
-- ----------------------------
INSERT INTO `chi_tiet_hoa_don` VALUES (76, 55, 1, 29688000, 'MSI5.jpg');
INSERT INTO `chi_tiet_hoa_don` VALUES (76, 54, 1, 47499000, 'MSI4.jpg');
INSERT INTO `chi_tiet_hoa_don` VALUES (77, 122, 1, 15049000, 'ghe5.jpg');
INSERT INTO `chi_tiet_hoa_don` VALUES (77, 43, 1, 22499000, 'dell3.jpg');
INSERT INTO `chi_tiet_hoa_don` VALUES (78, 38, 1, 19999000, 'asus3.jpg');
INSERT INTO `chi_tiet_hoa_don` VALUES (78, 54, 1, 47499000, 'MSI4.jpg');
INSERT INTO `chi_tiet_hoa_don` VALUES (79, 38, 1, 19999000, 'asus3.jpg');
INSERT INTO `chi_tiet_hoa_don` VALUES (79, 141, 1, 25859000, '1Dell.png');
INSERT INTO `chi_tiet_hoa_don` VALUES (80, 104, 1, 139000, 'chuot1.jpg');
INSERT INTO `chi_tiet_hoa_don` VALUES (81, 49, 1, 52989000, 'apple4.jpg');
INSERT INTO `chi_tiet_hoa_don` VALUES (81, 122, 1, 15049000, 'ghe5.jpg');
INSERT INTO `chi_tiet_hoa_don` VALUES (82, 49, 2, 105978000, 'apple4.jpg');
INSERT INTO `chi_tiet_hoa_don` VALUES (82, 122, 1, 15049000, 'ghe5.jpg');
INSERT INTO `chi_tiet_hoa_don` VALUES (82, 117, 1, 55000, 'lotchuot5.jpg');
INSERT INTO `chi_tiet_hoa_don` VALUES (83, 54, 1, 47499000, 'MSI4.jpg');
INSERT INTO `chi_tiet_hoa_don` VALUES (84, 51, 1, 64000000, 'MSI1.png');
INSERT INTO `chi_tiet_hoa_don` VALUES (85, 102, 1, 639000, 'tainghe4.jpg');
INSERT INTO `chi_tiet_hoa_don` VALUES (86, 46, 1, 32309000, 'apple1.png');

-- ----------------------------
-- Table structure for gia_loc
-- ----------------------------
DROP TABLE IF EXISTS `gia_loc`;
CREATE TABLE `gia_loc`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `gia_loc` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of gia_loc
-- ----------------------------
INSERT INTO `gia_loc` VALUES (1, '0-5 triệu');
INSERT INTO `gia_loc` VALUES (2, '5-15 triệu');
INSERT INTO `gia_loc` VALUES (3, '15-30 triệu');
INSERT INTO `gia_loc` VALUES (4, '30-50 triệu');
INSERT INTO `gia_loc` VALUES (5, '50-100 triệu');

-- ----------------------------
-- Table structure for hoa_don
-- ----------------------------
DROP TABLE IF EXISTS `hoa_don`;
CREATE TABLE `hoa_don`  (
  `ma_hoa_don` int NOT NULL AUTO_INCREMENT,
  `ma_khach_hang` int NULL DEFAULT NULL,
  `ten_khach_hang` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `dia_chi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` int NOT NULL,
  `phuong_thuc_thanh_toan` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tong_tien` int NOT NULL,
  `trang_thai` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT '0' COMMENT '0. Đơn hàng mới \r\n1. Đang xử lý \r\n2. Đang giao hàng \r\n3. Đã giao hàng',
  `ngay_dat_hang` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`ma_hoa_don`) USING BTREE,
  INDEX `lk_khachhang_hoadon`(`ma_khach_hang` ASC) USING BTREE,
  CONSTRAINT `lk_khachhang_hoadon` FOREIGN KEY (`ma_khach_hang`) REFERENCES `khach_hang` (`ma_khach_hang`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 87 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hoa_don
-- ----------------------------
INSERT INTO `hoa_don` VALUES (76, 20, 'Ngô Việt Dũng', 'Hương Canh - Bình Xuyên - Vĩnh Phúc', 839569138, '1', 77187000, '0', '21:53:56 pm 08/12/2021');
INSERT INTO `hoa_don` VALUES (77, 20, 'Ngô Việt Dũng', 'Quất Lưu - Bình Xuyên - Vĩnh Phúc', 839569138, '3', 37548000, '0', '21:54:25 pm 08/12/2021');
INSERT INTO `hoa_don` VALUES (78, 20, 'Ngô Việt Dũng', 'Quất Lưu - Bình Xuyên - Vĩnh Phúc', 839569138, '2', 67498000, '0', '22:27:12 pm 08/12/2021');
INSERT INTO `hoa_don` VALUES (79, 20, 'Ngô Việt Dũng', 'Quất Lưu - Bình Xuyên - Vĩnh Phúc', 839569138, '1', 45858000, '0', '22:31:21 pm 08/12/2021');
INSERT INTO `hoa_don` VALUES (80, 20, 'Ngô Việt Dũng', 'Quất Lưu - Bình Xuyên - Vĩnh Phúc', 839569138, '1', 139000, '0', '22:32:00 pm 08/12/2021');
INSERT INTO `hoa_don` VALUES (81, 21, 'Tiến Buồn Ngủ', 'Bắc Giang', 337664279, '3', 68038000, '0', '22:34:25 pm 08/12/2021');
INSERT INTO `hoa_don` VALUES (82, 21, 'Tiến Buồn Ngủ', 'Bắc Giang', 337664279, '2', 227060000, '0', '22:36:43 pm 08/12/2021');
INSERT INTO `hoa_don` VALUES (83, 22, 'Lê Đức Dũng', 'Xuân Thọ Triệu Sơn Thanh Hóa', 327025224, '3', 47499000, '0', '22:37:43 pm 08/12/2021');
INSERT INTO `hoa_don` VALUES (84, 22, 'Lê Đức Dũng', 'Trần Duy Hưng Cầu Giay Hà Nội', 123456789, '2', 64000000, '0', '22:39:01 pm 08/12/2021');
INSERT INTO `hoa_don` VALUES (85, 22, 'Lê Đức Dũng', 'Trịnh Văn Bô Nam Từ Liêm Hà Nội', 327025224, '2', 639000, '0', '22:40:31 pm 08/12/2021');
INSERT INTO `hoa_don` VALUES (86, 21, 'Tiến Buồn Ngủ', 'Bắc Giang', 337664279, '1', 32309000, '0', '17:22:28 pm 26/06/2022');

-- ----------------------------
-- Table structure for khach_hang
-- ----------------------------
DROP TABLE IF EXISTS `khach_hang`;
CREATE TABLE `khach_hang`  (
  `ma_khach_hang` int NOT NULL AUTO_INCREMENT,
  `ten_khach_hang` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `mat_khau` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` varchar(13) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `dia_chi` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `vai_tro` tinyint NOT NULL DEFAULT 0 COMMENT '0. Khách hàng\r\n1. Admin',
  PRIMARY KEY (`ma_khach_hang`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 24 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of khach_hang
-- ----------------------------
INSERT INTO `khach_hang` VALUES (20, 'Ngô Việt Dũng', 'dungnvph17931@fpt.edu.vn', 'vietdung', '0839569138', 'Quất Lưu - Bình Xuyên - Vĩnh Phúc', 1);
INSERT INTO `khach_hang` VALUES (21, 'Tiến Buồn Ngủ', 'tiennqph17903@fpt.edu.vn', '123456', NULL, NULL, 1);
INSERT INTO `khach_hang` VALUES (22, 'Lê Đức Dũng', 'dungldc6ts42020@gmail.com', 'dung1234', NULL, NULL, 1);
INSERT INTO `khach_hang` VALUES (23, 'admin', 'admin@gmail.com', 'admin', NULL, NULL, 0);

-- ----------------------------
-- Table structure for loai_hang
-- ----------------------------
DROP TABLE IF EXISTS `loai_hang`;
CREATE TABLE `loai_hang`  (
  `ma_loai_hang` int NOT NULL AUTO_INCREMENT,
  `ten_loai_hang` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`ma_loai_hang`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 28 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of loai_hang
-- ----------------------------
INSERT INTO `loai_hang` VALUES (5, 'PC');
INSERT INTO `loai_hang` VALUES (13, 'Linh Kiện');
INSERT INTO `loai_hang` VALUES (14, 'Phụ Kiện');
INSERT INTO `loai_hang` VALUES (27, 'Laptop');

-- ----------------------------
-- Table structure for san_pham
-- ----------------------------
DROP TABLE IF EXISTS `san_pham`;
CREATE TABLE `san_pham`  (
  `ma_san_pham` int NOT NULL AUTO_INCREMENT,
  `ten_san_pham` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `don_gia` int NULL DEFAULT NULL,
  `hinh_san_pham` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `mo_ta` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `luot_xem` int NOT NULL DEFAULT 0,
  `giam_gia` int NOT NULL DEFAULT 0,
  `ma_loai_hang` int NULL DEFAULT NULL,
  PRIMARY KEY (`ma_san_pham`) USING BTREE,
  INDEX `lk_sanpham_loaihang`(`ma_loai_hang` ASC) USING BTREE,
  CONSTRAINT `lk_sanpham_loaihang` FOREIGN KEY (`ma_loai_hang`) REFERENCES `loai_hang` (`ma_loai_hang`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 146 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of san_pham
-- ----------------------------
INSERT INTO `san_pham` VALUES (36, 'Laptop Asus Gaming ROG Strix G533QR-HF113T', 55999000, 'asus1.jpg', 'Laptop Asus Gaming ROG Strix G533QR-HF113T (Ryzen 9 5900HX/2*8GB RAM/1TB SSD/15.6 FHD 300hz/RTX 3070 8GB/Win10)', 0, 0, 27);
INSERT INTO `san_pham` VALUES (37, 'Laptop Asus Gaming ROG Flow 13 GV301QC-K6052T', 38499000, 'asus2.jpg', 'Laptop Asus Gaming ROG Flow 13 GV301QC-K6052T (R9 5900HS/16GB RAM/512GB SSD/13.4 Touch /RTX3050 4GB/Win10/Bút/Túi/Đen)', 0, 0, 27);
INSERT INTO `san_pham` VALUES (38, 'Laptop Asus VivoBook A515EP-BQ498T', 19999000, 'asus3.jpg', 'Laptop Asus VivoBook A515EP-BQ498T (i5 1135G7/8GB RAM/512GB SSD/15.6 FHD/MX330 2GB/Win10/Bạc)', 0, 0, 27);
INSERT INTO `san_pham` VALUES (39, 'Laptop Asus Gaming ROG Zephyrus Duo GX551QS-HB263T ', 28599000, 'asus4.jpg', 'Laptop Asus Gaming ROG Zephyrus Duo GX551QS-HB263T (R9 5980HS/32GB RAM/2TB SSD/15.6 UHD 120Hz/RTX 3080 16GB/Win10/Xám/Balo/Chuột)', 0, 0, 27);
INSERT INTO `san_pham` VALUES (40, 'Laptop Asus Gaming ROG Zephyrus Duo GX551QS-HB263T', 28599000, 'asus5.jpg', 'Laptop Asus Gaming ROG Zephyrus Duo GX551QS-HB263T (R9 5980HS/32GB RAM/2TB SSD/15.6 UHD 120Hz/RTX 3080 16GB/Win10/Xám/Balo/Chuột)', 0, 0, 27);
INSERT INTO `san_pham` VALUES (41, 'Laptop Dell Vostro 3500', 19999000, 'dell1.jpg', 'Laptop Dell Vostro 3500 (i5-1135G7/ 8GB/256GB SSD/ 15.6 inchFHD/ MX330 2G/Ubuntu/Đen) (NK_Bảo hành tại HACOM)', 0, 0, 27);
INSERT INTO `san_pham` VALUES (42, 'Laptop Dell Inspiron 5415(70262929)', 20000000, 'dell2.jpg', 'Laptop Dell Inspiron 5415(70262929) (R5 5500U 8GB RAM/256GB SSD/14.0 inch FHD/Win10+Office HS 19/Bạc) (2021)', 0, 0, 27);
INSERT INTO `san_pham` VALUES (43, 'Laptop Dell Vostro 5510 (70253901)', 22499000, 'dell3.jpg', 'Laptop Dell Vostro 5510 (70253901) (i5 11300H/8GB RAM/512GB SSD/15.6 inch FHD /Win10+Office/Xám) (2021)', 0, 0, 27);
INSERT INTO `san_pham` VALUES (44, 'Laptop Dell Latitude 3520 (70251603)', 15298000, 'dell4.jpg', 'Laptop Dell Latitude 3520 (70251603) (i3 1115G4 4GB RAM/256GB SSD/15.6 inch HD/Fedora/Đen) (2021)', 0, 0, 27);
INSERT INTO `san_pham` VALUES (45, 'Laptop Dell Inspiron 5410 2 in 1 (N4I5547W) ', 26899000, 'dell5.jpg', 'Laptop Dell Inspiron 5410 2 in 1 (N4I5547W) (i5 1155G7/8GB RAM/512GB SSD/MX350 2G/14.0 inch FHD Touch/Bút cảm ứng/Win10+Office/Bạc) (2021)', 0, 0, 27);
INSERT INTO `san_pham` VALUES (46, 'Apple Macbook Air 13 (MGN73SA/A)', 32309000, 'apple1.png', 'Apple Macbook Air 13 (MGN73SA/A) (Apple M1/8GB RAM/512GB SSD/13.3 inch IPS/Mac OS/Xám) (NEW)', 0, 0, 27);
INSERT INTO `san_pham` VALUES (47, 'Apple Macbook Pro 13 Touchbar (Z11C000CH)', 44429000, 'apple2.png', 'Apple Macbook Pro 13 Touchbar (Z11C000CH) (Apple M1/16GB RAM/512GB SSD/13.3 inch IPS/Mac OS/Xám)', 103, 0, 27);
INSERT INTO `san_pham` VALUES (48, 'Apple Macbook Pro 14” (MKGP3SA/A) ', 52989000, 'apple3.jpg', 'Apple Macbook Pro 14” (MKGP3SA/A) (Apple M1 Pro/16GB RAM/512GB SSD/14.2 inch/Mac OS/Xám) (2021)\"', 0, 0, 27);
INSERT INTO `san_pham` VALUES (49, 'Apple Macbook Pro 14” (MKGR3SA/A) ', 52989000, 'apple4.jpg', 'Apple Macbook Pro 14” (MKGR3SA/A) (Apple M1 Pro/16GB RAM/512GB SSD/14.2 inch/Mac OS/Bạc) (2021)', 0, 0, 27);
INSERT INTO `san_pham` VALUES (50, 'Apple Macbook Pro 13 Touchbar (MWP82)', 54529000, 'apple5.jpg', 'Apple Macbook Pro 13 Touchbar (MWP82) (i5 2.0Ghz/16GB RAM/1TB SSD/13.3inch IPS/Mac OS/Bạc) (2020)', 0, 0, 27);
INSERT INTO `san_pham` VALUES (51, 'Laptop MSI Gaming GS66 Stealth (11UG-210VN)', 64000000, 'MSI1.png', 'Laptop MSI Gaming GS66 Stealth (11UG-210VN) (i7 11800H 32GB RAM/2TB SSD/RTX3070 8G/15.6 inch FHD 300Hz/Win 10) (2021)', 0, 0, 27);
INSERT INTO `san_pham` VALUES (52, 'Laptop MSI Summit E13 Flip Evo (A11MT-211VN)', 38499000, 'MSI2.png', 'Laptop MSI Summit E13 Flip Evo (A11MT-211VN) (i7 1185G7/16GB RAM/1TB SSD/13.4 inch FHD Touch/Win10/Bút MSI/Đen) (2021)', 0, 0, 27);
INSERT INTO `san_pham` VALUES (53, 'Laptop MSI Creator 15 (A10SDT-483VN)', 34899000, 'MSI3.png', 'Laptop MSI Creator 15 (A10SDT-483VN) (i7 10750H 16GB RAM/512GB SSD/GTX1660Ti 6G/15.6 inch FHD Touch/Win 10/Xám)', 0, 0, 27);
INSERT INTO `san_pham` VALUES (54, 'Máy tính xách tay MSI Gaming GP76 Leopard 10UE-604VN', 47499000, 'MSI4.jpg', 'Máy tính xách tay MSI Gaming GP76 Leopard 10UE-604VN (i7 10870H/32GB RAM/1TB SSD/RTX3060 6G/17.3 inch FHD 144Hz/win 10) (2021)', 0, 0, 27);
INSERT INTO `san_pham` VALUES (55, 'Laptop MSI Gaming Katana GF76 (11UC-096VN)', 29688000, 'MSI5.jpg', 'Laptop MSI Gaming Katana GF76 (11UC-096VN) (i7 11800H 8GB RAM/512GB SSD/RTX3050 4GB/17.3 inch FHD 144Hz/Win10/Đen) (2021)', 0, 0, 27);
INSERT INTO `san_pham` VALUES (56, 'CPU AMD Ryzen 7 2700', 5599000, 'CPU_ADM1.jpg', 'CPU AMD Ryzen 7 2700 (3.2GHz turbo up to 4.1GHz, 8 nhân 16 luồng, 16MB Cache, 65W) - Socket AMD AM4', 0, 0, 13);
INSERT INTO `san_pham` VALUES (57, 'CPU AMD Ryzen Threadripper 3960X', 36799000, 'CPU_ADM2.jpg', 'CPU AMD Ryzen Threadripper 3960X (3.8GHz turbo up to 4.5GHz, 24 nhân 48 luồng, 140MB Cache, 280W) - Socket sTRX4', 0, 0, 13);
INSERT INTO `san_pham` VALUES (58, 'CPU AMD Ryzen 5 3500', 3989000, 'CPU_ADM3.jpg', 'CPU AMD Ryzen 5 3500 (3.6GHz turbo up to 4.1GHz, 6 nhân 6 luồng, 16MB Cache, 65W) - Socket AMD AM4\"', 0, 0, 13);
INSERT INTO `san_pham` VALUES (59, 'CPU AMD Athlon 3000G', 1589000, 'CPU_ADM4.jpg', 'CPU AMD Athlon 3000G (3.5GHz, 2 nhân 4 luồng , 5MB Cache, 35W) - Socket AMD AM4\"', 0, 0, 13);
INSERT INTO `san_pham` VALUES (60, 'CPU AMD Ryzen 7 2700X ', 6899000, 'CPU_ADM5.jpg', 'CPU AMD Ryzen 7 2700X (3.7GHz turbo up to 4.3GHz, 8 nhân 16 luồng, 16MB Cache, 105W) - Socket AMD AM4\"', 0, 0, 13);
INSERT INTO `san_pham` VALUES (61, 'CPU Intel Xeon Silver 4110 ', 10999000, 'CPU_intel1.jpg', 'CPU Intel Xeon Silver 4110 (2.1GHz turbo up to 3.0GHz, 8 nhân, 16 luồng, 11MB Cache, 85W) - Socket Intel LGA 3647\"', 0, 0, 13);
INSERT INTO `san_pham` VALUES (62, 'CPU Intel Core i7-11700K', 10399000, 'CPU_intel2.jpg', 'CPU Intel Core i7-11700K (3.6GHz turbo up to 5Ghz, 8 nhân 16 luồng, 16MB Cache, 125W) - Socket Intel LGA 1200\"', 0, 0, 13);
INSERT INTO `san_pham` VALUES (63, 'CPU Intel Core i3-10100', 4899000, 'CPU_intel3.jpg', 'CPU Intel Core i3-10100 (3.6GHz turbo up to 4.3Ghz, 4 nhân 8 luồng, 6MB Cache, 65W) - Socket Intel LGA 1200\"', 0, 0, 13);
INSERT INTO `san_pham` VALUES (64, 'CPU Intel Core i9-10900K', 10899000, 'CPU_intel4.jpg', 'CPU Intel Core i9-10900K (3.7GHz turbo up to 5.3GHz, 10 nhân 20 luồng, 20MB Cache, 125W) - Socket Intel LGA 1200\"', 0, 0, 13);
INSERT INTO `san_pham` VALUES (65, 'CPU Intel Core i9-11900K ', 15499000, 'CPU_intel5.jpg', 'CPU Intel Core i9-11900K (3.5GHz turbo up to 5.3Ghz, 8 nhân 16 luồng, 16MB Cache, 125W) - Socket Intel LGA 1200\"', 0, 0, 13);
INSERT INTO `san_pham` VALUES (67, 'Mainboard ASUS ROG MAXIMUS Z690 HERO', 15999000, 'Main_intel1.jpg', 'Mainboard ASUS ROG MAXIMUS Z690 HERO (Intel Z690, Socket 1700, ATX, 4 khe RAM DDR5)\"', 0, 0, 13);
INSERT INTO `san_pham` VALUES (68, 'Mainboard ASUS PRIME Z690-A', 7899000, 'Main_intel2.jpg', 'Mainboard ASUS PRIME Z690-A (Intel Z690, Socket 1700, ATX, 4 khe RAM DDR5)\"', 0, 0, 13);
INSERT INTO `san_pham` VALUES (69, 'Mainboard ASUS PRIME H510M-D', 1929000, 'Main_intel3.jpg', 'Mainboard ASUS PRIME H510M-D (Intel H510, Socket 1200, m-ATX, 2 khe Ram DDR4)\"', 0, 0, 13);
INSERT INTO `san_pham` VALUES (70, 'Mainboard Intel MSI MEG Z590 GODLIKE', 22899000, 'Main_intel4.jpg', 'Mainboard Intel MSI MEG Z590 GODLIKE\"', 0, 0, 13);
INSERT INTO `san_pham` VALUES (71, 'Mainboard ASUS TUF GAMING X570-PLUS', 4799000, 'Main_ADM1.jpg', 'Mainboard ASUS TUF GAMING X570-PLUS (AMD X570, Socket AM4, ATX, 4 khe RAM DDR4)\"', 0, 0, 13);
INSERT INTO `san_pham` VALUES (72, 'Mainboard ASUS PRIME A320M-K ', 2399000, 'Main_ADM2.png', 'Mainboard ASUS PRIME A320M-K (AMD A320, Socket AM4, ATX, 2 khe RAM DDR4)\"', 0, 0, 13);
INSERT INTO `san_pham` VALUES (73, 'Mainboard ASUS ROG ZENITH II EXTREME TRX40 ', 19479000, 'Main_ADM3.jpg', 'Mainboard ASUS ROG ZENITH II EXTREME TRX40 (AMD TRX40, Socket sTRX4, E-ATX, 8 khe RAM DDR4)\"', 0, 0, 13);
INSERT INTO `san_pham` VALUES (74, 'Mainboard ASROCK B550M STEEL LEGEND', 3599000, 'Main_ADM4.jpg', 'Mainboard ASROCK B550M STEEL LEGEND (AMD B550, Socket AM4, m- ATX, 4 khe RAM DDR4)\"', 0, 0, 13);
INSERT INTO `san_pham` VALUES (75, 'Ram Desktop AVEXIR 1SOB - SOLID GRAY', 899000, 'RAM1.jpg', 'Ram Desktop AVEXIR 1SOB - SOLID GRAY (AVD4UZ326661908G-1SOB) 8GB (1x8GB) DDR4 2666Mhz \"', 0, 0, 13);
INSERT INTO `san_pham` VALUES (76, 'Ram Desktop Gskill Trident Z Royal Elite', 4699000, 'RAM2.jpg', 'Ram Desktop Gskill Trident Z Royal Elite (F4-3600C16D- 16GTEGC) 16GB (2x8GB) DDR4 3600Mhz\"', 0, 0, 13);
INSERT INTO `san_pham` VALUES (77, 'Ram Desktop AVERXIR 1SOE Red ', 950000, 'RAM3.jpg', 'Ram Desktop AVERXIR 1SOE Red (AVD4UZ332001608G-1SOE) 8GB (1x8GB) DDR4 3200Mhz\"', 0, 0, 13);
INSERT INTO `san_pham` VALUES (78, 'Ram Desktop Kingston Fury Beast RGB', 2400000, 'RAM4.jpg', 'Ram Desktop Kingston Fury Beast RGB (KF432C16BBAK2/16) 16GB (2x8GB) DDR4 3200Mhz', 0, 0, 13);
INSERT INTO `san_pham` VALUES (79, 'Ram Desktop Gskill Trident Z Royal Elite', 1900000, 'RAM5.jpg', 'Ram Desktop Gskill Trident Z Royal Elite (F4-3600C16D-16GTESC)  16GB (2x8GB) DDR4 3600Mhz', 0, 0, 13);
INSERT INTO `san_pham` VALUES (80, 'Ram Desktop Kingston Fury Beast', 7560000, 'RAM6.jpg', 'Ram Desktop Kingston Fury Beast (KF548C38BBK2-32) 32GB (2x16GB) DDR5 4800Mhz', 0, 0, 13);
INSERT INTO `san_pham` VALUES (81, 'Ổ cứng HDD WD 10TB Red Plus 3.5 inch, 7200RPM, SATA, 256MB Cache (WD101EFBX)', 8799000, 'HDD1.jpg', 'Ổ cứng HDD WD 10TB Red Plus 3.5 inch, 7200RPM, SATA, 256MB Cache (WD101EFBX)', 0, 0, 13);
INSERT INTO `san_pham` VALUES (82, 'HDD WD Gold (2TB/3.5/SATA 3/128MB Cache/7200RPM) (WD2005FBYZ)', 2494000, 'HDD2.jpg', 'HDD WD Gold (2TB/3.5/SATA 3/128MB Cache/7200RPM) (WD2005FBYZ)', 0, 0, 13);
INSERT INTO `san_pham` VALUES (83, 'Ổ cứng HDD WD 4TB Blue 3.5 inch, 5400RPM, SATA, 256MB Cache (WD40EZAZ)', 2495000, 'HDD3.png', 'Ổ cứng HDD WD 4TB Blue 3.5 inch, 5400RPM, SATA, 256MB Cache (WD40EZAZ)', 0, 0, 13);
INSERT INTO `san_pham` VALUES (84, 'Ổ cứng HDD Seagate IronWolf 10TB 3.5 inch, 7200RPM ,SATA, 256MB Cache (ST10000VN0008)', 8699000, 'HDD4.jpg', 'Ổ cứng HDD Seagate IronWolf 10TB 3.5 inch, 7200RPM ,SATA, 256MB Cache (ST10000VN0008)', 0, 0, 13);
INSERT INTO `san_pham` VALUES (85, 'Ổ cứng SSD Adata ASX6000LNP 256GB M.2 2280 PCIe NVMe Gen 3x4', 1095000, 'SSD1.jpg', 'Ổ cứng SSD Adata ASX6000LNP 256GB M.2 2280 PCIe NVMe Gen 3x4 (Đọc 1800MB/s - Ghi 900MB/s)', 0, 0, 13);
INSERT INTO `san_pham` VALUES (86, 'Ổ cứng SSD Western Blue 1TB 2.5 inch SATA3', 3099000, 'SSD2.jpg', 'Ổ cứng SSD Western Blue 1TB 2.5 inch SATA3 (Đọc 560MB/s - Ghi 530MB/s) - (WDS100T2B0A)\"', 0, 0, 13);
INSERT INTO `san_pham` VALUES (87, 'Ổ cứng SSD Gigabyte 512GB M.2 2280 PCIe NVMe Gen 3x4', 1799000, 'SSD3.jpg', 'Ổ cứng SSD Gigabyte 512GB M.2 2280 PCIe NVMe Gen 3x4 (Đoc 1700MB/s, Ghi 1550MB/s) - (GP-GSM2NE3512GNTD)', 0, 0, 13);
INSERT INTO `san_pham` VALUES (88, 'Ổ cứng SSD Lexar NS100 128GB Sata3 2.5 inch', 599000, 'SSD4.jpg', 'Ổ cứng SSD Lexar NS100 128GB Sata3 2.5 inch (Đoc 520MB/s - Ghi 450MB/s) - (LNS100-128RB)', 0, 0, 13);
INSERT INTO `san_pham` VALUES (89, 'Ổ cứng SSD Samsung 980 PRO 1TB PCIe NVMe 4.0x4 ', 6499000, 'SSD5.jpg', 'Ổ cứng SSD Samsung 980 PRO 1TB PCIe NVMe 4.0x4 (Đọc 7000MB/s - Ghi 5000MB/s) - (MZ-V8P1T0BW)', 0, 0, 13);
INSERT INTO `san_pham` VALUES (90, 'Đế tản nhiệt Cooler Master NOTEPAL ERGOSTAND LITE cho Laptop 15 inch đến 17 inch', 659000, 'tannhiet1.jpg', 'Đế tản nhiệt Cooler Master NOTEPAL ERGOSTAND LITE cho Laptop 15 inch đến 17 inch', 0, 0, 14);
INSERT INTO `san_pham` VALUES (91, 'Đế làm mát laptop BAMBA B2 (5 quạt)', 399000, 'tannhiet2.jpg', 'Đế làm mát laptop BAMBA B2 (5 quạt)', 0, 0, 14);
INSERT INTO `san_pham` VALUES (92, 'Quạt hút làm mát laptop BAMBA B3', 399000, 'tannhiet3.jpg', 'Quạt hút làm mát laptop BAMBA B3', 0, 0, 14);
INSERT INTO `san_pham` VALUES (93, 'Đế làm mát laptop BAMBA B6 (5 quạt)', 499000, 'tannhiet4.jpg', 'Đế làm mát laptop BAMBA B6 (5 quạt)', 0, 0, 14);
INSERT INTO `san_pham` VALUES (94, 'Cáp chuyển đổi từ TypeC sang VGA Orico RCV-GD/SV/SG', 493000, 'chuyendoi1.jpg', 'Cáp chuyển đổi từ TypeC sang VGA Orico RCV-GD/SV/SG', 0, 0, 14);
INSERT INTO `san_pham` VALUES (95, 'Cáp chuyển đổi từ Displayport đực sang HDMI đực 1.5m Ugreen 10239', 259000, 'chuyendoi2.jpg', 'Cáp chuyển đổi từ Displayport đực sang HDMI đực 1.5m Ugreen 10239', 0, 0, 14);
INSERT INTO `san_pham` VALUES (96, 'Cáp chuyển đổi Type C sang Type C/HDMI 4K/USB 3.0 Vention CGIHA', 909000, 'chuyendoi3.jpg', 'Cáp chuyển đổi Type C sang Type C/HDMI 4K/USB 3.0 Vention CGIHA', 0, 0, 14);
INSERT INTO `san_pham` VALUES (97, 'Bộ chuyển Type C sang VGA ORICO XC-112-BK', 299000, 'chuyendoi4.jpg', 'Bộ chuyển Type C sang VGA ORICO XC-112-BK', 0, 0, 14);
INSERT INTO `san_pham` VALUES (98, 'Cáp chuyển đổi từ USB-C to HDMI, VGA, USB-A, GBE, 100W PD, màu đen Belkin AVC004btBK', 1819000, 'chuyendoi5.jpg', 'Cáp chuyển đổi từ USB-C to HDMI, VGA, USB-A, GBE, 100W PD, màu đen Belkin AVC004btBK', 0, 0, 14);
INSERT INTO `san_pham` VALUES (99, 'Tai nghe Zidli ZH20 7.1 Led RGB USB', 499000, 'tainghe1.jpg', 'Tai nghe Zidli ZH20 7.1 Led RGB USB', 0, 0, 14);
INSERT INTO `san_pham` VALUES (100, 'Tai nghe Gaming Rapoo VH160', 419000, 'tainghe2.jpg', 'Tai nghe Gaming Rapoo VH160', 0, 0, 14);
INSERT INTO `san_pham` VALUES (101, 'Tai nghe Sony MDR-XB550AP Đổi', 1109000, 'tainghe3.png', 'Tai nghe Sony MDR-XB550AP Đổi\"', 0, 0, 14);
INSERT INTO `san_pham` VALUES (102, 'Tai nghe Logitech H370', 639000, 'tainghe4.jpg', 'Tai nghe Logitech H370', 0, 0, 14);
INSERT INTO `san_pham` VALUES (103, 'Tai nghe Gaming Kingston HyperX Cloud Alpha Red (HX-HSCA-RD/AS)', 2159000, 'tainghe5.jpg', 'Tai nghe Gaming Kingston HyperX Cloud Alpha Red (HX-HSCA-RD/AS)', 0, 0, 14);
INSERT INTO `san_pham` VALUES (104, 'Chuột Logitech B100 Black', 139000, 'chuot1.jpg', 'Chuột Logitech B100 Black\"', 0, 0, 14);
INSERT INTO `san_pham` VALUES (105, 'Chuột không dây Logitech M325 Wireless Đen Bạc', 419000, 'chuot2.jpg', 'Chuột không dây Logitech M325 Wireless Đen Bạc', 0, 0, 14);
INSERT INTO `san_pham` VALUES (106, 'Chuột IRocks IRM09W-PBK', 439000, 'chuot3.jpg', 'Chuột IRocks IRM09W-PBK', 0, 0, 14);
INSERT INTO `san_pham` VALUES (107, 'Chuột chơi game Logitech G402 Hyperion Fury USB Black', 729000, 'chuot4.jpg', 'Chuột chơi game Logitech G402 Hyperion Fury USB Black', 0, 0, 14);
INSERT INTO `san_pham` VALUES (108, 'Chuột không dây Logitech M337 Bluetooth Black', 639000, 'chuot5.jpg', 'Chuột không dây Logitech M337 Bluetooth Black', 0, 0, 14);
INSERT INTO `san_pham` VALUES (109, 'Bàn phím Fuhlen L411 USB Black', 299000, 'BP1.jpg', 'Bàn phím Fuhlen L411 USB Black', 0, 0, 14);
INSERT INTO `san_pham` VALUES (110, 'Bộ Keyboard + Mouse Logitech Wireless K400 Plus', 869000, 'BP2.jpg', 'Bộ Keyboard + Mouse Logitech Wireless K400 Plus', 0, 0, 14);
INSERT INTO `san_pham` VALUES (111, 'Bàn phím giả cơ Logitech G213 Prodigy RGB Gaming', 1039000, 'BP3.jpg', 'Bàn phím giả cơ Logitech G213 Prodigy RGB Gaming', 0, 0, 14);
INSERT INTO `san_pham` VALUES (112, 'Bàn phím gaming Fuhlen G500S Led backlight USB Red - Gaming', 699000, 'BP4.jpg', 'Bàn phím gaming Fuhlen G500S Led backlight USB Red - Gaming', 0, 0, 14);
INSERT INTO `san_pham` VALUES (113, 'Bàn di chuột Corsair MM300 PRO Medium 360(L) x 300(W) x 3.0(H) mm - CH-9413631-WW', 409000, 'lotchuot1.jpg', 'Bàn di chuột Corsair MM300 PRO Medium 360(L) x 300(W) x 3.0(H) mm - CH-9413631-WW', 0, 0, 14);
INSERT INTO `san_pham` VALUES (114, 'Bàn di chuột Razer Sphex V2 Mini (RZ02-01940200-R3M1)', 309000, 'lotchuot2.jpg', 'Bàn di chuột Razer Sphex V2 Mini (RZ02-01940200-R3M1)', 0, 0, 14);
INSERT INTO `san_pham` VALUES (115, 'Bàn di chuột Razer Gigantus V2 Soft Gaming Mouse Mat 3XL', 1419000, 'lotchuot3.jpg', 'Bàn di chuột Razer Gigantus V2 Soft Gaming Mouse Mat 3XL - RZ02-03330500-R3M1 (1200 x 550 x 4mm - pad mềm, mặt vải)', 0, 0, 14);
INSERT INTO `san_pham` VALUES (116, 'Bàn di chuột Game BATTLEGROUNDS 400x900 mm', 139000, 'lotchuot4.jpg', 'Bàn di chuột Game BATTLEGROUNDS 400x900 mm', 0, 0, 14);
INSERT INTO `san_pham` VALUES (117, 'Bàn di chuột Hideki 25cm x 30cm', 55000, 'lotchuot5.jpg', 'Bàn di chuột Hideki 25cm x 30cm', 0, 0, 14);
INSERT INTO `san_pham` VALUES (118, 'Ghế gamer E-Dra Hercules EGC203 V2', 3749000, 'ghe1.jpg', 'Ghế gamer E-Dra Hercules EGC203 V2', 0, 0, 14);
INSERT INTO `san_pham` VALUES (119, 'GHẾ CHƠI GAME E-DRA HERA EGC224 ', 3089000, 'ghe2.jpg', 'GHẾ CHƠI GAME E-DRA HERA EGC224 ', 0, 0, 14);
INSERT INTO `san_pham` VALUES (120, 'Ghế Gamer Noblechairs EPIC Series Black /Red (Ultimate Chair Germany)', 10509000, 'ghe3.jpg', 'Ghế Gamer Noblechairs EPIC Series Black /Red (Ultimate Chair Germany)', 0, 0, 14);
INSERT INTO `san_pham` VALUES (121, 'Ghế Chơi Game CoolerMaster Caliber R2 CM Purple (CMI-GCR2-2019)', 3939000, 'ghe4.jpg', 'Ghế Chơi Game CoolerMaster Caliber R2 CM Purple (CMI-GCR2-2019)', 0, 0, 14);
INSERT INTO `san_pham` VALUES (122, 'Ghế Gamer Noblechairs HERO DOOM Edition', 15049000, 'ghe5.jpg', 'Ghế Gamer Noblechairs HERO DOOM Edition', 0, 0, 14);
INSERT INTO `san_pham` VALUES (123, 'Loa Bluetooth Sony SRS-XB12/GC E', 1219000, 'loa1.jpg', 'Loa Bluetooth Sony SRS-XB12/GC E', 0, 0, 14);
INSERT INTO `san_pham` VALUES (124, 'Loa Logitech Z625 - 2.1', 3599000, 'loa2.png', 'Loa Logitech Z625 - 2.1', 0, 0, 14);
INSERT INTO `san_pham` VALUES (125, 'Loa Bluetooth Creative Muvo Play Black', 939000, 'loa3.jpg', 'Loa Bluetooth Creative Muvo Play Black', 0, 0, 14);
INSERT INTO `san_pham` VALUES (126, 'Loa Microlab Solo5C - 2.0', 2429000, 'loa4.png', 'Loa Microlab Solo5C - 2.0', 0, 0, 14);
INSERT INTO `san_pham` VALUES (127, 'PC Dell Vostro 3888 MT', 12399000, 'PC1.jpg', 'PC Dell Vostro 3888 MT (i5-10400/4GB RAM/1TB HDD/WL+BT/K+M/Office/Win10) (RJMM6Y11)', 0, 0, 5);
INSERT INTO `san_pham` VALUES (128, 'PC Dell OptiPlex 3080 MT ', 13899000, 'PC2.jpg', 'PC Dell OptiPlex 3080 MT (i5-10500/8GB RAM/1TB HDD/DVDRW/K+M/Fedora) (42OT380004)', 0, 0, 5);
INSERT INTO `san_pham` VALUES (129, 'PC Dell Vostro 3681 ST', 10999000, 'PC3.jpg', 'PC Dell Vostro 3681 ST (i3-10100/4GB RAM/256GB SSD/DVDRW/WL+BT/K+M/Office/Win10) (PWTN16)', 0, 0, 5);
INSERT INTO `san_pham` VALUES (130, 'PC Dell OptiPlex 3080 SFF ', 12879000, 'PC4.jpg', 'PC Dell OptiPlex 3080 SFF (i5-10500/4GB RAM/256GB SSD/DVDRW/K+M/Fedora) (3080SFF-10500-4GSSD)', 0, 0, 5);
INSERT INTO `san_pham` VALUES (133, 'Màn hình Acer Predator X34P', 29898000, '3Acer.png', 'Màn hình Acer Predator X34P (34 inch/Curved/WQHD/120Hz)\"', 20, 0, 5);
INSERT INTO `san_pham` VALUES (134, 'Màn hình HP 27XQ ', 17399000, '4HP.png', 'Màn hình HP 27XQ (27 inch/2K/144Hz/1ms/350cd/m²/DP+HDMI)\r\n\"', 0, 0, 5);
INSERT INTO `san_pham` VALUES (141, 'Màn hình Dell OptiPlex All in One 5480 ', 25859000, '1Dell.png', 'Màn hình Dell OptiPlex All in One 5480 (i7-10700T/8GB RAM/256GB SSD/23.8 inch FHD/WL+BT/K+M/Ubuntu)', 0, 0, 5);
INSERT INTO `san_pham` VALUES (142, 'Màn hình Dell OptiPlex All in One 5490 ', 21949000, '2Dell.png', 'Màn hình Dell OptiPlex All in One 5490 (i5-11500T/8GB RAM/256GB SSD/23.8 inch FHD/Touch/WL+BT/K+M/Ubuntu)', 0, 0, 5);
INSERT INTO `san_pham` VALUES (143, 'Màn hình Asus Pro Art PA278CV ', 11199000, '5Asus.png', 'Màn hình Asus Pro Art PA278CV (27inch/WQHD/IPS/75Hz/5ms/ 350nits/HDMI+DP+USBC+Audio)', 0, 0, 5);
INSERT INTO `san_pham` VALUES (144, 'Màn hình Asus VG279QR', 7769000, '6Asus.jpg', 'Màn hình Asus VG279QR (27inch/FHD/IPS/165Hz/1ms/\r\n300nits/HDMI+DP+Audio/Gsync)\r\n', 0, 0, 5);
INSERT INTO `san_pham` VALUES (145, 'Màn hình Asus VP279QGL', 5539000, '7Asus.png', 'Màn hình Asus VP279QGL (27inch/FHD/IPS/75Hz/1ms/250nits/\r\nHDMI+DP+VGA/Loa/Freesync)\r\n\"\"\"\"\"\"', 0, 0, 5);

SET FOREIGN_KEY_CHECKS = 1;
