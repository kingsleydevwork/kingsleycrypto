-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2025 at 09:17 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `withdrawal`
--


CREATE TABLE `logins` (
  `id` int(11) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
)

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
