/*
 Navicat Premium Data Transfer

 Source Server         : maria_lokal
 Source Server Type    : MariaDB
 Source Server Version : 100327
 Source Host           : 127.0.0.1:3306
 Source Schema         : siesdm

 Target Server Type    : MariaDB
 Target Server Version : 100327
 File Encoding         : 65001

 Date: 14/02/2021 12:07:14
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for t_ambil_air
-- ----------------------------
DROP TABLE IF EXISTS `t_ambil_air`;
CREATE TABLE `t_ambil_air`  (
  `id_penggunaanair` int(10) NOT NULL AUTO_INCREMENT,
  `id_perusahaan` int(5) NULL DEFAULT NULL,
  `id_sumur` int(4) NULL DEFAULT NULL,
  `debit_air` float(5, 0) NULL DEFAULT NULL,
  `bulan` int(5) NULL DEFAULT NULL,
  `tahun` int(4) NULL DEFAULT NULL,
  PRIMARY KEY (`id_penggunaanair`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 331 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of t_ambil_air
-- ----------------------------
INSERT INTO `t_ambil_air` VALUES (1, 1, 1, 2000, 9, 2018);
INSERT INTO `t_ambil_air` VALUES (2, 3, 3, 24, 9, 2018);
INSERT INTO `t_ambil_air` VALUES (11, 1, 1, 21, 10, 2018);
INSERT INTO `t_ambil_air` VALUES (12, 3, 3, 23, 10, 2018);
INSERT INTO `t_ambil_air` VALUES (14, 0, 0, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (15, 8, 10, 14, 0, 2018);
INSERT INTO `t_ambil_air` VALUES (16, 13, 11, 3, 1, 2017);
INSERT INTO `t_ambil_air` VALUES (17, 18, 13, 72, 10, 2011);
INSERT INTO `t_ambil_air` VALUES (18, 21, 14, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (19, 27, 19, 5, 7, 2018);
INSERT INTO `t_ambil_air` VALUES (20, 25, 18, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (21, 25, 20, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (22, 25, 22, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (23, 25, 23, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (24, 25, 25, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (25, 25, 26, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (26, 31, 29, 67, 8, 2018);
INSERT INTO `t_ambil_air` VALUES (27, 37, 32, 3, 6, 2018);
INSERT INTO `t_ambil_air` VALUES (28, 37, 33, 3, 6, 2018);
INSERT INTO `t_ambil_air` VALUES (29, 39, 34, 90, 11, 2018);
INSERT INTO `t_ambil_air` VALUES (30, 45, 37, 0, 12, 2017);
INSERT INTO `t_ambil_air` VALUES (31, 52, 43, 60, 5, 2007);
INSERT INTO `t_ambil_air` VALUES (32, 55, 51, 46, 7, 2018);
INSERT INTO `t_ambil_air` VALUES (33, 65, 53, 0, 11, 2018);
INSERT INTO `t_ambil_air` VALUES (34, 73, 56, 109, 9, 2017);
INSERT INTO `t_ambil_air` VALUES (35, 74, 57, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (36, 74, 58, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (37, 80, 59, 40, 7, 2018);
INSERT INTO `t_ambil_air` VALUES (38, 91, 62, 30, 7, 2018);
INSERT INTO `t_ambil_air` VALUES (39, 91, 65, 30, 7, 2018);
INSERT INTO `t_ambil_air` VALUES (43, 88, 61, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (44, 88, 64, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (45, 88, 69, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (46, 97, 71, 11, 11, 2018);
INSERT INTO `t_ambil_air` VALUES (47, 88, 70, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (48, 67, 73, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (49, 103, 75, 9, 1, 2007);
INSERT INTO `t_ambil_air` VALUES (50, 109, 80, 3, 3, 2018);
INSERT INTO `t_ambil_air` VALUES (51, 108, 78, 195, 0, 0);
INSERT INTO `t_ambil_air` VALUES (52, 108, 82, 195, 0, 0);
INSERT INTO `t_ambil_air` VALUES (53, 113, 86, 45, 8, 2006);
INSERT INTO `t_ambil_air` VALUES (54, 115, 88, 8, 0, 0);
INSERT INTO `t_ambil_air` VALUES (55, 125, 89, 70, 3, 2015);
INSERT INTO `t_ambil_air` VALUES (56, 129, 91, 0, 5, 2017);
INSERT INTO `t_ambil_air` VALUES (57, 138, 94, 76, 9, 2009);
INSERT INTO `t_ambil_air` VALUES (58, 137, 97, 122, 12, 2019);
INSERT INTO `t_ambil_air` VALUES (59, 141, 100, 76, 11, 2015);
INSERT INTO `t_ambil_air` VALUES (60, 145, 101, 5, 7, 2020);
INSERT INTO `t_ambil_air` VALUES (61, 155, 104, 20, 10, 2019);
INSERT INTO `t_ambil_air` VALUES (62, 150, 105, 16, 10, 2015);
INSERT INTO `t_ambil_air` VALUES (63, 158, 108, 57, 7, 2018);
INSERT INTO `t_ambil_air` VALUES (64, 158, 110, 57, 7, 2018);
INSERT INTO `t_ambil_air` VALUES (65, 154, 106, 3000, 0, 0);
INSERT INTO `t_ambil_air` VALUES (66, 154, 107, 3000, 0, 0);
INSERT INTO `t_ambil_air` VALUES (67, 154, 109, 2000, 0, 0);
INSERT INTO `t_ambil_air` VALUES (68, 143, 102, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (69, 143, 103, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (70, 139, 96, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (71, 163, 112, 130, 1, 2009);
INSERT INTO `t_ambil_air` VALUES (72, 163, NULL, 130, 1, 2009);
INSERT INTO `t_ambil_air` VALUES (73, 160, 115, 20, 8, 2017);
INSERT INTO `t_ambil_air` VALUES (74, 160, 117, 20, 8, 2017);
INSERT INTO `t_ambil_air` VALUES (75, 173, 119, 15, 6, 2017);
INSERT INTO `t_ambil_air` VALUES (76, 179, 126, 63, 7, 2014);
INSERT INTO `t_ambil_air` VALUES (77, 183, 127, 30, 3, 2018);
INSERT INTO `t_ambil_air` VALUES (78, 189, 132, 0, 4, 2017);
INSERT INTO `t_ambil_air` VALUES (79, 165, 116, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (80, 165, 120, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (81, 165, 121, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (82, 165, 122, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (83, 165, 123, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (84, 165, 125, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (85, 165, 128, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (86, 165, 129, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (87, 165, 131, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (88, 195, 135, 10, 4, 2018);
INSERT INTO `t_ambil_air` VALUES (89, 190, 133, 139, 7, 2018);
INSERT INTO `t_ambil_air` VALUES (90, 190, 137, 77, 7, 2018);
INSERT INTO `t_ambil_air` VALUES (91, 190, 139, 0, 7, 2018);
INSERT INTO `t_ambil_air` VALUES (92, 201, 138, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (93, 201, 140, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (94, 205, 142, 8, 4, 2018);
INSERT INTO `t_ambil_air` VALUES (95, 205, 144, 8, 4, 2018);
INSERT INTO `t_ambil_air` VALUES (96, 205, 147, 10, 4, 2019);
INSERT INTO `t_ambil_air` VALUES (97, 209, 149, 130, 10, 2017);
INSERT INTO `t_ambil_air` VALUES (98, 207, 145, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (99, 207, 148, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (100, 207, 151, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (101, 206, 150, 131, 10, 2018);
INSERT INTO `t_ambil_air` VALUES (102, 210, 153, 40, 11, 2018);
INSERT INTO `t_ambil_air` VALUES (103, 211, 154, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (104, 211, 155, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (105, 213, 156, 3, 1, 2018);
INSERT INTO `t_ambil_air` VALUES (106, 215, 160, 93, 8, 2015);
INSERT INTO `t_ambil_air` VALUES (107, 215, 164, 93, 8, 2016);
INSERT INTO `t_ambil_air` VALUES (108, 216, 162, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (109, 216, 162, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (110, 212, 157, 95, 11, 2017);
INSERT INTO `t_ambil_air` VALUES (111, 212, 159, 100, 10, 2016);
INSERT INTO `t_ambil_air` VALUES (112, 212, 161, 63, 10, 2016);
INSERT INTO `t_ambil_air` VALUES (113, 38, 168, 106, 10, 2016);
INSERT INTO `t_ambil_air` VALUES (114, 212, 165, 0, 4, 2016);
INSERT INTO `t_ambil_air` VALUES (115, 212, 169, 0, 4, 2016);
INSERT INTO `t_ambil_air` VALUES (116, 216, 166, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (117, 218, 171, 153, 8, 2018);
INSERT INTO `t_ambil_air` VALUES (118, 38, 173, 106, 10, 2018);
INSERT INTO `t_ambil_air` VALUES (119, 219, 174, 3, 1, 2001);
INSERT INTO `t_ambil_air` VALUES (120, 221, 175, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (121, 221, 179, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (122, 220, 177, 3, 3, 2018);
INSERT INTO `t_ambil_air` VALUES (123, 220, 180, 3, 3, 2018);
INSERT INTO `t_ambil_air` VALUES (124, 224, 186, 40, 7, 2005);
INSERT INTO `t_ambil_air` VALUES (125, 224, 186, 40, 7, 2005);
INSERT INTO `t_ambil_air` VALUES (126, 225, 188, 0, 5, 2016);
INSERT INTO `t_ambil_air` VALUES (127, 223, 184, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (128, 223, 187, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (129, 227, 190, 5, 10, 2017);
INSERT INTO `t_ambil_air` VALUES (130, 44, 182, 59, 11, 2020);
INSERT INTO `t_ambil_air` VALUES (131, 44, 185, 110, 11, 2020);
INSERT INTO `t_ambil_air` VALUES (132, 226, 189, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (133, 226, 189, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (134, 229, 194, 5, 10, 2017);
INSERT INTO `t_ambil_air` VALUES (135, 233, 197, 0, 4, 2018);
INSERT INTO `t_ambil_air` VALUES (136, 233, 198, 0, 4, 2018);
INSERT INTO `t_ambil_air` VALUES (137, 188, 200, 5, 6, 2020);
INSERT INTO `t_ambil_air` VALUES (138, 232, 201, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (139, 232, 203, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (140, 235, 208, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (141, 235, 209, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (142, 206, 206, 131, 10, 2018);
INSERT INTO `t_ambil_air` VALUES (143, 206, 212, 180, 10, 2018);
INSERT INTO `t_ambil_air` VALUES (144, 238, 214, 0, 4, 2018);
INSERT INTO `t_ambil_air` VALUES (145, 239, 215, 3, 7, 2018);
INSERT INTO `t_ambil_air` VALUES (146, 236, 211, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (147, 236, 216, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (148, 240, 218, 26, 4, 2012);
INSERT INTO `t_ambil_air` VALUES (149, 106, 220, 405, 6, 2019);
INSERT INTO `t_ambil_air` VALUES (150, 106, 222, 405, 6, 2019);
INSERT INTO `t_ambil_air` VALUES (151, 243, 223, 5, 3, 2006);
INSERT INTO `t_ambil_air` VALUES (152, 106, 226, 405, 6, 2019);
INSERT INTO `t_ambil_air` VALUES (153, 1, 1, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (154, 245, 227, 20, 8, 2018);
INSERT INTO `t_ambil_air` VALUES (155, 245, 231, 20, 8, 2018);
INSERT INTO `t_ambil_air` VALUES (156, 106, 212, 220, 6, 2019);
INSERT INTO `t_ambil_air` VALUES (157, 106, 241, 220, 6, 2019);
INSERT INTO `t_ambil_air` VALUES (158, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `t_ambil_air` VALUES (159, 241, 225, 40, 0, 2017);
INSERT INTO `t_ambil_air` VALUES (160, 241, 229, 40, 11, 2017);
INSERT INTO `t_ambil_air` VALUES (161, 241, 230, 40, 11, 2017);
INSERT INTO `t_ambil_air` VALUES (162, 241, 234, 40, 11, 2017);
INSERT INTO `t_ambil_air` VALUES (163, 38, 159, 106, 10, 2018);
INSERT INTO `t_ambil_air` VALUES (164, 23, 242, 80, 6, 2019);
INSERT INTO `t_ambil_air` VALUES (165, 248, 250, 4, 1, 2001);
INSERT INTO `t_ambil_air` VALUES (166, 247, 251, 144, 9, 2014);
INSERT INTO `t_ambil_air` VALUES (167, 247, 255, 160, 9, 2014);
INSERT INTO `t_ambil_air` VALUES (168, 247, 256, 135, 9, 2014);
INSERT INTO `t_ambil_air` VALUES (169, 247, 257, 135, 9, 2014);
INSERT INTO `t_ambil_air` VALUES (170, 247, 257, 135, 9, 2014);
INSERT INTO `t_ambil_air` VALUES (171, 242, 224, 90, 9, 2019);
INSERT INTO `t_ambil_air` VALUES (172, 249, 258, 70, 1, 2011);
INSERT INTO `t_ambil_air` VALUES (173, 242, 228, 90, 9, 2019);
INSERT INTO `t_ambil_air` VALUES (174, 249, 258, 70, 1, 2011);
INSERT INTO `t_ambil_air` VALUES (175, 242, 232, 90, 9, 2019);
INSERT INTO `t_ambil_air` VALUES (176, 242, 237, 90, 9, 2019);
INSERT INTO `t_ambil_air` VALUES (177, 242, 241, 91, 7, 2018);
INSERT INTO `t_ambil_air` VALUES (178, 242, 243, 8, 7, 2018);
INSERT INTO `t_ambil_air` VALUES (179, 242, 247, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (180, 242, 249, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (181, 242, 252, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (182, 242, 253, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (183, 253, 262, 20, 2, 2015);
INSERT INTO `t_ambil_air` VALUES (184, 252, 264, 80, 5, 2017);
INSERT INTO `t_ambil_air` VALUES (185, 257, 266, 135, 12, 2017);
INSERT INTO `t_ambil_air` VALUES (186, 256, 267, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (187, 256, 270, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (188, 258, 272, 80, 12, 2002);
INSERT INTO `t_ambil_air` VALUES (189, 254, 268, 5, 11, 2016);
INSERT INTO `t_ambil_air` VALUES (190, 254, 273, 5, 11, 2016);
INSERT INTO `t_ambil_air` VALUES (191, 259, 274, 80, 12, 2002);
INSERT INTO `t_ambil_air` VALUES (192, 40, 275, 172, 11, 2020);
INSERT INTO `t_ambil_air` VALUES (194, 262, 279, 80, 5, 2017);
INSERT INTO `t_ambil_air` VALUES (195, 260, 276, 197, 9, 2018);
INSERT INTO `t_ambil_air` VALUES (196, 260, 280, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (197, 40, 281, 162, 11, 2020);
INSERT INTO `t_ambil_air` VALUES (198, 0, 0, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (199, 40, 282, 97, 11, 2020);
INSERT INTO `t_ambil_air` VALUES (200, 265, 284, 20, 1, 2016);
INSERT INTO `t_ambil_air` VALUES (201, 49, 287, 178, 8, 2018);
INSERT INTO `t_ambil_air` VALUES (202, 267, 286, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (203, 267, 288, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (204, 269, 291, 0, 4, 2016);
INSERT INTO `t_ambil_air` VALUES (205, 269, 292, 0, 3, 2015);
INSERT INTO `t_ambil_air` VALUES (207, 266, 285, 4, 4, 2018);
INSERT INTO `t_ambil_air` VALUES (208, 49, 295, 146, 5, 2019);
INSERT INTO `t_ambil_air` VALUES (209, 266, 290, 5, 4, 2018);
INSERT INTO `t_ambil_air` VALUES (210, 266, 293, 3, 4, 2018);
INSERT INTO `t_ambil_air` VALUES (211, 266, 296, 3, 3, 2018);
INSERT INTO `t_ambil_air` VALUES (212, 49, 299, 227, 10, 2018);
INSERT INTO `t_ambil_air` VALUES (213, 273, 300, 0, 3, 2011);
INSERT INTO `t_ambil_air` VALUES (214, 273, 302, 0, 3, 2011);
INSERT INTO `t_ambil_air` VALUES (215, 272, 303, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (216, 272, 305, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (217, 120, 304, 77, 9, 2019);
INSERT INTO `t_ambil_air` VALUES (218, 120, 308, 77, 9, 2019);
INSERT INTO `t_ambil_air` VALUES (219, 275, 307, 84, 4, 2018);
INSERT INTO `t_ambil_air` VALUES (220, 275, 309, 54, 4, 2018);
INSERT INTO `t_ambil_air` VALUES (221, 277, 311, 115, 9, 2018);
INSERT INTO `t_ambil_air` VALUES (222, 276, 310, 92, 9, 2017);
INSERT INTO `t_ambil_air` VALUES (223, 276, 312, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (224, 279, 315, 27, 8, 2015);
INSERT INTO `t_ambil_air` VALUES (225, 280, 316, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (226, 280, 320, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (227, 283, 317, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (228, 284, 319, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (229, 286, 322, 108, 9, 2016);
INSERT INTO `t_ambil_air` VALUES (230, 287, 323, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (231, 114, 325, 150, 10, 2019);
INSERT INTO `t_ambil_air` VALUES (232, 288, 324, 144, 6, 2016);
INSERT INTO `t_ambil_air` VALUES (233, 288, 326, 144, 6, 2016);
INSERT INTO `t_ambil_air` VALUES (234, 63, 330, 50, 9, 2018);
INSERT INTO `t_ambil_air` VALUES (235, 42, 332, 162, 11, 2018);
INSERT INTO `t_ambil_air` VALUES (236, 290, 328, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (237, 290, 329, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (238, 290, 333, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (239, 290, 334, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (240, 290, 336, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (241, 32, 342, 130, 11, 2018);
INSERT INTO `t_ambil_air` VALUES (242, 294, 341, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (243, 294, 344, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (244, 294, 345, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (245, 32, 346, 81, 11, 2018);
INSERT INTO `t_ambil_air` VALUES (246, 83, 348, 38, 12, 2017);
INSERT INTO `t_ambil_air` VALUES (247, 296, 351, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (248, 83, 352, 80, 12, 2017);
INSERT INTO `t_ambil_air` VALUES (249, 83, 354, 0, 4, 2020);
INSERT INTO `t_ambil_air` VALUES (250, 298, 355, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (251, 299, 358, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (252, 84, 360, 30, 11, 2019);
INSERT INTO `t_ambil_air` VALUES (253, 168, 362, 150, 1, 2018);
INSERT INTO `t_ambil_air` VALUES (254, 161, 365, 58, 12, 2019);
INSERT INTO `t_ambil_air` VALUES (255, 278, 367, 54, 7, 2017);
INSERT INTO `t_ambil_air` VALUES (256, 161, 366, 53, 12, 2019);
INSERT INTO `t_ambil_air` VALUES (260, 304, 372, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (261, 304, 375, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (262, 81, 376, 143, 9, 2019);
INSERT INTO `t_ambil_air` VALUES (263, 306, 379, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (264, 81, 380, 111, 10, 2020);
INSERT INTO `t_ambil_air` VALUES (265, 307, 382, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (266, 308, 383, 185, 1, 2017);
INSERT INTO `t_ambil_air` VALUES (267, 308, 384, 120, 9, 2017);
INSERT INTO `t_ambil_air` VALUES (268, 308, 385, 123, 9, 2017);
INSERT INTO `t_ambil_air` VALUES (269, 308, 386, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (270, 308, 387, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (271, 310, 388, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (272, 310, 389, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (273, 310, 390, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (274, 94, 392, 65, 11, 2018);
INSERT INTO `t_ambil_air` VALUES (275, 94, 394, 61, 11, 2018);
INSERT INTO `t_ambil_air` VALUES (276, 311, 395, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (277, 311, 396, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (278, 311, 399, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (280, 123, 402, 75, 10, 2019);
INSERT INTO `t_ambil_air` VALUES (281, 312, 403, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (282, 112, 407, 16, 8, 2019);
INSERT INTO `t_ambil_air` VALUES (283, 314, 410, 128, 6, 2016);
INSERT INTO `t_ambil_air` VALUES (284, 112, 412, 10, 8, 2019);
INSERT INTO `t_ambil_air` VALUES (285, 315, 417, 0, 3, 2016);
INSERT INTO `t_ambil_air` VALUES (286, 313, 409, 81, 6, 2019);
INSERT INTO `t_ambil_air` VALUES (287, 313, 413, 59, 6, 2019);
INSERT INTO `t_ambil_air` VALUES (288, 313, 414, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (289, 313, 415, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (290, 313, 416, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (291, 313, 418, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (292, 111, 419, 56, 6, 2018);
INSERT INTO `t_ambil_air` VALUES (293, 316, 420, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (294, 111, 421, 56, 6, 2018);
INSERT INTO `t_ambil_air` VALUES (295, 111, 422, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (296, 111, 424, 146, 6, 2018);
INSERT INTO `t_ambil_air` VALUES (297, 319, 423, 95, 0, 0);
INSERT INTO `t_ambil_air` VALUES (298, 319, 426, 95, 0, 0);
INSERT INTO `t_ambil_air` VALUES (299, 15, 427, 112, 8, 2018);
INSERT INTO `t_ambil_air` VALUES (300, 20, 430, 88, 11, 2018);
INSERT INTO `t_ambil_air` VALUES (301, 321, 431, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (302, 20, 433, 131, 11, 2018);
INSERT INTO `t_ambil_air` VALUES (303, 321, 432, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (304, 20, 434, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (305, 202, 436, 210, 7, 2020);
INSERT INTO `t_ambil_air` VALUES (306, 202, 439, 200, 7, 2020);
INSERT INTO `t_ambil_air` VALUES (307, 202, 440, 215, 7, 2020);
INSERT INTO `t_ambil_air` VALUES (309, 320, 329, 59, 0, 0);
INSERT INTO `t_ambil_air` VALUES (311, 180, 443, 0, 4, 2018);
INSERT INTO `t_ambil_air` VALUES (312, 290, 446, 80, 2, 2020);
INSERT INTO `t_ambil_air` VALUES (313, 180, 447, 342, 5, 2020);
INSERT INTO `t_ambil_air` VALUES (314, 290, 445, 80, 2, 2020);
INSERT INTO `t_ambil_air` VALUES (315, 325, 448, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (316, 325, 449, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (317, 326, 450, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (318, 327, 451, 0, 0, 0);
INSERT INTO `t_ambil_air` VALUES (319, 318, 455, 15, 4, 2018);
INSERT INTO `t_ambil_air` VALUES (320, 318, 459, 15, 4, 2018);
INSERT INTO `t_ambil_air` VALUES (321, 333, 465, 20, 8, 2016);
INSERT INTO `t_ambil_air` VALUES (322, 333, 468, 20, 8, 2016);
INSERT INTO `t_ambil_air` VALUES (323, 338, 472, 54, 12, 2017);
INSERT INTO `t_ambil_air` VALUES (324, 342, 478, 94, 1, 2018);
INSERT INTO `t_ambil_air` VALUES (325, 342, 482, 30, 1, 2018);
INSERT INTO `t_ambil_air` VALUES (326, 346, 489, 3, 6, 2012);
INSERT INTO `t_ambil_air` VALUES (329, 355, 509, 93, 3, 2012);
INSERT INTO `t_ambil_air` VALUES (330, 355, 513, 93, 3, 2012);

-- ----------------------------
-- Table structure for t_dinas
-- ----------------------------
DROP TABLE IF EXISTS `t_dinas`;
CREATE TABLE `t_dinas`  (
  `id_dinas` int(2) NOT NULL AUTO_INCREMENT,
  `nama_dinas` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `singkatan_dinas` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `cabang_dinas` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `alamat_dinas` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `logo_dinas` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `create_at` timestamp(0) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp(0) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_dinas`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of t_dinas
-- ----------------------------
INSERT INTO `t_dinas` VALUES (1, 'Dinas Energi Sumber Daya Mineral', 'ESDM', 'IV Bandung', 'cimahi x bandung', 'uploads/logo/IMG_1_.png', '2021-02-02 23:46:16', '2021-02-02 23:46:16');

-- ----------------------------
-- Table structure for t_jenis_sumur
-- ----------------------------
DROP TABLE IF EXISTS `t_jenis_sumur`;
CREATE TABLE `t_jenis_sumur`  (
  `id` char(2) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jenis_sumur` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of t_jenis_sumur
-- ----------------------------
INSERT INTO `t_jenis_sumur` VALUES ('1', 'SUMUR DANGKAL');
INSERT INTO `t_jenis_sumur` VALUES ('2', 'SUMUR DALAM');
INSERT INTO `t_jenis_sumur` VALUES ('3', 'SUMUR IMBUHAN');
INSERT INTO `t_jenis_sumur` VALUES ('4', 'SUMUR PANTAU');
INSERT INTO `t_jenis_sumur` VALUES ('5', 'SUMUR ASR');
INSERT INTO `t_jenis_sumur` VALUES ('6', 'SUMUR RESAPAN');

-- ----------------------------
-- Table structure for t_komoditas
-- ----------------------------
DROP TABLE IF EXISTS `t_komoditas`;
CREATE TABLE `t_komoditas`  (
  `id_komoditas` int(4) NOT NULL AUTO_INCREMENT,
  `nama_komoditas` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_komoditas`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 37 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of t_komoditas
-- ----------------------------
INSERT INTO `t_komoditas` VALUES (1, 'asbes');
INSERT INTO `t_komoditas` VALUES (2, 'batu tulis');
INSERT INTO `t_komoditas` VALUES (3, 'batu setengah permata');
INSERT INTO `t_komoditas` VALUES (4, 'batu kapur');
INSERT INTO `t_komoditas` VALUES (5, 'batu apung');
INSERT INTO `t_komoditas` VALUES (6, 'batu permata');
INSERT INTO `t_komoditas` VALUES (7, 'bentonit');
INSERT INTO `t_komoditas` VALUES (8, 'dolomit');
INSERT INTO `t_komoditas` VALUES (9, 'feldspar');
INSERT INTO `t_komoditas` VALUES (10, 'garam batu (halite)');
INSERT INTO `t_komoditas` VALUES (11, 'grafit');
INSERT INTO `t_komoditas` VALUES (12, 'andesit');
INSERT INTO `t_komoditas` VALUES (13, 'gips');
INSERT INTO `t_komoditas` VALUES (14, 'kalsit');
INSERT INTO `t_komoditas` VALUES (15, 'kaolin');
INSERT INTO `t_komoditas` VALUES (16, 'leusit');
INSERT INTO `t_komoditas` VALUES (17, 'magnesit');
INSERT INTO `t_komoditas` VALUES (18, 'mika');
INSERT INTO `t_komoditas` VALUES (19, 'marmer');
INSERT INTO `t_komoditas` VALUES (20, 'nitrat');
INSERT INTO `t_komoditas` VALUES (21, 'opsidien');
INSERT INTO `t_komoditas` VALUES (22, 'oker');
INSERT INTO `t_komoditas` VALUES (23, 'pasir dan kerikil');
INSERT INTO `t_komoditas` VALUES (24, 'pasir kuarsa');
INSERT INTO `t_komoditas` VALUES (25, 'perlit');
INSERT INTO `t_komoditas` VALUES (26, 'phospat');
INSERT INTO `t_komoditas` VALUES (27, 'talk');
INSERT INTO `t_komoditas` VALUES (28, 'tanah serap (fullers earth)');
INSERT INTO `t_komoditas` VALUES (29, 'tanah diatome');
INSERT INTO `t_komoditas` VALUES (30, 'tanah liat');
INSERT INTO `t_komoditas` VALUES (31, 'tawas (alum)');
INSERT INTO `t_komoditas` VALUES (32, 'tras');
INSERT INTO `t_komoditas` VALUES (33, 'yarosif');
INSERT INTO `t_komoditas` VALUES (34, 'zeolit');
INSERT INTO `t_komoditas` VALUES (35, 'basal');
INSERT INTO `t_komoditas` VALUES (36, 'trakkit');

-- ----------------------------
-- Table structure for t_koor
-- ----------------------------
DROP TABLE IF EXISTS `t_koor`;
CREATE TABLE `t_koor`  (
  `id_koor` int(3) NOT NULL AUTO_INCREMENT,
  `id_smr` int(4) NOT NULL,
  `d_c` float NULL DEFAULT NULL,
  `m_c` float NULL DEFAULT NULL,
  `s_c` float NULL DEFAULT NULL,
  PRIMARY KEY (`id_koor`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for t_kota
-- ----------------------------
DROP TABLE IF EXISTS `t_kota`;
CREATE TABLE `t_kota`  (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nama_kota` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of t_kota
-- ----------------------------
INSERT INTO `t_kota` VALUES (1, 'KOTA BANDUNG');
INSERT INTO `t_kota` VALUES (2, 'KOTA CIMAHI');
INSERT INTO `t_kota` VALUES (3, 'KAB. BANDUNG BARAT');
INSERT INTO `t_kota` VALUES (4, 'KAB. SUBANG');

-- ----------------------------
-- Table structure for t_lapor_debit
-- ----------------------------
DROP TABLE IF EXISTS `t_lapor_debit`;
CREATE TABLE `t_lapor_debit`  (
  `id_lap` int(5) NOT NULL AUTO_INCREMENT,
  `id_perusahaan` int(5) NOT NULL,
  `id_sumur` int(4) NOT NULL,
  `debit_air` int(4) NULL DEFAULT NULL,
  `tgl_cek` date NULL DEFAULT NULL,
  PRIMARY KEY (`id_lap`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of t_lapor_debit
-- ----------------------------
INSERT INTO `t_lapor_debit` VALUES (1, 1, 1, 124, '2017-09-30');
INSERT INTO `t_lapor_debit` VALUES (2, 1, 1, 202, '2017-10-30');

-- ----------------------------
-- Table structure for t_menu
-- ----------------------------
DROP TABLE IF EXISTS `t_menu`;
CREATE TABLE `t_menu`  (
  `id_menu` int(4) NOT NULL AUTO_INCREMENT,
  `menu_name` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `display_name` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_menu`) USING BTREE,
  UNIQUE INDEX `id_menu`(`id_menu`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of t_menu
-- ----------------------------
INSERT INTO `t_menu` VALUES (1, 'perusahaan', 'Perusahaan');
INSERT INTO `t_menu` VALUES (2, 'dinas', 'Setting Dinas');
INSERT INTO `t_menu` VALUES (3, 'pegawai', 'Setting Pegawai');
INSERT INTO `t_menu` VALUES (4, 'user', 'Setting Pengguna');
INSERT INTO `t_menu` VALUES (5, 'sumur', 'Data Sumur');
INSERT INTO `t_menu` VALUES (6, 'penggunaanair', 'Data Penggunaan ABT');
INSERT INTO `t_menu` VALUES (7, 'pajakabt', 'Data Pajak ABT');

-- ----------------------------
-- Table structure for t_pajak
-- ----------------------------
DROP TABLE IF EXISTS `t_pajak`;
CREATE TABLE `t_pajak`  (
  `id_pjk` int(4) NOT NULL AUTO_INCREMENT,
  `id_pers` int(5) NULL DEFAULT NULL,
  `id_smr` int(4) NULL DEFAULT NULL,
  `nilai_pjk` int(10) NULL DEFAULT NULL,
  `tgl_pjk` date NULL DEFAULT NULL,
  PRIMARY KEY (`id_pjk`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 15 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of t_pajak
-- ----------------------------
INSERT INTO `t_pajak` VALUES (1, 1, 1, 560000, '2018-09-28');
INSERT INTO `t_pajak` VALUES (2, 1, 2, 540000, '2018-09-28');
INSERT INTO `t_pajak` VALUES (3, 2, 4, 675000, '2018-09-29');
INSERT INTO `t_pajak` VALUES (4, 3, 3, 670000, '2018-10-30');
INSERT INTO `t_pajak` VALUES (5, 1, 1, 675000, '2018-10-26');
INSERT INTO `t_pajak` VALUES (6, 1, 2, 700000, '2018-10-26');
INSERT INTO `t_pajak` VALUES (8, 3, 3, 560000, '2018-11-29');
INSERT INTO `t_pajak` VALUES (10, 4, 5, 560000, '2018-10-26');
INSERT INTO `t_pajak` VALUES (11, 4, 5, 675000, '2018-11-29');
INSERT INTO `t_pajak` VALUES (14, 8, 515, 5600000, '2021-02-10');

-- ----------------------------
-- Table structure for t_pegawai
-- ----------------------------
DROP TABLE IF EXISTS `t_pegawai`;
CREATE TABLE `t_pegawai`  (
  `id_pegawai` int(4) NOT NULL AUTO_INCREMENT,
  `nama_pegawai` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nip_pegawai` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jabatan_pegawai` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp(0) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_pegawai`) USING BTREE,
  INDEX `id_pegawai`(`id_pegawai`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of t_pegawai
-- ----------------------------
INSERT INTO `t_pegawai` VALUES (1, 'HERI', '20010901 1929 1212', 'KASI', '2021-02-14 09:36:37', '2021-02-14 09:36:42');
INSERT INTO `t_pegawai` VALUES (3, 'BUDI', '20058920 9899 123', 'STAFF', '2021-02-14 10:06:34', '2021-02-14 10:02:34');

-- ----------------------------
-- Table structure for t_permission
-- ----------------------------
DROP TABLE IF EXISTS `t_permission`;
CREATE TABLE `t_permission`  (
  `id_permission` int(4) NOT NULL AUTO_INCREMENT,
  `permission_name` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `display_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `id_menu` int(4) NOT NULL,
  PRIMARY KEY (`id_permission`) USING BTREE,
  UNIQUE INDEX `id`(`id_permission`) USING BTREE,
  INDEX `foreign_key`(`id_menu`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 25 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of t_permission
-- ----------------------------
INSERT INTO `t_permission` VALUES (1, 'index', 'Lihat Data Perusahaan', 1);
INSERT INTO `t_permission` VALUES (2, 'tambah', 'Tambah Data Perusahaan', 1);
INSERT INTO `t_permission` VALUES (3, 'edit', 'Ubah Data Perusahaan', 1);
INSERT INTO `t_permission` VALUES (4, 'detile', 'Lihat Detail Data', 1);
INSERT INTO `t_permission` VALUES (5, 'index', 'Lihat Data Pengguna', 4);
INSERT INTO `t_permission` VALUES (6, 'tambah', 'Tambah Data Pengguna', 4);
INSERT INTO `t_permission` VALUES (7, 'edit', 'Edit Data Pengguna', 4);
INSERT INTO `t_permission` VALUES (8, 'hapus_data', 'Hapus Data Penguna', 4);
INSERT INTO `t_permission` VALUES (9, 'edit_dinas', 'Ubah Data Dinas', 2);
INSERT INTO `t_permission` VALUES (10, 'delete', 'Hapus Data Perusahaan', 1);
INSERT INTO `t_permission` VALUES (11, 'edit_permission', 'Ubah Akses Pengguna', 4);
INSERT INTO `t_permission` VALUES (12, 'index', 'Lihat Data Sumur', 5);
INSERT INTO `t_permission` VALUES (13, 'tambah', 'Tambah Data Sumur', 5);
INSERT INTO `t_permission` VALUES (14, 'edit', 'Lihat Data Sumur', 5);
INSERT INTO `t_permission` VALUES (15, 'delete', 'Hapus Data Sumur', 5);
INSERT INTO `t_permission` VALUES (16, 'index', 'Lihat Data Pengambilan Air', 6);
INSERT INTO `t_permission` VALUES (17, 'tambah', 'Tambah Data Pengambilan Air', 6);
INSERT INTO `t_permission` VALUES (18, 'edit', 'Edit Data Pengambilan Air', 6);
INSERT INTO `t_permission` VALUES (19, 'delete', 'Hapus Data Pengambilan Air', 6);
INSERT INTO `t_permission` VALUES (20, 'index', 'Lihat Data Pajak ABT', 7);
INSERT INTO `t_permission` VALUES (21, 'tambah', 'TambahData Pajak ABT', 7);
INSERT INTO `t_permission` VALUES (22, 'edit', 'Ubah Data Pajak ABT', 7);
INSERT INTO `t_permission` VALUES (23, 'delete', 'Hapus Data Pajak ABT', 7);
INSERT INTO `t_permission` VALUES (24, 'index', 'Lihat Data Pegawai', 3);

-- ----------------------------
-- Table structure for t_pertambangan
-- ----------------------------
DROP TABLE IF EXISTS `t_pertambangan`;
CREATE TABLE `t_pertambangan`  (
  `id_tambang` int(4) NOT NULL AUTO_INCREMENT,
  `lokasi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_komoditas` int(4) NULL DEFAULT NULL,
  `SK` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jenis_izin` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `luas_wilayah` float(4, 2) NULL DEFAULT NULL,
  `tgl_mulai` date NULL DEFAULT NULL,
  `tgl_berakhir` date NULL DEFAULT NULL,
  `status_iup` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `keterrangan` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_tambang`) USING BTREE,
  UNIQUE INDEX `id_tambang`(`id_tambang`) USING BTREE,
  INDEX `tgLberlaku_tambang`(`tgl_mulai`, `tgl_berakhir`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for t_perusahaan
-- ----------------------------
DROP TABLE IF EXISTS `t_perusahaan`;
CREATE TABLE `t_perusahaan`  (
  `id_perusahaan` int(5) NOT NULL AUTO_INCREMENT,
  `nama_perusahaan` varchar(70) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `nama_pemilik` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `jns_usaha` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `tlp_perusahaan` varchar(13) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `fax_perusahaan` varchar(13) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `email` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `status_modal` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `kontak_person` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `tlp_person` varchar(13) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `luas_area` int(5) NULL DEFAULT NULL,
  `id_kota` int(3) NOT NULL,
  `alamat_perusahaan` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `input_by` int(2) NULL DEFAULT NULL,
  `poto_perusahaan` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  `delete` tinyint(1) NULL DEFAULT NULL,
  PRIMARY KEY (`id_perusahaan`) USING BTREE,
  INDEX `id`(`id_perusahaan`, `id_kota`, `input_by`, `created_at`, `updated_at`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 362 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of t_perusahaan
-- ----------------------------
INSERT INTO `t_perusahaan` VALUES (1, 'GRAND PASIFIK HOTEL', 'BANY LUCAS HIDAYAT', 'HOTEL', '-', '-', '-', 'PMDN', 'YANTI', '081200016684', 0, 1, 'JL. PASIRKALIKI NO. 100 KOTA BANDUNG', NULL, 'IMG_GRAND_PASIFIK_HOTEL.jpg', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (5, 'PT. QUALITY INDONESIA', 'HENDRA FANDI CIPTO', 'PETERNAKAN BEBEK', '0217661727', '7661728', '-', 'PMA', 'MANGASI', '0', 0, 4, 'JL. RS. FATMAWATI NO. 39 JAKARTA', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (6, 'PT. DEWA SUTRATEX II', 'HINDARTA SANJAYA', 'TEXTILE', '0226036388', '0226036388', 'computer2@dewasutra.com', 'PMDN', 'AHMAD NAUFAL', '-', 15000, 2, 'JL. CIBALIGO KM. 2,8 MELONG CIMAHI SELATAN', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (7, 'PT. SUMBER MAKMUR ANUGERAH TEXINDO', 'HANDI WIJAYA', 'TEXTILE', '022-6367722', '6867755', '-', 'PMDN', 'SUPALI', '081220116699', 0, 3, 'KAWASAN INDUSTRI CIMAREME IV NO. 6', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (8, 'CV.ANEKA PRODUKSI', 'YANSEN WITANTO KUSLI ', 'HOTEL ', '0227201670', '0227201670', '-', 'PMDN', 'DIREKTUR UTAMA ', '085221244471', 5000, 1, 'JL. SUNDA NO. 60, KEC. SUMUR BANDUNG', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (9, 'PT.MAJA RUANG DELAPAN(MAJA HOUSE/BLACK BIRD HOTEL)', 'BENNY RIJAL GAUTAMA', 'JASA PERHOTELAN', '022-788466', '-', '-', 'PMDN', 'DEVIE', '087821369331', 5000, 3, 'KP.CIHIDEUNG RT 03/O7', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (10, 'PT.INDOCEMENT TUNGGAL PRAKARSA TBK', 'OEY MARCOS', 'INDUSTRI SEMEN', '021-2512121', '-', '-', 'PMDN', 'ANTONIUS.J.SITORUS SECTION HEA', '021-2512121', 19, 3, 'NISMA INDOCEMENT LT.13 JL.JEND SUDIRMAN', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (11, 'PT.KWANGDUK WORLD WIDE', 'SONI IRAWAN ', 'TEXTILE', '022-6973456', '-', '-', 'PMA', 'SONI IRAWAN', '089533487167', 28, 3, 'CIPEUNDEUY ', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (12, 'PT. KWANGDUK WORLD WIDE II', 'SONI IRAWAN', 'TEXTILE', '022-6973456', '-', '-', 'PMA', 'SONI', '089533487167', 28, 3, 'CIPEUNDEUY', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (13, 'HOTEL GRANT', 'CHRISTINE HENDRAWATI', 'HOTEL DAN PARTY', '0', '0', '-', 'PMDN', '-', '0', 2, 4, 'KARANG ANYAR SUBANG', NULL, 'IMG_1_HOTEL_GRANT.jpg', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (14, 'PT.HARAPAN KURNIA TEXTILE INDONESIA', 'WENDI KURNIA', 'TEXTILE', '-', '-', '-', 'PMDN', 'DANA', '-', 4000, 3, 'GA MANULANG NO.73/PADALARANG', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (15, 'RUMAH SAKIT CAHYA KAWALUYAN', 'DRG.A.FRIEDRICH JOHN', 'PELAYANAN JASA KESEH', '022-6803700/0', '-', '-', 'PMDN', 'FX.RAHMAT KARSONO', '-', 56, 3, 'PARAHYANGAN KM.3, KOTA BARU PARAHYANGAN', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (16, 'PT.INDAHTEX UTAMA', 'CHANDRA SWANDI', 'INDUSTRI PERAJUTAN &', '022-6868466/0', '-', '-', 'PMDN', 'KAIRYADI HALIM/STAFF ', '089621762718', 95, 3, 'INDUSTRI II NO.36', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (18, 'APOTIK SANTI/GRAHA SANTI', 'HENAH NURJANAH', 'APOTEK', '0', '0', '-', 'PMDN', 'RESTI ', '0', 594, 1, 'JL. MERDEKA NO. 44, KEC. SUMUR BANDUNG', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (19, 'PT.SINCUNG LAJU CITRA JAYA', 'LO JHEN CHUNG', 'INDUSTRI KIMIA DASAR', '022-6868818', '-', '-', 'PMA', 'TEDI RISMAWAN/BAG.UMUM', '082321140477/', 3, 3, 'INDUSTRI BATU JAJAR PERMAI II NO.8', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (20, 'PT.COMBIPHAR ', 'MICHAL HARYONO WANANDI', 'FARMASI', '022-6809129', '-', '-', 'PMA', '-', '022-6809129', 31, 3, 'JL.RAYA SIMPANG NO.383 PADALARANG', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (21, 'PT. YOUME', 'MR. JANG SOO BONG', 'GARMENT', '0260421229', '421340', '-', 'PMA', '-', '0', 13, 4, 'SUKAMULYA RT 14 RW 04 CIBOGO', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (22, 'PT.SANBE FARMA', 'RIRIP TERI,SE', 'INDUSTRI FARMASI', '022-6867966/0', '-', '-', 'PMDN', 'EDI MULYANA,5.51 -HC MANAGER', '085100340334', 31, 3, 'INDUSTRI CIMAREME NO.8', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (23, 'PT.CAPRIFARMINDO LABORATORIES', 'RYADI SARIPUTRA SUSILO,SE', 'INDUSTRI FARMASI', '022-6867969/0', '-', '-', 'PMDN', 'EDI MULYANA,5.51 -HC MANAGER', '085100340334', 180, 3, 'INDUSTRI CIMAREME NO.8', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (24, 'DINAS PERUMAHAN DAN PERMUKIMAN PROVINSI JABAR', 'IR. BAMBANG RINTO', 'RUSUNAAWA BATUJAJAR', '022-87781038', '-', '-', 'PMDN', 'HEDI', '-', 15, 3, 'KAWALUYAAN INDAH NO.4', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (25, 'PT. WASKITA BETON PRECAST. TBK. PLANT SUBANG', 'IR. MUKTI ALI', 'BETON PRACETAK', '0', '0', '-', 'PMDN', 'MANAGER PIANT', '08129749906', 120, 4, 'JALAN RAYA PURWADADI, KM. 01, KALIANGSANA, KALIJATI, SUBANG.', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (26, 'PT.MULTI SUPRA INDAH', 'IWAN', 'PABRIK CAT', '022-6805885', '-', '-', 'PMDN', '-', '0816609665', 5000, 3, 'G.A MANULANG NO.105B', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (27, 'PT. BANK NUSANTARA PARAHYANG TBK', 'AGUNG SUBAGIYO,SE ', 'BANK ', '02282560100', '2514580', '-', 'PMDN', '-', '0', 0, 1, 'JL. IR. H. JUANDA NO. 95 KEC. COBLONG', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (28, 'PT.KHARISMA ABADI SENTOSA', 'NUCHTAR KOSASIH', 'TEXTILE', '022-6620777', '0220776', '-', 'PMDN', 'BUDI', '08132216876', 1900, 3, 'RAYA CIMAREME NO.187-189', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (29, 'PT.PERDANA FISTA GARMENT', 'TJANDRA TJAHJARA', 'PAKAIAN JADI', '022-6866088', '-', '-', 'PMDN', 'DIRECTUR', '-', 0, 3, 'RAYA BATU JAJAR NO.156', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (30, 'PT.LUCKY REZEKI', 'JHON KOU', 'KIMIA TEXTILE', '-', '-', '-', 'PMDN', 'TARIB(KABAG PERSONALIA)', '0855863701888', 7000, 3, 'RY.BATU JAJAR KM.3.5 NO.35', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (31, 'PT. BANK DANAMON INDONESIA', 'MATHEUS WIDIATMOKO', 'JASA PERBANKAN', '150090', '150090', '-', 'PMDN', 'RTSH', '0', 0, 1, 'JL. MERDEKA NO. 39-41, KEC. SUMUR BANDUNG', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (32, 'PT.TIFATEX PAKAR LESTARI', 'TONY HATIM', 'INDUSTRI TEXTILE', '022-6866642', '6866645', '-', 'PMDN', 'ASEP A SUGIARTO/', '022-6866642', 41, 3, 'INDUSTRI CIMAREME NO.12', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (33, 'HOTEL BUMI MAKMUR INDAH', 'SURYADI WANGSAJAYA', 'HOTEL', '-', '-', '-', 'PMDN', 'SUMARNA', '082316889991', 3, 3, 'RAYA LEMBANG NO.224', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (34, 'MOCCATO HOTEL', 'MUHAMAD SAPEI KAMAL', 'JASA PERHOTELAN', '022-2785193', '-', '-', 'PMDN', 'GEHERAL MANAGER', '087882837394', 3, 3, 'RAYA LEMBANG NO.11 KBB', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (35, 'PT.ULTRA JAYA MILK INDUSTRY', 'IR. JULIANTO ISKANDAR', 'MINUMAN RINGAN DALAM', '022-86700700', '-', '-', 'PMDN', 'BP.PURBA', '0817215163', 125, 3, 'RAYA CIMAREME NO.131', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (36, 'PT.ANEKA FERMENTASI INDSUTRI', 'IR. JOKO SUPARDI ', 'PERALTI TEMPE', '022-6868200', '-', '-', 'PMDN', 'DARWOTO', '081320473984', 1000, 3, 'INDUSTRI BATU JAJAR PERMAI II NO.14', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (37, 'PT. SARANA PROTEINDO UTAMA', 'BAMBANG SUTIAWAN', 'PETERNAKAN AYAM', '0', '0', '-', 'PMDN', 'IMAM', '082221055002', 5, 4, 'JL. SADANG BARU CIKARET, CIDAHU, KEC. PAGADEN BARAT, SUBANG.', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (38, 'PT.JIN MYOUNG', 'KIM HANYEOUL', 'PENYEMPURNAAN KAIN', '022-6868509/0', '-', 'Oliv.Pga@Jinmyoung.COM', 'PMA', 'ALYVIA', '08122291053', 11, 3, 'BATUJAJAR PERMAI II NO.27', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (39, 'BIKASOGA', 'BUDIMAN USMAN SE,MM', 'JASA', '0227311191192', '0227315965', '-', 'PMDN', '-', '0', 20, 1, 'JL. SURYALAYA INDAH NO 1-3, KEC. LENGKONG', NULL, 'IMG_1_BIKASOGA.jpg', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (40, 'PT.ATEJA TRITUNGGAL I', 'KURNIADI M.TJANDRA', 'INDUSTRI PEMINERALAN', '022-6866322', '6866320', 'ateja@ateja.co.id', 'PMDN', 'EDY DJULIANTO/GENERAL MANAGER', '-', 207, 3, 'JL.RAYA BATU JAJAR KM.2,8', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (41, 'PT.SNOGEN INDONESIA', 'HONG DAE SOON/PRESIDEN DIRECTU', 'CHEMICAL TEXTILE', '022-686590516', '-', 'snogen@bdg.centrin.net.id', 'PMA', 'RAMDAN SAPTARI', '-', 10, 3, 'INDUSTRI CIMAREME III NO.9A', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (42, 'PT.CEMARA ABADI TEXTILE', 'MR.SIM KYUNG MIN', 'PERTENUNAN TEXTILE', '-', '-', '-', 'PMDN', 'PAK SUSANTO', '-', 0, 3, 'INDUSTRI CIMAREME', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (44, 'PT.CARILLON INDOPRIMA', 'DADANG SUKAMANA.BC.AK', 'INDUSTRI ANEKA TENUN', '022-6866175', '6866177', '-', 'PMDN', 'MANAGERAR PERSONALIA', '08122002963', 36, 3, 'JL.RAYA CIMAREME BATUJAJAR NO.171 KM.2,3', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (45, 'BUMBU CAP DJAPATI', 'ENGGANA JONATHAN', 'PEMBUNGKUSAN BUMBU  ', '0226014890', '0226014890', '-', 'PMDN', 'WYRAWAN JONATAN ', '0', 0, 1, 'JL JATAYU NO 59, KEC. CICENDO', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (46, 'HOTEL PESONA BAMBU', 'LENA HERJAKSAN', 'HOTEL', '022-2786204', '2786204', '-', 'PMDN', 'TATANG SUTISNA', '085795025067', 3, 3, 'JL.RAYA LEMBANG NO.227', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (47, 'PT. DAENONG', 'SHIN EUI KYO', 'GARMENT', '02607423511', '7423511', '-', 'PMA', '-', '0', 0, 4, 'JL. RAYA SANDANG-SUBANG KM. 138, DUSUN CIKADU, DESA MANYETI, KEC. DAWUAN', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (48, 'PT.ALKINDO NARATAMA', 'ERIK SUTANTO', 'KEMASAN DARI KERTAS', '-', '-', '-', 'PMDN', 'DIREKTUR ', '-', 0, 3, 'INDUSTRI CIMAREME II NO.14', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (49, 'PT.ATEJA MULTI INDUSTRI ', 'RUBY A SAMUEL', 'TEXTILE', '022-6866322', '6652882', 'ruby.ateja.co.id', 'PMDN', 'MGR GA', '08112320313', 112, 3, 'RAYA GADOBANGKONG NO.97', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (50, 'PT.CITRA WARNA SEMPURNA', 'TJANDRA TJAHJANA', 'PENCELUPAN TEXTILE', '022-6866020', '6866019', '-', 'PMDN', 'SRI', '0895220131970', 30, 3, 'RAYA BATU JAJAR NO.156', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (51, 'PT.CCH INDONESIA', 'KO CHING LING', 'TOPI NIKE', '022-686986', '-', '-', 'PMA', '-', '-', 19, 3, 'DS. GRIASIH NO.16 RT 01/13', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (52, 'PT. WISMA BUMI PUTERA ', 'DANIEL ESPANDIARI', 'PROPERTI', '0224241403', '4230080', '-', 'PMDN', 'TUDJI HARTONO', '0224241403', 50, 1, 'JL. ASIA AFRIKA NO.141-149, KEC. SUMUR BANDUNG', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (54, 'PT. LINGGAJATI EKAKARSA', 'JOHANNES PANDAPOTAN N', 'PENDISTRIBUSIAN BULK', '0260415552', '0', '-', 'PMA', 'MANAGER', '085288886778', 7, 4, 'JL. RAWA BADAK KM. 4 KP. CITEREUP RT 13/04, DS. CINANGSI, KEC. CIBOGO, SUBANG.', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (55, 'BUMI SANGKURIANG', 'MARULI DJADJA MULIADY', 'BALAI PERTEMUAN DAN ', '02220326611', '0222034155', '-', 'PMDN', 'KETUA BADAN PENGURUS', '0', 0, 1, 'JL. KI PUTIH NO. 12, KEC. CIDADAP', NULL, 'IMG_1_BUMI_SANGKURIANG.jpg', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (56, 'PT.GODIVA ASTREA TEXTILE', 'SUMITRO GOENARSO', 'TEXTILE', '022-5229224', '-', '-', 'PMDN', '-', '-', 25, 3, 'KP.CANGBORAH NO.8', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (57, 'PT. NIAGATAMA HIJAU RAYA', 'KURNIA SENTOSA', 'KIMIA TEXTIL', '0226030205', '0226030205', '-', 'PMDN', '-', '-', 7500, 2, 'JL. CIBALIGO KM. 6,8 CIGUGUR TENGAH CIMAHI TENGAH', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (58, 'PT.ARDONAS SARANA UTAMA', 'HJ.NUNUN LUSIDA', 'AMDK', '022-2789034', '-', '-', 'PMDN', 'CUCU M. ', '081910564853', 2, 3, 'SITU UMAR LEMBANG', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (59, 'PT. YOLITA JAYA INDONESIA', 'YONGKY HADISAPUTRA', 'INFLATABLE TOYS AND ', '022-6865888', '-', '-', 'PMDN', 'BENHARD ROY .T.S', '08996011733', 15, 3, 'INDUSTRI CIMAREME I NO.1', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (60, 'PT.JAMAFAC', 'IR.GOENDONO RAHARDJO ,MBA', 'PABRIK KOREK API', '022-68661148', '-', '-', 'PMDN', 'APEP', '08139228804', 17, 3, 'JL. RAYA PADALARANG 301 PADALARANG', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (61, 'CV. ARTHA NUSA', 'AGUS SAEFULLAH', 'AIR CURAH/AMDK', '022-6900642', '-', '-', 'PMDN', 'DIREKTUR', '081320472245', 2381, 3, 'RAYA CIPATAT', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (62, 'PT. LOTUS LINGGA PRATAMA', 'LUKMAN LINGGA', 'INDUSTRI AKSESORIS', '022-6864616', '6864619', '-', 'PMDN', 'OKTAVIANUS WUNGO', '08122126297', 9205, 3, 'INDUSTRI CIMAREME I NO.8', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (63, 'PT.LISIANG MULTI KIMIATAMA', 'HSIEH CHIN CHANG', 'KIMIA TEXTILE', '022-6867828', '022-6868128', 'lisiang868@yahoo.com', 'PMA', 'RANI SUTRIANI', '081395238318', 8294, 3, 'INDUSTRI CIMAREME III/ID', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (64, 'PT. FUJI PALAPA TEXTIL INDUSTRIES', 'AFANDI HERMAWAN', 'PERTENUNAN', '0226036975', '0226036975', '-', 'PMDN', 'TRISNO', '-', 2, 2, 'JL. CIBALIGO NO.43 CIBEUREUM CIMAHI SELATAN', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (65, 'CV. ANUGERAH SEJAHTERA (HOTEL IVORY)', 'IR. YUDISHTIRA DARMA SUKMANA', 'HOSPITALITY & AKOMOD', '0', 'F203999', 'hr.admin@wory_ayola.com', 'PMDN', 'DEWI PERTIWI BUDI SH', '0', 947, 1, 'JL. BAHUREKSA NO. 3, KEC. BANDUNG WETAN', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (66, 'PT.SAMDO UTAMA TEXTILE', 'NONO RUSMANA ', 'TEXTILE ORINTTING', '022-6866353', '022-6866351', '-', 'PMDN', 'LUCKY LUSIANTO SH', '081223732775', 6000, 3, 'CANGKORAH NO.78 RT02/02', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (67, 'PT. JASE JAYA INDONESIA', 'DAHNIAR TANJUNG', 'INDUSTRI ELEKTRONIK', '02607490870', '0', '-', 'PMA', 'IBU JUJU / STAF PERSONALIA', '02607490870', 2000, 4, 'KP. RAWA BANCET RT 01/01 WANTILAN, CIPEUNDEUY, SUBANG', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (68, 'PT.SOLAS LANGGENG SEJAHTERA', 'AGUNG YUWONO', 'INDUSTRI FARMASI', '022-6868800', '-', '-', 'PMDN', 'MANAGER PABRIK', '08156001028', 0, 3, 'INDUSTRI CIMAREME I /18', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (69, 'PT.SINAR BASKARA SEJAHTERA', 'DJONI GUNAWAN', 'MAKLOON TEXTILE', '022-6866538', '6866539', '-', 'PMDN', 'DIREKTUR', '082240731048', 5000, 3, 'JL .RAYA BATU JAJAR PASIR PAKU RT 01/11', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (70, 'PT. SIPATA MODA INDONESIA', 'IAN SYARIF', 'TEXTILE', '022-6866178', '6866097', '-', 'PMDN', 'HADI PRIHATA', '08997622660', 16, 3, 'BATUJAJAR KM.3,2', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (71, 'THE NINE', 'HIOE KIE FAM', 'MAKANAN  OLAHAN', '022-4233338', '-', '-', 'PMDN', 'KOSBUARA', '081321743333', 2300, 3, 'INDUSTRI III NO.25', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (72, 'PT.EAST WEAST SEED INDONESIA', 'GLENN PARDEDE', 'PEMBIBITAN TANAMAN', '0264-201871', '-', '-', 'PMDN', 'HARI PRABOWO', '08118474702', 45, 3, 'DS.BENTENG,KEC.CAMPAKA,KAB.PURWAKARTA', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (73, 'CV. BANYUMAS', 'M HARIONO ', 'INDUSTRI TEKSTIL', '0227208231', '0227201670', '-', 'PMDN', 'DIREKTUR ', '082117238083', 25000, 1, 'JL. CIMUNCANG NO. 51, KEC. CIBEUNYING KIDUL', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (74, 'HOTEL HEGAR SARI', 'H. OMON SUPARMAN', 'PERHOTELAN / PENGINA', '0', '0', '-', 'PMDN', '-', '082316998295', 1, 4, 'JL. DAUWAN ONCOM RT 15/05 DAWUAN KALER', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (75, 'PT.OTTO PHARMACEUTICAL INDUSTRI', 'DRS. HERMAN NURHADI', 'FARMASI', '2786137', '-', '-', 'PMDN', 'DONO', '081321179707', 0, 3, 'JL.DR SETIABUDI KM.12,1', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (76, 'PT.ATEJA TRITUNGGAL IV', '-', 'TEXTILE', '022-6866328', '022-6866320', '-', 'PMDN', '-', '-', 33, 3, 'RAYA BATUJAJAR KM.2,8', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (77, 'PT.ATEJA TRITUNGGAL II', '-', '-', '022-6866322', '022-6866300', '-', 'PMDN', '-', '-', 57, 3, 'RAYA PADALARANG KM.2,8', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (78, 'RS. MITRA ANUGRAH LESTARI', 'HIMZAR SANDI AGUS', 'RUMAH SAKIT', '0226027204', '0226027204', '-', 'PMDN', 'AHMAD NAUFAL', '-', 1640, 2, 'JL.CIBALIGO NO.76 CIGUGUR TENGAH CIMAHI TENGAH', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (79, 'PT.COFRI FARMINDO LABORATORUES', 'EDI MULYANA,S.SI', 'INDUSTRI FARMASI', '022-4207725', '-', '-', 'PMA', 'GUNAWAN', '022-4207725', 180, 3, 'INDUSTRI CIMAREME NO.8', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (80, 'CV. CAHAYA ABADI LESTARI', 'H.DENI MAULANA ', 'SPA KAROKE ', '0', '0', '0', 'PMDN', '-', '082117064788', 415, 1, 'JL. MOCH. RAMDHAN NO. 76, KEC. REGOL', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (81, 'PT.MEDION FARMA JAYA', 'INA IRENA JONAS JANJA', 'INDUSTRI FARMASI PET', '022-6030612', '6010859', '-', 'PMDN', 'DIREKTUR UTAMA', '08515147636', 15, 3, 'RAYA BATU JAJAR NO.29', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (82, 'CV. BALQIS AUDI', 'SUKADI', '-', '022-6867289', '-', '-', 'PMDN', '-', '08112288677', 0, 3, 'RAYA BATU JAJAR KM.3,5', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (83, 'PT.KURNIA ARTHA PRATIWI', 'IVAN WIJONO', 'TEPUNG BATU', '022-6005388', '-', '-', 'PMDN', 'DIRECTUR', '-', 94, 3, 'JL.PAMUCATAN KM.22', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (84, 'PT.BANDUNG MARMER SEJATI ALAM', 'BUDI WIJAYA', 'MARMER', '-', '-', '-', 'PMDN', 'DIRUT', '0226805746', 12, 3, 'RAYA PAMUCATAN NO.462', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (85, 'PT,YI HWA TEXTILE', 'WU CHENG YING', 'TEXTILE', '-', '-', '-', 'PMA', '-', '6868258', 13, 3, 'JL.KP. CANGKORAH', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (86, 'PT.BINTANG MITRA SEMESTA RAYA TBK', 'YANUAR HARIYADI', 'GUDANG TRANSIT(CHEMI', '-', '-', '-', 'PMDN', '-', '-', 4775, 3, 'JL.RAYA PADALARANG KM.2', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (87, 'PT.ADHIMIX PRECAST INDONESIA', 'DAMAR ADI SOSONGKO/YUNUS WAHYU', 'BETON CAIR', '-', '-', '-', 'PMDN', 'DAMAR ADI.S', '08568587479', 0, 3, 'BATU JAJAR PERMAI NO.3', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (88, 'PT. POKKA DIMA INTERNATIONAL', 'YAMIN SALIM', 'MINUMAN RINGAN', '0', '0', '-', 'PMA', 'HARDJO DINATA', '081807085758', 71, 4, 'BLOK JABONG I, CURUG RENDENG, KEC. JALANCAGAK, SUBANG.', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (89, 'PT. SAPTA JAYA', 'SUTISNA', 'TEXTILE', '0226031394', '0226031394', '-', 'PMDN', '-', '-', 4, 2, 'JL. CIBALIGO NO.92 KM.2,1 LEUWI GAJAH ', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (90, 'GRAND HOTEL LEMBANG', 'ERIK WIDJAJA', 'HOTEL', '022-278667074', '022-2786829', '-', 'PMDN', 'TEDY BUDIANA', '08122353063', 39, 3, 'JL. RAYA LEMBANG NO.272', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (91, 'CV. CANTIK PLASTIK ', 'YOHAN SUGIHARTO ', 'PELENGKAPAN RUMAH TA', '0225430449', '5430449', '-', 'PMDN', '-', '0', 0, 1, 'JL. CIBOLERANG NO. 33B, KEC. BABAKAN CIPARAY', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (92, 'RSUD CIBABAT', 'DR. TRIAS MUGRAHADI, SP.K.N', 'JASA PELAYANAN KESEH', '0226652025', '0226652025', '-', 'PMDN', '-', '-', 11, 2, 'JL. JENDRAL H.AMUR MACHMUD NO.140 RT.04 RW.04', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (93, 'PT.SATYA PARAHYANGAN RESORT', 'YULIANA', 'JASA PERHOTELAN', '022-6803778', '-', '-', 'PMDN', 'RESIDENT MANAGER', '-', 41, 3, 'JL. RAYA PARAHYANGAN KM.1,8', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (94, 'PT.CENTRAL TEXINDO II', 'KRISTANTO BUDIONO', 'TEXTILE', '022-686334', '-', '-', 'PMDN', 'DEWI SOVIARANI', '-', 30, 3, 'BATU JAJAR NO.32 KM.3,1', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (95, 'PT.DIAMOND COLD STORAGE', 'YOHANES BAMBANG', 'INDUSTRI PENGOLAHAN ', '0226643719', '0226643719', '-', 'PMDN', 'VIKI', '085720288788', 6200, 2, 'JL.CIHANJUANG NO.35 CIBABAT CIMAHI UTARA', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (96, 'PT.DAYA PRATAMA LESTARI', 'HERMAN KOSWARA', 'TEXTILE', '022-6868181', '022-6868282', 'hrd@dpl.co.id', 'PMDN', 'R.SOEWARDJONON', '081910117008', 51, 3, 'INDUSTRI BATUJAJAR PERMAI II/29', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (97, 'CV. HADIATS / HADIATS HOTEL (GUEST HOUSE AHADIAT)', 'A.SADAM ARSAKARATON ', 'AKOMODASI PERHOTELAN', '022200587', '0', '-', 'PMDN', 'DIREKTUR ', '0', 5000, 1, 'JL. SINDANG SIRNA ELOK NO. 9, KEC. SUKAJADI', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (99, 'RS. JIWA PROV JABAR', 'DR.ENDANG NOERSITA DRIM MPH', 'PELAYANAN KESEHATAN ', '022-2700260', '022-2700304', 'pds.ppp@yahoo.com', 'PMDN', '-', '081320575500', 233, 3, 'KEL.MASTURI KM.7', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (100, 'PT.ATEJA TRITUNGGAL III', 'EDY DJULIANTO', 'TEXTILE INTERIOR', '022-6866322', '6866320', 'sevi_dh@yahoo.com', 'PMDN', '-', '082120213742', 48, 3, 'RAYA BATU JAJAR KM.2,8 PADALARANG', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (101, 'PT.ADONAI ALFHA OMEGA', 'ARIEF NOORVIAN', 'ROTI', '-', '-', '-', 'PMDN', 'PIMPINAN', '02287773888', 9600, 3, 'RAYA BATU JAJAR NO.201', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (102, 'PT. DEWA SUTRATEX I', 'HINDARTA SANJAYA', 'TEXTILE', '0226035688', '0226035688', 'purchase@dewasutra.com', 'PMDN', 'AHMAD NAUFAL', '-', 21967, 2, 'JL.CIBALIGO NO.76 CIBEUREM  CIMAHI SELATAN', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (103, 'CV. LAKSANA', 'TATANG HERMAWAN ', 'PERTENUNAN ', '022731250', '-', '-', 'PMDN', 'DIREKTUR ', '-', 330, 1, 'JL. BINONG UTARA NO. 245/127 B, KEC. KIARACONDONG', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (104, 'PT.SAN SEUTRAL INDAH', 'IWAN GUNAWAN', 'CET TEMBOK', '022-6866128', '-', '-', 'PMDN', 'SAKTI YAHI', '085220496789', 40, 3, 'RAYA BATU JAJAR KM.3,5', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (105, 'PT.ANUGRAH MULTI SARI', 'TAN SWASTIKA', 'GUDANG', '022-6865507', '6867273', '-', 'PMDN', 'DIREKTUR', '022-6865507', 2130, 3, 'INDUSTRI V NO.11', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (106, 'PT.TIRTA AMARTA BOTTLING COMPANY', 'RONY TEDY', 'INDUSTRI AIR MINUM D', '022-6866880', '-', '-', 'PMDN', 'HJ.SULIS ', '081572222342', 70, 3, 'INDUSTRI CIMAREME II NO.6', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (107, 'PT.MITAS FIVSTA GARMENT', 'TJANDRA TJAHJANA', 'PAKAIAN JADI', '022-6866088', '-', '-', 'PMDN', 'HENI GUNAWAN', '-', 11, 3, 'RAYA BATU JAJAR KM.1,2 NO.155', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (108, 'PT. ATEJA TRITUNGGAL 5', '-', 'TEXTILE', '0', '0', '-', 'PMDN', '-', '0', 50, 4, 'JL. CIBEUREUM, DESA WANTILAN, KEC. CIPEUNDEUY, SUBANG.', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (109, 'CV. PANAKAWAN SEMAR', 'EKSAN CAHAYA PUTRA', 'PEMBUATAN BASO', '0227510500', '-', '', 'PMDN', 'DIREKTUR UTAMA ', '0227510500', 370, 1, 'JL. CIPAGALO RT. 06 RW. 04 KEC. BUAH BATU', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (110, 'PT.BETON ELMENINDO PERKASA II', 'TJETJEP HARTONO', 'BETON', '-', '-', '-', 'PMDN', 'DIREKTUR', '0811248611', 11460, 3, 'JL.RAYA BATUJAJAR KM.5 NO.10', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (111, 'PT.BETON ELMENINDO PERKASA I', 'TJETJEP HARTONO', 'BETON PRACETAK PRATE', '0226866031', '0226866033', '-', 'PMDN', 'DIREKTUR', '0811248611', 16, 3, 'JL.RAYA BATUJAJAR KM.5 NO.56', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (112, 'PT.SENTOSA HASTA REKSA', 'KWOK TJING SUNG', 'KAYU/KOAS UNTUK CAT', '022-6805005', '022-6803596', 'personalia@ptlmb.com', 'PMDN', 'DRS.ADE RUHIAT.K', '0822170024838', 40, 3, 'JL.RAYA PADALARANG NO.273', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (113, 'CV. PUDAK SCIENTIFIC', 'IR ZAENAL ARIEF', 'ALAT PERAGA PENDIDIK', '0227812907', '0227806645', '-', 'PMDN', 'TOMMY SOEBROTO', '08164874065', 32000, 1, 'JL. MEKAR RAYA KAV 12, KEC. RANCASARI', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (114, 'PT.KURNIA PARMA ADHARA', 'EDWIN WIJONO', 'KAPUR BAKAR', '022-6807788', '-', 'ato.mirarto@gmail.com', 'PMDN', 'ATO', '081321473489', 75, 3, 'JL.RAYA PAMUCATAN KM.22,5', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (115, 'PT. BANK RAKYAT INDONESIA (PERSERO) CABANG SUBANG', 'DWI HENDRARTO', 'PERBANKAN', '0260413229', '0260413230', '-', 'PMDN', '-', '0', 0, 4, 'JL. OTTO ISKANDARDINATA NO. 87 KEL. KARANGANYAR KEC. SUBANG KAB. SUBANG', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (116, 'RSUD CIKALONG WETAN ', 'DR.HJ.PUPUSARI ROHAYATI.MH KES', 'RSUD', '022-27210103', '-', '-', 'PMDN', 'SURYANA,S,SOS', '022-27210103', 24, 3, 'JL.RAYA PURWAKARTA ', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (117, 'PT.SAPTA PELITA ASIA', 'ANTON LAWINA', 'RAJUT', '022-6865824', '-', '-', 'PMDN', 'ADI SETYANTO,SH', '022-6865824', 17, 3, 'JL.PASIR PAKU', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (118, 'PT.AMIDIS TIRTA MULYA', 'YOSEP ABEDMEQO', 'AMDK', '022-6867341', '-', '-', 'PMDN', '-', '022-6866040', 6230, 3, 'JL.CIMAREME NO.273', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (119, 'PT.ROYAL ABADI SEJAHTERA ', 'BENI ABEDNEQO', 'SPRINGBED', '022-6866360', '-', '-', 'PMDN', '-', '0226866360', 77, 3, 'JL.CIMAREME KM.15,1 NO.275', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (120, 'PT.ASIAN COTTON INDUSTRY', 'TONY TJANDRADINATA', 'PEMINTALAN', '022-6866261', '6866265', '-', 'PMDN', 'VERA ARIESA', '085659068789', 86, 3, 'JL.INDUSTRI CIMAREME NO.11', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (121, 'PT.PABRIK KARET MARGAJAYA', 'BUDIANTO HALIM', 'RUBER/KARET', '081321011143', '-', '-', 'PMDN', 'YULIANTO', '081321011143', 2, 3, 'KAWASAN INDUSTRI BATUJAJAR NO.25A', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (122, 'PT. CIBALIGO INDAH', 'BUDIMAN SANTOSAN TANADI', 'INDUSTRI TEKSTIL', '0226030275', '6030285', '-', 'PMDN', '-', '-', 0, 2, 'JL.HEGAR IV NO.24 CIBALIGO KEL.CIBEUREUM KEC.CIMAHI SELATAN', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (123, 'PT.NICE INDONESIA ', 'SIN DONG CHUN', 'KIMIA TEXTILE', '-', '-', '-', 'PMA', 'KUSWAN NURHAQIQI', '082129878855', 7, 3, 'JL.INDUSTRI BATUJAJAR', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (124, 'PT.MEDION II', 'INA IRENA JONAS JANJA', 'FARMASI', '022-6866090', '-', '-', 'PMDN', 'SLAMET WAHYONO', '022-6866090', 51, 3, 'JL.CIBINGBIN ', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (125, 'CV. WILLY', ' HENGKY LUMITA ', 'NON WOVEN ', '0227801393', '-', '', 'PMDN', 'IRAWATI HALIM', '0817222999', 24670, 1, 'JL. SOEKARNO HATTA NO. KM. 12,5 NO. 736, KEC. GEDEBAGE', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (126, 'PT.SARANA MAKIN MULIA', 'JOSEP ABEDNEQO', 'INDUSTRI TEXTILE', '-', '-', '-', 'PMDN', '-', '022-6866040', 37, 3, 'JL.CIMAREME NO.273', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (127, 'PT.SINAR JAYA LESTARI INDAH ', 'TIU KHIT LIN', 'TEXTILE', '022-6867991', '-', '-', 'PMDN', 'MEGAWATI', '081214560326', 6, 3, 'JL.TERUSAN LPM PKM 07 CIAMPEL', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (128, 'PT.DUTA RAYA INVESTINDO', 'RUBY A RIJANTO', 'PROPERTY', '6803333', '6803333', '-', 'PMA', 'MANAGER PERMIT', '6803333', 2500, 3, 'JL.CIKANDE RT 02/02', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (129, 'CV. TIRTA ANUGERAH ABADI', 'JAKA SURIARACHMAN ', 'PENJUALAN AIR ', '0227230125', '-', '-', 'PMDN', '- ', '08122313111', 1430, 1, 'JL. PACUAN KUDA NO. 2, KEC. ARCAMANIK', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (130, 'PT. BIBIT INDONESIA', 'IR. REWIN HANRAHAN ', 'PERTENAKAN AYAM', '0', '0', '-', 'PMDN', 'MANGASI/MUNIR', '085282984840/', 19, 4, 'DESA CISAGA, KEC CIBOGO, SUBANG', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (131, 'PT.BELA PUTRA INTILAND', 'RUBY A RIJANTO', 'PROPERTI', '6803333', '6803333', '-', 'PMDN', 'MANAGER PERMIT', '6803333', 5500, 3, 'JL.RAYA PADALARANG NO.427', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (132, 'PT.LEMON INDAH', 'IBNU SOFYAN', 'HOTEL', '022-2785058', '-', '-', 'PMDN', 'MANAGER KEUANGAN ', '08111346208', 9, 3, 'HOLTIKULTURA 18', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (133, 'PT. IHCHI TEXTILE MILLS & MACHINERY', 'LIAO I CHING ', 'INDUSTRI KECIL', '0226038012', '6038037', '-', 'PMA', '-', '-', 0, 2, 'JL. CIBALIGO NO.194A KEL.UTAMA KEC.CIMAHI SELATAN', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (134, 'PT.ARSANI (GRAND HANI HOTEL)', 'HENRDA HERWANTO', 'HOTEL', '-', '-', '-', 'PMDN', 'DIREKTUR', '-', 6, 3, 'RAYA LEMBANG', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (135, 'PT.ALKINDO NARATAMA TBK', 'HERWANTO SUTANTO', 'KEMASAN DARI KERTAS ', '022-6868400', '022-6868500', '-', 'PMDN', 'DIREKTUR UTAMA', '-', 43, 3, 'INDUSTRI CIMAREME I NO.4', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (136, 'VILLA TERATAI', 'SUHANDI', 'PENGINAPAN', '085100344501', '-', '-', 'PMDN', 'SUHANDI', '081282726806', 0, 3, 'RAYA TANGKUBAN PERAHU NO.108', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (137, 'CV. SINAR BANDUNG', 'AKIANG ', 'TEXTILE ', '0226030035', ' 0226030035', '-', 'PMDN', 'EKA ', '-', 8000, 1, 'JL. BELAKANG ARUNA NO. 72, KEC. CICENDO', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (138, 'DANA PENSIUN TELKOM', 'GATOT RUSTAMADJI', 'PERKANTORAN', '0222500983', '2506884', '-', 'PMDN', 'EDIN SUTRISNO', '0', 1725, 1, 'JL. SURAPATI NO. 151, KEC. CIBEUNYING KALER', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (139, 'PT. QL. AGROFOOD', 'ANG BEE TIAM', 'PETERNAKAN AYAM', '0263515100', '0', 'suyono.s@-indo.co.id', 'PMDN', 'TOTO HENDIANTO', '0263515100', 100, 4, 'JL. CIMAYASARI, DESA CIMAYASARI, KEC. CIPEUNDEUY, KAB. SUBANG.', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (140, 'PT. TUNGGAL INTI KAHURIPAN', 'TATAT', 'MAKANAN(BISKUAT)', '0226013712', '6079570', '-', 'PMDN', '-', '-', 0, 2, 'JL.CIBALIGO NO.86 KM. 2,1 KEL.MELONG KEC.CIMAHI SELATAN KOTA CIMAHI', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (141, 'HORTEL GARDEN PERMATA INTERNASIONAL', 'HERY SOEGIARSO SOEWANDI', 'HOTEL', '0222011000', '0', '0', 'PMDN', 'PA ALIAS', '085794127079', 21686, 1, 'JL. LEMAHNEUNDEUT NO. 7, KEC. SUKAJADI', NULL, 'IMG_1_HORTEL_GARDEN_PERMATA_INTERNASIONAL.jpg', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (142, 'PT.TRIKARSA FIBERINDO', 'LANNY CHANDRAWINATA', 'SERAT SINTETIS', '022-6865078', '6866649', '-', 'PMDN', 'BOBBY ISKANDAR', '6865078', 10, 3, 'INDUSTRI CIMAREME II NO.8', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (143, 'CV. SINAR MUTIARA JAYA ABADI', 'ANDI WIDAGDO,ST', 'USAHA MINUMAN', '0260450016', '0', '-', 'PMDN', '-', '0', 0, 4, 'JL. ACHMAD YANI NO. 64 DESA GAMBASARI KEC. PAGADEN KAB. SUBANG', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (144, 'PT.ANUGERAH MULTI SARI INDOTAMA', 'HENDRA SAPUTRA', 'PERDAGANGAN OBAT CEL', '022-6865507', '6867273', 'anugerahmultisariindotama@yaho', 'PMDN', 'SWASTIKA', '-', 2130, 3, 'JL.INDUSTRI V NO.11', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (145, 'HOTEL DEWI SARTIKA', 'IRWAN SUHERMAN ', 'HOTEL ', '022205227889', '6022682', '-', 'PMDN', 'DIREKTUR ', '-', 0, 1, 'JL. DEWI SARTIKA NO. 18, KEC. REGOL', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (146, 'PT.LETUS LINGGA PRATAMA', 'LUKMAN LINGGA', 'INDUSTRI AKSESORIS P', '022-6864618', '022-6864619', '-', 'PMDN', 'ROULI SASMITA', '081394502640', 9205, 3, 'INDUSTRI CIMAREME 1/8', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (147, 'PT.TIGA ARGA KENCANA', 'WEMFI', 'INDUSTRI CAT', '-', '-', '-', 'PMDN', 'WEMFI', '-', 19490, 3, 'JALAN RAYA CIMAREME NO.185', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (148, 'PT.CAHAYA KURNIA PERMAI', 'OEJOEN TOMMY', 'INDUSTRI KIMIA TEXTI', '-', '-', '-', 'PMDN', 'JEFFRY LIAUWIRIANTO', '022-6864186', 3000, 3, 'DESA', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (149, 'PT.CHAMP RESTO INDONESIA', 'ALI GUNAWAN BUDIMAN', 'RESTORAN', '022-87781807', '-', 'ga@champ_group.com', 'PMDN', 'MISLAM SUGIRI', '08121433795', 6645, 3, 'JL.CIHANJUANG NO.130 KM.4,8 RT 03/07', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (150, 'HOTEL DAFAM RIO', 'IR, ADHY SATRIANTO, MBA', 'HOEL', '0', '0', '-', 'PMDN', '-', '0', 0, 1, 'JL. RIAU NO. 160 KEC. BANDUNG WETAN', NULL, 'IMG_1_HOTEL_DAFAM_RIO.JPG', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (151, 'PT.MICHAEL INDONESIA ABADI', 'LINDA INDRIYANI', 'INDUSTRI WEAVING HAN', '022-87773889', '-', '-', 'PMDN', 'FRENGKY', '0811238979', 0, 3, 'JL.RAYA BATUJAJAR KM.1.3 NO.165', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (152, 'PT. BARAIN UTAMA', 'TJHIN SOEI TJHIN', '-', '0226030535', '0226030535', '-', 'PMDN', '-', '-', 5210, 2, 'JL.CIBALIGO NO.149 KEL. CIBEUREUM KEC.CIMAHI SELATAN', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (153, 'MOUNTAINT SPRING RESORT', 'GANI MUALIM', 'HOTEL', '-', '2784994', '-', 'PMDN', '-', '-', 497, 3, 'JL.RAYA TANGKUBAN PARAHU NO.89', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (154, 'PT. BERUANG MAS PERKASA', 'PIKOLI SINAGA, SE.MM', 'PROPERTY (PENGEMBANG', '02130499799', '0', '-', 'PMDN', 'LILIK PRIO', '083816392289', 130, 4, 'JL. MH. THAMRIN NO. 81 KEL. MENTENG KEC. NGENTENG, KOTA JAKARTA PUSAT.', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (155, 'HOTEL CITARUM', 'ERIK DARIUS MARDIWIDYO ', 'JASA PENGINAPAN ', '0227207100', '7206900', '-', 'PMDN', 'W. SANDRA GATUNI ', '0227207100', 2, 1, 'JL. CITARUM NO. 16 CIHAPIT, KEC BANDUNG WETAN ', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (156, 'PT.ORIENTAL TEXTILE INDONESIA', 'RACHEL KOO', 'JASA CELUP', '-', '686411', '-', 'PMDN', '-', '082126195222', 2810, 3, 'INDUSTRI CIMAREME I NO.25', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (157, 'PT.INDO DEHA PRATAMA ', 'INDRA YANUAR ', 'GUDANG KIMIA', '022-6865263', '-', '-', 'PMDN', 'PERSONALIA UMUM', '022-6865208', 10000, 3, 'INDUSTRI CIMAREME NO.3', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (158, 'HOTEL CEMERLANG', 'GUSMON TJAKRALAKSANA ', 'HOTEL ', '0226071363', '0226071363', '-', 'PMDN', 'EKI', '081322851946', 4000, 1, 'JL. PASIRKALIKI NO. 45, KEC. CICENDO', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (159, 'PT.PERUSAHAAN LOGAM BIMA', 'LIEM HWIE LIONG', 'PERALATAN DAPUR', '022-6866394', '686636463', '-', 'PMDN', 'SARI LUSMAYA', '-', 70, 3, 'JL.RAYA BATUJAJAR NO.98', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (160, 'HOTEL CALIFORNIA', 'LIE SAMUELY', 'JASA PERHOTELAN', '022', '0', '0', 'PMDN', 'JUNAEDI', '081931349691', 4000, 1, 'JL. WASTU KENCANA NO. 58 KEC. BANDUNG WETAN', NULL, 'IMG_1_HOTEL_CALIFORNIA.jpg', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (161, 'PT.CENTRAL GEORGETE NUSANTARA PRINTING MILKS', 'TATANG RUSTANDI', 'INDUSTRI TEXTILE', '022-6866735', '-', '-', 'PMDN', 'DWI WAHYUDI', '082118882887', 76, 3, 'JL.RAYA GADOBANGKONG ,97 KM.13 PADALARANG', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (162, 'BREEZE HOTEL', 'DR. A RETNO HASTUTI', 'PERHOTELAN', '022-82027488', '-', '-', 'PMDN', 'SRI YUNI', '085722965927', 660, 3, 'JL.PONDOK HIJAU PERMAI', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (163, 'HOTEL BRAGA', 'KURNIA SETIAWAM ', 'HOTEL ', '0224213070', '0224213070', '-', 'PMDN', 'ASEP ', '085659136370', 4090, 1, 'JL. BRAGA NO. 8, KEC. SUMUR BANDUNG', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (164, 'PT.BUKIT ASHAR', 'AQUSTINUS GUNAWAN.T', 'PENGGILINGAN TEPUNG ', '-', '-', '-', 'PMDN', '-', '022-6803377', 8200, 3, 'KAMPUNG GIRI MULYA RT03/09', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (165, 'PT. BUDI MAKMUR PERKASA', 'TIMOTI ANTONIO', 'PRODUKSI TEPUNG', '02607710786', '0', '-', 'PMDN', 'H. OSEP SUNARYO,SH', '081294957766', 50, 4, 'JL. NEGARA CIKALONG, DESA TANJUNG RASA, KEC. PATOK BESI, SUBANG.', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (166, 'CV. SENTOSA ELECTRIC', 'AHMAD', 'ELEKTRONIK', '0226032257', '6035591', '-', 'PMDN', '-', '-', 1300, 2, 'JL.HEGAR NO.3 CIBALIGO CIMAHI', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (167, 'PT.SINAR NIAGA SEJAHTERA', 'GEDE SUNTORO', 'DISTRIBUTOR MAKANAN ', '022-6620346', '-', '-', 'PMDN', 'JOKO', '085622050010', 2500, 3, 'RAYA CILAMES KP.MARGA MULYA RT.00A/00A', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (168, 'PT.SINAR SAHABAT SEJATI', 'SUGIANTO SOENDJAJA', 'INDUSTRI PLASTIK SED', '022-6868462', '-', '-', 'PMDN', 'SRI AMALIA', '08122454103', 4570, 3, 'RAYA BATUJAJAR KM.3.8 NO 8', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (169, 'PT.CITRA BRAHMANA PERKASA', 'GUNG INDRADJAJA ', 'PETERNAKAN', '022-6970423', '-', '-', 'PMDN', '-', '08112002569', 10, 3, ' KP. GN. BATU RT. 1/20, CIKALONG, CIKALONG WETAN', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (170, 'KOLAM RENANG CEMPAKA', 'BP. RULLY SUDJANA', 'KOLAM RENANG', '082317171060', '082317171060', '-', 'PMDN', '-', '-', 4400, 2, 'JL.KAMARUNG NO.5 KEL.CITEUREUP KEC.CIMAHI UTARA', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (171, 'PT.DUMACO CHEMICAL ', 'SINDIANTO', 'KIMIA TEXTILE', '022-6865353', '-', '-', 'PMDN', 'DIREKTUR ', '-', 4000, 3, 'JL.RAYA BATUJAJAR KM.1', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (172, 'PK KENCANA', 'EDDY HERMAWAN', 'PRODUKSI KECAP', '0226656678', '0226656678', '-', 'PMDN', '-', '-', 1000, 2, 'JL.CIAWITALI NO.3 ', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (173, 'HOTEL BOULEVARD INN', 'KISWORO ', 'HOTEL ', '-', '-', '-', 'PMDN', '-', '-', 0, 1, 'JL. TALAGA BODAS NO. 106 KE. LENGKONG', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (174, 'PT. SETIA PARAHYANGAN RESORT', 'YULIANA', 'JASA PERHOTELAN', '022-6803778', '-', '-', 'PMDN', '-', '-', 41455, 3, 'RAYA PARAHYANGAN KM.1,8 KOTA BARU PARAHYANGAN ', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (175, 'PT.JAVA FOOD ANEKA INDUSTRI', 'KIKY GUNAWAN', 'INDUSTRI MAKANAN', '022-6864608', '6864609', '-', 'PMDN', 'SUHENDI', '085294935434', 8831, 3, 'JL.INDUSTRI CIMAREME II NO.2', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (176, 'PT.BANGUN CIPTA PRIMANTARA', 'ALVIN STEVEN', 'INDUSTRI FURNITURE', '022-6866819', '-', '-', 'PMDN', '-', '082115464694', 5625, 3, 'JL.INDUSTRI I NO.9', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (177, 'PT. FANCY YARNINDO JAYA', 'DR.EDDY WIRAWAN. SH', 'PENGINTIRAN BARANG', '0226036066', '0226036066', '-', 'PMDN', '-', '-', 2400, 2, 'JL.CIBALIGO NO.163 CIMAHI', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (178, 'PT.HIGH RAKWAY CONTRACTOR', 'USMAN', 'BATCHING PLAN', '-', '-', '-', 'PMA', '-', '-', 29979, 3, 'KP.CIJENTUR ', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (179, 'HOTEL BALI WORLD', 'ANDY', 'HOTEL', '0227332088', '0', '-', 'PMDN', 'ONWER/DIREKTUR', '0227332087', 4730, 1, 'JL.SOEKARNO HATTA NO.713', NULL, 'IMG_1_HOTEL_BALI_WORLD.jpg', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (180, 'PT.INTERMODA KUSUMA', 'RUDY UNJOTO', 'TEXTILE', '022-6864626', '-', '-', 'PMDN', 'BU TATI', '022-6864626', 80, 3, 'INDUSTRI CIMAREME III NO.6', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (181, 'PT.PERISAI WISATA  UTAMA I', 'PERRI TRISTANTO TEDJA', 'PARIWISATA', '-', '-', '-', 'PMDN', 'DIREKTUR UTAMA', '081197287', 11, 3, 'GRANDHOTEL NO.33 LEMBANG', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (182, 'PT.BIMETA KARNUSA', 'PAULUS ANGGA.S', 'PEMBUATAN KARDUS', '022-6864277', '-', '-', 'PMDN', 'PIMPINAN', '-', 5000, 3, 'CIMAREME KEC.NGAMPRAH', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (183, 'HOTEL ARDAN', 'KIMAWATI ', 'JASA PERHOTELAN ', '0222031536', '0222031536', '-', 'PMDN', 'GENERAL MANANGER ', '082295360675', 999, 1, 'JL. SEDERHANA NO. 8-10, KEC. SUKAJADI', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (184, 'PT.KARTIKA SINAR MULIA', 'ANA BELLA TILAR', 'PERAJUTAN', '0815609292', '-', '-', 'PMDN', '-', '0815609292', 2000, 3, 'RAYA BATUJAJAR KM.3,5', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (185, 'PT. BEST JEANS INDO CITRA NUSA', 'LIAMIN JOEANDA', 'TEXTILE/PERTENUNAN', '0226034881', '0226035761', '-', 'PMDN', '-', '-', 3254, 2, 'JL.CIBALIGO NO.6-48 BARU', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (186, 'CV.CAHAYA TIMUR', 'ALPIN LIMANDO', 'JASA LAUNDRY ', '022-86671481', '-', '-', 'PMDN', 'MUHAMAD RIZKY', '085220122616', 4540, 3, 'KP.CIBINBIN RT06/04', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (187, 'PT.GRAND HERBAL INDONESIA', 'WASRIAH', 'PUPUK', '081321364926', '-', '-', 'PMDN', '-', '-', 890, 3, 'POJOK TENGAH RT05/05', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (188, 'UD.SPBU.3440.321.CIBOGO LEMBANG', 'IR.H.R.SUFBIANDON', 'JASA SPBU', '022-2704959', '-', '-', 'PMDN', 'MANAGER', '-', 3310, 3, 'JL.RAYA TANGKUBAN PARAHU', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (189, 'HOTEL AMARIS', 'TJATUR PRASETYA ', 'HOTEL ', '02280262688', '-', '-', 'PMDN', 'SHYINTYA DWI PUSPITA ', '081802101013', 115, 1, 'JL. CIHAMPELAS NO. 7, KEC. COBLONG', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (190, 'HOTEL ARYADUTA D/H HYATT REGENCY BANDUNG', 'RIZAL RURIKO KASIM', 'JASA HOTEL', '0224211234', '41210340', '-', 'PMDN', 'ILMAN NASIK', '08122023387', 6800, 1, 'JL. SUMATRA NO. 51, KEC. BANDUNG WETAN', NULL, 'IMG_1_HOTEL_ARYADUTA_dh_HYATT_REGENCY_BANDUNG.jpg', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (191, 'SEKOLAH TINGGI ALKITAB TIRANUS', 'DR.BINSEN SAMUEL SIDJABAT', 'SEKOLAH', '022-6658354', '022-6658353', 'stat@tiranus.co.id', 'PMDN', 'KETUA', '081320345467', 2, 3, 'JL.CIHANJUANG KM.5,2', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (192, 'PT. JENSIANG NUSANTARA', 'LELI ERIKA', 'KIMIA TEXTIL', '0226033738', '0226033739', '-', 'PMDN', '-', '-', 19495, 2, 'JL.CIBALIGO MELONG KM.3 0328', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (193, 'PT.PRIMA LAKTO SEHAT', 'VIKTOR ULI M.SILITONGA', 'PRODUKSI SUSU YOGURT', '-', '-', '-', 'PMDN', 'MAGAER HRD & UMUM', '085220086777', 16, 3, 'CIMERANG NO.170', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (194, 'HOTEL NARIMA INDAH', 'HJ.SOENDARI DJAROT S.SOS', 'HOTEL', '-', '-', '-', 'PMDN', 'PEMILIK', '-', 19, 3, 'JL.TANGKUBAN PARAHU NO.48', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (195, 'HEMAGINI HOTEL', 'DEWIJANRI ', 'HOTEL ', '-', '-', '-', 'PMDN', 'DIREKTUR ', '-', 0, 1, 'JL. SETIABUDHI NO. 66, KEC. CIDADAP', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (196, 'PONDOK KAHURIPAN HOTEL', 'R.BENNY BUDIMAN SUPENDI.SH', 'JASA PERHOTELAN', '022-2786819', '-', '-', 'PMDN', 'MANAGER OPERASIONAL', '022-2786819', 5, 3, 'JL.RAYA LEMBANG NO.77', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (197, 'CV.NADIA CATERING', 'HJ.SOENDARI DJAROT S.SOS', 'CATERING', '022-8782004', '-', '-', 'PMDN', 'PEMILIK', '081221424334', 5, 3, 'JL.TANGKUBAN PARAHU NO.47', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (198, 'RM.TAHU SUMEDANG RENYAH', 'YOSEP PERMANA', 'PENGOLAHAN TAHU', '-', '-', '-', 'PMDN', 'PEMILIK', '-', 795, 3, 'JL.KOL.MASTURI NO.155', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (199, 'PT. SOLINDAH KITA', 'LAUW KIM HAM', 'ALAS KAKI (SOL SEPAT', '0226035659', '6031470', '-', 'PMDN', '-', '-', 5000, 2, 'JL.CIBALIGO NO.160', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (200, 'PT.FAJAR MATARAM SEDAYU', 'ELSY TJENDRAWATI', 'PEMBUATAN COKLAT', '022-6122608', '-', '-', 'PMDN', 'ANNE', '082214517013', 0, 3, 'JL.BATUJAJAR KM.3,5 NO.37', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (201, 'PT. CENTRAL AGROMINA-HATCHERY SUBANG', '-', 'PETERNAKAN AYAM', '0', '0', '-', 'PMDN', '-', '0', 0, 4, 'JL. ANCOL BARAT VIII, NO. 01, ANCOL, JAKARTA UTARA.', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (202, 'PT.HERO SEKAWAN', 'LIE JIE SWIE', 'TEXTILE', '022-6868688', '022-6866247', '-', 'PMDN', 'JENNY', '-', 16, 3, 'PASIR PAKU NO.54', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (203, 'PT. SINTOETEX LESTARI', 'TAN SIHUNTEK', 'MAKLUN BENGKEL', '0226030379', '0226030379', '-', 'PMDN', '-', '-', 0, 2, 'JL.MANCONG 268.B RT002/001 MELONG', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (204, 'PT. MULIA LESTARI', 'STEPHEN SIEN HOA TAN', 'TEXTILE', '0226031639', '0226035710', '-', 'PMDN', '-', '-', 19, 2, 'JL.CIBALIGO NO.70 KM.1,7', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (205, 'HOTEL GREEN HILL ', 'ELIA YOESMAN  ', 'HOTEL ', '0222010388', '-', '-', 'PMDN', 'DIREKTUR ', '-', 11, 1, 'JL. DR. SETIABUDI NO. 376, KEC. CIDADAP', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (206, 'PT.INDOFOOD CBP SUKSES MAKMUR TBK', '-', 'INDUSTRI MAKANAN & M', '022-6809814', '6809810', '-', 'PMDN', 'DENNY SUGANDA', '-', 0, 3, 'JL.RAYA CARINGIN NO.353 RT01/10', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (207, 'PT. CENTRAL AGROMINA-FARM SUBANG1 JATI', '-', 'PETERNAKAN AYAM', '0', '0', '-', 'PMDN', '-', '0', 0, 4, 'JL. ANCOL BARAT VIII, NO. 01, ANCOL, JAKARTA UTARA.', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (208, 'CV. DAYA UTAMA LOGAM', 'BUDI RISMAWAN,ST', 'KANCING LOGAM (PELAP', '0226035865', '0226033645', '-', 'PMDN', '-', '-', 8, 2, 'JL. CIBALIGO NO.142A RT004/RW016 KEL.CIBEUREUM KEC.CIMAHI SELATAN', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (209, 'PT. BINA INTI DINAMIKA', 'GOLLY LUTFI', 'GRAND HOTEL PREANGER', '0224231631', '4230034', '-', 'PMDN', '-', '0', 0, 1, 'JL. ASIA AFRIKA NO. 81', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (210, 'GRAHA CIUMBULEUIT', 'ASEP ANDA ', 'JASA PENGINAPAN ', '0222043350', '-', '-', 'PMDN', 'GENERAL MANANGER ', '081321685431', 5400, 1, 'JL. CIUMBULEUIT NO. 156, KEC. CIDADAP', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (211, 'PT. CENTRAL AGROMINA-FARM SUBANG II', '-', 'PETERNAKAN AYAM', '0', '0', '-', 'PMDN', '-', '0', 0, 4, 'JL. ANCOL BARAT VIII, NO. 01, ANCOL, JAKARTA UTARA.', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (212, 'GKSI UUPP JABAR/ISAM', 'YUSUF MUNAWAR', 'INDUSTRI PENGELOLAH ', '0227814622', '0', '-', 'PMDN', 'DEA ISMARLIA', '089631147862', 12, 1, 'JL. RUMAH SAKIT NO. 114 KEC UJUNGBERUNG', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (213, 'GEDUNG ABG', 'INDRAWATI ', 'SEWA RUANG ', '0227319687', '-', '-', 'PMDN', '-', '-', 1000, 1, 'JL. PELAJAR PEJUANG 45 NO. 115, KEC. REGOL', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (214, 'PT. SINAR AUSTRAL', 'NATHANAEL KOSHAN', 'TEXTIL INDUSTRI', '0226031580', '0226031580', '-', 'PMDN', '-', '-', 2, 2, 'JL.CIBALIGO NO.48 KEL.CIMAHI TENGAH ', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (215, 'PT. TRIWANTA SANTIKA ', 'IWAN SUDARMAWAN ', 'JASA ', '0222011666', '-', '-', 'PMDN', 'DIREKTUR ', '081910388777', 20, 1, 'DR SETIABUDI NO. 438 LEDENG, CIDADAP BANDUNG ', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (216, 'PT. CHAROEN POKHAND JAYA FARM GP HATCHERY 2 SUBANG', 'ROMANUS PURBA', 'PENUNJANG PETERNAKAN', '0260450066', '450066', '-', 'PMDN', '-', '0', 0, 4, 'JL. RAYA SUBANG PAGADEN KM. 9, DESA GUNUNGSARI, KEC. PAGADEN, KAB. SUBANG.', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (217, 'PT. SAN SAN SAUDARATEX', 'GUNARAS DANUBRATA', 'TEXTILE GARMEN', '-', '-', '-', 'PMDN', '-', '-', 29000, 2, 'JL.CIBALIGO NO.33 KEL.CIBEUREUM KEC.CIMAHI SELATAN', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (218, 'PT. MULTI KARYA PERKASA ', 'LUKE TARUNA MIHARJA ', 'TEXTILE ', '0227800675', '-', '-', 'PMDN', 'REZA ABDURAHMAN ', '08132166674', 7530, 1, 'JL. RUMAH SAKIT NO 45-47 SUKAMULYA KEC. CINAMBO ', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (219, 'CV. HINANI', 'H. IR SUPARMAS', 'LOGAM', '0227803834', '0', '-', 'PMDN', 'RIYADI', '0878220305', 3654, 1, 'JL. RUMAH SAKIT NO. 110 KEC UJUNGBERUNG', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (220, 'PT. DUTA ABADI PERKASA ', 'YOSI PERMANA SAPUTRA', ' JASA ', '02275185597', '-', '-', 'PMDN', 'DIREKTUR ', '02275185597', 30, 1, 'BATUNUNGGAL INDAH II NO 48 MENGGER KEC BANDUNG KIDUL ', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (221, 'PT. CHAROEN POKHAND JAYA FARM GP FARM 5 SUBANG', 'ROMANUS PURBA', 'PENUNJANG PETERNAKAN', '0260450066', '450066', '-', 'PMDN', '-', '0', 0, 4, 'JL. RAYA SUBANG PAGADEN KM. 9, DESA GUNUNGSARI, KEC. PAGADEN, KAB. SUBANG.', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (222, 'PT. BINTANG WARNA MANDIRI', 'ALBERT GONARDI', 'JASA PENYEMPURNAAN K', '0226038785', '0226038785', '-', 'PMDN', '-', '-', 1, 2, 'JL.CIBALIGO NO.165 CIBEUREUM CIMAHI SELATAN', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (223, 'PT. CHAROEN POKHAND JAYA FARM 3 SUBANG', 'ROMANUS PURBA', 'PENUNJANG PETERNAKAN', '0260450066', '450066', '-', 'PMDN', '-', '0', 0, 4, 'JL. RAYA SUBANG PAGADEN KM. 9, DESA GUNUNGSARI, KEC. PAGADEN, KAB. SUBANG.', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (224, 'PABRIK PLASTIK ASIA AFRIKA NURTANIO', 'ANDY NATASAPUTRA', 'PEMBUATAN PLASTIK ', '0226014570', '-', '-', 'PMDN', '-', '-', 4000, 1, 'JL. LMU. NURTANIO 91-93, KEC. ANDIR', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (225, 'PD. MAWAR', 'ASEP SAEPUDIN', 'PEMBUATAN BASO DAN S', '081394717355', '0', '-', 'PMDN', 'ENGKOS', '081394717355', 975, 1, 'JL. PANGARITAN-MEKAR MULYA NO. 1, KEC. PANYILEUKAN', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (226, 'PT. CHAROEN POKHAND JAYA FARM GP FARM 4 SUBANG', 'ROMANUS PURBA', 'PENUNJANG PETERNAKAN', '0260450066', '450066', '-', 'PMDN', '-', '0', 0, 4, 'JL. RAYA SUBANG PAGADEN KM. 9, DESA GUNUNGSARI, KEC. PAGADEN, KAB. SUBANG.', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (227, 'PABRIK PLASTIK ASIA AFRIKA / PT. ASIA BARU', 'SAM MICHAEL NATASAPUTRA ', 'PABRIK  KEMASAN PLAS', '0227800483', '0227800484', '-', 'PMDN', 'DIREKTUR ', '-', 0, 1, 'JL. MEKAR RAYA KAV.8, KEC. RANCASARI', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (228, 'PT. GUCITEX', 'RICHARD WIRAGA', 'TEXTILE INDUSTRI', '0226030015', '0226030015', '-', 'PMDN', 'ADJENG SYAFITRI', '-', 6, 2, 'JL.CIBALIGO NO.157 CIBEUREUM CIMAHI SELATAN', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (229, 'PT. ASIA BARU PLASTIK', 'SAM MICHAEL NATASAPUTRA', 'PABRIK KEMASAN PLAST', '0227800483', '0227800484', '-', 'PMDN', '-', '0', 0, 1, 'JL. MEKAR RAYA, KAWASAN INDUSTRI MEKAR MULYA KAV. 8 PANYILEUKAN KOTA BANDUNG', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (230, 'PERUMAHAN GRIYA CAKARA ', 'H. DJONI ASMADI ', 'PERUMAHAN ', '-', '-', '-', 'PMDN', 'H DADANG ', '-', 13, 1, 'PERUM. GRIYA CARAKA KEL. CISARANTEN ENDAH KEC. ARCAMANIK ', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (232, 'PT. CHAROEN POKHAND JAYA FARM ', 'ROMANUS PURBA', 'PETERNAKAN AYAM', '0', '0', '-', 'PMDN', '-', '0', 0, 4, 'JL. ANCOL BARAT VIII, NO. 01, ANCOL, JAKARTA UTARA.', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (233, 'OPIN SAPUTRA', 'OPIN SAPUTRA', 'INDUSTRI TEKSTIL', '0227800108', '0227800062', '-', 'PMDN', '-', '-', 0, 1, 'JL.SOEKARNO HATTA NO.760', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (234, 'CV. KENCANA HEGAR TEKSTIL', 'ZEN-ZEN RAHADIAN', 'INDUSTRI TEXTILE', '0226032710', '0226044348', '-', 'PMDN', '-', '-', 39, 2, 'JL.CIBALIGO KM. 1.8 RT002 RW009 KEL.UTAMA KEC.CIMAHI SELATAN', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (235, 'PT. CHAROEN POKHAND JAYA  FARM 5', '-', 'PETERNAKAN AYAM', '0', '0', '-', 'PMDN', '-', '0', 0, 4, 'JL. ANCOL BARAT VIII, NO. 01, ANCOL, JAKARTA UTARA.', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (236, 'PT. CHAROEN POKHAND JAYA FARM GP FARM 1 SUBANG', 'ROMANUS PURBA', 'PENUNJANG PETERNAKAN', '0260450066', '450066', '-', 'PMDN', '-', '0', 0, 4, 'JL. RAYA SUBANG PAGADEN KM. 9, DESA GUNUNGSARI, KEC. PAGADEN, KAB. SUBANG.', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (237, 'PT. LEUWIJAYA UTAMA TEKSTIL', 'DRS.A KORMAN K', 'TEXTILE', '0226030226030', '0226030015', '-', 'PMDN', '-', '-', 60, 2, 'JL.CIBALIGO KM 1,75 UTAMA CIMAHI SELATAN', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (238, 'NEFO PLASTIK', 'YAHYA DJULAINI ', 'PABRIK KANTONG PLAST', '0226030932', '0226076738', '-', 'PMDN', 'DIREKTUR ', '-', 0, 1, 'JL. HALTE ANDIR NO. 95 A/77, KEC. ANDIR', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (239, 'NEW SANYROSA HOTEL', 'NANDAN H', 'PERHOTELAN', '0222033562', '0', '-', 'PMDN', 'MANAGER', '081310517609', 0, 1, 'HEGAR MANAH NO. 2 A', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (240, 'PT. MULTI GARMENT JAYA', 'TONY TJAHYADI', 'GARMENT', '0227563346', '0', '-', 'PMDN', 'DIREKTUR PEMILIK PERUSAHAAN', '081320788086', 16613, 1, 'JL. SOEKARNO HATTA 578, KEC. BANDUNG KIDUL', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (241, 'PT. METRO PERDANA TRADE CENTER  ', 'IR. HARTONO PADMOSOEDARSO ', 'METRO INDAH MALL ', '0227537577', '7537678', '-', 'PMDN', 'RAMDAN ', '081322024226', 70, 1, 'JL. SOEKARNO HATTA NO. 590 KEL SEKEJATI KEC BUAHBATU ', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (242, 'PT. KONDOBO TEXTINDO', 'TATSUO YAMAMOTO', 'INDUSTRI PEMINTALAN ', '02607495105', '7495117', '-', 'PMDN', '-', '0', 0, 4, 'KP. CIBEUNYING RT 24 RW 06, DESA CIPEUNDEUY, KEC. CIPEUNDEUY, KAB. SUBANG.', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (243, 'PT. MEKAR JAYA', 'I PEK TERANADI', 'SNACK', '0226011231', '0', '-', 'PMDN', 'DIREKTUR', '0', 1260, 1, 'JL. BABAKAN CIPARAY NO. 247, KEC. BABAKAN CIPARAY', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (244, 'PT. HEGAR MULYA', 'OEY KASIN', 'TEXTILE', '0226030240', '0226031222', '-', 'PMDN', '-', '-', 5, 2, 'JL. HEGAR LOKASI II CIBALIGO-CIMINDI ', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (245, 'PT. SURYA CERIA GEMERLANG /LANDMARK CONVENTION HALL', 'HENDRA SUMARNA', 'RESTORAN/RUANG PERTE', '0224260704', '0', '-', 'PMDN', 'DIREKTUR UTAMA ', '08122044363', 2845, 1, 'JL. BRAGA NO. 129, KEC. SUMUR BANDUNG', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (246, 'PT. SETIA BUSANATEX', 'SONY WIDIYARSONO PUTRA', 'JASA PENCELUPAN', '02286062105', '02286062106', '-', 'PMDN', '-', '-', 800, 2, 'JL.CIBALIGO KM 2,1 BLOK MONCONG NO.161 CIMAHI SELATAN', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (247, 'KOPERASI KARYAWAN SERBA USAHA PARA SEJAHTERA', 'BUDI NAZARUDDIN ', 'PERDAGANGAN DAN JASA', '08118118034', '-', '-', 'PMDN', 'BUDI NAZARUDDIN ', '082219224808', 512, 1, 'JL. JENDERAL GATOT SUBROTO NO. 289', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (248, 'PT. LAJU ABADI', 'ALEX SANDER SUGIAMAN', 'PEMBUATAN KANTONG PL', '0226021610', '0', '-', 'PMDN', 'ANGGA', '0', 0, 1, 'JL. HOLIS NO. 276', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (249, 'PT. PURINUSA EKA PERSADA', 'HERMAN', 'CARTON BOX', '0227838190', '0227838192', '-', 'PMDN', 'ARIEF BIMA ', '08812001064', 120, 1, 'JL. SOEKARNO HATTA NO. 791 KM. 12.5', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (250, 'PT. SETIA BARU TEX', 'SUPRAPTO', 'TEKSTIL', '0226032484', '0226032484', '-', 'PMDN', '-', '-', 6000, 2, 'JL. CIBALIGO NO.67 CIBEUREUM CIMAHI SELATAN', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (251, 'PT. BLESINDO GUNA HARUM', 'WENDY', 'INDUSTRI GARMENT', '0226014099', '6033598', '-', 'PMDN', '-', '-', 6000, 2, 'JL.CINALIGI NO.75E CIGUGUR TENGAH KEC.CIMAHI TENGAH', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (252, 'PT.LAJU KARYA MANDIRI', 'LILIWATY', 'MCK', '0226868188', '6868189', '-', 'PMDN', 'DIREKTUR UTAMA', '-', 0, 3, 'JL.INDUSTRI CIMAREME I NO.7', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (253, 'PT. LOTTE SHOPING INDONESIA ', 'WAYAN GEDE SUCI,ST', 'GROSIR(RETAIL) ', '-', '-', '-', 'PMDN', 'RIA', '-', 5, 1, 'SOEKARNO HATTA NO. 464 CIPAMOKOLAN ', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (254, 'PT. KARTIKA INTI SEJATI', 'ANDRE NURNOMO', 'FOOD MANUFACTURING C', '0226016800', '0', '0', 'PMDN', 'PRESIDEN DIREKTUR', '085716957375', 8300, 1, 'JL. PARALON NO. 7 BANDUNG', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (255, 'PT. LEUWI JAYA UTAMA TEXTILE II', 'ZENZEN RAHADIAN', 'INDUSTRI TEKSTIL', '0226032710', '0226032710', '-', 'PMDN', '-', '-', 30, 2, 'JL.CIBALIGO KM 2.1 KEL.LEUWI GAJAH KEC.CIMAHI SELATAN', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (256, 'PT. LEONG AYAM I PRIMADONA. UNIT HATCHERY', 'NUR ISMANTO', 'PETERNAKAN', '0260451108', '0', '-', 'PMDN', 'MANAGER', '085212490269', 40, 4, 'JL.KAMARUNG, DESA SUKAMULYA, KEC. PAGADEN, SUBANG.', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (257, 'JASA MARGA (TOL PASTEUR)', 'HERNASAH SUKLATI ', 'JASA PELAYANAN TOL ', '0222000867', '0222011433', '-', 'PMDN', 'GENERAL MANAGER', '-', 0, 1, 'JL. DR. DJUNJUNAN NO. 257, KEC. SUKAJADI', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (258, 'JASA MARGA (TOL PASIR KOJA )', 'AGUS KUSNADI ', 'KANTOR ', '0222000867', '2011433715', '-', 'PMDN', 'AGUS ', '-', 0, 1, 'JL. PASIR KOJA, KEC. BABAKAN CIPARAY', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (259, 'JASA MARGA (TOL KOPO)', 'AGUS KUSNADI ', 'KANTOR ', '0222000867', '2011433715', '-', 'PMDN', 'GENERAL MANAGER', '-', 8, 1, 'JL. KOPO CIRANGRANG, KEC. BABAKAN CIPARAY', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (260, 'PT. LEONG ASP (BROILER I)', 'IR. REWIN HANRAHAN ', 'PETERNAKAN AYAM', '0', '0', '-', 'PMDN', 'MANGASI/HELBEUT', '085282984840/', 16, 4, 'DESA SAWANGAN, KEC. CIPEUNDEUY, SUBANG.', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (261, 'PT. PRIMATEX', 'IWAN HENDRAWAN', 'INDUSTRI PERMADANI', '0226030245', '0226030245', '-', 'PMDN', '-', '-', 6000, 2, 'JL.HEGAR LOKASI I CIBALIGO', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (262, 'JASA MARGA TOL. MOCH. TOHA', 'AGUS KUSNADI', 'KANTOR', '0222000867', '2011433715', '-', 'PMDN', '-', '081931349691', 0, 1, 'JL. DR. DJUNDJUNAN NO. 257', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (263, 'JASA MARGA (TOL BUAH BATU)', 'AGUS KUSNADI ', 'KANTOR ', '0222000867', '2011433715', '-', 'PMDN', 'GENERAL MANAGER', '-', 0, 1, 'JL. BUAH BATU, KEC. BANDUNG KIDUL', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (264, 'PT. PERUSAHAAN LOGAM BIMA', 'CIEM HUIWE LIONG', 'ALAT ALAT DAPUR DARI', '0226654308', '0226654308', '-', 'PMDN', '-', '-', 29000, 2, 'JL.JENDRAL H.AMIR.MACHMUD 518 CIMAHI', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (265, 'HOTEL TOPAS GALERIA', 'RUDI SANTOSO', 'JASA PERHOTELAN', '022', '0', '0', 'PMDN', '-', '022', 6000, 1, 'JL. DJUNDJUNAN NO. 153', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (266, 'HOTEL SUKAJADI', 'ETTY KUSMIANTY', 'HOTEL', '0222033888', '0222033777', '-', 'PMDN', 'ETTY', '-', 1874, 1, 'JL. SUKAJADI NO. 174, KEC. SUKAJADI', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (267, 'PT. LEONG AYAM I PRIMADONA (BREDER I)', 'LAU JOO KEAT', 'PETERNAKAN AYAM', '0', '0', '-', 'PMA', 'MANGASI SIMANJUNTAK ', '085282984840', 198, 4, 'JL. RS. FATMAWATI NO. 15 KOMP. GOLDEN PLAZA, KEL. GANDARIA SELATAN, KEC. CILANDAK, JAKARTA SELATAN.', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (268, 'PT. NICKCROME INDOJAYA', 'BAMBANG TRINANTO SETYAWAN', 'JASA PELAPISAN LOGAM', '0226037333', '6030900', '-', 'PMDN', '-', '-', 3, 2, 'JL.CIBALIGO NO.42 RT008/008 KEL.CIGUGUR TENGAH CIMAHI TENGAH', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (269, 'HOTEL SEIABUDHI INDAH', 'BARLI SASMITA', 'JASA PERHOTEKAN', '022201152', '0222013836', '-', 'PMDN', 'YANTI BUDIMAN', '081', 15000, 1, 'DR. SETIABUDHI NO. 266', NULL, 'IMG_1_HOTEL_SEIABUDHI_INDAH.jpg', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (270, 'PT. LEONG ASP (BROILER 2)', 'IR. REWIN HANRAHAN ', 'PETERNAKAN AYAM', '0', '0', '-', 'PMA', 'MANGASI', '085282984840/', 13, 4, 'DESA WANTILAN, CIPEUNDEUY, KAB. SUBANG.', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (271, 'PT. ORIENTAL EMBROIDERY', 'DAVID AGUS', 'TEKSTIL(SULAMAN)', '0226614300', '0226614300', '-', 'PMDN', 'DEXTON', '-', 29, 2, 'JL.MAHAR MARTANEGARA NO.93 CIGUGUR TENGAH CIMAHI TENGAH', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (272, 'PT. LEONG AYAM SATU PRIMADONA (BREDER II)', 'LAU JOO KEAT', 'PETERNAKAN AYAM', '0', '0', '-', 'PMA', 'MANGASI SIMANJUNTAK ', '085282984840', 13, 4, 'JL. RS. FATMAWATI NO. 15 KOMP. GOLDEN PLAZA, KEL. GANDARIA SELATAN, KEC. CILANDAK, JAKARTA SELATAN.', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (273, 'HOTEL SERENA', 'IMANUEL SALTA WIGUNA', 'HOTEL', '0224207850', '0', '-', 'PMDN', 'RAPI', '081222428988', 765, 1, 'MARJUK NO. 4-6', NULL, 'IMG_1_HOTEL_SERENA.jpg', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (274, 'PT. KAWI MEKAR', 'TJANDRA HENDARWAN', 'PENCELUPAN KAIN', '0226613378', '0226613378', '-', 'PMDN', 'FERI', '-', 69000, 2, 'JL.MAHAR MARTANEGARA NO.158 BARO CIMAHI SELATAN', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (275, 'HOTEL SAVOY HOMANN BIDAKARA', 'EDDY KAMERLANGGA ', 'PERHOTELAN ', '0224232244', '-', '-', 'PMDN', 'VELLY PRAHASTAN ', '081320240272', 10, 1, 'JL. ASIA-AFRIKA NO. 112, KEC. LENGKONG', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (276, 'HOTEL SANTIKA BANDUNG', 'CECEP SUGIAT', 'PERHOTELAN', '0224203009', '0', '-', 'PMDN', 'PJ. ENGINERIG', '082117033355', 4244, 1, 'JL. SUMATERA NO. 52-54', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (277, 'PT. LEONG ASP BROILER 3', 'IR. REWIN HANRAHAN ', 'PETERNAKAN AYAM', '0', '0', '-', 'PMA', 'MANGASI/RASJA', '085282948480/', 42, 4, 'DESA CARACAS, KALIJATI, SUBANG.', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (278, 'HOTEL RIAU', 'IR. ARIFIN GANDAWIJAYA ', 'HOTEL ', '-', '-', '-', 'PMDN', 'AGUS', '-', 1500, 1, 'JL. RE. MARTADINATA, KEC. BANDUNG WETAN', NULL, 'IMG_1_HOTEL_RIAU.jpg', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (279, 'HOTEL PATRA JASA ', 'ENDANG LESTARI NINGSIH', 'JASA PERHOTELAN', '0222542664', '0', '-', 'PMDN', 'GENERAL MANAGER', '0', 5741, 1, 'IR. H. JUANDA NO 132', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (280, 'PT. LEONG ASP (BROILER 4)', 'IR. REWIN HANRAHAN ', 'PETERNAKAN AYAM', '0', '0', '-', 'PMA', 'MANGASI/TATANG', '08528298440/0', 40, 4, 'JL. DUTA MAS FATMAWATI KEBAYORAN BARU JAKARTA SELATAN', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (281, 'CV. BAHTERA ADI JAYA', 'MIKO TRISNADI', 'JASA PRINTING', '0226030868', '0226030868', '-', 'PMDN', '-', '-', 2000, 2, 'JL.LEUWI GAJAH NO.245A KEC.UTAMA CIMAHI SELATAN', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (282, 'PT. HOLI PHARMA', 'BEDJO STEFANUS', 'OBAT OBATAN', '0226645060', '6657001', '-', 'PMDN', '-', '-', 2800, 2, 'JL.LEUWI GAJAH NO.100 KEL.CIGUGUR TENGAH KEC.CIMAHI TENGAH', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (283, 'PT. LEONG AYAM SATU PRIMADONA (BREDER 4)', 'LAU JOO KEAT', 'PETERNAKAN AYAM', '0', '0', '-', 'PMA', 'MANGASI SIMANJUNTAK ', '085282984840', 39, 4, 'JL. RS. FATMAWATI NO. 15 KOMP. GOLDEN PLAZA, KEL. GANDARIA SELATAN, KEC. CILANDAK, JAKARTA SELATAN.', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (284, 'PT. LEONG AYAM SATU PRIMADONA (SUBANG V)', 'LAU JOO KEAT', 'PETERNAKAN AYAM', '0', '0', '-', 'PMA', 'MANGASI SIMANJUNTAK ', '085282984840', 45, 4, 'JL. RS. FATMAWATI NO. 15 KOMP. GOLDEN PLAZA, KEL. GANDARIA SELATAN, KEC. CILANDAK, JAKARTA SELATAN.', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (285, 'PT. ELIZABETH SANJAYA', 'DENNY SUBALI', 'INDUSTRI TAS', '0226033860', '6014010', '-', 'PMDN', '-', '-', 3, 2, 'JL.MAHAR MARTANEGARA NO.105 KEL.CIGUGUR TEGAH KEC.CIMAHI TENGAH', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (286, 'HOTEL PERDANA WISATA', 'GUNAWAN SOEMALI', 'HOTEL', '0224238238', '0', '-', 'PMDN', 'AGUS', '0', 2490, 1, 'JL. SUDIRMAN NO. 66-68', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (287, 'PT. LEONG AYAM SATU PRIMADONA (BREDER V)', 'LAU JOO KEAT', 'PETERNAKAN AYAM', '0', '0', '-', 'PMA', 'MANGASI SIMANJUNTAK ', '085282984840', 47, 4, 'JL. RS. FATMAWATI NO. 15 KOMP. GOLDEN PLAZA, KEL. GANDARIA SELATAN, KEC. CILANDAK, JAKARTA SELATAN.', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (288, 'HOTEL PAPANDAYAN', 'MARCELA SUPARDAN', 'PERHOTELAN', '0227310799', '0', '-', 'PMDN', 'HEYDEN P. LUBIS, SH, M.H', '08122003324', 11, 1, 'JL. GATOT SUBROTO NO 83', NULL, 'IMG_1_HOTEL_PAPANDAYAN.jpg', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (289, 'PT. INDO EXTRUSION', 'H.NANDY SOPANDI B.SC', 'INDUSTRI LOGAM BUKAN', '0226613292', '6613295', '-', 'PMDN', '-', '-', 30, 2, 'JL.MAHAR MARTANEGARA NO.134 RT/RW 04/04 KEL.CIGUGUR TENGAH KEC.CIMAHI TENGAH', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (290, 'PT. JAPFA COMFEED INDONESIA TBK. FARM 1', 'ARIS SUSETYO', 'PEMBIBITAN AYAM', '0260451566', '0', '-', 'PMDN', 'SUHERWANTO', '0811242957', 6, 4, 'JL. CIPUNAGARA, DESA PARICI MULYA, KAB. CIPUNAGARA, SUBANG.', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (291, 'PT. RAS JAYA ', 'DANI MUSTOPA', 'MAKLOON PENCELUPAN K', '0226030839', '0226072350', '-', 'PMDN', '-', '-', 2200, 2, 'JL.LEUWI GAJAH NO.101 CIMAHI', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (292, 'CV. ASIANTEX', 'HASAN KERTADI  HARDJA', 'PENYEMPURNAAN KAIN', '0226038440', '0226025418', '-', 'PMDN', '-', '-', 0, 2, 'JL.MAHAR MARTANEGARA NO.51 KEL.CIGUGUR TENGAH KEC.CIMAHI TENGAH', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (293, 'PT. PAPERTECH INDONESIA', '-', 'KARTON ISDUSTRI', '0', '0', '-', 'PMA', '-', '0', 0, 4, 'JL.RAYA CIPEUNDEUY KM 1 DS.CIPENDEUY KEC.CIPEUNDEUY, KAB. SUBANG', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (294, 'PT. TIRTA INVESTAMA', 'CORINE DANIELE', 'AQUA', '0260480782-78', '0', '-', 'PMA', 'SUGIH GUMILAR/ZENAL', '082240919560', 13, 4, 'KP. SALAM, DESA DARMAGA, KEC. CISALAK, SUBANG.', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (295, 'PT. LAJU MAKJUR SENTOSA', 'OEIJ KHEK JONG', 'TEKSTIL', '0226018717', '0226018717', '-', 'PMDN', '-', '-', 11, 2, 'JL.INDUSTRI IV 06 UTAMA CIMAHI SELATAN', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (296, 'RS. PTPN VIII SUBANG', 'DR. H. YEP RUCHIAT S, MH.KES.,', 'JASA PELAYANAN KESEH', '0260411632', '0260420391', '-', 'PMDN', 'ALMA ELMALIK/PETUGAS K3RS', '081222628234', 10, 4, 'JL. OTTO ISKANDARDINATA NO. 1 , KARANGANYAR, SUBANG.', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (297, 'PT. SINAR PANGJAYA MULIA', 'DEBY SUKANDAR', 'TEKSTIL', '0226030719', '0226030719', '-', 'PMDN', '-', '-', 5600, 2, 'JL.MAHAR MARTANEGARA NO.151 UTAMA KEC.CIMAHI SELATAN ', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (298, 'PT.PERKEBUNAN NUSANTARA VIII JALUPANG', '-', 'PENGOLAHAN KARET', '0', '0', '-', 'PMDN', '-', '0', 0, 4, 'JL.RAYA CIPEUNDEUY KM.20, DESA LENGKONG,KEC.CIPEUNDEUY, SUBANG ', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (299, 'PT. PERKEBUNAN NUSANTARA VIII KEBUN WANGUNREJA', 'IR. HENDI KURNIA', 'PABRIK KARET', '0260412056', '0', '-', 'PMDN', '-', '0', 0, 4, 'JL. RAYA KALIJATI KM. 7, KP. WANGUNREJA, DESA RAWA LELE, KEC. DAWEAN, KAB. SUBANG.', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (300, 'PT. PABRIK KARET MARGAJAYA', 'MULYADI USNAN', 'PABRIK KARET', '02266133345', '02266133345', '-', 'PMDN', '-', '-', 3, 2, 'JL.PELANGI NO.106E CIGUGUR TENGAH CIMAHI TENGAH', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (301, 'PT. DAM SINAR BUTTON  FACTORY', 'FANDAM DARMAWAN', 'KANCING AKSESORIS GA', '0226030022', '0226030022', '-', 'PMDN', '-', '-', 15, 2, 'JL. CIBALIGO NO.39A RT003/015 ', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (302, 'PT. BUMI BANGUN WALUYA', 'EDHIJANTO WIDAJA TAUFIK', '-', '02288886990', '02288886990', '-', 'PMDN', '-', '-', 25, 2, 'JL.RAYA BAROS NO.57 CIMAHI ', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (303, 'PT. CHITOSE INTERNASIONAL TBK', 'FADJAR SWATJAS', 'INDUSTRI DARI  LOGAM', '0226031900', '0226031900', '-', 'PMDN', '-', '-', 25, 2, 'JL. INDUSTRI III NO.5 UTAMA CIMAHI SELATAN', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (304, 'PT. LEONG AYAM SATU PRIMADONA BROILER VI', 'IR.REWIN HANRAHAN/DIREKTUR ', 'BUDIDAYA AYAM RAS PE', '0217661727', '7661728', '-', 'PMDN', '-', '0', 0, 4, 'JL. RS. FATMAWATI NO.15,KOMP.GOLDEN PLAZA,BLOK G NO.17-22 JAKARTA SELATAN', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (305, 'PT. ANUGRAH SINAR ABADI', 'ASWIN WIRYAWAN', 'TEKSTIL', '0226046891', '0226046891', '-', 'PMDN', 'GAMI AMBERDY', '-', 15, 2, 'JL.INDUSTRI I NO.86 UTAMA CIMAHI SELATAN', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (306, 'PT. LEONG AYAM SATU PRIMADONA BROILER VII', 'IR. REWIN HANRAHAN ', 'PETERNAKAN AYAM', '0217661727', '7661728', '-', 'PMDN', '-', '0', 0, 4, 'JL. RS FATMAWATI NO. 15, KOMP. GOLDEN PLAZA BLOK G NO. 17-22, JAKARTA SELATAN', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (307, 'PT. LEONG AYAM SATU PRIMADONA  BREDER VI', 'IR. REWIN HANRAHAN ', 'PETERNAKAN AYAM', '0217661727', '7661728', '-', 'PMDN', '-', '0', 0, 4, 'JL. RS. FATMAWATI NO. 15 KOMP. GOLDEN PLAZA, BLOK G NO. 17-22 JAKARTA SELATAN.', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (308, 'PT. ANUGRAH MUTU BERSAMA', 'IR. OLSON OSMAN', 'INDUSTRI MAKANAN', '0260490100', '490101', '-', 'PMA', 'NANANG HERMAWAN', '081210225744', 0, 4, 'DESA WANTILAN RT 07 RW 03, KEC. CIPEUNDEUY, KAB. SUBANG.', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (309, 'PT. TRISULA TEXTILE INDUSTRI TBK', 'R.NURWULAN KUSUMAWATI', 'INDUSTRI TEKSTIL', '0226613333', '0226613333', '-', 'PMDN', '-', '-', 132321, 2, 'JL.MAHAR MARTANEGARA NO.170 CIGUGUR TENGAH CIMAHI TENGAH', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (310, 'PT. JESI JASON SURYA MAKMUR', '-', 'PRODUKSI DAN MCK KAR', '0', '0', '-', 'PMDN', '-', '0', 0, 4, 'JL. RAYA WANTILAN RT 003 RW 022, KEL. WANTILAN, KEC. CIPEUNDEUY, KAB. SUBANG.', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (311, 'PT. BINA MENTARI TUNGGAL', '-', 'RPH, FEEDLOT, DAN MC', '0', '0', '-', 'PMDN', '-', '0', 0, 4, 'JL. INDUSTRI UTAMA RAYA BLOK RR 2F-2G KAW. INDUSTRI JABABEKA II DESA PASIRSARI KEC. CIKARANG SELATAN, BEKASI.', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (312, 'HOTEL PANGLEJAR', '-', 'HOTEL', '0', '0', '-', 'PMDN', '-', '0', 0, 4, 'JL. SUTAATMADJA PANGLEJAR, KAB. SUBANG.', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (313, 'PT. INAWAN CHEMTEX SUKSES ABADI', 'LIM HAU HWA ', 'INDUSTRI RESIN SINTE', '0215856150', '5856140', '-', 'PMDN', '-', '0', 0, 4, 'KOMLEK RUKAN TAMAN MERUYA, BLOK M NO. 68, MERUYA UTARA, JAKARTA BARAT.', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (314, 'HOTEL PANIISAN ENDAH', 'IR. H. APEP HIDAJAT', 'JASA AKOMODASI PERHO', '0222032095', '0', '-', 'PMDN', 'WIWIN', '0222032095', 800, 1, 'JL. SUKAJADI NO. 202, KEC. SUKAJADI', NULL, 'IMG_1_HOTEL_PANIISAN_ENDAH.jpg', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (315, 'HOTEL NYLAND ( CIPAGANTI)', 'LISANDRA GUNAWAN', 'HOTEL', '0224239560', '0', '-', 'PMDN', 'VANI ', '0', 589, 1, 'JL. DR. DJUNJUNAN NO. 125, KEC. SUKAJADI', NULL, 'IMG_1_HOTEL_NYLAND_(_CIPAGANTI).jpg', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (316, 'RM. TAMAN SARI', '-', 'RUMAH MAKAN', '0', '0', '-', 'PMDN', '-', '0', 0, 4, 'JL. RAYA PAMANUKAN ', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (317, 'PT. KAMARGA KURNIA TEXTILE INDUSTRY', 'WIRIANTO DJAKARIA, DIPI.ING', 'INDUSTRI TEKSTIL', '0226031410', '60315277', '-', 'PMDN', '-', '-', 18000, 2, 'JL. CIBALIGO KM. 3 KEL.MELONG  KEC.CIMAHI SELATAN', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (318, 'HOTEL NYLAN PASTEUR ', 'DENI KURNIAWAN ', 'JASA AKOMODASI PERHO', '0226074519', '6074520', '-', 'PMDN', 'BAYU RAHAYU', '-', 3745, 1, 'JL. DR DJUNJUNAN  NO.125 ', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (319, 'PT. JAPFA COMFEED INDONESIA TBK. UNIT FARM CIPUNAGARA II', 'ARIS SUSETYO', 'PEMBIBITAN ANAK AYAM', '0264201040', '209360', '-', 'PMDN', '-', '0', 0, 4, 'JL. VETERAN 242 KABUPATEN PURWAKARTA', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (320, 'PT. JAPFA COMFEED INDONESIA TBK. HATCHERY SUBANG', 'SUHERWANTO', 'PERTENAKAN AYAM', '0', '0', '-', 'PMDN', '-', '0', 0, 4, 'JL. VETERAN NO. 242 KAB. PURWAKARTA', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (321, 'KUD MANDIRI INTI MINA \"FAJAR SIDIK\"', 'HJ. ATINAH KURNIASIH', 'BAHAN PENUNJANG USAH', '0260520267', '0', '-', 'PMDN', 'HJ. ATINAH KURNIASIH', '0', 0, 4, 'DUSUN PALELANGAN RT 02 RW 07 DESA BLANAKAN KEC. BLANAKAN, KAB. SUBANG.', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (322, 'PT. TRIANA HARVESTINDO NUSANTARA/PT. BARATEX', 'OEIY TONY ', 'TEKSTIL', '0226613420', '022613423', '-', 'PMA', '-', '-', 55, 2, 'JL. MAHAR MARTANEGARA LEUWI GAJAH NO.106B CIGUGUR TENGAH', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (323, 'PT. WARNA SARI INTAN', 'YUSUF KUSUMAH WIJAYA', 'INDUSTRI TEKSTIL', '0226031327', '0226031327', '-', 'PMDN', 'HERAYANI', '-', 3840, 2, 'JL. INDUSTRI IV NO.4 UTAMA CIMAHI SELATAN', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (324, 'CV. PRIANGAN', 'HASYIM YONGGI', 'PABRIK KULIT', '0226005346', '0226005346', '-', 'PMDN', '-', '-', 10, 2, 'JL. INDUSTRI IV NO.7 LEUWI GAJAH CIMAHI SELATAN', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (325, 'PT. LINTAS SURYA ALAM INDUSTRI', 'AKASH ANAND', 'KELOSAN BENANG', '0260490148', '490056', '-', 'PMDN', 'DIREKTUR UTAMA', '08161418638', 9, 4, 'JL. RAYA CIPEUNDEUY DESA CIPEUNDEUY KEC. CIPEUNDEUY KAB.SUBANG. ', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (326, 'HOTEL RAMA PUTRA', '-', 'PENGINAPAN', '0', '0', '-', 'PMDN', '-', '0', 0, 4, 'JL. PASAR BARU NO. 6 SUBANG', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (327, 'HOTEL MARKONI', 'YULI YULANA', 'PERHOTELAN', '0260551542', '0', '-', 'PMDN', '-', '0', 10, 4, 'JL. RAYA SUKASARI KM. 4 DESA SUKASARI KEC. SUKASARI KAB. SUBANG.', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (328, 'PT. CIOMAS ADISATWA FARM SINDANG SARI', 'YAHJA DJANGGOLA ', 'PETERNAKAN', '0', '0', '-', 'PMDN', '-', '081294829782', 3, 4, 'DESA SINDANGSARI KEC. CIKAUM KAB. SUBANG.', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (329, 'PT. CIOMAS ADISATWA', 'YAHYA DJANGGOLA', 'PETERNAKAN', '0', '0', '-', 'PMDN', '-', '081294829782', 18, 4, 'JL. POKEK DESA KAWUNGANTEN KEC. CIKAUM KAB. SUBANG.', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (330, 'PT. CIOMAS ADISATWA FARM PURWADADI I', '-', 'PETERNAKAN', '0', '0', '-', 'PMDN', '-', '0', 0, 4, 'KP. PURWAJAYA DESA PURWAJAYA KEC. PURWADADI KAB. SUBANG', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (331, 'PT. BIBIT INDONESIA / PT. MALINDO ', 'IR. REWIN HANRAHAN ', 'PETERNAKAN AYAM', '0', '0', '-', 'PMA', '-', '08522227930/0', 42, 4, 'JL. RAYA AMPERA KP. TURI, DESA CIKAUM TIMUR, KEC. CIKAUM KAB. SUBANG.', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (332, 'RSU MITRA ANUGRAH', 'DR.ZAKARIA ANSYORI', 'LAYANAN MEDIS', '0226027204', '0226027259', '-', 'PMDN', '-', '-', 1, 2, 'JL.CIBALIGO NO.76 RT08 RW08 KEL.CIGUGUR TENGAH CIMAHI SELATAN', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (333, 'NEW NARIPAN HOTEL', 'NANDANG DJUARSA', 'JASA PERHOTELAN', '0224207009', '0', '-', 'PMDN', 'OWNER REPRESENTATIF', '08172306779', 2595, 1, 'JL. NARIPAN NO. 31-35', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (334, 'BCA CABANG SUBANG', '-', 'PERBANKAN', '0', '0', '-', 'PMDN', '-', '0', 0, 4, 'JL. OTTO ISKANDARDINATA NO. 37 SUBANG', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (335, 'PT.TIARA GAYA ARGA KENCANA', 'DRS.BODAN BEBENG LIMAD JAJA', 'INDUSTRI CAT', '022-6651515', '022-6656555', '-', 'PMDN', 'DIREKTUR', '-', 0, 3, 'JL.RAYA CIMAREME 185 A', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (336, 'APIN KURNIAWAN', 'APIN KURNIAWAN', 'PETERNAKAN AYAM', '-', '-', '-', 'PMDN', 'PEMILIK', '-', 0, 3, 'JL.LAKSA IV NO.62 RT 09/02', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (337, 'RM. MANG YEYE', 'YANTI HERAWATI', 'RUMAH MAKAN', '081313527272', '0', '-', 'PMDN', 'PENGELOLA', '0', 0, 4, 'JL. RAYA KALIJATI DESA MANYETI KEC. DAWUAN KAB. SUBANG.', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (338, 'HOTEL MUTIARA', 'ETTY KUSMIANTY', 'HOTEL', '0224200888', '0224200111', '-', 'PMDN', '-', '0', 0, 1, 'JL. KEBON KAWUNG NO 60, KEC. CICENDO', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (339, 'PT.GANI ARTA DWI TUNGGAL', 'RIYANTO H.SILALAHI,S.H', 'INDUSTRI TEXTILE', '022-6864016', '6864015', '-', 'PMDN', 'MANAGER PERSONALIA UMUM', '-', 0, 3, 'JL.RAYA BATUJAJAR KM.2.8', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (340, 'RM. PURNAMA', '-', 'RUMAH MAKAN', '0', '0', 'aankusnandar77@gmail.com', 'PMDN', '-', '0', 0, 4, 'JL. RAYA PASIRKAREUMBI KEL. PASIRKAREUMBI KEC. SUBANG KAB. SUBANG.', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (341, 'PT. TRIGUNAWAN', 'ANDREW SUTOMO', 'TEKSTIL', '0225613361', '0226613364', '-', 'PMDN', '-', '-', 5662, 2, 'JL. MAHAR MARTANEGARA NO.98B/122 KEL.CIGUGUR TENGAH KEC.CIMAHI TENGAH', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (342, 'HOTEL MALYA (CEDI)', 'NANDANG SURYANA MM', 'JASA PERHOTELAN', '0222030333', '0222036633', '-', 'PMDN', 'DIREKTUR OPERASIONAL', '-', 36, 1, 'JL. RANCABENTANG NO. 56-58, KEC. CIDADAP', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (343, 'RS. PAMANUKAN MEDICAL CENTER (PMC)', 'DR. H. BAMBANG RIANTO, SPM', 'MCK (JASA KESEHATAN ', '0260540033', '0260540088', '-', 'PMDN', '-', '0', 0, 4, 'JL. RAYA RANCASARI KM. 4 DESA RANCASARI KEC. PAMANUKAN KAB. SUBANG.', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (344, 'RM. HEGARSARI ', 'H. OMON', 'RUMAH MAKAN', '0', '0', '-', 'PMDN', '-', '082316998295', 780, 4, 'JL. DAWUAN KALER 15/05 DESA DAWUAN KEC. DAWUAN KAB. SUBANG', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (345, 'PT. TRIDHARMA MEGA MITRA', 'WILLY ', 'TEKSTIL', '0226036969', '0226034066', '-', 'PMDN', '-', '-', 20, 2, 'JL. INDUSTRI IV NO.2 RT02/RW09 KEL.UTAMA KEC.CIMAHI SELATAN', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (346, 'HOTEL GRAND PASIFIC', 'BANY LUCAS HIDAYAT ', 'HOTEL ', '022', '-', '-', 'PMDN', 'YANTI ', '081220016684', 3050, 1, 'JL. PASIRKALIKI NO. 100 KEC. SUKAJADI', NULL, 'IMG_1_HOTEL_GRAND_PASIFIC.jpg', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (347, 'PT. SAYAP MAS UTAMA', '-', 'GUDANG', '0', '0', '-', 'PMDN', '-', '0', 0, 4, 'JL. RAYA PAGADEN KM. 9 KEC. PAGADEN SUBANG', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (348, 'PT. MATAHARI SENTOSA JAYA', 'SUPRIYANTP', '-', '0226033689', '6030735', '-', 'PMDN', '-', '-', 0, 2, 'JL. JOYODIKROMO NO.42 KP.HUJUNG RT09 RW07 KEL.UTAMA KEC.CIMAHI SELATAN', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (349, 'PT. HYUN DONG INDONESIA', 'KIM IN SOO', 'MCK (INDUSTRI GARMEN', '0260490220', '490224', '-', 'PMA', '-', '0', 0, 4, 'JL. RAYA WANTILAN RT 07 RW 03 DESA WANTILAN KEC. CIPEUNDEUY KAB. SUBANG.', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (350, 'HOTEL HILTON / PT. YUSKITAMA LESTARI', 'TATANG HERMAWAN ', 'HOTEL ', '02286066999', '-', '-', 'PMDN', 'DIREKTUR UTAMA ', '08996114220', 7198, 1, 'JL. HOS. COKROAMINOTO NO. 41 - 43, KEC. CICENDO', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (351, 'PT.ALFA POLIMER INDONESIA', 'VERY BUDIAWAN', 'INDUSTRI KIMIA DASAR', '022-6866951', '6866953', '-', 'PMDN', 'DIREKTUR UTAMA', '-', 0, 3, 'JL.INDUSTRI CIMAREME II NO.5', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (352, 'PT. SINAR CONTINENTAL', 'ANDREW SUHENDRA WIBOWO', 'TEKSTIL', '0226030500', '-', '-', 'PMDN', '-', '-', 12000, 2, 'JL. INDUSTRI II NO.20 UTAMA CIMAHI SELATAN', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (353, 'PT.HANDSOME', 'LEE SEON WOO', 'BAHAN PENUNJANG PROD', '0260460609', '462086', '-', 'PMDN', '-', '0', 0, 4, 'KP.CIELA RT 01 RW 01 DESA WANAKERTA KEC.PURWADADI KAB.SUBANG', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (354, 'CV.BERDIKARI', 'ANDREAS HIRAWAN', 'INDUSTRI TEXTILE', '022-6864506', '68645083', '-', 'PMDN', 'DIREKTUR', '-', 0, 3, 'JL.INDUSTRI CIMAREME III NO.2', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (355, 'HOTEL JAYAKARTA', 'H. AMAN KUSDIAMAN ', 'HOTEL ', '0222505888', '-', '-', 'PMDN', 'GENERAL MANAGER', '-', 10, 1, 'JL. IR. H. JUANDA NO. 381/A, KEC. COBLONG', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (356, 'PT.KANVAS MULIA', 'KINKIN SOLIHIN,SE', 'INDUSTRI TEXTILE', '022-6809428', '68059898', '-', 'PMDN', 'DIREKTUR UTAMA', '-', 0, 3, 'JL.RAYA ORION NO.461', NULL, '', '2018-12-18 05:51:22', NULL, 0);
INSERT INTO `t_perusahaan` VALUES (357, 'PT UNTUNG TERUS', 'HARUN MASIKUN', 'JASA', '07080808', '-', 'notaris2@mail.com', 'PMDN', 'JULIARDI', '08889808', 100, 1, 'jla besar sekali no 28', NULL, '[\"IMG_among_us.jpg\",\"IMG_suse.png\"]', NULL, NULL, NULL);
INSERT INTO `t_perusahaan` VALUES (358, 'PT MAJU JAYA', 'IKSAAN', 'JASA', '090989780', '0980980', 'joy_mail@gmail.com', 'PMDN', 'KUNI', '09898', 120, 1, 'jl lengkong', NULL, '[\"IMG_lm.png\",\"IMG_pake_query_biasa.png\"]', NULL, NULL, NULL);
INSERT INTO `t_perusahaan` VALUES (359, 'CV. RAHAYU', 'AAM', 'HOTEL', '908908', '098908', 'management@alfatah.co.id', 'PMDN', 'UDIN', '0909878', 120, 1, 'jl panjang no 30', NULL, '[\"IMG_Screenshot_20201109_074338.png\",\"IMG_Stars.jpg\"]', NULL, NULL, NULL);
INSERT INTO `t_perusahaan` VALUES (360, 'PT REDSUN', 'RUHIMAT', 'RONGSOKAN', '098098', '09809', 'management@alfatah.co.id', 'PMDN', 'DUDI', '09078908', 121, 2, 'JL TERUSAN KETERUSAN', NULL, '[\"IMG_202101161201590.jpg\",\"IMG_202101161201591.jpg\",\"IMG_202101161201592.jpeg\"]', NULL, NULL, NULL);
INSERT INTO `t_perusahaan` VALUES (361, 'CV. RAHAYU GROUP', 'AAMS', 'HOTEL', '908908', '098908', 'management@alfatah.co.id', 'PMDN', 'UDIN', '0909878', 120, 1, 'jl panjang no 30', NULL, '[]', NULL, NULL, NULL);

-- ----------------------------
-- Table structure for t_role
-- ----------------------------
DROP TABLE IF EXISTS `t_role`;
CREATE TABLE `t_role`  (
  `id_role` int(4) NOT NULL AUTO_INCREMENT,
  `name_role` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_role`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of t_role
-- ----------------------------
INSERT INTO `t_role` VALUES (1, 'Admin');
INSERT INTO `t_role` VALUES (2, 'Operator');

-- ----------------------------
-- Table structure for t_sumur
-- ----------------------------
DROP TABLE IF EXISTS `t_sumur`;
CREATE TABLE `t_sumur`  (
  `id_sumur` int(4) NOT NULL AUTO_INCREMENT,
  `id_perusahaan` int(5) NOT NULL,
  `id_jenis_sumur` char(2) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `no_sumur` varchar(8) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `status_izin` int(3) NULL DEFAULT NULL,
  `no_sipa` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `sipa` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `tgl_terbit_sipa` date NULL DEFAULT NULL,
  `tgl_ahir_sipa` date NULL DEFAULT NULL,
  `lokasi_sumur` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `poto_sumur` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `peta_lok` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `kedalaman_sumur` float NULL DEFAULT NULL,
  `hasil_uji_air` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `debit_izin` float NULL DEFAULT NULL,
  `material_pipa` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `dia_pipa_kons` float NULL DEFAULT NULL,
  `dia_pipa_naik` float NULL DEFAULT NULL,
  `dia_pipa_isap` float NULL DEFAULT NULL,
  `brand_pompa` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `no_seri_pompa` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `type_pompa` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `kapasit_pompa` float NULL DEFAULT NULL,
  `posisi_pompa` int(4) NULL DEFAULT NULL,
  `brand_meter_air` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `no_meter_air` char(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `angka_awal` char(8) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `no_tera` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `tera_meter` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `tgl_tera` date NULL DEFAULT NULL,
  `tgl_ahir_tera` date NULL DEFAULT NULL,
  `koor_d_ls` int(3) NULL DEFAULT NULL,
  `koor_m_ls` int(2) NULL DEFAULT NULL,
  `koor_s_ls` decimal(4, 2) NULL DEFAULT NULL,
  `koor_d_bt` int(3) NULL DEFAULT NULL,
  `koor_m_bt` int(2) NULL DEFAULT NULL,
  `koor_s_bt` decimal(4, 2) NULL DEFAULT NULL,
  `id_zona` int(3) NOT NULL,
  `muka_air_tanah` int(4) NULL DEFAULT NULL,
  `id_user` int(4) NULL DEFAULT NULL,
  PRIMARY KEY (`id_sumur`) USING BTREE,
  INDEX `id`(`id_sumur`, `id_perusahaan`, `id_jenis_sumur`, `tgl_terbit_sipa`, `tgl_ahir_sipa`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 516 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of t_sumur
-- ----------------------------
INSERT INTO `t_sumur` VALUES (1, 1, '2', 'SB-1', 1, '546/012-SIPA/ESDM/2018', 'SIPA_SB-1.pdf', '2018-03-22', '2020-03-12', 'JL. PASIRKALIKI NO. 100 KOTA BANDUNG', 'IMG_SB-1.png', 'PETA_SB-1.png', 100, '', 63, 'PVC', 4, 1, 1.25, 'FRANKLIN ELECTRIC', 'SP3A-18', 'SUBMIRSIBLE', 1.5, 82, 'BR', '140121030', '000363', '510.3/3727/UAPV.1', 'TERA_SB-1.docx', '2015-06-10', '2020-06-10', 0, 0, 33.45, 43, 0, 45.74, 0, NULL, NULL);
INSERT INTO `t_sumur` VALUES (2, 1, '1', 'SP-1', 1, '546/013-SIPA/ESDM/2018', 'SIPA_SP-1.docx', '2018-11-06', '2020-11-12', 'JL PASIR KALIKI', 'IMG_SP-1.jpg', 'PETA_SP-1.docx', 30, '', 50, 'PVC', 3.75, 1, 1.5, 'FRANKLIN ELECTRIC', '12345', 'SUBMIRSIBLE', 34, 32, 'MB', '321456', '123', '510.3/3728/UAPV.1', '', '2019-01-22', '2022-01-22', 0, 0, 0.00, 0, 0, 0.00, 2, NULL, NULL);
INSERT INTO `t_sumur` VALUES (4, 2, '1', 'SP-1', 1, '546/011-SIPA/ESDM/2018', 'SIPA_546011-SIPAESDM2018.docx', '2017-02-15', '2019-02-13', 'JL PASIR KALIKI', 'IMG_546011-SIPAESDM2018.jpg', 'PETA_546011-SIPAESDM2018.jpg', 60, 'UJI_AIR_546011-SIPAESDM2018.docx', 50, 'PVC', 3.75, 1, 1.5, 'FRANKLIN ELECTRIC', '12345', 'SUBMIRSIBLE', 100, 32, 'XNW', '321456', '123', '510.3/3100/UAPV.1', 'TERA_SB-1.docx', '2015-02-13', '2019-02-15', 145, 55, 52.43, 110, 23, 37.56, 0, NULL, NULL);
INSERT INTO `t_sumur` VALUES (5, 4, '1', 'SP-1', 2, '', '', '0000-00-00', '0000-00-00', 'JL GUNUNG BATU NO 53', '', '', 60, '', 65, 'PVC', 3.75, 1, 1.5, 'SANYO', '321301', 'ASDF', 200, 86, 'BUTERFLY', '123456', '023', '510.3/3728/UAPV.1', '', '2018-06-05', '2022-01-22', 107, 35, 25.27, 6, 54, 32.87, 0, NULL, NULL);
INSERT INTO `t_sumur` VALUES (6, 5, '2', 'SB-2', 1, '546.2/1380/', '', '0000-00-00', '0000-00-00', 'KP. MARGALUYU, DS. DAYEUH KOLOT', '', '', 60, '', 0, '0', 0, 0, 1, '-', '0', '-', 0, 0, 'AMICO', 'AG14055000', '0', '0', '', '0000-00-00', '0000-00-00', 6, 40, 58.00, 107, 38, 17.00, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (7, 6, '5', 'ASR 1', 1, '546.2/1551/29.1.03.2a/DPMPTSP/2018', '', '2018-10-22', '2020-10-22', 'JL. CIBALIGO KM. 2,8 RT.003 RW.003 KEL MELONG  KEC CIMAHI SELATAN', '', '', 200, '', 72, 'GIP', 8, 3, 3, '-', '-', 'SUBMERSIBLE', 20, 150, 'BR', '0509045', '-', '519.2/1538/UPTML/UAPV-2', '', '2015-12-17', '2017-11-17', 6, 55, 7.36, 107, 32, 55.52, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (8, 7, '2', 'SB-1', 1, '546.2/183.IPAT-DU/BPMPPT', '', '2014-12-12', '2016-12-12', 'INDUSTRI CIMAREME IV NO.6 CIMERANG,PADALARANG BANDUNG BARAT', '', '', 145, '', 80, '-', 8, 3, 3, '-', '-', 'SUBMER SIBLE', 15, 90, 'WESTHAUSE', 'H.000205', '-', '-', '', '0000-00-00', '0000-00-00', 0, 0, 0.00, 0, 0, 0.00, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (9, 6, '5', 'ASR 2', 1, '546.2/46/29.1.03.2a/DPMPT/2019', '', '2019-01-08', '2021-01-08', 'JL. CIBALIGO KM. 2,8 RT.003 RW.003 KEL MELONG  KEC CIMAHI SELATAN', '', '', 200, '', 80, 'GIP', 8, 0, 3, '-', '-', 'LXLG 80', 20, 160, 'BR', '140330570', '-', '519.2/1535/UPTML/UAPV-.2', '', '2015-12-17', '2017-12-17', 16, 55, 17.05, 107, 33, 59.76, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (10, 8, '1', 'SP1', 1, '546.2/377/10.1.01.2/BPMPT', '', '2016-04-19', '2018-04-19', 'TERUSAN JAKARTA NO.37 BANDUNG ', '', '', 60, '', 8, '-', 0, 0, 0, '-', '-', '-', 0, 0, 'SCHLUM BURGER', '83BAE02885', '0', '510.3/9432/UAPV.2', '', '2015-12-17', '2020-11-17', 6, 97, 54.00, 107, 48, 6.00, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (11, 13, '1', 'SP-1', 1, '546.2/19/10.1.01.0/BPMPT/', '', '0000-00-00', '2017-01-05', 'JAGAL, KARANG ANYAR', '', '', 12, '', 3, '0', 0, 0, 1, '-', '0', '-', 0, 0, 'PAM METER', '1408000351', '3', '519.2/70/UPTML/UAPV-', '', '2019-01-15', '0000-00-00', 6, 34, 9.00, 107, 45, 32.00, 5, NULL, NULL);
INSERT INTO `t_sumur` VALUES (12, 6, '5', 'ASR 3', 1, '546.2/45/29.1.03.2a/DPMPTSP/2019', '', '2019-01-08', '2021-01-08', 'JL. CIBALIGO KM. 2,8 RT.003 RW.003 KEL MELONG  KEC CIMAHI SELATAN', '', '', 200, '', 101, 'GIP', 8, 0, 3, '-', '-', 'SUBMERSIBLE', 20, 160, 'BR', '99114085', '-', '510.3/2223/UPTML/UAPV-2', '', '2015-09-28', '2017-09-28', 6, 55, 12.96, 107, 32, 54.69, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (13, 18, '1', 'SP1', 1, '503.546.2/1226-BPPT/2011', '', '2011-11-28', '2013-11-28', 'JL. MERDEKA NO. 44, KEC. SUMUR BANDUNG', '', '', 30, '', 9, '-', 0, 0, 1, '-', '0', '-', 50, 0, 'LINFLOW ', '0', '2577', '0', '', '2019-02-04', '2019-02-04', 6, 54, 37.40, 107, 36, 39.00, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (14, 21, '2', 'SB-1', 1, '0', '', '0000-00-00', '0000-00-00', 'SUKAMULYA, CIBOGO', '', '', 100, '', 0, '0', 4, 1, 0, '-', '0', '-', 0, 0, 'SENSUS', '0', '1', '0', '', '0000-00-00', '0000-00-00', 6, 33, 24.00, 107, 49, 38.00, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (15, 6, '5', 'ASR 4', 1, '546.2/662/29.1.03.2a/DPMPTSP/2018', '', '2018-08-23', '2020-08-23', 'JL. CIBALIGO KM. 2,8 RT.003 RW.003 KEL MELONG  KEC CIMAHI SELATAN', '', '', 0, '', 81, 'GIP', 8, 0, 3, '-', '-', 'SUBMERSIBLE', 0, 0, 'BR', '-', '-', '519.2/1536/UPTML/UAP-2', '', '2015-12-17', '2017-11-17', 6, 55, 15.48, 107, 32, 54.37, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (16, 6, '5', 'ASR 5', 1, '546.2/44/29.1.03.2a/DPMPTSP/2019', '', '2019-01-08', '2020-01-08', 'JL. CIBALIGO KM. 2,8 RT.003 RW.003 KEL MELONG  KEC CIMAHI SELATAN', '', '', 200, '', 100, 'GIP', 8, 0, 3, '-', '-', 'SUBMERSIBLE', 20, 150, 'BR', '2002068021', '-', '519.2/2221/UPTML/UAPV-2', '', '2019-02-04', '2019-02-04', 6, 55, 21.86, 107, 32, 50.65, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (17, 6, '5', 'ASR 6', 1, '546.2/1550/29.1.03.2a/DPMPTSP/2018', '', '2018-10-22', '2020-10-22', 'JL. CIBALIGO KM. 2,8 RT.003 RW.003 KEL MELONG  KEC CIMAHI SELATAN', '', '', 200, '', 100, 'GIP', 8, 0, 3, '-', '-', 'SUBMERSIBLE', 20, 150, 'BR', '050710684', '-', '519.2/2222/UPTML/UAPV-2', '', '2019-02-04', '2019-02-04', 6, 55, 15.67, 107, 33, 1.20, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (18, 25, '1', 'SP-1', 1, '-', '', '0000-00-00', '0000-00-00', 'JL. RAYA PURWADADI KM. 01', '', '', 0, '', 0, '0', 4, 1, 0, '-', '0', '-', 0, 0, 'SCHLUMBERGER/TU', '96EC300355', '36', '0', '', '0000-00-00', '0000-00-00', 6, 30, 39.00, 107, 40, 37.00, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (19, 27, '1', 'SP1', 1, '546.2/880/29.1.02.0B/DPMP', '', '2018-07-04', '2020-07-04', 'JL. IR. H. JUANDA NO.95 , KEC. COBLONG', '', '', 40, '', 0, 'PVC', 0, 0, 1, '-', '-', '-', 0, 0, '-', '-', '-', '-', '', '2019-02-04', '2019-02-04', 6, 59, 41.00, 107, 36, 45.00, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (20, 25, '2', 'SB-1', 1, '0', '', '0000-00-00', '0000-00-00', 'JL. RAYA PURWADADI KM. 01', '', '', 0, '', 0, '0', 6, 1, 0, '-', '0', '-', 0, 0, 'SCHLUMBERGER/TU', '96WEF42387', '121.2', '0', '', '0000-00-00', '0000-00-00', 6, 30, 39.00, 107, 40, 37.00, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (21, 6, '5', 'ASR 7', 1, '546.2/43/29.1.03.2a/DPMPTSP/2019', '', '2019-01-08', '2021-01-08', 'JL. CIBALIGO KM. 2,8 RT.003 RW.003 KEL MELONG  KEC CIMAHI SELATAN', '', '', 200, '', 99, 'GIP', 8, 0, 3, '-', '-', 'SUBMERSIBLE', 20, 160, 'BR', '050918', '-', '519.2/2224/UPTML/UAPV-2', '', '2019-02-04', '2019-02-04', 6, 55, 19.45, 107, 32, 54.92, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (22, 25, '1', 'SP-2', 1, '0', '', '0000-00-00', '0000-00-00', 'JL. RAYA PURWADADI KM. 01', '', '', 0, '', 0, '0', 10, 1, 0, '-', '0', '-', 0, 0, 'SCHLUMBERGER/TU', '96EC300354', '6', '0', '', '0000-00-00', '0000-00-00', 6, 30, 35.00, 107, 40, 45.00, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (23, 25, '2', 'SB-2', 1, '0', '', '0000-00-00', '0000-00-00', 'JL. RAYA PURWADADI KM. 01', '', '', 0, '', 0, '0', 6, 1, 0, '-', '0', '-', 0, 0, 'SCHLUMBERGER/TU', '96WEE42384', '2.49', '0', '', '0000-00-00', '0000-00-00', 6, 30, 33.00, 107, 40, 47.00, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (24, 6, '5', 'ASR 8', 1, '546.2/1549/29.1.03.2a/DPMPTSP/2018', '', '2018-10-22', '2020-10-22', 'JL. CIBALIGO KM. 2,8 RT.003 RW.003 KEL MELONG  KEC CIMAHI SELATAN', '', '', 200, '', 70, 'GIP', 8, 0, 3, '-', '-', 'SUBMERSIBLE', 20, 150, 'BR', '-', '-', '519.2/2220/UPTML/UAPV-2', '', '2019-02-04', '2019-02-04', 6, 55, 9.52, 107, 33, 1.53, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (25, 25, '2', 'SB-3', 1, '0', '', '0000-00-00', '0000-00-00', 'JL. RAYA PURWADADI KM. 01', '', '', 0, '', 0, '0', 6, 1, 0, '-', '0', '-', 0, 0, 'SCHLUMBERGER/TU', '96WEE09192', '138', '0', '', '0000-00-00', '0000-00-00', 6, 30, 36.00, 107, 40, 46.00, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (26, 25, '1', 'SP-3', 1, '0', '', '0000-00-00', '0000-00-00', 'JL. RAYA PURWADADI KM. 01', '', '', 0, '', 0, '0', 10, 1, 0, '-', '0', '-', 0, 0, 'SCHLUMBERGER/TU', '96EE300352', '41', '0', '', '0000-00-00', '0000-00-00', 6, 30, 45.00, 107, 40, 44.00, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (27, 6, '5', 'ASR 9', 1, '546.2/1548/29.1.03.2a/DPMPTSP/2018', '', '2018-10-22', '2020-10-22', 'JL. CIBALIGO KM. 2,8 RT.003 RW.003 KEL MELONG  KEC CIMAHI SELATAN', '', '', 200, '', 70, 'GIP', 8, 0, 3, '-', '-', 'SUBMERSIBLE', 20, 150, 'BR', '140700452', '-', '519.2/1537/UPTML/UAPV-2', '', '2019-02-04', '2019-02-04', 6, 55, 10.62, 107, 33, 3.22, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (28, 6, '', 'ASR 10', 1, '546.2/1547/29.1.03.2a/DPMPTSP/2018', '', '2018-10-22', '2020-10-22', 'JL. CIBALIGO KM. 2,8 RT.003 RW.003 KEL MELONG  KEC CIMAHI SELATAN', '', '', 200, '', 70, 'GIP', 8, 0, 3, '-', '-', 'SUBMERSIBLE', 20, 150, 'BR', '050210681', '-', '519.2/2218/UPTML/UAPV-2', '', '2019-02-04', '2019-02-04', 6, 55, 13.74, 107, 33, 2.75, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (29, 31, '2', 'SB-1', 1, '546.2/8.122/BPLH', '', '2008-05-07', '2009-05-07', 'JL. MERDEKA NO. 39-41, KEC. SUMUR BANDUNG', '', '', 80, '', 70, '0', 4, 4, 1, '-', '0', '-', 3, 66, 'SCHLUM BURGER', '15WWQ06899', '0', '0', '', '2019-02-04', '2019-02-04', -6, 54, 38.00, 107, 36, 39.00, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (30, 6, '5', 'ASR 11', 1, '546.2/42/29.1.03.2a/DPMPTSP/2019', '', '2019-01-08', '2021-01-08', 'JL. CIBALIGO KM. 2,8 RT.003 RW.003 KEL MELONG  KEC CIMAHI SELATAN', '', '', 200, '', 93, 'GIP', 8, 0, 3, '-', '-', 'SUBMERSIBLE', 20, 160, 'BR', '200005352', '-', '519.2/2225/UPTML/UAPV-.2', '', '2019-02-04', '2019-02-04', 6, 55, 9.96, 107, 32, 59.71, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (31, 6, '5', 'ASR 12', 1, '546.2/55/29.1.03.2a/DPMPTSP/2019', '', '2019-01-08', '2021-01-08', 'JL. CIBALIGO KM. 2,8 RT.003 RW.003 KEL MELONG  KEC CIMAHI SELATAN', '', '', 200, '', 93, 'GIP', 8, 0, 3, '-', '-', 'SUBMERSIBLE', 20, 140, 'BR', '080910926', '-', '519.2/2219/UPTML/UAPV-2', '', '2019-02-04', '2019-02-04', 6, 55, 17.81, 107, 32, 56.45, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (32, 37, '2', 'SB-1', 1, '546.2/853/29.1.02.0b/DPMP', '', '2018-06-29', '2020-06-29', 'SADANG BARU CIKARET', '', '', 0, '', 3, '0', 6, 1, 0, '-', '0', '-', 0, 0, 'BR', '07051104', '0', '0', '', '0000-00-00', '0000-00-00', 6, 31, 50.00, 107, 45, 32.00, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (33, 37, '2', 'SB-2', 1, '546.2/854/29.1.02.0b/DPMP', '', '2018-06-29', '2020-06-29', 'SADANG BARU CIKARET', '', '', 0, '', 3, '0', 6, 1, 0, '-', '0', '-', 0, 0, '-', '-', '0', '0', '', '0000-00-00', '0000-00-00', 6, 31, 58.00, 107, 45, 37.00, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (34, 39, '2', 'SB-1', 1, '546.2/613/29.1.03.2A/DPMP', '', '2018-05-11', '2020-05-11', 'JL. SURYALAYA INDAH NO 1-3, KEC. LENGKONG', '', '', 120, '', 90, '-', 0, 0, 0, '-', '0', '-', 0, 72, 'SENSUS', '13001461', '0', '0', '', '2019-02-04', '2019-02-04', -6, 56, 39.00, 107, 37, 28.00, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (35, 5, '2', 'SB-1', 2, '0', '', '0000-00-00', '0000-00-00', 'KP. MARGALUYU, DS. DAYEUH KOLOT', '', '', 0, '', 0, '-', 0, 0, 0, '-', '0', '-', 0, 0, '-', '0', '0', '0', '', '0000-00-00', '0000-00-00', 0, 0, 0.00, 0, 0, 0.00, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (36, 6, '5', 'ASR 13', 1, '546.2/40/29.1.03.2a/DPMPTSP/2019', '', '2019-01-08', '2021-01-08', 'JL. CIBALIGO KM. 2,8 RT.003 RW.003 KEL MELONG  KEC CIMAHI SELATAN', '', '', 200, '', 93.44, 'GIP', 8, 0, 3, '-', '-', 'SUBMERSIBLE', 20, 160, 'BR', '140330138', '-', '519.2/1534/UPTML/UAPV-2', '', '2019-02-04', '2019-02-04', 6, 55, 21.80, 107, 32, 55.96, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (37, 45, '1', 'SP1', 1, '546.2/259-BPLH', '', '2004-02-19', '2006-02-19', 'JL JATAYU NO 59, KEC. CICENDO', '', '', 25, '', 3.3, '-', 4, 0, 1, '-', '0', '0', 450, 0, 'SCHLUM BURGER', '0', '0', '0', '', '2019-02-04', '2019-02-04', 6, 54, 35.26, 107, 35, 4.18, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (38, 6, '5', 'ASR 14', 1, '546.2/41/29.1.03.2a/DPMPTSP/2019', '', '2019-01-08', '2021-01-08', 'JL. CIBALIGO KM. 2,8 RT.003 RW.003 KEL MELONG  KEC CIMAHI SELATAN', '', '', 200, '', 93.44, 'GIP', 8, 0, 3, '-', '-', 'SUBMERSIBLE', 20, 160, 'BR', '140330518', '-', '519.2/1533/UPTML/UAPV-2', '', '2019-02-04', '2019-02-04', 6, 55, 25.52, 107, 32, 54.55, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (39, 47, '2', 'SB-1', 1, '546.2/1142/29.1.03.0d/DPM', '', '2018-08-08', '2020-08-08', 'JL. RAYA SADANG-SUBANG KM. 138 CIKADU, SUBANG', '', '', 93, '', 90, 'PVC', 6, 0, 2, 'SUBMIRSIBLE', '0', '-', 3, 60, '-', '0', '0', '0', '', '0000-00-00', '0000-00-00', 6, 32, 13.30, 107, 41, 37.80, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (40, 6, '3', 'SI 1', 1, '-', '', '2019-02-04', '2019-02-04', 'JL. CIBALIGO KM. 2,8 RT.003 RW.003 KEL MELONG  KEC CIMAHI SELATAN', '', '', 200, '', 0, '-', 8, 0, 0, '-', '-', '-', 0, 0, '-', '-', '-', '-', '', '2019-02-04', '2019-02-04', 0, 0, 0.00, 0, 0, 0.00, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (41, 6, '3', 'SI 2', 1, '-', '', '2019-02-04', '2019-02-04', 'JL. CIBALIGO KM. 2,8 RT.003 RW.003 KEL MELONG  KEC CIMAHI SELATAN', '', '', 200, '', 0, '0', 8, 0, 0, '-', '-', '-', 0, 0, '-', '-', '-', '-', '', '2019-02-04', '2019-02-04', 0, 0, 0.00, 0, 0, 0.00, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (42, 6, '3', 'SI 3', 1, '-', '', '2019-02-04', '2019-02-04', 'JL. CIBALIGO KM. 2,8 RT.003 RW.003 KEL MELONG  KEC CIMAHI SELATAN', '', '', 200, '', 0, '-', 8, 0, 0, '-', '-', '-', 0, 0, '-', '-', '-', '-', '', '2019-02-04', '2019-02-04', 0, 0, 0.00, 0, 0, 0.00, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (43, 52, '2', 'SB-1', 1, '546.2/453-BPLH', '', '2006-05-31', '2007-05-31', 'JL. ASIA AFRIKA NO.141-149, KEC. SUMUR BANDUNG', '', '', 135, '', 60, '-', 4, 0, 2, '-', '0', '-', 3, 0, 'SENSUS', '13001478', '0', '0', '', '2019-02-04', '2019-02-04', 6, 55, 18.17, 107, 36, 59.23, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (44, 6, '3', 'SI 4', 1, '-', '', '2019-02-04', '2019-02-04', 'JL. CIBALIGO KM. 2,8 RT.003 RW.003 KEL MELONG  KEC CIMAHI SELATAN', '', '', 200, '', 0, '-', 8, 0, 0, '-', '-', '-', 0, 0, '-', '-', '-', '-', '', '2019-02-04', '2019-02-04', 0, 0, 0.00, 0, 0, 0.00, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (45, 6, '3', 'SI 5', 1, '-', '', '2019-02-04', '2019-02-04', 'JL. CIBALIGO KM. 2,8 RT.003 RW.003 KEL MELONG  KEC CIMAHI SELATAN', '', '', 200, '', 0, '-', 8, 0, 0, '-', '-', '-', 0, 0, '-', '-', '-', '-', '', '2019-02-04', '2019-02-04', 0, 0, 0.00, 0, 0, 0.00, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (46, 54, '1', 'SP-1', 1, '546.2/78/10.1.02.0/DPMPTS', '', '2018-01-31', '2020-01-31', 'JL. RAYA RAWA BADAK KM. 4 KP. CITEUREUP, CINANGSI, CIBOGO, SUBANG.', '', '', 0, '', 0, '-', 4, 0, 0, '-', '0', '-', 0, 0, 'WESTHOUSE', '1611094154', '0017', '0', '', '0000-00-00', '0000-00-00', 6, 33, 35.80, 107, 47, 23.70, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (47, 6, '3', 'SI 6', 1, '-', '', '2019-02-04', '2019-02-04', 'JL. CIBALIGO KM. 2,8 RT.003 RW.003 KEL MELONG  KEC CIMAHI SELATAN', '', '', 200, '', 0, '-', 8, 0, 0, '-', '-', '-', 0, 0, '-', '-', '-', '-', '', '2019-02-04', '2019-02-04', 0, 0, 0.00, 0, 0, 0.00, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (49, 6, '4', 'PANTAU 1', 1, '-', '', '2019-02-04', '2019-02-04', 'JL. CIBALIGO KM. 2,8 RT.003 RW.003 KEL MELONG  KEC CIMAHI SELATAN', '', '', 200, '', 0, '-', 8, 0, 0, '-', '-', '-', 0, 0, '-', '-', '-', '-', '', '2019-02-04', '2019-02-04', 0, 0, 0.00, 0, 0, 0.00, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (50, 6, '4', 'PANTAU 2', 1, '-', '', '2019-02-04', '2019-02-04', 'JL. CIBALIGO KM. 2,8 RT.003 RW.003 KEL MELONG  KEC CIMAHI SELATAN', '', '', 200, '', 0, '-', 8, 0, 0, '-', '-', '-', 0, 0, '-', '-', '-', '-', '', '2019-02-04', '2019-02-04', 0, 0, 0.00, 0, 0, 0.00, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (51, 55, '2', 'SB-1', 1, '546.2/468/29.1.03.2a/dpmp', '', '2018-07-16', '2020-07-16', 'JL. KI PUTIH NO. 12, KEC. CIDADAP', '', '', 100, '', 0, '-', 0, 0, 0, '-', '0', '-', 0, 0, 'SENSUS', '13001487', '0', '510.3/5020/UAPV.2', '', '2019-02-04', '2019-02-04', 0, 0, 0.00, 0, 0, 0.00, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (52, 57, '2', 'SB 1', 1, '546.2/220/29.1.03.0d/DPMP', '', '2018-08-15', '2020-08-15', 'JL. CIBALIGO KM.6,8 RT/RW 08/08 KEL.CIGUGUR TENGAH KOTA CIMAHI', '', '', 109, '', 75.2, '-', 0, 0, 2, '-', '-', 'SUBMERSIBLE', 7, 120, 'SCHLUMBERGER', '83 CIO 000', '-', '519.2/3591/UPTNL/UAP', '', '2017-12-13', '2019-11-13', 6, 54, 1.70, 107, 33, 22.52, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (53, 65, '1', 'SP-1', 1, '546.2/549/10.1.01.0/BPMPT', '', '2018-11-25', '2020-11-25', 'JL. BAHUREKSA NO. 3, KEC. BANDUNG WETAN', '', '', 40, '', 15, '-', 4, 0, 1, 'JETPUMP 500WATT', '0', '0', 500, 0, 'PRECLIFLO', '46EC300303', '0', '0', '', '2019-02-04', '2019-02-04', 7, 88, 99.99, 92, 35, 99.99, 2, NULL, NULL);
INSERT INTO `t_sumur` VALUES (54, 64, '2', 'SB 1', 1, '503.26/0014-Her/450/KPPT/', '', '2016-08-22', '2018-08-09', 'JL.CIBALIGO NO.43 CIBEUREUM KEC CIMAHI SELATAN KOTA CIMAHI', '', '', 160, '', 72, 'GIP', 8, 0, 3, '-', '-', 'SUBMERSIBLE', 0, 0, 'BR', '201711514', '-', '510.3/5254/UAPV-2', '', '2016-08-06', '2016-08-06', 6, 54, 31.14, 107, 33, 11.83, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (55, 64, '2', 'SB 2', 1, '503.26/0015/Her/451/KPPT/', '', '2016-08-22', '2018-08-09', 'JL.CIBALIGO NO.43 CIBEUREUM KEC CIMAHI SELATAN KOTA CIMAHI', '', '', 160, '', 72, 'GIP', 8, 0, 3, '-', '-', 'SUBMERSIBLE', 0, 0, 'BR', '06120113', '-', '510.3/5977/UAPV-2', '', '2016-08-06', '2016-08-06', 6, 54, 30.95, 107, 33, 14.50, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (56, 73, '2', 'SB-1', 1, '546.2/715/10.1.01.2/BPMPT', '', '2015-10-26', '2017-09-30', 'JL. CIMUNCANG NO. 51, KEC. CIBEUNYING KIDUL', '', '', 150, '', 100, '0', 0, 3, 3, '-', '0', '', 3, 9, 'SCHLUM BURGER', '45.CIN', '0', '510.3/3374/UAPV.2', '', '2015-05-27', '2019-02-04', 6, 53, 95.90, 107, 38, 9.42, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (57, 74, '1', 'SP-1', 2, '546.2/365/10.1.02.0/DPMPT', '', '2018-04-02', '2020-04-02', 'JL. DAWUAN ONCOM, DAWUAN KALER', '', '', 20, '', 0, '-', 4, 1, 0, '-', '0', '-', 0, 0, 'MIAMI', '0', '12', '0', '', '0000-00-00', '0000-00-00', 6, 32, 5.70, 107, 41, 3.50, 2, NULL, NULL);
INSERT INTO `t_sumur` VALUES (58, 74, '1', 'SP-2', 2, '0', '', '0000-00-00', '0000-00-00', 'JL.DAWUAN ONCOM', '', '', 20, '', 0, '-', 4, 1, 0, '-', '0', '-', 0, 0, 'MIAMI', '0', '11', '0', '', '0000-00-00', '0000-00-00', 6, 32, 5.00, 107, 41, 31.20, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (59, 80, '2', 'SB-1', 1, '546.2/271/10.1.01.0/bpmpt', '', '2016-07-19', '2018-07-17', 'JL. MOCH. RAMDHAN NO. 76, KEC. REGOL', '', '', 100, '', 40, '-', 6, 0, 2, 'SUBMERSIBLE ', '0', '-', 3.5, 80, 'BR/LY5625', '160325486', '0', '0', '', '0000-00-00', '0000-00-00', 6, 55, 50.00, 107, 86, 46.30, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (60, 78, '5', 'ASR 1', 1, '546.2/56/29.1.03.2a/DPMPT', '', '2019-01-08', '2021-01-08', 'JL. CIBALIGO NO.76 RT.008 RW.008 KEL.CIGUGUR TENGAH KEC.CIMAHI SELATAN', '', '', 150, '', 58, 'GIP', 8, 0, 3, '-', '-', 'SUBMERSIBLE', 15, 120, 'MEINECKE', '-', '-', '510.3/8152/UAPV.2', '', '2015-11-17', '2015-11-17', 6, 54, 3.71, 107, 33, 23.41, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (61, 88, '2', 'SB-4', 2, '0', '', '0000-00-00', '0000-00-00', 'KP. JABONG I, DESA CURUG RENDENG, KEC. JALANCAGAK, SUBANG', '', '', 0, '', 0, '-', 6, 2, 2, '-', '0', '-', 0, 0, 'POWGAZ', '282074', '1', '0', '', '0000-00-00', '0000-00-00', 6, 41, 2.72, 107, 40, 26.15, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (62, 91, '2', 'SB-1', 1, '546.2/984/29.1.03.0b/DPMP', '', '2018-07-17', '2020-07-18', 'JL. CIBOLERANG NO. 33B, KEC. BABAKAN CIPARAY', '', '', 100, '', 30, 'PVC', 5, 0, 2, 'SUBMERSIBLE ', '0', '0', 0, 78, '-', '-', '0', '0', '', '0000-00-00', '0000-00-00', -6, 57, 10.23, 107, 34, 41.63, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (63, 92, '2', 'SB 1', 1, '564.2/267/10.1.02.0/DPMPT', '', '2017-07-24', '2019-07-24', 'JL. JENDRAL H.AMIR MACHMUD NO.140 KEL.CIBABAT KEC. CIMAHI UTARA', '', '', 105, '', 80, 'PPC', 6, 0, 3, '-', '-', 'SUBMERSIBLE', 0, 0, '-', '83 BAE 000', '-', '510.3/5364/UAPV.2', '', '2015-08-14', '2017-08-14', 7, 81, 99.99, 923, 89, 18.00, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (64, 88, '2', 'SB-5', 2, '0', '', '0000-00-00', '0000-00-00', 'KP. JABONG I, DESA CURUG RENDENG, KEC. JALANCAGAK, SUBANG', '', '', 0, '', 0, '-', 6, 2, 2, '-', '0', '-', 0, 0, 'POWGAZ', '220177', '1', '0', '', '0000-00-00', '0000-00-00', 6, 41, 4.31, 107, 40, 19.54, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (65, 91, '2', 'SB-2', 1, '546.2/985/29.1.03.0b/DPMP', '', '2018-07-17', '2020-07-17', 'JL. CIBOLERANG NO. 33B, KEC. BABAKAN CIPARAY', '', '', 100, '', 30, 'PVC', 5, 0, 2, 'SUBMERSIBLE ', '0', '-', 0, 78, '-', '0', '0', '0', '', '0000-00-00', '0000-00-00', -6, 57, 17.18, 107, 34, 36.29, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (66, 88, '2', 'SB-1', 1, '546.2/160/SIPA-GSDM/2014', '', '2014-12-18', '2016-12-18', 'KP. JABONG I, DESA CURUG RENDENG, KEC. JALANCAGAK, SUBANG', '', '', 0, '', 75, '0', 0, 0, 0, '-', '0', '-', 0, 0, '-', '0', '0', '0', '', '0000-00-00', '0000-00-00', 0, 0, 0.00, 0, 0, 0.00, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (67, 88, '2', 'SB-2', 1, '546.2/161/SIPA-GSDM/2014', '', '2014-12-18', '2016-12-18', 'KP. JABONG I, DESA CURUG RENDENG, KEC. JALANCAGAK, SUBANG', '', '', 0, '', 75, '0', 0, 0, 0, '-', '0', '-', 0, 0, '-', '0', '0', '0', '', '0000-00-00', '0000-00-00', 0, 0, 0.00, 0, 0, 0.00, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (68, 88, '2', 'SB-3', 1, '546.2/162/SIPA-GSDM/2014', '', '2014-12-18', '2016-12-18', 'KP. JABONG I, DESA CURUG RENDENG, KEC. JALANCAGAK, SUBANG', '', '', 0, '', 75, '0', 0, 0, 0, '-', '0', '-', 0, 0, '-', '0', '0', '0', '', '0000-00-00', '0000-00-00', 0, 0, 0.00, 0, 0, 0.00, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (69, 88, '3', 'SI-1', 1, '0', '', '0000-00-00', '0000-00-00', 'KP. JABONG I, DESA CURUG RENDENG, KEC. JALANCAGAK, SUBANG', '', '', 0, '', 0, 'PVC', 6, 0, 0, '-', '0', '-', 0, 0, '-', '0', '0', '0', '', '0000-00-00', '0000-00-00', 0, 0, 0.00, 0, 0, 0.00, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (70, 88, '3', 'SI-2', 1, '0', '', '0000-00-00', '0000-00-00', 'KP. JABONG I, DESA CURUG RENDENG, KEC. JALANCAGAK, SUBANG', '', '', 0, '', 0, 'PVC', 6, 0, 0, '-', '0', '-', 0, 0, '-', '0', '0', '0', '', '0000-00-00', '0000-00-00', 0, 0, 0.00, 0, 0, 0.00, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (71, 97, '1', 'SP-1', 1, '546.2/348/10.1.01.2/BPMPT', '', '2016-08-11', '2018-11-08', 'JL. SINDANG SIRNA ELOK NO. 9, KEC. SUKAJADI', '', '', 40, '', 11, '-', 4, 0, 1, 'JETPUMP', '0', '-', 0.5, 0, 'SCHLUM BURGER', '96BEC30029', '-', '-', '', '0000-00-00', '0000-00-00', 6, 52, 33.34, 107, 35, 20.24, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (72, 95, '1', 'SP 1', 1, '546.2/141-SIPA/2000', '', '2000-07-24', '2002-07-24', 'JL.CIHANJUANG NO.33 CIBABAT,CIMAHI UTARA', '', '', 30, '', 15, 'PPC', 4, 0, 1, '-', '-', 'SUBMERSIBLE', 1, 15, 'LINFLOW', '96000392', '-', '-', '', '2019-02-04', '2019-02-04', 6, 53, 30.57, 107, 33, 2.15, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (73, 67, '1', 'SP-1', 2, '0', '', '0000-00-00', '0000-00-00', 'KP. RAWABANCET RT 01/01 WANTILAN, CIPEUNDEUY, SUBANG.', '', '', 0, '', 0, '-', 4, 1, 1, '-', '0', '-', 0, 0, 'PAMETERINDO', '1408000164', '000003', '0', '', '0000-00-00', '0000-00-00', 6, 29, 17.70, 107, 35, 53.80, 5, NULL, NULL);
INSERT INTO `t_sumur` VALUES (74, 102, '2', 'ASR 1', 1, '546.2/1611/29.1.03.2a/DPM', '', '2018-11-13', '2020-11-13', 'JL.CIBALIGO NO.76 CIBEREUM CIMAHI SELATAN', '', '', 150, '', 59, 'GIP', 8, 0, 3, '-', '-', 'SUBMERSIBLE', 20, 120, 'BR', '170100071', '-', '519.2/911/UPTML/UAPV', '', '2017-07-21', '2019-07-21', 6, 54, 99.99, 107, 33, 99.99, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (75, 103, '1', 'SP-1', 1, '546.2/267-BPLH', '', '2006-01-27', '2007-01-27', 'JL. BINONG UTARA NO. 245/127 B, KEC. KIARACONDONG', '', '', 36, '', 4, '-', 1, 1, 1, '-', '-', '-', 1, 30, 'SCHLUM BURGER', '83BAC00085', '-', '-', '', '0000-00-00', '0000-00-00', 0, 0, 0.00, 0, 0, 0.00, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (76, 102, '2', 'ASR 2', 1, '546.2/1616/29.1.03.2a/DPM', '', '2018-11-13', '2020-11-13', 'JL.CIBALIGO NO.76 CIBEREUM CIMAHI SELATAN', '', '', 150, '', 90, 'GIP', 8, 0, 3, '-', '-', 'SUBMERSIBLE', 20, 120, 'BR', '170100112', '-', '519.2/908/UPTML/UAPV', '', '2017-07-21', '2019-07-21', 6, 54, 5.60, 107, 533, 23.12, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (77, 102, '2', 'ASR 3', 1, '546.2/1617/29.1.03.2a/DPM', '', '2018-11-13', '2020-11-13', 'JL.CIBALIGO NO.76 CIBEREUM CIMAHI SELATAN', '', '', 150, '', 64, 'GIP', 8, 0, 3, '-', '-', 'SUBMERSIBLE', 20, 120, 'BR', '170450017', '-', '519.2/910/UPTML/UAPV', '', '2017-07-21', '2019-07-21', 6, 54, 10.56, 107, 33, 27.19, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (78, 108, '2', 'SB-1', 1, '546.2/68/DU-SIPA/GSDM/201', '', '2014-07-01', '2016-08-29', 'JL. CIBEUREUM, DESA WANTILAN, KEC. CIPEUNDEUY, SUBANG.', '', '', 90, '', 195, 'GIF', 6, 2, 2, 'GRUNDFOS', '-', 'SUBNERSIBLE POM', 55, 0, 'SCHLUMBERGER', '96WK19790', '95657', '0', '', '0000-00-00', '0000-00-00', 6, 29, 4.63, 107, 35, 51.63, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (79, 102, '2', 'ASR 4', 1, '546.2/1618/29.1.03.2a/DPM', '', '2018-11-13', '2020-11-13', 'JL.CIBALIGO NO.76 CIBEREUM CIMAHI SELATAN', '', '', 150, '', 68.54, 'GIP', 8, 0, 3, '-', '-', 'SUBMERSIBLE', 20, 120, 'BR', '170450018', '-', '519.2/907/UPTML/UAPV', '', '2017-07-21', '2019-07-21', 6, 54, 7.99, 107, 33, 22.03, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (80, 109, '1', 'SP-1', 1, '546.2/351/10.1.01.2/BPMPT', '', '2016-03-05', '2018-03-05', 'JL. CIPAGALO RT. 06 RW. 04 KEC. BUAH BATU', '', '', 40, '', 3.3, '-', 4, 0, 1, '-', '0', '-', 350, 0, 'PAMETERINDO/DN2', '1048000141', '0', '0', '', '0000-00-00', '0000-00-00', 6, 57, 0.50, 107, 39, 5.20, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (81, 102, '2', 'ASR 5', 1, '546.2/1619/29.1.03.2a/DPM', '', '2018-11-13', '2020-11-13', 'JL.CIBALIGO NO.76 CIBEREUM CIMAHI SELATAN', '', '', 150, '', 71.68, 'GIP', 8, 0, 3, '-', '-', 'SUBMERSIBLE', 20, 120, 'BR', '170450025', '-', '519.2/905/UPTML/UAPV', '', '2017-07-21', '2019-07-21', 6, 54, 4.63, 107, 33, 22.31, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (82, 108, '2', 'SB-2', 1, '546.2/69/DU-SIPA/GSDM/201', '', '2014-07-01', '2016-08-29', 'JL. CIBEUREUM, DESA WANTILAN, KEC. CIPEUNDEUY, SUBANG.', '', '', 92, '', 195, 'GIF', 6, 2, 2, 'FRANKLIN', '-', 'SUBMERSIBLE', 5.5, 0, 'SCHLUMBERGER', '83EIK00396', '26903', '0', '', '0000-00-00', '0000-00-00', 6, 29, 9.37, 107, 35, 50.47, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (83, 102, '2', 'ASR 6', 1, '546.2/1620/29.1.03.2a/DPM', '', '2018-12-13', '2020-12-13', 'JL.CIBALIGO NO.76 CIBEREUM CIMAHI SELATAN', '', '', 150, '', 71.68, 'GIP', 8, 0, 3, '-', '-', 'SUBMERSIBLE', 20, 120, 'BR', '170450558', '-', '519.2/904/UPTML/UAPV', '', '2017-07-21', '2019-07-21', 6, 54, 6.14, 107, 33, 19.90, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (84, 102, '2', 'ASR 7', 1, '546.2/1621/29.1.03.2a/DPM', '', '2018-11-13', '2020-11-13', 'JL.CIBALIGO NO.76 CIBEREUM CIMAHI SELATAN', '', '', 150, '', 63.36, 'GIP', 8, 0, 3, '-', '-', 'SUBMERSIBLE', 20, 120, 'BR', '170450066', '-', '519.2/906/UPTML/UAPV', '', '2017-07-21', '2019-07-21', 6, 54, 10.80, 107, 33, 24.32, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (85, 102, '2', 'ASR 8', 1, '546.2/1622/29.1.03.2a/DPM', '', '2018-11-13', '2020-11-13', 'JL.CIBALIGO NO.76 CIBEREUM CIMAHI SELATAN', '', '', 150, '', 62.72, 'GIP', 8, 0, 3, '-', '-', 'SUBMERSIBLE', 20, 120, 'BR', '170450538', '-', '519.2/912/UPTML/UAPV', '', '2017-07-21', '2019-07-21', 6, 54, 7.01, 107, 33, 25.26, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (86, 113, '2', 'SB-1', 1, '546.2/076-BPLH', '', '2006-08-29', '2006-08-29', 'JL. MEKAR RAYA KAV 12, KEC. RANCASARI', '', '', 70, '', 40, '-', 4, 0, 1.5, '-', '-', '-', 3, 0, 'SCHLUM BURGER', '95CIK36615', '-', '-', '', '0000-00-00', '0000-00-00', 6, 55, 38.33, 107, 42, 10.32, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (87, 102, '2', 'ASR 9', 1, '546.2/1623/29.1.03.2a/DPM', '', '2018-11-13', '2020-11-13', 'JL.CIBALIGO NO.76 CIBEREUM CIMAHI SELATAN', '', '', 150, '', 62.72, 'GIP', 8, 0, 3, '-', '-', 'SUBMERSIBLE', 20, 120, 'BR', '170100063', '-', '519.2/909/UPTML/UAPV', '', '2017-07-21', '2019-07-21', 6, 54, 4.43, 107, 33, 24.19, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (88, 115, '1', 'SP-1', 1, '546.2/597/10.1.02.0/DPMPT', '', '2017-10-30', '2019-10-30', 'JL. OTTO ISKANDARDINATA NO. 87 KEL. KARANGANYAR KEC, SUBANG KAB. SUBANG', '', '', 30, '', 8, '-', 0, 0, 0, '-', '0', 'SUBMERSIBLE', 30, 0, '-', '0', '0', '0', '', '0000-00-00', '0000-00-00', 6, 33, 46.00, 107, 46, 21.00, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (89, 125, '2', 'SB-1', 1, '503.546.2/0056/bbpt', '', '2014-03-11', '2015-03-11', 'JL. SOEKARNO HATTA NO. KM. 12,5 NO. 736, KEC. GEDEBAGE', '', '', 150, '', 70, '-', 6, 0, 3, 'SUBMERSIBLE ', '-', '-', 11, 90, 'BR.', '13138518', '-', '-', '', '0000-00-00', '0000-00-00', 6, 56, 16.46, 107, 41, 50.36, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (90, 122, '2', 'SB 1', 1, '546.2/1350/29.1.03.2a/DPMPTSP/2018', '', '2018-09-13', '2020-09-13', 'JL. HEGAR IV NO.242 CIBALIGO KEL.CIBEUREUM KEC.CIMAHI SELATAN', '', '', 100, '', 72, '-', 4, 0, 1, '-', '-', 'SUBMERSIBLE', 5, 102, 'WESHING HOUSE', '579512247', '-', '-', '', '2019-02-04', '2019-02-04', 6, 54, 3.70, 107, 33, 27.10, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (91, 129, '1', 'SP-1', 1, '546.2/03/10.1.01/BPMPT/2015', '', '2015-01-05', '2017-05-01', 'JL. PACUAN KUDA NO. 2, KEC. ARCAMANIK', '', '', 120, '', 70, '-', 4, 0, 1.5, 'SUBMERSIBLE PUMP', '-', '-', 3, 60, 'WESTERHOUSE ', '2A1411', '-', '-', '', '0000-00-00', '0000-00-00', 6, 54, 99.99, 107, 40, 99.99, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (92, 133, '2', 'SB 1', 1, '546.2/384/10.1.02.0/DPMPTSP/2017', '', '2017-09-06', '2019-09-06', 'JL.CIBALIGI NO.149A KEL.UTARA KEC.CIMAHI SELATAN', '', '', 180, '', 56, 'GIP', 8, 0, 3, '-', '-', 'SUBMERSIBLE', 15, 186, 'GRUNDFOS', '-', '-', '-', '', '2019-02-04', '2019-02-04', 6, 54, 22.30, 107, 33, 10.70, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (93, 130, '2', 'SB-1', 1, '546.2/744/10.1.01.2/BPMPT/2016', '', '0000-00-00', '0000-00-00', 'DESA CISAGA KEC. CIBOGO, SUBANG.', '', '', 100, '', 113, '-', 6, 0, 2, '-', '0', '-', 0, 0, 'WESTHOUSE', '1411000103', '6987', '0', '', '0000-00-00', '0000-00-00', 6, 32, 3.92, 107, 76, 55.63, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (94, 138, '2', 'SB-1', 1, '503.546.2/018/BPMPT/2009', '', '2007-09-13', '2009-09-13', 'JL. SURAPATI NO. 151, KEC. CIBEUNYING KALER', '', '', 100, '', 76, '-', 6, 4, 2, '-', '0', '-', 3, 60, 'SCHLUMBERGER/WS', '98WIK52581', '0', '0', '', '2019-02-06', '2019-02-06', 6, 53, 58.13, 7, 37, 43.40, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (95, 137, '2', 'SB-1', 1, '546.2/871/10.1.02.0/DPMPTSP/2017', '', '2017-12-28', '2019-12-28', 'JL. BELAKANG ARUNA NO. 72, KEC. CICENDO', '', '', 100.5, '', 97.6, '-', 6, 0, 2, 'SUBMERSIBLE ', '-', '-', 10, 95, 'SENSUS ', '13001472', '-', '-', '', '0000-00-00', '0000-00-00', -6, 54, 99.99, 107, 35, 99.99, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (96, 139, '2', 'SB-1', 2, '0', '', '0000-00-00', '0000-00-00', 'JL. CIMAYASARI, DESA CIMAYASARI, KEC. CIPEUNDEUY, KAB. SUBANG', '', '', 65, '', 0, '-', 6, 0, 2, '-', '-', '-', 3, 45, 'BR', '0', '189', '0', '', '0000-00-00', '0000-00-00', 6, 31, 57.70, 107, 34, 46.70, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (97, 137, '2', 'SB-2', 1, '503.546.2/49/BPPT', '', '2017-12-28', '2019-12-28', 'JL. BELAKANG ARUNA NO. 72, KEC. CICENDO', '', '', 120, '', 122, '-', 8, 0, 3, 'SUBMERSIBLE ', '-', '-', 15, 105, 'SENSUS ', '13001566', '-', '', '', '0000-00-00', '0000-00-00', 6, 54, 32.26, 107, 35, 9.00, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (98, 140, '1', 'PANTEX 1', 1, '503.26/047/2832/KPPT/2014', '', '2017-01-08', '2018-12-30', 'JL. CIBALIGO NO.86 KM. 2,1 KEL.MELONG KEC.CIMAHI SELATAN', '', '', 40, '', 20, 'PPC', 4, 0, 1, '-', '-', '-', 0, 30, 'SCHLUMBERGER', '83 BAC 023', '-', '50.3/1669/UAPV.2', '', '2016-03-16', '2021-03-16', 7, 81, 99.99, 923, 49, 23.00, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (100, 141, '2', 'SB-1', 1, '503.546.2/151/BPPT/2012', '', '2015-11-09', '2018-10-25', 'JL. LEMAHNEUNDEUT NO. 7, KEC. SUKAJADI', '', '', 180, '', 76, '-', 6, 0, 2, '-', '-', '-', 10, 150, 'BR', '170907960', '0', '510.3/1473/UAPV.2', '', '2016-03-10', '2018-03-10', 6, 53, 3.36, 107, 34, 48.37, 2, NULL, NULL);
INSERT INTO `t_sumur` VALUES (101, 145, '1', 'SP-1', 1, '546.2/885/29.1.02.0b/DPMPTSP/2018', '', '2018-07-04', '2020-07-04', 'JL. DEWI SARTIKA NO. 18, KEC. REGOL', '', '', 24, '', 5, 'PVC', 4, 0, 1, 'JET PUMP', '-', '-', 0, 0, '-', '-', '-', '-', '', '0000-00-00', '0000-00-00', 6, 55, 27.64, 107, 36, 21.88, 2, NULL, NULL);
INSERT INTO `t_sumur` VALUES (102, 143, '1', 'SP-1', 1, '546.2/2616/29.1.02.2a/DPMPTSP/2018', '', '2018-05-11', '2020-05-11', 'DESA GAMBASARI KEC. PAGADEN KAB. SUBANG', '', '', 60, '', 10, '-', 0, 0, 0, '-', '0', '-', 0, 0, 'WESTECHAUSE', '045013', '0', '510.3/3847/UAPV-1', '', '2014-06-17', '0000-00-00', 0, 0, 0.00, 0, 0, 0.00, 5, NULL, NULL);
INSERT INTO `t_sumur` VALUES (103, 143, '2', 'SB-1', 2, '0', '', '0000-00-00', '0000-00-00', 'DESA GAMBASARI KEC. PAGADEN KAB. SUBANG', '', '', 0, '', 0, '-', 0, 0, 0, '-', '-', '-', 0, 0, '-', '0', '0', '0', '', '0000-00-00', '0000-00-00', 0, 0, 0.00, 0, 0, 0.00, 2, NULL, NULL);
INSERT INTO `t_sumur` VALUES (104, 155, '2', 'SB-1', 1, '546.2/520/10.1.01.2/DPMPTSP/2017', '', '2017-10-23', '2019-10-23', 'JL. CITARUM NO. 16 CIHAPIT, ', '', '', 90, '', 3.3, '-', 4, 0, 1.5, '-', '-', '-', 1.5, 73, 'ARITA', 'W12060047', '-', '', '', '0000-00-00', '0000-00-00', 6, 54, 4.81, 107, 37, 22.72, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (105, 150, '1', 'SP-1', 1, '546.2/221/10.1.02.2/DPMPTSP/2018', '', '2015-12-31', '2017-12-18', 'JL. RIAU NO. 160 KEC. BANDUNG WETAN', '', '', 0, '', 0, '-', 0, 0, 0, '-', '0', '-', 0, 0, 'ONDA', 'DN15,  A 1', '0', '510.3/6819/UAPV.1', '', '2015-10-14', '2017-10-14', 6, 52, 12.70, 107, 37, 44.50, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (106, 154, '2', 'SB-1', 1, '546.2/834/10.1.01.2/BPMPT/2016', '', '2016-09-23', '2018-09-14', 'JL. RAYA PALASARI KM. 21 DESA CISAAT, KEC. CIATER, KAB. SUBANG.', '', '', 100, '', 90, '-', 6, 2, 0, '-', '0', '-', 5, 66, 'SCHLUMBERGER', '96WIK37840', '0', '0', '', '0000-00-00', '0000-00-00', 0, 0, 0.00, 0, 0, 0.00, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (107, 154, '2', 'SB-2', 1, '546.2/835/10.1.01.2/BPMPT/2016', '', '2016-09-23', '2018-09-14', 'JL. RAYA PALASARI KM. 21 DESA CISAAT, KEC. CIATER, KAB. SUBANG.', '', '', 100, '', 90, '-', 6, 2, 0, '-', '-', '-', 5, 66, 'SCHLUMBERGER', '96WIK20901', '0', '510.3/1521/UAPV.2', '', '2016-03-16', '0000-00-00', 0, 0, 0.00, 0, 0, 0.00, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (108, 158, '2', 'SB-1', 1, '546.2/629/10.1.01.2/BPMPT/2016', '', '2018-07-14', '2018-07-14', 'JL. PASIRKALIKI NO. 45, KEC. CICENDO', '', '', 120, '', 51, '', 6, 0, 2, '-', '-', '-', 5.5, 96, 'SCHLUMBURGER ', '-', '-', '', '', '0000-00-00', '0000-00-00', 6, 54, 43.12, 107, 35, 52.17, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (109, 154, '2', 'SB-3', 1, '546.2/922/10.1.01.2/BPMPT/2016', '', '2016-10-04', '2018-09-14', 'JL. RAYA PALASARI KM. 21 DESA CISAAT, KEC. CIATER, KAB. SUBANG.', '', '', 100, '', 90, '-', 6, 2, 0, '-', '-', '-', 5, 66, 'SCHLUMBERGER', '549504', '0', '510.3/1521/UAPV.2', '', '2016-03-11', '0000-00-00', 0, 0, 0.00, 0, 0, 0.00, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (110, 158, '2', 'SB-2', 1, '546.2/638/10.1.01.2/BPMPT/2016', '', '2018-07-04', '2018-07-04', 'JL. PASIRKALIKI NO. 45, KEC. CICENDO', '', '', 120, '', 51, '-', 6, 0, 2, '-', '-', '-', 5.5, 96, 'SCHLUMBURGER ', '-', '-', '', '', '0000-00-00', '0000-00-00', 6, 54, 43.50, 107, 35, 49.09, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (111, 133, '2', 'SB 2', 1, '546.2/422/10.1.02.0/DPMPTSP/2018', '', '2017-09-15', '2019-09-15', 'JL. CIBALIGO NO.149 A KEL.UTAMA KEC.CIMAHI SELATAN', '', '', 125.5, '', 83.7, 'GIP', 8, 0, 3, '-', '-', '-', 25, 186, 'SCHLUMBERGER', '96 WIO 436', '-', '-', '', '2019-02-06', '2019-02-06', 78, 2, 99.99, 92, 35, 99.99, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (112, 163, '2', 'SB-1', 1, '546.2/26-BPLH', '', '2007-01-08', '2009-01-08', 'JL. BRAGA NO. 8, KEC. SUMUR BANDUNG', '', '', 120, '', 130, '-', 6, 0, 2, '-', '-', '-', 4, 90, 'ZENNER ', '14308129', '-', '510.3/5735/UAPV-1', '', '2014-08-24', '0000-00-00', 6, 55, 15.13, 107, 36, 37.95, 2, NULL, NULL);
INSERT INTO `t_sumur` VALUES (113, 166, '1', 'PANTEX 1', 1, '546.2/856/29.1.02.0b/DPMPTSP/2018', '', '2018-06-29', '2020-06-29', 'JL.HEGAR NO.3 CIBALIGO CIGUGUR TENGAH CIMAHI TENGAH', '', '', 24, '', 5, 'PVC', 4, 0, 1, '-', '-', '', 350, 0, '8 FA', '-', '-', '-', '', '2019-02-06', '2019-02-06', 6, 54, 3.70, 107, 33, 27.10, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (114, 163, '2', 'SB-2', 1, '546.2/27-BPLH', '', '2019-02-06', '2019-02-06', 'JL. BRAGA NO. 8, KEC. SUMUR BANDUNG', '', '', 100, '', 130, '-', 8, 0, 2, '-', '-', '-', 3, 48, 'BR', '131138708', '-', '510.3/1748/UAPV-1', '', '2014-04-02', '0000-00-00', 6, 55, 13.46, 107, 36, 37.47, 2, NULL, NULL);
INSERT INTO `t_sumur` VALUES (115, 160, '2', 'SB-1', 1, '546.2/216/10.1.01.2/BPMPT/2015', '', '2015-09-13', '2017-09-13', 'JL. WASTU KENCANA NO. 58 KEC. BANDUNG WETAN', '', '', 80, '', 20, '-', 6, 0, 2, '-', '-', '-', 3, 60, 'SCHLUMBERGER', '0', '0', '510.3/7364/UAPV-2', '', '2014-11-03', '2016-11-03', 6, 54, 14.74, 107, 36, 19.43, 2, NULL, NULL);
INSERT INTO `t_sumur` VALUES (116, 165, '2', 'SB-1', 1, '546.2/728/10.1.01.2/BPMPT/2016', '', '2016-08-18', '2018-09-08', 'JL. NEGARA CIKALONG, DESA TANJUNG RASA, KEC. PATOK BESI, KAB. SUBANG.', '', '', 100, '', 72, '-', 0, 0, 0, '-', '0', '-', 0, 0, 'SCHLUMBERGER', '92AKK46673', '0', '510.3/3776/UAPV.2', '', '2016-04-11', '0000-00-00', 6, 22, 0.26, 107, 33, 10.14, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (117, 160, '3', 'SI-1', 1, '', '', '2015-09-13', '2017-08-27', 'JL. WASTU KENCANA NO. 58 KEC. BANDUNG WETAN', '', '', 100, '', 0, '-', 6, 0, 2, '-', '0', '-', 3, 60, 'SCHLUMBERGER', '0', '0', '510.3/1473/UAPV-2', '', '2014-11-03', '2016-11-03', 6, 54, 14.03, 107, 36, 19.58, 2, NULL, NULL);
INSERT INTO `t_sumur` VALUES (118, 172, '1', 'SP 1', 1, '546.2/363/10.1.02.0/DPMPTSP/2018', '', '2018-04-02', '2020-04-02', 'JL.CIAWITALI NO.3 RT/RW 04/09 KEL.CITEUREUP KEC.CIMAHI UTARA', '', '', 12, '', 0, '-', 0, 0, 0, '-', '-', '-', 30, 0, '-', '-', '-', '-', '', '2019-02-06', '2019-02-06', 6, 51, 54.80, 107, 33, 66.90, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (119, 173, '1', 'SP-1', 1, '546.2/136/10.1.01.2/BPMPT/2015', '', '2015-06-30', '2017-06-01', 'JL. TALAGA BODAS NO. 106 KE. LENGKONG', '', '', 40, '', 0, '-', 4, 0, 1, 'JET PUMP', '-', '-', 0, 0, '-', '-', '-', '-', '', '0000-00-00', '0000-00-00', 6, 55, 36.70, 107, 37, 34.46, 2, NULL, NULL);
INSERT INTO `t_sumur` VALUES (120, 165, '2', 'SB-2', 1, '546.2/729/10.1.01.2/BPMPT/2016', '', '2016-08-18', '2018-09-08', 'DESA TANJUNG RASA, KEC. PATOK BESI, KAB. SUBANG', '', '', 100, '', 72, '-', 0, 0, 0, '-', '0', '-', 0, 0, 'SCHLUMBERGER', '95CIM45548', '0', '510.3/3771/UAPV.2', '', '2016-04-11', '0000-00-00', 6, 22, 1.99, 107, 33, 8.49, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (121, 165, '2', 'SB-3', 1, '546.2/730/10.1.01.2/BPMPT/2016', '', '2016-08-18', '2018-09-08', 'DESA TANJUNG RASA, KEC. PATOK BESI, KAB. SUBANG', '', '', 100, '', 72, '-', 0, 0, 0, '-', '-', '-', 0, 0, 'SCHLUMBERGER', '93AIO28587', '0', '510.3/3775/UAPV.2', '', '2016-04-11', '0000-00-00', 6, 22, 5.70, 107, 33, 8.67, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (122, 165, '2', 'SB-4', 1, '546.2/731/10.1.01.2/BPMPT/2016', '', '2016-08-18', '2018-09-08', 'DESA TANJUNG RASA, KEC. PATOK BESI, KAB. SUBANG', '', '', 100, '', 72, '-', 0, 0, 0, '-', '0', '-', 0, 0, 'SCHLUMBERGER', '96CIN00282', '0', '510.3/3774/UAPV.2', '', '2016-04-11', '0000-00-00', 6, 22, 6.12, 107, 33, 10.03, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (123, 165, '2', 'SB-5', 1, '546.2/438/10.1.01.2/BPMPT/2015', '', '2015-07-27', '2017-06-30', 'DESA TANJUNG RASA, KEC. PATOK BESI, KAB. SUBANG', '', '', 120, '', 55, '-', 0, 0, 0, '-', '0', '-', 0, 0, 'SCHLUMBERGER', '96WIQ08225', '0', '510.3/4964/UAPV-2', '', '2015-04-17', '0000-00-00', 6, 22, 1.01, 107, 33, 15.83, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (124, 177, '2', 'SB 1', 1, '546.2/901/10.1.01.22/BPMPT/2016', '', '2016-11-28', '2020-11-14', 'JL.CIBALIGO NO.163', '', '', 120, '', 0, '-', 6, 0, 1.5, '-', '-', '-', 5, 0, '-', '-', '-', '-', '', '2019-02-06', '2019-02-06', 6, 54, 47.80, 107, 33, 5.30, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (125, 165, '2', 'SB-6', 1, '546.2/437/10.1.01.2/BPMPT/2015', '', '2015-07-27', '2017-06-30', 'DESA TANJUNG RASA, KEC. PATOK BESI, KAB. SUBANG', '', '', 120, '', 55, '-', 0, 0, 0, '-', '-', '-', 0, 0, 'PAM METER', '5026942-94', '0', '510.3/4968/UAPV-2', '', '2015-04-17', '0000-00-00', 6, 22, 2.51, 107, 33, 21.63, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (126, 179, '2', 'SB-1', 1, '503.546.2/723/BPPT/2015', '', '2013-07-01', '2014-07-01', 'JL.SOEKARNO HATTA NO.713', '', '', 150, '', 63, '-', 6, 0, 2, '-', '0', '-', 5, 90, '8FA/LX5650', '16060040', '0', '510.3/1079/UAPV.2', '', '2015-02-18', '2017-02-18', 6, 56, 19.57, 107, 39, 48.17, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (127, 183, '2', 'SB-1', 1, '546.2/14/10.1.01.2/BPMPT/2015', '', '2016-03-16', '2018-03-16', 'JL. SEDERHANA NO. 8-10, KEC. SUKAJADI', '', '', 200, '', 30, '-', 6, 0, 1, 'SUBMERSIBLE ', '-', '-', 1.5, 0, 'PUJI ', 'DN.40', '-', '-', '', '0000-00-00', '0000-00-00', 6, 53, 36.00, 107, 35, 57.10, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (128, 165, '2', 'SB-7', 1, '546.2/425/10.1.01.2/BPMPT/2015', '', '2015-07-14', '2017-06-30', 'DESA TANJUNG RASA, KEC. PATOK BESI, KAB. SUBANG', '', '', 120, '', 55, '-', 0, 0, 0, '-', '0', '-', 0, 0, 'SCHLUMBERGER', '96WIQ08228', '0', '510.3/4962/UAPV-2', '', '2015-04-17', '0000-00-00', 6, 21, 59.62, 107, 33, 20.86, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (129, 165, '2', 'SB-8', 1, '546.2/140/10.1.01.2/BPMPT/2016', '', '2016-02-29', '2017-09-02', 'DESA TANJUNG RASA, KEC. PATOK BESI, KAB. SUBANG', '', '', 150, '', 90, '-', 8, 0, 3, '-', '-', '-', 0, 0, 'SAPPEL', 'WP_MPD222;', '0', '510.3/4961/UAPV.2', '', '2015-04-07', '0000-00-00', 6, 21, 54.20, 107, 33, 13.23, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (130, 185, '2', 'SB 1', 1, '546.2/09/10.1.01.2/BPMPT/2015', '', '2015-07-27', '2017-01-05', 'JL. CIBALIGO NO.6-48 BARU RT03/RW16 KEL.CIBEUREUM KEC.CIMAHI SELATAN', '', '', 200, '', 32, '-', 8, 0, 2, '-', '-', '-', 15, 150, 'SCHLUMBERGER', '96 EC 3001', '-', '-', '', '2019-02-06', '2019-02-06', 78, 2, 65.00, 92, 35, 99.99, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (131, 165, '2', 'SB-9', 1, '546.2/139/10.1.01.2/BPMPT/2016', '', '2016-02-29', '2017-09-02', 'DESA TANJUNG RASA, KEC. PATOK BESI, KAB. SUBANG', '', '', 150, '', 90, '-', 8, 0, 3, '-', '0', '-', 0, 0, 'SAPPEL', 'WP_MPD222;', '0', '510.3/4969/UAPV.2', '', '2015-04-07', '0000-00-00', 6, 21, 49.38, 107, 33, 13.59, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (132, 189, '2', 'SB-1', 1, '546.2/212/10.1.01.2/BPMPT/2015', '', '2017-04-02', '2019-04-02', 'JL. CIHAMPELAS NO. 7, KEC. COBLONG', '', '', 0, '', 3.3, '-', 4, 1, 1, '-', '-', '-', 1, 0, 'ZENNER ', '8RR1001441', '-', '-', '', '0000-00-00', '0000-00-00', 6, 53, 25.10, 107, 36, 12.80, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (133, 190, '2', 'SB-1', 1, '546.2/566/10.1.01.2/BPMPT/2016', '', '2016-07-19', '2018-06-17', 'JL. SUMATRA NO. 51, KEC. BANDUNG WETAN', '', '', 140, '', 139.6, '-', 6, 2, 6, '-', '0', '-', 3, 80, 'SENSUS/WMLXLN80', '110014', '0', '510.3/7540/UAPV.2', '', '2015-10-30', '2017-10-30', 6, 54, 33.63, 107, 36, 42.53, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (134, 192, '5', 'ASR 1', 1, '546.2/116/10.1.01.2/DPMPTSP/2017', '', '2017-04-21', '2019-04-21', 'JL.CIBALIGO MELONG KM.3 NO.238 KEL.MELONG KEC.CIMAHI SELATAN', '', '', 120, '', 79, '-', 8, 3, 3, '-', '-', '-', 5, 0, '-', '-', '-', '-', '', '2019-02-06', '2019-02-06', 6, 55, 10.63, 107, 32, 45.72, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (135, 195, '1', 'SP-1', 1, '546.2/181/10.1.01.0/BPMPT/2016', '', '2016-05-03', '2018-04-19', 'JL. SETIABUDHI NO. 66, KEC. CIDADAP', '', '', 40, '', 10, '-', 4, 0, 1, 'JET PUMP', '500WAT', '-', 0, 0, '-', '-', '-', '-', '', '0000-00-00', '0000-00-00', 6, 52, 41.08, 107, 35, 56.52, 2, NULL, NULL);
INSERT INTO `t_sumur` VALUES (136, 199, '2', 'SB 1', 1, '546.2/1015/29.1.03.0d/DPMPTSP/2018', '', '2018-07-16', '2020-07-16', 'JL.CIBALIGO KM 2.2 NO.120', '', '', 100, '', 90, '-', 4, 0, 1, '-', '-', '-', 5, 70, 'SCHLUMBERGER', '90167632', '-', '-', '', '2019-02-06', '2019-02-06', 6, 54, 58.63, 107, 33, 1.53, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (137, 190, '2', 'SB-2', 1, '546.2/567/10.1.01.2/BPMPT/2016', '', '2016-07-19', '2018-06-17', 'JL. SUMATRA NO. 51, KEC. BANDUNG WETAN', '', '', 140, '', 77, '-', 6, 2, 6, '-', '0', '-', 3, 80, 'SENSUS/WMLXLN80', '11001099', '0', '510.3/9298/UAPT.2', '', '2015-12-27', '2017-12-27', 6, 54, 34.74, 107, 36, 43.33, 2, NULL, NULL);
INSERT INTO `t_sumur` VALUES (138, 201, '2', 'SB-1', 1, '546.2/74/DU-SIPA/GSDM/2014', '', '2014-07-10', '2015-07-15', 'DESA GUNUNG SARI, KEC. PAGADEN, SUBANG.', '', '', 120, '', 100, '-', 6, 2, 0, '-', '0', '-', 5, 0, '-', '0', '0', '0', '', '0000-00-00', '0000-00-00', 6, 29, 49.92, 107, 48, 22.40, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (139, 190, '3', 'SI-1', 1, '0', '', '2019-02-06', '2019-02-06', 'JL. SUMATRA NO. 51, KEC. BANDUNG WETAN', '', '', 0, '', 0, '-', 0, 0, 0, '-', '0', '-', 0, 0, '-', '0', '0', '0', '', '2019-02-06', '2019-02-06', 6, 54, 31.93, 107, 36, 43.07, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (140, 201, '2', 'SB-2', 1, '546.2/75/DU-SIPA/GSDM/2014', '', '2014-07-10', '2015-07-15', 'DESA GUNUNG SARI, KEC. PAGADEN, SUBANG.', '', '', 120, '', 100, '-', 6, 2, 0, '-', '0', '-', 5, 0, '-', '0', '0', '0', '', '0000-00-00', '0000-00-00', 6, 29, 52.40, 107, 48, 20.20, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (141, 204, '2', 'SB 1', 1, '546.2/817/10.1.01.2/BPMPT/2015', '', '2015-12-28', '2017-12-15', 'JL.CIBALIGO NO.70 KM. 1,7 RT02/09 KEL.UTAMA KEC.CIMAHI SELATAN', '', '', 180, '', 50, '-', 8, 0, 2, '-', '-', '-', 10, 120, 'SCHLUMBERGER', '-', '-', '510.3/6335/UAPV.2', '', '2015-09-18', '2015-09-18', 78, 1, 99.99, 92, 35, 99.99, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (142, 205, '1', 'SP-1', 1, '546.2/365/10.1.01.2/15PMPT/2016', '', '2018-04-19', '2020-04-19', 'JL. DR. SETIABUDI NO. 376, KEC. CIDADAP', '', '', 40, '', 7.6, '-', 4, 1, 1, '-', '-', '-', 250, 0, 'ZENNER ', '14308998', '-', '-', '', '0000-00-00', '0000-00-00', 6, 51, 0.90, 107, 35, 55.40, 2, NULL, NULL);
INSERT INTO `t_sumur` VALUES (143, 204, '2', 'SB 2', 1, '546.2/818/10.1.01.2/DPMPT/2015', '', '2015-12-28', '2017-10-06', 'JL.CIBALIGO 70 KM. 1,7 RT02/09 KEL.UTAMA KEC.CIMAHI SELATAN', '', '', 180, '', 49, '-', 8, 0, 3, '-', '-', '-', 22, 120, 'SCHLUMBERGER', '-', '-', '510.3/6336/UAPV.2', '', '2015-09-18', '2015-09-18', 78, 18, 39.00, 92, 35, 99.99, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (144, 205, '1', 'SP-2', 1, '546.2/364/10.1.01.2/BPMPT/2016', '', '2018-04-19', '2020-04-19', 'JL. DR. SETIABUDI NO. 376, KEC. CIDADAP', '', '', 40, '', 7.6, '-', 4, 1, 1, '-', '-', '-', 250, 0, 'ZENNER ', '8ZR.100144', '-', '-', '', '0000-00-00', '0000-00-00', 0, 0, 0.00, 0, 0, 0.00, 2, NULL, NULL);
INSERT INTO `t_sumur` VALUES (145, 207, '2', 'SB-1', 1, '546.2/76/DU-SIPA/GSDM/2014', '', '2014-07-10', '2015-07-21', 'DESA JATI, KEC. CIPUNAGARA, SUBANG.', '', '', 120, '', 95, '-', 6, 2, 0, '-', '0', '-', 5, 0, '-', '0', '0', '0', '', '0000-00-00', '0000-00-00', 6, 27, 27.99, 107, 50, 2.00, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (146, 204, '2', 'SB 3', 1, '546.2/819/10.1.01.2/DPMPT/2015', '', '2015-12-28', '2017-12-15', 'JL.CIBALIGO NO.70 KM. 1,7 RT02/09 KEL.UTAMA KEC.CIMAHI SELATAN', '', '', 180, '', 0, '-', 8, 0, 3, '-', '-', '-', 22, 120, 'SCHLUMBERGER', '-', '-', '510.3/6337/UAPV.2', '', '2015-12-18', '2015-12-18', 7, 81, 99.99, 0, 0, 0.00, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (147, 205, '1', 'SP-3', 1, '546.2/180/10.1.02.a/DMPTSP/2017', '', '2019-06-04', '2020-06-04', 'JL. DR. SETIABUDI NO. 376, KEC. CIDADAP', '', '', 30, '', 10, '-', 4, 1, 1, '-', '-', '-', 250, 0, 'WESTHOUSE ', '1611094180', '-', '-', '', '0000-00-00', '0000-00-00', 6, 50, 55.00, 107, 35, 55.60, 2, NULL, NULL);
INSERT INTO `t_sumur` VALUES (148, 207, '2', 'SB-2', 1, '546.2/77/DU-SIPA/GSDM/2014', '', '2014-07-10', '2015-07-21', 'DESA JATI, KEC. CIPUNAGARA, SUBANG.', '', '', 120, '', 95, '-', 6, 2, 0, '-', '0', '-', 5, 0, '-', '0', '0', '0', '', '0000-00-00', '0000-00-00', 6, 27, 23.63, 107, 50, 3.57, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (149, 209, '2', 'SB-1', 1, '546.2/610.10.1.02.0/DPMPTSP/2017', '', '2017-10-30', '2019-10-30', 'JL. ASIA AFRIKA NO. 81', '', '', 125, '', 129.6, '-', 6, 0, 2, 'SUBMERSIBLE', '-', '-', 7.5, 0, '-', '0', '0', '0', '', '2019-02-06', '2019-02-06', -6, 55, 14.31, 107, 36, 42.54, 2, NULL, NULL);
INSERT INTO `t_sumur` VALUES (150, 206, '2', 'SB-1', 1, '546.2/1011/10.1.01.2/BPMPT/2016', '', '2016-11-03', '2018-10-25', 'JL.RAYA CARINGIN NO.353 RT 01/10', '', '', 150, '', 131, '-', 0, 0, 0, '-', '0', '-', 0, 0, 'MEINECKE', '810517199', '0', '3563', '', '2016-06-16', '2018-06-16', 6, 51, 14.53, 107, 29, 38.24, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (151, 207, '2', 'SB-3', 1, '546.2/78/DU-SIPA/GSDM/2014', '', '2014-07-10', '2015-07-21', 'DESA JATI, KEC. CIPUNAGARA, SUBANG.', '', '', 120, '', 80, '-', 6, 2, 0, '-', '0', '-', 5, 0, '-', '0', '0', '0', '', '0000-00-00', '0000-00-00', 6, 27, 32.39, 107, 49, 59.68, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (152, 208, '2', 'SB 1', 1, '503.22/034/HER/995KPPT/2009', '', '2019-02-06', '2019-02-06', 'JL.CIBALIGO NO.142 ', '', '', 0, '', 0, '-', 8, 2, 2, '-', '-', 'WASHING', 7, 0, '-', '-', '-', '-', '', '2019-02-06', '2019-02-06', 7, 82, 99.99, 923, 60, 88.00, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (153, 210, '2', 'SB-1', 1, '546.2/532/10.1.02.0/DPMPTS/2018', '', '2016-11-30', '2018-11-30', 'JL. CIUMBULEUIT NO. 156, KEC. CIDADAP', '', '', 120, '', 40, '-', 4, 0, 2, '-', '-', '-', 2, 70, 'ZENNER ', '14308110', '-', '-', '', '0000-00-00', '0000-00-00', 6, 52, 0.14, 107, 36, 25.27, 2, NULL, NULL);
INSERT INTO `t_sumur` VALUES (154, 211, '2', 'SB-1', 1, '546.2/79/DU-SIPA/GSDM/2014', '', '2014-07-10', '2016-07-22', 'DESA MARENGMANG, KEC. KALIJATI, KAB. SUBANG.', '', '', 100, '', 80, '-', 6, 2, 0, '-', '0', '-', 5, 0, '-', '0', '0', '0', '', '0000-00-00', '0000-00-00', 6, 30, 19.36, 107, 40, 18.97, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (155, 211, '2', 'SB-2', 1, '546.2/80/DU-SIPA/GSDM/2014', '', '2014-07-10', '2016-07-22', 'DESA MARENGMANG, KEC. KALIJATI, KAB. SUBANG.', '', '', 100, '', 80, '-', 6, 2, 0, '-', '0', '-', 5, 0, '-', '0', '0', '0', '', '0000-00-00', '0000-00-00', 6, 30, 19.36, 107, 40, 19.94, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (156, 213, '1', 'SP-1', 1, '503.546.2/473/BPPT/2012', '', '2013-07-18', '2015-07-18', 'JL. PELAJAR PEJUANG 45 NO. 115, KEC. REGOL', '', '', 50, '', 3, '-', 0, 0, 0, '-', '-', '-', 0, 0, 'WESTHOUSE ', '1411001618', '-', '510.3/7166/UAPV.2', '', '2015-10-20', '0000-00-00', 6, 55, 52.58, 107, 37, 33.08, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (157, 212, '2', 'SB-1', 1, '546.2/724/10.1.01.0/DPMPTSP/2017', '', '2017-11-28', '2019-11-28', 'JL. RUMAH SAKIT NO. 114 KEC UJUNGBERUNG', '', '', 120, '', 90, '-', 6, 0, 2, '-', '0', '-', 5, 0, 'SENSUS/WMLXLN50', '11001050', '0', '0', '', '2019-02-06', '2019-02-06', 6, 55, 51.70, 107, 41, 33.00, 2, NULL, NULL);
INSERT INTO `t_sumur` VALUES (158, 214, '2', 'SB 1', 1, '546.2/144/10.1.01.2/BPMPT/2015', '', '2015-03-11', '2017-01-05', 'JL.CIBALIGO NO.48 KEL.CIMAHI TENGAH', '', '', 127, '', 52, '-', 6, 0, 2, '-', '-', '-', 7, 120, 'YUTA', '39362673', '-', '519.2/3105/UPTML/UAPV-2', '', '2017-11-14', '2019-11-14', 78, 21, 82.00, 923, 61, 43.00, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (159, 212, '2', 'SB-2', 1, '546.2/1024/10.1.01.2/BPMPT/2016', '', '2016-02-25', '2018-02-25', 'JL. RUMAH SAKIT NO. 114 KEC UJUNGBERUNG', '', '', 120, '', 63, '-', 6, 0, 2, '-', '0', '-', 5, 0, 'BRLXL650', '120310276', '0', '510.3/2608/UAPV.2', '', '2016-04-20', '2018-04-20', 6, 55, 52.70, 107, 41, 35.80, 2, NULL, NULL);
INSERT INTO `t_sumur` VALUES (160, 215, '2', 'SB-1', 1, '546.2/519/10.1.01.2/BMPTSP/15', '', '2015-08-01', '2017-08-01', 'DR SETIABUDI MO 438 LEDENG CIDADAP ', '', '', 120, '', 93, '-', 6, 2, 2, '-', '-', '-', 3, 0, 'SENSUS ', '130017471', '-', '-', '', '0000-00-00', '0000-00-00', 6, 50, 30.50, 107, 35, 54.30, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (161, 212, '2', 'SB-3', 1, '546.2/1025/10.1.01.2/BPMPT/2016', '', '2016-10-25', '2018-10-25', 'JL. RUMAH SAKIT NO. 114 KEC UJUNGBERUNG', '', '', 135, '', 60, '-', 6, 0, 2, '-', '0', '-', 5.5, 90, 'BRLXL650', '161060980', '0', '510.3/2607/UAPV.2', '', '2016-04-20', '2018-04-20', 6, 55, 56.30, 107, 41, 31.60, 2, NULL, NULL);
INSERT INTO `t_sumur` VALUES (162, 216, '5', 'ASR-2', 1, '546.2/603/10.1.01.2/BPMPT/2015', '', '2015-09-10', '2017-08-20', 'DESA PADAASIH KECAMATAN CIBOGO, KAB. SUBANG.', '', '', 120, '', 53, '-', 0, 0, 0, '-', '0', '-', 0, 0, 'BR', '65937270', '0', '510.3/3261/UAPV.2', '', '2015-05-27', '0000-00-00', 6, 30, 8.27, 107, 48, 8.23, 5, NULL, NULL);
INSERT INTO `t_sumur` VALUES (163, 217, '2', 'SB 1', 1, '546.2/846/10.1.01.2/BPMPT/2015', '', '2015-12-29', '2017-12-15', 'JL.CIBALIGO NO.33 KEL.CIBEUREUM KEC.CIMAHI SELATAN', '', '', 150, '', 107, '-', 8, 0, 3, '-', '-', '-', 7, 120, 'SCHLUMBERGER', '-', '-', '510.3/5873/UAPV.2', '', '2015-09-03', '2015-09-03', 78, 23, 81.00, 923, 58, 40.00, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (164, 215, '2', 'SB-2', 1, '546.2/784/10.10.1.2/BPMPT/16', '', '2016-08-01', '2018-08-01', 'DR SETIABUDI MO 438 LEDENG CIDADAP ', '', '', 120, '', 93, '-', 6, 2, 2, '-', '-', '-', 3, 0, 'LX.LN.5A', '-', '-', '', '', '0000-00-00', '0000-00-00', 0, 0, 0.00, 0, 0, 0.00, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (165, 212, '3', 'SI-1', 1, '546.2/036.AIR TANAH', '', '2019-02-06', '2019-02-06', 'JL. RUMAH SAKIT NO. 114 KEC UJUNGBERUNG', '', '', 0, '', 0, '-', 0, 0, 0, '-', '0', '-', 0, 0, '-', '0', '0', '0', '', '2019-02-06', '2019-02-06', 6, 55, 51.90, 107, 41, 32.90, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (166, 216, '5', 'ASR-1', 1, '546.2/609/10.1.01.2/BPMPT/2015', '', '2015-09-10', '2017-08-20', 'DESA PADAASIH KECAMATAN CIBOGO, KAB. SUBANG.', '', '', 120, '', 53, '-', 0, 0, 0, '-', '0', '-', 0, 0, 'BR', '65937469', '0', '510.3/3261/UAPV.2', '', '2015-05-27', '0000-00-00', 6, 30, 12.52, 107, 48, 9.88, 5, NULL, NULL);
INSERT INTO `t_sumur` VALUES (167, 217, '2', 'SB 2', 1, '546.2/845/10.1.01.2/BPMPT/2015', '', '2015-12-29', '2017-12-15', 'JL.CIBALIGO NO.33 KEL.CIBEUREUM KEC.CIMAHI SELATAN', '', '', 150, '', 0, '-', 8, 0, 3, '-', '-', '-', 7, 120, 'POWOGAZ', '-', '-', '510.3/435/UAPV.2', '', '2015-01-27', '2015-01-27', 78, 23, 79.00, 923, 59, 16.00, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (168, 38, '2', 'SB-2', 1, '546.2/957/10.1.01.2/BPMPT/2016', '', '2016-10-28', '2018-10-25', 'JL.BATUJAJAR PERMAI II NO.27', '', '', 150, '', 106, 'GIP', 8, 3, 3, '-', '0', '-', 15, 80, 'SCH LUMBERGER', 'WSG80', '0', 'ADA', '', '2016-03-28', '2018-03-28', 6, 53, 14.80, 107, 29, 2.80, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (169, 212, '3', 'SI-2', 1, '546.2/013-AIR TANAH', '', '2019-02-06', '2019-02-06', 'JL. RUMAH SAKIT NO. 114 KEC UJUNGBERUNG', '', '', 0, '', 0, '-', 0, 0, 0, '-', '0', '-', 0, 0, '-', '0', '0', '0', '', '2019-02-06', '2019-02-06', 6, 55, 52.40, 107, 41, 32.10, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (170, 217, '', 'SB 3', 1, '546.2/844/10.1.01.2/BPMPT/2017', '', '2015-12-29', '2017-12-15', 'JL.CIBALIGO NO.33 KEL.CIBEUREUM KEC.CIMAHI SELATAN', '', '', 150, '', 135, '-', 8, 0, 3, '-', '-', '-', 7, 120, 'ITRON', 'D130H30172', '-', '510.3/5872/UAPV.2', '', '2015-09-03', '2015-09-03', 78, 24, 62.00, 923, 59, 48.00, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (171, 218, '', 'SB-1', 1, '546.2/675/10.1.01.2/BPMPT/2016', '', '2016-08-04', '2018-08-04', 'JL. RUMAH SAKIT NO 45-47 SUKAMULYA  KEC. CINAMBO ', '', '', 80, '', 153, '-', 6, 0, 2, '-', '-', '-', 5, 60, 'SENSUS ', '13001490', '-', '-', '', '0000-00-00', '0000-00-00', 6, 55, 3.64, 107, 41, 50.27, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (172, 217, '2', 'SB 4', 1, '546.2/843/10.1.01.2/BPMPT/2015', '', '2015-12-29', '2017-12-15', 'JL.CIBALIGO NO.33 KEL.CIBEUREUM KEC.CIMAHI SELATAN', '', '', 150, '', 135, '-', 8, 0, 3, '-', '-', '-', 7, 120, 'ACTARIS', 'S08WHDK332', '-', '510.3/5872/UAPV.2', '', '2015-09-03', '2015-09-03', 78, 2, 99.99, 923, 58, 87.00, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (173, 38, '2', 'SB-1', 1, '546.2/956/10.1.01.2/BPMPT/2016', '', '2016-10-28', '2018-10-25', 'BATUJAJAR PERMAI II NO.27', '', '', 150, '', 106, 'GIP', 8, 3, 3, '-', '-', '-', 15, 80, 'SCH LUMBERGER', 'WSG80', '-', 'ADA', '', '2016-03-28', '2018-03-28', 6, 53, 16.80, 107, 29, 2.80, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (174, 219, '1', 'SP-1', 1, '546.2/kep.871-BINPR-OD/2001', '', '2001-01-11', '2002-01-01', 'JL. RUMAH SAKIT NO. 110 KEC UJUNGBERUNG', '', '', 50, '', 2.7, '-', 4, 0, 0, '-', '0', '-', 0.75, 10, 'LINFLOW/DN25', 'DN25', '0', '0', '', '2019-02-06', '2019-02-06', 6, 55, 49.28, 107, 41, 34.66, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (175, 221, '5', 'ASR-1', 1, '546.2/597/10.1.01.2/BPMPT/2015', '', '2015-09-08', '2017-08-20', 'DESA PADAASIH KECAMATAN CIBOGO, KAB. SUBANG.', '', '', 120, '', 71, '-', 0, 0, 0, '-', '-', '-', 0, 0, 'SCHLUMBERGER', '99WWK19087', '0', '510.3/3257/UAPV.2', '', '2015-05-27', '0000-00-00', 6, 32, 23.22, 107, 50, 58.43, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (176, 222, '2', 'SB 1', 1, '546.2/85/29.1.03.2a/DPMPTSP/2019', '', '2019-01-11', '2021-01-11', 'JL.CIBALIGO NO.165 KEL.CIBEUREUM KEC.CIMAHI SELATAN', '', '', 180, '', 110, 'GIP', 8, 0, 2, '-', '-', '-', 20, 150, 'SCHLUMBERGER', '-', '-', '557/11009/UAPV.2', '', '2018-11-09', '2021-11-09', 6, 54, 41.80, 107, 33, 5.70, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (177, 220, '1', 'SP1', 1, '546.2/240/10.01.1.2/BPMPT/2016', '', '2016-03-16', '2018-03-16', 'BATUNUNGGAL INDAH II NO 48 MENGGER', '', '', 50, '', 3.3, '-', 4, 0, 1.5, '-', '-', '-', 5, 0, 'WESTERHOUSE ', '489511529', '-', '-', '', '0000-00-00', '0000-00-00', 6, 57, 46.35, 107, 37, 27.70, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (178, 222, '2', 'SB 2', 1, '546.2/84/29.1.03.2a/DPMPTS/2019', '', '2019-01-11', '2021-01-11', 'JL.CIBALIGO NO.165 KEL.CIBEUREUM KEC.CIMAHI SELATAN', '', '', 180, '', 129, 'GIP', 8, 0, 3, '-', '-', '-', 15, 0, 'SCHLUMBERGER', '-', '-', '557/11010/UAPV.2', '', '2018-11-09', '2021-11-09', 6, 54, 43.46, 107, 33, 6.22, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (179, 221, '5', 'ASR-2', 1, '546.2/598/10.1.01.2/BPMPT/2015', '', '2015-09-08', '2017-08-20', 'DESA PADAASIH KECAMATAN CIBOGO, KAB. SUBANG.', '', '', 120, '', 53, '-', 0, 0, 0, '-', '0', '-', 0, 0, 'POWGAZ', '22743593', '0', '510.3/3256/UAPV.2', '', '2015-05-27', '0000-00-00', 6, 32, 21.23, 107, 51, 0.66, 5, NULL, NULL);
INSERT INTO `t_sumur` VALUES (180, 220, '1', 'SP-2', 1, '546.2/241/10.1.01.2/BPMPT/2016', '', '2016-03-16', '2018-03-16', 'BATUNUNGGAL INDAH II NO 48 MENGGER', '', '', 50, '', 3.3, '-', 4, 0, 1.5, '-', '-', '-', 5, 0, 'WESTERHOUSE ', '48951258', '-', '-', '', '0000-00-00', '0000-00-00', 6, 57, 47.58, 107, 37, 29.84, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (181, 222, '2', 'SB 3', 1, '546.2/83/29.1.03.2a/DPMPTS/2019', '', '2019-01-11', '2021-01-11', 'JL.CIBALIGO NO.165 KEL.CIBEUREUM KEC.CIMAHI SELATAN', '', '', 180, '', 88, 'GIP', 8, 0, 3, '-', '-', '-', 20, 0, 'SCHLUMBERGER', '83CIK00075', '-', '557/10729/UAPV.2', '', '2018-10-31', '2021-10-31', 6, 54, 43.97, 107, 33, 6.04, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (182, 44, '2', 'SB-1', 1, '546.2/890/29.1.03.2a/DPMPTSP/2018', '', '2018-11-13', '2020-11-13', 'JL.RAYA CIMAREME BATUJAJAR NO.171 KM.2,3', '', '', 150, '', 59, 'PPC', 6, 2, 2, '-', '-', 'SUBMERSIBLE', 3, 0, 'BR', '16080090', '-', 'ADA', '', '0000-00-00', '0000-00-00', 6, 52, 52.10, 107, 30, 18.80, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (183, 222, '2', 'SB 4', 1, '546.2/82/29.1.03.2a/DPMPTSP/2019', '', '2019-01-11', '2021-01-11', 'JL.CIBALIGO NO.165 KEL.CIBEUREUM KEC.CIMAHI SELATAN', '', '', 180, '', 103.2, 'GIP', 8, 0, 3, '-', '-', '-', 15, 0, 'SCHLUMBERGER', '89 AKK 112', '-', '557/11012/UAPV.2', '', '2018-11-09', '2021-11-09', 6, 54, 44.00, 107, 33, 3.87, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (184, 223, '5', 'ASR-1', 1, '546.2/648/10.1.01.2/BPMPT/2015', '', '2015-09-29', '2017-08-25', 'DESA PADAASIH KECAMATAN CIBOGO, KAB. SUBANG.', '', '', 120, '', 85, '-', 0, 0, 0, '-', '0', '-', 0, 0, 'BR', '65937260', '0', '510.3/3262/UAPV-2', '', '2015-05-27', '0000-00-00', 6, 30, 12.52, 107, 48, 9.88, 5, NULL, NULL);
INSERT INTO `t_sumur` VALUES (185, 44, '2', 'SB-2', 1, '546.2/881/29.1.03.2a/DPMPTSP/2018', '', '2018-11-13', '2020-11-13', 'JL.RAYA CIMAREME BATUJAJAR NO.171 KM.2,3', '', '', 130, '', 109, 'PPC', 6, 2, 2, '-', '-', 'SUBMERSIBLE', 7, 0, 'SCH LUMBERGER', 'WEG50', '-', '-', '', '0000-00-00', '0000-00-00', 6, 52, 51.80, 107, 30, 17.30, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (186, 224, '1', 'SP-1', 1, '546.2/134-BPLH ', '', '2003-07-20', '2005-07-20', 'JL. LMU. NURTANIO 91-93, KEC. ANDIR', '', '', 43, '', 40, '-', 4, 0, 1, '-', '-', '-', 500, 0, 'SCHLUM BURGER', '96WEE0455', '-', '-', '', '0000-00-00', '0000-00-00', 6, 54, 38.18, 107, 34, 43.06, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (187, 223, '5', 'ASR-2', 1, '546.2/649/10.1.01.2/BPMPT/2015', '', '2015-09-29', '2017-08-25', 'DESA PADAASIH KECAMATAN CIBOGO, KAB. SUBANG.', '', '', 120, '', 85, '-', 0, 0, 0, '-', '0', '-', 0, 0, 'BR', '65937139', '0', '510.3/3263/UAPV.2', '', '2015-05-27', '0000-00-00', 6, 30, 8.27, 0, 48, 8.23, 5, NULL, NULL);
INSERT INTO `t_sumur` VALUES (188, 225, '1', 'SP-1', 1, '546.2/1243/10.1.01.2/BPMPT/2016', '', '2016-11-22', '2018-11-22', 'JL. PANGARITAN-MEKAR MULYA NO. 1, KEC. PANYILEUKAN', '', '', 40, '', 4, '-', 4, 0, 1, '-', '0', '-', 1, 0, 'SCHLUMBERGER', '96EC300447', '0', '510.3/2971/UAPV-2', '', '2016-05-02', '2018-05-02', 6, 55, 25.90, 107, 41, 51.00, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (189, 226, '5', 'ASR-1', 1, '546.2/600/10.1.01.2/BPMPT/2015', '', '2015-09-08', '2017-08-20', 'DESA PADAASIH KECAMATAN CIBOGO, KAB. SUBANG.', '', '', 120, '', 40, '-', 0, 0, 0, '-', '0', '-', 0, 0, 'POWGAZ', '06065432', '0', '510.3/3254/UAPV-2', '', '2015-05-27', '0000-00-00', 6, 32, 23.80, 107, 51, 22.79, 5, NULL, NULL);
INSERT INTO `t_sumur` VALUES (190, 227, '1', 'SP-1', 1, '546.2/601/10.1.02.0/DPMPTSP/2017', '', '2017-10-30', '2019-10-30', 'JL. MEKAR RAYA KAV.8, KEC. RANCASARI', '', '', 40, '', 5, '-', 4, 0, 1, 'SENTRIFUGAL ', '-', '-', 0, 0, '-', '-', '-', '-', '', '0000-00-00', '0000-00-00', 6, 55, 51.95, 107, 42, 8.41, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (191, 228, '2', 'SB 1', 1, '546.2/881/10.1.01.2/BPMPT/2016', '', '2016-09-28', '2018-09-14', 'JL.CIBALIGO NO.157 KEL.CIBEUREUM KEC.CIMAHI SELATAN', '', '', 150, '', 58.4, '-', 8, 0, 3, '-', '-', '-', 15, 120, 'BR', '2002118262', '-', '510.3/2359/UAPV.2', '', '2016-04-11', '2018-04-11', 78, 25, 12.00, 923, 57, 45.00, 2, NULL, NULL);
INSERT INTO `t_sumur` VALUES (192, 226, '5', 'ASR-2', 1, '546.2/601/10.1.01.2/BPMPT/2015', '', '2015-09-08', '2017-08-20', 'DESA PADAASIH KECAMATAN CIBOGO, KAB. SUBANG.', '', '', 120, '', 30, '-', 0, 0, 0, '-', '-', '-', 0, 0, 'POWGAZ', '06065468', '0', '510.3/3255/UAPV-2', '', '2015-05-27', '0000-00-00', 6, 32, 20.48, 107, 51, 24.07, 5, NULL, NULL);
INSERT INTO `t_sumur` VALUES (193, 228, '2', 'SB 2', 1, '546.2/882/10.1.01.2/BPMPT/2016', '', '2016-09-28', '2018-09-14', 'JL. CIBALIGO NO.157 KEL.CIBEUREUM KEC.CIMAHI SELATAN', '', '', 150, '', 58.4, '-', 8, 0, 3, '-', '-', '-', 15, 120, 'BR', '041129103', '-', '510.3/2351/UAPV.2', '', '2016-04-11', '2018-04-11', 7, 82, 99.99, 923, 57, 2.00, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (194, 229, '1', 'SP-1', 1, '546.2/60/10.1.02.0/DPMPTSP/2017', '', '2017-10-30', '2020-10-30', 'JL. MEKAR RAYA KAWASAN INDUSTRI MEKER MULYA', '', '', 40, '', 0, '-', 4, 0, 1, 'SENTRIFUGAL', '0', '-', 30, 0, '-', '-', '0', '0', '', '2019-02-06', '2019-02-06', -6, 55, 51.95, 107, 42, 8.41, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (195, 228, '2', 'SB 3', 1, '546.2/883/10.1.01.2/BPMPT/2016', '', '2016-09-28', '2018-09-14', 'JL.CIBALIGO NO.157 KEL.CIBEUREUM KEC.CIMAHI SELATAN', '', '', 200, '', 58.32, '-', 8, 0, 3, '-', '-', '-', 20, 150, 'BR', '030956012', '-', '510.3/2350/UAPV.2', '', '2016-04-11', '2018-04-11', 7, 82, 99.99, 923, 57, 63.00, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (196, 228, '2', 'SB 4', 1, '546.2/884/10.1.01.2/BPMPT/2016', '', '2016-09-28', '2018-09-14', 'JL.CIBALIGO NO.157 KEL.CIBEUREUM KEC.CIMAHI SELATAN', '', '', 150, '', 64.8, '-', 8, 0, 3, '-', '-', '-', 15, 120, 'BR', '031115032', '-', '510.3/2349/UAPV.2', '', '2016-04-11', '2018-04-11', 7, 82, 99.99, 923, 55, 52.00, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (197, 233, '1', 'SP-1', 1, '546.2/361/10.1.02.0/DPMPTSP/2018', '', '2018-04-02', '2020-04-02', 'JL.SOEKARNO HATTA NO.760', '', '', 24, '', 0, '0', 0, 0, 0, 'SENTRIFUGAL', '0', '-', 30, 0, '-', '0', '0', '0', '', '2019-02-06', '2019-02-06', -6, 56, 9.63, 107, 42, 40.31, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (198, 233, '1', 'SP-2', 1, '546.2/362/10.1.02.0/DPMPTSP/2018', '', '2018-04-02', '2020-04-02', 'JL.SOEKARNO HATTA NO.760', '', '', 24, '', 0, '-', 0, 0, 0, 'SENTRIFUGAL', '0', '-', 30, 0, '-', '-', '0', '0', '', '2019-02-06', '2019-02-06', -6, 56, 11.91, 107, 42, 41.53, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (200, 188, '1', 'SP-1', 1, '546.2/824/29.1.02.0b/DPMPTSP/2018', '', '2018-06-08', '2020-06-08', 'JL.TANGKUBAN PERAHU RT01/04 CIBOGO', '', '', 40, '', 0, 'PVC', 4, 1, 1, '-', '0', 'JET PUMP', 1, 24, 'WESTHOUSE', '170316079', '19', 'ADA', '', '0000-00-00', '0000-00-00', 6, 48, 41.26, 107, 38, 4.73, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (201, 232, '2', 'SB-1', 1, '546.2/83/DU-SIPA/GSDM/2014', '', '2014-07-10', '2015-07-21', 'DESA SUKASARI, KEC. DAWUAN, SUBANG.', '', '', 120, '', 117, '-', 6, 2, 0, '-', '0', '-', 5, 0, '-', '0', '0', '0', '', '0000-00-00', '0000-00-00', 6, 32, 26.98, 107, 43, 43.24, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (202, 234, '2', 'SB 1', 1, '546.2/353/29.1.03.0d/DPMPTSP/2018', '', '2018-09-13', '2020-09-13', 'JL. CIBALIGO KM. 1,8 RT02 RW09 KEL.UTAMA KEC.CIMAHI SELATAN', '', '', 220, '', 85, 'GIP', 8, 0, 3, '-', '-', '-', 15, 180, 'BR', '20005093', '-', '-', '', '2019-02-06', '2019-02-06', 6, 54, 45.91, 107, 32, 51.78, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (203, 232, '2', 'SB-2', 1, '546.2/84/DU-SIPA/GSDM/2014', '', '2014-07-10', '2015-07-21', 'DESA SUKASARI, KEC. DAWUAN, SUBANG.', '', '', 120, '', 117, '-', 6, 2, 0, '-', '0', '-', 5, 0, '-', '0', '0', '0', '', '0000-00-00', '0000-00-00', 6, 32, 21.08, 107, 43, 44.94, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (204, 230, '2', 'SB-1', 1, '546.2/548/10.1.01.0/BPMPT/2016', '', '2018-12-02', '2020-12-02', 'PERUM GRIYA CAKARA BLOK F RT 05 RW 05 KEL CISARANTEN ', '', '', 120, '', 0, '-', 8, 0, 2, 'SUBMERSIBLE', '-', '-', 5, 85, '-', '-', '-', '-', '', '0000-00-00', '0000-00-00', 6, 55, 50.33, 107, 40, 23.46, 2, NULL, NULL);
INSERT INTO `t_sumur` VALUES (205, 234, '2', 'SB 2', 1, '546.2/353/29.1.03.0d/DPMPTSP/2018', '', '2018-09-13', '2020-09-13', 'JL. CIBALIGO KM. 1,8 RT02 RW09 KEL.UTAMA KEC.CIMAHI SELATAN', '', '', 200, '', 85, 'GIP', 8, 0, 3, '-', '-', '-', 0, 0, 'ACTARIS', 'D8XF055972', '-', '-', '', '2019-02-06', '2019-02-06', 6, 54, 45.91, 107, 32, 51.78, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (206, 206, '2', 'SB-3', 1, '546.2/1012/10.1.01.2/BPMPT/2016', '', '2016-11-03', '2018-10-25', 'JL.RAYA CARINGIN NO.353 RT01/10', '', '', 150, '', 131, '-', 0, 0, 0, '-', '0', '-', 0, 0, 'ELSTER', '14W710359', '0', 'ADA', '', '2015-05-05', '0000-00-00', 6, 51, 15.16, 107, 29, 43.36, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (207, 234, '2', 'SB 3', 1, '546.2/354/29.1.03.0d/DPMPTSP/2018', '', '2018-09-13', '2020-09-13', 'JL.CIBALIGO KM.1,8 RT2 RW09 KEL.UTAMA KEC.CIMAHI SELATAN', '', '', 220, '', 63, 'GIP', 8, 0, 3, '-', '-', '-', 15, 180, 'BR', '06070629', '-', '-', '', '2019-02-06', '2019-02-06', 6, 54, 44.69, 107, 32, 52.53, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (208, 235, '2', 'SB-1', 1, '546.2/85/DU-SIPA/GSDM/2014', '', '2014-07-10', '2016-07-22', 'DESA SUMBER SARI, KEC. PAGADEN, KAB. SUBANG.', '', '', 120, '', 150, '-', 6, 2, 0, '-', '0', '-', 5, 0, '-', '0', '0', '0', '', '0000-00-00', '0000-00-00', 6, 25, 50.01, 107, 46, 53.32, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (209, 235, '2', 'SB-2', 1, '546.2/86/DU-SIPA/GSDM/2014', '', '2014-07-10', '2016-07-22', 'DESA SUMBER SARI, KEC. PAGADEN, KAB. SUBANG.', '', '', 120, '', 150, '-', 6, 2, 0, '-', '0', '-', 5, 0, '-', '0', '0', '0', '', '0000-00-00', '0000-00-00', 6, 25, 49.11, 107, 46, 52.68, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (210, 234, '2', 'SB 4', 1, '546.2/1355/29.1.03.0d/DPMPTSP/2018', '', '2018-09-13', '2020-09-13', 'JL.CIBALIGO KM.1,8 RT2 RW09 KEL.UTAMA KEC.CIMAHI SELATAN', '', '', 220, '', 63.36, 'GIP', 8, 0, 3, '-', '-', '-', 15, 186, 'BR', '2000125014', '-', '-', '', '2019-02-06', '2019-02-06', 6, 54, 44.44, 107, 32, 52.56, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (211, 236, '5', 'ASR-1', 1, '546.2/599/10.1.01.2/BPMPT/2015', '', '2015-10-08', '2017-08-25', 'DESA WANASARI, KEC. CIPUNAGARA, KAB. SUBANG.', '', '', 120, '', 85, '-', 0, 0, 0, '-', '0', '-', 0, 0, 'SCHLUMBERGER', '93AIK50503', '0', '510.3/3253/UAPV-2', '', '2015-05-27', '0000-00-00', 6, 31, 47.69, 107, 51, 21.80, 5, NULL, NULL);
INSERT INTO `t_sumur` VALUES (212, 206, '2', 'SB-4', 1, '546.2/1013/10.1.01.2/BPMPT/2016', '', '2016-11-03', '2018-10-25', 'JL.RAYA CARINGIN NO.353 RT01/10', '', '', 150, '', 180, '-', 0, 0, 0, '-', '0', '-', 0, 0, 'SCH LUMBERGER', '97WWO44845', '0', 'ADA', '', '2015-06-05', '0000-00-00', 6, 51, 14.20, 107, 29, 45.73, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (213, 237, '2', 'SB 2', 1, '546.2/68/10.1.01.2/DPMPTSP/2018', '', '2017-03-06', '2019-03-06', 'JL.CIBALIGO KM 1.75 KEL.UTAMA KEC.CIMAHI', '', '', 200, '', 0, '-', 8, 0, 3, '-', '-', '-', 10, 180, 'SCHLUMBERGER', '-', '-', '-', '', '2019-02-06', '2019-02-06', 7, 81, 99.99, 923, 53, 78.00, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (214, 238, '1', 'SP-1', 1, '546.2/366/10.1.02.0/DPMPTSP/2018', '', '2018-04-02', '2020-04-02', 'JL. HALTE ANDIR NO. 95 A/77, KEC. ANDIR', '', '', 30, '', 0, 'PVC', 4, 0, 1, 'SENTRIFUGAL ', '-', '250', 30, 0, '-', '-', '-', '-', '', '0000-00-00', '0000-00-00', -6, 54, 42.64, 107, 34, 43.62, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (215, 239, '1', 'SP-1', 1, '546.2/8.375-bplm', '', '2007-08-01', '2009-08-01', 'HERGAR MANAH NO.2 ', '', '', 89, '', 3.3, '0', 4, 1.5, 1.5, 'JETPUMP', '0', '-', 30, 0, '-', '0', '0', '0', '', '2019-02-06', '2019-02-06', 6, 52, 55.56, 107, 36, 9.63, 2, NULL, NULL);
INSERT INTO `t_sumur` VALUES (216, 236, '5', 'ASR-2', 1, '546.2/660/10.1.01.2/BPMPT/2015', '', '2015-10-08', '2017-08-25', 'DESA WANASARI, KEC. CIPUNAGARA, KAB. SUBANG.', '', '', 120, '', 85, '-', 0, 0, 0, '-', '-', '-', 0, 0, 'SCHLUMBERGER', '83CIK00989', '0', '510.3/3252/UAPV-2', '', '2015-05-27', '0000-00-00', 6, 31, 43.06, 107, 51, 22.40, 5, NULL, NULL);
INSERT INTO `t_sumur` VALUES (217, 237, '2', 'SB 4', 1, '546.2/69/10.1.01.2/DPMPTSP/2017', '', '2017-03-06', '2019-03-06', 'JL.CIBALIGI KM 1,75 KEL.UTAMA KEC.CIMAHI', '', '', 200, '', 0, '-', 8, 0, 3, '-', '-', 'SUBMERSIBLE', 10, 180, '-', '-', '-', '-', '', '2019-02-06', '2019-02-06', 7, 81, 99.99, 923, 52, 52.00, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (218, 240, '2', 'SB-1', 1, '503.546.2/211/BPPT/2012', '', '2012-04-20', '2013-04-26', 'JL. SOEKARNO HATTA 578, KEC. BANDUNG KIDUL', '', '', 60, '', 26, '0', 6, 1, 1, '-', '0', '-', 1, 0, 'SCHLUMBERGER', '0', '1', '0', '', '2019-02-06', '2019-02-06', 6, 56, 29.54, 107, 39, 18.64, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (219, 237, '2', 'SB 5', 1, '546.2/70/10.1.01.2/DPMPTSP/2018', '', '2017-03-06', '2019-03-06', 'JL. CIBALIGO KM. 1,75 KEL.UTAMA KEC.CIMAHI ', '', '', 200, '', 0, '-', 8, 0, 3, '-', '-', 'SUBMERSIBLE', 10, 180, '-', '-', '-', '-', '', '2019-02-06', '2019-02-06', 7, 81, 99.99, 923, 53, 2.00, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (220, 106, '2', 'SB-1', 1, '546.2/257/10.1.02.2/DPMPTSP/2017', '', '2017-06-16', '2019-06-16', 'JL.INDUSTRI CIMAREME II NO.6', '', '', 200, '', 405, '-', 8, 0, 2, '-', '0', 'SUBMERSIBLE', 10, 0, 'WETHOUSE', '1105004481', '-', 'ADA', '', '0000-00-00', '0000-00-00', 6, 51, 55.36, 107, 29, 43.08, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (221, 237, '2', 'SB 6', 1, '503.26/0060HER/1452/KPPT/2014', '', '2019-02-06', '2019-02-06', 'JL.CIBALIGO KM. 1,75 KEL.UTAMA KEC.CIMAHI', '', '', 0, '', 79.2, '-', 0, 0, 0, '-', '-', '-', 0, 0, 'SCHLUMBERGER', '96WIO45395', '-', '-', '', '2019-02-06', '2019-02-06', 6, 54, 22.58, 107, 32, 49.94, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (222, 106, '2', 'SB-2', 1, '546.2/256/10.1.02.2/DPMPTSP/2017', '', '2017-06-16', '2019-06-16', 'JL.INDUSTRI CIMAREME II NO.6', '', '', 200, '', 405, '-', 10, 0, 3, '-', '0', '-', 10, 0, 'BR.LXLG.80', '6536966', '0', 'ADA', '', '0000-00-00', '0000-00-00', 6, 51, 52.57, 107, 29, 41.53, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (223, 243, '', 'SP-1', 1, '546.2/308-BPLH ', '', '2006-03-16', '2007-03-15', 'JL. BABAKAN CIPARAY NO. 247, KEC. BABAKAN CIPARAY', '', '', 40, '', 5, '-', 4, 0, 3.4, '-', '0', '-', 400, 0, 'LINFLOW ', '9900658', '0', '0', '', '2019-02-06', '2019-02-06', 0, 0, 0.00, 0, 0, 0.00, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (224, 242, '2', 'SB-1', 1, '546.2/535/10.1.01.2/DPMPTSP/2017', '', '2017-09-15', '2019-09-15', 'KP. CIBEUNYING RT 24 RW 06, DESA CIPEUNDEUY, KEC. CIPEUNDEUY, KAB. SUBANG.', '', '', 120, '', 0, '-', 0, 0, 0, '-', '0', '-', 0, 0, '-', '0', '0', '0', '', '0000-00-00', '0000-00-00', 6, 29, 22.79, 107, 35, 17.41, 5, NULL, NULL);
INSERT INTO `t_sumur` VALUES (225, 241, '5', 'ASR-1', 1, '546.2/873/10.1.02.0/DMPTSP/2017', '', '2017-12-29', '2019-12-29', 'JL. SOEKARNO HATTA NO.590, KEC. BANDUNG KIDUL', '', '', 180, '', 40, '-', 6, 0, 2, 'SUBMERSIBLE', '-', '-', 0, 46, '-', '-', '-', '-', '', '0000-00-00', '0000-00-00', 6, 56, 36.57, 107, 39, 28.88, 2, NULL, NULL);
INSERT INTO `t_sumur` VALUES (226, 106, '2', 'SB-3', 1, '546.2/255/10.1.02.2/DPMPTSP/2017', '', '2017-06-16', '2019-06-16', 'JL.INDUSTRI CIMAREME II NO.6', '', '', 200, '', 405, '-', 8, 0, 3, '-', '0', '-', 10, 0, 'WESTHOUSE', 'LX.LJ80001', '-', 'ADA', '', '0000-00-00', '0000-00-00', 6, 51, 55.94, 107, 29, 37.81, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (227, 245, '1', 'SP-1', 1, '0', '', '2019-02-06', '2019-02-06', 'JL. BRAGA NO. 129, KEC. SUMUR BANDUNG', '', '', 40, '', 20, '-', 4, 1, 1, '-', '0', '-', 0.5, 0, 'BR.', '0', '0', '0', '', '2019-02-06', '2019-02-06', 6, 54, 47.37, 107, 35, 50.37, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (228, 242, '5', 'ASR-2', 1, '546.2/526/10.1.01.2/DPMPTSP/2017', '', '2017-09-11', '2019-09-11', 'KP. CIBEUNYING RT 24 RW 06, DESA CIPEUNDEUY, KEC. CIPEUNDEUY, KAB. SUBANG.', '', '', 120, '', 90, '-', 0, 0, 0, '-', '0', '-', 0, 0, '-', '0', '0', '0', '', '0000-00-00', '0000-00-00', 6, 29, 15.59, 107, 35, 18.87, 5, NULL, NULL);
INSERT INTO `t_sumur` VALUES (229, 241, '', 'ASR-3', 1, '546.2/799/10.1.02.0/DPMPTSP/2017', '', '2017-12-29', '2019-12-29', 'JL. SOEKARNO HATTA NO.590, KEC. BANDUNG KIDUL', '', '', 170, '', 0, 'PVC', 6, 0, 2, '-', '-', '-', 7.5, 152, '-', '-', '-', '-', '', '0000-00-00', '0000-00-00', 6, 56, 32.70, 107, 39, 29.84, 2, NULL, NULL);
INSERT INTO `t_sumur` VALUES (230, 241, '3', 'SI-1', 1, '-', '', '0000-00-00', '0000-00-00', '-', '', '', 0, '', 0, '-', 0, 0, 0, '-', '-', '-', 0, 0, '-', '', '-', '-', '', '0000-00-00', '0000-00-00', 0, 0, 0.00, 0, 0, 0.00, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (231, 245, '1', 'SP-2', 1, '0', '', '2019-02-06', '2019-02-06', 'JL. BRAGA NO. 129, KEC. SUMUR BANDUNG', '', '', 0, '', 20, '-', 4, 1, 1, '-', '-', '-', 0, 0, 'BR.', '0', '0', '0', '', '2019-02-06', '2019-02-06', 6, 54, 47.37, 107, 35, 50.36, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (232, 242, '5', 'ASR-3', 1, '546.2/527/10.1.01.2/DPMPTSP/2017', '', '2017-09-11', '2019-09-11', 'KP. CIBEUNYING RT 24 RW 06, DESA CIPEUNDEUY, KEC. CIPEUNDEUY, KAB. SUBANG.', '', '', 120, '', 90, '-', 0, 0, 0, '-', '0', '-', 0, 0, '-', '0', '0', '0', '', '0000-00-00', '0000-00-00', 6, 29, 16.80, 107, 35, 24.63, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (233, 106, '2', 'SB-4', 1, '546.2/254/10.1.02.2/DPMPTSP/2017', '', '2017-06-16', '2019-06-16', 'JL.INDUSTRI CIMAREME II NO.6', '', '', 200, '', 220, '-', 10, 0, 3, '-', '0', '-', 10, 0, 'SCH LUMBERGER', 'WSW6593CIX', '-', 'ADA', '', '0000-00-00', '0000-00-00', 6, 51, 59.51, 107, 29, 38.61, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (234, 241, '2', 'SB-1', 1, '546.2/8.438-BPLH', '', '2007-08-01', '2009-08-01', 'JL. SOEKARNO HATTA NO.590, KEC. BANDUNG KIDUL', '', '', 150, '', 0, '-', 6, 2, 2, '-', '-', '-', 5, 0, 'WESTHOUSE ', '0301001510', '-', '-', '', '0000-00-00', '0000-00-00', 6, 56, 26.60, 107, 39, 31.60, 2, NULL, NULL);
INSERT INTO `t_sumur` VALUES (235, 106, '2', 'SB-5', 1, '546.2/253/10.1.02.2/DPMPTSP/2017', '', '2017-06-16', '2019-06-16', 'JL.INDUSTRI CIMAREME II NO.6', '', '', 200, '', 220, '-', 8, 0, 3, '-', '0', '-', 10, 0, 'SCH LUMBERGER', 'WSG8096CIN', '0', 'ADA', '', '0000-00-00', '0000-00-00', 6, 51, 59.51, 107, 29, 38.61, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (236, 246, '5', 'ASR 1', 1, '546.2/531/10.1.02.2/DPMPTSP/2017', '', '2017-09-15', '2019-09-15', 'JL. CIBALIGO KM 2.1 BLOK MANCONG NO 161 KEL.MELONG KEC.CIMAHI SELATAN', '', '', 250, '', 88.2, '-', 8, 0, 2.5, '-', '-', '-', 20, 120, 'BR', '130700343', '-', '510.3/1101/UAPV.2', '', '2016-02-10', '2018-02-10', 6, 54, 58.69, 107, 32, 54.01, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (237, 242, '5', 'ASR-4', 1, '546.2/534/10.1.02.2.2/DPMPTSP/2017', '', '2017-03-09', '0000-00-00', 'KP. CIBEUNYING RT 24 RW 06, DESA CIPEUNDEUY, KEC. CIPEUNDEUY, KAB. SUBANG.', '', '', 120, '', 90, '-', 0, 0, 0, '-', '0', '-', 0, 0, '-', '0', '0', '', '', '0000-00-00', '0000-00-00', 6, 29, 20.08, 107, 35, 25.17, 5, NULL, NULL);
INSERT INTO `t_sumur` VALUES (238, 246, '5', 'ASR 2', 1, '546.2/532/10.1.02.2/DPMPTSP/2017', '', '2017-09-15', '2019-09-15', 'JL. CIBALIGO KM 2.1 BLOK MANCONG NO 161 KEL.MELONG KEC.CIMAHI SELATAN', '', '', 250, '', 88.2, '-', 8, 0, 2.5, '-', '-', '-', 20, 210, 'SCHLUMBERGER', '94 AIK 075', '-', '510.3/820/UAPV.2', '', '2016-02-24', '2018-02-24', 6, 54, 55.81, 107, 32, 56.40, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (240, 246, '5', 'ASR 3', 1, '546.2/533/10.1.02.2/DPMPTSP/2017', '', '2017-09-15', '2019-09-15', 'JL. CIBALIGO KM 2.1 BLOK MANCONG NO 161 KEL.MELONG KEC.CIMAHI SELATAN', '', '', 250, '', 88.2, '-', 8, 0, 2.5, '-', '-', '-', 20, 210, 'BR', '136700343', '-', '510.3/1101/UAPV.2', '', '2016-02-24', '2018-02-24', 6, 54, 55.86, 107, 32, 52.30, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (241, 242, '2', 'SB-5', 1, '546.2/606/10.1.01.2/BPMPT/2016', '', '2016-07-27', '2018-07-14', 'DESA CIPEUNDEUY KEC.CIPEUNDEUY KAB.SUBANG', '', '', 100, '', 108, '-', 0, 0, 0, '-', '0', '-', 0, 0, 'SCHLUMBERGER', '97WIK47516', '0', '510.3/7357/UAPV.2', '', '2015-10-27', '0000-00-00', 6, 29, 10.18, 107, 35, 21.12, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (242, 23, '2', 'SB-2', 1, '546.2/204/10.1.02.2/DPMPTSP/2017', '', '2017-06-05', '2019-06-05', 'JL.INDONESIA CIMAREME N0.08', '', '', 200, '', 80, '-', 6, 0, 0, '-', '0', 'SUBMERSIBLE', 11, 120, 'WESTHOUSE', '071132524', '-', 'ADA', '', '0000-00-00', '0000-00-00', 6, 51, 4.29, 107, 29, 49.03, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (243, 242, '2', 'SB-6', 1, '546.2/607/10.1.01.2/BPMPT/2016', '', '2016-07-27', '2018-07-14', 'DESA CIPEUNDEUY KEC.CIPEUNDEUY KAB.SUBANG', '', '', 100, '', 0, '-', 0, 0, 0, '-', '0', '-', 0, 0, '-', '0', '0', '0', '', '0000-00-00', '0000-00-00', 6, 29, 6.30, 107, 35, 22.34, 5, NULL, NULL);
INSERT INTO `t_sumur` VALUES (244, 244, '5', 'ASR 2', 1, '546.2/610/10.1.02.2/DPMPTSP/2017', '', '2017-10-23', '2019-10-23', 'JL. HEGAR LOKASI II CIBALIGO KEL.CIBEUREUM KEC.CIMAHI SELATAN', '', '', 150, '', 87.2, '-', 8, 0, 3, '-', '-', '-', 10, 0, 'SCHLUMBERGER', '96WIO08224', '-', '-', '', '2019-02-06', '2019-02-06', 6, 53, 54.48, 107, 33, 26.74, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (245, 244, '5', 'ASR 4', 1, '546.2/591/10.1.01.2/DPMPTSP/2017', '', '2017-10-10', '2019-10-10', 'JL.HEGAR LOKASI II CIBALIGO KEL.CIBEUREUM KEC.CIMAHI ', '', '', 150, '', 87.2, '-', 8, 0, 3, '-', '-', '-', 10, 0, 'SCHLUMBERGER', '96 WIO 453', '-', '-', '', '2019-02-07', '2019-02-07', 6, 53, 54.48, 107, 33, 26.74, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (246, 244, '5', 'ASR 5', 1, '546.2/592/10.1.02.2/DPMPTSP/2017', '', '2017-10-10', '2019-10-10', 'JL.HEGAR LOKASI II CIBALIGO KEL.CIBEUREUM KEC.CIMAHI ', '', '', 150, '', 88.96, '-', 8, 0, 3, '-', '-', '-', 10, 0, 'SCHLUMBERGER', '95CIN45524', '-', '-', '', '2019-02-07', '2019-02-07', 6, 53, 53.38, 107, 33, 31.59, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (247, 242, '3', 'SI-1', 1, '0', '', '0000-00-00', '0000-00-00', 'KP. CIBEUNYING, CIPEUNDEUY, SUBANG.', '', '', 0, '', 0, '-', 0, 0, 0, '-', '0', '-', 0, 0, '-', '0', '0', '0', '', '0000-00-00', '0000-00-00', 0, 0, 0.00, 0, 0, 0.00, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (248, 244, '5', 'ASR 6', 1, '546.2/593/10.1.02.2/DPMPTSP/2017', '', '2017-10-07', '2019-10-07', 'JL. HEGAR LOKASI II CIBALIGO KEL.CIBEUREUM KEC.CIMAHI SELATAN', '', '', 150, '', 63.36, '-', 8, 0, 3, '-', '-', '-', 10, 0, 'SCHLUMBERGER', '83CIO00077', '-', '-', '', '2019-02-07', '2019-02-07', 6, 53, 59.15, 107, 33, 27.91, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (249, 242, '3', 'SI-2', 1, '546.2/212/10.1.01.0/DPMPTSP/2017', '', '2017-07-14', '2018-01-14', 'KP. CIBEUNYING RT 02 RW 06 DESA CIPEUNDEUY, KEC. CIPEUNDEUY, KAB. SUBANG.', '', '', 120, '', 0, '-', 6, 0, 0, '-', '0', '-', 0, 30, '-', '0', '0', '0', '', '0000-00-00', '0000-00-00', 6, 29, 16.70, 107, 35, 23.00, 5, NULL, NULL);
INSERT INTO `t_sumur` VALUES (250, 248, '1', 'SP-1', 1, '546.2/KEP.871-BINPROV/2001', '', '2001-01-01', '2002-01-01', 'JL. HOLIS NO.276', '', '', 40, '', 3.5, '0', 4, 0, 1, '1', '0', '-', 1, 0, 'AMICO', 'A516012547', '0', '0', '', '2019-02-07', '2019-02-07', 6, 55, 50.95, 107, 34, 19.88, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (251, 247, '5', 'ASR-1', 1, '503.546.2/961/BPPT2013', '', '2013-09-10', '2014-09-10', 'JL. JENDERAL GATOT SUBROTO NO. 289', '', '', 150, '', 72, '-', 6, 0, 2, '-', '-', '-', 7, 90, 'SCHLUM BURGER', '95CIK49888', '-', '-', '', '0000-00-00', '0000-00-00', 6, 55, 35.83, 107, 38, 8.28, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (252, 242, '3', 'SI-3', 1, '546.2/808/29.10.1.0c/DPMPTSP/2018', '', '0000-00-00', '0000-00-00', 'KP. CIBEUNYING, CIPEUNDEUY, SUBANG.', '', '', 120, '', 0, 'PVC', 6, 6, 0, '-', '0', '-', 0, 0, '-', '0', '0', '0', '', '0000-00-00', '0000-00-00', 6, 29, 25.42, 107, 35, 18.10, 5, NULL, NULL);
INSERT INTO `t_sumur` VALUES (253, 242, '4', 'PANTAU-1', 1, '0', '', '0000-00-00', '0000-00-00', '-', '', '', 0, '', 0, '-', 0, 0, 0, '-', '0', '-', 0, 0, '-', '0', '0', '0', '', '0000-00-00', '0000-00-00', 0, 0, 0.00, 0, 0, 0.00, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (254, 244, '5', 'ASR 8', 1, '546.2/592/10.1.02.2/DPMPTSP/2017', '', '2017-10-10', '2019-10-10', 'JL. HEGAR LOKASI II KEL.CIBEUREUM KEC.CIMAHI SELATAN', '', '', 150, '', 63.36, '-', 8, 0, 3, '-', '-', '-', 10, 0, 'SCHLUMBERGER', '-', '-', '-', '', '2019-02-07', '2019-02-07', 6, 53, 50.82, 107, 33, 30.08, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (255, 247, '5', 'ASR-2', 1, '503.546.2/962/BPPT2013', '', '2013-09-10', '2014-09-10', 'JL. JENDERAL GATOT SUBROTO NO. 289', '', '', 150, '', 72, '-', 6, 0, 2, '-', '-', '-', 5, 85, 'SCHLUM BURGER', '-', '-', '-', '', '0000-00-00', '0000-00-00', 6, 55, 26.71, 107, 38, 8.98, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (256, 247, '5', 'ASR-3', 1, '503.546.2/963/BPPT2013', '', '2013-09-10', '2014-09-10', 'JL. JENDERAL GATOT SUBROTO NO. 289', '', '', 150, '', 72, '-', 6, 0, 2, '-', '-', '-', 10, 105, 'ITRON', 'D150F30131', '-', '-', '', '0000-00-00', '0000-00-00', 6, 55, 23.87, 107, 38, 10.10, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (257, 247, '5', 'ASR-4', 1, '503.546.2/965/BPPT2013', '', '2013-09-10', '2014-09-10', 'JL. JENDERAL GATOT SUBROTO NO. 289', '', '', 150, '', 72, '-', 6, 0, 2, '-', '-', '-', 10, 102, 'ITRON', 'D160F31066', '-', '-', '', '0000-00-00', '0000-00-00', 6, 55, 25.45, 107, 38, 13.04, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (258, 249, '2', 'SB-1', 1, '503.546.2/1131/BPPT/2011', '', '2011-11-10', '2012-11-10', 'JL.SOEKARNO HATTA NO.791', '', '', 100, '', 70, '-', 6, 0, 2, '-', '0', '-', 3, 42, 'SENSUS', '1101088', '0', '0', '', '2019-02-07', '2019-02-07', 6, 55, 59.11, 107, 41, 21.41, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (259, 1, '', 'RESAPAN-', 1, '0', '', '0000-00-00', '0000-00-00', '-', '', '', 0, '', 0, '-', 0, 0, 0, '-', '0', '-', 0, 0, '-', '0', '0', '0', '', '0000-00-00', '0000-00-00', 0, 0, 0.00, 0, 0, 0.00, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (260, 249, '', 'SB-2', 1, '503.546.2/1129/BPT/2011', '', '2011-01-01', '2012-01-01', 'JL.SOEKARNO HATTA NO.791', '', '', 120, '', 100, '-', 6, 0, 2, '-', '0', '-', 3.5, 66, 'SENSUS', '15802944', '0', '0', '', '2019-02-07', '2019-02-07', 6, 55, 58.58, 107, 41, 14.99, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (261, 251, '5', 'ASR 1', 1, '546.2/150/10.1.02.0/DPMPTSP/2018', '', '2018-01-31', '2020-01-31', 'JL.CIBALIGO NO.75 KEL.CIGUGUR TENGAH KEC.CIMAHI TENGAH', '', '', 153, '', 56, '-', 8, 0, 3, '-', '-', '-', 0, 0, '-', '-', '-', '-', '', '2019-02-07', '2019-02-07', 6, 54, 6.36, 107, 33, 19.38, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (262, 253, '2', 'SB-1', 1, '503.546.2/0038/BPPT', '', '2013-02-27', '2015-02-27', 'SOEKARNO HATTA NO. 464 CIPAMOKOLAN ', '', '', 150, '', 20, '-', 6, 0, 2, '-', '-', '-', 3, 0, 'SENSUS', '13001456', '-', '-', '', '0000-00-00', '0000-00-00', 6, 56, 29.20, 107, 40, 11.60, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (263, 255, '2', 'SB 1', 1, '546.2/768/29.1.03.2a/DPMPTSP/2018', '', '2018-06-05', '2020-06-05', 'JL.CIBALIGI KM 2.1 KEL.LEUWI GAJAH KEC.CIMAHI SELATAN', '', '', 150, '', 54, '-', 8, 0, 3, '-', '-', '-', 15, 100, 'ACTARIS', 'D07XH04239', '-', '-', '', '2019-02-07', '2019-02-07', 6, 54, 51.44, 107, 32, 52.22, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (264, 252, '2', 'SB-1', 1, '546.2/382/10.1.01.2/BPMPT/2015', '', '2015-06-26', '2017-05-29', 'JL.INDUSTRI CIMAREME 1 NO.7', '', '', 80, '', 80, '-', 0, 0, 0, '-', '-', '-', 0, 0, 'BR', '100501274', '-', 'ADA', '', '2014-11-19', '0000-00-00', 6, 51, 43.88, 107, 29, 30.74, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (265, 255, '2', 'SB 2', 1, '546.2/767/29.1.03.2a/DPMPTSP/2018', '', '2018-06-05', '2020-06-05', 'JL.CIBALIGI KM 2.1 KEL.LEUWI GAJAH KEC.CIMAHI SELATAN', '', '', 150, '', 60, '-', 8, 0, 3, '-', '-', '-', 15, 90, 'ACTARIS', 'D07XH04243', '-', '-', '', '2019-02-07', '2019-02-07', 6, 54, 49.43, 107, 32, 56.37, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (266, 257, '1', 'SP-1', 1, '546.2/358-/op', '', '2000-04-28', '2002-04-28', 'CIKAMUNING KAB BANDUNG BARAT ', '', '', 40, '', 0, '-', 4, 0, 1, '-', '-', '-', 11, 0, 'BR', '17082001', '-', '-', '', '0000-00-00', '0000-00-00', 6, 49, 5.70, 107, 28, 50.76, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (267, 256, '2', 'SB-1', 1, '546.2/745/10.1.01.2/BPMPT/2016', '', '2016-08-18', '2018-08-09', 'JL. RAYA KAMARUNG, DESA SUKAMULYA, KEC. PAGADEN, SUBANG.', '', '', 120, '', 75, '-', 6, 2, 0, '-', '-', '-', 3, 0, 'SCHLUMBERGER', '0', '866345', '0', '', '0000-00-00', '0000-00-00', 6, 27, 51.10, 107, 48, 35.80, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (268, 254, '1', 'SP-1', 1, '546.2/1301/10.1.01.2/BPMPT/2016', '', '2016-11-22', '2018-11-22', 'JL. PARALON NO. 7', '', '', 30, '', 20, '-', 4, 0, 1, '-', '0', '-', 0.5, 24, 'LEHHER', '20326', '0', '0', '', '2019-02-07', '2019-02-07', 6, 55, 34.59, 107, 34, 5.01, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (269, 255, '2', 'SB 3', 1, '546.2/766/29.1.03.2a/DPMPTSP/2018', '', '2018-06-05', '2020-06-05', 'JL.CIBALIGI KM 2.1 KEL.LEUWI GAJAH KEC.CIMAHI SELATAN', '', '', 150, '', 67.84, '-', 8, 0, 3, '-', '-', '-', 15, 96, 'ACTARIS', 'D07XH04241', '-', '-', '', '2019-02-07', '2019-02-07', 6, 54, 52.02, 107, 32, 50.65, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (270, 256, '3', 'SI-1', 1, '0', '', '0000-00-00', '0000-00-00', '-', '', '', 0, '', 0, '-', 0, 0, 0, '-', '0', '-', 0, 0, '-', '0', '0', '0', '', '0000-00-00', '0000-00-00', 0, 0, 0.00, 0, 0, 0.00, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (271, 255, '2', 'SB 4', 1, '546.2/765/29.1.03.2a/DPMPTSP/2018', '', '2018-06-05', '2020-06-05', 'JL.CIBALIGI KM 2.1 KEL.LEUWI GAJAH KEC.CIMAHI SELATAN', '', '', 150, '', 67.84, '-', 8, 0, 3, '-', '-', '-', 15, 110, 'ACTARIS', 'D07XF05677', '-', '-', '', '2019-02-07', '2019-02-07', 6, 54, 48.80, 107, 32, 52.60, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (272, 258, '2', 'SB-1', 1, '546.2/362-pp', '', '2000-12-31', '2002-12-31', 'GERBANG TOL PASIR KOJA KEL CIBUNTU KEC BANDUNG KULON ', '', '', 92, '', 72, '-', 6, 0, 1.5, 'SUBMERSIBLE ', '-', '-', 3.5, 48, '-', '-', '-', '-', '', '0000-00-00', '0000-00-00', 6, 55, 41.92, 107, 25, 45.14, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (273, 254, '1', 'SP-2', 1, '546.2/1162/29.1.02.0b/DPMPTSP/2018', '', '2016-11-22', '2018-11-22', 'JL. PARALON NO. 7', '', '', 40, '', 0, '-', 4, 0, 1, '-', '0', '-', 250, 32, '0', '0', '0', '0', '', '2019-02-07', '2019-02-07', 6, 55, 44.75, 107, 34, 5.01, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (274, 259, '2', 'SB-1', 1, '546.2/360-pp', '', '2000-12-31', '2002-12-31', 'GERBANG TOL KOPO KEL CIRANGRANG KEC BABAKAN CIPARAY ', '', '', 60, '', 72, '--', 6, 0, 2, 'SUBMERSIBLE ', '-', '-', 3, 48, '-', '-', '-', '-', '', '0000-00-00', '0000-00-00', 6, 47, 8.89, 107, 34, 49.44, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (275, 40, '2', 'SB-2', 1, '546.2/895/29.1.03.2a/DPMPTSP/2018', '', '2018-11-16', '2020-11-16', 'JL.RAYA BATUJAJAR KM.2,8', '', '', 200, '', 172.125, '-', 8, 2, 2, '-', '-', 'SUBMERSIBLE', 15, 120, 'SCH LUMBERGER', '90WIN08593', '-', 'ADA', '', '0000-00-00', '0000-00-00', 6, 53, 26.96, 107, 29, 21.42, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (276, 260, '2', 'SB-1', 1, '546.2/870/29.1.03.2a/DPMPTSP/2018', '', '2018-11-09', '2020-11-09', 'DESA SAWANGAN, KEC. CIPEUNDEUY, SUBANG.', '', '', 120, '', 60, '-', 6, 0, 2, '-', '0', '-', 0, 0, 'WESTECHAUSE', '031115195', '545953', '510.3/8905/UAPV.2', '', '2015-12-07', '0000-00-00', 6, 28, 14.84, 107, 37, 16.50, 5, NULL, NULL);
INSERT INTO `t_sumur` VALUES (277, 261, '1', 'SP 1', 1, '546.2/860/29.1.02.0b/DPMPTSP/2018', '', '2018-06-29', '2020-06-29', 'JL.HEGAR LOKASI I CIBALIGO KEL.CIGUGUR TENGAH KEC.CIMAHI TENGAH', '', '', 5, '', 5, '-', 4, 0, 1, '-', '-', '-', 100, 0, 'BR', '-', '-', '-', '', '2019-02-07', '2019-02-07', 6, 54, 2.10, 107, 33, 25.42, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (278, 263, '2', 'SB-1', 1, '546.2/359-pp', '', '2000-12-31', '2002-12-31', 'GERBANG TOL BUAH BATU ', '', '', 40, '', 72, '-', 6, 0, 2, 'SUBMERSIBLE ', '-', '-', 3, 36, '-', '-', '-', '-', '', '0000-00-00', '0000-00-00', 6, 57, 37.18, 107, 38, 58.11, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (279, 262, '2', 'SB-1', 1, '546.2/123/01.1.02.0/DPMPTSP/2017', '', '2017-05-15', '2019-05-15', 'JL. DJUNDJUNAN NO. 257', '', '', 77, '', 0, '-', 6, 0, 36, 'SUBMERSIBLE', '0', '-', 3, 38, '-', '0', '0', '0', '', '2019-02-07', '2019-02-07', 6, 57, 12.31, 107, 36, 33.94, 2, NULL, NULL);
INSERT INTO `t_sumur` VALUES (280, 260, '3', 'SI-1', 1, '0', '', '0000-00-00', '0000-00-00', '-', '', '', 0, '', 0, '-', 0, 0, 0, '-', '0', '-', 0, 0, '-', '0', '0', '0', '', '0000-00-00', '0000-00-00', 0, 0, 0.00, 0, 0, 0.00, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (281, 40, '2', 'SB-3', 1, '546.2/894/29.1.03.2a/DPMPTSP/2018', '', '2018-11-16', '2020-11-16', 'JL.RAYA BATUJAJAR KM.2,8', '', '', 200, '', 162, '-', 8, 3, 3, '-', '-', 'SUBMERSIBLE', 15, 90, 'SCH LUMBERGER', '90WI044947', '-', 'ADA', '', '0000-00-00', '0000-00-00', 6, 53, 23.04, 107, 29, 24.00, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (282, 40, '2', 'SB-5', 1, '546.2/935/29.1.03.2a/DPMPTSP/2018', '', '2018-11-30', '2020-11-30', 'JL.RAYA BATUJAJAR KM.2,8', '', '', 200, '', 97.2, '-', 8, 3, 3, '-', '-', 'SUBMERSIBLE', 15, 120, 'ACFARIS', 'WSG50', '-', 'ADA', '', '0000-00-00', '0000-00-00', 6, 53, 18.20, 107, 29, 43.60, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (283, 264, '5', 'ASR 1', 1, '546.2/612/10.1.01.2/BPMPT/2015', '', '2015-09-14', '2017-09-14', 'JL. JENDRAL H.AMIR MACHMUD NO.518 KEL.CIPAGERAN KEC.CIMAHI UTARA', '', '', 150, '', 72, '-', 6, 0, 2, '-', '-', '-', 5, 0, '-', '-', '-', '510.3/7485/UAPV.2', '', '2015-06-03', '2017-06-03', 6, 51, 50.76, 107, 31, 56.53, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (284, 265, '2', 'SB-1', 1, '546.2/408/10.1.01.2/BPMPT/2016', '', '2016-05-23', '2018-05-23', 'KELURAHAN PAJAJARAN KECAMATAN CICENDO ', '', '', 120, '', 0, '-', 6, 0, 2, '-', '0', '-', 2, 70, 'SENSUS', '11001053', '0', '510.3/557/UAPV02', '', '2016-01-26', '2018-01-26', 6, 57, 0.00, 107, 37, 43.17, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (285, 266, '1', 'SP-1', 1, '546.2/380/10.1.02.0/DPMPTSP/2018', '', '2018-04-04', '2020-04-04', 'JL. SUKAJADI NO. 174, KEC. SUKAJADI', '', '', 36, '', 4, '-', 0, 0, 0, 'SENTRIFUGAL ', '-', '-', 30, 0, '-', '-', '-', '-', '', '0000-00-00', '0000-00-00', 6, 52, 57.77, 107, 35, 48.97, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (286, 267, '2', 'SB-1', 1, '546.2/885/29.1.03.2a/DPMPTSP/2018', '', '2018-11-13', '2020-11-13', 'DESA TANJUNG, KEC. CIPUNAGARA, SUBANG.', '', '', 120, '', 67.5, '-', 6, 2, 0, 'SUBMERSIBLE', '0', '-', 3, 0, 'ELSTER', '07W300348', '5743', '0', '', '0000-00-00', '0000-00-00', 6, 29, 22.25, 107, 52, 51.13, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (287, 49, '2', 'SB-1', 1, '546.2/755/10.1.01.2/BPMPT/2016', '', '2016-08-08', '2018-08-09', 'JL.RAYA GADOBANGKONG NO.97 KM.13', '', '', 200, '', 178, '-', 8, 3, 3, '-', '-', '-', 15, 0, 'WESTHOUSE', '141100055', '-', 'ADA', '', '2016-07-03', '0000-00-00', 6, 52, 4.70, 107, 31, 4.40, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (288, 267, '1', 'SP-1', 1, '546.2/399/10.1.02.0/DPMPTSP/2018', '', '0000-00-00', '2020-04-06', 'DESA TANJUNG, KEC. CIPUNAGARA, SUBANG.', '', '', 40, '', 5, '-', 4, 1, 1, '-', '0', '-', 0, 0, 'WESTHOUSE', '1702140153', '15331', '0', '', '0000-00-00', '0000-00-00', 6, 29, 16.10, 106, 52, 51.30, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (289, 268, '2', 'SB 1', 1, '503.26/0093-HER/2210/KPPT/2014', '', '2014-06-30', '2016-06-30', 'JL.CIBALIGO NO.42 RT008/008 KEL.CIGUGUR TENGAH CIMAHI TENGAH', '', '', 150, '', 52.56, '-', 6, 0, 3, '-', '-', '-', 5, 0, 'SCHLUMBERGER', '97WIK51437', '-', '-', '', '2019-02-07', '2019-02-07', 6, 53, 57.71, 107, 33, 17.97, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (290, 266, '1', 'SP-2', 1, '546.2/381/10.1.02.0/DPMPTSP/2018', '', '2018-04-04', '2020-04-04', 'JL. SUKAJADI NO. 174, KEC. SUKAJADI', '', '', 36, '', 4, '-', 0, 0, 0, 'SENTRIFUGAL ', '-', '-', 0, 0, '-', '-', '-', '-', '', '0000-00-00', '0000-00-00', 6, 52, 57.67, 107, 35, 48.79, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (291, 269, '2', 'SB-1', 1, '546.2/343/10.1.01.02/BPMPT/2016', '', '2016-04-19', '2018-04-19', 'DR. SETIABUDI NO. 266', '', '', 72, '', 58.5, '-', 6, 0, 1, '-', '0', '-', 1, 50, 'SCHLUMBERGER SM', '83BAE00502', '0', '0', '', '2019-02-07', '2019-02-07', 6, 51, 40.30, 107, 35, 45.50, 2, NULL, NULL);
INSERT INTO `t_sumur` VALUES (292, 269, '2', 'SB-2', 1, '546.2/345/BPLH', '', '2015-03-16', '2017-03-16', 'JL. SETIBUDI NO. 266', '', '', 70, '', 65, '-', 6, 0, 1, '-', '0', '-', 1, 36, 'AMICO / LX5625', 'A616012520', '0', '0', '', '2019-02-07', '2019-02-07', 0, 0, 0.00, 0, 0, 0.00, 2, NULL, NULL);
INSERT INTO `t_sumur` VALUES (293, 266, '1', 'SP-3', 1, '546.2/382/10.1.02.0/DPMPTSP/2018', '', '2018-04-04', '2020-04-04', 'JL. SUKAJADI NO. 174, KEC. SUKAJADI', '', '', 36, '', 3, '-', 0, 0, 0, 'SENTRIFUGAL ', '-', '-', 30, 0, '-', '-', '-', '-', '', '0000-00-00', '0000-00-00', 6, 52, 58.63, 107, 35, 52.05, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (294, 270, '2', 'SB-1', 1, '546.2/806/29.1.03.2a/DPMPTSP/2018', '', '2018-11-22', '2020-11-22', 'DESA WANTILAN, KEC. CIPEUNDEUY, KAB. SUBANG', '', '', 120, '', 60, '-', 6, 0, 2, 'SUBMERSIBLE', '0', '-', 0, 0, 'MEINEEKE', '801093497', '16.699', '510.3/8907/UAPV.2', '', '2015-12-07', '0000-00-00', 6, 29, 2.56, 107, 36, 59.93, 5, NULL, NULL);
INSERT INTO `t_sumur` VALUES (295, 49, '2', 'SB-2', 1, '546.2/136/10.1.02.2/DPMPTSP/2017', '', '2017-05-15', '2019-05-15', 'JL.RAYA GADOBANGKONG NO.97 KM.13', '', '', 200, '', 145, '-', 8, 0, 0, '-', '-', '-', 11, 90, 'SCH LUMBERGER', 'WSN6583CIM', '-', 'ADA', '', '0000-00-00', '0000-00-00', 6, 48, 12.84, 107, 31, 4.11, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (296, 266, '1', 'SP-4', 1, '546.2/158/10.1.01.2/BPMPT/2015', '', '2015-03-18', '2017-02-24', 'JL. SUKAJADI NO. 174, KEC. SUKAJADI', '', '', 36, '', 3, '-', 0, 0, 0, '-', '-', '-', 0, 0, 'SCHLUM BURGER', '96EC300332', '-', '510.3/2429/UAPV', '', '2014-05-05', '0000-00-00', 6, 52, 58.67, 107, 35, 50.94, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (297, 271, '2', 'SB 1', 1, '546.2/185/10.1.02.2/DPMPTSP/2017', '', '2017-06-05', '2019-06-05', 'JL.MAHAR MARTANEGARA NO.92 (JL.LEUWI GAJAH NO.92)', '', '', 150, '', 59.4, '-', 8, 0, 3, '-', '-', '-', 7.5, 100, 'MANEUICKE', '-', '-', '-', '', '2019-02-07', '2019-02-07', 6, 53, 41.62, 107, 33, 34.39, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (298, 271, '2', 'SB 2', 1, '546.2/186/10.1.02.2/DPMPTSP/2017', '', '2017-06-05', '2019-06-05', 'JL.MAHAR MARTANEGARA NO.92 (JL.LEUWI GAJAH NO.92)', '', '', 150, '', 59.4, '-', 8, 0, 3, '-', '-', '-', 7.5, 100, 'MANEUICKE', '274818091', '-', '-', '', '2019-02-07', '2019-02-07', 6, 53, 40.31, 107, 33, 11.85, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (299, 49, '2', 'SB-3', 1, '546.2/1084/10.1.01.2/BPMPT/2016', '', '2016-11-05', '2018-10-31', 'JL.RAYA GADOBANGKONG NO.97 KM.13', '', '', 200, '', 227, '-', 8, 3, 3, '-', '-', '-', 15, 80, 'POWOGAZ', '14581605', '-', 'ADA', '', '2016-06-09', '0000-00-00', 6, 51, 56.89, 107, 31, 2.16, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (300, 273, '1', 'SP-1', 1, '546.2/284/BPPT/2011', '', '2011-03-31', '2012-03-31', 'CICENDO PASIR KALIKI', '', '', 40, '', 3.4, '-', 4, 0, 1, '-', '0', '-', 0.5, 30, 'ZEHHER', '8210014416', '0', '0', '', '2019-02-07', '2019-02-07', 6, 54, 42.23, 107, 36, 10.07, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (301, 271, '2', 'SB 3', 1, '546.2/187/10.1.02.2/DPMPTSP/2017', '', '2017-06-05', '2019-06-05', 'JL.MAHAR MARTANEGARA NO.92 (JL.LEUWI GAJAH NO.92)', '', '', 150, '', 59.4, '-', 8, 0, 3, '-', '-', '-', 7.5, 100, 'MANEUICKE', '274881491', '-', '-', '', '2019-02-07', '2019-02-07', 6, 53, 40.49, 107, 33, 28.00, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (302, 273, '1', 'SP-2', 1, '546.2/285/BPPT/2011', '', '2011-03-31', '2012-03-31', 'JL. CICENDO PASIR KALIKI', '', '', 40, '', 3.4, '-', 4, 0, 1, '-', '0', '-', 0.5, 25, 'ZEHHER', '8210014416', '0', '0', '', '2019-02-07', '2019-02-07', 6, 54, 43.34, 107, 36, 10.00, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (303, 272, '2', 'SB-1', 1, '546.2/884/29.1.03.2a/DPMPTSP/2018', '', '2018-11-13', '2020-11-13', 'DESA PARIGIMULYA, KEC. CIPUNAGARA, SUBANG.', '', '', 75, '', 67.5, '-', 6, 2, 0, 'SUBMERSIBLE', '0', '-', 3, 0, 'SCHLUMBERGER', '0', '12.928', '0', '', '0000-00-00', '0000-00-00', 6, 28, 1.22, 107, 51, 29.42, 5, NULL, NULL);
INSERT INTO `t_sumur` VALUES (304, 120, '2', 'SB-1', 1, '546.2/423/10.1.02.0/DPMPTSP/2017', '', '2017-09-15', '2019-09-15', 'JL.INDUSTRI CIMAREME NO.11', '', '', 150, '', 77.4, 'GIP', 8, 0, 3, '-', '-', 'SUBMERSIBLE', 7, 0, 'SCH LUMBERGER', '49413', '-', 'ADA', '', '0000-00-00', '0000-00-00', 6, 52, 43.90, 107, 29, 52.00, 2, NULL, NULL);
INSERT INTO `t_sumur` VALUES (305, 272, '2', 'SB-2', 1, '546.2/995/29.1.01.0b/DPMPTSP/2018', '', '2018-07-16', '2020-07-16', 'DESA PARIGIMULYA, KEC. CIPUNAGARA, SUBANG.', '', '', 120, '', 30, '-', 6, 2, 0, '-', '0', '-', 0, 0, '-', '0', '0', '0', '', '0000-00-00', '0000-00-00', 6, 28, 14.40, 107, 51, 21.00, 5, NULL, NULL);
INSERT INTO `t_sumur` VALUES (306, 274, '2', 'SB 1', 1, '546.2/69/29.1.03.2a/DPMPTSP/2019', '', '2019-01-11', '2021-01-11', 'JL.MAHAR MARTANEGARA NO.158/170 KEL.BAROS KEC.CIMAHI SELATAN', '', '', 150, '', 60, 'GIP', 6, 0, 2, '-', '-', '-', 15, 120, 'SCHLUMBERGER', '921KO47270', '-', '519.2/3716/UPTML/UAPV-2', '', '2017-12-20', '2019-12-20', 6, 54, 1.62, 107, 32, 40.85, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (307, 275, '', 'SB-1', 1, '546.2/367/10.1.01.2/BPMPT/2016', '', '2016-05-04', '2018-05-04', 'JL. ASIA-AFRIKA NO. 112, KEC. LENGKONG', '', '', 150, '', 83.7, '-', 6, 2, 2, '-', '-', '-', 7, 0, 'SENSUS', '11001048', '-', '-', '', '0000-00-00', '0000-00-00', 6, 55, 19.44, 107, 36, 36.90, 2, NULL, NULL);
INSERT INTO `t_sumur` VALUES (308, 120, '2', 'SB-2', 1, '546.2/424/10.1.02.0/DPMPTSP/2017', '', '2017-09-15', '2019-09-15', 'JL.INDUSTRI CIMAREME NO.11', '', '', 150, '', 77.4, 'GIP', 8, 0, 3, '-', '-', 'SUBMERSIBLE', 7, 0, 'SCH LUMBERGER', '49419', '-', 'ADA', '', '0000-00-00', '0000-00-00', 6, 52, 48.50, 107, 29, 55.60, 2, NULL, NULL);
INSERT INTO `t_sumur` VALUES (309, 275, '2', 'SB-2', 1, '546.2/368/10.1.01.2/BPMPT/2016', '', '2016-05-04', '2018-05-04', 'JL. ASIA-AFRIKA NO. 112, KEC. LENGKONG', '', '', 150, '', 54, '-', 8, 3, 3, '-', '-', '-', 7, 0, 'SENSUS', '11001079', '-', '-', '', '0000-00-00', '0000-00-00', 6, 55, 19.19, 107, 36, 36.90, 2, NULL, NULL);
INSERT INTO `t_sumur` VALUES (310, 276, '2', 'SB-1', 1, '546.2/533/10.1.01.2/BPMPT/2015', '', '2017-09-15', '2019-09-15', 'JL. SUMATERA NO 52-54', '', '', 10.5, '', 102.6, 'GIP', 6, 0, 2, 'SUBMERSIBLE', '0', '-', 5.5, 84, 'SCHLUMBERGER', '04038250', '0', '0', '', '2019-02-07', '2019-02-07', 6, 54, 28.77, 107, 36, 43.10, 2, NULL, NULL);
INSERT INTO `t_sumur` VALUES (311, 277, '2', 'SB-1', 1, '546.2/810/29.1.03.2a/DPMPTSP/2018', '', '2018-10-22', '2020-10-22', 'JL. CARACAS, DESA CARACAS,  KEC. KALIJATI, KAB. SUBANG.', '', '', 120, '', 75, '-', 6, 0, 2, 'SUBMERSIBLE', '0', '-', 0, 0, 'MEINEEKE/WPD50', '809343099', '523.328', '510.3/8906/UAPV.2', '', '2015-12-07', '0000-00-00', 6, 28, 9.52, 107, 38, 37.04, 5, NULL, NULL);
INSERT INTO `t_sumur` VALUES (312, 276, '2', 'SB-2', 1, '-', '', '2019-02-07', '2019-02-07', '-', '', '', 0, '', 0, '-', 0, 0, 0, '-', '-', '-', 0, 0, '-', '-', '-', '-', '', '2019-02-07', '2019-02-07', 0, 0, 0.00, 0, 0, 0.00, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (313, 274, '2', 'SB 2', 1, '546.2/70/29.1.03.2a/DPMPTSP/2019', '', '2019-01-11', '2021-01-11', 'JL.MAHAR MARTANEGARA NO.158/170 KEL.BAROS KEC.CIMAHI SELATAN', '', '', 150, '', 48, 'GIP', 6, 0, 2, '-', '-', '-', 15, 120, 'SCHLUMBERGER', '92 AKO 426', '-', '519.2/3717/UPTML/UAPV-2', '', '2017-12-20', '2019-11-20', 6, 54, 0.60, 107, 32, 41.51, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (314, 274, '2', 'SB 3', 1, '546.2/71/29.1.03.2a/DPMPTSP/2019', '', '2019-01-11', '2021-01-11', 'JL.MAHAR MARTANEGARA NO.158/170 KEL.BAROS KEC.CIMAHI SELATAN', '', '', 150, '', 57.6, 'GIP', 6, 0, 2, '-', '-', '-', 15, 120, 'SCHLUMBERGER', '84 CIK 261', '-', '519.2/3718/UPTML/UAPV-2', '', '2017-12-20', '2019-11-20', 6, 53, 56.46, 107, 32, 41.52, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (315, 279, '2', 'SB-1', 1, '546.2/572/10.1.01.2/BPMPT/2015', '', '2015-08-31', '2017-08-07', 'IR. H. JUANDA 132', '', '', 0, '', 27, '-', 4, 2, 2, '-', '0', '-', 7, 0, '-', '-', '0', '0', '', '2019-02-07', '2019-02-07', 6, 56, 48.33, 107, 38, 18.36, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (316, 280, '2', 'SB-1', 1, '546.2/809/29.1.03.2a/DPMPTSP/2018', '', '2018-10-22', '2020-10-22', 'DESA CARACAS, KEC. KALIJATI, KAB. SUBANG.', '', '', 120, '', 75, '-', 6, 0, 2, 'SUBMERSIBLE', '0', '-', 0, 0, 'MEINEEKE', '801122297', '545.952', '510.3/8906/UAPV.2', '', '2015-12-07', '0000-00-00', 6, 28, 9.95, 107, 38, 3.74, 5, NULL, NULL);
INSERT INTO `t_sumur` VALUES (317, 283, '2', 'SB-1', 1, '546.2/883/29.1.03.2a/DPMPTSP/2018', '', '2018-11-13', '2020-11-13', 'DESA RANCABANGO, KEC. PATOK BESI, KAB. SUBANG.', '', '', 120, '', 0, '-', 6, 2, 0, 'SUBMERSIBLE', '0', '-', 4, 0, 'AMICO', 'AG16015007', '37.647', '0', '', '0000-00-00', '0000-00-00', 6, 22, 5.40, 107, 40, 15.15, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (318, 282, '2', 'SB 1', 1, '546.2/63/10.1.02.2/BPMPT/2015', '', '2015-02-10', '2017-01-05', 'JL.LEUWI GAJAH NO.100 KEL.CIGUGUR KEC.CIMAHI TENGAH', '', '', 127, '', 78.4, '-', 0, 0, 0, '-', '-', '-', 0, 0, 'BR', '0706050041', '-', '519.2/1658/UPTML/UAPV-2', '', '2018-02-22', '2020-02-02', 6, 53, 44.18, 107, 33, 12.79, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (319, 284, '2', 'SB-1', 1, '546.2/808/29.1.03.2a/DPMPTSP/2018', '', '2018-10-22', '2020-10-22', 'DESA CARACAS, KEC. KALIJATI, KAB. SUBANG.', '', '', 120, '', 75, '-', 6, 2, 0, 'SUBMERSIBLE', '0', '-', 3, 0, 'MEINEEKE', '0', '291.411', '0', '', '0000-00-00', '0000-00-00', 6, 28, 9.95, 107, 38, 3.74, 5, NULL, NULL);
INSERT INTO `t_sumur` VALUES (320, 280, '3', 'SI-1', 1, '0', '', '0000-00-00', '0000-00-00', '-', '', '', 0, '', 0, '0', 0, 0, 0, '-', '0', '-', 0, 0, '-', '0', '0', '0', '', '0000-00-00', '0000-00-00', 0, 0, 0.00, 0, 0, 0.00, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (321, 285, '2', 'SB 1', 1, '546.2/394/10.1.02.0/DPMPTSP/2018', '', '2018-04-06', '2020-04-06', 'JL. MAHAR MARTANEGARA NO.105 KEL.CIGUGUR TENGAH KEC.CIMAHI TENGAH', '', '', 95, '', 44.55, '-', 6, 0, 2, '-', '-', '-', 3, 60, 'BR', '-', '-', '-', '', '2019-02-07', '2019-02-07', 6, 54, 5.06, 107, 33, 4.56, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (322, 286, '', 'SB-1', 1, '546.2/913/10.1.01.2/BPMPT/2016', '', '2016-09-15', '2018-09-15', 'JL. SUDIRMAN N0 66-68', '', '', 150, '', 97.3, '-', 6, 0, 2, '-', '0', '-', 5, 90, 'SCHLUMBERGER', '83clk00808', '0', '0', '', '2019-02-07', '2019-02-07', 6, 55, 1.62, 107, 36, 5.42, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (323, 287, '2', 'SB-1', 1, '546.2/882/29.1.03.2a/DPMPTSP/2018', '', '2018-11-13', '2020-11-13', 'DESA RANCABANGO, KEC. PATOK BESI, KAB. SUBANG.', '', '', 120, '', 67.5, '-', 6, 2, 0, 'SUBMERSIBLE', '0', '-', 3, 0, 'YUTA', '08002051', '439.193', '0', '', '0000-00-00', '0000-00-00', 6, 28, 19.82, 107, 37, 23.00, 5, NULL, NULL);
INSERT INTO `t_sumur` VALUES (324, 288, '2', 'SB-1', 1, '546.2/499/10.1.01.2/BPMPT/2016', '', '2016-06-22', '2018-04-30', 'JL. GAOT SUBROTO NO 83', '', '', 80, '', 128, '-', 8, 0, 2, '-', '0', '-', 7.5, 66, 'SENSUS', '11001102', '0', '510.3/816/UAPV.2', '', '2014-02-20', '2016-02-20', 6, 55, 20.91, 107, 37, 24.77, 2, NULL, NULL);
INSERT INTO `t_sumur` VALUES (325, 114, '2', 'ASR-1', 1, '546.2/608/10.1.02.0/DPMPTSP/2017', '', '2017-10-30', '2019-10-30', 'JL.RAYA PAMUCATAN KM.22,5', '', '', 92.4, '', 142.5, 'PVC', 8, 4, 2, '-', '-', 'SUBMERSIBLE', 5.5, 72, 'BR', '2091236020', '-', 'ADA', '', '0000-00-00', '0000-00-00', 6, 49, 45.43, 107, 27, 12.42, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (326, 288, '2', 'SB-2', 1, '546.2/498/10.1.01.2/BPMPT/2016', '', '2016-06-22', '2018-04-30', 'JL. GATOT SUBROTO NO. 83', '', '', 80, '', 124, '-', 8, 0, 2, '-', '0', '-', 7.5, 80, 'SCHLUMBERGER', '1605000361', '0', '510.3/817/UAPV.2 ', '', '2014-02-20', '2016-02-20', 6, 55, 20.98, 107, 37, 26.57, 2, NULL, NULL);
INSERT INTO `t_sumur` VALUES (327, 289, '2', 'SB 3', 1, '546.2/1244/10.1.02.2/BPMPT/2016', '', '2016-12-20', '2018-11-22', 'JL.MAHAR MARTANEGARA NO.134 KEL.CIGUGUR TENGAH KEC.CIMAHI TENGAH', '', '', 150, '', 54, '-', 0, 0, 0, '-', '-', '-', 0, 0, '-', '-', '-', '510.3/3534/UAPV.2', '', '2016-06-02', '2016-06-02', 6, 53, 48.84, 107, 32, 57.71, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (328, 320, '2', 'SB-1', 1, '546.2/1108/10.1.1.2/BPMPT/2016', '', '2016-11-22', '2018-11-22', 'DESA PARIGIMULYA, KEC. CIPUNAGARA, SUBANG.', '', '', 120, '', 100, '-', 6, 6, 2, '-', '0', '-', 0, 0, 'SCHLUMBERGER', '96WIK45305', '0', '0', '', '0000-00-00', '0000-00-00', 6, 28, 1.24, 107, 50, 45.09, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (329, 320, '2', 'SB-2', 1, '546.2/1109/10.1.01.2/BPMPT/2016', '', '2016-11-22', '2018-11-22', 'DESA PARIGIMULYA, KEC. CIPUNAGARA, SUBANG.', '', '', 120, '', 90, '-', 6, 6, 2, '-', '0', '-', 0, 0, 'SCHLUMBERGER', '96WIK45305', '0', '0', '', '0000-00-00', '0000-00-00', 6, 28, 1.34, 107, 50, 40.16, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (330, 63, '2', 'SB-1', 1, '546.2/903/10.1.01.2/BPMPT/2016', '', '2016-09-28', '2018-09-14', 'JL.INDUSTRI CIMAREME III', '', '', 148, '', 50, '-', 6, 2, 2, '-', '-', '-', 2, 0, 'ITRON', 'D130R30140', '-', 'ADA', '', '2015-11-18', '0000-00-00', 6, 51, 58.88, 107, 29, 34.60, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (332, 42, '2', 'SB-1', 1, '546.2/1318/10.1.01.2/BPMPT/2016', '', '2016-12-27', '2018-11-22', 'JL.INDUSTRI CIMAREME NO.2', '', '', 200, '', 162, '-', 8, 3, 3, '-', '-', '-', 7.5, 80, 'SCH LUMBERGER', '95CIN45574', '-', 'ADA', '', '2015-11-30', '0000-00-00', 6, 51, 54.10, 107, 29, 59.90, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (333, 320, '2', 'SB-3', 1, '546.2/1110/10.1.01.2/BPMPT/2016', '', '2016-11-22', '2018-11-22', 'DESA PARIGIMULYA, KEC. CIPUNAGARA, SUBANG.', '', '', 120, '', 117, '-', 6, 6, 2, '-', '0', '-', 0, 0, 'BR', '071200660', '0', '0', '', '0000-00-00', '0000-00-00', 6, 27, 58.33, 107, 50, 41.10, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (334, 320, '3', 'SI-1', 1, '0', '', '0000-00-00', '0000-00-00', '-', '', '', 0, '', 0, '-', 0, 0, 0, '-', '-', '-', 0, 0, '-', '0', '0', '0', '', '0000-00-00', '0000-00-00', 0, 0, 0.00, 0, 0, 0.00, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (335, 291, '2', 'SB 2', 1, '546.2/1299/10.1.02.2/BPMPT/2016', '', '2016-12-27', '2018-11-22', 'JL.MAHAR MARTANEGARA NO.101 KEL.CIGUGUR TENGAH KEC.CIMAHI TENGAH', '', '', 180, '', 64, '-', 0, 0, 0, '-', '-', '-', 0, 0, '-', '-', '-', '510.3/2058/UAPV.2', '', '2016-03-29', '2018-03-29', 6, 53, 47.13, 107, 33, 7.37, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (336, 320, '', 'RESAPAN-', 1, '0', '', '0000-00-00', '0000-00-00', '-', '', '', 0, '', 0, '-', 0, 0, 0, '-', '0', '-', 0, 0, '-', '0', '0', '0', '', '0000-00-00', '0000-00-00', 0, 0, 0.00, 0, 0, 0.00, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (337, 292, '2', 'SB 1', 1, '546.2/1004/29.1.03.2a/DPMPTSP/2018', '', '2018-12-26', '2020-12-26', 'JL.MAHAR MARTANEGARA NO.51 KEL.CIGUGUR TENGAH KEC.CIMAHI TENGAH', '', '', 150, '', 65.6, '-', 0, 0, 0, '-', '-', '-', 7.5, 120, '-', '83 CUK 001', '-', '519.2/3715/UPTML/UAPV.2', '', '2017-12-20', '2019-11-20', 6, 53, 54.05, 107, 33, 36.30, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (338, 292, '2', 'SB 2', 1, '546.2/1005/29.1.03.2a/DPMPTSP/2018', '', '2018-12-26', '2020-12-26', 'JL.MAHAR MARTANEGARA NO.51 KEL.CIGUGUR TENGAH KEC.CIMAHI TENGAH', '', '', 120, '', 65.6, '-', 0, 0, 0, '-', '-', '-', 0, 0, 'SCHLUMBERGER', '96 EC 3003', '-', '510.3/7170/UAPV.2', '', '2015-10-20', '2020-10-20', 6, 53, 53.92, 107, 33, 25.35, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (339, 292, '5', 'ASR 1', 1, '546.2/979/10.1.01.2/BPMPT/2016', '', '2016-10-25', '2018-10-25', 'JL.MAHAR MARTANEGARA NO.51 KEL.CIGUGUR TENGAH KEC.CIMAHI TENGAH', '', '', 160, '', 82, '-', 0, 0, 0, '-', '-', '-', 0, 0, '-', '-', '-', '510.3/7170/UAPV.2', '', '2015-10-20', '2015-10-20', 6, 53, 44.04, 107, 33, 26.39, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (340, 292, '5', 'ASR 2', 1, '546.2/980/10.1.02.2/BPMPT/2016', '', '2016-11-03', '2018-10-25', 'JL.MAHAR MARTANEGARA NO.51 KEL.CIGUGUR TENGAH KEC.CIMAHI TENGAH', '', '', 100, '', 80, '-', 0, 0, 0, '-', '-', '-', 0, 0, '-', '-', '-', '510.3/7169/UAPV.2', '', '2015-10-20', '2015-10-20', 6, 53, 44.56, 107, 33, 26.49, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (341, 294, '2', 'SB-1', 1, '546.2/610/10.1.01.2/BPMPT/2015', '', '2015-09-14', '2017-08-25', 'DESA DARMAGA, KEC. CISALAK, SUBANG.', '', '', 0, '', 200, '-', 0, 0, 0, '-', '0', '-', 0, 0, '-', '0', '0', '0', '', '0000-00-00', '0000-00-00', 6, 42, 51.53, 107, 44, 20.30, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (342, 32, '2', 'SB-1', 1, '546.2/1308/10.1.01.2/BPMPT/2016', '', '2016-12-27', '2018-11-22', 'JL.INDUSTRI CIMAREME NO.12', '', '', 150, '', 130, '-', 8, 3, 3, '-', '0', '-', 7, 80, 'BR', '1701064', '0', 'ADA', '', '2016-07-09', '0000-00-00', 6, 51, 40.30, 107, 29, 36.13, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (343, 292, '3', 'SI 1', 1, '546.2/1450/29.1.01.0c/DPMPTSP/2018', '', '2018-09-26', '2019-03-26', 'JL.MAHAR MARTANEGARA NO.51 KEL.CIGUGUR TENGAH KEC.CIMAHI TENGAH', '', '', 150, '', 0, '-', 0, 0, 0, '-', '-', '-', 0, 0, '-', '-', '-', '-', '', '2019-02-07', '2019-02-07', 6, 53, 54.50, 107, 33, 26.70, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (344, 294, '2', 'SB-2', 1, '546.2/566/10.1.02.2/DPMPTSP/2017', '', '2017-10-03', '2019-10-03', 'JL. KP. SALAM DESA DARMAGA, KEC. CISALAK, KAB. SUBANG.', '', '', 33, '', 2.592, '-', 10, 0, 0, '-', '0', '-', 0, 0, 'SENSUS', '0800041725', '0', '0', '', '0000-00-00', '0000-00-00', 6, 42, 51.90, 107, 44, 19.40, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (345, 294, '2', 'SB-3', 1, '546.2/08/10.1.02.2/DPMPTSP/2018', '', '2018-01-16', '2020-01-16', 'JL. KP. SALAM DESA DARMAGA, KEC. CISALAK, KAB. SUBANG.', '', '', 33, '', 2.592, '-', 10, 0, 0, '-', '0', '-', 0, 0, 'BARINDO', '801100', '733', '0', '', '0000-00-00', '0000-00-00', 6, 42, 51.97, 107, 44, 18.66, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (346, 32, '2', 'SB-2', 1, '546.2/1341/10.1.01.2/BPMPT/2016', '', '2016-12-29', '2018-11-22', 'JL.INDUSTRI CIMAREME NO.12', '', '', 150, '', 81, '-', 8, 3, 3, '-', '0', '0', 7, 80, 'POWOGAZ', '21822393', '0', 'ADA', '', '2016-09-22', '0000-00-00', 6, 51, 37.89, 107, 29, 38.40, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (347, 295, '2', 'SB 1', 1, '546.2/325/10.1.02.0/DPMPTSP/2017', '', '2017-08-21', '2019-08-21', 'JL. INDUSTRI IV NO.6 CIBALIGO LEUWI GAJAH CIMAHI SELATAN', '', '', 200, '', 41, 'GIP', 8, 0, 2, '-', '-', '-', 15, 180, 'SHM', '2015120026', '-', '-', '', '2019-02-07', '2019-02-07', 6, 54, 30.78, 107, 33, 2.17, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (348, 83, '2', 'SB-1', 1, '546.2/820/10.1.01.2/BPMPT/2015', '', '2015-12-28', '2017-12-15', 'JL.RAYA PAMCATAN KM.22', '', '', 60, '', 38, '-', 0, 0, 0, '-', '0', '-', 0, 0, 'GUEST & CHRIMES', '387391', '0', 'ADA', '', '2015-05-05', '0000-00-00', 6, 49, 38.84, 107, 27, 22.00, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (349, 295, '', 'ASR 2', 1, '546.2/326/10.1.02.0/DPMPTSP/2017', '', '2017-08-21', '2019-08-21', 'JL.INDUSTRI IV NO.6 CIBALIGO LEUWI GAJAH KEL.UTAMA KEC.CIMAHI SELATAN', '', '', 200, '', 30, 'GIP', 8, 0, 2, '-', '-', '-', 15, 180, 'SHM', '140336422', '-', '-', '', '2019-02-07', '2019-02-07', 6, 54, 34.05, 107, 33, 1.74, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (350, 295, '2', 'SB 3', 1, '546.2/327/10.1.02.0/DPMPTSP/2017', '', '2017-08-21', '2019-08-21', 'JL.INDUSTRI IV NO.6 CIBALIGO LEUWI GAJAH KEL.UTAMA KEC.CIMAHI SELATAN', '', '', 200, '', 30, 'GIP', 8, 0, 2, '-', '-', '-', 15, 186, 'SHM', '2016030245', '-', '-', '', '2019-02-07', '2019-02-07', 6, 54, 29.71, 107, 33, 1.43, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (351, 296, '2', 'SB-1', 1, '546.2/17/DU-SIPA/GSDM/2014', '', '2014-01-30', '2014-12-29', 'JL. OTTO ISKANDARDINATA NO. 1 KEL. KARANGANYAR KEC, SUBANG KAB. SUBANG', '', '', 120, '', 60, 'GIF', 6, 6, 2, '-', '0', '-', 0, 0, 'BR', '100501269', '302339', '0', '', '0000-00-00', '0000-00-00', 6, 34, 4.04, 107, 47, 20.79, 5, NULL, NULL);
INSERT INTO `t_sumur` VALUES (352, 83, '2', 'SB-2', 1, '546.2/823/10.1.01.2/BPMPT/2015', '', '2015-12-28', '2017-12-15', 'JL.RAYA PAMCATAN KM.22', '', '', 60, '', 80, '-', 6, 2, 2, '-', '-', '-', 0, 0, 'SCH LUMBERGER', '94WWO23669', '-', 'ADA', '', '2015-09-23', '0000-00-00', 6, 49, 39.72, 107, 27, 20.77, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (353, 297, '5', 'ASR 1', 1, '546.2/674/29.1.03.2a/DPMPTSP/2018', '', '2018-08-30', '2020-08-30', 'JL. MAHAR MARTANEGARA NO.151 KEL.UTAMA CIMAHI', '', '', 175, '', 73.8, 'GIP', 8, 0, 3, '-', '-', '-', 15, 120, 'POWOGAS', '96 WIO 454', '-', '-', '', '2019-02-07', '2019-02-07', 6, 54, 8.38, 107, 33, 0.21, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (354, 83, '1', 'SP-1', 1, '546.2/247/10.1.02.2/DPMPTSP/2018', '', '2018-04-30', '2020-04-30', 'JL.RAYA PAMUCATAN KM.22', '', '', 60, '', 0, '-', 0, 0, 0, '-', '-', 'SUBMERSIBLE', 0, 0, '-', '-', '-', '', '', '0000-00-00', '0000-00-00', 6, 49, 48.83, 107, 27, 22.43, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (355, 298, '2', 'SB-1', 1, '546.2/48/DU-SIPA/GSDM/2014', '', '2014-04-10', '2016-01-25', 'JL. RAYA CIPEUNDEUY KM. 20, DESA LENGKONG, KEC. CIPEUNDEUY, SUBANG.', '', '', 120, '', 162, '-', 8, 2, 0, '-', '0', '-', 10, 0, '-', '0', '0', '0', '', '0000-00-00', '0000-00-00', 6, 30, 48.35, 107, 36, 1.73, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (356, 297, '2', 'SB 2', 1, '546.2/675/29.1.03.2a/DPMPTSP/2018', '', '2018-08-30', '2020-08-30', 'JL. MAHAR MARTANEGARA NO.151 KEL.UTAMA CIMAHI', '', '', 175, '', 73.8, 'GIP', 8, 0, 3, '-', '-', '-', 15, 120, 'SCHLUMBERGER', 'WS 680', '-', '-', '', '2019-02-07', '2019-02-07', 6, 54, 7.52, 107, 33, 2.79, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (357, 297, '2', 'SB 3', 1, '546.2/676/29.1.03.2a/DPMPTSP/2018', '', '2018-08-30', '2020-08-30', 'JL. MAHAR MARTANEGARA NO.151 KEL.UTAMA CIMAHI', '', '', 175, '', 79.2, 'GIP', 8, 0, 3, '-', '-', '-', 15, 120, 'SCHLUMBERGER', 'WIO 22443', '-', '-', '', '2019-02-07', '2019-02-07', 6, 54, 8.05, 107, 32, 58.32, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (358, 299, '5', 'ASR-1', 1, '546.2/38/10.1.02.2/DPMPTSP/2017', '', '2017-01-25', '2018-12-30', 'DESA RAWALELE, KEC. DAWEAN, KAB. SUBANG.', '', '', 100, '', 0, '-', 0, 0, 0, '-', '0', '-', 0, 0, 'ACTARIS', 'D07XH04242', '0', '510.3/1261/UAPV.2', '', '2016-08-09', '0000-00-00', 6, 32, 18.99, 107, 42, 51.76, 5, NULL, NULL);
INSERT INTO `t_sumur` VALUES (359, 297, '5', 'SB 4', 1, '546.2/677/29.1.03.2a/DPMPTSP/2018', '', '2018-08-30', '2020-08-30', 'JL. MAHAR MARTANEGARA NO.151 KEL.UTAMA CIMAHI', '', '', 175, '', 67.2, 'GIP', 8, 0, 3, '-', '-', '-', 15, 120, 'BR', '2081056006', '-', '-', '', '2019-02-07', '2019-02-07', 6, 54, 4.58, 107, 32, 55.50, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (360, 84, '2', 'SB-1', 1, '546.2/676/10.1.02.0/DPMPTSP/2017', '', '2017-11-23', '2019-11-23', 'JL.RAYA PAMUCATAN NO.4622', '', '', 90, '', 30, '-', 6, 3, 3, '-', '-', 'SUBMERSIBLE', 7, 0, 'BR', '2001065050', '-', 'ADA', '', '0000-00-00', '0000-00-00', 6, 49, 47.73, 107, 27, 26.60, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (361, 300, '2', 'SB 1', 1, '546.2/631/10.1.01.2/BMPT/2016', '', '2016-07-28', '2018-07-14', 'JL. PELANGI NO.106E LEUWI GAJAH KEL.CIGUGUR TENGAH KEC.CIMAHI TENGAH', '', '', 50, '', 22.4, '-', 4, 0, 1, '-', '-', '-', 1, 45, 'SCHLUMBERGER', '83BAC01841', '-', '510.3/6476/UAPV.2', '', '2015-09-28', '2015-09-28', 6, 53, 49.54, 107, 33, 5.50, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (362, 168, '2', 'SB-1', 1, '546.2/135/10.1.01.2/BPMPT/2016', '', '2016-02-29', '2018-01-27', 'JL.RAYA BATUJAJAR KM 3.8 NO.8', '', '', 120, '', 150, '-', 6, 1, 1, '-', '-', '-', 0, 0, 'SCH LUMBERGER', 'BAC00013', '-', 'ADA', '', '2015-08-05', '0000-00-00', 6, 53, 50.35, 107, 30, 11.84, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (363, 300, '2', 'SB 2', 1, '546.2/632/10.1.01.2/BPMPT/2016', '', '2016-07-28', '2018-07-14', 'JL. PELANGI NO.106E LEUWI GAJAH KEL.CIGUGUR TENGAH KEC.CIMAHI TENGAH', '', '', 120, '', 58, '-', 8, 0, 3, '-', '-', '-', 5, 90, 'SENSUS', '97899905', '-', '510.3/9538/UAPV.2', '', '2015-12-21', '2015-12-21', 6, 53, 39.56, 107, 33, 4.27, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (364, 302, '2', 'SB 1', 1, '546.2/1695/29.1.03.0d/DPMPTSP/2018', '', '2018-11-08', '2020-11-08', 'JL.RAYA BAROS NO.57 KEL.UTAMA KEC.CIMAHI SELATAN', '', '', 57, '', 146, 'PVC', 4, 0, 1.5, '-', '-', '-', 5, 48, 'SCHLUMBERGER', '962WEE0920', '-', '-', '', '2019-02-07', '2019-02-07', 6, 53, 51.16, 107, 32, 16.39, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (365, 161, '5', 'ASR-2', 1, '546.2/864/10.1.02.0/DPMPTSP/2017', '', '2017-12-28', '2019-12-28', 'JL.RAYA BATUJAJAR KM.3.1', '', '', 250, '', 57, '-', 8, 0, 3, '-', '0', 'SUBMERSIBLE', 20, 0, 'SCH LUMBERGER', '-', '-', '-', '', '0000-00-00', '0000-00-00', 6, 53, 22.06, 107, 29, 55.00, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (366, 161, '5', 'ASR-3', 1, '546.2/865/10.1.02.0/DPMPTSP/2017', '', '2017-12-28', '2019-12-28', 'JL.RAYA BATUJAJAR KM.3.1', '', '', 250, '', 53, '-', 8, 0, 3, '-', '-', 'SUBMERSIBLE', 20, 0, 'SCH LUMBERGER', '97WWO4483', '-', 'ADA', '', '0000-00-00', '0000-00-00', 6, 53, 44.00, 107, 29, 55.22, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (367, 278, '2', 'SB-1', 1, '546.2/449/10.1.01.2/BPMPT/2015', '', '2015-07-27', '2017-07-13', 'JL. RE. MARTADINATA, KEC. BANDUNG WETAN', '', '', 120, '', 54, '-', 4, 0, 1, '-', '-', '-', 1, 60, 'LINFLOW ', 'H16080268', '-', '-', '', '0000-00-00', '0000-00-00', 6, 54, 41.10, 107, 37, 40.70, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (368, 303, '2', 'SB 1', 1, '546.2/1255/10.1.01.2/BPMPT/2016', '', '2016-01-27', '2018-11-22', 'JL.INDUSTRI III NO.5 KEL.UTAMA KEC.CIMAHI SELATAN', '', '', 280, '', 60, '-', 8, 0, 2, '-', '-', '-', 0, 0, 'MEINEUCKE', '-', '-', '510.3/1179/UAPV.2', '', '2016-02-24', '2016-02-24', 6, 54, 7.24, 107, 33, 0.57, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (369, 161, '5', 'ASR-5', 1, '546.2/866/10.1.02.0/DPMPTSP/2017', '', '2017-12-28', '2019-12-28', 'JL.RAYA BATUJAJAR KM.3.1', '', '', 250, '', 61.6, '-', 8, 0, 3, '-', '-', 'SUBMERSIBLE', 20, 0, 'ACFARIS', 'B10XL08896', '-', 'ADA', '', '0000-00-00', '0000-00-00', 6, 53, 20.72, 107, 29, 56.64, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (370, 303, '2', 'SB 2', 1, '546.2/256/10.1.01.2/BPMPT/2016', '', '2018-12-27', '2018-11-22', 'JL. INDUSTRI III NO.5 KEL.UTAMA KEC.CIMAHI SELATAN', '', '', 260, '', 98, '-', 8, 0, 3, '-', '-', '-', 0, 0, 'SCHLUMBERGER', '96CIN00264', '-', '510.3/1179/UAPV.2', '', '2016-02-24', '2016-02-24', 6, 54, 3.61, 107, 32, 57.72, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (371, 161, '5', 'ASR-6', 1, '546.2/773/10.1.02.0/DPMPTSP/2017', '', '2017-12-21', '2019-12-21', 'JL.RAYA BATUJAJAR KM.3.1', '', '', 250, '', 80, '-', 8, 0, 3, '-', '-', 'SUBMERSIBLE', 20, 0, 'ACFARIS', 'D03XH03368', '-', 'ADA', '', '0000-00-00', '0000-00-00', 6, 53, 7.27, 107, 29, 55.14, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (372, 304, '5', 'ASR-1', 1, '546.2/641/29.1.03.Ob/DPMTSP/2018', '', '0000-00-00', '0000-00-00', 'DESA PARAPATAN,BLOK 17,KEC.PURWADADI,KAB.SUBANG', '', '', 100, '', 0, '-', 6, 0, 0, '-', '0', '-', 0, 0, '-', '0', '0', '0', '', '0000-00-00', '0000-00-00', 6, 27, 47.90, 107, 42, 18.40, 5, NULL, NULL);
INSERT INTO `t_sumur` VALUES (373, 161, '5', 'ASR-7', 1, '546.2/774/10.1.02.0/DPMPTSP/2017', '', '2017-12-21', '2019-12-21', 'JL.RAYA BATUJAJAR KM.3.1', '', '', 250, '', 160, '-', 8, 0, 3, '-', '-', 'SUBMERSIBLE', 20, 0, 'ACFARIS', '-', '-', 'ADA', '', '0000-00-00', '0000-00-00', 6, 53, 9.95, 107, 29, 57.73, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (374, 305, '2', 'SB 1', 1, '546.2/1272/10.1.01.2/BPMPT/2016', '', '2016-12-27', '2018-11-22', 'JL. INDUSTRI I KEL.UTAMA KEC.CIMAHI SELATAN', '', '', 200, '', 105, '-', 8, 0, 3, '-', '-', '-', 15, 0, 'BR', '294169', '-', '510.3/3423/UAPV.1', '', '2016-05-29', '2016-05-29', 6, 54, 11.92, 107, 32, 53.92, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (375, 304, '3', 'SI-1', 1, '0', '', '0000-00-00', '0000-00-00', '-', '', '', 0, '', 0, '-', 0, 0, 0, '-', '0', '-', 0, 0, '-', '0', '0', '0', '', '0000-00-00', '0000-00-00', 0, 0, 0.00, 0, 0, 0.00, 5, NULL, NULL);
INSERT INTO `t_sumur` VALUES (376, 81, '2', 'SB-1', 1, '546.2/515/10.1.02.2/DPMPTSP/2017', '', '2017-09-11', '2019-09-11', 'JL.CIBINGBIN KP.CIAMPEL DS LAKSANAMEKAR', '', '', 180, '', 143.1, '-', 6, 0, 0, '-', '0', 'SUBMERSIBLE', 7.5, 120, 'BR ILXL650', '059312', '', 'ADA', '', '0000-00-00', '0000-00-00', 6, 52, 32.30, 107, 30, 1.27, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (377, 305, '2', 'SB 2', 1, '546.2/273/10.1.2./BPMPT/2016', '', '2016-12-27', '2018-11-22', 'JL. INDUSTRI NO.86 KEL.UTAMA KEC.CIMAHI SELATAN', '', '', 200, '', 98, '-', 8, 3, 3, '-', '-', '-', 15, 0, 'BR', '131138040', '-', '510.3/3411/UAPV.1', '', '2016-05-29', '2016-05-29', 6, 54, 10.74, 107, 32, 50.92, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (378, 305, '2', 'SB 3', 1, '546.2/1274/10.1.2./BPMPT/2016', '', '2016-12-27', '2018-12-27', 'JL. INDUSTRI NO.86 KEL.UTAMA KEC.CIMAHI SELATAN', '', '', 200, '', 144.9, '-', 8, 0, 3, '-', '-', '-', 10, 0, 'BR', '131138521', '-', '510.3/3410/UAPV.1', '', '2016-05-29', '2016-05-29', 6, 54, 12.00, 107, 32, 51.16, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (379, 306, '5', 'ASR-1', 1, '546.2/644/29.1.03.0b/DPMPTSP/2018', '', '0000-00-00', '0000-00-00', 'DESA PARAPATAN BLOK 19, KEC PURWADADI KAB. SUBANG ', '', '', 100, '', 30, '-', 6, 0, 0, 'SUBMERSIBLE', '0', '-', 0, 0, '-', '0', '0', '0', '', '0000-00-00', '0000-00-00', 6, 27, 20.40, 107, 43, 7.40, 5, NULL, NULL);
INSERT INTO `t_sumur` VALUES (380, 81, '2', 'SB-2', 1, '546.2/827/29.1.03.2a/DPMPTSP/2017', '', '2018-10-22', '2020-10-22', 'JL.CIBINGBIN KP.CIAMPEL DS LAKSANAMEKAR', '', '', 180, '', 111.35, 'GIP', 0, 0, 0, 'O', 'O', 'SUBMERSIBLE', 0, 0, '-', '-', '-', '-', '', '0000-00-00', '0000-00-00', 6, 52, 50.51, 107, 30, 0.26, 2, NULL, NULL);
INSERT INTO `t_sumur` VALUES (381, 305, '2', 'SB 4', 1, '546.2/1275/10.1.01.2/BPMPT/2016', '', '2016-12-27', '2018-11-22', 'JL. INDUSTRI NO.86 KEL.UTAMA KEC.CIMAHI SELATAN', '', '', 200, '', 144.9, '-', 8, 3, 3, '-', '-', '-', 15, 0, 'BR', '131138432', '-', '510.3/3424/UAPV.1', '', '2016-05-29', '2016-05-29', 6, 54, 13.04, 107, 32, 51.49, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (382, 307, '2', 'SB-1', 1, '546.2/642/29.1.03.0b/DPMPTSP/2018', '', '2018-05-16', '2020-05-16', 'DESA RANCA BANGON KEC. PATOK BEUSI KAB. SUBANG', '', '', 150, '', 30, '-', 6, 0, 0, 'SUBMERSIBLE', '0', '-', 3, 0, '-', '0', '0', '0', '', '0000-00-00', '0000-00-00', 6, 21, 52.90, 107, 40, 27.80, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (383, 308, '2', 'SB-1', 1, '546.2/245/10.1.01.2/BPMPT/2015', '', '2015-04-27', '2017-01-05', 'DESA WANTILAN, KEC. CIPEUNDEUY, KAB. SUBANG.', '', '', 120, '', 150, '-', 6, 2, 0, '-', '0', '-', 0, 0, 'LINEFLOW', '200060', '269188', '510.3/5436/UAPV-2', '', '2014-08-19', '0000-00-00', 6, 30, 66.00, 107, 36, 99.99, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (384, 308, '2', 'SB-2', 1, '546.2/683/10.1.01.2/BPMPT/2015', '', '2015-10-19', '2017-09-30', 'DESA WANTILAN, KEC. CIPEUNDEUY, KAB. SUBANG', '', '', 120, '', 230, '-', 6, 2, 0, '-', '0', '-', 0, 0, 'POWOGAZ', '02134460', '94266', '510.3/5437', '', '2014-08-19', '0000-00-00', 6, 29, 55.73, 107, 36, 20.16, 5, NULL, NULL);
INSERT INTO `t_sumur` VALUES (385, 308, '2', 'SB-3', 1, '546.2/684/10.1.01.2/BPMPT/2015', '', '2015-10-19', '2017-09-30', 'DESA WANTILAN, KEC. CIPEUNDEUY, KAB. SUBANG', '', '', 120, '', 150, '-', 6, 2, 0, '-', '0', '-', 0, 0, 'BR', '099070', '2549', '510.3/5437/UAPV.2', '', '2014-08-19', '0000-00-00', 6, 29, 59.58, 107, 36, 23.24, 5, NULL, NULL);
INSERT INTO `t_sumur` VALUES (386, 308, '3', 'SI-1', 1, '0', '', '0000-00-00', '0000-00-00', '-', '', '', 0, '', 0, '-', 0, 0, 0, '-', '0', '-', 0, 0, '-', '0', '0', '0', '', '0000-00-00', '0000-00-00', 0, 0, 0.00, 0, 0, 0.00, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (387, 308, '3', 'SI-2', 1, '0', '', '0000-00-00', '0000-00-00', '0', '', '', 0, '', 0, '-', 0, 0, 0, '-', '0', '-', 0, 0, '-', '0', '0', '0', '', '0000-00-00', '0000-00-00', 0, 0, 0.00, 0, 0, 0.00, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (388, 310, '2', 'SB-1', 1, '546.2/07/DU-SIPAGSDM/2010', '', '2010-02-15', '2011-11-11', 'JL. RAYA WANTILAN RT 003 RW 002, KEL. WANTILAN, KEC. CIPEUNDEUY, KAB. SUBANG.', '', '', 0, '', 0, '-', 0, 0, 0, '-', '0', '-', 0, 0, '-', '0', '0', '0', '', '0000-00-00', '0000-00-00', 0, 0, 0.00, 0, 0, 0.00, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (389, 310, '2', 'SB-2', 1, '546.2/08/DU-SIPAGSDM/2010', '', '2010-02-15', '2011-11-11', 'DESA WANTILAN, KEC. CIPEUNDEUY, KAB. SUBANG', '', '', 0, '', 95, '-', 0, 0, 0, '-', '0', '-', 0, 0, '-', '0', '0', '0', '', '0000-00-00', '0000-00-00', 0, 0, 0.00, 0, 0, 0.00, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (390, 310, '2', 'SB-3', 1, '546.2/69/DU-SIPAGSDM/2009', '', '2009-10-21', '2010-07-10', 'DESA WANTILAN, KEC. CIPEUNDEUY, KAB. SUBANG', '', '', 0, '', 95, '-', 0, 0, 0, '-', '0', '-', 0, 0, '-', '0', '0', '0', '', '0000-00-00', '0000-00-00', 0, 0, 0.00, 0, 0, 0.00, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (391, 309, '2', 'SB 1', 1, '546.2/660/10.1.01.2/BPMPT/2016', '', '2016-08-01', '2018-08-04', 'JL. MAHAR MARTANEGARA NO.170 KEL.CIGUGUR TENGAH KEC.CIMAHI TENGAH', '', '', 215, '', 76.5, '-', 8, 0, 3, '-', '-', '-', 17, 90, 'SCHLUMBERGER', '96 WIO 069', '-', '510.3/4796/UAPV.2', '', '2015-07-10', '2015-07-10', 6, 53, 33.54, 107, 32, 48.51, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (392, 94, '2', 'SB-1', 1, '546.2/1288/10.1.01.2/BPMPT/2016', '', '2016-12-27', '2018-11-22', 'JL.RAYA BATUJAJAR KM 3.1', '', '', 150, '', 65, '-', 8, 3, 3, '-', '-', '-', 15, 0, 'SCH LUMBERGER', '96W1066937', '-', 'ADA', '', '0000-00-00', '0000-00-00', 6, 53, 21.62, 107, 30, 4.56, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (393, 309, '2', 'SB 2', 1, '546.2/661/10.1.01.2/BPMPT/2016', '', '2016-08-11', '2018-08-04', 'JL.MAHAR MARTANEGARA NO.170 KEL.CIGUGUR TENGAH KEC.CIMAHI TENGAH', '', '', 215, '', 94.5, '-', 8, 0, 3, '-', '-', '-', 16, 96, 'SCHLUMBERGER', '96 WIO 449', '-', '510.3/5545/UAPV.2', '', '2015-07-21', '2015-07-21', 6, 53, 35.38, 107, 32, 46.57, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (394, 94, '2', 'SB-2', 1, '546.2/1289/10.1.01.2/BPMPT/2016', '', '2016-12-27', '2018-11-22', 'JL.RAYA BATUJAJAR KM 3.1', '', '', 150, '', 61, '-', 0, 0, 0, '-', '-', '-', 0, 0, 'SCH LUMBERGER', '96WIO06937', '-', 'ADA', '', '2016-07-01', '0000-00-00', 6, 53, 5.41, 107, 30, 2.13, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (395, 311, '2', 'SB-1', 1, '546.2/82/DU-SIPAGSDM/2010', '', '0000-00-00', '0000-00-00', 'DESA KALIANGSANA KEC. KALIJATI, SUBANG.', '', '', 100, '', 120, '-', 6, 2, 0, '-', '0', '-', 3, 0, '-', '0', '0', '0', '', '0000-00-00', '0000-00-00', 6, 30, 18.67, 107, 40, 26.87, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (396, 311, '2', 'SB-2', 1, '546.2/83/DU-SIPAGSDM/2010', '', '0000-00-00', '0000-00-00', 'DESA KALIANGSANA KEC. KALIJATI, SUBANG.', '', '', 100, '', 120, '-', 6, 2, 0, '-', '0', '-', 3, 0, '-', '0', '0', '0', '', '0000-00-00', '0000-00-00', 6, 30, 38.68, 107, 40, 25.18, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (397, 309, '2', 'SB 3', 1, '546.2/662/10.1.01.2/BPMPT/2016', '', '2016-08-11', '2018-08-04', 'JL. MAHAR MARTANEGARA NO.170 KEL.CIGUGUR TENGAH KEC.CIMAHI TENGAH', '', '', 250, '', 54, '-', 8, 0, 3, '-', '-', '-', 5, 63, 'SCHLUMBERGER', '94 AIO 038', '-', '510.3/4902/UAPV.2', '', '2014-07-17', '2014-07-17', 6, 53, 37.16, 107, 32, 99.99, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (398, 94, '2', 'SB-3', 1, '546.2/1290/10.1.01.2/BPMPT/2016', '', '2016-12-27', '2018-11-22', 'JL.RAYA BATUJAJAR KM 3.1', '', '', 150, '', 65, '-', 0, 0, 0, '-', '-', '-', 0, 0, 'SCH LUMBERGER', '94AIM03024', '-', 'ADA', '', '2016-07-01', '0000-00-00', 6, 53, 17.59, 107, 30, 5.22, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (399, 311, '2', 'SB-3', 1, '546.2/84/DU-SIPAGSDM/2010', '', '0000-00-00', '0000-00-00', 'DESA KALIANGSANA KEC. KALIJATI, SUBANG.', '', '', 100, '', 120, '-', 6, 2, 0, '-', '0', '-', 3, 0, '-', '0', '0', '0', '', '0000-00-00', '0000-00-00', 6, 30, 18.67, 107, 40, 26.87, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (400, 309, '2', 'SB 4', 1, '546.2/663/10.1.01.2/BPMPT/2016', '', '2016-08-01', '2018-08-04', 'JL. MAHAR MARTANEGARA NO.170 KEL.CIGUGUR TENGAH KEC.CIMAHI TENGAH', '', '', 150, '', 87, '-', 8, 0, 3, '-', '-', '-', 17, 60, 'SCHLUMBERGER', '83 CIO 003', '-', '510.3/4797/UAPV.2', '', '2014-07-10', '2014-07-10', 6, 56, 45.78, 107, 32, 53.54, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (401, 309, '2', 'SB 5', 1, '546.2/664/10.1.01.2/BPMPT/2016', '', '2016-08-11', '2018-08-04', 'JL. MAHAR MARTANEGARA NO.170 KEL.CIGUGUR TENGAH KEC.CIMAHI TENGAH', '', '', 180, '', 65, '-', 8, 0, 3, '-', '-', '-', 17, 90, 'SCHLUMBERGER', '95 CIN 494', '-', '510.3/4796/UAPV.2', '', '2014-07-10', '2014-07-10', 6, 53, 41.88, 107, 32, 0.00, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (402, 123, '2', 'SB-1', 1, '546.2/533/10.1.02.0/DPMPTSP2017', '', '2017-10-23', '2019-10-23', 'JL.INDUSTRI BATUJAJAR PERMAI II', '', '', 90, '', 75, 'GIP', 8, 0, 3, '-', '-', '-', 0, 0, 'POWOGAZ', 'NZYO1998', '-', 'ADA', '', '0000-00-00', '0000-00-00', 6, 53, 11.61, 107, 29, 15.63, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (403, 312, '1', 'SP-1', 1, '546.2/33/DU-PENG/2010', '', '2010-01-29', '2012-03-01', '-', '', '', 0, '', 0, '-', 0, 0, 3, '-', '-', '-', 100, 0, '-', '0', '0', '0', '', '0000-00-00', '0000-00-00', 0, 0, 0.00, 0, 0, 0.00, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (404, 309, '2', 'SB 6', 1, '546.2/665/10.1.01.2/BPMPT/2016', '', '2016-08-11', '2018-08-04', 'JL. MAHAR MARTANEGARA NO.170 KEL.CIGUGUR TENGAH KEC.CIMAHI TENGAH', '', '', 180, '', 65, '-', 8, 0, 3, '-', '-', '-', 15, 90, 'SCHLUMBERGER', '82 OK 0504', '-', '510.3/4801/UAPV.2', '', '2014-07-10', '2014-07-10', 6, 53, 36.64, 107, 32, 47.35, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (405, 309, '2', 'SB 6', 1, '546.2/665/10.1.01.2/BPMPT/2016', '', '2016-08-11', '2018-08-04', 'JL. MAHAR MARTANEGARA NO.170 KEL.CIGUGUR TENGAH KEC.CIMAHI TENGAH', '', '', 180, '', 65, '-', 8, 0, 3, '-', '-', '-', 15, 90, 'SCHLUMBERGER', '82 OK 0504', '-', '510.3/4801/UAPV.2', '', '2014-07-10', '2014-07-10', 6, 53, 36.64, 107, 32, 47.35, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (406, 309, '2', 'SB 7', 1, '546.2/666/10.1.01.2/BPMPT/2016', '', '2016-08-11', '2018-08-04', 'JL. MAHAR MARTANEGARA NO.170 KEL.CIGUGUR TENGAH KEC.CIMAHI TENGAH', '', '', 180, '', 88.2, '-', 8, 0, 3, '-', '-', '-', 15, 90, 'SCHLUMBERGER', '95 CIP 517', '-', '510.3/4799/UAPV.2', '', '2014-07-10', '2014-07-10', 6, 53, 40.45, 107, 32, 40.45, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (407, 112, '2', 'SB-1', 1, '546.2/434/10.1.02.2/DPMPTSP2017', '', '2017-08-21', '2019-08-21', 'JL.RAYA PADALARANG NO.273', '', '', 80, '', 16, '-', 4, 0, 1, '-', '-', 'SUBMERSIBLE', 0, 0, 'ITROW', 'EO9500691', '-', 'ADA', '', '0000-00-00', '0000-00-00', 6, 50, 13.84, 107, 28, 5.97, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (408, 309, '2', 'SB 8', 1, '546.2/667/10.1.01.2/BPMPT/2016', '', '2016-08-11', '2018-08-04', 'JL. MAHAR MARTANEGARA NO.170 KEL.CIGUGUR TENGAH KEC.CIMAHI TENGAH', '', '', 180, '', 88.2, '-', 8, 0, 3, '-', '-', '-', 15, 90, 'SCHLUMBERGER', '93 AIP 445', '-', '510.3/4800/UAPV.2', '', '2014-07-10', '2014-07-10', 6, 53, 42.45, 107, 32, 37.88, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (409, 313, '5', 'ASR-1', 1, '546.2/203/10.1.02.2/DPMPTSP/2017', '', '2017-06-05', '2019-06-05', 'RT/RW 01/01, DESA KALIANGSANA, KEC. KALIJATI, KAB. SUBANG.', '', '', 120, '', 81, '-', 0, 0, 0, '-', '0', '-', 5, 0, 'BR', '110903901', '0', '510.3/5167/UAPV.2', '', '0000-00-00', '0000-00-00', 6, 30, 99.99, 107, 40, 99.99, 5, NULL, NULL);
INSERT INTO `t_sumur` VALUES (410, 314, '2', 'SB-1', 1, '546.2/499/10.1.01.2/BPMPT/2016', '', '2016-06-22', '2018-06-22', 'JL. SUKAJADI NO. 202, KEC. SUKAJADI', '', '', 30, '', 14.58, '-', 4, 0, 1, '-', '0', '-', 450, 0, 'ZENNER M 14', '8ZR1001441', '0', '0', '', '2019-02-08', '2019-02-08', 6, 52, 59.14, 107, 35, 48.87, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (411, 217, '1', 'SP 1', 1, '546.2/215/10.1.02.0/DPMPTSP/2017', '', '2017-06-15', '2019-06-15', 'JL. INDUSTRI II NO.6 KEL.UTAMA KEC.CIMAHI SELATAN', '', '', 40, '', 0, 'PVC', 4, 0, 1, '-', '-', '-', 30, 0, '-', '-', '-', '-', '', '2019-02-08', '2019-02-08', 6, 54, 24.75, 107, 32, 43.42, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (412, 112, '1', 'SP-2', 1, '546.2/435/10.1.02.2/DPMPTSP2017', '', '2017-08-21', '2019-08-21', 'JL.RAYA PADALARANG NO.273', '', '', 30, '', 10, '-', 4, 0, 1, '-', '-', 'SENTRIFUGAL', 10, 0, 'ITROW', '09500694', '-', 'ADA', '', '0000-00-00', '0000-00-00', 6, 50, 11.56, 107, 28, 9.63, 2, NULL, NULL);
INSERT INTO `t_sumur` VALUES (413, 313, '5', 'ASR-2', 1, '546.2/202/10.1.02.2/DPMPTSP/2017', '', '2017-06-05', '2019-06-05', 'RT/RW 01/01, DESA KALIANGSANA, KEC. KALIJATI, KAB. SUBANG.', '', '', 150, '', 58.5, '-', 0, 0, 0, 'SUBMERSIBLE', '0', '-', 5, 0, '8FA', '12100020', '0', '510.3/5166/UAPV.2', '', '0000-00-00', '0000-00-00', 6, 30, 99.99, 107, 40, 99.99, 5, NULL, NULL);
INSERT INTO `t_sumur` VALUES (414, 313, '3', 'SI-1', 1, '0', '', '0000-00-00', '0000-00-00', '-', '', '', 0, '', 0, '-', 0, 0, 0, '-', '-', '-', 0, 0, '-', '0', '0', '0', '', '0000-00-00', '0000-00-00', 0, 0, 0.00, 0, 0, 0.00, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (415, 313, '', 'RESAPAN-', 1, '0', '', '0000-00-00', '0000-00-00', '-', '', '', 0, '', 0, '-', 0, 0, 0, '-', '0', '-', 0, 0, '-', '0', '0', '0', '', '0000-00-00', '0000-00-00', 0, 0, 0.00, 0, 0, 0.00, 5, NULL, NULL);
INSERT INTO `t_sumur` VALUES (416, 313, '', 'RESAPAN-', 1, '0', '', '0000-00-00', '0000-00-00', '0', '', '', 0, '', 0, '0', 0, 0, 0, '-', '0', '-', 0, 0, '-', '0', '0', '0', '', '0000-00-00', '0000-00-00', 0, 0, 0.00, 0, 0, 0.00, 5, NULL, NULL);
INSERT INTO `t_sumur` VALUES (417, 315, '1', 'SP-1', 1, '546.2/658/10.1.01.2/DPMPT/2016', '', '2016-08-04', '2018-08-04', 'JL. DR. DJUNJUNAN NO. 125, KEC. SUKAJADI', '', '', 40, '', 3.3, '-', 4, 0, 1, '-', '0', '-', 1, 30, 'SCHLUM BURGER', '96WEE09207', '0', '510.3/2046/UAPV.2', '', '2016-03-24', '2017-03-24', 6, 54, 10.22, 107, 36, 11.20, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (418, 313, '', 'RESAPAN-', 1, '0', '', '0000-00-00', '0000-00-00', '-', '', '', 0, '', 0, '-', 0, 0, 0, '-', '0', '-', 0, 0, '-', '0', '0', '0', '', '0000-00-00', '0000-00-00', 0, 0, 0.00, 0, 0, 0.00, 5, NULL, NULL);
INSERT INTO `t_sumur` VALUES (419, 111, '2', 'SB-1', 1, '546.2/516/10.1.01.2/BPMPT/2016', '', '2016-07-01', '2018-06-17', 'JL.RAYA BATUJAJARKM.5 NO.56', '', '', 150, '', 55.8, '-', 0, 0, 0, '-', '-', '-', 0, 0, 'SENSUS', 'WPD50', '-', 'ADA', '', '2015-08-20', '0000-00-00', 6, 54, 8.99, 107, 29, 55.56, 2, NULL, NULL);
INSERT INTO `t_sumur` VALUES (420, 316, '1', 'SP-1', 1, '546.2/15/DU-PENG/2011', '', '2011-09-15', '2014-02-01', 'DESA MUNDUSARI KEC. PAMANUKAN', '', '', 0, '', 20, '-', 4, 0, 1, '-', '0', '-', 1.5, 0, '-', '0', '0', '0', '', '0000-00-00', '0000-00-00', 0, 0, 0.00, 0, 0, 0.00, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (421, 111, '2', 'SB-2', 1, '546.2/517/10.1.01.2/BPMPT/2016', '', '2016-07-01', '2018-06-17', 'JL.RAYA BATUJAJAR KM.5 NO.56', '', '', 150, '', 55.8, '-', 0, 0, 0, '-', '-', '-', 0, 0, 'SENSUS', 'WPD50', '-', 'ADA', '', '2015-08-20', '0000-00-00', 6, 54, 3.00, 107, 29, 56.57, 2, NULL, NULL);
INSERT INTO `t_sumur` VALUES (422, 111, '2', 'SB-3', 1, '546.2/234.IPAT-DU/BPMPT', '', '2016-11-24', '0000-00-00', 'JL.RAYA BATUJAJAR KM.5 NO.56', '', '', 150, '', 0, '-', 6, 0, 2, '-', '-', '-', 0, 0, 'SCH LUMBERGER', 'D02WE06472', '-', 'ADA', '', '0000-00-00', '0000-00-00', 6, 54, 15.45, 107, 29, 53.57, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (423, 319, '2', 'SB-1', 1, '546.2/286/10.1.02.0/DPMPTSP/2018', '', '2018-02-14', '2020-02-14', 'KEL. TANJUNG, KEC. CIPUNAGARA, KAB. SUBANG.', '', '', 120, '', 100, '-', 6, 2, 2, '-', '0', '-', 5, 0, 'SCHLUMBERGER', '96WIK19857', '0', '510.3/4581/UAPV.2', '', '0000-00-00', '0000-00-00', 6, 28, 31.70, 107, 53, 18.90, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (424, 111, '2', 'SB-4', 1, '546.2/518/10.1.01.2/BPMPT/2016', '', '2016-07-01', '2018-06-17', 'JL.RAYA BATUJAJARKM.5 NO.56', '', '', 150, '', 145.8, '-', 0, 0, 0, '-', '-', '-', 0, 0, 'WESTECHAUS', '06053239', '-', 'ADA', '', '2016-02-26', '0000-00-00', 6, 54, 5.28, 107, 29, 56.49, 2, NULL, NULL);
INSERT INTO `t_sumur` VALUES (425, 317, '2', 'SB 2', 1, '546.2/474/29.1.03.2a/DPMPTSP/2018', '', '2018-07-16', '2020-07-16', 'JL.CIBALIGO KM 3 KEL.MELONG KEC.CIMAHI SELATAN', '', '', 250, '', 106.2, '-', 8, 0, 3, '-', '-', '-', 20, 180, 'SCHLUMBERGER', '94 AIO 038', '-', '-', '', '2019-02-08', '2019-02-08', 6, 55, 6.37, 107, 33, 1.05, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (426, 319, '2', 'SB-2', 1, '546.2/112/10.1.02.0/DPMPTSP/2018', '', '2018-04-14', '2020-04-14', 'KEL. TANJUNG, KEC. CIPUNAGARA, KAB. SUBANG.', '', '', 120, '', 100, '-', 6, 2, 2, 'SUBMERSIBLE', '0', '-', 5, 0, 'SCHLUMBERGER', '96WIK37832', '0', '519.2/1720/UPTML/UAPV-2', '', '0000-00-00', '0000-00-00', 6, 28, 30.60, 107, 53, 21.50, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (427, 15, '2', 'SB-1', 1, '546.2/790/10.1.01.2/BPMPT/2016', '', '2016-08-22', '2018-08-09', 'JL.PARAHYANGAN KM.3', '', '', 150, '', 112, '-', 0, 0, 0, '-', '-', '-', 7.5, 0, 'SCH LUMBERGER', 'WIK42031', '-', 'ADA', '', '2015-02-03', '0000-00-00', 6, 51, 46.66, 107, 28, 23.24, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (428, 1, '2', 'SB 3', 1, '546.2/475/29.1.03.2a/DPMPTSP/2018', '', '2018-07-16', '2020-07-16', 'JL.CIBALIGO KM 3 KEL.MELONG KEC.CIMAHI SELATAN', '', '', 250, '', 101.8, '-', 8, 0, 3, '-', '-', '-', 15, 180, 'SCHLUMBERGER', '94 AIM 030', '-', '-', '', '2019-02-08', '2019-02-08', 6, 55, 2.10, 107, 33, 3.53, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (429, 317, '2', 'SB 4', 1, '546.2/476/29.1.03.2a/DPMPTSP/2018', '', '2018-07-16', '2020-07-16', 'JL. CIBALIGO KM 3 KEL.MELONG KEC.CIMAHI SELATAN', '', '', 250, '', 91.8, '-', 8, 0, 3, '-', '-', '-', 20, 180, 'SCHLUMBERGER', '94 aim 030', '-', '-', '', '2019-02-08', '2019-02-08', 6, 54, 57.16, 107, 33, 21.78, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (430, 20, '2', 'SB-1', 1, '546.2/1155/10.1.01.2/BPMPT/2016', '', '2016-12-08', '2018-11-22', 'JL.RAYA SIMPANG NO.383', '', '', 60, '', 88, '-', 0, 0, 0, '-', '-', '-', 0, 0, 'YUTA', '07000052', '-', 'ADA', '', '2016-06-02', '0000-00-00', 6, 51, 1.31, 107, 29, 48.69, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (431, 321, '2', 'SB-1', 1, '546.2/488/10.1.01.2/BPMPT/2016', '', '2016-06-02', '2018-06-02', 'DUSUN MEKARSARI DESA BLANAKAN KEC. BLANAKAN, KAB. SUBANG.', '', '', 120, '', 85, '-', 0, 0, 0, '-', '0', '-', 0, 0, 'WESTECHAUSE', '1501000170', '0', '510.3/1519/UAPV.2', '', '2016-03-11', '0000-00-00', 6, 16, 37.89, 107, 39, 44.14, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (432, 321, '3', 'SI-1', 1, '0', '', '0000-00-00', '0000-00-00', '-', '', '', 0, '', 0, '-', 0, 0, 0, '-', '0', '-', 0, 0, '-', '0', '0', '0', '', '0000-00-00', '0000-00-00', 0, 0, 0.00, 0, 0, 0.00, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (433, 20, '2', 'SB-2', 1, '546.2/1157/10.1.01.2/BPMPT/2016', '', '2016-12-08', '2018-11-22', 'JL.RAYA SIMPANG NO.383', '', '', 100, '', 131, '-', 0, 0, 0, '-', '-', '-', 0, 0, 'YUTA', '07000058', '-', 'ADA', '', '2016-08-24', '0000-00-00', 0, 0, 0.00, 0, 0, 0.00, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (434, 20, '2', 'SB-3', 1, '546.2/265/10.1.01.0/BPMPT/2016', '', '0000-00-00', '2017-11-23', 'JL.RAYA SIMPANG NO.383', '', '', 100, '', 0, '-', 6, 2, 2, '-', '-', '-', 3, 60, 'WESTECHAUS', '141000052', '-', 'ADA', '', '0000-00-00', '0000-00-00', 6, 51, 10.24, 107, 29, 47.29, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (435, 322, '2', 'SB 1', 1, '546.2/629/29.1.03.2a/DPMPTSP/2018', '', '2018-08-15', '2020-08-15', 'JL. MAHAR MARTANEGARA LEUWI GAJAH NO.106B KEL.CIGUGUR TENGAH KEC.CIMAHI TENGAH', '', '', 160, '', 64, '-', 8, 0, 3, '-', '-', '-', 20, 90, 'SCHLUMBERGER', '97 WIK 484', '-', '-', '', '2019-02-08', '2019-02-08', 6, 53, 48.46, 107, 32, 59.19, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (436, 202, '2', 'SB-1', 1, '546.2/380/10.1.03.2a/DPMPTSP/2018', '', '2018-07-04', '2020-07-04', 'JL.PASIR PAKU NO.54', '', '', 210, '', 91.58, '-', 8, 3, 3, '-', '-', 'SUBMERSIBLE', 15, 0, 'SCH LUMBERGER', '16WI044944', '-', 'ADA', '', '0000-00-00', '0000-00-00', 6, 54, 14.80, 107, 29, 58.20, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (437, 322, '2', 'SB 3', 1, '546.2/630/29.1.03.2a/DPMPTSP/2018', '', '2018-08-15', '2020-08-15', 'JL. MAHAR MARTANEGARA LEUWI GAJAH NO.106B  KEL.CIGUGUR TENGAH KEC.CIMAHI TENGAH', '', '', 120, '', 54.4, '-', 8, 0, 3, '-', '-', '-', 20, 90, 'ACTARIS', 'D09XL09772', '-', '-', '', '2019-02-08', '2019-02-08', 6, 53, 46.56, 107, 32, 57.27, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (438, 322, '2', 'SB 4', 1, '546.2/631/29.1.03.2a/DPMPTSP/2018', '', '2018-08-15', '2020-08-15', 'JL. MAHAR MARTANEGARA LEUWI GAJAH NO.106B KEL.CIGUGUR TENGAH KEC.CIMAHI TENGAH', '', '', 120, '', 56.8, '-', 8, 0, 3, '-', '-', '-', 20, 90, 'ACTARIS', 'D06XH05442', '-', '-', '', '2019-02-08', '2019-02-08', 6, 53, 42.42, 107, 32, 58.93, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (439, 202, '2', 'SB-2', 1, '546.2/390/10.1.03.2a/DPMPTSP/2018', '', '2018-07-04', '2020-07-04', 'JL.PASIR PAKU NO.54', '', '', 200, '', 171, '-', 8, 3, 3, '-', '-', '-', 15, 0, 'SCH LUMBERGER', 'WSG80', '-', 'ADA', '', '0000-00-00', '0000-00-00', 6, 54, 15.00, 107, 29, 58.54, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (440, 202, '2', 'SB-3', 1, '546.2/391/10.1.03.2a/DPMPTSP/2018', '', '2018-07-04', '2020-07-04', 'JL.PASIR PAKU NO.54', '', '', 215, '', 171, '-', 8, 3, 3, '-', '-', '-', 15, 0, 'DALAM', '120600425', '-', 'ADA', '', '0000-00-00', '0000-00-00', 6, 54, 10.42, 107, 29, 59.48, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (441, 323, '2', 'SB 2', 1, '546.2/1345/10.1.01.2/BPMPT/2016', '', '2016-12-29', '2018-12-02', 'JL. INDUSTRI IV NO.4 KEL.UTAMA KEC.CIMAHI SELATAN', '', '', 150, '', 72, '-', 8, 0, 3, '-', '-', '-', 7.5, 0, 'SCHLUMBERGER', '83 CIM 001', '-', '510.3/5611/UAPV.2', '', '2016-09-06', '2018-09-06', 6, 54, 16.29, 107, 32, 52.71, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (442, 324, '2', 'SB 1', 1, '546.2/224/10.1.02.2/DPMPTSP/2017', '', '2017-06-07', '2019-06-07', 'JL. INDUSTRI IV NO.7 KEL.UTAMA KEC.CIMAHI SELATAN', '', '', 200, '', 55, '-', 8, 0, 2.5, '-', '-', '-', 7.5, 180, 'SCHLUMBERGER', '83 CIK 006', '-', '510.3/6300/UAPV.2', '', '2014-09-24', '2015-09-24', 6, 54, 30.64, 107, 33, 5.26, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (443, 180, '3', 'SI-I', 1, '546.2/578/10.1.01.0/DPMPTSP/2017', '', '2017-10-27', '2018-04-27', 'JL.INDUSTRI III NO.6', '', '', 150, '', 0, '-', 6, 0, 0, '-', '-', '0', 0, 0, '-', '-', '-', 'ADA', '', '0000-00-00', '0000-00-00', 6, 52, 9.00, 107, 29, 15.10, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (444, 324, '2', 'SB 2', 1, '546.2/225/10.1.02.2/DPMPTSP/2017', '', '2017-06-07', '2019-06-07', 'JL. INDUSTRI IV NO.7 KEL.UTAMA KEC.CIMAHI SELATAN', '', '', 200, '', 109, '-', 8, 0, 3, '-', '-', '-', 15, 180, 'WESTERHOUSE', '1411000420', '-', '510.3/6161/UAPV.2', '', '2014-09-08', '2015-09-08', 6, 54, 32.53, 107, 33, 3.67, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (445, 290, '2', 'SB-1', 1, '546.2/103/10.1.02.0/DPMPTSP/2018', '', '2018-02-14', '2020-02-14', 'KELURAHAN TANJUNG KECAMATAN CIPUNAGARA KAB. SUBANG.', '', '', 120, '', 80, '-', 0, 0, 2, '-', '0', '-', 5, 0, '-', '0', '0', '0', '', '0000-00-00', '0000-00-00', 6, 27, 58.90, 107, 53, 33.70, 5, NULL, NULL);
INSERT INTO `t_sumur` VALUES (446, 290, '2', 'SB-2', 1, '546.2/285/10.1.02.0/DPMPTSP/2018', '', '2018-02-14', '2020-02-14', 'KELURAHAN TANJUNG KECAMATAN CIPUNAGARA KAB. SUBANG.', '', '', 120, '', 80, '-', 6, 0, 2, 'SUBMERSIBLE', '0', '-', 5, 0, '-', '0', '0', '0', '', '0000-00-00', '0000-00-00', 6, 28, 2.80, 107, 53, 30.30, 5, NULL, NULL);
INSERT INTO `t_sumur` VALUES (447, 180, '5', 'ASR-3', 1, '546.2/434/29.1.03.2a/DPMPTSP/2018', '', '2018-05-04', '2020-05-04', 'JL.INDUSTRI III NO.6', '', '', 150, '', 342, '-', 0, 0, 0, '-', '-', 'SUBMERSIBLE', 15, 72, 'SCH LUMBERGER', '96CIM00722', '-', 'ADA', '', '0000-00-00', '0000-00-00', 6, 52, 10.76, 107, 29, 22.24, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (448, 325, '1', 'SP-1', 1, '546.2/35/DU-Peng/2011', '', '2013-04-06', '2011-04-06', 'JL. RAYA CIPEUNDEUY DESA CIPEUNDEUY KEC. CIPEUNDEUY KAB. SUBANG.', '', '', 35, '', 4, '-', 4, 3, 0, '-', '0', '-', 0.5, 0, 'ONDA', '16070874', '1328', '0', '', '0000-00-00', '0000-00-00', 6, 29, 35.00, 107, 35, 33.10, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (449, 325, '1', 'SP-2', 1, '0', '', '0000-00-00', '0000-00-00', 'JL. CIPEUNDEUY KEC. CIPEUNDEUY DESA CIPEUNDEUY KAB. SUBANG.', '', '', 0, '', 0, '-', 0, 1, 0, '-', '0', '-', 0, 0, 'ONDA', 'A120813202', '965', '0', '', '0000-00-00', '0000-00-00', 6, 29, 35.00, 107, 35, 35.60, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (450, 326, '1', 'SP-1', 1, '546.2/55/DU-PENG/2008', '', '2008-07-11', '2009-04-20', 'JL. PASAR BARU NO. 6 SUBANG', '', '', 0, '', 0, '-', 0, 0, 3, '-', '0', '-', 250, 0, '-', '0', '0', '0', '', '0000-00-00', '0000-00-00', 0, 0, 0.00, 0, 0, 0.00, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (451, 327, '1', 'SP-1', 1, '546.2/78/DU-PENG/2008', '', '2008-11-26', '2011-01-01', 'JL. RAYA SUKASARI KM. 4 DESA SUKASARI KEC. SUKASARI KAB. SUBANG.', '', '', 16, '', 12, '-', 1, 1, 0, '-', '0', '-', 0, 0, 'WESTECHAUSE', 'H.081078', '6732', '0', '', '0000-00-00', '0000-00-00', 6, 17, 23.20, 107, 47, 19.50, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (452, 81, '2', 'SB-1', 1, '546.2/777/10.1.01.2/BPMPT/2015', '', '0000-00-00', '2017-11-19', 'CIBINGBIN LAKSAMANA MEKAR', '', '', 180, '', 0, '-', 6, 0, 2, '-', '-', '-', 7.5, 120, 'SCH LUMBERGER', 'D03XK079', '-', 'ADA', '', '0000-00-00', '0000-00-00', 6, 52, 47.49, 107, 30, 1.35, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (453, 124, '2', 'SB-2', 1, '546.2/780/10.1.01.2/BPMPT/2016', '', '2016-08-22', '2018-08-09', 'JL.CIBINGBIN LAKSANA MEKAR', '', '', 180, '', 131, '-', 8, 0, 2, '-', '-', '-', 7.5, 50, 'BR', '05931201', '-', 'ADA', '', '2015-09-28', '0000-00-00', 6, 52, 44.90, 107, 30, 0.23, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (454, 328, '2', 'SB-1', 1, '0', '', '0000-00-00', '0000-00-00', 'DESA SINDANGSARI KEC. CIKAUM KAB. SUBANG', '', '', 89, '', 0, '-', 6, 0, 2, '-', '0', '-', 3, 42, 'BR', '0', '0', '0', '', '0000-00-00', '0000-00-00', 6, 43, 63.20, 107, 29, 43.20, 5, NULL, NULL);
INSERT INTO `t_sumur` VALUES (455, 318, '1', 'SP-1', 1, '546.2/358/10.1.01.2/BPMPT/2016', '', '2016-04-19', '2018-04-19', 'DR DJUNJUNAN NO 125', '', '', 40, '', 13, '-', 4, 0, 1, '-', '-', '-', 1, 0, 'ZENNER ', '82R1001441', '-', '-', '', '0000-00-00', '0000-00-00', 6, 53, 41.78, 107, 35, 14.40, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (456, 62, '1', 'SP-1', 1, '546.2/373/10.1.02.0/DPMPTSP/2017', '', '2018-04-02', '2020-04-02', 'JL,INDUSTRI CIMAREME I NO.8', '', '', 60, '', 0, '-', 4, 1.5, 0, '-', '-', 'SENTRIFUGAL', 30, 0, '-', 'ETI5005409', '-', 'ADA', '', '0000-00-00', '0000-00-00', 6, 51, 52.24, 107, 29, 20.86, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (457, 329, '2', 'SB-1', 1, '546.2/353/10.1.01.0/BPMPT/2016', '', '2016-08-04', '2018-08-04', 'JL. POKEK DESA KAWUNGANTEN KEC. CIKAUM KAB. SUBANG', '', '', 120, '', 60, 'PVC', 6, 0, 2, '-', '0', '-', 2, 60, 'BR', '0', '162', '0', '', '0000-00-00', '0000-00-00', 6, 28, 48.53, 107, 44, 37.51, 5, NULL, NULL);
INSERT INTO `t_sumur` VALUES (458, 1, '2', 'SB-1', 1, '546.2/500/10.1.01.0/DPMPTSP/2017', '', '2017-10-23', '2018-04-23', 'JL.INDUSTRI CIMAREME I NO.8', '', '', 125, '', 0, 'PVC/GIP', 6, 2, 2, '-', '-', '-', 5, 90, '-', '-', '-', 'TIDAK ADA', '', '0000-00-00', '0000-00-00', 6, 51, 51.38, 107, 29, 23.77, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (459, 318, '1', 'SP-2', 1, '546.2/359/10.1.01.2/BPMPT/2016', '', '2016-04-19', '2018-04-19', 'DR DJUNJUNAN NO 125', '', '', 45, '', 15, '-', 4, 0, 1, '-', '-', '-', 1, 0, 'ZENNER ', '82R1001441', '-', '-', '', '0000-00-00', '0000-00-00', 6, 53, 42.84, 107, 35, 14.80, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (460, 156, '2', 'SB-1', 1, '546.2/935/29.1.03.0d/DPMPTSP/2017', '', '2017-07-11', '2019-07-11', 'JL.INDUSTRI CIMAREME I NO.25', '', '', 200, '', 171, '-', 8, 3, 3, '-', '-', 'SUBMERSIBLE', 15, 0, 'WESTECHAUS', 'B0322052', '-', 'ADA', '', '0000-00-00', '0000-00-00', 6, 51, 47.46, 107, 29, 29.70, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (461, 330, '2', 'SB-1', 1, '546.2/340/10.1.01.2/BPMPT/2016', '', '2016-05-02', '2018-04-19', 'KP. PURWAJAYA DESA PARAPATAN KEC. PURWADAI KAB. SUBANG.', '', '', 100, '', 65, '-', 6, 0, 0, '-', '0', '-', 0, 0, 'SCHLUMBERGER', '96WIK37839', '0', '', '', '0000-00-00', '0000-00-00', 6, 26, 13.90, 107, 42, 43.90, 5, NULL, NULL);
INSERT INTO `t_sumur` VALUES (462, 156, '2', 'SB-2', 1, '546.2/934/29.1.03.0d/DPMPTSP/2018', '', '2018-07-11', '2020-07-11', 'JL.INDUSTRI CIMAREME I NO.25', '', '', 200, '', 175.5, 'GIP', 8, 3, 3, '-', '-', 'SUBMERSIBLE', 15, 0, 'WESTECHAUS', '130322052', '-', 'ADA', '', '0000-00-00', '0000-00-00', 6, 51, 50.14, 107, 29, 28.50, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (463, 331, '2', 'SB-1', 1, '546.2/12/DU-SIPA/ESDM/2011', '', '2011-06-10', '2013-06-10', 'JL. RAYA AMPERA KAB. TURI CIKAUM TIMUR, CIKAUM SUBANG.', '', '', 100, '', 72, '-', 6, 2, 0, '-', '0', '-', 3, 0, '-', '0', '0', '0', '', '0000-00-00', '0000-00-00', 0, 0, 0.00, 0, 0, 0.00, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (464, 332, '2', 'SB 1', 1, '546.2/56/29.1.03.2a/DPMPTSP/2019', '', '2019-01-08', '2021-01-08', 'JL.CIBALIGO NO.76 RT08 RW08 KEL.CIGUGUR TENGAH KEC.CIMAHI SELATAN', '', '', 150, '', 58.32, '-', 8, 0, 3, '-', '-', '-', 15, 120, 'MENEUICKE', 'WS 80', '-', '-', '', '2019-02-08', '2019-02-08', 6, 54, 3.71, 107, 33, 23.41, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (465, 333, '2', 'SB-1', 1, '546.2/691/10.1.01.2/BPMPT/2016', '', '2016-08-15', '2018-08-04', 'JL. NARIPAN NO. 31-35', '', '', 70, '', 20, '-', 4, 0, 2, '-', '0', '-', 3, 49, 'ZENNER ', '14308125', '0', '0', '', '2019-02-08', '2019-02-08', 6, 55, 11.73, 107, 36, 42.59, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (466, 334, '1', 'SP-1', 1, '546.2/796/10.1.02.0/DPMPTSP/2017', '', '2017-12-22', '2019-12-22', 'JL. OTTO ISKANDARDINATA NO. 37 SUBANG.', '', '', 0, '', 2, '-', 0, 0, 4, '-', '0', '-', 250, 0, '-', '0', '0', '0', '', '0000-00-00', '0000-00-00', 0, 0, 0.00, 0, 0, 0.00, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (467, 335, '1', 'SP-1', 1, '546.2/212/10.1.02.0/DPMPTSP/2018', '', '2018-02-09', '2020-02-09', 'JL.RAYA CIMAREME 185 A', '', '', 35, '', 10, '-', 0, 0, 0, '-', '-', 'SENTRIFUGAL', 10, 0, '-', '-', '-', '-', '', '0000-00-00', '0000-00-00', 6, 51, 53.22, 107, 30, 35.42, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (468, 333, '2', 'SB-2', 1, '546.2/691/10.1.01.2/BPMPT/2016', '', '2016-08-15', '2018-08-04', 'JL. NARIPAN NO. 31-35', '', '', 70, '', 20, '-', 4, 0, 2, '-', '0', '-', 3, 49, 'ZENNER ', '14308128', '0', '0', '', '2019-02-08', '2019-02-08', 6, 55, 11.18, 107, 36, 42.59, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (469, 152, '2', 'SB 1', 1, '546.2/1016/29.1.03.0d/DPMPTSP/2018', '', '2018-07-18', '2020-07-18', 'JL. CIBALIGO NO.149 KEL.CIBEUREUM KEC.CIMAHI SELATAN', '', '', 250, '', 120, 'GIP', 8, 0, 3, '-', '-', '-', 30, 168, 'SCHLUMBERGER', '96 WIO 436', '-', '-', '', '2019-02-08', '2019-02-08', 6, 54, 22.08, 107, 33, 7.46, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (470, 336, '1', 'SP-1', 1, '546.2/218/10.1.02.0/DPMPTSP/2017', '', '2017-06-15', '2019-06-15', 'JL.BARU RENDE RT 01/15', '', '', 40, '', 0, 'PVC', 2, 0, 1, '-', '-', 'SENTRIFUGAL', 30, 0, '-', '-', '-', '-', '', '0000-00-00', '0000-00-00', 6, 44, 37.68, 107, 25, 11.80, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (471, 337, '1', 'SP-1', 1, '546.2/16/DU-SIPA/ESDM/2011', '', '2011-01-02', '2013-01-02', 'JL. RAYA KALIJATIDESA MANYETI KEC. DAWUAN KAB. SUBANG.', '', '', 16, '', 23, '-', 4, 3, 0, '-', '0', '-', 250, 0, 'LINEFLOW', '9900211', '6228171', '0', '', '0000-00-00', '0000-00-00', 6, 31, 51.20, 107, 41, 35.80, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (472, 338, '2', 'SB-1', 1, '546.2/876/10.1.02.0/DPMPTSP/2017', '', '2017-12-29', '2019-12-29', 'JL. KEBON KAWUNG NO 60, KEC. CICENDO', '', '', 89.4, '', 54, '-', 6, 0, 1.5, 'SUBMERSIBLE ', '-', '-', 3, 78, '-', '-', '0', '0', '', '2019-02-08', '2019-02-08', 6, 54, 43.90, 107, 35, 55.49, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (473, 339, '2', 'SB-1', 1, '546.2/1371/10.1.01.2/BPMPT/2016', '', '2016-12-29', '2018-12-02', 'JL.RAYA BATUJAJAR KM 2.8', '', '', 200, '', 66, '-', 0, 0, 0, '-', '-', '-', 0, 0, 'WESTHOUSE', 'LXLG80', '-', 'ADA', '', '2016-06-22', '0000-00-00', 6, 52, 59.96, 107, 29, 52.92, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (474, 340, '1', 'SP-1', 1, '546.2/93/SIPA-GSDM/2014', '', '2014-07-10', '2016-07-10', 'JL. RAYA PASIRKAREUMBI KEL. PASIRKAREUMBI KEC. SUBANG KAB. SUBANG.', '', '', 35, '', 5, '-', 4, 1, 0, '-', '0', '-', 0, 0, '-', '0', '0', '0', '', '0000-00-00', '0000-00-00', 6, 34, 16.37, 107, 45, 28.76, 5, NULL, NULL);
INSERT INTO `t_sumur` VALUES (475, 341, '2', 'SB 1', 1, '546.2/252/29.1.03.0d/DPMPTSP/2018', '', '2018-08-23', '2020-08-23', 'JL. MAHAR MARTANEGARA NO.98B RT002 RW010 KEL.CIGUGUR TENGAH KEC.CIMAHI TENGAH', '', '', 200, '', 71.2, 'GIP', 8, 0, 3, '-', '-', '-', 15, 120, 'SCHLUMBERGER', '15 WWQ 068', '-', '510.3/2537/UPTML/UAPV-2', '', '2017-10-23', '2019-10-23', 6, 53, 53.16, 107, 33, 12.94, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (476, 339, '2', 'SB-2', 1, '546.2/1372/10.1.01.2/BPMPT/2016', '', '2016-12-29', '2018-12-02', 'JL.RAYA BATUJAJAR KM 2.8', '', '', 150, '', 66, '-', 0, 0, 0, '-', '-', '-', 0, 0, 'WESTHOUSE', '1301001042', '-', 'ADA', '', '2016-06-22', '0000-00-00', 6, 52, 59.30, 107, 29, 47.61, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (477, 341, '2', 'SB 2', 1, '546.2/1253/29.1.03.0d/DPMPTSP/2018', '', '2018-08-23', '2020-08-23', 'JL. MAHAR MARTANEGARA NO.98B RT002 RW010 KEL.CIGUGUR TENGAH KEC.CIMAHI TENGAH', '', '', 200, '', 56.96, 'GIP', 10, 0, 3, '-', '-', '-', 20, 126, 'SCHLUMBERGER', '97 WWQ 430', '-', '510.3/2538/UPTML/UAPV-2', '', '2017-10-23', '2019-10-23', 6, 53, 52.93, 107, 33, 13.64, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (478, 342, '2', 'SB-1', 1, '546.2/277/10.1.01.2/BPMPT/2016', '', '0000-00-00', '0000-00-00', 'JL. RANCABENTANG NO. 56-58, KEC. CIDADAP', '', '', 80, '', 94, '-', 6, 2, 2, '-', '-', '-', 0, 0, 'SENSUS', '-', '-', '-', '', '0000-00-00', '0000-00-00', 6, 51, 53.09, 107, 31, 31.96, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (479, 343, '2', 'SB-1', 1, '546.2/1056/10.1.01.2/BPMPT/2016', '', '2016-11-15', '2018-11-15', 'DESA RANCASARI KEC. PAMANUKAN KAB. SUBANG.', '', '', 125, '', 70, '-', 0, 0, 0, '-', '0', '-', 0, 0, 'WESTECHAUSE', '1304000162', '0', '510.3/3473/UAPV.2', '', '2016-05-31', '0000-00-00', 6, 18, 25.54, 107, 49, 22.53, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (480, 341, '2', 'SB 3', 1, '546.2/254/29.1.03.0d/DPMPTSP/2018', '', '2018-08-23', '2020-08-23', 'JL. MAHAR MARTANEGARA NO.98B RT002 RW010 KEL.CIGUGUR TENGAH KEC.CIMAHI TENGAH', '', '', 200, '', 49.536, 'GIP', 8, 0, 3, '-', '-', '-', 7.5, 120, 'SCHLUMBERGER', '08 WHO 533', '-', '510.3/2539/UPTML/UAPV.2', '', '2017-10-23', '2019-10-23', 6, 53, 54.75, 107, 33, 12.79, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (481, 343, '3', 'SI-1', 1, '0', '', '0000-00-00', '0000-00-00', '-', '', '', 0, '', 0, '0', 0, 0, 0, '-', '0', '-', 0, 0, '-', '0', '0', '0', '', '0000-00-00', '0000-00-00', 0, 0, 0.00, 0, 0, 0.00, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (482, 342, '1', 'SP-1', 1, '546.2/276/10.1.01.2/BPMPT/2016', '', '0000-00-00', '0000-00-00', 'JL. RANCABENTANG NO. 56-58, KEC. CIDADAP', '', '', 30, '', 20, '-', 6, 2, 2, '-', '-', '-', 0, 0, 'SENSUS', '-', '-', '-', '', '0000-00-00', '0000-00-00', 6, 51, 51.81, 107, 36, 31.58, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (483, 341, '2', 'SB 4', 1, '546.2/1255/29.1.03.0d/DPMPTSP/2018', '', '2018-08-23', '2020-08-23', 'JL. MAHAR MARTANEGARA NO.98B RT002 RW010 KEL.CIGUGUR TENGAH KEC.CIMAHI TENGAH', '', '', 200, '', 49.536, 'GIP', 8, 0, 3, '-', '-', '-', 20, 102, 'SCHLUMBERGER', '15 WWQ 068', '-', '510.3/2536/UPTML/UAPV-2', '', '2017-10-23', '2019-10-23', 6, 53, 53.09, 107, 33, 10.93, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (484, 344, '1', 'SP-1', 1, '546.2/69/DU-PENG/2008', '', '2008-12-10', '0000-00-00', 'JL. DAWUAN RT 15/05 DESA DAWUAN KEC. DAWUAN KAB. SUBANG.', '', '', 10, '', 10, '-', 4, 1, 0, '-', '0', '-', 150, 0, 'MM', '0', '2', '0', '', '0000-00-00', '0000-00-00', 6, 32, 24.80, 107, 41, 32.80, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (485, 345, '2', 'SB 1', 1, '546.2/477/10.1.01.2/BPMPT/2015', '', '2014-08-04', '2017-07-25', 'JL. INDUSTRI IV NO.2 KEL.UTAMA KEC.CIMAHI SELATAN', '', '', 210, '', 78.3, '-', 8, 0, 3, '-', '-', '-', 15, 180, 'SCHLUMBERGER', '83 CIM 002', '-', '510.3/5870/UAPV.2', '', '2015-09-03', '2017-09-03', 6, 54, 20.35, 107, 32, 53.68, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (486, 345, '2', 'SB 2', 1, '546.2/476/10.1.01.2/BPMPT/2015', '', '2015-08-04', '2017-07-22', 'JL. INDUSTRI IV NO.2 KEL.UTAMA KEC.CIMAHI SELATAN', '', '', 210, '', 98.1, '-', 8, 0, 3, '-', '-', '-', 15, 180, 'SCHLUMBERGER', '93 AKP 253', '-', '510.3/5869/UAPV.2', '', '2015-09-03', '2017-09-03', 6, 54, 19.75, 107, 32, 55.43, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (487, 347, '1', 'SP-1', 1, '546.2/47/DU-SIPA/GSDM/2014', '', '0000-00-00', '0000-00-00', 'JL. RAYA PAGADEN KM. 9 KEC. PAGADEN SUBANG.', '', '', 25, '', 5, '-', 4, 3, 0, '-', '0', '-', 500, 0, '-', '0', '0', '0', '', '0000-00-00', '0000-00-00', 6, 29, 56.66, 107, 48, 20.33, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (488, 339, '2', 'SB-3', 1, '546.21373/10.1.01.2/BPMPT/2016', '', '2016-12-29', '2018-12-02', 'JL.RAYA BATUJAJAR KM.2.8', '', '', 150, '', 66, '-', 0, 0, 0, '-', '-', '-', 0, 0, 'WESTHOUSE', '1110002266', '-', 'ADA', '', '2016-09-07', '0000-00-00', 6, 52, 59.27, 107, 29, 47.87, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (489, 346, '2', 'SB-1', 1, '503.546.2/632/BPPT/2011', '', '2011-06-30', '2016-06-30', 'JL. PASIRKALIKI NO. 100 KEC. SUKAJADI', '', '', 100, '', 0, '-', 4, 0, 1, '-', '-', '-', 1.5, 82, 'BR', '140121030', '-', '-', '', '0000-00-00', '0000-00-00', 6, 54, 32.87, 107, 35, 52.27, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (490, 348, '2', 'SB 1', 1, '546.2/1313/10.1.01.2/BPMPT/2016', '', '2016-12-27', '2018-11-22', 'JL. JOYODIKROMO NO.42 KP.HUJUNG RT09 RW07 KEL.UTAMA KEC.CIMAHI SELATAN', '', '', 250, '', 128, '-', 0, 0, 0, '-', '-', '-', 0, 0, '-', '-', '-', '510.3/5304/UAPV.1', '', '2016-08-22', '2016-08-22', 6, 54, 21.61, 107, 32, 30.24, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (491, 349, '1', 'SP-1', 1, '546.2/645/10.1.01.2/BPMPT/2016', '', '2016-07-14', '2018-07-14', 'DESA WANTILAN KEC. CIPEUNDEUY KAB. SUBANG.', '', '', 30, '', 15, '-', 0, 0, 0, '-', '0', '-', 0, 0, 'ARITA', '12120046', '0', '510.3/2616/UAPV.2', '', '2016-04-20', '0000-00-00', 6, 29, 58.45, 107, 36, 4.09, 5, NULL, NULL);
INSERT INTO `t_sumur` VALUES (492, 339, '2', 'SB-4', 1, '546.2/1374/10.1.01.2/BPMPT/2016', '', '2016-12-29', '2018-12-02', 'JL.RAYA BATUJAJAR KM 2.8', '', '', 200, '', 180, '-', 0, 0, 0, '-', '-', '-', 0, 0, 'WESTHOUSE', '1301001254', '-', 'ADA', '', '2016-09-07', '0000-00-00', 6, 52, 59.27, 107, 29, 47.87, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (493, 348, '2', 'SB 2', 1, '546.2/1314/10.1.01.2/BPMPT/2016', '', '2016-12-27', '2018-11-22', 'JL. JOYODIKROMO NO.42 KP.HUJUNG RT09 RW07 KEL.UTAMA KEC.CIMAHI SELATAN', '', '', 250, '', 106, '-', 0, 0, 0, '-', '-', '-', 0, 0, '-', '-', '-', '510.3/5307/UAPV.1', '', '2016-08-22', '2016-08-22', 6, 54, 23.36, 107, 32, 25.56, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (494, 349, '1', 'SP-2', 1, '546.2/646/10.1.01.2/BPMPT/2016', '', '2016-07-14', '2018-07-14', 'DESA WANTILAN KEC. CIPEUNDEUY KAB. SUBANG.', '', '', 30, '', 15, '-', 0, 0, 0, '-', '0', '-', 0, 0, 'DUSAN', 'DN25', '0', '510.3/2618/UAPV.2', '', '2016-04-20', '0000-00-00', 6, 29, 53.76, 107, 36, 4.41, 5, NULL, NULL);
INSERT INTO `t_sumur` VALUES (495, 348, '2', 'SB 3', 1, '546.2/1315/10.1.01.2/BPMPT/2016', '', '2016-12-27', '2018-11-22', 'JL. JOYODIKROMO NO.42 KP.HUJUNG RT09 RW07 KEL.UTAMA KEC.CIMAHI SELATAN', '', '', 250, '', 108, '-', 0, 0, 0, '-', '-', '-', 0, 0, '-', '-', '-', '510.3/5303/UAPV.1', '', '2016-08-22', '2016-08-22', 6, 54, 4.19, 107, 32, 27.12, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (496, 349, '5', 'ASR-1', 1, '546.2/637/10.1.01.2/BPMPT/2016', '', '2016-07-14', '2018-07-14', 'DESA WANTILAN, KEC. CIPEUNDEUY, KAB. SUBANG', '', '', 60, '', 50, '-', 0, 0, 0, '-', '0', '-', 0, 0, 'ARITA', '12123182', '0', '510.3/2616/UAPV.2', '', '2016-04-20', '0000-00-00', 6, 29, 57.84, 107, 36, 1.51, 5, NULL, NULL);
INSERT INTO `t_sumur` VALUES (497, 348, '2', 'SB 5', 1, '546.2/1317/10.1.01.2/BPMPT/2016', '', '2016-12-27', '2018-11-22', 'JL. JOYODIKROMO NO.42 KP.HUJUNG RT09 RW07 KEL.UTAMA KEC.CIMAHI SELATAN', '', '', 250, '', 148, '-', 0, 0, 0, '-', '-', '-', 0, 0, '-', '-', '-', '510.3/5305/UAPV.1', '', '2016-08-22', '2016-08-22', 6, 54, 5.38, 107, 32, 24.85, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (498, 350, '2', 'SB-1', 1, '546.2/1261/10.1.01.2/bpmpt/2016', '', '2016-12-27', '2018-11-22', 'JL. HOS. COKROAMINOTO NO. 41 - 43, KEC. CICENDO', '', '', 120, '', 150, '-', 6, 3, 3, '-', '-', '-', 0, 0, 'SENSUS', '11001082', '-', '5103/4687/UAPV/-2', '', '2016-07-22', '0000-00-00', 6, 54, 37.44, 107, 30, 50.05, 2, NULL, NULL);
INSERT INTO `t_sumur` VALUES (499, 351, '5', 'ASR-1', 1, '546.2/611/29.1.03.2a/DPMPTSP/2018', '', '2018-05-11', '2020-05-11', 'JL.INDUSTRI CIMAREME II NO.5', '', '', 120, '', 36, '-', 6, 0, 2, '-', '-', 'SUBMERSIBLE', 7.5, 42, '-', '-', '-', '-', '', '0000-00-00', '0000-00-00', 6, 52, 2.14, 107, 29, 42.96, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (500, 352, '2', 'SB 1', 1, '546.2/903/29.1.03.2a/DPMPTSP/2018', '', '2018-11-16', '2020-11-16', 'JL. INDUSTRI II NO.20 KEL.UTAMA KEC.CIMAHI SELATAN', '', '', 200, '', 59.4, '-', 8, 0, 2, '-', '-', '-', 20, 150, '-', 'WS 680', '-', '-', '', '2019-02-08', '2019-02-08', 6, 55, 3.25, 107, 32, 40.65, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (501, 352, '2', 'SB 2', 1, '546.2/902/29.1.03.2a/DPMPTSP/2018', '', '2018-11-16', '2020-11-16', 'JL. INDUSTRI 2 NO.20 KEL.UTAMA KEC.CIMAHI SELATAN', '', '', 210, '', 83, '-', 8, 0, 2, '-', '-', '-', 15, 150, '-', '131', '-', '-', '', '2019-02-08', '2019-02-08', 6, 54, 58.28, 107, 32, 40.30, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (502, 350, '2', 'SB-2', 1, '546.2/1262/10.1.01.2/bpmpt/2016', '', '2016-12-27', '2018-11-22', 'JL. HOS. COKROAMINOTO NO. 41 - 43, KEC. CICENDO', '', '', 105, '', 150, '-', 6, 2, 2, '-', '-', '-', 0, 0, 'SENSUS', '1100105', '-', '510.1/4787/UAPV-2', '', '0000-00-00', '0000-00-00', 6, 54, 36.28, 107, 35, 48.58, 2, NULL, NULL);
INSERT INTO `t_sumur` VALUES (503, 352, '2', 'SB 3', 1, '546.2/904/29.1.03.2a/DPMPTSP/2018', '', '2018-11-16', '2020-11-16', 'JL. INDUSTRI 2 NO.20 KEL.UTAMA KEC.CIMAHI SELATAN', '', '', 210, '', 83, '-', 8, 0, 2.5, '-', '-', '-', 20, 150, '-', '141000', '-', '-', '', '2019-02-08', '2019-02-08', 6, 54, 56.47, 107, 32, 37.23, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (504, 352, '2', 'SB 4', 1, '546.2/901/29.1.03.2a/DPMPTSP/2018', '', '2018-11-16', '2020-11-16', 'JL. INDUSTRI 2 NO.20 KEL.UTAMA KEC.CIMAHI SELATAN', '', '', 200, '', 76.5, '-', 8, 0, 2.5, '-', '-', '-', 20, 120, '-', '-', '-', '-', '', '2019-02-08', '2019-02-08', 6, 54, 56.47, 107, 32, 37.32, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (505, 353, '5', 'ASR-1', 1, '546.2/454/10.1.01.2/BPMPT/2016', '', '0000-00-00', '0000-00-00', 'DESA WANAKERTA KEC.PURWADADI KAB. SUBANG ', '', '', 100, '', 120, '-', 0, 0, 0, '-', '0', '-', 0, 0, 'SCHLUMBERGER', 'WSG 50', '0', '510.3/5189/UAPV.2', '', '2015-08-05', '0000-00-00', 6, 28, 36.13, 107, 41, 0.18, 5, NULL, NULL);
INSERT INTO `t_sumur` VALUES (506, 352, '2', 'SB 5', 1, '546.2/900/29.1.03.2a/DPMPTSP/2018', '', '2018-11-16', '2020-11-16', 'JL. INDUSTRI 2 NO.20 KEL.UTAMA KEC.CIMAHI SELATAN', '', '', 210, '', 108.9, '-', 8, 0, 2, '-', '-', '-', 20, 182, '-', '-', '-', '-', '', '2019-02-08', '2019-02-08', 6, 54, 52.06, 107, 32, 40.30, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (507, 352, '2', 'SB 6', 1, '546.2/899/29.1.03.2a/DPMPTSP/2018', '', '2018-11-16', '2020-08-16', 'JL. INDUSTRI 2 NO.20 KEL.UTAMA KEC.CIMAHI SELATAN', '', '', 200, '', 76.5, '-', 8, 0, 2.5, '-', '-', '-', 15, 150, '-', '-', '-', '-', '', '2019-02-08', '2019-02-08', 6, 54, 50.11, 107, 32, 41.24, 3, NULL, NULL);
INSERT INTO `t_sumur` VALUES (508, 354, '2', 'SB-1', 1, '546.2/684/10.1.02.0/DPMPTSP/2017', '', '2017-11-23', '2019-11-23', 'JL.INDUSTRI CIMAREME III NO.2', '', '', 70, '', 28, 'PVC', 4, 0, 1, '-', '-', 'SUBMERSIBLE', 3, 60, '-', '-', '-', '-', '', '0000-00-00', '0000-00-00', 6, 52, 6.80, 107, 29, 32.60, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (509, 355, '2', 'SB-1', 1, '503.546.2/192/BPPT', '', '2010-03-28', '2012-03-28', 'JL. IR. H. JUANDA NO. 381/A, KEC. COBLONG', '', '', 150, '', 83.7, '-', 6, 2, 2, '-', '-', '-', 5, 90, 'SENSUS', '11001096', '-', '-', '', '0000-00-00', '0000-00-00', 6, 52, 15.44, 107, 37, 9.66, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (510, 353, '5', 'ASR-2', 1, '546.2/455/10.1.01.2/BPMPT/2016', '', '2016-06-02', '2018-06-02', 'DESA WANAKERTA KEC. PURWADADI KAB. SUBANG.', '', '', 100, '', 60, '-', 0, 0, 0, '-', '0', '-', 0, 0, 'BR', '110930103', '0', '510.3/5188/UAPV.2', '', '2015-08-05', '0000-00-00', 6, 28, 33.11, 107, 40, 58.57, 5, NULL, NULL);
INSERT INTO `t_sumur` VALUES (511, 353, '5', 'ASR-3', 1, '546.2/456/10.1.01.2/BPMPT/2016', '', '2016-06-02', '2018-06-02', 'DESA WANAKERTA KEC. PURWADADI KAB. SUBANG.', '', '', 100, '', 100, '-', 0, 0, 0, '-', '-', '-', 0, 0, 'AMICO', 'H02050', '0', '510.3/5190/UAPV.2', '', '2015-08-05', '0000-00-00', 6, 28, 28.75, 107, 40, 59.13, 5, NULL, NULL);
INSERT INTO `t_sumur` VALUES (512, 356, '2', 'SB-1', 1, '546.2/920/10.1.01.2/BPMPT/2016', '', '2016-10-04', '2018-09-14', 'JL.RAYA ORION NO.461', '', '', 120, '', 48, '-', 0, 0, 0, '-', '-', '-', 0, 0, 'SCH LUMBERGER', '83CIK00729', '-', 'ADA', '', '2015-11-06', '0000-00-00', 6, 50, 43.58, 107, 29, 29.94, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (513, 355, '2', 'SB-2', 1, '503.546.2/193/BPPT', '', '2010-03-29', '2012-03-29', 'JL. IR. H. JUANDA NO. 381/A, KEC. COBLONG', '', '', 150, '', 83.7, '-', 6, 2, 2, '-', '-', '-', 5, 90, 'SENSUS', '11001069', '-', '-', '', '0000-00-00', '0000-00-00', 6, 52, 16.74, 107, 37, 10.67, 1, NULL, NULL);
INSERT INTO `t_sumur` VALUES (515, 8, '1', 'SD-099', 1, '321/IZIN/2020', 'DOC_20210213200221.pdf', '2020-01-28', '2021-12-31', 'jl. agueng no 20', '[\"IMG_202102132002210.png\",\"IMG_202102132002211.jpg\"]', 'FILE_20210213200221.jpg', 100, 'DOC_20210213200221.pdf', 123, 'PVC', 12, 13, 16, 'SANYO', '09123435', 'SUBMARIN', 110, 13, 'KILO', '12312', '312', '1233/TERA/2020', 'TERA_20210213210202.docx', '0000-00-00', '0000-00-00', 12, 12, 12.89, 12, 23, 32.98, 1, 12, 1);

-- ----------------------------
-- Table structure for t_user_permission
-- ----------------------------
DROP TABLE IF EXISTS `t_user_permission`;
CREATE TABLE `t_user_permission`  (
  `user_id` int(4) NULL DEFAULT NULL,
  `permission_id` int(4) NULL DEFAULT NULL,
  INDEX `key`(`user_id`, `permission_id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of t_user_permission
-- ----------------------------
INSERT INTO `t_user_permission` VALUES (1, 1);
INSERT INTO `t_user_permission` VALUES (1, 2);
INSERT INTO `t_user_permission` VALUES (1, 3);
INSERT INTO `t_user_permission` VALUES (1, 4);
INSERT INTO `t_user_permission` VALUES (1, 5);
INSERT INTO `t_user_permission` VALUES (1, 6);
INSERT INTO `t_user_permission` VALUES (1, 7);
INSERT INTO `t_user_permission` VALUES (1, 8);
INSERT INTO `t_user_permission` VALUES (1, 11);
INSERT INTO `t_user_permission` VALUES (2, 1);
INSERT INTO `t_user_permission` VALUES (2, 2);
INSERT INTO `t_user_permission` VALUES (2, 3);
INSERT INTO `t_user_permission` VALUES (2, 4);
INSERT INTO `t_user_permission` VALUES (2, 9);
INSERT INTO `t_user_permission` VALUES (2, 10);

-- ----------------------------
-- Table structure for t_users
-- ----------------------------
DROP TABLE IF EXISTS `t_users`;
CREATE TABLE `t_users`  (
  `id_user` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `id_pegawai` int(5) NULL DEFAULT NULL,
  `id_role` int(4) NULL DEFAULT NULL,
  `id_bidang` int(4) NULL DEFAULT NULL,
  `id_wilayah` int(4) NULL DEFAULT NULL,
  PRIMARY KEY (`id_user`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of t_users
-- ----------------------------
INSERT INTO `t_users` VALUES (1, 'admin', '$2y$10$bmS81zg3B3dTt8JK0EeOsuKdlEFq/ylJ1eZ6zXl7rAYJQFU2uTnxW', NULL, 1, NULL, NULL);
INSERT INTO `t_users` VALUES (2, 'operator', '$2y$10$it2UHCeAhFCrJt58/BDOVuq/N8yqwFBUj43oVZOm.PirHNARWNxuG', 1, 2, NULL, NULL);

-- ----------------------------
-- Table structure for t_zona
-- ----------------------------
DROP TABLE IF EXISTS `t_zona`;
CREATE TABLE `t_zona`  (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `type_zona` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of t_zona
-- ----------------------------
INSERT INTO `t_zona` VALUES (1, 'AMAN');
INSERT INTO `t_zona` VALUES (2, 'RAWAN');
INSERT INTO `t_zona` VALUES (3, 'KRITIS');
INSERT INTO `t_zona` VALUES (4, 'RESAPAN');
INSERT INTO `t_zona` VALUES (5, 'RUSAK');

-- ----------------------------
-- Table structure for tabel_menu
-- ----------------------------
DROP TABLE IF EXISTS `tabel_menu`;
CREATE TABLE `tabel_menu`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul_menu` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `link` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `icon` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `is_main_menu` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tabel_menu
-- ----------------------------
INSERT INTO `tabel_menu` VALUES (1, 'Data Air Tanah', '#', 'fa fa-folder', 0);
INSERT INTO `tabel_menu` VALUES (3, 'KOTA BANDUNG', '#', 'fa fa-folder', 1);
INSERT INTO `tabel_menu` VALUES (4, 'KOTA CIMAHI', '#', 'fa fa-folder', 1);
INSERT INTO `tabel_menu` VALUES (5, 'Data Perusahaan', 'penjualan', 'fa fa-dashboard', 2);
INSERT INTO `tabel_menu` VALUES (6, 'Data Sumur', 'pembelian', 'fa fa-dashboard', 2);
INSERT INTO `tabel_menu` VALUES (7, 'Laporan Bulanan', 'laporan', 'fa fa-dashboard', 0);
INSERT INTO `tabel_menu` VALUES (8, 'KAB. BANDUNG BARAT', '#', 'fa fa-folder', 1);
INSERT INTO `tabel_menu` VALUES (9, 'KAB. SUBANG', '#', 'fa fa-folder', 1);
INSERT INTO `tabel_menu` VALUES (10, NULL, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for user_log
-- ----------------------------
DROP TABLE IF EXISTS `user_log`;
CREATE TABLE `user_log`  (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nama` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `uname` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `passwd` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `level` int(3) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user_log
-- ----------------------------
INSERT INTO `user_log` VALUES (1, 'Administrator', 'admin', '827ccb0eea8a706c4c34a16891f84e7b', 1);
INSERT INTO `user_log` VALUES (2, 'Ridwan', 'coadmin', '3fc0a7acf087f549ac2b266baf94b8b1', 2);
INSERT INTO `user_log` VALUES (3, 'cimahi', 'cimahi', '0860dfc81a442d5c56230c8f5cebf1d5', 4);
INSERT INTO `user_log` VALUES (4, 'bandung', 'bandung', '257ffa69697c2d5144f0b4b76b51ae95', 5);
INSERT INTO `user_log` VALUES (5, 'bandung barat', 'kbb', '140444c9a3f270010ef2f823d4d76263', 6);
INSERT INTO `user_log` VALUES (6, 'subang', 'subang', '2d958a41c9a42192597f5038df0e138c', 7);
INSERT INTO `user_log` VALUES (7, 'user8', 'user8', 'bb9d500d2ef55848da23c33eada3830f', 8);

-- ----------------------------
-- View structure for view_masa_berlaku_sipa
-- ----------------------------
DROP VIEW IF EXISTS `view_masa_berlaku_sipa`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `view_masa_berlaku_sipa` AS select `t_perusahaan`.`nama_perusahaan` AS `nama_perusahaan`,`t_sumur`.`no_sumur` AS `no_sumur`,`t_sumur`.`no_sipa` AS `no_sipa`,`t_sumur`.`tgl_ahir_sipa` AS `tgl_ahir_sipa`,to_days(`t_sumur`.`tgl_ahir_sipa`) - to_days(curdate()) AS `sisa_waktu` from (`t_sumur` left join `t_perusahaan` on(`t_perusahaan`.`id_perusahaan` = `t_sumur`.`id_perusahaan`));

-- ----------------------------
-- View structure for view_masa_berlaku_tera
-- ----------------------------
DROP VIEW IF EXISTS `view_masa_berlaku_tera`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `view_masa_berlaku_tera` AS select `t_perusahaan`.`nama_perusahaan` AS `nama_perusahaan`,`t_sumur`.`no_sumur` AS `no_sumur`,`t_sumur`.`no_meter_air` AS `no_meter_air`,`t_sumur`.`tgl_ahir_tera` AS `tgl_ahir_tera`,to_days(`t_sumur`.`tgl_ahir_tera`) - to_days(curdate()) AS `sisa_waktu` from (`t_sumur` left join `t_perusahaan` on(`t_perusahaan`.`id_perusahaan` = `t_sumur`.`id_perusahaan`));

-- ----------------------------
-- View structure for view_selisih
-- ----------------------------
DROP VIEW IF EXISTS `view_selisih`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `view_selisih` AS select `t_sumur`.`no_sipa` AS `no_sipa`,`t_sumur`.`no_sumur` AS `no_sumur`,`t_sumur`.`tgl_ahir_sipa` AS `tgl_ahir_sipa`,`t_perusahaan`.`nama_perusahaan` AS `nama_perusahaan`,curdate() AS `tgl_sekarang`,to_days(`t_sumur`.`tgl_ahir_sipa`) - to_days(curdate()) AS `selisih` from (`t_sumur` left join `t_perusahaan` on(`t_perusahaan`.`id_perusahaan` = `t_sumur`.`id_perusahaan`));

SET FOREIGN_KEY_CHECKS = 1;
