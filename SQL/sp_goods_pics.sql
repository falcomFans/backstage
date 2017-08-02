/*
Navicat MySQL Data Transfer

Source Server         : falcom
Source Server Version : 50553
Source Host           : 127.0.0.1:3306
Source Database       : wechat

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2017-08-01 17:11:47
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for sp_goods_pics
-- ----------------------------
DROP TABLE IF EXISTS `sp_goods_pics`;
CREATE TABLE `sp_goods_pics` (
  `pics_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `goods_id` mediumint(8) unsigned NOT NULL COMMENT '商品id',
  `pics_big` char(128) NOT NULL DEFAULT '' COMMENT '相册大图800*800',
  `pics_mid` char(128) NOT NULL DEFAULT '' COMMENT '相册中图350*350',
  `pics_sma` char(128) NOT NULL DEFAULT '' COMMENT '相册小图50*50',
  PRIMARY KEY (`pics_id`),
  KEY `goods_id` (`goods_id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COMMENT='商品-相册关联表';

-- ----------------------------
-- Records of sp_goods_pics
-- ----------------------------
INSERT INTO `sp_goods_pics` VALUES ('11', '30', '/Public/Uploads/goods_pics/2017-07-10/big_59635fc7d699e.jpg', '/Public/Uploads/goods_pics/2017-07-10/mid_59635fc7d699e.jpg', '/Public/Uploads/goods_pics/2017-07-10/small_59635fc7d699e.jpg');
INSERT INTO `sp_goods_pics` VALUES ('12', '30', '/Public/Uploads/goods_pics/2017-07-10/big_59635fc7d8d7e.jpg', '/Public/Uploads/goods_pics/2017-07-10/mid_59635fc7d8d7e.jpg', '/Public/Uploads/goods_pics/2017-07-10/small_59635fc7d8d7e.jpg');
INSERT INTO `sp_goods_pics` VALUES ('13', '30', '/Public/Uploads/goods_pics/2017-07-10/big_59635fc7da219.jpg', '/Public/Uploads/goods_pics/2017-07-10/mid_59635fc7da219.jpg', '/Public/Uploads/goods_pics/2017-07-10/small_59635fc7da219.jpg');
INSERT INTO `sp_goods_pics` VALUES ('14', '30', '/Public/Uploads/goods_pics/2017-07-10/big_59635fc7db045.jpg', '/Public/Uploads/goods_pics/2017-07-10/mid_59635fc7db045.jpg', '/Public/Uploads/goods_pics/2017-07-10/small_59635fc7db045.jpg');
INSERT INTO `sp_goods_pics` VALUES ('15', '31', '/Public/Uploads/goods_pics/2017-07-10/big_5963602cb468a.jpg', '/Public/Uploads/goods_pics/2017-07-10/mid_5963602cb468a.jpg', '/Public/Uploads/goods_pics/2017-07-10/small_5963602cb468a.jpg');
INSERT INTO `sp_goods_pics` VALUES ('16', '31', '/Public/Uploads/goods_pics/2017-07-10/big_5963602cb5d4d.jpg', '/Public/Uploads/goods_pics/2017-07-10/mid_5963602cb5d4d.jpg', '/Public/Uploads/goods_pics/2017-07-10/small_5963602cb5d4d.jpg');
INSERT INTO `sp_goods_pics` VALUES ('17', '28', '/Public/Uploads/goods_pics/2017-07-10/big_596364b5b8387.jpg', '/Public/Uploads/goods_pics/2017-07-10/mid_596364b5b8387.jpg', '/Public/Uploads/goods_pics/2017-07-10/small_596364b5b8387.jpg');
INSERT INTO `sp_goods_pics` VALUES ('18', '28', '/Public/Uploads/goods_pics/2017-07-10/big_5963656e25fe9.jpg', '/Public/Uploads/goods_pics/2017-07-10/mid_5963656e25fe9.jpg', '/Public/Uploads/goods_pics/2017-07-10/small_5963656e25fe9.jpg');
INSERT INTO `sp_goods_pics` VALUES ('19', '28', '/Public/Uploads/goods_pics/2017-07-11/big_5964d7034237f.jpg', '/Public/Uploads/goods_pics/2017-07-11/mid_5964d7034237f.jpg', '/Public/Uploads/goods_pics/2017-07-11/small_5964d7034237f.jpg');
INSERT INTO `sp_goods_pics` VALUES ('20', '30', '/Public/Uploads/goods_pics/2017-07-13/big_59674eeea532b.jpg', '/Public/Uploads/goods_pics/2017-07-13/mid_59674eeea532b.jpg', '/Public/Uploads/goods_pics/2017-07-13/small_59674eeea532b.jpg');
INSERT INTO `sp_goods_pics` VALUES ('21', '30', '/Public/Uploads/goods_pics/2017-07-13/big_59674eeeaa7d3.jpg', '/Public/Uploads/goods_pics/2017-07-13/mid_59674eeeaa7d3.jpg', '/Public/Uploads/goods_pics/2017-07-13/small_59674eeeaa7d3.jpg');
INSERT INTO `sp_goods_pics` VALUES ('22', '30', '/Public/Uploads/goods_pics/2017-07-13/big_59674eeeac002.jpg', '/Public/Uploads/goods_pics/2017-07-13/mid_59674eeeac002.jpg', '/Public/Uploads/goods_pics/2017-07-13/small_59674eeeac002.jpg');
