<!-DOCTYPE->
<html lang=" pt-BR ">
<head>
<meta charset=" UTF-8 ">
<meta name=" viewport " content="width=width-device, initial-scale=1.0">

<title>Entrada</title>

<link rel="stylesheet" href="pessoaentra.css">
</head>

<body>
                                          <h1>Entrar</h1>
<form name="Entrada" method="POST" action="pessoaentra.php">

<fieldset>
<label>Escreva seu nome de usuário cadastrado:</label>
<input type="text" name="Pessoa" value=""><br>

<label>Sua senha:</label>
<input type="password" name="Senha" value=""><br>
</fieldset><br>
<button type="submit"  >Enviar</button><br>

</form>

<?php 

//$nome='etecia'; $secreta='etecia238';


if($_POST['Pessoa']=='etecia'&&$_POST['Senha']=='etecia238'){
	
	echo"<br/>";
	echo"<h2>Autenticação sucedida!</h2><br />";
	
}

else{
	echo"<br/>";
	echo"<h2>Você não está permitido a dar continuidade!</h2><br/>";
}


?>

</body>
</html>








