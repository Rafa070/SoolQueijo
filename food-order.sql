-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27-Mar-2022 às 01:41
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


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
(21, 'Afonso Santos', 'afonso123', 'cf943a0d9eda852e2b4ae2589b39fcb0'),
(24, 'Rafael Ribeiro', 'rafael123', '496cfe52debb9a3c40847aaf72b7e179'),
(25, 'Carla Gomes', 'monik123', 'c8a263887e20d0a8a6e47e410bc14ee9');

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
(16, 'Pizza', 'Food_Category_499.jpg', 'Sim', 'Sim'),
(17, 'Burger', 'Food_Category_349.jpg', 'Sim', 'Sim'),
(18, 'Coxinha', 'Food_Category_56.jpg', 'Sim', 'Sim');

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
(19, 'Coxinha', 'Coxinha de Frango', '6.00', 'Food-Name-33.jpg', 18, 'Sim', 'Sim'),
(20, 'Pizza', 'Pizza de Queijo', '41.00', 'Food-Name-7808.jpg', 0, 'Sim', 'Sim'),
(23, 'Hambúrguer', 'X-tudo caseiro com carne de bovina, alface, tomate, queijo, bacon e molho da casa.', '14.00', 'Food-Name-1795.jpg', 16, 'Sim', 'Sim'),
(24, 'Pizza', 'Pizza de azeitona', '39.00', 'Food-Name-5347.jpg', 16, 'Sim', 'Sim'),
(25, 'Hambúrguer', 'Simples da casa', '19.00', 'Food-Name-641.jpg', 0, 'Sim', 'Sim'),
(26, 'Coxinha', 'Coxinha de camarão', '25.00', 'Food-Name-6233.jpg', 16, 'Sim', 'Sim');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de tabela `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `tbl_food`
--
ALTER TABLE `tbl_food`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;
