-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 26-05-2022 a las 19:53:27
-- Versión del servidor: 5.7.36
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `confid`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

DROP TABLE IF EXISTS `categorias`;
CREATE TABLE IF NOT EXISTS `categorias` (
  `idCategoria` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idCategoria`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`idCategoria`, `nombre`) VALUES
(1, 'Cámaras'),
(2, 'Control de Accesos'),
(3, 'Accesorios RFC'),
(4, 'Decodificadores'),
(5, 'Paneles Numéricos'),
(6, 'Soportes y Carcasas'),
(7, 'Detectores Volumétricos'),
(8, 'Servicios de monitoreo'),
(9, 'Servicios con implantación');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `alias` varchar(50) NOT NULL,
  `CIF` varchar(15) NOT NULL,
  `direccion` varchar(45) NOT NULL,
  `autonomo` tinyint(1) NOT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`idUsuario`, `alias`, `CIF`, `direccion`, `autonomo`) VALUES
(2, 'test', 'test', 'test', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallespedidos`
--

DROP TABLE IF EXISTS `detallespedidos`;
CREATE TABLE IF NOT EXISTS `detallespedidos` (
  `idPedido` int(11) NOT NULL,
  `idProducto` int(11) NOT NULL,
  `precioTotal` float DEFAULT '0',
  `idTransporte` int(11) DEFAULT NULL,
  `cantidad` int(5) DEFAULT NULL,
  PRIMARY KEY (`idPedido`,`idProducto`),
  KEY `fk_detalles_pedidos_Productos1_idx` (`idProducto`),
  KEY `fk_detallesPedidos_transporte1_idx` (`idTransporte`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detallespedidos`
--

INSERT INTO `detallespedidos` (`idPedido`, `idProducto`, `precioTotal`, `idTransporte`, `cantidad`) VALUES
(1, 9, 9.68, 3, 2),
(1, 42, 48.9, NULL, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

DROP TABLE IF EXISTS `pedidos`;
CREATE TABLE IF NOT EXISTS `pedidos` (
  `idPedido` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date DEFAULT NULL,
  `precioPedido` float DEFAULT NULL,
  `idUsuario` int(11) NOT NULL,
  `pedidoExterno` int(50) DEFAULT NULL,
  PRIMARY KEY (`idPedido`),
  KEY `fk_pedidos_usuarios1_idx` (`idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`idPedido`, `fecha`, `precioPedido`, `idUsuario`, `pedidoExterno`) VALUES
(1, '2022-05-26', 52.25, 2, NULL),
(2, '2022-05-25', 78.5, 2, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

DROP TABLE IF EXISTS `productos`;
CREATE TABLE IF NOT EXISTS `productos` (
  `idProductos` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `descripcion` varchar(1500) NOT NULL,
  `stock` int(11) NOT NULL,
  `precioIVA` float NOT NULL,
  `precioNoIVA` float NOT NULL,
  `idCategoria` int(11) NOT NULL,
  PRIMARY KEY (`idProductos`),
  KEY `fk_Productos_categorias1_idx` (`idCategoria`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idProductos`, `nombre`, `descripcion`, `stock`, `precioIVA`, `precioNoIVA`, `idCategoria`) VALUES
(1, 'ZEBRA AN480', 'AN480 Antenna: 1 Port, General Purpose, Wide-Band-Left, Pig-Tail, Left-Hand Circular Polarization, RoHS. (Worldwide)', 20, 148.04, 122.35, 2),
(2, 'FX7500 GEN2', 'FX7500 4-PORT GEN2 RFID READER. GLOBAL V', 20, 760.92, 628.86, 2),
(3, 'PROMAG ER750-755', 'Lector RFID ER750, Comunicación a través de Ethernet (RJ 45)', 20, 163.35, 135, 2),
(4, 'Lector grabador UHF', 'Lectores grabadores UHF de sobremesa con antena interna (alcance máximo 40 cm) que soportan tags Near Field, EPC y opcionalmente los englobados en la ISO18000-6-C.\nModelos con comunicación USB, Ethernet (PoE) y Ethernet (PoE) con leds de indicación de estado.', 20, 216.2, 178.67, 2),
(5, 'Ezviz C8C', 'Cámara exterior de paneo/inclinación. Con una rotación horizontal de 352 grados y una rotación vertical de 95 grados, el C8C te da una fácil visión general de todo lo que te rodea.', 20, 97.54, 80.61, 1),
(6, 'EZVIZ C6W', 'Graba todos los rincones con una resolución de 2K\nSeguimiento de movimiento con zoom automático, especialmente para movimientos humanos.True-WDR para imágenes realmente claras\nGrabación en la oscuridad\nCompresión de video H.265\nProtege tus datos y privacidad', 20, 79, 65.29, 1),
(7, 'Nivian CS140', 'Cámara de alta seguridad anti inhibidores Seguimiento de movimiento con zoom automático, especialmente para movimientos humanos. True-WDR para imágenes realmente claras\r\nGrabación en la oscuridad\r\nCompresión de video H.265\r\nProtege tus datos y privacidad.', 20, 445.75, 368.39, 1),
(8, 'Nivian NV', 'Cámara IP\n1/2.7\" Progressive CMOS\n5 Megapixel (2592 x 1944)\nLente 3.6 mm\n0 Lux\nR Alcance 30 m\nCompresión H.265/H.264\n3D-DNR\nRJ-45 10/100 BaseT', 20, 56, 46.28, 1),
(9, 'Anviz Facepass 7', 'El producto insignia de reconocimiento facial FacePass 7 lanzado por Anviz, basado en el nuevo diseño de tecnología infrarroja, que utiliza el algoritmo central BioNANO líder en el mundo, con un potente procesador y plataforma de computación de hardware, detección de rostros, identificación y empuje de eventos en tiempo real se puede implementar fácilmente. Puede realizar un reconocimiento facial preciso en diversos entornos.', 20, 250.65, 207.15, 2),
(10, 'Safescan Timemoto', 'El terminal TM-828 de TimeMoto combina el lector de proximidad RFID más reciente y la tecnología de huella dactilar con el software de gestión de horarios y presencia para uso único en PC o en el TimeMoto Cloud. Elija TimeMoto Cloud para una sincronización instantánea en toda su red desde cualquier ubicación en cualquier momento, haciendo que sea fácil para sus empleados fichar su entrada y salida y dándole herramientas para gestionar de forma eficiente a su personal.', 20, 664.29, 549, 2),
(11, 'VBESTLIFE ', 'Sistema de Control de Acceso de la Puerta Controlador de Acceso Lector de Tarjeta RFID IP68 Impermeable con Teclado Numérico', 20, 65.99, 54.54, 5),
(12, 'RS RPO 100', 'Sistema de Control de Acceso de la Puerta Controlador de Acceso Lector de Tarjeta RFID IP68 Impermeable con Teclado Numérico , 100 códigos , 1 puerta , 12V dc', 20, 88.77, 73.36, 5),
(13, 'RS RPO 1000', 'Sistema de Control de Acceso de la Puerta Controlador de Acceso Lector de Tarjeta RFID IP68 Impermeable con Teclado Numérico , 1000 códigos , 1 puerta , 12V dc', 20, 153.66, 126.99, 5),
(14, 'PA-2781', 'Cámara interior con rotación horizontal de 240 grados.  Seguimiento de movimiento con zoom automático, especialmente para movimientos humanos. Grabación en la oscuridad\nCompresión de video H.265\nProtege tus datos y privacidad', 20, 140.93, 116.47, 1),
(16, 'Anviz camera 6.4', 'Cámara interior con rotación horizontal de 180 grados.  Seguimiento de movimiento con zoom automático, especialmente para movimientos humanos. Grabación en la oscuridad. Protege tus datos y privacidad', 20, 111.73, 92.34, 1),
(17, 'Llavero circular', 'Llavero circular de plástico, configurable con tecnología RFC (Pack de 10)', 50, 2.42, 2, 3),
(18, 'Llavero lengua', 'Llavero trapezoidal de plástico, configurable con tecnología RFC (Pack de 10)', 50, 2.87, 2.37, 3),
(19, 'Llavero circular PVC', 'Llavero configurable con tecnología RFC (Pack de 10)', 50, 3.34, 2.76, 3),
(20, 'Tarj. Conf. RFC T1', 'Tarjeta configurable con tecnología RFC (Pack de 25)', 50, 3.36, 3, 3),
(21, 'Tarj. Conf. RFC T2', 'Tarjeta configurable con tecnología RFC (Pack de 25)', 50, 4.84, 4, 3),
(22, 'Tarj. Conf. RFC T3', 'Tarjeta configurable con tecnología RFC (Pack de 25)', 50, 6.05, 5, 3),
(23, 'LLAVERO-S50', 'Llavero proximidad pasiva MIFARE® 13,56 MHz.', 50, 2.93, 2.42, 3),
(24, 'SPD-151', 'Decodificador IP de 1 salida HDMI(4K), VGA y CVBS, hasta 48ch en la salida VGA/HDMI, máx 12Mpx, 200Mbps, H.265, 12Vdc/PoE.', 20, 87.4, 72.23, 4),
(25, 'DS-6904UDI(B)', 'Decodificador IP de 4 salidas de monitor HDMI y 2x BNC, capacidad máx 32ch, cámaras IP 12Mpx, H.265+, multi-división 25ch, 1 entrada vídeo VGA y DVI-I', 20, 110.76, 91.54, 4),
(26, 'DS-6910UDI(B)', 'Decodificador IP de 10 salidas de monitor HDMI y 5 BNC, capacidad máx 80ch, cámaras IP 12Mpx, H.265+, multi-división 36ch, 1 entrada vídeo VGA y DVI-I', 20, 128.78, 106.43, 4),
(27, 'DS-6912UDI(B)', 'Decodificador IP de 12 salidas de monitor HDMI y 6 BNC, capacidad máx 96ch, cámaras IP 12Mpx, H.265+, multi-división 36ch, 1 entrada vídeo VGA y DVI-I', 20, 152.87, 126.34, 4),
(28, 'HEG37K1A000', 'Carcasa de exterior de aluminio. 360 mm. Parasol. Calefactor 110/240Vac. F.A no incluida', 30, 38.05, 31.45, 6),
(29, 'HOT39D1A000', 'Carcasa PUNTO con calefactor a 115/230vac, sin parasol', 30, 23.81, 19.68, 6),
(30, 'NXWBS1', 'Soporte de pared para carcasa, de acero inoxidable', 30, 30.93, 25.56, 6),
(31, 'MPXCW', 'Soporte de esquina para Maximus en acero inox (AISI 316L). Compatible MPXWBA', 30, 39.13, 32.34, 6),
(32, 'WBOVA2', 'Soporte de carcasa, paso interno de cables, pared', 30, 23.4, 19.34, 6),
(33, 'CA-1W BRACKET', 'Soporte montaje pared multi-ángulo para todos nuestros sensores.', 30, 14.8, 12.23, 6),
(34, 'RA90', 'Soporte de techo para todos nuestros detectores.', 30, 17.35, 14.34, 6),
(35, 'DS-PD2-D15AME', 'Detector doble tecnología con AM. Alcance 15m. Grado 3.', 20, 58.49, 48.34, 7),
(36, 'RK107DTB000B', 'Detector de cortina exterior doble tecnología con antimasking. Incluye juego de rótulas', 20, 45.31, 37.45, 7),
(37, 'BXS-ST', 'Detector PIR 24 m exterior con área detección estrecha cableado.', 20, 64.67, 53.45, 7),
(38, 'PDM-I12', 'Detector infrarrojo pasivo volumétrico. Sensor dual. Grado 2.', 20, 81.75, 67.56, 7),
(39, 'VXI-CMOD', 'Módulo de cámara WiFi HD con vista panorámica para detectores de la gama VXI.', 20, 100.97, 83.45, 7),
(40, 'VXI-DAM', 'Detector VXI-DAM con módulo de cámara WiFi HD con vista panorámica VXI-CMOD.', 20, 105.79, 87.43, 7),
(41, 'Enterprise', '<p>Si ya tienes un sistema de seguridad implantado en tu empresa, pero quieres ahorrar tiempo de monitorizaci&oacute;n, revisi&oacute;n y mantenimiento, &iexcl;nosotros nos encargamos de todo eso!</p>\r\n<p><br />Caracter&iacute;sticas del servicio:</p>\r\n<ul>\r\n<li>Estudio preliminar del sistema. (Gratuito)</li>\r\n<li>Reestudio del sistema ante actualizaciones de elementos o Software. (Cargo adicional)</li>\r\n<li>Revisi&oacute;n f&iacute;sica rutinaria de los elementos. (Mensualmente)</li>\r\n<li>Revisi&oacute;n l&oacute;gica de los elementos de manera remota. (Semanalmente)</li>\r\n<li>Aplicaci&oacute;n web para consultas al registro de los accesos.</li>\r\n<li>Vista en tiempo real de las c&aacute;maras a trav&eacute;s de nuestra aplicaci&oacute;n web. (L&iacute;mite de 5 c&aacute;maras)</li>\r\n</ul>', 0, 0, 0, 8),
(42, 'Enterprise Pro', '<p>Servicio de monitoreo de un sistema ya implementado espec&iacute;fico para empresas de un mayor tama&ntilde;o. Nos encargamos de monitorear, revisar y mantener los dispositivos y vigilar la seguridad de los mismos.</p>\r\n<p><br />Caracter&iacute;sticas del servicio:</p>\r\n<ul>\r\n<li>Estudio preliminar del sistema. (Gratuito)</li>\r\n<li>Reestudio del sistema ante actualizaciones de elementos o Software. (Gratuito)</li>\r\n<li>Revisi&oacute;n f&iacute;sica rutinaria de los elementos. (Semanalmente)</li>\r\n<li>Revisi&oacute;n l&oacute;gica de los elementos de manera remota. (Dos d&iacute;as por semana)</li>\r\n<li>Aplicaci&oacute;n web para consultas de todo tipo de informaci&oacute;n recogida por su sistema.</li>\r\n<li>Vista en tiempo real de las c&aacute;maras a trav&eacute;s de nuestra aplicaci&oacute;n web. (L&iacute;mite de 12 c&aacute;maras)</li>\r\n<li>Almacenamiento extra en la nube para mantener copias de seguridad m&aacute;s longevas.</li>\r\n<li>Manejo de log&iacute;stica de logs del sistema.</li>\r\n</ul>', 0, 0, 0, 8),
(43, 'Personalizable', '<p style=\"text-align: justify;\">Si crees que nuestros servicios no se adaptan completamente a tu empresa, local, lugar de trabajo... Cont&aacute;ctanos y estudiaremos espec&iacute;ficamente tu caso para adaptarlo de la manera m&aacute;s personalizada. Nuestros expertos realizar&aacute;n un estudio preliminar de su sistema, evaluar&aacute;n tanto un sistema ya implementado, contando la posibilidad de realizarle modificaciones para mejorar la seguridad o incluso implantar uno nuevo desde cero.</p>', 0, 0, 0, 8),
(44, 'Local', '<p>Implementaci&oacute;n de un sistema simple que cuenta con hasta cinco c&aacute;maras, dos sistemas de control de acceso a elecci&oacute;n entre nuestros productos, un decodificador de gama baja y accesorios RFC gratuitos si fuesen necesarios para su sistema.</p>\r\n<p>Una vez implementado nos haremos cargo de monitorear, revisar y mantener los dispositivos aplicando nuestro servicio <a href=\"#42\">Enterprise Pro</a>. Ideal para oficinas y locales de peque&ntilde;o tama&ntilde;o o pocas salas.</p>', 0, 0, 0, 9),
(45, 'Office', '<p>Implementaci&oacute;n de un sistema avanzado que cuenta con hasta doce c&aacute;maras, cinco sistemas de control de acceso a elecci&oacute;n entre nuestros productos, accesorios RFC gratuitos si fuesen necesarios para su sistema y un decodificador de gama media, necesario para tener un equipo central desde el que poder controlar los dispositivos tanto dentro como fuera de la oficina.</p>\n<p>Una vez implementado nos haremos cargo de monitorear, revisar y mantener los dispositivos aplicando nuestro servicio <a href=\"#42\">Enterprise Pro</a>. Ideal para oficinas y locales de mayor tama&ntilde;o y salas.</p>', 0, 0, 0, 9),
(46, 'SpaceShip', '<p>Implementaci&oacute;n de un sistema profesional que cuenta con un m&iacute;nimo de veinte c&aacute;maras, ocho sistemas de control de acceso a elecci&oacute;n entre nuestros productos, accesorios RFC gratuitos y hasta tres decodificadores de gama alta, necesarios para tener diversos equipos centrales desde los que poder controlar los dispositivos tanto dentro como fuera de la oficina.</p>\r\n<p>Una vez implementado nos haremos cargo de monitorear, revisar y mantener los dispositivos aplicando nuestro servicio <a href=\"#42\">Enterprise Pro</a>. Ideal para grandes naves industriales y oficinas de gran tama&ntilde;o.</p>', 0, 0, 0, 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajadores`
--

DROP TABLE IF EXISTS `trabajadores`;
CREATE TABLE IF NOT EXISTS `trabajadores` (
  `idUsuario` int(11) NOT NULL,
  `numEseEse` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  PRIMARY KEY (`idUsuario`),
  UNIQUE KEY `idUsuario_UNIQUE` (`idUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `trabajadores`
--

INSERT INTO `trabajadores` (`idUsuario`, `numEseEse`, `apellido`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transporte`
--

DROP TABLE IF EXISTS `transporte`;
CREATE TABLE IF NOT EXISTS `transporte` (
  `idTransporte` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `CIF` varchar(15) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  PRIMARY KEY (`idTransporte`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `transporte`
--

INSERT INTO `transporte` (`idTransporte`, `nombre`, `CIF`, `telefono`) VALUES
(1, 'Dachser S.A.', 'A20006607', 916606500),
(2, 'Seitrans S.A.', 'A59034777', 935730099),
(3, 'DSV S.A.', 'A64885544', 931807400),
(4, 'SEUR S.A.', 'A28985992', 927629063);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(45) NOT NULL,
  `passwd` varchar(45) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `usuario`, `passwd`, `nombre`, `email`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'info@confid.es'),
(2, 'test', '098f6bcd4621d373cade4e832627b4f6', 'test', 'test@test.com');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `fk_clientes_usuarios1` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`) ON DELETE CASCADE;

--
-- Filtros para la tabla `detallespedidos`
--
ALTER TABLE `detallespedidos`
  ADD CONSTRAINT `fk_detallesPedidos_transporte1` FOREIGN KEY (`idTransporte`) REFERENCES `transporte` (`idTransporte`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_detalles_pedidos_Productos1` FOREIGN KEY (`idProducto`) REFERENCES `productos` (`idProductos`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_detalles_pedidos_pedidos1` FOREIGN KEY (`idPedido`) REFERENCES `pedidos` (`idPedido`) ON DELETE CASCADE;

--
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `fk_pedidos_usuarios1` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`) ON DELETE CASCADE;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `fk_Productos_categorias1` FOREIGN KEY (`idCategoria`) REFERENCES `categorias` (`idCategoria`) ON DELETE CASCADE;

--
-- Filtros para la tabla `trabajadores`
--
ALTER TABLE `trabajadores`
  ADD CONSTRAINT `fk_trabajadores_usuarios1` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
