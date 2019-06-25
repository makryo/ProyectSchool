<body bgcolor="#f3f1f1"></body>

<?php require_once('../templates/header.php');?>
<?php require_once('../templates/navbar.php') ?>
<?php require_once('../src/database/conection.php');

$id = $_GET['id'];

$sql = "select su.name, sy.Start_date,sy.End_date, ya.year, su.is_active, syy.score 
from subject su, year ya, student_subject_year syy, student st, subject_year sy 
where syy.student_id = st.id 
and syy.subject_year_id = sy.id
and sy.subject_id = su.id
and sy.year_id = ya.id 
and st.id = '$id'";
			if($pdo){

			$result = $pdo->query($sql);
		}
?>
<label class="label">
	<?php
		$name = $_GET['nombre']; 
		echo $name; 
	?>
</label>

<label class="label">
	<?php  
		$code = $_GET['codigo'];
		echo $code;
	?>
</label>
<div class="columns">
	<div class="column"></div>
		<div class="column is-full" align="center">
			<h1>Lista de cursos</h1>
			<br>
			<table class="table is-fullwidth">
            <tr>
            	<th>curso</th>
            	<th>fecha de inicio</th>
            	<th>fecha de finalizacion</th>
            	<th>ciclo</th>
            	<th>Estado</th>
            	<th>Nota</th>
            </tr>

			<?php
			foreach ($result as $value) {
				
				
			echo "<tr><td>" . $value["name"] . "</td>" .
					"<td>" . $value["Start_date"] . "</td>" .
					"<td>" . $value["End_date"]. "</td>" .
                	"<td>" . $value["year"] . "</td>";
                	
                	

					$fecha_actual = strtotime(date("d-m-Y"));
					$fecha_entrada = strtotime($value["End_date"]);
                	//$var = $value["is_active"];
					if($fecha_actual > $fecha_entrada)
            		{
            			
            			echo "<td>Finalizado</td>";
           			}

            		else
            		{
            			echo "<td>En curso</td>";
            		} ;
                    /*"<td>" . $var . "</td>" .*/
                    
                    $fecha_actual = strtotime(date("d-m-Y"));
					$fecha_entrada = strtotime($value["End_date"]);
                	//$var = $value["is_active"];
					if($fecha_actual > $fecha_entrada)
                    {
                    	echo "<td>" . $value["score"] . "</td></tr>";
                    }
                    else
                    {
                    	echo "<td>NNI</td></tr>";
                    }
                    

                }

            ?>
            </table>


		</div>
		<div class="column"></div>

	</div>
	<?php require_once('../templates/footer.php'); ?>

