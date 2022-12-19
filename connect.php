<?php 
	$connect =new mysqli(hostname:  'localhost', username: 'root', password: '', database: 'test', port: 3306);
	if (!$connect) {
		die('Error connect to DataBase!');
	}
