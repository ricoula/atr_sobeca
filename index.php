<!doctype html>

<?php include("header.php"); ?>
<html>
	<head>
		<title>Connexion</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
	</head>

	<body>
	<div class="container">
	<div class="row">
			<div class="span12">
				<fieldset id="login_field">
					<div id="legend">
						<legend class="login_label">Connexion<label class="login_label pull-right">SOBECA</label></legend>	
					</div>
					<div class="control-group">
					<!-- Username -->
						<label class="control-label login_label"  for="username" >Nom d'utilisateur</label>
					<div class="controls">
						<input type="text" id="username" name="username" placeholder="" class="input-xlarge form-control">
					</div>
					</div>
					<div class="control-group">
					<!-- Password-->
						<label class="control-label login_label" for="password">Mot de passe</label>
					<div class="controls">
						<input type="password" id="password" name="password" placeholder="" class="input-xlarge form-control">
					</div>
					</div>
					<div class="control-group">
					<!-- Button -->
					<div class="controls">
						<button class="btn btn-primary pull-right" id="login_in">Se connecter</button>
					</div>
					</div>
				</fieldset>
			</div>
		</div>
	</div>
        <?php include("footer.php"); ?>
	</body>
</html>