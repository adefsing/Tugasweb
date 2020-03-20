-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.11-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for maduraresto
CREATE DATABASE IF NOT EXISTS `maduraresto` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `maduraresto`;

-- Dumping structure for table maduraresto.tb_galeri
CREATE TABLE IF NOT EXISTS `tb_galeri` (
  `id_galeri` varchar(5) NOT NULL,
  `nama_galeri` varchar(100) NOT NULL,
  `gambar_minuman` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table maduraresto.tb_galeri: ~0 rows (approximately)
/*!40000 ALTER TABLE `tb_galeri` DISABLE KEYS */;
INSERT INTO `tb_galeri` (`id_galeri`, `nama_galeri`, `gambar_minuman`) VALUES
	('5e71d', 'satu', '5e74d0361041f.jpg'),
	('5e72d', 'dua', '5e74d04250dc5.jpg'),
	('5e73d', 'tiga', '5e74d0668ba8a.jpg');
/*!40000 ALTER TABLE `tb_galeri` ENABLE KEYS */;

-- Dumping structure for table maduraresto.tb_makanan
CREATE TABLE IF NOT EXISTS `tb_makanan` (
  `id_makanan` varchar(5) NOT NULL,
  `nama_makanan` varchar(100) NOT NULL,
  `desc_makanan` varchar(100) NOT NULL,
  `gambar_makanan` varchar(100) NOT NULL,
  `harga_makanan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table maduraresto.tb_makanan: ~4 rows (approximately)
/*!40000 ALTER TABLE `tb_makanan` DISABLE KEYS */;
INSERT INTO `tb_makanan` (`id_makanan`, `nama_makanan`, `desc_makanan`, `gambar_makanan`, `harga_makanan`) VALUES
	('5e71', 'Brownis', 'ini adalah brownis', '5e74cd90e11a7.jpg', '50.000'),
	('5e72', 'Bebek Sinjay', 'ini adalah bebek sinjay', '5e74ce11955e5.jpg', '60.000'),
	('5e73c', 'Soto Madura', 'ini adalah soto madura', '5e74ce94ef8e5.jpg', '40.000'),
	('5e75c', 'Sate Madura', 'Ini adalah Sate madura', '5e74cf8461f9d.jpg', '90.000');
/*!40000 ALTER TABLE `tb_makanan` ENABLE KEYS */;

-- Dumping structure for table maduraresto.users
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(64) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `role` enum('admin','customer') NOT NULL DEFAULT 'customer',
  `last_login` timestamp NOT NULL DEFAULT current_timestamp(),
  `photo` varchar(64) NOT NULL DEFAULT 'user_no_image.jpg',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_active` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table maduraresto.users: ~0 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`user_id`, `username`, `password`, `email`, `full_name`, `phone`, `role`, `last_login`, `photo`, `created_at`, `is_active`) VALUES
	(1, 'admin', '$2y$10$Dy4ySqOiDqKisEyoKJEsl.L2psUIjeKMwmp5W3iElRQLKZF0.kKbS', 'adef@admin.com', 'ahmad daifullah', '082338584462', 'admin', '2020-03-20 21:02:57', 'user_no_image.jpg', '2020-03-19 16:25:14', 1);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
