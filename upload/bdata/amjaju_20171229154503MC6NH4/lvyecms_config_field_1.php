<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `lvyecms_config_field`;");
E_C("CREATE TABLE `lvyecms_config_field` (
  `fid` smallint(6) NOT NULL AUTO_INCREMENT COMMENT '自增长id',
  `fieldname` varchar(30) NOT NULL DEFAULT '' COMMENT '字段名',
  `type` varchar(10) NOT NULL DEFAULT '' COMMENT '类型,input',
  `setting` mediumtext COMMENT '其他',
  `createtime` int(10) NOT NULL DEFAULT '0' COMMENT '创建时间',
  PRIMARY KEY (`fid`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COMMENT='网站配置，扩展字段列表'");
E_D("replace into `lvyecms_config_field` values('1',0x64747a62,0x696e707574,0x613a333a7b733a353a227469746c65223b733a31323a22e59cb0e59bbee59d90e6a087223b733a343a2274697073223b733a34323a22e5a6823132302e3530393233352c33372e36343032303420e58ebbe799bee5baa6e58f96e59d90e6a087223b733a353a227374796c65223b733a303a22223b7d,'1514463010');");
E_D("replace into `lvyecms_config_field` values('2',0x7a627469746c65,0x696e707574,0x613a333a7b733a353a227469746c65223b733a31323a22e59d90e6a087e6a087e9a298223b733a343a2274697073223b733a303a22223b733a353a227374796c65223b733a303a22223b7d,'1514463036');");
E_D("replace into `lvyecms_config_field` values('3',0x7a62646a,0x7465787461726561,0x613a333a7b733a353a227469746c65223b733a32373a22e59d90e6a087e782b9e587bbe4b98be5908ee79a84e58685e5aeb9223b733a343a2274697073223b733a303a22223b733a353a227374796c65223b733a303a22223b7d,'1514463084');");
E_D("replace into `lvyecms_config_field` values('4',0x70686f6e65,0x696e707574,0x613a333a7b733a353a227469746c65223b733a31323a22e7bd91e7ab99e794b5e8af9d223b733a343a2274697073223b733a303a22223b733a353a227374796c65223b733a303a22223b7d,'1514463304');");
E_D("replace into `lvyecms_config_field` values('5',0x717164697a6869,0x696e707574,0x613a333a7b733a353a227469746c65223b733a31343a225151e993bee68ea5e59cb0e59d80223b733a343a2274697073223b733a303a22223b733a353a227374796c65223b733a303a22223b7d,'1514463317');");
E_D("replace into `lvyecms_config_field` values('6',0x62717379,0x696e707574,0x613a333a7b733a353a227469746c65223b733a31323a22e78988e69d83e68980e69c89223b733a343a2274697073223b733a303a22223b733a353a227374796c65223b733a303a22223b7d,'1514463362');");
E_D("replace into `lvyecms_config_field` values('7',0x626168,0x696e707574,0x613a333a7b733a353a227469746c65223b733a393a22e5a487e6a188e58fb7223b733a343a2274697073223b733a303a22223b733a353a227374796c65223b733a303a22223b7d,'1514463375');");
E_D("replace into `lvyecms_config_field` values('8',0x6773647a,0x696e707574,0x613a333a7b733a353a227469746c65223b733a31323a22e585ace58fb8e59cb0e59d80223b733a343a2274697073223b733a303a22223b733a353a227374796c65223b733a303a22223b7d,'1514463385');");

require("../../inc/footer.php");
?>