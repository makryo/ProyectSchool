<body bgcolor="#f3f1f1"></body>
			<?php require_once('../templates/header.php');?>
			<?php require_once('../templates/navbar.php'); ?>
			<?php require_once('../src/database/conection.php'); 

			//$id = $_GET['id'];

			$sql='select su.id, su.name, tc.fullname, sy.Start_date, sy.End_date, su.is_active 
from teacher tc, subject su, subject_year sy
where sy.teacher_id = tc.id
and sy.subject_id = su.id
and tc.id order by su.name asc;';

			if($pdo)
			{
				$result = $pdo->query($sql);
			}

			?>
			<div class="columns">
				<div class="column"></div>
					<div class="column is-full" align="center">
						<h1>Lista de cursos</h1>
						<br>
						<table class="table is-fullwidth">
            				<tr>
            					<th>curso</th>
            					<th>Instructor</th>
            					<th>Estado</th>
            					<th>Detalles</th>
            				</tr>
								<?php
								foreach ($result as $value) {
				
				
								echo "<tr><td>" . $value["name"] . "</td>" .
									"<td>" . $value["fullname"] . "</td>";

									$fecha_actual = strtotime(date("d-m-Y"));
									$fecha_entrada = strtotime($value["End_date"]);
                	
									if($fecha_actual > $fecha_entrada)
            						{
            							echo "<td>Finalizado</td>";
           							}

            						else
            						{
            							echo "<td>En curso</td>";
            						}
                				

                				echo "<td><a class='button is-info is-active' href='listDetalle.php?id=".$value["id"]. "&nombre=" . $value["fullname"]."&curso=". $value["name"]."&initial=" . $value["Start_date"]. "&finish=". $value["End_date"]."'>Visualizar</a></td>";
                				}
								?>
								            
			</table>	
			<?php
				echo "hola xd";
			?>
			</div>
		<div class="column"></div>

	</div>
			<?php require_once('../templates/footer.php'); ?>