/*
Navicat MySQL Data Transfer

Source Server         : falcom
Source Server Version : 50553
Source Host           : 127.0.0.1:3306
Source Database       : wechat

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2017-08-01 17:12:19
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for sp_order_goods
-- ----------------------------
DROP TABLE IF EXISTS `sp_order_goods`;
CREATE TABLE `sp_order_goods` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `order_id` int(10) unsigned NOT NULL COMMENT '订单id',
  `goods_id` mediumint(8) unsigned NOT NULL COMMENT '商品id',
  `goods_price` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '商品单价',
  `goods_number` tinyint(4) NOT NULL DEFAULT '1' COMMENT '购买单个商品数量',
  `goods_total_price` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '商品小计价格',
  PRIMARY KEY (`id`),
  KEY `order_id` (`order_id`),
  KEY `goods_id` (`goods_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='商品订单关联表';

-- ----------------------------
-- Records of sp_order_goods
-- ----------------------------
INSERT INTO `sp_order_goods` VALUES ('1', '1', '28', '35000.00', '3', '105000.00');
INSERT INTO `sp_order_goods` VALUES ('2', '1', '31', '999999.00', '3', '2999997.00');
