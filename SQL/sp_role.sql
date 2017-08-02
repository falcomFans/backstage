/*
Navicat MySQL Data Transfer

Source Server         : falcom
Source Server Version : 50553
Source Host           : 127.0.0.1:3306
Source Database       : wechat

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2017-08-01 17:12:24
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for sp_role
-- ----------------------------
DROP TABLE IF EXISTS `sp_role`;
CREATE TABLE `sp_role` (
  `role_id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `role_name` varchar(20) NOT NULL COMMENT '角色名称',
  `role_auth_ids` varchar(128) NOT NULL DEFAULT '' COMMENT '权限ids,1,2,5',
  `role_auth_ac` text COMMENT '控制器-操作,控制器-操作,控制器-操作',
  `flag` enum('1','0') DEFAULT '1',
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=106 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sp_role
-- ----------------------------
INSERT INTO `sp_role` VALUES ('1', '高贵冷艳单身狗', '', null, '1');
INSERT INTO `sp_role` VALUES ('100', '班德尔城扛把子', '100,122,123,116,120,117,118,119', 'Manager-showlist,Index-index,Index-showlog', '1');
INSERT INTO `sp_role` VALUES ('101', '偷渡失败黑非酋', '100,122,123,116,120,117,118,119', 'Manager-showlist,Index-index,Index-showlog', '1');
INSERT INTO `sp_role` VALUES ('105', '测试', '', '', '0');
