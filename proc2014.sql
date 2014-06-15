# Host: localhost  (Version: 5.5.16)
# Date: 2014-06-01 13:37:44
# Generator: MySQL-Front 5.3  (Build 4.100)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "bpwc"
#

DROP TABLE IF EXISTS `bpwc`;
CREATE TABLE `bpwc` (
  `id_info` int(11) NOT NULL AUTO_INCREMENT,
  `Tanggal` date NOT NULL,
  `nama_info` varchar(200) CHARACTER SET utf8 NOT NULL,
  `link` varchar(200) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id_info`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

#
# Data for table "bpwc"
#

/*!40000 ALTER TABLE `bpwc` DISABLE KEYS */;
INSERT INTO `bpwc` VALUES (38,'1899-11-10','bpwc','bpwc');
/*!40000 ALTER TABLE `bpwc` ENABLE KEYS */;

#
# Structure for table "brantas"
#

DROP TABLE IF EXISTS `brantas`;
CREATE TABLE `brantas` (
  `id_info` int(11) NOT NULL AUTO_INCREMENT,
  `Tanggal` date NOT NULL,
  `nama_info` varchar(200) CHARACTER SET utf8 NOT NULL,
  `link` varchar(200) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id_info`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

#
# Data for table "brantas"
#

/*!40000 ALTER TABLE `brantas` DISABLE KEYS */;
/*!40000 ALTER TABLE `brantas` ENABLE KEYS */;

#
# Structure for table "cirata"
#

DROP TABLE IF EXISTS `cirata`;
CREATE TABLE `cirata` (
  `id_info` int(11) NOT NULL AUTO_INCREMENT,
  `Tanggal` date NOT NULL,
  `nama_info` varchar(200) CHARACTER SET utf8 NOT NULL,
  `link` varchar(200) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id_info`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

#
# Data for table "cirata"
#

/*!40000 ALTER TABLE `cirata` DISABLE KEYS */;
/*!40000 ALTER TABLE `cirata` ENABLE KEYS */;

#
# Structure for table "gresik"
#

DROP TABLE IF EXISTS `gresik`;
CREATE TABLE `gresik` (
  `id_info` int(11) NOT NULL AUTO_INCREMENT,
  `Tanggal` date NOT NULL,
  `nama_info` varchar(200) CHARACTER SET utf8 NOT NULL,
  `link` varchar(200) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id_info`)
) ENGINE=MyISAM AUTO_INCREMENT=75 DEFAULT CHARSET=latin1;

#
# Data for table "gresik"
#

/*!40000 ALTER TABLE `gresik` DISABLE KEYS */;
/*!40000 ALTER TABLE `gresik` ENABLE KEYS */;

#
# Structure for table "kantorpusat"
#

DROP TABLE IF EXISTS `kantorpusat`;
CREATE TABLE `kantorpusat` (
  `id_info` int(11) NOT NULL AUTO_INCREMENT,
  `Tanggal` date NOT NULL DEFAULT '0000-00-00',
  `nama_info` varchar(200) CHARACTER SET utf8 NOT NULL,
  `link` varchar(200) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id_info`)
) ENGINE=MyISAM AUTO_INCREMENT=99 DEFAULT CHARSET=latin1;

#
# Data for table "kantorpusat"
#

/*!40000 ALTER TABLE `kantorpusat` DISABLE KEYS */;
INSERT INTO `kantorpusat` VALUES (1,'1899-11-30','Kantor Pusat','file baru.pdf');
/*!40000 ALTER TABLE `kantorpusat` ENABLE KEYS */;

#
# Structure for table "muarakarang"
#

DROP TABLE IF EXISTS `muarakarang`;
CREATE TABLE `muarakarang` (
  `id_info` int(11) NOT NULL AUTO_INCREMENT,
  `Tanggal` date NOT NULL,
  `nama_info` varchar(200) CHARACTER SET utf8 NOT NULL,
  `link` varchar(200) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id_info`)
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

#
# Data for table "muarakarang"
#

/*!40000 ALTER TABLE `muarakarang` DISABLE KEYS */;
/*!40000 ALTER TABLE `muarakarang` ENABLE KEYS */;

#
# Structure for table "muaratawar"
#

DROP TABLE IF EXISTS `muaratawar`;
CREATE TABLE `muaratawar` (
  `id_info` int(11) NOT NULL AUTO_INCREMENT,
  `Tanggal` date NOT NULL,
  `nama_info` varchar(200) CHARACTER SET utf8 NOT NULL,
  `link` varchar(200) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id_info`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

#
# Data for table "muaratawar"
#

/*!40000 ALTER TABLE `muaratawar` DISABLE KEYS */;
/*!40000 ALTER TABLE `muaratawar` ENABLE KEYS */;

#
# Structure for table "paiton"
#

DROP TABLE IF EXISTS `paiton`;
CREATE TABLE `paiton` (
  `id_info` int(11) NOT NULL AUTO_INCREMENT,
  `Tanggal` date NOT NULL,
  `nama_info` varchar(200) CHARACTER SET utf8 NOT NULL,
  `link` varchar(200) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id_info`)
) ENGINE=MyISAM AUTO_INCREMENT=80 DEFAULT CHARSET=latin1;

#
# Data for table "paiton"
#

/*!40000 ALTER TABLE `paiton` DISABLE KEYS */;
/*!40000 ALTER TABLE `paiton` ENABLE KEYS */;

#
# Structure for table "ubjomrembang"
#

DROP TABLE IF EXISTS `ubjomrembang`;
CREATE TABLE `ubjomrembang` (
  `id_info` int(11) NOT NULL AUTO_INCREMENT,
  `Tanggal` date NOT NULL,
  `nama_info` varchar(200) CHARACTER SET utf8 NOT NULL,
  `link` varchar(200) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id_info`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

#
# Data for table "ubjomrembang"
#

/*!40000 ALTER TABLE `ubjomrembang` DISABLE KEYS */;
/*!40000 ALTER TABLE `ubjomrembang` ENABLE KEYS */;

#
# Structure for table "ubjomtanjungawarawar"
#

DROP TABLE IF EXISTS `ubjomtanjungawarawar`;
CREATE TABLE `ubjomtanjungawarawar` (
  `id_info` int(11) NOT NULL AUTO_INCREMENT,
  `Tanggal` date NOT NULL,
  `nama_info` varchar(200) CHARACTER SET utf8 NOT NULL,
  `gambar` varchar(200) CHARACTER SET utf8 NOT NULL,
  `link` varchar(200) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id_info`)
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

#
# Data for table "ubjomtanjungawarawar"
#

/*!40000 ALTER TABLE `ubjomtanjungawarawar` DISABLE KEYS */;
/*!40000 ALTER TABLE `ubjomtanjungawarawar` ENABLE KEYS */;

#
# Structure for table "upharbarat"
#

DROP TABLE IF EXISTS `upharbarat`;
CREATE TABLE `upharbarat` (
  `id_info` int(11) NOT NULL AUTO_INCREMENT,
  `Tanggal` date NOT NULL,
  `nama_info` varchar(200) CHARACTER SET utf8 NOT NULL,
  `link` varchar(200) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id_info`)
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

#
# Data for table "upharbarat"
#

/*!40000 ALTER TABLE `upharbarat` DISABLE KEYS */;
/*!40000 ALTER TABLE `upharbarat` ENABLE KEYS */;

#
# Structure for table "uphartimur"
#

DROP TABLE IF EXISTS `uphartimur`;
CREATE TABLE `uphartimur` (
  `id_info` int(11) NOT NULL AUTO_INCREMENT,
  `Tanggal` date NOT NULL,
  `nama_info` varchar(200) CHARACTER SET utf8 NOT NULL,
  `link` varchar(200) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id_info`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

#
# Data for table "uphartimur"
#

/*!40000 ALTER TABLE `uphartimur` DISABLE KEYS */;
/*!40000 ALTER TABLE `uphartimur` ENABLE KEYS */;

#
# Structure for table "upjomindramayu"
#

DROP TABLE IF EXISTS `upjomindramayu`;
CREATE TABLE `upjomindramayu` (
  `id_info` int(11) NOT NULL AUTO_INCREMENT,
  `Tanggal` date NOT NULL,
  `nama_info` varchar(200) CHARACTER SET utf8 NOT NULL,
  `link` varchar(200) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id_info`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

#
# Data for table "upjomindramayu"
#

/*!40000 ALTER TABLE `upjomindramayu` DISABLE KEYS */;
/*!40000 ALTER TABLE `upjomindramayu` ENABLE KEYS */;

#
# Structure for table "upjompacitan"
#

DROP TABLE IF EXISTS `upjompacitan`;
CREATE TABLE `upjompacitan` (
  `id_info` int(11) NOT NULL AUTO_INCREMENT,
  `Tanggal` date NOT NULL,
  `nama_info` varchar(200) CHARACTER SET utf8 NOT NULL,
  `link` varchar(200) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id_info`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

#
# Data for table "upjompacitan"
#

/*!40000 ALTER TABLE `upjompacitan` DISABLE KEYS */;
/*!40000 ALTER TABLE `upjompacitan` ENABLE KEYS */;

#
# Structure for table "upjompaiton"
#

DROP TABLE IF EXISTS `upjompaiton`;
CREATE TABLE `upjompaiton` (
  `id_info` int(11) NOT NULL AUTO_INCREMENT,
  `Tanggal` date NOT NULL,
  `nama_info` varchar(200) CHARACTER SET utf8 NOT NULL,
  `link` varchar(200) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id_info`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

#
# Data for table "upjompaiton"
#

/*!40000 ALTER TABLE `upjompaiton` DISABLE KEYS */;
/*!40000 ALTER TABLE `upjompaiton` ENABLE KEYS */;

#
# Structure for table "users"
#

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `username` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `level` varchar(20) COLLATE latin1_general_ci NOT NULL DEFAULT 'admin',
  `blokir` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'N',
  `id_session` varchar(100) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

#
# Data for table "users"
#

/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES ('ardha','ardha','su','N',''),('bpwc','bpwc','bpwc','N',''),('brantas','brantas','brantas','N',''),('cirata','cirata','cirata','N',''),('gresik','gresik','gresik','N',''),('kantorpusat','kantorpusat','kantorpusat','N',''),('muarakarang','muarakarang','muarakarang','N',''),('muaratawar','muaratawar','muaratawar','N',''),('paiton','paiton','paiton','N',''),('su','su','su','N',''),('ubjomrembang','ubjomrembang','ubjomrembang','N',''),('ubjomtanjungwarawar','ubjomtanjungwarawar','ubjomtanjungwarawar','N',''),('upharbarat','upharbarat','upharbarat','N',''),('uphartimur','uphartimur','uphartimur','N',''),('upjomindramayu','upjomindramayu','upjomindramayu','N',''),('upjompacitan','upjompacitan','upjompacitan','N',''),('upjompaiton','upjompaiton','upjompaiton','N','');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
