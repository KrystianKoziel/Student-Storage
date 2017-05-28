<?php
	session_start();

	if((isset($_SESSION['logged'])) && ($_SESSION['logged'] == true)){
		header('Location: main.php');
		exit();
	} else {
		echo '<script type="text/javascript" src="load.js">',
     'wyloguj();',
     '</script>';
	}
?>

<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Logowanie</title>

	<meta name="description" content="Twój najlepszy remainder" />
	<meta name="keywords" content="słowa, kluczowe, wypisane, po, porzecinku" />

	<link rel="stylesheet" href="css/style.css" type="text/css" />

</head>
<body>
<div class="login-page">
  <div class="form">
    <form class="login-form" id="login-form" action="login.php" method="post">
      <input type="email" placeholder="e-mail" name = "email" id="email" required/>
      <input type="password" placeholder="hasło" name = "password" id="password" required/>
      <input type="submit" value="Login">
      <p class="message">Nie masz konta? <a href="rejestracja.html">Zarejestruj się!</a></p>
    </form>
  </div>
</div>
</body>
</html>
