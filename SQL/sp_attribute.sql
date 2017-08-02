/*
Navicat MySQL Data Transfer

Source Server         : falcom
Source Server Version : 50553
Source Host           : 127.0.0.1:3306
Source Database       : wechat

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2017-08-01 17:11:05
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for sp_attribute
-- ----------------------------
DROP TABLE IF EXISTS `sp_attribute`;
CREATE TABLE `sp_attribute` (
  `attr_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `attr_name` varchar(32) NOT NULL COMMENT '属性名称',
  `type_id` smallint(5) unsigned NOT NULL COMMENT '外键，类型id',
  `attr_sel` enum('only','many') NOT NULL DEFAULT 'only' COMMENT 'only:输入框(唯一)  many:后台下拉列表/前台单选框',
  `attr_write` enum('manual','list') NOT NULL DEFAULT 'manual' COMMENT 'manual:手工录入  list:从列表选择',
  `attr_vals` varchar(256) NOT NULL DEFAULT '' COMMENT '可选值列表信息,例如颜色：白色,红色,绿色,多个可选值通过逗号分隔',
  PRIMARY KEY (`attr_id`),
  KEY `type_id` (`type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COMMENT='属性表';

-- ----------------------------
-- Records of sp_attribute
-- ----------------------------
INSERT INTO `sp_attribute` VALUES ('4', '开发商', '13', 'only', 'manual', '');
INSERT INTO `sp_attribute` VALUES ('6', '出版社', '19', 'only', 'manual', '');
INSERT INTO `sp_attribute` VALUES ('7', '版本', '19', 'many', 'list', '中文版|英文版');
INSERT INTO `sp_attribute` VALUES ('9', '显示器大小', '18', 'only', 'list', '');
INSERT INTO `sp_attribute` VALUES ('10', '显卡', '18', 'many', 'list', 'GTX1050|GTX1050ti');
INSERT INTO `sp_attribute` VALUES ('11', '版本', '13', 'many', 'list', '豪华版|初回限定版|普通版');
INSERT INTO `sp_attribute` VALUES ('12', '编号', '20', 'only', 'manual', '');
INSERT INTO `sp_attribute` VALUES ('13', '属性', '20', 'many', 'list', '萌|燃|元气|中二');
