<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/style_login_page.css">
	</head>
	<body>
		<img src="images/background1.png">
		
			<div  id="black_back_div"></div>
			
					<div class="login__form">
					<form action="checkLogin.php" method="post">
					
						<input type="text" id="login__input_name" name="username" placeholder="Identifiant" required/>
		
						<input type="password" id="login__input_pass" name="password" placeholder="Mot De Pass" required/>
					
						<button type="submit" name="submit" id="login__submit">Se connecter</button>

						<p id="login__issue_text">on cas de probleme <a href="www.google.com">Connecter nous</a> !</p>
					</form>
				</div>
	</body>
</html>