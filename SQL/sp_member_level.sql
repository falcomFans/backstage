/*
Navicat MySQL Data Transfer

Source Server         : falcom
Source Server Version : 50553
Source Host           : 127.0.0.1:3306
Source Database       : wechat

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2017-08-01 17:12:03
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for sp_member_level
-- ----------------------------
DROP TABLE IF EXISTS `sp_member_level`;
CREATE TABLE `sp_member_level` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Id',
  `level_name` varchar(30) NOT NULL COMMENT '级别名称',
  `level_rate` tinyint(3) unsigned NOT NULL DEFAULT '100' COMMENT '折扣率，100=10折 98=9.8折 90=9折，用时除100',
  `jifen_bottom` mediumint(8) unsigned NOT NULL COMMENT '积分下限',
  `jifen_top` mediumint(8) unsigned NOT NULL COMMENT '积分上限',
  `flag` int(1) NOT NULL DEFAULT '1' COMMENT '1正常 0删除',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COMMENT='会员级别';

-- ----------------------------
-- Records of sp_member_level
-- ----------------------------
INSERT INTO `sp_member_level` VALUES ('14', '黄色手套', '100', '0', '3000', '1');
INSERT INTO `sp_member_level` VALUES ('15', '蓝色手套', '95', '3001', '6000', '1');
