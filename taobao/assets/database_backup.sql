-- MySQL dump 10.13  Distrib 5.7.14, for Win64 (x86_64)

-- CREATE DATABASE IF NOT EXISTS `tb_sys` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
-- USE `qdm160638566_db`;
-- USE `bdm113183211_db`;
USE `tb_sys`;

--  创建用户表
DROP TABLE IF EXISTS `tb_user`;
CREATE TABLE `tb_user` (
  `user_id` mediumint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  `account` varchar(255) NOT NULL DEFAULT '',
  `phone` varchar(100) NOT NULL DEFAULT '',
  `create_time` varchar(100) NOT NULL DEFAULT '0',
  `update_time` varchar(100) NOT NULL DEFAULT '0',
  `user_message` varchar(255) NOT NULL DEFAULT '',
  `status` mediumint(6) NOT NULL DEFAULT 0,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `tb_deal`;
CREATE TABLE `tb_deal` (
  `deal_id` mediumint(6) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(6) NOT NULL DEFAULT 0,
  `deal_name` varchar(255) NOT NULL DEFAULT '',
  `courier` varchar(255) NOT NULL DEFAULT '',
  `courier_number` varchar(255) NOT NULL DEFAULT '',
  `money` varchar(255) NOT NULL DEFAULT '',
  `create_time` varchar(100) NOT NULL DEFAULT '0',
  `update_time` varchar(100) NOT NULL DEFAULT '0',
  `address` varchar(255) NOT NULL DEFAULT '',
  `deal_message` varchar(255) NOT NULL DEFAULT '',
  `status` mediumint(6) NOT NULL DEFAULT 0,
  PRIMARY KEY (`deal_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
