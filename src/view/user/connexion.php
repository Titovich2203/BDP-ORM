<!DOCTYPE html>
<html>
<head>
	<title>BANQUE DU PEUPLE</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="/mesprojets/BDP-ORM/public/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/mesprojets/BDP-ORM/public/fontawesome/css/all.css">
    <link rel="stylesheet" type="text/css" href="/mesprojets/BDP-ORM/public/css/style1.css">
</head>
<body>
    
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Sign In</h3>
				<div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
				</div>
			</div>
			<div class="card-body">
				<form method = "POST" action="/mesprojets/BDP-ORM/User/identification">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="username" name="login" required>
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" name="mdp" class="form-control" placeholder="password" required>
					</div>
					<div class="row align-items-center remember">
						<input type="checkbox" id="remember">Remember Me
					</div>
					<div class="form-group">
						<input type="submit" name="connexion" value="Login" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Don't have an account?<a href="#">Sign Up</a>
				</div>
				<div class="d-flex justify-content-center">
					<?php
						if(isset($data) && $data == false)
						{
							?>
							<a href="#" style="color:red">ERREUR DE CONNEXION</a>
					<?php	}
					else{ ?>
					<a href="#">Forgot your password?</a>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="/mesprojets/BDP-ORM/public/js/jquery.js"></script>
<script src="/mesprojets/BDP-ORM/public/js/popper.js"></script>
<script src="/mesprojets/BDP-ORM/public/bootstrap/js/bootstrap.min.js"></script>
<script src="/mesprojets/BDP-ORM/public/js/script.js"></script>
</body>
</html>