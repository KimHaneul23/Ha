-- MySQL dump 10.16  Distrib 10.1.13-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: sissel997
-- ------------------------------------------------------
-- Server version	10.1.13-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `g5_auth`
--

DROP TABLE IF EXISTS `g5_auth`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `g5_auth` (
  `mb_id` varchar(20) NOT NULL DEFAULT '',
  `au_menu` varchar(20) NOT NULL DEFAULT '',
  `au_auth` set('r','w','d') NOT NULL DEFAULT '',
  PRIMARY KEY (`mb_id`,`au_menu`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `g5_auth`
--

LOCK TABLES `g5_auth` WRITE;
/*!40000 ALTER TABLE `g5_auth` DISABLE KEYS */;
/*!40000 ALTER TABLE `g5_auth` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `g5_autosave`
--

DROP TABLE IF EXISTS `g5_autosave`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `g5_autosave` (
  `as_id` int(11) NOT NULL AUTO_INCREMENT,
  `mb_id` varchar(20) NOT NULL,
  `as_uid` bigint(20) unsigned NOT NULL,
  `as_subject` varchar(255) NOT NULL,
  `as_content` text NOT NULL,
  `as_datetime` datetime NOT NULL,
  PRIMARY KEY (`as_id`),
  UNIQUE KEY `as_uid` (`as_uid`),
  KEY `mb_id` (`mb_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `g5_autosave`
--

LOCK TABLES `g5_autosave` WRITE;
/*!40000 ALTER TABLE `g5_autosave` DISABLE KEYS */;
/*!40000 ALTER TABLE `g5_autosave` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `g5_board`
--

DROP TABLE IF EXISTS `g5_board`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `g5_board` (
  `bo_table` varchar(20) NOT NULL DEFAULT '',
  `gr_id` varchar(255) NOT NULL DEFAULT '',
  `bo_subject` varchar(255) NOT NULL DEFAULT '',
  `bo_mobile_subject` varchar(255) NOT NULL DEFAULT '',
  `bo_device` enum('both','pc','mobile') NOT NULL DEFAULT 'both',
  `bo_admin` varchar(255) NOT NULL DEFAULT '',
  `bo_list_level` tinyint(4) NOT NULL DEFAULT '0',
  `bo_read_level` tinyint(4) NOT NULL DEFAULT '0',
  `bo_write_level` tinyint(4) NOT NULL DEFAULT '0',
  `bo_reply_level` tinyint(4) NOT NULL DEFAULT '0',
  `bo_comment_level` tinyint(4) NOT NULL DEFAULT '0',
  `bo_upload_level` tinyint(4) NOT NULL DEFAULT '0',
  `bo_download_level` tinyint(4) NOT NULL DEFAULT '0',
  `bo_html_level` tinyint(4) NOT NULL DEFAULT '0',
  `bo_link_level` tinyint(4) NOT NULL DEFAULT '0',
  `bo_count_delete` tinyint(4) NOT NULL DEFAULT '0',
  `bo_count_modify` tinyint(4) NOT NULL DEFAULT '0',
  `bo_read_point` int(11) NOT NULL DEFAULT '0',
  `bo_write_point` int(11) NOT NULL DEFAULT '0',
  `bo_comment_point` int(11) NOT NULL DEFAULT '0',
  `bo_download_point` int(11) NOT NULL DEFAULT '0',
  `bo_use_category` tinyint(4) NOT NULL DEFAULT '0',
  `bo_category_list` text NOT NULL,
  `bo_use_sideview` tinyint(4) NOT NULL DEFAULT '0',
  `bo_use_file_content` tinyint(4) NOT NULL DEFAULT '0',
  `bo_use_secret` tinyint(4) NOT NULL DEFAULT '0',
  `bo_use_dhtml_editor` tinyint(4) NOT NULL DEFAULT '0',
  `bo_select_editor` varchar(50) NOT NULL DEFAULT '',
  `bo_use_rss_view` tinyint(4) NOT NULL DEFAULT '0',
  `bo_use_good` tinyint(4) NOT NULL DEFAULT '0',
  `bo_use_nogood` tinyint(4) NOT NULL DEFAULT '0',
  `bo_use_name` tinyint(4) NOT NULL DEFAULT '0',
  `bo_use_signature` tinyint(4) NOT NULL DEFAULT '0',
  `bo_use_ip_view` tinyint(4) NOT NULL DEFAULT '0',
  `bo_use_list_view` tinyint(4) NOT NULL DEFAULT '0',
  `bo_use_list_file` tinyint(4) NOT NULL DEFAULT '0',
  `bo_use_list_content` tinyint(4) NOT NULL DEFAULT '0',
  `bo_table_width` int(11) NOT NULL DEFAULT '0',
  `bo_subject_len` int(11) NOT NULL DEFAULT '0',
  `bo_mobile_subject_len` int(11) NOT NULL DEFAULT '0',
  `bo_page_rows` int(11) NOT NULL DEFAULT '0',
  `bo_mobile_page_rows` int(11) NOT NULL DEFAULT '0',
  `bo_new` int(11) NOT NULL DEFAULT '0',
  `bo_hot` int(11) NOT NULL DEFAULT '0',
  `bo_image_width` int(11) NOT NULL DEFAULT '0',
  `bo_skin` varchar(255) NOT NULL DEFAULT '',
  `bo_mobile_skin` varchar(255) NOT NULL DEFAULT '',
  `bo_include_head` varchar(255) NOT NULL DEFAULT '',
  `bo_include_tail` varchar(255) NOT NULL DEFAULT '',
  `bo_content_head` text NOT NULL,
  `bo_mobile_content_head` text NOT NULL,
  `bo_content_tail` text NOT NULL,
  `bo_mobile_content_tail` text NOT NULL,
  `bo_insert_content` text NOT NULL,
  `bo_gallery_cols` int(11) NOT NULL DEFAULT '0',
  `bo_gallery_width` int(11) NOT NULL DEFAULT '0',
  `bo_gallery_height` int(11) NOT NULL DEFAULT '0',
  `bo_mobile_gallery_width` int(11) NOT NULL DEFAULT '0',
  `bo_mobile_gallery_height` int(11) NOT NULL DEFAULT '0',
  `bo_upload_size` int(11) NOT NULL DEFAULT '0',
  `bo_reply_order` tinyint(4) NOT NULL DEFAULT '0',
  `bo_use_search` tinyint(4) NOT NULL DEFAULT '0',
  `bo_order` int(11) NOT NULL DEFAULT '0',
  `bo_count_write` int(11) NOT NULL DEFAULT '0',
  `bo_count_comment` int(11) NOT NULL DEFAULT '0',
  `bo_write_min` int(11) NOT NULL DEFAULT '0',
  `bo_write_max` int(11) NOT NULL DEFAULT '0',
  `bo_comment_min` int(11) NOT NULL DEFAULT '0',
  `bo_comment_max` int(11) NOT NULL DEFAULT '0',
  `bo_notice` text NOT NULL,
  `bo_upload_count` tinyint(4) NOT NULL DEFAULT '0',
  `bo_use_email` tinyint(4) NOT NULL DEFAULT '0',
  `bo_use_cert` enum('','cert','adult','hp-cert','hp-adult') NOT NULL DEFAULT '',
  `bo_use_sns` tinyint(4) NOT NULL DEFAULT '0',
  `bo_use_captcha` tinyint(4) NOT NULL DEFAULT '0',
  `bo_sort_field` varchar(255) NOT NULL DEFAULT '',
  `bo_1_subj` varchar(255) NOT NULL DEFAULT '',
  `bo_2_subj` varchar(255) NOT NULL DEFAULT '',
  `bo_3_subj` varchar(255) NOT NULL DEFAULT '',
  `bo_4_subj` varchar(255) NOT NULL DEFAULT '',
  `bo_5_subj` varchar(255) NOT NULL DEFAULT '',
  `bo_6_subj` varchar(255) NOT NULL DEFAULT '',
  `bo_7_subj` varchar(255) NOT NULL DEFAULT '',
  `bo_8_subj` varchar(255) NOT NULL DEFAULT '',
  `bo_9_subj` varchar(255) NOT NULL DEFAULT '',
  `bo_10_subj` varchar(255) NOT NULL DEFAULT '',
  `bo_1` varchar(255) NOT NULL DEFAULT '',
  `bo_2` varchar(255) NOT NULL DEFAULT '',
  `bo_3` varchar(255) NOT NULL DEFAULT '',
  `bo_4` varchar(255) NOT NULL DEFAULT '',
  `bo_5` varchar(255) NOT NULL DEFAULT '',
  `bo_6` varchar(255) NOT NULL DEFAULT '',
  `bo_7` varchar(255) NOT NULL DEFAULT '',
  `bo_8` varchar(255) NOT NULL DEFAULT '',
  `bo_9` varchar(255) NOT NULL DEFAULT '',
  `bo_10` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`bo_table`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `g5_board`
--

LOCK TABLES `g5_board` WRITE;
/*!40000 ALTER TABLE `g5_board` DISABLE KEYS */;
INSERT INTO `g5_board` VALUES ('doctor','community','피부과 전문의','','both','',1,1,10,10,10,10,10,10,10,1,1,0,0,0,0,1,'구월점|송도점',0,0,0,0,'',0,0,0,0,0,0,1,0,0,100,60,30,100,100,24,100,600,'theme/doctor','theme/doctor','_head.php','_tail.php','','','','','',1,400,500,125,100,1048576,1,0,0,5,0,0,0,0,0,'',2,0,'',0,0,'wr_good asc, wr_num, wr_reply','','','','','','','','','','','','','','','','','','','',''),('equipment','community','장비 소개','','both','',1,1,10,10,10,10,10,10,10,1,1,0,0,0,0,1,'안티에이징|여드름·흉터·모공|색조·홍조|피부질환|비만·체형|제모·탈모|관리·진단',0,0,0,0,'',0,0,0,0,0,0,1,0,0,100,60,30,8,8,24,100,600,'theme/equipment','theme/equipment','_head.php','_tail.php','','','','','',5,202,150,125,100,1048576,1,0,0,1,0,0,0,0,0,'',2,0,'',0,0,'wr_good asc, wr_num, wr_reply','','','','','','','','','','','','','','','','','','','',''),('notice_event','community','공지사항 / 이벤트','','both','',1,1,10,10,10,10,10,10,10,1,1,0,0,0,0,1,'공지사항|이벤트',0,0,0,1,'',0,0,0,0,0,0,0,0,0,100,60,30,12,12,24,100,600,'theme/event','theme/event','_head.php','_tail.php','','','','','',3,240,150,125,100,1048576,1,1,0,0,0,0,0,0,0,'',2,0,'',0,0,'wr_good asc, wr_num, wr_reply','','','','','','','','','','','','','','','','','','','',''),('online','community','온라인상담','','both','',1,1,1,10,10,1,10,2,10,1,1,0,0,0,0,0,'',0,0,0,0,'',0,0,0,0,0,0,0,0,0,100,60,30,12,12,24,100,600,'theme/online','theme/online','_head.php','_tail.php','','','','','',4,202,150,125,100,1048576,1,1,0,0,0,0,0,0,0,'',4,0,'',0,0,'','','','','','','','','','','','','','','','','','','','',''),('review','community','전후 사진','','both','',1,2,10,10,10,10,10,10,10,1,1,0,0,0,0,1,'미용진료|피부질환|피부기능의학|피부외과|비만체형|남성진료',0,0,0,0,'',0,0,0,0,0,0,0,0,0,100,60,30,12,12,24,100,600,'theme/review','theme/review','_head.php','_tail.php','','','','','',3,300,400,125,100,1048576,1,0,0,0,0,0,0,0,0,'',2,0,'',0,0,'wr_good asc, wr_num, wr_reply','','','','','','','','','','','','','','','','','','','',''),('text_review','community','손글씨후기','','both','',1,2,10,10,10,10,10,10,10,1,1,0,0,0,0,0,'',0,0,0,1,'',0,0,0,0,0,0,0,0,0,100,60,30,12,12,24,100,600,'theme/text_review','theme/text_review','_head.php','_tail.php','','','','','',3,380,200,125,100,1048576,1,0,0,0,0,0,0,0,0,'',2,0,'',0,0,'wr_good asc, wr_num, wr_reply','','','','','','','','','','','','','','','','','','','',''),('youtube','community','YOUTUBE','','both','',1,1,10,10,10,10,10,10,10,1,1,0,0,0,0,1,'미용진료|피부질환|피부기능의학|피부외과|비만체형|남성진료',0,0,0,0,'',0,0,0,0,0,0,0,0,0,100,60,30,15,15,24,100,600,'theme/youtube_link','theme/youtube_link','_head.php','_tail.php','','','','','',4,202,150,125,100,1048576,1,0,0,0,0,0,0,0,0,'',2,0,'',0,0,'','','','','','','','','','','','','','','','','','','','','');
/*!40000 ALTER TABLE `g5_board` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `g5_board_file`
--

DROP TABLE IF EXISTS `g5_board_file`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `g5_board_file` (
  `bo_table` varchar(20) NOT NULL DEFAULT '',
  `wr_id` int(11) NOT NULL DEFAULT '0',
  `bf_no` int(11) NOT NULL DEFAULT '0',
  `bf_source` varchar(255) NOT NULL DEFAULT '',
  `bf_file` varchar(255) NOT NULL DEFAULT '',
  `bf_download` int(11) NOT NULL,
  `bf_content` text NOT NULL,
  `bf_fileurl` varchar(255) NOT NULL DEFAULT '',
  `bf_thumburl` varchar(255) NOT NULL DEFAULT '',
  `bf_storage` varchar(50) NOT NULL DEFAULT '',
  `bf_filesize` int(11) NOT NULL DEFAULT '0',
  `bf_width` int(11) NOT NULL DEFAULT '0',
  `bf_height` smallint(6) NOT NULL DEFAULT '0',
  `bf_type` tinyint(4) NOT NULL DEFAULT '0',
  `bf_datetime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`bo_table`,`wr_id`,`bf_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `g5_board_file`
--

LOCK TABLES `g5_board_file` WRITE;
/*!40000 ALTER TABLE `g5_board_file` DISABLE KEYS */;
INSERT INTO `g5_board_file` VALUES ('doctor',0,0,'doctor01.png','2072948020_mAku9TUa_be74b51def92b64169624458d4703a3080e09626.png',0,'','','','',155430,360,540,3,'2022-10-04 17:12:08'),('doctor',3,0,'doctor01.png','2072948020_fhePoVRK_9d8e32a303cb55ca2c7344f36ceafff787aa96b4.png',0,'','','','',155430,360,540,3,'2022-10-04 17:45:19'),('doctor',4,0,'doctor02.png','2072948020_dIoypY1q_7b3f981c320f5660c0f9718a72360116d61bd492.png',0,'','','','',183881,360,540,3,'2022-10-04 17:45:53'),('doctor',5,0,'doctor03.png','2072948020_lf8AdU2w_c79149d689fbfd53b551f0d08a408df3e700ceb6.png',0,'','','','',186525,360,540,3,'2022-10-04 17:46:37'),('doctor',6,0,'doctor04.png','2072948020_u40n12Eq_71b3b407cabec103d7f263c046c9c7a3e63408e7.png',0,'','','','',190926,360,540,3,'2022-10-04 17:47:10'),('doctor',7,0,'doctor05.png','2072948020_W89xuLjz_c0a1bbcc9b2227218911e4f4e74b11838c6ecd85.png',0,'','','','',214712,360,540,3,'2022-10-04 17:47:43'),('equipment',1,0,'equipment_img01.png','2072948020_VgLJ3vcm_0abbc0f0eb47f930d381ddf436e76eae59de11a8.png',0,'','','','',62106,260,340,3,'2022-10-04 18:36:14'),('equipment',1,1,'equipment_list_big_img01.jpg','2072948020_mg0zF5jx_07b4fd40741df3a45f3cc5e00e6fb89d75b2ccf3.jpg',0,'','','','',28885,618,450,2,'2022-10-04 18:36:14'),('review',0,0,'before01.jpg','2072948020_FJxBTuly_ee400dff0260beacce7094e43ca697e61138b006.jpg',0,'','','','',32797,300,400,2,'2022-10-04 16:51:30'),('review',0,1,'after01.jpg','2072948020_75Rc6Tgl_e174b02cc7e00e37ba6908fe497e398fe6fd7429.jpg',0,'','','','',31756,300,400,2,'2022-10-04 16:51:30');
/*!40000 ALTER TABLE `g5_board_file` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `g5_board_good`
--

DROP TABLE IF EXISTS `g5_board_good`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `g5_board_good` (
  `bg_id` int(11) NOT NULL AUTO_INCREMENT,
  `bo_table` varchar(20) NOT NULL DEFAULT '',
  `wr_id` int(11) NOT NULL DEFAULT '0',
  `mb_id` varchar(20) NOT NULL DEFAULT '',
  `bg_flag` varchar(255) NOT NULL DEFAULT '',
  `bg_datetime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`bg_id`),
  UNIQUE KEY `fkey1` (`bo_table`,`wr_id`,`mb_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `g5_board_good`
--

LOCK TABLES `g5_board_good` WRITE;
/*!40000 ALTER TABLE `g5_board_good` DISABLE KEYS */;
/*!40000 ALTER TABLE `g5_board_good` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `g5_board_new`
--

DROP TABLE IF EXISTS `g5_board_new`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `g5_board_new` (
  `bn_id` int(11) NOT NULL AUTO_INCREMENT,
  `bo_table` varchar(20) NOT NULL DEFAULT '',
  `wr_id` int(11) NOT NULL DEFAULT '0',
  `wr_parent` int(11) NOT NULL DEFAULT '0',
  `bn_datetime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `mb_id` varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`bn_id`),
  KEY `mb_id` (`mb_id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `g5_board_new`
--

LOCK TABLES `g5_board_new` WRITE;
/*!40000 ALTER TABLE `g5_board_new` DISABLE KEYS */;
INSERT INTO `g5_board_new` VALUES (1,'doctor',0,0,'2022-10-04 11:39:31','admin'),(2,'doctor',0,0,'2022-10-04 12:18:03','admin'),(3,'doctor',0,0,'2022-10-04 12:47:46','admin'),(4,'doctor',0,0,'2022-10-04 12:48:23','admin'),(5,'doctor',0,0,'2022-10-04 12:58:32','admin'),(6,'doctor',0,0,'2022-10-04 14:27:35','admin'),(7,'online',0,0,'2022-10-04 00:00:00','admin'),(8,'online',0,0,'2022-10-04 00:00:00','admin'),(9,'doctor',0,0,'2022-10-04 15:00:50','admin'),(10,'doctor',0,0,'2022-10-04 15:01:52','admin'),(11,'doctor',0,0,'2022-10-04 15:16:09','admin'),(12,'doctor',0,0,'2022-10-04 16:02:40','admin'),(13,'doctor',0,0,'2022-10-04 16:03:09','admin'),(14,'online',0,0,'2022-10-04 00:00:00','admin'),(16,'doctor',0,0,'2022-10-04 16:13:50','admin'),(17,'doctor',0,0,'2022-10-04 16:41:06','admin'),(18,'doctor',0,0,'2022-10-04 16:46:00','admin'),(19,'notice_event',0,0,'2022-10-04 16:46:12','admin'),(20,'review',0,0,'2022-10-04 16:46:34','admin'),(22,'review',0,0,'2022-10-04 16:51:30','admin'),(23,'doctor',0,0,'2022-10-04 16:58:14','admin'),(24,'doctor',0,0,'2022-10-04 17:12:08','admin'),(27,'doctor',3,3,'2022-10-04 17:45:19','admin'),(28,'doctor',4,4,'2022-10-04 17:45:53','admin'),(29,'doctor',5,5,'2022-10-04 17:46:37','admin'),(30,'doctor',6,6,'2022-10-04 17:47:10','admin'),(31,'doctor',7,7,'2022-10-04 17:47:43','admin'),(32,'equipment',1,1,'2022-10-04 18:36:14','admin');
/*!40000 ALTER TABLE `g5_board_new` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `g5_cert_history`
--

DROP TABLE IF EXISTS `g5_cert_history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `g5_cert_history` (
  `cr_id` int(11) NOT NULL AUTO_INCREMENT,
  `mb_id` varchar(20) NOT NULL DEFAULT '',
  `cr_company` varchar(255) NOT NULL DEFAULT '',
  `cr_method` varchar(255) NOT NULL DEFAULT '',
  `cr_ip` varchar(255) NOT NULL DEFAULT '',
  `cr_date` date NOT NULL DEFAULT '0000-00-00',
  `cr_time` time NOT NULL DEFAULT '00:00:00',
  PRIMARY KEY (`cr_id`),
  KEY `mb_id` (`mb_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `g5_cert_history`
--

LOCK TABLES `g5_cert_history` WRITE;
/*!40000 ALTER TABLE `g5_cert_history` DISABLE KEYS */;
/*!40000 ALTER TABLE `g5_cert_history` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `g5_config`
--

DROP TABLE IF EXISTS `g5_config`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `g5_config` (
  `cf_title` varchar(255) NOT NULL DEFAULT '',
  `cf_theme` varchar(100) NOT NULL DEFAULT '',
  `cf_admin` varchar(100) NOT NULL DEFAULT '',
  `cf_admin_email` varchar(100) NOT NULL DEFAULT '',
  `cf_admin_email_name` varchar(100) NOT NULL DEFAULT '',
  `cf_add_script` text NOT NULL,
  `cf_use_point` tinyint(4) NOT NULL DEFAULT '0',
  `cf_point_term` int(11) NOT NULL DEFAULT '0',
  `cf_use_copy_log` tinyint(4) NOT NULL DEFAULT '0',
  `cf_use_email_certify` tinyint(4) NOT NULL DEFAULT '0',
  `cf_login_point` int(11) NOT NULL DEFAULT '0',
  `cf_cut_name` tinyint(4) NOT NULL DEFAULT '0',
  `cf_nick_modify` int(11) NOT NULL DEFAULT '0',
  `cf_new_skin` varchar(50) NOT NULL DEFAULT '',
  `cf_new_rows` int(11) NOT NULL DEFAULT '0',
  `cf_search_skin` varchar(50) NOT NULL DEFAULT '',
  `cf_connect_skin` varchar(50) NOT NULL DEFAULT '',
  `cf_faq_skin` varchar(50) NOT NULL DEFAULT '',
  `cf_read_point` int(11) NOT NULL DEFAULT '0',
  `cf_write_point` int(11) NOT NULL DEFAULT '0',
  `cf_comment_point` int(11) NOT NULL DEFAULT '0',
  `cf_download_point` int(11) NOT NULL DEFAULT '0',
  `cf_write_pages` int(11) NOT NULL DEFAULT '0',
  `cf_mobile_pages` int(11) NOT NULL DEFAULT '0',
  `cf_link_target` varchar(50) NOT NULL DEFAULT '',
  `cf_bbs_rewrite` tinyint(4) NOT NULL DEFAULT '0',
  `cf_delay_sec` int(11) NOT NULL DEFAULT '0',
  `cf_filter` text NOT NULL,
  `cf_possible_ip` text NOT NULL,
  `cf_intercept_ip` text NOT NULL,
  `cf_analytics` text NOT NULL,
  `cf_add_meta` text NOT NULL,
  `cf_syndi_token` varchar(255) NOT NULL,
  `cf_syndi_except` text NOT NULL,
  `cf_member_skin` varchar(50) NOT NULL DEFAULT '',
  `cf_use_homepage` tinyint(4) NOT NULL DEFAULT '0',
  `cf_req_homepage` tinyint(4) NOT NULL DEFAULT '0',
  `cf_use_tel` tinyint(4) NOT NULL DEFAULT '0',
  `cf_req_tel` tinyint(4) NOT NULL DEFAULT '0',
  `cf_use_hp` tinyint(4) NOT NULL DEFAULT '0',
  `cf_req_hp` tinyint(4) NOT NULL DEFAULT '0',
  `cf_use_addr` tinyint(4) NOT NULL DEFAULT '0',
  `cf_req_addr` tinyint(4) NOT NULL DEFAULT '0',
  `cf_use_signature` tinyint(4) NOT NULL DEFAULT '0',
  `cf_req_signature` tinyint(4) NOT NULL DEFAULT '0',
  `cf_use_profile` tinyint(4) NOT NULL DEFAULT '0',
  `cf_req_profile` tinyint(4) NOT NULL DEFAULT '0',
  `cf_register_level` tinyint(4) NOT NULL DEFAULT '0',
  `cf_register_point` int(11) NOT NULL DEFAULT '0',
  `cf_icon_level` tinyint(4) NOT NULL DEFAULT '0',
  `cf_use_recommend` tinyint(4) NOT NULL DEFAULT '0',
  `cf_recommend_point` int(11) NOT NULL DEFAULT '0',
  `cf_leave_day` int(11) NOT NULL DEFAULT '0',
  `cf_search_part` int(11) NOT NULL DEFAULT '0',
  `cf_email_use` tinyint(4) NOT NULL DEFAULT '0',
  `cf_email_wr_super_admin` tinyint(4) NOT NULL DEFAULT '0',
  `cf_email_wr_group_admin` tinyint(4) NOT NULL DEFAULT '0',
  `cf_email_wr_board_admin` tinyint(4) NOT NULL DEFAULT '0',
  `cf_email_wr_write` tinyint(4) NOT NULL DEFAULT '0',
  `cf_email_wr_comment_all` tinyint(4) NOT NULL DEFAULT '0',
  `cf_email_mb_super_admin` tinyint(4) NOT NULL DEFAULT '0',
  `cf_email_mb_member` tinyint(4) NOT NULL DEFAULT '0',
  `cf_email_po_super_admin` tinyint(4) NOT NULL DEFAULT '0',
  `cf_prohibit_id` text NOT NULL,
  `cf_prohibit_email` text NOT NULL,
  `cf_new_del` int(11) NOT NULL DEFAULT '0',
  `cf_memo_del` int(11) NOT NULL DEFAULT '0',
  `cf_visit_del` int(11) NOT NULL DEFAULT '0',
  `cf_popular_del` int(11) NOT NULL DEFAULT '0',
  `cf_optimize_date` date NOT NULL DEFAULT '0000-00-00',
  `cf_use_member_icon` tinyint(4) NOT NULL DEFAULT '0',
  `cf_member_icon_size` int(11) NOT NULL DEFAULT '0',
  `cf_member_icon_width` int(11) NOT NULL DEFAULT '0',
  `cf_member_icon_height` int(11) NOT NULL DEFAULT '0',
  `cf_member_img_size` int(11) NOT NULL DEFAULT '0',
  `cf_member_img_width` int(11) NOT NULL DEFAULT '0',
  `cf_member_img_height` int(11) NOT NULL DEFAULT '0',
  `cf_login_minutes` int(11) NOT NULL DEFAULT '0',
  `cf_image_extension` varchar(255) NOT NULL DEFAULT '',
  `cf_flash_extension` varchar(255) NOT NULL DEFAULT '',
  `cf_movie_extension` varchar(255) NOT NULL DEFAULT '',
  `cf_formmail_is_member` tinyint(4) NOT NULL DEFAULT '0',
  `cf_page_rows` int(11) NOT NULL DEFAULT '0',
  `cf_mobile_page_rows` int(11) NOT NULL DEFAULT '0',
  `cf_visit` varchar(255) NOT NULL DEFAULT '',
  `cf_max_po_id` int(11) NOT NULL DEFAULT '0',
  `cf_stipulation` text NOT NULL,
  `cf_privacy` text NOT NULL,
  `cf_open_modify` int(11) NOT NULL DEFAULT '0',
  `cf_memo_send_point` int(11) NOT NULL DEFAULT '0',
  `cf_mobile_new_skin` varchar(50) NOT NULL DEFAULT '',
  `cf_mobile_search_skin` varchar(50) NOT NULL DEFAULT '',
  `cf_mobile_connect_skin` varchar(50) NOT NULL DEFAULT '',
  `cf_mobile_faq_skin` varchar(50) NOT NULL DEFAULT '',
  `cf_mobile_member_skin` varchar(50) NOT NULL DEFAULT '',
  `cf_captcha_mp3` varchar(255) NOT NULL DEFAULT '',
  `cf_editor` varchar(50) NOT NULL DEFAULT '',
  `cf_cert_use` tinyint(4) NOT NULL DEFAULT '0',
  `cf_cert_find` tinyint(4) NOT NULL DEFAULT '0',
  `cf_cert_ipin` varchar(255) NOT NULL DEFAULT '',
  `cf_cert_hp` varchar(255) NOT NULL DEFAULT '',
  `cf_cert_simple` varchar(255) NOT NULL DEFAULT '',
  `cf_cert_kg_cd` varchar(255) NOT NULL DEFAULT '',
  `cf_cert_kg_mid` varchar(255) NOT NULL DEFAULT '',
  `cf_cert_kcb_cd` varchar(255) NOT NULL DEFAULT '',
  `cf_cert_kcp_cd` varchar(255) NOT NULL DEFAULT '',
  `cf_lg_mid` varchar(100) NOT NULL DEFAULT '',
  `cf_lg_mert_key` varchar(100) NOT NULL DEFAULT '',
  `cf_cert_limit` int(11) NOT NULL DEFAULT '0',
  `cf_cert_req` tinyint(4) NOT NULL DEFAULT '0',
  `cf_sms_use` varchar(255) NOT NULL DEFAULT '',
  `cf_sms_type` varchar(10) NOT NULL DEFAULT '',
  `cf_icode_id` varchar(255) NOT NULL DEFAULT '',
  `cf_icode_pw` varchar(255) NOT NULL DEFAULT '',
  `cf_icode_server_ip` varchar(50) NOT NULL DEFAULT '',
  `cf_icode_server_port` varchar(50) NOT NULL DEFAULT '',
  `cf_icode_token_key` varchar(100) NOT NULL DEFAULT '',
  `cf_googl_shorturl_apikey` varchar(50) NOT NULL DEFAULT '',
  `cf_social_login_use` tinyint(4) NOT NULL DEFAULT '0',
  `cf_social_servicelist` varchar(255) NOT NULL DEFAULT '',
  `cf_payco_clientid` varchar(100) NOT NULL DEFAULT '',
  `cf_payco_secret` varchar(100) NOT NULL DEFAULT '',
  `cf_facebook_appid` varchar(100) NOT NULL,
  `cf_facebook_secret` varchar(100) NOT NULL,
  `cf_twitter_key` varchar(100) NOT NULL,
  `cf_twitter_secret` varchar(100) NOT NULL,
  `cf_google_clientid` varchar(100) NOT NULL DEFAULT '',
  `cf_google_secret` varchar(100) NOT NULL DEFAULT '',
  `cf_naver_clientid` varchar(100) NOT NULL DEFAULT '',
  `cf_naver_secret` varchar(100) NOT NULL DEFAULT '',
  `cf_kakao_rest_key` varchar(100) NOT NULL DEFAULT '',
  `cf_kakao_client_secret` varchar(100) NOT NULL DEFAULT '',
  `cf_kakao_js_apikey` varchar(100) NOT NULL,
  `cf_captcha` varchar(100) NOT NULL DEFAULT '',
  `cf_recaptcha_site_key` varchar(100) NOT NULL DEFAULT '',
  `cf_recaptcha_secret_key` varchar(100) NOT NULL DEFAULT '',
  `cf_1_subj` varchar(255) NOT NULL DEFAULT '',
  `cf_2_subj` varchar(255) NOT NULL DEFAULT '',
  `cf_3_subj` varchar(255) NOT NULL DEFAULT '',
  `cf_4_subj` varchar(255) NOT NULL DEFAULT '',
  `cf_5_subj` varchar(255) NOT NULL DEFAULT '',
  `cf_6_subj` varchar(255) NOT NULL DEFAULT '',
  `cf_7_subj` varchar(255) NOT NULL DEFAULT '',
  `cf_8_subj` varchar(255) NOT NULL DEFAULT '',
  `cf_9_subj` varchar(255) NOT NULL DEFAULT '',
  `cf_10_subj` varchar(255) NOT NULL DEFAULT '',
  `cf_1` varchar(255) NOT NULL DEFAULT '',
  `cf_2` varchar(255) NOT NULL DEFAULT '',
  `cf_3` varchar(255) NOT NULL DEFAULT '',
  `cf_4` varchar(255) NOT NULL DEFAULT '',
  `cf_5` varchar(255) NOT NULL DEFAULT '',
  `cf_6` varchar(255) NOT NULL DEFAULT '',
  `cf_7` varchar(255) NOT NULL DEFAULT '',
  `cf_8` varchar(255) NOT NULL DEFAULT '',
  `cf_9` varchar(255) NOT NULL DEFAULT '',
  `cf_10` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `g5_config`
--

LOCK TABLES `g5_config` WRITE;
/*!40000 ALTER TABLE `g5_config` DISABLE KEYS */;
INSERT INTO `g5_config` VALUES ('인천오라클피부과','oracle','admin','admin@domain.com','인천오라클피부과','',1,0,1,0,100,15,60,'basic',15,'basic','basic','basic',0,0,0,0,10,5,'_blank',0,30,'18아,18놈,18새끼,18뇬,18노,18것,18넘,개년,개놈,개뇬,개새,개색끼,개세끼,개세이,개쉐이,개쉑,개쉽,개시키,개자식,개좆,게색기,게색끼,광뇬,뇬,눈깔,뉘미럴,니귀미,니기미,니미,도촬,되질래,뒈져라,뒈진다,디져라,디진다,디질래,병쉰,병신,뻐큐,뻑큐,뽁큐,삐리넷,새꺄,쉬발,쉬밸,쉬팔,쉽알,스패킹,스팽,시벌,시부랄,시부럴,시부리,시불,시브랄,시팍,시팔,시펄,실밸,십8,십쌔,십창,싶알,쌉년,썅놈,쌔끼,쌩쑈,썅,써벌,썩을년,쎄꺄,쎄엑,쓰바,쓰발,쓰벌,쓰팔,씨8,씨댕,씨바,씨발,씨뱅,씨봉알,씨부랄,씨부럴,씨부렁,씨부리,씨불,씨브랄,씨빠,씨빨,씨뽀랄,씨팍,씨팔,씨펄,씹,아가리,아갈이,엄창,접년,잡놈,재랄,저주글,조까,조빠,조쟁이,조지냐,조진다,조질래,존나,존니,좀물,좁년,좃,좆,좇,쥐랄,쥐롤,쥬디,지랄,지럴,지롤,지미랄,쫍빱,凸,퍽큐,뻑큐,빠큐,ㅅㅂㄹㅁ','','','','','','','basic',0,0,0,0,0,0,0,0,0,0,0,0,2,1000,2,0,0,30,10000,1,0,0,0,0,0,0,0,0,'admin,administrator,관리자,운영자,어드민,주인장,webmaster,웹마스터,sysop,시삽,시샵,manager,매니저,메니저,root,루트,su,guest,방문객','',30,180,180,180,'2022-10-04',2,5000,22,22,50000,60,60,10,'gif|jpg|jpeg|png','swf','asx|asf|wmv|wma|mpg|mpeg|mov|avi|mp3',1,15,15,'오늘:2,어제:2,최대:7,전체:13',0,'[오라클피부과의원 개인정보취급방침]\r\n■ 수집하는 개인정보 항목\r\n오라클피부과의원 (이하 \"본원/회사\")는 온라인 상담 및 예약, 권한이 필요한 페이지 열람을 위해 아래와 같은 개인정보를 수집하고 있습니다.\r\nο 수집항목 : 이름 , 열람/수정 비밀번호 , 휴대전화번호 , 이메일\r\nο 본인확인 항목 : 이름, 주민등록번호, 핸드폰번호(인증), 이메일(인증),공인인증서\r\nο 개인정보 수집방법 : 비회원 글등록 및 회원전용 서비스 제공을 위한 회원가입.\r\n\r\n■ 개인정보의 수집 및 이용목적\r\n본원은 수집한 개인정보를 다음의 목적을 위해 활용합니다.\r\nο 정확한 병명 및 환자 상태 확인 및 상담 답변\r\n■ 개인정보의 보유 및 이용기간\r\n본원은 상담서비스를 이용하는 동안 개인정보를 보유 및 이용하며, 상담이 완료된후 지속적인 관리를 위해 해당 정보를 보관하나 서면,전화,메일 요청시 열람/수정/삭제가 가능합니다.\r\n단, 본원에서 주관하는 이벤트 참여시 이벤트 종료시까지 변동알림 및 통보,통제를 위해 이벤트 진행이 종료될 때 까지\r\n데이타가 보관 될 수 있으며, 수신여부와 상관없이 관련 연락,정보들이 수신될 수 있습니다.\r\n■ 개인정보의 파기절차 및 방법\r\n본원은 원칙적으로 개인정보 수집 및 이용목적이 달성된 후에는 해당 정보를 지체없이 파기합니다. 파기절차 및 방법은 다음과 같습니다.\r\n\r\nο 파기절차\r\n\r\n서면,전화,이메일로 사이트내 정보가 입력된 주소를 알려주시면 지체없이 파기를 진행합니다.\r\n사이트 주소(URL)을 모를경우엔 파기할 개인정보를 알려주시면 해당부분을 찾아 확인후 삭제 해드리겠습니다.\r\n요청시 본원에서 지정한 서류 (주민등록증 사본)을 꼭 제시하셔야 합니다.\r\n\r\nο 파기방법\r\n\r\n- 전자적 파일형태로 저장된 개인정보는 기록을 재생할 수 없는 기술적 방법을 사용하여 삭제합니다.\r\n\r\n■ 개인정보 제공\r\n본원은 이용자의 개인정보를 원칙적으로 외부에 제공하지 않습니다. 다만, 아래의 경우에는 예외로 합니다.\r\n\r\n- 이용자들이 사전에 동의한 경우\r\n\r\n- 법령의 규정에 의거하거나, 수사 목적으로 법령에 정해진 절차와 방법에 따라 수사기관의 요구가 있는 경우\r\n\r\n■ 카카오톡 알림톡 시행에 관한 내용\r\n\r\n본원은 회원가입, 주문안내, 배송안내 등 비광고성 정보를 고객의 요청이나 본원의 방침에 따라 카카오톡 알림톡으로도 알려드리며, 만약 알림톡 수신이 불가능하거나 수신 차단하신 경우에는 일반 문자메시지로 보내드립니다. 카카오톡 알림톡을 통해 안내되는 정보를 와이파이가 아닌 이동통신망으로 이용할 경우, 알림톡 수신 중 데이터 요금이 발생할 수 있습니다. 카카오톡을 통해 발송되는 알림톡 수신을 원치 않으실 경우 반드시 알림톡을 차단하여 주시기 바랍니다.\r\n\r\n■ 이용자 및 법정대리인의 권리와 그 행사방법\r\n이용자 및 법정 대리인은 언제든지 등록되어 있는 자신 혹은 당해 만 14세 미만 아동의 개인정보를 조회하거나 수정할 수 있으며 가입해지를 요청할 수도 있습니 다.\r\n귀하가 개인정보의 오류에 대한 정정을 요청하신 경우에는 정정을 완료하기 전까 지 당해 개인정보를 이용 또는 제공하지 않습니다. 또한 잘못된 개인정보를 제3자 에게 이미 제공한 경우에는 정정 처리결과를 제3자에게 지체없이 통지하여 정정이 이루어지도록 하겠습니다.\r\n본원은 이용자 혹은 법정 대리인의 요청에 의해 해지 또는 삭제된 개인정보는 \"본원이 수집하는 개인정보의 보유 및 이용기간\"에 명시된 바에 따라 처리하고 그 외의 용도로 열람 또는 이용할 수 없도록 처리하고 있습니다.\r\n\r\n- 사이트에 기록한 개인정보가 있고 작성한 게시물에 대한 비밀번호를 알고 있다면 해당 게시물을 열람,수정,삭제를 스스로 할 수 있습니다.\r\n- 만약 비밀번호 및 열람정보를 잊어버렸다면 개인정보관리책임자(하단 기재)에게 연락하여 도움을 청할 수 있습니다.\r\n■ 개인정보 자동수집 장치의 설치, 운영 및 그 거부에 관한 사항\r\n본원은 귀하의 정보를 수시로 저장하고 찾아내는 \"쿠키(cookie)\" 등을 사용하지 않습니다.\r\n쿠키란 웹사이트를 운영하는데 이용되는 서버가 귀하의 브라우저에 보내는 아주 작은 텍스트 파일로서 귀하의 컴퓨터 하드디스크에 저장되는것을 말하며 본원은 본원 자체의 서버세션을 이용하기에 고객님 컴퓨터에 아무런 정보를 남기지 않습니다.\r\n단, 서비스이용의 편리를 위한 로그인유지 목적의 쿠키는 저장될 수 있습니다.\r\n■ 개인정보 관리 책임자\r\n본원은 고객의 개인정보를 보호하고 개인정보와 관련한 불만을 처리하기 위하여 아래와 같이 관련 부서 및 개인정보관리책임자를 지정하고 있습니다.\r\n\r\n개인정보관리책임자 성명 : 이승규\r\n전화번호 : 032-434-5311\r\n기타 개인정보침해에 대한 신고나 상담이 필요하신 경우에는 아래 기관에 문의하시기 바랍니다.\r\n\r\n1.개인분쟁조정위원회 (www.1336.or.kr/1336)\r\n2.정보보호마크인증위원회 (www.eprivacy.or.kr/02-580-0533~4)\r\n3.대검찰청 인터넷범죄수사센터 (http://icic.sppo.go.kr/02-3480-3600)\r\n4.경찰청 사이버테러대응센터 (www.ctrc.go.kr/02-392-0330)\r\n','[오라클피부과의원 개인정보취급방침]\r\n■ 수집하는 개인정보 항목\r\n오라클피부과의원 (이하 \"본원/회사\")는 온라인 상담 및 예약, 권한이 필요한 페이지 열람을 위해 아래와 같은 개인정보를 수집하고 있습니다.\r\nο 수집항목 : 이름 , 열람/수정 비밀번호 , 휴대전화번호 , 이메일\r\nο 본인확인 항목 : 이름, 주민등록번호, 핸드폰번호(인증), 이메일(인증),공인인증서\r\nο 개인정보 수집방법 : 비회원 글등록 및 회원전용 서비스 제공을 위한 회원가입.\r\n\r\n■ 개인정보의 수집 및 이용목적\r\n본원은 수집한 개인정보를 다음의 목적을 위해 활용합니다.\r\nο 정확한 병명 및 환자 상태 확인 및 상담 답변\r\n■ 개인정보의 보유 및 이용기간\r\n본원은 상담서비스를 이용하는 동안 개인정보를 보유 및 이용하며, 상담이 완료된후 지속적인 관리를 위해 해당 정보를 보관하나 서면,전화,메일 요청시 열람/수정/삭제가 가능합니다.\r\n단, 본원에서 주관하는 이벤트 참여시 이벤트 종료시까지 변동알림 및 통보,통제를 위해 이벤트 진행이 종료될 때 까지\r\n데이타가 보관 될 수 있으며, 수신여부와 상관없이 관련 연락,정보들이 수신될 수 있습니다.\r\n■ 개인정보의 파기절차 및 방법\r\n본원은 원칙적으로 개인정보 수집 및 이용목적이 달성된 후에는 해당 정보를 지체없이 파기합니다. 파기절차 및 방법은 다음과 같습니다.\r\n\r\nο 파기절차\r\n\r\n서면,전화,이메일로 사이트내 정보가 입력된 주소를 알려주시면 지체없이 파기를 진행합니다.\r\n사이트 주소(URL)을 모를경우엔 파기할 개인정보를 알려주시면 해당부분을 찾아 확인후 삭제 해드리겠습니다.\r\n요청시 본원에서 지정한 서류 (주민등록증 사본)을 꼭 제시하셔야 합니다.\r\n\r\nο 파기방법\r\n\r\n- 전자적 파일형태로 저장된 개인정보는 기록을 재생할 수 없는 기술적 방법을 사용하여 삭제합니다.\r\n\r\n■ 개인정보 제공\r\n본원은 이용자의 개인정보를 원칙적으로 외부에 제공하지 않습니다. 다만, 아래의 경우에는 예외로 합니다.\r\n\r\n- 이용자들이 사전에 동의한 경우\r\n\r\n- 법령의 규정에 의거하거나, 수사 목적으로 법령에 정해진 절차와 방법에 따라 수사기관의 요구가 있는 경우\r\n\r\n■ 카카오톡 알림톡 시행에 관한 내용\r\n\r\n본원은 회원가입, 주문안내, 배송안내 등 비광고성 정보를 고객의 요청이나 본원의 방침에 따라 카카오톡 알림톡으로도 알려드리며, 만약 알림톡 수신이 불가능하거나 수신 차단하신 경우에는 일반 문자메시지로 보내드립니다. 카카오톡 알림톡을 통해 안내되는 정보를 와이파이가 아닌 이동통신망으로 이용할 경우, 알림톡 수신 중 데이터 요금이 발생할 수 있습니다. 카카오톡을 통해 발송되는 알림톡 수신을 원치 않으실 경우 반드시 알림톡을 차단하여 주시기 바랍니다.\r\n\r\n■ 이용자 및 법정대리인의 권리와 그 행사방법\r\n이용자 및 법정 대리인은 언제든지 등록되어 있는 자신 혹은 당해 만 14세 미만 아동의 개인정보를 조회하거나 수정할 수 있으며 가입해지를 요청할 수도 있습니 다.\r\n귀하가 개인정보의 오류에 대한 정정을 요청하신 경우에는 정정을 완료하기 전까 지 당해 개인정보를 이용 또는 제공하지 않습니다. 또한 잘못된 개인정보를 제3자 에게 이미 제공한 경우에는 정정 처리결과를 제3자에게 지체없이 통지하여 정정이 이루어지도록 하겠습니다.\r\n본원은 이용자 혹은 법정 대리인의 요청에 의해 해지 또는 삭제된 개인정보는 \"본원이 수집하는 개인정보의 보유 및 이용기간\"에 명시된 바에 따라 처리하고 그 외의 용도로 열람 또는 이용할 수 없도록 처리하고 있습니다.\r\n\r\n- 사이트에 기록한 개인정보가 있고 작성한 게시물에 대한 비밀번호를 알고 있다면 해당 게시물을 열람,수정,삭제를 스스로 할 수 있습니다.\r\n- 만약 비밀번호 및 열람정보를 잊어버렸다면 개인정보관리책임자(하단 기재)에게 연락하여 도움을 청할 수 있습니다.\r\n■ 개인정보 자동수집 장치의 설치, 운영 및 그 거부에 관한 사항\r\n본원은 귀하의 정보를 수시로 저장하고 찾아내는 \"쿠키(cookie)\" 등을 사용하지 않습니다.\r\n쿠키란 웹사이트를 운영하는데 이용되는 서버가 귀하의 브라우저에 보내는 아주 작은 텍스트 파일로서 귀하의 컴퓨터 하드디스크에 저장되는것을 말하며 본원은 본원 자체의 서버세션을 이용하기에 고객님 컴퓨터에 아무런 정보를 남기지 않습니다.\r\n단, 서비스이용의 편리를 위한 로그인유지 목적의 쿠키는 저장될 수 있습니다.\r\n■ 개인정보 관리 책임자\r\n본원은 고객의 개인정보를 보호하고 개인정보와 관련한 불만을 처리하기 위하여 아래와 같이 관련 부서 및 개인정보관리책임자를 지정하고 있습니다.\r\n\r\n개인정보관리책임자 성명 : 이승규\r\n전화번호 : 032-434-5311\r\n기타 개인정보침해에 대한 신고나 상담이 필요하신 경우에는 아래 기관에 문의하시기 바랍니다.\r\n\r\n1.개인분쟁조정위원회 (www.1336.or.kr/1336)\r\n2.정보보호마크인증위원회 (www.eprivacy.or.kr/02-580-0533~4)\r\n3.대검찰청 인터넷범죄수사센터 (http://icic.sppo.go.kr/02-3480-3600)\r\n4.경찰청 사이버테러대응센터 (www.ctrc.go.kr/02-392-0330)\r\n',0,500,'basic','basic','basic','basic','basic','basic','smarteditor2',0,0,'','','','','','','','','',2,0,'','','admin','kuwol5311!','211.172.232.124','7295','','',1,'naver,kakao,google','','','','','','','','','','','','','','kcaptcha','','','','','','','','','','','','','','','','','','','','','','');
/*!40000 ALTER TABLE `g5_config` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `g5_content`
--

DROP TABLE IF EXISTS `g5_content`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `g5_content` (
  `co_id` varchar(20) NOT NULL DEFAULT '',
  `co_html` tinyint(4) NOT NULL DEFAULT '0',
  `co_subject` varchar(255) NOT NULL DEFAULT '',
  `co_content` longtext NOT NULL,
  `co_seo_title` varchar(255) NOT NULL DEFAULT '',
  `co_mobile_content` longtext NOT NULL,
  `co_skin` varchar(255) NOT NULL DEFAULT '',
  `co_mobile_skin` varchar(255) NOT NULL DEFAULT '',
  `co_tag_filter_use` tinyint(4) NOT NULL DEFAULT '0',
  `co_hit` int(11) NOT NULL DEFAULT '0',
  `co_include_head` varchar(255) NOT NULL,
  `co_include_tail` varchar(255) NOT NULL,
  PRIMARY KEY (`co_id`),
  KEY `co_seo_title` (`co_seo_title`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `g5_content`
--

LOCK TABLES `g5_content` WRITE;
/*!40000 ALTER TABLE `g5_content` DISABLE KEYS */;
INSERT INTO `g5_content` VALUES ('company',1,'회사소개','<p align=center><b>회사소개에 대한 내용을 입력하십시오.</b></p>','','','basic','basic',0,0,'',''),('nonpay',1,'비급여항목안내','<div style=\"text-align:center;\" align=\"center\"><img src=\"https://sissel997.cafe24.com/data/editor/2209/31098f3d5a0ec5fa293a13a1759a2a1d_1664508803_3227.jpg\" title=\"31098f3d5a0ec5fa293a13a1759a2a1d_1664508803_3227.jpg\"><br style=\"clear:both;\"><img src=\"https://sissel997.cafe24.com/data/editor/2209/31098f3d5a0ec5fa293a13a1759a2a1d_1664508805_0976.jpg\" title=\"31098f3d5a0ec5fa293a13a1759a2a1d_1664508805_0976.jpg\"><br style=\"clear:both;\"><img src=\"https://sissel997.cafe24.com/data/editor/2209/31098f3d5a0ec5fa293a13a1759a2a1d_1664508806_4458.jpg\" title=\"31098f3d5a0ec5fa293a13a1759a2a1d_1664508806_4458.jpg\"><br style=\"clear:both;\"><img src=\"https://sissel997.cafe24.com/data/editor/2209/31098f3d5a0ec5fa293a13a1759a2a1d_1664508808_7235.jpg\" title=\"31098f3d5a0ec5fa293a13a1759a2a1d_1664508808_7235.jpg\"><br style=\"clear:both;\"><img src=\"https://sissel997.cafe24.com/data/editor/2209/31098f3d5a0ec5fa293a13a1759a2a1d_1664508808_8113.jpg\" title=\"31098f3d5a0ec5fa293a13a1759a2a1d_1664508808_8113.jpg\"><br style=\"clear:both;\"><img src=\"https://sissel997.cafe24.com/data/editor/2209/31098f3d5a0ec5fa293a13a1759a2a1d_1664508808_8996.jpg\" title=\"31098f3d5a0ec5fa293a13a1759a2a1d_1664508808_8996.jpg\"><br style=\"clear:both;\"><img src=\"https://sissel997.cafe24.com/data/editor/2209/31098f3d5a0ec5fa293a13a1759a2a1d_1664508811_4634.jpg\" title=\"31098f3d5a0ec5fa293a13a1759a2a1d_1664508811_4634.jpg\"><br style=\"clear:both;\"><img src=\"https://sissel997.cafe24.com/data/editor/2209/31098f3d5a0ec5fa293a13a1759a2a1d_1664508811_5627.jpg\" title=\"31098f3d5a0ec5fa293a13a1759a2a1d_1664508811_5627.jpg\"><br style=\"clear:both;\"><img src=\"https://sissel997.cafe24.com/data/editor/2209/31098f3d5a0ec5fa293a13a1759a2a1d_1664508811_6645.jpg\" title=\"31098f3d5a0ec5fa293a13a1759a2a1d_1664508811_6645.jpg\"><br style=\"clear:both;\">&nbsp;</div>','비급여항목안내','<p style=\"text-align:center;\" align=\"center\"><img src=\"https://sissel997.cafe24.com/data/editor/2209/31098f3d5a0ec5fa293a13a1759a2a1d_1664508817_1479.jpg\" title=\"31098f3d5a0ec5fa293a13a1759a2a1d_1664508817_1479.jpg\"><br style=\"clear:both;\"><img src=\"https://sissel997.cafe24.com/data/editor/2209/31098f3d5a0ec5fa293a13a1759a2a1d_1664508818_4836.jpg\" title=\"31098f3d5a0ec5fa293a13a1759a2a1d_1664508818_4836.jpg\"><br style=\"clear:both;\"><img src=\"https://sissel997.cafe24.com/data/editor/2209/31098f3d5a0ec5fa293a13a1759a2a1d_1664508819_8469.jpg\" title=\"31098f3d5a0ec5fa293a13a1759a2a1d_1664508819_8469.jpg\"><br style=\"clear:both;\"><img src=\"https://sissel997.cafe24.com/data/editor/2209/31098f3d5a0ec5fa293a13a1759a2a1d_1664508822_1961.jpg\" title=\"31098f3d5a0ec5fa293a13a1759a2a1d_1664508822_1961.jpg\"><br style=\"clear:both;\"><img src=\"https://sissel997.cafe24.com/data/editor/2209/31098f3d5a0ec5fa293a13a1759a2a1d_1664508822_294.jpg\" title=\"31098f3d5a0ec5fa293a13a1759a2a1d_1664508822_294.jpg\"><br style=\"clear:both;\"><img src=\"https://sissel997.cafe24.com/data/editor/2209/31098f3d5a0ec5fa293a13a1759a2a1d_1664508827_4955.jpg\" title=\"31098f3d5a0ec5fa293a13a1759a2a1d_1664508827_4955.jpg\"><br style=\"clear:both;\"><img src=\"https://sissel997.cafe24.com/data/editor/2209/31098f3d5a0ec5fa293a13a1759a2a1d_1664508830_3331.jpg\" title=\"31098f3d5a0ec5fa293a13a1759a2a1d_1664508830_3331.jpg\"><br style=\"clear:both;\"><img src=\"https://sissel997.cafe24.com/data/editor/2209/31098f3d5a0ec5fa293a13a1759a2a1d_1664508830_4655.jpg\" title=\"31098f3d5a0ec5fa293a13a1759a2a1d_1664508830_4655.jpg\"><br style=\"clear:both;\"><img src=\"https://sissel997.cafe24.com/data/editor/2209/31098f3d5a0ec5fa293a13a1759a2a1d_1664508830_5948.jpg\" title=\"31098f3d5a0ec5fa293a13a1759a2a1d_1664508830_5948.jpg\"><br style=\"clear:both;\">&nbsp;</p>','theme/basic','theme/basic',1,0,'',''),('privacy',1,'개인정보취급방침','<span style=\"font-family: NanumBarunGothic, &quot;Nanum Barun Gothic&quot;, 나눔바른고딕, &quot;Apple SD Gothic Neo&quot;, &quot;Malgun Gothic&quot;, sans-serif; white-space: pre-line; background-color: rgb(255, 255, 255);\">[오라클피부과의원 개인정보취급방침]\r\n■ 수집하는 개인정보 항목\r\n\r\n오라클피부과의원는 온라인 상담을 위해 아래와 같은 개인정보를 수집하고 있습니다.\r\nο 수집항목 : 이름 , 열람/수정 비밀번호 , 휴대전화번호 , 이메일\r\nο 본인확인 항목 : 이름, 주민등록번호, 핸드폰번호(인증), 이메일(인증),공인인증서\r\nο 개인정보 수집방법 : 비회원 글등록 및 회원전용 서비스 제공을 위한 회원가입.\r\n\r\n■ 개인정보의 수집 및 이용목적\r\n본원은 수집한 개인정보를 다음의 목적을 위해 활용합니다.\r\nο 정확한 병명 및 환자 상태 확인 및 상담 답변\r\n■ 개인정보의 보유 및 이용기간\r\n본원은 상담서비스를 이용하는 동안 개인정보를 보유 및 이용하며, 상담이 완료된후 지속적인 관리를 위해 해당 정보를 보관하나 서면,전화,메일 요청시 열람/수정/삭제가 가능합니다.\r\n단, 본원에서 주관하는 이벤트 참여시 이벤트 종료시까지 변동알림 및 통보,통제를 위해 이벤트 진행이 종료될 때 까지\r\n데이타가 보관 될 수 있으며, 수신여부와 상관없이 관련 연락,정보들이 수신될 수 있습니다.\r\n■ 개인정보의 파기절차 및 방법\r\n본원은 원칙적으로 개인정보 수집 및 이용목적이 달성된 후에는 해당 정보를 지체없이 파기합니다. 파기절차 및 방법은 다음과 같습니다.\r\n\r\nο 파기절차\r\n\r\n서면,전화,이메일로 사이트내 정보가 입력된 주소를 알려주시면 지체없이 파기를 진행합니다.\r\n사이트 주소(URL)을 모를경우엔 파기할 개인정보를 알려주시면 해당부분을 찾아 확인후 삭제 해드리겠습니다.\r\n요청시 본원에서 지정한 서류 (주민등록증 사본)을 꼭 제시하셔야 합니다.\r\n\r\nο 파기방법\r\n\r\n- 전자적 파일형태로 저장된 개인정보는 기록을 재생할 수 없는 기술적 방법을 사용하여 삭제합니다.\r\n\r\n■ 개인정보 제공\r\n본원은 이용자의 개인정보를 원칙적으로 외부에 제공하지 않습니다. 다만, 아래의 경우에는 예외로 합니다.\r\n\r\n- 이용자들이 사전에 동의한 경우\r\n\r\n- 법령의 규정에 의거하거나, 수사 목적으로 법령에 정해진 절차와 방법에 따라 수사기관의 요구가 있는 경우\r\n■ 이용자 및 법정대리인의 권리와 그 행사방법\r\n이용자 및 법정 대리인은 언제든지 등록되어 있는 자신 혹은 당해 만 14세 미만 아동의 개인정보를 조회하거나 수정할 수 있으며 가입해지를 요청할 수도 있습니 다.\r\n귀하가 개인정보의 오류에 대한 정정을 요청하신 경우에는 정정을 완료하기 전까 지 당해 개인정보를 이용 또는 제공하지 않습니다. 또한 잘못된 개인정보를 제3자 에게 이미 제공한 경우에는 정정 처리결과를 제3자에게 지체없이 통지하여 정정이 이루어지도록 하겠습니다.\r\n본원은 이용자 혹은 법정 대리인의 요청에 의해 해지 또는 삭제된 개인정보는 \"본원이 수집하는 개인정보의 보유 및 이용기간\"에 명시된 바에 따라 처리하고 그 외의 용도로 열람 또는 이용할 수 없도록 처리하고 있습니다.\r\n\r\n- 사이트에 기록한 개인정보가 있고 작성한 게시물에 대한 비밀번호를 알고 있다면 해당 게시물을 열람,수정,삭제를 스스로 할 수 있습니다.\r\n- 만약 비밀번호 및 열람정보를 잊어버렸다면 개인정보관리책임자(하단 기재)에게 연락하여 도움을 청할 수 있습니다.\r\n■ 개인정보 자동수집 장치의 설치, 운영 및 그 거부에 관한 사항\r\n본원은 귀하의 정보를 수시로 저장하고 찾아내는 \'쿠키(cookie)\' 등을 사용하지 않습니다.\r\n쿠키란 웹사이트를 운영하는데 이용되는 서버가 귀하의 브라우저에 보내는 아주 작은 텍스트 파일로서 귀하의 컴퓨터 하드디스크에 저장되는것을 말하며 본원은 본원 자체의 서버세션을 이용하기에 고객님 컴퓨터에 아무런 정보를 남기지 않습니다.\r\n단, 서비스이용의 편리를 위한 로그인유지 목적의 쿠키는 저장될 수 있습니다.\r\n■ 개인정보 관리 책임자\r\n본원은 고객의 개인정보를 보호하고 개인정보와 관련한 불만을 처리하기 위하여 아래와 같이 관련 부서 및 개인정보관리책임자를 지정하고 있습니다.\r\n\r\n개인정보관리책임자 성명 : 주식회사 메이드인리얼 신범진 이사\r\n전화번호 : 02-1666-5898 (AM : 10:00 ~ PM : 07:00 ) / 키워드,온라인 광고 관련 문의는 정중히 사절합니다.\r\n이메일 : info@madeinreal.com\r\n\r\n기타 개인정보침해에 대한 신고나 상담이 필요하신 경우에는 아래 기관에 문의하시기 바랍니다.\r\n\r\n1.개인분쟁조정위원회 (<a href=\"http://www.1336.or.kr/1336)\">www.1336.or.kr/1336)</a>\r\n2.정보보호마크인증위원회 (<a href=\"http://www.eprivacy.or.kr/02-580-0533~4)\">www.eprivacy.or.kr/02-580-0533~4)</a>\r\n3.대검찰청 인터넷범죄수사센터 (<a href=\"http://icic.sppo.go.kr/02-3480-3600)\">http://icic.sppo.go.kr/02-3480-3600)</a>\r\n4.경찰청 사이버테러대응센터 (<a href=\"http://www.ctrc.go.kr/02-392-0330)\">www.ctrc.go.kr/02-392-0330)</a></span><br>','개인정보취급방침','<p><span style=\"font-family: NanumBarunGothic, &quot;Nanum Barun Gothic&quot;, 나눔바른고딕, &quot;Apple SD Gothic Neo&quot;, &quot;Malgun Gothic&quot;, sans-serif; white-space: pre-line; background-color: rgb(255, 255, 255);\">[오라클피부과의원 개인정보취급방침]\r\n■ 수집하는 개인정보 항목\r\n\r\n오라클피부과의원는 온라인 상담을 위해 아래와 같은 개인정보를 수집하고 있습니다.\r\nο 수집항목 : 이름 , 열람/수정 비밀번호 , 휴대전화번호 , 이메일\r\nο 본인확인 항목 : 이름, 주민등록번호, 핸드폰번호(인증), 이메일(인증),공인인증서\r\nο 개인정보 수집방법 : 비회원 글등록 및 회원전용 서비스 제공을 위한 회원가입.\r\n\r\n■ 개인정보의 수집 및 이용목적\r\n본원은 수집한 개인정보를 다음의 목적을 위해 활용합니다.\r\nο 정확한 병명 및 환자 상태 확인 및 상담 답변\r\n■ 개인정보의 보유 및 이용기간\r\n본원은 상담서비스를 이용하는 동안 개인정보를 보유 및 이용하며, 상담이 완료된후 지속적인 관리를 위해 해당 정보를 보관하나 서면,전화,메일 요청시 열람/수정/삭제가 가능합니다.\r\n단, 본원에서 주관하는 이벤트 참여시 이벤트 종료시까지 변동알림 및 통보,통제를 위해 이벤트 진행이 종료될 때 까지\r\n데이타가 보관 될 수 있으며, 수신여부와 상관없이 관련 연락,정보들이 수신될 수 있습니다.\r\n■ 개인정보의 파기절차 및 방법\r\n본원은 원칙적으로 개인정보 수집 및 이용목적이 달성된 후에는 해당 정보를 지체없이 파기합니다. 파기절차 및 방법은 다음과 같습니다.\r\n\r\nο 파기절차\r\n\r\n서면,전화,이메일로 사이트내 정보가 입력된 주소를 알려주시면 지체없이 파기를 진행합니다.\r\n사이트 주소(URL)을 모를경우엔 파기할 개인정보를 알려주시면 해당부분을 찾아 확인후 삭제 해드리겠습니다.\r\n요청시 본원에서 지정한 서류 (주민등록증 사본)을 꼭 제시하셔야 합니다.\r\n\r\nο 파기방법\r\n\r\n- 전자적 파일형태로 저장된 개인정보는 기록을 재생할 수 없는 기술적 방법을 사용하여 삭제합니다.\r\n\r\n■ 개인정보 제공\r\n본원은 이용자의 개인정보를 원칙적으로 외부에 제공하지 않습니다. 다만, 아래의 경우에는 예외로 합니다.\r\n\r\n- 이용자들이 사전에 동의한 경우\r\n\r\n- 법령의 규정에 의거하거나, 수사 목적으로 법령에 정해진 절차와 방법에 따라 수사기관의 요구가 있는 경우\r\n■ 이용자 및 법정대리인의 권리와 그 행사방법\r\n이용자 및 법정 대리인은 언제든지 등록되어 있는 자신 혹은 당해 만 14세 미만 아동의 개인정보를 조회하거나 수정할 수 있으며 가입해지를 요청할 수도 있습니 다.\r\n귀하가 개인정보의 오류에 대한 정정을 요청하신 경우에는 정정을 완료하기 전까 지 당해 개인정보를 이용 또는 제공하지 않습니다. 또한 잘못된 개인정보를 제3자 에게 이미 제공한 경우에는 정정 처리결과를 제3자에게 지체없이 통지하여 정정이 이루어지도록 하겠습니다.\r\n본원은 이용자 혹은 법정 대리인의 요청에 의해 해지 또는 삭제된 개인정보는 \"본원이 수집하는 개인정보의 보유 및 이용기간\"에 명시된 바에 따라 처리하고 그 외의 용도로 열람 또는 이용할 수 없도록 처리하고 있습니다.\r\n\r\n- 사이트에 기록한 개인정보가 있고 작성한 게시물에 대한 비밀번호를 알고 있다면 해당 게시물을 열람,수정,삭제를 스스로 할 수 있습니다.\r\n- 만약 비밀번호 및 열람정보를 잊어버렸다면 개인정보관리책임자(하단 기재)에게 연락하여 도움을 청할 수 있습니다.\r\n■ 개인정보 자동수집 장치의 설치, 운영 및 그 거부에 관한 사항\r\n본원은 귀하의 정보를 수시로 저장하고 찾아내는 \'쿠키(cookie)\' 등을 사용하지 않습니다.\r\n쿠키란 웹사이트를 운영하는데 이용되는 서버가 귀하의 브라우저에 보내는 아주 작은 텍스트 파일로서 귀하의 컴퓨터 하드디스크에 저장되는것을 말하며 본원은 본원 자체의 서버세션을 이용하기에 고객님 컴퓨터에 아무런 정보를 남기지 않습니다.\r\n단, 서비스이용의 편리를 위한 로그인유지 목적의 쿠키는 저장될 수 있습니다.\r\n■ 개인정보 관리 책임자\r\n본원은 고객의 개인정보를 보호하고 개인정보와 관련한 불만을 처리하기 위하여 아래와 같이 관련 부서 및 개인정보관리책임자를 지정하고 있습니다.\r\n\r\n개인정보관리책임자 성명 : 주식회사 메이드인리얼 신범진 이사\r\n전화번호 : 02-1666-5898 (AM : 10:00 ~ PM : 07:00 ) / 키워드,온라인 광고 관련 문의는 정중히 사절합니다.\r\n이메일 : info@madeinreal.com\r\n\r\n기타 개인정보침해에 대한 신고나 상담이 필요하신 경우에는 아래 기관에 문의하시기 바랍니다.\r\n\r\n1.개인분쟁조정위원회 (<a href=\"http://www.1336.or.kr/1336)\">www.1336.or.kr/1336)</a>\r\n2.정보보호마크인증위원회 (<a href=\"http://www.eprivacy.or.kr/02-580-0533~4)\">www.eprivacy.or.kr/02-580-0533~4)</a>\r\n3.대검찰청 인터넷범죄수사센터 (<a href=\"http://icic.sppo.go.kr/02-3480-3600)\">http://icic.sppo.go.kr/02-3480-3600)</a>\r\n4.경찰청 사이버테러대응센터 (<a href=\"http://www.ctrc.go.kr/02-392-0330)\">www.ctrc.go.kr/02-392-0330)</a></span>&nbsp;</p>','theme/basic','theme/basic',1,0,'',''),('provision',1,'이용약관','<p align=\"left\" style=\"text-align:left;\"><span style=\"font-family:NanumBarunGothic, \'Nanum Barun Gothic\', \'나눔바른고딕\', \'Apple SD Gothic Neo\', \'Malgun Gothic\', sans-serif;white-space:pre-line;background-color:rgb(255,255,255);\">[오라클피부과의원 이용약관]\r\n제 1조 (목적)\r\n본 약관은 오라클피부과의원(이하 \"본원\")가 제공하는 인터넷 관련 서비스 오라클피부과의원 이하 \"서비스\")의 이용함에 있어 본원과 이용자(또는 회원)와의 권리, 이용조건 및 절차, 책임사항 등 기타 기본적인 사항을 구체적으로 규정함을 목적으로 합니다.\r\n\r\n제 2 조 (이용약관의 효력 및 변경)\r\n① 이 약관은 본원이 제공하는 서비스에서 이용자들이 쉽게 알 수 있도록 온라인으로 공시함으로써 효력을 발생합니다.\r\n② 본원은 합리적인 사유가 발생할 경우 대한민국 법령과 국제법에 위배되지 않는 범위 안에서 본원은 이 약관을 개정할 수 있습니다.\r\n③ 개정된 약관은 온라인에서 공지함으로써 효력을 발휘하며, 이용자의 권리 또는 의무 등 중요한 규정의 개정은 개정 7일전 온라인을 통하여 공지합니다.\r\n④ 이용자는 변경된 약관에 동의하지 않으면, 언제나 서비스 이용을 중단하고, 이용계약을 해지할 수 있습니다.\r\n단, 약관의 효력발생일 이후에 계속적인 서비스 이용은 약관의 변경사항에 대한 이용자의 동의로 간주됩니다.\r\n\r\n제 3조 (약관 외 준칙)\r\n① 이 약관은 본원이 제공하는 개별서비스에 관한 이용안내(이하 서비스 별 안내라 합니다)와 함께 적용합니다.\r\n② 이 약관에 명시되지 아니한 사항에 대해서는 관계법령 및 본원이 정한 세부지침 사항을 적용할 수 있습니다.\r\n\r\n제 4 조 (용어의 정의)\r\n① 회원: 서비스를 이용하기 위하여 본원과 이용계약을 체결하고 아이디와 비밀번호를 부여 받은 자를 말합니다.\r\n② 이용고객: 회원 및 회원이 아닌 서비스 이용자를 말합니다.\r\n③ 이용계약: 이용고객이 본원이 정한 약관에 동의하고 온라인 신청양식을 작성하여 서비스 이용을 신청하면 본원이 이용고객에게 이용자 아이디를 부여하여 서비스를 이용할 수 있도록 하는 것을 말합니다.\r\n④ 아이디(ID): 회원의 식별과 회원이 정하고 본원이 승인한 영문 숫자 조합을 말합니다.\r\n⑤ 비밀번호: 회원의 권익보호를 위하여 회원이 선정한 문자 및 숫자의 조합을 말합니다.\r\n⑥ 회원정보: 성명, 연락처 등 본원이 온라인 신청양식에 기재를 요청하는 회원의 개인정보를 말합니다.\r\n⑦ 게시물: 본원이 제공하는 서비스의 게시판에 회원이 게재 또는 등록하는 질문, 답변, 자료, 사진, 영상 댓글 등을 의미합니다.\r\n⑧ 운영자: 서비스의 전반적인 관리 및 원활한 운영을 위하여 본원이 고용한 자를 말합니다.\r\n⑨ 게시판 관리자: 회원 중 본원이 정한 선발 정책을 통과하여 게시판의 관리를 맡아 하는 회원을 말합니다.\r\n\r\n제 5 조 (이용 계약의 성립)\r\n① 이용계약은 이용고객이 이용약관 및 개인정보취급방침 내용에 대한 “동의”버튼을 누름으로써 동의한 것으로 간주합니다.\r\n② 이용계약은 이용고객의 이용신청에 대하여 본원이 이를 승낙함으로써 성립한다.\r\n\r\n제 6 조 (서비스 이용 신청)\r\n① 회원가입은 실명으로 가입하여야 합니다.\r\n② 회원으로 가입하여 본 서비스를 이용하고자 하는 이용고객은 본원에서 요청하는 제반 정보를 제공하여야 합니다.\r\n1. 이름\r\n2. 전자메일(E-mail)\r\n3. 아이디(ID)\r\n4. 닉네임\r\n5. 비밀번호\r\n6. 주소\r\n7. 휴대전화\r\n8. 성별\r\n9. 주민등록번호\r\n③ 모든 회원은 반드시 회원 본인의 이름과 연락처를 제공하여야만 서비스를 이용할 수 있으며, 실명으로 등록 한 사용자만이 권리를 주장할 수 있습니다.\r\n④ 타인의 명의(개인정보) 도용하여 이용신청을 한 회원의 ID는 삭제되며, 관계법령에 따라 처벌을 받을 수 있습니다.\r\n⑤ 본원은 본 서비스를 이용하는 회원에 대하여 등급별로 구분하여 서비스 이용에 차등을 둘 수 있습니다.\r\n\r\n제 7 조 (이용자의 개인 정보 보호)\r\n본원은 관련법령이 정하는 바에 따라서 이용자 등록정보를 포함한 이용자의 개인정보를 보호하기 위하여 노력합니다.\r\n이용자의 개인정보보호에 관해서는 관련법령 및 \"오라클피부과의원\"이 정하는 \"개인정보 취급방침\"에 정한 바에 의합니다.\r\n\r\n제 8 조 (이용 신청의 승낙)\r\n① 이용자가 되고자 하는 자는 제 6 조에서 정한 가입 양식에 따라 회원정보를 기입하고 \"등록하기\" 단추를 누른 회원을 대상으로 서비스 이용 승낙을 합니다.\r\n\r\n제 9 조 (이용 신청의 제한)\r\n① 본원은 다음 각 호에 해당하는 경우에 대하여서는 서비스 이용 승낙을 하지 않을 수 있습니다.\r\n1. 타인의 명의를 도용하여 허위로 신청하는 경우\r\n2. 등록 내용에 허위, 기재누락, 오기가 있는 경우\r\n3. 가입신청자가 본 약관 의거하여 이전에 회원 자격을 상실한 적이 있는 경우\r\n4. 사회의 안녕과 질서, 미풍양속을 저해할 목적으로 신청한 경우\r\n5. 버그 및 악성 프로그램을 사용하여 시스템의 취약점을 이용하여 가입 신청을 한 경우\r\n6. 이용자의 귀책사유로 인하여 사이트 운영정책에 따라 회원 자격 상실을 한 적이 있는 경우\r\n7. 본 서비스와 경쟁관계에 있는 이용자가 신청하는 경우\r\n8. 기타 본원이 정한 이용신청 요건이 만족되지 않았을 경우\r\n② 서비스 이용신청이 다음 각 호에 해당하는 경우에는 본원은 그 신청에 대하여 승낙 제한사유가 해소될 때까지 승낙을 유보할 수 있습니다.\r\n1. 설비의 여유가 없는 경우\r\n2. 기술상 지장이 있는 경우\r\n3. 기타 귀책사유로 이용승낙이 곤란한 경우\r\n③ 이용신청고객이 관계법령에서 규정하는 미성년자일 경우에 본원은 서비스 별 안내에서 정하는 바에 따라 승낙을 보류할 수 있습니다.\r\n\r\n제 10 조 (이용자ID 부여 및 변경 등)\r\n① 이용고객에 대하여 약관에 정하는 바에 따라 본원은 이용자 ID를 부여합니다.\r\n② 이용자ID는 원칙적으로 변경이 불가하며 부득이한 사유로 인하여 변경 하고자 하는 경우에는 해당 ID를 해지하고 재가입해야 합니다.\r\n③ 서비스의 이용자ID는 이용자 본인의 동의하에 \'\'가 운영하는 자사 사이트의 회원ID와 연결될 수 있습니다.\r\n④ 이용자ID는 다음 각 호에 해당하는 경우에는 이용고객 또는 본원의 요청으로 변경할 수 있습니다.\r\n1. 이용자ID가 이용자의 전화번호 또는 주민등록번호 등으로 등록되어 심각한 사생활침해가 우려되는 경우 2. 타인에게 혐오감을 주거나 미풍양속에 어긋나는 경우 3. 기타 합리적인 사유가 있는 경우 ⑤ 서비스 이용자ID 및 비밀번호의 관리책임은 이용자에게 있습니다.\r\n이를 소홀이 관리하여 발생하는 서비스 이용상의 손해 또는 제3자에 의한 부정이용 등에 대한 책임은 이용자에게 있으며 본원은 그에 대한 책임을 일절 지지 않습니다.\r\n⑥ 기타 이용자 개인정보 관리 및 변경 등에 관한 사항은 서비스 별 안내에 정하는 바에 의합니다.\r\n\r\n제 11 조 (서비스 이용 시간 및 중지)\r\n① 서비스 이용은 본원의 업무상 또는 기술상 특별한 지장이 없는 한 연중무휴, 1일 24시간 운영을 원칙으로 합니다.\r\n② 본원은 긴급한 시스템 점검, 증설 및 교체 등 부득이한 사유로 인하여 예고 없이 일시적으로 서비스를 중단할 수 있으며, 새로운 서비스로의 교체 등 본원이 적절하다고 판단하는 사유에 의하여 현재 제공되는 서비스를 완전히 중단할 수 있습니다. 이러한 경우 본원은 사전 또는 사후에 이를 이용자들이 쉽게 알 수 있도록 공지합니다.\r\n③ 본원은 국가비상사태, 정전, 서비스 설비의 장애 또는 서비스 이용의 폭주 등으로 정상적인 서비스 제공이 불가능할 경우, 서비스의 전부 또는 일부를 제한하거나 중지할 수 있습니다. 이 경우 그 사유 및 기간 등을 회원에게 사전 또는 사후에 공지합니다.\r\n④ 본원은 본원이 통제 불가능의 사유로 인한 서비스중단의 경우 사전통지가 불가능하며 타인의 고의, 과실로 인한 시스템중단 등의 경우에는 통보하지 아니합니다.\r\n⑤ 본원은 서비스를 특정범위로 분할하여 각 범위 별로 이용가능 시간을 별도로 지정할 수 있습니다.\r\n다만 이 경우 그 내용을 공지합니다.\r\n\r\n제 12 조 (이용자ID 관리)\r\n① 이용자 ID와 비밀번호에 관한 모든 관리책임은 회원에게 있습니다.\r\n② 본원은 이용자 ID에 의하여 제반 이용자 관리업무를 수행 하므로 회원이 이용자 ID를 변경하고자 하는 경우 본원이 인정할 만한 사유가 없는 한 이용자 ID의 변경을 제한할 수 있습니다.\r\n③ 이용고객이 등록한 이용자 ID 및 비밀번호에 의하여 발생되는 사용상의 과실 또는 제 3자에 의한 부정사용 등에 대한 모든 책임은 해당 이용고객에게 있습니다.\r\n\r\n제 13 조 (게시물의 관리)\r\n본원은 다음 각 호에 해당하는 게시물이나 자료를 사전통지 없이 삭제하거나 이동 또는 등록 거부를 할 수 있습니다.\r\n1. 다른 회원 또는 제 3자에게 심한 모욕을 주거나 명예를 손상시키는 내용인 경우\r\n2. 타인의 초상권, 사생활, 영업상 비밀 등을 유포하는 경우\r\n3. 공공질서 및 미풍양속에 위반되는 내용을 유포하거나 링크시키는 경우\r\n4. 불법복제 또는 해킹을 조장하는 내용인 경우\r\n5. 영리를 목적으로 하는 광고일 경우\r\n6. 범죄와 결부된다고 객관적으로 인정되는 내용일 경우\r\n7. 다른 이용자 또는 제 3자의 저작권 등 기타 권리를 침해하는 내용인 경우\r\n8. 본원에서 규정한 운영정책에 어긋나거나, 게시판 성격에 부합하지 않는 거나 운영상 악영향을 주거나 혼란을 주는 경우\r\n9. 동일한 내용을 중복하여 다수의 게시판에 작성하여 게시의 목적에 어긋나는 경우\r\n10. 기타 관계법령에 위배된다고 판단되는 경우\r\n\r\n제 14 조 (게시물에 대한 저작권)\r\n① 회원이 서비스 화면 내에 게시한 게시물의 저작권은 게시한 회원에게 귀속됩니다. 또한 본원은 게시자의 동의 없이 게시물을 상업적으로 이용할 수 없습니다.\r\n다만 비영리 목적인 경우는 그러하지 아니하며, 또한 서비스 내의 게재권을 갖습니다. ② 회원은 서비스를 이용하여 취득한 정보를 임의 가공, 판매하는 행위 등 서비스에 게재된 자료를 상업적으로 사용할 수 없습니다.\r\n③ 본원은 회원이 게시하거나 등록하는 서비스 내의 내용물, 게시 내용에 대해 제 13조 각 호에 해당된다고 판단되는 경우 사전통지 없이 삭제하거나 이동 또는 등록 거부할 수 있습니다.\r\n\r\n제 15 조 (정보의 제공)\r\n① 본원은 회원에게 서비스 이용에 필요가 있다고 인정되는 각종 정보에 대해서 전자우편이나 서신우편 등의 방법으로 회원에게 제공할 수 있습니다. 다만 동의하지 않은 회원에게는 제공하지 아니 합니다.\r\n② 본원은 서비스 개선 및 회원 대상의 서비스 소개 등의 목적으로 회원의 동의하에 추가적인 개인 정보를 요구할 수 있습니다.\r\n\r\n제 16 조 (광고게재 및 광고주와의 거래)\r\n① 본원이 회원에게 서비스를 제공할 수 있는 서비스 투자기반의 일부는 광고게재를 통한 수익으로부터 나옵니다. 회원은 서비스 이용 시 노출되는 광고게재에 대해 동의합니다.\r\n② 본원은 서비스상에 게재되어 있거나 본 서비스를 통한 광고주의 판촉활동에 회원이 참여하거나 교신 또는 거래를 함으로써 발생하는 손실과 손해에 대해 책임을 지지 않습니다.\r\n\r\n제 17 조 (포인트 또는 마일리지 제도 이용)\r\n① 본원은 회원에게 포인트 또는 마일리지(본원이 회원에게 일정한 조건에 따라서 부여하는 본원에 대한 채권으로서 사이버 머니처럼 사용할 수 있는 것을 말합니다. 이하 \"포인트\"라 합니다)를 부여할 수 있습니다.\r\n② 본원은 포인트 획득, 사용 방법 등에 관련된 세부이용지침을 별도로 정하여 시행할 수 있으며, 회원은 그 지침에 따라야 합니다. 본원이 상이한 시기와 발생 원인에 따라서 회원에게 포인트를 부여하여 회원이 합산된 포인트 중 일부를 사용할 경우 포인트의 차감 순서나 포인트의 소멸시효 기간 등은 본원이 결정하여 공지합니다.\r\n③ 본원은 포인트 제휴업체와 회원의 포인트 적립 및 사용을 위하여 필요한 최소한의 정보(아이디, 주민번호, 기타 회원의 식별을 위하여 필요한 정보, 물품 배송의 경우 배송에 필요한 성명, 주소, 전화번호)를 제공하거나 받을 수 있습니다.\r\n④ 부정한 방법으로 포인트를 획득한 사실이 확인될 경우 본원은 회원의 포인트 회수, ID(고유번호) 삭제 및 형사 고발 등 기타 조치를 취할 수 있습니다.\r\n\r\n제 18 조 (본원의 의무)\r\n① 본원은 법령과 본 약관이 금지하거나 公序良俗 (공서양속)에 반하는 행위를 하지 않으며 본 약관이 정하는 바에 따라 지속적이고, 안정적으로 서비스를 제공하기 위해서 노력합니다.\r\n② 본원은 회원의 개인정보를 안전하게 보호하며 회원의 승낙 없이 제 3자에게 제공하지 않습니다. 다만, 관계법령 및 수사상의 목적으로 관계기관으로부터 요청을 받았을 경우 이는 예외로 합니다.\r\n③ 본원은 이용자가 안전하게 인터넷 서비스를 이용할 수 있도록 이용자의 개인정보(신용정보 포함)보호를 위한 보안 시스템을 구축합니다.\r\n④ 본원은 이용고객으로부터 제기되는 의견이나 불만이 정당하다고 객관적으로 인정될 경우에는 적절한 절차를 거쳐 즉시 처리하여야 합니다. 다만, 즉시 처리가 곤란한 경우는 이용자에게 그 사유와 처리일정을 통보하여야 합니다.\r\n\r\n제 19 조 (이용자의 의무)\r\n① 이용자는 회원가입 신청 또는 회원정보 변경 시 실명으로 모든 사항을 사실에 근거하여 작성하여야 하며, 허위 또는 타인의 정보를 등록할 경우 일체의 권리를 주장할 수 없습니다.\r\n② 회원은 본 약관에서 규정하는 사항과 기타 본원이 정한 제반 규정, 공지사항 등 본원이 공지하는 사항 및 관계법령을 준수하여야 하며, 기타 본원의 업무에 방해가 되는 행위, 본원의 명예를 손상시키는 행위를 해서는 안 됩니다.\r\n③ 본원이 관계법령 및 \'개인정보 취급방침\'에 의거하여 그 책임을 지는 경우를 제외하고 회원에게 부여된 ID의 비밀번호 관리소홀, 부정사용에 의하여 발생하는 모든 결과에 대한 책임은 회원에게 있습니다.\r\n④ 회원은 본원의 사전 승낙 없이 서비스를 이용하여 영업활동을 할 수 없으며, 그 영업활동의 결과에 대해 본원은 책임을 지지 않습니다. 또한 회원은 이와 같은 영업활동으로 본원이 손해를 입은 경우, 회원은 본원에 대해 손해배상의무를 지며, 본원은 해당 회원에 대해 서비스 이용제한 및 적법한 절차를 거쳐 손해배상 등을 청구할 수 있습니다.\r\n⑤ 회원은 본원의 명시적 동의가 없는 한 서비스의 이용권한, 기타 이용계약상의 지위를 타인에게 양도, 증여할 수 없으며 이를 담보로 제공할 수 없습니다.\r\n⑥ 회원은 본원 및 제 3자의 지적 재산권을 침해해서는 안 됩니다.\r\n⑦ 회원은 다음 각 호에 해당하는 행위를 하여서는 안 되며, 해당 행위를 하는 경우에 본원은 회원의 서비스 이용제한 및 적법 조치를 포함한 제재를 가할 수 있습니다.\r\n1. 직원이나 서비스의 관리자를 가장하거나 사칭하여 또는 타인의 명의를 도용하여 글을 게시 하거나 메일을 발송하는 행위\r\n2. 회원가입 신청 또는 회원정보 변경 시 허위내용을 등록하는 행위\r\n3. 다른 이용자의 ID, 비밀번호, 전자메일 등을 도용하는 행위\r\n4. 이용자 ID를 타인과 거래하는 행위\r\n5. 본원의 운영진, 직원 또는 관계자를 사칭하는 행위\r\n6. 본원으로부터 특별한 권리를 부여 받지 않고 본원의 클라이언트 프로그램을 변경하거나, 본원의 서버를 해킹하거나, 웹사이트 또는 게시된 정보의 일부분 또는 전체를 임의로 변경하는 행위\r\n7. 서비스에 위해를 가하거나 고의로 방해하는 행위\r\n8. 본 서비스를 통해 얻은 정보를 본원의 사전 승낙 없이 서비스 이용 외의 목적으로 복제하거나, 이를 출판 및 방송 등에 사용하거나, 제 3 자에게 제공하는 행위\r\n9. 관련 법령에 의하여 그 전송 또는 게시가 금지되는 정보(컴퓨터 프로그램 등)의 전송 또는 게시하는 행위\r\n10. 공공질서 및 미풍양속에 위반되는 저속, 음란한 내용의 정보, 문장, 도형, 음향, 동영상을 전송, 게시, 전자우편 또는 기타의 방법으로 타인에게 유포하는 행위\r\n11. 모욕적이거나 개인신상에 대한 내용이어서 타인의 명예나 프라이버시를 침해할 수 있는 내용을 전송, 게시, 쪽지 또는 기타의 방법으로 타인에게 유포하는 행위\r\n12. 다른 이용자를 희롱 또는 위협하거나, 특정 이용자에게 지속적으로 고통 또는 불편을 주는 행위\r\n13. 본원의 승인을 받지 않고 다른 사용자의 개인정보를 수집 또는 저장하는 행위\r\n14. 범죄와 결부된다고 객관적으로 판단되는 행위\r\n15. 본 약관을 포함하여 기타 본원이 정한 제반 규정 또는 이용 조건을 위반하는 및 기타 대한민국 관계법령 및 국제법에 위배되는 행위 등\r\n\r\n제 20 조 (계약 변경 및 해지)\r\n① 회원이 이용계약을 해지하고자 하는 때에는 사이트 상 본원이 정한 별도의 이용방법에 따라 해지를 하여야 합니다.\r\n② 회원이 제 19조 사항을 위반하였을 경우 본원은 사전 통보 없이 즉시 이용관계를 해지하거나 회원의 서비스 이용을 중지 시킬 수 있습니다.\r\n③ 본원은 1년 동안 서비스를 사용하지 않은 회원에 대하여 서비스에 대한 사용여부를 묻고 이에 대한 답변이 없을 경우 본원은 이용계약을 해지 할 수 있습니다.\r\n④ 제 2항 과 3항에 조치에 대하여 이의가 있을 경우 회원은 본원이 정한 이용방법에 따라 이의 신청을 할 수 있습니다. 또한 이의신청이 타당하다고 판단 될 시 본원은 즉시 회원의 서비스 이용을 재개 합니다.\r\n\r\n제 21 조 (서비스 이용제한)\r\n① 본원은 회원이 서비스 이용내용에 있어서 본 약관 제 19조 7항의 내용을 위반하거나, 다음 각 호에 해당하는 경우 서비스 이용을 제한할 수 있습니다.\r\n1. 미풍양속을 저해하는 비속한 ID 및 넥네임 사용\r\n2. 타 이용자에게 심한 모욕을 주거나, 서비스 이용을 방해한 경우\r\n3. 저작권이 있는 자료의 글을 무단 게시한 경우\r\n4. 정보통신 윤리위원회 등 관련 공공기관의 시정 요구가 있는 경우\r\n5. 불법 사이트를 홍보 광고한 경우\r\n6. 타인의 허락 없이 사진, 게시물, 개인정보를 유포하는 경우\r\n7. 정보통신윤리위원회의 심의 세칙 제 7조에 어긋나는 음란물을 게재한 경우\r\n8. 반국가적 행위의 수행을 목적으로 하는 내용을 포함한 경우\r\n9. 사이트 운영에 심각한 영향을 끼치는 경우\r\n② 상기 이용제한 규정에 따라 서비스를 이용하는 회원에게 서비스 이용에 대하여 별도 공지 없이 서비스 이용의 일시 정지, 초기화, 이용계약 해지 등을 불량이용자 처리규정에 따라 취할 수 있습니다.\r\n\r\n제 22 조 (손해배상)\r\n① 본 약관을 위반하여 본원에 손해가 발생 되었을 때에는 회원은 본원에 발생한 모든 손해를 배상하여야 합니다.\r\n② 본원은 서비스에서 제공하는 서비스의 이용과 관련하여 개인정보 취급방침에서 정하는 내용에 해당하지 않는 사항에 대하여는 어떠한 손해도 책임을 지지 않습니다.\r\n③ 본원은 회원이 오라클피부과의원 서비스를 이용함으로써 직/간접적으로 행하는 모든 피해와 법적 책임에 대하여 어떠한 손해도 책임 지지 않습니다.\r\n\r\n제 23 조 (면책조항)\r\n① 본원은 천재지변, 전쟁 및 기타 이에 준하는 불가항력으로 인하여 서비스를 제공할 수 없는 경우에는 서비스 제공에 대한 책임이 면제됩니다.\r\n② 본원은 기간통신 사업자가 전기통신 서비스를 중지하거나 정상적으로 제공하지 아니하여 손해가 발생한 경우 책임이 면제됩니다.\r\n③ 본원은 서비스용 설비의 보수, 교체, 정기점검, 공사 등 부득이한 사유로 발생한 손해에 대하여 책임을 지지 않습니다.\r\n④ 본원은 회원의 귀책사유로 인한 서비스 이용의 장애 또는 손해에 대하여 책임을 지지 않습니다.\r\n⑤ 본원은 이용자의 컴퓨터 오류에 의해 손해가 발생한 경우, 또는 회원이 신상정보 및 전자우편 주소를 부실하게 기재하여 손해가 발생한 경우 책임을 지지 않습니다.\r\n⑥ 본원은 회원이 서비스를 이용하여 기대하는 수익을 얻지 못하거나 상실한 것에 대하여 책임을 지지 않습니다.\r\n⑦ 본원은 회원이 서비스를 이용하면서 얻은 자료로 인한 손해에 대하여 책임을 지지 않습니다. 또한 본원은 회원이 서비스를 이용하며 타 회원으로 인해 입게 되는 정신적 피해에 대하여 보상할 책임을 지지 않습니다.\r\n⑧ 본원은 회원이 서비스에 게재한 각종 정보, 자료, 사실의 신뢰도, 정확성 등 내용에 대하여 책임을 지지 않습니다.\r\n⑨ 본원은 이용자 상호간 및 이용자와 제 3자 상호 간에 서비스를 매개로 발생한 분쟁에 대해 개입할 의무가 없으며, 이로 인한 손해를 배상할 책임도 없습니다.\r\n⑩ 본원에서 회원에게 무료로 제공하는 서비스의 이용과 관련해서는 어떠한 손해도 책임을 지지 않습니다.\r\n⑪ 본원은 회원의 게시판 사용으로 발생하는 어떠한 손해에도 책임을 지지 않으며 모든 책임은 게시물을 작성한 본인에게 있습니다.\r\n⑫ 본원은 대한민국 법에서 정한 규율을 존중하며 정보통신법과 청소년보호법을 비롯한 모든 법률을 위반하는 게시물을 올리는 것을 절대 허용하지 않으며 이에 관하여 본원은 일체의 책임을 지지 않습니다.\r\n⑬ 본원은 회원이 서비스를 이용함으로써 회원 본인 또는 제3자에게 직/간접적으로 영향을 미치게 되는 모든 피해와 법적 문제에 대하여 책임을 지지 않습니다.\r\n\r\n제 24 조 (재판권 및 준거법)\r\n① 이 약관에 명시되지 않은 사항은 전기통신사업법 등 관계법령과 상관습에 따릅니다.\r\n② 본원과 회원 간에 분쟁이 발생한 경우 이를 원만히 해결하기 위하여서 본원과 회원은 긴밀히 협의하여야 합니다.\r\n③ 서비스 이용으로 발생한 분쟁에 대해 소송이 제기되는 경우 본원의 본사 소재지를 관할하는 법원을 관할 법원으로 합니다.\r\n\r\n제 25 조 (금지행위 및 저작권 보호 등)\r\n① 본 사이트의 모든 컨텐츠 및 텍스트 내용은 저작자와 저작자 단체에서 기획을 하여 제작을 한 디지털저작물로 지적재산권으로 보호되며, 허가 없이 무단 복제 및 배포,전송 등을 상업적으로 사용하는 경우 지적재산권 및 저작권 침해로 간주하며, 민형사 소송 및 가처분 등의 처분을 받을 수 있습니다.\r\n② 누구든지 정당한 권한 없이 콘텐츠제작자가 상당한 노력으로 제작하여 대통령령으로 정하는 방법에 따라 콘텐츠 또는 그 포장에 제작연월일, 제작자명 및 이 법에 따라 보호받는다는 사실을 표시한 콘텐츠의 전부 또는 상당한 부분을 복제ㆍ배포ㆍ방송 또는 전송함으로써 콘텐츠제작자의 영업에 관한 이익을 침해하여서는 아니 된다.\r\n\r\n\r\n부 칙(시행일)\r\n1. 본 약관 변경공고일자 2011년 3월 2일\r\n2. 본 약관 시행일자 2011년 3월 9일부터 시행한다.\r\n3. 본 약관 변경공고일자 2011년 3월 6일\r\n4. 본 약관 시행일자 2011년 3월 13일부터 시행한다.\r\n5. 본 약관 변경공고일자 2011년 3월 8일</span>&nbsp;</p>','이용약관','<p><span style=\"font-family:NanumBarunGothic, \'Nanum Barun Gothic\', \'나눔바른고딕\', \'Apple SD Gothic Neo\', \'Malgun Gothic\', sans-serif;white-space:pre-line;background-color:rgb(255,255,255);\">[오라클피부과의원 이용약관]\r\n제 1조 (목적)\r\n본 약관은 오라클피부과의원(이하 \"본원\")가 제공하는 인터넷 관련 서비스 오라클피부과의원 이하 \"서비스\")의 이용함에 있어 본원과 이용자(또는 회원)와의 권리, 이용조건 및 절차, 책임사항 등 기타 기본적인 사항을 구체적으로 규정함을 목적으로 합니다.\r\n\r\n제 2 조 (이용약관의 효력 및 변경)\r\n① 이 약관은 본원이 제공하는 서비스에서 이용자들이 쉽게 알 수 있도록 온라인으로 공시함으로써 효력을 발생합니다.\r\n② 본원은 합리적인 사유가 발생할 경우 대한민국 법령과 국제법에 위배되지 않는 범위 안에서 본원은 이 약관을 개정할 수 있습니다.\r\n③ 개정된 약관은 온라인에서 공지함으로써 효력을 발휘하며, 이용자의 권리 또는 의무 등 중요한 규정의 개정은 개정 7일전 온라인을 통하여 공지합니다.\r\n④ 이용자는 변경된 약관에 동의하지 않으면, 언제나 서비스 이용을 중단하고, 이용계약을 해지할 수 있습니다.\r\n단, 약관의 효력발생일 이후에 계속적인 서비스 이용은 약관의 변경사항에 대한 이용자의 동의로 간주됩니다.\r\n\r\n제 3조 (약관 외 준칙)\r\n① 이 약관은 본원이 제공하는 개별서비스에 관한 이용안내(이하 서비스 별 안내라 합니다)와 함께 적용합니다.\r\n② 이 약관에 명시되지 아니한 사항에 대해서는 관계법령 및 본원이 정한 세부지침 사항을 적용할 수 있습니다.\r\n\r\n제 4 조 (용어의 정의)\r\n① 회원: 서비스를 이용하기 위하여 본원과 이용계약을 체결하고 아이디와 비밀번호를 부여 받은 자를 말합니다.\r\n② 이용고객: 회원 및 회원이 아닌 서비스 이용자를 말합니다.\r\n③ 이용계약: 이용고객이 본원이 정한 약관에 동의하고 온라인 신청양식을 작성하여 서비스 이용을 신청하면 본원이 이용고객에게 이용자 아이디를 부여하여 서비스를 이용할 수 있도록 하는 것을 말합니다.\r\n④ 아이디(ID): 회원의 식별과 회원이 정하고 본원이 승인한 영문 숫자 조합을 말합니다.\r\n⑤ 비밀번호: 회원의 권익보호를 위하여 회원이 선정한 문자 및 숫자의 조합을 말합니다.\r\n⑥ 회원정보: 성명, 연락처 등 본원이 온라인 신청양식에 기재를 요청하는 회원의 개인정보를 말합니다.\r\n⑦ 게시물: 본원이 제공하는 서비스의 게시판에 회원이 게재 또는 등록하는 질문, 답변, 자료, 사진, 영상 댓글 등을 의미합니다.\r\n⑧ 운영자: 서비스의 전반적인 관리 및 원활한 운영을 위하여 본원이 고용한 자를 말합니다.\r\n⑨ 게시판 관리자: 회원 중 본원이 정한 선발 정책을 통과하여 게시판의 관리를 맡아 하는 회원을 말합니다.\r\n\r\n제 5 조 (이용 계약의 성립)\r\n① 이용계약은 이용고객이 이용약관 및 개인정보취급방침 내용에 대한 “동의”버튼을 누름으로써 동의한 것으로 간주합니다.\r\n② 이용계약은 이용고객의 이용신청에 대하여 본원이 이를 승낙함으로써 성립한다.\r\n\r\n제 6 조 (서비스 이용 신청)\r\n① 회원가입은 실명으로 가입하여야 합니다.\r\n② 회원으로 가입하여 본 서비스를 이용하고자 하는 이용고객은 본원에서 요청하는 제반 정보를 제공하여야 합니다.\r\n1. 이름\r\n2. 전자메일(E-mail)\r\n3. 아이디(ID)\r\n4. 닉네임\r\n5. 비밀번호\r\n6. 주소\r\n7. 휴대전화\r\n8. 성별\r\n9. 주민등록번호\r\n③ 모든 회원은 반드시 회원 본인의 이름과 연락처를 제공하여야만 서비스를 이용할 수 있으며, 실명으로 등록 한 사용자만이 권리를 주장할 수 있습니다.\r\n④ 타인의 명의(개인정보) 도용하여 이용신청을 한 회원의 ID는 삭제되며, 관계법령에 따라 처벌을 받을 수 있습니다.\r\n⑤ 본원은 본 서비스를 이용하는 회원에 대하여 등급별로 구분하여 서비스 이용에 차등을 둘 수 있습니다.\r\n\r\n제 7 조 (이용자의 개인 정보 보호)\r\n본원은 관련법령이 정하는 바에 따라서 이용자 등록정보를 포함한 이용자의 개인정보를 보호하기 위하여 노력합니다.\r\n이용자의 개인정보보호에 관해서는 관련법령 및 \"오라클피부과의원\"이 정하는 \"개인정보 취급방침\"에 정한 바에 의합니다.\r\n\r\n제 8 조 (이용 신청의 승낙)\r\n① 이용자가 되고자 하는 자는 제 6 조에서 정한 가입 양식에 따라 회원정보를 기입하고 \"등록하기\" 단추를 누른 회원을 대상으로 서비스 이용 승낙을 합니다.\r\n\r\n제 9 조 (이용 신청의 제한)\r\n① 본원은 다음 각 호에 해당하는 경우에 대하여서는 서비스 이용 승낙을 하지 않을 수 있습니다.\r\n1. 타인의 명의를 도용하여 허위로 신청하는 경우\r\n2. 등록 내용에 허위, 기재누락, 오기가 있는 경우\r\n3. 가입신청자가 본 약관 의거하여 이전에 회원 자격을 상실한 적이 있는 경우\r\n4. 사회의 안녕과 질서, 미풍양속을 저해할 목적으로 신청한 경우\r\n5. 버그 및 악성 프로그램을 사용하여 시스템의 취약점을 이용하여 가입 신청을 한 경우\r\n6. 이용자의 귀책사유로 인하여 사이트 운영정책에 따라 회원 자격 상실을 한 적이 있는 경우\r\n7. 본 서비스와 경쟁관계에 있는 이용자가 신청하는 경우\r\n8. 기타 본원이 정한 이용신청 요건이 만족되지 않았을 경우\r\n② 서비스 이용신청이 다음 각 호에 해당하는 경우에는 본원은 그 신청에 대하여 승낙 제한사유가 해소될 때까지 승낙을 유보할 수 있습니다.\r\n1. 설비의 여유가 없는 경우\r\n2. 기술상 지장이 있는 경우\r\n3. 기타 귀책사유로 이용승낙이 곤란한 경우\r\n③ 이용신청고객이 관계법령에서 규정하는 미성년자일 경우에 본원은 서비스 별 안내에서 정하는 바에 따라 승낙을 보류할 수 있습니다.\r\n\r\n제 10 조 (이용자ID 부여 및 변경 등)\r\n① 이용고객에 대하여 약관에 정하는 바에 따라 본원은 이용자 ID를 부여합니다.\r\n② 이용자ID는 원칙적으로 변경이 불가하며 부득이한 사유로 인하여 변경 하고자 하는 경우에는 해당 ID를 해지하고 재가입해야 합니다.\r\n③ 서비스의 이용자ID는 이용자 본인의 동의하에 \'\'가 운영하는 자사 사이트의 회원ID와 연결될 수 있습니다.\r\n④ 이용자ID는 다음 각 호에 해당하는 경우에는 이용고객 또는 본원의 요청으로 변경할 수 있습니다.\r\n1. 이용자ID가 이용자의 전화번호 또는 주민등록번호 등으로 등록되어 심각한 사생활침해가 우려되는 경우 2. 타인에게 혐오감을 주거나 미풍양속에 어긋나는 경우 3. 기타 합리적인 사유가 있는 경우 ⑤ 서비스 이용자ID 및 비밀번호의 관리책임은 이용자에게 있습니다.\r\n이를 소홀이 관리하여 발생하는 서비스 이용상의 손해 또는 제3자에 의한 부정이용 등에 대한 책임은 이용자에게 있으며 본원은 그에 대한 책임을 일절 지지 않습니다.\r\n⑥ 기타 이용자 개인정보 관리 및 변경 등에 관한 사항은 서비스 별 안내에 정하는 바에 의합니다.\r\n\r\n제 11 조 (서비스 이용 시간 및 중지)\r\n① 서비스 이용은 본원의 업무상 또는 기술상 특별한 지장이 없는 한 연중무휴, 1일 24시간 운영을 원칙으로 합니다.\r\n② 본원은 긴급한 시스템 점검, 증설 및 교체 등 부득이한 사유로 인하여 예고 없이 일시적으로 서비스를 중단할 수 있으며, 새로운 서비스로의 교체 등 본원이 적절하다고 판단하는 사유에 의하여 현재 제공되는 서비스를 완전히 중단할 수 있습니다. 이러한 경우 본원은 사전 또는 사후에 이를 이용자들이 쉽게 알 수 있도록 공지합니다.\r\n③ 본원은 국가비상사태, 정전, 서비스 설비의 장애 또는 서비스 이용의 폭주 등으로 정상적인 서비스 제공이 불가능할 경우, 서비스의 전부 또는 일부를 제한하거나 중지할 수 있습니다. 이 경우 그 사유 및 기간 등을 회원에게 사전 또는 사후에 공지합니다.\r\n④ 본원은 본원이 통제 불가능의 사유로 인한 서비스중단의 경우 사전통지가 불가능하며 타인의 고의, 과실로 인한 시스템중단 등의 경우에는 통보하지 아니합니다.\r\n⑤ 본원은 서비스를 특정범위로 분할하여 각 범위 별로 이용가능 시간을 별도로 지정할 수 있습니다.\r\n다만 이 경우 그 내용을 공지합니다.\r\n\r\n제 12 조 (이용자ID 관리)\r\n① 이용자 ID와 비밀번호에 관한 모든 관리책임은 회원에게 있습니다.\r\n② 본원은 이용자 ID에 의하여 제반 이용자 관리업무를 수행 하므로 회원이 이용자 ID를 변경하고자 하는 경우 본원이 인정할 만한 사유가 없는 한 이용자 ID의 변경을 제한할 수 있습니다.\r\n③ 이용고객이 등록한 이용자 ID 및 비밀번호에 의하여 발생되는 사용상의 과실 또는 제 3자에 의한 부정사용 등에 대한 모든 책임은 해당 이용고객에게 있습니다.\r\n\r\n제 13 조 (게시물의 관리)\r\n본원은 다음 각 호에 해당하는 게시물이나 자료를 사전통지 없이 삭제하거나 이동 또는 등록 거부를 할 수 있습니다.\r\n1. 다른 회원 또는 제 3자에게 심한 모욕을 주거나 명예를 손상시키는 내용인 경우\r\n2. 타인의 초상권, 사생활, 영업상 비밀 등을 유포하는 경우\r\n3. 공공질서 및 미풍양속에 위반되는 내용을 유포하거나 링크시키는 경우\r\n4. 불법복제 또는 해킹을 조장하는 내용인 경우\r\n5. 영리를 목적으로 하는 광고일 경우\r\n6. 범죄와 결부된다고 객관적으로 인정되는 내용일 경우\r\n7. 다른 이용자 또는 제 3자의 저작권 등 기타 권리를 침해하는 내용인 경우\r\n8. 본원에서 규정한 운영정책에 어긋나거나, 게시판 성격에 부합하지 않는 거나 운영상 악영향을 주거나 혼란을 주는 경우\r\n9. 동일한 내용을 중복하여 다수의 게시판에 작성하여 게시의 목적에 어긋나는 경우\r\n10. 기타 관계법령에 위배된다고 판단되는 경우\r\n\r\n제 14 조 (게시물에 대한 저작권)\r\n① 회원이 서비스 화면 내에 게시한 게시물의 저작권은 게시한 회원에게 귀속됩니다. 또한 본원은 게시자의 동의 없이 게시물을 상업적으로 이용할 수 없습니다.\r\n다만 비영리 목적인 경우는 그러하지 아니하며, 또한 서비스 내의 게재권을 갖습니다. ② 회원은 서비스를 이용하여 취득한 정보를 임의 가공, 판매하는 행위 등 서비스에 게재된 자료를 상업적으로 사용할 수 없습니다.\r\n③ 본원은 회원이 게시하거나 등록하는 서비스 내의 내용물, 게시 내용에 대해 제 13조 각 호에 해당된다고 판단되는 경우 사전통지 없이 삭제하거나 이동 또는 등록 거부할 수 있습니다.\r\n\r\n제 15 조 (정보의 제공)\r\n① 본원은 회원에게 서비스 이용에 필요가 있다고 인정되는 각종 정보에 대해서 전자우편이나 서신우편 등의 방법으로 회원에게 제공할 수 있습니다. 다만 동의하지 않은 회원에게는 제공하지 아니 합니다.\r\n② 본원은 서비스 개선 및 회원 대상의 서비스 소개 등의 목적으로 회원의 동의하에 추가적인 개인 정보를 요구할 수 있습니다.\r\n\r\n제 16 조 (광고게재 및 광고주와의 거래)\r\n① 본원이 회원에게 서비스를 제공할 수 있는 서비스 투자기반의 일부는 광고게재를 통한 수익으로부터 나옵니다. 회원은 서비스 이용 시 노출되는 광고게재에 대해 동의합니다.\r\n② 본원은 서비스상에 게재되어 있거나 본 서비스를 통한 광고주의 판촉활동에 회원이 참여하거나 교신 또는 거래를 함으로써 발생하는 손실과 손해에 대해 책임을 지지 않습니다.\r\n\r\n제 17 조 (포인트 또는 마일리지 제도 이용)\r\n① 본원은 회원에게 포인트 또는 마일리지(본원이 회원에게 일정한 조건에 따라서 부여하는 본원에 대한 채권으로서 사이버 머니처럼 사용할 수 있는 것을 말합니다. 이하 \"포인트\"라 합니다)를 부여할 수 있습니다.\r\n② 본원은 포인트 획득, 사용 방법 등에 관련된 세부이용지침을 별도로 정하여 시행할 수 있으며, 회원은 그 지침에 따라야 합니다. 본원이 상이한 시기와 발생 원인에 따라서 회원에게 포인트를 부여하여 회원이 합산된 포인트 중 일부를 사용할 경우 포인트의 차감 순서나 포인트의 소멸시효 기간 등은 본원이 결정하여 공지합니다.\r\n③ 본원은 포인트 제휴업체와 회원의 포인트 적립 및 사용을 위하여 필요한 최소한의 정보(아이디, 주민번호, 기타 회원의 식별을 위하여 필요한 정보, 물품 배송의 경우 배송에 필요한 성명, 주소, 전화번호)를 제공하거나 받을 수 있습니다.\r\n④ 부정한 방법으로 포인트를 획득한 사실이 확인될 경우 본원은 회원의 포인트 회수, ID(고유번호) 삭제 및 형사 고발 등 기타 조치를 취할 수 있습니다.\r\n\r\n제 18 조 (본원의 의무)\r\n① 본원은 법령과 본 약관이 금지하거나 公序良俗 (공서양속)에 반하는 행위를 하지 않으며 본 약관이 정하는 바에 따라 지속적이고, 안정적으로 서비스를 제공하기 위해서 노력합니다.\r\n② 본원은 회원의 개인정보를 안전하게 보호하며 회원의 승낙 없이 제 3자에게 제공하지 않습니다. 다만, 관계법령 및 수사상의 목적으로 관계기관으로부터 요청을 받았을 경우 이는 예외로 합니다.\r\n③ 본원은 이용자가 안전하게 인터넷 서비스를 이용할 수 있도록 이용자의 개인정보(신용정보 포함)보호를 위한 보안 시스템을 구축합니다.\r\n④ 본원은 이용고객으로부터 제기되는 의견이나 불만이 정당하다고 객관적으로 인정될 경우에는 적절한 절차를 거쳐 즉시 처리하여야 합니다. 다만, 즉시 처리가 곤란한 경우는 이용자에게 그 사유와 처리일정을 통보하여야 합니다.\r\n\r\n제 19 조 (이용자의 의무)\r\n① 이용자는 회원가입 신청 또는 회원정보 변경 시 실명으로 모든 사항을 사실에 근거하여 작성하여야 하며, 허위 또는 타인의 정보를 등록할 경우 일체의 권리를 주장할 수 없습니다.\r\n② 회원은 본 약관에서 규정하는 사항과 기타 본원이 정한 제반 규정, 공지사항 등 본원이 공지하는 사항 및 관계법령을 준수하여야 하며, 기타 본원의 업무에 방해가 되는 행위, 본원의 명예를 손상시키는 행위를 해서는 안 됩니다.\r\n③ 본원이 관계법령 및 \'개인정보 취급방침\'에 의거하여 그 책임을 지는 경우를 제외하고 회원에게 부여된 ID의 비밀번호 관리소홀, 부정사용에 의하여 발생하는 모든 결과에 대한 책임은 회원에게 있습니다.\r\n④ 회원은 본원의 사전 승낙 없이 서비스를 이용하여 영업활동을 할 수 없으며, 그 영업활동의 결과에 대해 본원은 책임을 지지 않습니다. 또한 회원은 이와 같은 영업활동으로 본원이 손해를 입은 경우, 회원은 본원에 대해 손해배상의무를 지며, 본원은 해당 회원에 대해 서비스 이용제한 및 적법한 절차를 거쳐 손해배상 등을 청구할 수 있습니다.\r\n⑤ 회원은 본원의 명시적 동의가 없는 한 서비스의 이용권한, 기타 이용계약상의 지위를 타인에게 양도, 증여할 수 없으며 이를 담보로 제공할 수 없습니다.\r\n⑥ 회원은 본원 및 제 3자의 지적 재산권을 침해해서는 안 됩니다.\r\n⑦ 회원은 다음 각 호에 해당하는 행위를 하여서는 안 되며, 해당 행위를 하는 경우에 본원은 회원의 서비스 이용제한 및 적법 조치를 포함한 제재를 가할 수 있습니다.\r\n1. 직원이나 서비스의 관리자를 가장하거나 사칭하여 또는 타인의 명의를 도용하여 글을 게시 하거나 메일을 발송하는 행위\r\n2. 회원가입 신청 또는 회원정보 변경 시 허위내용을 등록하는 행위\r\n3. 다른 이용자의 ID, 비밀번호, 전자메일 등을 도용하는 행위\r\n4. 이용자 ID를 타인과 거래하는 행위\r\n5. 본원의 운영진, 직원 또는 관계자를 사칭하는 행위\r\n6. 본원으로부터 특별한 권리를 부여 받지 않고 본원의 클라이언트 프로그램을 변경하거나, 본원의 서버를 해킹하거나, 웹사이트 또는 게시된 정보의 일부분 또는 전체를 임의로 변경하는 행위\r\n7. 서비스에 위해를 가하거나 고의로 방해하는 행위\r\n8. 본 서비스를 통해 얻은 정보를 본원의 사전 승낙 없이 서비스 이용 외의 목적으로 복제하거나, 이를 출판 및 방송 등에 사용하거나, 제 3 자에게 제공하는 행위\r\n9. 관련 법령에 의하여 그 전송 또는 게시가 금지되는 정보(컴퓨터 프로그램 등)의 전송 또는 게시하는 행위\r\n10. 공공질서 및 미풍양속에 위반되는 저속, 음란한 내용의 정보, 문장, 도형, 음향, 동영상을 전송, 게시, 전자우편 또는 기타의 방법으로 타인에게 유포하는 행위\r\n11. 모욕적이거나 개인신상에 대한 내용이어서 타인의 명예나 프라이버시를 침해할 수 있는 내용을 전송, 게시, 쪽지 또는 기타의 방법으로 타인에게 유포하는 행위\r\n12. 다른 이용자를 희롱 또는 위협하거나, 특정 이용자에게 지속적으로 고통 또는 불편을 주는 행위\r\n13. 본원의 승인을 받지 않고 다른 사용자의 개인정보를 수집 또는 저장하는 행위\r\n14. 범죄와 결부된다고 객관적으로 판단되는 행위\r\n15. 본 약관을 포함하여 기타 본원이 정한 제반 규정 또는 이용 조건을 위반하는 및 기타 대한민국 관계법령 및 국제법에 위배되는 행위 등\r\n\r\n제 20 조 (계약 변경 및 해지)\r\n① 회원이 이용계약을 해지하고자 하는 때에는 사이트 상 본원이 정한 별도의 이용방법에 따라 해지를 하여야 합니다.\r\n② 회원이 제 19조 사항을 위반하였을 경우 본원은 사전 통보 없이 즉시 이용관계를 해지하거나 회원의 서비스 이용을 중지 시킬 수 있습니다.\r\n③ 본원은 1년 동안 서비스를 사용하지 않은 회원에 대하여 서비스에 대한 사용여부를 묻고 이에 대한 답변이 없을 경우 본원은 이용계약을 해지 할 수 있습니다.\r\n④ 제 2항 과 3항에 조치에 대하여 이의가 있을 경우 회원은 본원이 정한 이용방법에 따라 이의 신청을 할 수 있습니다. 또한 이의신청이 타당하다고 판단 될 시 본원은 즉시 회원의 서비스 이용을 재개 합니다.\r\n\r\n제 21 조 (서비스 이용제한)\r\n① 본원은 회원이 서비스 이용내용에 있어서 본 약관 제 19조 7항의 내용을 위반하거나, 다음 각 호에 해당하는 경우 서비스 이용을 제한할 수 있습니다.\r\n1. 미풍양속을 저해하는 비속한 ID 및 넥네임 사용\r\n2. 타 이용자에게 심한 모욕을 주거나, 서비스 이용을 방해한 경우\r\n3. 저작권이 있는 자료의 글을 무단 게시한 경우\r\n4. 정보통신 윤리위원회 등 관련 공공기관의 시정 요구가 있는 경우\r\n5. 불법 사이트를 홍보 광고한 경우\r\n6. 타인의 허락 없이 사진, 게시물, 개인정보를 유포하는 경우\r\n7. 정보통신윤리위원회의 심의 세칙 제 7조에 어긋나는 음란물을 게재한 경우\r\n8. 반국가적 행위의 수행을 목적으로 하는 내용을 포함한 경우\r\n9. 사이트 운영에 심각한 영향을 끼치는 경우\r\n② 상기 이용제한 규정에 따라 서비스를 이용하는 회원에게 서비스 이용에 대하여 별도 공지 없이 서비스 이용의 일시 정지, 초기화, 이용계약 해지 등을 불량이용자 처리규정에 따라 취할 수 있습니다.\r\n\r\n제 22 조 (손해배상)\r\n① 본 약관을 위반하여 본원에 손해가 발생 되었을 때에는 회원은 본원에 발생한 모든 손해를 배상하여야 합니다.\r\n② 본원은 서비스에서 제공하는 서비스의 이용과 관련하여 개인정보 취급방침에서 정하는 내용에 해당하지 않는 사항에 대하여는 어떠한 손해도 책임을 지지 않습니다.\r\n③ 본원은 회원이 오라클피부과의원 서비스를 이용함으로써 직/간접적으로 행하는 모든 피해와 법적 책임에 대하여 어떠한 손해도 책임 지지 않습니다.\r\n\r\n제 23 조 (면책조항)\r\n① 본원은 천재지변, 전쟁 및 기타 이에 준하는 불가항력으로 인하여 서비스를 제공할 수 없는 경우에는 서비스 제공에 대한 책임이 면제됩니다.\r\n② 본원은 기간통신 사업자가 전기통신 서비스를 중지하거나 정상적으로 제공하지 아니하여 손해가 발생한 경우 책임이 면제됩니다.\r\n③ 본원은 서비스용 설비의 보수, 교체, 정기점검, 공사 등 부득이한 사유로 발생한 손해에 대하여 책임을 지지 않습니다.\r\n④ 본원은 회원의 귀책사유로 인한 서비스 이용의 장애 또는 손해에 대하여 책임을 지지 않습니다.\r\n⑤ 본원은 이용자의 컴퓨터 오류에 의해 손해가 발생한 경우, 또는 회원이 신상정보 및 전자우편 주소를 부실하게 기재하여 손해가 발생한 경우 책임을 지지 않습니다.\r\n⑥ 본원은 회원이 서비스를 이용하여 기대하는 수익을 얻지 못하거나 상실한 것에 대하여 책임을 지지 않습니다.\r\n⑦ 본원은 회원이 서비스를 이용하면서 얻은 자료로 인한 손해에 대하여 책임을 지지 않습니다. 또한 본원은 회원이 서비스를 이용하며 타 회원으로 인해 입게 되는 정신적 피해에 대하여 보상할 책임을 지지 않습니다.\r\n⑧ 본원은 회원이 서비스에 게재한 각종 정보, 자료, 사실의 신뢰도, 정확성 등 내용에 대하여 책임을 지지 않습니다.\r\n⑨ 본원은 이용자 상호간 및 이용자와 제 3자 상호 간에 서비스를 매개로 발생한 분쟁에 대해 개입할 의무가 없으며, 이로 인한 손해를 배상할 책임도 없습니다.\r\n⑩ 본원에서 회원에게 무료로 제공하는 서비스의 이용과 관련해서는 어떠한 손해도 책임을 지지 않습니다.\r\n⑪ 본원은 회원의 게시판 사용으로 발생하는 어떠한 손해에도 책임을 지지 않으며 모든 책임은 게시물을 작성한 본인에게 있습니다.\r\n⑫ 본원은 대한민국 법에서 정한 규율을 존중하며 정보통신법과 청소년보호법을 비롯한 모든 법률을 위반하는 게시물을 올리는 것을 절대 허용하지 않으며 이에 관하여 본원은 일체의 책임을 지지 않습니다.\r\n⑬ 본원은 회원이 서비스를 이용함으로써 회원 본인 또는 제3자에게 직/간접적으로 영향을 미치게 되는 모든 피해와 법적 문제에 대하여 책임을 지지 않습니다.\r\n\r\n제 24 조 (재판권 및 준거법)\r\n① 이 약관에 명시되지 않은 사항은 전기통신사업법 등 관계법령과 상관습에 따릅니다.\r\n② 본원과 회원 간에 분쟁이 발생한 경우 이를 원만히 해결하기 위하여서 본원과 회원은 긴밀히 협의하여야 합니다.\r\n③ 서비스 이용으로 발생한 분쟁에 대해 소송이 제기되는 경우 본원의 본사 소재지를 관할하는 법원을 관할 법원으로 합니다.\r\n\r\n제 25 조 (금지행위 및 저작권 보호 등)\r\n① 본 사이트의 모든 컨텐츠 및 텍스트 내용은 저작자와 저작자 단체에서 기획을 하여 제작을 한 디지털저작물로 지적재산권으로 보호되며, 허가 없이 무단 복제 및 배포,전송 등을 상업적으로 사용하는 경우 지적재산권 및 저작권 침해로 간주하며, 민형사 소송 및 가처분 등의 처분을 받을 수 있습니다.\r\n② 누구든지 정당한 권한 없이 콘텐츠제작자가 상당한 노력으로 제작하여 대통령령으로 정하는 방법에 따라 콘텐츠 또는 그 포장에 제작연월일, 제작자명 및 이 법에 따라 보호받는다는 사실을 표시한 콘텐츠의 전부 또는 상당한 부분을 복제ㆍ배포ㆍ방송 또는 전송함으로써 콘텐츠제작자의 영업에 관한 이익을 침해하여서는 아니 된다.\r\n\r\n\r\n부 칙(시행일)\r\n1. 본 약관 변경공고일자 2011년 3월 2일\r\n2. 본 약관 시행일자 2011년 3월 9일부터 시행한다.\r\n3. 본 약관 변경공고일자 2011년 3월 6일\r\n4. 본 약관 시행일자 2011년 3월 13일부터 시행한다.\r\n5. 본 약관 변경공고일자 2011년 3월 8일</span>&nbsp;</p>','theme/basic','theme/basic',1,0,'',''),('provision2',1,'제 3자 위탁운영 및 정보제공 약관동의','<p><span style=\"font-family: NanumBarunGothic, &quot;Nanum Barun Gothic&quot;, 나눔바른고딕, &quot;Apple SD Gothic Neo&quot;, &quot;Malgun Gothic&quot;, sans-serif; white-space: pre-line; background-color: rgb(255, 255, 255);\">[오라클피부과의원 제 3자 위탁운영 및 정보제공 약관동의]\r\n■ 제3자 정보제공 사유\r\n오라클피부과의원(이하 \"본원\")의 웹사이트 및 DB는 (주)메이드인리얼(이하 \"위탁업체\")에 위임하여 위탁관리 되고 있습니다.\r\n그외 연동하여 정보를 제공하는 회사(제공받는 서비스에 따라 상이함) :\r\n문자/메세징 : 슈어엠, 알리고, 아이코드, 카페24(심플렉스인터넷), 채널코퍼레이션(채팅위젯)\r\n상담/지식인 : 닥프렌즈, NHN[네이버]\r\n광고정보/업무 : NHN[네이버], 구글(Google), 카카오\r\n예약상담/운영정보 : 전능아이티(EMR), 케어랩스(EMR)\r\n\r\n위탁업체의 책임아래 본원의 데이타는 위탁업체의 서버에 저장됩니다.\r\n또한, 상담시 답변을 원활히 하기 위하여, 고객님의 요청시 SMS발송을 위하여 고객님의 정보를 SMS발송업체에 전송할 수 있습니다. 정보의 저장기간 및 활용기간은 각 회사정책에 따라 상이합니다.\r\n저장되는 정보는 정보제공 목적의 정보로 활용될 수 있으며 그 범위는 아래와 같습니다.\r\n\r\n1. 회사/본원의 이벤트,공지사항 알림, 예약정보 서비스 활용.\r\n2. 회사/본원의 메세지발송, 답변알림. 수신거부 상태 확인 등.\r\n3. 회사/본원의 정책변경, 긴급상황시 비상연락망.\r\n4. 회사/본원의 고객분포 및 성향 등의 마케팅정보 활용.\r\n5. 자사 믿고닥(meetgodoc) 및 계열 서비스 연동 및 정보안내 마케팅정보 활용 일체.\r\n\r\n위탁업체의 전화번호는 아래와 같습니다.\r\n업체명 : 주식회사 메이드인리얼 (MADEINREAL CO.,LTD).\r\n\r\n사업자번호 : 142-81-01694\r\n전화번호 : 02-1666-5898 / 시즌 ARS OFF시 ( 채팅상담 <a href=\"http://tt.16665898.com\">http://tt.16665898.com</a> )\r\n담당자 : 신범진 이사</span>&nbsp;</p>','제-3자-위탁운영-및-정보제공-약관동의','<p><span style=\"font-family: NanumBarunGothic, &quot;Nanum Barun Gothic&quot;, 나눔바른고딕, &quot;Apple SD Gothic Neo&quot;, &quot;Malgun Gothic&quot;, sans-serif; white-space: pre-line; background-color: rgb(255, 255, 255);\">[오라클피부과의원 제 3자 위탁운영 및 정보제공 약관동의]\r\n■ 제3자 정보제공 사유\r\n오라클피부과의원(이하 \"본원\")의 웹사이트 및 DB는 (주)메이드인리얼(이하 \"위탁업체\")에 위임하여 위탁관리 되고 있습니다.\r\n그외 연동하여 정보를 제공하는 회사(제공받는 서비스에 따라 상이함) :\r\n문자/메세징 : 슈어엠, 알리고, 아이코드, 카페24(심플렉스인터넷), 채널코퍼레이션(채팅위젯)\r\n상담/지식인 : 닥프렌즈, NHN[네이버]\r\n광고정보/업무 : NHN[네이버], 구글(Google), 카카오\r\n예약상담/운영정보 : 전능아이티(EMR), 케어랩스(EMR)\r\n\r\n위탁업체의 책임아래 본원의 데이타는 위탁업체의 서버에 저장됩니다.\r\n또한, 상담시 답변을 원활히 하기 위하여, 고객님의 요청시 SMS발송을 위하여 고객님의 정보를 SMS발송업체에 전송할 수 있습니다. 정보의 저장기간 및 활용기간은 각 회사정책에 따라 상이합니다.\r\n저장되는 정보는 정보제공 목적의 정보로 활용될 수 있으며 그 범위는 아래와 같습니다.\r\n\r\n1. 회사/본원의 이벤트,공지사항 알림, 예약정보 서비스 활용.\r\n2. 회사/본원의 메세지발송, 답변알림. 수신거부 상태 확인 등.\r\n3. 회사/본원의 정책변경, 긴급상황시 비상연락망.\r\n4. 회사/본원의 고객분포 및 성향 등의 마케팅정보 활용.\r\n5. 자사 믿고닥(meetgodoc) 및 계열 서비스 연동 및 정보안내 마케팅정보 활용 일체.\r\n\r\n위탁업체의 전화번호는 아래와 같습니다.\r\n업체명 : 주식회사 메이드인리얼 (MADEINREAL CO.,LTD).\r\n\r\n사업자번호 : 142-81-01694\r\n전화번호 : 02-1666-5898 / 시즌 ARS OFF시 ( 채팅상담 <a href=\"http://tt.16665898.com\">http://tt.16665898.com</a> )\r\n담당자 : 신범진 이사</span>&nbsp;</p>','theme/basic','theme/basic',1,0,'',''),('provision3',1,'이메일주소 무단수집거부','<p><span style=\"font-family: NanumBarunGothic, &quot;Nanum Barun Gothic&quot;, 나눔바른고딕, &quot;Apple SD Gothic Neo&quot;, &quot;Malgun Gothic&quot;, sans-serif; white-space: pre-line; background-color: rgb(255, 255, 255);\">[오라클피부과의원 이메일주소 무단수집거부]\r\n■ 무단데이타 수집 거부 안내 조항\r\n오라클피부과의원(이하 “본원”)는 개인의 신상 및 공인들의 자료가 포함되 있으므로 무단 유출을 엄격히 규제합니다.\r\n본원의 컨텐츠 및 게시물 그 어떠한 것이라도 본원 내 자원을 활용하여 제작하므로 무단 사용은 곧 본원의 지적/물적 자원을 훼손, 강탈하는 행위입니다.\r\n\r\n■ 제한사항\r\n본원의 이미지 게시물, 게시글, 댓글(코멘트) 및 작은 요소들 하나까지도 유상 및 무상으로 본원이 라이센스를 취득후 사용하는 것이므로 무단 사용을 엄격히 금하며 무단사용시 민·형사상의 책임 및 손해배상을 청구할 수 있으니 유의바랍니다.\r\n\r\n■ 제한외 사항\r\n본원이 공식적으로 배포한 기사 및 공지사항, 이벤트. 후기 등에 대하여 배포하는 것은 제외합니다.\r\n단, 후기는 경우에 따라 보건법에 따라 게재 중지 및 가처분 등의 처리가 될 수 있으니 유의바랍니다.\r\n\r\n시행일) 2013년 3월 1일</span>&nbsp;</p>','이메일주소-무단수집거부','<p><span style=\"font-family: NanumBarunGothic, &quot;Nanum Barun Gothic&quot;, 나눔바른고딕, &quot;Apple SD Gothic Neo&quot;, &quot;Malgun Gothic&quot;, sans-serif; white-space: pre-line; background-color: rgb(255, 255, 255);\">[오라클피부과의원 이메일주소 무단수집거부]\r\n■ 무단데이타 수집 거부 안내 조항\r\n오라클피부과의원(이하 “본원”)는 개인의 신상 및 공인들의 자료가 포함되 있으므로 무단 유출을 엄격히 규제합니다.\r\n본원의 컨텐츠 및 게시물 그 어떠한 것이라도 본원 내 자원을 활용하여 제작하므로 무단 사용은 곧 본원의 지적/물적 자원을 훼손, 강탈하는 행위입니다.\r\n\r\n■ 제한사항\r\n본원의 이미지 게시물, 게시글, 댓글(코멘트) 및 작은 요소들 하나까지도 유상 및 무상으로 본원이 라이센스를 취득후 사용하는 것이므로 무단 사용을 엄격히 금하며 무단사용시 민·형사상의 책임 및 손해배상을 청구할 수 있으니 유의바랍니다.\r\n\r\n■ 제한외 사항\r\n본원이 공식적으로 배포한 기사 및 공지사항, 이벤트. 후기 등에 대하여 배포하는 것은 제외합니다.\r\n단, 후기는 경우에 따라 보건법에 따라 게재 중지 및 가처분 등의 처리가 될 수 있으니 유의바랍니다.\r\n\r\n시행일) 2013년 3월 1일</span>&nbsp;</p>','theme/basic','theme/basic',1,0,'','');
/*!40000 ALTER TABLE `g5_content` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `g5_faq`
--

DROP TABLE IF EXISTS `g5_faq`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `g5_faq` (
  `fa_id` int(11) NOT NULL AUTO_INCREMENT,
  `fm_id` int(11) NOT NULL DEFAULT '0',
  `fa_subject` text NOT NULL,
  `fa_content` text NOT NULL,
  `fa_order` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`fa_id`),
  KEY `fm_id` (`fm_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `g5_faq`
--

LOCK TABLES `g5_faq` WRITE;
/*!40000 ALTER TABLE `g5_faq` DISABLE KEYS */;
/*!40000 ALTER TABLE `g5_faq` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `g5_faq_master`
--

DROP TABLE IF EXISTS `g5_faq_master`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `g5_faq_master` (
  `fm_id` int(11) NOT NULL AUTO_INCREMENT,
  `fm_subject` varchar(255) NOT NULL DEFAULT '',
  `fm_head_html` text NOT NULL,
  `fm_tail_html` text NOT NULL,
  `fm_mobile_head_html` text NOT NULL,
  `fm_mobile_tail_html` text NOT NULL,
  `fm_order` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`fm_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `g5_faq_master`
--

LOCK TABLES `g5_faq_master` WRITE;
/*!40000 ALTER TABLE `g5_faq_master` DISABLE KEYS */;
INSERT INTO `g5_faq_master` VALUES (1,'자주하시는 질문','','','','',0);
/*!40000 ALTER TABLE `g5_faq_master` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `g5_group`
--

DROP TABLE IF EXISTS `g5_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `g5_group` (
  `gr_id` varchar(10) NOT NULL DEFAULT '',
  `gr_subject` varchar(255) NOT NULL DEFAULT '',
  `gr_device` enum('both','pc','mobile') NOT NULL DEFAULT 'both',
  `gr_admin` varchar(255) NOT NULL DEFAULT '',
  `gr_use_access` tinyint(4) NOT NULL DEFAULT '0',
  `gr_order` int(11) NOT NULL DEFAULT '0',
  `gr_1_subj` varchar(255) NOT NULL DEFAULT '',
  `gr_2_subj` varchar(255) NOT NULL DEFAULT '',
  `gr_3_subj` varchar(255) NOT NULL DEFAULT '',
  `gr_4_subj` varchar(255) NOT NULL DEFAULT '',
  `gr_5_subj` varchar(255) NOT NULL DEFAULT '',
  `gr_6_subj` varchar(255) NOT NULL DEFAULT '',
  `gr_7_subj` varchar(255) NOT NULL DEFAULT '',
  `gr_8_subj` varchar(255) NOT NULL DEFAULT '',
  `gr_9_subj` varchar(255) NOT NULL DEFAULT '',
  `gr_10_subj` varchar(255) NOT NULL DEFAULT '',
  `gr_1` varchar(255) NOT NULL DEFAULT '',
  `gr_2` varchar(255) NOT NULL DEFAULT '',
  `gr_3` varchar(255) NOT NULL DEFAULT '',
  `gr_4` varchar(255) NOT NULL DEFAULT '',
  `gr_5` varchar(255) NOT NULL DEFAULT '',
  `gr_6` varchar(255) NOT NULL DEFAULT '',
  `gr_7` varchar(255) NOT NULL DEFAULT '',
  `gr_8` varchar(255) NOT NULL DEFAULT '',
  `gr_9` varchar(255) NOT NULL DEFAULT '',
  `gr_10` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`gr_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `g5_group`
--

LOCK TABLES `g5_group` WRITE;
/*!40000 ALTER TABLE `g5_group` DISABLE KEYS */;
INSERT INTO `g5_group` VALUES ('community','커뮤니티','both','',0,0,'','','','','','','','','','','','','','','','','','','','');
/*!40000 ALTER TABLE `g5_group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `g5_group_member`
--

DROP TABLE IF EXISTS `g5_group_member`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `g5_group_member` (
  `gm_id` int(11) NOT NULL AUTO_INCREMENT,
  `gr_id` varchar(255) NOT NULL DEFAULT '',
  `mb_id` varchar(20) NOT NULL DEFAULT '',
  `gm_datetime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`gm_id`),
  KEY `gr_id` (`gr_id`),
  KEY `mb_id` (`mb_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `g5_group_member`
--

LOCK TABLES `g5_group_member` WRITE;
/*!40000 ALTER TABLE `g5_group_member` DISABLE KEYS */;
/*!40000 ALTER TABLE `g5_group_member` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `g5_login`
--

DROP TABLE IF EXISTS `g5_login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `g5_login` (
  `lo_ip` varchar(100) NOT NULL DEFAULT '',
  `mb_id` varchar(20) NOT NULL DEFAULT '',
  `lo_datetime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `lo_location` text NOT NULL,
  `lo_url` text NOT NULL,
  PRIMARY KEY (`lo_ip`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `g5_login`
--

LOCK TABLES `g5_login` WRITE;
/*!40000 ALTER TABLE `g5_login` DISABLE KEYS */;
INSERT INTO `g5_login` VALUES ('123.142.173.52','admin','2022-10-04 21:37:16','접속자집계',''),('203.226.253.198','','2022-10-04 12:03:07','로그인','/bbs/login.php');
/*!40000 ALTER TABLE `g5_login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `g5_mail`
--

DROP TABLE IF EXISTS `g5_mail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `g5_mail` (
  `ma_id` int(11) NOT NULL AUTO_INCREMENT,
  `ma_subject` varchar(255) NOT NULL DEFAULT '',
  `ma_content` mediumtext NOT NULL,
  `ma_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ma_ip` varchar(255) NOT NULL DEFAULT '',
  `ma_last_option` text NOT NULL,
  PRIMARY KEY (`ma_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `g5_mail`
--

LOCK TABLES `g5_mail` WRITE;
/*!40000 ALTER TABLE `g5_mail` DISABLE KEYS */;
/*!40000 ALTER TABLE `g5_mail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `g5_member`
--

DROP TABLE IF EXISTS `g5_member`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `g5_member` (
  `mb_no` int(11) NOT NULL AUTO_INCREMENT,
  `mb_id` varchar(20) NOT NULL DEFAULT '',
  `mb_password` varchar(255) NOT NULL DEFAULT '',
  `mb_name` varchar(255) NOT NULL DEFAULT '',
  `mb_nick` varchar(255) NOT NULL DEFAULT '',
  `mb_nick_date` date NOT NULL DEFAULT '0000-00-00',
  `mb_email` varchar(255) NOT NULL DEFAULT '',
  `mb_homepage` varchar(255) NOT NULL DEFAULT '',
  `mb_level` tinyint(4) NOT NULL DEFAULT '0',
  `mb_sex` char(1) NOT NULL DEFAULT '',
  `mb_birth` varchar(255) NOT NULL DEFAULT '',
  `mb_tel` varchar(255) NOT NULL DEFAULT '',
  `mb_hp` varchar(255) NOT NULL DEFAULT '',
  `mb_certify` varchar(20) NOT NULL DEFAULT '',
  `mb_adult` tinyint(4) NOT NULL DEFAULT '0',
  `mb_dupinfo` varchar(255) NOT NULL DEFAULT '',
  `mb_zip1` char(3) NOT NULL DEFAULT '',
  `mb_zip2` char(3) NOT NULL DEFAULT '',
  `mb_addr1` varchar(255) NOT NULL DEFAULT '',
  `mb_addr2` varchar(255) NOT NULL DEFAULT '',
  `mb_addr3` varchar(255) NOT NULL DEFAULT '',
  `mb_addr_jibeon` varchar(255) NOT NULL DEFAULT '',
  `mb_signature` text NOT NULL,
  `mb_recommend` varchar(255) NOT NULL DEFAULT '',
  `mb_point` int(11) NOT NULL DEFAULT '0',
  `mb_today_login` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `mb_login_ip` varchar(255) NOT NULL DEFAULT '',
  `mb_datetime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `mb_ip` varchar(255) NOT NULL DEFAULT '',
  `mb_leave_date` varchar(8) NOT NULL DEFAULT '',
  `mb_intercept_date` varchar(8) NOT NULL DEFAULT '',
  `mb_email_certify` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `mb_email_certify2` varchar(255) NOT NULL DEFAULT '',
  `mb_memo` text NOT NULL,
  `mb_lost_certify` varchar(255) NOT NULL,
  `mb_mailling` tinyint(4) NOT NULL DEFAULT '0',
  `mb_sms` tinyint(4) NOT NULL DEFAULT '0',
  `mb_open` tinyint(4) NOT NULL DEFAULT '0',
  `mb_open_date` date NOT NULL DEFAULT '0000-00-00',
  `mb_profile` text NOT NULL,
  `mb_memo_call` varchar(255) NOT NULL DEFAULT '',
  `mb_memo_cnt` int(11) NOT NULL DEFAULT '0',
  `mb_scrap_cnt` int(11) NOT NULL DEFAULT '0',
  `mb_1` varchar(255) NOT NULL DEFAULT '',
  `mb_2` varchar(255) NOT NULL DEFAULT '',
  `mb_3` varchar(255) NOT NULL DEFAULT '',
  `mb_4` varchar(255) NOT NULL DEFAULT '',
  `mb_5` varchar(255) NOT NULL DEFAULT '',
  `mb_6` varchar(255) NOT NULL DEFAULT '',
  `mb_7` varchar(255) NOT NULL DEFAULT '',
  `mb_8` varchar(255) NOT NULL DEFAULT '',
  `mb_9` varchar(255) NOT NULL DEFAULT '',
  `mb_10` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`mb_no`),
  UNIQUE KEY `mb_id` (`mb_id`),
  KEY `mb_today_login` (`mb_today_login`),
  KEY `mb_datetime` (`mb_datetime`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `g5_member`
--

LOCK TABLES `g5_member` WRITE;
/*!40000 ALTER TABLE `g5_member` DISABLE KEYS */;
INSERT INTO `g5_member` VALUES (1,'admin','sha256:12000:vZZ+YMR3ejbbCqZg4wiIpVB8p43yeJNe:q5fkp1w0I68PHdPMLD5vSBjMZ+bp9EOS','최고관리자','최고관리자','2022-09-29','admin@domain.com','',10,'','','','','',0,'','','','','','','','','',400,'2022-10-04 10:06:39','123.142.173.52','2022-09-29 18:44:07','123.142.173.52','','','2022-09-29 18:44:07','','','',1,0,1,'0000-00-00','','',0,0,'','','','','','','','','',''),(2,'kkoo2324','sha256:12000:stoB2kTpDxh4mJp+MXddK0HdzY+f//EY:vzuj4wrg0GDGQ/Omrqmd/s929cWEtkq8','김하늘','kkoo2324','2022-09-30','kkoo2324@gmail.com','',2,'','','','','',0,'','','','','','','','','',1000,'2022-09-30 18:16:40','123.142.173.52','2022-09-30 18:16:40','123.142.173.52','','','2022-09-30 18:16:40','','','',0,0,0,'2022-09-30','','',0,0,'','','','','','','','','',''),(3,'kbkhjop','sha256:12000:oDc2aq1biMc8Vk0gNfCXKEvaXjlYGSTN:ujOuqyD6VWOInGlFwD5KXnpNls8t/n4a','김하','김한','2022-09-30','kkoo2324@nate.com','',2,'','','','','',0,'','','','','','','','','',1000,'2022-09-30 18:56:28','123.142.173.52','2022-09-30 18:56:28','123.142.173.52','','','2022-09-30 18:56:28','','','',0,0,0,'2022-09-30','','',0,0,'','','','','','','','','','');
/*!40000 ALTER TABLE `g5_member` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `g5_member_cert_history`
--

DROP TABLE IF EXISTS `g5_member_cert_history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `g5_member_cert_history` (
  `ch_id` int(11) NOT NULL AUTO_INCREMENT,
  `mb_id` varchar(20) NOT NULL DEFAULT '',
  `ch_name` varchar(255) NOT NULL DEFAULT '',
  `ch_hp` varchar(255) NOT NULL DEFAULT '',
  `ch_birth` varchar(255) NOT NULL DEFAULT '',
  `ch_type` varchar(20) NOT NULL DEFAULT '',
  `ch_datetime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`ch_id`),
  KEY `mb_id` (`mb_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `g5_member_cert_history`
--

LOCK TABLES `g5_member_cert_history` WRITE;
/*!40000 ALTER TABLE `g5_member_cert_history` DISABLE KEYS */;
/*!40000 ALTER TABLE `g5_member_cert_history` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `g5_member_social_profiles`
--

DROP TABLE IF EXISTS `g5_member_social_profiles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `g5_member_social_profiles` (
  `mp_no` int(11) NOT NULL AUTO_INCREMENT,
  `mb_id` varchar(255) NOT NULL DEFAULT '',
  `provider` varchar(50) NOT NULL DEFAULT '',
  `object_sha` varchar(45) NOT NULL DEFAULT '',
  `identifier` varchar(255) NOT NULL DEFAULT '',
  `profileurl` varchar(255) NOT NULL DEFAULT '',
  `photourl` varchar(255) NOT NULL DEFAULT '',
  `displayname` varchar(150) NOT NULL DEFAULT '',
  `description` varchar(255) NOT NULL DEFAULT '',
  `mp_register_day` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `mp_latest_day` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  UNIQUE KEY `mp_no` (`mp_no`),
  KEY `mb_id` (`mb_id`),
  KEY `provider` (`provider`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `g5_member_social_profiles`
--

LOCK TABLES `g5_member_social_profiles` WRITE;
/*!40000 ALTER TABLE `g5_member_social_profiles` DISABLE KEYS */;
/*!40000 ALTER TABLE `g5_member_social_profiles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `g5_memo`
--

DROP TABLE IF EXISTS `g5_memo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `g5_memo` (
  `me_id` int(11) NOT NULL AUTO_INCREMENT,
  `me_recv_mb_id` varchar(20) NOT NULL DEFAULT '',
  `me_send_mb_id` varchar(20) NOT NULL DEFAULT '',
  `me_send_datetime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `me_read_datetime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `me_memo` text NOT NULL,
  `me_send_id` int(11) NOT NULL DEFAULT '0',
  `me_type` enum('send','recv') NOT NULL DEFAULT 'recv',
  `me_send_ip` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`me_id`),
  KEY `me_recv_mb_id` (`me_recv_mb_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `g5_memo`
--

LOCK TABLES `g5_memo` WRITE;
/*!40000 ALTER TABLE `g5_memo` DISABLE KEYS */;
/*!40000 ALTER TABLE `g5_memo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `g5_menu`
--

DROP TABLE IF EXISTS `g5_menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `g5_menu` (
  `me_id` int(11) NOT NULL AUTO_INCREMENT,
  `me_code` varchar(255) NOT NULL DEFAULT '',
  `me_name` varchar(255) NOT NULL DEFAULT '',
  `me_link` varchar(255) NOT NULL DEFAULT '',
  `me_target` varchar(255) NOT NULL DEFAULT '',
  `me_order` int(11) NOT NULL DEFAULT '0',
  `me_use` tinyint(4) NOT NULL DEFAULT '0',
  `me_mobile_use` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`me_id`)
) ENGINE=InnoDB AUTO_INCREMENT=193 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `g5_menu`
--

LOCK TABLES `g5_menu` WRITE;
/*!40000 ALTER TABLE `g5_menu` DISABLE KEYS */;
INSERT INTO `g5_menu` VALUES (145,'10','오라클소개','/theme/oracle/sub/sub1_1.php','self',0,0,1),(146,'1010','오라클 특별함','/theme/oracle/sub/sub1_1.php','self',0,0,1),(147,'1020','피부과전문의','/theme/oracle/sub/sub1_2.php','self',0,0,1),(148,'1030','지점소개','/theme/oracle/sub/sub1_3.php','self',0,0,1),(149,'1040','장비소개','/theme/oracle/sub/sub1_4.php','self',0,0,1),(150,'20','미용진료','/theme/oracle/sub/sub2_1.php','self',0,0,1),(151,'2010','여드름','/theme/oracle/sub/sub2_1.php','self',0,1,1),(152,'2020','미백·홍조','/theme/oracle/sub/sub2_2.php','self',0,1,1),(153,'2030','안티에이징','/theme/oracle/sub/sub2_3.php','self',0,1,1),(154,'2040','미용성형','/theme/oracle/sub/sub2_4.php','self',0,1,1),(155,'2050','제모·탈모','/theme/oracle/sub/sub2_5.php','self',0,1,1),(156,'2060','흉터','/theme/oracle/sub/sub2_6.php','self',0,1,1),(157,'2070','문신제거','/theme/oracle/sub/sub2_7.php','self',0,1,1),(158,'2080','기타치료','/theme/oracle/sub/sub2_8.php','self',0,1,1),(159,'2090','여성진료','/theme/oracle/sub/sub2_9.php','self',0,1,1),(160,'30','피부질환','/theme/oracle/sub/sub3_1.php','self',0,0,1),(161,'3010','백반증','/theme/oracle/sub/sub3_1.php','self',0,1,1),(162,'3020','건선','/theme/oracle/sub/sub3_2.php','self',0,1,1),(163,'3030','아토피피부염','/theme/oracle/sub/sub3_3.php','self',0,1,1),(164,'3040','광선치료클리닉','/theme/oracle/sub/sub3_4.php','self',0,1,1),(165,'3050','사마귀·티눈','/theme/oracle/sub/sub3_5.php','self',0,1,1),(166,'3060','발톰무좀','/theme/oracle/sub/sub3_6.php','self',0,1,1),(167,'3070','원형탈모','/theme/oracle/sub/sub3_7.php','self',0,1,1),(168,'3080','알레르기·두드러기','/theme/oracle/sub/sub3_8.php','self',0,1,1),(169,'40','피부기능의학','/theme/oracle/sub/sub4_1.php','self',0,0,1),(170,'4010','피부기능의학적검사','/theme/oracle/sub/sub4_1.php','self',0,1,1),(171,'4020','디톡스/항노화 치료','/theme/oracle/sub/sub4_2.php','self',0,1,1),(172,'50','피부외과','/theme/oracle/sub/sub5_1.php','self',0,0,1),(173,'5010','피부양성종양','/theme/oracle/sub/sub5_1.php','self',0,1,1),(174,'5020','튀어나온점·큰점·재발점','/theme/oracle/sub/sub5_2.php','self',0,1,1),(175,'5030','켈로이드수술·흉터교정수술','/theme/oracle/sub/sub5_3.php','self',0,1,1),(176,'5040','상처치료·화상치료','/theme/oracle/sub/sub5_4.php','self',0,1,1),(177,'5050','내성발톱·집게발톱 교정','/theme/oracle/sub/sub5_5.php','self',0,1,1),(178,'60','비만체형','/theme/oracle/sub/sub6_1.php','self',0,0,1),(179,'6010','지방흡입','/theme/oracle/sub/sub6_1.php','self',0,1,1),(180,'6020','한컵주사','/theme/oracle/sub/sub6_2.php','self',0,1,1),(181,'6030','스컬프슈어','/theme/oracle/sub/sub6_3.php','self',0,1,1),(182,'6040','호르몬다이어트','/theme/oracle/sub/sub6_4.php','self',0,1,1),(183,'70','오라클맨즈','/theme/oracle/sub/sub7_1.php','self',0,0,1),(184,'7010','남성피부관리','/theme/oracle/sub/sub7_1.php','self',0,1,1),(185,'7020','남성수염제모','/theme/oracle/sub/sub7_2.php','self',0,1,1),(186,'7030','남성여유증','/theme/oracle/sub/sub7_3.php','self',0,1,1),(187,'7040','사각턱보톡스','/theme/oracle/sub/sub7_4.php','self',0,1,1),(188,'7050','이미지필러','/theme/oracle/sub/sub7_5.php','self',0,1,1),(189,'80','커뮤니티','/bbs/board.php?bo_table=online','self',0,0,1),(190,'8010','온라인상담','/bbs/board.php?bo_table=online','self',0,0,1),(191,'8020','전후사진','/theme/oracle/sub/sub8_2.php','self',0,0,1),(192,'8030','손글씨후기','/theme/oracle/sub/sub8_3.php','self',0,0,1);
/*!40000 ALTER TABLE `g5_menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `g5_new_win`
--

DROP TABLE IF EXISTS `g5_new_win`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `g5_new_win` (
  `nw_id` int(11) NOT NULL AUTO_INCREMENT,
  `nw_division` varchar(10) NOT NULL DEFAULT 'both',
  `nw_device` varchar(10) NOT NULL DEFAULT 'both',
  `nw_begin_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `nw_end_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `nw_disable_hours` int(11) NOT NULL DEFAULT '0',
  `nw_left` int(11) NOT NULL DEFAULT '0',
  `nw_top` int(11) NOT NULL DEFAULT '0',
  `nw_height` int(11) NOT NULL DEFAULT '0',
  `nw_width` int(11) NOT NULL DEFAULT '0',
  `nw_subject` text NOT NULL,
  `nw_content` text NOT NULL,
  `nw_content_html` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`nw_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `g5_new_win`
--

LOCK TABLES `g5_new_win` WRITE;
/*!40000 ALTER TABLE `g5_new_win` DISABLE KEYS */;
/*!40000 ALTER TABLE `g5_new_win` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `g5_point`
--

DROP TABLE IF EXISTS `g5_point`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `g5_point` (
  `po_id` int(11) NOT NULL AUTO_INCREMENT,
  `mb_id` varchar(20) NOT NULL DEFAULT '',
  `po_datetime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `po_content` varchar(255) NOT NULL DEFAULT '',
  `po_point` int(11) NOT NULL DEFAULT '0',
  `po_use_point` int(11) NOT NULL DEFAULT '0',
  `po_expired` tinyint(4) NOT NULL DEFAULT '0',
  `po_expire_date` date NOT NULL DEFAULT '0000-00-00',
  `po_mb_point` int(11) NOT NULL DEFAULT '0',
  `po_rel_table` varchar(20) NOT NULL DEFAULT '',
  `po_rel_id` varchar(20) NOT NULL DEFAULT '',
  `po_rel_action` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`po_id`),
  KEY `index1` (`mb_id`,`po_rel_table`,`po_rel_id`,`po_rel_action`),
  KEY `index2` (`po_expire_date`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `g5_point`
--

LOCK TABLES `g5_point` WRITE;
/*!40000 ALTER TABLE `g5_point` DISABLE KEYS */;
INSERT INTO `g5_point` VALUES (1,'admin','2022-09-29 18:44:36','2022-09-29 첫로그인',100,0,0,'9999-12-31',100,'@login','admin','2022-09-29'),(2,'admin','2022-09-30 10:41:27','2022-09-30 첫로그인',100,0,0,'9999-12-31',200,'@login','admin','2022-09-30'),(3,'kkoo2324','2022-09-30 18:16:40','회원가입 축하',1000,0,0,'9999-12-31',1000,'@member','kkoo2324','회원가입'),(4,'kbkhjop','2022-09-30 18:56:28','회원가입 축하',1000,0,0,'9999-12-31',1000,'@member','kbkhjop','회원가입'),(5,'admin','2022-10-03 19:53:52','2022-10-03 첫로그인',100,0,0,'9999-12-31',300,'@login','admin','2022-10-03'),(6,'admin','2022-10-04 10:06:39','2022-10-04 첫로그인',100,0,0,'9999-12-31',400,'@login','admin','2022-10-04');
/*!40000 ALTER TABLE `g5_point` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `g5_poll`
--

DROP TABLE IF EXISTS `g5_poll`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `g5_poll` (
  `po_id` int(11) NOT NULL AUTO_INCREMENT,
  `po_subject` varchar(255) NOT NULL DEFAULT '',
  `po_poll1` varchar(255) NOT NULL DEFAULT '',
  `po_poll2` varchar(255) NOT NULL DEFAULT '',
  `po_poll3` varchar(255) NOT NULL DEFAULT '',
  `po_poll4` varchar(255) NOT NULL DEFAULT '',
  `po_poll5` varchar(255) NOT NULL DEFAULT '',
  `po_poll6` varchar(255) NOT NULL DEFAULT '',
  `po_poll7` varchar(255) NOT NULL DEFAULT '',
  `po_poll8` varchar(255) NOT NULL DEFAULT '',
  `po_poll9` varchar(255) NOT NULL DEFAULT '',
  `po_cnt1` int(11) NOT NULL DEFAULT '0',
  `po_cnt2` int(11) NOT NULL DEFAULT '0',
  `po_cnt3` int(11) NOT NULL DEFAULT '0',
  `po_cnt4` int(11) NOT NULL DEFAULT '0',
  `po_cnt5` int(11) NOT NULL DEFAULT '0',
  `po_cnt6` int(11) NOT NULL DEFAULT '0',
  `po_cnt7` int(11) NOT NULL DEFAULT '0',
  `po_cnt8` int(11) NOT NULL DEFAULT '0',
  `po_cnt9` int(11) NOT NULL DEFAULT '0',
  `po_etc` varchar(255) NOT NULL DEFAULT '',
  `po_level` tinyint(4) NOT NULL DEFAULT '0',
  `po_point` int(11) NOT NULL DEFAULT '0',
  `po_date` date NOT NULL DEFAULT '0000-00-00',
  `po_ips` mediumtext NOT NULL,
  `mb_ids` text NOT NULL,
  PRIMARY KEY (`po_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `g5_poll`
--

LOCK TABLES `g5_poll` WRITE;
/*!40000 ALTER TABLE `g5_poll` DISABLE KEYS */;
/*!40000 ALTER TABLE `g5_poll` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `g5_poll_etc`
--

DROP TABLE IF EXISTS `g5_poll_etc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `g5_poll_etc` (
  `pc_id` int(11) NOT NULL DEFAULT '0',
  `po_id` int(11) NOT NULL DEFAULT '0',
  `mb_id` varchar(20) NOT NULL DEFAULT '',
  `pc_name` varchar(255) NOT NULL DEFAULT '',
  `pc_idea` varchar(255) NOT NULL DEFAULT '',
  `pc_datetime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`pc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `g5_poll_etc`
--

LOCK TABLES `g5_poll_etc` WRITE;
/*!40000 ALTER TABLE `g5_poll_etc` DISABLE KEYS */;
/*!40000 ALTER TABLE `g5_poll_etc` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `g5_popular`
--

DROP TABLE IF EXISTS `g5_popular`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `g5_popular` (
  `pp_id` int(11) NOT NULL AUTO_INCREMENT,
  `pp_word` varchar(50) NOT NULL DEFAULT '',
  `pp_date` date NOT NULL DEFAULT '0000-00-00',
  `pp_ip` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`pp_id`),
  UNIQUE KEY `index1` (`pp_date`,`pp_word`,`pp_ip`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `g5_popular`
--

LOCK TABLES `g5_popular` WRITE;
/*!40000 ALTER TABLE `g5_popular` DISABLE KEYS */;
/*!40000 ALTER TABLE `g5_popular` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `g5_qa_config`
--

DROP TABLE IF EXISTS `g5_qa_config`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `g5_qa_config` (
  `qa_title` varchar(255) NOT NULL DEFAULT '',
  `qa_category` varchar(255) NOT NULL DEFAULT '',
  `qa_skin` varchar(255) NOT NULL DEFAULT '',
  `qa_mobile_skin` varchar(255) NOT NULL DEFAULT '',
  `qa_use_email` tinyint(4) NOT NULL DEFAULT '0',
  `qa_req_email` tinyint(4) NOT NULL DEFAULT '0',
  `qa_use_hp` tinyint(4) NOT NULL DEFAULT '0',
  `qa_req_hp` tinyint(4) NOT NULL DEFAULT '0',
  `qa_use_sms` tinyint(4) NOT NULL DEFAULT '0',
  `qa_send_number` varchar(255) NOT NULL DEFAULT '0',
  `qa_admin_hp` varchar(255) NOT NULL DEFAULT '',
  `qa_admin_email` varchar(255) NOT NULL DEFAULT '',
  `qa_use_editor` tinyint(4) NOT NULL DEFAULT '0',
  `qa_subject_len` int(11) NOT NULL DEFAULT '0',
  `qa_mobile_subject_len` int(11) NOT NULL DEFAULT '0',
  `qa_page_rows` int(11) NOT NULL DEFAULT '0',
  `qa_mobile_page_rows` int(11) NOT NULL DEFAULT '0',
  `qa_image_width` int(11) NOT NULL DEFAULT '0',
  `qa_upload_size` int(11) NOT NULL DEFAULT '0',
  `qa_insert_content` text NOT NULL,
  `qa_include_head` varchar(255) NOT NULL DEFAULT '',
  `qa_include_tail` varchar(255) NOT NULL DEFAULT '',
  `qa_content_head` text NOT NULL,
  `qa_content_tail` text NOT NULL,
  `qa_mobile_content_head` text NOT NULL,
  `qa_mobile_content_tail` text NOT NULL,
  `qa_1_subj` varchar(255) NOT NULL DEFAULT '',
  `qa_2_subj` varchar(255) NOT NULL DEFAULT '',
  `qa_3_subj` varchar(255) NOT NULL DEFAULT '',
  `qa_4_subj` varchar(255) NOT NULL DEFAULT '',
  `qa_5_subj` varchar(255) NOT NULL DEFAULT '',
  `qa_1` varchar(255) NOT NULL DEFAULT '',
  `qa_2` varchar(255) NOT NULL DEFAULT '',
  `qa_3` varchar(255) NOT NULL DEFAULT '',
  `qa_4` varchar(255) NOT NULL DEFAULT '',
  `qa_5` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `g5_qa_config`
--

LOCK TABLES `g5_qa_config` WRITE;
/*!40000 ALTER TABLE `g5_qa_config` DISABLE KEYS */;
INSERT INTO `g5_qa_config` VALUES ('1:1문의','회원|포인트','basic','basic',1,0,1,0,0,'0','','',1,60,30,15,15,600,1048576,'','','','','','','','','','','','','','','','','');
/*!40000 ALTER TABLE `g5_qa_config` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `g5_qa_content`
--

DROP TABLE IF EXISTS `g5_qa_content`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `g5_qa_content` (
  `qa_id` int(11) NOT NULL AUTO_INCREMENT,
  `qa_num` int(11) NOT NULL DEFAULT '0',
  `qa_parent` int(11) NOT NULL DEFAULT '0',
  `qa_related` int(11) NOT NULL DEFAULT '0',
  `mb_id` varchar(20) NOT NULL DEFAULT '',
  `qa_name` varchar(255) NOT NULL DEFAULT '',
  `qa_email` varchar(255) NOT NULL DEFAULT '',
  `qa_hp` varchar(255) NOT NULL DEFAULT '',
  `qa_type` tinyint(4) NOT NULL DEFAULT '0',
  `qa_category` varchar(255) NOT NULL DEFAULT '',
  `qa_email_recv` tinyint(4) NOT NULL DEFAULT '0',
  `qa_sms_recv` tinyint(4) NOT NULL DEFAULT '0',
  `qa_html` tinyint(4) NOT NULL DEFAULT '0',
  `qa_subject` varchar(255) NOT NULL DEFAULT '',
  `qa_content` text NOT NULL,
  `qa_status` tinyint(4) NOT NULL DEFAULT '0',
  `qa_file1` varchar(255) NOT NULL DEFAULT '',
  `qa_source1` varchar(255) NOT NULL DEFAULT '',
  `qa_file2` varchar(255) NOT NULL DEFAULT '',
  `qa_source2` varchar(255) NOT NULL DEFAULT '',
  `qa_ip` varchar(255) NOT NULL DEFAULT '',
  `qa_datetime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `qa_1` varchar(255) NOT NULL DEFAULT '',
  `qa_2` varchar(255) NOT NULL DEFAULT '',
  `qa_3` varchar(255) NOT NULL DEFAULT '',
  `qa_4` varchar(255) NOT NULL DEFAULT '',
  `qa_5` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`qa_id`),
  KEY `qa_num_parent` (`qa_num`,`qa_parent`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `g5_qa_content`
--

LOCK TABLES `g5_qa_content` WRITE;
/*!40000 ALTER TABLE `g5_qa_content` DISABLE KEYS */;
/*!40000 ALTER TABLE `g5_qa_content` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `g5_scrap`
--

DROP TABLE IF EXISTS `g5_scrap`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `g5_scrap` (
  `ms_id` int(11) NOT NULL AUTO_INCREMENT,
  `mb_id` varchar(20) NOT NULL DEFAULT '',
  `bo_table` varchar(20) NOT NULL DEFAULT '',
  `wr_id` varchar(15) NOT NULL DEFAULT '',
  `ms_datetime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`ms_id`),
  KEY `mb_id` (`mb_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `g5_scrap`
--

LOCK TABLES `g5_scrap` WRITE;
/*!40000 ALTER TABLE `g5_scrap` DISABLE KEYS */;
/*!40000 ALTER TABLE `g5_scrap` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `g5_uniqid`
--

DROP TABLE IF EXISTS `g5_uniqid`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `g5_uniqid` (
  `uq_id` bigint(20) unsigned NOT NULL,
  `uq_ip` varchar(255) NOT NULL,
  PRIMARY KEY (`uq_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `g5_uniqid`
--

LOCK TABLES `g5_uniqid` WRITE;
/*!40000 ALTER TABLE `g5_uniqid` DISABLE KEYS */;
INSERT INTO `g5_uniqid` VALUES (2022100319540006,'183.97.206.86'),(2022100320013272,'183.97.206.86'),(2022100320013502,'183.97.206.86'),(2022100320033093,'183.97.206.86'),(2022100320033847,'183.97.206.86'),(2022100320034991,'183.97.206.86'),(2022100320035493,'183.97.206.86'),(2022100320040379,'183.97.206.86'),(2022100320041047,'183.97.206.86'),(2022100320061185,'183.97.206.86'),(2022100320100021,'183.97.206.86'),(2022100320191222,'183.97.206.86'),(2022100321503786,'183.97.206.86'),(2022100410065603,'123.142.173.52'),(2022100410082008,'123.142.173.52'),(2022100410083737,'123.142.173.52'),(2022100410084715,'123.142.173.52'),(2022100410085089,'123.142.173.52'),(2022100410090957,'123.142.173.52'),(2022100411305687,'123.142.173.52'),(2022100411372576,'123.142.173.52'),(2022100411394436,'123.142.173.52'),(2022100412171666,'123.142.173.52'),(2022100412471282,'123.142.173.52'),(2022100412475926,'123.142.173.52'),(2022100412580772,'123.142.173.52'),(2022100414270801,'123.142.173.52'),(2022100414280653,'123.142.173.52'),(2022100414293854,'123.142.173.52'),(2022100414334624,'123.142.173.52'),(2022100414341338,'123.142.173.52'),(2022100414535897,'123.142.173.52'),(2022100415003945,'123.142.173.52'),(2022100415014305,'123.142.173.52'),(2022100415144041,'123.142.173.52'),(2022100415155918,'123.142.173.52'),(2022100415322452,'123.142.173.52'),(2022100415360166,'123.142.173.52'),(2022100415453958,'123.142.173.52'),(2022100415560607,'123.142.173.52'),(2022100415572020,'123.142.173.52'),(2022100416012836,'123.142.173.52'),(2022100416025511,'123.142.173.52'),(2022100416055692,'123.142.173.52'),(2022100416125601,'123.142.173.52'),(2022100416131808,'123.142.173.52'),(2022100416211057,'123.142.173.52'),(2022100416265162,'123.142.173.52'),(2022100416302896,'123.142.173.52'),(2022100416312987,'123.142.173.52'),(2022100416313041,'123.142.173.52'),(2022100416335701,'123.142.173.52'),(2022100416335922,'123.142.173.52'),(2022100416340082,'123.142.173.52'),(2022100416362412,'123.142.173.52'),(2022100416363485,'123.142.173.52'),(2022100416363969,'123.142.173.52'),(2022100416375232,'123.142.173.52'),(2022100416375336,'123.142.173.52'),(2022100416382534,'123.142.173.52'),(2022100416383710,'123.142.173.52'),(2022100416390894,'123.142.173.52'),(2022100416403900,'123.142.173.52'),(2022100416410019,'123.142.173.52'),(2022100416415167,'123.142.173.52'),(2022100416415856,'123.142.173.52'),(2022100416420575,'123.142.173.52'),(2022100416423980,'123.142.173.52'),(2022100416424958,'123.142.173.52'),(2022100416430205,'123.142.173.52'),(2022100416431036,'123.142.173.52'),(2022100416431687,'123.142.173.52'),(2022100416433296,'123.142.173.52'),(2022100416454879,'123.142.173.52'),(2022100416455369,'123.142.173.52'),(2022100416460383,'123.142.173.52'),(2022100416462020,'123.142.173.52'),(2022100416465003,'123.142.173.52'),(2022100416472022,'123.142.173.52'),(2022100416473735,'123.142.173.52'),(2022100416510134,'123.142.173.52'),(2022100416511539,'123.142.173.52'),(2022100416560673,'123.142.173.52'),(2022100416563123,'123.142.173.52'),(2022100416580564,'123.142.173.52'),(2022100417101643,'123.142.173.52'),(2022100417103523,'123.142.173.52'),(2022100417114541,'123.142.173.52'),(2022100417115650,'123.142.173.52'),(2022100417152063,'123.142.173.52'),(2022100417152652,'123.142.173.52'),(2022100417153165,'123.142.173.52'),(2022100417155487,'123.142.173.52'),(2022100417363607,'123.142.173.52'),(2022100417402186,'123.142.173.52'),(2022100417435394,'123.142.173.52'),(2022100417444326,'123.142.173.52'),(2022100417444780,'123.142.173.52'),(2022100417452235,'123.142.173.52'),(2022100417460794,'123.142.173.52'),(2022100417464026,'123.142.173.52'),(2022100417471382,'123.142.173.52'),(2022100418255350,'123.142.173.52'),(2022100418272009,'123.142.173.52'),(2022100418273023,'123.142.173.52'),(2022100418305064,'123.142.173.52'),(2022100418312054,'123.142.173.52'),(2022100418341467,'123.142.173.52'),(2022100418343203,'123.142.173.52'),(2022100418352790,'123.142.173.52'),(2022100418361681,'123.142.173.52'),(2022100418361982,'123.142.173.52'),(2022100418384444,'123.142.173.52'),(2022100418392035,'123.142.173.52'),(2022100418400062,'123.142.173.52'),(2022100418400396,'123.142.173.52'),(2022100418402583,'123.142.173.52'),(2022100418404583,'123.142.173.52'),(2022100418424074,'123.142.173.52'),(2022100418424406,'123.142.173.52'),(2022100418451949,'123.142.173.52'),(2022100418452190,'123.142.173.52'),(2022100418502752,'123.142.173.52'),(2022100418534344,'123.142.173.52'),(2022100418534611,'123.142.173.52'),(2022100418534998,'123.142.173.52'),(2022100418562595,'123.142.173.52'),(2022100418562678,'123.142.173.52'),(2022100418571640,'123.142.173.52'),(2022100418571886,'123.142.173.52'),(2022100418572238,'123.142.173.52'),(2022100418573057,'123.142.173.52'),(2022100418575987,'123.142.173.52'),(2022100418581722,'123.142.173.52'),(2022100418582018,'123.142.173.52'),(2022100418595608,'123.142.173.52'),(2022100418595900,'123.142.173.52'),(2022100419021139,'123.142.173.52'),(2022100419065189,'123.142.173.52'),(2022100419072206,'123.142.173.52'),(2022100419110248,'123.142.173.52'),(2022100419184371,'123.142.173.52'),(2022100419452372,'123.142.173.52'),(2022100419452941,'123.142.173.52'),(2022100419454270,'123.142.173.52'),(2022100420230659,'123.142.173.52'),(2022100420232056,'123.142.173.52'),(2022100420233587,'123.142.173.52'),(2022100420234467,'123.142.173.52'),(2022100420234832,'123.142.173.52'),(2022100420235770,'123.142.173.52'),(2022100420240760,'123.142.173.52'),(2022100420250582,'123.142.173.52'),(2022100420251396,'123.142.173.52'),(2022100420254576,'123.142.173.52');
/*!40000 ALTER TABLE `g5_uniqid` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `g5_visit`
--

DROP TABLE IF EXISTS `g5_visit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `g5_visit` (
  `vi_id` int(11) NOT NULL DEFAULT '0',
  `vi_ip` varchar(100) NOT NULL DEFAULT '',
  `vi_date` date NOT NULL DEFAULT '0000-00-00',
  `vi_time` time NOT NULL DEFAULT '00:00:00',
  `vi_referer` text NOT NULL,
  `vi_agent` varchar(200) NOT NULL DEFAULT '',
  `vi_browser` varchar(255) NOT NULL DEFAULT '',
  `vi_os` varchar(255) NOT NULL DEFAULT '',
  `vi_device` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`vi_id`),
  UNIQUE KEY `index1` (`vi_ip`,`vi_date`),
  KEY `index2` (`vi_date`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `g5_visit`
--

LOCK TABLES `g5_visit` WRITE;
/*!40000 ALTER TABLE `g5_visit` DISABLE KEYS */;
INSERT INTO `g5_visit` VALUES (1,'123.142.173.52','2022-09-29','18:44:12','https://sissel997.cafe24.com/install/install_db.php','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36','Chrome 106.0','Win10','Desktop'),(2,'210.220.86.1','2022-09-30','10:41:22','','facebookexternalhit/1.1; kakaotalk-scrap/1.0; +https://devtalk.kakao.com/t/scrap/33984','Facebook','unknown','unknown'),(3,'123.142.173.52','2022-09-30','17:12:05','','NateOn/7.0.13.0 (5437)','Default Browser','unknown','unknown'),(4,'203.226.253.198','2022-09-30','17:12:05','','Java/1.8.0_162','Java Standard Library','unknown','unknown'),(5,'211.249.218.6','2022-09-30','17:23:01','','facebookexternalhit/1.1; kakaotalk-scrap/1.0; +https://devtalk.kakao.com/t/scrap/33984','Facebook','unknown','unknown'),(6,'168.126.165.116','2022-09-30','17:30:23','','NTWebPageAssist/1.0 (Linux; Android;) Mobile Safari','Default Browser','unknown','unknown'),(7,'106.101.64.214','2022-09-30','17:43:40','','Mozilla/5.0 (Linux; Android 12; SM-F711N Build/SP2A.220305.013; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/105.0.5195.136 Mobile Safari/537.36;KAKAOTALK 2409960','Android Browser 4.0','Android','Mobile Phone'),(8,'210.220.73.255','2022-09-30','19:22:30','','facebookexternalhit/1.1; kakaotalk-scrap/1.0; +https://devtalk.kakao.com/t/scrap/33984','Facebook','unknown','unknown'),(9,'211.36.142.2','2022-10-02','23:30:39','','NTWebPageAssist/1.0 (Linux; Android;) Mobile Safari','Default Browser','unknown','unknown'),(10,'220.64.105.255','2022-10-03','19:36:55','','facebookexternalhit/1.1; kakaotalk-scrap/1.0; +https://devtalk.kakao.com/t/scrap/33984','Facebook','unknown','unknown'),(11,'183.97.206.86','2022-10-03','19:45:06','','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36','Chrome 105.0','Win10','Desktop'),(12,'123.142.173.52','2022-10-04','09:59:30','','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36','Chrome 106.0','Win10','Desktop'),(13,'203.226.253.198','2022-10-04','12:03:07','','Java/1.8.0_162','Java Standard Library','unknown','unknown');
/*!40000 ALTER TABLE `g5_visit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `g5_visit_sum`
--

DROP TABLE IF EXISTS `g5_visit_sum`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `g5_visit_sum` (
  `vs_date` date NOT NULL DEFAULT '0000-00-00',
  `vs_count` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`vs_date`),
  KEY `index1` (`vs_count`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `g5_visit_sum`
--

LOCK TABLES `g5_visit_sum` WRITE;
/*!40000 ALTER TABLE `g5_visit_sum` DISABLE KEYS */;
INSERT INTO `g5_visit_sum` VALUES ('2022-09-29',1),('2022-10-02',1),('2022-10-03',2),('2022-10-04',2),('2022-09-30',7);
/*!40000 ALTER TABLE `g5_visit_sum` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `g5_write_doctor`
--

DROP TABLE IF EXISTS `g5_write_doctor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `g5_write_doctor` (
  `wr_id` int(11) NOT NULL AUTO_INCREMENT,
  `wr_num` int(11) NOT NULL DEFAULT '0',
  `wr_reply` varchar(10) NOT NULL,
  `wr_parent` int(11) NOT NULL DEFAULT '0',
  `wr_is_comment` tinyint(4) NOT NULL DEFAULT '0',
  `wr_comment` int(11) NOT NULL DEFAULT '0',
  `wr_comment_reply` varchar(5) NOT NULL,
  `ca_name` varchar(255) NOT NULL,
  `wr_option` set('html1','html2','secret','mail') NOT NULL,
  `wr_subject` varchar(255) NOT NULL,
  `wr_content` text NOT NULL,
  `wr_seo_title` varchar(255) NOT NULL DEFAULT '',
  `wr_link1` text NOT NULL,
  `wr_link2` text NOT NULL,
  `wr_link1_hit` int(11) NOT NULL DEFAULT '0',
  `wr_link2_hit` int(11) NOT NULL DEFAULT '0',
  `wr_hit` int(11) NOT NULL DEFAULT '0',
  `wr_good` int(11) NOT NULL DEFAULT '0',
  `wr_nogood` int(11) NOT NULL DEFAULT '0',
  `mb_id` varchar(20) NOT NULL,
  `wr_password` varchar(255) NOT NULL,
  `wr_name` varchar(255) NOT NULL,
  `wr_email` varchar(255) NOT NULL,
  `wr_homepage` varchar(255) NOT NULL,
  `wr_datetime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `wr_file` tinyint(4) NOT NULL DEFAULT '0',
  `wr_last` varchar(19) NOT NULL,
  `wr_ip` varchar(255) NOT NULL,
  `wr_facebook_user` varchar(255) NOT NULL,
  `wr_twitter_user` varchar(255) NOT NULL,
  `wr_1` varchar(255) NOT NULL,
  `wr_2` varchar(255) NOT NULL,
  `wr_3` varchar(255) NOT NULL,
  `wr_4` varchar(255) NOT NULL,
  `wr_5` varchar(255) NOT NULL,
  `wr_6` varchar(255) NOT NULL,
  `wr_7` varchar(255) NOT NULL,
  `wr_8` varchar(255) NOT NULL,
  `wr_9` varchar(255) NOT NULL,
  `wr_10` varchar(255) NOT NULL,
  `wr_11` varchar(255) NOT NULL,
  `wr_12` varchar(255) NOT NULL,
  `wr_13` varchar(255) NOT NULL,
  PRIMARY KEY (`wr_id`),
  KEY `wr_seo_title` (`wr_seo_title`),
  KEY `wr_num_reply_parent` (`wr_num`,`wr_reply`,`wr_parent`),
  KEY `wr_is_comment` (`wr_is_comment`,`wr_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `g5_write_doctor`
--

LOCK TABLES `g5_write_doctor` WRITE;
/*!40000 ALTER TABLE `g5_write_doctor` DISABLE KEYS */;
INSERT INTO `g5_write_doctor` VALUES (3,-1,'',3,0,0,'','구월점','','이승규','인하대학교 의과대학 피부과학교실 의학석사\r\n전 탈모닥터 모발이식 네트워크 교육원장\r\n전 인하대병원 피부미용외과 전임의\r\n전 예스성형외과 부원장\r\n전 맑은누리성형외과 부원장\r\n대한피부과학회 정회원\r\n대한미용외과학회 정회원\r\n대한미용피부외과학회 정회원\r\n대한피부레이저학회 정회원\r\n대한모발학회 정회원\r\n18,19 미스인천선발대회 심사위원\r\nATO N O2 LAB 피부과학연구소 명예연구원','이승규','','',0,0,0,1,0,'admin','sha256:12000:vZZ+YMR3ejbbCqZg4wiIpVB8p43yeJNe:q5fkp1w0I68PHdPMLD5vSBjMZ+bp9EOS','최고관리자','admin@domain.com','','2022-10-04 17:45:19',1,'2022-10-04 17:45:19','123.142.173.52','','','피부과전문의','대표원장','','','','','','','','','','',''),(4,-2,'',4,0,0,'','구월점','','이현숙','인하대학교 의과대학 피부과학교실 의학석사\r\n인하대학교 의과대학 피부과학교실 의학박사\r\n전 인하대학교 피부과 임상강사\r\n전 비앤씨 피부과 원장\r\n대한피부과학회 정회원\r\n대한피부과의사회 정회원\r\n대한피부미용외과학회 정회원\r\n대한여드름학회 정회원\r\n대한아토피피부염학회 정회원\r\n대한모발학회 정회원\r\nKACD(대한피부교정학회) 총무간사','이현숙','','',0,0,0,2,0,'admin','sha256:12000:vZZ+YMR3ejbbCqZg4wiIpVB8p43yeJNe:q5fkp1w0I68PHdPMLD5vSBjMZ+bp9EOS','최고관리자','admin@domain.com','','2022-10-04 17:45:53',1,'2022-10-04 17:45:53','123.142.173.52','','','피부과전문의','대표원장','','','','','','','','','','',''),(5,-3,'',5,0,0,'','구월점','','손영민','가천대학교 의과대학 졸업\r\n가천대학교 길병원 피부과 전공의 수료\r\n가천대학교 길병원 피부과 전문의\r\n가천대학교 길병원 피부과 외래교수\r\n대한 피부과학회 정회원\r\n대한 피부과의사회 정회원\r\n대한 피부항노화연구회 정회원\r\n대한 여드름학회 정회원\r\n대한 아토피피부염학회 정회원\r\n대한 모발학회 정회원\r\n대한 미용피부외과학회 정회원','손영민','','',0,0,0,3,0,'admin','sha256:12000:vZZ+YMR3ejbbCqZg4wiIpVB8p43yeJNe:q5fkp1w0I68PHdPMLD5vSBjMZ+bp9EOS','최고관리자','admin@domain.com','','2022-10-04 17:46:37',1,'2022-10-04 17:46:37','123.142.173.52','','','피부과전문의','대표원장','','','','','','','','','','',''),(6,-4,'',6,0,0,'','송도점','','이시협','인하대학교 의과대학 졸업\r\n인하대병원 피부과 전공의\r\n인하대학교 피부과학교실 의학석사\r\n인하대병원 피부과 임상강사\r\n대한피부과학회 정회원\r\n대한피부과의사회 정회원\r\n대한임상피부치료연구회 정회원\r\n대한모발학회 정회원\r\n대한미용피부외과학회 정회원\r\n대한백반증학회 정회원\r\n대한여드름학회 정회원','이시협','','',0,0,0,4,0,'admin','sha256:12000:vZZ+YMR3ejbbCqZg4wiIpVB8p43yeJNe:q5fkp1w0I68PHdPMLD5vSBjMZ+bp9EOS','최고관리자','admin@domain.com','','2022-10-04 17:47:10',1,'2022-10-04 17:47:10','123.142.173.52','','','피부과전문의','원장','','','','','','','','','','',''),(7,-5,'',7,0,0,'','구월점','','박성민','박성민여성클리닉 대표원장\r\n대한비만학회 정회원\r\n대한비만체형학회 정회원\r\n대한줄기세포학회 정회원\r\n대한경피시술학회 정회원\r\n대한미용외과학회 정회원\r\n대한성의학회 정회원\r\n유방성형학회 정회원','박성민','','',0,0,0,5,0,'admin','sha256:12000:vZZ+YMR3ejbbCqZg4wiIpVB8p43yeJNe:q5fkp1w0I68PHdPMLD5vSBjMZ+bp9EOS','최고관리자','admin@domain.com','','2022-10-04 17:47:43',1,'2022-10-04 17:47:43','123.142.173.52','','','지방흡입 전담의','원장','','','','','','','','','','','');
/*!40000 ALTER TABLE `g5_write_doctor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `g5_write_equipment`
--

DROP TABLE IF EXISTS `g5_write_equipment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `g5_write_equipment` (
  `wr_id` int(11) NOT NULL AUTO_INCREMENT,
  `wr_num` int(11) NOT NULL DEFAULT '0',
  `wr_reply` varchar(10) NOT NULL,
  `wr_parent` int(11) NOT NULL DEFAULT '0',
  `wr_is_comment` tinyint(4) NOT NULL DEFAULT '0',
  `wr_comment` int(11) NOT NULL DEFAULT '0',
  `wr_comment_reply` varchar(5) NOT NULL,
  `ca_name` varchar(255) NOT NULL,
  `wr_option` set('html1','html2','secret','mail') NOT NULL,
  `wr_subject` varchar(255) NOT NULL,
  `wr_content` text NOT NULL,
  `wr_seo_title` varchar(255) NOT NULL DEFAULT '',
  `wr_link1` text NOT NULL,
  `wr_link2` text NOT NULL,
  `wr_link1_hit` int(11) NOT NULL DEFAULT '0',
  `wr_link2_hit` int(11) NOT NULL DEFAULT '0',
  `wr_hit` int(11) NOT NULL DEFAULT '0',
  `wr_good` int(11) NOT NULL DEFAULT '0',
  `wr_nogood` int(11) NOT NULL DEFAULT '0',
  `mb_id` varchar(20) NOT NULL,
  `wr_password` varchar(255) NOT NULL,
  `wr_name` varchar(255) NOT NULL,
  `wr_email` varchar(255) NOT NULL,
  `wr_homepage` varchar(255) NOT NULL,
  `wr_datetime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `wr_file` tinyint(4) NOT NULL DEFAULT '0',
  `wr_last` varchar(19) NOT NULL,
  `wr_ip` varchar(255) NOT NULL,
  `wr_facebook_user` varchar(255) NOT NULL,
  `wr_twitter_user` varchar(255) NOT NULL,
  `wr_1` varchar(255) NOT NULL,
  `wr_2` varchar(255) NOT NULL,
  `wr_3` varchar(255) NOT NULL,
  `wr_4` varchar(255) NOT NULL,
  `wr_5` varchar(255) NOT NULL,
  `wr_6` varchar(255) NOT NULL,
  `wr_7` varchar(255) NOT NULL,
  `wr_8` varchar(255) NOT NULL,
  `wr_9` varchar(255) NOT NULL,
  `wr_10` varchar(255) NOT NULL,
  `wr_11` varchar(255) NOT NULL,
  `wr_12` varchar(255) NOT NULL,
  `wr_13` varchar(255) NOT NULL,
  PRIMARY KEY (`wr_id`),
  KEY `wr_seo_title` (`wr_seo_title`),
  KEY `wr_num_reply_parent` (`wr_num`,`wr_reply`,`wr_parent`),
  KEY `wr_is_comment` (`wr_is_comment`,`wr_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `g5_write_equipment`
--

LOCK TABLES `g5_write_equipment` WRITE;
/*!40000 ALTER TABLE `g5_write_equipment` DISABLE KEYS */;
INSERT INTO `g5_write_equipment` VALUES (1,-1,'',1,0,0,'','안티에이징','','test','test','test','','',0,0,0,1,0,'admin','sha256:12000:vZZ+YMR3ejbbCqZg4wiIpVB8p43yeJNe:q5fkp1w0I68PHdPMLD5vSBjMZ+bp9EOS','최고관리자','admin@domain.com','','2022-10-04 18:36:14',2,'2022-10-04 18:36:14','123.142.173.52','','','test','','','','2010,2020,2030,2040,2050,2060,2070,2080,2090,3010,3020,3030,3040,3050,3060,3070,3080,4010,4020,5010,5020,5030,5040,5050,6010,6020,6030,6040,7010,7020,7030,7040,7050','','','','','','','','');
/*!40000 ALTER TABLE `g5_write_equipment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `g5_write_notice_event`
--

DROP TABLE IF EXISTS `g5_write_notice_event`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `g5_write_notice_event` (
  `wr_id` int(11) NOT NULL AUTO_INCREMENT,
  `wr_num` int(11) NOT NULL DEFAULT '0',
  `wr_reply` varchar(10) NOT NULL,
  `wr_parent` int(11) NOT NULL DEFAULT '0',
  `wr_is_comment` tinyint(4) NOT NULL DEFAULT '0',
  `wr_comment` int(11) NOT NULL DEFAULT '0',
  `wr_comment_reply` varchar(5) NOT NULL,
  `ca_name` varchar(255) NOT NULL,
  `wr_option` set('html1','html2','secret','mail') NOT NULL,
  `wr_subject` varchar(255) NOT NULL,
  `wr_content` text NOT NULL,
  `wr_seo_title` varchar(255) NOT NULL DEFAULT '',
  `wr_link1` text NOT NULL,
  `wr_link2` text NOT NULL,
  `wr_link1_hit` int(11) NOT NULL DEFAULT '0',
  `wr_link2_hit` int(11) NOT NULL DEFAULT '0',
  `wr_hit` int(11) NOT NULL DEFAULT '0',
  `wr_good` int(11) NOT NULL DEFAULT '0',
  `wr_nogood` int(11) NOT NULL DEFAULT '0',
  `mb_id` varchar(20) NOT NULL,
  `wr_password` varchar(255) NOT NULL,
  `wr_name` varchar(255) NOT NULL,
  `wr_email` varchar(255) NOT NULL,
  `wr_homepage` varchar(255) NOT NULL,
  `wr_datetime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `wr_file` tinyint(4) NOT NULL DEFAULT '0',
  `wr_last` varchar(19) NOT NULL,
  `wr_ip` varchar(255) NOT NULL,
  `wr_facebook_user` varchar(255) NOT NULL,
  `wr_twitter_user` varchar(255) NOT NULL,
  `wr_1` varchar(255) NOT NULL,
  `wr_2` varchar(255) NOT NULL,
  `wr_3` varchar(255) NOT NULL,
  `wr_4` varchar(255) NOT NULL,
  `wr_5` varchar(255) NOT NULL,
  `wr_6` varchar(255) NOT NULL,
  `wr_7` varchar(255) NOT NULL,
  `wr_8` varchar(255) NOT NULL,
  `wr_9` varchar(255) NOT NULL,
  `wr_10` varchar(255) NOT NULL,
  `wr_11` varchar(255) NOT NULL,
  `wr_12` varchar(255) NOT NULL,
  `wr_13` varchar(255) NOT NULL,
  PRIMARY KEY (`wr_id`),
  KEY `wr_seo_title` (`wr_seo_title`),
  KEY `wr_num_reply_parent` (`wr_num`,`wr_reply`,`wr_parent`),
  KEY `wr_is_comment` (`wr_is_comment`,`wr_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `g5_write_notice_event`
--

LOCK TABLES `g5_write_notice_event` WRITE;
/*!40000 ALTER TABLE `g5_write_notice_event` DISABLE KEYS */;
/*!40000 ALTER TABLE `g5_write_notice_event` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `g5_write_online`
--

DROP TABLE IF EXISTS `g5_write_online`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `g5_write_online` (
  `wr_id` int(11) NOT NULL AUTO_INCREMENT,
  `wr_num` int(11) NOT NULL DEFAULT '0',
  `wr_reply` varchar(10) NOT NULL,
  `wr_parent` int(11) NOT NULL DEFAULT '0',
  `wr_is_comment` tinyint(4) NOT NULL DEFAULT '0',
  `wr_comment` int(11) NOT NULL DEFAULT '0',
  `wr_comment_reply` varchar(5) NOT NULL,
  `ca_name` varchar(255) NOT NULL,
  `wr_option` set('html1','html2','secret','mail') NOT NULL,
  `wr_subject` varchar(255) NOT NULL,
  `wr_content` text NOT NULL,
  `wr_seo_title` varchar(255) NOT NULL DEFAULT '',
  `wr_link1` text NOT NULL,
  `wr_link2` text NOT NULL,
  `wr_link1_hit` int(11) NOT NULL DEFAULT '0',
  `wr_link2_hit` int(11) NOT NULL DEFAULT '0',
  `wr_hit` int(11) NOT NULL DEFAULT '0',
  `wr_good` int(11) NOT NULL DEFAULT '0',
  `wr_nogood` int(11) NOT NULL DEFAULT '0',
  `mb_id` varchar(20) NOT NULL,
  `wr_password` varchar(255) NOT NULL,
  `wr_name` varchar(255) NOT NULL,
  `wr_email` varchar(255) NOT NULL,
  `wr_homepage` varchar(255) NOT NULL,
  `wr_datetime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `wr_file` tinyint(4) NOT NULL DEFAULT '0',
  `wr_last` varchar(19) NOT NULL,
  `wr_ip` varchar(255) NOT NULL,
  `wr_facebook_user` varchar(255) NOT NULL,
  `wr_twitter_user` varchar(255) NOT NULL,
  `wr_1` varchar(255) NOT NULL,
  `wr_2` varchar(255) NOT NULL,
  `wr_3` varchar(255) NOT NULL,
  `wr_4` varchar(255) NOT NULL,
  `wr_5` varchar(255) NOT NULL,
  `wr_6` varchar(255) NOT NULL,
  `wr_7` varchar(255) NOT NULL,
  `wr_8` varchar(255) NOT NULL,
  `wr_9` varchar(255) NOT NULL,
  `wr_10` varchar(255) NOT NULL,
  `wr_11` varchar(255) NOT NULL,
  `wr_12` varchar(255) NOT NULL,
  `wr_13` varchar(255) NOT NULL,
  PRIMARY KEY (`wr_id`),
  KEY `wr_seo_title` (`wr_seo_title`),
  KEY `wr_num_reply_parent` (`wr_num`,`wr_reply`,`wr_parent`),
  KEY `wr_is_comment` (`wr_is_comment`,`wr_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `g5_write_online`
--

LOCK TABLES `g5_write_online` WRITE;
/*!40000 ALTER TABLE `g5_write_online` DISABLE KEYS */;
/*!40000 ALTER TABLE `g5_write_online` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `g5_write_review`
--

DROP TABLE IF EXISTS `g5_write_review`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `g5_write_review` (
  `wr_id` int(11) NOT NULL AUTO_INCREMENT,
  `wr_num` int(11) NOT NULL DEFAULT '0',
  `wr_reply` varchar(10) NOT NULL,
  `wr_parent` int(11) NOT NULL DEFAULT '0',
  `wr_is_comment` tinyint(4) NOT NULL DEFAULT '0',
  `wr_comment` int(11) NOT NULL DEFAULT '0',
  `wr_comment_reply` varchar(5) NOT NULL,
  `ca_name` varchar(255) NOT NULL,
  `wr_option` set('html1','html2','secret','mail') NOT NULL,
  `wr_subject` varchar(255) NOT NULL,
  `wr_content` text NOT NULL,
  `wr_seo_title` varchar(255) NOT NULL DEFAULT '',
  `wr_link1` text NOT NULL,
  `wr_link2` text NOT NULL,
  `wr_link1_hit` int(11) NOT NULL DEFAULT '0',
  `wr_link2_hit` int(11) NOT NULL DEFAULT '0',
  `wr_hit` int(11) NOT NULL DEFAULT '0',
  `wr_good` int(11) NOT NULL DEFAULT '0',
  `wr_nogood` int(11) NOT NULL DEFAULT '0',
  `mb_id` varchar(20) NOT NULL,
  `wr_password` varchar(255) NOT NULL,
  `wr_name` varchar(255) NOT NULL,
  `wr_email` varchar(255) NOT NULL,
  `wr_homepage` varchar(255) NOT NULL,
  `wr_datetime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `wr_file` tinyint(4) NOT NULL DEFAULT '0',
  `wr_last` varchar(19) NOT NULL,
  `wr_ip` varchar(255) NOT NULL,
  `wr_facebook_user` varchar(255) NOT NULL,
  `wr_twitter_user` varchar(255) NOT NULL,
  `wr_1` varchar(255) NOT NULL,
  `wr_2` varchar(255) NOT NULL,
  `wr_3` varchar(255) NOT NULL,
  `wr_4` varchar(255) NOT NULL,
  `wr_5` varchar(255) NOT NULL,
  `wr_6` varchar(255) NOT NULL,
  `wr_7` varchar(255) NOT NULL,
  `wr_8` varchar(255) NOT NULL,
  `wr_9` varchar(255) NOT NULL,
  `wr_10` varchar(255) NOT NULL,
  `wr_11` varchar(255) NOT NULL,
  `wr_12` varchar(255) NOT NULL,
  `wr_13` varchar(255) NOT NULL,
  PRIMARY KEY (`wr_id`),
  KEY `wr_seo_title` (`wr_seo_title`),
  KEY `wr_num_reply_parent` (`wr_num`,`wr_reply`,`wr_parent`),
  KEY `wr_is_comment` (`wr_is_comment`,`wr_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `g5_write_review`
--

LOCK TABLES `g5_write_review` WRITE;
/*!40000 ALTER TABLE `g5_write_review` DISABLE KEYS */;
/*!40000 ALTER TABLE `g5_write_review` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `g5_write_text_review`
--

DROP TABLE IF EXISTS `g5_write_text_review`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `g5_write_text_review` (
  `wr_id` int(11) NOT NULL AUTO_INCREMENT,
  `wr_num` int(11) NOT NULL DEFAULT '0',
  `wr_reply` varchar(10) NOT NULL,
  `wr_parent` int(11) NOT NULL DEFAULT '0',
  `wr_is_comment` tinyint(4) NOT NULL DEFAULT '0',
  `wr_comment` int(11) NOT NULL DEFAULT '0',
  `wr_comment_reply` varchar(5) NOT NULL,
  `ca_name` varchar(255) NOT NULL,
  `wr_option` set('html1','html2','secret','mail') NOT NULL,
  `wr_subject` varchar(255) NOT NULL,
  `wr_content` text NOT NULL,
  `wr_seo_title` varchar(255) NOT NULL DEFAULT '',
  `wr_link1` text NOT NULL,
  `wr_link2` text NOT NULL,
  `wr_link1_hit` int(11) NOT NULL DEFAULT '0',
  `wr_link2_hit` int(11) NOT NULL DEFAULT '0',
  `wr_hit` int(11) NOT NULL DEFAULT '0',
  `wr_good` int(11) NOT NULL DEFAULT '0',
  `wr_nogood` int(11) NOT NULL DEFAULT '0',
  `mb_id` varchar(20) NOT NULL,
  `wr_password` varchar(255) NOT NULL,
  `wr_name` varchar(255) NOT NULL,
  `wr_email` varchar(255) NOT NULL,
  `wr_homepage` varchar(255) NOT NULL,
  `wr_datetime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `wr_file` tinyint(4) NOT NULL DEFAULT '0',
  `wr_last` varchar(19) NOT NULL,
  `wr_ip` varchar(255) NOT NULL,
  `wr_facebook_user` varchar(255) NOT NULL,
  `wr_twitter_user` varchar(255) NOT NULL,
  `wr_1` varchar(255) NOT NULL,
  `wr_2` varchar(255) NOT NULL,
  `wr_3` varchar(255) NOT NULL,
  `wr_4` varchar(255) NOT NULL,
  `wr_5` varchar(255) NOT NULL,
  `wr_6` varchar(255) NOT NULL,
  `wr_7` varchar(255) NOT NULL,
  `wr_8` varchar(255) NOT NULL,
  `wr_9` varchar(255) NOT NULL,
  `wr_10` varchar(255) NOT NULL,
  `wr_11` varchar(255) NOT NULL,
  `wr_12` varchar(255) NOT NULL,
  `wr_13` varchar(255) NOT NULL,
  PRIMARY KEY (`wr_id`),
  KEY `wr_seo_title` (`wr_seo_title`),
  KEY `wr_num_reply_parent` (`wr_num`,`wr_reply`,`wr_parent`),
  KEY `wr_is_comment` (`wr_is_comment`,`wr_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `g5_write_text_review`
--

LOCK TABLES `g5_write_text_review` WRITE;
/*!40000 ALTER TABLE `g5_write_text_review` DISABLE KEYS */;
/*!40000 ALTER TABLE `g5_write_text_review` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `g5_write_youtube`
--

DROP TABLE IF EXISTS `g5_write_youtube`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `g5_write_youtube` (
  `wr_id` int(11) NOT NULL AUTO_INCREMENT,
  `wr_num` int(11) NOT NULL DEFAULT '0',
  `wr_reply` varchar(10) NOT NULL,
  `wr_parent` int(11) NOT NULL DEFAULT '0',
  `wr_is_comment` tinyint(4) NOT NULL DEFAULT '0',
  `wr_comment` int(11) NOT NULL DEFAULT '0',
  `wr_comment_reply` varchar(5) NOT NULL,
  `ca_name` varchar(255) NOT NULL,
  `wr_option` set('html1','html2','secret','mail') NOT NULL,
  `wr_subject` varchar(255) NOT NULL,
  `wr_content` text NOT NULL,
  `wr_seo_title` varchar(255) NOT NULL DEFAULT '',
  `wr_link1` text NOT NULL,
  `wr_link2` text NOT NULL,
  `wr_link1_hit` int(11) NOT NULL DEFAULT '0',
  `wr_link2_hit` int(11) NOT NULL DEFAULT '0',
  `wr_hit` int(11) NOT NULL DEFAULT '0',
  `wr_good` int(11) NOT NULL DEFAULT '0',
  `wr_nogood` int(11) NOT NULL DEFAULT '0',
  `mb_id` varchar(20) NOT NULL,
  `wr_password` varchar(255) NOT NULL,
  `wr_name` varchar(255) NOT NULL,
  `wr_email` varchar(255) NOT NULL,
  `wr_homepage` varchar(255) NOT NULL,
  `wr_datetime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `wr_file` tinyint(4) NOT NULL DEFAULT '0',
  `wr_last` varchar(19) NOT NULL,
  `wr_ip` varchar(255) NOT NULL,
  `wr_facebook_user` varchar(255) NOT NULL,
  `wr_twitter_user` varchar(255) NOT NULL,
  `wr_1` varchar(255) NOT NULL,
  `wr_2` varchar(255) NOT NULL,
  `wr_3` varchar(255) NOT NULL,
  `wr_4` varchar(255) NOT NULL,
  `wr_5` varchar(255) NOT NULL,
  `wr_6` varchar(255) NOT NULL,
  `wr_7` varchar(255) NOT NULL,
  `wr_8` varchar(255) NOT NULL,
  `wr_9` varchar(255) NOT NULL,
  `wr_10` varchar(255) NOT NULL,
  `wr_11` varchar(255) NOT NULL,
  `wr_12` varchar(255) NOT NULL,
  `wr_13` varchar(255) NOT NULL,
  `wr_14` varchar(255) NOT NULL,
  `wr_15` varchar(255) NOT NULL,
  PRIMARY KEY (`wr_id`),
  KEY `wr_seo_title` (`wr_seo_title`),
  KEY `wr_num_reply_parent` (`wr_num`,`wr_reply`,`wr_parent`),
  KEY `wr_is_comment` (`wr_is_comment`,`wr_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `g5_write_youtube`
--

LOCK TABLES `g5_write_youtube` WRITE;
/*!40000 ALTER TABLE `g5_write_youtube` DISABLE KEYS */;
/*!40000 ALTER TABLE `g5_write_youtube` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'sissel997'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-10-05  5:14:43
