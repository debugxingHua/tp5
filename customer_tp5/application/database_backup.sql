CREATE DATABASE IF NOT EXISTS `tp5_cmt` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `tp5_cmt`;

--  用户表
DROP TABLE IF EXISTS `cmt_user`;
CREATE TABLE `cmt_user` (
  `user_id` mediumint(6) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` SMALLINT (6) NOT NULL DEFAULT '0',      --角色id
  `parent_id` SMALLINT (6) NOT NULL DEFAULT '0',    --上级id
  `user_name` VARCHAR (100) NOT NULL DEFAULT '',    --用户名
  `real_name` VARCHAR (100) NOT NULL DEFAULT '',    --姓名
  `password` VARCHAR (100) NOT NULL DEFAULT '',     --密码
  `create_date` VARCHAR (10) DEFAULT '0',            --创建时间
  `qq` varchar(20) DEFAULT '',                       --联系方式
  `email` varchar(20) DEFAULT '',
  `phone` varchar(20) DEFAULT '',
  `picture` varchar(1000) DEFAULT '',                --图片路径
  `status` tinyint(1) NOT NULL DEFAULT 1,            --状态
  PRIMARY KEY (`user_id`),
  KEY `user_name` (`user_name`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--  角色字典表
DROP TABLE IF EXISTS `cmt_role`;
CREATE TABLE `cmt_role` (
   `role_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
   `role_name` VARCHAR (10) NOT NULL ,
   PRIMARY KEY (`role_id`)
)ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
INSERT INTO `cmt_role` VALUES (1,'管理员');

-- 菜单表，存入所有的菜单列表
--
DROP TABLE IF EXISTS `cmt_menu`;
CREATE TABLE `cmt_menu` (
  `menu_id` SMALLINT (6) unsigned NOT NULL AUTO_INCREMENT,
  `menu_name` VARCHAR (40) NOT NULL DEFAULT '',           --菜单名
  `parent_id` SMALLINT (6) NOT NULL DEFAULT '0',          --上级id
  `menu_url` VARCHAR (20) NOT NULL DEFAULT '无',          --菜单路由
  `listorder` SMALLINT (6) unsigned NOT NULL DEFAULT 0,   --排序
  `status` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`menu_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
INSERT INTO `cmt_menu` VALUES (1,'首页',0,'/admin',100,1);
INSERT INTO `cmt_menu` VALUES (2,'系统管理',0,'',100,1);
INSERT INTO `cmt_menu` VALUES (3,'用户管理',2,'/user/index',100,1);
INSERT INTO `cmt_menu` VALUES (4,'角色管理',2,'/role/index',90,1);
INSERT INTO `cmt_menu` VALUES (5,'菜单管理',2,'/menu/index',90,1);





















