-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.38-MariaDB


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema denuncias
--

CREATE DATABASE IF NOT EXISTS denuncias;
USE denuncias;

--
-- Definition of table `denuncias`
--

DROP TABLE IF EXISTS `denuncias`;
CREATE TABLE `denuncias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `folio` varchar(12) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Se inserta en automatico cuando guarda ',
  `tipo` char(3) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `nombre` varchar(60) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `ciudad` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `correo` varchar(80) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `telefono` varchar(12) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `asunto` varchar(80) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `descripcion` text COLLATE utf8_spanish2_ci NOT NULL,
  `urlArchivoEvidencia` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `estatus` char(1) COLLATE utf8_spanish2_ci NOT NULL DEFAULT 'R',
  PRIMARY KEY (`id`),
  UNIQUE KEY `folio_UNIQUE` (`folio`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `denuncias`
--

/*!40000 ALTER TABLE `denuncias` DISABLE KEYS */;
INSERT INTO `denuncias` (`id`,`folio`,`fecha`,`tipo`,`nombre`,`ciudad`,`correo`,`telefono`,`asunto`,`descripcion`,`urlArchivoEvidencia`,`estatus`) VALUES 
 (1,'202003/D/001','2020-03-06 00:00:00','DEN','JOSE','GTO','jose@gmail.com','014121578040','Este es el Asunto 1','Descripción del Asunto 1','url/del/archivo','R'),
 (2,'202003/R/002','2020-03-09 00:00:00','REP','ANTONIO','Juventino','ANTONIO@gmail.com','014121578040','Este es el Asunto 2 Reporte','Descripción del Asunto 2','url/del/archivo2.jpg','R'),
 (3,'202003/C/003','2020-03-06 00:00:00','COM','EL PERRITO','Celaya','PERRITO@gmail.com','014121578040','Este es el Asunto 3','Descripción del Asunto 3','url/del/archivo/3','R'),
 (4,'202005/D/002','2020-03-09 00:00:00','DEN','IGNACIO','Juventino','IGNACIO@gmail.com','014121578040','Este es el Asunto 5 Reporte','Descripción del Asunto 5','url/del/archivo5.jpg','P'),
 (5,'132132','2020-03-10 10:41:56','DEN','NOMBRE',NULL,'CORREO','TEL','ASUNTO','DESC',NULL,'R'),
 (6,'2020/DEN/003','2020-03-10 11:12:04','DEN','Jose Garcia Alvarez',NULL,'josegar81@gmail.com','4612278884','Asunto Prueba de Insert 1','Descripcion prueba Insert 1',NULL,'R');
/*!40000 ALTER TABLE `denuncias` ENABLE KEYS */;


--
-- Definition of table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_name` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `password` varchar(95) COLLATE utf8_spanish2_ci NOT NULL,
  `estatus` varchar(1) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Index2` (`user_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci COMMENT='usuarios que pueden ver detalles';

--
-- Dumping data for table `usuarios`
--

/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
