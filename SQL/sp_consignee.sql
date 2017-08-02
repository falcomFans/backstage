/*
Navicat MySQL Data Transfer

Source Server         : falcom
Source Server Version : 50553
Source Host           : 127.0.0.1:3306
Source Database       : wechat

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2017-08-01 17:11:25
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for sp_consignee
-- ----------------------------
DROP TABLE IF EXISTS `sp_consignee`;
CREATE TABLE `sp_consignee` (
  `cgn_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `user_id` int(11) NOT NULL COMMENT '会员id',
  `cgn_name` varchar(32) NOT NULL COMMENT '收货人名称',
  `cgn_address` varchar(200) NOT NULL DEFAULT '' COMMENT '收货人地址',
  `cgn_tel` varchar(20) NOT NULL DEFAULT '' COMMENT '收货人电话',
  `cgn_code` char(6) NOT NULL DEFAULT '' COMMENT '邮编',
  PRIMARY KEY (`cgn_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='收货人表';

-- ----------------------------
-- Records of sp_consignee
-- ----------------------------
