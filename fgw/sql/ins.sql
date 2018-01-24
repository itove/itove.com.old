truncate users;
insert into users (uname, passwd, oid, rid) values
	('zhong',		'202cb962ac59075b964b07152d234b70',1,3),
	('gong',		'202cb962ac59075b964b07152d234b70',1,3),
	('tou',			'202cb962ac59075b964b07152d234b70',1,3),
	('lingdao',		'202cb962ac59075b964b07152d234b70',1,2),
	('nong',		'202cb962ac59075b964b07152d234b70',1,3),
	('ban',			'202cb962ac59075b964b07152d234b70',1,3),
	('jiao',		'202cb962ac59075b964b07152d234b70',1,3),
	('she',			'202cb962ac59075b964b07152d234b70',1,3),
	('diqu',		'202cb962ac59075b964b07152d234b70',1,3),
	('caizheng',	'202cb962ac59075b964b07152d234b70',2,1),
	('jiaoyu',		'202cb962ac59075b964b07152d234b70',3,1),
	('nongye',		'202cb962ac59075b964b07152d234b70',4,1),
	('jiaotong',	'202cb962ac59075b964b07152d234b70',5,1),
	('wujia',		'202cb962ac59075b964b07152d234b70',6,1),
	('zhaoshang',	'202cb962ac59075b964b07152d234b70',7,1),
	('jingxin',		'202cb962ac59075b964b07152d234b70',8,1),
	('keji',		'202cb962ac59075b964b07152d234b70',9,1),
	('shangwu',		'202cb962ac59075b964b07152d234b70',10,1),
	('ludeng',		'202cb962ac59075b964b07152d234b70',11,1),
	('tongji',		'202cb962ac59075b964b07152d234b70',12,1);

truncate organization;
insert into organization (oname,uid) values
	('发改委',		1),
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
(3, 'remind_days', '5', '提醒天数'),
(4, 'c', 'cc', 'ccc');

truncate role;
INSERT INTO `role` (`rid`, `role`, `rname`) VALUES
(1, 'user', '填报'),
(2, 'admin', '检阅'),
(3, 'super', '管理');
