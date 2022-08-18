/*
 Navicat Premium Data Transfer

 Source Server         : local mysql connection
 Source Server Type    : MySQL
 Source Server Version : 100412
 Source Host           : 127.0.0.1:3306
 Source Schema         : building_site_db

 Target Server Type    : MySQL
 Target Server Version : 100412
 File Encoding         : 65001

 Date: 06/10/2021 00:48:20
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for expenses
-- ----------------------------
DROP TABLE IF EXISTS `expenses`;
CREATE TABLE `expenses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` float(10,2) DEFAULT NULL,
  `work_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of expenses
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for galleries
-- ----------------------------
DROP TABLE IF EXISTS `galleries`;
CREATE TABLE `galleries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `work_send_id` int(11) DEFAULT NULL,
  `work_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of galleries
-- ----------------------------
BEGIN;
INSERT INTO `galleries` VALUES (3, '2021/09/30/48503d77-e050-4d19-babc-ee4bdacd2988.jpeg', NULL, 1, '2021-09-30 16:34:48', '2021-09-30 16:34:48', NULL);
INSERT INTO `galleries` VALUES (4, '2021/09/30/217d4307-e91f-4e73-84d2-735360f68a16.jpeg', NULL, 1, '2021-09-30 16:34:48', '2021-09-30 22:02:53', '2021-09-30 22:02:53');
INSERT INTO `galleries` VALUES (5, '2021/09/30/a8481501-5d9e-495b-8f6c-f123333478d6.png', NULL, 1, '2021-09-30 16:34:48', '2021-10-05 22:05:39', '2021-10-05 22:05:39');
INSERT INTO `galleries` VALUES (6, '2021/10/04/7ecc8315-5469-4321-aeab-3f4eb3ebc440.jpeg', NULL, 1, '2021-10-04 22:26:47', '2021-10-04 22:26:47', NULL);
INSERT INTO `galleries` VALUES (7, '2021/10/04/419a2a48-eb9a-41e9-887d-093d50e81a5b.jpeg', NULL, 1, '2021-10-04 22:26:47', '2021-10-04 22:26:47', NULL);
INSERT INTO `galleries` VALUES (8, '2021/10/04/83d74fec-bb75-4d6e-9ad5-146eb6087c96.png', NULL, 1, '2021-10-04 22:26:47', '2021-10-04 22:26:47', NULL);
INSERT INTO `galleries` VALUES (9, '2021/10/05/31df9a8c-4720-4099-beba-008688ffc37c.jpeg', 2, NULL, '2021-10-05 00:43:17', '2021-10-05 00:43:17', NULL);
INSERT INTO `galleries` VALUES (10, '2021/10/05/8c055763-4fda-4ffb-948a-a31566c836a1.jpeg', 2, NULL, '2021-10-05 00:43:17', '2021-10-05 00:43:17', NULL);
INSERT INTO `galleries` VALUES (11, '2021/10/05/65f1bdb5-8e60-4981-a2fb-876b868b55bd.png', 2, NULL, '2021-10-05 00:43:17', '2021-10-05 00:43:17', NULL);
INSERT INTO `galleries` VALUES (12, '2021/10/05/5d862ab0-ff65-4636-969f-44e01aead31a.jpeg', 3, NULL, '2021-10-05 01:31:52', '2021-10-05 01:31:52', NULL);
INSERT INTO `galleries` VALUES (13, '2021/10/05/9499639c-85bc-4acf-9526-339780d9b190.jpeg', 3, NULL, '2021-10-05 01:31:52', '2021-10-05 01:31:52', NULL);
INSERT INTO `galleries` VALUES (14, '2021/10/05/14ab0476-1248-477c-867c-bdec2812e9c9.png', 3, NULL, '2021-10-05 01:31:52', '2021-10-05 01:31:52', NULL);
INSERT INTO `galleries` VALUES (15, '2021/10/05/f3698b84-b27b-40f3-8a1d-33012ff72f3a.jpeg', 4, NULL, '2021-10-05 01:32:09', '2021-10-05 01:32:09', NULL);
INSERT INTO `galleries` VALUES (16, '2021/10/05/5fff9171-d1fa-4006-9816-bc7226a429f0.jpeg', NULL, 3, '2021-10-05 21:00:47', '2021-10-05 21:00:47', NULL);
INSERT INTO `galleries` VALUES (17, '2021/10/05/5b952b96-1af0-4bc2-906e-82646a04981c.jpeg', NULL, 3, '2021-10-05 21:00:47', '2021-10-05 21:00:47', NULL);
INSERT INTO `galleries` VALUES (18, '2021/10/05/fce0eb5e-7716-4baf-a30a-af6da254718e.jpeg', NULL, 3, '2021-10-05 21:02:12', '2021-10-05 21:02:12', NULL);
INSERT INTO `galleries` VALUES (19, '2021/10/05/12cb5ff5-bee7-4a1b-81d1-1224ef0576c4.jpeg', NULL, 3, '2021-10-05 21:02:12', '2021-10-05 21:02:12', NULL);
INSERT INTO `galleries` VALUES (20, '2021/10/05/7a89ebdb-521c-4855-9d90-e5b12c70f4dc.png', NULL, 3, '2021-10-05 21:02:12', '2021-10-05 21:05:16', '2021-10-05 21:05:16');
INSERT INTO `galleries` VALUES (21, '2021/10/05/20a9e972-3318-4ebf-a172-be664ed2ede5.jpeg', NULL, 4, '2021-10-05 21:06:05', '2021-10-05 21:06:05', NULL);
INSERT INTO `galleries` VALUES (22, '2021/10/05/72d49a57-0922-46cd-94be-72cea9d82afe.jpeg', NULL, 4, '2021-10-05 21:06:05', '2021-10-05 21:06:05', NULL);
INSERT INTO `galleries` VALUES (23, '2021/10/05/42ba09c4-4a07-47ec-8bb5-c3ddbf30b71d.jpeg', 5, NULL, '2021-10-05 21:23:59', '2021-10-05 21:23:59', NULL);
INSERT INTO `galleries` VALUES (24, '2021/10/05/b2b8d40f-9a31-45d1-9c6f-cdb4943e49f8.png', 5, NULL, '2021-10-05 21:23:59', '2021-10-05 21:23:59', NULL);
INSERT INTO `galleries` VALUES (25, '2021/10/05/5417332f-8ee7-4662-aa9b-dcc6dd97a8b0.png', 6, NULL, '2021-10-05 21:24:35', '2021-10-05 21:58:29', '2021-10-05 21:58:29');
INSERT INTO `galleries` VALUES (26, '2021/10/05/29acd0ff-27ff-4149-aefc-9d8b0592ed22.jpeg', 6, NULL, '2021-10-05 21:59:25', '2021-10-05 21:59:25', NULL);
INSERT INTO `galleries` VALUES (27, '2021/10/05/a1b73cdf-6940-41a1-9c7c-f6ddfb01455f.jpeg', 6, NULL, '2021-10-05 21:59:25', '2021-10-05 21:59:29', '2021-10-05 21:59:29');
INSERT INTO `galleries` VALUES (28, '2021/10/05/9b7300d7-2837-4467-96e6-bfea78f76b5f.png', 6, NULL, '2021-10-05 21:59:25', '2021-10-05 21:59:25', NULL);
INSERT INTO `galleries` VALUES (29, '2021/10/05/e725a61e-0c5d-4c28-a199-ed647d58c373.png', 6, NULL, '2021-10-05 21:59:46', '2021-10-05 21:59:46', NULL);
INSERT INTO `galleries` VALUES (30, '2021/10/05/ce63c660-d6b0-4521-881e-0ed4dd29b26e.jpeg', 7, NULL, '2021-10-05 22:13:38', '2021-10-05 22:13:38', NULL);
INSERT INTO `galleries` VALUES (31, '2021/10/05/08752d96-c83c-4ca0-9792-856945c47aa7.jpeg', 7, NULL, '2021-10-05 22:13:38', '2021-10-05 22:13:38', NULL);
INSERT INTO `galleries` VALUES (32, '2021/10/05/80d92a84-4da9-4040-acd0-daef86d83694.png', 7, NULL, '2021-10-05 22:13:38', '2021-10-05 22:13:38', NULL);
COMMIT;

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
BEGIN;
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2019_08_19_000000_create_failed_jobs_table', 1);
COMMIT;

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of roles
-- ----------------------------
BEGIN;
INSERT INTO `roles` VALUES (1, 'ผู้ดูแลระบบ', NULL, '2021-09-20 23:30:40', '2021-09-20 23:30:40', NULL);
INSERT INTO `roles` VALUES (2, 'ประธานบริษัท', NULL, '2021-09-20 23:31:36', '2021-09-20 23:31:36', NULL);
INSERT INTO `roles` VALUES (3, 'ผู้ดูแลงาน', NULL, '2021-09-20 23:32:02', '2021-09-30 11:50:06', '2021-09-30 11:50:06');
INSERT INTO `roles` VALUES (4, 'กรรมกร รายวัน', NULL, '2021-09-20 23:32:32', '2021-09-20 23:33:44', '2021-09-20 23:33:44');
INSERT INTO `roles` VALUES (5, 'กรรมกร รายวัน', NULL, '2021-09-20 23:33:53', '2021-09-20 23:33:53', NULL);
COMMIT;

-- ----------------------------
-- Table structure for sendworks
-- ----------------------------
DROP TABLE IF EXISTS `sendworks`;
CREATE TABLE `sendworks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_by` int(11) DEFAULT NULL,
  `detail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `work_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of sendworks
-- ----------------------------
BEGIN;
INSERT INTO `sendworks` VALUES (1, 2, 'ทดสอบส่งงาน', 1, '2021-10-05 00:42:50', '2021-10-05 00:42:50', NULL);
INSERT INTO `sendworks` VALUES (2, 2, 'ทดสอบส่งงาน', 1, '2021-10-05 00:43:17', '2021-10-05 00:43:17', NULL);
INSERT INTO `sendworks` VALUES (3, 2, '2345', 1, '2021-10-05 01:31:52', '2021-10-05 01:31:52', NULL);
INSERT INTO `sendworks` VALUES (4, 2, '6789', 1, '2021-10-05 01:32:09', '2021-10-05 01:32:09', NULL);
INSERT INTO `sendworks` VALUES (5, 2, 'ทำทุกอย่างให้เธอแล้ว', 4, '2021-10-05 21:23:59', '2021-10-05 22:11:09', '2021-10-05 22:11:09');
INSERT INTO `sendworks` VALUES (6, 2, 'ทำใจไม่ให้ลัคเธอ23322', 4, '2021-10-05 21:24:35', '2021-10-05 21:51:15', NULL);
INSERT INTO `sendworks` VALUES (7, 2, 'ทำใจไม่ให้ลัคเธอ', 4, '2021-10-05 22:13:38', '2021-10-05 22:13:38', NULL);
COMMIT;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `telephone` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
BEGIN;
INSERT INTO `users` VALUES (2, 'kppvGG3zDl', NULL, 1, NULL, NULL, 'admin@email.com', NULL, '$2y$10$MSFq3mNl/4oQT97mnDaUCu5jxVzNckiwNZAXXT78rdcRkuUNa/bfm', NULL, NULL, NULL);
INSERT INTO `users` VALUES (4, 'กัน z900', '19', 5, '0938249469', 'asdadsdasd', 'gun@gmail.com', NULL, '$2y$10$JsDloFfaQR59I2BrhzShuuHtjduEmmrnmhhJeKtTcZXHkRFktByM6', NULL, '2021-09-27 13:29:40', '2021-09-27 13:29:40');
COMMIT;

-- ----------------------------
-- Table structure for works
-- ----------------------------
DROP TABLE IF EXISTS `works`;
CREATE TABLE `works` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `detail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `feature_image` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `starter_date` date DEFAULT NULL,
  `ender_date` date DEFAULT NULL,
  `successfully_true_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of works
-- ----------------------------
BEGIN;
INSERT INTO `works` VALUES (1, 'ปปปปปปป', 2, 6, 'ฟฟฟฟฟ', 'หหหหหหหหหห', '2021/09/29/f7b7144d-7479-4994-8bbc-d8a93a2f65cc.jpg', '2021-09-22', '2021-10-31', NULL, '2021-09-29 23:01:44', '2021-09-30 12:05:32', NULL);
INSERT INTO `works` VALUES (2, 'ปปปปปปป', 2, 1, 'ฟฟฟฟฟ', 'หหหหหหหหหห', '2021/09/29/6556bc7a-03b3-4210-b46c-be8492da0533.jpg', '2021-09-22', '2021-10-31', NULL, '2021-09-29 23:06:30', '2021-09-30 11:50:48', '2021-09-30 11:50:48');
INSERT INTO `works` VALUES (3, 'งานบ้านเด็ก', 2, 1, 'บ้านเด็กๆของเรา', 'ทดสอบ', '2021/10/05/24fefb12-276b-4b10-b7bd-7e9bb47e2e86.jpeg', '2021-10-05', '2021-10-31', NULL, '2021-10-05 20:45:57', '2021-10-05 20:45:57', NULL);
INSERT INTO `works` VALUES (4, 'งาน456', 2, 2, 'รายละเอียด 456', 'ที่อยุ่ 456', '2021/10/05/fc9ff933-7719-4e18-a56d-b0201d431869.png', '2021-10-05', '2021-10-08', NULL, '2021-10-05 21:05:52', '2021-10-05 21:05:52', NULL);
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
