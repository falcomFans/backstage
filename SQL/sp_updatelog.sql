/*
Navicat MySQL Data Transfer

Source Server         : falcom
Source Server Version : 50553
Source Host           : 127.0.0.1:3306
Source Database       : wechat

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2017-08-01 17:12:35
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for sp_updatelog
-- ----------------------------
DROP TABLE IF EXISTS `sp_updatelog`;
CREATE TABLE `sp_updatelog` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `time` int(11) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sp_updatelog
-- ----------------------------
INSERT INTO `sp_updatelog` VALUES ('1', '1499419197', '重新布局，整体变更为响应式布局，手机端也可以浏览啦');
INSERT INTO `sp_updatelog` VALUES ('2', '1499420508', '初步搭建RBAC权限系统，不同管理员的可操作权限不一样啦');
INSERT INTO `sp_updatelog` VALUES ('3', '1499427201', '公共入口增加越权访问判断，不可跨域访问');
INSERT INTO `sp_updatelog` VALUES ('4', '1499523620', '增加管理组模块，需要admin权限');
INSERT INTO `sp_updatelog` VALUES ('5', '1499534488', '添加管理员和编辑管理员功能上线，需要admin权限');
INSERT INTO `sp_updatelog` VALUES ('9', '1499573700', '增加权限管理模块，可以进行添加和查看，暂时不支持在平台进行删除和修改操作');
INSERT INTO `sp_updatelog` VALUES ('10', '1499598136', '增加前台首页入口');
INSERT INTO `sp_updatelog` VALUES ('11', '1499618125', '增加“商品类型”和“商品属性”模块');
INSERT INTO `sp_updatelog` VALUES ('12', '1499621855', '增加&quot;商品添加&quot;页面，引入富文本编辑功能');
INSERT INTO `sp_updatelog` VALUES ('13', '1499705844', '商品添加和商品编辑，可以进行图片上传，大量引入ajax无刷新操作和layer动画，前台首页可以使用三个新增的测试用户账号进行登录测试。');
INSERT INTO `sp_updatelog` VALUES ('14', '1499790350', '用户列表界面增加多条件搜索，并采用ajax无刷新技术');
INSERT INTO `sp_updatelog` VALUES ('15', '1499965507', '首页可以假装买东西，假装查看购物车，假装结账，假装生成订单，后台也可以假装查看订单');
