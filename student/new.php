<?php require_once('../templates/header.php');?>
<?php require_once('../templates/navbar.php') ?>
<div align="center">
<div class="columns">
	<div class="column"></div>
	<div class="column is-three-quarters">
		<form method="post" action="../src/student_controller/create.php">
			<div class="field">
  				<label class="label">New Student</label>
 				<div class="control">
 					<h1>Nombre</h1>
    				<input class="input" type="text" placeholder="name" name="fullname">
  				</div>
  				<br>
  				<div class="control">
  					<h1>Birthday</h1>
    				<input class="input" type="date" placeholder="birthdate" name="birthdate">
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