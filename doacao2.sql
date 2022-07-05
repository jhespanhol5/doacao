-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05-Jul-2022 às 03:31
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `doacao2`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `prod_id` int(11) NOT NULL,
  `produto` varchar(50) NOT NULL,
  `quantidade` int(5) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `id_usuidoa` int(11) NOT NULL,
  `tp_doa` varchar(1) NOT NULL,
  `dt_idoa` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(1) NOT NULL,
  `id_benef` int(11) NOT NULL,
  `entrega` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`prod_id`, `produto`, `quantidade`, `categoria`, `id_usuidoa`, `tp_doa`, `dt_idoa`, `status`, `id_benef`, `entrega`) VALUES
(1, 'arroz', 1, 'alimentos', 60, 'b', '2022-07-04 00:22:49', 1, 72, 0),
(2, 'arroz', 1, 'alimentos', 60, 'b', '2022-07-02 11:26:02', 1, 72, 0),
(3, 'arroz', 2, 'alimentos', 60, 'e', '2022-07-02 22:00:51', 1, 72, 0),
(4, 'feijao', 2, 'alimentos', 60, 'b', '2022-06-19 14:42:58', 1, 0, 0),
(5, 'macarrao', 1, 'alimentos', 60, 'b', '2022-07-01 00:55:16', 1, 72, 0),
(6, 'feijao', 1, 'alimentos', 60, 'b', '2022-06-20 01:21:28', 1, 61, 0),
(7, 'macarrao', 1, 'alimentos', 64, 'b', '2022-06-20 01:23:28', 1, 62, 0),
(8, 'farinha de trigo', 1, 'alimentos', 65, 'b', '2022-06-26 18:03:54', 1, 73, 0),
(9, 'macarrao', 1, 'alimentos', 67, 'b', '2022-06-22 00:07:13', 1, 68, 0),
(10, 'racao', 1, 'alimentos', 69, 'b', '2022-06-22 00:35:55', 1, 70, 0),
(11, 'sardinha', 1, 'a', 71, 'b', '2022-06-22 02:03:44', 1, 72, 0),
(12, 'cafe', 1, 'a', 74, 'b', '2022-07-02 21:54:59', 1, 73, 1),
(13, 'farinha de trigo', 1, 'a', 74, 'b', '2022-06-26 18:10:18', 1, 73, 0),
(14, 'oleo de soja', 1, 'a', 76, 'b', '2022-06-27 00:45:03', 1, 77, 0),
(15, 'fuba', 1, 'a', 75, 'b', '2022-07-02 16:19:56', 1, 62, 1),
(16, 'pao de forma', 1, 'a', 75, 'b', '2022-07-02 16:24:14', 1, 62, 1),
(17, 'açucar', 1, 'a', 75, 'b', '2022-07-02 16:28:29', 1, 72, 1),
(18, 'açucar', 1, 'a', 75, 'b', '2022-07-02 16:28:48', 1, 72, 1),
(19, 'arroz integral', 1, 'a', 75, 'b', '2022-07-03 02:16:10', 1, 72, 1),
(20, 'arroz', 1, 'a', 75, 'b', '2022-07-03 23:46:40', 1, 72, 0),
(21, 'arroz', 1, 'a', 75, 'b', '2022-07-03 23:34:34', 1, 72, 0),
(22, 'feijao', 1, 'a', 75, 'b', '2022-07-04 00:16:02', 1, 72, 0),
(23, 'leite', 1, 'a', 82, 'b', '2022-07-04 00:34:09', 1, 83, 0),
(24, 'leite integral', 1, 'a', 82, 'e', '2022-07-04 00:31:44', 0, 0, 0),
(25, 'leite', 1, 'a', 82, 'b', '2022-07-04 01:09:59', 0, 0, 0),
(26, 'leite', 1, 'a', 89, 'b', '2022-07-04 02:14:21', 0, 0, 0),
(27, 'fuba', 1, 'a', 89, 'e', '2022-07-04 02:14:53', 0, 0, 0),
(28, 'macarrao', 1, 'a', 91, 'b', '2022-07-04 02:32:21', 1, 92, 0),
(29, 'arroz', 1, 'a', 91, 'e', '2022-07-04 02:35:13', 1, 91, 0),
(30, 'fuba', 1, 'a', 93, 'b', '2022-07-04 21:51:01', 0, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tabprodsolic`
--

CREATE TABLE `tabprodsolic` (
  `prods_id` int(11) NOT NULL,
  `prodsolic` varchar(50) NOT NULL,
  `qde` int(5) NOT NULL,
  `dt_registro` datetime NOT NULL DEFAULT current_timestamp(),
  `ag_benef` int(1) NOT NULL,
  `us_id` int(11) NOT NULL,
  `nomeb` varchar(50) NOT NULL,
  `foneb` varchar(50) NOT NULL,
  `ct` varchar(1) NOT NULL,
  `rec` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tabprodsolic`
--

INSERT INTO `tabprodsolic` (`prods_id`, `prodsolic`, `qde`, `dt_registro`, `ag_benef`, `us_id`, `nomeb`, `foneb`, `ct`, `rec`) VALUES
(1, 'arroz', 1, '2022-07-02 09:30:41', 1, 72, 'joao', '111', 'S', 'ok'),
(2, 'feijao', 1, '2022-07-02 13:05:40', 1, 72, 'maria', '2222', 's', 's'),
(3, 'cafe', 1, '2022-07-02 13:37:09', 1, 72, 'luis', '3333', 'S', 'ok'),
(4, 'arroz', 1, '2022-07-02 13:37:23', 1, 72, 'paulo', '5555', 'S', ''),
(5, 'açucar', 1, '2022-07-02 19:01:15', 1, 72, 'joana', '9999', 'N', ''),
(6, 'fuba', 1, '2022-07-03 12:38:56', 1, 72, 'jose', '1111', '', ''),
(7, 'fuba', 1, '2022-07-03 14:24:27', 1, 72, 'jose2', '2222', 's', 'ok'),
(8, 'macarrao', 1, '2022-07-03 21:35:05', 1, 83, 'b23', '11111', '', ''),
(9, 'macarrao', 1, '2022-07-03 21:35:26', 1, 83, 'b23', '11111', '', ''),
(10, 'arroz', 1, '2022-07-03 23:33:08', 1, 92, 'jose40', '1144444444', 's', 'ok');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `usuario_id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `tel_fixo` varchar(20) NOT NULL,
  `tel_cel` varchar(20) NOT NULL,
  `email` varchar(60) NOT NULL,
  `usuario` varchar(200) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `data_cadastro` datetime NOT NULL,
  `tp_usu` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`usuario_id`, `nome`, `endereco`, `numero`, `bairro`, `tel_fixo`, `tel_cel`, `email`, `usuario`, `senha`, `data_cadastro`, `tp_usu`) VALUES
(18, 'jose1', 'rua tal', '100', 'centro', '444994949', '40404040', 'a@a.com.br', 'jose', 'e10adc3949ba59abbe56e057f20f883e', '2021-11-21 07:12:35', ''),
(19, 'luana', 'rua tal', '200', 'centro', '03388383', '204944484', 'luana@luana.com.br', 'luana', 'e10adc3949ba59abbe56e057f20f883e', '0000-00-00 00:00:00', ''),
(20, 'joelma', 'rua tal', '400', 'centro', '494883300', '38882828', 'email@email.com.br', 'joelma', 'e10adc3949ba59abbe56e057f20f883e', '2021-11-21 10:39:30', ''),
(21, 'augusto', 'rua 1', '100', 'centro', '399939393', '9393939393', 'a@a.com.br', 'augusto1', 'e10adc3949ba59abbe56e057f20f883e', '2021-11-21 17:50:51', ''),
(22, 'EUSTAQUIO', 'rua 2', '200', 'centro', '48848488', '334-444-', 'eustaquio@email.com.br', 'eustaquio', 'e10adc3949ba59abbe56e057f20f883e', '2021-11-21 20:54:09', ''),
(23, 'filomena', 'rua 400', '400', 'centro', '484884', '494949', 'filomena@filomena.com.br', 'filomena', 'e10adc3949ba59abbe56e057f20f883e', '2021-11-21 21:40:17', ''),
(24, 'james', 'rua 1', '1', 'centro', '494949499', '4444444', 'james@a.com.br', 'james', 'e10adc3949ba59abbe56e057f20f883e', '2021-11-21 21:45:55', ''),
(25, 'otavio', 'rua 3', '3', 'centro', '393939', '44999', 'otavio@a.com.br', 'otavio', 'e10adc3949ba59abbe56e057f20f883e', '2021-11-21 22:08:27', ''),
(27, 'joelson', 'rua 5', '500', 'centro', '093838338', '4738300393', 'joelson@email.com.br', 'joelson', 'e10adc3949ba59abbe56e057f20f883e', '2021-11-22 18:38:26', ''),
(28, 'jurema', 'rua 7', '7', 'centro', '938833838', '20040', 'jurema@email.com.br', 'jurema', 'e10adc3949ba59abbe56e057f20f883e', '2021-11-22 18:44:30', ''),
(29, 'paul', 'rua a', '100', 'centro', '494949494', '283484848', 'paul@email.com.br', 'paul', 'e10adc3949ba59abbe56e057f20f883e', '2021-11-22 18:47:45', ''),
(30, 'chico', 'rua w', '200', 'centro', '94949449', '40404040', 'chico@email.com.br', 'chico', 'e10adc3949ba59abbe56e057f20f883e', '2021-11-22 20:56:48', ''),
(31, 'jose carlos', 'rua 8', '899', 'centro', '49484848', '393939', 'josecarlos@email.com', 'josecarlos', 'e10adc3949ba59abbe56e057f20f883e', '2021-11-22 22:09:42', ''),
(32, 'jose mario', 'rua 1', '200', 'centro', '8484848', '484848', 'josemario@email.com', 'josemario', 'e10adc3949ba59abbe56e057f20f883e', '2021-11-22 22:14:13', ''),
(33, 'jotajunior', 'rua 9', '900', 'centro', '44848', '383838', 'jotajunior@email.com', 'jotajunior', 'e10adc3949ba59abbe56e057f20f883e', '2021-11-22 22:20:49', ''),
(34, 'junior', 'rua 9', '9', 'centro', '494499', '3939393', 'junior@email.com', 'junior', 'e10adc3949ba59abbe56e057f20f883e', '2021-11-22 22:27:52', ''),
(35, 'joselia', 'rua tal', '100', 'centro', '44488', '484848', 'joselia@email.com.br', 'joselia', 'e10adc3949ba59abbe56e057f20f883e', '2021-11-22 22:33:17', ''),
(36, 'JURACI MATEUS', 'RUA BRASIL', '100', 'CENTRO', '11111111111', '2222222222', 'juraci@juraci.com.br', 'juraci', 'e10adc3949ba59abbe56e057f20f883e', '2021-11-28 15:05:46', ''),
(37, 'joseluis2', 'rua 2', '100', 'centro', '172525252', '17999999', 'joseluis2@joseluis2.com.br', 'joseluis2', 'e10adc3949ba59abbe56e057f20f883e', '2021-11-28 16:26:21', ''),
(38, 'claudete2', 'rua minas gerais', '382', 'centro', '1758285555', '99977979', 'claudete2@claudete2.com.br', 'claudete2', 'e10adc3949ba59abbe56e057f20f883e', '2021-11-28 16:43:13', ''),
(39, 'luiz', 'rua pongai', '500', 'centro', '8528222', '2552255', 'luiz@luiz.com.br', 'luiz', 'e10adc3949ba59abbe56e057f20f883e', '2021-11-28 16:47:21', ''),
(40, 'joao', 'rua 9', '10', 'jd sao benedito', '2252525', '82288', 'joao@joao.com.br', 'joao', 'e10adc3949ba59abbe56e057f20f883e', '2021-11-29 17:20:29', ''),
(41, 'josenildo', 'rua a', '100', 'centro', '1735125213', '179999-9999', 'josenilso@josenildo.com.br', 'josenildo', 'e10adc3949ba59abbe56e057f20f883e', '2021-11-29 21:45:50', ''),
(42, 'jair', 'rua brasil', '100', 'centro', '1735554578', '1799999999', 'jair@jair.com.br', 'jair', 'e10adc3949ba59abbe56e057f20f883e', '2021-11-29 23:14:18', ''),
(43, 'josuel', 'rua alagoas', '200', 'centro', '4789898989', '1111111111', 'josuel@josuel.com.br', 'josuel', 'e10adc3949ba59abbe56e057f20f883e', '2021-11-29 23:16:35', ''),
(44, 'rose', 'rua maranhao', '350', 'jd sao vicente', '2569999999', '2588888888', 'rose@rose.com.br', 'rose', 'e10adc3949ba59abbe56e057f20f883e', '2021-11-29 23:17:47', ''),
(45, 'manoel', 'rua souza', '200', 'jd america', '1111111111', '1111111111', 'manoel@manoel.com.br', 'manoel', 'e10adc3949ba59abbe56e057f20f883e', '2021-11-29 23:18:51', ''),
(46, 'jair', 'rua brasil', '100', 'centro', '11111111', '111111111', 'jair@jair.com.br', 'jair2', 'e10adc3949ba59abbe56e057f20f883e', '2021-11-29 23:42:26', ''),
(47, 'rose', 'rua brasil', '109', 'CENTRO', '222222222', '222222222', 'rose2@rose.com.br', 'rose2', 'e10adc3949ba59abbe56e057f20f883e', '2021-11-29 23:43:36', ''),
(48, 'jeremias', 'rua teste', '200', 'centro', '55555555', '55555555', 'jeremias@jeremias.com.br', 'jeremias', 'e10adc3949ba59abbe56e057f20f883e', '2021-11-29 23:47:55', ''),
(49, 'Romildo', 'rua 1', '100', 'centro', '1123458769', '1123456789', 'romildo@romildo.com.br', 'romildo', 'e10adc3949ba59abbe56e057f20f883e', '2021-12-10 23:26:54', ''),
(50, 'roselia', 'rua 200', '230', 'jd sao vicente', '1212341234', '2123456789', 'roselia@roselia.com.br', 'roselia', 'e10adc3949ba59abbe56e057f20f883e', '2021-12-10 23:28:16', ''),
(51, 'jl999', 'rua z', '999', 'acentro', '', '', '', 'jl999', '202cb962ac59075b964b07152d234b70', '2022-06-17 17:33:50', ''),
(52, 'jl888', '', '', '', '', '', 'jl888@email.com.br', 'jl888', '202cb962ac59075b964b07152d234b70', '2022-06-17 17:36:58', ''),
(53, 'zz', '', '', '', '', '111111111111111111', '', 'zz', '25ed1bcb423b0b7200f485fc5ff71c8e', '2022-06-17 22:04:41', ''),
(54, 'a', 'a', '1', 'a', '', '11111111111111111111', '', 'a', 'a', '2022-06-17 22:46:36', 'b'),
(55, 'b', 'b', '2', 'b', '', '22222222222222222222', 'b@b.com.br', 'b', '92eb5ffee6ae2fec3ad71c777531578f', '2022-06-17 22:47:41', 'D'),
(56, 'c', 'c', '3', 'c', '', '33333333333333333333', 'c@c.com.br', 'c', '4a8a08f09d37b73795649038408b5f33', '2022-06-17 22:50:50', 'D'),
(57, 'd', 'd', '4', 'd', '', '44444444444444444444', '', '4', 'a87ff679a2f3e71d9181a67b7542122c', '2022-06-17 22:52:08', 'B'),
(58, 'e', 'e', '5', 'e', '', '5555555555555555555', '', 'e', 'e1671797c52e15f763380b45e841ec32', '2022-06-17 22:52:57', 'B'),
(59, 'j', 'j', '', 'j', '', '101010101010', '', 'j', '363b122c528f54df4a0446b6bab05515', '2022-06-18 00:49:01', 'b'),
(60, 'doador', '', '', '', '', '99999999999999999999', '', 'doador', 'd812980ba8a4404f02a17661df34312c', '2022-06-18 09:14:41', 'd'),
(61, 'benef', '', '', '', '', '', '', 'benef', '11d964102e05a1d50f17554a6ae2a635', '2022-06-18 10:21:55', 'b'),
(62, 'benef2', '', '', '', '', '', '', 'benef2', '291b401eb62ac9a3077dd9f7c2a47051', '2022-06-19 11:56:56', 'b'),
(63, 'aa', '', '', '', '', '', '', 'aa', '4124bc0a9335c27f086f24ba207a4912', '2022-06-19 16:41:20', 'b'),
(64, 'doador2', '', '', '', '', '', '', 'doador2', 'ae9ae7237db69b242c0b569e959283fb', '2022-06-19 22:22:24', 'd'),
(65, 'doador4', '', '', '', '', '', '', 'doador4', '1a1a1239d18f915c31744878b033aa76', '2022-06-21 20:57:20', 'd'),
(66, 'benef4', '', '', '', '', '', '', 'benef4', '70e64acfecff6a04427586735e197411', '2022-06-21 20:59:30', 'b'),
(67, 'doador5', '', '', '', '', '', '', 'doador5', '21ceaf18ef177589ccd4c820298d4986', '2022-06-21 21:05:16', 'd'),
(68, 'beneficiario5', '', '', '', '', '', '', 'beneficiario5', '97fee36cbfc295d699659e04f1e977cd', '2022-06-21 21:06:42', 'b'),
(69, 'doador10', '', '', '', '', '', '', 'doador10', '7015b2d7ebfd30013baaa4bbc24e51b2', '2022-06-21 21:29:49', 'd'),
(70, 'beneficiario10', '', '', '', '', '', '', 'beneficiario10', '202cb962ac59075b964b07152d234b70', '2022-06-21 21:33:37', 'b'),
(71, 'doador11', '', '', '', '', '', '', 'doador11', 'b3abd675f4e3bd8c4ab126c8e8727560', '2022-06-21 22:36:57', 'd'),
(72, 'benef11', '', '', '', '', '', '', 'benef11', '9e6b7f3613806b5211931138bfd39958', '2022-06-21 22:56:05', 'b'),
(73, 'b1', '', '', '', '', '', '', 'b1', 'edbab45572c72a5d9440b40bcc0500c0', '2022-06-26 09:46:19', 'b'),
(74, 'd1', '', '', '', '987654321', '898989898989', '', 'd1', '9948c645c094247794f4c7acdbeb2bb6', '2022-06-26 09:46:49', 'd'),
(75, 'd2', '', '', '', '22222222222222222222', '22222222222222222222', '', 'd2', 'b25b0651e4b6e887e5194135d3692631', '2022-06-26 12:38:24', 'd'),
(76, 'd3', '', '', '', '', '', '', 'd3', 'e53125275854402400f74fd6ab3f7659', '2022-06-26 21:26:07', 'd'),
(77, 'b3', '', '', '', '', '', '', 'b3', '7a6f150b83091ce20c89368641f9a137', '2022-06-26 21:26:40', 'b'),
(78, 'doador20', '', '', '', '', '', '', 'doador20', '1405493770838576e713b164de7d2520', '2022-06-30 21:05:09', 'b'),
(79, 'd9', '', '', '', '', '', '', 'd9', '87de66479aea0306221cb868869748ec', '2022-07-03 00:18:33', 'd'),
(80, 'b9', '', '', '', '', '', '', 'b9', '37cc8552b35560a7b91cd1f47df89cae', '2022-07-03 00:20:12', 'b'),
(81, 'd22', '', '', '', '', '', '', 'd22', 'd8a37471e5321ec0b7725706f234ee58', '2022-07-03 11:44:15', 'd'),
(82, 'd23', '', '', '', '', '', '', 'd23', '44634e6a8140e7640e9088fb97bdac50', '2022-07-03 21:29:51', 'd'),
(83, 'b23', '', '', '', '', '', '', 'b23', '212ff702ad6dbc299cfd0a3273661d56', '2022-07-03 21:32:52', 'b'),
(84, 'd24', '', '', '', '', '', '', 'd24', 'd61ea975e655355497c4ae44544565d1', '2022-07-03 21:37:30', 'b'),
(85, 'beneficiario21', '', '', '', '', '', '', 'beneficiaio21', 'bc27d11b516a9d5ff63e62958aa583ee', '2022-07-03 22:07:48', 'b'),
(86, 'usuario1', '', '', '', '', '', '', 'usuario1', '1c3eecbd015380910562e74a0a9092ac', '2022-07-03 22:17:53', 'b'),
(87, 'te', '', '', '', '', '', '', 'tete', '698dc19d489c4e4db73e28a713eab07b', '2022-07-03 22:38:08', 'b'),
(88, 'testet', '', '', '', '', '', 'teste', 'teswte', '698dc19d489c4e4db73e28a713eab07b', '2022-07-03 22:52:01', 'b'),
(89, 'jose', 'rua brasil', '100', 'centro', '1111111111111', '11222222222', 'jose@jose.com.br', 'jose40', '64abf3e3ea46191ed421901f97298307', '2022-07-03 23:13:42', 'd'),
(90, 'joao30', 'rua do centro', '200', 'centro', '11222222222', '11333333333', 'joao30@joao30.com.br', 'jjoao30', '486e9bfdf345a330f40b5ae873f5ca05', '2022-07-03 23:15:46', 'b'),
(91, 'jose20', 'rua brasil', '100', 'centro', '1111111111111', '112222222', 'jose20@jose20.com.br', 'jose20', 'c4ddf4843fb97d9a3b148c4b5446de76', '2022-07-03 23:29:54', 'd'),
(92, 'joao40', 'rua centro', '200', 'centro', '1133333333', '114444444', 'joao40@joao40.com.br', 'joao40', '328067a6ad63f2b93bead57bf4d6c200', '2022-07-03 23:31:45', 'b'),
(93, 'jose luis 10', 'rua brasil', '100', 'centro', '11 11111 11111', '11 22222 2222', 'joseluis10@joseluis10.com.br', 'joseluis10', '5c17f0541bcbaf2ae784c253efd635ab', '2022-07-04 18:50:17', 'd'),
(94, 'jose', 'rua', 'brasil', '100', '', '', '', 'jose100', '6139c3e8932825ea938a3d50a4e08ec3', '2022-07-04 19:11:00', 'b'),
(95, 'testando', '', '', '', '', '', '', 'testando', 'f899139df5e1059396431415e770c6dd', '2022-07-04 19:12:26', 'd');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`prod_id`);

--
-- Índices para tabela `tabprodsolic`
--
ALTER TABLE `tabprodsolic`
  ADD PRIMARY KEY (`prods_id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuario_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de tabela `tabprodsolic`
--
ALTER TABLE `tabprodsolic`
  MODIFY `prods_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
