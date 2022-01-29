<!-DOCTYPE html->

<head>
<html lang="pt-BR">
<meta charset="UTF-8">
<meta name="viewport" content="width=width-device, initial-scale=1.0">
<title>Retângulo</title>

<link rel="stylesheet" href=" retangular.css"><!--E agora?-->
</head>
<body>
<h1>Aqui se faz o cálculo da Área e Perímetro de um Retângulo</h1>
<br>
<form name="AreaePerímetrodeumRetângulo" method="get" action="retangular.php">
<fieldset>
<label>Quanto vale o Lado Maior?</label><br><!--Qual outro Componente pode inserir essa Pergunta nesse local com compactuação com o Formulário?-->
<input type="text" name="LadoMaior" value=""></input><br>
<br>
<label>Quanto vale o Lado Menor?</label><br><!--Qual outro Componente pode inserir essa Pergunta nesse local com compactuação com o Formulário?--> 
<input type="text" name="LadoMenor" value=""></input><br>
<br>
<input type="submit" name="Envio" value="Enviar">
<br>
</fieldset>
</form>



<?php

$LadoMaior=$_GET['LadoMaior'];
$LadoMenor=$_GET['LadoMenor'];
$area=$LadoMenor*$LadoMaior;
$perimetro=($LadoMenor * 2)+($LadoMaior*2);
printf ("A área é   ".$area);
echo"<br />";
printf ("O perímetro é  ".$perimetro);

?>
</body>
</html>
