-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Mar-2022 às 20:55
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
(19, 'AfonsoSantos', 'afonso123', 'cf943a0d9eda852e2b4ae2589b39fcb0'),
(21, 'helber IFRN', 'halber', '21232f297a57a5a743894a0e4a801fc3');

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
(15, 'pizza', 'Food_Category_471.jpg', 'Yes', 'Yes'),
(16, 'Coxinha', 'Food_Category_653.jpg', 'Yes', 'Yes'),
(18, 'Burger', 'Food_Category_333.jpg', 'Yes', 'Yes');

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
(16, 'Coxinha', 'Coxinha da frango', '9.00', 'Food-Name-3878.jpg', 16, 'Sim', 'Sim'),
(17, 'Coxinha', 'Coxinha de frango com catupiry', '14.00', 'Food-Name-6379.jpg', 16, 'Sim', 'Sim'),
(18, 'Pizza', 'Pizza SoolQueijo', '39.00', 'Food-Name-4760.jpg', 15, 'Sim', 'Sim'),
(19, 'Pizza', 'Pizza QueijoSool', '59.00', 'Food-Name-1665.jpg', 15, 'Sim', 'Sim'),
(20, 'Burger', 'Hambúrguer caseiro', '45.00', 'Food-Name-3841.jpg', 18, 'Sim', 'Sim'),
(22, 'Burger', 'Hambúrguer podrão', '7.00', 'Food-Name-1787.jpg', 15, 'Sim', 'Sim');

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
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de tabela `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `tbl_food`
--
ALTER TABLE `tbl_food`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
