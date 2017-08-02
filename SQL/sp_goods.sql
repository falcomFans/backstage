/*
Navicat MySQL Data Transfer

Source Server         : falcom
Source Server Version : 50553
Source Host           : 127.0.0.1:3306
Source Database       : wechat

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2017-08-01 17:11:30
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for sp_goods
-- ----------------------------
DROP TABLE IF EXISTS `sp_goods`;
CREATE TABLE `sp_goods` (
  `goods_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `goods_name` varchar(128) NOT NULL COMMENT '商品名称',
  `goods_price` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '商品价格',
  `goods_member_price` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '商品价格',
  `goods_number` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '商品数量',
  `goods_weight` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '商品重量',
  `type_id` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '类型id',
  `goods_introduce` text COMMENT '商品详情介绍',
  `goods_big_logo` char(128) NOT NULL DEFAULT '' COMMENT '图片logo大图',
  `goods_small_logo` char(128) NOT NULL DEFAULT '' COMMENT '图片logo小图',
  `add_time` int(11) NOT NULL COMMENT '添加商品时间',
  `upd_time` int(11) NOT NULL COMMENT '修改商品时间',
  `flag` enum('0','1') NOT NULL DEFAULT '1' COMMENT '1:正常  0:删除',
  PRIMARY KEY (`goods_id`),
  UNIQUE KEY `goods_name` (`goods_name`),
  KEY `goods_price` (`goods_price`),
  KEY `add_time` (`add_time`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8 COMMENT='商品表';

-- ----------------------------
-- Records of sp_goods
-- ----------------------------
INSERT INTO `sp_goods` VALUES ('28', '老婆1号', '35000.00', '0.00', '1', '35', '18', '<p><span style=\"color: rgb(255, 0, 0);\">休想动我老婆！</span></p>', '/Public/Uploads/goods_logo/2017-07-11/5964d7030b118.jpg', '/Public/Uploads/goods_logo/2017-07-11/small_5964d7030b118.jpg', '1499672080', '1499780866', '1');
INSERT INTO `sp_goods` VALUES ('30', '老婆3号', '2.00', '0.00', '2', '2', '20', '', '/Public/Uploads/goods_logo/2017-07-13/59674eee86ea6.jpg', '/Public/Uploads/goods_logo/2017-07-13/small_59674eee86ea6.jpg', '1499684807', '1499942979', '1');
INSERT INTO `sp_goods` VALUES ('31', '老婆4号', '999999.00', '0.00', '1', '35', '20', '<p>都是我的 都是我的</p>', '/Public/Uploads/goods_logo/2017-07-10/5963602c9e679.jpg', '/Public/Uploads/goods_logo/2017-07-10/small_5963602c9e679.jpg', '1499684908', '1499684908', '1');
