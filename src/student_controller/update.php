<?php  require_once('../database/conection.php'); 


$id = $_POST['id'];
$name = $_POST['fullname'];
$date = $_POST['birthdate'];


$sql = "update student set fullname = '$name', birthdate = '$date' where id = '$id'";

$pdo->exec($sql);
header('Location: ../../student/list.php');

?>