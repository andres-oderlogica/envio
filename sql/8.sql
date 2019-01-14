-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-01-2019 a las 01:11:57
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_envios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE `ciudad` (
  `id_ciudad` int(11) NOT NULL,
  `cod_departamento` int(11) DEFAULT NULL,
  `descripcion_ciudad` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ciudad`
--

INSERT INTO `ciudad` (`id_ciudad`, `cod_departamento`, `descripcion_ciudad`) VALUES
(1, 1, 'Leticia'),
(2, 1, 'Puerto Nariño'),
(3, 2, 'Abejorral'),
(4, 2, 'Abriaquí'),
(5, 2, 'Alejandria'),
(6, 2, 'Amagá'),
(7, 2, 'Amalfi'),
(8, 2, 'Andes'),
(9, 2, 'Angelópolis'),
(10, 2, 'Angostura'),
(11, 2, 'Anorí'),
(12, 2, 'Anzá'),
(13, 2, 'Apartadó'),
(14, 2, 'Arboletes'),
(15, 2, 'Argelia'),
(16, 2, 'Armenia'),
(17, 2, 'Barbosa'),
(18, 2, 'Bello'),
(19, 2, 'Belmira'),
(20, 2, 'Betania'),
(21, 2, 'Betulia'),
(22, 2, 'Bolívar'),
(23, 2, 'Briceño'),
(24, 2, 'Burítica'),
(25, 2, 'Caicedo'),
(26, 2, 'Caldas'),
(27, 2, 'Campamento'),
(28, 2, 'Caracolí'),
(29, 2, 'Caramanta'),
(30, 2, 'Carepa'),
(31, 2, 'Carmen de Viboral'),
(32, 2, 'Carolina'),
(33, 2, 'Caucasia'),
(34, 2, 'Cañasgordas'),
(35, 2, 'Chigorodó'),
(36, 2, 'Cisneros'),
(37, 2, 'Cocorná'),
(38, 2, 'Concepción'),
(39, 2, 'Concordia'),
(40, 2, 'Copacabana'),
(41, 2, 'Cáceres'),
(42, 2, 'Dabeiba'),
(43, 2, 'Don Matías'),
(44, 2, 'Ebéjico'),
(45, 2, 'El Bagre'),
(46, 2, 'Entrerríos'),
(47, 2, 'Envigado'),
(48, 2, 'Fredonia'),
(49, 2, 'Frontino'),
(50, 2, 'Giraldo'),
(51, 2, 'Girardota'),
(52, 2, 'Granada'),
(53, 2, 'Guadalupe'),
(54, 2, 'Guarne'),
(55, 2, 'Guatapé'),
(56, 2, 'Gómez Plata'),
(57, 2, 'Heliconia'),
(58, 2, 'Hispania'),
(59, 2, 'Itagüí'),
(60, 2, 'Ituango'),
(61, 2, 'Jardín'),
(62, 2, 'Jericó'),
(63, 2, 'La Ceja'),
(64, 2, 'La Estrella'),
(65, 2, 'La Pintada'),
(66, 2, 'La Unión'),
(67, 2, 'Liborina'),
(68, 2, 'Maceo'),
(69, 2, 'Marinilla'),
(70, 2, 'Medellín'),
(71, 2, 'Montebello'),
(72, 2, 'Murindó'),
(73, 2, 'Mutatá'),
(74, 2, 'Nariño'),
(75, 2, 'Nechí'),
(76, 2, 'Necoclí'),
(77, 2, 'Olaya'),
(78, 2, 'Peque'),
(79, 2, 'Peñol'),
(80, 2, 'Pueblorrico'),
(81, 2, 'Puerto Berrío'),
(82, 2, 'Puerto Nare'),
(83, 2, 'Puerto Triunfo'),
(84, 2, 'Remedios'),
(85, 2, 'Retiro'),
(86, 2, 'Ríonegro'),
(87, 2, 'Sabanalarga'),
(88, 2, 'Sabaneta'),
(89, 2, 'Salgar'),
(90, 2, 'San Andrés de Cuerquía'),
(91, 2, 'San Carlos'),
(92, 2, 'San Francisco'),
(93, 2, 'San Jerónimo'),
(94, 2, 'San José de Montaña'),
(95, 2, 'San Juan de Urabá'),
(96, 2, 'San Luís'),
(97, 2, 'San Pedro'),
(98, 2, 'San Pedro de Urabá'),
(99, 2, 'San Rafael'),
(100, 2, 'San Roque'),
(101, 2, 'San Vicente'),
(102, 2, 'Santa Bárbara'),
(103, 2, 'Santa Fé de Antioquia'),
(104, 2, 'Santa Rosa de Osos'),
(105, 2, 'Santo Domingo'),
(106, 2, 'Santuario'),
(107, 2, 'Segovia'),
(108, 2, 'Sonsón'),
(109, 2, 'Sopetrán'),
(110, 2, 'Tarazá'),
(111, 2, 'Tarso'),
(112, 2, 'Titiribí'),
(113, 2, 'Toledo'),
(114, 2, 'Turbo'),
(115, 2, 'Támesis'),
(116, 2, 'Uramita'),
(117, 2, 'Urrao'),
(118, 2, 'Valdivia'),
(119, 2, 'Valparaiso'),
(120, 2, 'Vegachí'),
(121, 2, 'Venecia'),
(122, 2, 'Vigía del Fuerte'),
(123, 2, 'Yalí'),
(124, 2, 'Yarumal'),
(125, 2, 'Yolombó'),
(126, 2, 'Yondó (Casabe)'),
(127, 2, 'Zaragoza'),
(128, 3, 'Arauca'),
(129, 3, 'Arauquita'),
(130, 3, 'Cravo Norte'),
(131, 3, 'Fortúl'),
(132, 3, 'Puerto Rondón'),
(133, 3, 'Saravena'),
(134, 3, 'Tame'),
(135, 4, 'Baranoa'),
(136, 4, 'Barranquilla'),
(137, 4, 'Campo de la Cruz'),
(138, 4, 'Candelaria'),
(139, 4, 'Galapa'),
(140, 4, 'Juan de Acosta'),
(141, 4, 'Luruaco'),
(142, 4, 'Malambo'),
(143, 4, 'Manatí'),
(144, 4, 'Palmar de Varela'),
(145, 4, 'Piojo'),
(146, 4, 'Polonuevo'),
(147, 4, 'Ponedera'),
(148, 4, 'Puerto Colombia'),
(149, 4, 'Repelón'),
(150, 4, 'Sabanagrande'),
(151, 4, 'Sabanalarga'),
(152, 4, 'Santa Lucía'),
(153, 4, 'Santo Tomás'),
(154, 4, 'Soledad'),
(155, 4, 'Suan'),
(156, 4, 'Tubará'),
(157, 4, 'Usiacuri'),
(158, 5, 'Achí'),
(159, 5, 'Altos del Rosario'),
(160, 5, 'Arenal'),
(161, 5, 'Arjona'),
(162, 5, 'Arroyohondo'),
(163, 5, 'Barranco de Loba'),
(164, 5, 'Calamar'),
(165, 5, 'Cantagallo'),
(166, 5, 'Cartagena'),
(167, 5, 'Cicuco'),
(168, 5, 'Clemencia'),
(169, 5, 'Córdoba'),
(170, 5, 'El Carmen de Bolívar'),
(171, 5, 'El Guamo'),
(172, 5, 'El Peñon'),
(173, 5, 'Hatillo de Loba'),
(174, 5, 'Magangué'),
(175, 5, 'Mahates'),
(176, 5, 'Margarita'),
(177, 5, 'María la Baja'),
(178, 5, 'Mompós'),
(179, 5, 'Montecristo'),
(180, 5, 'Morales'),
(181, 5, 'Norosí'),
(182, 5, 'Pinillos'),
(183, 5, 'Regidor'),
(184, 5, 'Río Viejo'),
(185, 5, 'San Cristobal'),
(186, 5, 'San Estanislao'),
(187, 5, 'San Fernando'),
(188, 5, 'San Jacinto'),
(189, 5, 'San Jacinto del Cauca'),
(190, 5, 'San Juan de Nepomuceno'),
(191, 5, 'San Martín de Loba'),
(192, 5, 'San Pablo'),
(193, 5, 'Santa Catalina'),
(194, 5, 'Santa Rosa '),
(195, 5, 'Santa Rosa del Sur'),
(196, 5, 'Simití'),
(197, 5, 'Soplaviento'),
(198, 5, 'Talaigua Nuevo'),
(199, 5, 'Tiquisio (Puerto Rico)'),
(200, 5, 'Turbaco'),
(201, 5, 'Turbaná'),
(202, 5, 'Villanueva'),
(203, 5, 'Zambrano'),
(204, 6, 'Almeida'),
(205, 6, 'Aquitania'),
(206, 6, 'Arcabuco'),
(207, 6, 'Belén'),
(208, 6, 'Berbeo'),
(209, 6, 'Beteitiva'),
(210, 6, 'Boavita'),
(211, 6, 'Boyacá'),
(212, 6, 'Briceño'),
(213, 6, 'Buenavista'),
(214, 6, 'Busbanza'),
(215, 6, 'Caldas'),
(216, 6, 'Campohermoso'),
(217, 6, 'Cerinza'),
(218, 6, 'Chinavita'),
(219, 6, 'Chiquinquirá'),
(220, 6, 'Chiscas'),
(221, 6, 'Chita'),
(222, 6, 'Chitaraque'),
(223, 6, 'Chivatá'),
(224, 6, 'Chíquiza'),
(225, 6, 'Chívor'),
(226, 6, 'Ciénaga'),
(227, 6, 'Coper'),
(228, 6, 'Corrales'),
(229, 6, 'Covarachía'),
(230, 6, 'Cubará'),
(231, 6, 'Cucaita'),
(232, 6, 'Cuitiva'),
(233, 6, 'Cómbita'),
(234, 6, 'Duitama'),
(235, 6, 'El Cocuy'),
(236, 6, 'El Espino'),
(237, 6, 'Firavitoba'),
(238, 6, 'Floresta'),
(239, 6, 'Gachantivá'),
(240, 6, 'Garagoa'),
(241, 6, 'Guacamayas'),
(242, 6, 'Guateque'),
(243, 6, 'Guayatá'),
(244, 6, 'Guicán'),
(245, 6, 'Gámeza'),
(246, 6, 'Izá'),
(247, 6, 'Jenesano'),
(248, 6, 'Jericó'),
(249, 6, 'La Capilla'),
(250, 6, 'La Uvita'),
(251, 6, 'La Victoria'),
(252, 6, 'Labranzagrande'),
(253, 6, 'Macanal'),
(254, 6, 'Maripí'),
(255, 6, 'Miraflores'),
(256, 6, 'Mongua'),
(257, 6, 'Monguí'),
(258, 6, 'Moniquirá'),
(259, 6, 'Motavita'),
(260, 6, 'Muzo'),
(261, 6, 'Nobsa'),
(262, 6, 'Nuevo Colón'),
(263, 6, 'Oicatá'),
(264, 6, 'Otanche'),
(265, 6, 'Pachavita'),
(266, 6, 'Paipa'),
(267, 6, 'Pajarito'),
(268, 6, 'Panqueba'),
(269, 6, 'Pauna'),
(270, 6, 'Paya'),
(271, 6, 'Paz de Río'),
(272, 6, 'Pesca'),
(273, 6, 'Pisva'),
(274, 6, 'Puerto Boyacá'),
(275, 6, 'Páez'),
(276, 6, 'Quipama'),
(277, 6, 'Ramiriquí'),
(278, 6, 'Rondón'),
(279, 6, 'Ráquira'),
(280, 6, 'Saboyá'),
(281, 6, 'Samacá'),
(282, 6, 'San Eduardo'),
(283, 6, 'San José de Pare'),
(284, 6, 'San Luís de Gaceno'),
(285, 6, 'San Mateo'),
(286, 6, 'San Miguel de Sema'),
(287, 6, 'San Pablo de Borbur'),
(288, 6, 'Santa María'),
(289, 6, 'Santa Rosa de Viterbo'),
(290, 6, 'Santa Sofía'),
(291, 6, 'Santana'),
(292, 6, 'Sativanorte'),
(293, 6, 'Sativasur'),
(294, 6, 'Siachoque'),
(295, 6, 'Soatá'),
(296, 6, 'Socha'),
(297, 6, 'Socotá'),
(298, 6, 'Sogamoso'),
(299, 6, 'Somondoco'),
(300, 6, 'Sora'),
(301, 6, 'Soracá'),
(302, 6, 'Sotaquirá'),
(303, 6, 'Susacón'),
(304, 6, 'Sutamarchán'),
(305, 6, 'Sutatenza'),
(306, 6, 'Sáchica'),
(307, 6, 'Tasco'),
(308, 6, 'Tenza'),
(309, 6, 'Tibaná'),
(310, 6, 'Tibasosa'),
(311, 6, 'Tinjacá'),
(312, 6, 'Tipacoque'),
(313, 6, 'Toca'),
(314, 6, 'Toguí'),
(315, 6, 'Topagá'),
(316, 6, 'Tota'),
(317, 6, 'Tunja'),
(318, 6, 'Tunungua'),
(319, 6, 'Turmequé'),
(320, 6, 'Tuta'),
(321, 6, 'Tutasá'),
(322, 6, 'Ventaquemada'),
(323, 6, 'Villa de Leiva'),
(324, 6, 'Viracachá'),
(325, 6, 'Zetaquirá'),
(326, 6, 'Úmbita'),
(327, 7, 'Aguadas'),
(328, 7, 'Anserma'),
(329, 7, 'Aranzazu'),
(330, 7, 'Belalcázar'),
(331, 7, 'Chinchiná'),
(332, 7, 'Filadelfia'),
(333, 7, 'La Dorada'),
(334, 7, 'La Merced'),
(335, 7, 'La Victoria'),
(336, 7, 'Manizales'),
(337, 7, 'Manzanares'),
(338, 7, 'Marmato'),
(339, 7, 'Marquetalia'),
(340, 7, 'Marulanda'),
(341, 7, 'Neira'),
(342, 7, 'Norcasia'),
(343, 7, 'Palestina'),
(344, 7, 'Pensilvania'),
(345, 7, 'Pácora'),
(346, 7, 'Risaralda'),
(347, 7, 'Río Sucio'),
(348, 7, 'Salamina'),
(349, 7, 'Samaná'),
(350, 7, 'San José'),
(351, 7, 'Supía'),
(352, 7, 'Villamaría'),
(353, 7, 'Viterbo'),
(354, 8, 'Albania'),
(355, 8, 'Belén de los Andaquíes'),
(356, 8, 'Cartagena del Chairá'),
(357, 8, 'Curillo'),
(358, 8, 'El Doncello'),
(359, 8, 'El Paujil'),
(360, 8, 'Florencia'),
(361, 8, 'La Montañita'),
(362, 8, 'Milán'),
(363, 8, 'Morelia'),
(364, 8, 'Puerto Rico'),
(365, 8, 'San José del Fragua'),
(366, 8, 'San Vicente del Caguán'),
(367, 8, 'Solano'),
(368, 8, 'Solita'),
(369, 8, 'Valparaiso'),
(370, 9, 'Aguazul'),
(371, 9, 'Chámeza'),
(372, 9, 'Hato Corozal'),
(373, 9, 'La Salina'),
(374, 9, 'Maní'),
(375, 9, 'Monterrey'),
(376, 9, 'Nunchía'),
(377, 9, 'Orocué'),
(378, 9, 'Paz de Ariporo'),
(379, 9, 'Pore'),
(380, 9, 'Recetor'),
(381, 9, 'Sabanalarga'),
(382, 9, 'San Luís de Palenque'),
(383, 9, 'Sácama'),
(384, 9, 'Tauramena'),
(385, 9, 'Trinidad'),
(386, 9, 'Támara'),
(387, 9, 'Villanueva'),
(388, 9, 'Yopal'),
(389, 10, 'Almaguer'),
(390, 10, 'Argelia'),
(391, 10, 'Balboa'),
(392, 10, 'Bolívar'),
(393, 10, 'Buenos Aires'),
(394, 10, 'Cajibío'),
(395, 10, 'Caldono'),
(396, 10, 'Caloto'),
(397, 10, 'Corinto'),
(398, 10, 'El Tambo'),
(399, 10, 'Florencia'),
(400, 10, 'Guachené'),
(401, 10, 'Guapí'),
(402, 10, 'Inzá'),
(403, 10, 'Jambaló'),
(404, 10, 'La Sierra'),
(405, 10, 'La Vega'),
(406, 10, 'López (Micay)'),
(407, 10, 'Mercaderes'),
(408, 10, 'Miranda'),
(409, 10, 'Morales'),
(410, 10, 'Padilla'),
(411, 10, 'Patía (El Bordo)'),
(412, 10, 'Piamonte'),
(413, 10, 'Piendamó'),
(414, 10, 'Popayán'),
(415, 10, 'Puerto Tejada'),
(416, 10, 'Puracé (Coconuco)'),
(417, 10, 'Páez (Belalcazar)'),
(418, 10, 'Rosas'),
(419, 10, 'San Sebastián'),
(420, 10, 'Santa Rosa'),
(421, 10, 'Santander de Quilichao'),
(422, 10, 'Silvia'),
(423, 10, 'Sotara (Paispamba)'),
(424, 10, 'Sucre'),
(425, 10, 'Suárez'),
(426, 10, 'Timbiquí'),
(427, 10, 'Timbío'),
(428, 10, 'Toribío'),
(429, 10, 'Totoró'),
(430, 10, 'Villa Rica'),
(431, 11, 'Aguachica'),
(432, 11, 'Agustín Codazzi'),
(433, 11, 'Astrea'),
(434, 11, 'Becerríl'),
(435, 11, 'Bosconia'),
(436, 11, 'Chimichagua'),
(437, 11, 'Chiriguaná'),
(438, 11, 'Curumaní'),
(439, 11, 'El Copey'),
(440, 11, 'El Paso'),
(441, 11, 'Gamarra'),
(442, 11, 'Gonzalez'),
(443, 11, 'La Gloria'),
(444, 11, 'La Jagua de Ibirico'),
(445, 11, 'La Paz (Robles)'),
(446, 11, 'Manaure Balcón del Cesar'),
(447, 11, 'Pailitas'),
(448, 11, 'Pelaya'),
(449, 11, 'Pueblo Bello'),
(450, 11, 'Río de oro'),
(451, 11, 'San Alberto'),
(452, 11, 'San Diego'),
(453, 11, 'San Martín'),
(454, 11, 'Tamalameque'),
(455, 11, 'Valledupar'),
(456, 12, 'Acandí'),
(457, 12, 'Alto Baudó (Pie de Pato)'),
(458, 12, 'Atrato (Yuto)'),
(459, 12, 'Bagadó'),
(460, 12, 'Bahía Solano (Mútis)'),
(461, 12, 'Bajo Baudó (Pizarro)'),
(462, 12, 'Belén de Bajirá'),
(463, 12, 'Bojayá (Bellavista)'),
(464, 12, 'Cantón de San Pablo'),
(465, 12, 'Carmen del Darién (CURBARADÓ)'),
(466, 12, 'Condoto'),
(467, 12, 'Cértegui'),
(468, 12, 'El Carmen de Atrato'),
(469, 12, 'Istmina'),
(470, 12, 'Juradó'),
(471, 12, 'Lloró'),
(472, 12, 'Medio Atrato'),
(473, 12, 'Medio Baudó'),
(474, 12, 'Medio San Juan (ANDAGOYA)'),
(475, 12, 'Novita'),
(476, 12, 'Nuquí'),
(477, 12, 'Quibdó'),
(478, 12, 'Río Iró'),
(479, 12, 'Río Quito'),
(480, 12, 'Ríosucio'),
(481, 12, 'San José del Palmar'),
(482, 12, 'Santa Genoveva de Docorodó'),
(483, 12, 'Sipí'),
(484, 12, 'Tadó'),
(485, 12, 'Unguía'),
(486, 12, 'Unión Panamericana (ÁNIMAS)'),
(487, 13, 'Ayapel'),
(488, 13, 'Buenavista'),
(489, 13, 'Canalete'),
(490, 13, 'Cereté'),
(491, 13, 'Chimá'),
(492, 13, 'Chinú'),
(493, 13, 'Ciénaga de Oro'),
(494, 13, 'Cotorra'),
(495, 13, 'La Apartada y La Frontera'),
(496, 13, 'Lorica'),
(497, 13, 'Los Córdobas'),
(498, 13, 'Momil'),
(499, 13, 'Montelíbano'),
(500, 13, 'Monteria'),
(501, 13, 'Moñitos'),
(502, 13, 'Planeta Rica'),
(503, 13, 'Pueblo Nuevo'),
(504, 13, 'Puerto Escondido'),
(505, 13, 'Puerto Libertador'),
(506, 13, 'Purísima'),
(507, 13, 'Sahagún'),
(508, 13, 'San Andrés Sotavento'),
(509, 13, 'San Antero'),
(510, 13, 'San Bernardo del Viento'),
(511, 13, 'San Carlos'),
(512, 13, 'San José de Uré'),
(513, 13, 'San Pelayo'),
(514, 13, 'Tierralta'),
(515, 13, 'Tuchín'),
(516, 13, 'Valencia'),
(517, 14, 'Agua de Dios'),
(518, 14, 'Albán'),
(519, 14, 'Anapoima'),
(520, 14, 'Anolaima'),
(521, 14, 'Apulo'),
(522, 14, 'Arbeláez'),
(523, 14, 'Beltrán'),
(524, 14, 'Bituima'),
(525, 14, 'Bogotá D.C.'),
(526, 14, 'Bojacá'),
(527, 14, 'Cabrera'),
(528, 14, 'Cachipay'),
(529, 14, 'Cajicá'),
(530, 14, 'Caparrapí'),
(531, 14, 'Carmen de Carupa'),
(532, 14, 'Chaguaní'),
(533, 14, 'Chipaque'),
(534, 14, 'Choachí'),
(535, 14, 'Chocontá'),
(536, 14, 'Chía'),
(537, 14, 'Cogua'),
(538, 14, 'Cota'),
(539, 14, 'Cucunubá'),
(540, 14, 'Cáqueza'),
(541, 14, 'El Colegio'),
(542, 14, 'El Peñón'),
(543, 14, 'El Rosal'),
(544, 14, 'Facatativá'),
(545, 14, 'Fosca'),
(546, 14, 'Funza'),
(547, 14, 'Fusagasugá'),
(548, 14, 'Fómeque'),
(549, 14, 'Fúquene'),
(550, 14, 'Gachalá'),
(551, 14, 'Gachancipá'),
(552, 14, 'Gachetá'),
(553, 14, 'Gama'),
(554, 14, 'Girardot'),
(555, 14, 'Granada'),
(556, 14, 'Guachetá'),
(557, 14, 'Guaduas'),
(558, 14, 'Guasca'),
(559, 14, 'Guataquí'),
(560, 14, 'Guatavita'),
(561, 14, 'Guayabal de Siquima'),
(562, 14, 'Guayabetal'),
(563, 14, 'Gutiérrez'),
(564, 14, 'Jerusalén'),
(565, 14, 'Junín'),
(566, 14, 'La Calera'),
(567, 14, 'La Mesa'),
(568, 14, 'La Palma'),
(569, 14, 'La Peña'),
(570, 14, 'La Vega'),
(571, 14, 'Lenguazaque'),
(572, 14, 'Machetá'),
(573, 14, 'Madrid'),
(574, 14, 'Manta'),
(575, 14, 'Medina'),
(576, 14, 'Mosquera'),
(577, 14, 'Nariño'),
(578, 14, 'Nemocón'),
(579, 14, 'Nilo'),
(580, 14, 'Nimaima'),
(581, 14, 'Nocaima'),
(582, 14, 'Pacho'),
(583, 14, 'Paime'),
(584, 14, 'Pandi'),
(585, 14, 'Paratebueno'),
(586, 14, 'Pasca'),
(587, 14, 'Puerto Salgar'),
(588, 14, 'Pulí'),
(589, 14, 'Quebradanegra'),
(590, 14, 'Quetame'),
(591, 14, 'Quipile'),
(592, 14, 'Ricaurte'),
(593, 14, 'San Antonio de Tequendama'),
(594, 14, 'San Bernardo'),
(595, 14, 'San Cayetano'),
(596, 14, 'San Francisco'),
(597, 14, 'San Juan de Río Seco'),
(598, 14, 'Sasaima'),
(599, 14, 'Sesquilé'),
(600, 14, 'Sibaté'),
(601, 14, 'Silvania'),
(602, 14, 'Simijaca'),
(603, 14, 'Soacha'),
(604, 14, 'Sopó'),
(605, 14, 'Subachoque'),
(606, 14, 'Suesca'),
(607, 14, 'Supatá'),
(608, 14, 'Susa'),
(609, 14, 'Sutatausa'),
(610, 14, 'Tabio'),
(611, 14, 'Tausa'),
(612, 14, 'Tena'),
(613, 14, 'Tenjo'),
(614, 14, 'Tibacuy'),
(615, 14, 'Tibirita'),
(616, 14, 'Tocaima'),
(617, 14, 'Tocancipá'),
(618, 14, 'Topaipí'),
(619, 14, 'Ubalá'),
(620, 14, 'Ubaque'),
(621, 14, 'Ubaté'),
(622, 14, 'Une'),
(623, 14, 'Venecia (Ospina Pérez)'),
(624, 14, 'Vergara'),
(625, 14, 'Viani'),
(626, 14, 'Villagómez'),
(627, 14, 'Villapinzón'),
(628, 14, 'Villeta'),
(629, 14, 'Viotá'),
(630, 14, 'Yacopí'),
(631, 14, 'Zipacón'),
(632, 14, 'Zipaquirá'),
(633, 14, 'Útica'),
(634, 15, 'Inírida'),
(635, 16, 'Calamar'),
(636, 16, 'El Retorno'),
(637, 16, 'Miraflores'),
(638, 16, 'San José del Guaviare'),
(639, 17, 'Acevedo'),
(640, 17, 'Agrado'),
(641, 17, 'Aipe'),
(642, 17, 'Algeciras'),
(643, 17, 'Altamira'),
(644, 17, 'Baraya'),
(645, 17, 'Campoalegre'),
(646, 17, 'Colombia'),
(647, 17, 'Elías'),
(648, 17, 'Garzón'),
(649, 17, 'Gigante'),
(650, 17, 'Guadalupe'),
(651, 17, 'Hobo'),
(652, 17, 'Isnos'),
(653, 17, 'La Argentina'),
(654, 17, 'La Plata'),
(655, 17, 'Neiva'),
(656, 17, 'Nátaga'),
(657, 17, 'Oporapa'),
(658, 17, 'Paicol'),
(659, 17, 'Palermo'),
(660, 17, 'Palestina'),
(661, 17, 'Pital'),
(662, 17, 'Pitalito'),
(663, 17, 'Rivera'),
(664, 17, 'Saladoblanco'),
(665, 17, 'San Agustín'),
(666, 17, 'Santa María'),
(667, 17, 'Suaza'),
(668, 17, 'Tarqui'),
(669, 17, 'Tello'),
(670, 17, 'Teruel'),
(671, 17, 'Tesalia'),
(672, 17, 'Timaná'),
(673, 17, 'Villavieja'),
(674, 17, 'Yaguará'),
(675, 17, 'Íquira'),
(676, 18, 'Albania'),
(677, 18, 'Barrancas'),
(678, 18, 'Dibulla'),
(679, 18, 'Distracción'),
(680, 18, 'El Molino'),
(681, 18, 'Fonseca'),
(682, 18, 'Hatonuevo'),
(683, 18, 'La Jagua del Pilar'),
(684, 18, 'Maicao'),
(685, 18, 'Manaure'),
(686, 18, 'Riohacha'),
(687, 18, 'San Juan del Cesar'),
(688, 18, 'Uribia'),
(689, 18, 'Urumita'),
(690, 18, 'Villanueva'),
(691, 19, 'Algarrobo'),
(692, 19, 'Aracataca'),
(693, 19, 'Ariguaní (El Difícil)'),
(694, 19, 'Cerro San Antonio'),
(695, 19, 'Chivolo'),
(696, 19, 'Ciénaga'),
(697, 19, 'Concordia'),
(698, 19, 'El Banco'),
(699, 19, 'El Piñon'),
(700, 19, 'El Retén'),
(701, 19, 'Fundación'),
(702, 19, 'Guamal'),
(703, 19, 'Nueva Granada'),
(704, 19, 'Pedraza'),
(705, 19, 'Pijiño'),
(706, 19, 'Pivijay'),
(707, 19, 'Plato'),
(708, 19, 'Puebloviejo'),
(709, 19, 'Remolino'),
(710, 19, 'Sabanas de San Angel (SAN ANGEL)'),
(711, 19, 'Salamina'),
(712, 19, 'San Sebastián de Buenavista'),
(713, 19, 'San Zenón'),
(714, 19, 'Santa Ana'),
(715, 19, 'Santa Bárbara de Pinto'),
(716, 19, 'Santa Marta'),
(717, 19, 'Sitionuevo'),
(718, 19, 'Tenerife'),
(719, 19, 'Zapayán (PUNTA DE PIEDRAS)'),
(720, 19, 'Zona Bananera (PRADO - SEVILLA)'),
(721, 20, 'Acacías'),
(722, 20, 'Barranca de Upía'),
(723, 20, 'Cabuyaro'),
(724, 20, 'Castilla la Nueva'),
(725, 20, 'Cubarral'),
(726, 20, 'Cumaral'),
(727, 20, 'El Calvario'),
(728, 20, 'El Castillo'),
(729, 20, 'El Dorado'),
(730, 20, 'Fuente de Oro'),
(731, 20, 'Granada'),
(732, 20, 'Guamal'),
(733, 20, 'La Macarena'),
(734, 20, 'Lejanías'),
(735, 20, 'Mapiripan'),
(736, 20, 'Mesetas'),
(737, 20, 'Puerto Concordia'),
(738, 20, 'Puerto Gaitán'),
(739, 20, 'Puerto Lleras'),
(740, 20, 'Puerto López'),
(741, 20, 'Puerto Rico'),
(742, 20, 'Restrepo'),
(743, 20, 'San Carlos de Guaroa'),
(744, 20, 'San Juan de Arama'),
(745, 20, 'San Juanito'),
(746, 20, 'San Martín'),
(747, 20, 'Uribe'),
(748, 20, 'Villavicencio'),
(749, 20, 'Vista Hermosa'),
(750, 21, 'Albán (San José)'),
(751, 21, 'Aldana'),
(752, 21, 'Ancuya'),
(753, 21, 'Arboleda (Berruecos)'),
(754, 21, 'Barbacoas'),
(755, 21, 'Belén'),
(756, 21, 'Buesaco'),
(757, 21, 'Chachaguí'),
(758, 21, 'Colón (Génova)'),
(759, 21, 'Consaca'),
(760, 21, 'Contadero'),
(761, 21, 'Cuaspud (Carlosama)'),
(762, 21, 'Cumbal'),
(763, 21, 'Cumbitara'),
(764, 21, 'Córdoba'),
(765, 21, 'El Charco'),
(766, 21, 'El Peñol'),
(767, 21, 'El Rosario'),
(768, 21, 'El Tablón de Gómez'),
(769, 21, 'El Tambo'),
(770, 21, 'Francisco Pizarro'),
(771, 21, 'Funes'),
(772, 21, 'Guachavés'),
(773, 21, 'Guachucal'),
(774, 21, 'Guaitarilla'),
(775, 21, 'Gualmatán'),
(776, 21, 'Iles'),
(777, 21, 'Imúes'),
(778, 21, 'Ipiales'),
(779, 21, 'La Cruz'),
(780, 21, 'La Florida'),
(781, 21, 'La Llanada'),
(782, 21, 'La Tola'),
(783, 21, 'La Unión'),
(784, 21, 'Leiva'),
(785, 21, 'Linares'),
(786, 21, 'Magüi (Payán)'),
(787, 21, 'Mallama (Piedrancha)'),
(788, 21, 'Mosquera'),
(789, 21, 'Nariño'),
(790, 21, 'Olaya Herrera'),
(791, 21, 'Ospina'),
(792, 21, 'Policarpa'),
(793, 21, 'Potosí'),
(794, 21, 'Providencia'),
(795, 21, 'Puerres'),
(796, 21, 'Pupiales'),
(797, 21, 'Ricaurte'),
(798, 21, 'Roberto Payán (San José)'),
(799, 21, 'Samaniego'),
(800, 21, 'San Bernardo'),
(801, 21, 'San Juan de Pasto'),
(802, 21, 'San Lorenzo'),
(803, 21, 'San Pablo'),
(804, 21, 'San Pedro de Cartago'),
(805, 21, 'Sandoná'),
(806, 21, 'Santa Bárbara (Iscuandé)'),
(807, 21, 'Sapuyes'),
(808, 21, 'Sotomayor (Los Andes)'),
(809, 21, 'Taminango'),
(810, 21, 'Tangua'),
(811, 21, 'Tumaco'),
(812, 21, 'Túquerres'),
(813, 21, 'Yacuanquer'),
(814, 22, 'Arboledas'),
(815, 22, 'Bochalema'),
(816, 22, 'Bucarasica'),
(817, 22, 'Chinácota'),
(818, 22, 'Chitagá'),
(819, 22, 'Convención'),
(820, 22, 'Cucutilla'),
(821, 22, 'Cáchira'),
(822, 22, 'Cácota'),
(823, 22, 'Cúcuta'),
(824, 22, 'Durania'),
(825, 22, 'El Carmen'),
(826, 22, 'El Tarra'),
(827, 22, 'El Zulia'),
(828, 22, 'Gramalote'),
(829, 22, 'Hacarí'),
(830, 22, 'Herrán'),
(831, 22, 'La Esperanza'),
(832, 22, 'La Playa'),
(833, 22, 'Labateca'),
(834, 22, 'Los Patios'),
(835, 22, 'Lourdes'),
(836, 22, 'Mutiscua'),
(837, 22, 'Ocaña'),
(838, 22, 'Pamplona'),
(839, 22, 'Pamplonita'),
(840, 22, 'Puerto Santander'),
(841, 22, 'Ragonvalia'),
(842, 22, 'Salazar'),
(843, 22, 'San Calixto'),
(844, 22, 'San Cayetano'),
(845, 22, 'Santiago'),
(846, 22, 'Sardinata'),
(847, 22, 'Silos'),
(848, 22, 'Teorama'),
(849, 22, 'Tibú'),
(850, 22, 'Toledo'),
(851, 22, 'Villa Caro'),
(852, 22, 'Villa del Rosario'),
(853, 22, 'Ábrego'),
(854, 23, 'Colón'),
(855, 23, 'Mocoa'),
(856, 23, 'Orito'),
(857, 23, 'Puerto Asís'),
(858, 23, 'Puerto Caicedo'),
(859, 23, 'Puerto Guzmán'),
(860, 23, 'Puerto Leguízamo'),
(861, 23, 'San Francisco'),
(862, 23, 'San Miguel'),
(863, 23, 'Santiago'),
(864, 23, 'Sibundoy'),
(865, 23, 'Valle del Guamuez'),
(866, 23, 'Villagarzón'),
(867, 24, 'Armenia'),
(868, 24, 'Buenavista'),
(869, 24, 'Calarcá'),
(870, 24, 'Circasia'),
(871, 24, 'Cordobá'),
(872, 24, 'Filandia'),
(873, 24, 'Génova'),
(874, 24, 'La Tebaida'),
(875, 24, 'Montenegro'),
(876, 24, 'Pijao'),
(877, 24, 'Quimbaya'),
(878, 24, 'Salento'),
(879, 25, 'Apía'),
(880, 25, 'Balboa'),
(881, 25, 'Belén de Umbría'),
(882, 25, 'Dos Quebradas'),
(883, 25, 'Guática'),
(884, 25, 'La Celia'),
(885, 25, 'La Virginia'),
(886, 25, 'Marsella'),
(887, 25, 'Mistrató'),
(888, 25, 'Pereira'),
(889, 25, 'Pueblo Rico'),
(890, 25, 'Quinchía'),
(891, 25, 'Santa Rosa de Cabal'),
(892, 25, 'Santuario'),
(893, 26, 'Providencia'),
(894, 27, 'Aguada'),
(895, 27, 'Albania'),
(896, 27, 'Aratoca'),
(897, 27, 'Barbosa'),
(898, 27, 'Barichara'),
(899, 27, 'Barrancabermeja'),
(900, 27, 'Betulia'),
(901, 27, 'Bolívar'),
(902, 27, 'Bucaramanga'),
(903, 27, 'Cabrera'),
(904, 27, 'California'),
(905, 27, 'Capitanejo'),
(906, 27, 'Carcasí'),
(907, 27, 'Cepita'),
(908, 27, 'Cerrito'),
(909, 27, 'Charalá'),
(910, 27, 'Charta'),
(911, 27, 'Chima'),
(912, 27, 'Chipatá'),
(913, 27, 'Cimitarra'),
(914, 27, 'Concepción'),
(915, 27, 'Confines'),
(916, 27, 'Contratación'),
(917, 27, 'Coromoro'),
(918, 27, 'Curití'),
(919, 27, 'El Carmen'),
(920, 27, 'El Guacamayo'),
(921, 27, 'El Peñon'),
(922, 27, 'El Playón'),
(923, 27, 'Encino'),
(924, 27, 'Enciso'),
(925, 27, 'Floridablanca'),
(926, 27, 'Florián'),
(927, 27, 'Galán'),
(928, 27, 'Girón'),
(929, 27, 'Guaca'),
(930, 27, 'Guadalupe'),
(931, 27, 'Guapota'),
(932, 27, 'Guavatá'),
(933, 27, 'Guepsa'),
(934, 27, 'Gámbita'),
(935, 27, 'Hato'),
(936, 27, 'Jesús María'),
(937, 27, 'Jordán'),
(938, 27, 'La Belleza'),
(939, 27, 'La Paz'),
(940, 27, 'Landázuri'),
(941, 27, 'Lebrija'),
(942, 27, 'Los Santos'),
(943, 27, 'Macaravita'),
(944, 27, 'Matanza'),
(945, 27, 'Mogotes'),
(946, 27, 'Molagavita'),
(947, 27, 'Málaga'),
(948, 27, 'Ocamonte'),
(949, 27, 'Oiba'),
(950, 27, 'Onzaga'),
(951, 27, 'Palmar'),
(952, 27, 'Palmas del Socorro'),
(953, 27, 'Pie de Cuesta'),
(954, 27, 'Pinchote'),
(955, 27, 'Puente Nacional'),
(956, 27, 'Puerto Parra'),
(957, 27, 'Puerto Wilches'),
(958, 27, 'Páramo'),
(959, 27, 'Rio Negro'),
(960, 27, 'Sabana de Torres'),
(961, 27, 'San Andrés'),
(962, 27, 'San Benito'),
(963, 27, 'San Gíl'),
(964, 27, 'San Joaquín'),
(965, 27, 'San José de Miranda'),
(966, 27, 'San Miguel'),
(967, 27, 'San Vicente del Chucurí'),
(968, 27, 'Santa Bárbara'),
(969, 27, 'Santa Helena del Opón'),
(970, 27, 'Simacota'),
(971, 27, 'Socorro'),
(972, 27, 'Suaita'),
(973, 27, 'Sucre'),
(974, 27, 'Suratá'),
(975, 27, 'Tona'),
(976, 27, 'Valle de San José'),
(977, 27, 'Vetas'),
(978, 27, 'Villanueva'),
(979, 27, 'Vélez'),
(980, 27, 'Zapatoca'),
(981, 28, 'Buenavista'),
(982, 28, 'Caimito'),
(983, 28, 'Chalán'),
(984, 28, 'Colosó (Ricaurte)'),
(985, 28, 'Corozal'),
(986, 28, 'Coveñas'),
(987, 28, 'El Roble'),
(988, 28, 'Galeras (Nueva Granada)'),
(989, 28, 'Guaranda'),
(990, 28, 'La Unión'),
(991, 28, 'Los Palmitos'),
(992, 28, 'Majagual'),
(993, 28, 'Morroa'),
(994, 28, 'Ovejas'),
(995, 28, 'Palmito'),
(996, 28, 'Sampués'),
(997, 28, 'San Benito Abad'),
(998, 28, 'San Juan de Betulia'),
(999, 28, 'San Marcos'),
(1000, 28, 'San Onofre'),
(1001, 28, 'San Pedro'),
(1002, 28, 'Sincelejo'),
(1003, 28, 'Sincé'),
(1004, 28, 'Sucre'),
(1005, 28, 'Tolú'),
(1006, 28, 'Tolú Viejo'),
(1007, 29, 'Alpujarra'),
(1008, 29, 'Alvarado'),
(1009, 29, 'Ambalema'),
(1010, 29, 'Anzoátegui'),
(1011, 29, 'Armero (Guayabal)'),
(1012, 29, 'Ataco'),
(1013, 29, 'Cajamarca'),
(1014, 29, 'Carmen de Apicalá'),
(1015, 29, 'Casabianca'),
(1016, 29, 'Chaparral'),
(1017, 29, 'Coello'),
(1018, 29, 'Coyaima'),
(1019, 29, 'Cunday'),
(1020, 29, 'Dolores'),
(1021, 29, 'Espinal'),
(1022, 29, 'Falan'),
(1023, 29, 'Flandes'),
(1024, 29, 'Fresno'),
(1025, 29, 'Guamo'),
(1026, 29, 'Herveo'),
(1027, 29, 'Honda'),
(1028, 29, 'Ibagué'),
(1029, 29, 'Icononzo'),
(1030, 29, 'Lérida'),
(1031, 29, 'Líbano'),
(1032, 29, 'Mariquita'),
(1033, 29, 'Melgar'),
(1034, 29, 'Murillo'),
(1035, 29, 'Natagaima'),
(1036, 29, 'Ortega'),
(1037, 29, 'Palocabildo'),
(1038, 29, 'Piedras'),
(1039, 29, 'Planadas'),
(1040, 29, 'Prado'),
(1041, 29, 'Purificación'),
(1042, 29, 'Rioblanco'),
(1043, 29, 'Roncesvalles'),
(1044, 29, 'Rovira'),
(1045, 29, 'Saldaña'),
(1046, 29, 'San Antonio'),
(1047, 29, 'San Luis'),
(1048, 29, 'Santa Isabel'),
(1049, 29, 'Suárez'),
(1050, 29, 'Valle de San Juan'),
(1051, 29, 'Venadillo'),
(1052, 29, 'Villahermosa'),
(1053, 29, 'Villarrica'),
(1054, 30, 'Alcalá'),
(1055, 30, 'Andalucía'),
(1056, 30, 'Ansermanuevo'),
(1057, 30, 'Argelia'),
(1058, 30, 'Bolívar'),
(1059, 30, 'Buenaventura'),
(1060, 30, 'Buga'),
(1061, 30, 'Bugalagrande'),
(1062, 30, 'Caicedonia'),
(1063, 30, 'Calima (Darién)'),
(1064, 30, 'Calí'),
(1065, 30, 'Candelaria'),
(1066, 30, 'Cartago'),
(1067, 30, 'Dagua'),
(1068, 30, 'El Cairo'),
(1069, 30, 'El Cerrito'),
(1070, 30, 'El Dovio'),
(1071, 30, 'El Águila'),
(1072, 30, 'Florida'),
(1073, 30, 'Ginebra'),
(1074, 30, 'Guacarí'),
(1075, 30, 'Jamundí'),
(1076, 30, 'La Cumbre'),
(1077, 30, 'La Unión'),
(1078, 30, 'La Victoria'),
(1079, 30, 'Obando'),
(1080, 30, 'Palmira'),
(1081, 30, 'Pradera'),
(1082, 30, 'Restrepo'),
(1083, 30, 'Riofrío'),
(1084, 30, 'Roldanillo'),
(1085, 30, 'San Pedro'),
(1086, 30, 'Sevilla'),
(1087, 30, 'Toro'),
(1088, 30, 'Trujillo'),
(1089, 30, 'Tulúa'),
(1090, 30, 'Ulloa'),
(1091, 30, 'Versalles'),
(1092, 30, 'Vijes'),
(1093, 30, 'Yotoco'),
(1094, 30, 'Yumbo'),
(1095, 30, 'Zarzal'),
(1096, 31, 'Carurú'),
(1097, 31, 'Mitú'),
(1098, 31, 'Taraira'),
(1099, 32, 'Cumaribo'),
(1100, 32, 'La Primavera'),
(1101, 32, 'Puerto Carreño'),
(1102, 32, 'Santa Rosalía');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE `departamentos` (
  `id_departamentos` int(11) NOT NULL,
  `descripcion` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`id_departamentos`, `descripcion`) VALUES
(1, 'Amazonas'),
(2, 'Antioquia'),
(3, 'Arauca'),
(4, 'Atlántico'),
(5, 'Bolívar'),
(6, 'Boyacá'),
(7, 'Caldas'),
(8, 'Caquetá'),
(9, 'Casanare'),
(10, 'Cauca'),
(11, 'Cesar'),
(12, 'Chocó'),
(13, 'Córdoba'),
(14, 'Cundinamarca'),
(15, 'Güainia'),
(16, 'Guaviare'),
(17, 'Huila'),
(18, 'La Guajira'),
(19, 'Magdalena'),
(20, 'Meta'),
(21, 'Nariño'),
(22, 'Norte de Santander'),
(23, 'Putumayo'),
(24, 'Quindo'),
(25, 'Risaralda'),
(26, 'San Andrés y Providencia'),
(27, 'Santander'),
(28, 'Sucre'),
(29, 'Tolima'),
(30, 'Valle del Cauca'),
(31, 'Vaupés'),
(32, 'Vichada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `id_estado` int(11) NOT NULL,
  `descripcion` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`id_estado`, `descripcion`) VALUES
(1, 'ACTIVA'),
(2, 'INACTIVA'),
(3, 'EN PROCESO'),
(4, 'ENVIADO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paises`
--

CREATE TABLE `paises` (
  `id_pais` int(11) NOT NULL,
  `Codigo` varchar(2) DEFAULT NULL,
  `Pais` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `paises`
--

INSERT INTO `paises` (`id_pais`, `Codigo`, `Pais`) VALUES
(1, 'AU', 'Australia'),
(2, 'CN', 'China'),
(3, 'JP', 'Japan'),
(4, 'TH', 'Thailand'),
(5, 'IN', 'India'),
(6, 'MY', 'Malaysia'),
(7, 'KR', 'Kore'),
(8, 'HK', 'Hong Kong'),
(9, 'TW', 'Taiwan'),
(10, 'PH', 'Philippines'),
(11, 'VN', 'Vietnam'),
(12, 'FR', 'France'),
(13, 'EU', 'Europe'),
(14, 'DE', 'Germany'),
(15, 'SE', 'Sweden'),
(16, 'IT', 'Italy'),
(17, 'GR', 'Greece'),
(18, 'ES', 'Spain'),
(19, 'AT', 'Austria'),
(20, 'GB', 'United Kingdom'),
(21, 'NL', 'Netherlands'),
(22, 'BE', 'Belgium'),
(23, 'CH', 'Switzerland'),
(24, 'AE', 'United Arab Emirates'),
(25, 'IL', 'Israel'),
(26, 'UA', 'Ukraine'),
(27, 'RU', 'Russian Federation'),
(28, 'KZ', 'Kazakhstan'),
(29, 'PT', 'Portugal'),
(30, 'SA', 'Saudi Arabia'),
(31, 'DK', 'Denmark'),
(32, 'IR', 'Ira'),
(33, 'NO', 'Norway'),
(34, 'US', 'United States'),
(35, 'MX', 'Mexico'),
(36, 'CA', 'Canada'),
(37, 'A1', 'Anonymous Proxy'),
(38, 'SY', 'Syrian Arab Republic'),
(39, 'CY', 'Cyprus'),
(40, 'CZ', 'Czech Republic'),
(41, 'IQ', 'Iraq'),
(42, 'TR', 'Turkey'),
(43, 'RO', 'Romania'),
(44, 'LB', 'Lebanon'),
(45, 'HU', 'Hungary'),
(46, 'GE', 'Georgia'),
(47, 'BR', 'Brazil'),
(48, 'AZ', 'Azerbaijan'),
(49, 'A2', 'Satellite Provider'),
(50, 'PS', 'Palestinian Territory'),
(51, 'LT', 'Lithuania'),
(52, 'OM', 'Oman'),
(53, 'SK', 'Slovakia'),
(54, 'RS', 'Serbia'),
(55, 'FI', 'Finland'),
(56, 'IS', 'Iceland'),
(57, 'BG', 'Bulgaria'),
(58, 'SI', 'Slovenia'),
(59, 'MD', 'Moldov'),
(60, 'MK', 'Macedonia'),
(61, 'LI', 'Liechtenstein'),
(62, 'JE', 'Jersey'),
(63, 'PL', 'Poland'),
(64, 'HR', 'Croatia'),
(65, 'BA', 'Bosnia and Herzegovina'),
(66, 'EE', 'Estonia'),
(67, 'LV', 'Latvia'),
(68, 'JO', 'Jordan'),
(69, 'KG', 'Kyrgyzstan'),
(70, 'RE', 'Reunion'),
(71, 'IE', 'Ireland'),
(72, 'LY', 'Libya'),
(73, 'LU', 'Luxembourg'),
(74, 'AM', 'Armenia'),
(75, 'VG', 'Virgin Island'),
(76, 'YE', 'Yemen'),
(77, 'BY', 'Belarus'),
(78, 'GI', 'Gibraltar'),
(79, 'MQ', 'Martinique'),
(80, 'PA', 'Panama'),
(81, 'DO', 'Dominican Republic'),
(82, 'GU', 'Guam'),
(83, 'PR', 'Puerto Rico'),
(84, 'VI', 'Virgin Island'),
(85, 'MN', 'Mongolia'),
(86, 'NZ', 'New Zealand'),
(87, 'SG', 'Singapore'),
(88, 'ID', 'Indonesia'),
(89, 'NP', 'Nepal'),
(90, 'PG', 'Papua New Guinea'),
(91, 'PK', 'Pakistan'),
(92, 'AP', 'Asia/Pacific Region'),
(93, 'BS', 'Bahamas'),
(94, 'LC', 'Saint Lucia'),
(95, 'AR', 'Argentina'),
(96, 'BD', 'Bangladesh'),
(97, 'TK', 'Tokelau'),
(98, 'KH', 'Cambodia'),
(99, 'MO', 'Macau'),
(100, 'MV', 'Maldives'),
(101, 'AF', 'Afghanistan'),
(102, 'NC', 'New Caledonia'),
(103, 'FJ', 'Fiji'),
(104, 'WF', 'Wallis and Futuna'),
(105, 'QA', 'Qatar'),
(106, 'AL', 'Albania'),
(107, 'BZ', 'Belize'),
(108, 'UZ', 'Uzbekistan'),
(109, 'KW', 'Kuwait'),
(110, 'ME', 'Montenegro'),
(111, 'PE', 'Peru'),
(112, 'BM', 'Bermuda'),
(113, 'CW', 'Curacao'),
(114, 'CO', 'Colombia'),
(115, 'VE', 'Venezuela'),
(116, 'CL', 'Chile'),
(117, 'EC', 'Ecuador'),
(118, 'ZA', 'South Africa'),
(119, 'IM', 'Isle of Man'),
(120, 'BO', 'Bolivia'),
(121, 'GG', 'Guernsey'),
(122, 'MT', 'Malta'),
(123, 'TJ', 'Tajikistan'),
(124, 'SC', 'Seychelles'),
(125, 'BH', 'Bahrain'),
(126, 'EG', 'Egypt'),
(127, 'ZW', 'Zimbabwe'),
(128, 'LR', 'Liberia'),
(129, 'KE', 'Kenya'),
(130, 'GH', 'Ghana'),
(131, 'NG', 'Nigeria'),
(132, 'TZ', 'Tanzani'),
(133, 'ZM', 'Zambia'),
(134, 'MG', 'Madagascar'),
(135, 'AO', 'Angola'),
(136, 'NA', 'Namibia'),
(137, 'CI', 'Cote D\'Ivoire'),
(138, 'SD', 'Sudan'),
(139, 'CM', 'Cameroon'),
(140, 'MW', 'Malawi'),
(141, 'GA', 'Gabon'),
(142, 'ML', 'Mali'),
(143, 'BJ', 'Benin'),
(144, 'TD', 'Chad'),
(145, 'BW', 'Botswana'),
(146, 'CV', 'Cape Verde'),
(147, 'RW', 'Rwanda'),
(148, 'CG', 'Congo'),
(149, 'UG', 'Uganda'),
(150, 'MZ', 'Mozambique'),
(151, 'GM', 'Gambia'),
(152, 'LS', 'Lesotho'),
(153, 'MU', 'Mauritius'),
(154, 'MA', 'Morocco'),
(155, 'DZ', 'Algeria'),
(156, 'GN', 'Guinea'),
(157, 'CD', 'Cong'),
(158, 'SZ', 'Swaziland'),
(159, 'BF', 'Burkina Faso'),
(160, 'SL', 'Sierra Leone'),
(161, 'SO', 'Somalia'),
(162, 'NE', 'Niger'),
(163, 'CF', 'Central African Republic'),
(164, 'TG', 'Togo'),
(165, 'BI', 'Burundi'),
(166, 'GQ', 'Equatorial Guinea'),
(167, 'SS', 'South Sudan'),
(168, 'SN', 'Senegal'),
(169, 'MR', 'Mauritania'),
(170, 'DJ', 'Djibouti'),
(171, 'KM', 'Comoros'),
(172, 'IO', 'British Indian Ocean Territory'),
(173, 'TN', 'Tunisia'),
(174, 'GL', 'Greenland'),
(175, 'VA', 'Holy See (Vatican City State)'),
(176, 'CR', 'Costa Rica'),
(177, 'KY', 'Cayman Islands'),
(178, 'JM', 'Jamaica'),
(179, 'GT', 'Guatemala'),
(180, 'MH', 'Marshall Islands'),
(181, 'AQ', 'Antarctica'),
(182, 'BB', 'Barbados'),
(183, 'AW', 'Aruba'),
(184, 'MC', 'Monaco'),
(185, 'AI', 'Anguilla'),
(186, 'KN', 'Saint Kitts and Nevis'),
(187, 'GD', 'Grenada'),
(188, 'PY', 'Paraguay'),
(189, 'MS', 'Montserrat'),
(190, 'TC', 'Turks and Caicos Islands'),
(191, 'AG', 'Antigua and Barbuda'),
(192, 'TV', 'Tuvalu'),
(193, 'PF', 'French Polynesia'),
(194, 'SB', 'Solomon Islands'),
(195, 'VU', 'Vanuatu'),
(196, 'ER', 'Eritrea'),
(197, 'TT', 'Trinidad and Tobago'),
(198, 'AD', 'Andorra'),
(199, 'HT', 'Haiti'),
(200, 'SH', 'Saint Helena'),
(201, 'FM', 'Micronesi'),
(202, 'SV', 'El Salvador'),
(203, 'HN', 'Honduras'),
(204, 'UY', 'Uruguay'),
(205, 'LK', 'Sri Lanka'),
(206, 'EH', 'Western Sahara'),
(207, 'CX', 'Christmas Island'),
(208, 'WS', 'Samoa'),
(209, 'SR', 'Suriname'),
(210, 'CK', 'Cook Islands'),
(211, 'KI', 'Kiribati'),
(212, 'NU', 'Niue'),
(213, 'TO', 'Tonga'),
(214, 'TF', 'French Southern Territories'),
(215, 'YT', 'Mayotte'),
(216, 'NF', 'Norfolk Island'),
(217, 'BN', 'Brunei Darussalam'),
(218, 'TM', 'Turkmenistan'),
(219, 'PN', 'Pitcairn Islands'),
(220, 'SM', 'San Marino'),
(221, 'AX', 'Aland Islands'),
(222, 'FO', 'Faroe Islands'),
(223, 'SJ', 'Svalbard and Jan Mayen'),
(224, 'CC', 'Cocos (Keeling) Islands'),
(225, 'NR', 'Nauru'),
(226, 'GS', 'South Georgia and the South Sandwich Islands'),
(227, 'UM', 'United States Minor Outlying Islands'),
(228, 'GW', 'Guinea-Bissau'),
(229, 'PW', 'Palau'),
(230, 'AS', 'American Samoa'),
(231, 'BT', 'Bhutan'),
(232, 'GF', 'French Guiana'),
(233, 'GP', 'Guadeloupe'),
(234, 'MF', 'Saint Martin'),
(235, 'VC', 'Saint Vincent and the Grenadines'),
(236, 'PM', 'Saint Pierre and Miquelon'),
(237, 'BL', 'Saint Barthelemy'),
(238, 'DM', 'Dominica'),
(239, 'ST', 'Sao Tome and Principe'),
(240, 'KP', 'Kore'),
(241, 'FK', 'Falkland Islands (Malvinas)'),
(242, 'MP', 'Northern Mariana Islands'),
(243, 'TL', 'Timor-Leste'),
(244, 'BQ', 'Bonair'),
(245, 'MM', 'Myanmar'),
(246, 'NI', 'Nicaragua'),
(247, 'SX', 'Sint Maarten (Dutch part)'),
(248, 'GY', 'Guyana'),
(249, 'LA', 'Lao People\'s Democratic Republic'),
(250, 'CU', 'Cuba'),
(251, 'ET', 'Ethiopia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_banco`
--

CREATE TABLE `tbl_banco` (
  `id_banco` int(11) NOT NULL,
  `descripcion` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_banco`
--

INSERT INTO `tbl_banco` (`id_banco`, `descripcion`) VALUES
(1, 'Banco de Bogota'),
(2, 'Banco Popular'),
(3, 'Banco Caja Social'),
(4, 'Bancolombia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_cliente`
--

CREATE TABLE `tbl_cliente` (
  `id_cliente` int(11) NOT NULL,
  `id_tipo` int(11) DEFAULT NULL,
  `identificacion` varchar(105) DEFAULT NULL,
  `nombres` varchar(200) DEFAULT NULL,
  `apellidos` varchar(200) DEFAULT NULL,
  `direccion` varchar(90) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `correo` varchar(90) DEFAULT NULL,
  `id_banco` int(11) DEFAULT NULL,
  `numero_cuenta` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_cliente`
--

INSERT INTO `tbl_cliente` (`id_cliente`, `id_tipo`, `identificacion`, `nombres`, `apellidos`, `direccion`, `telefono`, `correo`, `id_banco`, `numero_cuenta`) VALUES
(1, 1, '123456', 'Andres', 'Florez', 'Avenida 12 a', '8222222', 'andres@gmail.com', 4, '123456'),
(2, 1, '10302522', 'Carlos Armando', 'Casas Diaz', 'Calle 23 No 23-25', '3148569898', 'carlos@gmail.com', 1, '00000098653245');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_config`
--

CREATE TABLE `tbl_config` (
  `id_config` int(11) NOT NULL,
  `tasa_dia` double NOT NULL,
  `nombre_empresa` varchar(100) DEFAULT NULL,
  `nit` varchar(45) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_config`
--

INSERT INTO `tbl_config` (`id_config`, `tasa_dia`, `nombre_empresa`, `nit`, `telefono`, `correo`) VALUES
(1, 6.2, 'EXPRESSCOIN', '8001754848', '8222222', 'carlos@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_factura`
--

CREATE TABLE `tbl_factura` (
  `id_factura` int(11) NOT NULL,
  `id_cliente_rem` int(11) DEFAULT NULL,
  `id_cliente_ben` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `hora` varchar(20) DEFAULT NULL,
  `descripcion` text,
  `total_pesos` double DEFAULT NULL,
  `total_bfs` double DEFAULT NULL,
  `total_bfs_manual` double DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `id_estado` int(11) DEFAULT NULL,
  `id_pais_beneficiario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_factura`
--

INSERT INTO `tbl_factura` (`id_factura`, `id_cliente_rem`, `id_cliente_ben`, `fecha`, `hora`, `descripcion`, `total_pesos`, `total_bfs`, `total_bfs_manual`, `id_usuario`, `id_estado`, `id_pais_beneficiario`) VALUES
(1, 2, 1, '2019-01-10', '02:07 PM', 'realizado', 1000000, 161290.32, 0, 1, 3, 115),
(2, 1, 2, '2019-01-10', '02:28 PM', 'sin calculo', 10000, 1612.9, 6500, 1, 3, 114),
(3, 2, 1, '2019-01-10', '02:33 PM', 'enviar', 1000000, 161290.32, 0, 1, 3, 115),
(4, 2, 1, '2019-01-10', '02:33 PM', '', 1000, 0, 20, 1, 4, 114);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_sucursal`
--

CREATE TABLE `tbl_sucursal` (
  `id_sucursal` int(11) NOT NULL,
  `nombre_sucursal` varchar(200) DEFAULT NULL,
  `id_pais` varchar(2) DEFAULT NULL,
  `id_ciudad` int(11) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `movil` varchar(45) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `pais` varchar(50) DEFAULT NULL,
  `ciudad` varchar(70) DEFAULT NULL,
  `id_estado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_sucursal`
--

INSERT INTO `tbl_sucursal` (`id_sucursal`, `nombre_sucursal`, `id_pais`, `id_ciudad`, `direccion`, `telefono`, `movil`, `email`, `pais`, `ciudad`, `id_estado`) VALUES
(1, 'Primera', 'CO', 8, 'Centro', '8222222', '3212355656', 'primeraa@gmail.com', 'Colombia', 'Popayan', 1),
(3, 'segunda', NULL, NULL, 'centro', '8222222', '1234', 'juanandres12102018@gmail.com', 'Colombia', 'Popayan', 1),
(4, 'Tercera', NULL, NULL, 'Avenida 12 a 22', '8232525', '1234', 'tercera@gmail.com', 'Venezuela', 'Caracas', 1),
(5, 'segunda', NULL, NULL, 'centro', '8222222', '1234', 'juanandres12102018@gmail.com', 'Colombia', 'Popayan', 1),
(6, 'cuarta', NULL, NULL, 'centro', '8333', '1234', 'primeraa@gmail.com', 'Colombia', 'Popayan', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipo_documento`
--

CREATE TABLE `tbl_tipo_documento` (
  `id_tipo` int(11) NOT NULL,
  `descripcion` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_tipo_documento`
--

INSERT INTO `tbl_tipo_documento` (`id_tipo`, `descripcion`) VALUES
(1, 'Cedula de Ciudadania'),
(2, 'Tarjeta de Identidad'),
(3, 'Registro CIvil'),
(4, 'Cedula Extranjero'),
(5, 'Pasaporte'),
(6, 'NIT'),
(7, 'RUT'),
(8, 'Otro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuarioxsucursal`
--

CREATE TABLE `tbl_usuarioxsucursal` (
  `id_usuarioxsucursal` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_sucursal` int(11) DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `estado` int(11) DEFAULT NULL,
  `motivo_inactivacion` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_usuarioxsucursal`
--

INSERT INTO `tbl_usuarioxsucursal` (`id_usuarioxsucursal`, `id_user`, `id_sucursal`, `fecha_inicio`, `fecha_fin`, `estado`, `motivo_inactivacion`) VALUES
(1, 1, 1, '2018-11-28', '2018-12-31', 1, NULL),
(2, 2, 6, '2018-11-28', '2018-11-30', 1, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL COMMENT 'auto incrementing user_id of each user, unique index',
  `firstname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `user_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s name, unique',
  `user_password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s password in salted and hashed format',
  `user_email` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s email, unique',
  `date_added` datetime NOT NULL,
  `perfil` enum('Administrador','Gerente','Empleado') COLLATE utf8_unicode_ci DEFAULT NULL,
  `direccion` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefono` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `identificacion` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='user data';

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`user_id`, `firstname`, `lastname`, `user_name`, `user_password_hash`, `user_email`, `date_added`, `perfil`, `direccion`, `telefono`, `identificacion`) VALUES
(1, 'Andres', 'Damian', 'admin', '$2y$10$MPVHzZ2ZPOWmtUUGCq3RXu31OTB.jo7M9LZ7PmPQYmgETSNn19ejO', 'admin@admin.com', '2016-05-21 15:06:00', 'Administrador', NULL, NULL, NULL),
(2, 'Juan', 'Andres', 'andres', '$2y$10$N5T1sGNk6FOeUUV0kEZrg.CCFGpDwLB9dAsDxGQWY5IBwDemN7hjO', 'juanandres12102018@gmail.com', '2018-11-25 23:44:04', 'Gerente', NULL, NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD PRIMARY KEY (`id_ciudad`),
  ADD KEY `idx_departamneto_idx` (`cod_departamento`),
  ADD KEY `codidx_depto_idx` (`cod_departamento`);

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`id_departamentos`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id_estado`);

--
-- Indices de la tabla `paises`
--
ALTER TABLE `paises`
  ADD PRIMARY KEY (`id_pais`);

--
-- Indices de la tabla `tbl_banco`
--
ALTER TABLE `tbl_banco`
  ADD PRIMARY KEY (`id_banco`);

--
-- Indices de la tabla `tbl_cliente`
--
ALTER TABLE `tbl_cliente`
  ADD PRIMARY KEY (`id_cliente`),
  ADD KEY `idx_tipo_idx` (`id_tipo`),
  ADD KEY `idx_banco_idx` (`id_banco`),
  ADD KEY `idx_identificacion` (`identificacion`);

--
-- Indices de la tabla `tbl_config`
--
ALTER TABLE `tbl_config`
  ADD PRIMARY KEY (`id_config`);

--
-- Indices de la tabla `tbl_factura`
--
ALTER TABLE `tbl_factura`
  ADD PRIMARY KEY (`id_factura`),
  ADD KEY `idx_fk_cliente_rem_idx` (`id_cliente_rem`),
  ADD KEY `idx_fk_cliente_ben_idx` (`id_cliente_ben`),
  ADD KEY `idx_sucursal_fk_idx` (`id_usuario`),
  ADD KEY `idx_estado_envio_idx` (`id_estado`);

--
-- Indices de la tabla `tbl_sucursal`
--
ALTER TABLE `tbl_sucursal`
  ADD PRIMARY KEY (`id_sucursal`),
  ADD KEY `idx_ciudad_idx` (`id_ciudad`),
  ADD KEY `ix_estado_idx` (`id_estado`);

--
-- Indices de la tabla `tbl_tipo_documento`
--
ALTER TABLE `tbl_tipo_documento`
  ADD PRIMARY KEY (`id_tipo`);

--
-- Indices de la tabla `tbl_usuarioxsucursal`
--
ALTER TABLE `tbl_usuarioxsucursal`
  ADD PRIMARY KEY (`id_usuarioxsucursal`),
  ADD KEY `idx_user_idx` (`id_user`),
  ADD KEY `idx_sucursal_idx` (`id_sucursal`),
  ADD KEY `idx_estado_idx` (`estado`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_name` (`user_name`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  MODIFY `id_ciudad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1103;

--
-- AUTO_INCREMENT de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  MODIFY `id_departamentos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `id_estado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `paises`
--
ALTER TABLE `paises`
  MODIFY `id_pais` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=252;

--
-- AUTO_INCREMENT de la tabla `tbl_banco`
--
ALTER TABLE `tbl_banco`
  MODIFY `id_banco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tbl_cliente`
--
ALTER TABLE `tbl_cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tbl_config`
--
ALTER TABLE `tbl_config`
  MODIFY `id_config` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tbl_factura`
--
ALTER TABLE `tbl_factura`
  MODIFY `id_factura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tbl_sucursal`
--
ALTER TABLE `tbl_sucursal`
  MODIFY `id_sucursal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tbl_tipo_documento`
--
ALTER TABLE `tbl_tipo_documento`
  MODIFY `id_tipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tbl_usuarioxsucursal`
--
ALTER TABLE `tbl_usuarioxsucursal`
  MODIFY `id_usuarioxsucursal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'auto incrementing user_id of each user, unique index', AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD CONSTRAINT `codidx_depto` FOREIGN KEY (`cod_departamento`) REFERENCES `departamentos` (`id_departamentos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_cliente`
--
ALTER TABLE `tbl_cliente`
  ADD CONSTRAINT `idx_banco` FOREIGN KEY (`id_banco`) REFERENCES `tbl_banco` (`id_banco`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `idx_tipo` FOREIGN KEY (`id_tipo`) REFERENCES `tbl_tipo_documento` (`id_tipo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_factura`
--
ALTER TABLE `tbl_factura`
  ADD CONSTRAINT `idx_estado_envio` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id_estado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `idx_fk_cliente_ben` FOREIGN KEY (`id_cliente_ben`) REFERENCES `tbl_cliente` (`id_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `idx_fk_cliente_rem` FOREIGN KEY (`id_cliente_rem`) REFERENCES `tbl_cliente` (`id_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `idx_sucursal_fk` FOREIGN KEY (`id_usuario`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_sucursal`
--
ALTER TABLE `tbl_sucursal`
  ADD CONSTRAINT `idx_ciudad` FOREIGN KEY (`id_ciudad`) REFERENCES `ciudad` (`id_ciudad`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `ix_estado` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id_estado`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_usuarioxsucursal`
--
ALTER TABLE `tbl_usuarioxsucursal`
  ADD CONSTRAINT `idx_estado` FOREIGN KEY (`estado`) REFERENCES `estado` (`id_estado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `idx_sucursal` FOREIGN KEY (`id_sucursal`) REFERENCES `tbl_sucursal` (`id_sucursal`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `idx_user` FOREIGN KEY (`id_user`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
