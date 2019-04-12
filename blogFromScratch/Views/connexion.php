<?php include_once('Controller/login.php') ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<meta charset="utf-8">
	<title>My Blog From Scratch Connexion</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
		<div class="row text-center">
			<div class="col-lg-12">
				<h1>Home Connexion</h1>
				<a href="?route=home">Home</a>
				<br/>

				<form action=" " method="post">
					<label for="login">Login* :</label>
					<input type="text" name="login" id="login" value="" />
					<label for="password"> Password* :</label>
					<input type="password" name="password" id="password" value="" />
					<input type="submit" name="submit" value="Connexion" />
				</form>
				<?php
				 if(isset($errorMessage))
				 {
					 echo $errorMessage;
				 }
				 ?>

				<p>* veuillez remplir le formulaire obligatoirement pour vous connectez à votre arrière-guichet.</p>
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
