-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-04-2025 a las 23:26:42
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `x_pruebas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `CODIGO ARTICULO` varchar(5) DEFAULT NULL,
  `SECCIÓN` varchar(10) DEFAULT NULL,
  `NOMBRE ARTÍCULO` varchar(19) DEFAULT NULL,
  `PRECIO` varchar(11) DEFAULT NULL,
  `FECHA` varchar(10) DEFAULT NULL,
  `PAÍS DE ORIGEN` varchar(9) DEFAULT NULL,
  `FOTO` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`CODIGO ARTICULO`, `SECCIÓN`, `NOMBRE ARTÍCULO`, `PRECIO`, `FECHA`, `PAÍS DE ORIGEN`, `FOTO`) VALUES
('AR-10', 'CERÁMICA', 'Tubos', '10', '04/03/1997', 'China', 'bumblebee1900x1200qd6.jpg'),
('AR-11', 'CERÁMICA', 'Plato Decorativo', '5', '07/06/1997', 'China', ''),
('AR-12', 'CERÁMICA', 'Juego de te', '10', '15/01/1997', 'China', ''),
('AR-13', 'CERÁMICA', 'Cenicero', '10', '02/07/1997', 'Japón', ''),
('AR-14', 'CERÁMICA', 'Maceta', '10', '23/02/1997', 'España', ''),
('AR-15', 'CERÁMICA', 'Jarra china', '10', '02/09/1997', 'China', ''),
('AR-20', 'CONFECCIÓN', 'Tarje Caballero', '10', '11/03/1997', 'Italia', ''),
('AR-21', 'CONFECCIÓN', 'Pantalón Señora', '10', '01/05/1997', 'Marruecos', ''),
('AR-22', 'CONFECCIÓN', 'Camisa Caballero', '10', '11/08/1997', 'España', ''),
('AR-23', 'CONFECCIÓN', 'Blusa Sra.', '10', '18/03/1997', 'China', ''),
('AR-24', 'CONFECCIÓN', 'Cazadora piel', '10', '10/07/1997', 'Italia', ''),
('AR-25', 'CONFECCIÓN', 'Abrigo Caballero', '10', '05/07/1997', 'Italia', ''),
('AR-26', 'CONFECCIÓN', 'Abrigo Sra', '10', '03/05/1997', 'Marruecos', ''),
('AR-27', 'CONFECCIÓN', 'Cinturón de piel', '3,606072626', '12/05/1997', 'España', ''),
('AR-30', 'FERRETERÍA', 'Destornillador', '5,523301239', '22/10/1997', 'España', ''),
('AR-31', 'FERRETERÍA', 'Serrucho', '10', '23/03/1997', 'Francia', ''),
('AR-32', 'FERRETERÍA', 'Llave Inglesa', '10', '23/04/1997', 'Usa', ''),
('AR-33', 'FERRETERÍA', 'Alicates', '5,613453055', '17/04/1997', 'Italia', ''),
('AR-34', 'FERRETERÍA', 'Martillo', '9,495991249', '04/09/1997', 'España', ''),
('AR-35', 'FERRETERÍA', 'Destornillador', '7,548712031', '20/02/1997', 'Francia', ''),
('AR-36', 'FERRETERÍA', 'Lima Grande', '10', '10/08/1997', 'España', ''),
('AR-37', 'FERRETERÍA', 'Juego de brocas', '10', '04/07/1997', 'Taiwán', ''),
('AR-40', 'JUGUETERÍA', 'Coche Teledirigido', '10', '26/05/1997', 'Marruecos', ''),
('AR-41', 'JUGUETERÍA', 'Correpasillos', '10', '11/04/1997', 'Japón', ''),
('AR-42', 'JUGUETERÍA', 'Consola Video', '10', '24/09/1997', 'Usa', ''),
('AR-43', 'JUGUETERÍA', 'Muñeca Andadora', '10', '04/10/1997', 'España', ''),
('AR-44', 'JUGUETERÍA', 'Fuerte de soldados', '10', '25/11/1997', 'Japón', ''),
('AR-45', 'JUGUETERÍA', 'Pistola con sonidos', '10', '15/02/1997', 'España', ''),
('AR-46', 'JUGUETERÍA', 'Pie de lámpara', '10', '27/05/1997', 'Turquía', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
