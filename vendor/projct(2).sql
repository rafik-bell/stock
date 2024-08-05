-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 05 août 2024 à 17:29
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projct`
--

-- --------------------------------------------------------

--
-- Structure de la table `forni`
--

DROP TABLE IF EXISTS `forni`;
CREATE TABLE IF NOT EXISTS `forni` (
  `id_forn` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `qnt_prod_f` int(11) NOT NULL,
  `date_f` datetime NOT NULL,
  `id_forni` int(11) NOT NULL,
  `pdf_name` varchar(100) NOT NULL,
  `pdf_path` varchar(100) NOT NULL,
  `rest_f` int(11) NOT NULL,
  PRIMARY KEY (`id_forn`,`id`,`id_forni`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `forni`
--

INSERT INTO `forni` (`id_forn`, `id`, `qnt_prod_f`, `date_f`, `id_forni`, `pdf_name`, `pdf_path`, `rest_f`) VALUES
(37, 103, 250, '2023-11-15 08:21:01', 1, 'kivytoapk.txt', 'uploads/kivytoapk.txt', 251),
(39, 1, 10, '2023-05-18 15:13:49', 1, '_mhdrt_ldwly_ljdyd(1).pdf', 'uploads/_mhdrt_ldwly_ljdyd(1).pdf', 4015),
(39, 1, 10, '2023-05-20 15:56:32', 2, 'file(3).pdf', 'uploads/file(3).pdf', 4025),
(39, 1, 100, '2023-11-02 12:25:31', 3, 'محاضراتالسنةالأولىماسترتخصصقانونعقاري(1).pdf', 'uploads/محاضراتالسنةالأولىماسترتخصصقانونعقاري(1).pdf', 4055),
(39, 2, 2, '2023-05-18 15:09:20', 1, 'المطبوعةالنهائيةللتاهيلفيمادةالجنسية(1).pdf', 'uploads/المطبوعةالنهائيةللتاهيلفيمادةالجنسية(1).pdf', 105),
(39, 2, 20, '2023-05-18 15:13:49', 2, '_mhdrt_ldwly_ljdyd(1).pdf', 'uploads/_mhdrt_ldwly_ljdyd(1).pdf', 135),
(39, 2, 10, '2023-05-20 15:56:31', 3, 'file(3).pdf', 'uploads/file(3).pdf', 145),
(39, 3, 30, '2023-05-18 14:40:56', 1, 'file.pdf', 'uploads/file.pdf', 104),
(39, 4, 20, '2023-05-18 14:40:56', 1, 'file.pdf', 'uploads/file.pdf', 140),
(39, 4, 100, '2023-05-18 15:13:49', 2, '_mhdrt_ldwly_ljdyd(1).pdf', 'uploads/_mhdrt_ldwly_ljdyd(1).pdf', 240),
(39, 4, 45, '2023-05-20 15:56:32', 3, 'file(3).pdf', 'uploads/file(3).pdf', 285),
(39, 119, 10, '2023-05-18 14:40:56', 1, 'file.pdf', 'uploads/file.pdf', 990),
(40, 2, 10, '2023-05-18 14:54:44', 1, 'file(8).pdf', 'uploads/file(8).pdf', 93),
(41, 2, 10, '2023-05-18 15:12:40', 1, 'file(5).pdf', 'uploads/file(5).pdf', 115),
(67, 1, 10, '2023-05-23 10:51:03', 1, 'bac.onec.dzYoucef.pdf', 'uploads/bac.onec.dzYoucef.pdf', 3995),
(67, 2, 10, '2023-05-18 14:42:54', 1, 'file(9).pdf', 'uploads/file(9).pdf', 83),
(67, 2, 10, '2023-05-18 15:08:13', 2, 'أحكامعقدالكفالةفيظلالتشريعالجزائري.pdf', 'uploads/أحكامعقدالكفالةفيظلالتشريعالجزائري.pdf', 103),
(67, 3, 10, '2023-05-18 14:28:56', 1, 'file(2).pdf', 'uploads/file(2).pdf', 80),
(67, 3, 20, '2023-05-18 15:07:20', 2, 'أحكامعقدالكفالةفيظلالتشريعالجزائري(4).pdf', 'uploads/أحكامعقدالكفالةفيظلالتشريعالجزائري(4).pdf', 124),
(67, 4, 20, '2023-05-18 14:28:56', 1, 'file(2).pdf', 'uploads/file(2).pdf', 120);

-- --------------------------------------------------------

--
-- Structure de la table `fournisuer`
--

DROP TABLE IF EXISTS `fournisuer`;
CREATE TABLE IF NOT EXISTS `fournisuer` (
  `id_forn` int(11) NOT NULL AUTO_INCREMENT,
  `nom_forn` varchar(100) NOT NULL,
  `prenom_forn` text NOT NULL,
  `nom_entr` text NOT NULL,
  `adrs_forn` text NOT NULL,
  PRIMARY KEY (`id_forn`)
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `fournisuer`
--

INSERT INTO `fournisuer` (`id_forn`, `nom_forn`, `prenom_forn`, `nom_entr`, `adrs_forn`) VALUES
(37, 'رفيق', '', '', ''),
(38, 'rafik', '', '', ''),
(39, 'ضاكثي', '', '', ''),
(40, 'قضبهن', '', '', ''),
(41, 'afik', '', '', ''),
(42, 'ahmed', '', '', ''),
(43, 'yosef', '', '', ''),
(44, 'نننن', '', '', ''),
(45, 'aaaaaaaa', '', '', ''),
(46, 'evv', '', '', ''),
(47, 'سشؤشسؤسؤشؤؤشسؤس', '', '', ''),
(49, 'dsvdsvd', '', '', ''),
(50, 'سرشس', '', '', ''),
(51, 'لثصل', '', '', ''),
(52, 'ثصبصث', '', '', ''),
(53, 'ثلثقل', '', '', ''),
(54, 'صيضص', '', '', ''),
(55, 'شؤشؤ', '', '', ''),
(56, 'يررششسر', '', '', ''),
(57, 'sqcs', '', '', ''),
(58, 'qXQx', '', '', ''),
(59, 'rzrzeez', '', '', ''),
(60, 'ezvzev', '', '', ''),
(61, 'ثبثص', '', '', ''),
(62, 'vezve', '', '', ''),
(63, 'scqsc', '', '', ''),
(64, 'بونوة', '', '', ''),
(65, 'rafik', 'bellarbi', 'sdvdsv', 'dsv'),
(66, 'rafik', 'bellarbi', '', ''),
(67, 'rafik', 'bellarbi', '', ''),
(68, 'scqs', 'csqc', 'sqcssc', 'scqs');

-- --------------------------------------------------------

--
-- Structure de la table `preneur`
--

DROP TABLE IF EXISTS `preneur`;
CREATE TABLE IF NOT EXISTS `preneur` (
  `id_p` int(11) NOT NULL AUTO_INCREMENT,
  `nom_p` varchar(30) NOT NULL,
  `prenom_p` varchar(30) NOT NULL,
  `grad_p` varchar(30) NOT NULL,
  `secteur` varchar(30) NOT NULL,
  PRIMARY KEY (`id_p`)
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `preneur`
--

INSERT INTO `preneur` (`id_p`, `nom_p`, `prenom_p`, `grad_p`, `secteur`) VALUES
(7, 'rafik', 'bellarbi', 'ingere', 'hhfhhf'),
(8, 'rafik', 'bella', 'رئيس غرفة', 'محكمة مسعد'),
(9, 'rzfik', 'bellzrbi', 'verer', 'rvevre'),
(10, 'ahmed', 'bellarbi', 'fhfhfhf', 'jfjfjf'),
(11, 'قضبهن', 'لاثممضقلاه', 'صىصبخث', 'ثحتثصب'),
(12, 'رلارثهتلاث', 'ثىصترى', 'رصنىخرى', 'رخهرثخرى'),
(13, 'efzojfzeoneo', 'ekznokevnzeovn', 'zepv,ezpvezpkv,', 'ezlv,ezpv,ezpv,'),
(14, 'ثثصلخنصثىرخصىثر', 'ثنصىرخنثىصثخنىر', 'ثصرةثصحرة', 'ثحرةصثحرة'),
(15, 'rafik', 'belarbi', 'qvq', 'qsvqs'),
(16, 'قضللب', 'رصرى', 'صنثرنثىر', 'رصنثى'),
(17, 'رفيق', 'بلعربي', 'الستنلق', 'زيتسن'),
(18, 'zfzaffz', 'zfazff', 'zffazzf', 'qvsvqvs'),
(19, 'رتسرستؤا', 'نشستلاؤسنش', 'رئيس المجلس', 'محكمة حد الصحاري'),
(20, 'czbicbh', 'zjcnz', 'kzczl', 'zczcz'),
(21, 'rafik', 'dvrev', 'reverv', 'rvervvr'),
(22, 'rafik', 'fzeezf', 'efezfez', 'ezfez'),
(23, 'بتبابا', 'قىرمنقرى', 'قثرقحثىر', 'قكثرة'),
(24, 'بهلابثالا', 'هتثصبخب', 'ثمةببثمصن', 'خثحصلنح'),
(25, 'fzafaa', 'fzaffaf', 'fazzfza', 'zfafazf'),
(26, 'سؤشؤس', 'ؤسشؤس', 'شؤسشس', 'سؤشؤس'),
(27, 'صيضؤ', 'ؤصضؤصض', 'ضصؤصض', 'صؤضصؤ'),
(28, 'dscd', 'dsvd', 'vdsv', 'dvsdv'),
(29, 'sqc', 'scqc', 'scqc', 'csqc'),
(30, 'سء', 'صس', 'سص', 'سص'),
(31, 'ؤصؤيصؤصؤ', 'صؤيؤي', 'يؤصيؤ', 'ؤصيؤي'),
(32, 'qvsvs', 'qsvsqv', 'svqsv', 'svvsqv'),
(33, 'سشؤس', 'ؤشسؤش', 'سؤشؤ', 'شؤسسش'),
(34, 'scqcs', 'qscqsc', 'scqsc', 'scqcq'),
(35, 'ثصبث', 'ثصبص', 'بثصب', 'بثصب'),
(36, 'ؤسسؤش', 'شسؤشسؤ', 'شسؤس', 'ؤششسسش'),
(37, 'ررسشر', 'يسري', 'يسري', 'بثصبث'),
(38, 'kholoud', 'bellarbi', 'droit', 'univ medea'),
(39, 'eevzv', 'evzev', 'evze', 'evzev'),
(40, 'سشؤشس', 'ؤشؤس', 'شسؤسش', 'سؤشؤ'),
(41, 'ؤسشس', 'ؤسشسش', 'ؤشسشس', 'سشؤشؤ'),
(42, 'سؤسش', 'شؤس', 'سشؤ', 'سشؤس'),
(43, 'بضؤ', 'صيصض', 'صيصض', 'صيض'),
(44, 'صثبصث', 'ثصبصث', 'ثصبصب', 'ثبصثص'),
(45, 'صؤث', 'ثرص', 'رصثثص', 'صثر'),
(46, 'ضضضضض', 'ضضضضضض', 'ضضضضض', 'ضضضضضض'),
(47, 'رفيق', 'بلعربي', 'مهندس', 'مهندس'),
(48, 'rafik', 'bellarbi', 'zfe', 'zef'),
(49, 'بيابيبا', 'بيابيا', 'بيابي', 'بابيا'),
(50, 'hfkjg', 'ldhslgjhds', 'kdhvdlsk', 'khdlkd'),
(51, 'rafik', 'bellarbi', 'قاضي', 'المجلس القضائي'),
(52, 'dd', 'dd', 'Alabama', '0'),
(53, 'dd', 'ddddd', 'Alabama', '0'),
(54, 'fee', 'efffe', 'Alabama', 'المجلس القضائي'),
(55, 'ثرثصر', 'رثصر', 'ثصرص', 'ثصرثص'),
(56, 'بشسي', 'سيرسي', 'يسرشري', 'يسريس'),
(57, 'عز الدين', 'بلعربي', 'قاضي', 'المجلس القضائي'),
(58, 'رفيق', 'بلعربي', 'مستشار', 'المجلس القضائي'),
(59, 'احمد', 'بلعربي', 'رئيس المجلس', 'المجلس القضائي');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_prod` varchar(100) NOT NULL,
  `qnt_prod` int(11) NOT NULL,
  `cat_prod` varchar(100) NOT NULL,
  `qnt_min` int(11) NOT NULL,
  `num_cont` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=126 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `nom_prod`, `qnt_prod`, `cat_prod`, `qnt_min`, `num_cont`) VALUES
(1, 'رزمة ورق أبيض A4', 4022, 'الوراقة', 5, 0),
(2, 'رزمة ورق أبيض A3', 74, 'الوراقة', 5, 0),
(3, 'قلم جاف أزرق', 27, 'لوازم المكتب', 5, 0),
(4, 'قلم جاف أحمر', 235, 'لوازم المكتب', 5, 0),
(101, 'حافظة الإستعجالي', 100, 'السجلات والمطبوعات المختلفة', 5, 0),
(102, 'حافظة الإستعجالي', 76, 'السجلات والمطبوعات المختلفة', 5, 0),
(103, 'حافظة جنح موقوفين', 182, 'السجلات والمطبوعات المختلفة', 5, 0),
(104, 'عربة نقل الملفات ', 100, 'مختلفة', 5, 0),
(105, 'لوحة حائطية', 100, 'مختلفة', 5, 0),
(106, 'قفل باب خارجي', 100, 'الخردوات', 5, 0),
(107, 'كانو', 289, 'الخردوات', 5, 0),
(108, 'سكر', 307, 'المواد الغذائية', 5, 0),
(112, 'قهوة', 52, 'المواد الغذائية', 50, 0),
(116, 'بوجي', 200, 'قطع الغيار', 20, 0),
(117, 'سيارة', 20, 'عتاد', 3, 0),
(118, 'سروال', 180, 'البسة', 20, 24250),
(119, 'حليب', 990, 'المواد الغذائية', 30, 0),
(123, 'ملح', 2420, 'المواد الغذائية', 20, 0),
(124, 'عجلات', 470, 'مطاطيات', 10, 24500),
(125, 'زيت', 100, 'زيوت', 5, 0);

-- --------------------------------------------------------

--
-- Structure de la table `prondre`
--

DROP TABLE IF EXISTS `prondre`;
CREATE TABLE IF NOT EXISTS `prondre` (
  `id_p` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `date_p` datetime NOT NULL,
  `qnt_p` int(11) NOT NULL,
  `cat_p` varchar(100) NOT NULL,
  `id_proneur` int(11) NOT NULL,
  `rest_p` int(11) NOT NULL,
  PRIMARY KEY (`id_p`,`id`,`id_proneur`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `prondre`
--

INSERT INTO `prondre` (`id_p`, `id`, `date_p`, `qnt_p`, `cat_p`, `id_proneur`, `rest_p`) VALUES
(7, 1, '2023-05-21 10:08:51', 20, 'الوراقة', 1, 4005),
(7, 1, '2023-06-21 14:15:15', 10, 'الوراقة', 2, 3965),
(7, 2, '2023-05-21 10:15:45', 20, 'الوراقة', 1, 125),
(7, 3, '2023-11-02 12:40:30', 30, 'لوازم المكتب', 1, 27),
(8, 1, '2023-05-21 10:13:13', 20, 'الوراقة', 1, 3985),
(8, 1, '2023-11-02 12:23:46', 10, 'الوراقة', 2, 3955),
(8, 1, '2023-11-02 12:27:43', 10, 'الوراقة', 3, 4045),
(8, 1, '2023-11-14 21:55:18', 20, 'الوراقة', 4, 4025),
(8, 1, '2023-11-15 07:01:59', 1, 'الوراقة', 5, 4024),
(8, 1, '2023-11-15 07:02:18', 1, 'الوراقة', 6, 4023),
(8, 1, '2023-11-15 08:38:35', 1, 'الوراقة', 7, 4022),
(8, 2, '2023-11-15 08:38:35', 1, 'الوراقة', 1, 74),
(8, 3, '2023-05-18 14:31:07', 6, 'لوازم المكتب', 1, 74),
(8, 3, '2023-05-20 16:20:58', 10, 'لوازم المكتب', 2, 114),
(8, 3, '2023-05-23 10:54:45', 10, 'لوازم المكتب', 3, 82),
(8, 3, '2023-06-04 08:14:13', 2, 'لوازم المكتب', 4, 80),
(8, 3, '2023-06-26 09:38:51', 1, 'لوازم المكتب', 5, 57),
(8, 4, '2023-05-20 16:20:58', 20, 'لوازم المكتب', 1, 265),
(8, 102, '2023-06-18 08:52:53', 20, 'السجلات والمطبوعات المختلفة', 1, 80),
(8, 107, '2023-11-14 21:53:33', 1, 'الخردوات', 1, 289),
(9, 3, '2023-05-21 10:20:46', 22, 'لوازم المكتب', 1, 92),
(9, 3, '2023-06-07 14:21:26', 20, 'لوازم المكتب', 2, 58),
(9, 4, '2023-05-21 10:20:46', 30, 'لوازم المكتب', 1, 235),
(10, 103, '2023-11-14 22:10:16', 99, 'السجلات والمطبوعات المختلفة', 1, 1),
(11, 102, '2023-11-15 08:22:53', 1, 'السجلات والمطبوعات المختلفة', 1, 79),
(11, 102, '2023-11-15 08:22:53', 3, 'السجلات والمطبوعات المختلفة', 2, 76),
(11, 103, '2023-11-15 08:22:53', 69, 'السجلات والمطبوعات المختلفة', 1, 182),
(14, 3, '2023-06-06 19:23:43', 2, 'لوازم المكتب', 1, 78),
(57, 2, '2023-05-21 10:25:39', 30, 'الوراقة', 1, 95),
(58, 1, '2023-06-04 08:06:31', 10, 'الوراقة', 1, 3985),
(58, 1, '2023-06-04 14:47:36', 10, 'الوراقة', 2, 3975),
(59, 2, '2023-05-23 20:08:52', 20, 'الوراقة', 1, 75);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `name`, `password`, `email`) VALUES
(1, 'rafik', '1234', 'rafik@gmail.com'),
(4, 'ahmed', '123', 'ahmed@gmail.com'),
(5, 'yousef ', '123', 'y@gmail.com'),
(6, 'rafik1', '123', 'rafik@123.com');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `forni`
--
ALTER TABLE `forni`
  ADD CONSTRAINT `forni_ibfk_1` FOREIGN KEY (`id`) REFERENCES `produit` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `forni_ibfk_2` FOREIGN KEY (`id_forn`) REFERENCES `fournisuer` (`id_forn`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `prondre`
--
ALTER TABLE `prondre`
  ADD CONSTRAINT `prondre_ibfk_1` FOREIGN KEY (`id`) REFERENCES `produit` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `prondre_ibfk_2` FOREIGN KEY (`id_p`) REFERENCES `preneur` (`id_p`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
