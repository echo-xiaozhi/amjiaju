<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `dede_sysconfig`;");
E_C("CREATE TABLE `dede_sysconfig` (
  `aid` smallint(8) unsigned NOT NULL DEFAULT '0',
  `varname` varchar(20) NOT NULL DEFAULT '',
  `info` varchar(100) NOT NULL DEFAULT '',
  `groupid` smallint(6) NOT NULL DEFAULT '1',
  `type` varchar(10) NOT NULL DEFAULT 'string',
  `value` text,
  PRIMARY KEY (`varname`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `dede_sysconfig` values('1',0x6366675f62617365686f7374,0xe7ab99e782b9e6a0b9e7bd91e59d80,'1',0x737472696e67,0x2f);");
E_D("replace into `dede_sysconfig` values('2',0x6366675f636d7370617468,0x44656465434d53e5ae89e8a385e79baee5bd95,'2',0x737472696e67,'');");
E_D("replace into `dede_sysconfig` values('3',0x6366675f636f6f6b69655f656e636f6465,0x636f6f6b6965e58aa0e5af86e7a081,'2',0x737472696e67,0x4d57395147764b554667714f3272626b597831684739675378524870);");
E_D("replace into `dede_sysconfig` values('4',0x6366675f696e64657875726c,0xe7bd91e9a1b5e4b8bbe9a1b5e993bee68ea5,'1',0x737472696e67,0x2f);");
E_D("replace into `dede_sysconfig` values('5',0x6366675f6261636b75705f646972,0xe695b0e68daee5a487e4bbbde79baee5bd95efbc88e59ca864617461e79baee5bd95e58685efbc89,'2',0x737472696e67,0x6261636b757064617461);");
E_D("replace into `dede_sysconfig` values('6',0x6366675f696e6465786e616d65,0xe4b8bbe9a1b5e993bee68ea5e5908d,'1',0x737472696e67,0xe4b8bbe9a1b5);");
E_D("replace into `dede_sysconfig` values('7',0x6366675f7765626e616d65,0xe7bd91e7ab99e5908de7a7b0,'1',0x737472696e67,0x64656465);");
E_D("replace into `dede_sysconfig` values('8',0x6366675f61646d696e656d61696c,0xe7bd91e7ab99e58f91e4bfa1454d41494c,'2',0x737472696e67,0x61646d696e4061646d696e2e636f6d);");
E_D("replace into `dede_sysconfig` values('9',0x6366675f68746d6c5f656469746f72,0x48746d6ce7bc96e8be91e599a8efbc88636b656469746f722ce99c80e8a68166636be79a84e794a8e688b7e58fafe4bba5e58ebbe5ae98e7bd91e4b88be8bdbdefbc89,'2',0x737472696e67,0x636b656469746f72);");
E_D("replace into `dede_sysconfig` values('10',0x6366675f617263646972,0xe69687e6a1a348544d4ce9bb98e8aea4e4bf9de5ad98e8b7afe5be84,'1',0x737472696e67,0x2f61);");
E_D("replace into `dede_sysconfig` values('11',0x6366675f6d65646961735f646972,0xe59bbee789872fe4b88ae4bca0e69687e4bbb6e9bb98e8aea4e8b7afe5be84,'1',0x737472696e67,0x2f75706c6f616473);");
E_D("replace into `dede_sysconfig` values('12',0x6366675f6464696d675f7769647468,0xe7bca9e795a5e59bbee9bb98e8aea4e5aebde5baa6,'3',0x6e756d626572,0x323430);");
E_D("replace into `dede_sysconfig` values('13',0x6366675f6464696d675f686569676874,0xe7bca9e795a5e59bbee9bb98e8aea4e9ab98e5baa6,'3',0x6e756d626572,0x313830);");
E_D("replace into `dede_sysconfig` values('63',0x6366675f616c62756d5f7769647468,0xe59bbee99b86e9bb98e8aea4e698bee7a4bae59bbee78987e79a84e5a4a7e5b08f,'3',0x6e756d626572,0x383030);");
E_D("replace into `dede_sysconfig` values('15',0x6366675f696d6774797065,0xe59bbee78987e6b58fe8a788e599a8e69687e4bbb6e7b1bbe59e8b,'3',0x737472696e67,0x6a70677c6769667c706e67);");
E_D("replace into `dede_sysconfig` values('16',0x6366675f736f667474797065,0xe58581e8aeb8e4b88ae4bca0e79a84e8bdafe4bbb6e7b1bbe59e8b,'3',0x62737472696e67,0x7a69707c677a7c7261727c69736f7c646f637c78736c7c7070747c777073);");
E_D("replace into `dede_sysconfig` values('17',0x6366675f6d6564696174797065,0xe58581e8aeb8e79a84e5a49ae5aa92e4bd93e69687e4bbb6e7b1bbe59e8b,'3',0x62737472696e67,0x7377667c6d70677c6d70337c726d7c726d76627c776d767c776d617c7761767c6d69647c6d6f76);");
E_D("replace into `dede_sysconfig` values('18',0x6366675f737065636e6f7465,0xe4b893e9a298e79a84e69c80e5a4a7e88a82e782b9e695b0,'2',0x6e756d626572,0x36);");
E_D("replace into `dede_sysconfig` values('19',0x6366675f6c6973745f73796d626f6c,0xe6a08fe79baee4bd8de7bdaee79a84e997b4e99a94e7aca6e58fb7,'2',0x737472696e67,0x203e20);");
E_D("replace into `dede_sysconfig` values('20',0x6366675f6e6f74616c6c6f77737472,0xe7a681e794a8e8af8de8afadefbc88e7b3bbe7bb9fe5b086e79bb4e68ea5e5819ce6ada2e794a8e688b7e58aa8e4bd9cefbc893c62722f3ee794a87ce58886e5bc80efbc8ce4bd86e4b88de8a681e59ca8e7bb93e5b0bee58aa07c,'5',0x62737472696e67,0xe99d9ee585b87ce889bee6bb8be797857ce998b3e797bf);");
E_D("replace into `dede_sysconfig` values('21',0x6366675f666565646261636b636865636b,0xe8af84e8aebae58f8ae79599e8a88028e698af2fe590a629e99c80e5aea1e6a0b8,'5',0x626f6f6c,0x4e);");
E_D("replace into `dede_sysconfig` values('22',0x6366675f6b6579776f72645f7265706c616365,0xe585b3e994aee5ad97e69bbfe68da228e698af2fe590a629e4bdbfe794a8e69cace58a9fe883bde4bc9ae5bdb1e5938d48544d4ce7949fe68890e9809fe5baa6,'2',0x626f6f6c,0x59);");
E_D("replace into `dede_sysconfig` values('23',0x6366675f66636b5f7868746d6c,0xe7bc96e8be91e599a828e698af2fe590a629e4bdbfe794a85848544d4c,'1',0x626f6f6c,0x4e);");
E_D("replace into `dede_sysconfig` values('24',0x6366675f64665f7374796c65,0xe6a8a1e69dbfe9bb98e8aea4e9a38ee6a0bc,'1',0x737472696e67,0x64656661756c74);");
E_D("replace into `dede_sysconfig` values('25',0x6366675f6d756c74695f73697465,0x28e698af2fe590a629e694afe68c81e5a49ae7ab99e782b9efbc8ce5bc80e590afe6ada4e9a1b9e5908ee99984e4bbb6e38081e6a08fe79baee8bf9ee68ea5e380816172636c697374e58685e5aeb9e590afe794a8e7bb9de5afb9e7bd91e59d80,'2',0x626f6f6c,0x4e);");
E_D("replace into `dede_sysconfig` values('58',0x6366675f726d5f72656d6f7465,0xe8bf9ce7a88be59bbee78987e69cace59cb0e58c96,'7',0x626f6f6c,0x59);");
E_D("replace into `dede_sysconfig` values('27',0x6366675f646564655f6c6f67,0x28e698af2fe590a629e5bc80e590afe7aea1e79086e697a5e5bf97,'2',0x626f6f6c,0x4e);");
E_D("replace into `dede_sysconfig` values('28',0x6366675f706f7765726279,0xe7bd91e7ab99e78988e69d83e4bfa1e681af,'1',0x62737472696e67,0x436f707972696768742026636f70793b20323030322d323031312044454445434d532e20e7bb87e6a2a6e7a791e68a8020e78988e69d83e68980e69c89);");
E_D("replace into `dede_sysconfig` values('722',0x6366675f6a756d705f6f6e6365,0xe8b7b3e8bdace7bd91e59d80e698afe590a6e79bb4e68ea5e8b7b3e8bdacefbc9fefbc88e590a6e58899e698bee7a4bae4b8ade8bdace9a1b5efbc89,'7',0x626f6f6c,0x59);");
E_D("replace into `dede_sysconfig` values('723',0x6366675f7461736b5f707764,0xe7b3bbe7bb9fe8aea1e58892e4bbbbe58aa1e5aea2e688b7e7abafe8aeb8e58fafe5af86e7a0813c62722f3e28e99c80e8a681e5aea2e688b7e7abafefbc8ce9809ae5b8b8e4b88de4bc9ae5a4aae9878de8a68129,'7',0x737472696e67,'');");
E_D("replace into `dede_sysconfig` values('29',0x6366675f61726373707469746c65,0x28e698af2fe590a629e5bc80e590afe58886e9a1b5e6a087e9a298efbc8ce5bc80e590afe4bc9ae5bdb1e5938d48544d4ce7949fe68890e9809fe5baa6,'6',0x626f6f6c,0x4e);");
E_D("replace into `dede_sysconfig` values('30',0x6366675f6172636175746f7370,0x28e698af2fe590a629e5bc80e590afe995bfe69687e7aba0e887aae58aa8e58886e9a1b5,'6',0x626f6f6c,0x4e);");
E_D("replace into `dede_sysconfig` values('31',0x6366675f6172636175746f73705f73697a65,0xe69687e7aba0e887aae58aa8e58886e9a1b5e5a4a7e5b08fefbc88e58d95e4bd8d3a204befbc89,'6',0x6e756d626572,0x35);");
E_D("replace into `dede_sysconfig` values('32',0x6366675f61756f745f6465736372697074696f6e,0xe887aae58aa8e69198e8a681e995bfe5baa6efbc88302d323530efbc8c30e8a1a8e7a4bae4b88de590afe794a8efbc89,'7',0x6e756d626572,0x323430);");
E_D("replace into `dede_sysconfig` values('33',0x6366675f6674705f686f7374,0x465450e4b8bbe69cba,'2',0x737472696e67,'');");
E_D("replace into `dede_sysconfig` values('34',0x6366675f6674705f706f7274,0x465450e7abafe58fa3,'2',0x6e756d626572,0x3231);");
E_D("replace into `dede_sysconfig` values('35',0x6366675f6674705f75736572,0x465450e794a8e688b7e5908d,'2',0x737472696e67,'');");
E_D("replace into `dede_sysconfig` values('36',0x6366675f6674705f707764,0x465450e5af86e7a081,'2',0x737472696e67,'');");
E_D("replace into `dede_sysconfig` values('37',0x6366675f6674705f726f6f74,0xe7bd91e7ab99e6a0b9e59ca8465450e4b8ade79a84e79baee5bd95,'2',0x737472696e67,0x2f);");
E_D("replace into `dede_sysconfig` values('38',0x6366675f6674705f6d6b646972,0xe698afe590a6e5bcbae588b6e794a8465450e5889be5bbbae79baee5bd95,'2',0x626f6f6c,0x4e);");
E_D("replace into `dede_sysconfig` values('39',0x6366675f666565646261636b5f636b,0xe8af84e8aebae58aa0e9aa8ce8af81e7a081e9878de7a1aee8aea4,'5',0x626f6f6c,0x59);");
E_D("replace into `dede_sysconfig` values('40',0x6366675f6c6973745f736f6e,0xe4b88ae7baa7e58897e8a1a8e698afe590a6e58c85e590abe5ad90e7b1bbe58685e5aeb9,'6',0x626f6f6c,0x59);");
E_D("replace into `dede_sysconfig` values('41',0x6366675f6d625f6f70656e,0xe698afe590a6e5bc80e590afe4bc9ae59198e58a9fe883bd,'4',0x626f6f6c,0x4e);");
E_D("replace into `dede_sysconfig` values('42',0x6366675f6d625f616c62756d,0xe698afe590a6e5bc80e590afe4bc9ae59198e59bbee99b86e58a9fe883bd,'4',0x626f6f6c,0x59);");
E_D("replace into `dede_sysconfig` values('43',0x6366675f6d625f75706c6f6164,0xe698afe590a6e58581e8aeb8e4bc9ae59198e4b88ae4bca0e99d9ee59bbee78987e99984e4bbb6,'4',0x626f6f6c,0x59);");
E_D("replace into `dede_sysconfig` values('44',0x6366675f6d625f75706c6f61645f73697a65,0xe4bc9ae59198e4b88ae4bca0e69687e4bbb6e5a4a7e5b08f284b29,'4',0x6e756d626572,0x31303234);");
E_D("replace into `dede_sysconfig` values('45',0x6366675f6d625f73656e64616c6c,0xe698afe590a6e5bc80e694bee4bc9ae59198e5afb9e887aae5ae9ae4b989e6a8a1e59e8be68a95e7a8bf,'4',0x626f6f6c,0x59);");
E_D("replace into `dede_sysconfig` values('46',0x6366675f6d625f726d646f776e,0xe698afe590a6e68a8ae4bc9ae59198e68c87e5ae9ae79a84e8bf9ce7a88be69687e6a1a3e4b88be8bdbde588b0e69cace59cb0,'4',0x626f6f6c,0x59);");
E_D("replace into `dede_sysconfig` values('47',0x6366675f636c695f74696d65,0xe69c8de58aa1e599a8e697b6e58cbae8aebee7bdae,'2',0x6e756d626572,0x38);");
E_D("replace into `dede_sysconfig` values('48',0x6366675f6d625f6164646f6e74797065,0xe4bc9ae59198e99984e4bbb6e8aeb8e58fafe79a84e7b1bbe59e8b,'4',0x62737472696e67,0x7377667c6d70677c6d70337c726d7c726d76627c776d767c776d617c7761767c6d69647c6d6f767c7a69707c7261727c646f637c78736c7c7070747c777073);");
E_D("replace into `dede_sysconfig` values('49',0x6366675f6d625f6d6178,0xe4bc9ae59198e99984e4bbb6e680bbe5a4a7e5b08fe99990e588b6284d4229,'4',0x6e756d626572,0x353030);");
E_D("replace into `dede_sysconfig` values('20',0x6366675f7265706c616365737472,0xe69bbfe68da2e8af8de8afadefbc88e8af8de8afade4bc9ae8a2abe69bbfe68da2e688902a2a2aefbc893c62722f3ee794a87ce58886e5bc80efbc8ce4bd86e4b88de8a681e59ca8e7bb93e5b0bee58aa07c,'5',0x62737472696e67,0xe5a5b9e5a6887ce5ae83e5a6887ce4bb96e5a6887ce4bda0e5a6887ce58ebbe6adbb7ce8b4b1e4baba);");
E_D("replace into `dede_sysconfig` values('719',0x6366675f6d616b65696e646578,0xe58f91e5b883e69687e7aba0e5908ee9a9ace4b88ae69bb4e696b0e7bd91e7ab99e4b8bbe9a1b5,'6',0x626f6f6c,0x4e);");
E_D("replace into `dede_sysconfig` values('51',0x6366675f6b6579776f72645f6c696b65,0xe4bdbfe794a8e585b3e994aee8af8de585b3e8bf9ee69687e7aba0,'6',0x626f6f6c,0x4e);");
E_D("replace into `dede_sysconfig` values('52',0x6366675f696e6465785f6d6178,0xe7bd91e7ab99e4b8bbe9a1b5e8b083e794a8e587bde695b0e69c80e5a4a7e7b4a2e5bc95e69687e6a1a3e695b03c62723ee4b88de98082e794a8e4ba8ee7bb8fe5b8b8e58d95e6a08fe79baee98787e99b86e8bf87e5a49ae58685e5aeb9e79a84e7bd91e7ab993c62723ee4b88de590afe794a8e69cace9a1b9e6ada4e580bce8aebee7bdaee4b8ba30e58db3e58faf,'6',0x6e756d626572,0x3130303030);");
E_D("replace into `dede_sysconfig` values('53',0x6366675f696e6465785f6361636865,0x6172636c697374e6a087e7adbee8b083e794a8e7bc93e5ad983c6272202f3e283020e4b88de590afe794a8efbc8ce5a4a7e4ba8e30e580bce4b8bae5a49ae5b091e7a79229,'6',0x6e756d626572,0x3836343030);");
E_D("replace into `dede_sysconfig` values('54',0x6366675f74706c6361636865,0xe698afe590a6e590afe794a8e6a8a1e69dbfe7bc93e5ad98,'6',0x626f6f6c,0x59);");
E_D("replace into `dede_sysconfig` values('55',0x6366675f74706c63616368655f646972,0xe6a8a1e69dbfe7bc93e5ad98e79baee5bd95,'6',0x737472696e67,0x2f646174612f74706c6361636865);");
E_D("replace into `dede_sysconfig` values('56',0x6366675f6d616b657369676e5f6361636865,0xe58f91e5b8832fe4bfaee694b9e58d95e4b8aae69687e6a1a3e698afe590a6e4bdbfe794a8e8b083e794a8e7bc93e5ad98,'6',0x626f6f6c,0x4e);");
E_D("replace into `dede_sysconfig` values('59',0x6366675f6172635f64656c6c696e6b,0xe588a0e999a4e99d9ee7ab99e58685e993bee68ea5,'7',0x626f6f6c,0x4e);");
E_D("replace into `dede_sysconfig` values('60',0x6366675f6172635f6175746f706963,0xe68f90e58f96e7acace4b880e5bca0e59bbee78987e4bd9ce4b8bae7bca9e795a5e59bbe,'7',0x626f6f6c,0x59);");
E_D("replace into `dede_sysconfig` values('61',0x6366675f6172635f6175746f6b6579776f7264,0xe887aae58aa8e68f90e58f96e585b3e994aee5ad97,'7',0x626f6f6c,0x59);");
E_D("replace into `dede_sysconfig` values('62',0x6366675f7469746c655f6d61786c656e,0xe69687e6a1a3e6a087e9a298e69c80e5a4a7e995bfe5baa63c62723ee694b9e6ada4e58f82e695b0e5908ee99c80e8a681e6898be5b7a5e4bfaee694b9e695b0e68daee8a1a8,'7',0x6e756d626572,0x3630);");
E_D("replace into `dede_sysconfig` values('64',0x6366675f636865636b5f7469746c65,0xe58f91e5b883e69687e6a1a3e697b6e698afe590a6e6a380e6b58be9878de5a48de6a087e9a298,'7',0x626f6f6c,0x59);");
E_D("replace into `dede_sysconfig` values('65',0x6366675f616c62756d5f726f77,0xe59bbee99b86e5a49ae8a18ce5a49ae58897e6a0b7e5bc8fe9bb98e8aea4e8a18ce695b0,'3',0x6e756d626572,0x33);");
E_D("replace into `dede_sysconfig` values('66',0x6366675f616c62756d5f636f6c,0xe59bbee99b86e5a49ae8a18ce5a49ae58897e6a0b7e5bc8fe9bb98e8aea4e58897e695b0,'3',0x6e756d626572,0x34);");
E_D("replace into `dede_sysconfig` values('67',0x6366675f616c62756d5f7061676573697a65,0xe59bbee99b86e5a49ae9a1b5e5a49ae59bbee6af8fe9a1b5e698bee7a4bae69c80e5a4a7e695b0,'3',0x6e756d626572,0x3132);");
E_D("replace into `dede_sysconfig` values('68',0x6366675f616c62756d5f7374796c65,0xe59bbee99b86e9bb98e8aea4e6a0b7e5bc8f3c6272202f3e31e4b8bae5a49ae9a1b5e5a49ae59bbe2c32e4b8bae5a49ae9a1b5e58d95e59bbe2c33e4b8bae7bca9e795a5e59bbee58897e8a1a8,'3',0x6e756d626572,0x32);");
E_D("replace into `dede_sysconfig` values('69',0x6366675f616c62756d5f64647769647468,0xe59bbee99b86e9bb98e8aea4e7bca9e795a5e59bbee5a4a7e5b08f,'3',0x6e756d626572,0x323030);");
E_D("replace into `dede_sysconfig` values('70',0x6366675f6d625f6e6f74616c6c6f77,0xe4b88de58581e8aeb8e6b3a8e5868ce79a84e4bc9ae591986964,'4',0x62737472696e67,0x7777772c6262732c6674702c6d61696c2c757365722c75736572732c61646d696e2c61646d696e6973747261746f72);");
E_D("replace into `dede_sysconfig` values('71',0x6366675f6d625f69646d696e,0xe794a8e688b76964e69c80e5b08fe995bfe5baa6,'4',0x6e756d626572,0x33);");
E_D("replace into `dede_sysconfig` values('72',0x6366675f6d625f7077646d696e,0xe794a8e688b7e5af86e7a081e69c80e5b08fe995bfe5baa6,'4',0x6e756d626572,0x33);");
E_D("replace into `dede_sysconfig` values('73',0x6366675f6d645f696475726c,0xe698afe590a6e4b8a5e6a0bce99990e5ae9ae4bc9ae59198e799bbe5bd9569643c62723ee58581e8aeb8e4bc9ae59198e4bdbfe794a8e4ba8ce7baa7e59f9fe5908de5bf85e9a1bbe8aebee7bdaee6ada4e9a1b9,'4',0x626f6f6c,0x4e);");
E_D("replace into `dede_sysconfig` values('74',0x6366675f6d625f72616e6b,0xe6b3a8e5868ce4bc9ae59198e9bb98e8aea4e7baa7e588ab3c62723e5be4bc9ae59198e69d83e99990e7aea1e79086e4b8ad5de69fa5e79c8be7baa7e588abe4bba3e8a1a8e79a84e695b0e5ad97,'4',0x6e756d626572,0x3130);");
E_D("replace into `dede_sysconfig` values('76',0x6366675f666565646261636b5f74696d65,0xe4b8a4e6aca1e8af84e8aebae887b3e5b091e997b4e99a94e697b6e997b428e7a792e9929f29,'5',0x6e756d626572,0x3330);");
E_D("replace into `dede_sysconfig` values('77',0x6366675f666565646261636b5f6e756d6970,0xe6af8fe4b8aa4950e4b880e5b08fe697b6e58685e69c80e5a4a7e8af84e8aebae695b0,'5',0x6e756d626572,0x3330);");
E_D("replace into `dede_sysconfig` values('78',0x6366675f6d645f6d61696c74657374,0xe698afe590a6e99990e588b6456d61696ce58faae883bde6b3a8e5868ce4b880e4b8aae5b890e58fb7,'4',0x626f6f6c,0x4e);");
E_D("replace into `dede_sysconfig` values('79',0x6366675f6d625f7370616365737461,0xe4bc9ae59198e4bdbfe794a8e69d83e99990e5bc80e9809ae78ab6e680813c62723e282d313020e982aee4bbb6e9aa8ce8af81202d3120e6898be5b7a5e5aea1e6a0b82c203020e6b2a1e99990e588b629,'4',0x6e756d626572,0x2d3130);");
E_D("replace into `dede_sysconfig` values('728',0x6366675f6d625f616c6c6f77726567,0xe698afe590a6e58581e8aeb8e696b0e4bc9ae59198e6b3a8e5868c,'4',0x626f6f6c,0x59);");
E_D("replace into `dede_sysconfig` values('729',0x6366675f6d625f61646d696e6c6f636b,0xe698afe590a6e7a681e6ada2e8aebfe997aee7aea1e79086e59198e5b890e58fb7e79a84e7a9bae997b4,'4',0x626f6f6c,0x4e);");
E_D("replace into `dede_sysconfig` values('81',0x6366675f7664636f64655f6d656d626572,0xe4bc9ae59198e68a95e7a8bfe698afe590a6e4bdbfe794a8e9aa8ce8af81e7a081,'5',0x626f6f6c,0x59);");
E_D("replace into `dede_sysconfig` values('83',0x6366675f6d625f636b7469746c65,0xe4bc9ae59198e68a95e7a8bfe698afe590a6e6a380e6b58be9878de5a48de6a087e9a298,'5',0x626f6f6c,0x59);");
E_D("replace into `dede_sysconfig` values('84',0x6366675f6d625f65646974646179,0xe68a95e7a8bfe5a49ae995bfe697b6e997b4e5908ee4b88de883bde5868de4bfaee694b95be5a4a95d,'5',0x6e756d626572,0x37);");
E_D("replace into `dede_sysconfig` values('729',0x6366675f73656e646172635f73636f726573,0xe68a95e7a8bfe58fafe88eb7e58f96e7a7afe58886,'5',0x6e756d626572,0x3130);");
E_D("replace into `dede_sysconfig` values('88',0x6366675f6361696361695f737562,0xe8a2abe8b8a9e689a3e999a4e69687e7aba0e5a5bde8af84e5baa6,'5',0x6e756d626572,0x32);");
E_D("replace into `dede_sysconfig` values('89',0x6366675f6361696361695f616464,0xe8a2abe9a1b6e689a3e999a4e69687e7aba0e5a5bde8af84e5baa6,'5',0x6e756d626572,0x32);");
E_D("replace into `dede_sysconfig` values('90',0x6366675f666565646261636b5f616464,0xe8afa6e7bb86e5a5bde8af84e58fafe88eb7e5a5bde8af84e5baa6,'5',0x6e756d626572,0x35);");
E_D("replace into `dede_sysconfig` values('91',0x6366675f666565646261636b5f737562,0xe8afa6e7bb86e681b6e8af84e689a3e999a4e5a5bde8af84e5baa6,'5',0x6e756d626572,0x35);");
E_D("replace into `dede_sysconfig` values('730',0x6366675f73656e6466625f73636f726573,0xe58f82e4b88ee8af84e8aebae58fafe88eb7e7a7afe58886,'5',0x6e756d626572,0x33);");
E_D("replace into `dede_sysconfig` values('92',0x6366675f7365617263685f6d6178,0xe69c80e5a4a7e6909ce7b4a2e6a380e69fa5e69687e6a1a3e695b0,'6',0x6e756d626572,0x3530303030);");
E_D("replace into `dede_sysconfig` values('93',0x6366675f7365617263685f6d61787263,0xe69c80e5a4a7e8bf94e59b9ee6909ce7b4a2e7bb93e69e9ce695b0,'6',0x6e756d626572,0x333030);");
E_D("replace into `dede_sysconfig` values('94',0x6366675f7365617263685f74696d65,0xe6909ce7b4a2e997b4e99a94e697b6e997b428e7a7922fe5afb9e7bd91e7ab99e68980e69c89e794a8e688b729,'6',0x6e756d626572,0x33);");
E_D("replace into `dede_sysconfig` values('95',0x6366675f62616964756e6577735f6c696d6974,0xe799bee5baa6e696b0e997bb786d6ce69bb4e696b0e696b0e997bbe695b0e9878f20e69c80e5a4a7313030,'8',0x737472696e67,0x313030);");
E_D("replace into `dede_sysconfig` values('223',0x6366675f736d74705f706f7274,0x736d7470e69c8de58aa1e599a8e7abafe58fa3,'2',0x737472696e67,0x3235);");
E_D("replace into `dede_sysconfig` values('221',0x6366675f73656e646d61696c5f6279736d7470,0xe698afe590a6e590afe794a8736d7470e696b9e5bc8fe58f91e98081e982aee4bbb6,'2',0x626f6f6c,0x59);");
E_D("replace into `dede_sysconfig` values('222',0x6366675f736d74705f736572766572,0x736d7470e69c8de58aa1e599a8,'2',0x737472696e67,0x736d74702e71712e636f6d);");
E_D("replace into `dede_sysconfig` values('224',0x6366675f736d74705f757365726d61696c,0x534d5450e69c8de58aa1e599a8e79a84e794a8e688b7e982aee7aeb1,'2',0x737472696e67,0x646573646576407669702e71712e636f6d);");
E_D("replace into `dede_sysconfig` values('225',0x6366675f736d74705f75736572,0x534d5450e69c8de58aa1e599a8e79a84e794a8e688b7e5b890e58fb7,'2',0x737472696e67,0x646573646576);");
E_D("replace into `dede_sysconfig` values('226',0x6366675f736d74705f70617373776f7264,0x534d5450e69c8de58aa1e599a8e79a84e794a8e688b7e5af86e7a081,'2',0x737472696e67,0x3732363034343468757869616f);");
E_D("replace into `dede_sysconfig` values('96',0x6366675f75706461746570657269,0xe799bee5baa6e696b0e997bb786d6ce69bb4e696b0e697b6e997b420efbc88e58d95e4bd8defbc9ae58886e9929fefbc89,'8',0x737472696e67,0x3135);");
E_D("replace into `dede_sysconfig` values('227',0x6366675f6f6e6c696e655f74797065,0xe59ca8e7babfe694afe4bb98e7bd91e585b3e7b1bbe59e8b,'2',0x737472696e67,0x6e7073);");
E_D("replace into `dede_sysconfig` values('706',0x6366675f75706c6f61645f737769746368,0xe588a0e999a4e69687e7aba0e69687e4bbb6e5908ce697b6e588a0e999a4e79bb8e585b3e99984e4bbb6e69687e4bbb6,'2',0x626f6f6c,0x59);");
E_D("replace into `dede_sysconfig` values('708',0x6366675f72657772697465,0xe698afe590a6e4bdbfe794a8e4bcaae99d99e68081,'2',0x626f6f6c,0x4e);");
E_D("replace into `dede_sysconfig` values('707',0x6366675f616c6c7365617263685f6c696d6974,0xe7bd91e7ab99e585a8e5b180e6909ce7b4a2e697b6e997b4e99990e588b6,'2',0x737472696e67,0x31);");
E_D("replace into `dede_sysconfig` values('709',0x6366675f64656c657465,0xe69687e7aba0e59b9ee694b6e7ab9928e698af2fe590a629e5bc80e590af,'2',0x626f6f6c,0x59);");
E_D("replace into `dede_sysconfig` values('710',0x6366675f6b6579776f726473,0xe7ab99e782b9e9bb98e8aea4e585b3e994aee5ad97,'1',0x737472696e67,'');");
E_D("replace into `dede_sysconfig` values('711',0x6366675f6465736372697074696f6e,0xe7ab99e782b9e68f8fe8bfb0,'1',0x62737472696e67,'');");
E_D("replace into `dede_sysconfig` values('712',0x6366675f626569616e,0xe7bd91e7ab99e5a487e6a188e58fb7,'1',0x737472696e67,'');");
E_D("replace into `dede_sysconfig` values('713',0x6366675f6e6565645f74797065696432,0xe698afe590a6e590afe794a8e589afe6a08fe79bae,'6',0x626f6f6c,0x59);");
E_D("replace into `dede_sysconfig` values('72',0x6366675f6d625f70776474797065,0xe5898de58fb0e5af86e7a081e9aa8ce8af81e7b1bbe59e8befbc9ae9bb98e8aea4333220e28094203332e4bd8d6d6435efbc8ce58fafe98089efbc9a3c6272202f3e6c313620e2809420e5898d3136e4bd8defbc8c2072313620e2809420e5908e3136e4bd8defbc8c206d313620e2809420e4b8ade997b43136e4bd8d,'4',0x737472696e67,0x3332);");
E_D("replace into `dede_sysconfig` values('716',0x6366675f63616368655f74797065,0x696420e69687e6a1a34944efbc8c636f6e74656e7420e6a087e7adbee69c80e7bb88e58685e5aeb93c6272202f3e28e4bfaee694b9e6ada4e58f98e9878fe5908ee5bf85e9a1bbe69bb4e696b0e7b3bbe7bb9fe7bc93e5ad9829,'6',0x737472696e67,0x6964);");
E_D("replace into `dede_sysconfig` values('717',0x6366675f6d61785f66616365,0xe4bc9ae59198e4b88ae4bca0e5a4b4e5838fe5a4a7e5b08fe99990e588b628e58d95e4bd8defbc9a4b4229,'3',0x6e756d626572,0x3530);");
E_D("replace into `dede_sysconfig` values('718',0x6366675f747970656469725f6466,0xe6a08fe79baee7bd91e59d80e4bdbfe794a8e79baee5bd95e5908defbc88e4b88de698bee7a4bae9bb98e8aea4e9a1b5efbc8ce58db3e698af202f612f6162632f20e5bda2e5bc8fefbc89,'2',0x626f6f6c,0x59);");
E_D("replace into `dede_sysconfig` values('719',0x6366675f6d616b655f616e64636174,0xe58f91e8a1a8e69687e7aba0e5908ee9a9ace4b88ae69bb4e696b0e79bb8e585b3e6a08fe79bae,'6',0x626f6f6c,0x4e);");
E_D("replace into `dede_sysconfig` values('720',0x6366675f6d616b655f7072656e657874,0xe58f91e8a1a8e69687e7aba0e5908ee9a9ace4b88ae69bb4e696b0e4b88ae4b88be7af87,'6',0x626f6f6c,0x59);");
E_D("replace into `dede_sysconfig` values('721',0x6366675f666565646261636b5f666f72626964,0xe698afe590a6e7a681e6ada2e68980e69c89e8af84e8aeba28e5b086e58c85e68bace7a681e6ada2e9a1b6e8b8a9e7ad8929,'5',0x626f6f6c,0x4e);");
E_D("replace into `dede_sysconfig` values('724',0x6366675f6164646f6e5f646f6d61696e62696e64,0xe99984e4bbb6e79baee5bd95e698afe590a6e7bb91e5ae9ae4b8bae68c87e5ae9ae79a84e4ba8ce7baa7e59f9fe5908d,'7',0x626f6f6c,0x4e);");
E_D("replace into `dede_sysconfig` values('725',0x6366675f6164646f6e5f646f6d61696e,0xe99984e4bbb6e79baee5bd95e79a84e4ba8ce7baa7e59f9fe5908d,'7',0x737472696e67,'');");
E_D("replace into `dede_sysconfig` values('726',0x6366675f64665f6475747961646d696e,0xe9bb98e8aea4e8b4a3e4bbbbe7bc96e8be91286475747961646d696e29,'7',0x737472696e67,0x61646d696e);");
E_D("replace into `dede_sysconfig` values('727',0x6366675f6d625f616c6c6f776e63617263,0xe698afe590a6e58581e8aeb8e794a8e688b7e7a9bae997b4e698bee7a4bae69caae5aea1e6a0b8e69687e7aba0,'4',0x626f6f6c,0x59);");
E_D("replace into `dede_sysconfig` values('730',0x6366675f6d625f7370616365616c6c617263,0xe4bc9ae59198e7a9bae997b4e4b8ade68980e69c89e69687e6a1a3e79a84e9a291e98193494428e4b88de99990e4b8ba3029,'4',0x6e756d626572,'0');");
E_D("replace into `dede_sysconfig` values('731',0x6366675f666163655f61646473,0xe4b88ae4bca0e5a4b4e5838fe5a29ee58aa0e7a7afe58886,'5',0x6e756d626572,0x3130);");
E_D("replace into `dede_sysconfig` values('732',0x6366675f6d6f7265696e666f5f61646473,0xe5a1abe58699e8afa6e7bb86e8b584e69699e5a29ee58aa0e7a7afe58886,'5',0x6e756d626572,0x3230);");
E_D("replace into `dede_sysconfig` values('733',0x6366675f6d6f6e65795f73636f726573,0xe5a49ae5b091e7a7afe58886e58fafe4bba5e58591e68da2e4b880e4b8aae98791e5b881,'5',0x6e756d626572,0x3530);");
E_D("replace into `dede_sysconfig` values('734',0x6366675f6d625f776e616d656f6e65,0xe698afe590a6e58581e8aeb8e794a8e688b7e7ac94e5908d2fe698b5e7a7b0e9878de5a48d,'4',0x626f6f6c,0x4e);");
E_D("replace into `dede_sysconfig` values('735',0x6366675f6172635f6469726e616d65,0xe698afe590a6e58581e8aeb8e794a8e79baee5bd95e4bd9ce4b8bae69687e6a1a3e69687e4bbb6e5908d3c6272202f3ee69687e6a1a3e591bde5908de8a784e58899e99c80e694b9e4b8baefbc9a7b747970656469727d2f7b6169647d2f696e6465782e68746d6c,'7',0x626f6f6c,0x59);");
E_D("replace into `dede_sysconfig` values('736',0x6366675f70756363616368655f74696d65,0xe99c80e7bc93e5ad98e58685e5aeb9e585a8e5b180e7bc93e5ad98e697b6e997b428e7a79229,'6',0x6e756d626572,0x3336303030);");
E_D("replace into `dede_sysconfig` values('737',0x6366675f6172635f636c69636b,0xe69687e6a1a3e9bb98e8aea4e782b9e587bbe695b0282d31e8a1a8e7a4bae99a8fe69cba35302d32303029,'7',0x6e756d626572,0x2d31);");
E_D("replace into `dede_sysconfig` values('738',0x6366675f6164646f6e5f7361766574797065,0xe99984e4bbb6e4bf9de5ad98e5bda2e5bc8f28e68c8964617461e587bde695b0e697a5e69c9fe58f82e695b029,'3',0x737472696e67,0x796d64);");
E_D("replace into `dede_sysconfig` values('739',0x6366675f716b5f75706c6f61646c6974,0xe5bc82e6ada5e4b88ae4bca0e7bca9e795a5e59bbe28e7a9bae997b4e5a4aae4b88de7a8b3e5ae9ae79a84e794a8e688b7e585b3e997ade6ada4e9a1b929,'3',0x626f6f6c,0x59);");
E_D("replace into `dede_sysconfig` values('740',0x6366675f6c6f67696e5f61646473,0xe799bbe5bd95e4bc9ae59198e4b8ade5bf83e88eb7e7a7afe58886,'5',0x6e756d626572,0x32);");
E_D("replace into `dede_sysconfig` values('741',0x6366675f7573657261645f61646473,0xe4bc9ae59198e68ea8e5b9bfe88eb7e7a7afe58886,'5',0x6e756d626572,0x3130);");
E_D("replace into `dede_sysconfig` values('742',0x6366675f6464696d675f66756c6c,0xe7bca9e795a5e59bbee698afe590a6e4bdbfe794a8e5bcbae588b6e5a4a7e5b08f28e5afb9e8838ce699afe5a1abe5858529,'3',0x626f6f6c,0x4e);");
E_D("replace into `dede_sysconfig` values('743',0x6366675f6464696d675f6267636f6c6f72,0xe7bca9e795a5e59bbee7a9bae799bde8838ce699afe5a1abe58585e9a29ce889b228302de799bd2c312de9bb9129,'3',0x6e756d626572,'0');");
E_D("replace into `dede_sysconfig` values('744',0x6366675f7265706c6163655f6e756d,0xe69687e6a1a3e58685e5aeb9e5908ce4b880e585b3e994aee8af8de69bbfe68da2e6aca1e695b02830e4b8bae585a8e983a8e69bbfe68da229,'7',0x6e756d626572,0x32);");
E_D("replace into `dede_sysconfig` values('745',0x6366675f75706c69747069635f637574,0xe4b88ae4bca0e7bca9e795a5e59bbee5908ee698afe590a6e9a9ace4b88ae5bcb9e587bae8a381e589aae6a186,'3',0x626f6f6c,0x59);");
E_D("replace into `dede_sysconfig` values('746',0x6366675f616c62756d5f6d61726b,0xe59bbee99b86e698afe590a6e4bdbfe794a8e6b0b4e58db028e5b08fe59bbee4b99fe4bc9ae58f97e5bdb1e5938d29,'3',0x626f6f6c,0x4e);");
E_D("replace into `dede_sysconfig` values('747',0x6366675f6d625f66656564636865636b,0xe4bc9ae59198e58aa8e68081e698afe590a6e99c80e8a681e5aea1e6a0b8,'4',0x626f6f6c,0x4e);");
E_D("replace into `dede_sysconfig` values('748',0x6366675f6d625f6d73676973636865636b,0xe4bc9ae59198e78ab6e68081e698afe590a6e99c80e8a681e5aea1e6a0b8,'4',0x626f6f6c,0x4e);");
E_D("replace into `dede_sysconfig` values('749',0x6366675f6d625f726567696e666f,0xe6b3a8e5868ce698afe590a6e99c80e8a681e5ae8ce68890e8afa6e7bb86e8b584e69699e79a84e5a1abe58699,'4',0x626f6f6c,0x59);");
E_D("replace into `dede_sysconfig` values('750',0x6366675f72656d6f74655f73697465,0xe698afe590a6e590afe794a8e8bf9ce7a88be7ab99e782b9,'2',0x626f6f6c,0x4e);");
E_D("replace into `dede_sysconfig` values('751',0x6366675f7469746c655f73697465,0xe698afe590a6e58f91e5b883e5928ce7bc96e8be91e69687e6a1a3e697b6e8bf9ce7a88be58f91e5b88328e590afe794a8e8bf9ce7a88be7ab99e782b9e79a84e5898de68f90e4b88b29,'2',0x626f6f6c,0x4e);");
E_D("replace into `dede_sysconfig` values('752',0x6366675f6d7973716c5f74797065,0xe695b0e68daee5ba93e7b1bbe59e8befbc88e694afe68c816d7973716ce5928c6d7973716c69efbc89,'2',0x737472696e67,0x6d7973716c);");
E_D("replace into `dede_sysconfig` values('753',0x6366675f737068696e785f61727469636c65,0xe698afe590a6e590afe794a8e69687e7aba0e585a8e69687e6a380e7b4a2e58a9fe883bdefbc88e99c80e9858de7bdae737068696e78e69c8de58aa1e599a8efbc89,'7',0x626f6f6c,0x4e);");
E_D("replace into `dede_sysconfig` values('754',0x6366675f737068696e785f686f7374,0x537068696e78e69c8de58aa1e599a8e4b8bbe69cbae59cb0e59d80,'7',0x737472696e67,0x6c6f63616c686f7374);");
E_D("replace into `dede_sysconfig` values('755',0x6366675f737068696e785f706f7274,0x537068696e78e69c8de58aa1e599a8e7abafe58fa3e58fb7,'7',0x6e756d626572,0x39333132);");
E_D("replace into `dede_sysconfig` values('14',0x6366675f646f6d61696e5f636f6f6b6965,0xe8b7a8e59f9fe585b1e4baab636f6f6b6965e79a84e59f9fe5908d28e4be8be5a6823a202e64656465636d732e636f6d29,'2',0x737472696e67,'');");
E_D("replace into `dede_sysconfig` values('756',0x6366675f6d656d63616368655f656e61626c65,0xe698afe590a6e590afe794a86d656d6361636865e7bc93e5ad98efbc8ce5a682e69e9ce4b8bae590a6284e29efbc8ce9bb98e8aea4e4bdbfe794a8e69687e4bbb6e7bc93e5ad98,'6',0x626f6f6c,0x4e);");
E_D("replace into `dede_sysconfig` values('757',0x6366675f6d656d63616368655f6d635f64656661,0xe9bb98e8aea46d656d6361636865e7bc93e5ad98e69c8de58aa1e599a8e59cb0e59d80,'6',0x737472696e67,0x6d656d63616368653a2f2f3132372e302e302e313a31313231312f64656661756c74313237);");
E_D("replace into `dede_sysconfig` values('758',0x6366675f6d656d63616368655f6d635f6f7468,0xe99984e58aa06d656d6361636865e7bc93e5ad98e69c8de58aa1e599a8e59cb0e59d80,'6',0x737472696e67,'');");
E_D("replace into `dede_sysconfig` values('759',0x6366675f63726f73735f736563747970656964,0xe694afe68c81e4baa4e58f89e6a08fe79baee698bee7a4bae589afe6a08fe79baee58685e5aeb9,'7',0x626f6f6c,0x4e);");
E_D("replace into `dede_sysconfig` values('760',0x6366675f646967675f757064617465,0xe9a1b6e8b8a9e7bc93e5ad98e5bc82e6ada5e69bb4e696b0e997b4e99a94efbc8830e4b8bae4b88de7bc93e5ad98efbc89,'6',0x6e756d626572,'0');");
E_D("replace into `dede_sysconfig` values('761',0x6366675f666565646261636b5f6775657374,0xe698afe590a6e58581e8aeb8e58cbfe5908de8af84e8aeba,'5',0x626f6f6c,0x4e);");
E_D("replace into `dede_sysconfig` values('0',0x6366675f64697361626c655f66756e73,0xe6a8a1e69dbfe5bc95e6938ee7a681e794a8504850e587bde695b0,'7',0x62737472696e67,0x706870696e666f2c6576616c2c657865632c70617373746872752c7368656c6c5f657865632c73797374656d2c70726f635f6f70656e2c706f70656e2c6375726c5f657865632c6375726c5f6d756c74695f657865632c70617273655f696e695f66696c652c73686f775f736f757263652c66696c655f7075745f636f6e74656e7473);");
E_D("replace into `dede_sysconfig` values('0',0x6366675f64697361626c655f74616773,0xe6a8a1e69dbfe5bc95e6938ee7a681e794a8e6a087e7adbe,'7',0x62737472696e67,0x706870);");

require("../../inc/footer.php");
?>