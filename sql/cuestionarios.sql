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

-- Volcando estructura para tabla thinker.cuestionarios
CREATE TABLE IF NOT EXISTS `cuestionarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` text,
  `aleatorio` tinyint(4) NOT NULL DEFAULT '0',
  `preguntas_aleatorias` tinyint(4) NOT NULL DEFAULT '0',
  `preguntas_aleatorias_restantes` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla thinker.cuestionarios: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `cuestionarios` DISABLE KEYS */;
INSERT INTO `cuestionarios` (`id`, `nombre`, `aleatorio`, `preguntas_aleatorias`, `preguntas_aleatorias_restantes`) VALUES
	(1, 'Algoritmos', 1, 5, 5),
	(2, 'Animales', 1, 5, 5);
/*!40000 ALTER TABLE `cuestionarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
