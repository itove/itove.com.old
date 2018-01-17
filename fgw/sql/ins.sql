truncate users;
insert into users (username, passwd, oid) values
	('ludeng',		'123',1),
	('caizheng',	'123',2),
	('jiaoyu',		'123',3),
	('nongye',		'123',4),
	('jiaotong',	'123',5),
	('wujia',		'123',6),
	('zhaoshang',	'123',7),
	('jingxin',		'123',8),
	('keji',		'123',9),
	('shangwu',		'123',10),
	('fagai',		'123',11),
	('tongji',		'123',12);

truncate organization;
insert into organization (oname,uid) values
	('路灯管理处',	1),
	('财政局',		2),
	('教育局',		3),
	('农业局',		4),
	('交通局',		5),
	('物价局',		6),
	('招商局',		7),
	('经信局',		8),
	('科技局',		9),
	('商务局',		10),
	('发改局',		11),
	('统计局',		12);

update projects set oid=8,uid=8 where o_incharge like "%经信局%";
update projects set oid=9,uid=9 where o_incharge like "%科技局%";
update projects set oid=10,uid=10 where o_incharge like "%商务局%";
update projects set oid=11,uid=11 where o_incharge like "%发改局%";

truncate progress;
insert into progress (pid) select pid from projects;
update progress set fill_state="abc", phase="开工", fillby="王晓明", phone="13507280000", progress="正在装修", problem="暂无";

truncate setting;
INSERT INTO `setting` (`id`, `s_key`, `value`, `name`) VALUES
(1, 'lockday', '25', '锁定日期'),
(2, 'a', 'aa', 'aaa'),
(3, 'b', 'bb', 'bbb'),
(4, 'c', 'cc', 'ccc');
