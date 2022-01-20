-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.7.33 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Copiando dados para a tabela apiequip.equips: ~10 rows (aproximadamente)
/*!40000 ALTER TABLE `equips` DISABLE KEYS */;
INSERT INTO `equips` (`id`, `titulo`, `tipo`, `valor`, `anofab`, `serialnum`, `created_at`, `updated_at`) VALUES
	(1, 'Master keys mouse', 'mouse', '300', '20/02/2022', '12344312123', '2022-01-20 13:39:41', '2022-01-20 18:51:13'),
	(2, 'Logitech K480 Multi-Device Bluetooth Preto,', 'Teclado', '244,00', '1/02/2019', '920-006348', '2022-01-20 13:45:48', '2022-01-20 13:45:48'),
	(3, 'COMPUTADOR PICHAU HOME, AMD ATHLON 3000G, 8GB DDR4, SSD 120GB', 'computador', '1.561,00', '19/03/1999', 'Pichau-Bundle-Home-29194', '2022-01-20 13:47:34', '2022-01-20 13:47:34'),
	(4, 'NoBreak SMS Station II 600VA/300-Watt Bivolt', 'nobreak', '569', '30/11/2021', 'Aa832915', '2022-01-20 13:49:09', '2022-01-20 13:49:09'),
	(8, 'COMPUTADOR PICHAU GAMER, INTEL I3-10100F, GEFORCE GTX 1660 TI 6GB, 8GB DDR4, SSD 240GB', 'computador', '5.521,00', '10/11/2022', '1238912893', '2022-01-20 14:45:28', '2022-01-20 19:22:49'),
	(9, 'MOUSE GAMER PICHAU P501 RGB 10000DPI PRETO, PGM-P501-RGB', 'mouse', '260', '10/11/2022', '1238912893', '2022-01-20 15:52:06', '2022-01-20 19:17:49'),
	(14, 'M700', 'mouse', '400', '10/11/2022', '12389128931324', '2022-01-20 19:44:53', '2022-01-20 19:44:53'),
	(15, 'Mouse x123455', 'mouse', '234', '10/11/2023', '12354678901', '2022-01-20 20:13:45', '2022-01-20 20:30:18'),
	(17, 'M70023', 'mouse', '400', '10/11/2022', '1238912893123', '2022-01-20 20:35:00', '2022-01-20 20:35:00'),
	(18, 'Nobreak dsa', 'nobreak', '1000', '10/11/2022', '2314566767', '2022-01-20 21:38:22', '2022-01-20 21:38:22');
/*!40000 ALTER TABLE `equips` ENABLE KEYS */;

-- Copiando dados para a tabela apiequip.failed_jobs: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Copiando dados para a tabela apiequip.migrations: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2022_01_20_130355_create_equips_table', 2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Copiando dados para a tabela apiequip.password_resets: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Copiando dados para a tabela apiequip.personal_access_tokens: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

-- Copiando dados para a tabela apiequip.users: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
