<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `dede_sys_set`;");
E_C("CREATE TABLE `dede_sys_set` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `sname` char(20) NOT NULL DEFAULT '',
  `items` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `dede_sys_set` values('1',0x6e6174757265,0xe680a7e6a0bce5a496e590912ce680a7e6a0bce58685e590912ce6b4bbe6b3bce5bc80e69c972ce6b289e9bb98e5afa1e8a8802ce5b9bde9bb982ce7a8b3e9878d2ce8bdbbe6b5ae2ce586b2e58aa82ce59d9ae5bcba2ce88486e5bcb12ce5b9bce7a89a2ce68890e7869f2ce883bde8afb4e4bc9ae981932ce887aae7a7812ce79c9fe8af9a2ce78bace7ab8b2ce4be9de8b5962ce4bbbbe680a72ce887aae8b49f2ce887aae58d912ce6b8a9e69f94e4bd93e8b4b42ce7a59ee7bb8fe8b4a82ce68b9ce987912ce5b08fe5bf83e7bfbce7bfbc2ce69ab4e8ba812ce58094e5bcba2ce98086e69da5e9a1bae58f972ce4b88de68b98e5b08fe88a822ce5a986e5a986e5a688e5a6882ce4baa4e99985e5b9bfe6b39b2ce8b1aae788bd2ce5aeb3e7be9e2ce78ba1e78cbee59684e58f982ce880bfe79bb42ce8999ae4bcaa2ce4b990e8a782e59091e4b88a2ce682b2e8a782e6b688e69e812ce98381e98381e5afa1e6aca22ce5ada4e583bb2ce99abee4bba5e790a2e7a3a82ce88386e5b08fe68095e4ba8b2ce695a2e5819ae695a2e5bd932ce58aa9e4babae4b8bae4b9902ce88081e5ae9e2ce5ae88e697a72ce6958fe6849f2ce8bf9fe9929d2ce6ada6e696ad2ce69e9ce696ad2ce4bc98e69f94e5afa1e696ad2ce69ab4e58a9be580bee590912ce588bbe896842ce68d9fe4babae588a9e5b7b12ce99984e5bab8e9a38ee99b852ce697b6e5969ce697b6e682b22ce682a3e5be97e682a3e5a4b12ce5bfabe8a880e5bfabe8afad2ce8b1aae694bee4b88de7be812ce5a49ae68481e59684e6849f2ce5beaae8a784e8b988e79fa9);");
E_D("replace into `dede_sys_set` values('2',0x6c616e6775616765,0xe699aee9809ae8af9d2ce4b88ae6b5b7e8af9d2ce5b9bfe4b89ce8af9d2ce88bb1e8afad2ce697a5e8afad2ce99fa9e8afad2ce6b395e8afad2ce6848fe5a4a7e588a9e8afad2ce5beb7e8afad2ce8a5bfe78fade78999e8afad2ce4bf84e8afad2ce998bfe68b89e4bcafe8afad);");

require("../../inc/footer.php");
?>