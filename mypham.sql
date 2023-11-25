-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th10 24, 2023 lúc 04:17 PM
-- Phiên bản máy phục vụ: 8.0.30
-- Phiên bản PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `mypham`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brand`
--

CREATE TABLE `brand` (
  `brand_id` int NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `logo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `brand`
--

INSERT INTO `brand` (`brand_id`, `brand_name`, `logo`) VALUES
(5, 'L\'Oréal', 'tải xuống.png'),
(6, 'Maybelline', 'tải xuống (1).png'),
(7, 'Estée Lauder', '113f13fdef59e7e651837b69b08ffd7c.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `cart_id` int NOT NULL,
  `product_id` int NOT NULL,
  `user_id` int NOT NULL,
  `quantity` int NOT NULL,
  `price` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `product_id` int NOT NULL,
  `rating` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `comment_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `order_id` int NOT NULL,
  `user_id` int NOT NULL,
  `order_date` date NOT NULL,
  `total_price` int NOT NULL,
  `status_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_detail`
--

CREATE TABLE `order_detail` (
  `order_detail_id` int NOT NULL,
  `order_id` int NOT NULL,
  `product_id` int NOT NULL,
  `quantity` int NOT NULL,
  `price` int NOT NULL,
  `subtotal` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post`
--

CREATE TABLE `post` (
  `post_id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts_comment`
--

CREATE TABLE `posts_comment` (
  `id` int NOT NULL,
  `post_id` int NOT NULL,
  `user_id` int NOT NULL,
  `comment` text NOT NULL,
  `comment_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `product_id` int NOT NULL,
  `product_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `price` int NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `time_create` int NOT NULL,
  `expiry` int NOT NULL,
  `skin_id` int NOT NULL,
  `type_id` int NOT NULL,
  `brand_id` int NOT NULL,
  `status_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `image`, `price`, `description`, `time_create`, `expiry`, `skin_id`, `type_id`, `brand_id`, `status_id`) VALUES
(8, 'Kem mắt Estee Lauder', 'vn-11134207-7r98o-llhz0boel9s81f.jpg', 158000, 'Kem mắt ESTEE LAUDER 5ml Kem dưỡng mắt giảm thâm quầng nếp nhăn bọng mắt tái tạo phục hồi da vùng mắt\r\n\r\nĐôi mắt vốn là cửa sổ tâm hồn, yếu tố quan trọng tạo nên vẻ ngoài thu hút cho mỗi người, đôi mắt không chỉ có hình dáng đẹp mà vùng da xung quanh cùng cần được chú trọng. Tuy nhiên, do thói quen hằng ngày và tuổi tác mà vùng này ngày càng trở nên thâm quầng, chảy xệ và xuất hiện các nếp nhăn, làm chị em mất hết sự tự tin khi giao tiếp.\r\n\r\n- Kem mắt ESTEE LAUDER 5ml Kem dưỡng mắt giảm thâm quầng nếp nhăn bọng mắt tái tạo phục hồi da vùng mắt từ thương hiệu ESTEE LAUDER sẽ giải quyết nhiều vấn đề, giúp hỗ trợ tái tạo đôi vùng da mắt rạng ngời và trẻ trung đồng thời bảo vệ vùng da này trước mọi tác hại từ môi trường.\r\n\r\n\r\n\r\nCông dụng\r\n\r\nGiảm quầng thâm mắt, nếp nhăn và các dấu hiện lão hóa trong giai đoạn đầu tiên\r\n\r\nĐược điều chế và kiểm nghiệm để đảm bảo tính dịu nhẹ khi sử dụng cho vùng da mắt mỏng manh\r\n\r\nHũ thủy tinh đựng sản phẩm được sản xuất với ít nhất 15% vật liệu tái chế\r\n\r\nBao bì hộp giấy được làm với giấy có nguồn gốc bền vững và tái chế được\r\n\r\nĐược kiểm nghiệm nhãn khoa\r\n\r\nĐược kiểm nghiệm da liễu\r\n\r\nKhông gây kích ứng, không làm bí tắc lỗ chân lông (không gây mụn)\r\n\r\nKhông chứa chất tạo mùi tổng hợp\r\n\r\nKhông chứa parabens, phthalates, sulfites,sulfate,cồn khô, dầu khoáng và paraffin\"', 1700628472, 365, 4, 5, 7, 1),
(9, 'L\'Oréal Paris Revitalift Crystal Micro Essence', '6923700934458_packshot.png', 449000, 'Thông tin sản phẩm\r\nDưỡng chất căng mướt da L\'Oréal Paris Revitalift Crystal Micro Essence là sản phẩm kết hợp nước và dưỡng chất dưỡng da đặc biệt phù hợp cho làn da châu Á. \r\nVới công nghệ micronized, Revitalift Crystal Micro-Essence thẩm thấu sâu hơn vào biểu bì da, tăng cường giữ ẩm trên da giúp làn da trông căng mượt và mềm mại, và hỗ trợ các thành phần dưỡng da thấm sâu hơn vào da. \r\nMột sản phẩm với 7 công dụng: Cấp ẩm tức thì, Sáng mịn da, Giúp se nhỏ lổ chân lông, Giúp da săn chắc và đàn hồi hơn, Giảm vết thâm và đốm nâu, Giúp chăm sóc da từ sâu bên trong, Cho làn da trông tươi trẻ hơn.\r\nThành phần\r\nAQUA / WATER, BUTYLENE GLYCOL, ALCOHOL, HYDROXYETHYLPIPERAZINE ETHANE SULFONIC ACID, PROPANEDIOL, PPG-6-DECYLTETRADECETH-30, CAPRYLYL GLYCOL, SALICYLIC ACID, SODIUM HYDROXIDE, P-ANISIC ACID, ADENOSINE, CAPRYLOYL SALICYLIC ACID, ACETYL TRIFLUOROMETHYLPHENYL VALYLGLYCINE, DISODIUM EDTA, PARFUM/ FRAGRANCE, MADECASSOSIDE, BENZYL SALICYLATE, LIMONENE, LINALOOL, BENZYL ALCOHOL, PENTYLENE GLYCOL, FAEX EXTRACT/ YEAST EXTRACT, TOCOPHEROL\r\nCách sử dụng\r\nSử dụng hàng ngày vào mỗi sáng và tối, sau bước làm sạch và trước bước kem dưỡng. Sử dụng một lượng tinh chất vừa đủ (khoảng 1 hạt bắp nhỏ) và chia đều trên năm điểm: trán, mũi, cằm, hai bên má. Sau đó, thoa đều nhẹ nhàng khắp mặt và vỗ nhẹ. Nên dùng thêm cho vùng da quanh cổ. Tránh vùng da quanh mắt.', 1700669936, 365, 4, 5, 5, 1),
(10, 'L\'Oréal Paris Micellar Water 3-in-1', '6-jpeg-5174877c-7ab0-43f7-9b74-fdcedb794233.jpg', 153000, 'Thông tin sản phẩm\r\nVới công nghệ mới, Nước tẩy trang L\'Oreal Paris 3-in-1 Micellar Water đa tác dụng vừa giúp làm sạch lấy đi sạch cặn trang điểm những vẫn giúp da giữ ẩm, thông thoáng và mềm mượt chỉ trong một bước. Sản phẩm có 3 loại cho bạn lựa chọn tùy theo nhu cầu: 1. Moisturizing - Mềm mịn (màu hồng): Nhờ thành phần chiết xuất hoa hồng Pháp, giúp duy trì độ ẩm cho da sau khi tẩy trang. Sản phẩm giúp làm sạch lớp trang điểm và làm da mềm mịn. Không chứa dầu, hương liệu và Ethanol. Dành cho da thường/da khô. Phù hợp với cả da nhạy cảm. 2. Refreshing - Tươi mát (xanh dương nhạt): Làn da trông tươi tắn lên sau khi tẩy trang. Sản phẩm giúp làm sạch lớp trang điểm và làm da tươi mát hơn. Không chứa dầu, hương liệu và Ethanol. Dành cho da dầu/da hỗn hợp. Phù hợp với cả da nhạy cảm. 3. Deep Cleasing - Sạch sâu (xanh dương đậm): Có hai lớp chất lỏng giúp làm sạch chất bẩn không cần thiết trên da và loại bỏ lớp trang điểm hiệu quả, kể cả lớp trang điểm lâu trôi và water-proof chỉ trong một bước. Công nghệ Micellar đột phá với các hạt mixen siêu nhỏ, hoạt động như \"một nam châm thông minh\" tự động hút sạch cặn trang điểm, bụi bẩn, dầu thừa và chất bẩn khác trên da mà không làm khô da, không gây kích ứng da. Thích hợp cho mọi loại da, kể cả da nhạy cảm.\r\nThành phần\r\nAqua / Water, Hexylene Glycol, Glycerin, Rosa Gallica Flower Extract, Sorbitol, Poloxamer 184, Disodium Cocoamphodiacetate, Disodium Edta, Propylene Glycol, BHT , Polyaminopropyl Biguanide\r\nCách sử dụng\r\n- Lắc đều. - Cho sản phẩm vào bông tẩy trang rồi nhẹ nhàng lau lên mặt, mắt và môi theo chuyển động tròn. - Không cần rửa lại với nước.', 1700670674, 365, 4, 9, 5, 1),
(11, 'L\'Oreal ParisTrue Match Super-Blendable Foundation', '4935421255820_packshot.png', 308000, 'Chi tiết sản phẩm\r\nTrue Match Mới, kem nền lâu trôi, siêu mỏng mịn. Công thức mới  giúp kem nền tiệp vào  màu da chính xác hơn. Các màu sắc phù hợp tông màu da  và kết cấu kem đặc trưng sẽ cho bạn một lớp nền đồng nhất như làn da thứ hai giúp bạn trông tươi sáng và rạng rỡ hơn trước. Lớp kem nền lâu trôi và mang lại cảm giác thoải mái dài lâu. Tất cả những gì bạn thấy là một làn da tỏa sáng.\r\nThành phần\r\nAqua / Nước, Dimethicone, Isododecane, Cyclohexasiloxane, Glycerin, Peg-10 Dimethicone, Methyl Methacrylate Crosspolymer, Butylene Glycol, Pentylene Glycol, Synthetic Fluorphlogopite, Disteardimonium Hectorite, Hydroxyethylpiperazine Ethane Sulfonicacid, Cetyl Peg/Ppg-10/1 Dimethicone, Sodium Chloride, Polyglyceryl-4 Isostearate, Hexyl Laurate, Caprylyl Glycol, Phenoxyethanol, Disodium Stearoyl Glutamate, Tocopherol, Panthenol, Aluminumhydroxide, Hydroxyethyl Urea, Hydrated Silica, Methicone, [+/- Có thể chứa: Ci 77891 / Titaniumdioxide, Ci 77491, Ci 77492, Ci 77499 / Iron Oxides, Mica, Ci 15985 / Yellow 6 Lake, Ci 42090 / Blue 1 Lake, Ci 77510 / Ferric Ammonium Ferrocyanide, Ci 45410 / Red 28 Lake, Ci 15850 / Red 7]. (F.I.L. B167167/1).\r\nCách dùng\r\n1. Bắt đầu với khuôn mặt đã làm sạch, săn chắc và đủ ẩm. 2. Thoa một lớp kem lót bí mật lên da. Nhớ đừng thoa quá dày. 3. Thoa kem nền true match lên mặt. Bắt đầu với vùng chữ T và tán đều với chuyển động vòng tròn, hoặc hãy tán kem theo cách của bạn.', 1700670889, 365, 3, 6, 5, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role`
--

CREATE TABLE `role` (
  `role_id` int NOT NULL,
  `role_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `role`
--

INSERT INTO `role` (`role_id`, `role_name`) VALUES
(1, 'Quản trị viên'),
(2, 'Nhân viên'),
(3, 'Khách hàng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sex`
--

CREATE TABLE `sex` (
  `sex_id` int NOT NULL,
  `sex_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `sex`
--

INSERT INTO `sex` (`sex_id`, `sex_name`) VALUES
(1, 'Nam'),
(2, 'Nữ'),
(3, 'Khác');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `skin`
--

CREATE TABLE `skin` (
  `skin_id` int NOT NULL,
  `skin_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `skin`
--

INSERT INTO `skin` (`skin_id`, `skin_name`) VALUES
(1, 'Da khô'),
(2, 'Da nhạy cảm'),
(3, 'Da dầu'),
(4, 'Mọi loại da');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `status`
--

CREATE TABLE `status` (
  `status_id` int NOT NULL,
  `status_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `status`
--

INSERT INTO `status` (`status_id`, `status_name`) VALUES
(1, 'Còn Hàng'),
(2, 'Hết Hàng'),
(3, 'Ngừng Bán');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `status_order`
--

CREATE TABLE `status_order` (
  `status_order_id` int NOT NULL,
  `status_order_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `status_order`
--

INSERT INTO `status_order` (`status_order_id`, `status_order_name`) VALUES
(1, 'Đang xử lý'),
(2, 'Chờ Xác Nhận'),
(3, 'Đang vận chuyển'),
(4, 'Đã giao hàng'),
(5, 'Đã hủy'),
(6, 'Đã hoàn trả'),
(7, 'Đã thanh toán'),
(8, 'Chờ thanh toán');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `status_user`
--

CREATE TABLE `status_user` (
  `status_user_id` int NOT NULL,
  `status_user_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `status_user`
--

INSERT INTO `status_user` (`status_user_id`, `status_user_name`) VALUES
(1, 'Hoạt Động'),
(2, 'Đã khóa'),
(3, 'Chờ kích hoạt');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `type`
--

CREATE TABLE `type` (
  `type_id` int NOT NULL,
  `type_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `type`
--

INSERT INTO `type` (`type_id`, `type_name`) VALUES
(5, 'Mỹ Phẩm Dưỡng Da'),
(6, 'Mỹ Phẩm Trang Điểm'),
(7, 'Mỹ Phẩm Chăm Sóc Tóc'),
(8, 'Mỹ Phẩm Chống Nắng'),
(9, 'Mỹ Phẩm Làm Sạch');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `user_id` int NOT NULL,
  `avatar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `username` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `phone` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '0',
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '0',
  `birth_day` date NOT NULL,
  `address` int NOT NULL,
  `sex_id` int NOT NULL,
  `role_id` int NOT NULL,
  `status_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`) USING BTREE,
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `FK_USER_ORDERS` (`user_id`),
  ADD KEY `status_id` (`status_id`);

--
-- Chỉ mục cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`order_detail_id`) USING BTREE,
  ADD KEY `FK_ORDERS_ORDERDETAILS` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`) USING BTREE;

--
-- Chỉ mục cho bảng `posts_comment`
--
ALTER TABLE `posts_comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`) USING BTREE,
  ADD KEY `status_id` (`status_id`),
  ADD KEY `type_id` (`type_id`),
  ADD KEY `brand_id` (`brand_id`),
  ADD KEY `expiry_id` (`expiry`),
  ADD KEY `skin_id` (`skin_id`);

--
-- Chỉ mục cho bảng `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Chỉ mục cho bảng `sex`
--
ALTER TABLE `sex`
  ADD PRIMARY KEY (`sex_id`);

--
-- Chỉ mục cho bảng `skin`
--
ALTER TABLE `skin`
  ADD PRIMARY KEY (`skin_id`);

--
-- Chỉ mục cho bảng `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`status_id`);

--
-- Chỉ mục cho bảng `status_order`
--
ALTER TABLE `status_order`
  ADD PRIMARY KEY (`status_order_id`) USING BTREE;

--
-- Chỉ mục cho bảng `status_user`
--
ALTER TABLE `status_user`
  ADD PRIMARY KEY (`status_user_id`);

--
-- Chỉ mục cho bảng `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`type_id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`) USING BTREE,
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `order_detail_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `posts_comment`
--
ALTER TABLE `posts_comment`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `sex`
--
ALTER TABLE `sex`
  MODIFY `sex_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `skin`
--
ALTER TABLE `skin`
  MODIFY `skin_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `status`
--
ALTER TABLE `status`
  MODIFY `status_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `status_order`
--
ALTER TABLE `status_order`
  MODIFY `status_order_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `status_user`
--
ALTER TABLE `status_user`
  MODIFY `status_user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `type`
--
ALTER TABLE `type`
  MODIFY `type_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Các ràng buộc cho bảng `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `FK_USER_ORDERS` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`status_id`) REFERENCES `status_order` (`status_order_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Các ràng buộc cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `FK_ORDERS_ORDERDETAILS` FOREIGN KEY (`order_id`) REFERENCES `order` (`order_id`),
  ADD CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Các ràng buộc cho bảng `posts_comment`
--
ALTER TABLE `posts_comment`
  ADD CONSTRAINT `posts_comment_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `post` (`post_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `posts_comment_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`status_id`) REFERENCES `status` (`status_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`type_id`) REFERENCES `type` (`type_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `product_ibfk_3` FOREIGN KEY (`brand_id`) REFERENCES `brand` (`brand_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `product_ibfk_5` FOREIGN KEY (`skin_id`) REFERENCES `skin` (`skin_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Các ràng buộc cho bảng `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`role_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
