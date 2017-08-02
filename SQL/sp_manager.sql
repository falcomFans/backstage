/*
Navicat MySQL Data Transfer

Source Server         : falcom
Source Server Version : 50553
Source Host           : 127.0.0.1:3306
Source Database       : wechat

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2017-08-01 17:11:52
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for sp_manager
-- ----------------------------
DROP TABLE IF EXISTS `sp_manager`;
CREATE TABLE `sp_manager` (
  `mg_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主id',
  `mg_name` varchar(32) NOT NULL COMMENT '账号',
  `mg_pwd` varchar(32) NOT NULL COMMENT '密码',
  `mg_salt` varchar(8) NOT NULL DEFAULT '',
  `mg_time` int(11) NOT NULL COMMENT '创建时间',
  `role_id` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '角色id',
  `flag` enum('1','0') DEFAULT '1',
  PRIMARY KEY (`mg_id`)
) ENGINE=InnoDB AUTO_INCREMENT=506 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sp_manager
-- ----------------------------
INSERT INTO `sp_manager` VALUES ('503', 'admin', '030c3e676651006c45722185352776fb', 'admin', '1499390044', '1', '1');
INSERT INTO `sp_manager` VALUES ('504', 'huangyisen', 'd5d8ab613492ec10e8d6b5a03528ed8b', 'huang', '1499397525', '100', '1');
INSERT INTO `sp_manager` VALUES ('505', 'longhao', '275b1ec1dce0da67644f6c812a53684f', 'long', '1499413907', '101', '1');
