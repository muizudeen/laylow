<?php 

	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$connection = mysql_connect($host, $user, $pass);
	$connectDb = mysql_select_db('consult', $connection);

  ?>
