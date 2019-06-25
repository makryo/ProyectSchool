<?php require_once('../templates/header.php');?>
<?php require_once('../templates/navbar.php') ?>
<div align="center">
<div class="columns">
	<div class="column"></div>
	<div class="column is-three-quarters">
		<form method="post" action="../src/student_controller/update.php">
			<div class="field">
  				<label class="label">Actualizar</label>
           <input type="hidden" name="id" value="<?php echo($_GET['id'])?>">
 				<div class="control">
 					<h1>Nombre</h1>
    				<input class="input" type="text" placeholder="name" name="fullname" value="<?php echo($_GET['nombre'])?>">
  				</div>
  				<br>
  				<div class="control">
  					<h1>Fecha de nacimiento</h1>
    				<input class="input" type="date" placeholder="birthdate" name="birthdate" value="<? echo($_GET['fecha'])?>">
  				</div>
  				<br>
  				<p class="buttons">
  					<button class="button is-success">
  				
    				<span class="icon is-small">
     				<i class="fas fa-check"></i>
   					</span>
  					<span>Save</span>
 					
 				</button>
  				<a class="button is-danger is-outlined">
    				<span>Delete</span>
    				<span class="icon is-small">
      				<i class="fas fa-times"></i>
    			</span>
  				</a>
  				</p>
  				<p class="help">This is a help text</p>
			</div>
			<div class="column"></div>
		</form>

	</div>
</div>
</div>