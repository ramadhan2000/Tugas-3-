# Host: localhost  (Version 5.5.5-10.4.11-MariaDB)
# Date: 2021-11-16 12:52:25
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "mahasiswa"
#

DROP TABLE IF EXISTS `mahasiswa`;
CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(200) NOT NULL,
  `nim` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

#
# Data for table "mahasiswa"
#

INSERT INTO `mahasiswa` VALUES (1,'Ramadhan Destyanta','1911511598','Jl.AMD X'),(2,'Agus Widodod','1911510830','Jl.Inpres'),(3,'Kartiko Setyoardi','1911511358','Jl.Kabin'),(4,'Febryan Ali Akbar','1911510525','Jl. Kebayoran Lama'),(5,'Aprilyani','1911512158','Jl.Tanah Seratus');
