USE chat;

CREATE TABLE Chat
(
	id			int,
	dispname	varchar(32),
	log 		varchar(64),
	chat_date	datetime,
	PRIMARY KEY(id)
);
