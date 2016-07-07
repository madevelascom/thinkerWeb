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

-- Volcando estructura para tabla thinker.preguntas
CREATE TABLE IF NOT EXISTS `preguntas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_cuestionario` int(11) NOT NULL DEFAULT '0',
  `id_pregunta_cuestionario` int(11) NOT NULL,
  `imagen` text,
  `veces_respondida` int(11) NOT NULL DEFAULT '0',
  `pregunta` text,
  `id_respuesta1` tinyint(4) DEFAULT '0',
  `respuesta1` text,
  `respuesta1_comprobacion` tinyint(4) DEFAULT '0',
  `id_respuesta2` tinyint(4) DEFAULT '0',
  `respuesta2` text,
  `respuesta2_comprobacion` tinyint(4) DEFAULT '0',
  `id_respuesta3` tinyint(4) DEFAULT '0',
  `respuesta3` text,
  `respuesta3_comprobacion` tinyint(4) DEFAULT '0',
  `id_respuesta4` tinyint(4) DEFAULT '0',
  `respuesta4` text,
  `respuesta4_comprobacion` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla thinker.preguntas: ~11 rows (aproximadamente)
/*!40000 ALTER TABLE `preguntas` DISABLE KEYS */;
INSERT INTO `preguntas` (`id`, `id_cuestionario`, `id_pregunta_cuestionario`, `imagen`, `veces_respondida`, `pregunta`, `id_respuesta1`, `respuesta1`, `respuesta1_comprobacion`, `id_respuesta2`, `respuesta2`, `respuesta2_comprobacion`, `id_respuesta3`, `respuesta3`, `respuesta3_comprobacion`, `id_respuesta4`, `respuesta4`, `respuesta4_comprobacion`) VALUES
	(15, 1, 1, '', 20, 'La palabra "while" es ', NULL, 'Una palabra reservada', 1, 0, 'Una variable', 0, 0, 'Una asignaciÃ³n', 0, 0, 'Una suma', 0),
	(16, 1, 2, '                     ', 14, 'Los algoritmos sirven para                     ', 0, 'Resolver problemas', 1, 0, 'Bailar', 0, 0, 'Cantar', 0, 0, 'Despertarse', 0),
	(17, 1, 3, '       ', 13, 'Ã‚Â¿CuÃƒÂ¡l no es un tipo de algoritmo?       ', 0, 'Voraces', 0, 0, 'Comida', 1, 0, 'Ordenamiento', 0, 0, 'BÃƒÂºsqueda', 0),
	(18, 1, 4, '', 13, 'Â¿Cual no es un algoritmo voraz?', 0, 'Kruskal', 0, 0, 'Tsun', 1, 0, 'Prim', 0, 0, 'Dijsktra', 0),
	(19, 1, 5, 'https://lh3.googleusercontent.com/-p_VPnKuE2zI/TsDP4X9lxZI/AAAAAAAAAas/4cNZal_iftQ/s466/CU00160A_1.png', 7, 'Â¿QuÃ© hace el diagrama de flujo?', 0, 'Validar informaciÃ³n', 0, 0, 'Dibujar pandas', 0, 0, 'Crear un archivo', 0, 0, 'Calcular promedio', 1),
	(20, 2, 1, '', 12, 'Cual es un animal de cuatro patas', 0, 'Perro', 1, 0, 'Canario', 0, 0, 'Delfin', 0, 0, 'Tiburon', 0),
	(21, 2, 2, '', 13, 'Que animal no pone huevos', 0, 'Gallina', 0, 0, 'Canario', 0, 0, 'Cocodrilo', 0, 0, 'Gato', 1),
	(22, 2, 3, '', 10, 'Cual es un mamifero', 0, 'Serpiente', 0, 0, 'Hipopotamo', 1, 0, 'Caiman', 0, 0, 'Mantarraya', 0),
	(23, 2, 4, '', 11, 'Las lagartijas tienen cuantas patas?', 0, '2', 0, 0, '3', 0, 0, '4', 1, 0, '5', 0),
	(24, 2, 5, '', 6, 'Cuales son vertebrados', 0, 'Ciempies', 0, 0, 'Humanos', 1, 0, 'Lagartijas', 1, 0, 'Cucaracha', 0),
	(25, 2, 6, '', 12, 'Los cerdos son ', 0, 'Carnivoros', 0, 0, 'Herbivoros', 0, 0, 'Insectivoros', 0, 0, 'Omnivoros', 1);
/*!40000 ALTER TABLE `preguntas` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
