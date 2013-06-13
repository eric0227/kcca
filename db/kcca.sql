-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2013 at 01:05 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kcca`
--

-- --------------------------------------------------------

--
-- Table structure for table `xe_action_forward`
--

CREATE TABLE IF NOT EXISTS `xe_action_forward` (
  `act` varchar(80) NOT NULL,
  `module` varchar(60) NOT NULL,
  `type` varchar(15) NOT NULL,
  UNIQUE KEY `idx_foward` (`act`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `xe_action_forward`
--

INSERT INTO `xe_action_forward` (`act`, `module`, `type`) VALUES
('trackback', 'trackback', 'controller'),
('rss', 'rss', 'view'),
('atom', 'rss', 'view'),
('IS', 'integration_search', 'view');

-- --------------------------------------------------------

--
-- Table structure for table `xe_addons`
--

CREATE TABLE IF NOT EXISTS `xe_addons` (
  `addon` varchar(250) NOT NULL,
  `is_used` char(1) NOT NULL DEFAULT 'Y',
  `is_used_m` char(1) NOT NULL DEFAULT 'N',
  `is_fixed` char(1) NOT NULL DEFAULT 'N',
  `extra_vars` text,
  `regdate` varchar(14) DEFAULT NULL,
  PRIMARY KEY (`addon`),
  KEY `idx_regdate` (`regdate`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `xe_addons_site`
--

CREATE TABLE IF NOT EXISTS `xe_addons_site` (
  `site_srl` bigint(11) NOT NULL DEFAULT '0',
  `addon` varchar(250) NOT NULL,
  `is_used` char(1) NOT NULL DEFAULT 'Y',
  `is_used_m` char(1) NOT NULL DEFAULT 'N',
  `extra_vars` text,
  `regdate` varchar(14) DEFAULT NULL,
  UNIQUE KEY `unique_addon_site` (`site_srl`,`addon`),
  KEY `idx_regdate` (`regdate`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `xe_addons_site`
--

INSERT INTO `xe_addons_site` (`site_srl`, `addon`, `is_used`, `is_used_m`, `extra_vars`, `regdate`) VALUES
(0, 'autolink', 'Y', 'N', NULL, '20130612043945'),
(0, 'blogapi', 'N', 'N', NULL, '20130612043945'),
(0, 'counter', 'Y', 'N', NULL, '20130612043945'),
(0, 'member_communication', 'Y', 'N', NULL, '20130612043945'),
(0, 'member_extra_info', 'Y', 'N', NULL, '20130612043945'),
(0, 'mobile', 'Y', 'N', NULL, '20130612043945'),
(0, 'resize_image', 'Y', 'N', NULL, '20130612043945'),
(0, 'openid_delegation_id', 'N', 'N', NULL, '20130612043945'),
(0, 'point_level_icon', 'N', 'N', NULL, '20130612043945'),
(0, 'adminlogging', 'N', 'N', NULL, '20130612052133'),
(0, 'captcha', 'N', 'N', NULL, '20130612052133');

-- --------------------------------------------------------

--
-- Table structure for table `xe_admin_favorite`
--

CREATE TABLE IF NOT EXISTS `xe_admin_favorite` (
  `admin_favorite_srl` bigint(11) NOT NULL,
  `site_srl` bigint(11) DEFAULT '0',
  `module` varchar(80) DEFAULT NULL,
  `type` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`admin_favorite_srl`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `xe_admin_favorite`
--

INSERT INTO `xe_admin_favorite` (`admin_favorite_srl`, `site_srl`, `module`, `type`) VALUES
(129, 0, 'board', 'module');

-- --------------------------------------------------------

--
-- Table structure for table `xe_admin_log`
--

CREATE TABLE IF NOT EXISTS `xe_admin_log` (
  `ipaddress` varchar(100) NOT NULL,
  `regdate` varchar(14) DEFAULT NULL,
  `site_srl` bigint(11) DEFAULT '0',
  `module` varchar(100) DEFAULT NULL,
  `act` varchar(100) DEFAULT NULL,
  `request_vars` text,
  KEY `idx_admin_ip` (`ipaddress`),
  KEY `idx_admin_date` (`regdate`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `xe_ai_installed_packages`
--

CREATE TABLE IF NOT EXISTS `xe_ai_installed_packages` (
  `package_srl` bigint(11) NOT NULL DEFAULT '0',
  `version` varchar(255) DEFAULT NULL,
  `current_version` varchar(255) DEFAULT NULL,
  `need_update` char(1) DEFAULT 'N',
  KEY `idx_package_srl` (`package_srl`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `xe_ai_installed_packages`
--

INSERT INTO `xe_ai_installed_packages` (`package_srl`, `version`, `current_version`, `need_update`) VALUES
(18910976, '0.1', '0.1', 'N'),
(18324213, '1.3.0', '1.3.0', 'N'),
(18324167, '1.7.1.1', '1.7.1.1', 'N'),
(18745485, '2.0', '2.0', 'N'),
(18325662, '1.7.3.4', '1.7.3.4', 'N'),
(18378362, '0.2', '1.0', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `xe_ai_remote_categories`
--

CREATE TABLE IF NOT EXISTS `xe_ai_remote_categories` (
  `category_srl` bigint(11) NOT NULL DEFAULT '0',
  `parent_srl` bigint(11) NOT NULL DEFAULT '0',
  `title` varchar(250) NOT NULL,
  `list_order` bigint(11) NOT NULL,
  PRIMARY KEY (`category_srl`),
  KEY `idx_parent_srl` (`parent_srl`),
  KEY `idx_list_order` (`list_order`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `xe_ai_remote_categories`
--

INSERT INTO `xe_ai_remote_categories` (`category_srl`, `parent_srl`, `title`, `list_order`) VALUES
(18322952, 18322919, '위젯 스타일', 10),
(18322950, 18322919, '위젯 스킨', 9),
(18322943, 18322919, '모듈 스킨', 8),
(18322919, 0, '스킨', 7),
(18631347, 18322917, '단락에디터컴포넌트', 6),
(18322929, 18322917, '에디터컴포넌트', 5),
(18322927, 18322917, '위젯', 4),
(18322925, 18322917, '애드온', 3),
(18322923, 18322917, '모듈', 2),
(18322907, 18322917, 'XE core', 1),
(18322917, 0, '프로그램', 0),
(18322954, 18322919, '레이아웃 스킨', 11),
(18904838, 18322919, '에디터 스타일', 12),
(18994170, 18322919, '모듈 모바일 스킨', 13),
(18994172, 18322919, '레이아웃 모바일 스킨', 14);

-- --------------------------------------------------------

--
-- Table structure for table `xe_autoinstall_packages`
--

CREATE TABLE IF NOT EXISTS `xe_autoinstall_packages` (
  `package_srl` bigint(11) NOT NULL DEFAULT '0',
  `category_srl` bigint(11) DEFAULT '0',
  `path` varchar(250) NOT NULL,
  `have_instance` char(1) NOT NULL DEFAULT 'N',
  `updatedate` varchar(14) DEFAULT NULL,
  `latest_item_srl` bigint(11) NOT NULL DEFAULT '0',
  `version` varchar(255) DEFAULT NULL,
  UNIQUE KEY `unique_path` (`path`),
  KEY `idx_package_srl` (`package_srl`),
  KEY `idx_category_srl` (`category_srl`),
  KEY `idx_regdate` (`updatedate`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `xe_autoinstall_packages`
--

INSERT INTO `xe_autoinstall_packages` (`package_srl`, `category_srl`, `path`, `have_instance`, `updatedate`, `latest_item_srl`, `version`) VALUES
(20659112, 18322943, './modules/communication/skins/sketchbook5_communication', 'N', '20130528221654', 21988019, '0.4.0'),
(20659111, 18322943, './modules/member/skins/sketchbook5_member', 'N', '20120616231007', 20888145, '0.3.1'),
(20661144, 18322943, './modules/board/skins/xe_v3_media', 'N', '20120409070628', 20678772, '0.3'),
(19804189, 18322925, './addons/elkha_www', 'N', '20120418151943', 20702493, '0.11'),
(20644220, 18322925, './addons/prohibit_monologue', 'N', '20120324230413', 20644221, '0.1'),
(20636478, 18322925, './addons/message_alarm', 'N', '20120503162234', 20786282, '1.0.1.0'),
(20493834, 18322950, './widgets/content/skins/updatenews', 'N', '20130110114441', 21134264, '1.8'),
(20472943, 18322954, './layouts/xe_solid_enterprise_LeCiel_v1', 'N', '20120311161700', 20613484, '1.7'),
(20612563, 18322927, './widgets/contentsmedia', 'N', '20120416162600', 20696865, '0.7'),
(20522820, 18322950, './widgets/bible_read/skins/KnDol', 'N', '20120305220517', 20590447, '1.1.0'),
(20393822, 18322923, './modules/newposts', 'N', '20130522115746', 21964984, '2.0.2'),
(20579823, 18322954, './layouts/SilverCloud', 'N', '20120302064028', 20579824, '1.0'),
(20564368, 18322925, './addons/sejin7940_align', 'N', '20120226093706', 20564370, '1.0'),
(20556056, 18322925, './addons/fileuploadcount', 'N', '20120223162504', 20556057, '0.1'),
(20557173, 18322950, './widgets/content/skins/xe2011_contributor_present', 'N', '20120223215840', 20557174, '0.1'),
(20520233, 18322952, './widgetstyles/sketchbook5_wincomi', 'N', '20120407012348', 20673939, '3.0'),
(20547035, 18322925, './addons/exif', 'N', '20121205233659', 21378417, '0.9.2.2'),
(19594435, 18994170, './modules/board/m.skins/m.sketchbook5', 'N', '20110522184336', 19631809, '1.1.1'),
(19594292, 18994172, './m.layouts/m.sketchbook5', 'N', '20110522184326', 19631785, '1.1.1'),
(20533990, 18322923, './modules/sitemanagement', 'N', '20120907213136', 21142943, '0.3'),
(20155119, 18322943, './modules/member/skins/XET_member_skin', 'N', '20111023153211', 20155128, '1.0'),
(20155171, 18322943, './modules/communication/skins/XET_communication_skin', 'N', '20111023160927', 20155172, '1.0'),
(20526823, 18322925, './addons/me2plugin_for_14', 'N', '20120215064626', 20526828, '1.0'),
(20525058, 18322925, './addons/popup_menu_like_1_4', 'N', '20120214191332', 20525309, '1.0'),
(20520855, 18322925, './addons/color_message', 'N', '20130128114214', 20520858, '1.1'),
(20519604, 18322943, './modules/member/skins/simple_for_14', 'N', '20120916214715', 21193099, '0.2'),
(20514706, 18322943, './modules/board/skins/simple_board', 'N', '20120211154659', 20514707, '1.0'),
(20495669, 18322943, './modules/member/skins/simple', 'N', '20120209152645', 20507441, '0.1'),
(18459111, 18322925, './addons/addthis', 'N', '20091126093530', 18459913, '0.1'),
(18539546, 18322925, './addons/addvote', 'N', '20121011211213', 21244042, '1.0'),
(18777712, 18322925, './addons/add_document', 'N', '20100324174900', 18794485, '0.1.1'),
(18511514, 18322925, './addons/adult_keyword', 'N', '20101031134814', 19230613, '0.2'),
(18681809, 18322925, './addons/age_restrictions', 'N', '20100209131418', 18687595, '1.0'),
(19524772, 18322925, './addons/alliancexe_grab_comment', 'N', '20110228173428', 19586763, '0.3'),
(19145884, 18322925, './addons/fsfsdas_alway_stalker', 'N', '20100925162057', 19151432, '0.2.6'),
(19503269, 18322925, './addons/analysis', 'N', '20110211171537', 19527972, '0.1.2'),
(19600206, 18322925, './addons/autowww', 'N', '20110307191012', 19604227, '1.0'),
(18828577, 18322925, './addons/auto_image', 'N', '20110415123856', 19693613, '0.5.6'),
(19274574, 18322925, './addons/a_soo_wikidoc_pointfixer', 'N', '20101120113341', 19274579, '1'),
(18388093, 18322925, './addons/bekmeProhibite', 'N', '20091110235612', 18388181, '1.0'),
(20453531, 18322925, './addons/bodyfade', 'N', '20121211210432', 21389237, '0.2.2'),
(19701036, 18322925, './addons/changealt', 'N', '20111117165624', 20235640, '0.2.1'),
(18342939, 18322925, './addons/comment_new', 'N', '20100203214541', 18670429, '1.1.1'),
(19069946, 18322925, './addons/cookie-free_domains', 'N', '20100812223711', 19070012, '1.0'),
(19555887, 18322925, './addons/css3pie', 'N', '20120611234028', 20878725, '1.3.3.0'),
(18779239, 18322925, './addons/daumview_vote', 'N', '20100517233744', 18895117, '0.5.4'),
(18369597, 18322925, './addons/DisableDrag', 'N', '20101030204649', 19229654, '0.3'),
(19049200, 18322925, './addons/domain_check', 'N', '20130106125653', 19050476, '0.2'),
(18334990, 18322925, './addons/entry', 'N', '20100204134554', 18672887, '1.1'),
(19527443, 18322925, './addons/event_board', 'N', '20110211145423', 19527447, '0.1'),
(18882151, 18322925, './addons/facebook_social', 'N', '20100510210513', 18882152, '0.1'),
(20306808, 18322925, './addons/fontface', 'N', '20120127195418', 20466944, '1.0.1'),
(19859881, 18322925, './addons/googleplus', 'N', '20110711124219', 19863282, '0.1'),
(19875631, 18322925, './addons/gosite', 'N', '20110715181401', 19875632, '0.1'),
(18326352, 18322925, './addons/guest_name', 'N', '20100712213736', 19010744, '1.1.2'),
(18677338, 18322925, './addons/hello_member', 'N', '20120421125458', 20710083, '1.0.0.0'),
(18326011, 18322925, './addons/hidden_module', 'N', '20090928203917', 18337264, '0.3'),
(18956315, 18322925, './addons/member_icon_print', 'N', '20100625181956', 18968140, '0.3'),
(19079420, 18322925, './addons/ie6nomore', 'N', '20101014170336', 19202588, '0.6'),
(20238470, 18322925, './addons/jq_lightbox', 'N', '20111214100251', 20328459, '0.3.2'),
(18608457, 18322925, './addons/keywordstatistics', 'N', '20100113192919', 18611543, '0.1'),
(18324226, 18322925, './addons/keyword_link', 'N', '20090924182516', 18325653, '0.1'),
(20455886, 18322925, './addons/lightboxplus', 'N', '20120125120911', 20455984, '0.4.0'),
(19315168, 18322925, './addons/mcguard', 'N', '20110228193020', 19587205, '0.3.5'),
(20191860, 18322925, './addons/me2plugin', 'N', '20111103135846', 20191861, '1.0'),
(18853350, 18322925, './addons/member_join_captcha', 'N', '20100424002415', 18855317, '0.1.4'),
(18324227, 18322925, './addons/member_join_extend', 'N', '20090924182447', 18325647, '0.1'),
(18639439, 18322925, './addons/member_layer_config', 'N', '20100124232451', 18640723, '1.1'),
(18410868, 18322925, './addons/member_pointsend', 'N', '20121001190012', 21223507, '0.2.1'),
(18982191, 18322925, './addons/meta_add', 'N', '20110616121218', 19814958, '0.2.2'),
(19906026, 18322925, './addons/mypeople', 'N', '20110728175431', 19906139, '0.0.1'),
(18664319, 18322925, './addons/P3P', 'N', '20100203104503', 18668421, '1.0'),
(18509825, 18322925, './addons/phonenumber_validator', 'N', '20111214095040', 20328235, '0.5.5'),
(18334980, 18322925, './addons/piclens', 'N', '20110414163617', 19692049, '1.2'),
(18324228, 18322925, './addons/planet_bookmark', 'N', '20120810213538', 21017018, '0.1.1'),
(18324233, 18322925, './addons/planet_todo', 'N', '20120810213314', 21016986, '0.1.1'),
(20261882, 18322925, './addons/point_level_color', 'N', '20120127194947', 20466920, '0.9.1'),
(18334979, 18322925, './addons/popup', 'N', '20090928201206', 18335423, '0.1'),
(18640943, 18322925, './addons/pop_up', 'N', '20100126153653', 18646355, '0.0.4'),
(19555797, 18322925, './addons/prettyphoto', 'N', '20121114022245', 21336236, '1.1.3.0'),
(19519186, 18322925, './addons/qrcode', 'N', '20110211175231', 19528193, '0.2'),
(18324241, 18322925, './addons/referer', 'N', '20090924182129', 18325632, '0.1'),
(18990133, 18322925, './addons/referercheck', 'N', '20100712125049', 19009627, '2.0'),
(19187623, 18322925, './addons/refhide', 'N', '20101007194240', 19191147, '0.1.1'),
(18326351, 18322925, './addons/remove_id_search', 'N', '20090924233155', 18326429, '1.0'),
(19960240, 18322925, './addons/sejin7940_readed_count', 'N', '20110822205122', 19960243, '1.6'),
(19923002, 18322925, './addons/sejin7940_write_limit', 'N', '20110805003910', 19923064, '1.5'),
(19306395, 18322925, './addons/shortcut', 'N', '20101204130837', 19306492, '0.9.9.2'),
(18325951, 18322925, './addons/sms_alert', 'N', '20090924233028', 18326173, '1.0'),
(19513447, 18322925, './addons/sns_linker_lite', 'N', '20120619013459', 20892001, '1.0.11'),
(19518196, 18322925, './addons/socialxe_helper', 'N', '20111223170136', 20361435, '1.0.6'),
(19550402, 18322925, './addons/socialxe_mid_forwarder', 'N', '20111223170235', 20361446, '1.0.3'),
(18982195, 18322925, './addons/soo_add_content', 'N', '20100808155249', 19062483, '0.2.3'),
(18982196, 18322925, './addons/soo_autolang', 'N', '20110412000841', 19687115, '1.0.3'),
(19336589, 18322925, './addons/soo_block_UA', 'N', '20101216233933', 19336590, '0.1'),
(19458868, 18322925, './addons/soo_feed_delay', 'N', '20110110021418', 19458869, '0.1'),
(18648969, 18322925, './addons/soo_for_muzik_player', 'N', '20110412001058', 19687129, '0.3.1'),
(19862381, 18322925, './addons/soo_googleplus', 'N', '20110722231050', 19890691, '0.2.1'),
(19433415, 18322925, './addons/soo_jquery_unload', 'N', '20120123203720', 20452416, '2012.1.23'),
(18682481, 18322925, './addons/soo_js_exif', 'N', '20100427005843', 18859459, '0.3.4'),
(18982205, 18322925, './addons/soo_login_defencer', 'N', '20111221014739', 20352388, '2011.12.21'),
(18990588, 18322925, './addons/soo_mcrblog_link', 'N', '20130507220351', 21924371, '1.2.14'),
(19293487, 18322925, './addons/soo_mobile_top', 'N', '20120619014349', 20892008, '3'),
(18982221, 18322925, './addons/soo_parking', 'N', '20111226104345', 20367602, '0.2.2'),
(19549401, 18322925, './addons/source_marking', 'N', '20110217181624', 19549402, '0.3'),
(18325813, 18322925, './addons/tag_relation', 'N', '20130521175759', 20963930, '1.4'),
(19555926, 18322925, './addons/tag_relation/skins/default', 'N', '20111202090056', 19915132, '0.9.5'),
(18324247, 18322925, './addons/tccommentnotify', 'N', '20091013151355', 18365845, '1.0'),
(19081914, 18322925, './addons/tweet_button', 'N', '20100820160233', 19083524, '0.1'),
(19555878, 18322925, './addons/webfont', 'N', '20121205232629', 21378394, '1.1.3.1'),
(19202629, 18322925, './addons/webfontface', 'N', '20101015104648', 19203708, '0.1'),
(19583417, 18322925, './addons/wiki-link', 'N', '20110305203127', 19600787, '0.2'),
(18324248, 18322925, './addons/wiki_link', 'N', '20130326101309', 21813902, '1.7.0'),
(18326353, 18322925, './addons/write_limit', 'N', '20100123153249', 18637861, '1.2.1'),
(18649613, 18322954, './layouts/2010_jowrney', 'N', '20100807052804', 19060126, '0.2.0'),
(18347510, 18322954, './layouts/aginet_official_v2', 'N', '20091229202827', 18575161, '2.0.7'),
(18818977, 18322954, './layouts/blackcity', 'N', '20100411102810', 18832088, '1.0'),
(18716138, 18322954, './layouts/bom', 'N', '20100223171237', 18722236, '0.1'),
(18348374, 18322954, './layouts/box_main', 'N', '20091005094843', 18348700, '0.1'),
(18324292, 18322954, './layouts/cafeXE', 'N', '20130322112825', 21802168, '1.7.0'),
(19570840, 18322954, './layouts/CN_No3', 'N', '20110227092652', 19582438, '1.0.4'),
(19707750, 18322954, './layouts/CN_No4', 'N', '20110422183753', 19708324, '1.1'),
(19816429, 18322954, './layouts/CN_No5', 'N', '20110617155919', 19816430, '1.0'),
(19767397, 18322954, './layouts/columnist', 'N', '20111128152347', 20270404, '1.5.1'),
(19529399, 18322954, './layouts/crom_iXE', 'N', '20110305163325', 19600243, '1.0.3'),
(18748689, 18322954, './layouts/daerew_v4_layout', 'N', '20100604010750', 18926143, '1.2'),
(19320728, 18322954, './layouts/darkdream', 'N', '20101210162608', 19320733, '1.0'),
(19322818, 18322954, './layouts/darkgrid', 'N', '20101211075457', 19322819, '1.0'),
(18855088, 18322954, './layouts/elkha_dr4', 'N', '20110420165044', 19703575, '1.0.2'),
(18606308, 18322954, './layouts/elkha_fge', 'N', '20100130045549', 18657582, '1.2'),
(18642464, 18322954, './layouts/elkha_graystyle', 'N', '20110429124924', 19722768, '2.0.1'),
(18766685, 18322954, './layouts/elkha_graystyle2_lite', 'N', '20100417182946', 18844159, '1.0.3'),
(19700913, 18322954, './layouts/elkha_monochrome', 'N', '20110609013935', 19803893, '0.12'),
(19031365, 18322954, './layouts/elkha_neutral', 'N', '20120414130950', 20692034, '0.5'),
(19684891, 18322954, './layouts/elkha_pieces', 'N', '20110416050156', 19695208, '0.11'),
(18612951, 18322954, './layouts/elkha_simple', 'N', '20100122092019', 18633735, '1.1'),
(18606314, 18322954, './layouts/elkha_sky', 'N', '20110621183318', 19822870, '1.4.5'),
(18650492, 18322954, './layouts/elkha_sky2', 'N', '20100430013436', 18865308, '1.4.5'),
(20074878, 18322954, './layouts/elkha_tskorea', 'N', '20111029090759', 20174626, '0.11'),
(19034752, 18322954, './layouts/elkha_x610', 'N', '20100814050120', 19072093, '0.1'),
(19234197, 18322954, './layouts/eond_mynote', 'N', '20130222131306', 21723208, '1.4.4'),
(19534736, 18322954, './layouts/Forhanbi_11_A', 'N', '20110213234429', 19534739, '0.0.1'),
(19604579, 18322954, './layouts/Forhanbi_11_B', 'N', '20110308013036', 19604824, '0.0.2'),
(19660245, 18322954, './layouts/Forhanbi_11_C', 'N', '20110331180641', 19660407, '0.0.1'),
(19480929, 18322954, './layouts/forhanbi_official_v3', 'N', '20110121181100', 19480930, '0.0.2'),
(19073125, 18322954, './layouts/fsfsdas_neutral', 'N', '20130118205437', 19848942, '0.4.4'),
(19510234, 18322954, './layouts/gallery_layout', 'N', '20110213124317', 19532739, '0.2'),
(19302110, 18322954, './layouts/gardenoforchids', 'N', '20101202112946', 19302111, '1.0'),
(18414428, 18322954, './layouts/Gom-e.net_Hankooktown2_Layout', 'N', '20091119162156', 18445386, '1.0.7'),
(18447927, 18322954, './layouts/Gom2netLayoutEngland', 'N', '20091123135528', 18454140, '1.0.1'),
(19226818, 18322954, './layouts/gom2net_2nd_layout', 'N', '20101119233131', 19273763, '2.0.6'),
(19974913, 18322954, './layouts/Dynamic', 'N', '20120116113545', 20429124, '3.0'),
(19283251, 18322954, './layouts/gom2net_3rd_layout', 'N', '20101123212632', 19283257, '3.0.1'),
(19202617, 18322954, './layouts/gom2net_layout', 'N', '20101015155351', 19204527, '1.0.2'),
(18326553, 18322954, './layouts/habile_layout', 'N', '20090926115039', 18330571, '1.3'),
(19509849, 18322954, './layouts/hankooktown', 'N', '20110204215800', 19509864, '1.0'),
(18409541, 18322954, './layouts/hankooktown2', 'N', '20110206154224', 19512809, '1.2.2'),
(20259612, 18322954, './layouts/HappyTravel_v1', 'N', '20111125202409', 20261781, '1.0'),
(18703356, 18322954, './layouts/how', 'N', '20100715203511', 18707091, '0.1'),
(18324297, 18322954, './layouts/ideation', 'N', '20090924162900', 18325198, '0.1'),
(19456969, 18322954, './layouts/impress-06', 'N', '20110113124022', 19464583, '1.0.1'),
(18706109, 18322954, './layouts/jimseung_biz', 'N', '20100219001656', 18711864, '0.1'),
(18703085, 18322954, './layouts/jimseung_nate', 'N', '20100217004943', 18705555, '1.0'),
(18706113, 18322954, './layouts/jimseung_simplesub', 'N', '20100218090501', 18709461, '1'),
(19219093, 18322954, './layouts/kia', 'N', '20101024111700', 19219094, '0.1'),
(18631838, 18322954, './layouts/kindguyLayout(201001_Kindguy4_2_xe1.3.1.2)', 'N', '20100122111002', 18634163, '201001'),
(18512505, 18322954, './layouts/kindguyLayout(BlueN_200912_1)', 'N', '20091130174913', 18516495, '200912'),
(18512506, 18322954, './layouts/kindguyLayout(BlueN_200912_2)', 'N', '20091130175242', 18516511, '200912'),
(19201015, 18322954, './layouts/kinesis_cs01f', 'N', '20101013184422', 19201021, '1.0.1'),
(19280154, 18322954, './layouts/kinesis_pl001f', 'N', '20101122225718', 19280155, '1.0'),
(18968288, 18322954, './layouts/kinesis_sitelist', 'N', '20101222214235', 19348039, '0.1.1'),
(18705013, 18322954, './layouts/layoutSkin(kindguy5.2_xe1.4.0.5)', 'N', '20100218000634', 18708767, '201002'),
(18959079, 18322954, './layouts/layoutskin_wave_blue', 'N', '20121207190721', 21382225, '1.1.0'),
(20330088, 18322954, './layouts/layoutwotc_portal', 'N', '20120414071006', 20691619, '1.0.2'),
(19749792, 18322954, './layouts/layoutwotc_text', 'N', '20120414064610', 20691594, '1.0.6'),
(19513978, 18322954, './layouts/layout_photoGalleryA_Free', 'N', '20110207165926', 19514630, '1.0'),
(19623904, 18322954, './layouts/layout_photoGalleyA_sub', 'N', '20110316133848', 19623910, '1.0'),
(18900548, 18322954, './layouts/layout_skin(kindguy1.0_type1_xe1.4.1.1)', 'N', '20100520105243', 18901309, '201005'),
(18900551, 18322954, './layouts/layout_skin(kindguy1.1_type2_xe1.4.1.1)', 'N', '20100520105637', 18901322, '201005'),
(18975451, 18322954, './layouts/layout_skin(kindguy5.0_type2_xe1.4.1.1)', 'N', '20100630190815', 18981166, '201006'),
(18975452, 18322954, './layouts/layout_skin(kindguy5.1_type2_xe1.4.1.1)', 'N', '20100630191031', 18981176, '201006'),
(19360170, 18322954, './layouts/layout_skin(xenara_v1.0_type1_xe1.4.4.1)', 'N', '20101229101300', 19360187, '201010'),
(19360171, 18322954, './layouts/layout_skin(xenara_v1.1_type3_xe1.4.4.1)', 'N', '20101229101639', 19360205, '201010'),
(18929288, 18322954, './layouts/mcube', 'N', '20100621134935', 18957849, '0.2'),
(18735942, 18322954, './layouts/mediaOn', 'N', '20100313182759', 18746917, '1.0'),
(18327419, 18322954, './layouts/mh_simple', 'N', '20100114004004', 18327611, '1.1'),
(20079057, 18322954, './layouts/minipaper_style', 'N', '20120320154525', 20634505, '1.5'),
(20247163, 18322954, './layouts/misol_nonzero', 'N', '20111122231227', 20253559, '1.0.2'),
(19116278, 18322954, './layouts/modern_line', 'N', '20100920164153', 19135412, '1.0'),
(19090619, 18322954, './layouts/nabul2_milate_8T', 'N', '20100828202018', 19092504, '2.0'),
(19232784, 18322954, './layouts/nabul2_Wishful', 'N', '20101101185539', 19232785, '1.0'),
(18381054, 18322954, './layouts/naver_photo_style', 'N', '20091111201725', 18429470, '1.2.1'),
(19534687, 18322954, './layouts/NetCabin_BnW', 'N', '20110306070716', 19601701, '0.3.0.1'),
(19534682, 18322954, './layouts/NetCabin_FS', 'N', '20110215001022', 19534688, '0.1'),
(19655120, 18322954, './layouts/NetCabin_X3', 'N', '20120117042039', 20430977, '0.2.2'),
(18712555, 18322954, './layouts/nom', 'N', '20100219110013', 18712759, '0.1'),
(18606318, 18322954, './layouts/paper_layer', 'N', '20100113223628', 18611976, '1.0'),
(19097462, 18322954, './layouts/pb', 'N', '20100911195150', 19125110, '1.2'),
(19711536, 18322954, './layouts/people blue', 'N', '20110511175210', 19744693, '0.5'),
(19532317, 18322954, './layouts/portal_layout', 'N', '20110213181746', 19533824, '0.3'),
(19624858, 18322954, './layouts/Quad', 'N', '20110318180513', 19630832, '1.0.3'),
(19133654, 18322954, './layouts/Rebirth_A', 'N', '20101027130346', 19224091, '1.1.2'),
(18832037, 18322954, './layouts/rom', 'N', '20100413223446', 18837238, '0.1'),
(19135133, 18322954, './layouts/seven', 'N', '20110819154354', 19955250, '1.2'),
(18663182, 18322954, './layouts/shx_chameleon', 'N', '20100203113955', 18668568, '0.1.1'),
(19630138, 18322954, './layouts/SimpleDropDown', 'N', '20111208191155', 20310150, '2.0.0'),
(19555890, 18322954, './layouts/sketchbook5', 'N', '20121114015816', 21336191, '1.6.3.6'),
(19712183, 18322954, './layouts/smart', 'N', '20120624070115', 20902184, '0.9.9'),
(20048768, 18322954, './layouts/store_style', 'N', '20110928145850', 20048864, '1.2'),
(20072467, 18322954, './layouts/store_style2', 'N', '20111005133919', 20072471, '2.0'),
(20176065, 18322954, './layouts/store_style25', 'N', '20120425164500', 20176066, '2.5'),
(20401336, 18322954, './layouts/style_a_lite', 'N', '20130525023155', 21975013, '1.8.3'),
(18877427, 18322954, './layouts/Treasurej_Craftwork', 'N', '20100723142529', 19032188, '1.0.1'),
(19032971, 18322954, './layouts/Treasurej_Craftwork_C', 'N', '20100727025511', 19038047, '1.0.1'),
(18327743, 18322954, './layouts/Treasurej_Heart_Note', 'N', '20101216111704', 19334770, '1.6'),
(18866481, 18322954, './layouts/Treasurej_Lifestyle', 'N', '20130524005355', 21971882, '1.1'),
(19099015, 18322954, './layouts/ure', 'N', '20100829183022', 19099016, '0.1'),
(18716480, 18322954, './layouts/voo', 'N', '20100223171348', 18722243, '0.1'),
(20458826, 18322954, './layouts/we_home', 'N', '20130110114356', 20980624, '1.8'),
(18572882, 18322954, './layouts/xdom_v2', 'N', '20110303160630', 19595474, '2.5.2.4'),
(19231932, 18322954, './layouts/Xe-Art-Free', 'N', '20101102113616', 19234418, '1.01'),
(19138636, 18322954, './layouts/xenoriter_simple', 'N', '20100918212018', 19138637, '1.0'),
(18917848, 18322954, './layouts/xeVector', 'N', '20100531133028', 18918526, '0.2'),
(18732084, 18322954, './layouts/XEWORKS_Simple_Animated', 'N', '20100302103504', 18738260, '0.1'),
(18378357, 18322954, './layouts/xe_cafe', 'N', '20130322113943', 21803889, '1.7.0'),
(20276726, 18322954, './layouts/xe_cafe_hub', 'N', '20130322110725', 21803871, '1.7.0'),
(20168220, 18322954, './layouts/xe_cafe_site', 'N', '20130322112227', 21803913, '1.7.0'),
(18324299, 18322954, './layouts/xe_official_v2', 'N', '20120103120137', 20391868, '1.0'),
(19178969, 18322954, './layouts/xe_official_v2_TmaKing', 'N', '20101005105642', 19186638, '0.1.1'),
(18595504, 18322954, './layouts/xe_official_v2_xgenesis', 'N', '20100120143255', 18596408, '0.1.1'),
(19475748, 18322954, './layouts/xe_official_v3', 'N', '20110119143334', 19475749, '0.0.2'),
(19515672, 18322954, './layouts/xe_sunooBCLg', 'N', '20110208045309', 19515673, '1.0'),
(18357476, 18322954, './layouts/xe_sunooRCv1.0', 'N', '20091223000237', 18559964, '1.0'),
(18362403, 18322954, './layouts/xe_sunooDMv4.0', 'N', '20091222234212', 18559886, '4.0'),
(18722759, 18322954, './layouts/xe_sunooNSL', 'N', '20100225185442', 18729272, '1.0'),
(18790924, 18322954, './layouts/xe_sunooWAL', 'N', '20100323164118', 18791873, '1.0'),
(19462173, 18322954, './layouts/xe_sunooNSLg', 'N', '20110111235337', 19462174, '1.0'),
(19491937, 18322954, './layouts/xe_sunooTALg', 'N', '20110126030859', 19491938, '1.0'),
(19462195, 18322954, './layouts/xe_sunooWALg', 'N', '20110111235350', 19462196, '1.0'),
(18637860, 18322954, './layouts/xgenesis_official', 'N', '20110208170613', 19516685, '0.2.2'),
(19060827, 18322954, './layouts/xom', 'N', '20100808125945', 19062262, '0.1'),
(18607483, 18322954, './layouts/zirho_layout', 'N', '20100126102258', 18645390, '0.0.3'),
(19051939, 18322954, './layouts/zom', 'N', '20100803113432', 19051969, '0.1'),
(18325790, 18322923, './modules/ad', 'N', '20110509192130', 19741760, '0.5.2'),
(19524575, 18322923, './modules/alliance', 'N', '20110327161745', 19652232, '1.2.2'),
(19524576, 18322923, './modules/alliancehub', 'N', '20110216124813', 19542992, '1.0.1'),
(19497436, 18322923, './modules/analysis', 'N', '20110211172954', 19528063, '0.1.2'),
(19130198, 18322923, './modules/analytics', 'N', '20110316173805', 19624674, '0.2.2'),
(19323693, 18322923, './modules/antiaccess', 'N', '20111031212358', 20181898, '1.0.3.1'),
(19519182, 18322923, './modules/aroundmap', 'N', '20110209181422', 19519377, '0.1'),
(18325892, 18322923, './modules/attendance', 'N', '20120509064116', 20796741, '1.6.4'),
(20236415, 18322943, './modules/attendance/skins/sr_at_skin', 'N', '20111117231312', 20236418, '0.1'),
(19522899, 18322923, './modules/bannermgm', 'N', '20110210102803', 19523059, '0.1'),
(18773076, 18322923, './modules/blogshop', 'N', '20100601130241', 18920424, '1.1'),
(18324167, 18322923, './modules/board', 'Y', '20130514102758', 21940502, '1.7.1.1'),
(20290703, 18994170, './modules/board/m.skins/m_sr_memo', 'N', '20111206121745', 20300033, '0.3'),
(19056755, 18994170, './modules/board/m.skins/xe_official_planner123', 'N', '20130319221428', 21797041, '4.1.0'),
(19918081, 18322943, './modules/board/skins/CNboard', 'N', '20110802123115', 19918082, '1.0'),
(18686122, 18322943, './modules/board/skins/elkha_xe_official', 'N', '20100209134925', 18687734, '1.0'),
(19235403, 18322943, './modules/board/skins/eond_board', 'N', '20101102161225', 19235419, '0.2'),
(18632016, 18322943, './modules/board/skins/faq', 'N', '20100123034002', 18636828, '1.3'),
(19637507, 18322943, './modules/board/skins/JB_erebus_board', 'N', '20120801110606', 20991942, '1.2.1'),
(18731809, 18322943, './modules/board/skins/loser_guestbook', 'N', '20101102163015', 19235463, '0.1'),
(19526573, 18322943, './modules/board/skins/lune_board', 'N', '20111203223518', 20290780, '1.04'),
(19182698, 18322943, './modules/board/skins/new_faq', 'N', '20120127214759', 20467493, '2.1'),
(19020313, 18322943, './modules/board/skins/pastel_light_purple', 'N', '20100721155428', 19028626, '1.0'),
(18331803, 18322943, './modules/board/skins/p_board_p', 'N', '20100418213321', 18845219, '3.2.0'),
(18620644, 18322943, './modules/board/skins/quiet_board', 'N', '20100304002101', 18742025, '2.3'),
(18980346, 18322943, './modules/board/skins/sejin7940_board', 'N', '20110731225622', 19914876, '3.5'),
(19348911, 18322943, './modules/board/skins/simpleborder_guestbook', 'N', '20101227132321', 19356183, '1.2'),
(19018202, 18322943, './modules/board/skins/simple_blue', 'N', '20100719163959', 19023717, '1.0'),
(19555903, 18322943, './modules/board/skins/sketchbook5', 'N', '20121205235528', 21378448, '1.6.2.16'),
(19885185, 18322943, './modules/board/skins/sr_memo', 'N', '20120719203231', 20959847, '0.9.1'),
(19197549, 18322943, './modules/board/skins/webhard', 'N', '20101011231622', 19197550, '0.1'),
(20279332, 18322943, './modules/board/skins/xe_auction', 'N', '20111226204013', 20369078, '0.1.1'),
(18324211, 18322943, './modules/board/skins/xe_board', 'N', '20090924180317', 18325569, '0.1'),
(18324212, 18322943, './modules/board/skins/xe_default', 'N', '20090924174624', 18325513, '0.1'),
(18335090, 18322943, './modules/board/skins/xe_naradesign', 'N', '20090928140456', 18335100, '1.0'),
(18398352, 18322943, './modules/board/skins/xe_official_planner123', 'N', '20130319221906', 21797071, '4.1.0'),
(18515836, 18322943, './modules/board/skins/xe_official_vf', 'N', '20091130162810', 18516335, '0.1'),
(20279228, 18322923, './modules/boardauction', 'N', '20111205103308', 20295567, '0.1.1'),
(19106572, 18322943, './modules/bodex/skins/hanbi', 'N', '20110412045644', 19687541, '0.6.9'),
(18589320, 18322923, './modules/cashbook', 'N', '20110307112046', 19603368, '0.3.7'),
(20187450, 18322923, './modules/contact', 'Y', '20130523150955', 21968983, '1.7.0.2'),
(20476937, 18322943, './modules/contact/skins/cameron', 'N', '20130523212646', 21970579, '1.5'),
(18997930, 18322923, './modules/coupon', 'N', '20130131134345', 21627586, '1.0'),
(18324261, 18322929, './modules/editor/components/cc_license', 'N', '20090924163143', 18325227, '0.1'),
(19657941, 18322929, './modules/editor/components/chess', 'N', '20110412201358', 19688815, '1.1.2'),
(18325803, 18322929, './modules/editor/components/code_highlighter', 'N', '20130521175823', 21374354, '1.3'),
(18325989, 18322929, './modules/editor/components/google_translate', 'N', '20100317185756', 18777700, '0.2'),
(18730576, 18322929, './modules/editor/components/interpark_book_search', 'N', '20100303074134', 18740294, '0.1'),
(18324271, 18322929, './modules/editor/components/naver_map', 'N', '20090924163251', 18325239, '0.1'),
(18324280, 18322929, './modules/editor/components/photo_editor', 'N', '20090924163455', 18325257, '0.1'),
(18324273, 18322929, './modules/editor/components/quotation', 'N', '20090924163337', 18325248, '0.1'),
(18673912, 18322929, './modules/editor/components/soo_google_map', 'N', '20121105231926', 21295350, '0.8'),
(18650580, 18322929, './modules/editor/components/soo_naver_bookinfo', 'N', '20100730011949', 19044122, '0.3.1'),
(18679839, 18322929, './modules/editor/components/soo_naver_image', 'N', '20100210004315', 18690439, '1.0.2'),
(18326111, 18322929, './modules/editor/components/soo_youtube', 'N', '20091228194907', 18570640, '0.4.2'),
(18324213, 18322943, './modules/editor/skins/dreditor', 'N', '20100430102809', 18865892, '1.3.0'),
(18773077, 18631347, './modules/editor/skins/dreditor/drcomponents/blogshop_writer', 'N', '20100601130032', 18920406, '1.1'),
(18652557, 18631347, './modules/editor/skins/dreditor/drcomponents/code', 'N', '20100128180930', 18652761, '0.1'),
(18646646, 18631347, './modules/editor/skins/dreditor/drcomponents/iframe', 'N', '20100126173524', 18646655, '0.1'),
(18324214, 18322943, './modules/editor/skins/fckeditor', 'N', '20090924174247', 18325501, '0.1'),
(18635850, 18322943, './modules/editor/skins/linear_editor2', 'N', '20100225155925', 18728936, '2.5'),
(19355511, 18904838, './modules/editor/skins/simple_editor', 'N', '20101227052514', 19355526, '1.0'),
(18809955, 18322943, './modules/editor/skins/tinyMCE', 'N', '20100401160011', 18810260, '1.4'),
(19197538, 18322950, './modules/editor/skins/webhard', 'N', '20101011231355', 19197539, '0.1'),
(18324221, 18322943, './modules/editor/skins/xquared', 'N', '20090924174131', 18325496, '0.1'),
(18910976, 18904838, './modules/editor/styles/dreditor', 'N', '20100526115134', 18910977, '0.1'),
(19674194, 18904838, './modules/editor/styles/misol', 'N', '20110406030530', 19674198, '0.1'),
(19673444, 18904838, './modules/editor/styles/NomarginPTag', 'N', '20110406130156', 19675462, '0.0.1.1'),
(20187411, 18322923, './modules/faq', 'Y', '20130410181708', 21854296, '1.7.0.1'),
(18621989, 18322923, './modules/gagafilemd5', 'N', '20100208113013', 18684166, '1.0'),
(19562880, 18322943, './modules/gdata/skins/sketchbook5', 'N', '20110522184102', 19562884, '1.2.4'),
(20187337, 18322923, './modules/guestbook', 'Y', '20130521141040', 21962590, '1.7.0.1'),
(18324168, 18322923, './modules/homepage', 'N', '20130410184929', 21854391, '1.7.0.1'),
(20277082, 18322943, './modules/homepage/skins/xe_cafe_v2', 'N', '20111208133751', 20309227, '0.1.1'),
(18956310, 18322923, './modules/iconshop', 'N', '20100707231629', 18999633, '0.4'),
(18728678, 18322923, './modules/imageprocess', 'N', '20120402134910', 20662045, '1.2.3.0'),
(18626856, 18322943, './modules/integration_search/skins/default_ota', 'N', '20101031115416', 19230489, '0.2'),
(18595500, 18322943, './modules/integration_search/skins/default_xgenesis', 'N', '20100107221803', 18596361, '0.1.1'),
(18324169, 18322923, './modules/issuetracker', 'N', '20100430194940', 18866968, '1.1.0'),
(18335281, 18322923, './modules/join_extend', 'N', '20100703164503', 18988537, '0.5.3.4'),
(18608455, 18322923, './modules/keywordstatistics', 'N', '20100121180418', 18631041, '0.3'),
(18334938, 18322923, './modules/kin', 'Y', '20130522170457', 21965762, '1.7.0'),
(19073195, 18322923, './modules/krzip_popup', 'N', '20100814234802', 19073196, '0.1'),
(18324171, 18322923, './modules/livexe', 'N', '20100721161725', 19028822, '0.5'),
(18905882, 18322923, './modules/loginlog', 'N', '20121218110431', 21401338, '0.4.2'),
(19024107, 18322923, './modules/lottery', 'N', '20100721003004', 19027139, '0.1'),
(19212262, 18322923, './modules/lucene', 'N', '20101208172248', 19315303, '1.2'),
(19202124, 18322923, './modules/lunar', 'N', '20101020165827', 19213083, '0.1.1'),
(18324175, 18322923, './modules/material', 'N', '20100203175849', 18669818, '1.0'),
(18929292, 18322923, './modules/mcubeimg', 'N', '20100701114925', 18983143, '0.3'),
(19202128, 18322943, './modules/member/skins/default(lunar)', 'N', '20110115084441', 19467792, '0.3'),
(19073227, 18322943, './modules/member/skins/default_krzip', 'N', '20100815012207', 19073228, '0.1'),
(20297291, 18322943, './modules/member/skins/mitekiku_login', 'N', '20120127195226', 20466932, '0.1.1'),
(18325946, 18322923, './modules/minishop', 'N', '20100429095726', 18863823, '1.2.3.1'),
(18340442, 18322923, './modules/mobilemessage', 'N', '20121120152616', 21348339, '1.1.6.11'),
(18335043, 18322923, './modules/nms', 'N', '20110209191016', 19520872, '0.9.0'),
(19235480, 18322923, './modules/nspam', 'N', '20110902111455', 19978671, '1.4.1'),
(18527888, 18322923, './modules/oneban', 'N', '20091207105541', 18529981, '1.0'),
(19325680, 18322923, './modules/pipingxe', 'N', '20110217065119', 19546936, '1.0.5'),
(18324188, 18322923, './modules/planet', 'N', '20120810141924', 21015994, '0.1.4'),
(18410867, 18322923, './modules/pointsend', 'N', '20121205184503', 21378020, '1.2.3'),
(19426823, 18322943, './modules/poll/skins/clevis_poll', 'N', '20110105183748', 19440072, '0.3'),
(18640942, 18322923, './modules/pop_up', 'N', '20100126153946', 18646378, '0.0.4'),
(19510889, 18322923, './modules/portalpoint', 'N', '20110509144835', 19741258, '1.2'),
(18867310, 18322923, './modules/project', 'N', '20121030175920', 21278683, '1.3.1'),
(18324189, 18322923, './modules/referer', 'N', '20091123141741', 18325389, '0.15'),
(18324191, 18322923, './modules/resource', 'Y', '20130410181030', 21854259, '1.7.0'),
(19519188, 18322923, './modules/rssboard', 'N', '20110215102021', 19539111, '0.3'),
(18325941, 18322923, './modules/sms', 'N', '20100305103450', 18745231, '1.3.10'),
(18561875, 18322923, './modules/smsontextyle', 'N', '20091228120750', 18569729, '1.0.1'),
(19518187, 18322923, './modules/socialxe', 'N', '20111223170453', 20361400, '1.0.9'),
(19518188, 18322923, './modules/socialxeserver', 'N', '20110519182124', 19768142, '1.0.10'),
(19519235, 18322923, './modules/sphinx', 'N', '20110209180131', 19519336, '0.2'),
(18666669, 18322923, './modules/stopsmoking', 'N', '20110126143002', 19493136, '0.2.2'),
(18745485, 18322923, './modules/syndication', 'N', '20120221105935', 20546902, '2.0'),
(18324199, 18322923, './modules/tccommentnotify', 'N', '20091013151109', 18365815, '1.1.0'),
(18324186, 18322923, './modules/textyle', 'N', '20130319113212', 21795348, '1.7.0'),
(18678675, 18322943, './modules/textyle/skins/Emplode', 'N', '20100213161945', 18700716, '0.6'),
(18617496, 18322943, './modules/textyle/skins/Viewfinder', 'N', '20100206064500', 18678663, '0.3'),
(18324225, 18322943, './modules/textyle/skins/wordPressDefault', 'N', '20090924173918', 18325484, '0.1'),
(18510031, 18322943, './modules/textyle/skins/zirho', 'N', '20091228003455', 18569108, '0.0.1'),
(18324187, 18322923, './modules/textylehub', 'N', '20130319113407', 21795365, '1.7.0'),
(18324210, 18322923, './modules/wiki', 'Y', '20130528145403', 21985871, '1.7.0.1'),
(18607436, 18322923, './modules/wizardxe', 'N', '20100925065313', 19150177, '0.0.6'),
(18351409, 18322923, './modules/zzz_menu_new', 'N', '20130402112834', 21832040, '1.7.0'),
(19130808, 18322927, './widgets/analytics_flash_counter', 'N', '20100914174001', 19130826, '0.1'),
(18324320, 18322927, './widgets/archive_list', 'N', '20090924155938', 18325093, '0.1'),
(18325895, 18322927, './widgets/attendance_check', 'N', '20120508210301', 20796767, '1.6.2'),
(20185969, 18322927, './widgets/autoredirect', 'N', '20111101225439', 20185972, '1.0'),
(18607471, 18322927, './widgets/bangbang_alltogether', 'N', '20100126094509', 18645219, '0.0.3'),
(19522900, 18322927, './widgets/bannermgm_widget', 'N', '20110210234704', 19525794, '0.2'),
(18604859, 18322927, './widgets/bannerWidget', 'N', '20110508131935', 19739272, '0.3'),
(18627986, 18322927, './widgets/banner_script', 'N', '20100122153911', 18634779, '0.1'),
(19270268, 18322950, './widgets/bgw_menu/skins/naradesign', 'N', '20101118235624', 19270269, '0.1'),
(19526505, 18322927, './widgets/bible_read', 'N', '20110228132525', 19585818, '1.1'),
(19218468, 18322927, './widgets/birthday', 'N', '20101023224435', 19218473, '0.1'),
(18324321, 18322927, './widgets/calendar', 'N', '20120306105719', 20591626, '0.2'),
(18697182, 18322927, './widgets/calendar_plannerXE123', 'N', '20130319221722', 21797054, '4.1.0'),
(18324326, 18322927, './widgets/category', 'N', '20090924155621', 18325077, '0.1'),
(19775958, 18322950, './widgets/category/skins/BlogskinDesigner', 'N', '20110523154033', 19775962, '0.1'),
(19775971, 18322950, './widgets/category/skins/default_new', 'N', '20110523154534', 19775972, '0.1'),
(19775942, 18322950, './widgets/category/skins/Designspiration', 'N', '20110523153702', 19775943, '0.1'),
(19208301, 18322927, './widgets/coinslider', 'N', '20111101002511', 20182294, '1.5'),
(19530900, 18322950, './widgets/content/skins/church_skin', 'N', '20110213125802', 19532808, '0.2'),
(18802611, 18322950, './widgets/content/skins/daerew_webzine_notice', 'N', '20100401135642', 18810316, '1.0'),
(19775816, 18322950, './widgets/content/skins/default2', 'N', '20110523150514', 19775820, '0.1'),
(19775788, 18322950, './widgets/content/skins/default_new', 'N', '20110523150031', 19775789, '0.1'),
(18335369, 18322950, './widgets/content/skins/naradesign', 'N', '20100330104536', 18335372, '0.2'),
(18631776, 18322950, './widgets/content/skins/official_board_style', 'N', '20100124021740', 18638860, '1.2'),
(18325662, 18322907, '.', 'N', '20130516103331', 21946091, '1.7.3.4'),
(19775760, 18322950, './widgets/content/skins/Photographer', 'N', '20110523145009', 19775761, '0.1'),
(18324391, 18322950, './widgets/content/skins/xeHome', 'N', '20090924134812', 18324681, '0.1'),
(19088419, 18322927, './widgets/contentextended', 'N', '20111031235946', 20182258, '2.43'),
(19260194, 18322927, './widgets/contentslider', 'N', '20111105143348', 20199435, '2.1.1'),
(20350195, 18322927, './widgets/contentslist', 'N', '20111220135804', 20350196, '0.5'),
(19109313, 18322927, './widgets/content_specificdoc', 'N', '20100903230330', 19109314, '0.2'),
(18328243, 18322927, './widgets/CoolirisPlayer', 'N', '20091220231436', 18332482, '2.0'),
(18802619, 18322950, './widgets/counter_status/skins/daerew_counter', 'N', '20110103205351', 19433478, '1.1'),
(19775924, 18322950, './widgets/counter_status/skins/default2', 'N', '20110523153258', 19775928, '0.1'),
(19775908, 18322950, './widgets/counter_status/skins/default_new', 'N', '20110523152826', 19775909, '0.1'),
(19775899, 18322950, './widgets/counter_status/skins/Designspiration', 'N', '20110523152520', 19775901, '0.1'),
(20079764, 18322950, './widgets/counter_status/skins/flash', 'N', '20111007104727', 20079797, '0.1'),
(20006558, 18322950, './widgets/counter_status/skins/mamgood_counter', 'N', '20110921184343', 20017755, '1.0'),
(20078903, 18322950, './widgets/counter_status/skins/mamgood_counter2', 'N', '20111007014208', 20078904, '1.0'),
(19235579, 18322950, './widgets/counter_status/skins/mynote', 'N', '20101102171632', 19235580, '0.1'),
(18555205, 18322950, './widgets/counter_status/skins/sworld_counter', 'N', '20100105142335', 18591528, '0.1'),
(18957505, 18322927, './widgets/cu3er', 'N', '20100701115040', 18983161, '0.2'),
(19723352, 18322927, './widgets/facebook', 'N', '20110429154000', 19723353, '0.1'),
(18360610, 18322927, './widgets/flowing_pictures', 'N', '20111118151757', 18648791, '1.1.7'),
(20266344, 18322927, './widgets/forhanbiIframe', 'N', '20111128111807', 20269778, '0.2'),
(18324330, 18322927, './widgets/forum', 'N', '20090924155133', 18325054, '0.1'),
(18327462, 18322927, './widgets/gagachat', 'N', '20100501222052', 18868332, '3.6'),
(18607444, 18322927, './widgets/photo_frame', 'N', '20100113181410', 18611305, '0.0.1'),
(19527550, 18322927, './widgets/gallery_layout_widget', 'N', '20110213124605', 19532746, '1.0.0'),
(18324331, 18322927, './widgets/ideationBanner', 'N', '20090924154529', 18325042, '0.1'),
(18324332, 18322927, './widgets/ideationPopular', 'N', '20090924153510', 18325026, '0.1'),
(18324335, 18322927, './widgets/image_counter', 'N', '20090924153331', 18325013, '0.1'),
(18712640, 18322927, './widgets/JW_player', 'N', '20100219111023', 18712773, '1.0'),
(20168297, 18322950, './widgets/language_select/skins/cafe_site', 'N', '20130321182414', 21802140, '1.7.0'),
(19702419, 18322950, '.widgets/language_select/skins/monochrome', 'N', '20110420045623', 19702444, '0.1'),
(20075809, 18322950, './widgets/language_select/skins/tskorea', 'N', '20111009022458', 20092424, '0.1'),
(20276676, 18322950, './widgets/language_select/skins/xe_cafe_language', 'N', '20111130115223', 20276677, '0.1'),
(20075810, 18322927, './widgets/layout_info', 'N', '20111009023310', 20092486, '0.1'),
(18435775, 18322927, './widgets/level_point', 'N', '20100103193145', 18587704, '0.1'),
(18325791, 18322927, './widgets/lineadWidget', 'N', '20110508131820', 19739261, '0.8'),
(18634632, 18322927, './widgets/lnb_menu', 'N', '20110208170242', 19516669, '0.1.2'),
(18324336, 18322927, './widgets/logged_members', 'N', '20111027183151', 18325004, '0.1'),
(20276661, 18322950, './widgets/login_info/skins/cafe_official', 'N', '20130321181304', 21801927, '1.7.0'),
(20168286, 18322950, './widgets/login_info/skins/cafe_site', 'N', '20130321181327', 21802090, '1.7.0'),
(18378362, 18322950, './widgets/login_info/skins/default', 'N', '20111027181253', 20168245, '0.2'),
(19684961, 18322950, './widgets/login_info/skins/eond_gateway', 'N', '20110411023653', 19684962, '0.5'),
(19235552, 18322950, './widgets/login_info/skins/eond_mynote', 'N', '20130211091346', 21651021, '0.8'),
(19623082, 18322950, './widgets/login_info/skins/graystyle', 'N', '20120418152222', 20702518, '0.21'),
(18409634, 18322950, './widgets/login_info/skins/hk', 'N', '20091215185333', 18547214, '0.4'),
(18939397, 18322950, './widgets/login_info/skins/kan_login', 'N', '20100616012558', 18948357, '0.1'),
(18999302, 18322950, './widgets/login_info/skins/kan_login_v2', 'N', '20100708233128', 19002080, '0.1'),
(20078965, 18322950, './widgets/login_info/skins/mamgood_login', 'N', '20111007013848', 20078966, '1.0'),
(19073766, 18322950, './widgets/login_info/skins/mitekiku_login', 'N', '20120127194357', 20466873, '1.1.3'),
(19702417, 18322950, './widgets/login_info/skins/monochrome', 'N', '20120511190050', 20803243, '0.2'),
(19623053, 18322950, './widgets/login_info/skins/neutral', 'N', '20120511191037', 20803425, '0.2'),
(18328730, 18322950, './widgets/login_info/skins/treasurej_simple_login', 'N', '20100317212301', 18777996, '1.2'),
(19807569, 18322950, './widgets/login_info/skins/webengine_black', 'N', '20121217011649', 19827659, '1.2'),
(18572883, 18322950, './widgets/login_info/skins/xdom_login_v2', 'N', '20100803024229', 19051343, '2.3.1'),
(18635216, 18322950, './widgets/login_info/skins/xgenesis_login', 'N', '20100124022145', 18638870, '0.1.0'),
(19462008, 18322927, './widgets/login_sunoo', 'N', '20110111225545', 19462009, '1.0'),
(18324337, 18322927, './widgets/member_group', 'N', '20090924152812', 18324998, '0.1'),
(19515289, 18322927, './widgets/minion4', 'N', '20110321000727', 19635737, '2.0.1'),
(18591523, 18322927, './widgets/module_point', 'N', '20100217145129', 18707449, '0.1'),
(19708869, 18322927, './widgets/navigation', 'N', '20110425051053', 19712189, '0.4'),
(18324338, 18322927, './widgets/navigator', 'N', '20130321160204', 21801528, '1.7.0'),
(18324343, 18322927, './widgets/newest_comment', 'N', '20090924152137', 18324984, '0.1'),
(19816486, 18322950, './widgets/newest_comment/skins/CN_No5', 'N', '20110617161424', 19816487, '1.0'),
(19136412, 18322950, './widgets/newest_comment/skins/factory_basic_2', 'N', '20100920164234', 19136413, '2.0'),
(18324344, 18322927, './widgets/newest_document', 'N', '20120619201044', 20893807, '1.0'),
(19816467, 18322950, './widgets/newest_document/skins/CN_No5', 'N', '20110617160906', 19816468, '1.0'),
(19707673, 18322950, './widgets/newest_document/skins/CN_No_series', 'N', '20110422155826', 19707678, '1.1'),
(19135768, 18322950, './widgets/newest_document/skins/factory_basic_2', 'N', '20100920164249', 19135769, '2.0'),
(19081557, 18322950, './widgets/newest_document/skins/layoutskin_webzine_v2', 'N', '20100913110424', 19127480, '1.1.2'),
(19133209, 18322927, './widgets/newest_document_category', 'N', '20100916112423', 19134377, '0.1'),
(19548524, 18322927, './widgets/newest_document_tab', 'N', '20110217154418', 19548663, '0.2'),
(18358588, 18322927, './widgets/newest_memo', 'N', '20091012200550', 18363998, '0.1'),
(18324345, 18322927, './widgets/newest_trackback', 'N', '20090924151352', 18324957, '0.1'),
(18418575, 18322927, './widgets/texting_purplebook', 'N', '20110108105159', 19455976, '0.3'),
(18324346, 18322927, './widgets/planet_document', 'N', '20091116142458', 18327255, '0.2'),
(19231437, 18322950, './widgets/planet_document/skins/eond_gray', 'N', '20101115003203', 19260434, '0.3'),
(18324347, 18322927, './widgets/point_status', 'N', '20090924150714', 18324938, '0.1'),
(19271512, 18322950, './widgets/point_status/skins/eond_official_login', 'N', '20101119114730', 19271513, '0.1'),
(18325755, 18322927, './widgets/popular_planet_document', 'N', '20090924192450', 18325772, '0.1'),
(19854096, 18322927, './widgets/qrcode_creator', 'N', '20110706230533', 19854097, '0.1'),
(18634568, 18322927, './widgets/quick_menu', 'N', '20100124023223', 18638902, '0.1.0'),
(18346921, 18322927, './widgets/randomchat', 'N', '20091201005355', 18517236, '1.2'),
(18325897, 18322927, './widgets/rank_attendance', 'N', '20111105075018', 20198671, '0.8.1'),
(18324348, 18322927, './widgets/rank_count', 'N', '20090924142536', 18324851, '1.5'),
(18324351, 18322927, './widgets/rank_download', 'N', '20090924141949', 18324835, '1.5'),
(18324352, 18322927, './widgets/rank_point', 'N', '20090924141651', 18324818, '1.0'),
(19080637, 18322950, './widgets/rank_point/skins/elkha', 'N', '20100819072757', 19080640, '0.1'),
(18335040, 18322950, './widgets/rnq_newest_document/skins/rnq_newest_default', 'N', '20100326120447', 18798214, '0.3'),
(18335034, 18322950, './widgets/rnq_newest_document/skins/rnq_newest_integrate', 'N', '20100326155616', 18798607, '0.3.1'),
(18337279, 18322950, './widgets/rnq_newest_document/skins/rnq_newest_notice', 'N', '20100326120229', 18798196, '0.3'),
(19076083, 18322927, './widgets/sayradio', 'N', '20100817135839', 19077336, '1.0.1'),
(19534671, 18322927, './widgets/sejin7940_calendar', 'N', '20110213233948', 19534672, '1.0'),
(19527787, 18322927, './widgets/sitemap', 'N', '20110211162658', 19527788, '0.1.0'),
(18324355, 18322927, './widgets/site_info', 'N', '20130321144844', 21801496, '1.7.0'),
(18325952, 18322927, './widgets/sms', 'N', '20090926111500', 18326180, '1.1'),
(18561895, 18322927, './widgets/sms_textyle', 'N', '20091228121032', 18569743, '1.0.1'),
(19518201, 18322927, './widgets/socialxe_comment', 'N', '20111223170411', 20361452, '1.0.8'),
(19555927, 18322950, './widgets/socialxe_comment/skins/sketchbook5', 'N', '20121205233249', 21378405, '1.6.3.0'),
(19518204, 18322927, './widgets/socialxe_info', 'N', '20110407185932', 19679127, '1.0.6'),
(19213125, 18322927, './widgets/solarlunar', 'N', '20101020172901', 19213126, '0.1'),
(18835470, 18322927, './widgets/splanner', 'N', '20100508082200', 18878338, '0.3.0'),
(18324359, 18322927, './widgets/tab_newest_document', 'N', '20090924134103', 18324658, '0.1'),
(18324395, 18322950, './widgets/tab_newest_document/skins/ideationTab', 'N', '20090924134236', 18324647, '0.1'),
(18324360, 18322927, './widgets/tag_list', 'N', '20090924140755', 18324768, '0.1'),
(19775829, 18322950, './widgets/tag_list/skins/default1', 'N', '20110523151055', 19775830, '0.1'),
(19775849, 18322950, './widgets/tag_list/skins/default2', 'N', '20110523151530', 19775850, '0.1'),
(19775878, 18322950, './widgets/tag_list/skins/default3', 'N', '20110523152024', 19775879, '0.1'),
(18330513, 18322950, './widgets/tag_list/skins/treasurej_tagcloud', 'N', '20100317235213', 18778301, '1.2'),
(18509819, 18322927, './widgets/texting_findid', 'N', '20100121234357', 18632193, '0.1.2'),
(18509824, 18322927, './widgets/texting_findpw', 'N', '20100121234603', 18632228, '0.1.2'),
(18456413, 18322927, './widgets/texting_phone', 'N', '20110406103942', 19674997, '0.8.4'),
(19674471, 18322927, './widgets/twitter', 'N', '20110406194823', 19676523, '0.2'),
(19077792, 18322927, './widgets/twitter_follow', 'N', '20100817171028', 19077793, '1.0'),
(20464644, 18322927, './widgets/vanner', 'N', '20120127101813', 20464663, '0.2'),
(18324361, 18322927, './widgets/webzine', 'N', '20090924140356', 18324711, '0.1'),
(19141813, 18322950, './widgets/webzine/skins/Factory_Slider', 'N', '20100920164215', 19141814, '1.0'),
(20070033, 18322927, './widgets/widget_kgcalendar', 'N', '20111005004949', 20070043, '0.1'),
(19310933, 18322927, './widgets/xclient', 'N', '20110331200658', 19660872, '1.2.0'),
(18324362, 18322927, './widgets/xeBanner', 'N', '20090924135146', 18324697, '0.1'),
(19514688, 18322927, './widgets/xgenesis_login', 'N', '20110215161052', 19539957, '0.1.1'),
(20427455, 18322952, './widgetstyles/admin_ws', 'N', '20120124191536', 20454155, '0.2'),
(19707730, 18322952, './widgetstyles/CN_No_series', 'N', '20110422160347', 19707731, '1.1'),
(18324396, 18322952, './widgetstyles/colorbox', 'N', '20090924133523', 18324641, '0.1'),
(19231756, 18322952, './widgetstyles/eond_doubleline', 'N', '20101101095511', 19231762, '0.1'),
(19231709, 18322952, './widgetstyles/eond_webzine', 'N', '20101101093938', 19231710, '0.1'),
(18642836, 18322952, './widgetstyles/gray_style', 'N', '20100408175807', 18826509, '1.2.1'),
(18324397, 18322952, './widgetstyles/line', 'N', '20090924133047', 18324635, '0.1'),
(19639463, 18322952, './widgetstyles/lineBox', 'N', '20110326225134', 19639464, '0.1'),
(18324398, 18322952, './widgetstyles/memo', 'N', '20090924132919', 18324622, '0.1'),
(18647145, 18322952, './widgetstyles/mo_colorline', 'N', '20100129051928', 18654291, '0.3'),
(18324401, 18322952, './widgetstyles/postitWire', 'N', '20090924132558', 18324610, '0.1'),
(18324402, 18322952, './widgetstyles/roundFace', 'N', '20090924132205', 18324603, '0.1'),
(18324403, 18322952, './widgetstyles/roundWire', 'N', '20090924132016', 18324590, '0.1'),
(19833041, 18322952, './widgetstyles/sctb', 'N', '20130110114344', 20213631, '6.0'),
(18324404, 18322952, './widgetstyles/simpleRound', 'N', '20090924131814', 18324575, '0.1'),
(18324405, 18322952, './widgetstyles/simpleSquare', 'N', '20090924131536', 18324565, '0.1'),
(18324406, 18322952, './widgetstyles/simpleTitle', 'N', '20090924131034', 18324546, '0.1'),
(18995899, 18322952, './widgetstyles/sorrent_simplebox', 'N', '20100707175645', 18998803, '0.1'),
(18536532, 18322952, './widgetstyles/xe_official', 'N', '20110103125326', 19432228, '0.2'),
(19692912, 18322925, './xe/addons/music24', 'N', '20110415005318', 19692913, '1.0.0'),
(20092760, 18322925, './addons/elkha_packer', 'N', '20120418151804', 20702463, '0.11'),
(19817434, 18322929, '.modules/editor/components/eh_player', 'N', '20110625012249', 19828441, '0.1'),
(20092690, 18322950, '.widgets/content/skins/elkha_nivo', 'N', '20111009034636', 20092697, '0.1'),
(18739967, 18322950, '.widgets/content/skins/YGH_line', 'N', '20100303191159', 18741565, '0.1'),
(20184109, 18322950, '.widgets/login_info/skins/Forhanbi_login', 'N', '20111101123720', 20184112, '0.1'),
(19180981, 18322954, '.xe/layouts/Forhanbi_v0.1.1', 'N', '20101004211358', 19181348, '0.1.1'),
(20670102, 18322923, './modules/lisense', 'N', '20120414150325', 20692149, '0.1'),
(20701590, 18322925, './addons/login_method', 'N', '20120418120733', 20701816, '0.2'),
(20277901, 18322925, './addons/controlbox', 'N', '20120319182040', 20632434, '1.0.1'),
(20120961, 18322927, './widgets/treasurej_popular', 'N', '20120420171735', 20708255, '1.0.4'),
(20122381, 18322950, './widgets/treasurej_popular/skins/treasurej_popular_tabr', 'N', '20130524110526', 21972737, '1.1'),
(20186750, 18322950, './widgets/treasurej_popular/skins/treasurej_popular_tabs', 'N', '20130524035726', 21972593, '1.1');
INSERT INTO `xe_autoinstall_packages` (`package_srl`, `category_srl`, `path`, `have_instance`, `updatedate`, `latest_item_srl`, `version`) VALUES
(20673970, 18322923, './modules/referer2', 'N', '20120509181421', 20798704, '2.1.1'),
(20710471, 18322923, './modules/checkip', 'N', '20120424170909', 20765854, '0.2.2'),
(20673640, 18322925, './addons/falling_snow', 'N', '20120416213423', 20697610, '1.5.0'),
(20673638, 18322925, './addons/html5audio_flash', 'N', '20120412192734', 20688072, '1.5.0'),
(20324298, 18322923, './modules/textmessage', 'N', '20130527162627', 21983308, '2.1.1'),
(20792413, 18322950, './widgets/content/skins/sticky_note', 'N', '20120506234842', 20792414, '1.0.3.0'),
(20796792, 18322927, './widgets/notice', 'N', '20130605000203', 22021998, '1.0.3.3'),
(20673999, 18322925, './addons/referer2', 'N', '20120509181544', 20798712, '2.1.1'),
(20832931, 18322923, './modules/user_finder', 'N', '20120521163050', 20836347, '0.1'),
(20687933, 18322954, './layouts/xdt_offical_2', 'N', '20120715174115', 20949015, '1.4'),
(20531619, 18322954, './layouts/white_square_layout', 'N', '20120614000339', 20882875, '1.3'),
(20927819, 18322950, './widgets/login_info/skins/photo15', 'N', '20120706135147', 20927820, '1'),
(20930264, 18322923, './modules/notifo', 'N', '20130123224708', 20930269, '1.0'),
(20936395, 18322923, './modules/umessage', 'N', '20120713164936', 20943903, '1.0'),
(20949728, 18322925, './addons/CssOutPlus', 'N', '20130106125634', 20952200, '1.1'),
(20951206, 18322925, './addons/css3pie_js', 'N', '20120722195451', 20966650, '1.1.1'),
(20954749, 18322925, './addons/message_laram', 'N', '20120817171556', 21041089, '2.0'),
(20957609, 18322925, './addons/wating_message', 'N', '20120719121829', 20957612, '0.1.1'),
(20959091, 18322925, './addons/doc_viewer', 'N', '20120719150131', 20959094, '0.1.1'),
(20966755, 18322954, './layouts/xdt_community', 'N', '20120805053856', 21002067, '1.1'),
(20971314, 18322925, './addons/kakao_link', 'N', '20120725182445', 20975200, '0.2'),
(20989209, 18322954, './layouts/Chemistry_lite', 'N', '20120731030246', 20989210, '1.0'),
(21003996, 18322927, './widgets/xestream', 'N', '20120806062706', 21003999, '0.1'),
(21038796, 18322950, './widgets/point_status/skins/bootstrap', 'N', '20121215220106', 21146775, '1.2'),
(21038825, 18322950, './widgets/content/skins/sketchbook5_style', 'N', '20130212133237', 21648135, '1.0'),
(21090780, 18322954, './layouts/pleasure', 'N', '20130110114421', 21092056, '1.2'),
(21092346, 18322925, './addons/color_button', 'N', '20120826213832', 21092347, '1.0'),
(21124707, 18322925, './addons/soo_add_ssl', 'N', '20120831004624', 21124708, '0.1'),
(21010603, 18322923, './modules/mailing_free', 'N', '20130322001304', 21134078, '0.1'),
(21146815, 18322950, './widgets/sys_status/skins/tb', 'N', '20130412185649', 21146816, '1.0'),
(21154641, 18322925, './addons/iframe_resize', 'N', '20120914164258', 21188168, '0.1'),
(21190663, 18322925, './addons/report_addon', 'N', '20120917152103', 21194703, '0.2'),
(21189057, 18322925, './addons/settitle', 'N', '20130201152749', 21383555, '1.3'),
(21194850, 18322925, './addons/bootstrap_btn', 'N', '20130514171443', 21194883, '1.0'),
(21195053, 18322925, './addons/bootstrap_icon', 'N', '20120917170116', 21195054, '1.0'),
(21195185, 18322923, './modules/authentication', 'N', '20130508173911', 21926697, '2.2'),
(21204144, 18322925, './addons/number_display', 'N', '20120921162250', 21204145, '0.1'),
(21211103, 18322923, './modules/sejin7940_comment', 'N', '20120925050851', 21211104, '1.0'),
(20882492, 18322923, './modules/purplebook', 'N', '20130527162108', 21983291, '2.4'),
(21196855, 18322927, './widgets/camtv', 'N', '20121004110720', 21228634, '0.1'),
(21220010, 18322925, './addons/limit_message', 'N', '20121004214405', 21229637, '0.2'),
(21262112, 18322925, './addons/scrollbar', 'N', '20121021004143', 21262114, '0.9'),
(21267409, 18322954, './layouts/qookrabbit', 'N', '20130603023629', 21363221, '1.9.8'),
(21290615, 18994170, './modules/board/m.skins/xenon_m_board', 'N', '20121213213941', 21393065, '1.5'),
(21289114, 18322925, './addons/division', 'N', '20121105172240', 21294767, '1.0'),
(21290617, 18994170, './modules/page/m.skins/xenon_m_page', 'N', '20121105223342', 21295253, '1.1'),
(21298003, 18322925, './addons/layerpopup', 'N', '20130201152719', 21371789, '1.5'),
(21290627, 18994172, './m.layouts/XenonMoblie', 'N', '20130326223800', 21815540, '1.9.1'),
(21302525, 18322954, './layouts/xdt_pure', 'N', '20130126005432', 21616035, '1.1'),
(21305288, 18322952, './widgetstyles/nico', 'N', '20121217011735', 21305289, '1.0'),
(21352246, 18322950, './widgets/counter_status/skins/qookrabbit_status', 'N', '20121122183123', 21352247, '0.1'),
(21352623, 18322925, './addons/mresizer', 'N', '20130201152709', 21526220, '1.5'),
(21354730, 18322925, './addons/msg_point', 'N', '20121124044643', 21354731, '1.0'),
(21354767, 18322925, './addons/change_nickname', 'N', '20121124063922', 21354768, '1.0'),
(21369690, 18322950, './widgets/newest_comment/skins/xenon_m_com', 'N', '20130201152702', 21370425, '1.1'),
(21369691, 18322950, './widgets/newest_document/skins/xenon_m_doc', 'N', '20130201152653', 21369734, '1.0'),
(21369692, 18322950, './widgets/newest_document/skins/xenon_m_gel', 'N', '20130201152643', 21369738, '1.0'),
(21370287, 18322923, './modules/smartux', 'N', '20121201213340', 21370289, '1.0.2'),
(21369594, 18322925, './addons/my_comment_addon', 'N', '20121214113738', 21394119, '1.1.2'),
(19230703, 18322954, './layouts/eond_official', 'N', '20130325143733', 21382865, '1.4.1'),
(21378491, 18994170, './modules/board/m.skins/sketchbook5', 'N', '20121206001107', 21378492, '1.6.2.16'),
(21384926, 18322925, './addons/dragcolor', 'N', '20121209144907', 21385023, '1.0'),
(21391263, 18322925, './addons/mbanner', 'N', '20130201152636', 21391414, '1.0'),
(21373345, 18322925, './addons/searchhighlight', 'N', '20121214114144', 21394152, '0.2'),
(21396254, 18322950, './widgets/content/skins/tb_sb', 'N', '20130412185947', 21396255, '1.0'),
(21398290, 18322925, './addons/pagechange', 'N', '20130102213946', 21432465, '3.0'),
(21400134, 18322925, './addons/securityPlus', 'N', '20121217180943', 21400135, '1.0.0'),
(21411060, 18322943, './modules/socialxe/skins/tb', 'N', '20130412190140', 21411067, '1.0'),
(21411087, 18322943, './modules/socialxeserver/skins/tb', 'N', '20130412192641', 21411095, '1.0'),
(21412475, 18322923, './modules/recruit', 'N', '20121224104240', 21412476, '1.0'),
(21413017, 18322927, './widgets/xegallery', 'N', '20130103112840', 21433519, '0.3'),
(20946401, 20187310, './themes/tb', 'N', '20130322213618', 21805323, '3.3.3'),
(21415137, 18322925, './addons/setitle2', 'N', '20121225171122', 21415140, '2.1.0'),
(21221462, 18322925, './addons/naver_analytics', 'N', '20130101131134', 21428208, '1.0'),
(21290626, 18994170, './modules/member/m.skins/xenon_m_member', 'N', '20130102123336', 21429905, '1.0'),
(21439563, 18322925, './addons/kru_sslhelper', 'N', '20130222002354', 21711242, '3.0.1'),
(21526323, 18322925, './addons/noclick', 'N', '20130203005859', 21633125, '1.2'),
(21393465, 18322927, './widgets/uchat', 'N', '20130605183158', 22023882, '1.1.5'),
(21590301, 18322943, './modules/board/skins/xe_v3_FHC', 'N', '20130306185212', 21762099, '1.0.3'),
(21591779, 18322925, './addons/radarURL', 'N', '20130116123906', 21594258, '1.2'),
(21535219, 18322954, './layouts/live_login', 'N', '20130309235612', 21768603, '1.5.0.0'),
(21606824, 18322925, './addons/href_fixed1', 'N', '20130201152621', 21606841, '1.0'),
(21611624, 18322923, './modules/seo', 'N', '20130522032943', 21964312, '0.4.1.1'),
(21643081, 18322950, './widgets/content/skins/mynote', 'N', '20130208004345', 21643082, '0.1'),
(21643233, 18322954, './layouts/Express999', 'N', '20130404210356', 21838875, '2.1'),
(21648251, 18322950, './widgets/content/skins/tb_cw', 'N', '20130526173719', 21978061, '2.2'),
(21651786, 18322925, './addons/scmplayer', 'N', '20130213003922', 21655463, '1.4'),
(21722608, 18322925, './addons/new_document_notify', 'N', '20130509212402', 21929437, '1.0.1'),
(21722620, 18322925, './addons/mobile_bookmark_bubble', 'N', '20130220214212', 21725441, '1.0'),
(21717275, 18322923, './modules/okname', 'N', '20130221010828', 21726208, '0.2.0'),
(21717279, 18322925, './addons/okname', 'N', '20130221010941', 21726233, '0.2.0'),
(21736776, 18322925, './addons/kru_dab', 'N', '20130228213217', 21748943, '1.1'),
(20324311, 18322923, './modules/notification', 'N', '20130522115038', 21964956, '2.2'),
(21752944, 18322925, './addons/layerAlert', 'N', '20130302172315', 21753018, '1.1'),
(21761048, 18322954, './layouts/eond_rosso', 'N', '20130314114015', 21765463, '0.2'),
(18714842, 18322954, './layouts/eond_portal_main_2col_right', 'N', '20130313072035', 21776053, '0.7'),
(21776217, 18322954, './layouts/eond_starter', 'N', '20130313092855', 21776218, '0.1'),
(21749191, 18322954, './layouts/Simple_Style_S', 'N', '20130429124213', 21852443, '1.3.1'),
(21782412, 18322954, './layouts/eond_compact', 'N', '20130315073853', 21782413, '0.8.4'),
(21788706, 18322925, './addons/AntiProxy', 'N', '20130317001633', 21788708, '1.0.0'),
(21374711, 18322923, './modules/ncenterlite', 'N', '20130522173533', 21932111, '1.2.0'),
(21428178, 18322954, './layouts/xdt_simple_home', 'N', '20130325230502', 21812914, '1.1'),
(21798677, 18322943, './modules/ncenterlite/skins/playerplace', 'N', '20130320205602', 21798682, '1.0.1'),
(21804783, 18322954, './layouts/forhanbi_1.7', 'N', '20130323112431', 21804785, '0.1'),
(21805731, 18322925, './addons/activescrollbar', 'N', '20130322232735', 21805732, '1.0'),
(21807603, 18322927, './widgets/xehoverdir', 'N', '20130323174740', 21807604, '0.1'),
(21813965, 18322943, './modules/board/skins/xe_v3_gallery_haan', 'N', '20130326105413', 21814028, '0.3.1'),
(21806279, 18322954, './layouts/Civilrevo', 'N', '20130424225533', 21893483, '1.2.2'),
(21842038, 18322925, './addons/scrolltopcontrol', 'N', '20130407041104', 21845072, '1.1.0'),
(21854312, 18322923, './modules/forum', 'Y', '20130520110410', 21956789, '1.7.0.1'),
(21855754, 18322927, './widgets/server_status', 'N', '20130422101333', 21885905, '0.2'),
(21411172, 18322943, './modules/contact/skins/tb', 'N', '20130412193324', 21411184, '1.0'),
(21862798, 18322954, './layouts/brownwhite', 'N', '20130413153548', 21862859, '1.0'),
(21876980, 18322923, './modules/multidomain', 'N', '20130515225941', 21945157, '1.1.1'),
(21876999, 18322925, './addons/multidomain', 'N', '20130515213503', 21944970, '1.1'),
(21883072, 18322954, './layouts/the_bootstrap', 'N', '20130607164649', 22024367, '3.5.0.1'),
(21889835, 18322925, './addons/counter_ex', 'N', '20130423171404', 21889865, '1.0.1.0'),
(21901097, 18322925, './addons/today_fortune', 'N', '20130501124412', 21908882, '1.0.1'),
(21933112, 18322925, './addons/to_sns', 'N', '20130511140249', 21933154, '0.2'),
(21933295, 18322923, './modules/realnotice', 'N', '20130512162047', 21933310, '0.5'),
(21950613, 18322925, './addons/sejin7940_mustlogin', 'N', '20130521050403', 21959492, '0.2'),
(21961680, 18322925, './addons/stoptrackback', 'N', '20130524142526', 21973651, '0.3'),
(21231044, 18322923, './modules/reset_password', 'N', '20130522180612', 21965904, '1.1'),
(21978106, 18322925, './addons/sejin7940_autotrash', 'N', '20130526182230', 21978124, '1.1.1'),
(22017658, 18322954, './layouts/xecenter', 'N', '20130611211747', 22072523, '1.1.2'),
(22073155, 18322923, './modules/cash', 'N', '20130612123347', 22074809, '0.1');

-- --------------------------------------------------------

--
-- Table structure for table `xe_comments`
--

CREATE TABLE IF NOT EXISTS `xe_comments` (
  `comment_srl` bigint(11) NOT NULL,
  `module_srl` bigint(11) NOT NULL DEFAULT '0',
  `document_srl` bigint(11) NOT NULL DEFAULT '0',
  `parent_srl` bigint(11) NOT NULL DEFAULT '0',
  `is_secret` char(1) NOT NULL DEFAULT 'N',
  `content` longtext NOT NULL,
  `voted_count` bigint(11) NOT NULL DEFAULT '0',
  `blamed_count` bigint(11) NOT NULL DEFAULT '0',
  `notify_message` char(1) NOT NULL DEFAULT 'N',
  `password` varchar(60) DEFAULT NULL,
  `user_id` varchar(80) DEFAULT NULL,
  `user_name` varchar(80) NOT NULL,
  `nick_name` varchar(80) NOT NULL,
  `member_srl` bigint(11) NOT NULL,
  `email_address` varchar(250) NOT NULL,
  `homepage` varchar(250) NOT NULL,
  `uploaded_count` bigint(11) NOT NULL DEFAULT '0',
  `regdate` varchar(14) DEFAULT NULL,
  `last_update` varchar(14) DEFAULT NULL,
  `ipaddress` varchar(128) NOT NULL,
  `list_order` bigint(11) NOT NULL,
  `status` bigint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`comment_srl`),
  UNIQUE KEY `idx_module_list_order` (`module_srl`,`list_order`),
  KEY `idx_module_srl` (`module_srl`),
  KEY `idx_document_srl` (`document_srl`),
  KEY `idx_voted_count` (`voted_count`),
  KEY `idx_blamed_count` (`blamed_count`),
  KEY `idx_member_srl` (`member_srl`),
  KEY `idx_uploaded_count` (`uploaded_count`),
  KEY `idx_regdate` (`regdate`),
  KEY `idx_last_update` (`last_update`),
  KEY `idx_ipaddress` (`ipaddress`),
  KEY `idx_list_order` (`list_order`),
  KEY `idx_status` (`status`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `xe_comments_list`
--

CREATE TABLE IF NOT EXISTS `xe_comments_list` (
  `comment_srl` bigint(11) NOT NULL,
  `document_srl` bigint(11) NOT NULL DEFAULT '0',
  `head` bigint(11) NOT NULL DEFAULT '0',
  `arrange` bigint(11) NOT NULL DEFAULT '0',
  `module_srl` bigint(11) NOT NULL DEFAULT '0',
  `regdate` varchar(14) DEFAULT NULL,
  `depth` bigint(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`comment_srl`),
  KEY `idx_list` (`document_srl`,`head`,`arrange`),
  KEY `idx_date` (`module_srl`,`regdate`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `xe_comment_declared`
--

CREATE TABLE IF NOT EXISTS `xe_comment_declared` (
  `comment_srl` bigint(11) NOT NULL,
  `declared_count` bigint(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`comment_srl`),
  KEY `idx_declared_count` (`declared_count`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `xe_comment_declared_log`
--

CREATE TABLE IF NOT EXISTS `xe_comment_declared_log` (
  `comment_srl` bigint(11) NOT NULL,
  `member_srl` bigint(11) NOT NULL,
  `ipaddress` varchar(128) NOT NULL,
  `regdate` varchar(14) DEFAULT NULL,
  KEY `idx_comment_srl` (`comment_srl`),
  KEY `idx_member_srl` (`member_srl`),
  KEY `idx_ipaddress` (`ipaddress`),
  KEY `idx_regdate` (`regdate`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `xe_comment_voted_log`
--

CREATE TABLE IF NOT EXISTS `xe_comment_voted_log` (
  `comment_srl` bigint(11) NOT NULL,
  `member_srl` bigint(11) NOT NULL,
  `ipaddress` varchar(128) NOT NULL,
  `regdate` varchar(14) DEFAULT NULL,
  `point` bigint(11) NOT NULL,
  KEY `idx_comment_srl` (`comment_srl`),
  KEY `idx_member_srl` (`member_srl`),
  KEY `idx_ipaddress` (`ipaddress`),
  KEY `idx_regdate` (`regdate`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `xe_counter_log`
--

CREATE TABLE IF NOT EXISTS `xe_counter_log` (
  `site_srl` bigint(11) NOT NULL DEFAULT '0',
  `ipaddress` varchar(250) NOT NULL,
  `regdate` varchar(14) DEFAULT NULL,
  `user_agent` varchar(250) DEFAULT NULL,
  KEY `idx_site_counter_log` (`site_srl`,`ipaddress`),
  KEY `idx_counter_log` (`regdate`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `xe_counter_log`
--

INSERT INTO `xe_counter_log` (`site_srl`, `ipaddress`, `regdate`, `user_agent`) VALUES
(0, '::1', '20130612043947', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/27.0.1453.110 Safari/537.36');

-- --------------------------------------------------------

--
-- Table structure for table `xe_counter_site_status`
--

CREATE TABLE IF NOT EXISTS `xe_counter_site_status` (
  `site_srl` bigint(11) NOT NULL,
  `regdate` bigint(11) NOT NULL,
  `unique_visitor` bigint(11) DEFAULT '0',
  `pageview` bigint(11) DEFAULT '0',
  UNIQUE KEY `site_status` (`site_srl`,`regdate`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `xe_counter_status`
--

CREATE TABLE IF NOT EXISTS `xe_counter_status` (
  `regdate` bigint(11) NOT NULL,
  `unique_visitor` bigint(11) DEFAULT '0',
  `pageview` bigint(11) DEFAULT '0',
  PRIMARY KEY (`regdate`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `xe_counter_status`
--

INSERT INTO `xe_counter_status` (`regdate`, `unique_visitor`, `pageview`) VALUES
(0, 1, 284),
(20130612, 1, 284);

-- --------------------------------------------------------

--
-- Table structure for table `xe_documents`
--

CREATE TABLE IF NOT EXISTS `xe_documents` (
  `document_srl` bigint(11) NOT NULL,
  `module_srl` bigint(11) NOT NULL DEFAULT '0',
  `category_srl` bigint(11) NOT NULL DEFAULT '0',
  `lang_code` varchar(10) NOT NULL DEFAULT '',
  `is_notice` char(1) NOT NULL DEFAULT 'N',
  `title` varchar(250) DEFAULT NULL,
  `title_bold` char(1) NOT NULL DEFAULT 'N',
  `title_color` varchar(7) DEFAULT NULL,
  `content` longtext NOT NULL,
  `readed_count` bigint(11) NOT NULL DEFAULT '0',
  `voted_count` bigint(11) NOT NULL DEFAULT '0',
  `blamed_count` bigint(11) NOT NULL DEFAULT '0',
  `comment_count` bigint(11) NOT NULL DEFAULT '0',
  `trackback_count` bigint(11) NOT NULL DEFAULT '0',
  `uploaded_count` bigint(11) NOT NULL DEFAULT '0',
  `password` varchar(60) DEFAULT NULL,
  `user_id` varchar(80) DEFAULT NULL,
  `user_name` varchar(80) NOT NULL,
  `nick_name` varchar(80) NOT NULL,
  `member_srl` bigint(11) NOT NULL,
  `email_address` varchar(250) NOT NULL,
  `homepage` varchar(250) NOT NULL,
  `tags` text,
  `extra_vars` text,
  `regdate` varchar(14) DEFAULT NULL,
  `last_update` varchar(14) DEFAULT NULL,
  `last_updater` varchar(80) DEFAULT NULL,
  `ipaddress` varchar(128) NOT NULL,
  `list_order` bigint(11) NOT NULL,
  `update_order` bigint(11) NOT NULL,
  `allow_trackback` char(1) NOT NULL DEFAULT 'Y',
  `notify_message` char(1) NOT NULL DEFAULT 'N',
  `status` varchar(20) DEFAULT 'PUBLIC',
  `comment_status` varchar(20) DEFAULT 'ALLOW',
  PRIMARY KEY (`document_srl`),
  KEY `idx_module_srl` (`module_srl`),
  KEY `idx_category_srl` (`category_srl`),
  KEY `idx_is_notice` (`is_notice`),
  KEY `idx_readed_count` (`readed_count`),
  KEY `idx_voted_count` (`voted_count`),
  KEY `idx_blamed_count` (`blamed_count`),
  KEY `idx_comment_count` (`comment_count`),
  KEY `idx_trackback_count` (`trackback_count`),
  KEY `idx_uploaded_count` (`uploaded_count`),
  KEY `idx_member_srl` (`member_srl`),
  KEY `idx_regdate` (`regdate`),
  KEY `idx_last_update` (`last_update`),
  KEY `idx_ipaddress` (`ipaddress`),
  KEY `idx_list_order` (`list_order`),
  KEY `idx_update_order` (`update_order`),
  KEY `idx_module_list_order` (`module_srl`,`list_order`),
  KEY `idx_module_update_order` (`module_srl`,`update_order`),
  KEY `idx_module_readed_count` (`module_srl`,`readed_count`),
  KEY `idx_module_voted_count` (`module_srl`,`voted_count`),
  KEY `idx_module_notice` (`module_srl`,`is_notice`),
  KEY `idx_module_document_srl` (`module_srl`,`document_srl`),
  KEY `idx_module_blamed_count` (`module_srl`,`blamed_count`),
  KEY `idx_module_status` (`module_srl`,`status`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `xe_documents`
--

INSERT INTO `xe_documents` (`document_srl`, `module_srl`, `category_srl`, `lang_code`, `is_notice`, `title`, `title_bold`, `title_color`, `content`, `readed_count`, `voted_count`, `blamed_count`, `comment_count`, `trackback_count`, `uploaded_count`, `password`, `user_id`, `user_name`, `nick_name`, `member_srl`, `email_address`, `homepage`, `tags`, `extra_vars`, `regdate`, `last_update`, `last_updater`, `ipaddress`, `list_order`, `update_order`, `allow_trackback`, `notify_message`, `status`, `comment_status`) VALUES
(130, 126, 0, 'ko', 'N', 'KCCA 커뮤니티 홈페이지 오픈 준비 중', 'N', 'N', '<b>KCCA 커뮤니티 홈페이지 오픈 준비 중 ...</b>', 0, 0, 0, 0, 0, 0, NULL, 'kcca', 'admin', 'kcca admin', 4, 'admin@kcca.org.au', '', '', 'N;', '20130612054319', '20130612054345', NULL, '::1', -131, -132, 'Y', 'N', 'PUBLIC', 'ALLOW'),
(136, 134, 0, 'ko', 'N', '인사말', 'N', 'N', '<p>회장님 인사말....</p>', 0, 0, 0, 0, 0, 0, NULL, 'kcca', 'admin', 'kcca admin', 4, 'admin@kcca.org.au', '', NULL, 'N;', '20130612100053', '20130612100053', NULL, '::1', -137, -137, 'Y', 'N', 'PUBLIC', 'ALLOW'),
(138, 134, 0, 'ko', 'N', '협회소개', 'N', 'N', '<p>협회소개..</p>', 0, 0, 0, 0, 0, 0, NULL, 'kcca', 'admin', 'kcca admin', 4, 'admin@kcca.org.au', '', NULL, 'N;', '20130612100124', '20130612100124', NULL, '::1', -139, -139, 'Y', 'N', 'PUBLIC', 'ALLOW'),
(140, 134, 0, 'ko', 'N', '협회회원', 'N', 'N', '<p>협회회원..</p>', 0, 0, 0, 0, 0, 0, NULL, 'kcca', 'admin', 'kcca admin', 4, 'admin@kcca.org.au', '', NULL, 'N;', '20130612100154', '20130612100154', NULL, '::1', -141, -141, 'Y', 'N', 'PUBLIC', 'ALLOW'),
(144, 142, 0, 'ko', 'N', '2013년 2월 1일 xxx 행사', 'N', 'N', '<p>2013년 2월 1일 xxx 행사...</p>', 0, 0, 0, 0, 0, 0, NULL, 'kcca', 'admin', 'kcca admin', 4, 'admin@kcca.org.au', '', NULL, 'N;', '20130612100609', '20130612100609', NULL, '::1', -145, -145, 'Y', 'N', 'PUBLIC', 'ALLOW'),
(148, 146, 0, 'ko', 'N', '2013년 1월 xxx 골프', 'N', 'N', '<p><img src="http://localhost/kcca/xe/files/attach/images/146/148/0b70b47f15ce1e9ab477249aef986904.jpg" alt="Penguins.jpg" width="1024" height="768" editor_component="image_link" /><b>\r\n\r\ntestfdsa</b></p>\r\n<p><b>fdsa</b></p>\r\n<p><b>fds</b></p>\r\n<p><b><br /></b></p>\r\n<p>\r\n\r\n\r\n\r\n\r\n</p>', 0, 0, 0, 0, 0, 1, NULL, 'kcca', 'admin', 'kcca admin', 4, 'admin@kcca.org.au', '', NULL, 'N;', '20130612141715', '20130612141715', NULL, '::1', -150, -150, 'Y', 'N', 'PUBLIC', 'ALLOW');

-- --------------------------------------------------------

--
-- Table structure for table `xe_document_aliases`
--

CREATE TABLE IF NOT EXISTS `xe_document_aliases` (
  `alias_srl` bigint(11) NOT NULL DEFAULT '0',
  `module_srl` bigint(11) NOT NULL DEFAULT '0',
  `document_srl` bigint(11) NOT NULL DEFAULT '0',
  `alias_title` varchar(250) NOT NULL,
  PRIMARY KEY (`alias_srl`),
  UNIQUE KEY `idx_module_title` (`module_srl`,`alias_title`),
  KEY `idx_module_srl` (`module_srl`),
  KEY `idx_document_srl` (`document_srl`),
  KEY `idx_alias_title` (`alias_title`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `xe_document_categories`
--

CREATE TABLE IF NOT EXISTS `xe_document_categories` (
  `category_srl` bigint(11) NOT NULL DEFAULT '0',
  `module_srl` bigint(11) NOT NULL DEFAULT '0',
  `parent_srl` bigint(12) NOT NULL DEFAULT '0',
  `title` varchar(250) DEFAULT NULL,
  `expand` char(1) DEFAULT 'N',
  `document_count` bigint(11) NOT NULL DEFAULT '0',
  `regdate` varchar(14) DEFAULT NULL,
  `last_update` varchar(14) DEFAULT NULL,
  `list_order` bigint(11) NOT NULL,
  `group_srls` text,
  `color` varchar(11) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`category_srl`),
  KEY `idx_module_srl` (`module_srl`),
  KEY `idx_regdate` (`regdate`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `xe_document_declared`
--

CREATE TABLE IF NOT EXISTS `xe_document_declared` (
  `document_srl` bigint(11) NOT NULL,
  `declared_count` bigint(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`document_srl`),
  KEY `idx_declared_count` (`declared_count`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `xe_document_declared_log`
--

CREATE TABLE IF NOT EXISTS `xe_document_declared_log` (
  `document_srl` bigint(11) NOT NULL,
  `member_srl` bigint(11) NOT NULL,
  `ipaddress` varchar(128) NOT NULL,
  `regdate` varchar(14) DEFAULT NULL,
  KEY `idx_document_srl` (`document_srl`),
  KEY `idx_member_srl` (`member_srl`),
  KEY `idx_ipaddress` (`ipaddress`),
  KEY `idx_regdate` (`regdate`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `xe_document_extra_keys`
--

CREATE TABLE IF NOT EXISTS `xe_document_extra_keys` (
  `module_srl` bigint(11) NOT NULL,
  `var_idx` bigint(11) NOT NULL,
  `var_name` varchar(250) NOT NULL,
  `var_type` varchar(50) NOT NULL,
  `var_is_required` char(1) NOT NULL DEFAULT 'N',
  `var_search` char(1) NOT NULL DEFAULT 'N',
  `var_default` text,
  `var_desc` text,
  `eid` varchar(40) DEFAULT NULL,
  UNIQUE KEY `unique_module_keys` (`module_srl`,`var_idx`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `xe_document_extra_vars`
--

CREATE TABLE IF NOT EXISTS `xe_document_extra_vars` (
  `module_srl` bigint(11) NOT NULL,
  `document_srl` bigint(11) NOT NULL,
  `var_idx` bigint(11) NOT NULL,
  `lang_code` varchar(10) NOT NULL,
  `value` longtext,
  `eid` varchar(40) DEFAULT NULL,
  UNIQUE KEY `unique_extra_vars` (`module_srl`,`document_srl`,`var_idx`,`lang_code`),
  KEY `idx_document_list_order` (`document_srl`,`module_srl`,`var_idx`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `xe_document_histories`
--

CREATE TABLE IF NOT EXISTS `xe_document_histories` (
  `history_srl` bigint(11) NOT NULL DEFAULT '0',
  `module_srl` bigint(11) NOT NULL DEFAULT '0',
  `document_srl` bigint(11) NOT NULL DEFAULT '0',
  `content` longtext,
  `nick_name` varchar(80) NOT NULL,
  `member_srl` bigint(11) DEFAULT NULL,
  `regdate` varchar(14) DEFAULT NULL,
  `ipaddress` varchar(128) NOT NULL,
  PRIMARY KEY (`history_srl`),
  KEY `idx_module_srl` (`module_srl`),
  KEY `idx_document_srl` (`document_srl`),
  KEY `idx_regdate` (`regdate`),
  KEY `idx_ipaddress` (`ipaddress`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `xe_document_readed_log`
--

CREATE TABLE IF NOT EXISTS `xe_document_readed_log` (
  `document_srl` bigint(11) NOT NULL,
  `member_srl` bigint(11) NOT NULL,
  `ipaddress` varchar(128) NOT NULL,
  `regdate` varchar(14) DEFAULT NULL,
  KEY `idx_document_srl` (`document_srl`),
  KEY `idx_member_srl` (`member_srl`),
  KEY `idx_ipaddress` (`ipaddress`),
  KEY `idx_regdate` (`regdate`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `xe_document_trash`
--

CREATE TABLE IF NOT EXISTS `xe_document_trash` (
  `trash_srl` bigint(11) NOT NULL DEFAULT '0',
  `document_srl` bigint(11) NOT NULL DEFAULT '0',
  `module_srl` bigint(11) NOT NULL DEFAULT '0',
  `trash_date` varchar(14) DEFAULT NULL,
  `description` text,
  `ipaddress` varchar(128) NOT NULL,
  `user_id` varchar(80) DEFAULT NULL,
  `user_name` varchar(80) NOT NULL,
  `nick_name` varchar(80) NOT NULL,
  `member_srl` bigint(11) NOT NULL,
  PRIMARY KEY (`trash_srl`),
  KEY `idx_document_srl` (`document_srl`),
  KEY `idx_module_srl` (`module_srl`),
  KEY `idx_trash_date` (`trash_date`),
  KEY `idx_ipaddress` (`ipaddress`),
  KEY `idx_member_srl` (`member_srl`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `xe_document_voted_log`
--

CREATE TABLE IF NOT EXISTS `xe_document_voted_log` (
  `document_srl` bigint(11) NOT NULL,
  `member_srl` bigint(11) NOT NULL,
  `ipaddress` varchar(128) NOT NULL,
  `regdate` varchar(14) DEFAULT NULL,
  `point` bigint(11) NOT NULL,
  KEY `idx_document_srl` (`document_srl`),
  KEY `idx_member_srl` (`member_srl`),
  KEY `idx_ipaddress` (`ipaddress`),
  KEY `idx_regdate` (`regdate`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `xe_editor_autosave`
--

CREATE TABLE IF NOT EXISTS `xe_editor_autosave` (
  `member_srl` bigint(11) DEFAULT '0',
  `ipaddress` varchar(128) DEFAULT NULL,
  `module_srl` bigint(11) DEFAULT NULL,
  `document_srl` bigint(11) NOT NULL DEFAULT '0',
  `title` varchar(250) DEFAULT NULL,
  `content` longtext NOT NULL,
  `regdate` varchar(14) DEFAULT NULL,
  KEY `idx_member_srl` (`member_srl`),
  KEY `idx_ipaddress` (`ipaddress`),
  KEY `idx_module_srl` (`module_srl`),
  KEY `idx_regdate` (`regdate`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `xe_editor_components`
--

CREATE TABLE IF NOT EXISTS `xe_editor_components` (
  `component_name` varchar(250) NOT NULL,
  `enabled` char(1) NOT NULL DEFAULT 'N',
  `extra_vars` text,
  `list_order` bigint(11) NOT NULL,
  PRIMARY KEY (`component_name`),
  KEY `idx_list_order` (`list_order`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `xe_editor_components`
--

INSERT INTO `xe_editor_components` (`component_name`, `enabled`, `extra_vars`, `list_order`) VALUES
('colorpicker_text', 'Y', NULL, 41),
('colorpicker_bg', 'Y', NULL, 43),
('emoticon', 'Y', NULL, 45),
('url_link', 'Y', NULL, 47),
('image_link', 'Y', NULL, 49),
('multimedia_link', 'Y', NULL, 51),
('quotation', 'Y', NULL, 53),
('table_maker', 'Y', NULL, 55),
('poll_maker', 'Y', NULL, 57),
('image_gallery', 'Y', NULL, 59);

-- --------------------------------------------------------

--
-- Table structure for table `xe_editor_components_site`
--

CREATE TABLE IF NOT EXISTS `xe_editor_components_site` (
  `site_srl` bigint(11) NOT NULL DEFAULT '0',
  `component_name` varchar(250) NOT NULL,
  `enabled` char(1) NOT NULL DEFAULT 'N',
  `extra_vars` text,
  `list_order` bigint(11) NOT NULL,
  UNIQUE KEY `unique_component_site` (`site_srl`,`component_name`),
  KEY `idx_list_order` (`list_order`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `xe_files`
--

CREATE TABLE IF NOT EXISTS `xe_files` (
  `file_srl` bigint(11) NOT NULL,
  `upload_target_srl` bigint(11) NOT NULL DEFAULT '0',
  `upload_target_type` char(3) DEFAULT NULL,
  `sid` varchar(60) DEFAULT NULL,
  `module_srl` bigint(11) NOT NULL DEFAULT '0',
  `member_srl` bigint(11) NOT NULL,
  `download_count` bigint(11) NOT NULL DEFAULT '0',
  `direct_download` char(1) NOT NULL DEFAULT 'N',
  `source_filename` varchar(250) DEFAULT NULL,
  `uploaded_filename` varchar(250) DEFAULT NULL,
  `file_size` bigint(11) NOT NULL DEFAULT '0',
  `comment` varchar(250) DEFAULT NULL,
  `isvalid` char(1) DEFAULT 'N',
  `regdate` varchar(14) DEFAULT NULL,
  `ipaddress` varchar(128) NOT NULL,
  PRIMARY KEY (`file_srl`),
  KEY `idx_upload_target_srl` (`upload_target_srl`),
  KEY `idx_upload_target_type` (`upload_target_type`),
  KEY `idx_module_srl` (`module_srl`),
  KEY `idx_member_srl` (`member_srl`),
  KEY `idx_download_count` (`download_count`),
  KEY `idx_file_size` (`file_size`),
  KEY `idx_is_valid` (`isvalid`),
  KEY `idx_regdate` (`regdate`),
  KEY `idx_ipaddress` (`ipaddress`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `xe_files`
--

INSERT INTO `xe_files` (`file_srl`, `upload_target_srl`, `upload_target_type`, `sid`, `module_srl`, `member_srl`, `download_count`, `direct_download`, `source_filename`, `uploaded_filename`, `file_size`, `comment`, `isvalid`, `regdate`, `ipaddress`) VALUES
(149, 148, NULL, '2882b1c153626b4a931f711800b2adf9', 146, 4, 0, 'Y', 'Penguins.jpg', './files/attach/images/146/148/0b70b47f15ce1e9ab477249aef986904.jpg', 777835, NULL, 'Y', '20130612141612', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `xe_lang`
--

CREATE TABLE IF NOT EXISTS `xe_lang` (
  `site_srl` bigint(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lang_code` varchar(10) NOT NULL,
  `value` text,
  KEY `idx_lang` (`site_srl`,`name`,`lang_code`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `xe_layouts`
--

CREATE TABLE IF NOT EXISTS `xe_layouts` (
  `layout_srl` bigint(12) NOT NULL,
  `site_srl` bigint(11) NOT NULL DEFAULT '0',
  `layout` varchar(250) DEFAULT NULL,
  `title` varchar(250) DEFAULT NULL,
  `extra_vars` text,
  `layout_path` varchar(250) DEFAULT NULL,
  `module_srl` bigint(12) DEFAULT '0',
  `regdate` varchar(14) DEFAULT NULL,
  `layout_type` char(1) DEFAULT 'P',
  PRIMARY KEY (`layout_srl`),
  KEY `menu_site_srl` (`site_srl`),
  KEY `idx_module_srl` (`module_srl`),
  KEY `idx_regdate` (`regdate`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `xe_layouts`
--

INSERT INTO `xe_layouts` (`layout_srl`, `site_srl`, `layout`, `title`, `extra_vars`, `layout_path`, `module_srl`, `regdate`, `layout_type`) VALUES
(64, 0, 'default', 'default', 'O:8:"stdClass":4:{s:3:"GNB";i:61;s:11:"LAYOUT_TYPE";s:9:"MAIN_PAGE";s:10:"VISUAL_USE";s:3:"YES";s:14:"menu_name_list";a:1:{i:61;s:12:"Welcome menu";}}', NULL, 0, '20130612043945', 'P'),
(65, 0, 'default', 'welcome_mobile_layout', 'O:8:"stdClass":4:{s:3:"GNB";i:61;s:11:"LAYOUT_TYPE";s:9:"MAIN_PAGE";s:10:"VISUAL_USE";s:3:"YES";s:14:"menu_name_list";a:1:{i:61;s:12:"Welcome menu";}}', NULL, 0, '20130612043945', 'M'),
(122, 0, 'xe_official', 'XE 공식 사이트 레이아웃', NULL, NULL, 0, '20130612045431', 'P'),
(123, 0, 'user_layout', '테스트 레이아웃', NULL, NULL, 0, '20130612045431', 'P'),
(178, 0, 'xecenter', '쿡래빗 XE 센터', NULL, NULL, 0, '20130612154502', 'P'),
(179, 0, 'the_bootstrap', 'The Bootstrap', NULL, NULL, 0, '20130612160309', 'P');

-- --------------------------------------------------------

--
-- Table structure for table `xe_member`
--

CREATE TABLE IF NOT EXISTS `xe_member` (
  `member_srl` bigint(11) NOT NULL,
  `user_id` varchar(80) NOT NULL,
  `email_address` varchar(250) NOT NULL,
  `password` varchar(60) NOT NULL,
  `email_id` varchar(80) NOT NULL,
  `email_host` varchar(160) DEFAULT NULL,
  `user_name` varchar(40) NOT NULL,
  `nick_name` varchar(40) NOT NULL,
  `find_account_question` bigint(11) DEFAULT NULL,
  `find_account_answer` varchar(250) DEFAULT NULL,
  `homepage` varchar(250) DEFAULT NULL,
  `blog` varchar(250) DEFAULT NULL,
  `birthday` char(8) DEFAULT NULL,
  `allow_mailing` char(1) NOT NULL DEFAULT 'Y',
  `allow_message` char(1) NOT NULL DEFAULT 'Y',
  `denied` char(1) DEFAULT 'N',
  `limit_date` varchar(14) DEFAULT NULL,
  `regdate` varchar(14) DEFAULT NULL,
  `last_login` varchar(14) DEFAULT NULL,
  `change_password_date` varchar(14) DEFAULT NULL,
  `is_admin` char(1) DEFAULT 'N',
  `description` text,
  `extra_vars` text,
  `list_order` bigint(11) NOT NULL,
  PRIMARY KEY (`member_srl`),
  UNIQUE KEY `unique_user_id` (`user_id`),
  UNIQUE KEY `unique_email_address` (`email_address`),
  UNIQUE KEY `unique_nick_name` (`nick_name`),
  KEY `idx_email_host` (`email_host`),
  KEY `idx_allow_mailing` (`allow_mailing`),
  KEY `idx_is_denied` (`denied`),
  KEY `idx_regdate` (`regdate`),
  KEY `idx_last_login` (`last_login`),
  KEY `idx_is_admin` (`is_admin`),
  KEY `idx_list_order` (`list_order`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `xe_member`
--

INSERT INTO `xe_member` (`member_srl`, `user_id`, `email_address`, `password`, `email_id`, `email_host`, `user_name`, `nick_name`, `find_account_question`, `find_account_answer`, `homepage`, `blog`, `birthday`, `allow_mailing`, `allow_message`, `denied`, `limit_date`, `regdate`, `last_login`, `change_password_date`, `is_admin`, `description`, `extra_vars`, `list_order`) VALUES
(4, 'kcca', 'admin@kcca.org.au', '15fcd1f71c6973dc598879557ee41448', 'admin', 'kcca.org.au', 'admin', 'kcca admin', NULL, NULL, '', '', NULL, 'N', 'Y', 'N', NULL, '20130612043944', '20130612052839', '20130612043944', 'Y', NULL, NULL, -4);

-- --------------------------------------------------------

--
-- Table structure for table `xe_member_auth_mail`
--

CREATE TABLE IF NOT EXISTS `xe_member_auth_mail` (
  `auth_key` varchar(60) NOT NULL,
  `member_srl` bigint(11) NOT NULL,
  `user_id` varchar(80) NOT NULL,
  `new_password` varchar(80) NOT NULL,
  `is_register` char(1) DEFAULT 'N',
  `regdate` varchar(14) DEFAULT NULL,
  UNIQUE KEY `unique_key` (`auth_key`,`member_srl`),
  KEY `idx_regdate` (`regdate`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `xe_member_autologin`
--

CREATE TABLE IF NOT EXISTS `xe_member_autologin` (
  `autologin_key` varchar(80) NOT NULL,
  `member_srl` bigint(11) NOT NULL,
  UNIQUE KEY `unique_key` (`autologin_key`,`member_srl`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `xe_member_count_history`
--

CREATE TABLE IF NOT EXISTS `xe_member_count_history` (
  `member_srl` bigint(11) NOT NULL,
  `content` longtext NOT NULL,
  `last_update` varchar(14) DEFAULT NULL,
  PRIMARY KEY (`member_srl`),
  KEY `idx_last_update` (`last_update`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `xe_member_denied_nick_name`
--

CREATE TABLE IF NOT EXISTS `xe_member_denied_nick_name` (
  `nick_name` varchar(80) NOT NULL,
  `regdate` varchar(14) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`nick_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `xe_member_denied_user_id`
--

CREATE TABLE IF NOT EXISTS `xe_member_denied_user_id` (
  `user_id` varchar(80) NOT NULL,
  `regdate` varchar(14) DEFAULT NULL,
  `description` text,
  `list_order` bigint(11) NOT NULL,
  PRIMARY KEY (`user_id`),
  KEY `idx_list_order` (`list_order`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `xe_member_denied_user_id`
--

INSERT INTO `xe_member_denied_user_id` (`user_id`, `regdate`, `description`, `list_order`) VALUES
('addon', '20130612043945', '', -5),
('admin', '20130612043945', '', -6),
('adminlogging', '20130612043945', '', -7),
('autoinstall', '20130612043945', '', -8),
('comment', '20130612043945', '', -9),
('communication', '20130612043945', '', -10),
('counter', '20130612043945', '', -11),
('document', '20130612043945', '', -12),
('editor', '20130612043945', '', -13),
('file', '20130612043945', '', -14),
('importer', '20130612043945', '', -15),
('install', '20130612043945', '', -16),
('integration_search', '20130612043945', '', -17),
('krzip', '20130612043945', '', -18),
('layout', '20130612043945', '', -19),
('member', '20130612043945', '', -20),
('menu', '20130612043945', '', -21),
('message', '20130612043945', '', -22),
('module', '20130612043945', '', -23),
('page', '20130612043945', '', -24),
('point', '20130612043945', '', -25),
('poll', '20130612043945', '', -26),
('rss', '20130612043945', '', -27),
('session', '20130612043945', '', -28),
('spamfilter', '20130612043945', '', -29),
('syndication', '20130612043945', '', -30),
('tag', '20130612043945', '', -31),
('trackback', '20130612043945', '', -32),
('trash', '20130612043945', '', -33),
('widget', '20130612043945', '', -34),
('www', '20130612043945', '', -35),
('root', '20130612043945', '', -36),
('administrator', '20130612043945', '', -37),
('telnet', '20130612043945', '', -38),
('ftp', '20130612043945', '', -39),
('http', '20130612043945', '', -40);

-- --------------------------------------------------------

--
-- Table structure for table `xe_member_friend`
--

CREATE TABLE IF NOT EXISTS `xe_member_friend` (
  `friend_srl` bigint(11) NOT NULL,
  `friend_group_srl` bigint(11) NOT NULL DEFAULT '0',
  `member_srl` bigint(11) NOT NULL,
  `target_srl` bigint(11) NOT NULL,
  `list_order` bigint(11) NOT NULL,
  `regdate` varchar(14) DEFAULT NULL,
  PRIMARY KEY (`friend_srl`),
  KEY `idx_friend_group_srl` (`friend_group_srl`),
  KEY `idx_member_srl` (`member_srl`),
  KEY `idx_target_srl` (`target_srl`),
  KEY `idx_list_order` (`list_order`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `xe_member_friend_group`
--

CREATE TABLE IF NOT EXISTS `xe_member_friend_group` (
  `friend_group_srl` bigint(11) NOT NULL,
  `member_srl` bigint(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `regdate` varchar(14) DEFAULT NULL,
  PRIMARY KEY (`friend_group_srl`),
  KEY `index_owner_member_srl` (`member_srl`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `xe_member_group`
--

CREATE TABLE IF NOT EXISTS `xe_member_group` (
  `site_srl` bigint(11) NOT NULL DEFAULT '0',
  `group_srl` bigint(11) NOT NULL,
  `list_order` bigint(11) NOT NULL,
  `title` varchar(80) NOT NULL,
  `regdate` varchar(14) DEFAULT NULL,
  `is_default` char(1) DEFAULT 'N',
  `is_admin` char(1) DEFAULT 'N',
  `image_mark` text,
  `description` text,
  PRIMARY KEY (`group_srl`),
  UNIQUE KEY `idx_site_title` (`site_srl`,`title`),
  KEY `idx_list_order` (`list_order`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `xe_member_group`
--

INSERT INTO `xe_member_group` (`site_srl`, `group_srl`, `list_order`, `title`, `regdate`, `is_default`, `is_admin`, `image_mark`, `description`) VALUES
(0, 1, 1, '관리그룹', '20130612043944', 'N', 'Y', '', 'KCCA 관리자'),
(0, 2, 2, '준회원', '20130612043944', 'Y', 'N', '', '일반 회원'),
(0, 3, 3, '정회원', '20130612043944', 'N', 'N', '', '지사, 상사 회원');

-- --------------------------------------------------------

--
-- Table structure for table `xe_member_group_member`
--

CREATE TABLE IF NOT EXISTS `xe_member_group_member` (
  `site_srl` bigint(11) NOT NULL DEFAULT '0',
  `group_srl` bigint(11) NOT NULL,
  `member_srl` bigint(11) NOT NULL,
  `regdate` varchar(14) DEFAULT NULL,
  KEY `idx_site_srl` (`site_srl`),
  KEY `idx_group_member` (`group_srl`,`member_srl`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `xe_member_group_member`
--

INSERT INTO `xe_member_group_member` (`site_srl`, `group_srl`, `member_srl`, `regdate`) VALUES
(0, 1, 4, '20130612043944');

-- --------------------------------------------------------

--
-- Table structure for table `xe_member_join_form`
--

CREATE TABLE IF NOT EXISTS `xe_member_join_form` (
  `member_join_form_srl` bigint(11) NOT NULL,
  `column_type` varchar(60) NOT NULL,
  `column_name` varchar(60) NOT NULL,
  `column_title` varchar(60) NOT NULL,
  `required` char(1) NOT NULL DEFAULT 'N',
  `default_value` text,
  `is_active` char(1) DEFAULT 'Y',
  `description` text,
  `list_order` bigint(11) NOT NULL DEFAULT '1',
  `regdate` varchar(14) DEFAULT NULL,
  PRIMARY KEY (`member_join_form_srl`),
  KEY `idx_list_order` (`list_order`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `xe_member_login_count`
--

CREATE TABLE IF NOT EXISTS `xe_member_login_count` (
  `ipaddress` varchar(128) NOT NULL,
  `count` bigint(11) NOT NULL,
  `regdate` varchar(14) DEFAULT NULL,
  `last_update` varchar(14) DEFAULT NULL,
  KEY `idx_ipaddress` (`ipaddress`),
  KEY `idx_regdate` (`regdate`),
  KEY `idx_last_update` (`last_update`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `xe_member_message`
--

CREATE TABLE IF NOT EXISTS `xe_member_message` (
  `message_srl` bigint(11) NOT NULL,
  `related_srl` bigint(11) NOT NULL,
  `sender_srl` bigint(11) NOT NULL,
  `receiver_srl` bigint(11) NOT NULL,
  `message_type` char(1) NOT NULL DEFAULT 'S',
  `title` varchar(250) NOT NULL,
  `content` text NOT NULL,
  `readed` char(1) NOT NULL DEFAULT 'N',
  `list_order` bigint(11) NOT NULL,
  `regdate` varchar(14) DEFAULT NULL,
  `readed_date` varchar(14) DEFAULT NULL,
  PRIMARY KEY (`message_srl`),
  KEY `idx_related_srl` (`related_srl`),
  KEY `idx_sender_srl` (`sender_srl`),
  KEY `idx_receiver_srl` (`receiver_srl`),
  KEY `idx_list_order` (`list_order`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `xe_member_scrap`
--

CREATE TABLE IF NOT EXISTS `xe_member_scrap` (
  `member_srl` bigint(11) NOT NULL,
  `document_srl` bigint(11) NOT NULL,
  `title` varchar(250) DEFAULT NULL,
  `user_id` varchar(80) DEFAULT NULL,
  `user_name` varchar(80) NOT NULL,
  `nick_name` varchar(80) NOT NULL,
  `target_member_srl` bigint(11) NOT NULL,
  `regdate` varchar(14) DEFAULT NULL,
  `list_order` bigint(11) NOT NULL,
  UNIQUE KEY `unique_scrap` (`member_srl`,`document_srl`),
  KEY `idx_regdate` (`regdate`),
  KEY `idx_list_order` (`list_order`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `xe_menu`
--

CREATE TABLE IF NOT EXISTS `xe_menu` (
  `menu_srl` bigint(12) NOT NULL,
  `site_srl` bigint(11) NOT NULL DEFAULT '0',
  `title` varchar(250) DEFAULT NULL,
  `listorder` bigint(11) DEFAULT '0',
  `regdate` varchar(14) DEFAULT NULL,
  PRIMARY KEY (`menu_srl`),
  KEY `menu_site_srl` (`site_srl`),
  KEY `idx_title` (`title`),
  KEY `idx_listorder` (`listorder`),
  KEY `idx_regdate` (`regdate`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `xe_menu`
--

INSERT INTO `xe_menu` (`menu_srl`, `site_srl`, `title`, `listorder`, `regdate`) VALUES
(61, 0, 'KCCA 메뉴', -61, '20130612043945'),
(70, 0, '__ADMINMENU_V17__', -70, '20130612044020'),
(127, 0, 'Temporary menu', -127, '20130612053830');

-- --------------------------------------------------------

--
-- Table structure for table `xe_menu_item`
--

CREATE TABLE IF NOT EXISTS `xe_menu_item` (
  `menu_item_srl` bigint(12) NOT NULL,
  `parent_srl` bigint(12) NOT NULL DEFAULT '0',
  `menu_srl` bigint(12) NOT NULL,
  `name` text,
  `url` varchar(250) DEFAULT NULL,
  `is_shortcut` char(1) DEFAULT 'N',
  `open_window` char(1) DEFAULT 'N',
  `expand` char(1) DEFAULT 'N',
  `normal_btn` varchar(255) DEFAULT NULL,
  `hover_btn` varchar(255) DEFAULT NULL,
  `active_btn` varchar(255) DEFAULT NULL,
  `group_srls` text,
  `listorder` bigint(11) DEFAULT '0',
  `regdate` varchar(14) DEFAULT NULL,
  PRIMARY KEY (`menu_item_srl`),
  KEY `idx_menu_srl` (`menu_srl`),
  KEY `idx_listorder` (`listorder`),
  KEY `idx_regdate` (`regdate`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `xe_menu_item`
--

INSERT INTO `xe_menu_item` (`menu_item_srl`, `parent_srl`, `menu_srl`, `name`, `url`, `is_shortcut`, `open_window`, `expand`, `normal_btn`, `hover_btn`, `active_btn`, `group_srls`, `listorder`, `regdate`) VALUES
(71, 0, 70, '{$lang->menu_gnb[''dashboard'']}', 'index.php?module=admin', 'N', 'N', 'N', NULL, NULL, NULL, NULL, -71, '20130612044020'),
(72, 0, 70, '{$lang->menu_gnb[''menu'']}', '#', 'N', 'N', 'N', NULL, NULL, NULL, NULL, -72, '20130612044020'),
(73, 0, 70, '{$lang->menu_gnb[''user'']}', '#', 'N', 'N', 'N', NULL, NULL, NULL, NULL, -73, '20130612044020'),
(74, 0, 70, '{$lang->menu_gnb[''content'']}', '#', 'N', 'N', 'N', NULL, NULL, NULL, NULL, -74, '20130612044020'),
(75, 0, 70, '{$lang->menu_gnb[''configuration'']}', '#', 'N', 'N', 'N', NULL, NULL, NULL, NULL, -75, '20130612044020'),
(76, 0, 70, '{$lang->menu_gnb[''advanced'']}', '#', 'N', 'N', 'N', NULL, NULL, NULL, NULL, -76, '20130612044020'),
(77, 72, 70, '{$lang->menu_gnb_sub[''siteMap'']}', 'index.php?module=admin&act=dispMenuAdminSiteMap', 'N', 'N', 'N', '', '', '', '1', -77, '20130612044020'),
(78, 72, 70, '{$lang->menu_gnb_sub[''siteDesign'']}', 'index.php?module=admin&act=dispMenuAdminSiteDesign', 'N', 'N', 'N', '', '', '', '1', -78, '20130612044020'),
(79, 73, 70, '{$lang->menu_gnb_sub[''userList'']}', 'index.php?module=admin&act=dispMemberAdminList', 'N', 'N', 'N', '', '', '', '1', -79, '20130612044020'),
(80, 73, 70, '{$lang->menu_gnb_sub[''userSetting'']}', 'index.php?module=admin&act=dispMemberAdminConfig', 'N', 'N', 'N', '', '', '', '1', -80, '20130612044020'),
(81, 73, 70, '{$lang->menu_gnb_sub[''userGroup'']}', 'index.php?module=admin&act=dispMemberAdminGroupList', 'N', 'N', 'N', '', '', '', '1', -81, '20130612044020'),
(82, 74, 70, '{$lang->menu_gnb_sub[''document'']}', 'index.php?module=admin&act=dispDocumentAdminList', 'N', 'N', 'N', '', '', '', '1', -82, '20130612044020'),
(83, 74, 70, '{$lang->menu_gnb_sub[''comment'']}', 'index.php?module=admin&act=dispCommentAdminList', 'N', 'N', 'N', '', '', '', '1', -83, '20130612044020'),
(84, 74, 70, '{$lang->menu_gnb_sub[''trackback'']}', 'index.php?module=admin&act=dispTrackbackAdminList', 'N', 'N', 'N', '', '', '', '1', -84, '20130612044020'),
(85, 74, 70, '{$lang->menu_gnb_sub[''file'']}', 'index.php?module=admin&act=dispFileAdminList', 'N', 'N', 'N', '', '', '', '1', -85, '20130612044020'),
(86, 74, 70, '{$lang->menu_gnb_sub[''poll'']}', 'index.php?module=admin&act=dispPollAdminList', 'N', 'N', 'N', '', '', '', '1', -86, '20130612044020'),
(87, 74, 70, '{$lang->menu_gnb_sub[''rss'']}', 'index.php?module=admin&act=dispRssAdminIndex', 'N', 'N', 'N', '', '', '', '1', -87, '20130612044020'),
(88, 74, 70, '{$lang->menu_gnb_sub[''multilingual'']}', 'index.php?module=admin&act=dispModuleAdminLangcode', 'N', 'N', 'N', '', '', '', '1', -88, '20130612044020'),
(89, 74, 70, '{$lang->menu_gnb_sub[''importer'']}', 'index.php?module=admin&act=dispImporterAdminImportForm', 'N', 'N', 'N', '', '', '', '1', -89, '20130612044020'),
(90, 74, 70, '{$lang->menu_gnb_sub[''trash'']}', 'index.php?module=admin&act=dispTrashAdminList', 'N', 'N', 'N', '', '', '', '1', -90, '20130612044020'),
(91, 76, 70, '{$lang->menu_gnb_sub[''easyInstall'']}', 'index.php?module=admin&act=dispAutoinstallAdminIndex', 'N', 'N', 'N', '', '', '', '1', -91, '20130612044020'),
(92, 76, 70, '{$lang->menu_gnb_sub[''installedLayout'']}', 'index.php?module=admin&act=dispLayoutAdminInstalledList', 'N', 'N', 'N', '', '', '', '1', -92, '20130612044020'),
(93, 76, 70, '{$lang->menu_gnb_sub[''installedModule'']}', 'index.php?module=admin&act=dispModuleAdminContent', 'N', 'N', 'N', '', '', '', '1', -93, '20130612044020'),
(94, 76, 70, '{$lang->menu_gnb_sub[''installedWidget'']}', 'index.php?module=admin&act=dispWidgetAdminDownloadedList', 'N', 'N', 'N', '', '', '', '1', -94, '20130612044020'),
(95, 76, 70, '{$lang->menu_gnb_sub[''installedAddon'']}', 'index.php?module=admin&act=dispAddonAdminIndex', 'N', 'N', 'N', '', '', '', '1', -95, '20130612044020'),
(96, 76, 70, '{$lang->menu_gnb_sub[''editor'']}', 'index.php?module=admin&act=dispEditorAdminIndex', 'N', 'N', 'N', '', '', '', '1', -96, '20130612044020'),
(97, 74, 70, '{$lang->menu_gnb_sub[''spamFilter'']}', 'index.php?module=admin&act=dispSpamfilterAdminDeniedIPList', 'N', 'N', 'N', '', '', '', '1', -97, '20130612044020'),
(98, 75, 70, '{$lang->menu_gnb_sub[''adminConfigurationGeneral'']}', 'index.php?module=admin&act=dispAdminConfigGeneral', 'N', 'N', 'N', '', '', '', '1', -98, '20130612044020'),
(99, 75, 70, '{$lang->menu_gnb_sub[''adminConfigurationFtp'']}', 'index.php?module=admin&act=dispAdminConfigFtp', 'N', 'N', 'N', '', '', '', '1', -99, '20130612044020'),
(100, 75, 70, '{$lang->menu_gnb_sub[''adminMenuSetup'']}', 'index.php?module=admin&act=dispAdminSetup', 'N', 'N', 'N', '', '', '', '1', -100, '20130612044020'),
(101, 75, 70, '{$lang->menu_gnb_sub[''fileUpload'']}', 'index.php?module=admin&act=dispFileAdminConfig', 'N', 'N', 'N', '', '', '', '1', -101, '20130612044020'),
(102, 75, 70, '{$lang->menu_gnb_sub[''filebox'']}', 'index.php?module=admin&act=dispModuleAdminFileBox', 'N', 'N', 'N', '', '', '', '1', -102, '20130612044020'),
(103, 73, 70, '{$lang->menu_gnb_sub[''point'']}', 'index.php?module=admin&act=dispPointAdminConfig', 'N', 'N', 'N', '', '', '', '1', -103, '20130612044020'),
(113, 0, 61, '갤러리', 'page_qaza80', 'N', 'N', 'N', NULL, NULL, NULL, NULL, -120, '20130612045120'),
(115, 0, 61, '자료실', 'page_dBky94', 'N', 'N', 'N', NULL, NULL, NULL, NULL, -121, '20130612045134'),
(117, 0, 61, '커뮤니티', 'page_tNLL11', 'N', 'N', 'N', NULL, NULL, NULL, NULL, -123, '20130612045151'),
(135, 0, 61, 'KCCA 소개', 'AboutKCCA', 'N', 'N', 'N', NULL, NULL, NULL, NULL, -63, '20130612055859'),
(136, 0, 61, '협회 활동', 'KccaActivity', 'N', 'N', 'N', NULL, NULL, NULL, NULL, -66, '20130612100505'),
(133, 75, 70, '{$lang->menu_gnb_sub[''board'']}', 'index.php?module=admin&act=dispBoardAdminContent', 'N', 'N', 'N', '', '', '', '1', -112, '20130612055249'),
(128, 117, 61, '공지사항', 'Notice', 'N', 'N', 'N', NULL, NULL, NULL, NULL, 0, '20130612053830'),
(147, 113, 61, '골프갤러리', 'GolfGallery', 'N', 'N', 'N', NULL, NULL, NULL, NULL, -1, '20130612141501'),
(152, 113, 61, '정기행사갤러리', 'EventGallery', 'N', 'N', 'N', NULL, NULL, NULL, NULL, 0, '20130612142317'),
(154, 115, 61, '공개자료', 'PublicData', 'N', 'N', 'N', NULL, NULL, NULL, NULL, 0, '20130612142439'),
(156, 115, 61, '비공개자료', 'PrivateData', 'N', 'N', 'N', NULL, NULL, NULL, NULL, -1, '20130612142555'),
(158, 117, 61, '자유게시판', 'FreeBoard', 'N', 'N', 'N', NULL, NULL, NULL, NULL, -1, '20130612142924'),
(173, 135, 61, '협회회원', 'http://localhost/kcca/xe/AboutKCCA/140', 'Y', 'N', 'N', NULL, NULL, NULL, NULL, -173, '20130612151752'),
(172, 135, 61, '협회소개', 'http://localhost/kcca/xe/AboutKCCA/138', 'Y', 'N', 'N', NULL, NULL, NULL, NULL, -172, '20130612151707'),
(168, 135, 61, '인사말', 'http://localhost/kcca/xe/AboutKCCA/136', 'Y', 'N', 'N', NULL, NULL, NULL, NULL, -168, '20130612151531');

-- --------------------------------------------------------

--
-- Table structure for table `xe_menu_layout`
--

CREATE TABLE IF NOT EXISTS `xe_menu_layout` (
  `menu_srl` bigint(12) NOT NULL,
  `layout_srl` bigint(12) NOT NULL,
  PRIMARY KEY (`menu_srl`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `xe_modules`
--

CREATE TABLE IF NOT EXISTS `xe_modules` (
  `module_srl` bigint(11) NOT NULL,
  `module` varchar(80) NOT NULL,
  `module_category_srl` bigint(11) DEFAULT '0',
  `layout_srl` bigint(11) DEFAULT '0',
  `use_mobile` char(1) DEFAULT 'N',
  `mlayout_srl` bigint(11) DEFAULT '0',
  `menu_srl` bigint(11) DEFAULT '0',
  `site_srl` bigint(11) NOT NULL DEFAULT '0',
  `mid` varchar(40) NOT NULL,
  `is_skin_fix` char(1) NOT NULL DEFAULT 'Y',
  `skin` varchar(250) DEFAULT NULL,
  `is_mskin_fix` char(1) NOT NULL DEFAULT 'Y',
  `mskin` varchar(250) DEFAULT NULL,
  `browser_title` varchar(250) NOT NULL,
  `description` text,
  `is_default` char(1) NOT NULL DEFAULT 'N',
  `content` longtext,
  `mcontent` longtext,
  `open_rss` char(1) NOT NULL DEFAULT 'Y',
  `header_text` text,
  `footer_text` text,
  `regdate` varchar(14) DEFAULT NULL,
  PRIMARY KEY (`module_srl`),
  UNIQUE KEY `idx_site_mid` (`site_srl`,`mid`),
  KEY `idx_module` (`module`),
  KEY `idx_module_category` (`module_category_srl`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `xe_modules`
--

INSERT INTO `xe_modules` (`module_srl`, `module`, `module_category_srl`, `layout_srl`, `use_mobile`, `mlayout_srl`, `menu_srl`, `site_srl`, `mid`, `is_skin_fix`, `skin`, `is_mskin_fix`, `mskin`, `browser_title`, `description`, `is_default`, `content`, `mcontent`, `open_rss`, `header_text`, `footer_text`, `regdate`) VALUES
(112, 'page', 0, -1, 'N', -1, 61, 0, 'page_qaza80', 'N', NULL, 'N', NULL, '갤러리', NULL, 'N', NULL, NULL, 'Y', NULL, NULL, '20130612045120'),
(114, 'page', 0, -1, 'N', -1, 61, 0, 'page_dBky94', 'N', NULL, 'N', NULL, '자료실', NULL, 'N', NULL, NULL, 'Y', NULL, NULL, '20130612045134'),
(116, 'page', 0, -1, 'N', -1, 61, 0, 'page_tNLL11', 'N', '/USE_DEFAULT/', 'N', '/USE_DEFAULT/', '커뮤니티', '', 'N', NULL, NULL, 'Y', '', '', '20130612045151'),
(126, 'board', 0, -1, 'Y', -1, 61, 0, 'Notice', 'Y', 'default', 'N', '/USE_DEFAULT/', '공지사항', '', 'N', NULL, NULL, 'Y', '', '', '20130612053830'),
(134, 'board', 0, -1, 'Y', -1, 61, 0, 'AboutKCCA', 'Y', 'default', 'N', '/USE_DEFAULT/', 'KCCA 소개', '', 'N', NULL, NULL, 'Y', '', '', '20130612055859'),
(142, 'board', 0, -1, 'N', 0, 61, 0, 'KccaActivity', 'Y', 'default', 'N', '/USE_DEFAULT/', '협회 활동', '', 'N', NULL, NULL, 'Y', '', '', '20130612100505'),
(146, 'board', 0, -1, 'N', -1, 61, 0, 'GolfGallery', 'Y', 'xe_2010_gallery', 'N', '/USE_DEFAULT/', '골프갤러리', '', 'N', NULL, NULL, 'Y', '', '', '20130612141501'),
(151, 'board', 0, -1, 'N', -1, 61, 0, 'EventGallery', 'Y', 'xe_2010_gallery', 'N', '/USE_DEFAULT/', '정기행사갤러리', '', 'N', NULL, NULL, 'Y', '', '', '20130612142317'),
(153, 'board', 0, -1, 'N', 0, 61, 0, 'PublicData', 'N', '/USE_DEFAULT/', 'N', '/USE_DEFAULT/', '공개자료', '', 'N', NULL, NULL, 'Y', '', '', '20130612142439'),
(155, 'board', 0, -1, 'N', 0, 61, 0, 'PrivateData', 'N', '/USE_DEFAULT/', 'N', '/USE_DEFAULT/', '비공개자료', '', 'N', NULL, NULL, 'Y', '', '', '20130612142555'),
(157, 'board', 0, -1, 'N', 0, 61, 0, 'FreeBoard', 'Y', 'default', 'N', '/USE_DEFAULT/', '자유게시판', '', 'N', NULL, NULL, 'Y', '', '', '20130612142924');

-- --------------------------------------------------------

--
-- Table structure for table `xe_module_admins`
--

CREATE TABLE IF NOT EXISTS `xe_module_admins` (
  `module_srl` bigint(11) NOT NULL,
  `member_srl` bigint(11) NOT NULL,
  `regdate` varchar(14) DEFAULT NULL,
  UNIQUE KEY `unique_module_admin` (`module_srl`,`member_srl`),
  KEY `idx_regdate` (`regdate`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `xe_module_categories`
--

CREATE TABLE IF NOT EXISTS `xe_module_categories` (
  `module_category_srl` bigint(11) NOT NULL DEFAULT '0',
  `title` varchar(250) DEFAULT NULL,
  `regdate` varchar(14) DEFAULT NULL,
  PRIMARY KEY (`module_category_srl`),
  KEY `idx_regdate` (`regdate`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `xe_module_config`
--

CREATE TABLE IF NOT EXISTS `xe_module_config` (
  `module` varchar(250) NOT NULL,
  `site_srl` bigint(11) NOT NULL,
  `config` text,
  `regdate` varchar(14) DEFAULT NULL,
  PRIMARY KEY (`module`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `xe_module_config`
--

INSERT INTO `xe_module_config` (`module`, `site_srl`, `config`, `regdate`) VALUES
('comment', 0, 'b:0;', '20130612043943'),
('editor', 0, 'b:0;', '20130612043943'),
('file', 0, 'O:8:"stdClass":3:{s:16:"allowed_filesize";s:1:"2";s:19:"allowed_attach_size";s:1:"2";s:17:"allowed_filetypes";s:3:"*.*";}', '20130612043944'),
('layout', 0, 'N;', '20130612043943'),
('point', 0, 'O:8:"stdClass":21:{s:9:"max_level";i:30;s:10:"level_step";a:30:{i:1;i:90;i:2;i:360;i:3;i:810;i:4;i:1440;i:5;i:2250;i:6;i:3240;i:7;i:4410;i:8;i:5760;i:9;i:7290;i:10;i:9000;i:11;i:10890;i:12;i:12960;i:13;i:15210;i:14;i:17640;i:15;i:20250;i:16;i:23040;i:17;i:26010;i:18;i:29160;i:19;i:32490;i:20;i:36000;i:21;i:39690;i:22;i:43560;i:23;i:47610;i:24;i:51840;i:25;i:56250;i:26;i:60840;i:27;i:65610;i:28;i:70560;i:29;i:75690;i:30;i:81000;}s:12:"signup_point";i:10;s:11:"login_point";i:5;s:10:"point_name";s:5:"point";s:10:"level_icon";s:7:"default";s:16:"disable_download";b:0;s:15:"insert_document";i:10;s:19:"insert_document_act";s:23:"procBoardInsertDocument";s:19:"delete_document_act";s:23:"procBoardDeleteDocument";s:14:"insert_comment";i:5;s:18:"insert_comment_act";s:44:"procBoardInsertComment,procBlogInsertComment";s:18:"delete_comment_act";s:44:"procBoardDeleteComment,procBlogDeleteComment";s:11:"upload_file";i:5;s:15:"upload_file_act";s:14:"procFileUpload";s:15:"delete_file_act";s:14:"procFileDelete";s:13:"download_file";i:-5;s:17:"download_file_act";s:16:"procFileDownload";s:13:"read_document";i:0;s:5:"voted";i:0;s:6:"blamed";i:0;}', '20130612043945'),
('rss', 0, 'b:0;', '20130612043943'),
('trackback', 0, 'b:0;', '20130612043943'),
('autoinstall', 0, 'O:8:"stdClass":1:{s:14:"downloadServer";s:33:"http://download.xpressengine.com/";}', '20130612043943'),
('poll', 0, 'O:8:"stdClass":2:{s:4:"skin";s:7:"default";s:8:"colorset";s:6:"normal";}', '20130612043944'),
('member', 0, 'O:8:"stdClass":23:{s:11:"enable_join";s:1:"Y";s:13:"enable_openid";s:1:"N";s:16:"enable_auth_mail";s:1:"N";s:10:"image_name";s:1:"Y";s:10:"image_mark";s:1:"Y";s:13:"profile_image";s:1:"Y";s:20:"image_name_max_width";s:2:"90";s:21:"image_name_max_height";s:2:"20";s:20:"image_mark_max_width";s:2:"20";s:21:"image_mark_max_height";s:2:"20";s:23:"profile_image_max_width";s:2:"80";s:24:"profile_image_max_height";s:2:"80";s:16:"group_image_mark";s:1:"N";s:10:"signupForm";a:13:{i:0;O:8:"stdClass":9:{s:13:"isDefaultForm";b:1;s:4:"name";s:13:"email_address";s:5:"title";s:16:"이메일 주소";s:12:"mustRequired";b:1;s:9:"imageType";b:0;s:8:"required";b:1;s:5:"isUse";b:1;s:8:"isPublic";s:1:"Y";s:12:"isIdentifier";b:1;}i:1;O:8:"stdClass":9:{s:13:"isDefaultForm";b:1;s:4:"name";s:7:"user_id";s:5:"title";s:9:"아이디";s:12:"mustRequired";b:0;s:9:"imageType";b:0;s:8:"required";b:1;s:5:"isUse";b:1;s:8:"isPublic";s:1:"Y";s:12:"isIdentifier";b:0;}i:2;O:8:"stdClass":9:{s:13:"isDefaultForm";b:1;s:4:"name";s:8:"password";s:5:"title";s:12:"비밀번호";s:12:"mustRequired";b:1;s:9:"imageType";b:0;s:8:"required";b:1;s:5:"isUse";b:1;s:8:"isPublic";s:1:"N";s:12:"isIdentifier";b:0;}i:3;O:8:"stdClass":9:{s:13:"isDefaultForm";b:1;s:4:"name";s:9:"user_name";s:5:"title";s:6:"이름";s:12:"mustRequired";b:0;s:9:"imageType";b:0;s:8:"required";b:1;s:5:"isUse";b:1;s:8:"isPublic";s:1:"Y";s:12:"isIdentifier";b:0;}i:4;O:8:"stdClass":9:{s:13:"isDefaultForm";b:1;s:4:"name";s:9:"nick_name";s:5:"title";s:9:"닉네임";s:12:"mustRequired";b:1;s:9:"imageType";b:0;s:8:"required";b:1;s:5:"isUse";b:1;s:8:"isPublic";s:1:"Y";s:12:"isIdentifier";b:0;}i:5;O:8:"stdClass":9:{s:13:"isDefaultForm";b:1;s:4:"name";s:21:"find_account_question";s:5:"title";s:33:"비밀번호 찾기 질문/답변";s:12:"mustRequired";b:1;s:9:"imageType";b:0;s:8:"required";b:1;s:5:"isUse";b:1;s:8:"isPublic";s:1:"N";s:12:"isIdentifier";b:0;}i:6;O:8:"stdClass":9:{s:13:"isDefaultForm";b:1;s:4:"name";s:8:"homepage";s:5:"title";s:12:"홈페이지";s:12:"mustRequired";b:0;s:9:"imageType";b:0;s:8:"required";b:0;s:5:"isUse";b:1;s:8:"isPublic";s:1:"Y";s:12:"isIdentifier";b:0;}i:7;O:8:"stdClass":9:{s:13:"isDefaultForm";b:1;s:4:"name";s:4:"blog";s:5:"title";s:9:"블로그";s:12:"mustRequired";b:0;s:9:"imageType";b:0;s:8:"required";b:0;s:5:"isUse";b:1;s:8:"isPublic";s:1:"Y";s:12:"isIdentifier";b:0;}i:8;O:8:"stdClass":9:{s:13:"isDefaultForm";b:1;s:4:"name";s:8:"birthday";s:5:"title";s:6:"생일";s:12:"mustRequired";b:0;s:9:"imageType";b:0;s:8:"required";b:0;s:5:"isUse";b:1;s:8:"isPublic";s:1:"Y";s:12:"isIdentifier";b:0;}i:9;O:8:"stdClass":9:{s:13:"isDefaultForm";b:1;s:4:"name";s:9:"signature";s:5:"title";s:6:"서명";s:12:"mustRequired";b:0;s:9:"imageType";b:0;s:8:"required";b:0;s:5:"isUse";b:0;s:8:"isPublic";s:1:"N";s:12:"isIdentifier";b:0;}i:10;O:8:"stdClass":11:{s:13:"isDefaultForm";b:1;s:4:"name";s:13:"profile_image";s:5:"title";s:16:"프로필 사진";s:12:"mustRequired";b:0;s:9:"imageType";b:1;s:8:"required";b:0;s:5:"isUse";b:0;s:8:"isPublic";s:1:"N";s:12:"isIdentifier";b:0;s:9:"max_width";N;s:10:"max_height";N;}i:11;O:8:"stdClass":11:{s:13:"isDefaultForm";b:1;s:4:"name";s:10:"image_name";s:5:"title";s:16:"이미지 이름";s:12:"mustRequired";b:0;s:9:"imageType";b:1;s:8:"required";b:0;s:5:"isUse";b:0;s:8:"isPublic";s:1:"N";s:12:"isIdentifier";b:0;s:9:"max_width";N;s:10:"max_height";N;}i:12;O:8:"stdClass":11:{s:13:"isDefaultForm";b:1;s:4:"name";s:10:"image_mark";s:5:"title";s:16:"이미지 마크";s:12:"mustRequired";b:0;s:9:"imageType";b:1;s:8:"required";b:0;s:5:"isUse";b:0;s:8:"isPublic";s:1:"N";s:12:"isIdentifier";b:0;s:9:"max_width";N;s:10:"max_height";N;}}s:10:"identifier";s:13:"email_address";s:14:"webmaster_name";s:9:"webmaster";s:4:"skin";s:7:"default";s:8:"colorset";s:5:"white";s:11:"editor_skin";s:12:"xpresseditor";s:15:"max_error_count";i:10;s:20:"max_error_count_time";i:300;s:21:"signature_editor_skin";s:12:"xpresseditor";s:19:"sel_editor_colorset";s:5:"white";}', '20130612045751'),
('document', 0, 'O:8:"stdClass":1:{s:14:"thumbnail_type";s:4:"crop";}', '20130612082811'),
('module', 0, 'O:8:"stdClass":4:{s:18:"isUpdateFixedValue";b:1;s:18:"isUpdateLostModule";b:1;s:10:"htmlFooter";N;s:9:"siteTitle";s:14:"KCCA Community";}', '20130612082811');

-- --------------------------------------------------------

--
-- Table structure for table `xe_module_extend`
--

CREATE TABLE IF NOT EXISTS `xe_module_extend` (
  `parent_module` varchar(80) NOT NULL,
  `extend_module` varchar(80) NOT NULL,
  `type` varchar(15) NOT NULL,
  `kind` varchar(5) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `xe_module_extra_vars`
--

CREATE TABLE IF NOT EXISTS `xe_module_extra_vars` (
  `module_srl` bigint(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `value` text,
  UNIQUE KEY `unique_module_vars` (`module_srl`,`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `xe_module_extra_vars`
--

INSERT INTO `xe_module_extra_vars` (`module_srl`, `name`, `value`) VALUES
(157, 'list_count', '20'),
(142, 'xe_validator_id', 'modules/board/tpl/board_insert/1'),
(112, 'page_type', 'ARTICLE'),
(114, 'page_type', 'ARTICLE'),
(116, 'regdate', '20130612045151'),
(116, 'page_type', 'ARTICLE'),
(126, 'page_count', '10'),
(126, 'order_type', 'asc'),
(126, 'order_target', 'list_order'),
(126, 'regdate', '20130612053830'),
(126, 'consultation', 'N'),
(126, 'error_return_url', '/kcca/xe/index.php?module=admin&act=dispBoardAdminInsertBoard'),
(126, 'list_count', '20'),
(126, 'except_notice', 'Y'),
(126, 'hide_category', 'N'),
(126, 'list', 'no,title,nick_name,regdate,readed_count'),
(134, 'success_return_url', '/kcca/xe/index.php?module=admin&act=dispBoardAdminBoardInfo&module_srl=134'),
(134, 'search_list_count', '20'),
(134, 'ruleset', 'insertBoard'),
(134, 'page_count', '10'),
(134, 'order_type', 'asc'),
(134, 'order_target', 'list_order'),
(134, 'list_count', '20'),
(134, 'list', 'no,title,nick_name,regdate,readed_count'),
(134, 'hide_category', 'N'),
(134, 'except_notice', 'Y'),
(134, 'error_return_url', '/kcca/xe/index.php?module=admin&act=dispBoardAdminBoardInfo&module_srl=134'),
(134, 'consultation', 'N'),
(142, 'search_list_count', '20'),
(142, 'success_return_url', '/kcca/xe/index.php?module=admin&act=dispBoardAdminBoardInfo&module_srl=142'),
(142, 'use_anonymous', 'N'),
(142, 'ruleset', 'insertBoard'),
(142, 'order_target', 'list_order'),
(142, 'order_type', 'asc'),
(142, 'page_count', '10'),
(142, 'regdate', '20130612100505'),
(142, 'consultation', 'N'),
(142, 'error_return_url', '/kcca/xe/index.php?module=admin&act=dispBoardAdminBoardInfo&module_srl=142'),
(142, 'except_notice', 'Y'),
(142, 'hide_category', 'N'),
(142, 'list', 'no,title,nick_name,regdate,readed_count'),
(146, 'except_notice', 'Y'),
(146, 'list', 'no,title,nick_name,regdate,readed_count'),
(146, 'error_return_url', '/kcca/xe/index.php?mid=GolfGallery&document_srl=148&act=dispBoardAdminBoardInfo'),
(146, 'search_list_count', '20'),
(146, 'order_type', 'asc'),
(146, 'list_count', '20'),
(146, 'xe_validator_id', 'modules/board/tpl/board_insert/1'),
(151, 'use_status', 'PUBLIC'),
(151, 'regdate', '20130612142317'),
(151, 'consultation', 'N'),
(151, 'error_return_url', '/kcca/xe/index.php?module=admin&act=dispBoardAdminBoardInfo&module_srl=151'),
(151, 'except_notice', 'Y'),
(151, 'hide_category', 'N'),
(151, 'list', 'no,title,nick_name,regdate,readed_count'),
(151, 'list_count', '20'),
(151, 'order_target', 'list_order'),
(151, 'order_type', 'asc'),
(153, 'regdate', '20130612142439'),
(153, 'consultation', 'N'),
(153, 'error_return_url', '/kcca/xe/index.php?module=admin&act=dispBoardAdminBoardInfo&module_srl=153'),
(153, 'except_notice', 'Y'),
(153, 'hide_category', 'N'),
(153, 'list', 'no,title,nick_name,regdate,readed_count'),
(153, 'list_count', '20'),
(153, 'order_target', 'list_order'),
(155, 'xe_validator_id', 'modules/board/tpl/board_insert/1'),
(155, 'regdate', '20130612142555'),
(155, 'consultation', 'N'),
(155, 'error_return_url', '/kcca/xe/index.php?module=admin&act=dispBoardAdminBoardInfo&module_srl=155'),
(155, 'except_notice', 'Y'),
(155, 'hide_category', 'N'),
(155, 'list', 'no,title,nick_name,regdate,readed_count'),
(155, 'list_count', '20'),
(155, 'order_target', 'list_order'),
(155, 'order_type', 'asc'),
(155, 'page_count', '10'),
(155, 'ruleset', 'insertBoard'),
(155, 'search_list_count', '20'),
(155, 'success_return_url', '/kcca/xe/index.php?module=admin&act=dispBoardAdminBoardInfo&module_srl=155'),
(155, 'use_anonymous', 'N'),
(155, 'use_status', 'PUBLIC'),
(153, 'search_list_count', '20'),
(153, 'success_return_url', '/kcca/xe/index.php?module=admin&act=dispBoardAdminBoardInfo&module_srl=153'),
(153, 'order_type', 'asc'),
(153, 'page_count', '10'),
(153, 'ruleset', 'insertBoard'),
(151, 'use_anonymous', 'N'),
(151, 'success_return_url', '/kcca/xe/index.php?module=admin&act=dispBoardAdminBoardInfo&module_srl=151'),
(151, 'page_count', '10'),
(151, 'ruleset', 'insertBoard'),
(151, 'search_list_count', '20'),
(146, 'hide_category', 'N'),
(146, 'order_target', 'list_order'),
(146, 'ruleset', 'insertBoard'),
(146, 'success_return_url', '/kcca/xe/index.php?mid=GolfGallery&document_srl=148&act=dispBoardAdminBoardInfo'),
(142, 'list_count', '20'),
(142, 'use_status', 'PUBLIC'),
(157, 'hide_category', 'N'),
(157, 'error_return_url', '/kcca/xe/index.php?module=admin&act=dispBoardAdminBoardInfo&module_srl=157'),
(157, 'ruleset', 'insertBoard'),
(157, 'success_return_url', '/kcca/xe/index.php?module=admin&act=dispBoardAdminBoardInfo&module_srl=157'),
(157, 'xe_validator_id', 'modules/board/tpl/board_insert/1'),
(157, 'list', 'no,title,nick_name,regdate,readed_count'),
(157, 'order_target', 'list_order'),
(157, 'order_type', 'asc'),
(153, 'use_anonymous', 'N'),
(153, 'use_status', 'PUBLIC'),
(153, 'xe_validator_id', 'modules/board/tpl/board_insert/1'),
(126, 'ruleset', 'insertBoard'),
(126, 'search_list_count', '20'),
(126, 'use_anonymous', 'N'),
(126, 'use_status', 'PUBLIC'),
(126, 'xe_validator_id', 'modules/board/tpl/board_insert/1'),
(157, 'page_count', '10'),
(157, 'except_notice', 'Y'),
(157, 'use_status', 'PUBLIC'),
(157, 'use_anonymous', 'N'),
(157, 'consultation', 'N'),
(146, 'use_status', 'PUBLIC'),
(146, 'use_anonymous', 'N'),
(146, 'consultation', 'N'),
(151, 'xe_validator_id', 'modules/board/tpl/board_insert/1'),
(134, 'use_anonymous', 'N'),
(134, 'regdate', '20130612055859'),
(134, 'use_status', 'PUBLIC'),
(134, 'xe_validator_id', 'modules/board/tpl/board_insert/1'),
(157, 'search_list_count', '20'),
(146, 'page_count', '10');

-- --------------------------------------------------------

--
-- Table structure for table `xe_module_filebox`
--

CREATE TABLE IF NOT EXISTS `xe_module_filebox` (
  `module_filebox_srl` bigint(11) NOT NULL,
  `member_srl` bigint(11) NOT NULL,
  `filename` varchar(250) NOT NULL,
  `fileextension` varchar(4) NOT NULL,
  `filesize` bigint(11) NOT NULL DEFAULT '0',
  `comment` varchar(250) DEFAULT NULL,
  `regdate` varchar(14) DEFAULT NULL,
  PRIMARY KEY (`module_filebox_srl`),
  KEY `idx_member_srl` (`member_srl`),
  KEY `idx_fileextension` (`fileextension`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `xe_module_grants`
--

CREATE TABLE IF NOT EXISTS `xe_module_grants` (
  `module_srl` bigint(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `group_srl` bigint(11) NOT NULL,
  UNIQUE KEY `unique_module` (`module_srl`,`name`,`group_srl`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `xe_module_grants`
--

INSERT INTO `xe_module_grants` (`module_srl`, `name`, `group_srl`) VALUES
(126, 'access', 0),
(126, 'list', 0),
(126, 'manager', -3),
(126, 'view', 0),
(126, 'write_comment', -3),
(126, 'write_document', -3);

-- --------------------------------------------------------

--
-- Table structure for table `xe_module_locks`
--

CREATE TABLE IF NOT EXISTS `xe_module_locks` (
  `lock_name` varchar(40) NOT NULL,
  `deadline` varchar(14) DEFAULT NULL,
  `member_srl` bigint(11) DEFAULT NULL,
  UNIQUE KEY `unique_lock_name` (`lock_name`),
  KEY `idx_deadline` (`deadline`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `xe_module_mobile_skins`
--

CREATE TABLE IF NOT EXISTS `xe_module_mobile_skins` (
  `module_srl` bigint(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `value` text,
  UNIQUE KEY `unique_module_mobile_skins` (`module_srl`,`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `xe_module_part_config`
--

CREATE TABLE IF NOT EXISTS `xe_module_part_config` (
  `module` varchar(250) NOT NULL,
  `module_srl` bigint(11) NOT NULL,
  `config` text,
  `regdate` varchar(14) DEFAULT NULL,
  KEY `idx_module_part_config` (`module`,`module_srl`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `xe_module_part_config`
--

INSERT INTO `xe_module_part_config` (`module`, `module_srl`, `config`, `regdate`) VALUES
('board', 126, 'a:5:{i:0;s:2:"no";i:1;s:5:"title";i:2;s:9:"nick_name";i:3;s:7:"regdate";i:4;s:12:"readed_count";}', '20130612053830'),
('comment', 126, 'O:8:"stdClass":4:{s:13:"comment_count";i:5;s:11:"use_vote_up";s:1:"N";s:13:"use_vote_down";s:1:"N";s:22:"use_comment_validation";s:1:"N";}', '20130612054839'),
('document', 126, 'O:8:"stdClass":4:{s:11:"use_history";s:1:"N";s:11:"use_vote_up";s:1:"N";s:13:"use_vote_down";s:1:"N";s:10:"use_status";N;}', '20130612054537'),
('trackback', 126, 'O:8:"stdClass":1:{s:16:"enable_trackback";s:1:"N";}', '20130612054605'),
('board', 134, 'a:5:{i:0;s:2:"no";i:1;s:5:"title";i:2;s:9:"nick_name";i:3;s:7:"regdate";i:4;s:12:"readed_count";}', '20130612062510'),
('board', 142, 'a:5:{i:0;s:2:"no";i:1;s:5:"title";i:2;s:9:"nick_name";i:3;s:7:"regdate";i:4;s:12:"readed_count";}', '20130612142844'),
('editor', 142, 'O:8:"stdClass":19:{s:11:"editor_skin";s:12:"xpresseditor";s:19:"comment_editor_skin";s:12:"xpresseditor";s:13:"content_style";s:7:"default";s:21:"comment_content_style";s:7:"default";s:12:"content_font";N;s:17:"content_font_size";N;s:19:"sel_editor_colorset";s:5:"white";s:27:"sel_comment_editor_colorset";s:5:"white";s:17:"enable_html_grant";a:0:{}s:25:"enable_comment_html_grant";a:0:{}s:17:"upload_file_grant";a:0:{}s:25:"comment_upload_file_grant";a:0:{}s:30:"enable_default_component_grant";a:0:{}s:38:"enable_comment_default_component_grant";a:0:{}s:22:"enable_component_grant";a:0:{}s:30:"enable_comment_component_grant";a:0:{}s:13:"editor_height";i:300;s:21:"comment_editor_height";i:100;s:15:"enable_autosave";s:1:"Y";}', '20130612100929'),
('trackback', 142, 'O:8:"stdClass":1:{s:16:"enable_trackback";s:1:"N";}', '20130612100851'),
('board', 146, 'a:5:{i:0;s:2:"no";i:1;s:5:"title";i:2;s:9:"nick_name";i:3;s:7:"regdate";i:4;s:12:"readed_count";}', '20130612155027'),
('comment', 151, 'b:0;', '20130612142317'),
('document', 151, 'b:0;', '20130612142317'),
('editor', 151, 'b:0;', '20130612142317'),
('file', 151, 'b:0;', '20130612142317'),
('point', 151, 'b:0;', '20130612142317'),
('rss', 151, 'b:0;', '20130612142317'),
('trackback', 151, 'b:0;', '20130612142317'),
('board', 153, 'a:5:{i:0;s:2:"no";i:1;s:5:"title";i:2;s:9:"nick_name";i:3;s:7:"regdate";i:4;s:12:"readed_count";}', '20130612142723'),
('comment', 155, 'b:0;', '20130612142555'),
('document', 155, 'b:0;', '20130612142555'),
('editor', 155, 'b:0;', '20130612142555'),
('file', 155, 'b:0;', '20130612142555'),
('point', 155, 'b:0;', '20130612142555'),
('rss', 155, 'b:0;', '20130612142555'),
('trackback', 155, 'b:0;', '20130612142555'),
('board', 155, 'a:5:{i:0;s:2:"no";i:1;s:5:"title";i:2;s:9:"nick_name";i:3;s:7:"regdate";i:4;s:12:"readed_count";}', '20130612142701'),
('board', 151, 'a:5:{i:0;s:2:"no";i:1;s:5:"title";i:2;s:9:"nick_name";i:3;s:7:"regdate";i:4;s:12:"readed_count";}', '20130612142757'),
('board', 157, 'a:5:{i:0;s:2:"no";i:1;s:5:"title";i:2;s:9:"nick_name";i:3;s:7:"regdate";i:4;s:12:"readed_count";}', '20130612160432');

-- --------------------------------------------------------

--
-- Table structure for table `xe_module_skins`
--

CREATE TABLE IF NOT EXISTS `xe_module_skins` (
  `module_srl` bigint(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `value` text,
  UNIQUE KEY `unique_module_skins` (`module_srl`,`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `xe_module_trigger`
--

CREATE TABLE IF NOT EXISTS `xe_module_trigger` (
  `trigger_name` varchar(80) NOT NULL,
  `called_position` varchar(15) NOT NULL,
  `module` varchar(80) NOT NULL,
  `type` varchar(15) NOT NULL,
  `called_method` varchar(80) NOT NULL,
  UNIQUE KEY `idx_trigger` (`trigger_name`,`called_position`,`module`,`type`,`called_method`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `xe_module_trigger`
--

INSERT INTO `xe_module_trigger` (`trigger_name`, `called_position`, `module`, `type`, `called_method`) VALUES
('comment.deleteComment', 'after', 'file', 'controller', 'triggerCommentDeleteAttached'),
('comment.deleteComment', 'after', 'point', 'controller', 'triggerDeleteComment'),
('comment.deleteComment', 'after', 'poll', 'controller', 'triggerDeleteCommentPoll'),
('comment.insertComment', 'after', 'file', 'controller', 'triggerCommentAttachFiles'),
('comment.insertComment', 'after', 'point', 'controller', 'triggerInsertComment'),
('comment.insertComment', 'after', 'poll', 'controller', 'triggerInsertCommentPoll'),
('comment.insertComment', 'before', 'file', 'controller', 'triggerCommentCheckAttached'),
('comment.insertComment', 'before', 'spamfilter', 'controller', 'triggerInsertComment'),
('comment.updateComment', 'after', 'file', 'controller', 'triggerCommentAttachFiles'),
('comment.updateComment', 'after', 'poll', 'controller', 'triggerUpdateCommentPoll'),
('comment.updateComment', 'before', 'file', 'controller', 'triggerCommentCheckAttached'),
('comment.updateComment', 'before', 'spamfilter', 'controller', 'triggerInsertComment'),
('display', 'before', 'editor', 'controller', 'triggerEditorComponentCompile'),
('display', 'before', 'widget', 'controller', 'triggerWidgetCompile'),
('document.deleteDocument', 'after', 'comment', 'controller', 'triggerDeleteDocumentComments'),
('document.deleteDocument', 'after', 'file', 'controller', 'triggerDeleteAttached'),
('document.deleteDocument', 'after', 'point', 'controller', 'triggerDeleteDocument'),
('document.deleteDocument', 'after', 'poll', 'controller', 'triggerDeleteDocumentPoll'),
('document.deleteDocument', 'after', 'syndication', 'controller', 'triggerDeleteDocument'),
('document.deleteDocument', 'after', 'tag', 'controller', 'triggerDeleteTag'),
('document.deleteDocument', 'after', 'trackback', 'controller', 'triggerDeleteDocumentTrackbacks'),
('document.deleteDocument', 'before', 'point', 'controller', 'triggerBeforeDeleteDocument'),
('document.getDocumentMenu', 'after', 'trackback', 'controller', 'triggerSendTrackback'),
('document.insertDocument', 'after', 'editor', 'controller', 'triggerDeleteSavedDoc'),
('document.insertDocument', 'after', 'file', 'controller', 'triggerAttachFiles'),
('document.insertDocument', 'after', 'point', 'controller', 'triggerInsertDocument'),
('document.insertDocument', 'after', 'poll', 'controller', 'triggerInsertDocumentPoll'),
('document.insertDocument', 'after', 'syndication', 'controller', 'triggerInsertDocument'),
('document.insertDocument', 'after', 'tag', 'controller', 'triggerInsertTag'),
('document.insertDocument', 'before', 'file', 'controller', 'triggerCheckAttached'),
('document.insertDocument', 'before', 'spamfilter', 'controller', 'triggerInsertDocument'),
('document.insertDocument', 'before', 'tag', 'controller', 'triggerArrangeTag'),
('document.moveDocumentToTrash', 'after', 'syndication', 'controller', 'triggerMoveDocumentToTrash'),
('document.restoreTrash', 'after', 'syndication', 'controller', 'triggerRestoreTrash'),
('document.updateDocument', 'after', 'editor', 'controller', 'triggerDeleteSavedDoc'),
('document.updateDocument', 'after', 'file', 'controller', 'triggerAttachFiles'),
('document.updateDocument', 'after', 'poll', 'controller', 'triggerUpdateDocumentPoll'),
('document.updateDocument', 'after', 'syndication', 'controller', 'triggerUpdateDocument'),
('document.updateDocument', 'after', 'tag', 'controller', 'triggerInsertTag'),
('document.updateDocument', 'before', 'file', 'controller', 'triggerCheckAttached'),
('document.updateDocument', 'before', 'point', 'controller', 'triggerUpdateDocument'),
('document.updateDocument', 'before', 'spamfilter', 'controller', 'triggerInsertDocument'),
('document.updateDocument', 'before', 'tag', 'controller', 'triggerArrangeTag'),
('document.updateReadedCount', 'after', 'point', 'controller', 'triggerUpdateReadedCount'),
('document.updateVotedCount', 'after', 'point', 'controller', 'triggerUpdateVotedCount'),
('editor.deleteSavedDoc', 'after', 'file', 'controller', 'triggerDeleteAttached'),
('file.deleteFile', 'after', 'point', 'controller', 'triggerDeleteFile'),
('file.downloadFile', 'after', 'point', 'controller', 'triggerDownloadFile'),
('file.downloadFile', 'before', 'point', 'controller', 'triggerBeforeDownloadFile'),
('file.insertFile', 'after', 'point', 'controller', 'triggerInsertFile'),
('member.doLogin', 'after', 'point', 'controller', 'triggerAfterLogin'),
('member.getMemberMenu', 'after', 'board', 'controller', 'triggerMemberMenu'),
('member.insertMember', 'after', 'point', 'controller', 'triggerInsertMember'),
('menu.getModuleListInSitemap', 'after', 'board', 'model', 'triggerModuleListInSitemap'),
('module.deleteModule', 'after', 'comment', 'controller', 'triggerDeleteModuleComments'),
('module.deleteModule', 'after', 'document', 'controller', 'triggerDeleteModuleDocuments'),
('module.deleteModule', 'after', 'file', 'controller', 'triggerDeleteModuleFiles'),
('module.deleteModule', 'after', 'syndication', 'controller', 'triggerDeleteModule'),
('module.deleteModule', 'after', 'tag', 'controller', 'triggerDeleteModuleTags'),
('module.deleteModule', 'after', 'trackback', 'controller', 'triggerDeleteModuleTrackbacks'),
('module.dispAdditionSetup', 'after', 'point', 'view', 'triggerDispPointAdditionSetup'),
('module.dispAdditionSetup', 'before', 'comment', 'view', 'triggerDispCommentAdditionSetup'),
('module.dispAdditionSetup', 'before', 'document', 'view', 'triggerDispDocumentAdditionSetup'),
('module.dispAdditionSetup', 'before', 'editor', 'view', 'triggerDispEditorAdditionSetup'),
('module.dispAdditionSetup', 'before', 'file', 'view', 'triggerDispFileAdditionSetup'),
('module.dispAdditionSetup', 'before', 'rss', 'view', 'triggerDispRssAdditionSetup'),
('module.dispAdditionSetup', 'before', 'trackback', 'view', 'triggerDispTrackbackAdditionSetup'),
('module.procModuleAdminCopyModule', 'after', 'comment', 'controller', 'triggerCopyModule'),
('module.procModuleAdminCopyModule', 'after', 'document', 'controller', 'triggerCopyModule'),
('module.procModuleAdminCopyModule', 'after', 'document', 'controller', 'triggerCopyModuleExtraKeys'),
('module.procModuleAdminCopyModule', 'after', 'editor', 'controller', 'triggerCopyModule'),
('module.procModuleAdminCopyModule', 'after', 'file', 'controller', 'triggerCopyModule'),
('module.procModuleAdminCopyModule', 'after', 'point', 'controller', 'triggerCopyModule'),
('module.procModuleAdminCopyModule', 'after', 'rss', 'controller', 'triggerCopyModule'),
('module.procModuleAdminCopyModule', 'after', 'trackback', 'controller', 'triggerCopyModule'),
('moduleHandler.proc', 'after', 'rss', 'controller', 'triggerRssUrlInsert'),
('trackback.insertTrackback', 'before', 'spamfilter', 'controller', 'triggerInsertTrackback');

-- --------------------------------------------------------

--
-- Table structure for table `xe_point`
--

CREATE TABLE IF NOT EXISTS `xe_point` (
  `member_srl` bigint(11) NOT NULL,
  `point` bigint(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`member_srl`),
  KEY `idx_point` (`point`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `xe_point`
--

INSERT INTO `xe_point` (`member_srl`, `point`) VALUES
(4, 85);

-- --------------------------------------------------------

--
-- Table structure for table `xe_poll`
--

CREATE TABLE IF NOT EXISTS `xe_poll` (
  `poll_srl` bigint(11) NOT NULL,
  `stop_date` varchar(14) DEFAULT NULL,
  `upload_target_srl` bigint(11) NOT NULL,
  `poll_count` bigint(11) NOT NULL,
  `member_srl` bigint(11) NOT NULL,
  `ipaddress` varchar(128) NOT NULL,
  `regdate` varchar(14) DEFAULT NULL,
  `list_order` bigint(11) NOT NULL,
  PRIMARY KEY (`poll_srl`),
  KEY `idx_upload_target_srl` (`upload_target_srl`),
  KEY `idx_member_srl` (`member_srl`),
  KEY `idx_ipaddress` (`ipaddress`),
  KEY `idx_regdate` (`regdate`),
  KEY `idx_list_order` (`list_order`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `xe_poll_item`
--

CREATE TABLE IF NOT EXISTS `xe_poll_item` (
  `poll_item_srl` bigint(11) NOT NULL,
  `poll_srl` bigint(11) NOT NULL,
  `poll_index_srl` bigint(11) NOT NULL,
  `upload_target_srl` bigint(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `poll_count` bigint(11) NOT NULL,
  PRIMARY KEY (`poll_item_srl`),
  KEY `index_poll_srl` (`poll_srl`),
  KEY `idx_poll_index_srl` (`poll_index_srl`),
  KEY `idx_upload_target_srl` (`upload_target_srl`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `xe_poll_log`
--

CREATE TABLE IF NOT EXISTS `xe_poll_log` (
  `poll_srl` bigint(11) NOT NULL,
  `member_srl` bigint(11) NOT NULL,
  `ipaddress` varchar(128) NOT NULL,
  `regdate` varchar(14) DEFAULT NULL,
  KEY `idx_poll_srl` (`poll_srl`),
  KEY `idx_member_srl` (`member_srl`),
  KEY `idx_ipaddress` (`ipaddress`),
  KEY `idx_regdate` (`regdate`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `xe_poll_title`
--

CREATE TABLE IF NOT EXISTS `xe_poll_title` (
  `poll_srl` bigint(11) NOT NULL,
  `poll_index_srl` bigint(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `checkcount` bigint(11) NOT NULL DEFAULT '1',
  `poll_count` bigint(11) NOT NULL,
  `upload_target_srl` bigint(11) NOT NULL,
  `member_srl` bigint(11) NOT NULL,
  `ipaddress` varchar(128) NOT NULL,
  `regdate` varchar(14) DEFAULT NULL,
  `list_order` bigint(11) NOT NULL,
  KEY `idx_poll_srl` (`poll_srl`,`poll_index_srl`),
  KEY `idx_upload_target_srl` (`upload_target_srl`),
  KEY `idx_member_srl` (`member_srl`),
  KEY `idx_ipaddress` (`ipaddress`),
  KEY `idx_regdate` (`regdate`),
  KEY `idx_list_order` (`list_order`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `xe_sequence`
--

CREATE TABLE IF NOT EXISTS `xe_sequence` (
  `seq` bigint(64) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`seq`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=180 ;

--
-- Dumping data for table `xe_sequence`
--

INSERT INTO `xe_sequence` (`seq`) VALUES
(1),
(2),
(3),
(4),
(5),
(6),
(7),
(8),
(9),
(10),
(11),
(12),
(13),
(14),
(15),
(16),
(17),
(18),
(19),
(20),
(21),
(22),
(23),
(24),
(25),
(26),
(27),
(28),
(29),
(30),
(31),
(32),
(33),
(34),
(35),
(36),
(37),
(38),
(39),
(40),
(41),
(42),
(43),
(44),
(45),
(46),
(47),
(48),
(49),
(50),
(51),
(52),
(53),
(54),
(55),
(56),
(57),
(58),
(59),
(60),
(61),
(62),
(63),
(64),
(65),
(66),
(67),
(68),
(69),
(70),
(71),
(72),
(73),
(74),
(75),
(76),
(77),
(78),
(79),
(80),
(81),
(82),
(83),
(84),
(85),
(86),
(87),
(88),
(89),
(90),
(91),
(92),
(93),
(94),
(95),
(96),
(97),
(98),
(99),
(100),
(101),
(102),
(103),
(104),
(105),
(106),
(107),
(108),
(109),
(110),
(111),
(112),
(113),
(114),
(115),
(116),
(117),
(118),
(119),
(120),
(121),
(122),
(123),
(124),
(125),
(126),
(127),
(128),
(129),
(130),
(131),
(132),
(133),
(134),
(135),
(136),
(137),
(138),
(139),
(140),
(141),
(142),
(143),
(144),
(145),
(146),
(147),
(148),
(149),
(150),
(151),
(152),
(153),
(154),
(155),
(156),
(157),
(158),
(159),
(160),
(161),
(162),
(163),
(164),
(165),
(166),
(167),
(168),
(169),
(170),
(171),
(172),
(173),
(174),
(175),
(176),
(177),
(178),
(179);

-- --------------------------------------------------------

--
-- Table structure for table `xe_session`
--

CREATE TABLE IF NOT EXISTS `xe_session` (
  `session_key` varchar(255) NOT NULL,
  `member_srl` bigint(11) NOT NULL,
  `expired` varchar(14) DEFAULT NULL,
  `val` longtext,
  `ipaddress` varchar(128) NOT NULL,
  `last_update` varchar(14) DEFAULT NULL,
  `cur_mid` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`session_key`),
  KEY `idx_session_member_srl` (`member_srl`),
  KEY `idx_session_expired` (`expired`),
  KEY `idx_session_update` (`last_update`),
  KEY `idx_session_cur_mid` (`cur_mid`),
  KEY `idx_session_update_mid` (`member_srl`,`last_update`,`cur_mid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `xe_sites`
--

CREATE TABLE IF NOT EXISTS `xe_sites` (
  `site_srl` bigint(11) NOT NULL,
  `index_module_srl` bigint(11) DEFAULT '0',
  `domain` varchar(255) NOT NULL,
  `default_language` varchar(255) DEFAULT NULL,
  `regdate` varchar(14) DEFAULT NULL,
  PRIMARY KEY (`site_srl`),
  UNIQUE KEY `unique_domain` (`domain`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `xe_sites`
--

INSERT INTO `xe_sites` (`site_srl`, `index_module_srl`, `domain`, `default_language`, `regdate`) VALUES
(0, 134, 'localhost/kcca/xe/', 'ko', '20130612043942');

-- --------------------------------------------------------

--
-- Table structure for table `xe_site_admin`
--

CREATE TABLE IF NOT EXISTS `xe_site_admin` (
  `site_srl` bigint(11) NOT NULL,
  `member_srl` bigint(11) NOT NULL,
  `regdate` varchar(14) DEFAULT NULL,
  UNIQUE KEY `idx_site_admin` (`site_srl`,`member_srl`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `xe_spamfilter_denied_ip`
--

CREATE TABLE IF NOT EXISTS `xe_spamfilter_denied_ip` (
  `ipaddress` varchar(250) NOT NULL,
  `description` varchar(250) DEFAULT NULL,
  `regdate` varchar(14) DEFAULT NULL,
  PRIMARY KEY (`ipaddress`),
  KEY `idx_regdate` (`regdate`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `xe_spamfilter_denied_word`
--

CREATE TABLE IF NOT EXISTS `xe_spamfilter_denied_word` (
  `word` varchar(250) NOT NULL,
  `hit` bigint(20) NOT NULL DEFAULT '0',
  `latest_hit` varchar(14) DEFAULT NULL,
  `regdate` varchar(14) DEFAULT NULL,
  PRIMARY KEY (`word`),
  KEY `idx_hit` (`hit`),
  KEY `idx_latest_hit` (`latest_hit`),
  KEY `idx_regdate` (`regdate`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `xe_spamfilter_log`
--

CREATE TABLE IF NOT EXISTS `xe_spamfilter_log` (
  `spamfilter_log_srl` bigint(11) NOT NULL,
  `ipaddress` varchar(250) NOT NULL,
  `regdate` varchar(14) DEFAULT NULL,
  PRIMARY KEY (`spamfilter_log_srl`),
  KEY `idx_ipaddress` (`ipaddress`),
  KEY `idx_regdate` (`regdate`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `xe_syndication_except_modules`
--

CREATE TABLE IF NOT EXISTS `xe_syndication_except_modules` (
  `module_srl` bigint(11) NOT NULL,
  `regdate` varchar(14) DEFAULT NULL,
  PRIMARY KEY (`module_srl`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `xe_syndication_logs`
--

CREATE TABLE IF NOT EXISTS `xe_syndication_logs` (
  `log_srl` bigint(11) NOT NULL,
  `module_srl` bigint(11) DEFAULT '0',
  `document_srl` bigint(11) DEFAULT '0',
  `title` varchar(255) DEFAULT NULL,
  `summary` varchar(255) DEFAULT NULL,
  `regdate` varchar(14) DEFAULT NULL,
  UNIQUE KEY `primary_key` (`log_srl`),
  KEY `idx_regdate` (`regdate`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `xe_syndication_logs`
--

INSERT INTO `xe_syndication_logs` (`log_srl`, `module_srl`, `document_srl`, `title`, `summary`, `regdate`) VALUES
(159, 120, 0, NULL, NULL, '20130612144030'),
(160, 118, 0, NULL, NULL, '20130612144040'),
(161, 110, 0, NULL, NULL, '20130612144203'),
(169, 162, 0, NULL, NULL, '20130612151557'),
(170, 164, 0, NULL, NULL, '20130612151605'),
(171, 166, 0, NULL, NULL, '20130612151616'),
(174, 62, 0, NULL, NULL, '20130612151836'),
(175, 104, 0, NULL, NULL, '20130612151836'),
(176, 106, 0, NULL, NULL, '20130612151836'),
(177, 108, 0, NULL, NULL, '20130612151836');

-- --------------------------------------------------------

--
-- Table structure for table `xe_tags`
--

CREATE TABLE IF NOT EXISTS `xe_tags` (
  `tag_srl` bigint(11) NOT NULL,
  `module_srl` bigint(11) NOT NULL DEFAULT '0',
  `document_srl` bigint(11) NOT NULL DEFAULT '0',
  `tag` varchar(240) NOT NULL,
  `regdate` varchar(14) DEFAULT NULL,
  PRIMARY KEY (`tag_srl`),
  KEY `idx_module_srl` (`module_srl`),
  KEY `idx_document_srl` (`document_srl`),
  KEY `idx_regdate` (`regdate`),
  KEY `idx_tag` (`document_srl`,`tag`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `xe_trackbacks`
--

CREATE TABLE IF NOT EXISTS `xe_trackbacks` (
  `trackback_srl` bigint(11) NOT NULL,
  `module_srl` bigint(11) NOT NULL DEFAULT '0',
  `document_srl` bigint(11) NOT NULL DEFAULT '0',
  `url` varchar(250) NOT NULL,
  `title` varchar(250) NOT NULL,
  `blog_name` varchar(250) NOT NULL,
  `excerpt` text NOT NULL,
  `regdate` varchar(14) DEFAULT NULL,
  `ipaddress` varchar(128) NOT NULL,
  `list_order` bigint(11) NOT NULL,
  PRIMARY KEY (`trackback_srl`),
  KEY `idx_module_srl` (`module_srl`),
  KEY `idx_document_srl` (`document_srl`),
  KEY `idx_regdate` (`regdate`),
  KEY `idx_ipaddress` (`ipaddress`),
  KEY `idx_list_order` (`list_order`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `xe_trash`
--

CREATE TABLE IF NOT EXISTS `xe_trash` (
  `trash_srl` bigint(11) NOT NULL,
  `title` varchar(250) DEFAULT NULL,
  `origin_module` varchar(250) NOT NULL DEFAULT 'document',
  `serialized_object` longtext NOT NULL,
  `description` text,
  `ipaddress` varchar(128) NOT NULL,
  `remover_srl` bigint(11) NOT NULL,
  `regdate` varchar(14) DEFAULT NULL,
  PRIMARY KEY (`trash_srl`),
  KEY `idx_regdate` (`regdate`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
