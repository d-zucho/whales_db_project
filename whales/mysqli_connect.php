<?php /** @noinspection PhpDefineCanBeReplacedWithConstInspection */
	// This creates a connection to the whale_db
	// Set the access details as constants:
	DEFINE ('DB_USER', 'dannylibor');
	DEFINE ('DB_PASSWORD', 'sanFran1');
	DEFINE ('DB_HOST', 'localhost');
	DEFINE ('DB_NAME', 'whales_db');

	// make the connection
	$dbcon = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die('Could not connect to MySQL: '.
		mysqli_connect_error());

	// Set the encoding
mysqli_set_charset($dbcon, 'utf8');

