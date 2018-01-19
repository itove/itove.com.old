truncate users;
insert into users (uname, passwd, oid, rid) values
	('fagai',		'123',1,1),
	('caizheng',	'123',2,1),
	('jiaoyu',		'123',3,1),
	('nongye',		'123',4,1),
	('jiaotong',	'123',5,1),
	('wujia',		'123',6,1),
	('zhaoshang',	'123',7,1),
	('jingxin',		'123',8,1),
	('keji',		'123',9,1),
	('shangwu',		'123',10,1),
	('ludeng',		'123',11,1),
	('tongji',		'123',12,1);

truncate organization;
insert into organization (oname,uid) values
	('发改局',		1),
	('财政局',		2),
	('教育局',		3),
	('农业局',		4),
	('交通局',		5),
	('物价局',		6),
	('招商局',		7),
	('经信局',		8),
	('科技局',		9),
	('商务局',		10),
	('路灯处',		11),
	('统计局',		12);

--
-- table `projects` inserted by uploading spreadsheet
--
update projects set oid=8,uid=8 where o_incharge like "%经信局%";
update projects set oid=9,uid=9 where o_incharge like "%科技局%";
update projects set oid=10,uid=10 where o_incharge like "%商务局%";
update projects set oid=11,uid=11 where o_incharge like "%发改局%";

truncate progress;
insert into progress (pid) select pid from projects;
update progress set fill_state="abc", phase="开工", fillby="王晓明", phone="13507280000", progress="正在装修", problem="暂无";

truncate setting;
INSERT INTO `setting` (`sid`, `s_key`, `value`, `sname`) VALUES
(1, 'lockday', '25', '锁定日期'),
(2, 'sitename', '茅箭区投资和项目直报平台', '网站名称'),
(3, 'b', 'bb', 'bbb'),
(4, 'c', 'cc', 'ccc');

truncate role;
INSERT INTO `role` (`rid`, `role`, `rname`) VALUES
(1, 'user', '用户'),
(2, 'admin', '管理'),
(4, 'super', '超级');
