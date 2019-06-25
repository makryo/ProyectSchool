<?php require_once('../src/database/conection.php'); ?>

<?php  
 $del = $_GET["id"];

                try {
                	
                	$sql = "delete from student where id='$del'";
                	$pdo->exec($sql);
                	

                } 
                catch (Exception $e) {
                
                echo $sql . "<br>" . $e->getMessage();	
                }

                $conn = null;
?>

<?php header("Location: http://192.168.7.118/ProyectSchool/student/list.php"); ?>

