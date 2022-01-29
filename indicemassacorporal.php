<!-DOCTYPE html->
<html lang="pt-BR">
<head>
<meta charset=" UTF-8 " >

<meta name= " viewport " content= " width=width-device, initial-scale=1.0 " >

<title>Pesagem e Saúde</title>

<link rel=" stylesheet " href=" indicemassacorporal.css ">
</head>
<body>
<h1>Preencha abaixo seu peso e sua altura para descobrir a sua situação de Índice de Massa Corporal !
<fieldset>
<form name="PesoAltura" method="GET" action="indicemassacorporal.php">
<label>Qual o seu peso?</label>
<input type="text" name="peso" value=""><br>
<label>Qual a sua altura?</label>
<input type="text" name="altura" value=""><br>
</fieldset>
<br>

<input type="submit" name="Envio" value="Enviar"><br>



<?php
$Peso=$_GET['peso'];
$Altura=$_GET['altura'];
$IndicedeMassaCorporal=$Peso/($Altura * $Altura);



if(isset($_GET['peso'])&&isset($_GET['altura'])){
	
	
	
if($IndicedeMassaCorporal>25){
	
	echo"<br />Você está acima do peso saudável!";
	echo"Representa-se pelo nhonho:";
	echo"<br />";
	
	include("Imagem-nhonho.html");


    echo"<br />";
	
	
}
else if($IndicedeMassaCorporal<=15){
	echo"<br />Você está abaixo do peso!";
    echo"Representa-se pelo Seu Madruga:<br />";
	
    echo"<br />";
	
	include("Imagem-madruga.html");

    echo"<br />";
  
 
}
else if($IndicedeMassaCorporal>15&&$IndicedeMassaCorporal<=25){
	echo"<br />Você está saudável pela sua pesagem!";
	echo"Representa-se pelo Chaves:";
	
	echo"<br />";
	
	include("Imagem-chaves.html");
	
	echo"<br />";
}
}


else{ echo"Insira todos os dados";}



	


    
?>
<body/>
<html/>



