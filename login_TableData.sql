CREATE DATABASE chat;
USE chat;

CREATE TABLE User
(
	id int,
	loginid	varchar(32)	NOT NULL,
	password	varchar(16)	NOT NULL,
	dispname	varchar(32)	NOT NULL,
	del_flag	bool			DEFAULT FALSE,
	lastlogin_date	datetime,
	PRIMARY KEY(id)
);

INSERT INTO User(id, loginid, password, dispname, del_flag, lastlogin_date)
VALUES	(1,	'tom',		'nosushinolife', 	'GOD', 	false, '2016-12-19 10:00:00'),
		(2,	'mike',	'apple2016', 		'Taro', 	false, '2016-12-19 10:05:00'),
		(3,	'mary',	'c@ndyclash',		'Yoko', 	false, '2016-12-19 10:10:00');

