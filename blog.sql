-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Apr 2020 pada 12.02
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `in_attempts`
--

CREATE TABLE `in_attempts` (
  `attempt_id` int(10) UNSIGNED NOT NULL,
  `attempt_type` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempt_ip` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `attempt_time` bigint(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `in_categories`
--

CREATE TABLE `in_categories` (
  `category_id` int(10) NOT NULL,
  `category_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'The category name',
  `category_slug` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Unique slug for category',
  `category_icon` tinytext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_order` int(10) UNSIGNED NOT NULL DEFAULT 100 COMMENT 'Category order, this will be used for homepage listing',
  `category_feat_at_home` tinyint(1) NOT NULL DEFAULT 1 COMMENT 'If enabled latest posts from this category will be shown on homepage',
  `created_at` bigint(20) NOT NULL DEFAULT 0,
  `updated_at` bigint(20) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `in_categories`
--

INSERT INTO `in_categories` (`category_id`, `category_name`, `category_slug`, `category_icon`, `category_order`, `category_feat_at_home`, `created_at`, `updated_at`) VALUES
(1, 'Politics', 'politics', '/site/uploads/2019/Oct/04/iconmonstr-building-35-48.png', 2, 1, 1567672266, 1570187954),
(2, 'Local', 'local', '/site/uploads/2019/Oct/04/iconmonstr-map-8-48.png', 3, 1, 1567672541, 1570187962),
(3, 'International', 'international', '/site/uploads/2019/Oct/04/iconmonstr-delivery-13-48.png', 1, 1, 1567672574, 1570187936),
(4, 'Finance', 'finance', '/site/uploads/2019/Oct/04/iconmonstr-chart-6-48.png', 4, 1, 1567672625, 1570187972),
(5, 'Sports', 'sports', '/site/uploads/2019/Oct/04/iconmonstr-soccer-1-32.png', 6, 1, 1567672636, 1570187980),
(6, 'Entertainment', 'entertainment', '/site/uploads/2019/Oct/04/iconmonstr-party-15-32.png', 7, 1, 1567672654, 1570187990),
(7, 'Lifestyle', 'lifestyle', '/site/uploads/2019/Oct/04/iconmonstr-glasses-13-32.png', 8, 1, 1567673074, 1570188004),
(8, 'Technology', 'technology', '/site/uploads/2019/Oct/04/iconmonstr-battery-10-32.png', 9, 1, 1567673155, 1570188012),
(9, 'Science', 'science', '/site/uploads/2019/Oct/04/iconmonstr-school-18-32.png', 11, 1, 1567673167, 1570188027),
(10, 'Health', 'health', '/site/uploads/2019/Oct/04/iconmonstr-medical-6-32.png', 12, 1, 1567673175, 1570188035),
(11, 'Literature', 'literature', '/site/uploads/2019/Oct/04/iconmonstr-book-17-32.png', 10, 1, 1567673277, 1570188018);

-- --------------------------------------------------------

--
-- Struktur dari tabel `in_content`
--

CREATE TABLE `in_content` (
  `content_id` int(20) UNSIGNED NOT NULL,
  `content_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_slug` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_author` int(11) NOT NULL,
  `content_body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_path` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_type` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'post',
  `content_size` bigint(20) DEFAULT 0,
  `content_mimetype` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_meta` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` bigint(20) NOT NULL DEFAULT 0,
  `updated_at` bigint(20) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `in_content`
--

INSERT INTO `in_content` (`content_id`, `content_title`, `content_slug`, `content_author`, `content_body`, `content_path`, `content_type`, `content_size`, `content_mimetype`, `content_meta`, `created_at`, `updated_at`) VALUES
(1, 'About Us', 'about-us', 1, '<p>There once was a story about a man who could turn invisible. I thought it was only a story... until it happened to me. Ok, so here\'s how it works: there\'s this stuff called <a href=\"#\">Quicksilver that can</a> bend light. Some scientist made it into a synthetic gland, and that\'s where I came in. See, I was facing life in prison and they were looking for a human experiment. So, we made a deal. They put the gland in my brain; I walk free. The operation was a success... but that\'s where everything started to go wrong.</p>\r\n\r\n<p>Marshall, Will, and Holly on a routine expedition, met the greatest earthquake ever known. High on the rapids, it struck their tiny raft! And plunged them down a thousand feet below... to the Land of the Lost! Lost! <a href=\"#\">Lost! Lost! Lost!</a></p>\r\n\r\n<p>My name is Rhoda Morgenstern. I was born in the Bronx, New York in December of 1941. I\'ve always felt responsible for World War II. The first thing I remember liking that liked me back was food. I had a bad puberty; it lasted seventeen years. I\'m a high school graduate. I went to art school. My entrance exam was on a book of matches. I decided to move out of the house when I was twenty-four. My mother still refers to this as the time I ran away from home. Eventually, I ran to Minneapolis, where it\'s cold and I figured I\'d keep better. Now I\'m back in Manhattan. New York, this is <a href=\"#\">your last chance!</a></p>\r\n\r\n<p>There\'s a holdout in the Bronx, Brooklyn\'s broken out in fights. There\'s a traffic jam in <a href=\"#\">Harlem that\'s backed</a> up to Jackson Heights. There\'s a Scout troop short a child, Khrushchev\'s due at Idelwyld... Car 54, where are you?</p>\r\n\r\n<p>Moon over Parma, bring <a href=\"#\">my love to</a> me tonight. Guide her to Cleveland, underneath your silvery light. We\'re going bowlin\' so don\'t lose her in Solon. Moon over Parma, tonight!</p>\r\n\r\n', '', 'page', 0, NULL, NULL, 1545883269, 1556338147),
(2, 'Contact Us', 'contact-us', 1, '<p>Yes, this is a generic contact us page, it may contain email links,&nbsp; or a slug based <strong>pages/contact-us.php</strong> template, idk. anything is possible</p>', '', 'page', 0, NULL, NULL, 1551429694, 1555918695),
(3, 'Terms & Conditions', 'terms', 1, '<p>Roger Ramjet and his Eagles, fighting for our freedom. Fly through and in outer space, not to <a href=\"#\">join him but</a> to beat him! When Ramjet takes a Proton pill, the crooks begin to worry. They cant escape their awful fate from Protons mighty fury! Come and join us all you kids for lots of fun and laughter, as Roger Ramjet and his men get all the crooks they\'re after! Roger Ramjet he\'s our man, hero of our nation. For his adventure just be sure and stay tuned to this station!</p>\r\n\r\n<p>What walks down stairs, alone or in pairs, and makes a slinkity sound? A spring, a spring, a marvelous thing, everyone knows it\'s Slinky. It\'s Slinky, it\'s Slinky, for fun it\'s a wonderful toy. It\'s Slinky, it\'s Slinky, it\'s fun for a girl or a boy. It\'s fun for a <a href=\"#\">girl or boy!</a></p>\r\n\r\n<p>Look for the Union Label when you are <a href=\"#\">buying a coat,</a> dress, or blouse. Remember, somewhere our union\'s sewing, our wages going to feed the kids, and run the house. We work hard, but who\'s complaining. Thanks to the I.L.G. we\'re paying our way. So always look for the Union Label. It means we\'re able to make it in the U.S.A.!</p>\r\n\r\n<p>My kinda people, my kinda place. There\'s something special about this place. Got no reason to stray too far, \'cause it\'s all right here in my own backyard! This is a Burger King town, it\'s made just for me! This is a Burger King town, we know how burgers should be! Right up the road, left at the sign. My way, your way, one at a time, hot off <a href=\"#\">the fire with</a> anything on it! And don\'t it feel good when it\'s just how you want it? This is a Burger King town, it\'s made just for me! This is a Burger King town, we know how burgers should be!</p>\r\n\r\n<p>I bet we been together for a million years, And I bet we\'ll be together for a million more. Oh, It\'s like I started breathing on the night we kissed, and I can\'t remember what I ever did before. What would we do baby, without us? What would we do baby, without us? And there ain\'t no nothing we can\'t love each other through. What would we do baby, without us? Sha <a href=\"#\">la la la.</a></p>\r\n\r\n', '', 'page', 0, NULL, NULL, 1556337990, 1556337990),
(4, 'iconmonstr-delivery-13-48', NULL, 1, '', '2019/Oct/04/iconmonstr-delivery-13-48.png', 'attachment', 16867, 'image/png', NULL, 1570187932, 1570187932),
(5, 'iconmonstr-building-35-48', NULL, 1, '', '2019/Oct/04/iconmonstr-building-35-48.png', 'attachment', 15428, 'image/png', NULL, 1570187950, 1570187950),
(6, 'iconmonstr-map-8-48', NULL, 1, '', '2019/Oct/04/iconmonstr-map-8-48.png', 'attachment', 16446, 'image/png', NULL, 1570187961, 1570187961),
(7, 'iconmonstr-chart-6-48', NULL, 1, '', '2019/Oct/04/iconmonstr-chart-6-48.png', 'attachment', 15619, 'image/png', NULL, 1570187970, 1570187970),
(8, 'iconmonstr-soccer-1-32', NULL, 1, '', '2019/Oct/04/iconmonstr-soccer-1-32.png', 'attachment', 1546, 'image/png', NULL, 1570187979, 1570187979),
(9, 'iconmonstr-party-15-32', NULL, 1, '', '2019/Oct/04/iconmonstr-party-15-32.png', 'attachment', 1126, 'image/png', NULL, 1570187989, 1570187989),
(10, 'iconmonstr-glasses-13-32', NULL, 1, '', '2019/Oct/04/iconmonstr-glasses-13-32.png', 'attachment', 837, 'image/png', NULL, 1570188003, 1570188003),
(11, 'iconmonstr-battery-10-32', NULL, 1, '', '2019/Oct/04/iconmonstr-battery-10-32.png', 'attachment', 412, 'image/png', NULL, 1570188011, 1570188011),
(12, 'iconmonstr-book-17-32', NULL, 1, '', '2019/Oct/04/iconmonstr-book-17-32.png', 'attachment', 671, 'image/png', NULL, 1570188017, 1570188017),
(13, 'iconmonstr-school-18-32', NULL, 1, '', '2019/Oct/04/iconmonstr-school-18-32.png', 'attachment', 1930, 'image/png', NULL, 1570188026, 1570188026),
(14, 'iconmonstr-medical-6-32', NULL, 1, '', '2019/Oct/04/iconmonstr-medical-6-32.png', 'attachment', 1012, 'image/png', NULL, 1570188034, 1570188034),
(15, 'inbefore-logo', NULL, 1, '', '2019/Oct/05/inbefore-logo.png', 'attachment', 22537, 'image/png', NULL, 1570261209, 1570261209);

-- --------------------------------------------------------

--
-- Struktur dari tabel `in_engines`
--

CREATE TABLE `in_engines` (
  `engine_id` int(10) UNSIGNED NOT NULL,
  `engine_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'A short name for the engine',
  `engine_cse_id` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Google CSE ID for the engine.',
  `engine_is_image` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'Choose if the result type is image or not',
  `engine_show_thumb` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'Select if thumbnails will be shown when if available (web result only)',
  `created_at` bigint(20) NOT NULL DEFAULT 0,
  `updated_at` bigint(20) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `in_engines`
--

INSERT INTO `in_engines` (`engine_id`, `engine_name`, `engine_cse_id`, `engine_is_image`, `engine_show_thumb`, `created_at`, `updated_at`) VALUES
(1, 'Web', 'partner-pub-9134522736300956:4140494421', 0, 0, 1567321259, 1567321259),
(3, 'Videos', '017868052422402550355:dtkzl6yzv74', 0, 1, 1567321259, 1567321259),
(4, 'News', 'partner-pub-9134522736300956:2425971629', 0, 1, 1567321259, 1567321259),
(5, 'Torrents', '017868052422402550355:5xcraecopso', 0, 0, 1567321259, 1567321259),
(6, 'Subtitles', '017868052422402550355:1tcfk8s8xi4', 0, 0, 1567321259, 1567321259);

-- --------------------------------------------------------

--
-- Struktur dari tabel `in_feeds`
--

CREATE TABLE `in_feeds` (
  `feed_id` int(10) UNSIGNED NOT NULL,
  `feed_category_id` int(10) NOT NULL COMMENT '@skip',
  `feed_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Feed name, for reference purpose.',
  `feed_url` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'URL to the feed.',
  `feed_logo_url` tinytext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feed_priority` int(10) UNSIGNED NOT NULL DEFAULT 0 COMMENT 'Feed priority, lower numbers will be executed early',
  `feed_max_items` int(10) NOT NULL DEFAULT 0 COMMENT 'Maximum number of items to fetch at each refresh, set this to 0 to fetch all the items.',
  `feed_fulltext_selector` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'HTML selector for fulltext ',
  `feed_fetch_fulltext` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'If enabled we will attempt to fetch full text otherwise just the excerpt.',
  `feed_auto_update` tinyint(1) NOT NULL DEFAULT 1 COMMENT 'Choose if the feed would be auto updated via cron job',
  `feed_ignore_without_image` tinyint(1) NOT NULL DEFAULT 1,
  `feed_last_refreshed` int(20) NOT NULL DEFAULT 0 COMMENT '@skip',
  `created_at` bigint(20) NOT NULL DEFAULT 0,
  `updated_at` bigint(20) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `in_options`
--

CREATE TABLE `in_options` (
  `option_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option_value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `option_autoload` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `in_options`
--

INSERT INTO `in_options` (`option_name`, `option_value`, `option_autoload`) VALUES
('active_plugins', '[\"instant-answer\"]', 1),
('active_theme', 'default', 1),
('ad_unit_1', '<div class=\"dummy-ad\" style=\"min-height:200px\">\r\n<h5>RIGHT SIDEBAR TOP AD</h5>\r\n</div>', 0),
('ad_unit_2', '<div class=\"dummy-ad mt-3 mx-0\" style=\"min-height:300px;max-width:160px\">\r\n<h5>LEFT SIDEBAR AD</h5>\r\n<p>Hidden in mobile, Best for skyscrapers.</p>\r\n</div>', 0),
('ad_unit_3', '<div class=\"dummy-ad\" style=\"min-height:60px;max-width:468px;\">\r\n<h5>468x60 AD AFTER 4 POSTS</h5>\r\n</div>', 0),
('captcha_enabled', '0', 0),
('footer_scripts', '', 1),
('google_recaptcha_secret_key', '', 0),
('google_recaptcha_site_key', '', 0),
('header_scripts', '', 1),
('site_description', 'inbefore is a automated news aggregator with Google CSE based search engine script that searches different portions of the web via Google Custom Search Engine.', 1),
('default_engine', '1', 0),
('site_email', 'admin@site.com', 1),
('site_locale', 'en_US', 0),
('site_logo', '/site/uploads/2019/Oct/05/inbefore-logo.png', 1),
('site_name', 'inbefore', 1),
('site_tagline', 'search engine, content portal, news aggretator', 1),
('smtp_auth_enabled', '1', 0),
('smtp_enabled', '', 0),
('smtp_host', 'smtp.gmail.com', 0),
('smtp_password', '', 0),
('smtp_port', '587', 0),
('smtp_username', 'user@gmail.com', 0),
('timezone', 'Asia/Dhaka', 1),
('facebook_username', '', 0),
('twitter_username', '', 0),
('youtube_username', '', 0),
('instagram_username', '', 0),
('linkedin_username', '', 0),
('facebook_app_secret', '', 0),
('facebook_app_id', '', 0),
('spark_cron_job_token', '123974460089f349ca2e', 0),
('hello_world_name', 'OK', 0),
('latest_posts_count', '50', 0),
('category_posts_count', '50', 0),
('feed_redirection', '1', 0),
('max_slider_items', '10', 0),
('search_items_count', '20', 0),
('disqus_url', '', 0),
('disqus_enabled', '0', 0),
('popular_posts_count', '5', 0),
('ad_unit_8', '<div class=\"dummy-ad mt-1 mb-4\" style=\"min-height:200px;max-width:200px\">\r\n<h5>ARTICLE AD</h5>\r\n</div>', 0),
('ad_unit_5', '<div class=\"dummy-ad mt-1 mb-0\" style=\"min-height:200px\">\r\n<h5>SEARCH SIDEBAR AD</h5>\r\n</div>', 0),
('ad_unit_6', '<div class=\"dummy-ad mt-1 mb-0\" style=\"min-height:60px\">\r\n<h5>PRE SEARCH RESULTS AD</h5>\r\n</div>', 0),
('auto_delete_posts_after', '0', 0),
('ad_unit_4', '<div class=\"dummy-ad\" style=\"min-height:200px\">\r\n<h5>RIGHT SIDEBAR BOTTOM AD</h5>\r\n</div>', 0),
('ad_unit_7', '<div class=\"dummy-ad mt-1 mb-4\" style=\"min-height:60px\">\r\n<h5>POST SEARCH RESULTS AD</h5>\r\n</div>', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `in_permissions`
--

CREATE TABLE `in_permissions` (
  `perm_id` int(10) UNSIGNED NOT NULL,
  `perm_desc` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `in_permissions`
--

INSERT INTO `in_permissions` (`perm_id`, `perm_desc`) VALUES
(1, 'access_dashboard'),
(2, 'add_user'),
(3, 'edit_user'),
(4, 'delete_user'),
(5, 'add_role'),
(6, 'edit_role'),
(7, 'delete_role'),
(8, 'change_settings'),
(9, 'manage_plugins'),
(10, 'change_user_role'),
(11, 'manage_gallery'),
(12, 'manage_pages'),
(13, 'manage_themes'),
(14, 'access_gallery'),
(15, 'change_user_status'),
(18, 'manage_categories'),
(17, 'manage_engines'),
(19, 'manage_feeds'),
(20, 'manage_posts');

-- --------------------------------------------------------

--
-- Struktur dari tabel `in_posts`
--

CREATE TABLE `in_posts` (
  `post_id` int(10) UNSIGNED NOT NULL,
  `post_category_id` int(10) UNSIGNED NOT NULL COMMENT '@skip',
  `post_feed_id` int(10) UNSIGNED NOT NULL COMMENT '@skip',
  `post_title` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Title for the post',
  `post_author` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Anonymous',
  `post_content` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Post body, HTML enabled',
  `post_excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Post excerpt',
  `post_featured_image` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Featured image URL for the post',
  `post_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'imported_post' COMMENT '@skip',
  `post_source` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Source link to the post',
  `post_hits` int(10) UNSIGNED NOT NULL DEFAULT 0 COMMENT 'Number of hits/views the post has recieved',
  `post_pubdate` bigint(20) NOT NULL DEFAULT 0 COMMENT '@skip',
  `created_at` bigint(20) NOT NULL DEFAULT 0,
  `updated_at` bigint(20) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `in_roles`
--

CREATE TABLE `in_roles` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `role_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_protected` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` bigint(20) DEFAULT 0,
  `updated_at` bigint(20) DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `in_roles`
--

INSERT INTO `in_roles` (`role_id`, `role_name`, `is_protected`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 1, 1543473719, 1567752494),
(2, 'Moderator', 1, 1543473766, 1567320523),
(3, 'User', 1, 1543473780, 1544779012);

-- --------------------------------------------------------

--
-- Struktur dari tabel `in_role_perm`
--

CREATE TABLE `in_role_perm` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `perm_id` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `in_role_perm`
--

INSERT INTO `in_role_perm` (`role_id`, `perm_id`) VALUES
(3, 1),
(1, 19),
(1, 17),
(1, 18),
(1, 15),
(1, 14),
(1, 13),
(1, 12),
(1, 11),
(1, 10),
(1, 9),
(1, 8),
(1, 7),
(1, 6),
(1, 5),
(1, 4),
(1, 20),
(1, 3),
(2, 15),
(2, 12),
(2, 11),
(2, 3),
(1, 2),
(2, 2),
(1, 1),
(2, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `in_tokens`
--

CREATE TABLE `in_tokens` (
  `token_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `token_type` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token_value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `token_expires` bigint(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `in_users`
--

CREATE TABLE `in_users` (
  `user_id` int(10) UNSIGNED NOT NULL COMMENT 'user ID',
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'user e-mail',
  `password` char(60) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'password hash',
  `username` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'unique username',
  `full_name` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'user''s legal name',
  `gender` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'user''s gender, 1 = male, 2 = female, 0 = non-binary',
  `avatar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'user''s avatar url',
  `user_ip` text COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'user''s creation IP',
  `role_id` int(10) UNSIGNED NOT NULL DEFAULT 3 COMMENT 'role ID of user',
  `is_blocked` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'user''s block status',
  `is_verified` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'whether the user is verifed or not',
  `last_seen` bigint(20) DEFAULT 0 COMMENT 'last activity timestamp',
  `created_at` bigint(20) NOT NULL DEFAULT 0 COMMENT 'when the row was created',
  `updated_at` bigint(20) DEFAULT 0 COMMENT 'when the row was last updated'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `in_users`
--

INSERT INTO `in_users` (`user_id`, `email`, `password`, `username`, `full_name`, `gender`, `avatar`, `user_ip`, `role_id`, `is_blocked`, `is_verified`, `last_seen`, `created_at`, `updated_at`) VALUES
(1, 'admin@admin.com', '$2y$10$09bdroxeJw0mgu9TuQL3q.CZzL7Wrho7/2QKfIX8Tc71L3NphcCf.', 'johndoe', 'John Doe', 1, NULL, '127.0.0.1', 1, 0, 1, 1586944882, 1532602768, 1586944882);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `in_attempts`
--
ALTER TABLE `in_attempts`
  ADD PRIMARY KEY (`attempt_id`);

--
-- Indeks untuk tabel `in_categories`
--
ALTER TABLE `in_categories`
  ADD PRIMARY KEY (`category_id`),
  ADD UNIQUE KEY `cat_slug` (`category_slug`);

--
-- Indeks untuk tabel `in_content`
--
ALTER TABLE `in_content`
  ADD PRIMARY KEY (`content_id`),
  ADD UNIQUE KEY `content_slug` (`content_slug`);

--
-- Indeks untuk tabel `in_engines`
--
ALTER TABLE `in_engines`
  ADD PRIMARY KEY (`engine_id`);

--
-- Indeks untuk tabel `in_feeds`
--
ALTER TABLE `in_feeds`
  ADD PRIMARY KEY (`feed_id`);

--
-- Indeks untuk tabel `in_options`
--
ALTER TABLE `in_options`
  ADD UNIQUE KEY `options_name_unique` (`option_name`);

--
-- Indeks untuk tabel `in_permissions`
--
ALTER TABLE `in_permissions`
  ADD PRIMARY KEY (`perm_id`),
  ADD UNIQUE KEY `perm_desc` (`perm_desc`);

--
-- Indeks untuk tabel `in_posts`
--
ALTER TABLE `in_posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indeks untuk tabel `in_roles`
--
ALTER TABLE `in_roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indeks untuk tabel `in_role_perm`
--
ALTER TABLE `in_role_perm`
  ADD KEY `role_id` (`role_id`),
  ADD KEY `perm_id` (`perm_id`);

--
-- Indeks untuk tabel `in_tokens`
--
ALTER TABLE `in_tokens`
  ADD PRIMARY KEY (`token_id`);

--
-- Indeks untuk tabel `in_users`
--
ALTER TABLE `in_users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `in_attempts`
--
ALTER TABLE `in_attempts`
  MODIFY `attempt_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `in_categories`
--
ALTER TABLE `in_categories`
  MODIFY `category_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `in_content`
--
ALTER TABLE `in_content`
  MODIFY `content_id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `in_engines`
--
ALTER TABLE `in_engines`
  MODIFY `engine_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `in_feeds`
--
ALTER TABLE `in_feeds`
  MODIFY `feed_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `in_permissions`
--
ALTER TABLE `in_permissions`
  MODIFY `perm_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `in_posts`
--
ALTER TABLE `in_posts`
  MODIFY `post_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `in_roles`
--
ALTER TABLE `in_roles`
  MODIFY `role_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `in_tokens`
--
ALTER TABLE `in_tokens`
  MODIFY `token_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `in_users`
--
ALTER TABLE `in_users`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'user ID', AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
