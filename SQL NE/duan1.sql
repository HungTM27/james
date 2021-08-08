-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2019 at 04:59 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duan1`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `status`) VALUES
(1, 'giày nam', 1),
(2, 'giày nữ', 1),
(52, 'Giày thần tốc', 0),
(53, 'Giày Nike', 0);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `reply_for` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `manufacturers`
--

CREATE TABLE `manufacturers` (
  `id` int(11) NOT NULL,
  `name_manufacturer` varchar(128) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `manufacturers`
--

INSERT INTO `manufacturers` (`id`, `name_manufacturer`, `status`) VALUES
(1, 'Converse', 1),
(3, 'Puma', 1),
(5, 'Balenciaga', 0),
(6, 'New Balance ', 1),
(11, 'nike', 0),
(13, 'Adidas', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `total_price` int(11) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(11) DEFAULT NULL,
  `customer_name` varchar(255) DEFAULT NULL,
  `customer_email` varchar(255) DEFAULT NULL,
  `customer_phone_number` varchar(11) DEFAULT NULL,
  `buyer_id` int(11) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `voucher_id` int(11) DEFAULT NULL,
  `discount` int(11) DEFAULT NULL,
  `payment_amount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `order_id` int(11) NOT NULL DEFAULT 0,
  `product_id` int(11) NOT NULL DEFAULT 0,
  `quantity` int(11) DEFAULT NULL,
  `unit_price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `sku` varchar(255) DEFAULT NULL,
  `cate_id` int(11) DEFAULT NULL,
  `disabled_comment` int(11) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `sale_price` int(11) DEFAULT NULL,
  `detail` text DEFAULT NULL,
  `feature_image` varchar(255) DEFAULT NULL,
  `view_count` int(11) DEFAULT NULL,
  `stock_up` tinyint(4) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `rating` float(11,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `sku`, `cate_id`, `disabled_comment`, `price`, `sale_price`, `detail`, `feature_image`, `view_count`, `stock_up`, `status`, `rating`) VALUES
(48, 'Miss Lyda Witting DDS', '5DMAU6874HDGA', 1, 0, 12232000, 11000000, '<p>In addition to technology and great features, today&#39;s generations of sports shoes are being increasingly focused on design, appearance, color. Therefore, sports shoes are not only used in training but also in everyday activities, even for fashion purposes. In addition, today, fashion trends are preferred over dynamic trends, so sneakers have more and more acting ground. It&#39;s no exaggeration to say that, in this world, every family member owns at least one pair of sports shoes.</p>\r\n', 'img/product/20.png', 1212111, 1, 1, 1),
(49, 'Miss Lyda Witting DDS', '5DDCUAORHWYRQMR', 2, 0, 2349193, 2018493, 'In addition to technology and great features, today\'s generations of sports shoes are being increasingly focused on design, appearance, color. Therefore, sports shoes are not only used in training but also in everyday activities, even for fashion purposes. In addition, today, fashion trends are preferred over dynamic trends, so sneakers have more and more acting ground. It\'s no exaggeration to say that, in this world, every family member owns at least one pair of sports shoes.', 'img/product/7.png', 121211, 1, 0, 3),
(50, 'Miss Lyda Witting DDS', '5DKWIEJDJAIKDYU', 1, 0, 2349193, 1050000, '<p>In addition to technology and great features, today&#39;s generations of sports shoes are being increasingly focused on design, appearance, color. Therefore, sports shoes are not only used in training but also in everyday activities, even for fashion purposes. In addition, today, fashion trends are preferred over dynamic trends, so sneakers have more and more acting ground. It&#39;s no exaggeration to say that, in this world, every family member owns at least one pair of sports shoes.</p>\r\n', 'img/product/18.png', 21212121, 0, 0, 2),
(53, 'Miss Lyda Witting DDS', '5DYWDJWKDIWJDJD', 2, 0, 2147483647, 2018493, '<p>In addition to technology and great features, today&#39;s generations of sports shoes are being increasingly focused on design, appearance, color. Therefore, sports shoes are not only used in training but also in everyday activities, even for fashion purposes. In addition, today, fashion trends are preferred over dynamic trends, so sneakers have more and more acting ground. It&#39;s no exaggeration to say that, in this world, every family member owns at least one pair of sports shoes.</p>\r\n', 'img/product/13.png', 2111212, 0, 1, 4),
(54, 'Miss Lyda Witting DDS', '5DUWNEUDDJEJDSO', 2, 0, 2349193, 2018493, '<p>In addition to technology and great features, today&#39;s generations of sports shoes are being increasingly focused on design, appearance, color. Therefore, sports shoes are not only used in training but also in everyday activities, even for fashion purposes. In addition, today, fashion trends are preferred over dynamic trends, so sneakers have more and more acting ground. It&#39;s no exaggeration to say that, in this world, every family member owns at least one pair of sports shoes.</p>\r\n', 'img/product/25.png', 1212121, 1, 1, 1),
(67, 'Miss Lyda Witting DDS', '5DYWINEIQHENDH', 1, 0, 19867562, 18292938, 'In addition to technology and great features, today\'s generations of sports shoes are being increasingly focused on design, appearance, color. Therefore, sports shoes are not only used in training but also in everyday activities, even for fashion purposes. In addition, today, fashion trends are preferred over dynamic trends, so sneakers have more and more acting ground. It\'s no exaggeration to say that, in this world, every family member owns at least one pair of sports shoes.', 'img/product/31.png', 1212121, 1, 0, 4),
(68, 'morata', '5DYWINDJSIWMDI', 2, 0, 12000000, 11000000, '<p>In addition to technology and great features, today&#39;s generations of sports shoes are being increasingly focused on design, appearance, color. Therefore, sports shoes are not only used in training but also in everyday activities, even for fashion purposes. In addition, today, fashion trends are preferred over dynamic trends, so sneakers have more and more acting ground. It&#39;s no exaggeration to say that, in this world, every family member owns at least one pair of sports shoes.</p>\r\n', 'img/product/30.png', 23232323, 1, 1, 2),
(72, 'Giày thần tốc', '5DYWUEBIWODIONS', 1, 0, 2147483647, 121212121, 'In addition to technology and great features, today\'s generations of sports shoes are being increasingly focused on design, appearance, color. Therefore, sports shoes are not only used in training but also in everyday activities, even for fashion purposes. In addition, today, fashion trends are preferred over dynamic trends, so sneakers have more and more acting ground. It\'s no exaggeration to say that, in this world, every family member owns at least one pair of sports shoes.', 'img/product/19.png', 11111111, 0, 1, 4),
(73, 'fdjgndsadhcuirjekhgv', '5DYWINWKMDIJMSI', 2, 0, 2349333, 2018493, 'In addition to technology and great features, today\'s generations of sports shoes are being increasingly focused on design, appearance, color. Therefore, sports shoes are not only used in training but also in everyday activities, even for fashion purposes. In addition, today, fashion trends are preferred over dynamic trends, so sneakers have more and more acting ground. It\'s no exaggeration to say that, in this world, every family member owns at least one pair of sports shoes.\r\n', 'img/product/16.png', 0, 1, 1, 0),
(74, 'Giày nam Siêu đẹp', 'PT14313TRUWRHDUS', 2, 0, 500000, 460000, '<p>Được coi l&agrave; t&acirc;n binh mới trong cuộc đua <strong><a href=\"https://bloganchoi.com/cach-phoi-do-voi-giay-sneaker-nu-trang-cua-sao-han/\" target=\"_blank\">gi&agrave;y sneaker</a><a href=\"https://bloganchoi.com/thuong-hieu-giay-the-thao-noi-tieng-hot-nhat/\" target=\"_blank\"><img alt=\"10 thương hiệu giày thể thao nổi tiếng và hot nhất hiện nay - BlogAnChoi\" src=\"https://bloganchoi.com/wp-content/images/bac/others/transparent-1x1.gif?utm_source=dmca&amp;utm_medium=copy&amp;utm_term=10%20th%C6%B0%C6%A1ng%20hi%E1%BB%87u%20gi%C3%A0y%20th%E1%BB%83%20thao%20n%E1%BB%95i%20ti%E1%BA%BFng%20v%C3%A0%20hot%20nh%E1%BA%A5t%20hi%E1%BB%87n%20nay%20-%20BlogAnChoi&amp;utm_content=https%3A%2F%2Fbloganchoi.com%2Fthuong-hieu-giay-the-thao-noi-tieng-hot-nhat%2F&amp;tags=https%3A%2F%2Fbloganchoi.com%2Fthuong-hieu-giay-the-thao-noi-tieng-hot-nhat%2F%2Chttps%3A%2F%2Fbloganchoi.com%2Fthuong-hieu-giay-the-thao-noi-tieng-hot-nhat%2F%2Chttps%3A%2F%2Fbloganchoi.com%2Fthuong-hieu-giay-the-thao-noi-tieng-hot-nhat%2F%2Chttps%3A%2F%2Fbloganchoi.com%2Fthuong-hieu-giay-the-thao-noi-tieng-hot-nhat%2F&amp;dmcacpp=1\" style=\"height:1px; width:1px\" /></a></strong> nhưng h&atilde;ng thời trang cao cấp n&agrave;y kh&ocirc;ng hề tỏ ra l&eacute;p vế trước những &ldquo;đ&agrave;n anh&rdquo; d&agrave;y dặn kinh nghiệm. Chỉ trong v&agrave;i năm gần đ&acirc;y, Gucci đ&atilde; c&oacute; bước tiến lớn dưới&nbsp;b&agrave;n tay s&aacute;ng tạo của Alessandro Michele khi cho tr&igrave;nh l&agrave;ng mẫu gi&agrave;y với m&agrave;u trắng trang nh&atilde;, nhấn nh&aacute; bằng những họa tiết th&ecirc;u tay cầu k&igrave;, bắt mắt c&ugrave;ng logo xanh-đỏ đặc trưng.</p>\r\n', 'img/product/17.png', 0, 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `sort` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `image`, `sort`, `status`) VALUES
(51, 'name1', 'image_slide/5df4bb826985c', 4, 1),
(50, 'giày nam nữ tính', 'image_slide/5df4b9647cfbc', 2, 1),
(49, 'giày nữ thần tốc', 'image_slide/5df4b94b98cdd', 1, 0),
(30, 'namlaksiw', 'image_slide/4.jpg', 6, 1),
(48, 'giày mới nhất niker', 'image_slide/5df4af99414b9', 1, 1),
(72, 'Niker Sale', 'image_slide/5df8e218a9672', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `email`, `password`, `role_id`) VALUES
(1, 'Nhóm Bán Giày(KTH)', 'admin', 'admin@gmail.com', '$2y$10$/c3LNFFSukRux4WWGJbTmOxCkld2G0iRwCAOsK4Lgz5iAl9AOikBq', 0),
(2, 'Hoang Nguyen', 'viethoang', 'viethoang2k@gmail.com', '$2y$10$2YLO/xH1MaGDs3jFXR2jPeED7YZhef7fhknFTkfS3ee8J2qqsD0Ku', 1),
(30, 'Hoàng Xô', 'admin1', 'dasdasdsadas@gmail.com', '$2y$10$Ymw.b6rA.ij8mjSnxmzTrOGFwO.R30K8E2wD8SAi3jdXx5LsQSBXa', 0),
(31, 'Nguyễn Văn Khương', 'khuongnvph07998', 'khuong@gmail.com', '$2y$10$giJU8JfXxyiLbmAqQlj74e53yYFlF6qndMv9AmNm9payH5V3ANFRi', 1);

-- --------------------------------------------------------

--
-- Table structure for table `vouchers`
--

CREATE TABLE `vouchers` (
  `id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `start_time` datetime DEFAULT NULL,
  `end_time` datetime DEFAULT NULL,
  `discount_price` int(11) DEFAULT NULL,
  `used_count` int(11) DEFAULT 1,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vouchers`
--

INSERT INTO `vouchers` (`id`, `code`, `created_at`, `start_time`, `end_time`, `discount_price`, `used_count`, `status`) VALUES
(15, '5DD5FA9AE186B', '2019-11-21 02:46:50', '2019-11-21 09:40:00', '2019-12-21 09:40:00', 1387, 3, 1),
(16, '5DD5FA9AE1873', '2019-11-21 03:13:45', '2019-11-25 09:40:00', '2019-11-30 09:40:00', 50000, 6, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manufacturers`
--
ALTER TABLE `manufacturers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`order_id`,`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vouchers`
--
ALTER TABLE `vouchers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `manufacturers`
--
ALTER TABLE `manufacturers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `vouchers`
--
ALTER TABLE `vouchers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
