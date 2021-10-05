-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2021 at 01:51 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pemwebupn`
--

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `link` varchar(250) NOT NULL,
  `img` varchar(250) NOT NULL,
  `title` varchar(250) NOT NULL,
  `lead` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`link`, `img`, `title`, `lead`) VALUES
('https://covid-f42d1.web.app', 'covid.jpeg', 'Covid Maping', 'Covid Maping built with ReactJs'),
('https://netflix-clone-5158a.web.app', 'netflix-clone_com.png', 'Netflix Clone', 'Netflix Clone built with ReactJs'),
('https://bujang-chat.web.app', 'tiga-bujang-mern.jpeg', 'Tiga Bujang MERN Chat', 'Tiga Bujang Chat built with MERN (MongoDB, ExpressJS, ReactJS, NodeJS)'),
('https://bujang-editor.web.app', 'editor.jpeg', '3Bujang Editor', '3Bujang Editor built with ReactJs');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
