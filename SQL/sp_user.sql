/*
Navicat MySQL Data Transfer

Source Server         : falcom
Source Server Version : 50553
Source Host           : 127.0.0.1:3306
Source Database       : wechat

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2017-08-01 17:12:43
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for sp_user
-- ----------------------------
DROP TABLE IF EXISTS `sp_user`;
CREATE TABLE `sp_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增id',
  `username` varchar(128) NOT NULL DEFAULT '' COMMENT '登录名',
  `password` varchar(32) NOT NULL DEFAULT '' COMMENT '登录密码',
  `user_email` varchar(64) DEFAULT '' COMMENT '邮箱',
  `user_sex` enum('2','1','0') NOT NULL DEFAULT '2' COMMENT '性别0女1男2保密',
  `user_qq` varchar(32) DEFAULT '' COMMENT 'qq',
  `user_tel` varchar(32) DEFAULT '' COMMENT '手机',
  `user_xueli` tinyint(4) DEFAULT NULL COMMENT '学历',
  `user_hobby` varchar(32) DEFAULT '' COMMENT '爱好',
  `user_introduce` text COMMENT '简介',
  `user_time` int(11) NOT NULL,
  `last_time` int(11) NOT NULL DEFAULT '0',
  `cold_time` int(11) unsigned DEFAULT NULL COMMENT '有期限冻结时间',
  `flag` enum('3','2','1','0') NOT NULL DEFAULT '1' COMMENT '用户状态，0删除，1正常，2期限冻结，3永久冻结',
  `jifen` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1252 DEFAULT CHARSET=utf8 COMMENT='会员表';

-- ----------------------------
-- Records of sp_user
-- ----------------------------
INSERT INTO `sp_user` VALUES ('232', 'Tim', '123456', '110@qq.com', '2', '11000', '157********', null, '', null, '1499686605', '1499686605', '1599686605', '2', '0');
INSERT INTO `sp_user` VALUES ('233', 'Lucy', '123456', '135@live.cn', '0', '10000', '189********', null, '', null, '1499696605', '1499696605', null, '1', '0');
INSERT INTO `sp_user` VALUES ('234', 'Jim', '123456', '189@189.com', '1', '10010', '135********', null, '', null, '1499705114', '1499705114', null, '3', '0');
INSERT INTO `sp_user` VALUES ('1152', '测试数据0', '123456', '', '0', '', '', null, '', null, '1499772874', '1499772874', null, '1', '0');
INSERT INTO `sp_user` VALUES ('1153', '测试数据1', '123456', '', '1', '', '', null, '', null, '1499772874', '1499772874', '1499858874', '2', '0');
INSERT INTO `sp_user` VALUES ('1154', '测试数据2', '123456', '', '2', '', '', null, '', null, '1499772875', '1499772875', null, '3', '0');
INSERT INTO `sp_user` VALUES ('1155', '测试数据3', '123456', '', '0', '', '', null, '', null, '1499772875', '1499772875', null, '1', '0');
INSERT INTO `sp_user` VALUES ('1156', '测试数据4', '123456', '', '1', '', '', null, '', null, '1499772875', '1499772875', '1500116875', '2', '0');
INSERT INTO `sp_user` VALUES ('1157', '测试数据5', '123456', '', '2', '', '', null, '', null, '1499772875', '1499772875', null, '3', '0');
INSERT INTO `sp_user` VALUES ('1158', '测试数据6', '123456', '', '0', '', '', null, '', null, '1499772875', '1499772875', null, '1', '0');
INSERT INTO `sp_user` VALUES ('1159', '测试数据7', '123456', '', '1', '', '', null, '', null, '1499772875', '1499772875', '1500374875', '2', '0');
INSERT INTO `sp_user` VALUES ('1160', '测试数据8', '123456', '', '2', '', '', null, '', null, '1499772875', '1499772875', null, '3', '0');
INSERT INTO `sp_user` VALUES ('1161', '测试数据9', '123456', '', '0', '', '', null, '', null, '1499772875', '1499772875', null, '1', '0');
INSERT INTO `sp_user` VALUES ('1162', '测试数据10', '123456', '', '1', '', '', null, '', null, '1499772875', '1499772875', '1500632875', '2', '0');
INSERT INTO `sp_user` VALUES ('1163', '测试数据11', '123456', '', '2', '', '', null, '', null, '1499772875', '1499772875', null, '3', '0');
INSERT INTO `sp_user` VALUES ('1164', '测试数据12', '123456', '', '0', '', '', null, '', null, '1499772875', '1499772875', null, '1', '0');
INSERT INTO `sp_user` VALUES ('1165', '测试数据13', '123456', '', '1', '', '', null, '', null, '1499772875', '1499772875', '1500890875', '2', '0');
INSERT INTO `sp_user` VALUES ('1166', '测试数据14', '123456', '', '2', '', '', null, '', null, '1499772875', '1499772875', null, '3', '0');
INSERT INTO `sp_user` VALUES ('1167', '测试数据15', '123456', '', '0', '', '', null, '', null, '1499772875', '1499772875', null, '1', '0');
INSERT INTO `sp_user` VALUES ('1168', '测试数据16', '123456', '', '1', '', '', null, '', null, '1499772875', '1499772875', '1501148875', '2', '0');
INSERT INTO `sp_user` VALUES ('1169', '测试数据17', '123456', '', '2', '', '', null, '', null, '1499772875', '1499772875', null, '3', '0');
INSERT INTO `sp_user` VALUES ('1170', '测试数据18', '123456', '', '0', '', '', null, '', null, '1499772875', '1499772875', null, '1', '0');
INSERT INTO `sp_user` VALUES ('1171', '测试数据19', '123456', '', '1', '', '', null, '', null, '1499772875', '1499772875', '1501406875', '2', '0');
INSERT INTO `sp_user` VALUES ('1172', '测试数据20', '123456', '', '2', '', '', null, '', null, '1499772875', '1499772875', null, '3', '0');
INSERT INTO `sp_user` VALUES ('1173', '测试数据21', '123456', '', '0', '', '', null, '', null, '1499772875', '1499772875', null, '1', '0');
INSERT INTO `sp_user` VALUES ('1174', '测试数据22', '123456', '', '1', '', '', null, '', null, '1499772875', '1499772875', '1501664875', '2', '0');
INSERT INTO `sp_user` VALUES ('1175', '测试数据23', '123456', '', '2', '', '', null, '', null, '1499772876', '1499772876', null, '3', '0');
INSERT INTO `sp_user` VALUES ('1176', '测试数据24', '123456', '', '0', '', '', null, '', null, '1499772876', '1499772876', null, '1', '0');
INSERT INTO `sp_user` VALUES ('1177', '测试数据25', '123456', '', '1', '', '', null, '', null, '1499772876', '1499772876', '1501922876', '2', '0');
INSERT INTO `sp_user` VALUES ('1178', '测试数据26', '123456', '', '2', '', '', null, '', null, '1499772876', '1499772876', null, '3', '0');
INSERT INTO `sp_user` VALUES ('1179', '测试数据27', '123456', '', '0', '', '', null, '', null, '1499772876', '1499772876', null, '1', '0');
INSERT INTO `sp_user` VALUES ('1180', '测试数据28', '123456', '', '1', '', '', null, '', null, '1499772876', '1499772876', '1502180876', '2', '0');
INSERT INTO `sp_user` VALUES ('1181', '测试数据29', '123456', '', '2', '', '', null, '', null, '1499772876', '1499772876', null, '3', '0');
INSERT INTO `sp_user` VALUES ('1182', '测试数据30', '123456', '', '0', '', '', null, '', null, '1499772876', '1499772876', null, '1', '0');
INSERT INTO `sp_user` VALUES ('1183', '测试数据31', '123456', '', '1', '', '', null, '', null, '1499772876', '1499772876', '1502438876', '2', '0');
INSERT INTO `sp_user` VALUES ('1184', '测试数据32', '123456', '', '2', '', '', null, '', null, '1499772876', '1499772876', null, '3', '0');
INSERT INTO `sp_user` VALUES ('1185', '测试数据33', '123456', '', '0', '', '', null, '', null, '1499772876', '1499772876', null, '1', '0');
INSERT INTO `sp_user` VALUES ('1186', '测试数据34', '123456', '', '1', '', '', null, '', null, '1499772876', '1499772876', '1502696876', '2', '0');
INSERT INTO `sp_user` VALUES ('1187', '测试数据35', '123456', '', '2', '', '', null, '', null, '1499772876', '1499772876', null, '3', '0');
INSERT INTO `sp_user` VALUES ('1188', '测试数据36', '123456', '', '0', '', '', null, '', null, '1499772876', '1499772876', null, '1', '0');
INSERT INTO `sp_user` VALUES ('1189', '测试数据37', '123456', '', '1', '', '', null, '', null, '1499772876', '1499772876', '1502954876', '2', '0');
INSERT INTO `sp_user` VALUES ('1190', '测试数据38', '123456', '', '2', '', '', null, '', null, '1499772876', '1499772876', null, '3', '0');
INSERT INTO `sp_user` VALUES ('1191', '测试数据39', '123456', '', '0', '', '', null, '', null, '1499772876', '1499772876', null, '1', '0');
INSERT INTO `sp_user` VALUES ('1192', '测试数据40', '123456', '', '1', '', '', null, '', null, '1499772876', '1499772876', '1503212876', '2', '0');
INSERT INTO `sp_user` VALUES ('1193', '测试数据41', '123456', '', '2', '', '', null, '', null, '1499772876', '1499772876', null, '3', '0');
INSERT INTO `sp_user` VALUES ('1194', '测试数据42', '123456', '', '0', '', '', null, '', null, '1499772876', '1499772876', null, '1', '0');
INSERT INTO `sp_user` VALUES ('1195', '测试数据43', '123456', '', '1', '', '', null, '', null, '1499772876', '1499772876', '1503470876', '2', '0');
INSERT INTO `sp_user` VALUES ('1196', '测试数据44', '123456', '', '2', '', '', null, '', null, '1499772876', '1499772876', null, '3', '0');
INSERT INTO `sp_user` VALUES ('1197', '测试数据45', '123456', '', '0', '', '', null, '', null, '1499772877', '1499772877', null, '1', '0');
INSERT INTO `sp_user` VALUES ('1198', '测试数据46', '123456', '', '1', '', '', null, '', null, '1499772877', '1499772877', '1503728877', '2', '0');
INSERT INTO `sp_user` VALUES ('1199', '测试数据47', '123456', '', '2', '', '', null, '', null, '1499772877', '1499772877', null, '3', '0');
INSERT INTO `sp_user` VALUES ('1200', '测试数据48', '123456', '', '0', '', '', null, '', null, '1499772877', '1499772877', null, '1', '0');
INSERT INTO `sp_user` VALUES ('1201', '测试数据49', '123456', '', '1', '', '', null, '', null, '1499772877', '1499772877', '1503986877', '2', '0');
INSERT INTO `sp_user` VALUES ('1202', '测试数据50', '123456', '', '2', '', '', null, '', null, '1499772877', '1499772877', null, '3', '0');
INSERT INTO `sp_user` VALUES ('1203', '测试数据51', '123456', '', '0', '', '', null, '', null, '1499772877', '1499772877', null, '1', '0');
INSERT INTO `sp_user` VALUES ('1204', '测试数据52', '123456', '', '1', '', '', null, '', null, '1499772877', '1499772877', '1504244877', '2', '0');
INSERT INTO `sp_user` VALUES ('1205', '测试数据53', '123456', '', '2', '', '', null, '', null, '1499772877', '1499772877', null, '3', '0');
INSERT INTO `sp_user` VALUES ('1206', '测试数据54', '123456', '', '0', '', '', null, '', null, '1499772877', '1499772877', null, '1', '0');
INSERT INTO `sp_user` VALUES ('1207', '测试数据55', '123456', '', '1', '', '', null, '', null, '1499772877', '1499772877', '1504502877', '2', '0');
INSERT INTO `sp_user` VALUES ('1208', '测试数据56', '123456', '', '2', '', '', null, '', null, '1499772877', '1499772877', null, '3', '0');
INSERT INTO `sp_user` VALUES ('1209', '测试数据57', '123456', '', '0', '', '', null, '', null, '1499772877', '1499772877', null, '1', '0');
INSERT INTO `sp_user` VALUES ('1210', '测试数据58', '123456', '', '1', '', '', null, '', null, '1499772877', '1499772877', '1504760877', '2', '0');
INSERT INTO `sp_user` VALUES ('1211', '测试数据59', '123456', '', '2', '', '', null, '', null, '1499772877', '1499772877', null, '3', '0');
INSERT INTO `sp_user` VALUES ('1212', '测试数据60', '123456', '', '0', '', '', null, '', null, '1499772877', '1499772877', null, '1', '0');
INSERT INTO `sp_user` VALUES ('1213', '测试数据61', '123456', '', '1', '', '', null, '', null, '1499772877', '1499772877', '1505018877', '2', '0');
INSERT INTO `sp_user` VALUES ('1214', '测试数据62', '123456', '', '2', '', '', null, '', null, '1499772877', '1499772877', null, '3', '0');
INSERT INTO `sp_user` VALUES ('1215', '测试数据63', '123456', '', '0', '', '', null, '', null, '1499772877', '1499772877', null, '1', '0');
INSERT INTO `sp_user` VALUES ('1216', '测试数据64', '123456', '', '1', '', '', null, '', null, '1499772877', '1499772877', '1505276877', '2', '0');
INSERT INTO `sp_user` VALUES ('1217', '测试数据65', '123456', '', '2', '', '', null, '', null, '1499772877', '1499772877', null, '3', '0');
INSERT INTO `sp_user` VALUES ('1218', '测试数据66', '123456', '', '0', '', '', null, '', null, '1499772877', '1499772877', null, '1', '0');
INSERT INTO `sp_user` VALUES ('1219', '测试数据67', '123456', '', '1', '', '', null, '', null, '1499772878', '1499772878', '1505534878', '2', '0');
INSERT INTO `sp_user` VALUES ('1220', '测试数据68', '123456', '', '2', '', '', null, '', null, '1499772878', '1499772878', null, '3', '0');
INSERT INTO `sp_user` VALUES ('1221', '测试数据69', '123456', '', '0', '', '', null, '', null, '1499772878', '1499772878', null, '1', '0');
INSERT INTO `sp_user` VALUES ('1222', '测试数据70', '123456', '', '1', '', '', null, '', null, '1499772878', '1499772878', '1505792878', '2', '0');
INSERT INTO `sp_user` VALUES ('1223', '测试数据71', '123456', '', '2', '', '', null, '', null, '1499772878', '1499772878', null, '3', '0');
INSERT INTO `sp_user` VALUES ('1224', '测试数据72', '123456', '', '0', '', '', null, '', null, '1499772878', '1499772878', null, '1', '0');
INSERT INTO `sp_user` VALUES ('1225', '测试数据73', '123456', '', '1', '', '', null, '', null, '1499772878', '1499772878', '1506050878', '2', '0');
INSERT INTO `sp_user` VALUES ('1226', '测试数据74', '123456', '', '2', '', '', null, '', null, '1499772878', '1499772878', null, '3', '0');
INSERT INTO `sp_user` VALUES ('1227', '测试数据75', '123456', '', '0', '', '', null, '', null, '1499772878', '1499772878', null, '1', '0');
INSERT INTO `sp_user` VALUES ('1228', '测试数据76', '123456', '', '1', '', '', null, '', null, '1499772878', '1499772878', '1506308878', '2', '0');
INSERT INTO `sp_user` VALUES ('1229', '测试数据77', '123456', '', '2', '', '', null, '', null, '1499772878', '1499772878', null, '3', '0');
INSERT INTO `sp_user` VALUES ('1230', '测试数据78', '123456', '', '0', '', '', null, '', null, '1499772878', '1499772878', null, '1', '0');
INSERT INTO `sp_user` VALUES ('1231', '测试数据79', '123456', '', '1', '', '', null, '', null, '1499772878', '1499772878', '1506566878', '2', '0');
INSERT INTO `sp_user` VALUES ('1232', '测试数据80', '123456', '', '2', '', '', null, '', null, '1499772878', '1499772878', null, '3', '0');
INSERT INTO `sp_user` VALUES ('1233', '测试数据81', '123456', '', '0', '', '', null, '', null, '1499772878', '1499772878', null, '1', '0');
INSERT INTO `sp_user` VALUES ('1234', '测试数据82', '123456', '', '1', '', '', null, '', null, '1499772878', '1499772878', '1506824878', '2', '0');
INSERT INTO `sp_user` VALUES ('1235', '测试数据83', '123456', '', '2', '', '', null, '', null, '1499772878', '1499772878', null, '3', '0');
INSERT INTO `sp_user` VALUES ('1236', '测试数据84', '123456', '', '0', '', '', null, '', null, '1499772878', '1499772878', null, '1', '0');
INSERT INTO `sp_user` VALUES ('1237', '测试数据85', '123456', '', '1', '', '', null, '', null, '1499772878', '1499772878', '1507082878', '2', '0');
INSERT INTO `sp_user` VALUES ('1238', '测试数据86', '123456', '', '2', '', '', null, '', null, '1499772878', '1499772878', null, '3', '0');
INSERT INTO `sp_user` VALUES ('1239', '测试数据87', '123456', '', '0', '', '', null, '', null, '1499772878', '1499772878', null, '1', '0');
INSERT INTO `sp_user` VALUES ('1240', '测试数据88', '123456', '', '1', '', '', null, '', null, '1499772878', '1499772878', '1507340878', '2', '0');
INSERT INTO `sp_user` VALUES ('1241', '测试数据89', '123456', '', '2', '', '', null, '', null, '1499772879', '1499772879', null, '3', '0');
INSERT INTO `sp_user` VALUES ('1242', '测试数据90', '123456', '', '0', '', '', null, '', null, '1499772879', '1499772879', null, '1', '0');
INSERT INTO `sp_user` VALUES ('1243', '测试数据91', '123456', '', '1', '', '', null, '', null, '1499772879', '1499772879', '1507598879', '2', '0');
INSERT INTO `sp_user` VALUES ('1244', '测试数据92', '123456', '', '2', '', '', null, '', null, '1499772879', '1499772879', null, '3', '0');
INSERT INTO `sp_user` VALUES ('1245', '测试数据93', '123456', '', '0', '', '', null, '', null, '1499772879', '1499772879', null, '1', '0');
INSERT INTO `sp_user` VALUES ('1246', '测试数据94', '123456', '', '1', '', '', null, '', null, '1499772879', '1499772879', '1507856879', '2', '0');
INSERT INTO `sp_user` VALUES ('1247', '测试数据95', '123456', '', '2', '', '', null, '', null, '1499772879', '1499772879', null, '3', '0');
INSERT INTO `sp_user` VALUES ('1248', '测试数据96', '123456', '', '0', '', '', null, '', null, '1499772879', '1499772879', null, '1', '0');
INSERT INTO `sp_user` VALUES ('1249', '测试数据97', '123456', '', '1', '', '', null, '', null, '1499772879', '1499772879', '1508114879', '2', '0');
INSERT INTO `sp_user` VALUES ('1250', '测试数据98', '123456', '', '2', '', '', null, '', null, '1499772879', '1499772879', null, '3', '0');
INSERT INTO `sp_user` VALUES ('1251', '测试数据99', '123456', '', '0', '', '', null, '', null, '1499772879', '1499772879', null, '1', '0');
