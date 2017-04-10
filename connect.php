<?php

$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

$connection = new mysqli($server, $username, $password, $db);
//$connection = mysqli_connect('localhost', 'root', '');
if(!$connection){
	die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'heroku_62a0125c46763db');
if(!$select_db){
	die("Database Selection Failed" . mysqli_error($connection));
}
?>