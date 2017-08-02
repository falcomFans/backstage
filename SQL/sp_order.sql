/*
Navicat MySQL Data Transfer

Source Server         : falcom
Source Server Version : 50553
Source Host           : 127.0.0.1:3306
Source Database       : wechat

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2017-08-01 17:12:13
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for sp_order
-- ----------------------------
DROP TABLE IF EXISTS `sp_order`;
CREATE TABLE `sp_order` (
  `order_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `user_id` mediumint(8) unsigned NOT NULL COMMENT '下订单会员id',
  `order_number` varchar(32) NOT NULL COMMENT '订单编号',
  `order_price` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '订单总金额',
  `order_pay` enum('0','1','2') NOT NULL DEFAULT '0' COMMENT '支付方式 0支付宝 1微信  2银行卡',
  `order_fapiao_title` enum('0','1') NOT NULL DEFAULT '0' COMMENT '发票抬头 0个人 1公司',
  `order_fapiao_company` varchar(32) NOT NULL DEFAULT '' COMMENT '公司名称',
  `order_fapiao_content` varchar(32) NOT NULL DEFAULT '' COMMENT '发票内容',
  `cgn_id` int(10) unsigned NOT NULL COMMENT 'consignee收货人地址-外键',
  `order_status` enum('0','1') NOT NULL DEFAULT '0' COMMENT '订单状态： 0未付款、1已付款',
  `add_time` int(10) unsigned NOT NULL COMMENT '记录生成时间',
  `upd_time` int(10) unsigned NOT NULL COMMENT '记录修改时间',
  PRIMARY KEY (`order_id`),
  UNIQUE KEY `order_number` (`order_number`),
  KEY `cgn_id` (`cgn_id`),
  KEY `add_time` (`add_time`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='订单表';

-- ----------------------------
-- Records of sp_order
-- ----------------------------
INSERT INTO `sp_order` VALUES ('1', '233', 'weshop-20170715155319-5209', '3104997.00', '0', '0', '', '', '0', '0', '1500105199', '1500105199');
