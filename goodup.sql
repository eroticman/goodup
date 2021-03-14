-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2021 at 11:08 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `goodup`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_about_img`
--

CREATE TABLE `db_about_img` (
  `about_id` int(15) NOT NULL,
  `img_name` varchar(150) NOT NULL,
  `order_id` int(2) DEFAULT NULL,
  `created` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `db_about_img`
--

INSERT INTO `db_about_img` (`about_id`, `img_name`, `order_id`, `created`) VALUES
(1, 'img (61).jpg', 1, '2021-03-14 11:32:18'),
(1, 'img (62).jpg', 2, '2021-03-14 11:32:18'),
(1, 'img (63).jpg', 3, '2021-03-14 11:32:18'),
(1, 'img (64).jpg', 4, '2021-03-14 11:32:18'),
(1, 'img (65).jpg', 5, '2021-03-14 11:32:18'),
(1, 'img (66).jpg', 6, '2021-03-14 11:32:18');

-- --------------------------------------------------------

--
-- Table structure for table `db_about_us`
--

CREATE TABLE `db_about_us` (
  `id` int(10) NOT NULL,
  `about_name` varchar(100) DEFAULT NULL,
  `history_desc` text DEFAULT NULL,
  `history_desc_en` text DEFAULT NULL,
  `mission_desc` text DEFAULT NULL,
  `mission_desc_en` text DEFAULT NULL,
  `policy_desc` text DEFAULT NULL,
  `policy_desc_en` text DEFAULT NULL,
  `img_cover` varchar(100) DEFAULT '',
  `is_active` int(2) DEFAULT 1,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `db_about_us`
--

INSERT INTO `db_about_us` (`id`, `about_name`, `history_desc`, `history_desc_en`, `mission_desc`, `mission_desc_en`, `policy_desc`, `policy_desc_en`, `img_cover`, `is_active`, `created`, `updated`) VALUES
(1, 'GOOD UP CO.,LTD.', '<p>บริษัท กู๊ดอัพ จำกัด ก่อตั้งขึ้นเมื่อ 30 พฤศจิกายน 2547 โดยเริ่มต้นจากธุรกิจรับเหมาหุ้มฉนวนกันความร้อน ความเย็น และกันเสียงงานเชื่อมประกอบท่อ การผลิตชิ้นส่วนต่างๆ หลากหลายรูปแบบ เพื่อนำมาใช้กับเครื่องจักรในงานอุตสาหกรรม ต่อมาได้ขยายงานเข้าสู่การบริการรับเหมา ดัดแปลง ซ่อมแซม และติดตั้งเครื่องจักรอย่างเต็มตัว พร้อมทั้งยังให้คำปรึกษาแก่ลูกค้าโดยวิศวกรที่ทรงคุณวุฒิและทีมงานที่มีประสบการณ์งานด้านอุตสาหกรรม มากกว่า 20 ปี โดยมีบริษัทที่เป็นพันธมิตรในการทำงานร่วมกันกับบริษัท กู๊ดอัพ จำกัด หลายบริษัทจึงทำให้บริษัท กู๊ดอัพ จำกัด สามารถบริการงานด้านต่างๆแก่ลูกค้าได้อย่างครอบคลุม ซึ่งลูกค้าสามารถมั่นใจได้ว่าจะได้รับการบริการที่สะดวก ครบวงจร ได้มาตรฐาน</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>วันที่จดทะเบียน&nbsp;:&nbsp;30/11/2547</p>\r\n\r\n<p>ทะเบียนนิติบุคคลเลขที่&nbsp;:&nbsp;0135547011222</p>\r\n\r\n<p>ทุนจดทะเบียน&nbsp;:&nbsp;3,000,000&nbsp;บาท</p>\r\n\r\n<p>สถาบันการเงินที่ใช้บริการ&nbsp;:&nbsp;ธนาคารกสิกรไทย</p>\r\n', '<p>\r\n                                    The company opened up. In 2004, working in the Insulation and Ducting Contractors.\r\n                                    Many years later, has grown to a widening of Insulation installation and Ducting\r\n                                    works until the present Good up company Limited There are a number of co-operating\r\n                                    partners have jointly grow and expand the scope of the contract. Example, the\r\n                                    overhaul work. Assembly machines Installation of equipment installed pipe hydraulic\r\n                                    pipe steam system. Ducting & ventilation system. The team with specialized\r\n                                    expertise. By the torch control of the company, Good up limited.\r\n                                </p>\r\n                                <p>\r\n                                    - Established on : 30 Nov 2004</p>\r\n                                <p> - Location at : 91 SoiRangsit - Nakronnayok 25 , TombonPrachatipat, <br>Amphur\r\n                                    Thanyaburi ,Pathumthani 12130</p>\r\n                                <p> - Telephone : <a href=\"tel:021995055\">( 02 ) 199 - 5055</a> , <a\r\n                                        href=\"tel:0824379999\">082-437-9999</a> , <a\r\n                                        href=\"tel:0849562222\">084-956-2222</a></p>\r\n                                <p> - E – MAIL : goodup2001@gmail.com</p>\r\n                                <p> - Website : www.goodup.co.th</p>\r\n                                <p> - Register No : 0135547011222</p>\r\n                                <p> - Authorized capital : 3,000,000 Baht .</p>\r\n                                <p> - Bank Service : KASIKORN THAI PUBLIC COMPANY LIMITED.\r\n                                </p>', '<p>บริษัท กู๊ดอัพ จำกัด มีความตั้งใจที่จะผลิตผลงานให้ออกมาอย่างมีคุณภาพ และปราศจากข้อผิดพลาดในทุกขั้นตอนการทำงาน เพื่อสร้างความพึงพอใจในด้านฝีมือการทำงานและการบริการขององค์กรให้กับผู้ว่าจ้าง โดยมุ่งเน้นถึงวิธีการทำงานที่ถูกต้องตามขั้นตอน และด้านความปลอดภัยในการปฏิบัติงานทั้งในโรงงานและนอกสถานที่</p>\r\n', '<p>บริษัท กู๊ดอัพ จำกัด มีความตั้งใจที่จะผลิตผลงานให้ออกมาอย่างมีคุณภาพ และปราศจากข้อผิดพลาดในทุกขั้นตอนการทำงาน เพื่อสร้างความพึงพอใจในด้านฝีมือการทำงานและการบริการขององค์กรให้กับผู้ว่าจ้าง โดยมุ่งเน้นถึงวิธีการทำงานที่ถูกต้องตามขั้นตอน และด้านความปลอดภัยในการปฏิบัติงานทั้งในโรงงานและนอกสถานที่</p>\r\n', '<p>บริษัท กู๊ดอัพ จำกัด ได้ให้ความสำคัญกับงานทุกๆงาน และยังเน้นย้ำพนักงานทุกคน ให้ปฏิบัติงานอย่างมีคุณภาพ และอยู่ภายไต้กฎแห่งความปลอดภัยสูงสุด และถือว่าพนักงานทุกคนคือบุคลากรที่มีความสำคัญต่อองค์กรเท่าเทียมกัน ดังนั้นองค์กรจะต้องทำทุกวิถีทาง เพื่อให้พนักงานมีคุณภาพชีวิตที่ดี เพื่อสร้างสรรค์งานที่มีคุณภาพ เพื่อให้เกิดความพึงพอใจอย่างสูงสุดแก่ลูกค้า และ เพื่อความยั่งยืนขององค์กรตลอดไป</p>\r\n', '                        <p>We Intends to produce works to come out with quality and nothing from errors in every process of create satisfaction in workmanship and service for employer</p>\r\n', 'aboutus.jpg', 1, '2021-03-14 11:21:39', '2021-03-14 14:51:47');

-- --------------------------------------------------------

--
-- Table structure for table `db_admin`
--

CREATE TABLE `db_admin` (
  `id` int(11) NOT NULL,
  `group_id` int(2) DEFAULT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `ip` varchar(20) DEFAULT NULL,
  `is_active` int(2) DEFAULT 1,
  `created` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `db_admin`
--

INSERT INTO `db_admin` (`id`, `group_id`, `full_name`, `username`, `password`, `ip`, `is_active`, `created`) VALUES
(1, 1, 'Administrator', 'goodup@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '::1', 1, '2021-02-13 19:09:26');

-- --------------------------------------------------------

--
-- Table structure for table `db_banner`
--

CREATE TABLE `db_banner` (
  `id` int(20) NOT NULL,
  `banner_name` varchar(100) DEFAULT '',
  `img_cover` varchar(100) DEFAULT '',
  `is_active` varchar(1) DEFAULT '1',
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `db_banner`
--

INSERT INTO `db_banner` (`id`, `banner_name`, `img_cover`, `is_active`, `created`, `updated`) VALUES
(1, 'Goodup Banner 1', 'banner.jpg', '1', '2021-03-14 11:20:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `db_category`
--

CREATE TABLE `db_category` (
  `id` int(20) NOT NULL,
  `url_name` varchar(100) NOT NULL DEFAULT '',
  `keyword` text DEFAULT NULL,
  `category_name` varchar(100) DEFAULT '',
  `category_name_en` varchar(100) DEFAULT '',
  `description` text DEFAULT NULL,
  `description_en` text DEFAULT NULL,
  `img_cover` varchar(150) DEFAULT NULL,
  `is_active` int(2) DEFAULT 1,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `db_category`
--

INSERT INTO `db_category` (`id`, `url_name`, `keyword`, `category_name`, `category_name_en`, `description`, `description_en`, `img_cover`, `is_active`, `created`, `updated`) VALUES
(1, 'insulation-works-n-sound-proof', 'งานหุ้มฉนวน แจ็คเก็ต เพื่อกันความร้อน ความเย็น และเสียง', 'งานหุ้มฉนวน แจ็คเก็ต เพื่อกันความร้อน ความเย็น และเสียง', 'Insulation Works & Sound Proof', '<p>จากประสบการณ์อันยาวนานสำหรับงานหุ้มฉนวน และงานหุ้มแจ็คเก็ต บจก.กู๊ดอัพ สามารถสร้างสรรค์งานให้ท่านโดยช่างที่มีประสบการณ์ และฝีมือที่ดี ทำให้งานออกมาอย่างสวยงาม ไม่ว่าจะหุ้มด้วยวัสดุไฟเบอร์กล้าส ร็อควูล เซรามิค แคลเซี่ยมซิลิก้า แผ่นฉนวนยาง หรืองานหุ้มด้วยโฟม และแจ็คเก็ตด้วยวัสดุอลูมิเนียม สังกะสี หรือสเตนเลส บจก.กู๊ดอัพ ก็สามารถทำได้เป็นอย่างดี ด้วยบริการที่รวดเร็ว และในราคาที่เหมาะสม</p>\r\n', '<p>จากประสบการณ์อันยาวนานสำหรับงานหุ้มฉนวน และงานหุ้มแจ็คเก็ต บจก.กู๊ดอัพ สามารถสร้างสรรค์งานให้ท่านโดยช่างที่มีประสบการณ์ และฝีมือที่ดี ทำให้งานออกมาอย่างสวยงาม ไม่ว่าจะหุ้มด้วยวัสดุไฟเบอร์กล้าส ร็อควูล เซรามิค แคลเซี่ยมซิลิก้า แผ่นฉนวนยาง หรืองานหุ้มด้วยโฟม และแจ็คเก็ตด้วยวัสดุอลูมิเนียม สังกะสี หรือสเตนเลส บจก.กู๊ดอัพ ก็สามารถทำได้เป็นอย่างดี ด้วยบริการที่รวดเร็ว และในราคาที่เหมาะสม</p>\r\n', 'img_2_.jpg', 1, '2021-03-14 11:42:54', '2021-03-14 12:01:21'),
(2, 'fabric-isulation-n-energy-saving', 'งานออกแบบ ตัด เย็บ หมอนผ้ากันไฟ และความร้อน', 'งานออกแบบ ตัด เย็บ หมอนผ้ากันไฟ และความร้อน', 'Fabric Isulation&Energy Saving', '<p>ด้วยสถานนะการณ์ในปัจจุบันที่ต้องการลด และประหยัดพลังงานให้ได้มากที่สุด ทำให้เรามองเห็นถึงอุปกรณ์ ชิ้นส่วน และพาร์ทต่างๆ ในระบบสตีมของท่าน ที่ต้องมีการถอดเพื่อเปลี่ยน หรือบำรุงรักษาอยู่บ่อยๆ แต่ก็ไม่สามารถหาวัสดุฉนวนที่สามารถนำมาใช้ซ้ำได้ บจก.กู๊ดอัพ จึงได้คิดนวัตกรรม ในการหุ้มฉนวนชนิดนี้ โดยวัสดุทำจากผ้าที่กันได้ทั้งความร้อน และความชื้น ที่สำคัญคือไม่ติดไฟ เพื่อออกแบบนำมาตัดเย็บโดยใส่วัสดุที่เป็นฉนวนเข้าไปข้างในและออกแบบตัดเย็บให้เข้ากับชิ้นงานของท่านลูกค้า เช่นอุปกรณ์วาล์ว ปั้ม เครื่องอบยาง เครื่องฉีดพลาสติก เป็นต้น และด้วยประสบการณ์อันยาวนาน บจก.กู๊ดอัพ มั่นใจว่าจะสามารถช่วยท่านในการลดต้นทุน ได้เป็นอย่างดี</p>\r\n', '<p>ด้วยสถานนะการณ์ในปัจจุบันที่ต้องการลด และประหยัดพลังงานให้ได้มากที่สุด ทำให้เรามองเห็นถึงอุปกรณ์ ชิ้นส่วน และพาร์ทต่างๆ ในระบบสตีมของท่าน ที่ต้องมีการถอดเพื่อเปลี่ยน หรือบำรุงรักษาอยู่บ่อยๆ แต่ก็ไม่สามารถหาวัสดุฉนวนที่สามารถนำมาใช้ซ้ำได้ บจก.กู๊ดอัพ จึงได้คิดนวัตกรรม ในการหุ้มฉนวนชนิดนี้ โดยวัสดุทำจากผ้าที่กันได้ทั้งความร้อน และความชื้น ที่สำคัญคือไม่ติดไฟ เพื่อออกแบบนำมาตัดเย็บโดยใส่วัสดุที่เป็นฉนวนเข้าไปข้างในและออกแบบตัดเย็บให้เข้ากับชิ้นงานของท่านลูกค้า เช่นอุปกรณ์วาล์ว ปั้ม เครื่องอบยาง เครื่องฉีดพลาสติก เป็นต้น และด้วยประสบการณ์อันยาวนาน บจก.กู๊ดอัพ มั่นใจว่าจะสามารถช่วยท่านในการลดต้นทุน ได้เป็นอย่างดี</p>\r\n', 'img_6_.jpg', 1, '2021-03-14 11:43:28', '2021-03-14 12:01:32'),
(3, 'duct-n-ventilation', 'งานประกอบ ติดตั้ง ท่อดักท์ และท่อแอร์', 'งานประกอบ ติดตั้ง ท่อดักท์ และท่อแอร์', 'Duct & Ventilation', '<p>ระบบระบายอากาศ และส่งลม ถือเป็นระบบสำคัญในทุกสถานที่ เพราะเราทุกคนต้องหายใจ และสัมผัสอากาศเหล่านี้เข้าสู่ร่างกาย ดังนั้นนอกจากวัสดุที่ใช้จะต้องดีและปลอดภัยแล้ว ช่างผู้ติดตั้งก็จะต้องมีความชำนาญในการประกอบ และติดตั้ง ทีมงานของ บจก.กู๊ดอัพ ได้ผ่านการฝึกอบรมการติดตั้ง ท่อดักท์ ท่อแอร์ และระบบท่อระบายอากาศมาเป็นอย่างดี เข้าใจถึงปัญหาในการใช้งาน ท่านจึงมั่นใจได้ว่า ทีมงานของเราจะทำงานประกอบ ติดตั้ง ท่อดักท์ ท่อแอร์ และท่อส่งลม ต่างๆ ด้วยความแข็งแรง สวยงาม และอยู่ในงบประมาณที่ประหยัดสูงสุด</p>\r\n', '<p>ระบบระบายอากาศ และส่งลม ถือเป็นระบบสำคัญในทุกสถานที่ เพราะเราทุกคนต้องหายใจ และสัมผัสอากาศเหล่านี้เข้าสู่ร่างกาย ดังนั้นนอกจากวัสดุที่ใช้จะต้องดีและปลอดภัยแล้ว ช่างผู้ติดตั้งก็จะต้องมีความชำนาญในการประกอบ และติดตั้ง ทีมงานของ บจก.กู๊ดอัพ ได้ผ่านการฝึกอบรมการติดตั้ง ท่อดักท์ ท่อแอร์ และระบบท่อระบายอากาศมาเป็นอย่างดี เข้าใจถึงปัญหาในการใช้งาน ท่านจึงมั่นใจได้ว่า ทีมงานของเราจะทำงานประกอบ ติดตั้ง ท่อดักท์ ท่อแอร์ และท่อส่งลม ต่างๆ ด้วยความแข็งแรง สวยงาม และอยู่ในงบประมาณที่ประหยัดสูงสุด</p>\r\n', 'img_1_.jpg', 1, '2021-03-14 11:44:28', '2021-03-14 12:01:38'),
(4, 'overhaul-n-installation-machine', 'งานซ่อม ประกอบ เเละติดตั้งเครื่องจักร', 'งานซ่อม ประกอบ เเละติดตั้งเครื่องจักร', 'Overhaul&Installation Machine', '<p>จากความพร้อมในทุกๆด้าน และประสบการณ์ของทีมงาน ความพร้อมในด้านอุปกรณ์ เครื่องมือ และอุปกรณ์ที่ใช้ในการขนส่งและติดตั้งเครื่องจักรขนาดใหญ่ อีกทั้งทีมงานที่ได้รับการฝึกอบรมในเรื่องการทำงานภายใต้กฏแห่งความปลอดภัยอันสูงสุด ทำให้ บจก.กู๊ดอัพ สามารถทำงานรื้อถอน ย้าย ซ่อม และติดตั้งเครื่องจักร ให้กับท่านได้เป็นอย่างดี และด้วยความพร้อมในทุกๆด้านนี่เอง ทำให้เรากำหนดเวลาในการทำงานให้กับท่านได้อย่างแม่นยำ อีกทั้งบริการหลังการขายการติดตั้ง ที่เป็นแบบมืออาชีพ ทำให้ท่านมั่นใจได้ว่างานที่ บจก.กู๊ดอัพ ซ่อม หรือติดตั้งทุกๆงานจะได้มาตฐานการทำงานที่ดี ทั้งก่อนและหลังการทำงาน ภายไต้กฏแห่งความปลอดภัยสูงสุด</p>\r\n', '<p>จากความพร้อมในทุกๆด้าน และประสบการณ์ของทีมงาน ความพร้อมในด้านอุปกรณ์ เครื่องมือ และอุปกรณ์ที่ใช้ในการขนส่งและติดตั้งเครื่องจักรขนาดใหญ่ อีกทั้งทีมงานที่ได้รับการฝึกอบรมในเรื่องการทำงานภายใต้กฏแห่งความปลอดภัยอันสูงสุด ทำให้ บจก.กู๊ดอัพ สามารถทำงานรื้อถอน ย้าย ซ่อม และติดตั้งเครื่องจักร ให้กับท่านได้เป็นอย่างดี และด้วยความพร้อมในทุกๆด้านนี่เอง ทำให้เรากำหนดเวลาในการทำงานให้กับท่านได้อย่างแม่นยำ อีกทั้งบริการหลังการขายการติดตั้ง ที่เป็นแบบมืออาชีพ ทำให้ท่านมั่นใจได้ว่างานที่ บจก.กู๊ดอัพ ซ่อม หรือติดตั้งทุกๆงานจะได้มาตฐานการทำงานที่ดี ทั้งก่อนและหลังการทำงาน ภายไต้กฏแห่งความปลอดภัยสูงสุด</p>\r\n', 'img_5_.jpg', 1, '2021-03-14 11:44:47', '2021-03-14 12:01:43');

-- --------------------------------------------------------

--
-- Table structure for table `db_service`
--

CREATE TABLE `db_service` (
  `id` int(20) NOT NULL,
  `service_name` varchar(100) DEFAULT '',
  `service_name_en` varchar(255) DEFAULT NULL,
  `category` int(5) DEFAULT NULL,
  `img_cover` varchar(150) DEFAULT NULL,
  `is_active` int(2) DEFAULT 1,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `db_service`
--

INSERT INTO `db_service` (`id`, `service_name`, `service_name_en`, `category`, `img_cover`, `is_active`, `created`, `updated`) VALUES
(1, 'หุ้มฉนวน&แจ็คเก็ต เพื่อกันความร้อน ความเย็น และเสียง', '', 1, 'img_18_.jpg', 1, '2021-03-14 12:13:34', '2021-03-14 12:19:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_about_img`
--
ALTER TABLE `db_about_img`
  ADD PRIMARY KEY (`about_id`,`img_name`);

--
-- Indexes for table `db_about_us`
--
ALTER TABLE `db_about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_admin`
--
ALTER TABLE `db_admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `db_banner`
--
ALTER TABLE `db_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_category`
--
ALTER TABLE `db_category`
  ADD PRIMARY KEY (`id`,`url_name`);

--
-- Indexes for table `db_service`
--
ALTER TABLE `db_service`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `db_about_us`
--
ALTER TABLE `db_about_us`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `db_admin`
--
ALTER TABLE `db_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `db_banner`
--
ALTER TABLE `db_banner`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `db_category`
--
ALTER TABLE `db_category`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `db_service`
--
ALTER TABLE `db_service`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
