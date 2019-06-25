<?php 

$host = 'localhost';
$dbname = 'schooldb';
$user = 'debian-sys-maint';
$pass = 'ws1SC0JreanoNAJ8';

try {
	

$pdo = new PDO("mysql:host=$host;dbname=$dbname; charset=utf8", $user, $pass);

$pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


} 
catch (Exception $e) {
echo $e->getMessage();	
}
 ?>