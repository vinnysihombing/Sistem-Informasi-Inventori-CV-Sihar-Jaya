/*
SQLyog Ultimate v8.6 Beta2
MySQL - 5.5.5-10.1.35-MariaDB : Database - inventori_psi
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`inventori_psi` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `inventori_psi`;

/*Table structure for table `migration` */

DROP TABLE IF EXISTS `migration`;

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `migration` */

insert  into `migration`(`version`,`apply_time`) values ('m140506_102106_rbac_init',1558661632),('m170907_052038_rbac_add_index_on_auth_assignment_user_id',1558661633),('m180523_151638_rbac_updates_indexes_without_prefix',1558661633);

/*Table structure for table `t_customer` */

DROP TABLE IF EXISTS `t_customer`;

CREATE TABLE `t_customer` (
  `id_customer` varchar(20) NOT NULL,
  `nama_customer` varchar(50) DEFAULT NULL,
  `alamat_customer` varchar(50) DEFAULT NULL,
  `no_telp_customer` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_customer`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_customer` */

insert  into `t_customer`(`id_customer`,`nama_customer`,`alamat_customer`,`no_telp_customer`) values ('CU001','Rosa Delima Mendrofa','balige','085270576065'),('CU0010','yolanda','Sibolga','085260657089'),('CU002','Hebry Yanisa Manihuruk','Balige','085270576064'),('CU003','Anes Sinaga','Medan','084356789102'),('CU004','Hebry Manihuruk','Balige','082345890100'),('CU005','Ramos Sirait','Porsea','082345578918'),('CU006','Yesisca Sihombing','Tarutung','083456789212'),('CU007','Reinheart Simanugkalit','Tarutung','085673924711'),('CU008','Jordan Parapat','Parapat','089766435664'),('CU0098','yolanda','balige','085260657089'),('CU010','Evelina Tambunan','Medan','097453327283'),('CU011','yolanda','balige','085270576064'),('CU012','Hebry Yanisa Manihuruk','balige','085260657089'),('cuoo12','ben','medan','062456789');

/*Table structure for table `t_kategori` */

DROP TABLE IF EXISTS `t_kategori`;

CREATE TABLE `t_kategori` (
  `id_kategori` varchar(10) NOT NULL,
  `jumlah_per_kategori` int(11) DEFAULT NULL,
  `jenis_kategori` varchar(50) DEFAULT NULL,
  `lokasi` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_kategori` */

insert  into `t_kategori`(`id_kategori`,`jumlah_per_kategori`,`jenis_kategori`,`lokasi`) values ('DET001',100,'Dettol','BIN-2-1-3'),('IDM001',50,'Indomie','BIN-1-2-3'),('MIN001',450,'Minuman','BIN-3-4-5'),('SAB001',250,'Sabun','BIN-3-2-4');

/*Table structure for table `t_produk` */

DROP TABLE IF EXISTS `t_produk`;

CREATE TABLE `t_produk` (
  `kode_produk` varchar(20) NOT NULL,
  `id_kategori` varchar(20) DEFAULT NULL,
  `nama_produk` varchar(50) DEFAULT NULL,
  `status_produk` varchar(10) DEFAULT NULL,
  `harga_jual` int(11) DEFAULT NULL,
  `harga_beli` int(11) DEFAULT NULL,
  `jumlah_produk` int(11) DEFAULT NULL,
  PRIMARY KEY (`kode_produk`),
  KEY `id_kategori` (`id_kategori`),
  CONSTRAINT `id_kategori` FOREIGN KEY (`id_kategori`) REFERENCES `t_kategori` (`id_kategori`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_produk` */

insert  into `t_produk`(`kode_produk`,`id_kategori`,`nama_produk`,`status_produk`,`harga_jual`,`harga_beli`,`jumlah_produk`) values ('ITM001','IDM001','Indomie','BAIK',10000,7500,60),('ITM002','IDM001','Roti Marie','BAIK',10000,7000,20),('ITM003','DET001','Dettol','BAIK',25000,20000,250),('ITM004','SAB001','Sabun','BAIK',15000,13000,70),('ITM005','MIN001','Aqua','BAIK',6000,5000,200),('ITM006','MIN001','Nutribost','BAIK',7000,5000,100),('ITM007','SAB001','Biore','BAIK',32000,29000,75);

/*Table structure for table `t_supplier` */

DROP TABLE IF EXISTS `t_supplier`;

CREATE TABLE `t_supplier` (
  `id_supplier` varchar(20) NOT NULL,
  `nama_supplier` varchar(50) DEFAULT NULL,
  `alamat_supplier` varchar(50) DEFAULT NULL,
  `no_telp_supplier` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_supplier`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_supplier` */

insert  into `t_supplier`(`id_supplier`,`nama_supplier`,`alamat_supplier`,`no_telp_supplier`) values ('SU001','Vinny Kristina Sihombing','Tarutung','085245638989'),('SU002','Antonio Rodrico Banjarnahor','Medan','08524567890'),('SU003','Adventina Siahaan','Parapat','08534678912'),('SU004','Tessalonika Manurung','Meda','08345627812'),('SU005','Boas Pangaribuan','Sidempaun','36478290192'),('SU006','Prima Hutapea','Samosir','73523168384'),('SU007','Wiwin Gurning','Dolok Sanggul','23456789123'),('SU008','Hesti Siagian','Laguboti','15647829043'),('SU009','Yolanda Nainggolan','Tarutung','64563289187'),('SU010','Agustin','Tarutung','085245638980'),('SU011','Hebry Yanisa Manihuruk','Balige','081360220225');

/*Table structure for table `t_transaksi_pemasokan` */

DROP TABLE IF EXISTS `t_transaksi_pemasokan`;

CREATE TABLE `t_transaksi_pemasokan` (
  `no_pemasokan` int(11) NOT NULL AUTO_INCREMENT,
  `id_supplier` varchar(20) DEFAULT NULL,
  `kode_produk` varchar(20) DEFAULT NULL,
  `tgl_masuk` varchar(100) DEFAULT NULL,
  `Jumlah_produk` int(11) DEFAULT NULL,
  PRIMARY KEY (`no_pemasokan`),
  KEY `supplier` (`id_supplier`),
  KEY `produk` (`kode_produk`),
  CONSTRAINT `produk` FOREIGN KEY (`kode_produk`) REFERENCES `t_produk` (`kode_produk`),
  CONSTRAINT `supplier` FOREIGN KEY (`id_supplier`) REFERENCES `t_supplier` (`id_supplier`)
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=latin1;

/*Data for the table `t_transaksi_pemasokan` */

insert  into `t_transaksi_pemasokan`(`no_pemasokan`,`id_supplier`,`kode_produk`,`tgl_masuk`,`Jumlah_produk`) values (1,'SU002','ITM002','2019-May-22',90),(2,'SU002','ITM003','2019-May-22',90),(3,'SU002','ITM002','2019-May-27',90),(4,'SU003','ITM002','2019-May-22',90),(11,'SU001','ITM002','2019-May-29',120),(19,'SU001','ITM001','2019-May-25',90),(90,'SU002','ITM002','2019-May-31',3);

/*Table structure for table `t_transaksi_pemesanan` */

DROP TABLE IF EXISTS `t_transaksi_pemesanan`;

CREATE TABLE `t_transaksi_pemesanan` (
  `no_pemesanan` int(11) NOT NULL AUTO_INCREMENT,
  `id_customer` varchar(20) DEFAULT NULL,
  `kode_produk` varchar(20) DEFAULT NULL,
  `jumlah_pemesanan` int(11) DEFAULT NULL,
  `tgl_pemesanan` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`no_pemesanan`),
  KEY `id1` (`id_customer`),
  KEY `kode1` (`kode_produk`),
  CONSTRAINT `id1` FOREIGN KEY (`id_customer`) REFERENCES `t_customer` (`id_customer`),
  CONSTRAINT `kode1` FOREIGN KEY (`kode_produk`) REFERENCES `t_produk` (`kode_produk`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `t_transaksi_pemesanan` */

insert  into `t_transaksi_pemesanan`(`no_pemesanan`,`id_customer`,`kode_produk`,`jumlah_pemesanan`,`tgl_pemesanan`) values (1,'CU001','ITM005',100,'06-May-2019'),(2,'CU003','ITM005',100,'16-May-2019'),(3,'CU002','ITM003',50,'15-May-2019'),(4,'CU008','ITM003',50,'20-May-2019'),(5,'CU003','ITM005',100,'21-May-2019');

/*Table structure for table `t_transaksi_pengembalian` */

DROP TABLE IF EXISTS `t_transaksi_pengembalian`;

CREATE TABLE `t_transaksi_pengembalian` (
  `no_retur` int(11) NOT NULL AUTO_INCREMENT,
  `id_customer` varchar(20) DEFAULT NULL,
  `kode_produk` varchar(20) DEFAULT NULL,
  `jumlah_produk_retur` int(11) DEFAULT NULL,
  `tgl_retur` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`no_retur`),
  KEY `id` (`id_customer`),
  KEY `kode` (`kode_produk`),
  CONSTRAINT `id` FOREIGN KEY (`id_customer`) REFERENCES `t_customer` (`id_customer`),
  CONSTRAINT `kode` FOREIGN KEY (`kode_produk`) REFERENCES `t_produk` (`kode_produk`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `t_transaksi_pengembalian` */

insert  into `t_transaksi_pengembalian`(`no_retur`,`id_customer`,`kode_produk`,`jumlah_produk_retur`,`tgl_retur`) values (1,'CU001','ITM001',20,'07-May-2019');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `user` */

insert  into `user`(`id`,`username`,`auth_key`,`password_hash`,`password_reset_token`,`email`,`status`,`created_at`,`updated_at`,`verification_token`,`role`) values (8,'febbi','mWXPzw6iZykAfKkPFwoxe1_xdV-qkX9W','$2y$13$01hQl9TRITcl3LXY38S0M.IHBaulQey1CGYA0kGCXJWpuFaKTs1I2',NULL,'febby@gmail.com',10,0,0,NULL,3),(9,'vinni','6yJeQKa7h0PJBg_lCvu-fPceXDdi2GrF','$2y$13$qkNTmqUwGGv4p0DRNWmSqO/Txi6sPZPBZTLbZJk/Z2yZgnuiYISSu',NULL,'vinni@gmail.com',10,0,0,NULL,2),(10,'rosa','TyPGzYORb8LtIJ3ZVVsVA0n0pc0GweGe','$2y$13$E8GXkBthA/p/gC3/l0HSZeukY67ApraOxwS3eCxqDY4Iy4ZgAzoSG',NULL,'rosamendrofa22@gmail.com',10,0,0,NULL,3),(11,'antonio','C9so9u78h4SdL-YbDNIWGuVDHNq0Q6_k','$2y$13$3K/d2SGc7MX3lxDW2CUJZOdzBskEst.uxvxOwW9xbLgp4QjgWyLtO',NULL,'antonio@gmail.com',10,0,0,NULL,1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
