-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25-Out-2026 às 15:19
-- Versão do servidor: 10.4.32-MariaDB
-- versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `mucuanza`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ip_geolocation`
--

CREATE TABLE `ip_geolocation` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page` varchar(255) DEFAULT NULL,
  `query_ip` varchar(45) NOT NULL,
  `status` varchar(20) NOT NULL,
  `country` varchar(100) DEFAULT NULL,
  `country_code` char(2) DEFAULT NULL,
  `region` varchar(10) DEFAULT NULL,
  `region_name` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `zip` varchar(20) DEFAULT NULL,
  `latitude` decimal(10,7) DEFAULT NULL,
  `longitude` decimal(10,7) DEFAULT NULL,
  `timezone` varchar(100) DEFAULT NULL,
  `isp` varchar(255) DEFAULT NULL,
  `org` varchar(255) DEFAULT NULL,
  `autonomous_system` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) NOT NULL,
  `focus` int(11) NOT NULL DEFAULT 0,
  `trading` int(11) NOT NULL DEFAULT 0,
  `view` enum('private','public') NOT NULL DEFAULT 'public',
  `author` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `posts`
--

INSERT INTO `posts` (`id`, `focus`, `trading`, `view`, `author`, `title`, `description`, `image`, `slug`, `content`, `created_at`, `updated_at`) VALUES
(24, 0, 0, 'public', 'Imprensa Mucuanza', 'Mucuanza Integra Reunião de Balanço Semestral de Produção de Diamantes no Dundo', 'Encontro promovido pela ENDIAMA E.P. analisou o desempenho operacional e produtivo do primeiro semestre de 2021.', 'news/img/mucuanza-integra-reuniao-de-balanco-semestral-de-producao-de-diamantes-no-dundo.JPG', 'mucuanza-integra-reuniao-de-balanco-semestral-de-producao-de-diamantes-no-dundo', '<p class=\"text-justify\">A Direção da Sociedade Mineira Mucuanza, Lda. integrou a comitiva de gestores seniores que participou, entre os dias 10 e 11 de Agosto de 2021, na Reunião de Balanço Semestral de Produção de Diamantes, realizada na Cidade do Dundo, província da Lunda-Norte.</p>\n\n            <p class=\"text-justify\">O encontro de dois dias, organizado pelo Conselho de Administração da ENDIAMA E.P., serviu como o primeiro exercício oficial de avaliação e prestação de contas do ano de 2021 para o subsetor diamantífero nacional.</p>\n\n            <h3>Alinhamento Estratégico</h3>\n\n            <p class=\"text-justify\">A sessão de trabalho reuniu os principais decisores da concessionária nacional e os líderes das frentes operacionais do país. Além da Sociedade Mineira Mucuanza, Lda., estiveram presentes os gestores das sociedades mineiras do Lunhinga, Somiluana, Calonda, Lulo, Furi, Luachimo, Luminas, Uari-Cambange, Cuango, Chitotolo, Catoca, Kaixepa e ENDIAMA MINING.</p>\n\n            <p>Fonte primária: <a href=\"https://endiamaimprensa.com/dundo-acolhe-reuniao-de-balanco-de-producao-de-diamantes/\" target=\"_blank\" class=\"mz-news-a\">Endiama: Dundo acolhe reunião de balanço de produção de diamantes <i class=\"bi bi-box-arrow-up-right text-small\"></i></a></p>', '2021-08-12 09:00:00', '2026-08-17 16:36:20'),
(25, 0, 0, 'public', 'Imprensa Mucuanza', 'Produção da Sociedade Mineira Mucuanza integra leilão da SODIAM que arrecada USD 21,7 milhões', 'Diamantes brutos produzidos pela Sociedade Mineira Mucuanza integraram o 17.º leilão organizado pela SODIAM, que arrecadou cerca de USD 21,7 milhões.', 'news/img/producao-da-mucuanza-integra-leilao-da-sodiam-que-arrecada-usd-21,7-milhoes.jpeg', 'producao-da-mucuanza-integra-leilao-da-sodiam-que-arrecada-usd-21-7-milhoes', '<p class=\"text-justify\">A produção da Sociedade Mineira Mucuanza, Lda. integrou o conjunto de diamantes brutos disponibilizados no 17.º leilão organizado pela <a href=\"https://sodiam.co.ao/publicacoes/\" class=\"mz-news-a\" target=\"_blank\">Empresa Nacional de Comercialização de Diamantes de Angola (SODIAM, E.P.)</a>, encerrado na sexta-feira, 26 de Junho de 2026, em Luanda.</p>\r\n\r\n            <p class=\"text-justify\">No certame foram licitadas <b>35 pedras especiais de diamantes brutos</b>, produzidas pelas sociedades mineiras do Luele, Catoca, Mussende, Lulo, Calonda, Cuilo Kwenda, Kaixepa, Cuango, Somiluana, Mucuanza, além de um lote Run-of-Mine.</p>\r\n\r\n            <p class=\"text-justify\">O leilão resultou na venda de <b>6.586,89 quilates</b>, gerando um valor líquido total de cerca de <b>USD 21,7 milhões</b>, desempenho que superou em <b>23,46%</b> o valor inicialmente esperado.</p>\r\n\r\n            <p class=\"text-justify\">As sessões de avaliação decorreram de 22 a 25 de Junho, nas instalações da SODIAM, em Luanda, enquanto as licitações foram submetidas electronicamente até às 10h00 do dia 26 de Junho. O processo contou com <b>27 empresas</b>, das 34 convidadas, representando os principais centros mundiais de comercialização de diamantes.</p>\r\n\r\n            <p class=\"text-justify\">Segundo o Presidente do Conselho de Administração da SODIAM, Eugénio Bravo da Rosa, o resultado foi globalmente positivo. O responsável destacou ainda a satisfação manifestada pelas sociedades mineiras com os preços obtidos e a confiança crescente no modelo de comercialização em leilão.</p>\r\n\r\n            <p class=\"text-justify\">A integração da produção da Mucuanza neste processo de comercialização evidencia a presença da produção da sociedade no mercado formal de comercialização de diamantes, através do modelo de leilão promovido pela SODIAM.</p>\r\n\r\n            <p>Fonte primária: <br>\r\n              <a href=\"https://sodiam.co.ao/wp-content/uploads/2026/06/COMUNICADO-DE-IMPRESA_26-06-2026-.pdf\" target=\"_blank\" class=\"mz-news-a\">SODIAM: Comunicado de imprensa 26 de junho 2026 <i class=\"bi bi-box-arrow-up-right text-small\"></i></a><br>\r\n              <a href=\"https://endiamaimprensa.com/sodiam-anuncia-leilao-online-de-pedras-especiais-em-luanda/\" target=\"_blank\" class=\"mz-news-a\">ENDIAMA: SODIAM anuncia leilão online de pedras especiais em Luanda <i class=\"bi bi-box-arrow-up-right text-small\"></i></a>\r\n            </p>', '2026-07-01 11:30:00', '2026-08-17 22:42:06'),
(26, 0, 0, 'public', 'Imprensa Mucuanza', 'Anomalia geológica aumenta teor de recuperação de diamantes na Mucuanza', 'A exploração de uma anomalia geológica contribuiu para que a Mucuanza registasse um teor médio de recuperação superior ao inicialmente previsto.', 'news/img/anomalia-geologica-aumenta-teor-de-recuperacao-de-diamantes-na-mucuanza.jpg', 'anomalia-geologica-aumenta-teor-de-recuperacao-de-diamantes-na-mucuanza', '<p class=\"text-justify\">A Sociedade Mineira Mucuanza, Lda. registou, em 2024, um teor médio de recuperação de <b>0,05 quilates por metro cúbico</b>, resultado 15% acima do valor planeado de 0,04 quilates por metro cúbico.</p>\r\n\r\n            <p class=\"text-justify\">Segundo o <a href=\"https://endiamaimprensa.com/wp-content/uploads/2026/05/RELATORIO-DE-GESTAO-2024_c.pdf\" class=\"mz-news-a\" target=\"_blank\">Relatório de Gestão 2024 da ENDIAMA</a>, o desempenho beneficiou da exploração de uma <b>anomalia geológica, denominada “marmita”</b>, que apresentou uma concentração de diamantes superior à verificada nas zonas normalmente exploradas.</p>\r\n\r\n            <p class=\"text-justify\">O relatório indica que este desempenho foi influenciado pela exploração da referida “marmita”, que apresentou uma concentração de diamantes superior à verificada nas zonas normalmente exploradas.</p>\r\n\r\n            <p class=\"text-justify\">No mesmo período, a Sociedade Mineira Mucuanza tratou <b>117.131 metros cúbicos de minério</b>, abaixo dos 276.472 metros cúbicos previstos, num desempenho condicionado por limitações operacionais registadas ao longo do ano.</p>\r\n\r\n            <p class=\"text-justify\">A ocorrência evidencia a influência das características geológicas do jazigo no desempenho da operação mineira, permitindo à Mucuanza alcançar um teor de recuperação acima do projectado no período em referência.</p>\r\n\r\n            <p>Fonte primária: <br>\r\n              <a href=\"https://endiamaimprensa.com/wp-content/uploads/2026/05/RELATORIO-DE-GESTAO-2024_c.pdf\" target=\"_blank\" class=\"mz-news-a\">ENDIAMA: Relatório de Gestão 2024 <i class=\"bi bi-box-arrow-up-right text-small\"></i></a>\r\n            </p>', '2026-05-19 08:15:11', '2026-08-18 12:48:40'),
(27, 0, 0, 'public', 'Imprensa Mucuanza', 'Mucuanza mantém-se entre os projectos diamantíferos em produção no Cuanza-Sul', 'A Sociedade Mineira Mucuanza integra o conjunto de projectos diamantíferos em produção identificados no Cuanza-Sul.', 'news/img/mucuanza-mantem-se-entre-os-projectos-diamantiferos-em-producao-no-cuanza-sul.webp', 'mucuanza-mantem-se-entre-os-projectos-diamantiferos-em-producao-no-cuanza-sul', '<p class=\"text-justify\">A <b>Sociedade Mineira Mucuanza, Lda.</b> mantém-se entre os projectos diamantíferos em produção na província do Cuanza-Sul, integrando a carteira de operações do subsector diamantífero nacional.</p>\r\n\r\n          <p class=\"text-justify\">O projecto está localizado na região que abrange <b>Cuanza-Sul e Malanje</b>, nos municípios de Mussende e Cangandala, e está associado a um depósito secundário do tipo aluvião.</p>\r\n\r\n          <p class=\"text-justify\">A Mucuanza integra o conjunto de projectos mineiros em actividade na região, num contexto em que o Cuanza-Sul tem vindo a reforçar o seu posicionamento no sector dos recursos minerais.</p>\r\n\r\n          <p class=\"text-justify\">A operação faz parte da carteira de sociedades mineiras nas quais a ENDIAMA mantém participações e constitui uma das unidades ligadas à produção diamantífera na região centro-norte do país.</p>\r\n\r\n          <p class=\"text-justify\">A continuidade da produção enquadra-se nos esforços de desenvolvimento da actividade diamantífera e de aproveitamento dos recursos minerais existentes na região.</p>\r\n\r\n          <p>Fonte primária: <br>\r\n            <a href=\"https://c2a.portais.gov.ao/uploads/News_Letter_Mirempet_Edicao_91_15_12_2025_bb0fd327f6.pdf\" target=\"_blank\" class=\"mz-news-a\">MIREMPET: Newsletter, 15 de Dezembro de 2025 <i class=\"bi bi-box-arrow-up-right text-small\"></i></a><br>\r\n            <a href=\"https://www.endiama.co.ao/actividade-mineira\" target=\"_blank\" class=\"mz-news-a\">ENDIAMA: Actividade Mineira <i class=\"bi bi-box-arrow-up-right text-small\"></i></a>\r\n          </p>', '2025-12-16 08:52:21', '2026-08-18 07:54:29'),
(28, 0, 0, 'public', 'Imprensa Mucuanza', 'ENDIAMA detém 33% de participação na Sociedade Mineira Mucuanza', 'A participação da empresa pública na sociedade mineira está registada nos dados do subsector diamantífero divulgados pela ITIE Angola.', 'news/img/endiama-detem-33-de-participacao-na-sociedade-mineira-mucuanza.jpg', 'endiama-detem-33-de-participacao-na-sociedade-mineira-mucuanza', '<p class=\"text-justify\">A <b>ENDIAMA, E.P. detém uma participação de 33%</b> na Sociedade Mineira Mucuanza, segundo os dados do Relatório ITIE de Angola 2022, divulgado em Outubro de 2024.</p>\r\n\r\n          <p class=\"text-justify\">O documento identifica a Mucuanza como um projecto diamantífero localizado na região <b>Cuanza-Sul/Malanje</b>, nos municípios de Cangandala e Mussende, com depósito do tipo aluvião.</p>\r\n\r\n          <p class=\"text-justify\">A participação da ENDIAMA integra o conjunto de interesses societários da empresa pública em projectos mineiros do subsector diamantífero nacional.</p>\r\n\r\n          <p class=\"text-justify\">Os dados divulgados pela ITIE resultam de informação disponibilizada pela própria ENDIAMA no âmbito do processo de transparência da indústria extractiva em Angola.</p>\r\n\r\n          <p class=\"text-justify\">A participação de 33% enquadra a Sociedade Mineira Mucuanza na carteira de projectos em que a empresa pública mantém interesses no sector diamantífero.</p>\r\n\r\n          <p>Fonte primária: <br>\r\n            <a href=\"https://itieangola.org/documentos-disponiveis/\" target=\"_blank\" class=\"mz-news-a\">ITIE Angola: Documentos Disponíveis <i class=\"bi bi-box-arrow-up-right text-small\"></i></a><br>\r\n            <a href=\"https://itieangola.org/wp-content/uploads/2024/10/2024_ITIE-Relatorio-2022-1.pdf\" target=\"_blank\" class=\"mz-news-a\">ITIE Angola: Relatório ITIE 2022 <i class=\"bi bi-box-arrow-up-right text-small\"></i></a>\r\n          </p>', '2024-11-04 08:00:00', '2026-08-18 08:21:55'),
(29, 0, 0, 'public', 'Imprensa Mucuanza', 'Mucuanza tem produção de 51.686 quilates prevista no plano para 2024', 'O plano para 2024 prevê uma produção de 51.686 quilates para a Sociedade Mineira Mucuanza, acima dos 4.081 quilates realizados no ano anterior.', 'news/img/mucuanza-tem-producao-de-51686-quilates-prevista-no-plano-para-2024.jpg', 'mucuanza-tem-producao-de-51686-quilates-prevista-no-plano-para-2024', '<p class=\"text-justify\">A Sociedade Mineira Mucuanza, Lda. tem prevista uma produção de <b>51.686 quilates de diamantes</b> para 2024, de acordo com o <a href=\"https://endiamaimprensa.com/wp-content/uploads/2024/03/Outlook_2024_MIREMPET_Final.pdf\" target=\"_blank\" class=\"mz-news-a\">Outlook 2024 do MIREMPET</a>.</p>\r\n\r\n          <p class=\"text-justify\">O plano representa um aumento significativo face aos <b>4.081 quilates realizados em 2023</b>, correspondendo a uma variação de <b>1.167%</b> entre o valor previsto para 2024 e o resultado alcançado no ano anterior.</p>\r\n\r\n          <p class=\"text-justify\">A Mucuanza surge na relação dos projectos de produção de diamantes apresentada no documento, que reúne as previsões para diferentes operações do subsector diamantífero nacional.</p>\r\n\r\n          <p class=\"text-justify\">No mesmo quadro, o plano global de produção de diamantes para 2024 prevê <b>14.642.001 quilates</b>, contra 9.754.310 quilates realizados em 2023, representando uma variação global de 50%.</p>\r\n\r\n          <p class=\"text-justify\">A previsão de 51.686 quilates coloca a produção da Mucuanza entre os projectos para os quais estavam previstas metas de crescimento no plano de produção diamantífera para 2024.</p>\r\n\r\n          <p>Fonte primária: <br>\r\n            <a href=\"https://endiamaimprensa.com/wp-content/uploads/2024/03/Outlook_2024_MIREMPET_Final.pdf\" target=\"_blank\" class=\"mz-news-a\">MIREMPET: Outlook 2024 <i class=\"bi bi-box-arrow-up-right text-small\"></i></a>\r\n          </p>', '2024-04-01 08:36:12', '2026-08-18 08:37:44'),
(30, 0, 0, 'public', 'Imprensa Mucuanza', 'Sociedade Mineira Mucuanza valida Sistema Integral de Gestão Mineira desenvolvido sobre a Elizabeth AI', 'Após o primeiro trimestre operacional de 2026, a empresa formalizou a validação do Sistema Integral de Gestão Mineira (SIGM), desenvolvido sobre a plataforma Elizabeth AI.', 'news/img/sociedade-mineira-mucuanza-valida-sigm-desenvolvido-sobre-a-elizabeth-ai.png', 'sociedade-mineira-mucuanza-valida-sigm-desenvolvido-sobre-a-elizabeth-ai', '<p class=\"text-justify\">A <b>Sociedade Mineira Mucuanza, Lda.</b> formalizou a validação da operação do <b>Sistema Integral de Gestão Mineira (SIGM)</b>, desenvolvido sobre a plataforma <a href=\"https://cfianca.com/elizabeth\" target=\"_blank\" class=\"mz-news-a\">Elizabeth AI</a>, após o primeiro trimestre de funcionamento em ambiente mineiro.</p>\r\n\r\n          <p class=\"text-justify\">A implementação permitiu aplicar a solução em condições reais de produção, com o sistema concebido para apoiar a gestão e o acompanhamento das operações da Sociedade Mineira Mucuanza.</p>\r\n\r\n          <p class=\"text-justify\">Durante o primeiro trimestre de 2026, o SIGM assegurou <b>operação contínua mesmo offline</b> e registou <b>mais de 15 mil sincronizações operacionais</b>, demonstrando a utilização contínua da plataforma no acompanhamento das actividades da operação mineira.</p>\r\n\r\n          <p class=\"text-justify\">Entre os resultados registados destaca-se ainda a <b>redução de até 70% no ciclo de reporte técnico</b>, bem como um <b>aumento de 60% no controlo e na visibilidade sobre a produção</b>.</p>\r\n\r\n          <p class=\"text-justify\">A validação do SIGM representa um passo importante no processo de modernização da gestão operacional da Mucuanza, reforçando a utilização de soluções tecnológicas para melhorar o acompanhamento das actividades mineiras.</p>\r\n\r\n          <p>Documento: <a href=\"uploads/2026/05/summary-q1-2026-elizabeth-ai-sigm-smm.pdf\" target=\"_blank\" class=\"mz-news-a\">Sumário Executivo Q1 2026 (Janeiro - Março) <i class=\"bi bi-box-arrow-up-right text-small\"></i></a>\r\n          </p>', '2026-05-04 08:00:00', '2026-08-18 12:01:51'),
(31, 0, 0, 'public', 'Imprensa Mucuanza', 'SIGM reduz em até 70% o ciclo de reporte técnico na Mucuanza', 'A implementação do Sistema Integral de Gestão Mineira (SIGM) permitiu reduzir em até 70% o ciclo de reporte técnico na Sociedade Mineira Mucuanza durante o primeiro trimestre de 2026.', 'news/img/sigm-reduz-em-ate-70-por-cento-o-ciclo-de-reporte-tecnico-na-mucuanza.jpg', 'sigm-reduz-em-ate-70-por-cento-o-ciclo-de-reporte-tecnico-na-mucuanza', '<p class=\"text-justify\">A <b>Sociedade Mineira Mucuanza, Lda.</b> registou uma <b>redução de até 70% no ciclo de reporte técnico</b> após a implementação do <b>Sistema Integral de Gestão Mineira (SIGM)</b>, desenvolvido sobre a plataforma <a href=\"https://cfianca.com/elizabeth\" target=\"_blank\" class=\"mz-news-a\">Elizabeth AI</a>.</p>\r\n\r\n          <p class=\"text-justify\">O resultado foi registado durante o <b>primeiro trimestre de 2026</b>, período em que o sistema funcionou em ambiente real de produção mineira e foi submetido ao processo de validação pela Sociedade Mineira Mucuanza.</p>\r\n\r\n          <p class=\"text-justify\">A redução do ciclo de reporte técnico contribuiu para tornar mais ágil o processo de recolha, tratamento e disponibilização da informação operacional, reforçando a capacidade de acompanhamento das actividades da empresa.</p>\r\n\r\n          <p class=\"text-justify\">No mesmo período, o SIGM registou <b>mais de 15 mil sincronizações operacionais</b> e assegurou <b>operação contínua mesmo offline</b>, permitindo a continuidade dos processos de gestão e sincronização de informação em condições de conectividade limitada.</p>\r\n\r\n          <p class=\"text-justify\">A melhoria registada no ciclo de reporte integra os resultados alcançados com a adopção do SIGM e reforça o processo de <b>modernização da gestão operacional da Mucuanza</b>, com recurso a soluções tecnológicas adaptadas às necessidades da actividade mineira.</p>\r\n\r\n          <p>Documento: <a href=\"uploads/2026/05/summary-q1-2026-elizabeth-ai-sigm-smm.pdf\" target=\"_blank\" class=\"mz-news-a\">Sumário Executivo Q1 2026 (Janeiro - Março) <i class=\"bi bi-box-arrow-up-right text-small\"></i></a>\r\n          </p>', '2026-05-11 08:35:25', '2026-08-18 12:58:15'),
(32, 0, 0, 'public', 'Imprensa Mucuanza', 'Mucuanza regista mais de 15 mil sincronizações operacionais com novo sistema de gestão mineira', 'O Sistema Integral de Gestão Mineira (SIGM) registou mais de 15 mil sincronizações operacionais na Sociedade Mineira Mucuanza durante o primeiro trimestre de 2026.', 'news/img/mucuanza-regista-mais-de-15-mil-sincronizacoes-operacionais-com-novo-sistema-de-gestao-mineira.jpg', 'mucuanza-regista-mais-de-15-mil-sincronizacoes-operacionais-com-novo-sistema-de-gestao-mineira', '<p class=\"text-justify\">A <b>Sociedade Mineira Mucuanza, Lda.</b> registou <b>mais de 15 mil sincronizações operacionais</b> através do <b>Sistema Integral de Gestão Mineira (SIGM)</b> durante o primeiro trimestre de 2026.</p>\r\n\r\n          <p class=\"text-justify\">Desenvolvido sobre a plataforma <a href=\"https://cfianca.com/elizabeth\" target=\"_blank\" class=\"mz-news-a\">Elizabeth AI</a>, o SIGM entrou em funcionamento em ambiente real de produção mineira, permitindo o acompanhamento contínuo das actividades e a gestão da informação operacional.</p>\r\n\r\n          <p class=\"text-justify\">O volume de sincronizações registado entre <b>Janeiro e Março de 2026</b> demonstra a utilização efectiva da solução durante o período inicial de operação e validação do sistema na Mucuanza.</p>\r\n\r\n          <p class=\"text-justify\">Entre as características da solução destaca-se a capacidade de assegurar <b>operação contínua mesmo offline</b>, permitindo a continuidade dos processos de gestão e posterior sincronização da informação em condições de conectividade limitada.</p>\r\n\r\n          <p class=\"text-justify\">A implementação do SIGM contribuiu ainda para uma <b>redução de até 70% no ciclo de reporte técnico</b> e para o reforço do controlo e da visibilidade sobre a produção, consolidando a utilização de ferramentas digitais na gestão da operação mineira.</p>\r\n\r\n          <p class=\"text-justify\">Os resultados alcançados no primeiro trimestre de 2026 contribuíram para a <b>validação da operação do SIGM</b> pela Sociedade Mineira Mucuanza, marcando uma etapa no processo de modernização tecnológica da empresa.</p>\r\n\r\n          <p>Documento: <a href=\"uploads/2026/05/summary-q1-2026-elizabeth-ai-sigm-smm.pdf\" target=\"_blank\" class=\"mz-news-a\">Sumário Executivo Q1 2026 (Janeiro - Março) <i class=\"bi bi-box-arrow-up-right text-small\"></i></a>\r\n          </p>', '2026-06-08 08:35:25', '2026-08-18 13:01:04'),
(33, 0, 0, 'private', 'Imprensa Mucuanza', 'Constantino Fiança desenvolve módulo de rastreabilidade da correspondência no SIGM', 'Nova ferramenta desenvolvida pelo Tech Lead Constantino Fiança reforça a rastreabilidade e o controlo da correspondência interna.', 'news/img/constantino-fianca-desenvolve-modulo-de-rastreabilidade-da-correspondencia-no-sigm.png', 'constantino-fianca-desenvolve-modulo-de-rastreabilidade-da-correspondencia-no-sigm', '<p class=\"text-justify\">A Sociedade Mineira de Mucuanza continua a reforçar as funcionalidades do <b>Sistema Integral de Gestão Mineira (SIGM)</b>, através do desenvolvimento de soluções digitais orientadas para a melhoria dos processos administrativos e da gestão da informação.</p>\r\n\r\n <p class=\"text-justify\">Neste âmbito, <b>Constantino Fiança, Tech Lead, engenheiro de software e responsável pelo desenvolvimento de soluções tecnológicas integradas na Mucuanza</b>, desenvolveu um módulo de gestão e rastreabilidade da correspondência interna, destinado a centralizar o registo, o encaminhamento e o acompanhamento dos documentos no contexto organizacional.</p>\r\n\r\n <p class=\"text-justify\">Integrado no SIGM, o módulo foi concebido para proporcionar maior controlo sobre a circulação da correspondência, permitindo acompanhar os documentos desde o seu registo até à conclusão do respectivo tratamento.</p>\r\n\r\n <p class=\"text-justify\">Com esta integração, o SIGM alarga a sua abrangência funcional à gestão da correspondência, reforçando a centralização da informação e o acompanhamento dos procedimentos internos. A iniciativa enquadra-se no processo de evolução da plataforma, com foco na organização dos fluxos de trabalho, na rastreabilidade documental e no apoio à eficiência administrativa.</p>\r\n\r\n <p class=\"text-justify\">O desenvolvimento desta funcionalidade reflecte a aposta da Sociedade Mineira de Mucuanza na utilização de soluções tecnológicas ajustadas às suas necessidades, contribuindo para a consolidação de ferramentas digitais de suporte à gestão e às actividades da organização.</p>', '2026-10-09 00:37:00', '2026-10-25 14:07:26');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `ip_geolocation`
--
ALTER TABLE `ip_geolocation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_query_ip` (`query_ip`),
  ADD KEY `idx_country_code` (`country_code`),
  ADD KEY `idx_city` (`city`),
  ADD KEY `idx_page_ip_created` (`page`,`query_ip`,`created_at`);

--
-- Índices para tabela `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `ip_geolocation`
--
ALTER TABLE `ip_geolocation`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
