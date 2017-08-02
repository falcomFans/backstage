/*
Navicat MySQL Data Transfer

Source Server         : falcom
Source Server Version : 50553
Source Host           : 127.0.0.1:3306
Source Database       : wechat

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2017-08-01 17:11:12
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for sp_auth
-- ----------------------------
DROP TABLE IF EXISTS `sp_auth`;
CREATE TABLE `sp_auth` (
  `auth_id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `auth_name` varchar(20) NOT NULL,
  `auth_pid` smallint(6) unsigned NOT NULL COMMENT 'parent id',
  `auth_c` varchar(32) NOT NULL DEFAULT '' COMMENT 'controller',
  `auth_a` varchar(32) NOT NULL DEFAULT '' COMMENT 'action',
  `auth_level` enum('0','1') NOT NULL DEFAULT '0',
  `flag` enum('0','1') DEFAULT '1',
  PRIMARY KEY (`auth_id`)
) ENGINE=InnoDB AUTO_INCREMENT=144 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sp_auth
-- ----------------------------
INSERT INTO `sp_auth` VALUES ('100', '后台首页', '0', '', '', '0', '1');
INSERT INTO `sp_auth` VALUES ('116', '管理员', '0', '', '', '0', '1');
INSERT INTO `sp_auth` VALUES ('117', '用户管理', '0', '', '', '0', '1');
INSERT INTO `sp_auth` VALUES ('118', '商品管理', '0', '', '', '0', '1');
INSERT INTO `sp_auth` VALUES ('119', '友情链接', '0', '', '', '0', '1');
INSERT INTO `sp_auth` VALUES ('120', '管理员列表', '116', 'Manager', 'showlist', '1', '1');
INSERT INTO `sp_auth` VALUES ('121', '管理员添加', '116', 'Manager', 'add', '1', '1');
INSERT INTO `sp_auth` VALUES ('122', '数据一览', '100', 'Index', 'index', '1', '1');
INSERT INTO `sp_auth` VALUES ('123', '更新日志', '100', 'Index', 'showlog', '1', '1');
INSERT INTO `sp_auth` VALUES ('124', '管理组', '0', '', '', '0', '1');
INSERT INTO `sp_auth` VALUES ('125', '管理组列表', '124', 'Role', 'showlist', '1', '1');
INSERT INTO `sp_auth` VALUES ('126', '管理组添加', '124', 'Role', 'add', '1', '1');
INSERT INTO `sp_auth` VALUES ('127', '权限管理', '0', '', '', '0', '1');
INSERT INTO `sp_auth` VALUES ('128', '权限列表', '127', 'Auth', 'showlist', '1', '1');
INSERT INTO `sp_auth` VALUES ('129', '权限添加', '127', 'Auth', 'add', '1', '1');
INSERT INTO `sp_auth` VALUES ('133', '添加日志', '100', 'Index', 'addlog', '1', '1');
INSERT INTO `sp_auth` VALUES ('134', '商品列表', '118', 'Goods', 'showlist', '1', '1');
INSERT INTO `sp_auth` VALUES ('135', '商品添加', '118', 'Goods', 'add', '1', '1');
INSERT INTO `sp_auth` VALUES ('136', '用户列表', '117', 'User', 'showlist', '1', '1');
INSERT INTO `sp_auth` VALUES ('137', '商品类型', '118', 'Type', 'showlist', '1', '1');
INSERT INTO `sp_auth` VALUES ('138', '属性列表', '118', 'Attribute', 'showlist', '1', '1');
INSERT INTO `sp_auth` VALUES ('139', '大会员管理', '0', '', '', '0', '1');
INSERT INTO `sp_auth` VALUES ('140', '大会员等级', '139', 'Member', 'showlist', '1', '1');
INSERT INTO `sp_auth` VALUES ('141', '大会员添加', '139', 'Member', 'add', '1', '1');
INSERT INTO `sp_auth` VALUES ('142', '订单管理', '0', '', '', '0', '1');
INSERT INTO `sp_auth` VALUES ('143', '订单查看', '142', 'Order', 'showlist', '1', '1');
