CREATE DATABASE IF NOT EXISTS `tp5_cmt` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `tp5_cmt`;

--  创建用户表admin
DROP TABLE IF EXISTS `cmt_user`;
CREATE TABLE `cmt_user` (
  `admin_id` mediumint(6) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` smallint(6) NOT NULL DEFAULT '0',
  `parent_id` smallint(6) NOT NULL DEFAULT '0',
  `user_name` varchar(100) NOT NULL DEFAULT '',
  `real_name` varchar(100) NOT NULL DEFAULT '',
  `password` varchar(100) NOT NULL DEFAULT '',
  `createdate` int(10) unsigned DEFAULT '0',
  `lastloginip` varchar(100) DEFAULT '0',
  `lastlogintime` int(10) unsigned DEFAULT '0',
  `qq` varchar(200) DEFAULT '',
  `email` varchar(200) DEFAULT '',
  `phone` varchar(200) DEFAULT '',
  `picture` varchar(1000) DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`admin_id`),
  KEY `user_name` (`user_name`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;