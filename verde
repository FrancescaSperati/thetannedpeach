-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 01, 2018 at 10:26 AM
-- Server version: 5.6.38
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `Verde`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@admin.net', 'd033e22ae348aeb5660fc2140aec35850c4da997');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(3) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `name`) VALUES
(1, 'tops'),
(2, 'dresses'),
(3, 'skirts'),
(4, 'pants'),
(5, 'jackets'),
(6, 'shoes'),
(7, 'accessories');

-- --------------------------------------------------------

--
-- Table structure for table `favourite`
--

CREATE TABLE `favourite` (
  `fav_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `favourite`
--

INSERT INTO `favourite` (`fav_id`, `user_id`, `item_id`) VALUES
(102, 2, 37),
(107, 2, 9),
(108, 2, 5),
(109, 2, 6),
(110, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `image_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`image_id`, `item_id`, `url`) VALUES
(1, 1, 'assets/images/product-images/tops/products_tops_01a.jpg'),
(2, 1, 'assets/images/product-images/tops/products_tops_01b.jpg'),
(3, 1, 'assets/images/product-images/tops/products_tops_01c.jpg'),
(4, 1, 'assets/images/product-images/tops/products_tops_01d.jpg'),
(5, 2, 'assets/images/product-images/tops/products_tops_02a.jpg'),
(6, 2, 'assets/images/product-images/tops/products_tops_02b.jpg'),
(7, 2, 'assets/images/product-images/tops/products_tops_02c.jpg'),
(8, 2, 'assets/images/product-images/tops/products_tops_02d.jpg'),
(9, 3, 'assets/images/product-images/tops/products_tops_03a.jpg'),
(10, 3, 'assets/images/product-images/tops/products_tops_03b.jpg'),
(11, 3, 'assets/images/product-images/tops/products_tops_03c.jpg'),
(12, 3, 'assets/images/product-images/tops/products_tops_03d.jpg'),
(13, 4, 'assets/images/product-images/tops/products_tops_04a.jpg'),
(14, 4, 'assets/images/product-images/tops/products_tops_04b.jpg'),
(15, 4, 'assets/images/product-images/tops/products_tops_04c.jpg'),
(16, 4, 'assets/images/product-images/tops/products_tops_04d.jpg'),
(17, 5, 'assets/images/product-images/tops/products_tops_05a.jpg'),
(18, 5, 'assets/images/product-images/tops/products_tops_05b.jpg'),
(19, 5, 'assets/images/product-images/tops/products_tops_05c.jpg'),
(20, 5, 'assets/images/product-images/tops/products_tops_05d.jpg'),
(21, 6, 'assets/images/product-images/tops/products_tops_06a.jpg'),
(22, 6, 'assets/images/product-images/tops/products_tops_06b.jpg'),
(23, 6, 'assets/images/product-images/tops/products_tops_06c.jpg'),
(24, 6, 'assets/images/product-images/tops/products_tops_06d.jpg'),
(25, 7, 'assets/images/product-images/tops/products_tops_07a.jpg'),
(26, 7, 'assets/images/product-images/tops/products_tops_07b.jpg'),
(27, 7, 'assets/images/product-images/tops/products_tops_07c.jpg'),
(28, 7, 'assets/images/product-images/tops/products_tops_07d.jpg'),
(29, 8, 'assets/images/product-images/tops/products_tops_08a.jpg'),
(30, 8, 'assets/images/product-images/tops/products_tops_08b.jpg'),
(31, 8, 'assets/images/product-images/tops/products_tops_08c.jpg'),
(32, 8, 'assets/images/product-images/tops/products_tops_08d.jpg'),
(33, 9, 'assets/images/product-images/tops/products_tops_09a.jpg'),
(34, 9, 'assets/images/product-images/tops/products_tops_09b.jpg'),
(35, 9, 'assets/images/product-images/tops/products_tops_09c.jpg'),
(36, 10, 'assets/images/product-images/dresses/products_dresses_01a.jpg'),
(37, 10, 'assets/images/product-images/dresses/products_dresses_01b.jpg'),
(38, 10, 'assets/images/product-images/dresses/products_dresses_01c.jpg'),
(39, 10, 'assets/images/product-images/dresses/products_dresses_01d.jpg'),
(40, 11, 'assets/images/product-images/dresses/products_dresses_02a.jpg'),
(41, 11, 'assets/images/product-images/dresses/products_dresses_02b.jpg'),
(42, 11, 'assets/images/product-images/dresses/products_dresses_02c.jpg'),
(43, 11, 'assets/images/product-images/dresses/products_dresses_02d.jpg'),
(44, 12, 'assets/images/product-images/dresses/products_dresses_03a.jpg'),
(45, 12, 'assets/images/product-images/dresses/products_dresses_03b.jpg'),
(46, 12, 'assets/images/product-images/dresses/products_dresses_03c.jpg'),
(47, 12, 'assets/images/product-images/dresses/products_dresses_03d.jpg'),
(48, 13, 'assets/images/product-images/dresses/products_dresses_04a.jpg'),
(49, 13, 'assets/images/product-images/dresses/products_dresses_04b.jpg'),
(50, 13, 'assets/images/product-images/dresses/products_dresses_04c.jpg'),
(51, 13, 'assets/images/product-images/dresses/products_dresses_04d.jpg'),
(52, 14, 'assets/images/product-images/dresses/products_dresses_05a.jpg'),
(53, 14, 'assets/images/product-images/dresses/products_dresses_05b.jpg'),
(54, 14, 'assets/images/product-images/dresses/products_dresses_05c.jpg'),
(55, 14, 'assets/images/product-images/dresses/products_dresses_05d.jpg'),
(56, 15, 'assets/images/product-images/dresses/products_dresses_06a.jpg'),
(57, 15, 'assets/images/product-images/dresses/products_dresses_06b.jpg'),
(58, 15, 'assets/images/product-images/dresses/products_dresses_06c.jpg'),
(59, 15, 'assets/images/product-images/dresses/products_dresses_06d.jpg'),
(60, 16, 'assets/images/product-images/skirts/products_skirts_01a.jpg'),
(61, 16, 'assets/images/product-images/skirts/products_skirts_01b.jpg'),
(62, 16, 'assets/images/product-images/skirts/products_skirts_01c.jpg'),
(63, 16, 'assets/images/product-images/skirts/products_skirts_01d.jpg'),
(64, 17, 'assets/images/product-images/skirts/products_skirts_02a.jpg'),
(65, 17, 'assets/images/product-images/skirts/products_skirts_02b.jpg'),
(66, 17, 'assets/images/product-images/skirts/products_skirts_02c.jpg'),
(67, 17, 'assets/images/product-images/skirts/products_skirts_02d.jpg'),
(68, 18, 'assets/images/product-images/skirts/products_skirts_03a.jpg'),
(69, 18, 'assets/images/product-images/skirts/products_skirts_03b.jpg'),
(70, 18, 'assets/images/product-images/skirts/products_skirts_03c.jpg'),
(71, 18, 'assets/images/product-images/skirts/products_skirts_03d.jpg'),
(72, 19, 'assets/images/product-images/skirts/products_skirts_04a.jpg'),
(73, 19, 'assets/images/product-images/skirts/products_skirts_04b.jpg'),
(74, 19, 'assets/images/product-images/skirts/products_skirts_04c.jpg'),
(75, 19, 'assets/images/product-images/skirts/products_skirts_04d.jpg'),
(76, 20, 'assets/images/product-images/skirts/products_skirts_05a.jpg'),
(77, 20, 'assets/images/product-images/skirts/products_skirts_05b.jpg'),
(78, 20, 'assets/images/product-images/skirts/products_skirts_05c.jpg'),
(79, 20, 'assets/images/product-images/skirts/products_skirts_05d.jpg'),
(80, 21, 'assets/images/product-images/skirts/products_skirts_06a.jpg'),
(81, 21, 'assets/images/product-images/skirts/products_skirts_06b.jpg'),
(82, 21, 'assets/images/product-images/skirts/products_skirts_06c.jpg'),
(83, 21, 'assets/images/product-images/skirts/products_skirts_06d.jpg'),
(90, 22, 'assets/images/product-images/pants/products_pants_01a.jpg'),
(91, 22, 'assets/images/product-images/pants/products_pants_01b.jpg'),
(92, 22, 'assets/images/product-images/pants/products_pants_01c.jpg'),
(93, 22, 'assets/images/product-images/pants/products_pants_01d.jpg'),
(94, 23, 'assets/images/product-images/pants/products_pants_02a.jpg'),
(95, 23, 'assets/images/product-images/pants/products_pants_02b.jpg'),
(96, 23, 'assets/images/product-images/pants/products_pants_02c.jpg'),
(97, 23, 'assets/images/product-images/pants/products_pants_02d.jpg'),
(98, 24, 'assets/images/product-images/pants/products_pants_03a.jpg'),
(99, 24, 'assets/images/product-images/pants/products_pants_03b.jpg'),
(100, 24, 'assets/images/product-images/pants/products_pants_03c.jpg'),
(101, 24, 'assets/images/product-images/pants/products_pants_03d.jpg'),
(102, 25, 'assets/images/product-images/pants/products_pants_04a.jpg'),
(103, 25, 'assets/images/product-images/pants/products_pants_04b.jpg'),
(104, 25, 'assets/images/product-images/pants/products_pants_04c.jpg'),
(105, 25, 'assets/images/product-images/pants/products_pants_04d.jpg'),
(106, 26, 'assets/images/product-images/pants/products_pants_05a.jpg'),
(107, 26, 'assets/images/product-images/pants/products_pants_05b.jpg'),
(108, 26, 'assets/images/product-images/pants/products_pants_05c.jpg'),
(109, 26, 'assets/images/product-images/pants/products_pants_05d.jpg'),
(110, 27, 'assets/images/product-images/pants/products_pants_06a.jpg'),
(111, 27, 'assets/images/product-images/pants/products_pants_06b.jpg'),
(112, 27, 'assets/images/product-images/pants/products_pants_06c.jpg'),
(113, 27, 'assets/images/product-images/pants/products_pants_06d.jpg'),
(129, 28, 'assets/images/product-images/jackets/products_jackets_01a.jpg'),
(130, 28, 'assets/images/product-images/jackets/products_jackets_01b.jpg'),
(131, 28, 'assets/images/product-images/jackets/products_jackets_01c.jpg'),
(132, 28, 'assets/images/product-images/jackets/products_jackets_01d.jpg'),
(133, 29, 'assets/images/product-images/jackets/products_jackets_02a.jpg'),
(134, 29, 'assets/images/product-images/jackets/products_jackets_02b.jpg'),
(135, 29, 'assets/images/product-images/jackets/products_jackets_02c.jpg'),
(136, 29, 'assets/images/product-images/jackets/products_jackets_02d.jpg'),
(137, 30, 'assets/images/product-images/jackets/products_jackets_03a.jpg'),
(138, 30, 'assets/images/product-images/jackets/products_jackets_03b.jpg'),
(139, 30, 'assets/images/product-images/jackets/products_jackets_03c.jpg'),
(140, 30, 'assets/images/product-images/jackets/products_jackets_03d.jpg'),
(141, 31, 'assets/images/product-images/jackets/products_jackets_04a.jpg'),
(142, 31, 'assets/images/product-images/jackets/products_jackets_04b.jpg'),
(143, 31, 'assets/images/product-images/jackets/products_jackets_04c.jpg'),
(144, 31, 'assets/images/product-images/jackets/products_jackets_04d.jpg'),
(145, 32, 'assets/images/product-images/jackets/products_jackets_05a.jpg'),
(146, 32, 'assets/images/product-images/jackets/products_jackets_05b.jpg'),
(147, 32, 'assets/images/product-images/jackets/products_jackets_05c.jpg'),
(148, 32, 'assets/images/product-images/jackets/products_jackets_05d.jpg'),
(149, 33, 'assets/images/product-images/jackets/products_jackets_06a.jpg'),
(150, 33, 'assets/images/product-images/jackets/products_jackets_06b.jpg'),
(151, 33, 'assets/images/product-images/jackets/products_jackets_06c.jpg'),
(152, 33, 'assets/images/product-images/jackets/products_jackets_06d.jpg'),
(153, 34, 'assets/images/product-images/shoes/products_shoes_01a.jpg'),
(154, 34, 'assets/images/product-images/shoes/products_shoes_01b.jpg'),
(155, 35, 'assets/images/product-images/shoes/products_shoes_02a.jpg'),
(156, 35, 'assets/images/product-images/shoes/products_shoes_02b.jpg'),
(157, 36, 'assets/images/product-images/shoes/products_shoes_03a.jpg'),
(158, 36, 'assets/images/product-images/shoes/products_shoes_03b.jpg'),
(159, 37, 'assets/images/product-images/accessories/products_accessories_01a.jpeg'),
(160, 37, 'assets/images/product-images/accessories/products_accessories_01b.jpeg'),
(161, 38, 'assets/images/product-images/accessories/products_accessories_02a.jpeg'),
(162, 38, 'assets/images/product-images/accessories/products_accessories_02b.jpeg'),
(163, 39, 'assets/images/product-images/accessories/products_accessories_03a.jpeg'),
(164, 39, 'assets/images/product-images/accessories/products_accessories_03b.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `item_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `is_new` tinyint(1) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `price` double(5,2) NOT NULL,
  `is_sale` tinyint(1) NOT NULL,
  `price_sale` double(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`item_id`, `name`, `description`, `is_new`, `cat_id`, `price`, `is_sale`, `price_sale`) VALUES
(1, 'Champagne plunge wrap top', 'A silky finish, wrap-style top featuring billow sleeves, floral print, tie detail and plunge v neckline. \r\n\r\nModel Wears: NZ 8 | Model\'s Height: 175cm / 5\'9\".', 1, 1, 99.00, 0, 0.00),
(2, 'Spotted Silky Cami', 'This cami features a red spotted print and silk-like finish, paired with denim this piece is a winner for sure!\r\n\r\nModel wears: NZ 8 | Model\'s Height: 178cm/5\'10\'.', 0, 1, 89.00, 0, 0.00),
(3, 'Floral plunge wrap top', 'A silky finish, wrap-style top featuring billow sleeves, floral print, tie detail and plunge v neckline. \r\n\r\nModel Wears: NZ 8 | Model\'s Height: 175cm / 5\'9\".', 0, 1, 99.00, 0, 0.00),
(4, 'Ruffle Trim Cami', 'Your classic silky cami featuring thin straps and a ruffle trim along the neckline, pair with denim and sneakers or dress it up with heels.\r\n\r\nModel Wears: NZ 8 | Model\'s Height: 175cm / 5\'9\".', 0, 1, 79.00, 0, 0.00),
(5, 'Button Up Knit Top', 'Model Wears: NZ 8 | Model\'s Height: 175cm / 5\'9\".', 0, 1, 89.00, 0, 0.00),
(6, 'Twist Front Crop Top', 'A slim fit crop top featuring a ribbed fabric, long sleeves, and twist front detail.\r\n\r\nModel Wears: NZ 8 | Model\'s Height: 175cm / 5\'9\".', 0, 1, 79.00, 0, 0.00),
(7, 'Easy Oversized Jumper', 'Your new fave sweat! Featuring an oversized fit, crew neckline and cuffed sleeves. Layer over a slip, jeans or wide-leg pants for a super comfy, street style.\r\n\r\nModel wears: NZ 8 | Model\'s height: 178cm/5\'10\'.', 0, 1, 99.00, 0, 0.00),
(8, 'Frill Cami', 'A cropped fit cami featuring thin straps, ribbed fabric and frill hem detailing.\r\n\r\nModel Wears: NZ 8 | Model\'s Height: 175cm / 5\'9\".', 0, 1, 79.00, 0, 0.00),
(9, 'Twist Front Crop Top', 'A slim fit crop top featuring a ribbed fabric, long sleeves, and twist front detail.\r\n\r\nModel Wears: NZ 8 | Model\'s Height: 175cm / 5\'9\".', 0, 1, 99.00, 0, 0.00),
(10, 'Linen Blend Button Front Dress', 'Your fave linen blend fabric in a midi length dress featuring stripe print, adjustable waist tie and statement button front detailing.\r\n\r\nModel Wears: NZ 8 | Model\'s Height: 175cm / 5\'9\".', 1, 2, 89.00, 0, 0.00),
(11, 'Button Front Dress', 'Model Wears: NZ 8 | Model\'s Height: 175cm / 5\'9\".', 0, 2, 79.00, 0, 0.00),
(12, 'Linen Blend Square Neck Dress', 'This mini features a linen blend, thin-adjustable straps, gathered detailing at the back and a square neckline.\r\n\r\nModel Wears: NZ 8 | Model\'s Height: 175cm / 5\'9\".', 0, 2, 79.00, 0, 0.00),
(13, 'Linen Blend Button Through Dress', 'Model Wears: NZ 8 | Model\'s Height: 175cm / 5\'9\".', 0, 2, 79.00, 0, 0.00),
(14, 'Knit Mini Dress', 'Knitted mini dress with round neckline, long sleeves and a slim fit.\r\n\r\nModel Wears: NZ 8 | Model\'s Height: 175cm / 5\'9\".', 0, 2, 79.00, 0, 0.00),
(15, 'Striped Deep V Dress', 'Model Wears: NZ 8 | Model\'s Height: 175cm / 5\'9\".', 0, 2, 79.00, 0, 0.00),
(16, 'Button Up Midi Skirt', 'Midi skirt featuring button up closure at side and high-waist. Team with the matching crop cami for the ultimate co-ord look.\r\n\r\nModel Wears: NZ 8 | Model\'s Height: 175cm / 5\'9\".', 1, 3, 79.00, 0, 0.00),
(17, 'Linen Blend Wrap Skirt', 'This mini features a linen blend, star print, wrap style with tie waist detail.\r\n\r\nModel Wears: NZ 8 | Model\'s Height: 175cm / 5\'9\".', 0, 3, 89.00, 0, 0.00),
(18, 'Linen Blend Floral Skirt', 'This mini features a lilac floral print, frill detail and tie waist.\r\n\r\nModel Wears: NZ 8 | Model\'s Height: 175cm / 5\'9\".', 0, 3, 89.00, 0, 0.00),
(19, 'Floaty Hem Floral Skirt', 'A relaxed fit, floaty hem skirt featuring gathered detailing, black floral print and a tie waist.\r\n\r\nModel Wears: NZ 8 | Model\'s Height: 175cm / 5\'9\".', 0, 3, 79.00, 0, 0.00),
(20, 'Linen Blend Belted Skirt', 'This mini features a linen blend and a button front with a belted-tie detail.\r\n\r\nModel Wears: NZ 8 | Model\'s Height: 175cm / 5\'9\".', 0, 3, 89.00, 0, 0.00),
(21, 'Panelled Denim Mini Skirt', 'This mini features a light, linen blend, elastic waistband and tiered style with frill detailing.\r\n\r\nModel Wears: NZ 8 | Model\'s Height: 175cm / 5\'9\".', 0, 3, 89.00, 0, 0.00),
(22, 'Linen Blend Pleated Wide Leg Pant', 'A cropped fit, wide leg style pant featuring a linen blend and button fly.\r\n\r\nModel Wears: NZ 8 | Model\'s Height: 175cm / 5\'9\".', 1, 4, 99.00, 0, 0.00),
(23, 'Striped Linen Blend Button Pant', 'Model Wears: NZ 8 | Model\'s Height: 175cm / 5\'9\".', 0, 4, 109.00, 0, 0.00),
(24, 'Wide Leg Crop Jeans', 'Wide leg crop jeans in a high waist fit with zip and button closure. Take your pick from our range of colours and team with the matching jacket.\r\n\r\nModel Wears: NZ 8 | Model\'s Height: 175cm / 5\'9\".', 0, 4, 109.00, 0, 0.00),
(25, 'Wide Leg Stripe Pants', 'Model wears: NZ 8 | Model\'s Height: 178cm/5\'10\".', 0, 4, 119.00, 0, 0.00),
(26, 'Washed Mom Jeans', 'The mom jean is the universal silhouette, featuring a soft, comfortable straight fit that tapers at the ankle with a high waist rise.\r\n\r\nModel wears: NZ 8 | Model\'s Height: 178cm/5\'10\"', 0, 4, 119.00, 0, 0.00),
(27, 'Linen Blend Button Pant', 'Wide leg pants featuring a high waist with button up front, pleated detailing and cropped fit.\r\n\r\nModel Wears: NZ 8 | Model\'s Height: 175cm / 5\'9\".', 0, 4, 109.00, 0, 0.00),
(28, 'Cropped Teddy Jacket', 'Model Wears: NZ 8 | Model\'s Height: 175cm / 5\'9\".', 1, 5, 129.00, 0, 0.00),
(29, 'Button Up Teddy Coat', 'Oversized borg jacket featuring wide collar, side pockets and double button closure at front. Pair this with your favourite denim or wear over a dress for night!\r\n\r\nModel Wears: NZ 8 | Model\'s Height: 175cm / 5\'9\".', 0, 5, 129.00, 0, 0.00),
(30, 'Short Parka Jacket', 'Model wears: NZ 8 | Model\'s Height: 178cm/5\'10\".', 0, 5, 129.00, 0, 0.00),
(31, 'Cropped Oversized Denim Jacket', 'A staple for your wardrobe that pair with anything! Style with a mini dress or go double denim with a pair of mom jeans.\r\n\r\nModel wears: NZ 8 | Model\'s Height: 178cm/5\'10\".', 0, 5, 119.00, 0, 0.00),
(32, 'Classic Denim Jacket', 'A staple for your wardrobe that pair with anything! Style with a mini dress or go double denim with a pair of mom jeans.\r\n\r\nModel wears: NZ 8 | Model\'s Height: 178cm/5\'10\".', 0, 5, 119.00, 0, 0.00),
(33, 'Washed Denim Jacket', 'A staple for your wardrobe that pair with anything! Style with a mini dress or go double denim with a pair of mom jeans.\r\n\r\nModel wears: NZ 8 | Model\'s Height: 178cm/5\'10\".', 0, 5, 99.00, 0, 0.00),
(34, 'Mod Western Boot', 'A modern take on your western ankle boot, featuring a block heel and microsuede.', 1, 6, 149.00, 0, 0.00),
(35, 'White Pointed Toe Ankle Boot', 'This ankle boot features 100% faux leather, kitten heel and a pointed toe.', 0, 6, 139.00, 0, 0.00),
(36, 'Red Pointed Toe Ankle Boot', 'This ankle boot features 100% faux leather, kitten heel and a pointed toe.', 0, 6, 139.00, 0, 0.00),
(37, 'Textured 3 Pack Hoops', 'A pack of three textured who earrings, featuring a small, medium and larger style.', 1, 7, 69.00, 0, 0.00),
(38, 'Knotted Hair Band', 'Hairband with a knot detail at the front and covered elastic at the back.', 0, 7, 49.00, 0, 0.00),
(39, 'Scarf/ Hairband', 'Scarf in a patterned weave that can be tied to form a hairband. Size 50x50 cm.', 0, 7, 49.00, 0, 0.00);

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `purchase_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount` double(5,2) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `full_address` varchar(255) NOT NULL,
  `suburb` varchar(100) NOT NULL,
  `state` varchar(3) NOT NULL,
  `postal` int(11) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `shipped_date` date NOT NULL,
  `tracking_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`purchase_id`, `user_id`, `amount`, `fullname`, `full_address`, `suburb`, `state`, `postal`, `phone`, `date`, `shipped_date`, `tracking_number`) VALUES
(1, 4, 99.00, 'Charlie Chiu', '47 User Rd', 'St Kilda', 'VIC', 3182, '123456', '2018-10-01 06:01:43', '2018-09-18', 123456),
(2, 4, 109.00, 'Charlie Chiu', '47 User Rd', 'St Kilda', 'VIC', 3182, '123456', '2018-10-01 08:30:08', '2018-10-01', 234567),
(3, 5, 219.00, 'Charlie Chiu', '47 Test Rd', 'St Kilda', 'VIC', 3182, '123456', '2018-10-01 09:18:53', '2018-09-30', 345678);

-- --------------------------------------------------------

--
-- Table structure for table `purchase_items`
--

CREATE TABLE `purchase_items` (
  `pi_id` int(11) NOT NULL,
  `purchase_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

CREATE TABLE `size` (
  `size_id` int(3) NOT NULL,
  `name` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `size`
--

INSERT INTO `size` (`size_id`, `name`) VALUES
(1, '6'),
(2, '8'),
(3, '10'),
(4, '12'),
(5, '14'),
(6, '16');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `stock_id` int(3) NOT NULL,
  `item_id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`stock_id`, `item_id`, `size_id`, `quantity`) VALUES
(1, 1, 1, 5),
(2, 1, 2, 3),
(3, 1, 3, 4),
(4, 1, 4, 3),
(5, 1, 5, 6),
(6, 1, 6, 4),
(7, 2, 1, 3),
(8, 2, 2, 4),
(9, 2, 3, 5),
(10, 2, 4, 6),
(11, 2, 5, 3),
(12, 2, 6, 2),
(13, 3, 1, 4),
(14, 3, 2, 4),
(15, 3, 3, 5),
(16, 3, 4, 0),
(17, 3, 5, 0),
(18, 3, 6, 4),
(19, 4, 1, 2),
(20, 4, 2, 3),
(21, 4, 3, 5),
(22, 4, 4, 6),
(23, 4, 5, 4),
(24, 4, 6, 5),
(25, 5, 1, 3),
(26, 5, 2, 4),
(27, 5, 3, 3),
(28, 5, 4, 5),
(29, 5, 5, 0),
(30, 5, 6, 2),
(31, 6, 1, 3),
(32, 6, 2, 4),
(33, 6, 3, 5),
(34, 6, 4, 2),
(35, 6, 5, 6),
(36, 6, 6, 4),
(37, 7, 1, 4),
(38, 7, 2, 3),
(39, 7, 3, 4),
(40, 7, 4, 5),
(41, 7, 5, 6),
(42, 7, 6, 5),
(43, 8, 1, 1),
(44, 8, 2, 0),
(45, 8, 3, 3),
(46, 8, 4, 2),
(47, 8, 5, 3),
(48, 8, 6, 4),
(49, 9, 1, 5),
(50, 9, 2, 6),
(51, 9, 3, 3),
(52, 9, 4, 3),
(53, 9, 5, 1),
(54, 9, 6, 2),
(55, 10, 1, 0),
(56, 10, 2, 3),
(57, 10, 3, 3),
(58, 10, 4, 2),
(59, 10, 5, 3),
(60, 10, 6, 6),
(61, 11, 1, 2),
(62, 11, 2, 4),
(63, 11, 3, 5),
(64, 11, 4, 4),
(65, 11, 5, 0),
(66, 11, 6, 3),
(67, 12, 1, 2),
(68, 12, 2, 1),
(69, 12, 3, 2),
(70, 12, 4, 0),
(71, 12, 5, 4),
(72, 12, 6, 5),
(73, 13, 1, 3),
(74, 13, 2, 2),
(75, 13, 3, 4),
(76, 13, 4, 3),
(77, 13, 5, 1),
(78, 13, 6, 0),
(79, 14, 1, 2),
(80, 14, 2, 5),
(81, 14, 3, 4),
(82, 14, 4, 5),
(83, 14, 5, 3),
(84, 14, 6, 2),
(85, 15, 1, 1),
(86, 15, 2, 0),
(87, 15, 3, 3),
(88, 15, 4, 4),
(89, 15, 5, 5),
(90, 15, 6, 1),
(91, 16, 1, 2),
(92, 16, 2, 0),
(93, 16, 3, 5),
(94, 16, 4, 3),
(95, 16, 5, 4),
(96, 16, 6, 3),
(97, 17, 1, 5),
(98, 17, 2, 3),
(99, 17, 3, 5),
(100, 17, 4, 4),
(101, 17, 5, 3),
(102, 17, 6, 0),
(103, 18, 1, 1),
(104, 18, 2, 2),
(105, 18, 3, 3),
(106, 18, 4, 3),
(107, 18, 5, 4),
(108, 18, 6, 2),
(109, 19, 1, 0),
(110, 19, 2, 4),
(111, 19, 3, 2),
(112, 19, 4, 3),
(113, 19, 5, 5),
(114, 19, 6, 3),
(115, 20, 1, 4),
(116, 20, 2, 3),
(117, 20, 3, 3),
(118, 20, 4, 1),
(119, 20, 5, 2),
(120, 20, 6, 4),
(121, 21, 1, 3),
(122, 21, 2, 5),
(123, 21, 3, 2),
(124, 21, 4, 3),
(125, 21, 5, 2),
(126, 21, 6, 4),
(127, 22, 1, 3),
(128, 22, 2, 2),
(129, 22, 3, 1),
(130, 22, 4, 2),
(131, 22, 5, 3),
(132, 22, 6, 4),
(133, 23, 1, 3),
(134, 23, 2, 4),
(135, 23, 3, 4),
(136, 23, 4, 3),
(137, 23, 5, 3),
(138, 23, 6, 4),
(139, 24, 1, 5),
(140, 24, 2, 6),
(141, 24, 3, 4),
(142, 24, 4, 4),
(143, 24, 5, 3),
(144, 24, 6, 2),
(145, 25, 1, 2),
(146, 25, 2, 2),
(147, 25, 3, 3),
(148, 25, 4, 0),
(149, 25, 5, 2),
(150, 25, 6, 3),
(151, 26, 1, 5),
(152, 26, 2, 2),
(153, 26, 3, 4),
(154, 26, 4, 3),
(155, 26, 5, 2),
(156, 26, 6, 3),
(157, 26, 1, 5),
(158, 26, 2, 3),
(159, 26, 3, 0),
(160, 26, 4, 1),
(161, 26, 5, 2),
(162, 26, 6, 5),
(163, 27, 1, 4),
(164, 27, 2, 2),
(165, 27, 3, 3),
(166, 27, 4, 4),
(167, 27, 5, 3),
(168, 27, 6, 0),
(169, 28, 1, 1),
(170, 28, 2, 2),
(171, 28, 3, 3),
(172, 28, 4, 5),
(173, 28, 5, 3),
(174, 28, 6, 3),
(175, 29, 1, 4),
(176, 29, 2, 3),
(177, 29, 3, 5),
(178, 29, 4, 1),
(179, 29, 5, 2),
(180, 29, 6, 0),
(181, 30, 1, 4),
(182, 30, 2, 3),
(183, 30, 3, 3),
(184, 30, 4, 6),
(185, 30, 5, 4),
(186, 30, 6, 4),
(187, 31, 1, 6),
(188, 31, 2, 0),
(189, 31, 3, 1),
(190, 31, 4, 2),
(191, 31, 5, 5),
(192, 31, 6, 4),
(193, 32, 1, 5),
(194, 32, 2, 3),
(195, 32, 3, 4),
(196, 32, 4, 5),
(197, 30, 1, 4),
(198, 30, 2, 2),
(199, 30, 3, 1),
(200, 30, 4, 2),
(201, 30, 5, 3),
(202, 30, 6, 4),
(203, 31, 1, 3),
(204, 31, 2, 2),
(205, 31, 3, 0),
(206, 31, 4, 1),
(207, 31, 5, 2),
(208, 31, 6, 2),
(209, 32, 1, 5),
(210, 32, 2, 4),
(211, 32, 3, 5),
(212, 32, 4, 3),
(213, 32, 5, 4),
(214, 32, 6, 5),
(215, 33, 1, 6),
(216, 33, 2, 4),
(217, 33, 4, 3),
(218, 33, 5, 4),
(219, 33, 6, 1),
(220, 34, 1, 2),
(221, 34, 2, 2),
(222, 34, 3, 5),
(223, 34, 4, 3),
(224, 34, 5, 0),
(225, 34, 6, 1),
(226, 35, 1, 4),
(227, 35, 2, 2),
(228, 35, 3, 5),
(229, 35, 4, 3),
(230, 35, 5, 3),
(231, 35, 6, 6),
(232, 36, 1, 5),
(233, 36, 2, 4),
(234, 36, 3, 3),
(235, 36, 4, 4),
(236, 36, 5, 5),
(257, 36, 6, 0),
(258, 37, 1, 1),
(259, 37, 2, 2),
(260, 37, 3, 2),
(261, 37, 4, 3),
(262, 37, 5, 4),
(263, 37, 6, 3),
(264, 38, 1, 2),
(265, 38, 2, 5),
(266, 38, 3, 4),
(267, 38, 4, 3),
(268, 38, 5, 5),
(269, 38, 6, 3),
(270, 39, 1, 4),
(271, 39, 2, 3),
(272, 39, 3, 3),
(273, 39, 4, 4),
(274, 39, 5, 3),
(275, 39, 6, 4);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(3) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `add_full` varchar(255) NOT NULL,
  `add_suburb` varchar(100) NOT NULL,
  `add_state` varchar(5) NOT NULL,
  `add_postal` int(4) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `registration_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `email`, `password`, `fname`, `surname`, `add_full`, `add_suburb`, `add_state`, `add_postal`, `phone`, `registration_date`) VALUES
(1, 'admin@admin.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin', 'strator', '13 admin road', 'Melbourne', 'VIC', 3000, '0404040404', '2018-08-06 00:43:11'),
(2, 'test@test.net', 'b444ac06613fc8d63795be9ad0beaf55011936ac', 'test', 'test', 'via dalle palle', 'milano', 'ita', 3102, '0303020402', '2018-08-21 12:30:59'),
(3, 'user@email.com', 'bb70729af79c563675e873ec7d6d3a63cb5dab28', 'User', '', '', '', '', 0, '', '2018-09-08 07:55:39'),
(4, 'charlie@gmail.com', '123456', 'Charlie', 'Chiu', '47 User Rd', 'St Kilda', 'VIC', 3182, '123456', '2018-10-01 05:59:11'),
(5, 'test@test.com', '4d9012b4a77a9524d675dad27c3276ab5705e5e8', 'Test Chiu', '', '', '', '', 0, '', '2018-10-01 09:17:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `favourite`
--
ALTER TABLE `favourite`
  ADD PRIMARY KEY (`fav_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `item_id` (`item_id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`image_id`),
  ADD KEY `item_id` (`item_id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`purchase_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `purchase_items`
--
ALTER TABLE `purchase_items`
  ADD PRIMARY KEY (`pi_id`),
  ADD KEY `purchase_id` (`purchase_id`,`item_id`,`size_id`),
  ADD KEY `size_const2` (`size_id`),
  ADD KEY `item_cost2` (`item_id`);

--
-- Indexes for table `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`size_id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`stock_id`),
  ADD KEY `item_id` (`item_id`),
  ADD KEY `size_id` (`size_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `favourite`
--
ALTER TABLE `favourite`
  MODIFY `fav_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `purchase_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `purchase_items`
--
ALTER TABLE `purchase_items`
  MODIFY `pi_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `size`
--
ALTER TABLE `size`
  MODIFY `size_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `stock_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=276;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `favourite`
--
ALTER TABLE `favourite`
  ADD CONSTRAINT `fav_item_const` FOREIGN KEY (`item_id`) REFERENCES `item` (`item_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fav_user_const` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `item_const2` FOREIGN KEY (`item_id`) REFERENCES `item` (`item_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `cat_const` FOREIGN KEY (`cat_id`) REFERENCES `category` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `purchase`
--
ALTER TABLE `purchase`
  ADD CONSTRAINT `user_const` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `purchase_items`
--
ALTER TABLE `purchase_items`
  ADD CONSTRAINT `item_cost2` FOREIGN KEY (`item_id`) REFERENCES `item` (`item_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `purchase_const` FOREIGN KEY (`purchase_id`) REFERENCES `purchase` (`purchase_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `size_const2` FOREIGN KEY (`size_id`) REFERENCES `size` (`size_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `stock`
--
ALTER TABLE `stock`
  ADD CONSTRAINT `item_const` FOREIGN KEY (`item_id`) REFERENCES `item` (`item_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `size_const` FOREIGN KEY (`size_id`) REFERENCES `size` (`size_id`) ON DELETE CASCADE ON UPDATE CASCADE;
