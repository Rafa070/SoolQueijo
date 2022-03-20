-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Mar-2022 às 13:57
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `food-order`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `full_name`, `username`, `password`) VALUES
(13, 'BrunoGomes', 'bruno123', 'e10adc3949ba59abbe56e057f20f883e'),
(17, 'MonikGomes', 'nik', 'c8a263887e20d0a8a6e47e410bc14ee9'),
(18, 'RafaelRibeiro', 'rafael', '496cfe52debb9a3c40847aaf72b7e179'),
(19, 'AfonsoSantos', 'afonso123', 'cf943a0d9eda852e2b4ae2589b39fcb0');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `featured` varchar(10) NOT NULL,
  `active` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `title`, `image_name`, `featured`, `active`) VALUES
(4, 'Pizza', 'Food_Category_790.jpg', 'Yes', 'Yes'),
(5, 'Burger', 'Food_Category_344.jpg', 'Yes', 'Yes'),
(6, 'Coxinha', 'Food_Category_77.jpg', 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_food`
--

CREATE TABLE `tbl_food` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `featured` varchar(10) NOT NULL,
  `active` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tbl_food`
--

INSERT INTO `tbl_food` (`id`, `title`, `description`, `price`, `image_name`, `category_id`, `featured`, `active`) VALUES
(3, 'Dumplings Specials', 'Chicken Dumpling with herbs from Mountains', '5.00', 'Food-Name-3649.jpg', 6, 'Yes', 'Yes'),
(4, 'Best Burger', 'Burger with Ham, Pineapple and lots of Cheese.', '4.00', 'Food-Name-6340.jpg', 5, 'Yes', 'Yes'),
(5, 'Smoky BBQ Pizza', 'Best Firewood Pizza in Town.', '6.00', 'Food-Name-8298.jpg', 4, 'No', 'Yes'),
(6, 'Sadeko Momo', 'Best Spicy Momo for Winter', '6.00', 'Food-Name-7387.jpg', 6, 'Yes', 'Yes'),
(7, 'Mixed Pizza', 'Pizza with chicken, Ham, Buff, Mushroom and Vegetables', '10.00', 'Food-Name-7833.jpg', 4, 'Yes', 'Yes'),
(8, 'Sed ipsum cillum in', 'Sed aut officiis qui', '52.00', '', 5, 'No', 'No');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tbl_food`
--
ALTER TABLE `tbl_food`
  ADD PRIMARY KEY (`id`);



--
-- AUTO_INCREMENT de tabela `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `tbl_food`
--
ALTER TABLE `tbl_food`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
