-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09/10/2024 às 02:33
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bootstrap_projeto`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_equipe`
--

CREATE TABLE `tb_equipe` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `descricao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_equipe`
--

INSERT INTO `tb_equipe` (`id`, `nome`, `descricao`) VALUES
(1, 'Gabriel Ferraz', 'Programador / Desenvolvedor Web'),
(4, 'Ana Licia', 'Designer Gráfica'),
(5, 'Lucas Montano', 'Gerente de Projetos / Especialista em SEO'),
(6, 'Matheus Lima', 'Especialista em Marketing Digital e Gestão de Redes Sociais');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_sobre`
--

CREATE TABLE `tb_sobre` (
  `id` int(11) NOT NULL,
  `sobre` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_sobre`
--

INSERT INTO `tb_sobre` (`id`, `sobre`) VALUES
(4, ' <div class=\"col-md-4\">\r\n                  <h3><span class=\"glyphicon glyphicon-glass\"></span></h3>\r\n                  <h2>Diferencial 1: Soluções Personalizadas</h2>\r\n                  <p>Cada projeto que desenvolvemos é único, criado sob medida para atender às necessidades e objetivos específicos de nossos clientes. Nossa abordagem personalizada garante que cada detalhe do site ou campanha esteja alinhado com a identidade e os valores da sua marca.</p>\r\n              </div>\r\n\r\n              <div class=\"col-md-4\">\r\n                  <h3><span class=\"glyphicon glyphicon-star\"></span></h3>\r\n                  <h2>Diferencial 2: Inovação e Tecnologia Avançada</h2>\r\n                  <p>Utilizamos as tecnologias mais avançadas e atualizadas no desenvolvimento de sites e plataformas digitais. Isso nos permite entregar soluções rápidas, seguras e otimizadas para uma experiência de usuário eficiente e de alta performance.</p>\r\n              </div>\r\n\r\n              <div class=\"col-md-4\">\r\n                  <h3><span class=\"glyphicon glyphicon-heart\"></span></h3>\r\n                  <h2>Diferencial  3: Resultados Mensuráveis</h2>\r\n                  <p>Nossas estratégias de marketing digital são orientadas por dados, o que nos permite monitorar e ajustar cada campanha em tempo real. Com isso, garantimos que cada investimento feito em marketing traga retornos significativos e mensuráveis, impulsionando o crescimento do seu negócio.</p>\r\n              </div>');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tb_equipe`
--
ALTER TABLE `tb_equipe`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tb_sobre`
--
ALTER TABLE `tb_sobre`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_equipe`
--
ALTER TABLE `tb_equipe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tb_sobre`
--
ALTER TABLE `tb_sobre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
