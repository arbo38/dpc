-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Dim 11 Juin 2017 à 21:06
-- Version du serveur :  5.7.14
-- Version de PHP :  7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `dpc-test`
--

-- --------------------------------------------------------

--
-- Structure de la table `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `brand`
--

INSERT INTO `brand` (`id`, `title`, `description`, `url`) VALUES
(1, 'Asus', '<div style="margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; font-size: 12px; line-height: inherit; font-family: \'Segoe UI\', 微軟正黑體, \'Microsoft JhengHei\', Arial, 新細明體; vertical-align: baseline; color: #333333;">Le nom ASUS vient des quatre derni&egrave;res lettres du nom Pegasus (P&eacute;gase), le c&eacute;l&egrave;bre cheval ail&eacute; de la mythologie grecque. ASUS s\'inspire de la force, de la puret&eacute; et de l\'esprit aventureux de cette cr&eacute;ature fantastique pour toujours relever de nouveaux d&eacute;fis en mati&egrave;re d\'innovations et de produits.</div>\r\n<div style="margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; font-size: 12px; line-height: inherit; font-family: \'Segoe UI\', 微軟正黑體, \'Microsoft JhengHei\', Arial, 新細明體; vertical-align: baseline; color: #333333;">&nbsp;</div>\r\n<div style="margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; font-size: 12px; line-height: inherit; font-family: \'Segoe UI\', 微軟正黑體, \'Microsoft JhengHei\', Arial, 新細明體; vertical-align: baseline; color: #333333;">Au cours de ces derni&egrave;res d&eacute;cennies, l\'industrie ta&iuml;wanaise des technologies de l\'information s\'est fortement d&eacute;velopp&eacute;e, ce qui a aid&eacute; le pays &agrave; devenir l\'un des acteurs principaux sur le march&eacute; mondial. ASUS est depuis longtemps &agrave; l\'avant-garde de cette croissance, et bien que la soci&eacute;t&eacute; ait d&eacute;but&eacute; en tant que modeste fabricant de carte m&egrave;re avec seulement une poign&eacute;e de salari&eacute;s, elle est d&eacute;sormais l\'une des soci&eacute;t&eacute;s ta&iuml;wanaises les plus importantes qui emploie plus de 12 500 personnes &agrave; travers le monde. ASUS propose tous les types de produits touchant aux technologies de l\'information, allant des composants informatiques aux p&eacute;riph&eacute;riques, en passant par les ordinateurs portables, les tablettes, les serveurs et les smartphones.</div>\r\n<div style="margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; font-size: 12px; line-height: inherit; font-family: \'Segoe UI\', 微軟正黑體, \'Microsoft JhengHei\', Arial, 新細明體; vertical-align: baseline; color: #333333;">&nbsp;</div>\r\n<div style="margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; font-size: 12px; line-height: inherit; font-family: \'Segoe UI\', 微軟正黑體, \'Microsoft JhengHei\', Arial, 新細明體; vertical-align: baseline; color: #333333;">Pour ASUS, la cl&eacute; du succ&egrave;s r&eacute;side dans sa capacit&eacute; &agrave; sans cesse innover. Apr&egrave;s avoir invent&eacute; le premier netbook avec l&rsquo;EeePC 701 en 2007, puis le premier mod&egrave;le de 2-en-1 d&eacute;tachable avec l&rsquo;Eee Pad Transformer TF101 en 2010, ASUS a successivement annonc&eacute; le Padfone en 2013 et ses nouveaux produits mobiles en 2014 : sa fameuse gamme de t&eacute;l&eacute;phones mobiles ZenFone et sa montre connect&eacute;e iconique la ZenWatch.</div>\r\n<div style="margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; font-size: 12px; line-height: inherit; font-family: \'Segoe UI\', 微軟正黑體, \'Microsoft JhengHei\', Arial, 新細明體; vertical-align: baseline; color: #333333;">&nbsp;</div>\r\n<div style="margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; font-size: 12px; line-height: inherit; font-family: \'Segoe UI\', 微軟正黑體, \'Microsoft JhengHei\', Arial, 新細明體; vertical-align: baseline; color: #333333;">Gr&acirc;ce &agrave; une approche visionnaire, ASUS assure une constante &eacute;volution du design et des innovations de ses produits, pour toujours r&eacute;pondre aux demandes et besoins des utilisateurs. En 2016, ASUS a remport&eacute; 4385 prix dans le monde entier, et a r&eacute;alis&eacute; un chiffre d\'affaire s\'&eacute;levant &agrave; 13,3 milliards de dollars am&eacute;ricains.</div>', 'https://www.asus.com/fr/'),
(2, 'Gigabyte', '<p>Un marque haute de gamme au raport qualit&eacute; prix incomparable</p>', 'www.gigabyte.com'),
(3, 'AMD', '<p>Principal concurrent d\'inteleazeazezaeazeazea</p>', 'www.amd.com');

-- --------------------------------------------------------

--
-- Structure de la table `brand_image`
--

CREATE TABLE `brand_image` (
  `brand_id` int(11) NOT NULL,
  `image_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `brand_image`
--

INSERT INTO `brand_image` (`brand_id`, `image_id`) VALUES
(1, 6),
(2, 7),
(3, 16);

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `category`
--

INSERT INTO `category` (`id`, `title`, `description`, `url`) VALUES
(1, 'PC Portable', '<p><span style="color: #000000; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Retrouvez tous nos PC portable en magasin et aux meilleurs prix!</span></p>', NULL),
(2, 'Processeurs', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `category_image`
--

CREATE TABLE `category_image` (
  `category_id` int(11) NOT NULL,
  `image_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `category_image`
--

INSERT INTO `category_image` (`category_id`, `image_id`) VALUES
(1, 8),
(2, 9);

-- --------------------------------------------------------

--
-- Structure de la table `company_information`
--

CREATE TABLE `company_information` (
  `id` int(11) NOT NULL,
  `logo_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fax` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `siret` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title_contact_form_intro` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content_contact_form_intro` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `company_information`
--

INSERT INTO `company_information` (`id`, `logo_id`, `name`, `description`, `address`, `email`, `tel`, `fax`, `siret`, `title_contact_form_intro`, `content_contact_form_intro`) VALUES
(1, 5, 'Depann\'PC 74', '<p>Entreprise ann&eacute;cienne de d&eacute;pannage informatique depuis plus de 20 ans. Nous vous proposons un service personnalis&eacute; et rapide en fonction de vos besoins. Nous sommes sp&eacute;cialis&eacute; dans les d&eacute;pannage express, en magasin comme &agrave; domicil et m&ecirc;me &agrave; distance. Nous vendons tout type de mat&eacute;riel informatique, neuf et occasions, tous garantie. Pour vos besoins informatique sur Annecy, pensez Depann\'PC!</p>', '20 avenue de Novel, 74000 Annecy', 'dpc74@gmail.com', '04 50 46 77 08', '04 50 46 77 09', '45318879900028', 'Toujours À Votre Écoute', '<p><span style="color: #555555; font-family: \'Open Sans\', sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Duis vitae imperdiet ipsum. Vestibulum ullamcorper lorem at orci vulputate, volutpat tempus magna elementum. Nam in odio sem. Morbi in justo interdum massa tristique lobortis in quis diam. Etiam erat urna, cursus eu ante quis, aliquam venenatis augue. Cras turpis justo, pellentesque eu hendrerit et, euismod vitae leo. Ut in lorem lobortis, gravida quam eget, pulvinar quam. Nam ut leo leo.</span></p>');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8_unicode_ci NOT NULL,
  `method` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `dpc_user`
--

CREATE TABLE `dpc_user` (
  `id` int(11) NOT NULL,
  `username` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `confirmation_token` varchar(180) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `dpc_user`
--

INSERT INTO `dpc_user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `confirmation_token`, `password_requested_at`, `roles`) VALUES
(1, 'antony', 'antony', 'beau.antony@gmail.com', 'beau.antony@gmail.com', 1, 'n0cO7TJBTyYN8lBnKfjXyDEM2t7yY9F3sCz2URMEn6s', 'jwT0AwP0JX28eEyb7a5AHMFCrbSsaVxZM8BmX7xMxTlkw0CJiFlSenOBeO2dItXPrqqJ0BAS8YG5078047Btzw==', '2017-06-11 21:00:59', NULL, NULL, 'a:1:{i:0;s:16:"ROLE_SUPER_ADMIN";}');

-- --------------------------------------------------------

--
-- Structure de la table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `theme_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `answer` longtext COLLATE utf8_unicode_ci NOT NULL,
  `published` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `faq`
--

INSERT INTO `faq` (`id`, `theme_id`, `title`, `answer`, `published`) VALUES
(1, 1, 'Les ordinateurs d\'occasion sont ils garantis?', '<p>Les ordinateurs d\'occasion sont garantis par notre magasin pour une dur&eacute;e de 3 &agrave; 6 mois.</p>', 1),
(2, 1, 'La casse accidentelle est elle comprise dans la garantie?', '<p>Non, les dommages port&eacute;s aux appareils ne sont en aucun cas pris en charge par la garantie. Les pannes et mauvais fonctionnements seulement sont pris en charge au titre de la garantie.</p>', 1),
(3, 2, 'Quelle est la durée d\'une réparation ?', '<p><span style="color: #000000; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">La dur&eacute;e d\'une r&eacute;paration d&eacute;pend du type de prestation (r&eacute;paration express ou standard) et de la n&eacute;cessit&eacute; ou non de commander des pi&egrave;ces de remplacement.</span></p>', 1),
(4, 1, 'Les ordinateurs d\'occasion sont ils garantis?', '<p><span style="color: #000000; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.</span></p>', 1),
(5, 3, 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid?', '<p><span style="color: #000000; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.</span></p>', 1),
(6, 3, 'La casse accidentelle est elle comprise dans la garantie?', '<p><span style="color: #000000; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.</span></p>', 1),
(7, 3, 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid?', '<p><span style="color: #000000; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.</span></p>', 1),
(8, 2, 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson?', '<p><span style="color: #000000; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.</span></p>', 1),
(9, 2, 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid?', '<p><span style="color: #000000; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.</span></p>', 1);

-- --------------------------------------------------------

--
-- Structure de la table `faq_theme`
--

CREATE TABLE `faq_theme` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `faq_theme`
--

INSERT INTO `faq_theme` (`id`, `title`) VALUES
(1, 'Garantie'),
(3, 'Pc Portable'),
(2, 'Réparation');

-- --------------------------------------------------------

--
-- Structure de la table `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `section_one_id` int(11) NOT NULL,
  `section_two_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title_section_3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title_section_4` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `home`
--

INSERT INTO `home` (`id`, `section_one_id`, `section_two_id`, `title`, `title_section_3`, `title_section_4`) VALUES
(1, 1, 1, 'Bienvenue chez DPC', 'Disponible sur notre site', 'L\'équipe DPC');

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `home_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image_size` int(11) DEFAULT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `image`
--

INSERT INTO `image` (`id`, `home_id`, `title`, `alt`, `image_name`, `image_size`, `updated_at`) VALUES
(1, NULL, 'Gérant / Technicien informatique', 'Gérant / Technicien informatique', '593d805d248d9.jpg', NULL, '2017-06-11 17:39:41'),
(2, NULL, 'Technicien informatique', 'Technicien informatique', '593d805d250a9.jpg', NULL, '2017-06-11 17:39:41'),
(3, 1, 'magasin 1', 'photo du magasin', '593d805d25879.jpg', NULL, '2017-06-11 17:39:41'),
(4, 1, 'magasin 2', 'photo du magasin', '593d805d26049.jpg', NULL, '2017-06-11 17:39:41'),
(5, NULL, 'Logo DPC', 'Logo DPC', '593d809e6b887.png', NULL, '2017-06-11 17:40:46'),
(6, NULL, 'Asus Logo', 'Asus', '593d80f65af04.png', NULL, '2017-06-11 17:42:14'),
(7, NULL, 'Gigabyte Logo', 'Gigabyte Logo', '593d81291a37a.jpg', NULL, '2017-06-11 17:43:05'),
(8, NULL, 'pc portable', 'Asus', '593d814660b1d.jpg', NULL, '2017-06-11 17:43:34'),
(9, NULL, 'Processeurs', 'Processeurs', '593d824b06571.jpg', NULL, '2017-06-11 17:47:55'),
(10, NULL, 'Zenbook face avant', 'Zenbook face avant', '593d83bae966d.jpg', NULL, '2017-06-11 17:54:02'),
(11, NULL, 'Zenbook face arrière', 'Zenbook face arrière', '593d83bae9e3d.jpg', NULL, '2017-06-11 17:54:02'),
(12, NULL, 'Gigabyte Pc portable', 'Gigabyte Pc portable', '593d846300659.jpg', NULL, '2017-06-11 17:56:51'),
(13, NULL, 'Gigabyte Pc portable', 'Gigabyte Pc portable', '593d846300e29.jpg', NULL, '2017-06-11 17:56:51'),
(14, NULL, 'AMD-proc', 'AMD-proc', '593d854c5c475.jpg', NULL, '2017-06-11 18:00:44'),
(15, NULL, 'AMD-proc', 'AMD-proc', '593d854c5cc45.jpg', NULL, '2017-06-11 18:00:44'),
(16, NULL, 'AMD', 'AMD', '593d8586b72e8.jpg', NULL, '2017-06-11 18:01:42'),
(17, NULL, 'Zenbook face avant', 'Zenbook face avant', '593d86329c0a7.jpg', NULL, '2017-06-11 18:04:34'),
(18, NULL, 'Zenbook face arrière', 'Zenbook face arrière', '593d86329c877.jpg', NULL, '2017-06-11 18:04:34'),
(19, NULL, 'AMD-proc', 'AMD-proc', '593d866a9a232.jpg', NULL, '2017-06-11 18:05:30'),
(20, NULL, 'AMD-proc', 'AMD-proc', '593d866a9aa02.jpg', NULL, '2017-06-11 18:05:30'),
(21, NULL, 'Gigabyte Pc portable', 'Gigabyte Pc portable', '593d86c91db96.jpg', NULL, '2017-06-11 18:07:05'),
(22, NULL, 'Gigabyte Pc portable', 'Gigabyte Pc portable', '593d86c91e366.jpg', NULL, '2017-06-11 18:07:05'),
(23, NULL, 'Zenbook face avant', 'Zenbook face avant', '593d87262fdea.jpg', NULL, '2017-06-11 18:08:38'),
(24, NULL, 'Zenbook face arrière', 'Zenbook face arrière', '593d8726305ba.jpg', NULL, '2017-06-11 18:08:38'),
(25, NULL, 'Diagnostique', 'Diagnostique', '593d89a3637e0.jpg', NULL, '2017-06-11 18:19:15'),
(26, NULL, 'Réparation', 'Réparation', '593d89cb71f7c.jpg', NULL, '2017-06-11 18:19:55'),
(27, NULL, 'Diagnostique Anti-Virus', 'Diagnostique Anti-Virus', '593d89f33fbe0.jpg', NULL, '2017-06-11 18:20:35'),
(28, NULL, 'Diagnostique Anti-Virus', 'Diagnostique Anti-Virus', '593d8a1162964.jpg', NULL, '2017-06-11 18:21:05'),
(29, NULL, 'Diagnostique Anti-Virus', 'Diagnostique Anti-Virus', '593d8a2d78b52.jpg', NULL, '2017-06-11 18:21:33'),
(30, NULL, 'Diagnostique Anti-Virus', 'Diagnostique Anti-Virus', '593d8a4838df4.jpg', NULL, '2017-06-11 18:22:00'),
(31, NULL, 'Réparation informatique', 'Réparation informatique', '593d8a6645fcb.jpg', NULL, '2017-06-11 18:22:30'),
(32, NULL, 'Réparation informatique', 'Réparation informatique', '593d8a83ca3c4.jpg', NULL, '2017-06-11 18:22:59');

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `updateDate` datetime DEFAULT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `discount` int(11) DEFAULT NULL,
  `occasion` tinyint(1) NOT NULL,
  `promo` tinyint(1) NOT NULL,
  `warranty` int(11) NOT NULL,
  `description_short` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `product`
--

INSERT INTO `product` (`id`, `brand_id`, `title`, `date`, `updateDate`, `description`, `price`, `discount`, `occasion`, `promo`, `warranty`, `description_short`) VALUES
(1, 1, 'ASUS- ZenBook Plus - UX430 - Bleu métal', '2017-06-11 17:54:02', NULL, '<p><span style="color: #000000; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Processeur Intel&reg; Core&trade; i5-7200U (2,5 GHz / 3,1 GHz Turbo) - Ecran 14" Full HD Antireflet - R&eacute;solution de 1920 x 1080 pixels - SSD 256 Go - RAM 8 Go - Chipset graphique Intel HD Graphics - Port Micro HDMI</span></p>', '499.99', 20, 0, 1, 12, 'Processeur Intel® Core™ i5-7200U (2,5 GHz / 3,1 GHz Turbo) - Ecran 14" Full HD Antireflet - Résolution de 1920 x 1080 pixels - SSD 256 Go - RAM 8 Go - Chipset graphique Intel HD Graphics - Port Micro HDMI'),
(2, 2, 'Gigabyte P15F v7 C2D-FR', '2017-06-11 17:56:50', NULL, '<p><span id="ctl00_cphMainContent_lbChapeau" class="chapeau" style="padding: 0px; margin: 1em 0px 0px; display: block; text-align: justify; color: #141414; font-family: arial, verdana, geneva, helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial; border: 0px none inherit;">Profitez d\'excellentes performances avec le PC portable Gigabyte P15F v7 ! Gr&acirc;ce &agrave; ses composants performants, son superbe &eacute;cran mat de 15.6" Full HD et son syst&egrave;me audio performant, il offre un excellent confort d\'utilisation pour les jeux vid&eacute;o et le divertissement multim&eacute;dia HD !</span><span class="readmore" style="border-style: none none solid; border-width: 0px 0px 1px; padding: 0px; margin: 0px 0px 5px; display: block; height: 19px; text-align: right; color: #141414; font-family: arial, verdana, geneva, helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial; border-color: inherit inherit #c8c8c8 inherit;"><br class="Apple-interchange-newline" /></span></p>\r\n<p><strong style="padding: 0px; margin: 0px; color: #141414; font-family: arial, verdana, geneva, helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial; border: 0px none inherit;"><span style="padding: 0px; margin: 0px; color: #009dd3; font-size: large; border: 0px none inherit;">Caract&eacute;ristiques principales :</span></strong></p>\r\n<ul style="padding: 0px; margin: 0.2em 1em 1em; list-style: disc inside none; color: #141414; font-family: arial, verdana, geneva, helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial; border: 0px none inherit;">\r\n<li style="padding: 0px; margin: 0px; border: 0px none inherit;">Processeur<strong style="padding: 0px; margin: 0px; border: 0px none inherit;"><span class="Apple-converted-space">&nbsp;</span></strong><strong style="padding: 0px; margin: 0px; border: 0px none inherit;">Intel Core i7-7700HQ</strong><span class="Apple-converted-space">&nbsp;</span>(Quad-Core 2.8 GHz / 3.8 GHz Turbo - Cache 8 Mo)</li>\r\n<li style="padding: 0px; margin: 0px; border: 0px none inherit;">8 Go de m&eacute;moire vive DDR4 (2 slots - maximum 32 Go)</li>\r\n<li style="padding: 0px; margin: 0px; border: 0px none inherit;"><strong style="padding: 0px; margin: 0px; border: 0px none inherit;">Ecran mat de 15.6"</strong>&nbsp;avec r&eacute;solution<span class="Apple-converted-space">&nbsp;</span><strong style="padding: 0px; margin: 0px; border: 0px none inherit;">Full HD</strong>&nbsp;(1920 x 1080)</li>\r\n<li style="padding: 0px; margin: 0px; border: 0px none inherit;"><strong style="padding: 0px; margin: 0px; border: 0px none inherit;">Dalle IPS</strong>&nbsp;: couleurs superbes et angles de vision larges</li>\r\n<li style="padding: 0px; margin: 0px; border: 0px none inherit;">Chipset graphique performant<span class="Apple-converted-space">&nbsp;</span><strong style="padding: 0px; margin: 0px; border: 0px none inherit;">NVIDIA GeForce GTX 950M</strong>&nbsp;avec&nbsp;2 Go de m&eacute;moire d&eacute;di&eacute;e</li>\r\n<li style="padding: 0px; margin: 0px; border: 0px none inherit;">Sortie HDMI, pour le raccordement d\'un t&eacute;l&eacute;viseur HD</li>\r\n<li style="padding: 0px; margin: 0px; border: 0px none inherit;"><strong style="padding: 0px; margin: 0px; border: 0px none inherit;">SSD M.2 SATA&nbsp;de 128 Go</strong><span class="Apple-converted-space">&nbsp;</span>+ disque dur de 1 To (7200 RPM)</li>\r\n<li style="padding: 0px; margin: 0px; border: 0px none inherit;">Clavier chiclet (touches plates et isol&eacute;es)</li>\r\n<li style="padding: 0px; margin: 0px; border: 0px none inherit;">Communication sans fil fiable et performante<span class="Apple-converted-space">&nbsp;</span><strong style="padding: 0px; margin: 0px; border: 0px none inherit;">Wi-Fi AC</strong><span class="Apple-converted-space">&nbsp;</span>+<span class="Apple-converted-space">&nbsp;</span><strong style="padding: 0px; margin: 0px; border: 0px none inherit;">Bluetooth 4.0</strong></li>\r\n<li style="padding: 0px; margin: 0px; border: 0px none inherit;">2 ports USB 3.1 + 1 port USB 3.0 offrant des vitesses haut d&eacute;bit</li>\r\n<li style="padding: 0px; margin: 0px; border: 0px none inherit;">Lecteur de cartes m&eacute;moire SD</li>\r\n<li style="padding: 0px; margin: 0px; border: 0px none inherit;">Haut-parleurs&nbsp;int&eacute;gr&eacute;s avec technologie Sound Blaster Cinema 2</li>\r\n<li style="padding: 0px; margin: 0px; border: 0px none inherit;">Webcam HD&nbsp;int&eacute;gr&eacute;e</li>\r\n<li style="padding: 0px; margin: 0px; border: 0px none inherit;">PC portable<span class="Apple-converted-space">&nbsp;</span><strong style="padding: 0px; margin: 0px; border: 0px none inherit;">sans Windows</strong><span class="Apple-converted-space">&nbsp;</span>avec<span class="Apple-converted-space">&nbsp;</span><strong style="padding: 0px; margin: 0px; border: 0px none inherit;">FreeDOS</strong><span class="Apple-converted-space">&nbsp;</span>: installez le syst&egrave;me d\'exploitation de votre choix</li>\r\n<li style="padding: 0px; margin: 0px; border: 0px none inherit;">Garantie constructeur 2 ans</li>\r\n</ul>\r\n<p>&nbsp;</p>', '750.00', NULL, 1, 0, 6, 'Profitez d\'excellentes performances avec le PC portable Gigabyte P15F v7 ! Grâce à ses composants performants, son superbe écran mat de 15.6" Full HD et son système audio performant, il offre un excellent confort d\'utilisation pour les jeux vidéo et le divertissement multimédia HD !'),
(3, 3, 'AMD A10-7860K (3.6 GHz) Black Low Noise Edition', '2017-06-11 18:00:44', NULL, '<p><span id="ctl00_cphMainContent_lbChapeau" class="chapeau" style="padding: 0px; margin: 1em 0px 0px; display: block; text-align: justify; color: #141414; font-family: arial, verdana, geneva, helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial; border: 0px none inherit;">Le processeur AMD A10-7860K (3.6 GHz) Black Low Noise Edition est si r&eacute;volutionnaire qu\'il bouleverse la d&eacute;finition m&ecirc;me de processeur. Avec sa multitude de coeurs int&eacute;grant les coeurs graphiques AMD Radeon R7 et des fonctionnalit&eacute;s exclusives comme la technologie AMD TrueAudio, il est parfait pour</span><span class="readmore" style="border-style: none none solid; border-width: 0px 0px 1px; padding: 0px; margin: 0px 0px 5px; display: block; height: 19px; text-align: right; color: #141414; font-family: arial, verdana, geneva, helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial; border-color: inherit inherit #c8c8c8 inherit;"><br class="Apple-interchange-newline" /></span></p>\r\n<p><strong style="padding: 0px; margin: 0px; color: #141414; font-family: arial, verdana, geneva, helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial; border: 0px none inherit;"><span style="padding: 0px; margin: 0px; color: #009dd3; font-size: large; border: 0px none inherit;">Principales caract&eacute;ristiques :</span></strong></p>\r\n<ul style="padding: 0px; margin: 0.2em 1em 1em; list-style: disc inside none; color: #141414; font-family: arial, verdana, geneva, helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial; border: 0px none inherit;">\r\n<li style="padding: 0px; margin: 0px; border: 0px none inherit;">Processeur&nbsp;Quad Core<span class="Apple-converted-space">&nbsp;</span><strong style="padding: 0px; margin: 0px; border: 0px none inherit;">AMD&nbsp;</strong><strong style="padding: 0px; margin: 0px; border: 0px none inherit;">A10-7860K</strong>&nbsp;(<strong style="padding: 0px; margin: 0px; border: 0px none inherit;">3.6 GHz / 4.0 GHz<span class="Apple-converted-space">&nbsp;</span></strong><strong style="padding: 0px; margin: 0px; border: 0px none inherit;">Turbo Core 3.0</strong><span class="Apple-converted-space">&nbsp;</span>- Cache L2&nbsp;4 Mo)</li>\r\n<li style="padding: 0px; margin: 0px; border: 0px none inherit;"><strong style="padding: 0px; margin: 0px; border: 0px none inherit;">Unlocked CPU (&nbsp;Black Low Noise Edition) :</strong><span class="Apple-converted-space">&nbsp;</span>Coefficient multiplicateur d&eacute;bloqu&eacute; pour un surcaden&ccedil;age simplifi&eacute;</li>\r\n<li style="padding: 0px; margin: 0px; border: 0px none inherit;">Processeur graphique int&eacute;gr&eacute;<span class="Apple-converted-space">&nbsp;</span><strong style="padding: 0px; margin: 0px; border: 0px none inherit;">AMD Radeon R7</strong><span class="Apple-converted-space">&nbsp;</span>(<strong style="padding: 0px; margin: 0px; border: 0px none inherit;">720 MHz - 512 Cores Radeon</strong>)</li>\r\n<li style="padding: 0px; margin: 0px; border: 0px none inherit;">Contr&ocirc;leur m&eacute;moire<span class="Apple-converted-space">&nbsp;</span><strong style="padding: 0px; margin: 0px; border: 0px none inherit;">DDR3&nbsp;</strong></li>\r\n<li style="padding: 0px; margin: 0px; border: 0px none inherit;"><strong style="padding: 0px; margin: 0px; border: 0px none inherit;">Socket FM2+</strong></li>\r\n<li style="padding: 0px; margin: 0px; border: 0px none inherit;">Enveloppe thermique maximale (TDP) :<span class="Apple-converted-space">&nbsp;</span><strong style="padding: 0px; margin: 0px; border: 0px none inherit;">65W</strong></li>\r\n</ul>\r\n<p>&nbsp;</p>', '105.95', NULL, 0, 0, 24, 'Le processeur AMD A10-7860K (3.6 GHz) Black Low Noise Edition est si révolutionnaire qu\'il bouleverse la définition même de processeur. Avec sa multitude de coeurs intégrant les coeurs graphiques AMD Radeon R7 et des fonctionnalités exclusives comme la technologie AMD TrueAudio, il est parfait pour'),
(4, 1, 'ASUS- ZenBook Plus - UX430 - Bleu métal 2', '2017-06-11 18:04:34', NULL, '<p><span style="color: #000000; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Processeur Intel&reg; Core&trade; i5-7200U (2,5 GHz / 3,1 GHz Turbo) - Ecran 14" Full HD Antireflet - R&eacute;solution de 1920 x 1080 pixels - SSD 256 Go - RAM 8 Go - Chipset graphique Intel HD Graphics - Port Micro HDMI</span></p>', '499.99', 20, 0, 1, 12, 'Processeur Intel® Core™ i5-7200U (2,5 GHz / 3,1 GHz Turbo) - Ecran 14" Full HD Antireflet - Résolution de 1920 x 1080 pixels - SSD 256 Go - RAM 8 Go - Chipset graphique Intel HD Graphics - Port Micro HDMI'),
(5, 3, 'AMD A10-7860K (3.6 GHz) Black Low Noise Edition 2', '2017-06-11 18:05:30', NULL, '<p><span id="ctl00_cphMainContent_lbChapeau" class="chapeau" style="padding: 0px; margin: 1em 0px 0px; display: block; text-align: justify; color: #141414; font-family: arial, verdana, geneva, helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial; border: 0px none inherit;">Le processeur AMD A10-7860K (3.6 GHz) Black Low Noise Edition est si r&eacute;volutionnaire qu\'il bouleverse la d&eacute;finition m&ecirc;me de processeur. Avec sa multitude de coeurs int&eacute;grant les coeurs graphiques AMD Radeon R7 et des fonctionnalit&eacute;s exclusives comme la technologie AMD TrueAudio, il est parfait pour</span><span class="readmore" style="border-style: none none solid; border-width: 0px 0px 1px; padding: 0px; margin: 0px 0px 5px; display: block; height: 19px; text-align: right; color: #141414; font-family: arial, verdana, geneva, helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial; border-color: inherit inherit #c8c8c8 inherit;"><br class="Apple-interchange-newline" /></span></p>\r\n<p><strong style="padding: 0px; margin: 0px; color: #141414; font-family: arial, verdana, geneva, helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial; border: 0px none inherit;"><span style="padding: 0px; margin: 0px; color: #009dd3; font-size: large; border: 0px none inherit;">Principales caract&eacute;ristiques :</span></strong></p>\r\n<ul style="padding: 0px; margin: 0.2em 1em 1em; list-style: disc inside none; color: #141414; font-family: arial, verdana, geneva, helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial; border: 0px none inherit;">\r\n<li style="padding: 0px; margin: 0px; border: 0px none inherit;">Processeur&nbsp;Quad Core<span class="Apple-converted-space">&nbsp;</span><strong style="padding: 0px; margin: 0px; border: 0px none inherit;">AMD&nbsp;</strong><strong style="padding: 0px; margin: 0px; border: 0px none inherit;">A10-7860K</strong>&nbsp;(<strong style="padding: 0px; margin: 0px; border: 0px none inherit;">3.6 GHz / 4.0 GHz<span class="Apple-converted-space">&nbsp;</span></strong><strong style="padding: 0px; margin: 0px; border: 0px none inherit;">Turbo Core 3.0</strong><span class="Apple-converted-space">&nbsp;</span>- Cache L2&nbsp;4 Mo)</li>\r\n<li style="padding: 0px; margin: 0px; border: 0px none inherit;"><strong style="padding: 0px; margin: 0px; border: 0px none inherit;">Unlocked CPU (&nbsp;Black Low Noise Edition) :</strong><span class="Apple-converted-space">&nbsp;</span>Coefficient multiplicateur d&eacute;bloqu&eacute; pour un surcaden&ccedil;age simplifi&eacute;</li>\r\n<li style="padding: 0px; margin: 0px; border: 0px none inherit;">Processeur graphique int&eacute;gr&eacute;<span class="Apple-converted-space">&nbsp;</span><strong style="padding: 0px; margin: 0px; border: 0px none inherit;">AMD Radeon R7</strong><span class="Apple-converted-space">&nbsp;</span>(<strong style="padding: 0px; margin: 0px; border: 0px none inherit;">720 MHz - 512 Cores Radeon</strong>)</li>\r\n<li style="padding: 0px; margin: 0px; border: 0px none inherit;">Contr&ocirc;leur m&eacute;moire<span class="Apple-converted-space">&nbsp;</span><strong style="padding: 0px; margin: 0px; border: 0px none inherit;">DDR3&nbsp;</strong></li>\r\n<li style="padding: 0px; margin: 0px; border: 0px none inherit;"><strong style="padding: 0px; margin: 0px; border: 0px none inherit;">Socket FM2+</strong></li>\r\n<li style="padding: 0px; margin: 0px; border: 0px none inherit;">Enveloppe thermique maximale (TDP) :<span class="Apple-converted-space">&nbsp;</span><strong style="padding: 0px; margin: 0px; border: 0px none inherit;">65W</strong></li>\r\n</ul>\r\n<p>&nbsp;</p>', '105.95', 30, 1, 0, 3, 'Le processeur AMD A10-7860K (3.6 GHz) Black Low Noise Edition est si révolutionnaire qu\'il bouleverse la définition même de processeur. Avec sa multitude de coeurs intégrant les coeurs graphiques AMD Radeon R7 et des fonctionnalités exclusives comme la technologie AMD TrueAudio, il est parfait pour'),
(6, 2, 'Gigabyte P15F v7 C2D-FR2', '2017-06-11 18:07:04', NULL, '<p><span id="ctl00_cphMainContent_lbChapeau" class="chapeau" style="padding: 0px; margin: 1em 0px 0px; display: block; text-align: justify; color: #141414; font-family: arial, verdana, geneva, helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial; border: 0px none inherit;">Profitez d\'excellentes performances avec le PC portable Gigabyte P15F v7 ! Gr&acirc;ce &agrave; ses composants performants, son superbe &eacute;cran mat de 15.6" Full HD et son syst&egrave;me audio performant, il offre un excellent confort d\'utilisation pour les jeux vid&eacute;o et le divertissement multim&eacute;dia HD !</span><span class="readmore" style="border-style: none none solid; border-width: 0px 0px 1px; padding: 0px; margin: 0px 0px 5px; display: block; height: 19px; text-align: right; color: #141414; font-family: arial, verdana, geneva, helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial; border-color: inherit inherit #c8c8c8 inherit;"><br class="Apple-interchange-newline" /></span></p>\r\n<p><strong style="padding: 0px; margin: 0px; color: #141414; font-family: arial, verdana, geneva, helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial; border: 0px none inherit;"><span style="padding: 0px; margin: 0px; color: #009dd3; font-size: large; border: 0px none inherit;">Caract&eacute;ristiques principales :</span></strong></p>\r\n<ul style="padding: 0px; margin: 0.2em 1em 1em; list-style: disc inside none; color: #141414; font-family: arial, verdana, geneva, helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial; border: 0px none inherit;">\r\n<li style="padding: 0px; margin: 0px; border: 0px none inherit;">Processeur<strong style="padding: 0px; margin: 0px; border: 0px none inherit;"><span class="Apple-converted-space">&nbsp;</span></strong><strong style="padding: 0px; margin: 0px; border: 0px none inherit;">Intel Core i7-7700HQ</strong><span class="Apple-converted-space">&nbsp;</span>(Quad-Core 2.8 GHz / 3.8 GHz Turbo - Cache 8 Mo)</li>\r\n<li style="padding: 0px; margin: 0px; border: 0px none inherit;">8 Go de m&eacute;moire vive DDR4 (2 slots - maximum 32 Go)</li>\r\n<li style="padding: 0px; margin: 0px; border: 0px none inherit;"><strong style="padding: 0px; margin: 0px; border: 0px none inherit;">Ecran mat de 15.6"</strong>&nbsp;avec r&eacute;solution<span class="Apple-converted-space">&nbsp;</span><strong style="padding: 0px; margin: 0px; border: 0px none inherit;">Full HD</strong>&nbsp;(1920 x 1080)</li>\r\n<li style="padding: 0px; margin: 0px; border: 0px none inherit;"><strong style="padding: 0px; margin: 0px; border: 0px none inherit;">Dalle IPS</strong>&nbsp;: couleurs superbes et angles de vision larges</li>\r\n<li style="padding: 0px; margin: 0px; border: 0px none inherit;">Chipset graphique performant<span class="Apple-converted-space">&nbsp;</span><strong style="padding: 0px; margin: 0px; border: 0px none inherit;">NVIDIA GeForce GTX 950M</strong>&nbsp;avec&nbsp;2 Go de m&eacute;moire d&eacute;di&eacute;e</li>\r\n<li style="padding: 0px; margin: 0px; border: 0px none inherit;">Sortie HDMI, pour le raccordement d\'un t&eacute;l&eacute;viseur HD</li>\r\n<li style="padding: 0px; margin: 0px; border: 0px none inherit;"><strong style="padding: 0px; margin: 0px; border: 0px none inherit;">SSD M.2 SATA&nbsp;de 128 Go</strong><span class="Apple-converted-space">&nbsp;</span>+ disque dur de 1 To (7200 RPM)</li>\r\n<li style="padding: 0px; margin: 0px; border: 0px none inherit;">Clavier chiclet (touches plates et isol&eacute;es)</li>\r\n<li style="padding: 0px; margin: 0px; border: 0px none inherit;">Communication sans fil fiable et performante<span class="Apple-converted-space">&nbsp;</span><strong style="padding: 0px; margin: 0px; border: 0px none inherit;">Wi-Fi AC</strong><span class="Apple-converted-space">&nbsp;</span>+<span class="Apple-converted-space">&nbsp;</span><strong style="padding: 0px; margin: 0px; border: 0px none inherit;">Bluetooth 4.0</strong></li>\r\n<li style="padding: 0px; margin: 0px; border: 0px none inherit;">2 ports USB 3.1 + 1 port USB 3.0 offrant des vitesses haut d&eacute;bit</li>\r\n<li style="padding: 0px; margin: 0px; border: 0px none inherit;">Lecteur de cartes m&eacute;moire SD</li>\r\n<li style="padding: 0px; margin: 0px; border: 0px none inherit;">Haut-parleurs&nbsp;int&eacute;gr&eacute;s avec technologie Sound Blaster Cinema 2</li>\r\n<li style="padding: 0px; margin: 0px; border: 0px none inherit;">Webcam HD&nbsp;int&eacute;gr&eacute;e</li>\r\n<li style="padding: 0px; margin: 0px; border: 0px none inherit;">PC portable<span class="Apple-converted-space">&nbsp;</span><strong style="padding: 0px; margin: 0px; border: 0px none inherit;">sans Windows</strong><span class="Apple-converted-space">&nbsp;</span>avec<span class="Apple-converted-space">&nbsp;</span><strong style="padding: 0px; margin: 0px; border: 0px none inherit;">FreeDOS</strong><span class="Apple-converted-space">&nbsp;</span>: installez le syst&egrave;me d\'exploitation de votre choix</li>\r\n<li style="padding: 0px; margin: 0px; border: 0px none inherit;">Garantie constructeur 2 ans</li>\r\n</ul>\r\n<p>&nbsp;</p>', '999.99', 15, 0, 1, 12, 'Profitez d\'excellentes performances avec le PC portable Gigabyte P15F v7 ! Grâce à ses composants performants, son superbe écran mat de 15.6" Full HD et son système audio performant, il offre un excellent confort d\'utilisation pour les jeux vidéo et le divertissement multimédia HD !'),
(7, 1, 'ASUS- ZenBook Plus - UX430 - Bleu métal3', '2017-06-11 18:08:37', NULL, '<p><span style="color: #000000; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Processeur Intel&reg; Core&trade; i5-7200U (2,5 GHz / 3,1 GHz Turbo) - Ecran 14" Full HD Antireflet - R&eacute;solution de 1920 x 1080 pixels - SSD 256 Go - RAM 8 Go - Chipset graphique Intel HD Graphics - Port Micro HDMI</span></p>', '499.99', NULL, 0, 0, 24, 'Processeur Intel® Core™ i5-7200U (2,5 GHz / 3,1 GHz Turbo) - Ecran 14" Full HD Antireflet - Résolution de 1920 x 1080 pixels - SSD 256 Go - RAM 8 Go - Chipset graphique Intel HD Graphics - Port Micro HDMI');

-- --------------------------------------------------------

--
-- Structure de la table `product_category`
--

CREATE TABLE `product_category` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `product_category`
--

INSERT INTO `product_category` (`product_id`, `category_id`) VALUES
(1, 1),
(2, 1),
(3, 2),
(4, 1),
(5, 2),
(6, 1),
(7, 1);

-- --------------------------------------------------------

--
-- Structure de la table `product_image`
--

CREATE TABLE `product_image` (
  `product_id` int(11) NOT NULL,
  `image_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `product_image`
--

INSERT INTO `product_image` (`product_id`, `image_id`) VALUES
(1, 10),
(1, 11),
(2, 12),
(2, 13),
(3, 14),
(3, 15),
(4, 17),
(4, 18),
(5, 19),
(5, 20),
(6, 21),
(6, 22),
(7, 23),
(7, 24);

-- --------------------------------------------------------

--
-- Structure de la table `product_search`
--

CREATE TABLE `product_search` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `brand_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `occasion` tinyint(1) DEFAULT NULL,
  `promo` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `section_four_element`
--

CREATE TABLE `section_four_element` (
  `id` int(11) NOT NULL,
  `home_id` int(11) DEFAULT NULL,
  `image_id` int(11) DEFAULT NULL,
  `firstName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `section_four_element`
--

INSERT INTO `section_four_element` (`id`, `home_id`, `image_id`, `firstName`, `status`) VALUES
(1, 1, 1, 'Jean-Pierre', 'Gérant / Technicien informatique'),
(2, 1, 2, 'Grégory', 'Technicien informatique');

-- --------------------------------------------------------

--
-- Structure de la table `section_one`
--

CREATE TABLE `section_one` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `text` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `section_one`
--

INSERT INTO `section_one` (`id`, `title`, `text`) VALUES
(1, 'Qui Sommes Nous ?', '<p><span style="color: #000000; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Nous sommes une entreprise ann&eacute;cienne de vente de produits et services informatique. Avec plus de 20 ans d\'exp&eacute;rience, nous accompagnons nos clients particulier et professionels sur l\'ensembles de leurs besoins.</span></p>');

-- --------------------------------------------------------

--
-- Structure de la table `section_three_element`
--

CREATE TABLE `section_three_element` (
  `id` int(11) NOT NULL,
  `home_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `text` longtext COLLATE utf8_unicode_ci NOT NULL,
  `icone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `section_three_element`
--

INSERT INTO `section_three_element` (`id`, `home_id`, `title`, `text`, `icone`, `link`) VALUES
(1, 1, 'Nos produits phares', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing metus. elit.</p>', 'fa fa-shopping-bag', 'http://dpc-alpha.terminus-development.net/dpc-catalogue/1'),
(2, 1, 'Nos services', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing metus. elit.</p>', 'fa fa-life-ring', 'http://dpc-alpha.terminus-development.net/services'),
(3, 1, 'Nos promos du moment', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing metus. elit.</p>', 'fa fa-cart-arrow-down fa-3x', 'http://dpc-alpha.terminus-development.net/promotions/1');

-- --------------------------------------------------------

--
-- Structure de la table `section_two`
--

CREATE TABLE `section_two` (
  `id` int(11) NOT NULL,
  `title_1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `text_1` longtext COLLATE utf8_unicode_ci NOT NULL,
  `icone_1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title_2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `text_2` longtext COLLATE utf8_unicode_ci NOT NULL,
  `icone_2` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `section_two`
--

INSERT INTO `section_two` (`id`, `title_1`, `text_1`, `icone_1`, `title_2`, `text_2`, `icone_2`) VALUES
(1, 'Plus de 200 produit en magasin', '<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.</p>', 'fa  fa-shopping-bag', 'Tout type de réparation informatique', '<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.</p>', 'fa fa-wrench');

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `image_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `short_description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `long_description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `price_min` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `service`
--

INSERT INTO `service` (`id`, `category_id`, `image_id`, `title`, `short_description`, `long_description`, `price_min`) VALUES
(1, 1, 27, 'Diagnostique Anti-Virus', '<p>Nous faisons une recherche extensive de tout les virus et malware pr&eacute;sent sur votre ordinateur puis nous les &eacute;radiquons.</p>', '<p>Nous faisons une recherche extensive de tout les virus et malware pr&eacute;sent sur votre ordinateur puis nous les &eacute;radiquons.</p>', 49),
(2, 1, 28, 'Diagnostique Anti-Virus2', '<p>Nous faisons une recherche extensive de tout les virus et malware pr&eacute;sent sur votre ordinateur puis nous les &eacute;radiquons.</p>', '<p>Nous faisons une recherche extensive de tout les virus et malware pr&eacute;sent sur votre ordinateur puis nous les &eacute;radiquons.</p>', 79),
(3, 1, 29, 'Diagnostique Anti-Virus3', '<p>Nous faisons une recherche extensive de tout les virus et malware pr&eacute;sent sur votre ordinateur puis nous les &eacute;radiquons.</p>', '<p>Nous faisons une recherche extensive de tout les virus et malware pr&eacute;sent sur votre ordinateur puis nous les &eacute;radiquons.</p>', 99),
(4, 2, 30, 'Diagnostique Anti-Virus4', '<p>Nous faisons une recherche extensive de tout les virus et malware pr&eacute;sent sur votre ordinateur puis nous les &eacute;radiquons.</p>', '<p>Nous faisons une recherche extensive de tout les virus et malware pr&eacute;sent sur votre ordinateur puis nous les &eacute;radiquons.</p>', 49),
(5, 2, 31, 'Réparation PC de bureau', '<p>Nous faisons une recherche extensive de tout les virus et malware pr&eacute;sent sur votre ordinateur puis nous les &eacute;radiquons.</p>', '<p>Nous faisons une recherche extensive de tout les virus et malware pr&eacute;sent sur votre ordinateur puis nous les &eacute;radiquons.</p>', 79),
(6, 2, 32, 'Réparation PC de bureau', '<p>En cas de panne nous faisons un diagnostique &eacute;tendu de votre machine pour d&eacute;terminer le ou les composants &agrave; changer et vous proposons un devis ainsi qu\'un d&eacute;lais.</p>', '<p>En cas de panne nous faisons un diagnostique &eacute;tendu de votre machine pour d&eacute;terminer le ou les composants &agrave; changer et vous proposons un devis ainsi qu\'un d&eacute;lais.</p>', 89);

-- --------------------------------------------------------

--
-- Structure de la table `service_category`
--

CREATE TABLE `service_category` (
  `id` int(11) NOT NULL,
  `image_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `service_category`
--

INSERT INTO `service_category` (`id`, `image_id`, `title`, `description`) VALUES
(1, 25, 'Diagnostique', '<p><span style="color: #000000; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Vous ne savez pas ce qui va mal avec votre ordinateur, notre service vous le dira dans les meilleurs d&eacute;lais</span></p>'),
(2, 26, 'Réparation', '<p><span style="color: #000000; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Nous r&eacute;parons tous type de mat&eacute;riel informatique : ordinateur de bureau, pc portable, smartphone.</span></p>');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `brand_image`
--
ALTER TABLE `brand_image`
  ADD PRIMARY KEY (`brand_id`,`image_id`),
  ADD KEY `IDX_9EC4CD4844F5D008` (`brand_id`),
  ADD KEY `IDX_9EC4CD483DA5256D` (`image_id`);

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `category_image`
--
ALTER TABLE `category_image`
  ADD PRIMARY KEY (`category_id`,`image_id`),
  ADD KEY `IDX_2D0E4B1612469DE2` (`category_id`),
  ADD KEY `IDX_2D0E4B163DA5256D` (`image_id`);

--
-- Index pour la table `company_information`
--
ALTER TABLE `company_information`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_30A8A01BF98F144A` (`logo_id`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `dpc_user`
--
ALTER TABLE `dpc_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_451F8DB892FC23A8` (`username_canonical`),
  ADD UNIQUE KEY `UNIQ_451F8DB8A0D96FBF` (`email_canonical`),
  ADD UNIQUE KEY `UNIQ_451F8DB8C05FB297` (`confirmation_token`);

--
-- Index pour la table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_E8FF75CC59027487` (`theme_id`);

--
-- Index pour la table `faq_theme`
--
ALTER TABLE `faq_theme`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_33A13D0D2B36786B` (`title`);

--
-- Index pour la table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_71D60CD0B1D23C35` (`section_one_id`),
  ADD UNIQUE KEY `UNIQ_71D60CD0DA8EDBFA` (`section_two_id`);

--
-- Index pour la table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_C53D045F28CDC89C` (`home_id`);

--
-- Index pour la table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_D34A04AD44F5D008` (`brand_id`);

--
-- Index pour la table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`product_id`,`category_id`),
  ADD KEY `IDX_CDFC73564584665A` (`product_id`),
  ADD KEY `IDX_CDFC735612469DE2` (`category_id`);

--
-- Index pour la table `product_image`
--
ALTER TABLE `product_image`
  ADD PRIMARY KEY (`product_id`,`image_id`),
  ADD KEY `IDX_64617F034584665A` (`product_id`),
  ADD KEY `IDX_64617F033DA5256D` (`image_id`);

--
-- Index pour la table `product_search`
--
ALTER TABLE `product_search`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_D68C9A0312469DE2` (`category_id`),
  ADD UNIQUE KEY `UNIQ_D68C9A0344F5D008` (`brand_id`);

--
-- Index pour la table `section_four_element`
--
ALTER TABLE `section_four_element`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_212535093DA5256D` (`image_id`),
  ADD KEY `IDX_2125350928CDC89C` (`home_id`);

--
-- Index pour la table `section_one`
--
ALTER TABLE `section_one`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `section_three_element`
--
ALTER TABLE `section_three_element`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_E424D5C328CDC89C` (`home_id`);

--
-- Index pour la table `section_two`
--
ALTER TABLE `section_two`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_E19D9AD23DA5256D` (`image_id`),
  ADD KEY `IDX_E19D9AD212469DE2` (`category_id`);

--
-- Index pour la table `service_category`
--
ALTER TABLE `service_category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_FF3A42FC3DA5256D` (`image_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `company_information`
--
ALTER TABLE `company_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `dpc_user`
--
ALTER TABLE `dpc_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `faq_theme`
--
ALTER TABLE `faq_theme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `product_search`
--
ALTER TABLE `product_search`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `section_four_element`
--
ALTER TABLE `section_four_element`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `section_one`
--
ALTER TABLE `section_one`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `section_three_element`
--
ALTER TABLE `section_three_element`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `section_two`
--
ALTER TABLE `section_two`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `service_category`
--
ALTER TABLE `service_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `brand_image`
--
ALTER TABLE `brand_image`
  ADD CONSTRAINT `FK_9EC4CD483DA5256D` FOREIGN KEY (`image_id`) REFERENCES `image` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_9EC4CD4844F5D008` FOREIGN KEY (`brand_id`) REFERENCES `brand` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `category_image`
--
ALTER TABLE `category_image`
  ADD CONSTRAINT `FK_2D0E4B1612469DE2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_2D0E4B163DA5256D` FOREIGN KEY (`image_id`) REFERENCES `image` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `company_information`
--
ALTER TABLE `company_information`
  ADD CONSTRAINT `FK_30A8A01BF98F144A` FOREIGN KEY (`logo_id`) REFERENCES `image` (`id`);

--
-- Contraintes pour la table `faq`
--
ALTER TABLE `faq`
  ADD CONSTRAINT `FK_E8FF75CC59027487` FOREIGN KEY (`theme_id`) REFERENCES `faq_theme` (`id`);

--
-- Contraintes pour la table `home`
--
ALTER TABLE `home`
  ADD CONSTRAINT `FK_71D60CD0B1D23C35` FOREIGN KEY (`section_one_id`) REFERENCES `section_one` (`id`),
  ADD CONSTRAINT `FK_71D60CD0DA8EDBFA` FOREIGN KEY (`section_two_id`) REFERENCES `section_two` (`id`);

--
-- Contraintes pour la table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `FK_C53D045F28CDC89C` FOREIGN KEY (`home_id`) REFERENCES `home` (`id`);

--
-- Contraintes pour la table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `FK_D34A04AD44F5D008` FOREIGN KEY (`brand_id`) REFERENCES `brand` (`id`);

--
-- Contraintes pour la table `product_category`
--
ALTER TABLE `product_category`
  ADD CONSTRAINT `FK_CDFC735612469DE2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_CDFC73564584665A` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `product_image`
--
ALTER TABLE `product_image`
  ADD CONSTRAINT `FK_64617F033DA5256D` FOREIGN KEY (`image_id`) REFERENCES `image` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_64617F034584665A` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `product_search`
--
ALTER TABLE `product_search`
  ADD CONSTRAINT `FK_D68C9A0312469DE2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `FK_D68C9A0344F5D008` FOREIGN KEY (`brand_id`) REFERENCES `brand` (`id`);

--
-- Contraintes pour la table `section_four_element`
--
ALTER TABLE `section_four_element`
  ADD CONSTRAINT `FK_2125350928CDC89C` FOREIGN KEY (`home_id`) REFERENCES `home` (`id`),
  ADD CONSTRAINT `FK_212535093DA5256D` FOREIGN KEY (`image_id`) REFERENCES `image` (`id`);

--
-- Contraintes pour la table `section_three_element`
--
ALTER TABLE `section_three_element`
  ADD CONSTRAINT `FK_E424D5C328CDC89C` FOREIGN KEY (`home_id`) REFERENCES `home` (`id`);

--
-- Contraintes pour la table `service`
--
ALTER TABLE `service`
  ADD CONSTRAINT `FK_E19D9AD212469DE2` FOREIGN KEY (`category_id`) REFERENCES `service_category` (`id`),
  ADD CONSTRAINT `FK_E19D9AD23DA5256D` FOREIGN KEY (`image_id`) REFERENCES `image` (`id`);

--
-- Contraintes pour la table `service_category`
--
ALTER TABLE `service_category`
  ADD CONSTRAINT `FK_FF3A42FC3DA5256D` FOREIGN KEY (`image_id`) REFERENCES `image` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
