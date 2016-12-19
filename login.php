<?php
	if	(strlen($_REQUEST["u_name"])===0 ||
		 strlen($_REQUEST["u_pass"])===0) {
		$_REQUEST["e_txt"] = "Plese input your id and password.";
		require 'er001.php'; 
		return;
	}

	$dsn  	= 'mysql:dbname=chat;host=127.0.0.1';
	$user 	= 'root';
	$pw	  	= 'H@chiouji1';
	
	// sql write	
	$sql = 'select * from User where loginid = "'.$_REQUEST["u_name"].'"';
	
	// SQL run
	$dbh = new PDO($dsn, $user, $pw);	// connection
	$sth = $dbh->prepare($sql);			// SQL preparation
	$sth->execute();						// run
	
	// get data
	$pass;
	$isGet = false;
	while(($buff = $sth->fetch()) !== false){
		$_REQUEST["u_id"] = $buff['id'];
		$_REQUEST["u_dispname"] = $buff['dispname'];
		$pass = $buff['password'];
		$isGet = true;
	}
		
	// check id	
	if (!$isGet){ 
		$_REQUEST["e_txt"] = "Not found id.";
		require 'er001.php'; 
		return;
	}

	// check pass
	if ($_REQUEST["u_pass"] !== $pass){
		$_REQUEST["e_txt"] = "ID or Password is incorrect.";
		require 'er001.php';
		return;
	}
	
	require 'wc201.php'; 


