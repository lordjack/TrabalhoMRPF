-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.7.24 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Copiando estrutura para tabela db_projeto_sis_fisica.aluno
CREATE TABLE IF NOT EXISTS `aluno` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matricula` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contato` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contato_responsaveis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `turma_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `aluno_turma_id_foreign` (`turma_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_projeto_sis_fisica.aluno: 1 rows
/*!40000 ALTER TABLE `aluno` DISABLE KEYS */;
INSERT INTO `aluno` (`id`, `nome`, `numero`, `matricula`, `email`, `contato`, `contato_responsaveis`, `turma_id`, `created_at`, `updated_at`) VALUES
	(1, 'Eduardo Zaffari Monteiro', '1', '123456789', 'eduardo@exemplo.com', '2222-3333', '7777-8888', 1, '2020-11-02 17:25:34', '2020-11-02 17:25:34');
/*!40000 ALTER TABLE `aluno` ENABLE KEYS */;

-- Copiando estrutura para tabela db_projeto_sis_fisica.avaliacao
CREATE TABLE IF NOT EXISTS `avaliacao` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `aluno_id` bigint(20) unsigned NOT NULL,
  `data` date NOT NULL,
  `habilidade1` double(8,2) DEFAULT NULL,
  `habilidade2` double(8,2) DEFAULT NULL,
  `habilidade3` double(8,2) DEFAULT NULL,
  `habilidade4` double(8,2) DEFAULT NULL,
  `habilidade5` double(8,2) DEFAULT NULL,
  `habilidade6` double(8,2) DEFAULT NULL,
  `habilidade7` double(8,2) DEFAULT NULL,
  `habilidade8` double(8,2) DEFAULT NULL,
  `habilidade9` double(8,2) DEFAULT NULL,
  `habilidade10` double(8,2) DEFAULT NULL,
  `habilidade11` double(8,2) DEFAULT NULL,
  `habilidade12` double(8,2) DEFAULT NULL,
  `competencia1` double(8,2) NOT NULL,
  `competencia2` double(8,2) NOT NULL,
  `competencia3` double(8,2) NOT NULL,
  `nota_final` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `avaliacao_aluno_id_foreign` (`aluno_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_projeto_sis_fisica.avaliacao: 4 rows
/*!40000 ALTER TABLE `avaliacao` DISABLE KEYS */;
INSERT INTO `avaliacao` (`id`, `aluno_id`, `data`, `habilidade1`, `habilidade2`, `habilidade3`, `habilidade4`, `habilidade5`, `habilidade6`, `habilidade7`, `habilidade8`, `habilidade9`, `habilidade10`, `habilidade11`, `habilidade12`, `competencia1`, `competencia2`, `competencia3`, `nota_final`, `created_at`, `updated_at`) VALUES
	(1, 1, '2020-11-02', 7.00, 3.00, 7.00, 10.00, 7.00, 3.00, 10.00, 7.00, 10.00, 7.00, 7.00, 7.00, 68.00, 75.00, 70.00, 71.00, '2020-11-02 17:27:54', '2020-11-02 17:27:54'),
	(2, 1, '2020-11-02', 0.00, 10.00, 0.00, 7.00, 10.00, NULL, 10.00, 10.00, 0.00, 0.00, 10.00, 10.00, 54.00, 66.67, 66.67, 62.44, '2020-11-02 17:28:37', '2020-11-02 17:28:37'),
	(3, 1, '2020-11-02', 10.00, 10.00, NULL, NULL, NULL, 10.00, NULL, NULL, NULL, 10.00, NULL, NULL, 100.00, 100.00, 100.00, 100.00, '2020-11-02 17:29:14', '2020-11-02 17:29:14'),
	(4, 1, '2020-11-03', 10.00, 7.00, NULL, 3.00, NULL, NULL, 10.00, NULL, 7.00, NULL, 0.00, NULL, 66.67, 85.00, 0.00, 50.56, '2020-11-03 16:42:05', '2020-11-03 16:42:05');
/*!40000 ALTER TABLE `avaliacao` ENABLE KEYS */;

-- Copiando estrutura para tabela db_projeto_sis_fisica.curso
CREATE TABLE IF NOT EXISTS `curso` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_projeto_sis_fisica.curso: 4 rows
/*!40000 ALTER TABLE `curso` DISABLE KEYS */;
INSERT INTO `curso` (`id`, `nome`, `created_at`, `updated_at`) VALUES
	(1, 'Mecânica', '2020-11-02 17:22:44', '2020-11-02 17:22:44'),
	(2, 'Informática', '2020-11-02 17:22:52', '2020-11-02 17:22:52'),
	(3, 'Alimentos', '2020-11-02 17:23:00', '2020-11-02 17:23:00'),
	(4, 'Engenharia Mecânica', '2020-11-02 17:23:09', '2020-11-02 17:23:09');
/*!40000 ALTER TABLE `curso` ENABLE KEYS */;

-- Copiando estrutura para tabela db_projeto_sis_fisica.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_projeto_sis_fisica.failed_jobs: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Copiando estrutura para tabela db_projeto_sis_fisica.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_projeto_sis_fisica.migrations: 8 rows
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2020_07_20_033721_create_curso', 1),
	(2, '2020_07_20_033914_create_turma', 1),
	(3, '2020_07_20_034513_create_professor', 1),
	(4, '2020_07_20_035229_create_aluno', 1),
	(5, '2020_08_26_003321_create_avaliacao', 1),
	(6, '2014_10_12_000000_create_users_table', 2),
	(7, '2014_10_12_100000_create_password_resets_table', 2),
	(8, '2019_08_19_000000_create_failed_jobs_table', 2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Copiando estrutura para tabela db_projeto_sis_fisica.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_projeto_sis_fisica.password_resets: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Copiando estrutura para tabela db_projeto_sis_fisica.professor
CREATE TABLE IF NOT EXISTS `professor` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contato` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titulacao` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `formacao` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_projeto_sis_fisica.professor: 1 rows
/*!40000 ALTER TABLE `professor` DISABLE KEYS */;
INSERT INTO `professor` (`id`, `nome`, `email`, `contato`, `area`, `titulacao`, `formacao`, `created_at`, `updated_at`) VALUES
	(1, 'Professor', 'Email@professor.com', '1111-2222', 'Educação-física', 'Mestrado', 'IFSC', '2020-11-02 17:23:56', '2020-11-02 17:23:56');
/*!40000 ALTER TABLE `professor` ENABLE KEYS */;

-- Copiando estrutura para tabela db_projeto_sis_fisica.responsavel
CREATE TABLE IF NOT EXISTS `responsavel` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contato` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resp_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_projeto_sis_fisica.responsavel: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `responsavel` DISABLE KEYS */;
/*!40000 ALTER TABLE `responsavel` ENABLE KEYS */;

-- Copiando estrutura para tabela db_projeto_sis_fisica.turma
CREATE TABLE IF NOT EXISTS `turma` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `curso_id` bigint(20) unsigned NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `serie` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `turno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `turma_curso_id_foreign` (`curso_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_projeto_sis_fisica.turma: 2 rows
/*!40000 ALTER TABLE `turma` DISABLE KEYS */;
INSERT INTO `turma` (`id`, `curso_id`, `nome`, `serie`, `turno`, `created_at`, `updated_at`) VALUES
	(1, 2, 'Informática 1', '1 ano', 'Integral', '2020-11-02 17:24:27', '2020-11-02 17:24:27'),
	(2, 3, 'Alimentos 3', '3 ano', 'Vespertino', '2020-11-02 17:24:51', '2020-11-02 17:24:51');
/*!40000 ALTER TABLE `turma` ENABLE KEYS */;

-- Copiando estrutura para tabela db_projeto_sis_fisica.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_projeto_sis_fisica.users: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Admin', 'admin@admin.com', NULL, '$2y$10$KRAy4kUQ482wk1SsW8tk4Oj7tc9LkYyJH.XGf0E1mi0HZZ0i615H2', NULL, '2021-06-02 15:22:12', '2021-06-02 15:22:12'),
	(2, 'renato', 'renato@ifsc.edu.br', NULL, '$2y$10$4.lveKVhV0Dp6HTlIiRIbe0HrPWCTOM.2htvBKTg3m6hyXzfyDwxm', NULL, '2021-06-02 17:10:23', '2021-06-02 17:10:23');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Copiando estrutura para tabela db_projeto_sis_fisica.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8mb4_bin NOT NULL DEFAULT '0',
  `telefone` varchar(40) COLLATE utf8mb4_bin NOT NULL DEFAULT '0',
  `cpf` varchar(14) COLLATE utf8mb4_bin NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- Copiando dados para a tabela db_projeto_sis_fisica.usuario: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` (`id`, `nome`, `telefone`, `cpf`, `created_at`, `updated_at`) VALUES
	(1, 'Gustavo', '49 8800-5500', '000.000.555-51', NULL, NULL),
	(2, 'João', '49 8800-5501', '000.000.555-55', NULL, NULL),
	(3, 'aaa', 'aa', 'aa', '2021-03-16 18:43:10', '2021-03-16 18:43:10');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

CREATE TABLE `escolas` (
	`id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
	`nome` VARCHAR(100) NOT NULL COLLATE 'utf8mb4_unicode_ci',
	`cep` VARCHAR(12) NOT NULL COLLATE 'utf8mb4_unicode_ci',
	`telefone` VARCHAR(20) NOT NULL COLLATE 'utf8mb4_unicode_ci',
	`rua` VARCHAR(100) NOT NULL COLLATE 'utf8mb4_unicode_ci',
	`numero` VARCHAR(100) NOT NULL COLLATE 'utf8mb4_unicode_ci',
	`cnpj` VARCHAR(100) NOT NULL COLLATE 'utf8mb4_unicode_ci',
	`email` VARCHAR(100) NOT NULL COLLATE 'utf8mb4_unicode_ci',
	`sigla` VARCHAR(100) NOT NULL COLLATE 'utf8mb4_unicode_ci',
	`cidade_id` VARCHAR(100) NOT NULL COLLATE 'utf8mb4_unicode_ci',
	`bairro` VARCHAR(100) NOT NULL COLLATE 'utf8mb4_unicode_ci',
	`tipo` VARCHAR(100) NOT NULL COLLATE 'utf8mb4_unicode_ci',
	`created_at` TIMESTAMP NULL DEFAULT NULL,
	`updated_at` TIMESTAMP NULL DEFAULT NULL,
	PRIMARY KEY (`id`)
)
COLLATE='utf8mb4_unicode_ci'
ENGINE=InnoDB
AUTO_INCREMENT=2
;

