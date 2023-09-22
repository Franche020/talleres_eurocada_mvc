/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

CREATE TABLE `galeria` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre_imagen` varchar(255) COLLATE utf8mb3_spanish_ci DEFAULT NULL,
  `resaltar` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

CREATE TABLE `preciospiezas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `puerta_del_izq` decimal(8,2) DEFAULT NULL,
  `puerta_del_der` decimal(8,2) DEFAULT NULL,
  `puerta_tras_izq` decimal(8,2) DEFAULT NULL,
  `puerta_tras_der` decimal(8,2) DEFAULT NULL,
  `retrovisor_izq` decimal(8,2) DEFAULT NULL,
  `retrovisor_der` decimal(8,2) DEFAULT NULL,
  `techo` decimal(8,2) DEFAULT NULL,
  `capo_del` decimal(8,2) DEFAULT NULL,
  `porton_tras` decimal(8,2) DEFAULT NULL,
  `paragolpes_del` decimal(8,2) DEFAULT NULL,
  `paragolpes_tras` decimal(8,2) DEFAULT NULL,
  `aleta_del_izq` decimal(8,2) DEFAULT NULL,
  `aleta_del_der` decimal(8,2) DEFAULT NULL,
  `aleta_tras_izq` decimal(8,2) DEFAULT NULL,
  `aleta_tras_der` decimal(8,2) DEFAULT NULL,
  `faro_del_izq` decimal(8,2) DEFAULT NULL,
  `faro_del_der` decimal(8,2) DEFAULT NULL,
  `completo` decimal(8,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

CREATE TABLE `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb3_spanish_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb3_spanish_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb3_spanish_ci DEFAULT NULL,
  `confirmado` tinyint(1) NOT NULL,
  `token` varchar(100) COLLATE utf8mb3_spanish_ci DEFAULT NULL,
  `admin` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

INSERT INTO `galeria` (`id`, `nombre_imagen`, `resaltar`) VALUES
(16, 'f632cf135bd0a91bfbb1a41c4153e069', 0);
INSERT INTO `galeria` (`id`, `nombre_imagen`, `resaltar`) VALUES
(17, '54ec8d4cd0f040bcc7b343bb97aac0b4', 0);
INSERT INTO `galeria` (`id`, `nombre_imagen`, `resaltar`) VALUES
(18, '356b6614ce493cc87bb02c77c97dd52f', 0);
INSERT INTO `galeria` (`id`, `nombre_imagen`, `resaltar`) VALUES
(19, 'f86bb30b6f8047119b960fb8d52d8942', 0),
(20, 'ff7073ea11a2be8e1818ffd3d93757f5', 0),
(22, '78bb3f0d4de3430290f6632769da83f3', 1);

INSERT INTO `preciospiezas` (`id`, `puerta_del_izq`, `puerta_del_der`, `puerta_tras_izq`, `puerta_tras_der`, `retrovisor_izq`, `retrovisor_der`, `techo`, `capo_del`, `porton_tras`, `paragolpes_del`, `paragolpes_tras`, `aleta_del_izq`, `aleta_del_der`, `aleta_tras_izq`, `aleta_tras_der`, `faro_del_izq`, `faro_del_der`, `completo`) VALUES
(1, 65.00, 65.00, 65.00, 65.00, 20.00, 20.00, 80.00, 80.00, 65.00, 65.00, 65.00, 65.00, 65.00, 65.00, 65.00, 30.00, 30.00, 725.00);


INSERT INTO `usuarios` (`id`, `nombre`, `email`, `password`, `confirmado`, `token`, `admin`) VALUES
(1, 'Prueba', 'emailfalso@email.com', '$2y$10$YQyfTTcXKi06ifJflAkFoeiUA3WPHMPvt3EHSFyYuPQUVyckErQ2G', 1, '', 1);
INSERT INTO `usuarios` (`id`, `nombre`, `email`, `password`, `confirmado`, `token`, `admin`) VALUES
(2, 'Fran', 'correo@correo.com', '$2y$10$jcwFUT4mOUwz7JmPEbrnzeNZK2/1TQhP/lw.AZS0dgI88LTJO0APm', 1, '', 0);



/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;