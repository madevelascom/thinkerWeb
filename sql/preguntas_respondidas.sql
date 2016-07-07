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

-- Volcando estructura para tabla thinker.preguntas_respondidas
CREATE TABLE IF NOT EXISTS `preguntas_respondidas` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `id_pregunta` int(11) NOT NULL DEFAULT '1',
  `id_cuestionario` int(11) DEFAULT NULL,
  `acierto` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`,`id_pregunta`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla thinker.preguntas_respondidas: ~21 rows (aproximadamente)
/*!40000 ALTER TABLE `preguntas_respondidas` DISABLE KEYS */;
INSERT INTO `preguntas_respondidas` (`id_usuario`, `id_pregunta`, `id_cuestionario`, `acierto`) VALUES
	(2, 15, 1, 1),
	(2, 18, 1, 1),
	(2, 19, 1, 0),
	(2, 20, 2, 0),
	(2, 22, 2, 1),
	(2, 25, 2, 1),
	(3, 16, 1, 1),
	(3, 17, 1, 1),
	(3, 18, 1, 1),
	(3, 19, 1, 1),
	(7, 15, 1, 1),
	(7, 16, 1, 1),
	(7, 17, 1, 0),
	(7, 18, 1, 0),
	(7, 19, 1, 0),
	(7, 20, 2, 1),
	(7, 21, 2, 0),
	(7, 22, 2, 1),
	(7, 23, 2, 1),
	(7, 24, 2, 1),
	(7, 25, 2, 0),
	(8, 20, 2, 1),
	(8, 21, 2, 0),
	(8, 24, 2, 0),
	(8, 25, 2, 1),
	(9, 20, 2, 1),
	(9, 21, 2, 1),
	(9, 22, 2, 1),
	(9, 23, 2, 1),
	(9, 24, 2, 1);
/*!40000 ALTER TABLE `preguntas_respondidas` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
