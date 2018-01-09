truncate users;
truncate organization;
insert into users (username, passwd, oid) values
	('ludeng','123',1),
	('caizheng','123',2),
	('jiaoyu','123',3),
	('nongye','123',4),
	('jiaotong','123',5),
	('wujia','123',6),
	('zhaoshang','123',7),
	('tongji','123',8);

insert into organization (oname,a) values
	('路灯管理处','ludeng'),
	('财政局','caizheng'),
	('教育局','jiaoyu'),
	('农业局','nongye'),
	('交通局','jiaotong'),
	('物价局','wujia'),
	('招商局','zhaoshang'),
	('统计局','tongji');
