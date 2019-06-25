<?php 
require_once('../database/conection.php');
$fullname = $_POST['fullname'];
$birthdate = $_POST['birthdate'];

$sql = "insert into student values(null,'2019-00005','$fullname', '$birthdate', 1)";
if (isset($pdo) == false) {
	
}
else
{

	$pdo->exec($sql);
	header("Location: ../../student/list.php");
}
 ?>
