<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `dede_myad`;");
E_C("CREATE TABLE `dede_myad` (
  `aid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `clsid` smallint(5) NOT NULL DEFAULT '0',
  `typeid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `tagname` varchar(30) NOT NULL DEFAULT '',
  `adname` varchar(60) NOT NULL DEFAULT '',
  `timeset` smallint(6) NOT NULL DEFAULT '0',
  `starttime` int(10) unsigned NOT NULL DEFAULT '0',
  `endtime` int(10) unsigned NOT NULL DEFAULT '0',
  `normbody` text,
  `expbody` text,
  PRIMARY KEY (`aid`),
  KEY `tagname` (`tagname`,`typeid`,`timeset`,`endtime`,`starttime`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8");
E_D("replace into `dede_myad` values('1','0','0',0x696e646578546f7042616e6e657231,0xe9a696e9a1b5e9a1b6e983a8e5afbce888aae5a4a7e59bbe2d3530302a3630,'0','1297933028','1300525028',0x3c73637269707420747970653d22746578742f6a61766173637269707422207372633d22687474703a2f2f61642e64656465636d732e636f6d2f616473766965772f3f616374696f6e3d73696e676c65266b65793d66726f6e74746f7062616e6e657226636861727365743d67626b223e3c2f7363726970743e,'');");
E_D("replace into `dede_myad` values('2','0','0',0x696e646578546f7042616e6e657232,0xe9a696e9a1b5e9a1b6e983a8e5afbce888aae5b08fe59bbe2d3230302a3630,'0','1297933605','1300525605',0x3c73637269707420747970653d22746578742f6a61766173637269707422207372633d22687474703a2f2f61642e64656465636d732e636f6d2f616473766965772f3f616374696f6e3d73696e676c65266b65793d66726f6e74746f7062616e6e65723226636861727365743d67626b223e3c2f7363726970743e,'');");
E_D("replace into `dede_myad` values('3','0','0',0x696e6e6572546f7042616e6e657231,0x28e9a291e981932fe58897e8a1a829e9a1b6e983a8e5afbce888aae5a4a7e59bbe2d3530302a3630,'0','1297934052','1300526052',0x3c73637269707420747970653d22746578742f6a61766173637269707422207372633d22687474703a2f2f61642e64656465636d732e636f6d2f616473766965772f3f616374696f6e3d73696e676c65266b65793d696e6e6572746f7062616e6e65723126636861727365743d67626b223e3c2f7363726970743e,'');");
E_D("replace into `dede_myad` values('4','0','0',0x696e6e6572546f7042616e6e657232,0x28e9a291e981932fe58897e8a1a829e9a1b6e983a8e5afbce888aae5b08fe59bbe2d3230302a3630,'0','1297934104','1300526104',0x3c73637269707420747970653d22746578742f6a61766173637269707422207372633d22687474703a2f2f61642e64656465636d732e636f6d2f616473766965772f3f616374696f6e3d73696e676c65266b65793d696e6e6572746f7062616e6e65723226636861727365743d67626b223e3c2f7363726970743e,'');");
E_D("replace into `dede_myad` values('5','0','0',0x696e6465784c65667442616e6e6572,0xe9a696e9a1b5e5b7a6e4bea7e5a4a7e59bbee5b9bfe5918a2d3731322a3735,'0','1297934791','1300526791',0x3c73637269707420747970653d22746578742f6a61766173637269707422207372633d22687474703a2f2f61642e64656465636d732e636f6d2f616473766965772f3f616374696f6e3d73696e676c65266b65793d696e6465786c65667462616e6e657226636861727365743d67626b223e3c2f7363726970743e,'');");
E_D("replace into `dede_myad` values('6','0','0',0x696e64657852696768744c697470696331,0xe9a696e9a1b5e58fb3e4bea7e5b08fe59d97e59bbe312d3234302a3635,'0','1297936106','1300528106',0x3c73637269707420747970653d22746578742f6a61766173637269707422207372633d22687474703a2f2f61642e64656465636d732e636f6d2f616473766965772f3f616374696f6e3d73696e676c65266b65793d696e64657872746c69747069633126636861727365743d67626b223e3c2f7363726970743e,'');");
E_D("replace into `dede_myad` values('7','0','0',0x696e64657852696768744c697470696332,0xe9a696e9a1b5e58fb3e4bea7e5b08fe59d97e59bbe322d3234302a3635,'0','1297936768','1300528768',0x3c73637269707420747970653d22746578742f6a61766173637269707422207372633d22687474703a2f2f61642e64656465636d732e636f6d2f616473766965772f3f616374696f6e3d73696e676c65266b65793d696e64657872746c69747069633226636861727365743d67626b223e3c2f7363726970743e,'');");
E_D("replace into `dede_myad` values('8','0','0',0x696e646578666f6f7465724144,0xe9a696e9a1b5e5ba95e983a8e59bbee78987e5b9bfe5918a2d3732362a3931,'0','1297937814','1300529814',0x3c73637269707420747970653d22746578742f6a61766173637269707422207372633d22687474703a2f2f61642e64656465636d732e636f6d2f616473766965772f3f616374696f6e3d73696e676c65266b65793d696e646578666f6f746572616426636861727365743d67626b223e3c2f7363726970743e,'');");
E_D("replace into `dede_myad` values('9','0','0',0x696e6e6572666f6f7465724144,0x28e9a291e981932fe58897e8a1a829e5ba95e983a8e59bbee78987e5b9bfe5918a2d3732362a3931,'0','1297991183','1300583183',0x3c73637269707420747970653d22746578742f6a61766173637269707422207372633d22687474703a2f2f61642e64656465636d732e636f6d2f616473766965772f3f616374696f6e3d73696e676c65266b65793d696e6e6572666f6f746572616426636861727365743d67626b223e3c2f7363726970743e,'');");
E_D("replace into `dede_myad` values('10','0','0',0x696e6e6572666f6f746572414432,0xe58685e5aeb9e5ba95e983a8e59bbee78987e5b9bfe5918a2d3732362a3931,'0','1297991709','1300583709',0x3c73637269707420747970653d22746578742f6a61766173637269707422207372633d22687474703a2f2f61642e64656465636d732e636f6d2f616473766965772f3f616374696f6e3d73696e676c65266b65793d696e6e6572666f6f74657261643226636861727365743d67626b223e3c2f7363726970743e,'');");
E_D("replace into `dede_myad` values('11','0','0',0x6c69737452745069634144,0x28e9a291e981932fe58897e8a1a829e58fb3e4bea7e59bbee78987e5b9bfe5918a2d3234302a323030,'0','1297992254','1300584254',0x3c73637269707420747970653d22746578742f6a61766173637269707422207372633d22687474703a2f2f61642e64656465636d732e636f6d2f616473766965772f3f616374696f6e3d73696e676c65266b65793d6c6973747274706963616426636861727365743d67626b223e3c2f7363726970743e,'');");
E_D("replace into `dede_myad` values('12','0','0',0x636f6e74656e7452745069634144,0xe58685e5aeb9e58fb3e4bea7e59bbee78987e5b9bfe5918a2d3234302a323030,'0','1297995082','1300587082',0x3c73637269707420747970653d22746578742f6a61766173637269707422207372633d22687474703a2f2f61642e64656465636d732e636f6d2f616473766965772f3f616374696f6e3d73696e676c65266b65793d636f6e74656e747274706963616426636861727365743d67626b223e3c2f7363726970743e,'');");
E_D("replace into `dede_myad` values('13','0','0',0x6c6973745274506963414432,0x28e9a291e981932fe58897e8a1a829e58fb3e4bea7e59bbee78987e5b9bfe5918a322d3234302a323030,'0','1297996543','1300588543',0x3c73637269707420747970653d22746578742f6a61766173637269707422207372633d22687474703a2f2f61642e64656465636d732e636f6d2f616473766965772f3f616374696f6e3d73696e676c65266b65793d6c697374727470696361643226636861727365743d67626b223e3c2f7363726970743e,'');");
E_D("replace into `dede_myad` values('14','0','0',0x636f6e74656e745274506963414432,0xe58685e5aeb9e58fb3e4bea7e59bbee78987e5b9bfe5918a322d3234302a323030,'0','1297997106','1300589106',0x3c73637269707420747970653d22746578742f6a61766173637269707422207372633d22687474703a2f2f61642e64656465636d732e636f6d2f616473766965772f3f616374696f6e3d73696e676c65266b65793d636f6e74656e74727470696361643226636861727365743d67626b223e3c2f7363726970743e,'');");
E_D("replace into `dede_myad` values('15','0','0',0x636f6e74656e744d69645069634144,0xe58685e5aeb9e9a1b5e58685e5aeb9e4b8ade5b9bfe5918a2d3330302a323530,'0','1297997971','1300589971',0x3c73637269707420747970653d22746578742f6a61766173637269707422207372633d22687474703a2f2f61642e64656465636d732e636f6d2f616473766965772f3f616374696f6e3d73696e676c65266b65793d636f6e74656e746d6964706963616426636861727365743d67626b223e3c2f7363726970743e,'');");
E_D("replace into `dede_myad` values('16','0','0',0x7365617263685069634144,0xe6909ce7b4a2e9a1b5e58fb3e4bea7e5b9bfe5918a2d3330302a323638,'0','1297999720','1300591720',0x3c73637269707420747970653d22746578742f6a61766173637269707422207372633d22687474703a2f2f61642e64656465636d732e636f6d2f616473766965772f3f616374696f6e3d73696e676c65266b65793d736561726368706963616426636861727365743d67626b223e3c2f7363726970743e,'');");
E_D("replace into `dede_myad` values('17','0','0',0x696e6465785274706963416433,0xe9a696e9a1b5e58fb3e4bea7e59bbee78987e5b9bfe5918a2d3234302a323030,'0','1298000077','1300592077',0x3c73637269707420747970653d22746578742f6a61766173637269707422207372633d22687474703a2f2f61642e64656465636d732e636f6d2f616473766965772f3f616374696f6e3d73696e676c65266b65793d696e646578727470696361643326636861727365743d67626b223e3c2f7363726970743e,'');");
E_D("replace into `dede_myad` values('18','0','0',0x736561726368546f7042616e6e6572,0xe6909ce7b4a2e9a1b5e99da2e9a1b6e983a862616e6e6572e5b9bfe5918a2d3330302a3430,'0','1298012954','1300604954',0x3c73637269707420747970653d22746578742f6a61766173637269707422207372633d22687474703a2f2f61642e64656465636d732e636f6d2f616473766965772f3f616374696f6e3d73696e676c65266b65793d736561726368746f7062616e6e657226636861727365743d67626b223e3c2f7363726970743e,'');");
E_D("replace into `dede_myad` values('19','0','0',0x636f6e74656e74546f7042616e6e657231,0xe58685e5aeb9e9a1b6e983a8e5afbce888aae5a4a7e59bbe2d3530302a3630,'0','1298017655','1300609655',0x3c73637269707420747970653d22746578742f6a61766173637269707422207372633d22687474703a2f2f61642e64656465636d732e636f6d2f616473766965772f3f616374696f6e3d73696e676c65266b65793d6374656e74747062616e6e65723126636861727365743d67626b223e3c2f7363726970743e,'');");
E_D("replace into `dede_myad` values('20','0','0',0x636f6e74656e74546f7042616e6e657232,0xe58685e5aeb9e9a1b6e983a8e5afbce888aae5b08fe59bbe2d3230302a3630,'0','1298017688','1300609688',0x3c73637269707420747970653d22746578742f6a61766173637269707422207372633d22687474703a2f2f61642e64656465636d732e636f6d2f616473766965772f3f616374696f6e3d73696e676c65266b65793d6374656e74747062616e6e65723226636861727365743d67626b223e3c2f7363726970743e,'');");

require("../../inc/footer.php");
?>