/*
Navicat MySQL Data Transfer

Source Server         : falcom
Source Server Version : 50553
Source Host           : 127.0.0.1:3306
Source Database       : wechat

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2017-08-01 17:11:18
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for sp_backage
-- ----------------------------
DROP TABLE IF EXISTS `sp_backage`;
CREATE TABLE `sp_backage` (
  `order_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '订单',
  `backage_state` text NOT NULL COMMENT '快递信息',
  `backage_number` varchar(32) NOT NULL COMMENT '运单号',
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='包裹快递';

-- ----------------------------
-- Records of sp_backage
-- ----------------------------
