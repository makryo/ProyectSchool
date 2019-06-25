<body bgcolor="#f3f1f1"></body>
			<?php require_once('../templates/header.php');?>
			<?php require_once('../templates/navbar.php') ?>
			<?php require_once('../src/database/conection.php');

			$sql = "select * from student";
			if($pdo){

			$result = $pdo->query($sql);
		}
			?>
			
			<div class="columns">
				<div class="column"></div>
				<div class="column is-full" align="center">
					<h1>Lista de estudiantes</h1>
					<br>
					<table class="table is-fullwidth">
						<thead>
                			<tr>
                				<th> <abbr title="codigo del alumno"></abbr>codigo</th>
                    			<th>Nombre</th>
                    			<th>Fecha de nacimiento</th>
                    			<th colspan="3">Opciones</th>
                    		</tr>
                		</thead>
							<?php
							foreach ($result as $value) {
							echo /*"<tr><td><figure class='image is-32x32'>"."<img class='is-rounded' src='https://bulma.io/images/placeholders/128x128.png'>".
                           		"</figure></td>".*/
					 	
                           		"<tr><td>" . $value["codigo"] . "</td>" .
                        		"<td>" . $value["fullname"] . "</td>" . 
                        		"<td>" . $value["birthdate"] . "</td>";

                        	echo "<td><a class='button is-success is-active' href='listNotas.php?id=".$value["id"] . "&nombre=" . $value["fullname"]."&codigo=". $value["codigo"]. "'>Visualizar</a></td>" .
                        		"<td><a class='button is-warning' href='update.php?id=" . 
                        		$value["id"] . 
                        		"&codigo=" . $value["codigo"] .
                        		"&nombre=" . $value["fullname"] . 
                        		"&fecha=" . $value["birthdate"] . 
                        		"'>Editar</a></td>" . 
                        		"<td><a class='button is-danger' href='delete.php?id=". 
                        		$value["id"] . "'>Eliminar</a>
                        		</td>
                        		</tr>";
					 			} 
					 		?>

					</table>


				</div>
				<div class="column"></div>

			</div>
			<?php require_once('../templates/footer.php') ?>
	