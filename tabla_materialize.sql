-- Active: 1659493635922@@127.0.0.1@3306@materialize
CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(255) NOT NULL,
  `Apellido` varchar(255) NOT NULL,
  `Email` int(11) NOT NULL,
  `Pregunta1` varchar(255) NOT NULL,
  `Pregunta2` varchar(255) NOT NULL,
  `Pregunta3` varchar(255) NOT NULL,
  `Pregunta4` varchar(255) NOT NULL,
  `Pregunta5` varchar(255) NOT NULL,
  `Pregunta6` varchar(255) NOT NULL,
  `Pregunta7` varchar(255) NOT NULL,
  `Pregunta8` varchar(255) NOT NULL,
  `Pregunta9` varchar(255) NOT NULL,
  `Pregunta10` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;