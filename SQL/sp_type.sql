/*
Navicat MySQL Data Transfer

Source Server         : falcom
Source Server Version : 50553
Source Host           : 127.0.0.1:3306
Source Database       : wechat

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2017-08-01 17:12:30
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for sp_type
-- ----------------------------
DROP TABLE IF EXISTS `sp_type`;
CREATE TABLE `sp_type` (
  `type_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `type_name` varchar(32) NOT NULL COMMENT '类型名称',
  PRIMARY KEY (`type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COMMENT='类型表';

-- ----------------------------
-- Records of sp_type
-- ----------------------------
INSERT INTO `sp_type` VALUES ('13', '游戏');
INSERT INTO `sp_type` VALUES ('18', '电脑');
INSERT INTO `sp_type` VALUES ('19', '书籍');
INSERT INTO `sp_type` VALUES ('20', '女仆');
