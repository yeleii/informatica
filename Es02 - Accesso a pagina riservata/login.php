<html>
<head>
<title>Login</title>
</head>
<body>
	
	<h3>controllo credenziali</h3>
	<?php
	$usr=$_POST["username"];
	$pwd=$_POST["password"];
	if($usr!="admin" || $pwd!="123"){
	?>
	<h4>errore accesso negato</h4>
	<?php
	} else {
		echo "<h4>Accesso effetuato ".$usr;
	}
	?>
</body>
</html>