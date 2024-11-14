-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2024 at 01:32 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marketplace-katering`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `c__carts`
--

CREATE TABLE `c__carts` (
  `id` char(36) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `menu_id` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `tanggal_order` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `c__carts`
--

INSERT INTO `c__carts` (`id`, `user_id`, `menu_id`, `quantity`, `tanggal_order`, `created_at`, `updated_at`) VALUES
('3c189765-a54c-3534-afc1-2c761920ac1c', '16', 'afece6b8-e994-3a2b-a9e2-59487d8b4ccf', 4, '1995-06-18', '2024-11-14 11:43:06', '2024-11-14 11:43:06'),
('cc5a514a-3d0b-32c9-82ec-354fe78c86ca', '16', '5da1e5f5-3e11-3ef4-aeed-3dd985a35bfd', 2, '1985-12-27', '2024-11-14 11:43:06', '2024-11-14 11:43:06'),
('87336f51-d493-3225-8373-3184c8fb9540', '16', '12d8871c-606d-3bbc-af83-834a4dba0deb', 8, '1993-03-03', '2024-11-14 11:43:06', '2024-11-14 11:43:06'),
('ce439eb0-ba60-31c3-9594-cdfa8ee24e6c', '16', '2de67e1f-1df3-3045-9def-e4a87f52f971', 2, '1972-09-03', '2024-11-14 11:43:06', '2024-11-14 11:43:06'),
('03c12c39-1584-3878-9c6b-2e9170290e91', '16', 'afece6b8-e994-3a2b-a9e2-59487d8b4ccf', 4, '1975-07-18', '2024-11-14 11:43:06', '2024-11-14 11:43:06'),
('24db6d88-fcf3-3e56-b1c7-f0853ae1b02f', '16', 'bc76b175-f07b-389f-b4d2-d3362230127f', 6, '1985-07-13', '2024-11-14 11:43:06', '2024-11-14 11:43:06'),
('205fd474-6720-304d-b4f4-cfdd5c094266', '16', '853b4463-3348-3fb8-a1ef-f7347b7d1089', 7, '2011-06-05', '2024-11-14 11:43:06', '2024-11-14 11:43:06'),
('d542ea9b-fd09-3e12-9ebf-6826b660d06e', '16', 'f2c5ddc8-7766-3165-a5ed-275326e73d3d', 2, '2004-05-04', '2024-11-14 11:43:06', '2024-11-14 11:43:06'),
('d6c94932-21df-30f1-a2f1-528c2a9b48bb', '16', '4284fda8-51f3-3948-8ddc-d6f22fc4a5f8', 5, '2023-06-01', '2024-11-14 11:43:06', '2024-11-14 11:43:06'),
('4cd2f1cd-bd46-33f6-a397-d94cc5f7cc2b', '16', '12d8871c-606d-3bbc-af83-834a4dba0deb', 5, '1996-04-21', '2024-11-14 11:43:06', '2024-11-14 11:43:06'),
('6b8a376e-d864-4e02-b1b6-cab6dcb0d907', '16', '011133d9-631b-3d13-a6e1-8a8a19bfc183', 1, '2024-11-14', '2024-11-14 11:47:26', '2024-11-14 11:47:26'),
('0b5452d5-d369-4674-847a-5cccd2e6efe8', '16', '011133d9-631b-3d13-a6e1-8a8a19bfc183', 1, '2024-11-14', '2024-11-14 12:07:08', '2024-11-14 12:07:08');

-- --------------------------------------------------------

--
-- Table structure for table `c__history_orders`
--

CREATE TABLE `c__history_orders` (
  `id` char(36) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `menu_id` varchar(255) NOT NULL,
  `tanggal_order` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_11_14_060424_create_m__menus_table', 1),
(5, '2024_11_14_060458_create_m__orders_table', 1),
(6, '2024_11_14_060533_create_c__carts_table', 1),
(7, '2024_11_14_060628_create_c__history_orders_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `m__menus`
--

CREATE TABLE `m__menus` (
  `id` char(36) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `m__menus`
--

INSERT INTO `m__menus` (`id`, `user_id`, `nama`, `kategori`, `harga`, `icon`, `deskripsi`, `created_at`, `updated_at`) VALUES
('011133d9-631b-3d13-a6e1-8a8a19bfc183', '6', 'Hardi Pradana S.Kom', 'Minuman', 20719, 'Minuman.jpg', 'Consequatur ut perferendis maiores ea ullam. Ab aut nihil id quia velit. Quasi omnis harum qui reprehenderit quia consequatur. Praesentium reiciendis dolorum qui vel dolorem qui.', '2024-11-14 11:43:06', '2024-11-14 11:43:06'),
('0dcbe433-ab40-3eed-bdef-5290d39464d8', '14', 'Liman Jarwi Winarno S.Farm', 'Makanan', 16479, 'Makanan.jpg', 'Sunt error facere quia voluptatem. Tenetur veniam facere omnis nisi non.', '2024-11-14 11:43:06', '2024-11-14 11:43:06'),
('105843d1-3b84-3652-b85d-dee076be2d99', '14', 'Gabriella Wijayanti', 'Minuman', 54600, 'Minuman.jpg', 'Officiis pariatur iure illum fugit minus voluptatum. Cum quo sed ducimus blanditiis dignissimos. Porro aut alias repellat et neque fuga ullam.', '2024-11-14 11:43:06', '2024-11-14 11:43:06'),
('12d8871c-606d-3bbc-af83-834a4dba0deb', '15', 'Sakura Nuraini', 'Makanan', 81063, 'Makanan.jpg', 'Quaerat amet tenetur qui voluptate. Laborum iste cumque voluptas consequatur at. Eius nemo quidem explicabo non maxime quisquam ad. Aut ipsa ex beatae facere nostrum.', '2024-11-14 11:43:06', '2024-11-14 11:43:06'),
('1700a4a1-cf42-3b2c-8e29-c1e4621f0bb5', '9', 'Vino Argono Siregar S.Gz', 'Minuman', 23224, 'Minuman.jpg', 'Aspernatur adipisci reprehenderit ea quaerat quia in omnis nihil. Dignissimos dolor est quisquam inventore dolor eos similique. Alias quo quaerat debitis magnam.', '2024-11-14 11:43:06', '2024-11-14 11:43:06'),
('1c15a056-c599-3a6c-8250-9d38caaf795b', '9', 'Umay Prima Damanik', 'Snack', 14777, 'Snack.jpg', 'Laborum velit qui omnis qui. Neque nulla ratione pariatur molestias quo. Quia voluptatem pariatur illo. Aliquam omnis nobis voluptatem adipisci. Aut accusamus dolores non quis amet.', '2024-11-14 11:43:06', '2024-11-14 11:43:06'),
('28cec2b4-941a-3a94-a0ab-943424d7fac8', '6', 'Luluh Iswahyudi M.Pd', 'Snack', 94573, 'Snack.jpg', 'Delectus velit totam temporibus fugit praesentium explicabo. Aut accusantium non aut laudantium aut. Consectetur exercitationem in et laborum reprehenderit qui placeat.', '2024-11-14 11:43:06', '2024-11-14 11:43:06'),
('2de67e1f-1df3-3045-9def-e4a87f52f971', '4', 'Eluh Xanana Saragih M.Kom.', 'Makanan', 28954, 'Makanan.jpg', 'Et ut modi quo omnis quas iusto. Non tempora omnis atque adipisci occaecati et. Odio qui quasi omnis quis nam. Molestiae corporis repudiandae officia iste. Placeat et ipsum omnis itaque quae.', '2024-11-14 11:43:06', '2024-11-14 11:43:06'),
('30bfacd5-9575-30fd-b49c-9e88fed9798d', '6', 'Bakiman Wibowo', 'Minuman', 31434, 'Minuman.jpg', 'Est vel omnis molestiae molestiae molestiae eos et est. Alias asperiores doloribus soluta. Voluptas in sit expedita numquam quisquam dolore voluptatibus amet. Nulla reiciendis quas aspernatur sit.', '2024-11-14 11:43:06', '2024-11-14 11:43:06'),
('4284fda8-51f3-3948-8ddc-d6f22fc4a5f8', '4', 'Kawaya Maras Lazuardi', 'Snack', 18022, 'Snack.jpg', 'Eaque nesciunt a consequatur. Neque illo aut qui facere quasi asperiores aut. Distinctio minus asperiores aperiam quo. Ut quam natus corrupti eos blanditiis quia rem.', '2024-11-14 11:43:06', '2024-11-14 11:43:06'),
('49a55a87-1ad4-3a41-864f-685f87b02852', '13', 'Rika Farah Utami', 'Minuman', 32627, 'Minuman.jpg', 'Voluptatibus quis optio atque tempore aut sit. Quidem sed cumque veniam est temporibus in. Est fuga quibusdam harum.', '2024-11-14 11:43:06', '2024-11-14 11:43:06'),
('567ccb28-8b21-39f5-9973-9433cfe8e515', '11', 'Limar Luhung Prabowo', 'Minuman', 93131, 'Minuman.jpg', 'Dolorem ipsum hic repellat consequatur. Repellat qui rerum dolor quidem eos commodi. Et recusandae recusandae doloremque porro. Tenetur facilis et provident veniam voluptatem aut omnis.', '2024-11-14 11:43:06', '2024-11-14 11:43:06'),
('5798804c-9340-3b2a-b2e4-57678a784221', '9', 'Laswi Wibowo', 'Snack', 84021, 'Snack.jpg', 'Et ipsum non doloremque est quisquam repellat voluptas totam. Dolorum sed reiciendis aut unde ut quaerat. Laborum eligendi ut deleniti nihil facilis quae perferendis.', '2024-11-14 11:43:06', '2024-11-14 11:43:06'),
('59a36980-34b1-36f7-8548-6ee01bfb1276', '5', 'Kurnia Tarihoran', 'Makanan', 38192, 'Makanan.jpg', 'Ad atque explicabo animi est sunt qui. Dolore voluptatem maxime et exercitationem quibusdam. Aut dolores a laudantium. Corrupti in non eveniet.', '2024-11-14 11:43:06', '2024-11-14 11:43:06'),
('5cf642c8-77ed-3fba-b4f9-64b8df6a87ef', '3', 'Marsudi Adriansyah', 'Snack', 94185, 'Snack.jpg', 'Ab omnis exercitationem quia dignissimos sed. Sint tempore dolores autem mollitia eaque saepe consequuntur. Optio ipsam voluptatem mollitia dicta. Qui dignissimos itaque aut aut laudantium.', '2024-11-14 11:43:06', '2024-11-14 11:43:06'),
('5da1e5f5-3e11-3ef4-aeed-3dd985a35bfd', '12', 'Dwi Hendra Sihotang M.Ak', 'Minuman', 58609, 'Minuman.jpg', 'Est et recusandae nesciunt eos dolore voluptatem. Magni tenetur tempora quia. Nostrum et quia enim dolor et velit a facilis. Aut culpa excepturi odit quidem.', '2024-11-14 11:43:06', '2024-11-14 11:43:06'),
('6bcd3183-94ae-3398-9d73-03c58a1ba1e2', '13', 'Hani Usamah', 'Snack', 25756, 'Snack.jpg', 'Commodi eos deleniti necessitatibus quia autem qui. Non quis aut qui itaque non quis consectetur.', '2024-11-14 11:43:06', '2024-11-14 11:43:06'),
('6d7630e9-c2ef-3882-b46f-bc45a04bf61e', '11', 'Hamzah Raditya Wibowo', 'Snack', 16665, 'Snack.jpg', 'Laboriosam soluta distinctio velit et. Aut sequi iure totam laboriosam qui odio. Ex sapiente dolorem adipisci nisi enim consequatur. Odio eveniet vel et eos veniam aut deserunt.', '2024-11-14 11:43:06', '2024-11-14 11:43:06'),
('74b2646e-a1f9-31d9-8a29-312e89d3287b', '2', 'Cahyo Latif Sihombing', 'Makanan', 37112, 'Makanan.jpg', 'Temporibus blanditiis odit voluptas recusandae non. Quia possimus quam et blanditiis sequi amet. Quia quia voluptates et.', '2024-11-14 11:43:06', '2024-11-14 11:43:06'),
('76f977cf-54b0-3bb1-98b9-dd0232c8cace', '2', 'Oni Syahrini Lestari S.Kom', 'Minuman', 65789, 'Minuman.jpg', 'Sed vel sit dolores eius cum molestiae. Quod nemo est eaque omnis ipsam debitis dolor. Iusto eius ducimus temporibus facilis aliquid blanditiis. Voluptatem recusandae expedita sint aut quibusdam.', '2024-11-14 11:43:06', '2024-11-14 11:43:06'),
('781176f6-41b8-3d5b-bc43-5bdbe1fe4c38', '3', 'Balidin Narji Lazuardi S.E.', 'Minuman', 91909, 'Minuman.jpg', 'Ut necessitatibus fugit sint atque et earum molestiae. Amet dolorem reiciendis soluta officia. Labore perferendis earum velit praesentium. Impedit quaerat consequatur sequi eius quam eum.', '2024-11-14 11:43:06', '2024-11-14 11:43:06'),
('787eba61-027c-3e97-88c1-fd52ced00aa4', '8', 'Humaira Pratiwi', 'Minuman', 59135, 'Minuman.jpg', 'Consequuntur est qui in magni sint quia. Repellendus sint aut eum. Harum explicabo tempore est. Sequi qui dolorem sed ducimus consequatur ut iusto.', '2024-11-14 11:43:06', '2024-11-14 11:43:06'),
('789c88fc-866e-33d9-bd0e-356392b10caf', '3', 'Kezia Palastri', 'Snack', 36922, 'Snack.jpg', 'Fuga quasi veritatis qui. Ut optio est dolorem suscipit harum quaerat sunt consequuntur.', '2024-11-14 11:43:06', '2024-11-14 11:43:06'),
('7c2706a7-d533-3d52-96bd-da3f63347bf4', '13', 'Tania Utami', 'Makanan', 58077, 'Makanan.jpg', 'Enim dolorem aut est omnis fugit amet. Autem est sed quod laborum dolor officiis et. Facere molestias ullam magni est excepturi cupiditate expedita.', '2024-11-14 11:43:06', '2024-11-14 11:43:06'),
('8020d153-ca68-3e23-a23e-b5c7c015b5be', '14', 'Jaya Simon Prasetya', 'Snack', 62797, 'Snack.jpg', 'Doloremque reiciendis accusantium ut expedita. Illum provident aut non.', '2024-11-14 11:43:06', '2024-11-14 11:43:06'),
('812400be-b942-3338-9dbb-1e0ca478256e', '13', 'Balangga Langgeng Saptono S.E.I', 'Minuman', 46677, 'Minuman.jpg', 'Non consequuntur nemo iusto a corporis eos iure. Sint nobis labore libero quam occaecati in aut.', '2024-11-14 11:43:06', '2024-11-14 11:43:06'),
('853b4463-3348-3fb8-a1ef-f7347b7d1089', '14', 'Caraka Budiyanto', 'Minuman', 58741, 'Minuman.jpg', 'Et voluptatum molestiae assumenda dolores eius. Harum quo labore quam sapiente. Enim id dolores magnam doloribus omnis dolor laborum.', '2024-11-14 11:43:06', '2024-11-14 11:43:06'),
('93f12658-b51f-3ed8-ba6f-55956f880848', '5', 'Maimunah Andriani', 'Makanan', 68157, 'Makanan.jpg', 'Qui ut illo doloribus quo. Soluta autem fugiat impedit autem magni quae. Mollitia est mollitia ipsa quis rerum amet quo. Quasi illo sunt voluptatum esse nihil.', '2024-11-14 11:43:06', '2024-11-14 11:43:06'),
('951b1cbe-e3d7-3a61-956f-88807bfcc479', '5', 'Reksa Gunawan', 'Snack', 79064, 'Snack.jpg', 'Consequatur ad quos vel quasi inventore et eveniet id. Dolorum distinctio voluptas alias nihil. Iusto sed mollitia iure temporibus alias a tempore reprehenderit.', '2024-11-14 11:43:06', '2024-11-14 11:43:06'),
('aa074dd9-c63b-35d7-884a-6d7131524d36', '2', 'Virman Edi Ramadan S.Farm', 'Makanan', 13259, 'Makanan.jpg', 'Laudantium illum id sed repudiandae. Laborum inventore sed dolores qui impedit amet. Libero mollitia enim dolor necessitatibus animi.', '2024-11-14 11:43:06', '2024-11-14 11:43:06'),
('abb3ce32-8650-3660-8f1e-fbc4b30ac4f6', '9', 'Heru Haryanto S.Farm', 'Minuman', 82030, 'Minuman.jpg', 'Quos voluptatum qui quaerat quidem sint iure. Fugit veniam aliquid eligendi consequuntur sint atque neque eum. Consectetur molestiae non veritatis tempora occaecati. Nisi rerum consequatur ipsa ut.', '2024-11-14 11:43:06', '2024-11-14 11:43:06'),
('afece6b8-e994-3a2b-a9e2-59487d8b4ccf', '2', 'Kayla Mayasari', 'Snack', 57078, 'Snack.jpg', 'Voluptate pariatur omnis deserunt excepturi commodi non. Fugiat debitis ad quam culpa et omnis. Unde molestiae voluptatem qui eos eveniet voluptatum. Culpa sit porro quos quibusdam.', '2024-11-14 11:43:06', '2024-11-14 11:43:06'),
('b4318918-7b53-3d7e-a49e-956f239e1ec9', '4', 'Jamal Tarihoran', 'Snack', 10128, 'Snack.jpg', 'Aliquam non et deserunt aut. Fugit eligendi eaque enim est itaque optio. Consequatur quia voluptate alias sed. Ipsam maiores magni qui fugiat officia. Sit et ut rerum quos quo.', '2024-11-14 11:43:06', '2024-11-14 11:43:06'),
('b9e40a83-7967-3d85-a23e-b3eeb23d5ab4', '7', 'Nurul Wastuti', 'Makanan', 48882, 'Makanan.jpg', 'Perferendis consequatur aut nostrum itaque. Dignissimos animi enim nihil cum quibusdam exercitationem consectetur. Et et debitis est tenetur.', '2024-11-14 11:43:06', '2024-11-14 11:43:06'),
('ba1a8f30-f1ba-3810-9fcd-e7052106a182', '11', 'Reksa Kusuma Habibi S.Ked', 'Makanan', 26802, 'Makanan.jpg', 'Dolores iusto ut praesentium. Id voluptatem libero fuga et iure. Dolore voluptas et repellendus hic enim illum.', '2024-11-14 11:43:06', '2024-11-14 11:43:06'),
('bc76b175-f07b-389f-b4d2-d3362230127f', '3', 'Keisha Suryatmi', 'Snack', 92999, 'Snack.jpg', 'Inventore autem officiis in sunt incidunt. Rem fuga et quaerat est minus omnis quos. Nemo atque doloremque quos incidunt nostrum maiores. Commodi officiis nihil et ab asperiores.', '2024-11-14 11:43:06', '2024-11-14 11:43:06'),
('c6a39c2a-4441-3cbc-a5f6-d63ea8d1edf4', '8', 'Mulyono Balidin Wasita', 'Snack', 70611, 'Snack.jpg', 'Perspiciatis doloremque voluptatum qui suscipit voluptate quisquam. Reprehenderit maiores quaerat quia illum ducimus.', '2024-11-14 11:43:06', '2024-11-14 11:43:06'),
('d1221240-43bb-36d3-913a-255beaa46063', '2', 'Nrima Bakiadi Wahyudin', 'Minuman', 47424, 'Minuman.jpg', 'Exercitationem rerum aperiam voluptatibus incidunt magni architecto iste. Et ut aliquid consequatur rem temporibus ut. Nihil maxime distinctio id pariatur quis ex.', '2024-11-14 11:43:06', '2024-11-14 11:43:06'),
('d4de8568-d3c2-3c39-93e0-2710c39983be', '10', 'Asmuni Prakasa', 'Minuman', 26991, 'Minuman.jpg', 'Dolores aut voluptas eligendi commodi est aut. Quisquam ullam tenetur quo ipsam. Et dolores libero aut. Et nobis molestias vitae quasi quasi neque.', '2024-11-14 11:43:06', '2024-11-14 11:43:06'),
('d9666181-8820-397e-b254-e31b3838fd5d', '10', 'Yulia Novitasari', 'Snack', 31184, 'Snack.jpg', 'Labore tenetur eius consequatur tenetur ea. Consequatur ab consequuntur sunt sed nihil totam. Sed eum sed quia aut recusandae dolor pariatur qui. Officiis itaque ex ipsum rerum molestias.', '2024-11-14 11:43:06', '2024-11-14 11:43:06'),
('db800750-d579-3bcf-822e-8b0db157bab1', '11', 'Vera Oktaviani M.Kom.', 'Makanan', 90383, 'Makanan.jpg', 'Reprehenderit quia non fugiat sed qui. Adipisci voluptatibus et mollitia harum sit quos in aperiam. Sapiente officia sunt aperiam quam harum quia omnis.', '2024-11-14 11:43:06', '2024-11-14 11:43:06'),
('dc4b5d82-efe7-3fe0-950b-4f7f3d7c567a', '6', 'Malika Laila Wijayanti', 'Makanan', 75187, 'Makanan.jpg', 'Sit qui animi deleniti dicta est ex. Sit nemo totam quam omnis accusantium voluptatem. Molestiae cumque sint cum voluptatem iste numquam cum.', '2024-11-14 11:43:06', '2024-11-14 11:43:06'),
('e6df62ab-b726-3678-ba11-79652e103790', '12', 'Catur Waskita S.Sos', 'Minuman', 88769, 'Minuman.jpg', 'Atque numquam recusandae nostrum necessitatibus. Ut at mollitia sequi atque. Dolor laboriosam odit iusto non incidunt.', '2024-11-14 11:43:06', '2024-11-14 11:43:06'),
('e82229b4-8e81-3429-8e7a-a0d351b2c0a1', '1', 'Mustika Kasim Gunarto S.Pt', 'Snack', 38781, 'Snack.jpg', 'Consequuntur dicta totam sit blanditiis repellendus dolorem libero. Et quia placeat quia est nobis. Facere aut autem aliquam velit.', '2024-11-14 11:43:06', '2024-11-14 11:43:06'),
('e95d3d07-3885-354b-a4cc-1e1ce85f7508', '12', 'Ghaliyati Nasyiah', 'Snack', 98969, 'Snack.jpg', 'Dolores officia quia tenetur aliquam aut. Hic aut iste asperiores expedita sed laborum magnam. Vero voluptas nihil aliquam reiciendis est. Dolorum est qui sunt vel qui iste.', '2024-11-14 11:43:06', '2024-11-14 11:43:06'),
('eff8948f-635f-36f5-a212-78789a43949c', '3', 'Eluh Kasim Natsir S.E.I', 'Makanan', 54056, 'Makanan.jpg', 'Corrupti minima earum voluptatem culpa nihil debitis. Animi distinctio fuga et molestiae quod aut sed.', '2024-11-14 11:43:06', '2024-11-14 11:43:06'),
('f2a173a8-b871-3ac2-9fef-6ce99e26098f', '3', 'Virman Prasetya', 'Minuman', 33559, 'Minuman.jpg', 'Ullam commodi vero est eos odit deserunt. Excepturi suscipit hic consequuntur esse ea ullam sunt. Doloribus in ea excepturi eligendi pariatur.', '2024-11-14 11:43:06', '2024-11-14 11:43:06'),
('f2c5ddc8-7766-3165-a5ed-275326e73d3d', '9', 'Tina Nuraini', 'Makanan', 50918, 'Makanan.jpg', 'Consectetur accusantium amet earum nesciunt dolorem sint rem. Quo ut id repellendus dignissimos voluptatem. Sed ducimus corporis qui exercitationem sunt. Nesciunt reiciendis eos ducimus aut.', '2024-11-14 11:43:06', '2024-11-14 11:43:06'),
('fe98017f-98b9-3ddf-ae0a-db1e139bf3fd', '10', 'Belinda Lintang Hastuti', 'Snack', 22745, 'Snack.jpg', 'Magnam impedit qui voluptas nemo sed dolores. Fugiat nemo voluptatem eum ipsam nam. Error et necessitatibus consequatur incidunt nam et velit.', '2024-11-14 11:43:06', '2024-11-14 11:43:06'),
('ff3a0134-2ca5-31c6-8cc7-9ba511553fa8', '2', 'Anastasia Rahayu S.Pt', 'Minuman', 54750, 'Minuman.jpg', 'Hic similique aut atque enim. Eos perferendis explicabo dolorem veniam debitis ratione fugiat. Veritatis dignissimos magnam voluptatem non quo voluptatem. Et rerum delectus quasi omnis repellat et.', '2024-11-14 11:43:06', '2024-11-14 11:43:06');

-- --------------------------------------------------------

--
-- Table structure for table `m__orders`
--

CREATE TABLE `m__orders` (
  `id` char(36) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `menu_id` varchar(255) NOT NULL,
  `tanggal_order` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `m__orders`
--

INSERT INTO `m__orders` (`id`, `user_id`, `menu_id`, `tanggal_order`, `created_at`, `updated_at`) VALUES
('842a572b-9f43-327e-b0e9-375b03929e39', '16', 'e95d3d07-3885-354b-a4cc-1e1ce85f7508', '2002-12-31', '2024-11-14 11:43:06', '2024-11-14 11:43:06'),
('0e8fbba1-b74c-3c46-a3d8-e67f7160e3a8', '16', '812400be-b942-3338-9dbb-1e0ca478256e', '2010-11-07', '2024-11-14 11:43:06', '2024-11-14 11:43:06'),
('db3ec059-3216-3419-9beb-b52c16921beb', '16', '105843d1-3b84-3652-b85d-dee076be2d99', '2003-03-28', '2024-11-14 11:43:06', '2024-11-14 11:43:06'),
('c3b7759a-2ba8-3607-a7ee-48a56e57c572', '16', 'd4de8568-d3c2-3c39-93e0-2710c39983be', '1973-12-07', '2024-11-14 11:43:06', '2024-11-14 11:43:06'),
('aded2d93-47d8-3be0-a60d-2f77c86291bd', '16', '011133d9-631b-3d13-a6e1-8a8a19bfc183', '2011-12-27', '2024-11-14 11:43:06', '2024-11-14 11:43:06'),
('8428970a-5019-37f2-acba-1ed94ae6f1ad', '16', '30bfacd5-9575-30fd-b49c-9e88fed9798d', '2010-09-06', '2024-11-14 11:43:06', '2024-11-14 11:43:06'),
('b6d7bd65-e7f9-3b53-b0dd-ae9d7a347fc3', '16', 'ff3a0134-2ca5-31c6-8cc7-9ba511553fa8', '2001-07-13', '2024-11-14 11:43:06', '2024-11-14 11:43:06'),
('96457023-613c-3aa4-a118-75883f088d92', '16', '76f977cf-54b0-3bb1-98b9-dd0232c8cace', '1980-06-27', '2024-11-14 11:43:06', '2024-11-14 11:43:06'),
('a7c00168-ccd2-32ae-86b1-b156fdc86bce', '16', '30bfacd5-9575-30fd-b49c-9e88fed9798d', '1988-11-03', '2024-11-14 11:43:06', '2024-11-14 11:43:06'),
('f8518f6a-c562-3280-b5af-edaad7b6c672', '16', 'db800750-d579-3bcf-822e-8b0db157bab1', '2005-10-19', '2024-11-14 11:43:06', '2024-11-14 11:43:06');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('k8ficAkcppNqkQEyVIb8jFY7P20evrm3XydT5IFl', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoidEJKQ3FJVmIwc1lrWU0waU1EMmF5RUtlb0F1OElLT0s3N0ZwMElGdyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyNzoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2Fib3V0Ijt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1731587518);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 1,
  `avatar` varchar(255) DEFAULT NULL,
  `alamat` text NOT NULL,
  `kontak` varchar(255) NOT NULL,
  `distance` int(11) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `password_confirmation` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `role`, `avatar`, `alamat`, `kontak`, `distance`, `password`, `password_confirmation`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Bryon Ebert', 'wallace15@example.net', NULL, 2, 'https://via.placeholder.com/640x480.png/00aa77?text=cumque', '65904 Yost Passage Suite 906\nLanghaven, MN 82516', '283-297-7807', 25, '$2y$12$o9d5lYMn0faMBCZ.R0FZn.m7rNhTIn4VJEvNHm7hfyJImRA.0D/ce', '$2y$12$CJK1enklH6nwu1uRgblYb.jG8MeN7yLW/XZz/Xe9AvWqaE3ewhevK', NULL, '2024-11-14 11:43:05', '2024-11-14 11:43:05'),
(2, 'Wallace Barton', 'umitchell@example.com', NULL, 2, 'https://via.placeholder.com/640x480.png/0099ff?text=omnis', '1002 Labadie Station Suite 525\nNew Neha, KY 67880-9385', '+1 (747) 960-1969', 8, '$2y$12$5VO2elKD84SM9fhMd.42r.jqtz5kODKLHhWy84tiHjWTV7U8q0jd6', '$2y$12$yTViabooElXiYR/Tj419yeXkcVF91tSFP9fme2xsNukljForuM7GO', NULL, '2024-11-14 11:43:05', '2024-11-14 11:43:05'),
(3, 'Angie Bernier', 'loyce77@example.net', NULL, 2, 'https://via.placeholder.com/640x480.png/00aaaa?text=amet', '79717 Gloria Crest Apt. 337\nUriahfurt, MD 28269-1841', '+1.220.670.9519', 28, '$2y$12$2omY0vWCw4jVDzKAMX0vze0E3E9dsIIN.09DeZ5yMW8Pqs.S/VKn2', '$2y$12$.3tc6XqWTqstdshmC0NaLOoOZHMaGHeOaQU5QORn5G0uRcNi8Tgoa', NULL, '2024-11-14 11:43:05', '2024-11-14 11:43:05'),
(4, 'Tamia Abshire IV', 'tatum68@example.org', NULL, 2, 'https://via.placeholder.com/640x480.png/009933?text=incidunt', '7203 Medhurst Station Apt. 772\nSouth Alexashire, PA 44423-3816', '479.979.8478', 10, '$2y$12$4SRj.Zsh2ctXoTBKt1Is8OniZEBd8UfLxu.54YqMdxDQ3zN/WBjAS', '$2y$12$nOUiS/UXgjgEtQz8uGX7EOV/QXufEyXnZKBnINHrWBPfU92QnzT32', NULL, '2024-11-14 11:43:05', '2024-11-14 11:43:05'),
(5, 'Maurice Kohler', 'carroll77@example.net', NULL, 2, 'https://via.placeholder.com/640x480.png/0044bb?text=nobis', '269 Crooks Prairie\nPort Thora, MI 55794-1932', '360-936-3679', 17, '$2y$12$aAQWrAIOcwNn6x4lzYYnbeXxdgLsO12D7UBhvNAdhkBiUK/t3Z.u2', '$2y$12$LEGyOzgDklxD/PRlAF/hWO8vT2ZEr57ModUcSW9FHWxQRQXKsJK8y', NULL, '2024-11-14 11:43:05', '2024-11-14 11:43:05'),
(6, 'Lacy Upton I', 'salvatore.rohan@example.org', NULL, 2, 'https://via.placeholder.com/640x480.png/00cc00?text=minima', '900 Wyman Groves\nSouth Sabinaberg, NE 18848', '(980) 679-6657', 18, '$2y$12$yNKkC6T9GwhUBaf44MVm4.oV.rXBlFB6.TKwOq5KngmjyRuW/GJm2', '$2y$12$7T9vXUzP9Ctwbz1nlDZ8ouqZq7Vx1KisUCWbmzRGeAFmGNvKmY5oS', NULL, '2024-11-14 11:43:05', '2024-11-14 11:43:05'),
(7, 'Sigmund Medhurst', 'ekulas@example.com', NULL, 2, 'https://via.placeholder.com/640x480.png/00ff77?text=numquam', '7834 Watsica Overpass\nJeremiefort, AZ 73969-5480', '1-818-220-3678', 18, '$2y$12$B.65fgdv1.ymji1J0lzIXelNAO6Xy9/J0ag2c1jxgRoYkL4XOss7O', '$2y$12$Wa1uEE3UJV/1aGsFlUKuSO0fc3HMZVqo412cdbfuf1panLjCfxUHK', NULL, '2024-11-14 11:43:05', '2024-11-14 11:43:05'),
(8, 'Angelo Bechtelar', 'yvonne99@example.net', NULL, 2, 'https://via.placeholder.com/640x480.png/00ee11?text=ut', '669 Moen Meadow Apt. 160\nEast Destinton, MI 35175-4253', '865-206-6281', 5, '$2y$12$.vrRNKBFVx2.57Sufjs8peHK3WfZp1qmd6.SZQYr9DrlMbbkspy0.', '$2y$12$MO50x3F79QOl3mLlbEmKPulZstqEGjyOg/036X0tUYpU9hez19QSu', NULL, '2024-11-14 11:43:05', '2024-11-14 11:43:05'),
(9, 'Darlene Wyman', 'neoma93@example.com', NULL, 2, 'https://via.placeholder.com/640x480.png/0033ee?text=officia', '3022 Quitzon Ridges\nJohnsonburgh, NY 94528-5191', '+13515202799', 30, '$2y$12$BUQqX9nx.TJD7SuvNkNt0uSSwCZ0Xrv6i9BBaEDNi7WQqv96uYAj.', '$2y$12$dB03JrDSZvXOUC7hp9rLXOHhtYSyyQCbceNRhdIZqeU4Y/cNM.hjq', NULL, '2024-11-14 11:43:05', '2024-11-14 11:43:05'),
(10, 'Madison Anderson III', 'oberbrunner.carey@example.net', NULL, 2, 'https://via.placeholder.com/640x480.png/00ff99?text=suscipit', '941 Rosanna Trail\nTaylorshire, ID 82479', '323.976.7380', 18, '$2y$12$Q7ZuCJlATLqJzpfGcUvZ..slojlt496.HdrKwt.8vExk5zyX5q26C', '$2y$12$QTordUqegmb869L82jFOyO5hGaIbXs4EA2zEzeHoforuFJ9gTbuiG', NULL, '2024-11-14 11:43:05', '2024-11-14 11:43:05'),
(11, 'Therese Abbott', 'edison.bednar@example.com', NULL, 2, 'https://via.placeholder.com/640x480.png/009977?text=voluptatibus', '58420 Willow Island Suite 971\nPagactown, NE 88695', '+1 (947) 631-5177', 6, '$2y$12$EW2YQOs1WdRLU6SV7ckfEOhU3di7rboXEQSUowVP6YwE4kJ2.Ja56', '$2y$12$/Qolqeyg3izqBLFPUTBtMuEGf8JM4vZ1QKJnHx2uOnqPoCYrhysvi', NULL, '2024-11-14 11:43:05', '2024-11-14 11:43:05'),
(12, 'Leora Stoltenberg', 'mayert.simone@example.com', NULL, 2, 'https://via.placeholder.com/640x480.png/001177?text=excepturi', '633 Walsh Glen Apt. 249\nNorth Ebony, AL 96559-2709', '1-352-432-3835', 15, '$2y$12$3Tcf4GT.k9I4h8pai99KeezABcTSLVh08igc1t0/uVsxTYGeZodeO', '$2y$12$gc3RRvoKqb2XbfJZ9on/4.UfMenjO5E5cQgB8NCNT/yWG2I8iPcI6', NULL, '2024-11-14 11:43:05', '2024-11-14 11:43:05'),
(13, 'Clement Romaguera', 'nader.meggie@example.net', NULL, 2, 'https://via.placeholder.com/640x480.png/00cc11?text=incidunt', '81344 Christiansen Heights\nPort Maryshire, MT 75227-8918', '+16369826079', 18, '$2y$12$cEYvQORZtqt1YiCaroaVKesZBX.qtFjtBFsZY1fMNdrIC2KWiagw.', '$2y$12$ry2jiEQugwFGbG43hxLT3ulemp1TkIYM4kI8AC954S0Xif0TCP8Cq', NULL, '2024-11-14 11:43:05', '2024-11-14 11:43:05'),
(14, 'Catherine Spinka', 'rcrooks@example.com', NULL, 2, 'https://via.placeholder.com/640x480.png/005522?text=nihil', '2110 Streich Vista Suite 789\nGulgowskiside, WY 41107-8402', '(707) 972-8772', 6, '$2y$12$FutNU1uNBv1fAsxKYPnyEOjxH8On.t4iuvqw2fZ4/n7BKEZXcFZVi', '$2y$12$XIEOSWVskyOWcwFgj8fTv.PGhM0Q35dn78PWp8PCF7si4BOPJhDOm', NULL, '2024-11-14 11:43:05', '2024-11-14 11:43:05'),
(15, 'Tyrique Maggio', 'clare.okon@example.net', NULL, 2, 'https://via.placeholder.com/640x480.png/003300?text=numquam', '922 Lance Locks Apt. 096\nEast Lloydchester, MT 61200', '1-912-723-2645', 10, '$2y$12$rTTdylujgelFzwU0yHt3zeJ0wkdywqpsbr.tCV9Wb6e5EoIGLgCti', '$2y$12$S7tFCSndzJa21TgTwqkrVOo3rDTQ3ZWLtyuA72MbNlgzRE/uGN/mO', NULL, '2024-11-14 11:43:05', '2024-11-14 11:43:05'),
(16, 'customer', 'customer@gmail.com', NULL, 1, 'https://via.placeholder.com/640x480.png/0044bb?text=in', '32735 Danial Island\nSouth Erikborough, NE 09399-3905', '+17349929238', NULL, '$2y$12$NrZe0JvwMKJJcKCImOa7nOkyZ/RwE61jJHIJTtyAdyDaZm/0R1ope', '$2y$12$ydveC0V5.aeFnUJ08FJ62uQyx7mSffEbRu3FOInzMBcKDdhS6mVUG', NULL, '2024-11-14 11:43:06', '2024-11-14 11:43:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m__menus`
--
ALTER TABLE `m__menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
