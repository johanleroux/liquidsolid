-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Nov 10, 2016 at 11:09 AM
-- Server version: 5.6.34
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `yffqnydv_ls`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE IF NOT EXISTS `ads` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `breed_id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `price` double(10,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `ads_user_id_foreign` (`user_id`),
  KEY `ads_breed_id_foreign` (`breed_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=56 ;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `user_id`, `breed_id`, `title`, `location`, `description`, `price`, `quantity`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 13, 'Qui labore et iusto ab.', '27126 Jace Courts Apt. 362\nFeilmouth, OR 40369-1508', 'Nesciunt consequuntur hic repellat consectetur voluptate quisquam. Mollitia pariatur et amet ea nesciunt ut dolores. Minus at eaque ducimus nemo sed culpa optio.', 1747.09, 0, '2016-11-09 16:35:41', '2016-11-09 16:02:02', '2016-11-09 16:02:02'),
(2, 2, 20, 'Necessitatibus at cumque.', '64583 Fisher Parks\nEast Blancatown, CA 90543-9184', 'Ut aperiam porro ratione et fugit vero incidunt. Maxime id dignissimos sequi cumque illo aliquam voluptatibus. Dolor sed enim officia atque assumenda alias esse aut. Est enim doloremque accusamus hic quis. Molestiae voluptatem incidunt inventore.', 19437.89, 3, '2016-11-09 16:35:41', '2016-11-10 02:44:46', NULL),
(3, 1, 16, 'Maxime quas qui.', '1461 Myrtle Points\nPort Jasper, TN 87691-6050', 'Et velit natus quam praesentium optio. Rem voluptatem rerum et atque. Rerum qui saepe et amet rem amet perspiciatis.', 21093.04, 1, '2016-11-09 16:35:41', '2016-11-10 02:41:05', '2016-11-10 02:41:05'),
(4, 3, 1, 'Suscipit ab minima.', '9757 Izabella Stream\nPort Rico, LA 17417-5294', 'Qui tempore voluptas molestiae non. Doloremque ut voluptatibus quisquam numquam dolorum ea maiores. Aut et occaecati non sunt.', 2656.61, 1, '2016-11-09 16:35:41', '2016-11-10 06:29:58', NULL),
(5, 1, 15, 'Et rerum corporis vero.', '62369 Carmel Curve Suite 738\nNorth Immanuelfort, CT 74181-1055', 'Aut dolorem esse aspernatur ex et dolor non. Omnis quasi dignissimos maxime dolor possimus tenetur. Ut omnis possimus enim sunt et. Veritatis aperiam rerum aut et qui quidem iste provident.', 20895.85, 1, '2016-11-09 16:35:41', '2016-11-10 06:28:55', '2016-11-10 06:28:55'),
(6, 3, 1, 'Quod ut omnis voluptatem.', '306 Beahan Islands Suite 250\nEast Soledad, LA 87834-7611', 'Aliquid expedita soluta magni officia. Quaerat laborum sapiente saepe nihil quisquam repudiandae eveniet. Magnam est commodi adipisci magnam. Et voluptates fugiat magni repudiandae.', 18249.31, 5, '2016-11-09 16:35:41', '2016-11-10 02:55:40', NULL),
(7, 2, 5, 'Expedita dignissimos incidunt optio.', '40621 Paxton Park\nNorth Jairo, WV 28695-8221', 'Repellat est labore cumque. Et alias possimus pariatur corrupti alias quidem quia. Sint est occaecati sit cupiditate. Vel impedit voluptatibus incidunt labore provident tempora. Architecto mollitia sit ex id consectetur quos rerum odio.', 5499.74, 8, '2016-11-09 16:35:41', '2016-11-09 16:35:41', NULL),
(8, 3, 1, 'Quidem quae sed rerum.', '5636 Briana Highway\nKuphalstad, MN 43073-3857', 'Fuga neque tempore officiis architecto. Minus deleniti ducimus nostrum eum veritatis suscipit. Enim doloremque sequi omnis qui.', 19258.53, 2, '2016-11-09 16:35:41', '2016-11-09 16:35:41', NULL),
(9, 2, 20, 'Quia aliquid beatae eius.', '5536 Moshe Forest Apt. 535\nWest Loraineville, DC 15973-7097', 'Sit velit in voluptatem. Veritatis vel ipsam impedit. Quas labore amet cupiditate id et est sed. Quia quia accusamus dolores.', 17558.10, 6, '2016-11-09 16:35:41', '2016-11-09 16:35:41', NULL),
(10, 2, 5, 'Quas reiciendis.', '97649 Wehner Valleys Apt. 430\nEast Sally, OK 83213', 'Unde eius alias voluptas quidem doloribus non reiciendis repudiandae. Aspernatur laudantium modi velit perspiciatis. Consectetur hic maiores voluptatibus vero esse ea. Impedit iusto qui consequuntur et eum.', 9788.87, 5, '2016-11-09 16:35:41', '2016-11-09 16:35:41', NULL),
(11, 1, 5, 'Qui ducimus numquam ab qui.', '67035 Laverna Spur Apt. 100\nAveryburgh, ID 85787', 'Eos ratione laborum officia sit. Facere perferendis qui quia omnis doloribus vitae. Autem nobis ipsum aut rerum rerum voluptatibus est.', 10979.10, 4, '2016-11-09 16:35:41', '2016-11-09 16:35:41', NULL),
(12, 3, 2, 'A voluptas eos odio.', '89317 Makenna Meadow Suite 095\nNew Ericshire, SD 47562-5495', 'Enim dolores non id et natus aut veritatis. Praesentium ipsam voluptatum aliquid rerum qui culpa nisi sunt. Dolorem sequi rerum molestias harum.', 5079.99, 10, '2016-11-09 16:35:41', '2016-11-09 16:35:41', NULL),
(13, 3, 20, 'Est commodi natus.', '61340 Rath Pass Suite 489\nPort Dariusbury, OR 11907-9406', 'Omnis assumenda autem fugiat dolorem accusantium accusantium perferendis. Cupiditate molestias iusto eaque nam voluptatem dolores. Repellendus nam et rerum illum non quasi. Asperiores consequuntur fuga similique natus dolores accusamus.', 10844.11, 1, '2016-11-09 16:35:41', '2016-11-09 16:35:41', NULL),
(14, 3, 15, 'Non consequatur sint.', '945 Nikolaus Trace Suite 588\nNew Clara, ID 52169-8359', 'Minus quidem sunt dignissimos possimus dolores. Aspernatur soluta aut omnis eaque sint quam. Consequatur optio velit nemo magnam doloremque non.', 20227.18, 7, '2016-11-09 16:35:41', '2016-11-09 16:35:41', NULL),
(15, 1, 5, 'Enim tenetur architecto.', '30828 Larson Mews\nSchuppebury, SD 46023-7922', 'Alias dignissimos et repellendus est et consequatur voluptatem. Porro dolores et aut sed. Qui repellendus culpa commodi enim odit rerum. Vel adipisci saepe enim voluptas aliquid nam.', 12181.10, 3, '2016-11-09 16:35:41', '2016-11-09 16:35:41', NULL),
(16, 2, 9, 'Exercitationem ut.', '2475 Berge Forge\nHauckport, ND 19261-8192', 'Enim ut nostrum voluptatum rerum illo dolorem qui sint. In omnis reiciendis unde eius. Et rerum sequi corporis nulla minus facilis quae. Dolorum aliquam quaerat maiores deserunt fugiat maiores quos velit. Quidem culpa dolores vel odit suscipit dolor.', 22972.40, 9, '2016-11-09 16:35:41', '2016-11-09 16:35:41', NULL),
(17, 3, 16, 'Qui aut excepturi.', '316 Corkery Squares\nMathewburgh, OK 18469', 'Ea dolore quisquam maiores quo ut voluptatem. Consequatur omnis corrupti commodi quia ducimus natus maxime. Voluptatum earum voluptates nihil consequatur iure aut ut. Fugiat et earum officia quos.', 14819.02, 4, '2016-11-09 16:35:41', '2016-11-09 16:35:41', NULL),
(18, 2, 19, 'Hic vel hic.', '7994 Kolby Passage Apt. 089\nNew Lewischester, NE 30363', 'Mollitia doloribus molestiae dolores temporibus et. Quisquam nam voluptas illo maxime dolorem id.', 21776.94, 9, '2016-11-09 16:35:41', '2016-11-09 16:35:41', NULL),
(19, 2, 5, 'Error et ut eum.', '58392 Paucek Fort Apt. 280\nEast Nellebury, WA 84233-0277', 'Dolorem porro enim at aut. Maxime quae eveniet fugiat aut molestiae.', 11338.09, 10, '2016-11-09 16:35:41', '2016-11-09 16:35:41', NULL),
(20, 3, 16, 'Quas quia voluptatem eos.', '69645 Sauer Lane Apt. 365\nQuentinside, CO 49873-6965', 'Culpa minima nostrum veniam totam aperiam. Saepe velit ab nemo voluptatibus in aut et. Occaecati animi consequatur ducimus ad sint. Quae nemo commodi voluptatem aperiam harum hic voluptatum.', 6839.14, 3, '2016-11-09 16:35:41', '2016-11-09 16:35:41', NULL),
(21, 1, 20, 'Quibusdam expedita explicabo.', '378 Jerde Crescent Apt. 353\nNew Maud, IL 99935-3041', 'Hic nostrum iusto rerum. Et sint consequatur cum in animi. Consequatur illum eius id repudiandae quod et porro. Et consequatur et aliquam ipsa.', 9617.02, 3, '2016-11-09 16:35:41', '2016-11-09 16:35:41', NULL),
(22, 2, 18, 'Labore incidunt nam voluptatum.', '8630 Westley Well Suite 306\nKossborough, DE 25769', 'Blanditiis qui quaerat cumque a. Quia eum atque dolores. Eaque ipsum rerum quod saepe earum qui nam.', 19382.38, 10, '2016-11-09 16:35:41', '2016-11-09 16:35:41', NULL),
(23, 2, 8, 'Dolores eaque maiores laudantium alias.', '8060 Lubowitz Stravenue Suite 612\nKrisshire, CT 75629', 'Ratione ad veniam rerum. Corrupti et eum velit dolorum ipsam autem mollitia. Nobis accusantium et culpa natus et ut.', 21672.01, 10, '2016-11-09 16:35:41', '2016-11-09 16:35:41', NULL),
(24, 3, 14, 'Non rerum harum enim.', '32848 Pollich Key Suite 523\nEast Kristytown, MI 34150', 'Est et consequatur id ea. Voluptates minus mollitia ratione expedita molestiae vitae aliquam. Quisquam autem ut perspiciatis aliquam odit officiis adipisci.', 16739.69, 4, '2016-11-09 16:35:41', '2016-11-09 16:35:41', NULL),
(25, 1, 1, 'Nobis tempore voluptatem.', '44210 Maximus Track\nLake Dallin, VA 83885-0209', 'Odit dolorem nihil vero est vero. Aut est adipisci incidunt repellendus rerum quos provident. Sapiente ut omnis sequi sit dolorem omnis dolores.', 4288.82, 4, '2016-11-09 16:35:41', '2016-11-09 16:35:41', NULL),
(26, 1, 7, 'At vero expedita fugiat.', '395 Karley Well Apt. 103\nKarliton, DC 13897-2984', 'Saepe ullam excepturi ut voluptatem sed. Ut voluptatem et consequatur facere reprehenderit qui. Est quasi ex sed. Ab rerum hic et repellendus magnam beatae.', 17795.92, 6, '2016-11-09 16:35:41', '2016-11-09 16:35:41', NULL),
(27, 2, 2, 'Aliquam et.', '99537 Gerlach Crest\nQuitzonchester, WA 15862', 'Sed vero quis officia facilis similique non voluptas. Nobis cumque officiis quos perspiciatis voluptate aut. Sed officiis eius in in.', 13537.64, 6, '2016-11-09 16:35:41', '2016-11-09 16:35:41', NULL),
(28, 2, 10, 'Reiciendis facilis labore repudiandae.', '93078 Orie Shore Apt. 665\nHoytside, NJ 57810', 'Tempore omnis ut qui aliquid laboriosam eum natus. Qui aut amet tenetur corporis id. Sed autem et blanditiis quibusdam quis maxime veniam mollitia. Accusamus sunt et fuga sint quo quis.', 16373.00, 4, '2016-11-09 16:35:41', '2016-11-09 16:35:41', NULL),
(29, 2, 20, 'Quibusdam assumenda harum.', '85288 Schaden Row\nConroyshire, MI 12859', 'Autem maiores qui qui aut. Iure minus reiciendis molestiae tempora debitis.', 24733.41, 2, '2016-11-09 16:35:41', '2016-11-09 16:35:41', NULL),
(30, 3, 20, 'Velit accusantium ut.', '26795 Emard Mews Apt. 833\nEast Jamarcus, RI 07380-3378', 'Et nam aspernatur totam est. Labore a et non quos est molestias. Molestias provident consequatur occaecati sint nulla quo.', 6791.77, 6, '2016-11-09 16:35:41', '2016-11-09 16:35:41', NULL),
(31, 3, 3, 'Molestias esse non.', '35100 Hyatt Village\nLegrostown, RI 52392', 'Asperiores molestiae consectetur tempore sequi sed. Quidem voluptas libero eum omnis sed quidem. Vero beatae dolores accusamus exercitationem eum. Est eligendi et est qui sit explicabo. Quo enim eveniet debitis.', 8329.15, 3, '2016-11-09 16:35:41', '2016-11-09 16:35:41', NULL),
(32, 1, 3, 'Illo molestiae reprehenderit.', '9981 Maddison Falls\nEast Araceliside, NM 03812-5132', 'Harum laborum laboriosam quidem dolore omnis placeat et. Ut magnam eius molestiae provident vel explicabo. At suscipit ullam qui voluptate ut id nihil.', 14981.76, 6, '2016-11-09 16:35:41', '2016-11-09 16:35:41', NULL),
(33, 1, 19, 'Id tempore omnis.', '4605 Hoppe Freeway Apt. 628\nNorth Earlfurt, MO 53001', 'Facere commodi placeat eaque quis sequi nobis temporibus. Eius quis officiis aut sed explicabo. Sed ut modi laborum ab doloribus similique et.', 14034.39, 4, '2016-11-09 16:35:41', '2016-11-09 16:35:41', NULL),
(34, 1, 7, 'Iusto aliquam molestiae.', '234 Keira Shoals Suite 618\nPort Timothy, MA 21447', 'Est pariatur officia ab ullam sunt. Aperiam assumenda atque rerum ipsum. Aperiam aut ut minus.', 16988.54, 6, '2016-11-09 16:35:41', '2016-11-09 16:35:41', NULL),
(35, 1, 3, 'Quia rerum iusto est.', '96841 Lockman Summit Suite 035\nSawaynbury, WI 51187', 'Maxime nemo omnis rerum et mollitia possimus placeat. Minus minima aut omnis libero incidunt autem qui. Et sapiente iste commodi quia.', 5545.86, 5, '2016-11-09 16:35:41', '2016-11-09 16:35:41', NULL),
(36, 2, 15, 'Vitae nam et accusamus.', '49893 Gorczany Unions Suite 228\nFlossieburgh, NJ 58413-3442', 'Consequatur optio illum ducimus necessitatibus. Sit et repudiandae et similique sunt dolores. Maxime voluptatem unde quisquam est repellat qui.', 22910.92, 4, '2016-11-09 16:35:41', '2016-11-09 16:35:41', NULL),
(37, 2, 1, 'Rerum reiciendis qui placeat.', '341 Troy Manors\nWalterland, AZ 41575', 'Consectetur dolores hic sunt reiciendis. Dolor error sed esse. Soluta fugit veritatis accusamus facilis dolorem cumque.', 3450.56, 4, '2016-11-09 16:35:41', '2016-11-09 16:35:41', NULL),
(38, 3, 7, 'Culpa aliquam commodi voluptatem.', '1244 Daniela Forks Suite 242\nKreigerstad, IA 98049-2624', 'Dolores eaque et assumenda et eveniet voluptatem sit assumenda. Est ratione dolor asperiores qui sit. Qui aliquam ipsum reiciendis dolorem. Vel sapiente harum cum enim sint et nisi.', 20507.28, 4, '2016-11-09 16:35:41', '2016-11-09 16:35:41', NULL),
(39, 1, 17, 'Et dolores exercitationem exercitationem.', '33057 Schaden Crescent\nEast Jeramiemouth, ND 91654-9452', 'Voluptatum odio rerum iure cum dignissimos tempora. Ab expedita unde iste placeat et distinctio sunt voluptate. Laudantium suscipit consequatur qui voluptatem. Odit minus consequatur doloribus alias aut voluptatem ad. Molestiae aut deserunt hic ut.', 13739.26, 5, '2016-11-09 16:35:41', '2016-11-09 16:35:41', NULL),
(40, 3, 5, 'Cumque et velit.', '894 Leffler Fall Apt. 236\nDahliaton, NV 68898', 'Aliquid id velit voluptatem adipisci. Ut rerum non porro est ut. Sint reiciendis a voluptate odio dolores ipsa iusto. Veniam hic et veritatis quis.', 24360.46, 2, '2016-11-09 16:35:41', '2016-11-09 16:35:41', NULL),
(41, 2, 12, 'Nesciunt nemo suscipit.', '1589 Macey Road\nImogeneville, IL 48973-0034', 'Illum suscipit eos ducimus. Sit quia velit voluptatem sint. Officia consequuntur in aut aliquam vel ducimus.', 9801.32, 10, '2016-11-09 16:35:41', '2016-11-09 16:35:41', NULL),
(42, 2, 13, 'Illo nesciunt voluptatibus.', '874 Wilbert Mountains Suite 329\nKassulkeshire, NE 14625-7711', 'Consequuntur repellendus recusandae quaerat est vero enim cumque. Recusandae tempore et fugit aut. Consequatur dolore aliquam non soluta. Nemo omnis aut iste alias.', 13654.59, 5, '2016-11-09 16:35:41', '2016-11-09 16:35:41', NULL),
(43, 2, 19, 'Qui voluptatem veniam.', '488 Roselyn Junctions Suite 419\nLake Jaceberg, MD 95753-8460', 'Itaque corrupti repudiandae saepe rerum blanditiis quidem dolorem assumenda. Quasi repellat et quia non omnis aspernatur. Earum a repudiandae sapiente provident officia maiores.', 6899.91, 10, '2016-11-09 16:35:41', '2016-11-09 16:35:41', NULL),
(44, 1, 3, 'Nihil assumenda id modi reprehenderit.', '1887 Frami Camp Apt. 746\nEichmannside, MI 87458-2891', 'Excepturi quam tempora quam. Perferendis dicta quod atque consequatur est expedita. Impedit harum id itaque ad delectus consequatur error ipsum. Aut explicabo distinctio blanditiis fugiat laudantium recusandae in inventore.', 7841.55, 8, '2016-11-09 16:35:41', '2016-11-09 16:35:41', NULL),
(45, 3, 15, 'Molestiae in dolore eos.', '3812 Vance Stravenue Apt. 880\nLake Alicia, MD 88406', 'Dolores eaque molestias pariatur at necessitatibus sit. Animi velit quam consequatur quis sed. At occaecati earum nulla similique qui nesciunt quas. Ex quo fugit non provident.', 7675.36, 7, '2016-11-09 16:35:41', '2016-11-09 16:35:41', NULL),
(46, 3, 9, 'Dolorum et dignissimos eligendi.', '2078 Brittany Courts\nJudgefurt, IA 86003-7614', 'Voluptate porro sapiente quaerat deleniti. Reiciendis perspiciatis necessitatibus odit consequuntur aspernatur rerum.', 10320.22, 1, '2016-11-09 16:35:41', '2016-11-09 16:35:41', NULL),
(47, 3, 18, 'Voluptas omnis mollitia.', '952 Bosco Trafficway\nEast Murielmouth, GA 13706', 'Error ea aut earum qui. Excepturi omnis odio architecto.', 17440.53, 2, '2016-11-09 16:35:41', '2016-11-09 16:35:41', NULL),
(48, 3, 2, 'Qui vero nihil.', '7527 Lincoln Street\nAbernathymouth, MA 06886', 'Qui hic porro non aut et quae. Nihil eaque sed laboriosam cumque nesciunt. Est exercitationem dolores placeat repudiandae.', 20580.14, 4, '2016-11-09 16:35:41', '2016-11-09 16:35:41', NULL),
(49, 1, 5, 'Quo repellendus et.', '12034 Darian Dam\nZulaufport, MI 53299', 'Voluptatum est aut molestiae amet qui aperiam sapiente. Voluptatem repellendus repellat aspernatur vel amet similique vero. Molestias qui non iste voluptas velit minus unde sint. Sed ipsam ipsam ut blanditiis eaque ratione et.', 20456.89, 7, '2016-11-09 16:35:41', '2016-11-09 16:35:41', NULL),
(50, 2, 2, 'Ipsam dolore corrupti.', '9616 Syble Junction\nWisozkbury, VT 75243-5812', 'Odit cumque aut molestiae et accusantium labore quasi. Sunt excepturi in non aperiam tempora. Ut error consequatur debitis. Velit eum vero nulla.', 5447.23, 5, '2016-11-09 16:35:41', '2016-11-09 16:35:41', NULL),
(52, 2, 20, 'asdf', 'asdf', 'asdf', 1234.00, -6, '2016-11-09 15:39:41', '2016-11-09 15:41:37', NULL),
(53, 2, 5, 'gfj', 'fgj', 'fghj', 15.00, 1, '2016-11-09 15:49:42', '2016-11-09 15:49:42', NULL),
(54, 2, 3, 's', 'south africa', 'hello', 100000.00, 1, '2016-11-09 15:53:29', '2016-11-09 16:01:11', '2016-11-09 16:01:11'),
(55, 2, 6, 'Demo', 'SA', 'Demo', 12000.00, 3, '2016-11-10 02:59:28', '2016-11-10 03:22:24', '2016-11-10 03:22:24');

-- --------------------------------------------------------

--
-- Table structure for table `breeder_requests`
--

CREATE TABLE IF NOT EXISTS `breeder_requests` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `notes` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `breeder_requests_user_id_foreign` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `breeder_requests`
--

INSERT INTO `breeder_requests` (`id`, `user_id`, `name`, `location`, `notes`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 27, 'ijs', 'somewhere', 'f nose', '2016-11-09 15:43:11', '2016-11-09 15:45:45', '2016-11-09 15:45:45'),
(2, 26, 'asdf', 'qwer', 'asdf', '2016-11-09 15:47:04', '2016-11-09 15:50:44', '2016-11-09 15:50:44'),
(3, 4, 'LOMEJO', 'Gauteng', 'ASDF', '2016-11-09 16:10:00', '2016-11-09 16:10:27', '2016-11-09 16:10:27'),
(4, 4, 's', 'south africa', 's', '2016-11-09 16:30:10', '2016-11-10 02:58:19', '2016-11-10 02:58:19'),
(5, 28, 'S', 'SA', '', '2016-11-10 03:28:32', '2016-11-10 03:29:00', '2016-11-10 03:29:00'),
(6, 4, 'S', 'SA', 'Hi', '2016-11-10 06:37:53', '2016-11-10 06:40:51', '2016-11-10 06:40:51');

-- --------------------------------------------------------

--
-- Table structure for table `breeds`
--

CREATE TABLE IF NOT EXISTS `breeds` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=21 ;

--
-- Dumping data for table `breeds`
--

INSERT INTO `breeds` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'vero', '2016-11-09 16:35:41', '2016-11-09 16:35:41', NULL),
(2, 'delectus', '2016-11-09 16:35:41', '2016-11-09 16:35:41', NULL),
(3, 'est', '2016-11-09 16:35:41', '2016-11-09 16:35:41', NULL),
(4, 'itaque', '2016-11-09 16:35:41', '2016-11-09 16:35:41', NULL),
(5, 'facere', '2016-11-09 16:35:41', '2016-11-09 16:35:41', NULL),
(6, 'quasi', '2016-11-09 16:35:41', '2016-11-09 16:35:41', NULL),
(7, 'aut', '2016-11-09 16:35:41', '2016-11-09 16:35:41', NULL),
(8, 'ut', '2016-11-09 16:35:41', '2016-11-09 16:35:41', NULL),
(9, 'voluptatibus', '2016-11-09 16:35:41', '2016-11-09 16:35:41', NULL),
(10, 'accusantium', '2016-11-09 16:35:41', '2016-11-09 16:35:41', NULL),
(11, 'et', '2016-11-09 16:35:41', '2016-11-09 16:35:41', NULL),
(12, 'quia', '2016-11-09 16:35:41', '2016-11-09 16:35:41', NULL),
(13, 'rem', '2016-11-09 16:35:41', '2016-11-09 16:35:41', NULL),
(14, 'qui', '2016-11-09 16:35:41', '2016-11-09 16:35:41', NULL),
(15, 'ratione', '2016-11-09 16:35:41', '2016-11-09 16:35:41', NULL),
(16, 'eligendi', '2016-11-09 16:35:41', '2016-11-09 16:35:41', NULL),
(17, 'assumenda', '2016-11-09 16:35:41', '2016-11-09 16:35:41', NULL),
(18, 'voluptate', '2016-11-09 16:35:41', '2016-11-09 16:35:41', NULL),
(19, 'id', '2016-11-09 16:35:41', '2016-11-09 16:35:41', NULL),
(20, 'voluptas', '2016-11-09 16:35:41', '2016-11-09 16:35:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE IF NOT EXISTS `carts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `payment` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `carts_user_id_foreign` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=16 ;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `payment`, `created_at`, `updated_at`) VALUES
(4, 27, NULL, '2016-11-09 15:50:56', '2016-11-09 15:50:56'),
(7, 2, NULL, '2016-11-09 16:13:12', '2016-11-09 16:13:12'),
(8, 1, NULL, '2016-11-10 02:23:22', '2016-11-10 02:23:22');

-- --------------------------------------------------------

--
-- Table structure for table `cart_items`
--

CREATE TABLE IF NOT EXISTS `cart_items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cart_id` int(10) unsigned NOT NULL,
  `ad_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cart_items_cart_id_foreign` (`cart_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=19 ;

--
-- Dumping data for table `cart_items`
--

INSERT INTO `cart_items` (`id`, `cart_id`, `ad_id`, `quantity`, `created_at`, `updated_at`) VALUES
(9, 7, 14, 1, '2016-11-09 16:13:12', '2016-11-09 16:13:12'),
(10, 8, 2, 1, '2016-11-10 02:23:22', '2016-11-10 02:23:22');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE IF NOT EXISTS `media` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `model_id` int(10) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `collection_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `disk` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `size` int(10) unsigned NOT NULL,
  `manipulations` text COLLATE utf8_unicode_ci NOT NULL,
  `custom_properties` text COLLATE utf8_unicode_ci NOT NULL,
  `order_column` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `media_model_id_model_type_index` (`model_id`,`model_type`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=62 ;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `model_id`, `model_type`, `collection_name`, `name`, `file_name`, `disk`, `size`, `manipulations`, `custom_properties`, `order_column`, `created_at`, `updated_at`) VALUES
(2, 2, 'App\\Models\\Ad', 'images', '3e9963623d8a6b9705b6b19c7dd94e6e', '3e9963623d8a6b9705b6b19c7dd94e6e.jpg', 'media', 954458, '[]', '[]', 2, '2016-11-09 16:35:43', '2016-11-09 16:35:43'),
(4, 4, 'App\\Models\\Ad', 'images', 'a69b370879591ff971f58b4e65d20c8e', 'a69b370879591ff971f58b4e65d20c8e.jpg', 'media', 1156810, '[]', '[]', 4, '2016-11-09 16:35:43', '2016-11-09 16:35:43'),
(6, 6, 'App\\Models\\Ad', 'images', 'bfe89bfe4028a369d2b101f13a86db20', 'bfe89bfe4028a369d2b101f13a86db20.jpg', 'media', 780192, '[]', '[]', 6, '2016-11-09 16:35:44', '2016-11-09 16:35:44'),
(7, 7, 'App\\Models\\Ad', 'images', 'a218d0a537e058897548d74bb6bd2b0a', 'a218d0a537e058897548d74bb6bd2b0a.jpg', 'media', 780192, '[]', '[]', 7, '2016-11-09 16:35:44', '2016-11-09 16:35:44'),
(8, 8, 'App\\Models\\Ad', 'images', '575505c2d2855fc1586cd88bac3f4957', '575505c2d2855fc1586cd88bac3f4957.jpg', 'media', 1144416, '[]', '[]', 8, '2016-11-09 16:35:45', '2016-11-09 16:35:45'),
(9, 9, 'App\\Models\\Ad', 'images', '6aae63d2fbc08932c967fe377775e734', '6aae63d2fbc08932c967fe377775e734.jpg', 'media', 742955, '[]', '[]', 9, '2016-11-09 16:35:45', '2016-11-09 16:35:45'),
(10, 10, 'App\\Models\\Ad', 'images', '221102c79123ccf0ab2f057a668dcc19', '221102c79123ccf0ab2f057a668dcc19.jpg', 'media', 874365, '[]', '[]', 10, '2016-11-09 16:35:45', '2016-11-09 16:35:45'),
(11, 11, 'App\\Models\\Ad', 'images', 'af8e85b2edd115a9562aed89943a63c5', 'af8e85b2edd115a9562aed89943a63c5.jpg', 'media', 1164789, '[]', '[]', 11, '2016-11-09 16:35:46', '2016-11-09 16:35:46'),
(12, 12, 'App\\Models\\Ad', 'images', '1fa6f5db56d30c266b648b0ce55830a9', '1fa6f5db56d30c266b648b0ce55830a9.jpg', 'media', 1164789, '[]', '[]', 12, '2016-11-09 16:35:46', '2016-11-09 16:35:46'),
(13, 13, 'App\\Models\\Ad', 'images', '929ca53932768bd9cead79958edd1cf7', '929ca53932768bd9cead79958edd1cf7.jpg', 'media', 1144416, '[]', '[]', 13, '2016-11-09 16:35:47', '2016-11-09 16:35:47'),
(14, 14, 'App\\Models\\Ad', 'images', 'e48d62edc105b09b1463e779ab955358', 'e48d62edc105b09b1463e779ab955358.jpg', 'media', 188169, '[]', '[]', 14, '2016-11-09 16:35:47', '2016-11-09 16:35:47'),
(15, 15, 'App\\Models\\Ad', 'images', 'ad1f7ccdab78395bc86cf14659709099', 'ad1f7ccdab78395bc86cf14659709099.jpg', 'media', 1156810, '[]', '[]', 15, '2016-11-09 16:35:47', '2016-11-09 16:35:47'),
(16, 16, 'App\\Models\\Ad', 'images', 'c31ee7dee468072365371b053686200c', 'c31ee7dee468072365371b053686200c.jpg', 'media', 1144416, '[]', '[]', 16, '2016-11-09 16:35:48', '2016-11-09 16:35:48'),
(17, 17, 'App\\Models\\Ad', 'images', '8fd572c28e236d6c3fa4f4ddaee57396', '8fd572c28e236d6c3fa4f4ddaee57396.jpg', 'media', 188169, '[]', '[]', 17, '2016-11-09 16:35:48', '2016-11-09 16:35:48'),
(18, 18, 'App\\Models\\Ad', 'images', '235dce8f9da53ba7d886ad97652798c5', '235dce8f9da53ba7d886ad97652798c5.jpg', 'media', 1156810, '[]', '[]', 18, '2016-11-09 16:35:49', '2016-11-09 16:35:49'),
(19, 19, 'App\\Models\\Ad', 'images', '2e9e4a4c4bc32a63aa3e4773d8c6886e', '2e9e4a4c4bc32a63aa3e4773d8c6886e.jpg', 'media', 188169, '[]', '[]', 19, '2016-11-09 16:35:49', '2016-11-09 16:35:49'),
(20, 20, 'App\\Models\\Ad', 'images', '94e8ea8fcb6645b0bdc08ffd7248f4e3', '94e8ea8fcb6645b0bdc08ffd7248f4e3.jpg', 'media', 954458, '[]', '[]', 20, '2016-11-09 16:35:49', '2016-11-09 16:35:49'),
(21, 21, 'App\\Models\\Ad', 'images', 'bf747ca628569ba0258b4f5e08665e5a', 'bf747ca628569ba0258b4f5e08665e5a.jpg', 'media', 941913, '[]', '[]', 21, '2016-11-09 16:35:50', '2016-11-09 16:35:50'),
(22, 22, 'App\\Models\\Ad', 'images', '263ecd054a66cece78c078baedefdac9', '263ecd054a66cece78c078baedefdac9.jpg', 'media', 1144416, '[]', '[]', 22, '2016-11-09 16:35:50', '2016-11-09 16:35:50'),
(23, 23, 'App\\Models\\Ad', 'images', 'f9493ab42ad3abd5227a9a8cb386538b', 'f9493ab42ad3abd5227a9a8cb386538b.jpg', 'media', 1164789, '[]', '[]', 23, '2016-11-09 16:35:50', '2016-11-09 16:35:50'),
(24, 24, 'App\\Models\\Ad', 'images', '1bd77281d314269790cbd25964c30412', '1bd77281d314269790cbd25964c30412.jpg', 'media', 1156810, '[]', '[]', 24, '2016-11-09 16:35:51', '2016-11-09 16:35:51'),
(25, 25, 'App\\Models\\Ad', 'images', '7d0d64fd4de14b6a6cb89ffb51acbb7b', '7d0d64fd4de14b6a6cb89ffb51acbb7b.jpg', 'media', 188169, '[]', '[]', 25, '2016-11-09 16:35:51', '2016-11-09 16:35:51'),
(26, 26, 'App\\Models\\Ad', 'images', '2aa9b2c1630e24ebd644784b9e78c8d3', '2aa9b2c1630e24ebd644784b9e78c8d3.jpg', 'media', 874365, '[]', '[]', 26, '2016-11-09 16:35:51', '2016-11-09 16:35:51'),
(27, 27, 'App\\Models\\Ad', 'images', '926eefd0962a73a6cd720d883af4042c', '926eefd0962a73a6cd720d883af4042c.jpg', 'media', 188169, '[]', '[]', 27, '2016-11-09 16:35:51', '2016-11-09 16:35:51'),
(28, 28, 'App\\Models\\Ad', 'images', 'e0b2f78f85a84372287da055e212332b', 'e0b2f78f85a84372287da055e212332b.jpg', 'media', 742955, '[]', '[]', 28, '2016-11-09 16:35:52', '2016-11-09 16:35:52'),
(29, 29, 'App\\Models\\Ad', 'images', 'e12775e6f48ee4c838fabc52cd228653', 'e12775e6f48ee4c838fabc52cd228653.jpg', 'media', 780192, '[]', '[]', 29, '2016-11-09 16:35:52', '2016-11-09 16:35:52'),
(30, 30, 'App\\Models\\Ad', 'images', 'a5ef98ec5307e0c142156d65624bf29e', 'a5ef98ec5307e0c142156d65624bf29e.jpg', 'media', 1164789, '[]', '[]', 30, '2016-11-09 16:35:52', '2016-11-09 16:35:52'),
(31, 31, 'App\\Models\\Ad', 'images', '40264a8eca24807ad5d2c6ff5e91fd01', '40264a8eca24807ad5d2c6ff5e91fd01.jpg', 'media', 780192, '[]', '[]', 31, '2016-11-09 16:35:52', '2016-11-09 16:35:52'),
(32, 32, 'App\\Models\\Ad', 'images', '6515253facca4b44f38853869b61b7ea', '6515253facca4b44f38853869b61b7ea.jpg', 'media', 941913, '[]', '[]', 32, '2016-11-09 16:35:53', '2016-11-09 16:35:53'),
(33, 33, 'App\\Models\\Ad', 'images', '0ea6078615c65e9f10d396624f8b82b9', '0ea6078615c65e9f10d396624f8b82b9.jpg', 'media', 188169, '[]', '[]', 33, '2016-11-09 16:35:53', '2016-11-09 16:35:53'),
(34, 34, 'App\\Models\\Ad', 'images', 'b2cec439371a72b0c6003647e6b634c9', 'b2cec439371a72b0c6003647e6b634c9.jpg', 'media', 954458, '[]', '[]', 34, '2016-11-09 16:35:53', '2016-11-09 16:35:53'),
(35, 35, 'App\\Models\\Ad', 'images', 'a0d4adecc5e0a32bd5891dedadbc85a9', 'a0d4adecc5e0a32bd5891dedadbc85a9.jpg', 'media', 1164789, '[]', '[]', 35, '2016-11-09 16:35:54', '2016-11-09 16:35:54'),
(36, 36, 'App\\Models\\Ad', 'images', '7802aa4055c0c229ca5a785d6b03743e', '7802aa4055c0c229ca5a785d6b03743e.jpg', 'media', 1156810, '[]', '[]', 36, '2016-11-09 16:35:54', '2016-11-09 16:35:54'),
(37, 37, 'App\\Models\\Ad', 'images', '4efc7c0a641e6f6ea49fa181afade68e', '4efc7c0a641e6f6ea49fa181afade68e.jpg', 'media', 1164789, '[]', '[]', 37, '2016-11-09 16:35:55', '2016-11-09 16:35:55'),
(38, 38, 'App\\Models\\Ad', 'images', '2ce4cc7f74837dc6d64c0409a1fa2dfa', '2ce4cc7f74837dc6d64c0409a1fa2dfa.jpg', 'media', 874365, '[]', '[]', 38, '2016-11-09 16:35:55', '2016-11-09 16:35:55'),
(39, 39, 'App\\Models\\Ad', 'images', '517f54b2e733ed02b641478244936bbd', '517f54b2e733ed02b641478244936bbd.jpg', 'media', 1144416, '[]', '[]', 39, '2016-11-09 16:35:55', '2016-11-09 16:35:55'),
(40, 40, 'App\\Models\\Ad', 'images', '2703fa62665b3bb5dd65390423514c23', '2703fa62665b3bb5dd65390423514c23.jpg', 'media', 1156810, '[]', '[]', 40, '2016-11-09 16:35:56', '2016-11-09 16:35:56'),
(41, 41, 'App\\Models\\Ad', 'images', 'ac2db3a10f4bea79655180edfa382981', 'ac2db3a10f4bea79655180edfa382981.jpg', 'media', 954458, '[]', '[]', 41, '2016-11-09 16:35:56', '2016-11-09 16:35:56'),
(42, 42, 'App\\Models\\Ad', 'images', '6ec24efb6dd76a2e1ee48b8b949b79da', '6ec24efb6dd76a2e1ee48b8b949b79da.jpg', 'media', 874365, '[]', '[]', 42, '2016-11-09 16:35:56', '2016-11-09 16:35:56'),
(43, 43, 'App\\Models\\Ad', 'images', '6f26a0f88e3a1a02aedd8c00c2214a89', '6f26a0f88e3a1a02aedd8c00c2214a89.jpg', 'media', 780192, '[]', '[]', 43, '2016-11-09 16:35:57', '2016-11-09 16:35:57'),
(44, 44, 'App\\Models\\Ad', 'images', 'c6ee46e88e2b197907531b559acb5c27', 'c6ee46e88e2b197907531b559acb5c27.jpg', 'media', 1144416, '[]', '[]', 44, '2016-11-09 16:35:57', '2016-11-09 16:35:57'),
(45, 45, 'App\\Models\\Ad', 'images', '724516e401072863c29a9ce035acc69a', '724516e401072863c29a9ce035acc69a.jpg', 'media', 874365, '[]', '[]', 45, '2016-11-09 16:35:58', '2016-11-09 16:35:58'),
(46, 46, 'App\\Models\\Ad', 'images', 'f079fa56ab30c4d71cd68a38edeb67cf', 'f079fa56ab30c4d71cd68a38edeb67cf.jpg', 'media', 874365, '[]', '[]', 46, '2016-11-09 16:35:58', '2016-11-09 16:35:58'),
(47, 47, 'App\\Models\\Ad', 'images', '8ea59b075456ef01beb12f1a857bb8a4', '8ea59b075456ef01beb12f1a857bb8a4.jpg', 'media', 1144416, '[]', '[]', 47, '2016-11-09 16:35:58', '2016-11-09 16:35:58'),
(48, 48, 'App\\Models\\Ad', 'images', 'f7cc7bcaea4b307b2fbc3af234f920ed', 'f7cc7bcaea4b307b2fbc3af234f920ed.jpg', 'media', 1164789, '[]', '[]', 48, '2016-11-09 16:35:59', '2016-11-09 16:35:59'),
(49, 49, 'App\\Models\\Ad', 'images', '4158f5531bae2e5dce2a9cb466ab50bd', '4158f5531bae2e5dce2a9cb466ab50bd.jpg', 'media', 1156810, '[]', '[]', 49, '2016-11-09 16:35:59', '2016-11-09 16:35:59'),
(50, 50, 'App\\Models\\Ad', 'images', 'b443b46d9c6cd11d9f9ceb555ff125de', 'b443b46d9c6cd11d9f9ceb555ff125de.jpg', 'media', 941913, '[]', '[]', 50, '2016-11-09 16:36:00', '2016-11-09 16:36:00'),
(51, 51, 'App\\Models\\Ad', 'images', '883f4e91908382222210b67753b5e14e', '883f4e91908382222210b67753b5e14e.jpeg', 'media', 148912, '[]', '[]', 51, '2016-11-09 15:30:03', '2016-11-09 15:30:03'),
(52, 52, 'App\\Models\\Ad', 'images', '17930ce9c12ddfd1f0675a426773ebc5', '17930ce9c12ddfd1f0675a426773ebc5.jpeg', 'media', 148912, '[]', '[]', 52, '2016-11-09 15:39:41', '2016-11-09 15:39:41'),
(55, 53, 'App\\Models\\Ad', 'images', '9a02a97f7f5a4e477c143fabda142add', '9a02a97f7f5a4e477c143fabda142add.jpeg', 'media', 148912, '[]', '[]', 54, '2016-11-09 15:49:42', '2016-11-09 15:49:42');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `thread_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `thread_id`, `user_id`, `body`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 'Nice doggie\r\n', '2016-11-09 15:21:33', '2016-11-09 15:21:33'),
(2, 2, 27, 'Asdf', '2016-11-09 15:36:22', '2016-11-09 15:36:22'),
(3, 1, 2, 'I know its beautiful', '2016-11-09 16:14:12', '2016-11-09 16:14:12'),
(4, 3, 26, 'Test message\r\n', '2016-11-09 16:15:36', '2016-11-09 16:15:36'),
(5, 3, 2, 'Reply to the test message\r\n', '2016-11-09 16:18:27', '2016-11-09 16:18:27'),
(6, 4, 4, 'Hello, I wish to buy your pup', '2016-11-10 02:38:35', '2016-11-10 02:38:35'),
(7, 5, 4, 'Hello, I wish to buy your pup', '2016-11-10 02:49:36', '2016-11-10 02:49:36'),
(8, 1, 1, 'Thank you', '2016-11-10 03:25:30', '2016-11-10 03:25:30'),
(9, 2, 1, 'hi', '2016-11-10 03:25:48', '2016-11-10 03:25:48'),
(10, 6, 4, 'Hi, I wish to buy your pup', '2016-11-10 06:26:59', '2016-11-10 06:26:59');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=649 ;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(632, '2014_10_12_000000_create_users_table', 1),
(633, '2014_10_12_100000_create_password_resets_table', 1),
(634, '2014_10_28_175635_create_threads_table', 1),
(635, '2014_10_28_175710_create_messages_table', 1),
(636, '2014_10_28_180224_create_participants_table', 1),
(637, '2014_11_03_154831_add_soft_deletes_to_participants_table', 1),
(638, '2014_12_04_124531_add_softdeletes_to_threads_table', 1),
(639, '2016_10_25_083705_create_breeds_table', 1),
(640, '2016_10_25_084341_create_ads_table', 1),
(641, '2016_11_04_194441_create_roles_table', 1),
(642, '2016_11_05_145605_create_media_table', 1),
(643, '2016_11_05_205357_add_profile_to_users_table', 1),
(644, '2016_11_06_080826_create_cart_table', 1),
(645, '2016_11_06_080845_create_cart_items_table', 1),
(646, '2016_11_06_112648_create_orders_table', 1),
(647, '2016_11_06_112709_create_order_details_table', 1),
(648, '2016_11_08_195832_create_breeder_requests_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `seller_id` int(10) unsigned NOT NULL,
  `payment` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `buyer_approved_at` datetime DEFAULT NULL,
  `seller_approved_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `orders_user_id_foreign` (`user_id`),
  KEY `orders_seller_id_foreign` (`seller_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=38 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `seller_id`, `payment`, `buyer_approved_at`, `seller_approved_at`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 3, 'card', '2016-11-04 16:36:02', '2016-11-04 16:36:02', '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(2, 2, 3, 'card', '2016-11-05 16:36:02', '2016-11-05 16:36:02', '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(3, 3, 1, 'card', '2016-11-04 16:36:02', '2016-11-04 16:36:02', '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(4, 4, 1, 'card', '2016-10-30 16:36:02', '2016-10-30 16:36:02', '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(5, 5, 2, 'card', '2016-11-08 16:36:02', '2016-11-08 16:36:02', '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(6, 6, 1, 'card', '2016-11-03 16:36:02', '2016-11-03 16:36:02', '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(7, 7, 1, 'card', '2016-10-31 16:36:02', '2016-10-31 16:36:02', '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(8, 8, 3, 'card', '2016-11-04 16:36:02', '2016-11-04 16:36:02', '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(9, 9, 1, 'card', '2016-10-26 16:36:02', '2016-10-26 16:36:02', '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(10, 10, 2, 'card', '2016-10-27 16:36:02', '2016-10-27 16:36:02', '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(11, 11, 3, 'card', '2016-10-27 16:36:02', '2016-10-27 16:36:02', '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(12, 12, 3, 'card', '2016-10-29 16:36:02', '2016-10-29 16:36:02', '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(13, 13, 1, 'card', '2016-11-05 16:36:02', '2016-11-05 16:36:02', '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(14, 14, 2, 'card', '2016-11-03 16:36:02', '2016-11-03 16:36:02', '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(15, 15, 3, 'card', '2016-11-08 16:36:02', '2016-11-08 16:36:02', '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(16, 16, 1, 'card', '2016-11-07 16:36:02', '2016-11-07 16:36:02', '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(17, 17, 1, 'card', '2016-11-06 16:36:02', '2016-11-06 16:36:02', '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(18, 18, 2, 'card', '2016-10-30 16:36:02', '2016-10-30 16:36:02', '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(19, 19, 1, 'card', '2016-10-27 16:36:02', '2016-10-27 16:36:02', '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(20, 20, 1, 'card', '2016-10-26 16:36:02', '2016-10-26 16:36:02', '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(21, 21, 1, 'card', '2016-11-07 16:36:02', '2016-11-07 16:36:02', '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(22, 22, 3, 'card', '2016-11-08 16:36:02', '2016-11-08 16:36:02', '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(23, 23, 1, 'card', '2016-11-08 16:36:02', '2016-11-08 16:36:02', '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(24, 24, 3, 'card', '2016-11-01 16:36:02', '2016-11-01 16:36:02', '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(25, 25, 1, 'card', '2016-10-27 16:36:02', '2016-10-27 16:36:02', '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(26, 27, 2, 'paypal', NULL, NULL, '2016-11-09 15:38:11', '2016-11-09 15:38:11', NULL),
(27, 2, 1, 'card', NULL, NULL, '2016-11-09 15:48:23', '2016-11-09 15:48:23', NULL),
(28, 4, 2, 'card', NULL, NULL, '2016-11-09 16:01:11', '2016-11-09 16:01:11', NULL),
(29, 2, 1, 'card', NULL, NULL, '2016-11-09 16:02:02', '2016-11-09 16:02:02', NULL),
(30, 26, 3, 'paypal', NULL, NULL, '2016-11-09 16:31:23', '2016-11-09 16:31:23', NULL),
(31, 4, 1, 'card', NULL, NULL, '2016-11-10 02:41:05', '2016-11-10 02:41:05', NULL),
(32, 4, 2, 'card', NULL, NULL, '2016-11-10 02:44:46', '2016-11-10 02:44:46', NULL),
(33, 4, 3, 'card', NULL, NULL, '2016-11-10 02:48:54', '2016-11-10 02:48:54', NULL),
(34, 4, 1, 'card', NULL, '2016-11-10 05:30:04', '2016-11-10 02:50:01', '2016-11-10 03:30:04', NULL),
(35, 4, 3, 'card', '2016-11-10 05:30:40', NULL, '2016-11-10 02:55:40', '2016-11-10 03:30:40', NULL),
(36, 4, 1, 'card', NULL, NULL, '2016-11-10 06:28:55', '2016-11-10 06:28:55', NULL),
(37, 4, 3, 'paypal', NULL, NULL, '2016-11-10 06:29:58', '2016-11-10 06:29:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE IF NOT EXISTS `order_details` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int(10) unsigned NOT NULL,
  `ad_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `order_details_order_id_foreign` (`order_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=94 ;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `ad_id`, `quantity`, `price`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 31, 2, 8329.15, '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(2, 1, 46, 2, 10320.22, '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(3, 1, 12, 1, 5079.99, '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(4, 1, 48, 2, 20580.14, '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(5, 2, 47, 2, 17440.53, '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(6, 2, 20, 2, 6839.14, '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(7, 3, 25, 3, 4288.82, '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(8, 4, 15, 2, 12181.10, '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(9, 4, 35, 1, 5545.86, '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(10, 5, 36, 3, 22910.92, '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(11, 5, 22, 1, 19382.38, '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(12, 5, 7, 3, 5499.74, '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(13, 6, 11, 2, 10979.10, '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(14, 7, 25, 2, 4288.82, '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(15, 7, 21, 3, 9617.02, '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(16, 7, 35, 2, 5545.86, '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(17, 8, 8, 1, 19258.53, '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(18, 8, 20, 1, 6839.14, '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(19, 8, 4, 3, 2656.61, '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(20, 9, 35, 1, 5545.86, '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(21, 9, 39, 2, 13739.26, '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(22, 9, 25, 3, 4288.82, '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(23, 9, 26, 2, 17795.92, '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(24, 10, 43, 1, 6899.91, '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(25, 10, 22, 3, 19382.38, '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(26, 10, 18, 2, 21776.94, '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(27, 10, 29, 3, 24733.41, '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(28, 11, 14, 1, 20227.18, '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(29, 11, 24, 2, 16739.69, '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(30, 11, 4, 1, 2656.61, '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(31, 11, 8, 3, 19258.53, '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(32, 11, 48, 3, 20580.14, '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(33, 12, 48, 3, 20580.14, '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(34, 12, 38, 3, 20507.28, '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(35, 12, 45, 1, 7675.36, '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(36, 13, 33, 3, 14034.39, '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(37, 13, 15, 3, 12181.10, '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(38, 13, 33, 2, 14034.39, '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(39, 13, 1, 3, 1747.09, '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(40, 14, 28, 2, 16373.00, '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(41, 14, 7, 2, 5499.74, '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(42, 14, 28, 2, 16373.00, '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(43, 15, 47, 2, 17440.53, '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(44, 15, 13, 2, 10844.11, '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(45, 16, 33, 2, 14034.39, '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(46, 16, 25, 1, 4288.82, '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(47, 16, 1, 1, 1747.09, '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(48, 17, 49, 1, 20456.89, '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(49, 17, 49, 3, 20456.89, '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(50, 18, 2, 2, 19437.89, '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(51, 18, 29, 1, 24733.41, '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(52, 18, 41, 3, 9801.32, '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(53, 19, 1, 1, 1747.09, '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(54, 19, 49, 2, 20456.89, '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(55, 19, 34, 3, 16988.54, '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(56, 19, 3, 3, 21093.04, '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(57, 19, 25, 1, 4288.82, '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(58, 20, 26, 3, 17795.92, '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(59, 20, 15, 1, 12181.10, '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(60, 20, 5, 1, 20895.85, '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(61, 20, 1, 3, 1747.09, '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(62, 21, 15, 2, 12181.10, '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(63, 21, 44, 1, 7841.55, '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(64, 21, 33, 2, 14034.39, '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(65, 22, 24, 3, 16739.69, '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(66, 22, 6, 3, 18249.31, '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(67, 22, 20, 3, 6839.14, '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(68, 23, 32, 1, 14981.76, '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(69, 23, 49, 3, 20456.89, '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(70, 23, 15, 3, 12181.10, '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(71, 23, 1, 1, 1747.09, '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(72, 23, 34, 2, 16988.54, '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(73, 24, 24, 1, 16739.69, '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(74, 24, 24, 3, 16739.69, '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(75, 24, 40, 3, 24360.46, '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(76, 24, 38, 3, 20507.28, '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(77, 25, 1, 1, 1747.09, '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(78, 25, 49, 3, 20456.89, '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(79, 25, 25, 1, 4288.82, '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(80, 25, 39, 2, 13739.26, '2016-11-09 16:36:02', '2016-11-09 16:36:02', NULL),
(81, 26, 2, 1, 19437.89, '2016-11-09 15:38:11', '2016-11-09 15:38:11', NULL),
(82, 27, 1, 10, 1747.09, '2016-11-09 15:48:23', '2016-11-09 15:48:23', NULL),
(83, 28, 54, 1, 100000.00, '2016-11-09 16:01:11', '2016-11-09 16:01:11', NULL),
(84, 29, 1, 1, 1747.09, '2016-11-09 16:02:02', '2016-11-09 16:02:02', NULL),
(85, 30, 4, 1, 2656.61, '2016-11-09 16:31:23', '2016-11-09 16:31:23', NULL),
(86, 30, 6, 1, 18249.31, '2016-11-09 16:31:23', '2016-11-09 16:31:23', NULL),
(87, 31, 3, 1, 21093.04, '2016-11-10 02:41:05', '2016-11-10 02:41:05', NULL),
(88, 32, 2, 1, 19437.89, '2016-11-10 02:44:46', '2016-11-10 02:44:46', NULL),
(89, 33, 6, 1, 18249.31, '2016-11-10 02:48:54', '2016-11-10 02:48:54', NULL),
(90, 34, 5, 1, 20895.85, '2016-11-10 02:50:01', '2016-11-10 02:50:01', NULL),
(91, 35, 6, 1, 18249.31, '2016-11-10 02:55:40', '2016-11-10 02:55:40', NULL),
(92, 36, 5, 1, 20895.85, '2016-11-10 06:28:55', '2016-11-10 06:28:55', NULL),
(93, 37, 4, 1, 2656.61, '2016-11-10 06:29:58', '2016-11-10 06:29:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `participants`
--

CREATE TABLE IF NOT EXISTS `participants` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `thread_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `last_read` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `participants`
--

INSERT INTO `participants` (`id`, `thread_id`, `user_id`, `last_read`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 2, '2016-11-10 03:26:21', NULL, '2016-11-10 03:26:21', NULL),
(2, 1, 1, '2016-11-10 03:25:30', '2016-11-09 15:21:33', '2016-11-10 03:25:30', NULL),
(3, 2, 27, '2016-11-09 16:15:59', NULL, '2016-11-09 16:15:59', NULL),
(4, 2, 1, '2016-11-10 03:25:48', '2016-11-09 15:36:22', '2016-11-10 03:25:48', NULL),
(5, 3, 26, '2016-11-09 16:32:06', NULL, '2016-11-09 16:32:06', NULL),
(6, 3, 2, '2016-11-09 16:18:27', '2016-11-09 16:15:36', '2016-11-09 16:18:27', NULL),
(7, 4, 4, '2016-11-10 02:38:35', NULL, '2016-11-10 02:38:35', NULL),
(8, 4, 2, NULL, '2016-11-10 02:38:35', '2016-11-10 02:38:35', NULL),
(9, 5, 4, '2016-11-10 02:49:36', NULL, '2016-11-10 02:49:36', NULL),
(10, 5, 3, NULL, '2016-11-10 02:49:36', '2016-11-10 02:49:36', NULL),
(11, 6, 4, '2016-11-10 06:26:59', NULL, '2016-11-10 06:26:59', NULL),
(12, 6, 1, NULL, '2016-11-10 06:26:59', '2016-11-10 06:26:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE IF NOT EXISTS `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `label` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `label`, `created_at`, `updated_at`) VALUES
(1, 'ad.create', 'Post Ad', '2016-11-09 16:35:41', '2016-11-09 16:35:41'),
(2, 'ad.edit', 'Edit Ad', '2016-11-09 16:35:41', '2016-11-09 16:35:41'),
(3, 'ad.delete', 'Delete Ad', '2016-11-09 16:35:41', '2016-11-09 16:35:41');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE IF NOT EXISTS `permission_role` (
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_role_id_foreign` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(1, 2),
(2, 2),
(3, 2),
(1, 3),
(2, 3),
(3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `label` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `label`, `created_at`, `updated_at`) VALUES
(1, 'breeder', 'Breeder', '2016-11-09 16:35:41', '2016-11-09 16:35:41'),
(2, 'moderator', 'Moderator', '2016-11-09 16:35:41', '2016-11-09 16:35:41'),
(3, 'admin', 'Admin', '2016-11-09 16:35:41', '2016-11-09 16:35:41');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE IF NOT EXISTS `role_user` (
  `role_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`user_id`),
  KEY `role_user_user_id_foreign` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(1, 2),
(2, 2),
(1, 3),
(1, 4),
(1, 26),
(1, 27);

-- --------------------------------------------------------

--
-- Table structure for table `threads`
--

CREATE TABLE IF NOT EXISTS `threads` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `threads`
--

INSERT INTO `threads` (`id`, `subject`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Doge', '2016-11-09 15:21:33', '2016-11-10 03:25:30', NULL),
(2, 'asdf', '2016-11-09 15:36:22', '2016-11-10 03:25:48', NULL),
(3, 'Test', '2016-11-09 16:15:36', '2016-11-09 16:18:27', NULL),
(4, 'Quas reiciendis', '2016-11-10 02:38:35', '2016-11-10 02:38:35', NULL),
(5, 'Quod ut omnis voluptatem', '2016-11-10 02:49:36', '2016-11-10 02:49:36', NULL),
(6, 'Et rerum corporis vero', '2016-11-10 06:26:59', '2016-11-10 06:26:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `company` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `street` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=29 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `company`, `street`) VALUES
(1, 'John Doe', 'admin@example.com', '$2y$10$HIOxnOihVylCXkK9ue72UOt0nBBEvf9Zk/smJWqv9Xq8HNsLJzo5i', 'GXvq8ulLveBerVLqUqqMwyTEwGSjPYEJo2C0BAT0tIZDI4nvmn1TSkCbWIGJ', '2016-11-09 16:35:41', '2016-11-10 06:39:40', '', '55 here'),
(2, 'Jane Doe', 'mod@example.com', '$2y$10$//uUkMjNExktxoqEBNZJBekMSvWi7vczivxfo1DGNELEY.YojklBe', 'SINYUukaxiBSnQ1ThGltmDjIXBBErz4Ve06L52LZxa2RkSZJg8cFhpgdVEUT', '2016-11-09 16:35:41', '2016-11-10 03:26:37', NULL, NULL),
(3, 'Bob Doe', 'breeder@example.com', '$2y$10$9aqk6YsL/aFgsD8tnG0h2uFb4OKOeg0238YnS0gleariSr9S3aC7q', 'xJxzKH27viAggfnsWNKwR0q1rNMf5WCTIIE0T1U1bAelq9wdWzQEDmw9e9ak', '2016-11-09 16:35:41', '2016-11-09 15:34:31', NULL, NULL),
(4, 'Just Doe', 'user@example.com', '$2y$10$MdrN5GdK3gBxNnovcuuIs.DquJd3APVb5Pwju3lxcDDOnqPYPULR.', 'Q3BoZ8JVVYcwjsa1jvd838Gf1e0Xi5uGul8S1QXNH6Vj4jU8non0zh6EPW8c', '2016-11-09 16:35:41', '2016-11-10 06:37:59', NULL, NULL),
(5, 'Gayle VonRueden', 'hdoyle@example.net', '$2y$10$qRtlJj3MYy7WHsWpUYEZBOZbeymowezPphrlPoEES8AIeNLhMFawG', 'FK8RmrZ1qh', '2016-11-09 16:35:41', '2016-11-09 16:35:41', 'Weimann-Stehr', '2918 Ernser Summit'),
(6, 'Miracle Halvorson MD', 'nitzsche.retta@example.net', '$2y$10$qRtlJj3MYy7WHsWpUYEZBOZbeymowezPphrlPoEES8AIeNLhMFawG', 'eXXhkRh7ce', '2016-11-09 16:35:41', '2016-11-09 16:35:41', 'Smith-Langworth', '689 Cynthia Green Suite 320'),
(7, 'Dr. Clement Cormier MD', 'lazaro65@example.net', '$2y$10$qRtlJj3MYy7WHsWpUYEZBOZbeymowezPphrlPoEES8AIeNLhMFawG', 'oGmhocsZxY', '2016-11-09 16:35:41', '2016-11-09 16:35:41', 'Hansen, Mitchell and Grant', '33331 Sauer Land Suite 809'),
(8, 'Ryleigh Price', 'eveum@example.com', '$2y$10$qRtlJj3MYy7WHsWpUYEZBOZbeymowezPphrlPoEES8AIeNLhMFawG', 'HN0xs3hh8x', '2016-11-09 16:35:41', '2016-11-09 16:35:41', 'Cummings-Hettinger', '972 Rosalinda Drives Suite 404'),
(9, 'Benny DuBuque', 'abbott.porter@example.com', '$2y$10$qRtlJj3MYy7WHsWpUYEZBOZbeymowezPphrlPoEES8AIeNLhMFawG', 'aJNmyOFRsV', '2016-11-09 16:35:41', '2016-11-09 16:35:41', 'Ferry-Walker', '92039 Walker Prairie'),
(10, 'Nikki Koch', 'genesis40@example.com', '$2y$10$qRtlJj3MYy7WHsWpUYEZBOZbeymowezPphrlPoEES8AIeNLhMFawG', 'Y90decQdJ8', '2016-11-09 16:35:41', '2016-11-09 16:35:41', 'Nienow-Wunsch', '352 Watsica Alley Apt. 275'),
(11, 'Candice Hudson', 'whalvorson@example.org', '$2y$10$qRtlJj3MYy7WHsWpUYEZBOZbeymowezPphrlPoEES8AIeNLhMFawG', 'F90tgLkwCo', '2016-11-09 16:35:41', '2016-11-09 16:35:41', 'Hintz Inc', '835 Mante View'),
(12, 'Elmer Kuhn', 'stark.art@example.net', '$2y$10$qRtlJj3MYy7WHsWpUYEZBOZbeymowezPphrlPoEES8AIeNLhMFawG', 'mt5xFAjN1T', '2016-11-09 16:35:41', '2016-11-09 16:35:41', 'O''Hara-Fadel', '44085 Ardella Stream Suite 189'),
(13, 'Dr. Sheldon Baumbach PhD', 'maggio.rozella@example.com', '$2y$10$qRtlJj3MYy7WHsWpUYEZBOZbeymowezPphrlPoEES8AIeNLhMFawG', 'R2V2ajhnjy', '2016-11-09 16:35:41', '2016-11-09 16:35:41', 'Hintz Inc', '49904 Nathaniel Ford'),
(14, 'Edgar Altenwerth', 'wyman.bernita@example.org', '$2y$10$qRtlJj3MYy7WHsWpUYEZBOZbeymowezPphrlPoEES8AIeNLhMFawG', 'nF7gtbCDGA', '2016-11-09 16:35:41', '2016-11-09 16:35:41', 'Doyle LLC', '56301 Mraz Corner Apt. 119'),
(15, 'Gregoria Purdy', 'rwest@example.com', '$2y$10$qRtlJj3MYy7WHsWpUYEZBOZbeymowezPphrlPoEES8AIeNLhMFawG', 'Lzhdz7593d', '2016-11-09 16:35:41', '2016-11-09 16:35:41', 'Block, Rogahn and Gorczany', '1721 Macejkovic Circle Apt. 170'),
(16, 'Gust Feil', 'jamey73@example.org', '$2y$10$qRtlJj3MYy7WHsWpUYEZBOZbeymowezPphrlPoEES8AIeNLhMFawG', 'dWRQkYHnQR', '2016-11-09 16:35:41', '2016-11-09 16:35:41', 'Jacobi-Weber', '7251 Ledner Crest'),
(17, 'Hester Hintz', 'gwen.gutmann@example.com', '$2y$10$qRtlJj3MYy7WHsWpUYEZBOZbeymowezPphrlPoEES8AIeNLhMFawG', '0aOfceAnAs', '2016-11-09 16:35:41', '2016-11-09 16:35:41', 'Cole-Schmidt', '39987 Morissette Circles Suite 715'),
(18, 'Alanna Kulas', 'shana.tromp@example.net', '$2y$10$qRtlJj3MYy7WHsWpUYEZBOZbeymowezPphrlPoEES8AIeNLhMFawG', 'So7GeYS5q9', '2016-11-09 16:35:41', '2016-11-09 16:35:41', 'Spinka, Gleason and Kozey', '510 Terry Hill'),
(19, 'Jaleel Beer IV', 'jordane05@example.com', '$2y$10$qRtlJj3MYy7WHsWpUYEZBOZbeymowezPphrlPoEES8AIeNLhMFawG', 'wJPEmAcTYk', '2016-11-09 16:35:41', '2016-11-09 16:35:41', 'Ankunding Ltd', '942 Legros Camp Suite 110'),
(20, 'Anastacio Yost', 'dmante@example.net', '$2y$10$qRtlJj3MYy7WHsWpUYEZBOZbeymowezPphrlPoEES8AIeNLhMFawG', 'WFCZBxvyKj', '2016-11-09 16:35:41', '2016-11-09 16:35:41', 'Turner and Sons', '94696 Van Islands'),
(21, 'River Pollich', 'kody.greenfelder@example.org', '$2y$10$qRtlJj3MYy7WHsWpUYEZBOZbeymowezPphrlPoEES8AIeNLhMFawG', '91tXIbXMLB', '2016-11-09 16:35:41', '2016-11-09 16:35:41', 'Hermann, Rodriguez and Powlowski', '22088 Estella Valleys'),
(22, 'Madaline Batz', 'lexie51@example.net', '$2y$10$qRtlJj3MYy7WHsWpUYEZBOZbeymowezPphrlPoEES8AIeNLhMFawG', '9gM5omSmcx', '2016-11-09 16:35:41', '2016-11-09 16:35:41', 'Roob, Dickens and Effertz', '7181 Jillian Forest Apt. 801'),
(23, 'Alexys Weissnat', 'hills.kareem@example.org', '$2y$10$qRtlJj3MYy7WHsWpUYEZBOZbeymowezPphrlPoEES8AIeNLhMFawG', 'KvG4SYln6F', '2016-11-09 16:35:41', '2016-11-09 16:35:41', 'Walsh-Douglas', '260 Frami Corner Apt. 663'),
(24, 'Jay Price', 'jquitzon@example.net', '$2y$10$qRtlJj3MYy7WHsWpUYEZBOZbeymowezPphrlPoEES8AIeNLhMFawG', '077qXk7N2s', '2016-11-09 16:35:41', '2016-11-09 16:35:41', 'Medhurst PLC', '6346 Madelyn Hill'),
(25, 'Lane Monahan', 'waino.purdy@example.org', '$2y$10$qRtlJj3MYy7WHsWpUYEZBOZbeymowezPphrlPoEES8AIeNLhMFawG', 'aYQ0SgYChh', '2016-11-09 16:35:41', '2016-11-09 16:35:41', 'Dicki, Tremblay and Runolfsdottir', '738 Durgan Orchard'),
(26, 'Pieter', 'piet@example.com', '$2y$10$yMGYHODAc7tlddvQxB4L8O3E/7dbPxhAYtC.CgGN5x78VeBDMS1Au', '4gcbfPkaux4KdI4R5Dnyp7uFlWSqILsScNEOZ7u2z3qOPnsYkhJZYPLvQYxg', '2016-11-09 15:24:22', '2016-11-09 16:32:22', NULL, NULL),
(27, 'someone', 'asdf@example.com', '$2y$10$dcst7OGJslQP.bYXSR/9TOPaIBCqK3O4yhE2RhJJakHpEyUVdtOR2', NULL, '2016-11-09 15:31:20', '2016-11-09 15:31:20', NULL, NULL),
(28, 'S', 's@example.com', '$2y$10$HPecShoKBleUyozQAF45buB9s5SeFvnSnZleBj7QSkjrOX5dxb.YK', '4ZOIVI1BofUsa49WcVPFODoCQ7hkHMYekTR9vzyQJjBGC9Eiuq59o9xTg39X', '2016-11-10 03:28:03', '2016-11-10 03:28:40', NULL, NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ads`
--
ALTER TABLE `ads`
  ADD CONSTRAINT `ads_breed_id_foreign` FOREIGN KEY (`breed_id`) REFERENCES `breeds` (`id`),
  ADD CONSTRAINT `ads_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `breeder_requests`
--
ALTER TABLE `breeder_requests`
  ADD CONSTRAINT `breeder_requests_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD CONSTRAINT `cart_items_cart_id_foreign` FOREIGN KEY (`cart_id`) REFERENCES `carts` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_seller_id_foreign` FOREIGN KEY (`seller_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`);

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
