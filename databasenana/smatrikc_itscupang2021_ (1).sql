-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 02, 2021 at 01:01 PM
-- Server version: 10.3.28-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smatrikc_itscupang2021!`
--

-- --------------------------------------------------------

--
-- Table structure for table `m_city`
--

CREATE TABLE `m_city` (
  `idcity` int(11) NOT NULL,
  `city` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `m_city`
--

INSERT INTO `m_city` (`idcity`, `city`) VALUES
(10, 'ACEH BARAT'),
(15, 'KABUPATEN ACEH BARAT DAYA'),
(11, 'KABUPATEN ACEH BESAR'),
(19, 'KABUPATEN ACEH JAYA'),
(6, 'KABUPATEN ACEH SELATAN'),
(5, 'KABUPATEN ACEH SINGKIL'),
(17, 'KABUPATEN ACEH TAMIANG'),
(9, 'KABUPATEN ACEH TENGAH'),
(7, 'KABUPATEN ACEH TENGGARA'),
(8, 'KABUPATEN ACEH TIMUR'),
(14, 'KABUPATEN ACEH UTARA'),
(66, 'KABUPATEN AGAM'),
(302, 'KABUPATEN ALOR'),
(34, 'KABUPATEN ASAHAN'),
(500, 'KABUPATEN ASMAT'),
(279, 'KABUPATEN BADUNG'),
(356, 'KABUPATEN BALANGAN'),
(167, 'KABUPATEN BANDUNG'),
(180, 'KABUPATEN BANDUNG BARAT'),
(390, 'KABUPATEN BANGGAI'),
(389, 'KABUPATEN BANGGAI KEPULAUAN'),
(399, 'KABUPATEN BANGGAI LAUT'),
(144, 'KABUPATEN BANGKA'),
(146, 'KABUPATEN BANGKA BARAT'),
(148, 'KABUPATEN BANGKA SELATAN'),
(147, 'KABUPATEN BANGKA TENGAH'),
(256, 'KABUPATEN BANGKALAN'),
(282, 'KABUPATEN BANGLI'),
(348, 'KABUPATEN BANJAR'),
(194, 'KABUPATEN BANJARNEGARA'),
(404, 'KABUPATEN BANTAENG'),
(227, 'KABUPATEN BANTUL'),
(108, 'KABUPATEN BANYU ASIN'),
(192, 'KABUPATEN BANYUMAS'),
(240, 'KABUPATEN BANYUWANGI'),
(349, 'KABUPATEN BARITO KUALA'),
(335, 'KABUPATEN BARITO SELATAN'),
(343, 'KABUPATEN BARITO TIMUR'),
(336, 'KABUPATEN BARITO UTARA'),
(411, 'KABUPATEN BARRU'),
(215, 'KABUPATEN BATANG'),
(94, 'KABUPATEN BATANG HARI'),
(45, 'KABUPATEN BATU BARA'),
(179, 'KABUPATEN BEKASI'),
(145, 'KABUPATEN BELITUNG'),
(149, 'KABUPATEN BELITUNG TIMUR'),
(301, 'KABUPATEN BELU'),
(20, 'KABUPATEN BENER MERIAH'),
(86, 'KABUPATEN BENGKALIS'),
(319, 'KABUPATEN BENGKAYANG'),
(119, 'KABUPATEN BENGKULU SELATAN'),
(127, 'KABUPATEN BENGKULU TENGAH'),
(121, 'KABUPATEN BENGKULU UTARA'),
(363, 'KABUPATEN BERAU'),
(494, 'KABUPATEN BIAK NUMFOR'),
(291, 'KABUPATEN BIMA'),
(152, 'KABUPATEN BINTAN'),
(13, 'KABUPATEN BIREUEN'),
(235, 'KABUPATEN BLITAR'),
(206, 'KABUPATEN BLORA'),
(443, 'KABUPATEN BOALEMO'),
(164, 'KABUPATEN BOGOR'),
(252, 'KABUPATEN BOJONEGORO'),
(374, 'KABUPATEN BOLAANG MONGONDOW'),
(383, 'KABUPATEN BOLAANG MONGONDOW SELATAN'),
(384, 'KABUPATEN BOLAANG MONGONDOW TIMUR'),
(380, 'KABUPATEN BOLAANG MONGONDOW UTARA'),
(431, 'KABUPATEN BOMBANA'),
(241, 'KABUPATEN BONDOWOSO'),
(412, 'KABUPATEN BONE'),
(446, 'KABUPATEN BONE BOLANGO'),
(498, 'KABUPATEN BOVEN DIGOEL'),
(199, 'KABUPATEN BOYOLALI'),
(219, 'KABUPATEN BREBES'),
(284, 'KABUPATEN BULELENG'),
(403, 'KABUPATEN BULUKUMBA'),
(370, 'KABUPATEN BULUNGAN'),
(99, 'KABUPATEN BUNGO'),
(395, 'KABUPATEN BUOL'),
(458, 'KABUPATEN BURU'),
(463, 'KABUPATEN BURU SELATAN'),
(426, 'KABUPATEN BUTON'),
(440, 'KABUPATEN BUTON SELATAN'),
(439, 'KABUPATEN BUTON TENGAH'),
(434, 'KABUPATEN BUTON UTARA'),
(170, 'KABUPATEN CIAMIS'),
(166, 'KABUPATEN CIANJUR'),
(191, 'KABUPATEN CILACAP'),
(172, 'KABUPATEN CIREBON'),
(36, 'KABUPATEN DAIRI'),
(516, 'KABUPATEN DEIYAI'),
(38, 'KABUPATEN DELI SERDANG'),
(211, 'KABUPATEN DEMAK'),
(70, 'KABUPATEN DHARMASRAYA'),
(514, 'KABUPATEN DOGIYAI'),
(290, 'KABUPATEN DOMPU'),
(393, 'KABUPATEN DONGGALA'),
(112, 'KABUPATEN EMPAT LAWANG'),
(306, 'KABUPATEN ENDE'),
(417, 'KABUPATEN ENREKANG'),
(476, 'KABUPATEN FAKFAK'),
(304, 'KABUPATEN FLORES TIMUR'),
(168, 'KABUPATEN GARUT'),
(16, 'KABUPATEN GAYO LUES'),
(280, 'KABUPATEN GIANYAR'),
(444, 'KABUPATEN GORONTALO'),
(447, 'KABUPATEN GORONTALO UTARA'),
(407, 'KABUPATEN GOWA'),
(255, 'KABUPATEN GRESIK'),
(205, 'KABUPATEN GROBOGAN'),
(228, 'KABUPATEN GUNUNG KIDUL'),
(342, 'KABUPATEN GUNUNG MAS'),
(466, 'KABUPATEN HALMAHERA BARAT'),
(469, 'KABUPATEN HALMAHERA SELATAN'),
(467, 'KABUPATEN HALMAHERA TENGAH'),
(471, 'KABUPATEN HALMAHERA TIMUR'),
(470, 'KABUPATEN HALMAHERA UTARA'),
(351, 'KABUPATEN HULU SUNGAI SELATAN'),
(352, 'KABUPATEN HULU SUNGAI TENGAH'),
(353, 'KABUPATEN HULU SUNGAI UTARA'),
(41, 'KABUPATEN HUMBANG HASUNDUTAN'),
(81, 'KABUPATEN INDRAGIRI HILIR'),
(80, 'KABUPATEN INDRAGIRI HULU'),
(175, 'KABUPATEN INDRAMAYU'),
(515, 'KABUPATEN INTAN JAYA'),
(491, 'KABUPATEN JAYAPURA'),
(490, 'KABUPATEN JAYAWIJAYA'),
(239, 'KABUPATEN JEMBER'),
(277, 'KABUPATEN JEMBRANA'),
(405, 'KABUPATEN JENEPONTO'),
(210, 'KABUPATEN JEPARA'),
(247, 'KABUPATEN JOMBANG'),
(477, 'KABUPATEN KAIMANA'),
(84, 'KABUPATEN KAMPAR'),
(334, 'KABUPATEN KAPUAS'),
(325, 'KABUPATEN KAPUAS HULU'),
(283, 'KABUPATEN KARANG ASEM'),
(203, 'KABUPATEN KARANGANYAR'),
(178, 'KABUPATEN KARAWANG'),
(151, 'KABUPATEN KARIMUN'),
(37, 'KABUPATEN KARO'),
(340, 'KABUPATEN KATINGAN'),
(122, 'KABUPATEN KAUR'),
(328, 'KABUPATEN KAYONG UTARA'),
(195, 'KABUPATEN KEBUMEN'),
(236, 'KABUPATEN KEDIRI'),
(505, 'KABUPATEN KEEROM'),
(214, 'KABUPATEN KENDAL'),
(126, 'KABUPATEN KEPAHIANG'),
(155, 'KABUPATEN KEPULAUAN ANAMBAS'),
(459, 'KABUPATEN KEPULAUAN ARU'),
(60, 'KABUPATEN KEPULAUAN MENTAWAI'),
(88, 'KABUPATEN KEPULAUAN MERANTI'),
(376, 'KABUPATEN KEPULAUAN SANGIHE'),
(402, 'KABUPATEN KEPULAUAN SELAYAR'),
(158, 'KABUPATEN KEPULAUAN SERIBU'),
(468, 'KABUPATEN KEPULAUAN SULA'),
(377, 'KABUPATEN KEPULAUAN TALAUD'),
(493, 'KABUPATEN KEPULAUAN YAPEN'),
(91, 'KABUPATEN KERINCI'),
(323, 'KABUPATEN KETAPANG'),
(200, 'KABUPATEN KLATEN'),
(281, 'KABUPATEN KLUNGKUNG'),
(429, 'KABUPATEN KOLAKA'),
(436, 'KABUPATEN KOLAKA TIMUR'),
(433, 'KABUPATEN KOLAKA UTARA'),
(428, 'KABUPATEN KONAWE'),
(437, 'KABUPATEN KONAWE KEPULAUAN'),
(430, 'KABUPATEN KONAWE SELATAN'),
(435, 'KABUPATEN KONAWE UTARA'),
(347, 'KABUPATEN KOTA BARU'),
(332, 'KABUPATEN KOTAWARINGIN BARAT'),
(333, 'KABUPATEN KOTAWARINGIN TIMUR'),
(79, 'KABUPATEN KUANTAN SINGINGI'),
(329, 'KABUPATEN KUBU RAYA'),
(209, 'KABUPATEN KUDUS'),
(226, 'KABUPATEN KULON PROGO'),
(171, 'KABUPATEN KUNINGAN'),
(298, 'KABUPATEN KUPANG'),
(360, 'KABUPATEN KUTAI BARAT'),
(361, 'KABUPATEN KUTAI KARTANEGARA'),
(362, 'KABUPATEN KUTAI TIMUR'),
(33, 'KABUPATEN LABUHAN BATU'),
(48, 'KABUPATEN LABUHAN BATU SELATAN'),
(49, 'KABUPATEN LABUHAN BATU UTARA'),
(105, 'KABUPATEN LAHAT'),
(338, 'KABUPATEN LAMANDAU'),
(254, 'KABUPATEN LAMONGAN'),
(129, 'KABUPATEN LAMPUNG BARAT'),
(131, 'KABUPATEN LAMPUNG SELATAN'),
(133, 'KABUPATEN LAMPUNG TENGAH'),
(132, 'KABUPATEN LAMPUNG TIMUR'),
(134, 'KABUPATEN LAMPUNG UTARA'),
(320, 'KABUPATEN LANDAK'),
(39, 'KABUPATEN LANGKAT'),
(510, 'KABUPATEN LANNY JAYA'),
(270, 'KABUPATEN LEBAK'),
(125, 'KABUPATEN LEBONG'),
(303, 'KABUPATEN LEMBATA'),
(67, 'KABUPATEN LIMA PULUH KOTA'),
(154, 'KABUPATEN LINGGA'),
(286, 'KABUPATEN LOMBOK BARAT'),
(287, 'KABUPATEN LOMBOK TENGAH'),
(288, 'KABUPATEN LOMBOK TIMUR'),
(293, 'KABUPATEN LOMBOK UTARA'),
(238, 'KABUPATEN LUMAJANG'),
(418, 'KABUPATEN LUWU'),
(421, 'KABUPATEN LUWU TIMUR'),
(420, 'KABUPATEN LUWU UTARA'),
(249, 'KABUPATEN MADIUN'),
(198, 'KABUPATEN MAGELANG'),
(250, 'KABUPATEN MAGETAN'),
(365, 'KABUPATEN MAHAKAM HULU'),
(173, 'KABUPATEN MAJALENGKA'),
(449, 'KABUPATEN MAJENE'),
(316, 'KABUPATEN MALAKA'),
(237, 'KABUPATEN MALANG'),
(369, 'KABUPATEN MALINAU'),
(462, 'KABUPATEN MALUKU BARAT DAYA'),
(457, 'KABUPATEN MALUKU TENGAH'),
(456, 'KABUPATEN MALUKU TENGGARA'),
(455, 'KABUPATEN MALUKU TENGGARA BARAT'),
(451, 'KABUPATEN MAMASA'),
(508, 'KABUPATEN MAMBERAMO RAYA'),
(511, 'KABUPATEN MAMBERAMO TENGAH'),
(452, 'KABUPATEN MAMUJU'),
(454, 'KABUPATEN MAMUJU TENGAH'),
(453, 'KABUPATEN MAMUJU UTARA'),
(28, 'KABUPATEN MANDAILING NATAL'),
(308, 'KABUPATEN MANGGARAI'),
(310, 'KABUPATEN MANGGARAI BARAT'),
(314, 'KABUPATEN MANGGARAI TIMUR'),
(480, 'KABUPATEN MANOKWARI'),
(486, 'KABUPATEN MANOKWARI SELATAN'),
(499, 'KABUPATEN MAPPI'),
(409, 'KABUPATEN MAROS'),
(485, 'KABUPATEN MAYBRAT'),
(327, 'KABUPATEN MELAWI'),
(321, 'KABUPATEN MEMPAWAH'),
(92, 'KABUPATEN MERANGIN'),
(489, 'KABUPATEN MERAUKE'),
(139, 'KABUPATEN MESUJI'),
(497, 'KABUPATEN MIMIKA'),
(375, 'KABUPATEN MINAHASA'),
(378, 'KABUPATEN MINAHASA SELATAN'),
(382, 'KABUPATEN MINAHASA TENGGARA'),
(379, 'KABUPATEN MINAHASA UTARA'),
(246, 'KABUPATEN MOJOKERTO'),
(391, 'KABUPATEN MOROWALI'),
(400, 'KABUPATEN MOROWALI UTARA'),
(104, 'KABUPATEN MUARA ENIM'),
(95, 'KABUPATEN MUARO JAMBI'),
(124, 'KABUPATEN MUKOMUKO'),
(427, 'KABUPATEN MUNA'),
(438, 'KABUPATEN MUNA BARAT'),
(344, 'KABUPATEN MURUNG RAYA'),
(107, 'KABUPATEN MUSI BANYUASIN'),
(106, 'KABUPATEN MUSI RAWAS'),
(114, 'KABUPATEN MUSI RAWAS UTARA'),
(492, 'KABUPATEN NABIRE'),
(18, 'KABUPATEN NAGAN RAYA'),
(313, 'KABUPATEN NAGEKEO'),
(153, 'KABUPATEN NATUNA'),
(509, 'KABUPATEN NDUGA'),
(307, 'KABUPATEN NGADA'),
(248, 'KABUPATEN NGANJUK'),
(251, 'KABUPATEN NGAWI'),
(27, 'KABUPATEN NIAS'),
(51, 'KABUPATEN NIAS BARAT'),
(40, 'KABUPATEN NIAS SELATAN'),
(50, 'KABUPATEN NIAS UTARA'),
(372, 'KABUPATEN NUNUKAN'),
(111, 'KABUPATEN OGAN ILIR'),
(103, 'KABUPATEN OGAN KOMERING ILIR'),
(102, 'KABUPATEN OGAN KOMERING ULU'),
(109, 'KABUPATEN OGAN KOMERING ULU SELATAN'),
(110, 'KABUPATEN OGAN KOMERING ULU TIMUR'),
(231, 'KABUPATEN PACITAN'),
(47, 'KABUPATEN PADANG LAWAS'),
(46, 'KABUPATEN PADANG LAWAS UTARA'),
(65, 'KABUPATEN PADANG PARIAMAN'),
(42, 'KABUPATEN PAKPAK BHARAT'),
(258, 'KABUPATEN PAMEKASAN'),
(269, 'KABUPATEN PANDEGLANG'),
(181, 'KABUPATEN PANGANDARAN'),
(410, 'KABUPATEN PANGKAJENE DAN KEPULAUAN'),
(495, 'KABUPATEN PANIAI'),
(396, 'KABUPATEN PARIGI MOUTONG'),
(68, 'KABUPATEN PASAMAN'),
(71, 'KABUPATEN PASAMAN BARAT'),
(359, 'KABUPATEN PASER'),
(244, 'KABUPATEN PASURUAN'),
(208, 'KABUPATEN PATI'),
(487, 'KABUPATEN PEGUNUNGAN ARFAK'),
(502, 'KABUPATEN PEGUNUNGAN BINTANG'),
(216, 'KABUPATEN PEKALONGAN'),
(82, 'KABUPATEN PELALAWAN'),
(217, 'KABUPATEN PEMALANG'),
(364, 'KABUPATEN PENAJAM PASER UTARA'),
(113, 'KABUPATEN PENUKAL ABAB LEMATANG ILIR'),
(137, 'KABUPATEN PESAWARAN'),
(141, 'KABUPATEN PESISIR BARAT'),
(61, 'KABUPATEN PESISIR SELATAN'),
(12, 'KABUPATEN PIDIE'),
(21, 'KABUPATEN PIDIE JAYA'),
(416, 'KABUPATEN PINRANG'),
(445, 'KABUPATEN POHUWATO'),
(450, 'KABUPATEN POLEWALI MANDAR'),
(232, 'KABUPATEN PONOROGO'),
(392, 'KABUPATEN POSO'),
(138, 'KABUPATEN PRINGSEWU'),
(243, 'KABUPATEN PROBOLINGGO'),
(341, 'KABUPATEN PULANG PISAU'),
(472, 'KABUPATEN PULAU MOROTAI'),
(473, 'KABUPATEN PULAU TALIABU'),
(513, 'KABUPATEN PUNCAK'),
(496, 'KABUPATEN PUNCAK JAYA'),
(193, 'KABUPATEN PURBALINGGA'),
(177, 'KABUPATEN PURWAKARTA'),
(196, 'KABUPATEN PURWOREJO'),
(483, 'KABUPATEN RAJA AMPAT'),
(120, 'KABUPATEN REJANG LEBONG'),
(207, 'KABUPATEN REMBANG'),
(87, 'KABUPATEN ROKAN HILIR'),
(85, 'KABUPATEN ROKAN HULU'),
(309, 'KABUPATEN ROTE NDAO'),
(83, 'KABUPATEN S I A K'),
(315, 'KABUPATEN SABU RAIJUA'),
(318, 'KABUPATEN SAMBAS'),
(43, 'KABUPATEN SAMOSIR'),
(257, 'KABUPATEN SAMPANG'),
(322, 'KABUPATEN SANGGAU'),
(504, 'KABUPATEN SARMI'),
(93, 'KABUPATEN SAROLANGUN'),
(326, 'KABUPATEN SEKADAU'),
(123, 'KABUPATEN SELUMA'),
(212, 'KABUPATEN SEMARANG'),
(460, 'KABUPATEN SERAM BAGIAN BARAT'),
(461, 'KABUPATEN SERAM BAGIAN TIMUR'),
(272, 'KABUPATEN SERANG'),
(44, 'KABUPATEN SERDANG BEDAGAI'),
(339, 'KABUPATEN SERUYAN'),
(381, 'KABUPATEN SIAU TAGULANDANG BIARO'),
(415, 'KABUPATEN SIDENRENG RAPPANG'),
(245, 'KABUPATEN SIDOARJO'),
(398, 'KABUPATEN SIGI'),
(63, 'KABUPATEN SIJUNJUNG'),
(305, 'KABUPATEN SIKKA'),
(35, 'KABUPATEN SIMALUNGUN'),
(4, 'KABUPATEN SIMEULUE'),
(408, 'KABUPATEN SINJAI'),
(324, 'KABUPATEN SINTANG'),
(242, 'KABUPATEN SITUBONDO'),
(229, 'KABUPATEN SLEMAN'),
(62, 'KABUPATEN SOLOK'),
(69, 'KABUPATEN SOLOK SELATAN'),
(413, 'KABUPATEN SOPPENG'),
(482, 'KABUPATEN SORONG'),
(481, 'KABUPATEN SORONG SELATAN'),
(204, 'KABUPATEN SRAGEN'),
(176, 'KABUPATEN SUBANG'),
(165, 'KABUPATEN SUKABUMI'),
(337, 'KABUPATEN SUKAMARA'),
(201, 'KABUPATEN SUKOHARJO'),
(296, 'KABUPATEN SUMBA BARAT'),
(312, 'KABUPATEN SUMBA BARAT DAYA'),
(311, 'KABUPATEN SUMBA TENGAH'),
(297, 'KABUPATEN SUMBA TIMUR'),
(289, 'KABUPATEN SUMBAWA'),
(292, 'KABUPATEN SUMBAWA BARAT'),
(174, 'KABUPATEN SUMEDANG'),
(259, 'KABUPATEN SUMENEP'),
(507, 'KABUPATEN SUPIORI'),
(354, 'KABUPATEN TABALONG'),
(278, 'KABUPATEN TABANAN'),
(406, 'KABUPATEN TAKALAR'),
(484, 'KABUPATEN TAMBRAUW'),
(371, 'KABUPATEN TANA TIDUNG'),
(419, 'KABUPATEN TANA TORAJA'),
(355, 'KABUPATEN TANAH BUMBU'),
(64, 'KABUPATEN TANAH DATAR'),
(346, 'KABUPATEN TANAH LAUT'),
(271, 'KABUPATEN TANGERANG'),
(130, 'KABUPATEN TANGGAMUS'),
(97, 'KABUPATEN TANJUNG JABUNG BARAT'),
(96, 'KABUPATEN TANJUNG JABUNG TIMUR'),
(29, 'KABUPATEN TAPANULI SELATAN'),
(30, 'KABUPATEN TAPANULI TENGAH'),
(31, 'KABUPATEN TAPANULI UTARA'),
(350, 'KABUPATEN TAPIN'),
(169, 'KABUPATEN TASIKMALAYA'),
(98, 'KABUPATEN TEBO'),
(218, 'KABUPATEN TEGAL'),
(479, 'KABUPATEN TELUK BINTUNI'),
(478, 'KABUPATEN TELUK WONDAMA'),
(213, 'KABUPATEN TEMANGGUNG'),
(299, 'KABUPATEN TIMOR TENGAH SELATAN'),
(300, 'KABUPATEN TIMOR TENGAH UTARA'),
(32, 'KABUPATEN TOBA SAMOSIR'),
(397, 'KABUPATEN TOJO UNA-UNA'),
(394, 'KABUPATEN TOLI-TOLI'),
(503, 'KABUPATEN TOLIKARA'),
(422, 'KABUPATEN TORAJA UTARA'),
(233, 'KABUPATEN TRENGGALEK'),
(253, 'KABUPATEN TUBAN'),
(140, 'KABUPATEN TULANG BAWANG BARAT'),
(136, 'KABUPATEN TULANGBAWANG'),
(234, 'KABUPATEN TULUNGAGUNG'),
(414, 'KABUPATEN WAJO'),
(432, 'KABUPATEN WAKATOBI'),
(506, 'KABUPATEN WAROPEN'),
(135, 'KABUPATEN WAY KANAN'),
(202, 'KABUPATEN WONOGIRI'),
(197, 'KABUPATEN WONOSOBO'),
(501, 'KABUPATEN YAHUKIMO'),
(512, 'KABUPATEN YALIMO'),
(464, 'KOTA AMBON'),
(156, 'KOTA B A T A M'),
(366, 'KOTA BALIKPAPAN'),
(22, 'KOTA BANDA ACEH'),
(142, 'KOTA BANDAR LAMPUNG'),
(184, 'KOTA BANDUNG'),
(190, 'KOTA BANJAR'),
(358, 'KOTA BANJAR BARU'),
(357, 'KOTA BANJARMASIN'),
(268, 'KOTA BATU'),
(442, 'KOTA BAUBAU'),
(186, 'KOTA BEKASI'),
(128, 'KOTA BENGKULU'),
(295, 'KOTA BIMA'),
(57, 'KOTA BINJAI'),
(386, 'KOTA BITUNG'),
(261, 'KOTA BLITAR'),
(182, 'KOTA BOGOR'),
(368, 'KOTA BONTANG'),
(76, 'KOTA BUKITTINGGI'),
(274, 'KOTA CILEGON'),
(188, 'KOTA CIMAHI'),
(185, 'KOTA CIREBON'),
(90, 'KOTA D U M A I'),
(285, 'KOTA DENPASAR'),
(187, 'KOTA DEPOK'),
(448, 'KOTA GORONTALO'),
(59, 'KOTA GUNUNGSITOLI'),
(162, 'KOTA JAKARTA BARAT'),
(161, 'KOTA JAKARTA PUSAT'),
(159, 'KOTA JAKARTA SELATAN'),
(160, 'KOTA JAKARTA TIMUR'),
(163, 'KOTA JAKARTA UTARA'),
(100, 'KOTA JAMBI'),
(517, 'KOTA JAYAPURA'),
(260, 'KOTA KEDIRI'),
(441, 'KOTA KENDARI'),
(388, 'KOTA KOTAMOBAGU'),
(317, 'KOTA KUPANG'),
(24, 'KOTA LANGSA'),
(25, 'KOTA LHOKSEUMAWE'),
(118, 'KOTA LUBUKLINGGAU'),
(266, 'KOTA MADIUN'),
(220, 'KOTA MAGELANG'),
(423, 'KOTA MAKASSAR'),
(262, 'KOTA MALANG'),
(385, 'KOTA MANADO'),
(294, 'KOTA MATARAM'),
(56, 'KOTA MEDAN'),
(143, 'KOTA METRO'),
(265, 'KOTA MOJOKERTO'),
(72, 'KOTA PADANG'),
(75, 'KOTA PADANG PANJANG'),
(58, 'KOTA PADANGSIDIMPUAN'),
(117, 'KOTA PAGAR ALAM'),
(345, 'KOTA PALANGKA RAYA'),
(115, 'KOTA PALEMBANG'),
(425, 'KOTA PALOPO'),
(401, 'KOTA PALU'),
(150, 'KOTA PANGKAL PINANG'),
(424, 'KOTA PAREPARE'),
(78, 'KOTA PARIAMAN'),
(264, 'KOTA PASURUAN'),
(77, 'KOTA PAYAKUMBUH'),
(224, 'KOTA PEKALONGAN'),
(89, 'KOTA PEKANBARU'),
(54, 'KOTA PEMATANG SIANTAR'),
(330, 'KOTA PONTIANAK'),
(116, 'KOTA PRABUMULIH'),
(263, 'KOTA PROBOLINGGO'),
(23, 'KOTA SABANG'),
(222, 'KOTA SALATIGA'),
(367, 'KOTA SAMARINDA'),
(74, 'KOTA SAWAH LUNTO'),
(223, 'KOTA SEMARANG'),
(275, 'KOTA SERANG'),
(52, 'KOTA SIBOLGA'),
(331, 'KOTA SINGKAWANG'),
(73, 'KOTA SOLOK'),
(488, 'KOTA SORONG'),
(26, 'KOTA SUBULUSSALAM'),
(183, 'KOTA SUKABUMI'),
(101, 'KOTA SUNGAI PENUH'),
(267, 'KOTA SURABAYA'),
(221, 'KOTA SURAKARTA'),
(273, 'KOTA TANGERANG'),
(276, 'KOTA TANGERANG SELATAN'),
(53, 'KOTA TANJUNG BALAI'),
(157, 'KOTA TANJUNG PINANG'),
(373, 'KOTA TARAKAN'),
(189, 'KOTA TASIKMALAYA'),
(55, 'KOTA TEBING TINGGI'),
(225, 'KOTA TEGAL'),
(474, 'KOTA TERNATE'),
(475, 'KOTA TIDORE KEPULAUAN'),
(387, 'KOTA TOMOHON'),
(465, 'KOTA TUAL'),
(230, 'KOTA YOGYAKARTA');

-- --------------------------------------------------------

--
-- Table structure for table `m_detailtransaksi`
--

CREATE TABLE `m_detailtransaksi` (
  `id` int(12) NOT NULL,
  `codecupang` varchar(100) NOT NULL,
  `cupang_name` varchar(100) NOT NULL,
  `harga` decimal(12,0) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `total` int(100) NOT NULL,
  `idtransaksi` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_detailtransaksi`
--

INSERT INTO `m_detailtransaksi` (`id`, `codecupang`, `cupang_name`, `harga`, `qty`, `total`, `idtransaksi`) VALUES
(73, 'A1M0001', 'HM SR', 10000, 2, 20000, 29),
(74, 'A3M0003', 'HM BH', 10000, 1, 10000, 30),
(75, 'A3M0003', 'HM BH', 80000, 2, 160000, 31),
(76, 'A3F0004', 'HM BH', 25000, 2, 50000, 48),
(77, 'A3F0006', 'HM BH', 30000, 2, 1, 49),
(1, 'A1M0001', 'HM SR', 10000, 2, 20000, 1),
(78, 'A1M0001', 'HM SR', 10000, 1, 10000, 50),
(79, 'A1F0002', 'HM SR', 10000, 1, 10000, 46),
(80, 'A1M0002', 'HM SR', 30000, 2, 60000, 46),
(81, 'A1F0002', 'HM SR', 30000, 2, 60000, 52),
(82, 'A1M0002', 'HM SR', 20000, 2, 40000, 53),
(96, 'A11M0004', 'HM MCF', 100000, 1, 100000, 63),
(95, 'D8M0002', 'PK GZ', 100000, 1, 100000, 63),
(94, 'D10M0004', 'PK SG', 100000, 1, 100000, 63),
(91, 'A1M0002', 'HM SR', 130000, 1, 130000, 61),
(92, 'A1M0002', 'HM SR', 110000, 1, 110000, 62),
(93, 'A4M0004', 'HM Orange', 100000, 1, 100000, 63),
(97, 'D11M0004', 'PK MCF', 100000, 1, 100000, 63);

-- --------------------------------------------------------

--
-- Table structure for table `m_gambar`
--

CREATE TABLE `m_gambar` (
  `id_gambar` int(15) NOT NULL,
  `gambar1` varchar(255) NOT NULL,
  `gambar2` varchar(255) NOT NULL,
  `gambar3` varchar(255) NOT NULL,
  `gambar4` varchar(255) NOT NULL,
  `gambar5` varchar(255) NOT NULL,
  `gambar6` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `m_gambarspk`
--

CREATE TABLE `m_gambarspk` (
  `id_gambarspk` int(12) NOT NULL,
  `idspk` int(12) NOT NULL,
  `gambarspk1` varchar(500) NOT NULL,
  `gambarspk2` varchar(500) NOT NULL,
  `gambarspk3` varchar(500) NOT NULL,
  `gambarspk4` varchar(500) NOT NULL,
  `gambarspk5` varchar(500) NOT NULL,
  `gambarspk6` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `m_invoice`
--

CREATE TABLE `m_invoice` (
  `idinvoice` int(15) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tema` varchar(255) NOT NULL,
  `noinvoice` varchar(255) NOT NULL,
  `dateinvoice` date NOT NULL,
  `jasa` varchar(255) NOT NULL,
  `ppn` decimal(12,0) NOT NULL,
  `pph` decimal(12,0) NOT NULL,
  `nominal` decimal(12,0) NOT NULL,
  `nofaktur` varchar(255) NOT NULL,
  `tglpengiriman` date NOT NULL,
  `pengirimanvia` varchar(255) NOT NULL,
  `rencanapembayaran` varchar(255) NOT NULL,
  `bayartanggal` date NOT NULL,
  `bayarnominal` varchar(255) NOT NULL,
  `pembayaran` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `m_negara`
--

CREATE TABLE `m_negara` (
  `idcountry` int(10) NOT NULL,
  `country` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_negara`
--

INSERT INTO `m_negara` (`idcountry`, `country`) VALUES
(1, 'Indonesia'),
(2, 'Malasia');

-- --------------------------------------------------------

--
-- Table structure for table `m_nonkontrak`
--

CREATE TABLE `m_nonkontrak` (
  `id_nonkontrak` int(11) NOT NULL,
  `media` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `kota_kab` varchar(255) NOT NULL,
  `tema` text NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `m_penawaran`
--

CREATE TABLE `m_penawaran` (
  `id_penawaran` int(15) NOT NULL,
  `namaperusahaan` varchar(255) NOT NULL,
  `namadirektur` varchar(255) NOT NULL,
  `nomor` varchar(255) NOT NULL,
  `masakontrak_awal` date NOT NULL,
  `masakontrak_akhir` date NOT NULL,
  `kota` varchar(255) NOT NULL,
  `nominal` varchar(255) NOT NULL,
  `tanggalpengajuan` date NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_penawaran`
--

INSERT INTO `m_penawaran` (`id_penawaran`, `namaperusahaan`, `namadirektur`, `nomor`, `masakontrak_awal`, `masakontrak_akhir`, `kota`, `nominal`, `tanggalpengajuan`, `status`) VALUES
(1, 'PT. Nojorono Tobacco Internanational', 'Sugianto R', '155/PT-RCM/PNW/IV/2018', '2020-03-16', '2020-03-27', 'Jakarta', '150.000.000', '2018-04-20', 1);

-- --------------------------------------------------------

--
-- Table structure for table `m_po`
--

CREATE TABLE `m_po` (
  `id_po` int(15) NOT NULL,
  `nopo` varchar(255) NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `invoicedate` date NOT NULL,
  `nominal` varchar(50) NOT NULL,
  `paydate` date NOT NULL,
  `statusbayar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_po`
--

INSERT INTO `m_po` (`id_po`, `nopo`, `startdate`, `enddate`, `invoicedate`, `nominal`, `paydate`, `statusbayar`) VALUES
(2, 'dd', '2021-03-16', '2021-03-19', '2021-04-02', '2', '2020-12-11', 'Kredit Dongs'),
(3, 'test1', '2021-03-04', '2021-03-04', '2021-03-04', '0.000.000.000.001', '2021-03-04', 'Kemaren sih minjem temen'),
(4, '222', '2021-03-04', '2021-03-04', '2021-03-04', '000.011.001', '2021-03-04', 'Nyolong');

-- --------------------------------------------------------

--
-- Table structure for table `m_source`
--

CREATE TABLE `m_source` (
  `id` int(12) NOT NULL,
  `name` varchar(200) NOT NULL,
  `note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_source`
--

INSERT INTO `m_source` (`id`, `name`, `note`) VALUES
(1, ' ', ' '),
(2, 'instagram', 'pembelian melalui instagram'),
(3, 'Twitter', 'pembelian ikan cupang via twitter'),
(4, 'Youtube', '#'),
(5, ' ', ' '),
(6, 'Walk In Farm', 'Walk in Farm'),
(7, 'Walk In Showroom', 'Walk in Showroom'),
(8, 'Telegram Lelang', 'Telegram Lelang'),
(9, 'Telegram', 'Telegram'),
(10, 'Instagram Lelang', 'Instagram Lelang'),
(11, ' ', ''),
(12, 'Whatsapp', '');

-- --------------------------------------------------------

--
-- Table structure for table `m_spk`
--

CREATE TABLE `m_spk` (
  `idmasterspk` int(10) NOT NULL,
  `spktitle` varchar(250) NOT NULL,
  `spkdate` date NOT NULL,
  `spknumber` varchar(50) NOT NULL,
  `total` decimal(15,0) NOT NULL DEFAULT 0,
  `spkto` varchar(250) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `m_transaksi`
--

CREATE TABLE `m_transaksi` (
  `id` int(11) NOT NULL,
  `nomor` varchar(55) DEFAULT NULL,
  `idcustomer` int(11) DEFAULT NULL,
  `idfarm` int(11) DEFAULT NULL,
  `idsales` int(11) DEFAULT NULL,
  `idsource` int(11) NOT NULL,
  `status` varchar(20) DEFAULT 'Lunas',
  `carabayar` varchar(100) DEFAULT NULL,
  `ongkir` int(11) NOT NULL,
  `packing` int(11) NOT NULL,
  `catatan` text DEFAULT NULL,
  `dateadd` datetime DEFAULT NULL,
  `tanggallunas` date DEFAULT NULL,
  `tanggalpengajuan` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_transaksi`
--

INSERT INTO `m_transaksi` (`id`, `nomor`, `idcustomer`, `idfarm`, `idsales`, `idsource`, `status`, `carabayar`, `ongkir`, `packing`, `catatan`, `dateadd`, `tanggallunas`, `tanggalpengajuan`) VALUES
(61, '202102240001', 300, 1, 9, 8, 'Lunas', 'Transfer', 40000, 0, NULL, '2021-02-24 06:59:27', '2021-02-01', '2021-01-18'),
(62, '202102240002', 324, 1, 9, 8, 'Lunas', 'Transfer', 18000, 10000, NULL, '2021-02-24 07:02:59', '2021-02-07', '2021-01-22'),
(63, '202102240003', 325, 1, 9, 8, 'Lunas', 'Transfer', 461532, 0, NULL, '2021-02-24 07:14:22', '2021-02-03', '2021-01-23');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bapp`
--

CREATE TABLE `tbl_bapp` (
  `id_bapp` int(11) NOT NULL,
  `namaperusahaan` varchar(255) NOT NULL,
  `no_kontrak` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `nomor` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `status_bapp` int(1) NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cupang`
--

CREATE TABLE `tbl_cupang` (
  `idcupang` int(12) NOT NULL,
  `cupangno` varchar(12) NOT NULL,
  `codecupang` varchar(10) NOT NULL,
  `cupangname` varchar(250) NOT NULL,
  `type` varchar(250) NOT NULL,
  `warna` varchar(250) NOT NULL,
  `price` double NOT NULL,
  `size` varchar(200) NOT NULL,
  `jeniskelamin` varchar(50) NOT NULL,
  `status` varchar(250) NOT NULL,
  `note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_cupang`
--

INSERT INTO `tbl_cupang` (`idcupang`, `cupangno`, `codecupang`, `cupangname`, `type`, `warna`, `price`, `size`, `jeniskelamin`, `status`, `note`) VALUES
(461, 'IC000001', 'A1M0001', 'HM SR', 'Halfmoon', 'Super Red', 0, 'Regular', 'Male', '1', 'ciri khas ikan cupang yang satu ini memiliki sirip...'),
(462, 'IC000002', 'A1F0001', 'HM SR', 'Halfmoon', 'Super Red', 0, 'Regular', 'Female', '1', 'Cupang Paradise banyak ditemukan di daerah persung?'),
(463, 'IC000003', 'A1M0002', 'HM SR', 'Halfmoon', 'Super Red', 0, 'Junior', 'Male', '1', ''),
(464, 'IC000004', 'A1F0002', 'HM SR', 'Halfmoon', 'Super Red', 0, 'Junior', 'Female', '1', ''),
(465, 'IC000005', 'A2M0001', 'HM SB', 'Halfmoon', 'Super Black', 0, 'Regular', 'Male', '1', ''),
(466, 'IC000006', 'A2F0001', 'HM SB', 'Halfmoon', 'Super Black', 0, 'Regular', 'Female', '1', ''),
(467, 'IC000007', 'A2M0002', 'HM SB', 'Halfmoon', 'Super Black', 0, 'Junior', 'Male', '1', ''),
(468, 'IC000008', 'A2F0002', 'HM SB', 'Halfmoon', 'Super Black', 0, 'Junior', 'Female', '1', ''),
(469, 'IC000009', 'A3M0001', 'HM BH', 'Halfmoon', 'Black Head Steel Blue', 0, 'Regular', 'Male', '1', ''),
(470, 'IC000010', 'A3F0001', 'HM BH', 'Halfmoon', 'Black Head Steel Blue', 0, 'Regular', 'Female', '1', ''),
(471, 'IC000011', 'A3M0002', 'HM BH', 'Halfmoon', 'Black Head Steel Blue', 0, 'Junior', 'Male', '1', ''),
(472, 'IC000012', 'A3F0002', 'HM BH', 'Halfmoon', 'Black Head Steel Blue', 0, 'Junior', 'Female', '1', ''),
(473, 'IC000013', 'A3M0003', 'HM BH', 'Halfmoon', 'Black Head Royal Blue', 0, 'Regular', 'Male', '1', ''),
(474, 'IC000014', 'A3F0003', 'HM BH', 'Halfmoon', 'Black Head Royal Blue', 0, 'Regular', 'Female', '1', ''),
(475, 'IC000015', 'A3M004', 'HM BH', 'Halfmoon', 'Black Head Royal Blue', 0, 'Junior', 'Male', '1', ''),
(476, 'IC000016', 'A3F0004', 'HM BH', 'Halfmoon', 'Black Head Royal Blue', 0, 'Junior', 'Female', '1', ''),
(477, 'IC000017', 'A3M0005', 'HM BH', 'Halfmoon', 'Black Head Green Turqoise', 0, 'Regular', 'Male', '1', ''),
(478, 'IC000018', 'A3F0005', 'HM BH', 'Halfmoon', 'Black Head Green Turqoise', 0, 'Regular', 'Female', '1', ''),
(479, 'IC000019', 'A3M0006', 'HM BH', 'Halfmoon', 'Black Head Green Turqoise', 0, 'Junior', 'Male', '1', ''),
(480, 'IC000020', 'A3F0006', 'HM BH', 'Halfmoon', 'Black Head Green Turqoise', 0, 'Junior', 'Female', '1', ''),
(481, 'IC000021', 'A4M0001', 'HM SY', 'Halfmoon', 'Super Yellow', 0, 'Regular', 'Male', '1', ''),
(482, 'IC000022', 'A4F0001', 'HM SY', 'Halfmoon', 'Super Yellow', 0, 'Regular', 'Female', '1', ''),
(483, 'IC000023', 'A4M0002', 'HM SY', 'Halfmoon', 'Super Yellow', 0, 'Junior', 'Male', '1', ''),
(484, 'IC000024', 'A4F0002', 'HM SY', 'Halfmoon', 'Super Yellow', 0, 'Junior', 'Female', '1', ''),
(485, 'IC000025', 'A4M0003', 'HM Orange', 'Halfmoon', 'Orange', 0, 'Regular', 'Male', '1', ''),
(486, 'IC000026', 'A4F0003', 'HM Orange', 'Halfmoon', 'Orange', 0, 'Regular', 'Female', '1', ''),
(487, 'IC000027', 'A4M0004', 'HM Orange', 'Halfmoon', 'Orange', 0, 'Junior', 'Male', '1', ''),
(488, 'IC000028', 'A4F0004', 'HM Orange', 'Halfmoon', 'Orange', 0, 'Junior', 'Female', '1', ''),
(489, 'IC000029', 'A4M0005', 'HM Cello', 'Halfmoon', 'Cellophane', 0, 'Regular', 'Male', '1', ''),
(490, 'IC000030', 'A4F0005', 'HM Cello', 'Halfmoon', 'Cellophane', 0, 'Regular', 'Female', '1', ''),
(491, 'IC000031', 'A4M0006', 'HM Cello', 'Halfmoon', 'Cellophane', 0, 'Junior', 'Male', '1', ''),
(492, 'IC000032', 'A4F0006', 'HM Cello', 'Halfmoon', 'Cellophane', 0, 'Junior', 'Female', '1', ''),
(493, 'IC000033', 'A5M0001', 'HM YD', 'Halfmoon', 'Yellow Dragon', 0, 'Regular', 'Male', '1', ''),
(494, 'IC000034', 'A5F0001', 'HM YD', 'Halfmoon', 'Yellow Dragon', 0, 'Regular', 'Female', '1', ''),
(495, 'IC000035', 'A5M0002', 'HM YD', 'Halfmoon', 'Yellow Dragon', 0, 'Junior', 'Male', '1', ''),
(496, 'IC000036', 'A5F0002', 'HM YD', 'Halfmoon', 'Yellow Dragon', 0, 'Junior', 'Female', '1', ''),
(497, 'IC000037', 'A5M0003', 'HM RD', 'Halfmoon', 'Red Dragon', 0, 'Regular', 'Male', '1', ''),
(498, 'IC000038', 'A5F0003', 'HM RD', 'Halfmoon', 'Red Dragon', 0, 'Regular', 'Female', '1', ''),
(499, 'IC000039', 'A5M0004', 'HM RD', 'Halfmoon', 'Red Dragon', 0, 'Junior', 'Male', '1', ''),
(500, 'IC000040', 'A5F0004', 'HM RD', 'Halfmoon', 'Red Dragon', 0, 'Junior', 'Female', '1', ''),
(501, 'IC000041', 'A5M0005', 'HM BD', 'Halfmoon', 'Black Dragon', 0, 'Regular', 'Male', '1', ''),
(502, 'IC000042', 'A5F0005', 'HM BD', 'Halfmoon', 'Black Dragon', 0, 'Regular', 'Female', '1', ''),
(503, 'IC000043', 'A5M0006', 'HM BD', 'Halfmoon', 'Black Dragon', 0, 'Junior', 'Male', '1', ''),
(504, 'IC000044', 'A5F0006', 'HM BD', 'Halfmoon', 'Black Dragon', 0, 'Junior', 'Female', '1', ''),
(505, 'IC000045', 'A5M0007', 'HM MG', 'Halfmoon', 'Mustard Gas', 0, 'Regular', 'Male', '1', ''),
(506, 'IC000046', 'A5F0007', 'HM MG', 'Halfmoon', 'Mustard Gas', 0, 'Regular', 'Female', '1', ''),
(507, 'IC000047', 'A5M0008', 'HM MG', 'Halfmoon', 'Mustard Gas', 0, 'Junior', 'Male', '1', ''),
(508, 'IC000048', 'A5F0008', 'HM MG', 'Halfmoon', 'Mustard Gas', 0, 'Junior', 'Female', '1', ''),
(509, 'IC000049', 'A6M0001', 'HM MS', 'Halfmoon', 'Mascot', 0, 'Regular', 'Male', '1', ''),
(510, 'IC000050', 'A6F0001', 'HM MS', 'Halfmoon', 'Mascot', 0, 'Regular', 'Female', '1', ''),
(511, 'IC000051', 'A6M0002', 'HM MS', 'Halfmoon', 'Mascot', 0, 'Junior', 'Male', '1', ''),
(512, 'IC000052', 'A6F0002', 'HM MS', 'Halfmoon', 'Mascot', 0, 'Junior', 'Female', '1', ''),
(513, 'IC000053', 'A6M0003', 'HM LV', 'Halfmoon', 'Lavender', 0, 'Regular', 'Male', '1', ''),
(514, 'IC000054', 'A6F0003', 'HM LV', 'Halfmoon', 'Lavender', 0, 'Regular', 'Female', '1', ''),
(515, 'IC000055', 'A6M0004', 'HM LV', 'Halfmoon', 'Lavender', 0, 'Junior', 'Male', '1', ''),
(516, 'IC000056', 'A6F0004', 'HM LV', 'Halfmoon', 'Lavender', 0, 'Junior', 'Female', '1', ''),
(517, 'IC000057', 'A7M0001', 'HM NM', 'Halfmoon', 'Nemo', 0, 'Regular', 'Male', '1', ''),
(518, 'IC000058', 'A7F0001', 'HM NM', 'Halfmoon', 'Nemo', 0, 'Regular', 'Female', '1', ''),
(519, 'IC000059', 'A7M0002', 'HM NM', 'Halfmoon', 'Nemo', 0, 'Junior', 'Male', '1', ''),
(520, 'IC000060', 'A7F0002', 'HM NM', 'Halfmoon', 'Nemo', 0, 'Junior', 'Female', '1', ''),
(521, 'IC000061', 'A7M0003', 'HM DOT', 'Halfmoon', 'Dot Dot', 0, 'Regular', 'Male', '1', ''),
(522, 'IC000062', 'A7F0003', 'HM DOT', 'Halfmoon', 'Dot Dot', 0, 'Regular', 'Female', '1', ''),
(523, 'IC000063', 'A7M0004', 'HM DOT', 'Halfmoon', 'Dot Dot', 0, 'Junior', 'Male', '1', ''),
(524, 'IC000064', 'A7F0004', 'HM DOT', 'Halfmoon', 'Dot Dot', 0, 'Junior', 'Female', '1', ''),
(525, 'IC000065', 'A8M0001', 'HM GZ', 'Halfmoon', 'Grizzled', 0, 'Regular', 'Male', '1', ''),
(526, 'IC000066', 'A8F0001', 'HM GZ', 'Halfmoon', 'Grizzled', 0, 'Regular', 'Female', '1', ''),
(527, 'IC000067', 'A8M0002', 'HM GZ', 'Halfmoon', 'Grizzled', 0, 'Junior', 'Male', '1', ''),
(528, 'IC000068', 'A8F0002', 'HM GZ', 'Halfmoon', 'Grizzled', 0, 'Junior', 'Female', '1', ''),
(529, 'IC000069', 'A9M0001', 'HM CP', 'Halfmoon', 'Cooper', 0, 'Regular', 'Male', '1', ''),
(530, 'IC000070', 'A9F0001', 'HM CP', 'Halfmoon', 'Cooper', 0, 'Regular', 'Female', '1', ''),
(531, 'IC000071', 'A9M0002', 'HM CP', 'Halfmoon', 'Cooper', 0, 'Junior', 'Male', '1', ''),
(532, 'IC000072', 'A9F0002', 'HM CP', 'Halfmoon', 'Cooper', 0, 'Junior', 'Female', '1', ''),
(533, 'IC000073', 'A9M0003', 'HM GT', 'Halfmoon', 'Green Turqoise', 0, 'Regular', 'Male', '1', ''),
(534, 'IC000074', 'A9F0003', 'HM GT', 'Halfmoon', 'Green Turqoise', 0, 'Regular', 'Female', '1', ''),
(535, 'IC000075', 'A9M0004', 'HM GT', 'Halfmoon', 'Green Turqoise', 0, 'Junior', 'Male', '1', ''),
(536, 'IC000076', 'A9F0004', 'HM GT', 'Halfmoon', 'Green Turqoise', 0, 'Junior', 'Female', '1', ''),
(537, 'IC000077', 'A10M0001', 'HM WP', 'Halfmoon', 'White Platinum', 0, 'Regular', 'Male', '1', ''),
(538, 'IC000078', '', 'HM WP', 'Halfmoon', 'White Platinum', 0, 'Regular', 'Female', '1', ''),
(539, 'IC000079', 'A10M0002', 'HM WP', 'Halfmoon', 'White Platinum', 0, 'Junior', 'Male', '1', ''),
(540, 'IC000080', 'A10F0002', 'HM WP', 'Halfmoon', 'White Platinum', 0, 'Junior', 'Female', '1', ''),
(541, 'IC000081', 'A11M0001', 'HM MC', 'Halfmoon', 'Multicolor', 0, 'Regular', 'Male', '1', ''),
(542, 'IC000082', 'A11F0001', 'HM MC', 'Halfmoon', 'Multicolor', 0, 'Regular', 'Female', '1', ''),
(543, 'IC000083', 'A11M0002', 'HM MC', 'Halfmoon', 'Multicolor', 0, 'Junior', 'Male', '1', ''),
(544, 'IC000084', 'A11F0002', 'HM MC', 'Halfmoon', 'Multicolor', 0, 'Junior', 'Female', '1', ''),
(545, 'IC000085', 'A11M0003', 'HM MCF', 'Halfmoon', 'Multicolor Fancy', 0, 'Regular', 'Male', '1', ''),
(546, 'IC000086', 'A11F0003', 'HM MCF', 'Halfmoon', 'Multicolor Fancy', 0, 'Regular', 'Female', '1', ''),
(547, 'IC000087', 'A11M0004', 'HM MCF', 'Halfmoon', 'Multicolor Fancy', 0, 'Junior', 'Male', '1', ''),
(548, 'IC000088', 'A11F0004', 'HM MCF', 'Halfmoon', 'Multicolor Fancy', 0, 'Junior', 'Female', '1', ''),
(549, 'IC000089', 'A11M0005', 'HM MCG', 'Halfmoon', 'Multicolor Galaxy', 0, 'Regular', 'Male', '1', ''),
(550, 'IC000090', 'A11F0005', 'HM MCG', 'Halfmoon', 'Multicolor Galaxy', 0, 'Regular', 'Female', '1', ''),
(551, 'IC000091', 'A11M0006', 'HM MCG', 'Halfmoon', 'Multicolor Galaxy', 0, 'Junior', 'Male', '1', ''),
(552, 'IC000092', 'A11F0006', 'HM MCG', 'Halfmoon', 'Multicolor Galaxy', 0, 'Junior', 'Female', '1', ''),
(553, 'IC000093', 'B1M0001', 'DTHM SR', 'DoubleTail Halfmoon', 'Super Red', 0, 'Regular', 'Male', '1', ''),
(554, 'IC000094', 'B1F0001', 'DTHM SR', 'DoubleTail Halfmoon', 'Super Red', 0, 'Regular', 'Female', '1', ''),
(555, 'IC000095', 'B1M0002', 'DTHM SR', 'DoubleTail Halfmoon', 'Super Red', 0, 'Junior', 'Male', '1', ''),
(556, 'IC000096', 'B1F0002', 'DTHM SR', 'DoubleTail Halfmoon', 'Super Red', 0, 'Junior', 'Female', '1', ''),
(557, 'IC000097', 'B1M0003', 'DTHM SB', 'DoubleTail Halfmoon', 'Super Black', 0, 'Regular', 'Male', '1', ''),
(558, 'IC000098', 'B1F0003', 'DTHM SB', 'DoubleTail Halfmoon', 'Super Black', 0, 'Regular', 'Female', '1', ''),
(559, 'IC000099', 'B1M0004', 'DTHM SB', 'DoubleTail Halfmoon', 'Super Black', 0, 'Junior', 'Male', '1', ''),
(560, 'IC000100', 'B1F0004', 'DTHM SB', 'DoubleTail Halfmoon', 'Super Black', 0, 'Junior', 'Female', '1', ''),
(561, 'IC000101', 'B2M0001', 'DTHM SY', 'DoubleTail Halfmoon', 'Super Yellow', 0, 'Regular', 'Male', '1', ''),
(562, 'IC000102', 'B2F0001', 'DTHM SY', 'DoubleTail Halfmoon', 'Super Yellow', 0, 'Regular', 'Female', '1', ''),
(563, 'IC000103', 'B2M0002', 'DTHM SY', 'DoubleTail Halfmoon', 'Super Yellow', 0, 'Junior', 'Male', '1', ''),
(564, 'IC000104', 'B2F0002', 'DTHM SY', 'DoubleTail Halfmoon', 'Super Yellow', 0, 'Junior', 'Female', '1', ''),
(565, 'IC000105', 'B2M0003', 'DTHM Orange', 'DoubleTail Halfmoon', 'Orange', 0, 'Regular', 'Male', '1', ''),
(566, 'IC000106', 'B2F0003', 'DTHM Orange', 'DoubleTail Halfmoon', 'Orange', 0, 'Regular', 'Female', '1', ''),
(567, 'IC000107', 'B2M0004', 'DTHM Orange', 'DoubleTail Halfmoon', 'Orange', 0, 'Junior', 'Male', '1', ''),
(568, 'IC000108', 'B2F0004', 'DTHM Orange', 'DoubleTail Halfmoon', 'Orange', 0, 'Junior', 'Female', '1', ''),
(569, 'IC000109', 'B2M0005', 'DTHM Cello', 'DoubleTail Halfmoon', 'Cellophane', 0, 'Regular', 'Male', '1', ''),
(570, 'IC000110', 'B2F0005', 'DTHM Cello', 'DoubleTail Halfmoon', 'Cellophane', 0, 'Regular', 'Female', '1', ''),
(571, 'IC000111', 'B2M0006', 'DTHM Cello', 'DoubleTail Halfmoon', 'Cellophane', 0, 'Junior', 'Male', '1', ''),
(572, 'IC000112', 'B2F0006', 'DTHM Cello', 'DoubleTail Halfmoon', 'Cellophane', 0, 'Junior', 'Female', '1', ''),
(573, 'IC000113', 'B3M0001', 'DTHM MS', 'DoubleTail Halfmoon', 'Mascot', 0, 'Regular', 'Male', '1', ''),
(574, 'IC000114', 'B3F0001', 'DTHM MS', 'DoubleTail Halfmoon', 'Mascot', 0, 'Regular', 'Female', '1', ''),
(575, 'IC000115', 'B3M0002', 'DTHM MS', 'DoubleTail Halfmoon', 'Mascot', 0, 'Junior', 'Male', '1', ''),
(576, 'IC000116', 'B3F0002', 'DTHM MS', 'DoubleTail Halfmoon', 'Mascot', 0, 'Junior', 'Female', '1', ''),
(577, 'IC000117', 'B3M0003', 'DTHM MG', 'DoubleTail Halfmoon', 'Mustard Gas', 0, 'Regular', 'Male', '1', ''),
(578, 'IC000118', 'B3F0003', 'DTHM MG', 'DoubleTail Halfmoon', 'Mustard Gas', 0, 'Regular', 'Female', '1', ''),
(579, 'IC000119', 'B3M0004', 'DTHM MG', 'DoubleTail Halfmoon', 'Mustard Gas', 0, 'Junior', 'Male', '1', ''),
(580, 'IC000120', 'B3F0004', 'DTHM MG', 'DoubleTail Halfmoon', 'Mustard Gas', 0, 'Junior', 'Female', '1', ''),
(581, 'IC000121', 'B3M0005', 'DTHM GZ', 'DoubleTail Halfmoon', 'Grizzled', 0, 'Regular', 'Male', '1', ''),
(582, 'IC000122', 'B3F0005', 'DTHM GZ', 'DoubleTail Halfmoon', 'Grizzled', 0, 'Regular', 'Female', '1', ''),
(583, 'IC000123', 'B3M0006', 'DTHM GZ', 'DoubleTail Halfmoon', 'Grizzled', 0, 'Junior', 'Male', '1', ''),
(584, 'IC000124', 'B3F0006', 'DTHM GZ', 'DoubleTail Halfmoon', 'Grizzled', 0, 'Junior', 'Female', '1', ''),
(585, 'IC000125', 'B3M0007', 'DTHM NM', 'DoubleTail Halfmoon', 'Nemo', 0, 'Regular', 'Male', '1', ''),
(586, 'IC000126', 'B3F0007', 'DTHM NM', 'DoubleTail Halfmoon', 'Nemo', 0, 'Regular', 'Female', '1', ''),
(587, 'IC000127', 'B3M0008', 'DTHM NM', 'DoubleTail Halfmoon', 'Nemo', 0, 'Junior', 'Male', '1', ''),
(588, 'IC000128', 'B3F0008', 'DTHM NM', 'DoubleTail Halfmoon', 'Nemo', 0, 'Junior', 'Female', '1', ''),
(589, 'IC000129', 'B4M0001', 'DTHM CP', 'DoubleTail Halfmoon', 'Cooper', 0, 'Regular', 'Male', '1', ''),
(590, 'IC000130', 'B4F0001', 'DTHM CP', 'DoubleTail Halfmoon', 'Cooper', 0, 'Regular', 'Female', '1', ''),
(591, 'IC000131', 'B4M0002', 'DTHM CP', 'DoubleTail Halfmoon', 'Cooper', 0, 'Junior', 'Male', '1', ''),
(592, 'IC000132', 'B4F0002', 'DTHM CP', 'DoubleTail Halfmoon', 'Cooper', 0, 'Junior', 'Female', '1', ''),
(593, 'IC000133', 'B4M0003', 'DTHM WP', 'DoubleTail Halfmoon', 'White Platinum', 0, 'Regular', 'Male', '1', ''),
(594, 'IC000134', 'B4F0003', 'DTHM WP', 'DoubleTail Halfmoon', 'White Platinum', 0, 'Regular', 'Female', '1', ''),
(595, 'IC000135', 'B4M0004', 'DTHM WP', 'DoubleTail Halfmoon', 'White Platinum', 0, 'Junior', 'Male', '1', ''),
(596, 'IC000136', 'B4F0004', 'DTHM WP', 'DoubleTail Halfmoon', 'White Platinum', 0, 'Junior', 'Female', '1', ''),
(597, 'IC000137', 'B5M0001', 'DTHM MC', 'DoubleTail Halfmoon', 'Multicolor', 0, 'Regular', 'Male', '1', ''),
(598, 'IC000138', 'B5F0001', 'DTHM MC', 'DoubleTail Halfmoon', 'Multicolor', 0, 'Regular', 'Female', '1', ''),
(599, 'IC000139', 'B5M0002', 'DTHM MC', 'DoubleTail Halfmoon', 'Multicolor', 0, 'Junior', 'Male', '1', ''),
(600, 'IC000140', 'B5F0002', 'DTHM MC', 'DoubleTail Halfmoon', 'Multicolor', 0, 'Junior', 'Female', '1', ''),
(601, 'IC000141', 'C1M0001', 'CT SR', 'Crowntail', 'Super Red', 0, 'Regular', 'Male', '1', ''),
(602, 'IC000142', 'C1F0001', 'CT SR', 'Crowntail', 'Super Red', 0, 'Regular', 'Female', '1', ''),
(603, 'IC000143', 'C1M0002', 'CT SR', 'Crowntail', 'Super Red', 0, 'Junior', 'Male', '1', ''),
(604, 'IC000144', 'C1F0002', 'CT SR', 'Crowntail', 'Super Red', 0, 'Junior', 'Female', '1', ''),
(605, 'IC000145', 'C2M0001', 'CT BH', 'Crowntail', 'Black Head Steel Blue', 0, 'Regular', 'Male', '1', ''),
(606, 'IC000146', 'C2F0001', 'CT BH', 'Crowntail', 'Black Head Steel Blue', 0, 'Regular', 'Female', '1', ''),
(607, 'IC000147', 'C2M0002', 'CT BH', 'Crowntail', 'Black Head Steel Blue', 0, 'Junior', 'Male', '1', ''),
(608, 'IC000148', 'C2F0002', 'CT BH', 'Crowntail', 'Black Head Steel Blue', 0, 'Junior', 'Female', '1', ''),
(609, 'IC000149', 'C2M0003', 'CT BH', 'Crowntail', 'Black Head Royal Blue', 0, 'Regular', 'Male', '1', ''),
(610, 'IC000150', 'C2F0003', 'CT BH', 'Crowntail', 'Black Head Royal Blue', 0, 'Regular', 'Female', '1', ''),
(611, 'IC000151', 'C2M0004', 'CT BH', 'Crowntail', 'Black Head Royal Blue', 0, 'Junior', 'Male', '1', ''),
(612, 'IC000152', 'C2F0004', 'CT BH', 'Crowntail', 'Black Head Royal Blue', 0, 'Junior', 'Female', '1', ''),
(613, 'IC000153', 'C2M0005', 'CT BH', 'Crowntail', 'Black Head Green Turqoise', 0, 'Regular', 'Male', '1', ''),
(614, 'IC000154', 'C2F0005', 'CT BH', 'Crowntail', 'Black Head Green Turqoise', 0, 'Regular', 'Female', '1', ''),
(615, 'IC000155', 'C2M0006', 'CT BH', 'Crowntail', 'Black Head Green Turqoise', 0, 'Junior', 'Male', '1', ''),
(616, 'IC000156', 'C2F0006', 'CT BH', 'Crowntail', 'Black Head Green Turqoise', 0, 'Junior', 'Female', '1', ''),
(617, 'IC000157', 'C3M0001', 'CT SY', 'Crowntail', 'Super Yellow', 0, 'Regular', 'Male', '1', ''),
(618, 'IC000158', 'C3F0001', 'CT SY', 'Crowntail', 'Super Yellow', 0, 'Regular', 'Female', '1', ''),
(619, 'IC000159', 'C3M0002', 'CT SY', 'Crowntail', 'Super Yellow', 0, 'Junior', 'Male', '1', ''),
(620, 'IC000160', 'C3F0002', 'CT SY', 'Crowntail', 'Super Yellow', 0, 'Junior', 'Female', '1', ''),
(621, 'IC000161', 'C3M0003', 'CT Orange', 'Crowntail', 'Orange', 0, 'Regular', 'Male', '1', ''),
(622, 'IC000162', 'C3F0003', 'CT Orange', 'Crowntail', 'Orange', 0, 'Regular', 'Female', '1', ''),
(623, 'IC000163', 'C3M0004', 'CT Orange', 'Crowntail', 'Orange', 0, 'Junior', 'Male', '1', ''),
(624, 'IC000164', 'C3F0004', 'CT Orange', 'Crowntail', 'Orange', 0, 'Junior', 'Female', '1', ''),
(625, 'IC000165', 'C4M0001', 'CT RD', 'Crowntail', 'Red Dragon', 0, 'Regular', 'Male', '1', ''),
(626, 'IC000166', 'C4F0001', 'CT RD', 'Crowntail', 'Red Dragon', 0, 'Regular', 'Female', '1', ''),
(627, 'IC000167', 'C4M0002', 'CT RD', 'Crowntail', 'Red Dragon', 0, 'Junior', 'Male', '1', ''),
(628, 'IC000168', 'C4F0002', 'CT RD', 'Crowntail', 'Red Dragon', 0, 'Junior', 'Female', '1', ''),
(629, 'IC000169', 'C4M0003', 'CT MG', 'Crowntail', 'Mustard Gas', 0, 'Regular', 'Male', '1', ''),
(630, 'IC000170', 'C4F0003', 'CT MG', 'Crowntail', 'Mustard Gas', 0, 'Regular', 'Female', '1', ''),
(631, 'IC000171', 'C4M0004', 'CT MG', 'Crowntail', 'Mustard Gas', 0, 'Junior', 'Male', '1', ''),
(632, 'IC000172', 'C4F0004', 'CT MG', 'Crowntail', 'Mustard Gas', 0, 'Junior', 'Female', '1', ''),
(633, 'IC000173', 'C5M0001', 'CT MS', 'Crowntail', 'Mascot', 0, 'Regular', 'Male', '1', ''),
(634, 'IC000174', 'C5F0001', 'CT MS', 'Crowntail', 'Mascot', 0, 'Regular', 'Female', '1', ''),
(635, 'IC000175', 'C5M0002', 'CT MS', 'Crowntail', 'Mascot', 0, 'Junior', 'Male', '1', ''),
(636, 'IC000176', 'C5F0002', 'CT MS', 'Crowntail', 'Mascot', 0, 'Junior', 'Female', '1', ''),
(637, 'IC000177', 'C6M0001', 'CT MB', 'Crowntail', 'Marble', 0, 'Regular', 'Male', '1', ''),
(638, 'IC000178', 'C6F0001', 'CT MB', 'Crowntail', 'Marble', 0, 'Regular', 'Female', '1', ''),
(639, 'IC000179', 'C6M0002', 'CT MB', 'Crowntail', 'Marble', 0, 'Junior', 'Male', '1', ''),
(640, 'IC000180', 'C6F0002', 'CT MB', 'Crowntail', 'Marble', 0, 'Junior', 'Female', '1', ''),
(641, 'IC000181', 'C7M0001', 'CT GZ', 'Crowntail', 'Grizzled', 0, 'Regular', 'Male', '1', ''),
(642, 'IC000182', 'C7F0001', 'CT GZ', 'Crowntail', 'Grizzled', 0, 'Regular', 'Female', '1', ''),
(643, 'IC000183', 'C7M0002', 'CT GZ', 'Crowntail', 'Grizzled', 0, 'Junior', 'Male', '1', ''),
(644, 'IC000184', 'C7F0002', 'CT GZ', 'Crowntail', 'Grizzled', 0, 'Junior', 'Female', '1', ''),
(645, 'IC000185', 'C8M0001', 'CT BL', 'Crowntail', 'Black Orchid', 0, 'Regular', 'Male', '1', ''),
(646, 'IC000186', 'C8F0001', 'CT BL', 'Crowntail', 'Black Orchid', 0, 'Regular', 'Female', '1', ''),
(647, 'IC000187', 'C8M0002', 'CT BL', 'Crowntail', 'Black Orchid', 0, 'Junior', 'Male', '1', ''),
(648, 'IC000188', 'C8F0002', 'CT BL', 'Crowntail', 'Black Orchid', 0, 'Junior', 'Female', '1', ''),
(649, 'IC000189', 'C9M0001', 'CT CP', 'Crowntail', 'Cooper', 0, 'Regular', 'Male', '1', ''),
(650, 'IC000190', 'C9F0001', 'CT CP', 'Crowntail', 'Cooper', 0, 'Regular', 'Female', '1', ''),
(651, 'IC000191', 'C9M0002', 'CT CP', 'Crowntail', 'Cooper', 0, 'Junior', 'Male', '1', ''),
(652, 'IC000192', 'C9F0002', 'CT CP', 'Crowntail', 'Cooper', 0, 'Junior', 'Female', '1', ''),
(653, 'IC000193', 'C9M0003', 'CT GT', 'Crowntail', 'Green Turqoise', 0, 'Regular', 'Male', '1', ''),
(654, 'IC000194', 'C9F0003', 'CT GT', 'Crowntail', 'Green Turqoise', 0, 'Regular', 'Female', '1', ''),
(655, 'IC000195', 'C9M0004', 'CT GT', 'Crowntail', 'Green Turqoise', 0, 'Junior', 'Male', '1', ''),
(656, 'IC000196', 'C9F0004', 'CT GT', 'Crowntail', 'Green Turqoise', 0, 'Junior', 'Female', '1', ''),
(657, 'IC000197', 'C10M0001', 'CT WP', 'Crowntail', 'White Platinum', 0, 'Regular', 'Male', '1', ''),
(658, 'IC000198', 'C10F0001', 'CT WP', 'Crowntail', 'White Platinum', 0, 'Regular', 'Female', '1', ''),
(659, 'IC000199', 'C10M0002', 'CT WP', 'Crowntail', 'White Platinum', 0, 'Junior', 'Male', '1', ''),
(660, 'IC000200', 'C10F0002', 'CT WP', 'Crowntail', 'White Platinum', 0, 'Junior', 'Female', '1', ''),
(661, 'IC000201', 'C11M0001', 'CT MC', 'Crowntail', 'Multicolor', 0, 'Regular', 'Male', '1', ''),
(662, 'IC000202', 'C11F0001', 'CT MC', 'Crowntail', 'Multicolor', 0, 'Regular', 'Female', '1', ''),
(663, 'IC000203', 'C11M0002', 'CT MC', 'Crowntail', 'Multicolor', 0, 'Junior', 'Male', '1', ''),
(664, 'IC000204', 'C11F0002', 'CT MC', 'Crowntail', 'Multicolor', 0, 'Junior', 'Female', '1', ''),
(665, 'IC000205', 'D1M0001', 'PK SR', 'Plakad', 'Super Red', 0, 'Regular', 'Male', '1', ''),
(666, 'IC000206', 'D1F0001', 'PK SR', 'Plakad', 'Super Red', 0, 'Regular', 'Female', '1', ''),
(667, 'IC000207', 'D1M0002', 'PK SR', 'Plakad', 'Super Red', 0, 'Junior', 'Male', '1', ''),
(668, 'IC000208', 'D1F0002', 'PK SR', 'Plakad', 'Super Red', 0, 'Junior', 'Female', '1', ''),
(669, 'IC000209', 'D2M0001', 'PK SB', 'Plakad', 'Super Black', 0, 'Regular', 'Male', '1', ''),
(670, 'IC000210', 'D2F0001', 'PK SB', 'Plakad', 'Super Black', 0, 'Regular', 'Female', '1', ''),
(671, 'IC000211', 'D2M0002', 'PK SB', 'Plakad', 'Super Black', 0, 'Junior', 'Male', '1', ''),
(672, 'IC000212', 'D2F0002', 'PK SB', 'Plakad', 'Super Black', 0, 'Junior', 'Female', '1', ''),
(673, 'IC000213', 'D3M0001', 'PK BH', 'Plakad', 'Black Head Steel Blue', 0, 'Regular', 'Male', '1', ''),
(674, 'IC000214', 'D3F0001', 'PK BH', 'Plakad', 'Black Head Steel Blue', 0, 'Regular', 'Female', '1', ''),
(675, 'IC000215', 'D3M0002', 'PK BH', 'Plakad', 'Black Head Steel Blue', 0, 'Junior', 'Male', '1', ''),
(676, 'IC000216', 'D3F0002', 'PK BH', 'Plakad', 'Black Head Steel Blue', 0, 'Junior', 'Female', '1', ''),
(677, 'IC000217', 'D3M0003', 'PK BH', 'Plakad', 'Black Head Royal Blue', 0, 'Regular', 'Male', '1', ''),
(678, 'IC000218', 'D3F0003', 'PK BH', 'Plakad', 'Black Head Royal Blue', 0, 'Regular', 'Female', '1', ''),
(679, 'IC000219', 'D3M0004', 'PK BH', 'Plakad', 'Black Head Royal Blue', 0, 'Junior', 'Male', '1', ''),
(680, 'IC000220', 'D3F0004', 'PK BH', 'Plakad', 'Black Head Royal Blue', 0, 'Junior', 'Female', '1', ''),
(681, 'IC000221', 'D3M0005', 'PK BH', 'Plakad', 'Black Head Green Turqoise', 0, 'Regular', 'Male', '1', ''),
(682, 'IC000222', 'D3F0005', 'PK BH', 'Plakad', 'Black Head Green Turqoise', 0, 'Regular', 'Female', '1', ''),
(683, 'IC000223', 'D3M0006', 'PK BH', 'Plakad', 'Black Head Green Turqoise', 0, 'Junior', 'Male', '1', ''),
(684, 'IC000224', 'D3F0006', 'PK BH', 'Plakad', 'Black Head Green Turqoise', 0, 'Junior', 'Female', '1', ''),
(685, 'IC000225', 'D4M0001', 'PK SY', 'Plakad', 'Super Yellow', 0, 'Regular', 'Male', '1', ''),
(686, 'IC000226', 'D4F0001', 'PK SY', 'Plakad', 'Super Yellow', 0, 'Regular', 'Female', '1', ''),
(687, 'IC000227', 'D4M0002', 'PK SY', 'Plakad', 'Super Yellow', 0, 'Junior', 'Male', '1', ''),
(688, 'IC000228', 'D4F0002', 'PK SY', 'Plakad', 'Super Yellow', 0, 'Junior', 'Female', '1', ''),
(689, 'IC000229', 'D4M0003', 'PK Orange', 'Plakad', 'Orange', 0, 'Regular', 'Male', '1', ''),
(690, 'IC000230', 'D4F0003', 'PK Orange', 'Plakad', 'Orange', 0, 'Regular', 'Female', '1', ''),
(691, 'IC000231', 'D4M0004', 'PK Orange', 'Plakad', 'Orange', 0, 'Junior', 'Male', '1', ''),
(692, 'IC000232', 'D4F0004', 'PK Orange', 'Plakad', 'Orange', 0, 'Junior', 'Female', '1', ''),
(693, 'IC000233', 'D4M0005', 'PK Cello', 'Plakad', 'Cellophane', 0, 'Regular', 'Male', '1', ''),
(694, 'IC000234', 'D4F0005', 'PK Cello', 'Plakad', 'Cellophane', 0, 'Regular', 'Female', '1', ''),
(695, 'IC000235', 'D4M0006', 'PK Cello', 'Plakad', 'Cellophane', 0, 'Junior', 'Male', '1', ''),
(696, 'IC000236', 'D4F0006', 'PK Cello', 'Plakad', 'Cellophane', 0, 'Junior', 'Female', '1', ''),
(697, 'IC000237', 'D5M0001', 'PK YD', 'Plakad', 'Yellow Dragon', 0, 'Regular', 'Male', '1', ''),
(698, 'IC000238', 'D5F0001', 'PK YD', 'Plakad', 'Yellow Dragon', 0, 'Regular', 'Female', '1', ''),
(699, 'IC000239', 'D5M0002', 'PK YD', 'Plakad', 'Yellow Dragon', 0, 'Junior', 'Male', '1', ''),
(700, 'IC000240', 'D5F0002', 'PK YD', 'Plakad', 'Yellow Dragon', 0, 'Junior', 'Female', '1', ''),
(701, 'IC000241', 'D5M0003', 'PK RD', 'Plakad', 'Red Dragon', 0, 'Regular', 'Male', '1', ''),
(702, 'IC000242', 'D5F0003', 'PK RD', 'Plakad', 'Red Dragon', 0, 'Regular', 'Female', '1', ''),
(703, 'IC000243', 'D5M0004', 'PK RD', 'Plakad', 'Red Dragon', 0, 'Junior', 'Male', '1', ''),
(704, 'IC000244', 'D5F0004', 'PK RD', 'Plakad', 'Red Dragon', 0, 'Junior', 'Female', '1', ''),
(705, 'IC000245', 'D5M0005', 'PK BD', 'Plakad', 'Black Dragon', 0, 'Regular', 'Male', '1', ''),
(706, 'IC000246', 'D5F0005', 'PK BD', 'Plakad', 'Black Dragon', 0, 'Regular', 'Female', '1', ''),
(707, 'IC000247', 'D5M0006', 'PK BD', 'Plakad', 'Black Dragon', 0, 'Junior', 'Male', '1', ''),
(708, 'IC000248', 'D5F0006', 'PK BD', 'Plakad', 'Black Dragon', 0, 'Junior', 'Female', '1', ''),
(709, 'IC000249', 'D5M0007', 'PK MG', 'Plakad', 'Mustard Gas', 0, 'Regular', 'Male', '1', ''),
(710, 'IC000250', 'D5F0007', 'PK MG', 'Plakad', 'Mustard Gas', 0, 'Regular', 'Female', '1', ''),
(711, 'IC000251', 'D5M0008', 'PK MG', 'Plakad', 'Mustard Gas', 0, 'Junior', 'Male', '1', ''),
(712, 'IC000252', 'D5F0008', 'PK MG', 'Plakad', 'Mustard Gas', 0, 'Junior', 'Female', '1', ''),
(713, 'IC000253', 'D6M0001', 'PK MS', 'Plakad', 'Mascot', 0, 'Regular', 'Male', '1', ''),
(714, 'IC000254', 'D6F0001', 'PK MS', 'Plakad', 'Mascot', 0, 'Regular', 'Female', '1', ''),
(715, 'IC000255', 'D6M0002', 'PK MS', 'Plakad', 'Mascot', 0, 'Junior', 'Male', '1', ''),
(716, 'IC000256', 'D6F0002', 'PK MS', 'Plakad', 'Mascot', 0, 'Junior', 'Female', '1', ''),
(717, 'IC000257', 'D6M0003', 'PK LV', 'Plakad', 'Lavender', 0, 'Regular', 'Male', '1', ''),
(718, 'IC000258', 'D6F0003', 'PK LV', 'Plakad', 'Lavender', 0, 'Regular', 'Female', '1', ''),
(719, 'IC000259', 'D6M0004', 'PK LV', 'Plakad', 'Lavender', 0, 'Junior', 'Male', '1', ''),
(720, 'IC000260', 'D6F0004', 'PK LV', 'Plakad', 'Lavender', 0, 'Junior', 'Female', '1', ''),
(721, 'IC000261', 'D6M0005', 'PK BR', 'Plakad', 'Blue Rim', 0, 'Regular', 'Male', '1', ''),
(722, 'IC000262', 'D6F0005', 'PK BR', 'Plakad', 'Blue Rim', 0, 'Regular', 'Female', '1', ''),
(723, 'IC000263', 'D6M0006', 'PK BR', 'Plakad', 'Blue Rim', 0, 'Junior', 'Male', '1', ''),
(724, 'IC000264', 'D6F0006', 'PK BR', 'Plakad', 'Blue Rim', 0, 'Junior', 'Female', '1', ''),
(725, 'IC000265', 'D7M0001', 'PK NM', 'Plakad', 'Nemo', 0, 'Regular', 'Male', '1', ''),
(726, 'IC000266', 'D7F0001', 'PK NM', 'Plakad', 'Nemo', 0, 'Regular', 'Female', '1', ''),
(727, 'IC000267', 'D7M0002', 'PK NM', 'Plakad', 'Nemo', 0, 'Junior', 'Male', '1', ''),
(728, 'IC000268', 'D7F0002', 'PK NM', 'Plakad', 'Nemo', 0, 'Junior', 'Female', '1', ''),
(729, 'IC000269', 'D7M0003', 'PK DOT', 'Plakad', 'Dot Dot', 0, 'Regular', 'Male', '1', ''),
(730, 'IC000270', 'D7F0003', 'PK DOT', 'Plakad', 'Dot Dot', 0, 'Regular', 'Female', '1', ''),
(731, 'IC000271', 'D7M0004', 'PK DOT', 'Plakad', 'Dot Dot', 0, 'Junior', 'Male', '1', ''),
(732, 'IC000272', 'D7F0004', 'PK DOT', 'Plakad', 'Dot Dot', 0, 'Junior', 'Female', '1', ''),
(733, 'IC000273', 'D8M0001', 'PK GZ', 'Plakad', 'Grizzled', 0, 'Regular', 'Male', '1', ''),
(734, 'IC000274', 'D8F0001', 'PK GZ', 'Plakad', 'Grizzled', 0, 'Regular', 'Female', '1', ''),
(735, 'IC000275', 'D8M0002', 'PK GZ', 'Plakad', 'Grizzled', 0, 'Junior', 'Male', '1', ''),
(736, 'IC000276', 'D8F0002', 'PK GZ', 'Plakad', 'Grizzled', 0, 'Junior', 'Female', '1', ''),
(737, 'IC000277', 'D9M0001', 'PK CP', 'Plakad', 'Cooper', 0, 'Regular', 'Male', '1', ''),
(738, 'IC000278', 'D9F0001', 'PK CP', 'Plakad', 'Cooper', 0, 'Regular', 'Female', '1', ''),
(739, 'IC000279', 'D9M0002', 'PK CP', 'Plakad', 'Cooper', 0, 'Junior', 'Male', '1', ''),
(740, 'IC000280', 'D9F0002', 'PK CP', 'Plakad', 'Cooper', 0, 'Junior', 'Female', '1', ''),
(741, 'IC000281', 'D9M0003', 'PK GT', 'Plakad', 'Green Turqoise', 0, 'Regular', 'Male', '1', ''),
(742, 'IC000282', 'D9F0003', 'PK GT', 'Plakad', 'Green Turqoise', 0, 'Regular', 'Female', '1', ''),
(743, 'IC000283', 'D9M0004', 'PK GT', 'Plakad', 'Green Turqoise', 0, 'Junior', 'Male', '1', ''),
(744, 'IC000284', 'D9F0004', 'PK GT', 'Plakad', 'Green Turqoise', 0, 'Junior', 'Female', '1', ''),
(745, 'IC000285', 'D10M0001', 'PK WP', 'Plakad', 'White Platinum', 0, 'Regular', 'Male', '1', ''),
(746, 'IC000286', 'D10F0001', 'PK WP', 'Plakad', 'White Platinum', 0, 'Regular', 'Female', '1', ''),
(747, 'IC000287', 'D10M0002', 'PK WP', 'Plakad', 'White Platinum', 0, 'Junior', 'Male', '1', ''),
(748, 'IC000288', 'D10F0002', 'PK WP', 'Plakad', 'White Platinum', 0, 'Junior', 'Female', '1', ''),
(749, 'IC000289', 'D10M0003', 'PK SG', 'Plakad', 'Super Gold', 0, 'Regular', 'Male', '1', ''),
(750, 'IC000290', 'D10F0003', 'PK SG', 'Plakad', 'Super Gold', 0, 'Regular', 'Female', '1', ''),
(751, 'IC000291', 'D10M0004', 'PK SG', 'Plakad', 'Super Gold', 0, 'Junior', 'Male', '1', ''),
(752, 'IC000292', 'D10F0004', 'PK SG', 'Plakad', 'Super Gold', 0, 'Junior', 'Female', '1', ''),
(753, 'IC000293', 'D11M0001', 'PK MC', 'Plakad', 'Multicolor', 0, 'Regular', 'Male', '1', ''),
(754, 'IC000294', 'D11F0001', 'PK MC', 'Plakad', 'Multicolor', 0, 'Regular', 'Female', '1', ''),
(755, 'IC000295', 'D11M0002', 'PK MC', 'Plakad', 'Multicolor', 0, 'Junior', 'Male', '1', ''),
(756, 'IC000296', 'D11F0002', 'PK MC', 'Plakad', 'Multicolor', 0, 'Junior', 'Female', '1', ''),
(757, 'IC000297', 'D11M0003', 'PK MCF', 'Plakad', 'Multicolor Fancy', 0, 'Regular', 'Male', '1', ''),
(758, 'IC000298', 'D11F0003', 'PK MCF', 'Plakad', 'Multicolor Fancy', 0, 'Regular', 'Female', '1', ''),
(759, 'IC000299', 'D11M0004', 'PK MCF', 'Plakad', 'Multicolor Fancy', 0, 'Junior', 'Male', '1', ''),
(760, 'IC000300', 'D11F0004', 'PK MCF', 'Plakad', 'Multicolor Fancy', 0, 'Junior', 'Female', '1', ''),
(761, 'IC000301', 'D11M0005', 'PK MCG', 'Plakad', 'Multicolor Galaxy', 0, 'Regular', 'Male', '1', ''),
(762, 'IC000302', 'D11F0005', 'PK MCG', 'Plakad', 'Multicolor Galaxy', 0, 'Regular', 'Female', '1', ''),
(763, 'IC000303', 'D11M0006', 'PK MCG', 'Plakad', 'Multicolor Galaxy', 0, 'Junior', 'Male', '1', ''),
(764, 'IC000304', 'D11F0006', 'PK MCG', 'Plakad', 'Multicolor Galaxy', 0, 'Junior', 'Female', '1', ''),
(765, 'IC000305', 'D12M0001', 'PK DE SG', 'Plakad', 'Dumbo Ear Super Gold', 0, 'Regular', 'Male', '1', ''),
(766, 'IC000306', 'D12F0001', 'PK DE SG', 'Plakad', 'Dumbo Ear Super Gold', 0, 'Regular', 'Female', '1', ''),
(767, 'IC000307', 'D12M0002', 'PK DE SG', 'Plakad', 'Dumbo Ear Super Gold', 0, 'Junior', 'Male', '1', ''),
(768, 'IC000308', 'D12F0002', 'PK DE SG', 'Plakad', 'Dumbo Ear Super Gold', 0, 'Junior', 'Female', '1', ''),
(769, 'IC000309', 'D12M0003', 'PK DE CP', 'Plakad', 'Dumbo Ear Cooper', 0, 'Regular', 'Male', '1', ''),
(770, 'IC000310', 'D12F0003', 'PK DE CP', 'Plakad', 'Dumbo Ear Cooper', 0, 'Regular', 'Female', '1', ''),
(771, 'IC000311', 'D12M0004', 'PK DE CP', 'Plakad', 'Dumbo Ear Cooper', 0, 'Junior', 'Male', '1', ''),
(772, 'IC000312', 'D12F0004', 'PK DE CP', 'Plakad', 'Dumbo Ear Cooper', 0, 'Junior', 'Female', '1', ''),
(773, 'IC000313', 'D12M0005', 'PK DE MC', 'Plakad', 'Dumbo Ear Multicolor', 0, 'Regular', 'Male', '1', ''),
(774, 'IC000314', 'D12F0005', 'PK DE MC', 'Plakad', 'Dumbo Ear Multicolor', 0, 'Regular', 'Female', '1', ''),
(775, 'IC000315', 'D12M0006', 'PK DE MC', 'Plakad', 'Dumbo Ear Multicolor', 0, 'Junior', 'Male', '1', ''),
(776, 'IC000316', 'D12F0006', 'PK DE MC', 'Plakad', 'Dumbo Ear Multicolor', 0, 'Junior', 'Female', '1', ''),
(777, 'IC000317', 'E1M0001', 'GT SR', 'Giant', 'Super Red', 0, 'Regular', 'Male', '1', ''),
(778, 'IC000318', 'E1F0001', 'GT SR', 'Giant', 'Super Red', 0, 'Regular', 'Female', '1', ''),
(779, 'IC000319', 'E1M0002', 'GT SR', 'Giant', 'Super Red', 0, 'Junior', 'Male', '1', ''),
(780, 'IC000320', 'E1F0002', 'GT SR', 'Giant', 'Super Red', 0, 'Junior', 'Female', '1', ''),
(781, 'IC000321', 'E2M0001', 'GT SB', 'Giant', 'Super Black', 0, 'Regular', 'Male', '1', ''),
(782, 'IC000322', 'E2F0001', 'GT SB', 'Giant', 'Super Black', 0, 'Regular', 'Female', '1', ''),
(783, 'IC000323', 'E2M0002', 'GT SB', 'Giant', 'Super Black', 0, 'Junior', 'Male', '1', ''),
(784, 'IC000324', 'E2F0002', 'GT SB', 'Giant', 'Super Black', 0, 'Junior', 'Female', '1', ''),
(785, 'IC000325', 'E3M0001', 'GT NM', 'Giant', 'Nemo', 0, 'Regular', 'Male', '1', ''),
(786, 'IC000326', 'E3F0001', 'GT NM', 'Giant', 'Nemo', 0, 'Regular', 'Female', '1', ''),
(787, 'IC000327', 'E3M0002', 'GT NM', 'Giant', 'Nemo', 0, 'Junior', 'Male', '1', ''),
(788, 'IC000328', 'E3F0002', 'GT NM', 'Giant', 'Nemo', 0, 'Junior', 'Female', '1', ''),
(789, 'IC000329', 'E3M0003', 'GT GZ', 'Giant', 'Grizzled', 0, 'Regular', 'Male', '1', ''),
(790, 'IC000330', 'E3F0003', 'GT GZ', 'Giant', 'Grizzled', 0, 'Regular', 'Female', '1', ''),
(791, 'IC000331', 'E3M0004', 'GT GZ', 'Giant', 'Grizzled', 0, 'Junior', 'Male', '1', ''),
(792, 'IC000332', 'E3F0004', 'GT GZ', 'Giant', 'Grizzled', 0, 'Junior', 'Female', '1', ''),
(793, 'IC000333', 'E4M0001', 'GT CP', 'Giant', 'Cooper', 0, 'Regular', 'Male', '1', ''),
(794, 'IC000334', 'E4F0001', 'GT CP', 'Giant', 'Cooper', 0, 'Regular', 'Female', '1', ''),
(795, 'IC000335', 'E4M0002', 'GT CP', 'Giant', 'Cooper', 0, 'Junior', 'Male', '1', ''),
(796, 'IC000336', 'E4F0002', 'GT CP', 'Giant', 'Cooper', 0, 'Junior', 'Female', '1', ''),
(797, 'IC000337', 'E4M0003', 'GT WP', 'Giant', 'White Platinum', 0, 'Regular', 'Male', '1', ''),
(798, 'IC000338', 'E4F0003', 'GT WP', 'Giant', 'White Platinum', 0, 'Regular', 'Female', '1', ''),
(799, 'IC000339', 'E4M0004', 'GT WP', 'Giant', 'White Platinum', 0, 'Junior', 'Male', '1', ''),
(800, 'IC000340', 'E4F0004', 'GT WP', 'Giant', 'White Platinum', 0, 'Junior', 'Female', '1', ''),
(801, 'IC000341', 'E5M0001', 'GT MC', 'Giant', 'Multicolor', 0, 'Regular', 'Male', '1', ''),
(802, 'IC000342', 'E5F0001', 'GT MC', 'Giant', 'Multicolor', 0, 'Regular', 'Female', '1', ''),
(803, 'IC000343', 'E5M0002', 'GT MC', 'Giant', 'Multicolor', 0, 'Junior', 'Male', '1', ''),
(804, 'IC000344', 'E5F0002', 'GT MC', 'Giant', 'Multicolor', 0, 'Junior', 'Female', '1', ''),
(805, 'IC000345', 'F1M0001', 'DTPK MC', 'DoubleTail Plakad', 'Multicolor', 0, 'Regular', 'Male', '1', ''),
(806, 'IC000346', 'F1F0001', 'DTPK MC', 'DoubleTail Plakad', 'Multicolor', 0, 'Regular', 'Female', '1', ''),
(807, 'IC000347', 'F1M0002', 'DTPK MC 01', 'DoubleTail Plakad', 'Multicolor', 0, 'Junior', 'Male', '1', ''),
(808, 'IC000348', 'F1F0002', 'DTPK MC', 'DoubleTail Plakad', 'Multicolor', 0, 'Junior', 'Female', '1', ''),
(810, 'CPNG1M0003', '', 'Ikan Cupang Hijau 2', 'Halfmoon', 'Super Red', 0, '-', 'Female', '1', ''),
(811, 'CPNG1M0003', '', 'xxxxx', 'zzzzzzz', 'zzzzzzz', 0, 'zzzzzzz', 'Male', '1', 'zzzzzzz'),
(812, 'CPNG1M0003', 'contoh', 'contoh', 'contoh', 'cotntoh', 0, 'toms', 'Male', '1', ''),
(813, 'CPNG1M0003', 'Botolan', 'Botolan', 'Botolan', 'Botolan', 0, 'Baby', 'Male', '1', ''),
(814, 'CPNG1M0003', 'Toples 2L', 'Toples 2L', 'Toples 2L', 'Toples 2L', 0, 'Junior', 'Male', '1', ''),
(815, 'CPNGoples ', 'Toples 2L', 'Toples 2L', 'Toples 2L', 'Toples 2L', 0, 'Regular', 'Male', '1', ''),
(816, 'CPNGoples ', 'Toples 3L', 'Toples 3L', 'Toples 3L', 'Toples 3L', 0, 'Junior', 'Male', '1', ''),
(817, 'CPNGoples ', 'Toples 3L', 'Toples 3L', 'Toples 3L', 'Toples 3L', 0, 'Regular', 'Male', '1', ''),
(818, 'CPNGoples ', 'Toples 4L', 'Toples 4L', 'Toples 4L', 'Toples 4L', 0, 'Regular', 'Male', '1', ''),
(819, 'CPNGoples ', 'Toples 4L', 'Toples 4L', 'Toples 4L', 'Toples 4L', 0, 'Junior', 'Male', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `idcustomer` int(10) NOT NULL,
  `codecustomer` varchar(10) NOT NULL,
  `companyname` varchar(250) NOT NULL,
  `address01` text NOT NULL,
  `city01` varchar(250) NOT NULL,
  `name01` varchar(250) NOT NULL,
  `jabatan01` varchar(250) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(250) NOT NULL,
  `country` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL,
  `note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`idcustomer`, `codecustomer`, `companyname`, `address01`, `city01`, `name01`, `jabatan01`, `phone`, `email`, `country`, `status`, `note`) VALUES
(137, 'C000001', 'Atep Nurbana', 'Jalan Siliwangi III RT 004/ RW 010 No. 20, Medan Satria, Bekasi, Jawa Barat', 'KOTA BEKASI', 'Atep Nurbana', '', '82112121150', '', 'Indonesia', '', ''),
(139, 'C000003', 'Visnu Rahman', 'Jl. Ciputat baru gg. Harapan 1 RT 02/ RW 05, keluarahan Sawah, Kecamatam Ciputat', 'KOTA TANGERANG SELATAN', 'Visnu Rahman', '', '89601132568', 'visnurahman@gmail.com', 'Indonesia', '', ''),
(140, 'C000004', 'Adi', 'Jl. Pantai indah Utara 3 Kav. 18-19, Pantai Indah Kapuk, Keluarahan Kapuk Muara, kecamatan Penjaringan, Jakarta Utara 14460', 'KOTA JAKARTA UTARA', 'Adi', '', '81219983333', '', 'Indonesia', '', ''),
(141, 'C000005', 'Prima Yulikar', 'Jl. Gotong royong, jati asri residence D/4 RT01/RW18, Kelurahan Jati Rahayu, Kecamatan Pondok Melati, Pondok Gede, Bekasi 17414', 'KOTA BEKASI', 'Prima Yulikar', '', '97878212221', '', 'Indonesia', '', ''),
(142, 'C000006', 'Dylan Caesar', 'Jakarta Selatan, Cilandak, Jl. Cilandak Dalam, Perumahan Casmora No. C29 12430', 'KOTA JAKARTA SELATAN', 'Dylan Caesar', '', '818994797', '', 'Indonesia', '', ''),
(143, 'C000007', 'Vandy', 'Jl. Verdi Timur 1 no. 001 Cluster Verdi Symphonia, gading Serpong, 15334', 'KOTA TANGERANG', 'Vandy', '', '81299003939', '', 'Indonesia', '', ''),
(144, 'C000008', 'Rifqi Hardiyatna', 'Jl. Walet raya blok FA 23 Perumahan Graha kembangan, Keluarahan Kembangan, Kecamatan Kebomas', 'KOTA GRESIK', 'Rifqi Hardiyatna', '', '81330404451', '', 'Indonesia', '', ''),
(145, 'C000009', 'Arlen', 'Apratemen Aeropolis, Jl. Marsekal surya darma, Blok A no. 1, Pajang, benda, Tower ACR 3.7.20', 'KOTA TANGERANG', 'Arlen', '', '81299069991', '', 'Indonesia', '', ''),
(146, 'C000010', 'Kelvin', 'Bogor Nirwana Residence Panorama 1 no. 7, Bogor Selatan 16135', 'KOTA BOGOR', 'Kelvin', '', '81310168524', '', 'Indonesia', '', ''),
(147, 'C000011', 'Rudy Priyanto', 'Jl. Pertanian selatan no. 21 RT007/RW03, Kelurahan Klender, Kecamatan Duren Sawit, Jakarta Timur', 'KOTA JAKARTA TIMUR', 'Rudy Priyanto', '', '85718849035', 'roedy.priyanto@gmail.com', 'Indonesia', '', ''),
(148, 'C000012', 'Bram Swandika', 'Jl. Paseban Raya gg. Kramat Sawah 3 no. E7 RT001/RW02, Kelurahan Paseban, kecamatan Senen', 'KOTA JAKARTA PUSAT', 'Bram Swandika', '', '81230114035', 'ram.orthopaedi@gmail.com', 'Indonesia', '', ''),
(149, 'C000013', 'Erik Irlianta', 'Jl. Palem no. 06, Kelurahan Suci, Kecamatan Manyar, Kota Gresik, Jawa Timur', 'KOTA GRESIK', 'Erik Irlianta', '', '87836150964', '', 'Indonesia', '', ''),
(150, 'C000014', 'Adi Kurnia', 'Jl. Palangkaraya No. 33 Perum GKB, Keluarahan Sukomulyo, Kecamatan Manyar, kabupaten Gresik', 'KABUPATEN GRESIK', 'Adi Kurnia', '', '812322837988', '', 'Indonesia', '', ''),
(151, 'C000015', 'Muhamad Rusli', 'Jl. H. Pekir 1 RT007/006 no.26c, Kebayoran Lama, Grogol Utara', 'KOTA JAKARTA SELATAN', 'Muhamad Rusli', '', '81280912717', 'muhamadrusli752@gmail.com', 'Indonesia', '', ''),
(152, 'C000016', 'Toni Rinaldo', 'Grha Sentra Jl. Agung Perkasa IX Blok K1 no. 26-27, Sunter, Jakarta Utara', 'KOTA JAKARTA UTARA', 'Toni Rinaldo', '', '81998448854', '', 'Indonesia', '', ''),
(153, 'C000017', 'Wisnu', 'Komp. Jatiasih indah Jl. Bintan 2 no 111, RT02/RW06, keluarahan Jatirasa, kecamatan Jatiasih', 'KOTA BEKASI', 'Wisnu', '', '8111896009', '', 'Indonesia', '', ''),
(154, 'C000018', 'Zaki Mubaraq', 'Graha gardenia 1 blok XG 29/52, Citra Raya, keluarahan mekar Bakti, kecamatan Panongan, Kabupaten Tangerang, banten 15710', 'KOTA TANGERANG', 'Zaki Mubaraq', '', '81386088284', '', 'Indonesia', '', ''),
(155, 'C000019', 'Rizky Waka', 'Ampel lembang No. 40, Keluarahan Ampel, kecamatan Semampir, Surabaya Jawa Timur', 'KOTA SURABAYA', 'Rizky Waka', '', '85736932991', '', 'Indonesia', '', ''),
(156, 'C000020', 'Riva Sinjal', 'Jl. Dahlia II no.20 A, Komp. PJMI Bintaro, RT07/RW08, keluarahan Jurangmangu Timur, kecamatan Pondok Aren', 'KOTA TANGERANG SELATAN', 'Riva Sinjal', '', '85893238306', 'rivasinjal@gmail.com', 'Indonesia', '', ''),
(157, 'C000021', 'Albert', 'Jalan Raya Kelapa Nias blok GN 9, Kelapa Gading, Jakarta Utara \"Lazyboss Caf?\"\"', 'KOTA JAKARTA', 'Albert', '', '818732626', '', 'Indonesia', '', ''),
(158, 'C000022', 'Handoko', 'Damar Golf 1 no. 12, bukit glof mediterania, Pantai Indah Kapuk, RT007/RW005', 'KOTA JAKARTA UTARA', 'Handoko', '', '81383693999', '', 'Indonesia', '', ''),
(159, 'C000023', 'Billie', 'Harapan Indah 2 Cluster Taman Sari blok HN 3 no. 9b, bekasi Barat, medan Satria, 17133', 'KOTA BEKASI', 'Blille', '', '81380080440', '', 'Indonesia', '', ''),
(160, 'C000024', 'Aldo Prajogo', 'Jl. Sabilillah no. 58 (Toko Mulia Makmur), Kecamatan Citereup', 'KABUPATEN BOGOR', 'Aldo Prajogo', '', '81314914224', '', 'Indonesia', '', ''),
(161, 'C000025', 'Josphine', 'Grisea Timur 1 no. 6, The Spring, gading Serpong, Cihuni', 'KOTA TANGERANG', 'Josephine', '', '81212199550', '', 'Indonesia', '', ''),
(162, 'C000026', 'Bowo', 'Green Poca Residence Jl. Kayumanis Raya no. 179 Pondok Cabe, Kelurahan Pondok Cabe Udik, kecamatan Pamulang', 'KOTA TANGERANG SELATAN', 'Bowo', '', '81219546689', 'bowo@indostevia.com', 'Indonesia', '', ''),
(163, 'C000027', 'Debby Eko', 'Jl. Soekarno Hatta 28, Bangunsari, Ponorogo', 'KOTA PONOROGO', 'Debby Eko', '', '82142991188', '', 'Indonesia', '', ''),
(164, 'C000028', 'Sultan', 'Jl. Raya Sawojajar Gg. 19 no.44, RT02/RW04, KedungKandang, Malang', 'KOTA MALANG', 'Sultan', '', '81298428363', 'sultanzanuarsyah@gmail.com', 'Indonesia', '', ''),
(165, 'C000029', 'Pandu', 'Bukit Cinere Indah, Jl. Puncak Pesanggrahan 8 no.12, Cinere Limo, Kota Depok', 'KOTA DEPOK', 'Pandu', '', '81288588530', 'iresya1507@gmail.com', 'Indonesia', '', ''),
(166, 'C000030', 'Adi', 'Apratemen Aeropolis,Tower ACR 3.7.19', 'KOTA TANGERANG', 'Adi', '', '987878094853', '', 'Indonesia', '', ''),
(167, 'C000031', 'Andreas Santoso', 'Jl. Kartika no. 76, RT1/RW3, Keluarahan Kebonsari, kecamatan Temanggung, Kota temanggung', 'KOTA TEMANGGUNG', 'Andreas Santoso', '', '82129994979', 'andreassantoso92@gmail.com', 'Indonesia', '', ''),
(168, 'C000032', 'Hendra', 'Jl. Guru Mugni gang Andil no. 228, Karet, Semanggi', 'KOTA JAKARTA SELATAN', 'hendra', '', '87877044833', '', 'Indonesia', '', ''),
(169, 'C000033', 'Ugi Cahyo Setiono', 'Pesona Cilebut 1 Blok i-2 no. 28 Cilebut Barat, RT02/RW13', 'KABUPATEN BOGOR', 'Ugi Cahyo Setiono', '', '81289659134', '', 'Indonesia', '', ''),
(170, 'C000034', 'Bhrata Sena', 'Taman Aries Blok E 3 no.11, jakarta Barat 11620', 'KOTA JAKARTA BARAT', 'Bhrata Sena', '', '87780804595', '', 'Indonesia', '', ''),
(171, 'C000035', 'Haryo Bagus', 'Jl. Ondam Markum, Rawalumbu, gg. Ondam Markum RT001/RW002 no.68 17116', 'KOTA BEKASI', 'Haryo Bagus', '', '816102252', '', 'Indonesia', '', ''),
(172, 'C000036', 'Muhammad Rizky Fadhlillah', '\"Wisma Aquila\" Jl. Kaliurang KM 14 RT 09/ RW 17 Desa Nglanjaran Sardonoharjo, Ngagklik, Sleman', 'KOTA YOGYAKARTA', 'Muhammad Rizky Fadhlillah', '', '81275564154', '', 'Indonesia', '', ''),
(173, 'C000037', 'Nabil Suharsana Pribadi', 'Cilebut Residence 1 Cluster Anthorium Blok J-3, Kecamatan Sukaraja 16710', 'KABUPATEN BOGOR', 'Nabil Suharsana Pribadi', '', '82169009339', 'nabilsuharsanapribadi@gmail.com', 'Indonesia', '', ''),
(174, 'C000038', 'Chandra', 'Jl. H. tabri RT004/RW03 no. 174 Keluarahan Batu Ampar, Kecamatan Kramat Jati, Jakarta 13510', 'KOTA JAKARTA TIMUR', 'Chandra', '', '85966392777', 'champ.firstborn@gmail.com', 'Indonesia', '', ''),
(175, 'C000039', 'Rachmat Hidayat', 'Jl. Perjuangan Majasem gang SDN majasem 2, RT04/RW08, Kelurahan Karyamulya, Kecamatan Kesambi', 'KOTA CIREBON', 'Rachmat Hidayat', '', '895360942000', 'rishangsaniscara3@gmail.com', 'Indonesia', '', ''),
(176, 'C000040', 'Adi Putra', 'Pamu;ang Permai baru, Jl. Rajawali Blok I 19ab RT004/RW022, Kecamatan Pamulang 15417', 'KOTA PAMULANG', 'Adi Putra', '', '87876214926', '', 'Indonesia', '', ''),
(177, 'C000041', 'Marwan', 'Komp. Ranau Estate Tahap 1 Blok C no. 02, keluarahan Panggung Jati, kecamatan Taktakan, kota Serang, banten', 'KOTA SERANG', 'Marwan', '', '89525326332', '', 'Indonesia', '', ''),
(178, 'C000042', 'Romy Apriyan', 'Jl. Sawah Lio 4 gang Kiara 1 RT 003/RW 05 no.26, keluarahan jembatan Lima, Kecamatan Tambora', 'KOTA JAKARTA BARAT', 'Romy Apriyan', '', '85777893132', '', 'Indonesia', '', ''),
(179, 'C000043', 'Elkana nataniel Patty', 'Jl. Komplek Taman Asri Blok A6 no.12, RT003/RW002, keluarahan Cipadu Jaya, kecamatan Larangan', 'KOTA TANGERANG', 'Elkana Nataniel Patty', '', '81224161106', '', 'Indonesia', '', ''),
(180, 'C000044', 'Suendra', 'Jl. Tanah Pasir No. 4, RT 004/RW 011, Penjaringan, jakarta Utara', 'KOTA JAKARTA UTARA', 'Suendra', '', '8179993711', '', 'Indonesia', '', ''),
(181, 'C000045', 'Ilham Firdaus', 'Jl. Kp. Rawa Barat no. 18 RT004/RW005, Kecamatan Pondok Pucung, kelurahan pondok Aren', 'KOTA TANGERANG SELATAN', 'Ilham Firdaus', '', '81293309855', '', 'Indonesia', '', ''),
(182, 'C000046', 'Kevin', 'Jl. Baja 4 (Jl. Semang Raya no. 58 RT8/RW4) Kotabumi, Kec. Purwakarta, Kota Cilegon, Banten 42434', 'KOTA CILEGON', 'Kevin', '', '8128080897', 'kepinsp@gmail.com', 'Indonesia', '', ''),
(183, 'C000047', 'Agus Sugiarto', 'Sleman Lor Blok Telaga, RT004/RW001', 'OTA INDRAMAYU', 'Agus Sugiarto', '', '895801018961', '', 'Indonesia', '', ''),
(184, 'C000048', 'Aria Wira', 'Jl. Kp Baru no.78, Klender, RT 12 / RW 01, Keluarahan Jatinegaram Kecamatan Cakung', 'KOTA JAKARTA TIMUR', 'Aria Wira', '', '88212791138', '', 'Indonesia', '', ''),
(185, 'C000049', 'Thesar Yudha', 'Peneleh 6 no. 52 RT006/RT003, Kelurahan Peneleh, Kecamatan Genteng, Surabaya', 'KOTA SURABAYA', 'Thesar Yudha', '', '81222558582', '', 'Indonesia', '', ''),
(186, 'C000050', 'Robertus Prasetyo Wibowo', 'Graha Sevilla Blok T19 no.85, Perumahan Citra Raya, Cikupa, Kabupaten Tangerang', 'KABUPATEN TANGERANG', 'Robertus Prasetyo Wibowo', '', '811121673', '', 'Indonesia', '', ''),
(187, 'C000051', 'Xander', 'Apartemen Mediterania Garden Residences 2 Tower Kenanga unit 19ka Jl. Tanjung Duren 11470, Grogol Petamburan', 'KOTA JAKARTA BARAT', 'Xander', '', '87882207776', '', 'Indonesia', '', ''),
(188, 'C000052', 'Andre Abubakar', 'Jl. RH Umar no. 30 RT005/RW018, Keluarahan Jaka Setia, Kecamatan Bekasi Selatan', 'KOTA BEKASI', 'Andre Abubakar', '', '82111350705', '', 'Indonesia', '', ''),
(189, 'C000053', 'Andy Gozali', 'Jl. Raya Kelapa Nias Blok GN9, Kelurahan Kelapa Gading Timur', 'KOTA JAKARTA', 'Andy Gozali', '', '8787828787', '', 'Indonesia', '', ''),
(190, 'C000054', 'Daniel Angga', 'Kota Harapan Indah 2 Cluster Aralia HY 27 no. 8, keluarahan Pusaka Rakyat, kecamatan Tarumajaya 17240', 'KABUPATEN BEKASI UTARA', 'Daniel Angga', '', '81224287733', '', 'Indonesia', '', ''),
(191, 'C000055', 'Haris Aprizal', 'Perum. Kemuning Permai Blok D8 no. 27 Desa jeungjing, kecamatan Cisoka', 'KABUPATEN TANGERANG', 'Haris Aprizal', '', '8131795779', '', 'Indonesia', '', ''),
(192, 'C000056', 'Bhayu Purnomo Artasukma', 'Perum. Bukit Cirendeu, Blok B1/17, RT02/RW016, Kelurahan Pisangan, Kecamatan Ciputat Timur', 'KOTA TANGERANG SELATAN', 'Bhayu Purnomo Artasukma', '', '82112712655', '', 'Indonesia', '', ''),
(193, 'C000057', 'Ardy Krisnanto', 'Jl. Cilandak KKO gg. Marga no. 008. RT010/RW008, Kelurahan Ragunan, Kedamatan Pasar Minggu', 'KOTA JAKARTA SELATAN', 'Ardy Krisnanto', '', '8119416700', '', 'Indonesia', '', ''),
(194, 'C000058', 'Cahya', 'Jl. Nusa Indah 2 no.4, RT02/RW09', 'KOTA BOGOR', 'Cahya', '', '8119510046', '', 'Indonesia', '', ''),
(195, 'C000059', 'Angga Kusuma', 'Jl. Bioskop atoom, desa karang asem timur RT02/RW01, Citereup', 'KOTA BOGOR', 'Angga Kusuma', '', '81211267374', '', 'Indonesia', '', ''),
(196, 'C000060', 'Billy Swandy', 'Metropolitan Mall Cileungsi lantai 1, Citra Arloji 16820', 'KOTA BOGOR', 'Billy Swandy', '', '82111828830', '', 'Indonesia', '', ''),
(197, 'C000061', 'Muhammad Alief Fulki Shiddiq', 'Jl. MerakNgibing no.1B Sukaluyu, RT01/RW11, bandung 40123', 'KOTA BANDUNG', 'Muhamad Alief Fulki Shiddiq', '', '82240832582', '', 'Indonesia', '', ''),
(198, 'C000062', 'Tri Utami Soetanto', 'Perumahan Aneka Elok Blok A5 no.13, penggilingan, Cakung', 'KOTA JAKARTA TIMUR', 'Tri Utami Soetanto', '', '82300149795', '', 'Indonesia', '', ''),
(199, 'C000063', 'Sumantri Wibowo', 'Jl. Rambutan B18 Perum. Pepabri Keniten Ponorogo', 'KOTA PONOROGO', 'Sumantri Wibowo', '', '83119986969', '', 'Indonesia', '', ''),
(200, 'C000064', 'Topan Dwi P', 'Jl. Biliton no.3 (Depan Pos Kamling) RT1/RW5, kecamatan Magetan', 'KOTA MAGETAN', 'Topan Dwi P', '', '81946483974', '', 'Indonesia', '', ''),
(201, 'C000065', 'Ersa Anugerah Putra', 'Ciledug indah 2 jalan mawar 3 blok e 12 no.6 RT02/ RW 03, Keluarahan Pedurenan Kecamatan Karang tengah 15159', 'KOTA TANGERANG', 'Ersa Anugerah Putra', '', '85718299210', '', 'Indonesia', '', ''),
(202, 'C000066', 'Agus Hutoro', 'Jalan Monjali, Nandan gang plongko RT 7 RW 39 no. 80 sariharjo, Ngaglik, Sleman', 'SLEMAN', 'Agus Hutoro', '', '85742000668', '', 'Indonesia', '', ''),
(203, 'C000067', 'Dias Pratama', 'Komplek Mega Endah Blok J no.18, RT 04/RW 04, kelurahan Karyamulya, Kecamatan Kesambi', 'KOTA CIREBON', 'Dias Pratama', '', '85224693065', '', 'Indonesia', '', ''),
(204, 'C000068', 'Victor Nuari', 'Wisata Bukit Mas Blok E3/09, Cluster Luxembourg, Keluarahan Lidah Kulon, Kecamatan Lakarsantri', 'KOTA SURABAYA', 'Victor Nuari S', '', '87852250302', '', 'Indonesia', '', ''),
(205, 'C000069', 'Ferrow Putra', 'Limus Pratama Regency Blok I 1 no. 19 Rt01/RW07, Kelurahan Limus Nunggal, Kecamatan Cileungsi', 'BOGOR', 'Ferrow Putra', '', '85280546973', '', 'Indonesia', '', ''),
(206, 'C000070', 'Edo', 'Jl. Raya Purwantoro, RT01/RW02. Toko 8 Abadi, sebelah bengkel MJ Sport, depan Toko Bangunan Fokus, kecamatan Purwantoro, Kabupaten Wonogiri 57695', 'KABUPATEN WONOGIRI', 'Edo', '', '81217909390', '', 'Indonesia', '', ''),
(207, 'C000071', 'Shega', 'Jl. Dara Raya dg9/2 Vila Pamulang, Pondok Petir, Bojongsari, Depok 16517', 'KOTA DEPOK', 'Shega', '', '8562159297', '', 'Indonesia', '', ''),
(208, 'C000072', 'Hendra Febriyani', 'Jl. Buncit Raya Kalibata Pulo RT02/RW05 no. 69, Jaksel, DKI Jakarta', 'KOTA JAKARTA SELATAN', 'Hendra Febriyana', '', '81211121291', '', 'Indonesia', '', ''),
(209, 'C000073', 'Matheus Edo', 'Tukangan DN 2/272, RT16/RW04. kelurahan tegal Panggung, Kecamatan Danurejan. Yogyakarta', 'KOTA YOGYAKARTA', 'Matheus Edo', '', '85729298483', '', 'Indonesia', '', ''),
(210, 'C000074', 'Bayu Suranatha', 'Jl. Sukun XV no.6 Perumnas Kamal, RT03/RW08. Kelurahan Banyuajuh, Kecamatan Kamal, Kota bangkalan', 'KOTA BANGKALAN', 'Bayu Suranatha', '', '82146340009', '', 'Indonesia', '', ''),
(211, 'C000075', 'Enrico', 'Jl. Tebet Timur Dalam V D no.10, RT006/RW005, keluarahan Tebet Timur, Kecamatan Tebet. Jaksel', 'KOTA JAKARTA SELATAN', 'Enrico', '', '8111742333', '', 'Indonesia', '', ''),
(212, 'C000076', 'Will', 'Jl. Dara 1 Dg 2 No. 8 Vila Pamulang, RT001/RW011. Kelurahan Pondok Petir, Kecamatan Bojongsari. Kota Depok', 'KOTA DEPOK', 'Will', '', '85782602688', '', 'Indonesia', '', ''),
(213, 'C000077', 'Deno', 'Jl. Gemak Blok B no.150, Jakasetia, Bekasi Selatan, 17147', 'BEKASI SELATAN', 'Deno', '', '87877377385', '', 'Indonesia', '', ''),
(214, 'C000078', 'Adhi Setiawan', 'Jl. Raya Puncak Gadog Vimala Hills, Pullman Ciawi Vimala Hills, Kabupaten Bogor, Jawa barat 16770', 'KABUPATEN BOGOR', 'Adhi Setiawan', '', '', '', 'Indonesia', '0', ''),
(215, 'C000079', 'Stefanus Santoso', 'Royal Park 1 TL-2/30, Citraland, keluarahan LidahKulon, Kecamatan Lakarsantri, Surabaya, Jaw Timur', 'KOTA SURABAYA', 'Stefanus Santoso', '', '87859996397', '', 'Indonesia', '', ''),
(216, 'C000080', 'Haryo Prasetyo', 'green Harapan Housing no. 1B, jl. Harapan rempoa, Jakarta Selatan 12330', 'KOTA JAKARTA SELATAN', 'Haryo Prasetyo', '', '811824451', '', 'Indonesia', '', ''),
(217, 'C000081', 'Winson Sugiarto', 'Jl. Duta Niaga 2 TN 16, Jakarta Selatan', 'KOTA JAKARTA SELATAN', 'Winson Sugiarto', '', '', '', 'Indonesia', '', ''),
(218, 'C000082', 'Dani', 'Jl. Bima No.10 Kav. Agraria, RT02/RW08. Kelurahan Nusajaya, Kecamatan Karawaci, Tangerang', 'KOTA TANGERANG', 'Dani', '', '81218279696', '', 'Indonesia', '', ''),
(219, 'C000083', 'Rendy Panjaitan', 'Jl. Indigo Utama Mess Lion Air Blok L9 no.26-27, Desa Wanakerta talaga bestari, Balaraja', 'TANGERANG', 'Rendy Panjaitan', '', '81282597708', '', 'Indonesia', '', ''),
(220, 'C000084', 'Nikita Rosalini', 'Jl. BNI Raya no. 15b, Cilandak, Jakarta Selatan', 'KOTA JAKARTA SELATAN', 'Nikita Rosalini', '', '82136358570', '', 'Indonesia', '', ''),
(221, 'C000085', 'Aldo', 'The Mansion jasmine Tower Bellavista JB!)D, Jakarta Utara', 'JAKARTA UTARA', 'Aldo', '', '82135675746', '', 'Indonesia', '', ''),
(222, 'C000086', 'Kalam Hada Pratama', 'Jl. Gagak No. 89, RT01/RW18, keluarahan Sadang Serang, Kecamatan Coblong, Kota bandung, Jawa Barat', 'KOTA BANDUNG', 'Kalam Hada Pratama', '', '81573808793', '', 'Indonesia', '', ''),
(223, 'C000087', 'Dwi Cahyo', 'Jl. Kampung Jawa Malang gang 5 No. 10B, RT009/RW007, Kelurahan Keagungan, Kecamatan Tamansari', 'KOTA JAKARTA BARAT', 'Dwi Cahyo', '', '8998169099', '', 'Indonesia', '', ''),
(224, 'C000088', 'Feliks', 'Jl. Mandala Barat 5 no.11 Tomang, Grogol Petamburan. RT06/RW04', 'KOTA JAKARTA BARAT', 'Feliks', '', '8122232174', '', 'Indonesia', '', ''),
(225, 'C000089', 'Anggara Pratama Putra', 'Jl. Saluyu B12 No.235. RT09/RW07. Kelurahan Cipamokolan, Kecamatan Rancasari. Kota Bandung', 'KOTA BANDUNG', 'Anggara Pratama Putra', '', '82123435141', '', 'Indonesia', '', ''),
(226, 'C000090', 'Hendra Dwi Prabowo', 'Jl. Kalpataru no. 57 c RT03/RW03. Kelurahan Tawanganom, Kecamatan Magetan. Jawa Timur', 'MAGETAN', 'Hendra Dwi Prabowo', '', '85330643642', '', 'Indonesia', '', ''),
(227, 'C000091', 'Aditya Firmansyah', 'Pulo Wonokromo 49A RT004/RW006. Kelurahan Wonokromo, Kecamatan Wonokromo. Surabaya', 'KOTA SURABAYA', 'Aditya Firmansyah', 'adityafirmansyah7@gmail.com', '813358859155', '', 'Indonesia', '', ''),
(228, 'C000092', 'Darius Libranus', 'PT MULTI KREASI SEJAHTERA Glass Distributor. Kawasan Industri Dwiapura Abadi Kav. C-15. Jl. Taya Rancaekek KM 24,5. RT03/RW07. Cimanggung, Bandung', 'KOTA BANDUNG', 'Darius Libranus', '', '87887933576', '', 'Indonesia', '', ''),
(229, 'C000093', 'Fiska Perdana', 'Jl. Mungur 67 Wahana Logistik. RT11/RW04/ kelurahan Demangan, Kecamatan Gondokusuman. Kota Yogyakarta', 'KOTA YOGYAKARTA', 'Fiska Perdana', '', '87838506380', '', 'Indonesia', '', ''),
(230, 'C000094', 'Vidi Erens', 'Jl. Pemuda, Kec. Jepara, Kabupaten Jepara, Jawa Tengah 59412 (Sebrang Salon Wira)', 'KABUPATEN JEPARA', 'Vidi Erens', '', '82136259797', '', 'Indonesia', '', ''),
(231, 'C000095', 'Danny Setianto', 'Serpong Garden Cluster Green Valley E25 no.11. Kelurahan Cibogo, Kecamatan Cisauk. Tangerang', 'KOTA TANGERANG', 'Danny Setianto', '', '82111072121', '', 'Indonesia', '', ''),
(232, 'C000096', 'Rio', 'Komplek Kementerian Koperasi C130. RT06/RW09. Kelurahan Curug, Kecamatan Cimanggis. Depok', 'KOTA DEPOK', 'Rio', '', '811146882', '', 'Indonesia', '', ''),
(233, 'C000097', 'Vicky', 'Citra Garden 1 E3 no.27. RT006/RW009. Kalideres. Jakarta Barat', 'KOTA JAKARTA BARAT', 'Vicky', '', '89652112230', '', 'Indonesia', '', ''),
(234, 'C000098', 'Egar Maulana', 'Jl. Bintaro Puspita VII/JJ-28, Bumi Bintaro Permai, Pesanggrahan-Jakarta Selatan, 12320', 'KOTA JAKARTA SELATAN', 'Egar Maulana', '', '82122555006', '', 'Indonesia', '', ''),
(235, 'C000099', 'Fuad', 'Jl. Cagar Alam Raya No.5 RT05/RW02. Kelurahan Pancoran Mas, Kecamatan Pancoran Mas Kota Depok (Karisa Salon)', 'KOTA DEPOK', 'Fuad', '', '82125249455', '', 'Indonesia', '', ''),
(236, 'C000100', 'Agung Dwi Saputro', 'Jl. Alhuda 1 no.35 RT02/RW09, Kelurahan Jatimulya, Kecamatan Tambun Selatan (Rumah Samping Warung Pulsa, Pasar Tinggi Hitam)', 'KABUOATEN BEKASI', 'Agung Dwi Saputro', '', '81285827109', '', 'Indonesia', '', ''),
(237, 'C000101', 'Dhany Prasetyo', 'Jl. Wadas Gg. Wakaf no.14, Kelurahan Batu Ampar, Kecamatan Kramat Jati, Jakarta Timur 13520. (Depan TK Al Falah, Kontrakan Tengah)', 'KOTA JAKARTA TIMUR', 'Dhany Prasetyo', '', '85218131905', '', 'Indonesia', '', ''),
(238, 'C000102', 'Gigih Wicaksono', 'Komplek BPLK no. 26. Jl. Andara Pangkalan Jati Baru. RT01/RW02. Kelurahan Pangkalan Jati Baru, Kecamatan Cinere. DEPOK', 'KOTA DEPOK', 'Gigih Wicaksono', '', '8124884347', '', 'Indonesia', '', ''),
(239, 'C000103', 'Naufal', 'Jl. Pisangan Baru Utara no.3A. RT10/RW12. Kelurahan Pisangan Baru, Kecamatan Matraman, Jakarta Timur', 'KOTA JAKARTA TIMUR', 'Naufal', '', '85715848161', '', 'Indonesia', '', ''),
(240, 'C000104', 'Gatot Sujatmiko', 'Ngabean Kulon no.49 RT005/RW035. Ngaglik, Sleman. Daerah Istimewa Yogyakarta', 'KABUPATEN SLEMAN', 'Gatot Sujatmiko', '', '85228074016', '', 'Indonesia', '', ''),
(241, 'C000105', 'Felix', 'Jl. Telaga Raya no.14 RT17/RW1. Keluarahan Sunter Jaya, Kecamatan Tanjung Priok. Jakarta Utara', 'KOTA JAKARTA UTARA', 'Felix', '', '', '', 'Indonesia', '', ''),
(242, 'C000106', 'Andre Christian', 'Plasa Telkom, Jl. Teuku Umar No.6, Dauh Puri Klod, Denpasar Barat 80113', 'KOTA DENPASAR', 'Andre Christian', 'andrechristian2511@gmail.com', '82144442587', '', 'Indonesia', '', ''),
(243, 'C000107', 'Reynaldo Ravend', 'Kost Sandang no. 68-69, palmerah. Jakarta Barat', 'KOTA JAKARTA BARAT', 'Reynaldo Ravend', '', '81272992766', '', 'Indonesia', '', ''),
(244, 'C000108', 'Johan Hendriawan', 'Ruko Puri Gardena Blok A2 No.1. Kelurahan Kalideres, kecamatan Kalideres. Jakarta Barat 11830', 'KOTA JAKARTA BARAT', 'Johan Hendriawan', '', '87882623080', '', 'Indonesia', '', ''),
(245, 'C000109', 'Ebi Gustiwo', 'Perumahan Binong Permai Blok F4 no. 17 RT02/RW07. Kelurahan Binong, Kecamatan Curug 15810. Tangerang', 'KOTA TANGERANG', 'Ebi Gustiwo', '', '82111016200', '', 'Indonesia', '', ''),
(246, 'C000110', 'Raden Billy Pratama', 'Jl. Jatisari II, Du 5 No.10 RTR006/RW014, Jakasampurna, Bekasi Selatan', 'KOTA BEKASI', 'Raden Billy Pratama', 'radenbilly.pratama@gmail.com', '82185124564', '', 'Indonesia', '', ''),
(247, 'C000111', 'Agnes', 'Kost Andreas 1, Jl. E no. 1E RT011 RW03, Kelurahan Slipi, Kecamatan Palmerah, Jakarta Barat 11410', 'KOTA JAKARTA BARAT', 'Agnes', '', '81288066786', '', 'Indonesia', '', ''),
(248, 'C000112', 'Riezqi Alifanggi', 'Jl. Dr. Cipto Gg. VII Blok F.11 (Depan SLB Dharma Wanita Sumenep) RT01 RW06', 'KOTA SUMENEP', 'Riezqi Alifanggi', '', '82333382083', '', 'Indonesia', '', ''),
(249, 'C000113', 'Irene', 'Villa Tomang Mas Blok A no.4 RT005 RW011. kelurahan Duri, Kecamatan Kebon Jeruk. Jakarta Barat', 'KOTA JAKARTA BARAT', 'Irene', '', '89611829933', '', 'Indonesia', '', ''),
(250, 'C000114', 'Rennald Lubis', 'Jl. Kebagusan II Gg Usin RT002 RW07 no. 20. Kelurahan Kebagusan, Kecamatan Pasar Minggu. Jakarta Selatan 12520', 'KOTA JAKARTA SELATAN', 'Rennald Lubis', '', '85212222215', '', 'Indonesia', '', ''),
(251, 'C000115', 'Dicky', 'Jl. Cipedes tengah no. 27b/10. Gg Cipedes II (Sebelah Bidan Maria) RT01 RW05. Kelurahan Sukagalih, Kecamatan Sukajadi 40163, bandung', 'KOTA BANDUNG', 'Dicky', '', '82119011985', '', 'Indonesia', '', ''),
(252, 'C000116', 'Arvansyah Dhyammond C', 'Jl. Bukit Beringin Elok 5/B382 RT03 RW16. Kelurahan Wonosari, Kecamatan Ngaliyan. Semarang', 'KOTA SEMARANG', 'Arvansyah Dhyammond C', '', '82241826431', '', 'Indonesia', '', ''),
(253, 'C000117', 'Hadi Prewiro', 'Komp. Simprug di Poris, blok F4/37 RT04 RW04. Kelurahan Poris Gaga, Kecamatan batuceper. Tangerang 15122', 'KOTA TANGERANG', 'Hadi Perwiro', '', '81213679997', '', 'Indonesia', '', ''),
(254, 'C000118', 'I Gede Santika Putra', 'Plasa Telkom, Jl. Teuku Umar No.6, Dauh Puri Klod, Denpasar Barat 80113', 'KOTA DENPASAR', 'I Gede Santika Putra', '', '85792435965', '', 'Indonesia', '', ''),
(255, 'C000119', 'Daniel Wijaya', 'Jl. Ebony IV Blok AC no. 14. Perum. Grand Orchard, kelapa gading 14140. Jakarta Utara', 'KOTA JAKARTA UTARA', 'Daniel Wijaya', '', '87878797814', '', 'Indonesia', '', ''),
(256, 'C000120', 'Ridho Pradeja', 'Lab. Diagnostik Caruban (Depan RSUD Caruban). Kelurahan Ngampel, Kecamatan Mejayan. Kabupaten Madiun', 'KABUPATEN MADIUN', 'Ridho Pradeja', '', '82336773322', '', 'Indonesia', '', ''),
(257, 'C000121', 'Jordan', 'Jl. Jembatan 3 Gang Lontar No. 29 RT014 RW003, Kelurahan Pejagalan, Kecamatan Penjaringan. Jakarta Utara', 'JKOTA JAKARTA UTARA', 'Jordan', '', '81296061001', '', 'Indonesia', '', ''),
(258, 'C000122', 'Aji Pamungkas', 'Depot jamu Ayu Kp. Sirnagalih Ds. Tanggeung RT02 RW03, Kota Cianjur', 'KOTA CIANJUR', 'Aji Pamungkas', '', '85711147264', '', 'Indonesia', '', ''),
(259, 'C000123', 'Tommy', 'Perumahan Sukaseuri, Jl. Sawo K4, RT26 RW10, Cikampek, Karawang', 'KARAWANG', 'Tommy', '', '81322967311', '', 'Indonesia', '', ''),
(260, 'C000124', 'Ricky Fauzi', 'Perumahan The Pasadena Blok B-36 RT10 RW14, Cengkareng Timur. Jakarta Barat', 'KOTA JAKARTA BARAT', 'Ricky Fauzi', '', '89601346344', '', 'Indonesia', '', ''),
(261, 'C000125', 'Nawawi Sanin', 'KA Nangka Jl. KH Muchtar Thabrani Gg Al-Mukhlisin II RT01 RW03. Kelurahan Perwira, Kecamatan Bekasi Utara. Kota Bekasi', 'KOTA BEKASI', 'Nawawi Sanin', '', '82110960607', '', 'Indonesia', '', ''),
(262, 'C000126', 'Tenaya', 'Jl. Werkudara no. 20, link br Tampak gangsul/Dangin Puri Kauh, Denpasar Utara', 'KOTA DENPASAR', 'Tenaya', '', '82147609808', '', 'Indonesia', '', ''),
(263, 'C000127', 'Wahyu Ariyadi', 'Komp. Pondok Duta 1, Jl. Duta 5 No.4 RT003 RW 014. kelurahan Tugu, Kecamatan Ciamnggis. Kota Depok', 'KOTA DEPOK', 'Wahyu Ariyadi', 'wahyu.ariyadi84@gmail.com', '8111171984', '', 'Indonesia', '', ''),
(264, 'C000128', 'Darwin', 'Jl. Manggis Raya no.34 RT01 RW08. Kelurahan Rawa Buaya, Kecamatan Cengkareng. Jakarta Barat', 'KOTA JAKARTA BARAT', 'Darwin', '', '81293211239', '', 'Indonesia', '', ''),
(265, 'C000129', 'Aryo Rio', 'Pamedan TimurRT 03/RW06 Mangkunegaraan. Kecamatan Banjarsari. Surakarta, Jawa Tengah', 'KOTA SURAKARTA', 'Aryo Rio', '', '8562520430', '', 'Indonesia', '', ''),
(266, 'C000130', 'Noval', ' Jalan tanah 100 RT 05 RW 09 no 3 keluranahan Sudimara Jaya, Kecamatan Ciledug, Kota Tangerang, provinsi Banten kode pos 15151', 'KOTA TANGERANG', 'Noval', '', '81295320871', '', 'Indonesia', '', ''),
(267, 'C000131', 'Muhammad Irfan Sulaiman', ' Jl. Cahaya Titis, Komplek Kavling UI Timur Blok F8 No.5, Tanah Baru, Beji, Depok, Jawa Barat 16426', 'KOTA DEPOK', 'Muhammad Irfan Sulaiman', '', '87801002737', '', 'Indonesia', '', ''),
(268, 'C000132', 'Dimas Fadillah', 'Jl. Pramuka Sari III no.53 RT02 RW08. Kelurahan Rawasari, Kecamatan Cempaka Putih. Jakarta Pusat', 'KOTA JAKARTA PUSAT', 'Dimas Fadillah', 'dimaskw20@gmail.com', '81296754631', '', 'Indonesia', '', ''),
(269, 'C000133', 'Nashrul', 'Jl. Cihanjuang-Cibaligo no. 29 (Sanggar) RT01 RW02, Parongpong. Kab. Bandung Barat', 'KABUPATEN BANDUNG BARAT', 'Nashrul', '', '82127347461', '', 'Indonesia', '', ''),
(270, 'C000134', 'Marwan', 'Jln imogiri timur km. 12 Bendogorok dk karangsemut. Kelurahan Trimulyo, Kecamatan Jetis. Bantul', 'KOTA BANTUL', 'Marwan', 'marwanjogjaa@gmail.com', '87839503789', '', 'Indonesia', '', ''),
(271, 'C000135', 'Wahyudi Setyawacana', 'Taman Cimanggu Jl. Tanjung IV Blok O7 no. 17 RT04 RW12. Kelurahan Kedungwaringin, Kecamatan Sereal. Bogor', 'KOTA BOGOR', 'Wahyudi Setyawan', 'wahyudisw@yahoo.com', '818917988', '', 'Indonesia', '', ''),
(272, 'C000136', 'Gatra Putratama M', 'cluster pesona jatimulya No F3 , Kel Jatimulya, kec tambun selatan , kab bekasi 17510', 'KABUPATEN BEKASI', 'Gatra Putratama', '', '87885207035', '', 'Indonesia', '', ''),
(273, 'C000137', 'Fahrul Rizal', 'KGR mampang residance no.a4 Jl. Remaja RT 04 RW 06. Kelurahan Mampang, Kecamatan Pancoran Mas. Depok', 'KOTA DEPOK', 'Fahrul Rizal', '', '82110400085', '', 'Indonesia', '', ''),
(274, 'C000138', 'Dennis Calvianto', ' Perumahan Limas Agung P5/7, Purwokerto Utara - Jawa Tengah (53121)', 'PURWOKERTO', 'Dennis Calvianto', 'dennis.calvianto@gmail.com', '82220112220', '', 'Indonesia', '', ''),
(275, 'C000139', 'Jajang Fitriyadi', 'Jl. H. Sidup No. 57 A RT04 RW03. Kelurahan Rempoa, Kecamatan Ciputat Timur. Tangerang Selatan', 'TANGERANG SELATAN', 'Jajang Fitriyadi', 'estetikasikap@gmail.com', '81295888900', '', 'Indonesia', '', ''),
(276, 'C000140', 'Herman', 'Perumahan The River. Coloradi Blok D6 n0. 45 Parung Panjang RT04 RW013. Kabupaten Bogor', 'KABUPATEN BOGOR', 'Herman', '', '8119999514', '', 'Indonesia', '', ''),
(277, 'C000141', 'Raymond Suryanto', 'Jl. Pajajaran no.21 (Lemongrass Resto) Bantarjati, Bogor Utara', 'KOTA BOGOR', 'Raymond Suryanto', '', '8568940079', '', 'Indonesia', '', ''),
(278, 'C000142', 'Marko Muhatmadi', 'Jagakarsa Exclusive Townhouse Jl. Jagakarsa No 12 Kav 9 RT001 RW002. Kelurahan Ciganjur, Kecamatan Jagakarsa. Jakarta Selatan', 'KOTA JAKARTA SELATAN', 'Marko Muhatmadi', '', '81806538205', '', 'Indonesia', '', ''),
(279, 'C000143', 'Rizano Pramana', 'Jl.Telaga raya no. 14 RT17 RW01. Jakarta Utara', 'KOTA JAKARTA UTARA', 'Rizano Pramana', '', '82297619197', '', 'Indonesia', '', ''),
(280, 'C000144', 'Indra Gunawan', 'RT 03 RW10 no. 120 Kelurahan Cijujung, Kecamatan Sukaraja. Kabupaten Bogor', 'KABUPATEN BOGOR', 'Indra Gunawan', 'indraservis1981@gmail.com', '87770069452', '', 'Indonesia', '', ''),
(281, 'C000145', 'Irfan Karunia Osa', 'Taman Laguna Cibubur Blok O3 No. 1, Jatikarya, Kec. Jatisampurna. Bekasi', 'KOTA BEKASI', 'Irfan Karunia Osa', 'osa.irfan@gmail.com', '81264732202', '', 'Indonesia', '', ''),
(282, 'C000146', 'Josh', 'Griya Bukit Jaya, Blok G14/3 RT06 RW26. Kelurahan Tlajung Udik, Kecamatan Gunung Putri. Bogor 16962', 'BOGOR', 'Josh', '', '82210098080', '', 'Indonesia', '', ''),
(283, 'C000147', 'Genta Hariangbanga', 'Vila Bogor Indah 6 Vluster Carissa Blok C4 no.9 RT001 RW014. Kelurahan Pasir Jambu, Kecamatan Sukaraja. Bogor', 'BOGOR', 'Genta Hariangbanga', 'abanggenta@gmail.com', '8111102227', '', 'Indonesia', '', ''),
(284, 'C000148', 'Ferry Iriawan', 'Jl. Kembang Agung 5 Blok F2 /45, komplek perumahan puri indah, Jakarta Barat', 'KOTA JAKARTA BARAT', 'Fery Iriawan', 'txpalem@yahoo.com', '8558000882', '', 'Indonesia', '', ''),
(285, 'C000149', 'Rahman Riamond', 'Jl. Bareng tenes 4B no. 29 (rumah bawah) RT02 RW07. kelurahan Bareng, Kecamatan klojen. Malang, Jawa Timur', 'KOTA MALANG', 'Rahman Riamond', '', '8123308722', '', 'Indonesia', '', ''),
(286, 'C000150', 'Ferry', 'Cluster Nuansa Bumi Citalang No. A9, Purawakarta, Jawa Barat', 'PURWAKARTA', 'Ferry', '', '81288668920', '', 'Indonesia', '', ''),
(287, 'C000151', 'Esfandiary Akbar', 'Jl. Cendrawasih IX no. 161 RT09 RW 007. Kelurahan Jaticempaka, Kecamatan Pondok Gede. Bekasi', 'KOTA BEKASI', 'Esfiandiary Akbar', '', '87882000737', '', 'Indonesia', '', ''),
(288, 'C000152', 'Fajri Raihan', 'Perum Foresta, Cluster Placido K3/1, BSD city, kab. Tangerang, Pagedangan, Banten', 'KABUPATEN TANGERANG', 'Fajri Raihan', '', '81383798727', '', 'Indonesia', '', ''),
(289, 'C000153', 'Handrio Wawan', ' jl. Alam pesanggrahan VIII blok OD 43 no.4, Cinere, Depok', 'KOTA DEPOK', 'Handrio Wawan', 'handrio.wawan@gmail.com', '8119192884', '', 'Indonesia', '', ''),
(290, 'C000154', 'Bramanda Heriantama', 'mess lion air blok L9 No 26/27 telaga bestari, balaraja, tangerang, banten', 'KOTA TANGERANG', 'Bramanada Heriantama', 'bramandahariantama12@gmail.com', '85726998569', '', 'Indonesia', '', ''),
(291, 'C000155', 'Ridho F Sitorus', 'Anggrek cendrawasih 8A No 22. Kamar Q2, Kemanggisan, Kecamatan Palmerah. Jakarta Barat', 'KOTA JAKARTA BARAT', 'Ridho F Sitorus', '', '85270048833', '', 'Indonesia', '', ''),
(292, 'C000156', 'Chaerul Rozikin', 'Jl. Puskesmas 1 no. 24 RT5 RW07. Kelurahan Durikosambi, Kecamatan Cengkareng. Jakarta Barat', 'KOTA JAKARTA BARAT', 'Chaerul Rozikin', '', '85697777368', '', 'Indonesia', '', ''),
(293, 'C000157', 'Adit Eko Prasetyo', 'Puri Permai Blok H 04/15 RT 04/05 Ds.Pematang Kec.Tigaraksa, kabupaten Tangerang, Banten', 'KABUPATEN TANGERANG', 'Adit Eko Prasetyo', '', '81319620863', '', 'Indonesia', '', ''),
(294, 'C000158', 'Reyka Fauzi Rahman', 'Taman Kedaung Jl. Kemuning IX F4/1. Tangerang Selatan', 'TANGERANG SELATAN', 'Reyka Fauzi Rahman', '', '', '', 'Indonesia', '', ''),
(295, 'C000159', 'Hardy', 'Babatan Pratama 28, Bok VV-92, Wiyung, Surabaya, Jawa Timur', 'KOTA SURABAYA', 'Hardy', '', '87852250302', '', 'Indonesia', '', ''),
(296, 'C000160', 'Satrio Gati W', 'Jl Plumpang Semper 10A (KPP Pratama Jakarta Koja), Rawa Badak Selatan. Jakarta Utara', 'KOTA JAKARTA UTARA', 'Satrio Gati W', '', '85743683414', '', 'Indonesia', '', ''),
(297, 'C000161', 'Mohamad Iqbal', ' Jl. Sumbawa V. Blok M5 No. 2. Perumahan Reni Jaya Tangerang Selatan (patokannya mushalla Al Kautsar, tembok rumah berwarna kuning), Kel. Pondok benda / Kec. Pamulang', 'TANGERANG SELATAN', 'Mohamad Iqbal', '', '87878731085', '', 'Indonesia', '', ''),
(298, 'C000162', 'Rizyuda Nur Ilman', 'Jl. Makmur No.A-11, Kav. satria, Kepuh, Betro, Sedati, Sidoarjo Regency, East Java 61253, Indonesia 61253. Sidoarjo, Jawa Timur', 'SIDOARJO', 'Rizyuda Nur Ilman', '', '82245222816', '', 'Indonesia', '', ''),
(299, 'C000163', 'Bhisma', 'Blossom Residence unit 2, Jl. KH Ramli No. 6 RT002 RW003, Kelurahan Menteng Dalam, Kecamatan tebet, jakarta Selatan', 'KOTA JAKARTA SELATAN', 'Bhisma', 'bhisma.al@gmail.com', '87881551966', '', 'Indonesia', '', ''),
(300, 'C000164', 'Divau Riski', 'Jl menur no 25-27 depan pasar kota pemalang. Kab Pemalang, Jawa Tengah 52313', 'KABUPATEN PEMALANG', 'Divau Riski', 'divauriski2222@gmail.com', '87898479856', '', 'Indonesia', '', ''),
(301, 'C000165', 'Semaya Adi', 'Jl. Puntodewo Kragilan (Rumah Pak Rudy) RT02 RW08. Kelurahan Sinduadi, Kecamatan Mlati. Sleman, Yogyakarta', 'SLEMAN', 'Semaya Adi', '', '81393613763', '', 'Indonesia', '', ''),
(302, 'C000166', 'Dion Pratama', 'Jl. Agung Perkasa 13 Blok J9B No. 19, Sunter, Tanjung Priok. Jakarta Utara', 'KOTA JAKARTA UTARA', 'Dion Pratama', '', '81380978599', '', 'Indonesia', '', ''),
(303, 'C000167', 'Yanto', 'Jl. Ruby Utara 1 no.15, Kelapa Dua Sangereng. Gading Serpong, tangerang, Banten', 'TANGERANG', 'Yanto', '', '8118772892', '', 'Indonesia', '', ''),
(304, 'C000168', 'Noprian', 'Jl. Inpres VI Gg. Melati no. 52 RT001 RW013. Kelurahan Larangan. Tangerang', 'TANGERANG', 'Noprian', 'nopriannurbakti16@gmail.com', '82310903547', '', 'Indonesia', '', ''),
(305, 'C000169', 'Muhammad Naji Bulloh', 'Kanara Green Vilage Blok E 3.7. Desa Sukamantri, Kecamatan Tamansari. Kabupaten Bogor', 'KABUPATEN BOGOR', 'Muhammad Naji Bulloh', '', '85716572659', '', 'Indonesia', '', ''),
(306, 'C000170', 'Iham Syarif Alimakinsyah', 'Jl. Cempaka Putih barat 25 no. 11 RT05 RW 07. Jakarta Pusat', 'KOTA JAKARTA PUSAT', 'Ilham Syarif Alimakinysah', 'ilhamsyarif_33@yahoo.com', '87764515777', '', 'Indonesia', '', ''),
(307, 'C000171', 'Wisnu Aditya', 'komp. Sudirman agung, JL.PB Sudirman blok B no.31 ( Kantor DDENGINE ) denpasar ,bali 80225', 'KOTA DENPASAR SELATAN', 'Wisnu Aditya', 'wisnuadityagita@gmail.com', '89505066688', '', 'Indonesia', '', ''),
(308, 'C000172', 'Alwen', 'Cluster Faraday, Faraday Selatan 1 no. 38. Gading Serpong, Pagedangan. Tangerang, Banten', 'TANGERANG', 'Alwen', '', '81806820255', '', 'Indonesia', '', ''),
(309, 'C000173', 'Calvin winata', 'Jalan Scientia Garden, Cluster Dalton. Dalton selatan 2 no 15. Gading Serpong. Tangerang', 'TANGERANG', 'Calvin Winata', '', '81381797287', '', 'Indonesia', '', ''),
(310, 'C000174', 'Aldy Wirawan', 'Jl meranti raya no 19 eramas 2000 jakarta timur 13950', 'KOTA JAKARTA TIMUR', 'Aldy Wirawan', '', '81905026494', '', 'Indonesia', '', ''),
(311, 'C000175', 'Aditya Liko', 'Jl. S. Parman Kav. 8 Gedung Telkom Lt7. Jakarta Barat', 'KOTA JAKARTA BARAT', 'Aditya Liko', '', '82173048346', '', 'Indonesia', '', ''),
(312, 'C000176', 'Bambang', 'Rumah Kos Bpk. H. Ismail. Jl. Manggis 16b RT06/RW02, Lumpang Bolong, Kelurahan Dermo,Bangil Kab.Pasuruan, Jawa Timur, 67153', 'KABUPATEN PASURUAN', 'Bambang', '', '82131564032', '', 'Indonesia', '', ''),
(313, 'C000177', 'sitta', 'bogor', 'KABUPATEN BOGOR', 'sitta', 'guru', '123456', 'sitta@gmail.com', 'Indonesia', '1', 'note'),
(314, 'C000178', 'PT MDR', 'Depok', 'KOTA DEPOK', 'Rahandika Athaya', '-', '-', '-', 'Indonesia', '1', '-'),
(315, 'C000179', 'Ronald Jawara', 'PT Samudera Indonesia', 'KOTA JAKARTA SELATAN', 'Bhrata Sena', '-', '82112121150', 'dodikromadhon@yahoo.com', 'Indonesia', '1', '-'),
(316, 'C000180', 'Ronald Jawara', 'PT Samudera Indonesia', 'KOTA JAKARTA SELATAN', 'Bhrata Sena', '-', '82112121150', 'dodikromadhon@yahoo.com', 'Indonesia', '1', '-'),
(317, 'C000181', 'sisa sasi', 'depok jaya', 'KOTA DEPOK', 'Adi Kurnia', '', '', '', 'Indonesia', '1', ''),
(319, 'C000183', 'Erik Irlianta', '', 'KABUPATEN BANDUNG', 'Atep Nurbana 1', '', '', '', 'Indonesia', '1', ''),
(320, 'C000184', '-', '', 'KOTA BOGOR', 'No Name', '', '', '', 'zimbabwe', '0', ''),
(321, 'C000185', 'NN', '', 'KOTA BOGOR', 'NN', '', '', '', 'Indonesia', '1', ''),
(322, 'C000186', 'Andi', '', 'KOTA BOGOR', 'Andi', '', '', '', 'Indonesia', '1', ''),
(323, 'C000187', 'Alfonsus', '', 'KOTA BOGOR', 'Alfonsus', '', '', '', 'Indonesia', '1', 'Tg Username : Alfonsus'),
(324, 'C000188', 'Veve Betta', '', 'KOTA JAKARTA TIMUR', 'MyNamePianika', '', '', '', 'Indonesia', '1', ''),
(325, 'C000189', 'Undertaker Betta Yard', '', 'ACEH BARAT', 'Muhammad Qamarul', '', '', '', 'Malasia', '1', ''),
(326, 'C000190', 'Richard Marpaung', '', 'KOTA MEDAN', 'Richard Marpaung', '', '', '', 'Indonesia', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fakturpajak`
--

CREATE TABLE `tbl_fakturpajak` (
  `id_fakturpajak` int(12) NOT NULL,
  `noinvoice` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `npwp` varchar(255) NOT NULL,
  `no_seri` varchar(255) NOT NULL,
  `jumlah_fakturpajak` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_farm`
--

CREATE TABLE `tbl_farm` (
  `idfarm` int(10) NOT NULL,
  `codefarm` varchar(10) NOT NULL,
  `farmname` varchar(250) NOT NULL,
  `address01` text NOT NULL,
  `city01` varchar(250) NOT NULL,
  `name01` varchar(250) NOT NULL,
  `jabatan01` varchar(250) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(250) NOT NULL,
  `country` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL,
  `note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_farm`
--

INSERT INTO `tbl_farm` (`idfarm`, `codefarm`, `farmname`, `address01`, `city01`, `name01`, `jabatan01`, `phone`, `email`, `country`, `status`, `note`) VALUES
(1, 'F000000', 'Boston Premium Farm', 'Blk. C-D No.D16, RT.06/RW.07, Sukaresmi, Kec. Tanah Sereal, Kota Bogor, Jawa Barat 16165', 'KOTA BOGOR', '-', 'Direktur', '0878-2535-0085', '-', 'Indonesia', '1', 'https://goo.gl/maps/adPxQ45jY3hBG4no8');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_invoice`
--

CREATE TABLE `tbl_invoice` (
  `idmasterinvoice` int(15) NOT NULL,
  `idinvoice` varchar(255) DEFAULT NULL,
  `dateinvoice` date DEFAULT NULL,
  `jasa` varchar(255) DEFAULT NULL,
  `ppn` decimal(10,0) DEFAULT NULL,
  `pph` decimal(10,0) DEFAULT NULL,
  `nominal` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mediarcm`
--

CREATE TABLE `tbl_mediarcm` (
  `id_mediarcm` int(11) NOT NULL,
  `jenis_media` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `kota_kab` varchar(255) NOT NULL,
  `periode_kontrak` varchar(255) NOT NULL,
  `total` int(11) NOT NULL,
  `januari` int(11) NOT NULL,
  `febuari` int(11) NOT NULL,
  `maret` int(11) NOT NULL,
  `april` int(11) NOT NULL,
  `mei` int(11) NOT NULL,
  `juni` int(11) NOT NULL,
  `juli` int(11) NOT NULL,
  `agustus` int(11) NOT NULL,
  `september` int(11) NOT NULL,
  `oktober` int(11) NOT NULL,
  `november` int(11) NOT NULL,
  `desember` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_monitoringharian`
--

CREATE TABLE `tbl_monitoringharian` (
  `id_monitoringharian` int(11) NOT NULL,
  `jenis_media` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `kota_kab` varchar(255) NOT NULL,
  `tempory` varchar(255) NOT NULL,
  `jan` decimal(10,0) NOT NULL,
  `feb` decimal(10,0) NOT NULL,
  `mar` decimal(10,0) NOT NULL,
  `apr` decimal(10,0) NOT NULL,
  `mei` decimal(10,0) NOT NULL,
  `jun` decimal(10,0) NOT NULL,
  `jul` decimal(10,0) NOT NULL,
  `agust` decimal(10,0) NOT NULL,
  `sept` decimal(10,0) NOT NULL,
  `oktob` decimal(10,0) NOT NULL,
  `novem` decimal(10,0) NOT NULL,
  `desem` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_monitoringharian`
--

INSERT INTO `tbl_monitoringharian` (`id_monitoringharian`, `jenis_media`, `brand`, `alamat`, `kota_kab`, `tempory`, `jan`, `feb`, `mar`, `apr`, `mei`, `jun`, `jul`, `agust`, `sept`, `oktob`, `novem`, `desem`) VALUES
(1, '-', 'Bogor Raya', 'Jl Pajajaran X', 'Bogor', '12000', 1000, 1000, 1000, 1000, 1000, 1000, 1000, 1000, 1000, 1000, 1000, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_monitoringhutang`
--

CREATE TABLE `tbl_monitoringhutang` (
  `id_monitoringhutang` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `brand` varchar(255) NOT NULL,
  `nomor` varchar(255) NOT NULL,
  `nama_media` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `unit` int(11) NOT NULL,
  `ukuran` varchar(255) NOT NULL,
  `harga_per_unit` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `persentasi_pekerjaan` int(11) NOT NULL,
  `totalpengambilan_tanggal` int(11) NOT NULL,
  `totalpengambilan_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_monitoringhutang`
--

INSERT INTO `tbl_monitoringhutang` (`id_monitoringhutang`, `tanggal`, `brand`, `nomor`, `nama_media`, `deskripsi`, `unit`, `ukuran`, `harga_per_unit`, `total`, `persentasi_pekerjaan`, `totalpengambilan_tanggal`, `totalpengambilan_total`) VALUES
(1, '0000-00-00', 'NIKKI SUPER', '001/PT.RCM/SPK/I/2020', 'BALIHO', 'PENGGALIAN TIANG, TANAM TIANG BARU, PERAKITAN LAMPU, PENGECETAN, COR DALAM TIANG, BALIHO MEBALI, TANA TORAJA', 1, '6X4', 0, 0, 0, 0, 0),
(2, '0000-00-00', 'NIKKI SUPER - 15.000 ISI 16 BATANG', '001/PT.RCM/SPK/I/2020', 'BALIHO', 'PASANG COVER BALIHO MEBALI', 1, '6X4', 0, 0, 0, 0, 0),
(3, '0000-00-00', 'CLASMILD', '002/PT.RCM/SPK/I/2020', 'NEON BOX', 'BONGKAR NEON BOX TOKO WULAN DAN PASANG ACP, NEON BOX, PENGECETAN TOKO MAUDIA SENGKANG WAJO', 1, '6X4', 0, 0, 0, 0, 0),
(4, '0000-00-00', 'CLASMILD SILVER - MAKIN HALUS MAKIN MANTAP', '003/PT.RCM/SPK/I/2020', 'BALIHO', 'REVISUAL BALIHO JL. JEND. SUDIRMAN, SIDRAP (TUGU ADIPURA) SOBEK KARENA ANGIN PUTTING BELIUNG', 1, '8X4', 0, 0, 0, 0, 0),
(5, '0000-00-00', '', '003/PT.RCM/SPK/I/2020', '', 'TRANSPORTASI', 0, '', 0, 0, 0, 0, 0),
(6, '0000-00-00', 'CLASMILD', '004/PT.RCM/SPK/II/2020', 'RSS', 'REVISUAL RSS 1 SISI PARE PARE', 345, '2X1', 0, 0, 0, 0, 0),
(7, '0000-00-00', '', '', '', '', 0, '', 0, 0, 0, 0, 0),
(8, '0000-00-00', '', '', '', '', 0, '', 0, 0, 0, 0, 0),
(9, '0000-00-00', '', '', '', '', 0, '', 0, 0, 0, 0, 0),
(10, '0000-00-00', '', '', '', '', 0, '', 0, 0, 0, 0, 0),
(11, '0000-00-00', '', '', '', '', 0, '', 0, 0, 0, 0, 0),
(12, '0000-00-00', '', '', '', '', 0, '', 0, 0, 0, 0, 0),
(13, '0000-00-00', '', '', '', '', 0, '', 0, 0, 0, 0, 0),
(14, '0000-00-00', '', '', '', '', 0, '', 0, 0, 0, 0, 0),
(15, '0000-00-00', '', '', '', '', 0, '', 0, 0, 0, 0, 0),
(16, '0000-00-00', '', '', '', '', 0, '', 0, 0, 0, 0, 0),
(17, '0000-00-00', '', '', '', '', 0, '', 0, 0, 0, 0, 0),
(18, '0000-00-00', '', '', '', '', 0, '', 0, 0, 0, 0, 0),
(19, '0000-00-00', '', '', '', '', 0, '', 0, 0, 0, 0, 0),
(20, '0000-00-00', '', '', '', '', 0, '', 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nonkontrak`
--

CREATE TABLE `tbl_nonkontrak` (
  `id_nonkontrak` int(11) NOT NULL,
  `media` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `kota_kab` varchar(255) NOT NULL,
  `tema` text NOT NULL,
  `total` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penerimaankas`
--

CREATE TABLE `tbl_penerimaankas` (
  `id_penerimaankas` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `ref` varchar(255) NOT NULL,
  `debet_kas` varchar(255) NOT NULL,
  `kredit_piutang` varchar(255) NOT NULL,
  `kredit_pendapatan` varchar(255) NOT NULL,
  `kredit_serbaserbi_ref` varchar(255) NOT NULL,
  `kredit_serbaserbi_akun` varchar(255) NOT NULL,
  `kredit_serbaserbi_jumlah` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sales`
--

CREATE TABLE `tbl_sales` (
  `idsales` int(10) NOT NULL,
  `codesales` varchar(10) NOT NULL,
  `salesname` varchar(250) NOT NULL,
  `address01` text NOT NULL,
  `city01` varchar(250) NOT NULL,
  `name01` varchar(250) NOT NULL,
  `jabatan01` varchar(250) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(250) NOT NULL,
  `country` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL,
  `note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_sales`
--

INSERT INTO `tbl_sales` (`idsales`, `codesales`, `salesname`, `address01`, `city01`, `name01`, `jabatan01`, `phone`, `email`, `country`, `status`, `note`) VALUES
(1, '001', 'Dodik', 'Depok', 'Depok', 'Dodik', 'Sales', '02123737042', 'dodik@sales.com', 'indonesua', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_spkdetail`
--

CREATE TABLE `tbl_spkdetail` (
  `idspkdetail` int(12) NOT NULL,
  `idspk` int(12) NOT NULL,
  `lokasi` varchar(250) NOT NULL,
  `tema` text NOT NULL,
  `ukuran` varchar(100) NOT NULL,
  `jumlah` decimal(10,0) NOT NULL,
  `spesifikasi` varchar(250) NOT NULL,
  `periode_tayang` date NOT NULL,
  `harga` text NOT NULL,
  `pembayaranvia` varchar(250) NOT NULL,
  `biaya` decimal(10,0) NOT NULL,
  `gambar1` varchar(500) NOT NULL,
  `gambar2` varchar(500) NOT NULL,
  `gambar3` varchar(500) NOT NULL,
  `gambar4` varchar(500) NOT NULL,
  `gambar5` varchar(500) NOT NULL,
  `gambar6` varchar(500) NOT NULL,
  `direktur` varchar(100) NOT NULL DEFAULT 'ANDHY EKASVARA',
  `disetujui` varchar(100) NOT NULL DEFAULT 'SLES',
  `dibuatoleh` varchar(100) NOT NULL DEFAULT 'Iin',
  `diperiksa` varchar(100) NOT NULL DEFAULT 'Hikmah',
  `tanggalapproval` date NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_spkto`
--

CREATE TABLE `tbl_spkto` (
  `id_spkto` int(11) NOT NULL,
  `nomoraddto` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `nohp` varchar(255) NOT NULL,
  `datejoin` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_spkto`
--

INSERT INTO `tbl_spkto` (`id_spkto`, `nomoraddto`, `nama`, `alamat`, `nohp`, `datejoin`) VALUES
(6, 0, 'Dodik Romadhon', 'Depok', '0822-2046-8952', '2021-01-25'),
(7, 0, 'Watik', 'Jakarta Barat', '0822-2046-8952', '2021-02-20'),
(8, 0, 'dodik10', 'd0d1k', '9879-8798-9789', '2021-02-22'),
(9, 0, 'Reynaldi', 'Bogor', '1231-2312-3123', '2020-08-01');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_suratperjanjian`
--

CREATE TABLE `tbl_suratperjanjian` (
  `id_suratperjanjian` int(11) NOT NULL,
  `no_invoice` int(11) NOT NULL,
  `namaperusahaan` varchar(255) NOT NULL,
  `no_perjanjian` varchar(255) NOT NULL,
  `title` text NOT NULL,
  `tahap_perjanjian` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `pic1` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaksi`
--

CREATE TABLE `tbl_transaksi` (
  `idtransaksi` int(12) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `codecupang` varchar(30) NOT NULL,
  `nomorinvoice` varchar(12) NOT NULL,
  `idcupang` varchar(12) NOT NULL,
  `qty` varchar(5) NOT NULL,
  `price` double NOT NULL,
  `sales` varchar(250) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `iduser` int(10) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(50) NOT NULL,
  `position` varchar(150) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`iduser`, `fname`, `lname`, `email`, `password`, `position`, `status`) VALUES
(1, 'dodik', 'romadhon', 'mydodikromadhon@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'admin', 1),
(38, 'yyyy', 'yyyy', 'yyyy@gmail.com', '71ca9079d08bfa85e1e803427d25205a', 'admin', 1),
(39, 'Gswheh', 'Hwjwjwj', 'djsjsusis@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'admin', 1),
(40, 'Ari', 'Lesmana', 'ari@gmail.com', '8607cc2312cc1f0b301bee4dd8429208', 'admin', 1),
(41, 'Suseno', 'Seno', 'suseno.personal@gmail.com', '15a6a6d0fad7bf560c8d11358012afa7', 'admin', 1),
(42, 'Asd', 'Asd', 'asd@gamil.com', '7815696ecbf1c96e6894b779456d330e', 'admin', 1),
(43, 'oke', 'oce', 'okeoce@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'admin', 1),
(44, 'Kiki', 'Isa', 'kikiisa89@yahoo.com', 'ce3c1b0fc6488705b66268b84dc3cf19', 'admin', 1),
(45, 'Muhammad', 'Yusuf', 'yusuf.marsudien10@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'operasional', 1),
(46, 'Karyo', 'Sutopo', 'karyox@gmail.com', 'c7afd16904980db0190a784ead314348', 'admin', 1),
(47, 'Coba', 'Coba', 'coba@gmail.com', 'c3ec0f7b054e729c5a716c8125839829', 'admin', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `m_city`
--
ALTER TABLE `m_city`
  ADD PRIMARY KEY (`idcity`),
  ADD KEY `kode_propinsi` (`city`);

--
-- Indexes for table `m_detailtransaksi`
--
ALTER TABLE `m_detailtransaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_gambar`
--
ALTER TABLE `m_gambar`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indexes for table `m_gambarspk`
--
ALTER TABLE `m_gambarspk`
  ADD PRIMARY KEY (`id_gambarspk`);

--
-- Indexes for table `m_invoice`
--
ALTER TABLE `m_invoice`
  ADD PRIMARY KEY (`idinvoice`);

--
-- Indexes for table `m_negara`
--
ALTER TABLE `m_negara`
  ADD PRIMARY KEY (`idcountry`);

--
-- Indexes for table `m_nonkontrak`
--
ALTER TABLE `m_nonkontrak`
  ADD PRIMARY KEY (`id_nonkontrak`);

--
-- Indexes for table `m_penawaran`
--
ALTER TABLE `m_penawaran`
  ADD PRIMARY KEY (`id_penawaran`);

--
-- Indexes for table `m_po`
--
ALTER TABLE `m_po`
  ADD PRIMARY KEY (`id_po`);

--
-- Indexes for table `m_source`
--
ALTER TABLE `m_source`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_spk`
--
ALTER TABLE `m_spk`
  ADD PRIMARY KEY (`idmasterspk`);

--
-- Indexes for table `m_transaksi`
--
ALTER TABLE `m_transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_bapp`
--
ALTER TABLE `tbl_bapp`
  ADD PRIMARY KEY (`id_bapp`);

--
-- Indexes for table `tbl_cupang`
--
ALTER TABLE `tbl_cupang`
  ADD PRIMARY KEY (`idcupang`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`idcustomer`);

--
-- Indexes for table `tbl_fakturpajak`
--
ALTER TABLE `tbl_fakturpajak`
  ADD PRIMARY KEY (`id_fakturpajak`);

--
-- Indexes for table `tbl_farm`
--
ALTER TABLE `tbl_farm`
  ADD PRIMARY KEY (`idfarm`);

--
-- Indexes for table `tbl_invoice`
--
ALTER TABLE `tbl_invoice`
  ADD PRIMARY KEY (`idmasterinvoice`);

--
-- Indexes for table `tbl_mediarcm`
--
ALTER TABLE `tbl_mediarcm`
  ADD PRIMARY KEY (`id_mediarcm`);

--
-- Indexes for table `tbl_monitoringharian`
--
ALTER TABLE `tbl_monitoringharian`
  ADD PRIMARY KEY (`id_monitoringharian`);

--
-- Indexes for table `tbl_monitoringhutang`
--
ALTER TABLE `tbl_monitoringhutang`
  ADD PRIMARY KEY (`id_monitoringhutang`);

--
-- Indexes for table `tbl_nonkontrak`
--
ALTER TABLE `tbl_nonkontrak`
  ADD PRIMARY KEY (`id_nonkontrak`);

--
-- Indexes for table `tbl_penerimaankas`
--
ALTER TABLE `tbl_penerimaankas`
  ADD PRIMARY KEY (`id_penerimaankas`);

--
-- Indexes for table `tbl_sales`
--
ALTER TABLE `tbl_sales`
  ADD PRIMARY KEY (`idsales`);

--
-- Indexes for table `tbl_spkdetail`
--
ALTER TABLE `tbl_spkdetail`
  ADD PRIMARY KEY (`idspkdetail`);

--
-- Indexes for table `tbl_spkto`
--
ALTER TABLE `tbl_spkto`
  ADD PRIMARY KEY (`id_spkto`);

--
-- Indexes for table `tbl_suratperjanjian`
--
ALTER TABLE `tbl_suratperjanjian`
  ADD PRIMARY KEY (`id_suratperjanjian`);

--
-- Indexes for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD PRIMARY KEY (`idtransaksi`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `m_city`
--
ALTER TABLE `m_city`
  MODIFY `idcity` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=518;

--
-- AUTO_INCREMENT for table `m_detailtransaksi`
--
ALTER TABLE `m_detailtransaksi`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `m_gambar`
--
ALTER TABLE `m_gambar`
  MODIFY `id_gambar` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `m_gambarspk`
--
ALTER TABLE `m_gambarspk`
  MODIFY `id_gambarspk` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `m_invoice`
--
ALTER TABLE `m_invoice`
  MODIFY `idinvoice` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `m_negara`
--
ALTER TABLE `m_negara`
  MODIFY `idcountry` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `m_nonkontrak`
--
ALTER TABLE `m_nonkontrak`
  MODIFY `id_nonkontrak` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `m_penawaran`
--
ALTER TABLE `m_penawaran`
  MODIFY `id_penawaran` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `m_po`
--
ALTER TABLE `m_po`
  MODIFY `id_po` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `m_source`
--
ALTER TABLE `m_source`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `m_spk`
--
ALTER TABLE `m_spk`
  MODIFY `idmasterspk` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `m_transaksi`
--
ALTER TABLE `m_transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `tbl_bapp`
--
ALTER TABLE `tbl_bapp`
  MODIFY `id_bapp` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_cupang`
--
ALTER TABLE `tbl_cupang`
  MODIFY `idcupang` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=820;

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `idcustomer` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=327;

--
-- AUTO_INCREMENT for table `tbl_fakturpajak`
--
ALTER TABLE `tbl_fakturpajak`
  MODIFY `id_fakturpajak` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_farm`
--
ALTER TABLE `tbl_farm`
  MODIFY `idfarm` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_invoice`
--
ALTER TABLE `tbl_invoice`
  MODIFY `idmasterinvoice` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_mediarcm`
--
ALTER TABLE `tbl_mediarcm`
  MODIFY `id_mediarcm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_monitoringharian`
--
ALTER TABLE `tbl_monitoringharian`
  MODIFY `id_monitoringharian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_monitoringhutang`
--
ALTER TABLE `tbl_monitoringhutang`
  MODIFY `id_monitoringhutang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_nonkontrak`
--
ALTER TABLE `tbl_nonkontrak`
  MODIFY `id_nonkontrak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_penerimaankas`
--
ALTER TABLE `tbl_penerimaankas`
  MODIFY `id_penerimaankas` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tbl_sales`
--
ALTER TABLE `tbl_sales`
  MODIFY `idsales` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_spkdetail`
--
ALTER TABLE `tbl_spkdetail`
  MODIFY `idspkdetail` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_spkto`
--
ALTER TABLE `tbl_spkto`
  MODIFY `id_spkto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_suratperjanjian`
--
ALTER TABLE `tbl_suratperjanjian`
  MODIFY `id_suratperjanjian` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  MODIFY `idtransaksi` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `iduser` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
