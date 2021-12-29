-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2021 at 05:46 AM
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
-- Database: `jiomart`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`, `category_slug`) VALUES
(1, 'Laptop', 'laptop'),
(3, 'Smart Watches', 'smartwatch'),
(4, 'Footware', 'footware'),
(5, 'Clothes', 'clothes'),
(6, 'Bags', 'bags'),
(7, 'Earphones', 'earphones'),
(8, 'Furniture', 'furniture'),
(9, 'Camera', 'camera'),
(10, 'Accessories', 'accessories');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(30) NOT NULL,
  `product_id` int(30) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `quantity` int(30) NOT NULL,
  `order_date` date NOT NULL,
  `username` varchar(256) NOT NULL,
  `category_slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_slug` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `img` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_slug`, `product_name`, `price`, `description`, `img`) VALUES
(1, 'laptop', 'Legion 530', '49000', 'They say life is full of compromises. They say you can’t have high performance and long battery life on the same notebook. They say that a high-performance gaming laptop has to be big, bulky, and heavy. They’re wrong. Now you can enjoy elite gaming performance on a thin and light notebook with amazing battery life, thanks to the new AMD Ryzen™ 5000 H-Series Mobile Processors. Never compromise on your gaming laptop again.', 'legion.jpg'),
(2, 'smartwatch', 'Apple Watch 3', '16999', 'Full screen ahead. Buy direct from Apple. 45mm or 41mm case size. Get No Cost EMI for 12 months with qualifying Credit Cards. Services: Shop with Specialists, No-contact free delivery, EMI available, Direct from Apple.', 'apple.jpg'),
(3, 'footware', 'Court Vapor Lite', '6685', 'Bank OfferFlat ₹100 off on first Flipkart Pay Later order of ₹500 and aboveT&C\r\n\r\nBank Offer5% Unlimited Cashback on Flipkart Axis Bank Credit CardT&C\r\n', 'footware-1.jpg'),
(4, 'clothes', 'T-Shirts', '999', 'Add a classic flare to your fashion collection with this Save Our Home Half Sleeve T-Shirt. Pair it with anything from trousers to jeans and enhance your fashion game with elegance.\r\nCounry of Origin : India', '1.jpg'),
(5, 'clothes', 'Thermal Jacket 500 ', '2999', '\r\nDesigned for playing tennis, and perfectly suitable for badminton, squash and padel in COLD WEATHER.. Specially designed for tennis players to provide maximum warmth.', '2.jpg'),
(6, 'clothes', 'India Ink Raw Hem Shorts', '799', 'Flaunt your alpha fashion sense with India Ink Raw Hem Men\'s Shorts. Pair these shorts with a T-shirt or a vest and sliders for a perfectly comfy fit.\r\nCountry of Origin : India', '3.jpg'),
(7, 'bags', 'Lino Perros', '2999', 'Address Of Manufacturer/ Packer/ Importer\r\nPlot No. 324, Phase Iv, Udyog Vihar, Sector 19, Gurugram, Haryana 122016\r\nReturn And Exchange Policy\r\nThis product is eligible for returns or replacement. Please initiate returns or replacements from the \'My Orders\' section in the App within 7 days of delivery. Kindly ensure the product is in its original condition with all tags attached.', '4.jpg'),
(8, 'earphones', 'AirPods', '9999', 'Personalise them for free\r\nEngrave a mix of emoji, text and numbers to make AirPods unmistakably yours.\r\n\r\nYou can use seven regional languages and English. Only at Apple.\r\nOrder by 5:00 pm. Delivers to 400011††\r\nTomorrow — Free', '8.jpg'),
(9, 'earphones', 'boAt On-Ear Wireless Headphone', '2999', '\r\n5% Instant Discount upto Rs.2000 on Standard Chartered Bank Credit cards & Debit cards for cart value above Rs. 10,000.Select the offer from “View all offers ”on payment page T&C Apply.', '9.jpg'),
(10, 'furniture', 'Rhs Sofa With Console In Grey', '19999', 'Add Timeless Elegance To Your Living Room With The Alden Leatherette L-Shape Sofa With Console . Available In A Premium Shade Of Tan Brown Colour , This Sofa Has Been Fully Upholstered With Art Leather.', '6.jpg'),
(11, 'camera', 'Camera 2K Pro', '9999', 'Mi 360 Awesome Camera 2K Pro black ', 'cam-1.jpg'),
(12, 'accessories', 'ecobee SmartThermostat ', '4999', 'Save up to 26% annually on heating and cooling costs (compared to a hold of 72°F)\r\nIncluded SmartSensor extends comfort to your most important rooms\r\nComes with Siri and Alexa Built-in for calls, music, and added control (Apple HomePod mini required to enable Siri)', '10.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(256) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `mobile`, `password`, `first_name`, `last_name`, `address`) VALUES
(9, 'navingohite', 'navin@gmail.com', '', 'navin@123', 'navin', 'gohite', '9A/573 Saket Nagar, Bhopal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
