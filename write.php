<?php
	$dsn  	= 'mysql:dbname=chat;host=127.0.0.1';
	$user 	= 'root';
	$pw	  	= 'H@chiouji1';
	
	// sql write
	print ($_REQUEST["u_id"]);
	$sql = 'INSERT INTO Chat(id, dispname, log, chat_date) VALUES('.$_REQUEST["u_id"].', "'.$_REQUEST["u_name"].'", "'.$_REQUEST["l_text"].'", now())';
	
	// SQL run
	$dbh = new PDO($dsn, $user, $pw);	// login
	$sth = $dbh->prepare($sql);			// SQL preparation
	$sth->execute();						// run

