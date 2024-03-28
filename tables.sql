-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2024 at 01:56 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tables`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `banner_id` int(11) NOT NULL,
  `banner_image` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `show_on` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`banner_id`, `banner_image`, `status`, `show_on`) VALUES
(3, 'Screenshot (4).png', 0, ''),
(4, 'Screenshot (1).png', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `catalog_category`
--

CREATE TABLE `catalog_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `catalog_category`
--

INSERT INTO `catalog_category` (`category_id`, `category_name`, `status`) VALUES
(5, 'blanket12', 0),
(6, 'blanket1', 0),
(7, 'bed', 1),
(8, 'bed', 1),
(9, 'bed12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `catalog_product`
--

CREATE TABLE `catalog_product` (
  `product_id` int(11) NOT NULL,
  `inventory` int(11) NOT NULL,
  `sku` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image_link` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `price` decimal(12,2) NOT NULL,
  `mfr_cost` decimal(12,2) NOT NULL,
  `shipping_cost` decimal(12,2) NOT NULL,
  `total_cost` decimal(12,2) NOT NULL,
  `margin_percentage` int(11) NOT NULL,
  `min_price` decimal(12,2) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `catalog_product`
--

INSERT INTO `catalog_product` (`product_id`, `inventory`, `sku`, `name`, `color`, `size`, `description`, `image_link`, `link`, `category_id`, `price`, `mfr_cost`, `shipping_cost`, `total_cost`, `margin_percentage`, `min_price`, `status`) VALUES
(10, 90, 'SKU4567', 'Widget J', 'Orange', 'Medium', 'A vibrant and energetic widget', 'https://example.com/widget-j.jpg', 'https://example.com/widget-j', 7, 44.99, 22.00, 7.00, 29.00, 35, 34.99, 0),
(11, 89, 'SKU8901', 'Widget K', 'Pink', 'Small', 'A cute and compact widget for everyday use', 'https://example.com/widget-k.jpg', 'https://example.com/widget-k', 5, 24.99, 12.00, 3.00, 15.00, 40, 19.99, 1),
(12, 81, 'SKU2345', 'Widget L', 'Brown', 'Large', 'A classic and timeless widget', 'https://example.com/widget-l.jpg', 'https://example.com/widget-l', 9, 69.99, 35.00, 8.00, 43.00, 38, 54.99, 1),
(13, 100, 'SKU6789', 'Widget M', 'Gray', 'Extra Large', 'A versatile widget suitable for various tasks', 'https://example.com/widget-m.jpg', 'https://example.com/widget-m', 101, 109.99, 55.00, 10.00, 65.00, 30, 89.99, 1),
(14, 100, 'SKU12345', 'Widget N', 'Turquoise', 'Medium', 'An ocean-inspired widget for a calm ambiance', 'https://example.com/widget-n.jpg', 'https://example.com/widget-n', 102, 54.99, 27.00, 6.00, 33.00, 35, 44.99, 0),
(15, 100, 'SKU67890', 'Widget O', 'White', 'Small', 'A minimalist widget for a clean look', 'https://example.com/widget-o.jpg', 'https://example.com/widget-o', 103, 19.99, 10.00, 4.00, 14.00, 42, 14.99, 1),
(16, 99, 'SKU123456', 'Widget P', 'Black', 'Medium', 'A sophisticated and sleek black widget', 'https://example.com/widget-p.jpg', 'https://example.com/widget-p', 104, 49.99, 25.00, 7.00, 32.00, 36, 39.99, 1),
(17, 99, 'SKU789012', 'Widget Q', 'Green', 'Large', 'A nature-inspired green widget', 'https://example.com/widget-q.jpg', 'https://example.com/widget-q', 105, 79.99, 40.00, 9.00, 49.00, 38, 69.99, 0),
(18, 100, 'SKU345678', 'Widget R', 'Yellow', 'Extra Large', 'A bright and cheerful yellow widget', 'https://example.com/widget-r.jpg', 'https://example.com/widget-r', 101, 99.99, 50.00, 12.00, 62.00, 40, 79.99, 1),
(19, 100, '435', 'hello', 'hello', '653', '1224', 'Screenshot (9).png', '324', 1, 342.00, 4321.00, 4312.00, 432.00, 4321, 3124.00, 1),
(20, 100, '435', 'hello', 'hello', '653', '1224', 'Screenshot (9).png', '324', 1, 342.00, 4321.00, 4312.00, 432.00, 4321, 3124.00, 1),
(21, 95, 'qwd', 'hello', 'hello', '653', 'sfdsjfs', 'Screenshot (1).png', 'aewae', 5, 424.00, 454.00, 243.00, 5452.00, 54, 42.00, 1),
(22, 95, 'qwd', 'hello', 'hello', '653', 'sfdsjfs', 'Screenshot (1).png', 'aewae', 5, 424.00, 454.00, 243.00, 5452.00, 54, 42.00, 1),
(23, 99, '243', '342', '34', 'er', 'hkj', 'Screenshot (3).png', 'jhkj', 5, 45.00, 54.00, 454.00, 4554.00, 545, 4555.00, 1),
(35, 0, 'SKU12', 'Product 12', 'Blue', 'Large', 'Description of Product 12', 'Product12.jpg', 'http://example.com/product12', 1, 129.99, 65.00, 5.00, 70.00, 10, 114.99, 0),
(36, 0, 'SKU13', 'Product 13', 'Green', 'Small', 'Description of Product 13', 'Product13.jpg', 'http://example.com/product13', 2, 139.99, 70.00, 5.00, 75.00, 5, 124.99, 0),
(37, 0, 'SKU14', 'Product 14', 'Yellow', 'Medium', 'Description of Product 14', 'Product14.jpg', 'http://example.com/product14', 3, 149.99, 75.00, 5.00, 80.00, 0, 134.99, 0),
(38, 0, 'SKU15', 'Product 15', 'Red', 'Large', 'Description of Product 15', 'Product15.jpg', 'http://example.com/product15', 1, 159.99, 80.00, 5.00, 85.00, 50, 144.99, 0),
(39, 0, 'SKU16', 'Product 16', 'Blue', 'Small', 'Description of Product 16', 'Product16.jpg', 'http://example.com/product16', 2, 169.99, 85.00, 5.00, 90.00, 55, 154.99, 0),
(40, 0, 'SKU17', 'Product 17', 'Green', 'Medium', 'Description of Product 17', 'Product17.jpg', 'http://example.com/product17', 3, 179.99, 90.00, 5.00, 95.00, 60, 164.99, 0),
(41, 0, 'SKU18', 'Product 18', 'Yellow', 'Large', 'Description of Product 18', 'Product18.jpg', 'http://example.com/product18', 1, 189.99, 95.00, 5.00, 100.00, 65, 174.99, 0),
(42, 0, 'SKU19', 'Product 19', 'Red', 'Small', 'Description of Product 19', 'Product19.jpg', 'http://example.com/product19', 2, 199.99, 100.00, 5.00, 105.00, 70, 184.99, 0),
(43, 0, 'SKU20', 'Product 20', 'Blue', 'Medium', 'Description of Product 20', 'Product20.jpg', 'http://example.com/product20', 3, 209.99, 105.00, 5.00, 110.00, 75, 194.99, 0),
(44, 0, 'SKU21', 'Product 21', 'Green', 'Large', 'Description of Product 21', 'Product21.jpg', 'http://example.com/product21', 1, 219.99, 110.00, 5.00, 115.00, 80, 204.99, 0),
(45, 0, 'SKU22', 'Product 22', 'Yellow', 'Small', 'Description of Product 22', 'Product22.jpg', 'http://example.com/product22', 2, 229.99, 115.00, 5.00, 120.00, 85, 214.99, 0),
(46, 0, 'SKU23', 'Product 23', 'Red', 'Medium', 'Description of Product 23', 'Product23.jpg', 'http://example.com/product23', 3, 239.99, 120.00, 5.00, 125.00, 90, 224.99, 0),
(47, 0, 'SKU24', 'Product 24', 'Blue', 'Large', 'Description of Product 24', 'Product24.jpg', 'http://example.com/product24', 1, 249.99, 125.00, 5.00, 130.00, 95, 234.99, 0),
(48, 0, 'SKU25', 'Product 25', 'Green', 'Small', 'Description of Product 25', 'Product25.jpg', 'http://example.com/product25', 2, 259.99, 130.00, 5.00, 135.00, 100, 244.99, 0),
(49, 0, 'SKU26', 'Product 26', 'Yellow', 'Medium', 'Description of Product 26', 'Product26.jpg', 'http://example.com/product26', 3, 269.99, 135.00, 5.00, 140.00, 50, 254.99, 0),
(50, 0, 'SKU27', 'Product 27', 'Red', 'Large', 'Description of Product 27', 'Product27.jpg', 'http://example.com/product27', 1, 279.99, 140.00, 5.00, 145.00, 55, 264.99, 0),
(51, 0, 'SKU28', 'Product 28', 'Blue', 'Small', 'Description of Product 28', 'Product28.jpg', 'http://example.com/product28', 2, 289.99, 145.00, 5.00, 150.00, 60, 274.99, 0),
(52, 23, 'SKU1', 'check1', 'Red', 'Small', 'Description of Product 1', 'Product1.jpg', 'http://example.com/product1', 1, 29.99, 15.00, 5.00, 20.00, 50, 24.99, 0),
(53, 100, 'SKU2', 'Product 2', 'Blue', 'Medium', 'Description of Product 2', 'Product2.jpg', 'http://example.com/product2', 2, 39.99, 20.00, 5.00, 25.00, 60, 29.99, 0),
(54, 100, 'SKU3', 'Product 3', 'Green', 'Large', 'Description of Product 3', 'Product3.jpg', 'http://example.com/product3', 1, 49.99, 25.00, 5.00, 30.00, 55, 34.99, 0),
(55, 100, 'SKU4', 'Product 4', 'Yellow', 'Small', 'Description of Product 4', 'Product4.jpg', 'http://example.com/product4', 3, 19.99, 10.00, 5.00, 15.00, 75, 14.99, 0),
(56, 100, 'SKU5', 'Product 5', 'Black', 'Medium', 'Description of Product 5', 'Product5.jpg', 'http://example.com/product5', 2, 59.99, 30.00, 5.00, 35.00, 40, 44.99, 0),
(57, 100, 'SKU6', 'Product 6', 'White', 'Large', 'Description of Product 6', 'Product6.jpg', 'http://example.com/product6', 1, 69.99, 35.00, 5.00, 40.00, 45, 54.99, 0),
(58, 100, 'SKU7', 'Product 7', 'Red', 'Small', 'Description of Product 7', 'Product7.jpg', 'http://example.com/product7', 2, 79.99, 40.00, 5.00, 45.00, 35, 64.99, 0),
(59, 100, 'SKU8', 'Product 8', 'Blue', 'Medium', 'Description of Product 8', 'Product8.jpg', 'http://example.com/product8', 3, 89.99, 45.00, 5.00, 50.00, 30, 74.99, 0),
(60, 100, 'SKU9', 'Product 9', 'Green', 'Large', 'Description of Product 9', 'Product9.jpg', 'http://example.com/product9', 1, 99.99, 50.00, 5.00, 55.00, 25, 84.99, 0),
(61, 100, 'SKU10', 'Product 10', 'Yellow', 'Small', 'Description of Product 10', 'Product10.jpg', 'http://example.com/product10', 2, 109.99, 55.00, 5.00, 60.00, 20, 94.99, 0),
(62, 100, 'SKU11', 'Product 11', 'Red', 'Medium', 'Description of Product 11', 'Product11.jpg', 'http://example.com/product11', 3, 119.99, 60.00, 5.00, 65.00, 15, 104.99, 0),
(63, 100, 'SKU12', 'Product 12', 'Blue', 'Large', 'Description of Product 12', 'Product12.jpg', 'http://example.com/product12', 1, 129.99, 65.00, 5.00, 70.00, 10, 114.99, 0),
(64, 100, 'SKU13', 'Product 13', 'Green', 'Small', 'Description of Product 13', 'Product13.jpg', 'http://example.com/product13', 2, 139.99, 70.00, 5.00, 75.00, 5, 124.99, 0),
(65, 100, 'SKU14', 'Product 14', 'Yellow', 'Medium', 'Description of Product 14', 'Product14.jpg', 'http://example.com/product14', 3, 149.99, 75.00, 5.00, 80.00, 0, 134.99, 0),
(66, 100, 'SKU15', 'Product 15', 'Red', 'Large', 'Description of Product 15', 'Product15.jpg', 'http://example.com/product15', 1, 159.99, 80.00, 5.00, 85.00, 50, 144.99, 0),
(67, 100, 'SKU16', 'Product 16', 'Blue', 'Small', 'Description of Product 16', 'Product16.jpg', 'http://example.com/product16', 2, 169.99, 85.00, 5.00, 90.00, 55, 154.99, 0),
(68, 100, 'SKU17', 'Product 17', 'Green', 'Medium', 'Description of Product 17', 'Product17.jpg', 'http://example.com/product17', 3, 179.99, 90.00, 5.00, 95.00, 60, 164.99, 0),
(69, 100, 'SKU18', 'Product 18', 'Yellow', 'Large', 'Description of Product 18', 'Product18.jpg', 'http://example.com/product18', 1, 189.99, 95.00, 5.00, 100.00, 65, 174.99, 0),
(70, 100, 'SKU19', 'Product 19', 'Red', 'Small', 'Description of Product 19', 'Product19.jpg', 'http://example.com/product19', 2, 199.99, 100.00, 5.00, 105.00, 70, 184.99, 0),
(71, 100, 'SKU20', 'Product 20', 'Blue', 'Medium', 'Description of Product 20', 'Product20.jpg', 'http://example.com/product20', 3, 209.99, 105.00, 5.00, 110.00, 75, 194.99, 0),
(72, 100, 'SKU21', 'Product 21', 'Green', 'Large', 'Description of Product 21', 'Product21.jpg', 'http://example.com/product21', 1, 219.99, 110.00, 5.00, 115.00, 80, 204.99, 0),
(73, 100, 'SKU22', 'Product 22', 'Yellow', 'Small', 'Description of Product 22', 'Product22.jpg', 'http://example.com/product22', 2, 229.99, 115.00, 5.00, 120.00, 85, 214.99, 0),
(74, 100, 'SKU23', 'Product 23', 'Red', 'Medium', 'Description of Product 23', 'Product23.jpg', 'http://example.com/product23', 3, 239.99, 120.00, 5.00, 125.00, 90, 224.99, 0),
(75, 100, 'SKU24', 'Product 24', 'Blue', 'Large', 'Description of Product 24', 'Product24.jpg', 'http://example.com/product24', 1, 249.99, 125.00, 5.00, 130.00, 95, 234.99, 0),
(76, 100, 'SKU25', 'Product 25', 'Green', 'Small', 'Description of Product 25', 'Product25.jpg', 'http://example.com/product25', 2, 259.99, 130.00, 5.00, 135.00, 100, 244.99, 0),
(77, 100, 'SKU26', 'Product 26', 'Yellow', 'Medium', 'Description of Product 26', 'Product26.jpg', 'http://example.com/product26', 3, 269.99, 135.00, 5.00, 140.00, 50, 254.99, 0),
(78, 100, 'SKU27', 'Product 27', 'Red', 'Large', 'Description of Product 27', 'Product27.jpg', 'http://example.com/product27', 1, 279.99, 140.00, 5.00, 145.00, 55, 264.99, 0),
(79, 100, 'SKU28', 'Product 28', 'Blue', 'Small', 'Description of Product 28', 'Product28.jpg', 'http://example.com/product28', 2, 289.99, 145.00, 5.00, 150.00, 60, 274.99, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ccc_agent`
--

CREATE TABLE `ccc_agent` (
  `id` tinyint(4) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ccc_agent`
--

INSERT INTO `ccc_agent` (`id`, `name`) VALUES
(1, 'ccc'),
(2, '2ezasia'),
(3, 'abc');

-- --------------------------------------------------------

--
-- Table structure for table `ccc_bmi_calculator`
--

CREATE TABLE `ccc_bmi_calculator` (
  `id_value` int(11) NOT NULL,
  `session_id` varchar(255) DEFAULT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `weight` float NOT NULL,
  `height` float NOT NULL,
  `result` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ccc_bmi_calculator`
--

INSERT INTO `ccc_bmi_calculator` (`id_value`, `session_id`, `user_name`, `weight`, `height`, `result`, `created_at`) VALUES
(3, NULL, '134143', 928.145, 21, '2.10464', '2024-03-06 08:02:31'),
(4, NULL, '134143', 46.297, 21, '0.104982', '2024-03-06 08:02:59'),
(5, NULL, '134143', 46.297, 21, '0.104982', '2024-03-06 08:03:20'),
(6, NULL, '134143', 46.297, 21, '0.104982', '2024-03-06 08:04:03'),
(7, NULL, '134143', 46.297, 21, '0.104982', '2024-03-06 08:09:00'),
(8, NULL, '134143', 46.297, 21, '0.104982', '2024-03-06 08:09:37'),
(9, NULL, '134143', 46.297, 21, '0.104982', '2024-03-06 08:10:05'),
(10, NULL, '134143', 321, 231, 'underweight', '2024-03-06 09:38:37'),
(12, '2js2nt3tjbjnb2ihfq49v774am', '134143', 423, 432, 'underweight', '2024-03-06 09:54:39'),
(14, '2js2nt3tjbjnb2ihfq49v774am', '134143', 321, 13, 'underweight', '2024-03-06 10:07:02'),
(15, '2js2nt3tjbjnb2ihfq49v774am', 'wdewf', 20, 5, 'underweight', '2024-03-06 10:13:41'),
(16, '2js2nt3tjbjnb2ihfq49v774am', 'wdewf', 20, 5, 'underweight', '2024-03-06 10:21:46'),
(17, '2js2nt3tjbjnb2ihfq49v774am', 'wdewf', 231, 231, 'underweight', '2024-03-06 10:22:51'),
(18, '2js2nt3tjbjnb2ihfq49v774am', '', 141.521, 123, 'underweight', '2024-03-06 11:44:45'),
(19, '2js2nt3tjbjnb2ihfq49v774am', 'wdewf', 55.7919, 312, 'underweight', '2024-03-06 11:45:36'),
(20, '2js2nt3tjbjnb2ihfq49v774am', 'wdewf', 55.7919, 312, 'underweight', '2024-03-06 12:09:45'),
(21, NULL, 'wdewf', 104.78, 321, 'underweight', '2024-03-06 12:39:33');

-- --------------------------------------------------------

--
-- Table structure for table `ccc_clerk`
--

CREATE TABLE `ccc_clerk` (
  `id` tinyint(4) NOT NULL,
  `agent_id` tinyint(4) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ccc_clerk`
--

INSERT INTO `ccc_clerk` (`id`, `agent_id`, `name`) VALUES
(1, 1, 'sanjay p'),
(2, 1, 'sameer p'),
(3, 1, 'minaxi d'),
(4, 2, 'mehul p'),
(5, 2, 'tina p'),
(6, 3, 'xyz'),
(7, 3, 'pqr');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `customer_email` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `billing_address` varchar(255) DEFAULT NULL,
  `billing_city` varchar(255) DEFAULT NULL,
  `billing_region` int(11) DEFAULT NULL,
  `billing_country` int(11) DEFAULT NULL,
  `billing_phone` varchar(255) DEFAULT NULL,
  `shipping_address` varchar(255) DEFAULT NULL,
  `shipping_city` varchar(255) DEFAULT NULL,
  `shipping_region` int(11) DEFAULT NULL,
  `shipping_country` int(11) DEFAULT NULL,
  `shipping_phone` varchar(255) DEFAULT NULL,
  `default` tinyint(4) DEFAULT NULL,
  `password` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_email`, `first_name`, `last_name`, `billing_address`, `billing_city`, `billing_region`, `billing_country`, `billing_phone`, `shipping_address`, `shipping_city`, `shipping_region`, `shipping_country`, `shipping_phone`, `default`, `password`) VALUES
(1, '12@gmail', 'hi', 'hello', '', '', 0, 0, '', '', '', 0, 0, '', 0, 123456),
(3, '123@gmail', 'tiwa', 'hello', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1231),
(4, '124@gmail', 'hi', 'hello', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 12345);

-- --------------------------------------------------------

--
-- Table structure for table `customer_address`
--

CREATE TABLE `customer_address` (
  `address_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `billing_address` varchar(255) DEFAULT NULL,
  `billing_city` varchar(255) DEFAULT NULL,
  `billing_region` int(11) DEFAULT NULL,
  `billing_country` int(11) DEFAULT NULL,
  `billing_phone` varchar(255) DEFAULT NULL,
  `shipping_address` varchar(255) DEFAULT NULL,
  `shipping_city` varchar(255) DEFAULT NULL,
  `shipping_region` int(11) DEFAULT NULL,
  `shipping_country` int(11) DEFAULT NULL,
  `shipping_phone` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_address`
--

INSERT INTO `customer_address` (`address_id`, `customer_id`, `billing_address`, `billing_city`, `billing_region`, `billing_country`, `billing_phone`, `shipping_address`, `shipping_city`, `shipping_region`, `shipping_country`, `shipping_phone`) VALUES
(1, 4, 'asdf', 'fdfgdgf', 0, 0, '', 'asdf', 'fdfgdgf', 0, 0, ''),
(2, 4, 'asdf', 'fdfgdgf', 0, 0, '', 'asdf', 'fdfgdgf', 0, 0, ''),
(3, 4, 'asdf', 'fdfgdgf', 0, 4535, '345336', 'asdf', 'fdfgdgf', 0, 4535, '345336');

-- --------------------------------------------------------

--
-- Table structure for table `import`
--

CREATE TABLE `import` (
  `import_id` int(11) NOT NULL,
  `data` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `import`
--

INSERT INTO `import` (`import_id`, `data`, `status`) VALUES
(1, '{\"inventory\":\"23\",\"sku\":\"SKU1\",\"name\":\"check1\",\"color\":\"Red\",\"size\":\"Small\",\"description\":\"Description of Product 1\",\"image_link\":\"Product1.jpg\",\"link\":\"http:\\/\\/example.com\\/product1\",\"category_id\":\"1\",\"price\":\"29.99\",\"mfr_cost\":\"15.00\",\"shipping_cost\":\"5.00\",\"total_cost\":\"20.00\",\"margin_percentage\":\"50\",\"min_price\":\"24.99\"}', 1),
(2, '{\"inventory\":\"100\",\"sku\":\"SKU2\",\"name\":\"Product 2\",\"color\":\"Blue\",\"size\":\"Medium\",\"description\":\"Description of Product 2\",\"image_link\":\"Product2.jpg\",\"link\":\"http:\\/\\/example.com\\/product2\",\"category_id\":\"2\",\"price\":\"39.99\",\"mfr_cost\":\"20.00\",\"shipping_cost\":\"5.00\",\"total_cost\":\"25.00\",\"margin_percentage\":\"60\",\"min_price\":\"29.99\"}', 1),
(3, '{\"inventory\":\"100\",\"sku\":\"SKU3\",\"name\":\"Product 3\",\"color\":\"Green\",\"size\":\"Large\",\"description\":\"Description of Product 3\",\"image_link\":\"Product3.jpg\",\"link\":\"http:\\/\\/example.com\\/product3\",\"category_id\":\"1\",\"price\":\"49.99\",\"mfr_cost\":\"25.00\",\"shipping_cost\":\"5.00\",\"total_cost\":\"30.00\",\"margin_percentage\":\"55\",\"min_price\":\"34.99\"}', 1),
(4, '{\"inventory\":\"100\",\"sku\":\"SKU4\",\"name\":\"Product 4\",\"color\":\"Yellow\",\"size\":\"Small\",\"description\":\"Description of Product 4\",\"image_link\":\"Product4.jpg\",\"link\":\"http:\\/\\/example.com\\/product4\",\"category_id\":\"3\",\"price\":\"19.99\",\"mfr_cost\":\"10.00\",\"shipping_cost\":\"5.00\",\"total_cost\":\"15.00\",\"margin_percentage\":\"75\",\"min_price\":\"14.99\"}', 1),
(5, '{\"inventory\":\"100\",\"sku\":\"SKU5\",\"name\":\"Product 5\",\"color\":\"Black\",\"size\":\"Medium\",\"description\":\"Description of Product 5\",\"image_link\":\"Product5.jpg\",\"link\":\"http:\\/\\/example.com\\/product5\",\"category_id\":\"2\",\"price\":\"59.99\",\"mfr_cost\":\"30.00\",\"shipping_cost\":\"5.00\",\"total_cost\":\"35.00\",\"margin_percentage\":\"40\",\"min_price\":\"44.99\"}', 1),
(6, '{\"inventory\":\"100\",\"sku\":\"SKU6\",\"name\":\"Product 6\",\"color\":\"White\",\"size\":\"Large\",\"description\":\"Description of Product 6\",\"image_link\":\"Product6.jpg\",\"link\":\"http:\\/\\/example.com\\/product6\",\"category_id\":\"1\",\"price\":\"69.99\",\"mfr_cost\":\"35.00\",\"shipping_cost\":\"5.00\",\"total_cost\":\"40.00\",\"margin_percentage\":\"45\",\"min_price\":\"54.99\"}', 1),
(7, '{\"inventory\":\"100\",\"sku\":\"SKU7\",\"name\":\"Product 7\",\"color\":\"Red\",\"size\":\"Small\",\"description\":\"Description of Product 7\",\"image_link\":\"Product7.jpg\",\"link\":\"http:\\/\\/example.com\\/product7\",\"category_id\":\"2\",\"price\":\"79.99\",\"mfr_cost\":\"40.00\",\"shipping_cost\":\"5.00\",\"total_cost\":\"45.00\",\"margin_percentage\":\"35\",\"min_price\":\"64.99\"}', 1),
(8, '{\"inventory\":\"100\",\"sku\":\"SKU8\",\"name\":\"Product 8\",\"color\":\"Blue\",\"size\":\"Medium\",\"description\":\"Description of Product 8\",\"image_link\":\"Product8.jpg\",\"link\":\"http:\\/\\/example.com\\/product8\",\"category_id\":\"3\",\"price\":\"89.99\",\"mfr_cost\":\"45.00\",\"shipping_cost\":\"5.00\",\"total_cost\":\"50.00\",\"margin_percentage\":\"30\",\"min_price\":\"74.99\"}', 1),
(9, '{\"inventory\":\"100\",\"sku\":\"SKU9\",\"name\":\"Product 9\",\"color\":\"Green\",\"size\":\"Large\",\"description\":\"Description of Product 9\",\"image_link\":\"Product9.jpg\",\"link\":\"http:\\/\\/example.com\\/product9\",\"category_id\":\"1\",\"price\":\"99.99\",\"mfr_cost\":\"50.00\",\"shipping_cost\":\"5.00\",\"total_cost\":\"55.00\",\"margin_percentage\":\"25\",\"min_price\":\"84.99\"}', 1),
(10, '{\"inventory\":\"100\",\"sku\":\"SKU10\",\"name\":\"Product 10\",\"color\":\"Yellow\",\"size\":\"Small\",\"description\":\"Description of Product 10\",\"image_link\":\"Product10.jpg\",\"link\":\"http:\\/\\/example.com\\/product10\",\"category_id\":\"2\",\"price\":\"109.99\",\"mfr_cost\":\"55.00\",\"shipping_cost\":\"5.00\",\"total_cost\":\"60.00\",\"margin_percentage\":\"20\",\"min_price\":\"94.99\"}', 1),
(11, '{\"inventory\":\"100\",\"sku\":\"SKU11\",\"name\":\"Product 11\",\"color\":\"Red\",\"size\":\"Medium\",\"description\":\"Description of Product 11\",\"image_link\":\"Product11.jpg\",\"link\":\"http:\\/\\/example.com\\/product11\",\"category_id\":\"3\",\"price\":\"119.99\",\"mfr_cost\":\"60.00\",\"shipping_cost\":\"5.00\",\"total_cost\":\"65.00\",\"margin_percentage\":\"15\",\"min_price\":\"104.99\"}', 1),
(12, '{\"inventory\":\"100\",\"sku\":\"SKU12\",\"name\":\"Product 12\",\"color\":\"Blue\",\"size\":\"Large\",\"description\":\"Description of Product 12\",\"image_link\":\"Product12.jpg\",\"link\":\"http:\\/\\/example.com\\/product12\",\"category_id\":\"1\",\"price\":\"129.99\",\"mfr_cost\":\"65.00\",\"shipping_cost\":\"5.00\",\"total_cost\":\"70.00\",\"margin_percentage\":\"10\",\"min_price\":\"114.99\"}', 1),
(13, '{\"inventory\":\"100\",\"sku\":\"SKU13\",\"name\":\"Product 13\",\"color\":\"Green\",\"size\":\"Small\",\"description\":\"Description of Product 13\",\"image_link\":\"Product13.jpg\",\"link\":\"http:\\/\\/example.com\\/product13\",\"category_id\":\"2\",\"price\":\"139.99\",\"mfr_cost\":\"70.00\",\"shipping_cost\":\"5.00\",\"total_cost\":\"75.00\",\"margin_percentage\":\"5\",\"min_price\":\"124.99\"}', 1),
(14, '{\"inventory\":\"100\",\"sku\":\"SKU14\",\"name\":\"Product 14\",\"color\":\"Yellow\",\"size\":\"Medium\",\"description\":\"Description of Product 14\",\"image_link\":\"Product14.jpg\",\"link\":\"http:\\/\\/example.com\\/product14\",\"category_id\":\"3\",\"price\":\"149.99\",\"mfr_cost\":\"75.00\",\"shipping_cost\":\"5.00\",\"total_cost\":\"80.00\",\"margin_percentage\":\"0\",\"min_price\":\"134.99\"}', 1),
(15, '{\"inventory\":\"100\",\"sku\":\"SKU15\",\"name\":\"Product 15\",\"color\":\"Red\",\"size\":\"Large\",\"description\":\"Description of Product 15\",\"image_link\":\"Product15.jpg\",\"link\":\"http:\\/\\/example.com\\/product15\",\"category_id\":\"1\",\"price\":\"159.99\",\"mfr_cost\":\"80.00\",\"shipping_cost\":\"5.00\",\"total_cost\":\"85.00\",\"margin_percentage\":\"50\",\"min_price\":\"144.99\"}', 1),
(16, '{\"inventory\":\"100\",\"sku\":\"SKU16\",\"name\":\"Product 16\",\"color\":\"Blue\",\"size\":\"Small\",\"description\":\"Description of Product 16\",\"image_link\":\"Product16.jpg\",\"link\":\"http:\\/\\/example.com\\/product16\",\"category_id\":\"2\",\"price\":\"169.99\",\"mfr_cost\":\"85.00\",\"shipping_cost\":\"5.00\",\"total_cost\":\"90.00\",\"margin_percentage\":\"55\",\"min_price\":\"154.99\"}', 1),
(17, '{\"inventory\":\"100\",\"sku\":\"SKU17\",\"name\":\"Product 17\",\"color\":\"Green\",\"size\":\"Medium\",\"description\":\"Description of Product 17\",\"image_link\":\"Product17.jpg\",\"link\":\"http:\\/\\/example.com\\/product17\",\"category_id\":\"3\",\"price\":\"179.99\",\"mfr_cost\":\"90.00\",\"shipping_cost\":\"5.00\",\"total_cost\":\"95.00\",\"margin_percentage\":\"60\",\"min_price\":\"164.99\"}', 1),
(18, '{\"inventory\":\"100\",\"sku\":\"SKU18\",\"name\":\"Product 18\",\"color\":\"Yellow\",\"size\":\"Large\",\"description\":\"Description of Product 18\",\"image_link\":\"Product18.jpg\",\"link\":\"http:\\/\\/example.com\\/product18\",\"category_id\":\"1\",\"price\":\"189.99\",\"mfr_cost\":\"95.00\",\"shipping_cost\":\"5.00\",\"total_cost\":\"100.00\",\"margin_percentage\":\"65\",\"min_price\":\"174.99\"}', 1),
(19, '{\"inventory\":\"100\",\"sku\":\"SKU19\",\"name\":\"Product 19\",\"color\":\"Red\",\"size\":\"Small\",\"description\":\"Description of Product 19\",\"image_link\":\"Product19.jpg\",\"link\":\"http:\\/\\/example.com\\/product19\",\"category_id\":\"2\",\"price\":\"199.99\",\"mfr_cost\":\"100.00\",\"shipping_cost\":\"5.00\",\"total_cost\":\"105.00\",\"margin_percentage\":\"70\",\"min_price\":\"184.99\"}', 1),
(20, '{\"inventory\":\"100\",\"sku\":\"SKU20\",\"name\":\"Product 20\",\"color\":\"Blue\",\"size\":\"Medium\",\"description\":\"Description of Product 20\",\"image_link\":\"Product20.jpg\",\"link\":\"http:\\/\\/example.com\\/product20\",\"category_id\":\"3\",\"price\":\"209.99\",\"mfr_cost\":\"105.00\",\"shipping_cost\":\"5.00\",\"total_cost\":\"110.00\",\"margin_percentage\":\"75\",\"min_price\":\"194.99\"}', 1),
(21, '{\"inventory\":\"100\",\"sku\":\"SKU21\",\"name\":\"Product 21\",\"color\":\"Green\",\"size\":\"Large\",\"description\":\"Description of Product 21\",\"image_link\":\"Product21.jpg\",\"link\":\"http:\\/\\/example.com\\/product21\",\"category_id\":\"1\",\"price\":\"219.99\",\"mfr_cost\":\"110.00\",\"shipping_cost\":\"5.00\",\"total_cost\":\"115.00\",\"margin_percentage\":\"80\",\"min_price\":\"204.99\"}', 1),
(22, '{\"inventory\":\"100\",\"sku\":\"SKU22\",\"name\":\"Product 22\",\"color\":\"Yellow\",\"size\":\"Small\",\"description\":\"Description of Product 22\",\"image_link\":\"Product22.jpg\",\"link\":\"http:\\/\\/example.com\\/product22\",\"category_id\":\"2\",\"price\":\"229.99\",\"mfr_cost\":\"115.00\",\"shipping_cost\":\"5.00\",\"total_cost\":\"120.00\",\"margin_percentage\":\"85\",\"min_price\":\"214.99\"}', 1),
(23, '{\"inventory\":\"100\",\"sku\":\"SKU23\",\"name\":\"Product 23\",\"color\":\"Red\",\"size\":\"Medium\",\"description\":\"Description of Product 23\",\"image_link\":\"Product23.jpg\",\"link\":\"http:\\/\\/example.com\\/product23\",\"category_id\":\"3\",\"price\":\"239.99\",\"mfr_cost\":\"120.00\",\"shipping_cost\":\"5.00\",\"total_cost\":\"125.00\",\"margin_percentage\":\"90\",\"min_price\":\"224.99\"}', 1),
(24, '{\"inventory\":\"100\",\"sku\":\"SKU24\",\"name\":\"Product 24\",\"color\":\"Blue\",\"size\":\"Large\",\"description\":\"Description of Product 24\",\"image_link\":\"Product24.jpg\",\"link\":\"http:\\/\\/example.com\\/product24\",\"category_id\":\"1\",\"price\":\"249.99\",\"mfr_cost\":\"125.00\",\"shipping_cost\":\"5.00\",\"total_cost\":\"130.00\",\"margin_percentage\":\"95\",\"min_price\":\"234.99\"}', 1),
(25, '{\"inventory\":\"100\",\"sku\":\"SKU25\",\"name\":\"Product 25\",\"color\":\"Green\",\"size\":\"Small\",\"description\":\"Description of Product 25\",\"image_link\":\"Product25.jpg\",\"link\":\"http:\\/\\/example.com\\/product25\",\"category_id\":\"2\",\"price\":\"259.99\",\"mfr_cost\":\"130.00\",\"shipping_cost\":\"5.00\",\"total_cost\":\"135.00\",\"margin_percentage\":\"100\",\"min_price\":\"244.99\"}', 1),
(26, '{\"inventory\":\"100\",\"sku\":\"SKU26\",\"name\":\"Product 26\",\"color\":\"Yellow\",\"size\":\"Medium\",\"description\":\"Description of Product 26\",\"image_link\":\"Product26.jpg\",\"link\":\"http:\\/\\/example.com\\/product26\",\"category_id\":\"3\",\"price\":\"269.99\",\"mfr_cost\":\"135.00\",\"shipping_cost\":\"5.00\",\"total_cost\":\"140.00\",\"margin_percentage\":\"50\",\"min_price\":\"254.99\"}', 1),
(27, '{\"inventory\":\"100\",\"sku\":\"SKU27\",\"name\":\"Product 27\",\"color\":\"Red\",\"size\":\"Large\",\"description\":\"Description of Product 27\",\"image_link\":\"Product27.jpg\",\"link\":\"http:\\/\\/example.com\\/product27\",\"category_id\":\"1\",\"price\":\"279.99\",\"mfr_cost\":\"140.00\",\"shipping_cost\":\"5.00\",\"total_cost\":\"145.00\",\"margin_percentage\":\"55\",\"min_price\":\"264.99\"}', 1),
(28, '{\"inventory\":\"100\",\"sku\":\"SKU28\",\"name\":\"Product 28\",\"color\":\"Blue\",\"size\":\"Small\",\"description\":\"Description of Product 28\",\"image_link\":\"Product28.jpg\",\"link\":\"http:\\/\\/example.com\\/product28\",\"category_id\":\"2\",\"price\":\"289.99\",\"mfr_cost\":\"145.00\",\"shipping_cost\":\"5.00\",\"total_cost\":\"150.00\",\"margin_percentage\":\"60\",\"min_price\":\"274.99\"}', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sales_order`
--

CREATE TABLE `sales_order` (
  `order_id` int(11) NOT NULL,
  `order_number` varchar(255) NOT NULL,
  `tax_percent` int(11) NOT NULL,
  `grand_total` decimal(12,2) NOT NULL,
  `payment_id` int(11) DEFAULT NULL,
  `shipping_id` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sales_order`
--

INSERT INTO `sales_order` (`order_id`, `order_number`, `tax_percent`, `grand_total`, `payment_id`, `shipping_id`, `status`) VALUES
(1, '65fff32e145e4', 8, 49.50, 1, 1, 4),
(2, '65fff339da3dd', 8, 27.00, 2, 2, 1),
(3, '65fff3457fd24', 8, 77.63, 3, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sales_order_customer`
--

CREATE TABLE `sales_order_customer` (
  `order_customer_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `billing_address` varchar(255) NOT NULL,
  `billing_city` varchar(255) NOT NULL,
  `billing_region` int(11) NOT NULL,
  `billing_country` int(11) NOT NULL,
  `billing_phone` varchar(255) NOT NULL,
  `shipping_address` varchar(255) NOT NULL,
  `shipping_city` varchar(255) NOT NULL,
  `shipping_region` int(11) NOT NULL,
  `shipping_country` int(11) NOT NULL,
  `shipping_phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sales_order_customer`
--

INSERT INTO `sales_order_customer` (`order_customer_id`, `order_id`, `customer_id`, `email`, `billing_address`, `billing_city`, `billing_region`, `billing_country`, `billing_phone`, `shipping_address`, `shipping_city`, `shipping_region`, `shipping_country`, `shipping_phone`) VALUES
(1, 1, 4, '124@gmail', 'asdf', 'fdfgdgf', 0, 4535, '345336', 'asdf', 'fdfgdgf', 0, 0, '345336'),
(2, 2, 4, '124@gmail', 'asdf', 'fdfgdgf', 0, 4535, '345336', 'asdf', 'fdfgdgf', 0, 0, '345336'),
(3, 3, 4, '124@gmail', 'asdf', 'fdfgdgf', 0, 4535, '345336', 'asdf', 'fdfgdgf', 0, 0, '345336');

-- --------------------------------------------------------

--
-- Table structure for table `sales_order_item`
--

CREATE TABLE `sales_order_item` (
  `item_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` decimal(12,2) NOT NULL,
  `qty` int(11) NOT NULL,
  `row_total` decimal(12,2) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_color` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sales_order_item`
--

INSERT INTO `sales_order_item` (`item_id`, `order_id`, `product_id`, `price`, `qty`, `row_total`, `product_name`, `product_color`) VALUES
(1, 1, 10, 44.99, 1, 44.99, 'Widget J', 'Orange'),
(2, 2, 11, 24.99, 1, 24.99, 'Widget K', 'Pink'),
(3, 3, 12, 69.99, 1, 69.99, 'Widget L', 'Brown');

-- --------------------------------------------------------

--
-- Table structure for table `sales_order_payment_method`
--

CREATE TABLE `sales_order_payment_method` (
  `payment_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `card_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sales_order_payment_method`
--

INSERT INTO `sales_order_payment_method` (`payment_id`, `order_id`, `payment_method`, `card_number`) VALUES
(1, 1, 'Cod', 0),
(2, 2, 'Cod', 0),
(3, 3, 'Cod', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sales_order_shipping_method`
--

CREATE TABLE `sales_order_shipping_method` (
  `shipping_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `shipping_method` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sales_order_shipping_method`
--

INSERT INTO `sales_order_shipping_method` (`shipping_id`, `order_id`, `shipping_method`) VALUES
(1, 1, 'Normal'),
(2, 2, 'Normal'),
(3, 3, 'Normal');

-- --------------------------------------------------------

--
-- Table structure for table `sales_order_status_history`
--

CREATE TABLE `sales_order_status_history` (
  `history_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `from_status` int(11) NOT NULL,
  `to_status` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `action_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sales_order_status_history`
--

INSERT INTO `sales_order_status_history` (`history_id`, `order_id`, `from_status`, `to_status`, `date`, `action_by`) VALUES
(1, 1, 0, 0, '2024-03-24 09:32:30', 0),
(2, 2, 0, 0, '2024-03-24 09:32:42', 0),
(3, 3, 0, 0, '2024-03-24 09:32:53', 0),
(4, 1, 0, 1, '2024-03-24 09:34:01', 0),
(5, 2, 0, 1, '2024-03-24 09:34:54', 1),
(6, 2, 0, 5, '2024-03-24 09:35:07', 0),
(7, 2, 5, 7, '2024-03-24 09:35:16', 1),
(8, 1, 0, 5, '2024-03-24 09:35:31', 0),
(9, 1, 5, 6, '2024-03-24 09:35:40', 1),
(10, 3, 0, 1, '2024-03-26 11:17:04', 1),
(11, 3, 0, 5, '2024-03-26 11:17:09', 0),
(12, 3, 5, 6, '2024-03-26 11:17:14', 1),
(13, 3, 4, 1, '2024-03-26 11:17:24', 1),
(14, 3, 0, 5, '2024-03-26 11:17:39', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sales_quote`
--

CREATE TABLE `sales_quote` (
  `quote_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `tax_percent` int(11) NOT NULL,
  `grand_total` decimal(12,2) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `payment_id` int(11) DEFAULT NULL,
  `shipping_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sales_quote`
--

INSERT INTO `sales_quote` (`quote_id`, `customer_id`, `tax_percent`, `grand_total`, `order_id`, `payment_id`, `shipping_id`) VALUES
(1, 4, 8, 49.50, 1, 1, 1),
(2, 4, 8, 27.00, 2, 2, 2),
(3, 4, 8, 77.63, 3, 3, 3),
(4, 4, 8, 0.00, NULL, NULL, NULL),
(5, 4, 8, 0.00, NULL, NULL, NULL),
(6, 0, 8, 27.00, 0, 0, 0),
(7, 4, 8, 0.00, NULL, NULL, NULL),
(8, 4, 8, 77.63, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sales_quote_customer`
--

CREATE TABLE `sales_quote_customer` (
  `quote_customer_id` int(11) NOT NULL,
  `quote_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `billing_address` varchar(255) NOT NULL,
  `billing_city` varchar(255) NOT NULL,
  `billing_region` int(11) NOT NULL,
  `billing_country` int(11) NOT NULL,
  `billing_phone` varchar(255) NOT NULL,
  `shipping_address` varchar(255) NOT NULL,
  `shipping_city` varchar(255) NOT NULL,
  `shipping_region` int(11) NOT NULL,
  `shipping_country` int(11) NOT NULL,
  `shipping_phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sales_quote_customer`
--

INSERT INTO `sales_quote_customer` (`quote_customer_id`, `quote_id`, `customer_id`, `email`, `billing_address`, `billing_city`, `billing_region`, `billing_country`, `billing_phone`, `shipping_address`, `shipping_city`, `shipping_region`, `shipping_country`, `shipping_phone`) VALUES
(1, 1, 4, '124@gmail', 'asdf', 'fdfgdgf', 0, 4535, '345336', 'asdf', 'fdfgdgf', 0, 0, '345336'),
(2, 2, 4, '124@gmail', 'asdf', 'fdfgdgf', 0, 4535, '345336', 'asdf', 'fdfgdgf', 0, 0, '345336'),
(3, 3, 4, '124@gmail', 'asdf', 'fdfgdgf', 0, 4535, '345336', 'asdf', 'fdfgdgf', 0, 0, '345336');

-- --------------------------------------------------------

--
-- Table structure for table `sales_quote_item`
--

CREATE TABLE `sales_quote_item` (
  `item_id` int(11) NOT NULL,
  `quote_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` decimal(12,2) NOT NULL,
  `qty` int(11) NOT NULL,
  `row_total` decimal(12,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sales_quote_item`
--

INSERT INTO `sales_quote_item` (`item_id`, `quote_id`, `product_id`, `price`, `qty`, `row_total`) VALUES
(1, 1, 10, 44.99, 1, 44.99),
(2, 2, 11, 24.99, 1, 24.99),
(3, 3, 12, 69.99, 1, 69.99),
(4, 6, 11, 24.99, 1, 24.99),
(5, 8, 12, 69.99, 1, 69.99);

-- --------------------------------------------------------

--
-- Table structure for table `sales_quote_payment_method`
--

CREATE TABLE `sales_quote_payment_method` (
  `payment_id` int(11) NOT NULL,
  `quote_id` int(11) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `card_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sales_quote_payment_method`
--

INSERT INTO `sales_quote_payment_method` (`payment_id`, `quote_id`, `payment_method`, `card_number`) VALUES
(1, 1, 'Cod', 0),
(2, 2, 'Cod', 0),
(3, 3, 'Cod', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sales_quote_shipping_method`
--

CREATE TABLE `sales_quote_shipping_method` (
  `shipping_id` int(11) NOT NULL,
  `quote_id` int(11) NOT NULL,
  `shipping_method` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sales_quote_shipping_method`
--

INSERT INTO `sales_quote_shipping_method` (`shipping_id`, `quote_id`, `shipping_method`) VALUES
(1, 1, 'Normal'),
(2, 2, 'Normal'),
(3, 3, 'Normal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `catalog_category`
--
ALTER TABLE `catalog_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `catalog_product`
--
ALTER TABLE `catalog_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `ccc_agent`
--
ALTER TABLE `ccc_agent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ccc_bmi_calculator`
--
ALTER TABLE `ccc_bmi_calculator`
  ADD PRIMARY KEY (`id_value`);

--
-- Indexes for table `ccc_clerk`
--
ALTER TABLE `ccc_clerk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `customer_address`
--
ALTER TABLE `customer_address`
  ADD PRIMARY KEY (`address_id`);

--
-- Indexes for table `import`
--
ALTER TABLE `import`
  ADD PRIMARY KEY (`import_id`);

--
-- Indexes for table `sales_order`
--
ALTER TABLE `sales_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `sales_order_customer`
--
ALTER TABLE `sales_order_customer`
  ADD PRIMARY KEY (`order_customer_id`);

--
-- Indexes for table `sales_order_item`
--
ALTER TABLE `sales_order_item`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `sales_order_payment_method`
--
ALTER TABLE `sales_order_payment_method`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `sales_order_shipping_method`
--
ALTER TABLE `sales_order_shipping_method`
  ADD PRIMARY KEY (`shipping_id`);

--
-- Indexes for table `sales_order_status_history`
--
ALTER TABLE `sales_order_status_history`
  ADD PRIMARY KEY (`history_id`);

--
-- Indexes for table `sales_quote`
--
ALTER TABLE `sales_quote`
  ADD PRIMARY KEY (`quote_id`);

--
-- Indexes for table `sales_quote_customer`
--
ALTER TABLE `sales_quote_customer`
  ADD PRIMARY KEY (`quote_customer_id`);

--
-- Indexes for table `sales_quote_item`
--
ALTER TABLE `sales_quote_item`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `sales_quote_payment_method`
--
ALTER TABLE `sales_quote_payment_method`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `sales_quote_shipping_method`
--
ALTER TABLE `sales_quote_shipping_method`
  ADD PRIMARY KEY (`shipping_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `catalog_category`
--
ALTER TABLE `catalog_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `catalog_product`
--
ALTER TABLE `catalog_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `ccc_agent`
--
ALTER TABLE `ccc_agent`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ccc_bmi_calculator`
--
ALTER TABLE `ccc_bmi_calculator`
  MODIFY `id_value` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `ccc_clerk`
--
ALTER TABLE `ccc_clerk`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer_address`
--
ALTER TABLE `customer_address`
  MODIFY `address_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `import`
--
ALTER TABLE `import`
  MODIFY `import_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `sales_order`
--
ALTER TABLE `sales_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sales_order_customer`
--
ALTER TABLE `sales_order_customer`
  MODIFY `order_customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sales_order_item`
--
ALTER TABLE `sales_order_item`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sales_order_payment_method`
--
ALTER TABLE `sales_order_payment_method`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sales_order_shipping_method`
--
ALTER TABLE `sales_order_shipping_method`
  MODIFY `shipping_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sales_order_status_history`
--
ALTER TABLE `sales_order_status_history`
  MODIFY `history_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `sales_quote`
--
ALTER TABLE `sales_quote`
  MODIFY `quote_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sales_quote_customer`
--
ALTER TABLE `sales_quote_customer`
  MODIFY `quote_customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sales_quote_item`
--
ALTER TABLE `sales_quote_item`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sales_quote_payment_method`
--
ALTER TABLE `sales_quote_payment_method`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sales_quote_shipping_method`
--
ALTER TABLE `sales_quote_shipping_method`
  MODIFY `shipping_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
