-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2025 at 10:02 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kingsleycrypto`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `amin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `amin`) VALUES
(1, 'admin@admin', 'admin@admin'),
(1, 'admin@admin', 'admin@admin');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `hasspassword` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `deposit` int(11) NOT NULL,
  `interests` int(11) NOT NULL,
  `invested` int(11) NOT NULL,
  `referral` int(11) NOT NULL,
  `bal` varchar(255) NOT NULL,
  `withdrawal` int(11) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `user_link` varchar(255) NOT NULL,
  `ref_link` varchar(255) NOT NULL,
  `dates` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `email`, `password`, `hasspassword`, `name`, `firstname`, `lastname`, `country`, `mobile`, `deposit`, `interests`, `invested`, `referral`, `bal`, `withdrawal`, `city`, `state`, `address`, `zip`, `user_link`, `ref_link`, `dates`) VALUES
(1, 'spotwebdev.com@gmail.com', '50c2c77489e2112e9a973e1f3d44e9f8', 'firstclass', 'firstclass', 'SPOTWEB', 'COM', 'Nigeria', '48574839955', 304599, 100000044, 305599, 0, '1000000000', 0, 'Enugu state', 'Enugu', 'mtd gariki', '', 'SZTA6I', '', '0'),
(3, 'uchennagodswill539@gmail.com', 'b3cd915d758008bd19d0f2428fbb354a', 'mm', 'king', 'Mickey', 'Mouse', 'Nigeria', '48574839955', 300, 0, 0, 0, '', 0, '', '', '', '', '7WGL5Z', 'SZTA6I', '2024 10 03 13:10:37'),
(4, 'uchennagodswill539@gmail.com', '5d41402abc4b2a76b9719d911017c592', 'hello', 'king', 'Mickey', 'Mouse', 'Nigeria', '48574839955', 0, 0, 0, 0, '', 0, '', '', '', '', 'EK3U3H', 'SZTA6I', '03 Oct, 2024 01:10 PM'),
(5, 'humblemr706@gmail.com', 'adeb17afdb30f7280a61b82819c5f22a', 'khosy', 'khosy', 'Khosy', 'btc', 'Nigeria', '9118404977', 500, 0, 0, 0, '', 0, '', '', '', '', '4TLYO1', '', '06 Oct, 2024 01:14 AM'),
(6, 'blowesj771@gmail.com', '725a0d6407296180a5458985a5002d7b', '@blowes123', 'blowesj', 'james', 'blowes', 'United States', '2019283712', 0, 0, 0, 0, '', 0, 'alpine', 'utah', '23 ashton', '', '53GP2Q', '', '06 Nov, 2024 04:17 AM'),
(7, 'yasen.krasen.13+91398@mail.ru', '64e80c49a42a6d2c2c721410487db88c', 'Rx3@syu7k2N', 'Mguheidjwdhwfhwj jhiwhfbewjfnwqjfhew jbijfwfkwjdbjkewde fewjnfwqjbdwefhewofhewjbgf qwjfewhfewijbfewihgfewjknfewjkfje bjfewfjewjgbrejgbrehbg assetvest-shareholder.com', 'Mguheidjwdhwfhwj jhiwhfbewjfnwqjfhew jbijfwfkwjdbjkewde fewjnfwqjbdwefhewofhewjbgf qwjfewhfewijbfewihgfewjknfewjkfje bjfewfjewjgbrejgbrehbg assetvest-shareholder.com', 'Mguheidjwdhwfhwj jhiwhfbewjfnwqjfhew jbijfwfkwjdbjkewde fewjnfwqjbdwefhewofhewjbgf qwjfewhfewijbfewihgfewjknfewjkfje bjfewfjewjgbrejgbrehbg assetvest-shareholder.com', 'Trinidad and Tobago', '86875114435', 0, 0, 0, 0, '', 0, '', '', '', '', 'VG1UXQ', '', '27 Nov, 2024 06:36 PM'),
(8, 'all.links1001@gmail.com ', '1c18f25ff483148f4d6a648e27d689c9', '5gy9eUvRu%5Z', 'Josephtar', 'Josephtar', 'JosephtarWA', 'Liberia', '86685819665', 0, 0, 0, 0, '', 0, '', '', '', '', '0UGDSY', '', '17 Feb, 2025 10:35 AM'),
(9, 'sansoneacothley@gmail.com', 'bb3306a1fbee5d0ff2795bfd32b3b540', '4sd*sk2lF-g1X89bg4', 'TgXpert', 'TgXpert', 'TelegramExpert', 'Russia', '84825715661', 0, 0, 0, 0, '', 0, '', '', '', '', '6PIOB1', '', '17 Feb, 2025 11:32 PM'),
(10, 'alllinks.1001@gmail.com ', '376c24bfa45ea97b2e6ed1e0e4194046', 't1xD15y@aCuW', 'Williamsnofe', 'Williamsnofe', 'WilliamsnofeQF', 'Kuwait', '83682366853', 0, 0, 0, 0, '', 0, '', '', '', '', 'XDMQRN', '', '18 Feb, 2025 12:00 AM'),
(11, 'mjohnston911@att.net', '827053e5b491b094fb0f84a834df818d', 'khJe#r32s4N', 'Jeremyplorp', 'Jeremyplorp', 'JeremyplorpAC', 'Trinidad and Tobago', '81869128922', 0, 0, 0, 0, '', 0, '', '', '', '', 'QMKAWO', '', '22 Feb, 2025 02:37 AM'),
(12, 'read@prostpro.fun', '60a302ffbe3cbbe7a12ca53fa030f430', 'e!I3fwqZg29C', 'Traviszn', 'Traviszn', 'TravismcMA', 'Bulgaria', '87159336652', 0, 0, 0, 0, '', 0, '', '', '', '', 'K9FH4D', '', '11 Mar, 2025 03:38 PM'),
(13, 'Kk777114myguyguy@gmail.com', 'c24481167c6695923be1511247ed3c08', 'repented', 'repented', 'repented', 'godswill', 'Nigeria', '07080879957', 0, 0, 0, 0, '', 0, '', '', '', '', 'LU39MT', '', '25 Mar, 2025 11:57 PM'),
(14, 'Kk777114myguyguy@gmail.com', 'c24481167c6695923be1511247ed3c08', 'repented', 'repented', 'repented', 'godswill', 'Nigeria', '07080879957', 0, 0, 0, 0, '', 0, '', '', '', '', 'ZX92DQ', '', '26 Mar, 2025 12:02 AM'),
(15, 'Kk777114myguyguy@gmail.com', 'c24481167c6695923be1511247ed3c08', 'repented', 'repented', 'repented', 'godswill', 'Nigeria', '07080879957', 0, 0, 0, 0, '', 0, '', '', '', '', '0NJOI6', '', '26 Mar, 2025 12:03 AM'),
(16, 'Kk777114myguyguy@gmail.com', 'c24481167c6695923be1511247ed3c08', 'repented', 'repented', 'repented', 'godswill', 'Nigeria', '07080879957', 0, 0, 0, 0, '', 0, '', '', '', '', 'EE7TTK', '', '26 Mar, 2025 12:07 AM'),
(17, 'micheal@gmail.com', 'c24481167c6695923be1511247ed3c08', 'repented', 'repented', 'repented', 'repented', 'Nigeria', '45789', 0, 0, 0, 0, '', 0, '', '', '', '', '9LOVRE', '', '26 Mar, 2025 12:08 AM');

-- --------------------------------------------------------

--
-- Table structure for table `deposit`
--

CREATE TABLE `deposit` (
  `id` int(11) NOT NULL,
  `transactionId` varchar(255) NOT NULL,
  `user` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `payment_name` varchar(255) NOT NULL,
  `payment_imge` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `status` enum('continue','pending','declined','approved','completed') NOT NULL,
  `payment_proof` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `deposit`
--

INSERT INTO `deposit` (`id`, `transactionId`, `user`, `payment_id`, `payment_name`, `payment_imge`, `amount`, `status`, `payment_proof`, `date`, `time`) VALUES
(5, 'B4QoSuWH8F', 1, 2, 'Ethereum', 'https://assetvest-shareholder.com/assets/images/payment/2.png', '300', 'completed', 'fffffff', '2024-10-08', '01-10-54 am'),
(6, 'VlLDgtdexQ', 1, 5, 'Dogecoin', 'https://assetvest-shareholder.com/assets/images/payment/1.png', '250', 'completed', 'ggg', '2024-10-05', '01-10-51 am'),
(9, '7FAfrPRnpL', 3, 1, 'Bitcoin', 'https://assetvest-shareholder.com/assets/images/payment/4.png', '3000', 'completed', 'bc1qm7tc4e4e986nsjrzwk9v0vmd4mg6wyzquvx7dj', '2024-07-14', '14-10-12 pm'),
(10, 'AXK6FTVj9B', 6, 1, 'Bitcoin', 'https://assetvest-shareholder.com/assets/images/payment/4.png', '50', 'continue', '', '2024-11-06', '04:11:27'),
(11, 'dHcePzDpIJ', 17, 1, 'Bitcoin', 'http://localhost/kingsleycrypto/users/assets/images/payment/4.png', '10000', 'pending', 'bc1qm7tc4e4e986nsjrzwk9v0vmd4mg6wyzquvx7dj', '2025-03-26', '11-03-43 am'),
(12, 'uytasezM6w', 17, 1, 'Bitcoin', 'http://localhost/kingsleycrypto/users/assets/images/payment/4.png', '100000', 'pending', 'bc1qm7tc4e4e986nsjrzwk9v0vmd4mg6wyzquvx7dj', '2025-03-26', '12-03-10 pm');

-- --------------------------------------------------------

--
-- Table structure for table `interest`
--

CREATE TABLE `interest` (
  `id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `date` varchar(255) DEFAULT NULL,
  `time` varchar(255) NOT NULL,
  `transactionId` varchar(255) DEFAULT NULL,
  `details` varchar(255) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `Remaining_balance` varchar(255) DEFAULT NULL,
  `status` enum('completed','pending','declined','approved') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `interest`
--

INSERT INTO `interest` (`id`, `user`, `date`, `time`, `transactionId`, `details`, `amount`, `Remaining_balance`, `status`) VALUES
(1, 1, '2017-08-16', '22:10:04', 'pshReUMS9ibF', 'hello world', '20', '520', 'completed'),
(2, 1, '2017-09-18', '22:10:52', 'gGEbq8SwP3sb', 'hello world', '44', '100000044', 'completed');

-- --------------------------------------------------------

--
-- Table structure for table `investment`
--

CREATE TABLE `investment` (
  `id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `transactionId` varchar(255) NOT NULL,
  `plan` varchar(255) NOT NULL,
  `duration` varchar(255) DEFAULT NULL,
  `amount` varchar(255) NOT NULL,
  `return` int(11) NOT NULL,
  `day_run` int(11) NOT NULL,
  `amount_made` decimal(10,2) NOT NULL,
  `status` enum('pending','completed','running','declined') NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `investment`
--

INSERT INTO `investment` (`id`, `user`, `transactionId`, `plan`, `duration`, `amount`, `return`, `day_run`, `amount_made`, `status`, `date`, `time`) VALUES
(1, 1, '', '35000', NULL, '36000', 2, 1, 720.00, 'running', '', ''),
(2, 1, '', '50000', NULL, '50001', 4, 0, 0.00, 'pending', '', ''),
(3, 1, '', '50000', NULL, '50001', 4, 0, 0.00, 'pending', '', ''),
(4, 1, '', '34999', NULL, '35000', 2, 0, 0.00, 'pending', '', ''),
(5, 1, 'u45ff93kMVk8', 'REAL-ESTATE', NULL, '500', 25, 0, 0.00, 'pending', '2024-10-04', '22:10:49'),
(6, 1, 'PoQCtez2A9', 'LEVEL 1', NULL, '35000', 2, 0, 0.00, 'pending', '2024-10-05', '01:10:19'),
(7, 1, 'QMzy2qskSe', 'LEVEL 1', NULL, '36000', 2, 0, 0.00, 'pending', '2024-10-05', '01:10:13'),
(8, 1, 'enAgfWXQSIHy', 'REAL-ESTATE', NULL, '500', 25, 1, 125.00, 'running', '2024-10-05', '02:10:07'),
(9, 1, 'd2t1bBoeIvDr', 'GOLD/STACK', NULL, '304599', 19, 1, 57873.81, 'running', '2024-10-05', '02:10:26');

-- --------------------------------------------------------

--
-- Table structure for table `login_activity`
--

CREATE TABLE `login_activity` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_activity`
--

INSERT INTO `login_activity` (`id`, `name`, `password`, `date`) VALUES
(0, 'micheal', 'thebest', '2024-10-01 13:38:12'),
(0, 'micheal', 'thebest', '2024-10-01 13:40:32'),
(0, 'micheal', 'thebest', '2024-10-02 11:57:41'),
(0, 'spotwebdev.com@gmail.com', 'thebest', '2024-10-03 12:53:55'),
(0, 'micheal', 'thebest', '2024-10-03 12:54:47'),
(0, 'micheal', 'thebest', '2024-10-03 12:55:03'),
(0, 'firstclass', 'firstclass', '2024-10-03 12:56:58'),
(0, 'firstclass', 'firstclass', '2024-10-04 10:48:08'),
(0, 'firstclass', 'firstclass', '2024-10-04 22:22:24'),
(0, 'firstclass', 'firstclass', '2024-10-04 21:16:48'),
(0, 'firstclass', 'firstclass', '2024-10-05 01:24:44'),
(0, 'firstclass', 'firstclass', '2024-10-05 01:31:24'),
(0, 'firstclass', 'firstclass', '2024-10-05 01:49:30'),
(0, 'firstclass', 'firstclass', '2024-10-05 01:49:57'),
(0, 'king', 'hello', '2024-10-06 01:10:50'),
(0, 'khosy', 'khosy', '2024-10-06 01:14:16'),
(0, 'admin', 'admin', '2024-10-13 06:43:52'),
(0, 'admin', 'admin', '2024-10-13 06:44:25'),
(0, 'King', 'mm', '2024-10-14 14:43:05'),
(0, 'King', 'mm', '2024-10-14 14:44:19'),
(0, 'blowesj', '@blowes123', '2024-11-06 04:17:41'),
(0, 'Apple Inc. 2025. All rights reserved. Apple Inc. 2025. All rights reserved.\r\n 3740545 https://t.me/ grandbooksommer !', '', '2025-01-23 14:16:38'),
(0, 'TgXpert', '4sd*sk2lF-g1X89bg4', '2025-02-17 23:32:19'),
(0, 'Jeremyplorp', 'khJe#r32s4N', '2025-02-22 02:37:12'),
(0, 'Traviszn', 'e!I3fwqZg29C', '2025-03-11 15:38:21'),
(0, 'maatra33', 'Lui0ZX2WTE2GDwx', '2025-03-22 05:03:34'),
(0, 'maatra33', 'Lui0ZX2WTE2GDwx', '2025-03-22 20:46:28'),
(0, 'repented', 'repented', '2025-03-26 11:17:03'),
(0, 'repented', 'repented', '2025-03-26 11:17:09'),
(0, 'repented', 'repented', '2025-03-26 11:18:19'),
(0, 'repented', 'repented', '2025-03-26 11:18:36'),
(0, 'repented', 'repented', '2025-03-26 11:20:31'),
(0, 'yhn', 'hn', '2025-03-26 11:21:58'),
(0, 'yy', '99', '2025-03-26 11:22:37'),
(0, 'j', 'hh', '2025-03-26 11:22:58'),
(0, '8uu', 'jjj', '2025-03-26 11:23:48'),
(0, 'repented', 'repented', '2025-03-26 11:28:19');

-- --------------------------------------------------------

--
-- Table structure for table `migration_form`
--

CREATE TABLE `migration_form` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `ssn` varchar(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `phone_type` varchar(20) NOT NULL,
  `employment_status` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `employer_name` varchar(255) DEFAULT NULL,
  `employer_address` varchar(255) DEFAULT NULL,
  `annual_income` varchar(255) DEFAULT NULL,
  `sources_of_income` varchar(255) DEFAULT NULL,
  `security_question` varchar(255) DEFAULT NULL,
  `security_answer` varchar(255) DEFAULT NULL,
  `pin` varchar(20) DEFAULT NULL,
  `mfa` varchar(20) DEFAULT NULL,
  `agreements_disclosures` tinyint(1) DEFAULT NULL,
  `review_confirmation` tinyint(1) DEFAULT NULL,
  `next_of_kin_full_name` varchar(255) DEFAULT NULL,
  `next_of_kin_phone` varchar(255) DEFAULT NULL,
  `next_of_kin_address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`id`, `user_id`, `subject`, `message`, `status`, `date`) VALUES
(2, 1, 'being care of you self is the best', 'sdfghjkl;', 'open', '10:02:24 10-05'),
(3, 1, 'am a choosen', 'hello', 'open', '10:02:24 10-05'),
(4, 1, 'i made payment but it is not verified yet', 'nnnnnnnnnnnnnnnnnnnnnnnn', 'open', '10:05:24 10-02');

-- --------------------------------------------------------

--
-- Table structure for table `transations`
--

CREATE TABLE `transations` (
  `id` int(11) NOT NULL,
  `transactionId` varchar(255) NOT NULL,
  `user` int(11) NOT NULL,
  `Amount` varchar(255) NOT NULL,
  `wallet` enum('Interest Wallet','Deposit Wallet','Refferal Wallet','Invested Wallet') NOT NULL,
  `type` enum('interest','deposit','withdrawal','investment') NOT NULL,
  `postbalance` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transations`
--

INSERT INTO `transations` (`id`, `transactionId`, `user`, `Amount`, `wallet`, `type`, `postbalance`, `date`, `time`) VALUES
(1, 'I3HJBglSZQ', 1, '200', '', 'withdrawal', '1000000000', 'Oct-Fri-2024', '10:10 AM'),
(2, 'LvwqSlXBWd', 0, '300', 'Deposit Wallet', 'deposit', '', '1970-01-01', '12:10:56'),
(3, 'u45ff93kMVk8', 1, '500', 'Invested Wallet', 'interest', '500', '2024-10-04', '22:10:49'),
(4, 'pshReUMS9ibF', 1, '20', 'Deposit Wallet', 'interest', '520', '2017-08-16', '22:10:04'),
(5, 'gGEbq8SwP3sb', 1, '44', 'Deposit Wallet', 'interest', '100000044', '2017-09-18', '22:10:52'),
(6, 'Rp0xeoG9lY', 1, '10', '', 'withdrawal', '520', 'Oct-Fri-2024', '10:09 PM'),
(7, 'hC2UOzuHyx', 1, '100', '', 'withdrawal', '520', 'Oct-Sat-2024', '10:01 AM'),
(8, 'lbjRmMvxCK', 1, '3000', 'Deposit Wallet', 'deposit', '520', '2024-10-05', '01:10:25'),
(9, 'B4QoSuWH8F', 1, '300', 'Deposit Wallet', 'deposit', '520', '2024-10-05', '01:10:33'),
(10, 'VlLDgtdexQ', 1, '250', 'Deposit Wallet', 'deposit', '520', '2024-10-05', '01:10:32'),
(11, '3MY9Z2kt1T', 1, '303', 'Deposit Wallet', 'deposit', '520', '2024-10-05', '01:10:19'),
(12, 'gUwQ7j5boW', 1, '200', '', 'withdrawal', '1170', 'Oct-Sat-2024', '10:01 AM'),
(13, 'J6DlFPq1xs', 1, '3996', '', 'withdrawal', '1170', 'Oct-Sat-2024', '10:02 AM'),
(14, 'RzJuivHg02', 1, '100', '', 'withdrawal', '1170', 'Oct-Sat-2024', '10:02 AM'),
(15, 'sBATWRu596', 1, '457', '', 'withdrawal', '1170', 'Oct-Sat-2024', '10:02 AM'),
(16, '3ksHtWIhgX', 1, '500', '', 'withdrawal', '1170', 'Oct-Sat-2024', '10:02 AM'),
(17, 'enAgfWXQSIHy', 1, '500', 'Invested Wallet', 'interest', '500', '2024-10-05', '02:10:07'),
(18, 'd2t1bBoeIvDr', 1, '304599', 'Invested Wallet', 'interest', '304599', '2024-10-05', '02:10:26'),
(19, 'SNFIo1lKXQ', 5, '500', 'Deposit Wallet', 'deposit', '0', '2024-10-06', '01:10:45'),
(20, '7FAfrPRnpL', 3, '300', 'Deposit Wallet', 'deposit', '0', '2024-10-14', '14:10:49'),
(21, 'AXK6FTVj9B', 6, '50', 'Deposit Wallet', 'deposit', '0', '2024-11-06', '04:11:27'),
(22, 'dHcePzDpIJ', 17, '10000', 'Deposit Wallet', 'deposit', '0', '2025-03-26', '11:03:13'),
(23, 'jIPv2FsgUJ', 17, '100', '', 'withdrawal', '0', 'Mar-Wed-2025', '03:11 AM'),
(24, 'uytasezM6w', 17, '100000', 'Deposit Wallet', 'deposit', '0', '2025-03-26', '11:03:49');

-- --------------------------------------------------------

--
-- Table structure for table `withdrawal`
--

CREATE TABLE `withdrawal` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `transactionId` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `paymentmethod` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `status` enum('pending','approved','declined','') NOT NULL,
  `charge` int(11) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `withdrawal`
--

INSERT INTO `withdrawal` (`id`, `user`, `transactionId`, `amount`, `paymentmethod`, `date`, `status`, `charge`, `time`) VALUES
(1, '1', '3ksHtWIhgX', '500', 'Bitcoin', 'Oct-Sat-2024', 'declined', 0, '10:02 AM'),
(2, '17', 'jIPv2FsgUJ', '100', 'Bitcoin', 'Mar-Wed-2025', 'pending', 0, '03:11 AM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deposit`
--
ALTER TABLE `deposit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interest`
--
ALTER TABLE `interest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `investment`
--
ALTER TABLE `investment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transations`
--
ALTER TABLE `transations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `withdrawal`
--
ALTER TABLE `withdrawal`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `deposit`
--
ALTER TABLE `deposit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `interest`
--
ALTER TABLE `interest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `investment`
--
ALTER TABLE `investment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `transations`
--
ALTER TABLE `transations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `withdrawal`
--
ALTER TABLE `withdrawal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
