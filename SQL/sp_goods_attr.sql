/*
Navicat MySQL Data Transfer

Source Server         : falcom
Source Server Version : 50553
Source Host           : 127.0.0.1:3306
Source Database       : wechat

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2017-08-01 17:11:41
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for sp_goods_attr
-- ----------------------------
DROP TABLE IF EXISTS `sp_goods_attr`;
CREATE TABLE `sp_goods_attr` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `goods_id` mediumint(8) unsigned NOT NULL COMMENT '商品id',
  `attr_id` smallint(5) unsigned NOT NULL COMMENT '属性id',
  `attr_value` varchar(32) NOT NULL COMMENT '商品对应属性的值',
  PRIMARY KEY (`id`),
  KEY `attr_id` (`attr_id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COMMENT='商品-属性关联表';

-- ----------------------------
-- Records of sp_goods_attr
-- ----------------------------
INSERT INTO `sp_goods_attr` VALUES ('10', '28', '12', '001');
INSERT INTO `sp_goods_attr` VALUES ('11', '28', '13', '元气');
INSERT INTO `sp_goods_attr` VALUES ('14', '30', '12', '003');
INSERT INTO `sp_goods_attr` VALUES ('15', '30', '13', '中二|元气|萌|燃');
INSERT INTO `sp_goods_attr` VALUES ('16', '31', '12', '004');
INSERT INTO `sp_goods_attr` VALUES ('17', '31', '13', '中二');
