-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.1.10-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             9.3.0.5077
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando estructura para tabla thinker.ranking
CREATE TABLE IF NOT EXISTS `ranking` (
  `id_usuario` int(11) NOT NULL DEFAULT '0',
  `id_cuestionario` int(11) NOT NULL DEFAULT '1',
  `total` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`,`id_cuestionario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla thinker.ranking: ~7 rows (aproximadamente)
/*!40000 ALTER TABLE `ranking` DISABLE KEYS */;
INSERT INTO `ranking` (`id_usuario`, `id_cuestionario`, `total`) VALUES
	(1, 1, 0),
	(3, 2, 3),
	(4, 1, 5),
	(5, 1, 5),
	(6, 1, 3),
	(7, 1, 2),
	(7, 2, 3),
	(8, 2, 2),
	(9, 2, 5);
/*!40000 ALTER TABLE `ranking` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
