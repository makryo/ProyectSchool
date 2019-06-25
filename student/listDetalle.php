<body bgcolor="#f3f1f1"></body>
			<?php require_once('../templates/header.php');?>
			<?php require_once('../templates/navbar.php'); ?>
			<?php require_once('../src/database/conection.php'); 
			
			$id = $_GET['id'];

			$sql="select st.id, st.codigo, st.fullname
				from student st, subject su, subject_year sy, student_subject_year syy, year ya
				where syy.student_id = st.id
				and syy.subject_year_id = sy.id
				and sy.subject_id = su.id
				and sy.year_id = ya.id
				and su.id = '$id'";

			if($pdo)
			{
				$result = $pdo->query($sql);
			}
			?>


			<label class="label">
				<?php
				$names = $_GET['curso']; 
				echo $names; 
				?>
			</label>

			<label class="label">
				<?php
					$name = $_GET['nombre']; 
					echo $name; 
				?>
			</label>

			<br>
			<br>

			<label class="label">
				<?php
					$inicio = $_GET['initial']; 
					echo "Inicio de la clase: " . $inicio; 
				?>
			</label>

			<label class="label">
				<?php
					$inicio = $_GET['finish']; 
					echo "Fin de la clase: " . $inicio; 
				?>
			</label>

			<div class="columns">
				<div class="column"></div>
					<div class="column is-full" align="center">
						<h1>Lista de cursos</h1>
						<br>
						<table class="table is-fullwidth">
            				<tr>
            					<th>id</th>
            					<th>Codigo</th>
            					<th>Nombre</th>
            				</tr>

            				<?php
								foreach ($result as $value) {
				
				
								echo "<tr><td>" . $value["id"] . "</td>" .
									"<td>" . $value["codigo"] . "</td>" .
									"<td>" . $value["fullname"] . "</td>";
								}
									?>


            			</table>
            		</div>
				<div class="column"></div>

			</div>
			<?php 
			
			class Employee
			{
				private $name;
				private $title;

				public function getName()
				{
					return $this->name;
				}
				public function setName($name)
				{
					$this->name = $name;

				}
				public function sayHello(){
					echo "Hola, mi nombre es {$this->getName()}.";
				}
			}
			?>

			<?php require_once('../templates/footer.php'); ?>
