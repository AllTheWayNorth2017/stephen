/*
Navicat MySQL Data Transfer

Source Server         : class12
Source Server Version : 50711
Source Host           : localhost:3306
Source Database       : class12

Target Server Type    : MYSQL
Target Server Version : 50711
File Encoding         : 65001

Date: 2017-03-27 12:37:35
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for students
-- ----------------------------
DROP TABLE IF EXISTS `students`;
CREATE TABLE `students` (
  `id` int(2) NOT NULL,
  `stu_number` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `sex` varchar(100) DEFAULT NULL,
  `class_number` varchar(100) DEFAULT NULL,
  `pro_number` varchar(100) DEFAULT NULL,
  `pro_name` varchar(100) DEFAULT NULL,
  `col_name` varchar(100) DEFAULT NULL,
  `grades` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of students
-- ----------------------------
INSERT INTO `students` VALUES ('1', '2016213513', '贾菲菲', '女', '12111601', '1211', '艺术设计类', '传媒艺术学院', '2016', null);
INSERT INTO `students` VALUES ('2', '2016213514', '陈元娃', '女', '12111601', '1211', '艺术设计类', '传媒艺术学院', '2016', null);
INSERT INTO `students` VALUES ('3', '2016213516', '曹焕', '女', '12111601', '1211', '艺术设计类', '传媒艺术学院', '2016', null);
INSERT INTO `students` VALUES ('4', '2016213517', '钱玉萱', '女', '12111601', '1211', '艺术设计类', '传媒艺术学院', '2016', null);
INSERT INTO `students` VALUES ('5', '2016213518', '张欣悦', '女', '12111601', '1211', '艺术设计类', '传媒艺术学院', '2016', null);
INSERT INTO `students` VALUES ('6', '2016213519', '谷慧敏', '女', '12111601', '1211', '艺术设计类', '传媒艺术学院', '2016', null);
INSERT INTO `students` VALUES ('7', '2016213520', '刘林芳', '女', '12111601', '1211', '艺术设计类', '传媒艺术学院', '2016', null);
INSERT INTO `students` VALUES ('8', '2016213521', '刘丹', '女', '12111601', '1211', '艺术设计类', '传媒艺术学院', '2016', null);
INSERT INTO `students` VALUES ('9', '2016213522', '谢小雨', '女', '12111601', '1211', '艺术设计类', '传媒艺术学院', '2016', null);
INSERT INTO `students` VALUES ('10', '2016213523', '李珍云', '女', '12111601', '1211', '艺术设计类', '传媒艺术学院', '2016', null);
INSERT INTO `students` VALUES ('11', '2016213524', '周恋瑜', '女', '12111601', '1211', '艺术设计类', '传媒艺术学院', '2016', null);
INSERT INTO `students` VALUES ('12', '2016213525', '邓文瑶', '女', '12111601', '1211', '艺术设计类', '传媒艺术学院', '2016', null);
INSERT INTO `students` VALUES ('13', '2016213526', '胡佳宁', '女', '12111601', '1211', '艺术设计类', '传媒艺术学院', '2016', null);
INSERT INTO `students` VALUES ('14', '2016213527', '杨柳', '女', '12111601', '1211', '艺术设计类', '传媒艺术学院', '2016', null);
INSERT INTO `students` VALUES ('15', '2016213528', '周怡柔', '女', '12111601', '1211', '艺术设计类', '传媒艺术学院', '2016', null);
INSERT INTO `students` VALUES ('16', '2016213529', '罗校田', '女', '12111601', '1211', '艺术设计类', '传媒艺术学院', '2016', null);
INSERT INTO `students` VALUES ('17', '2016213530', '刘芮菡', '女', '12111601', '1211', '艺术设计类', '传媒艺术学院', '2016', null);
INSERT INTO `students` VALUES ('18', '2016213531', '杨婷', '女', '12111601', '1211', '艺术设计类', '传媒艺术学院', '2016', null);
INSERT INTO `students` VALUES ('19', '2016213532', '周雨琦', '女', '12111601', '1211', '艺术设计类', '传媒艺术学院', '2016', null);
INSERT INTO `students` VALUES ('20', '2016213533', '方丽涵', '女', '12111601', '1211', '艺术设计类', '传媒艺术学院', '2016', null);
INSERT INTO `students` VALUES ('21', '2016213534', '戴智金', '男', '12111601', '1211', '艺术设计类', '传媒艺术学院', '2016', null);
INSERT INTO `students` VALUES ('22', '2016213535', '周义虎', '男', '12111601', '1211', '艺术设计类', '传媒艺术学院', '2016', null);
INSERT INTO `students` VALUES ('23', '2016213536', '王文韬', '男', '12111601', '1211', '艺术设计类', '传媒艺术学院', '2016', null);
INSERT INTO `students` VALUES ('24', '2016213537', '陈志超', '男', '12111601', '1211', '艺术设计类', '传媒艺术学院', '2016', null);
INSERT INTO `students` VALUES ('25', '2016213538', '司乐乐', '男', '12111601', '1211', '艺术设计类', '传媒艺术学院', '2016', null);
INSERT INTO `students` VALUES ('26', '2016213539', '赵瑞鹏', '男', '12111601', '1211', '艺术设计类', '传媒艺术学院', '2016', null);
INSERT INTO `students` VALUES ('27', '2016213540', '李勇', '男', '12111601', '1211', '艺术设计类', '传媒艺术学院', '2016', null);
INSERT INTO `students` VALUES ('28', '2016213541', '罗清林', '男', '12111601', '1211', '艺术设计类', '传媒艺术学院', '2016', null);
INSERT INTO `students` VALUES ('29', '2016213542', '宋金癸', '男', '12111601', '1211', '艺术设计类', '传媒艺术学院', '2016', null);
