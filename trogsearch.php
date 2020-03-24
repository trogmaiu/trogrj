<!DOCTYPE HTML>
<HTML LANG="pt-br">
<head>
<title> TROGRJ</title>
<style>
bloco {
height: 800px;
align: center;
text-align: center;
}
</style>

</head>

<body>

<div id="bloco">
<img src="TROGMAIU1.jpg">
<h3> TrogSearch</h3><br><br><br>
Buscador base Google...
<br><br><br><br>
TrogsearchTIs: tromgaiu.wordpress.com

<form method=GET action=http://www.google.com/search>
<input type=hidden name=sitesearch value="www.google.com"> 
<input type=text name=q size=60>
<input type=submit value=Buscar> 
</form>
</div>

Cuidado com aparência:
<p>
<form action="#" method="POST">
<input type="radio" name="opcao1" VALUE="1"> 1
<input type="radio" name="opcao1" VALUE="2"> 2
<input type="radio" name="opcao1" VALUE="3"> 3
<input type="radio" name="opcao1" VALUE="4"> 4
<input type="radio" name="opcao1" VALUE="5"> 5
</p>
Viajar, Praia, Interior, Cidade: 
<p>
<input type="radio" name="opcao2" VALUE="1"> 1
<input type="radio" name="opcao2" VALUE="2"> 2
<input type="radio" name="opcao2" VALUE="3"> 3
<input type="radio" name="opcao2" VALUE="4"> 4
<input type="radio" name="opcao2" VALUE="5"> 5
</p>
Experiências Variadas: 
<p>
<input type="radio" name="opcao3" VALUE="1"> 1
<input type="radio" name="opcao3" VALUE="2"> 2
<input type="radio" name="opcao3" VALUE="3"> 3
<input type="radio" name="opcao3" VALUE="4"> 4
<input type="radio" name="opcao3" VALUE="5"> 5
<input type="submit" value="submite" />
</p>
</form>
</body>
</html>

<?php

$a1 = $_POST['opcao1'];
$a2 = $_POST['opcao2'];
$a3 = $_POST['opcao3'];
if(isset($_POST['opcao1']))
{

$open = fopen('fazer3.sh', 'w');
fwrite($open, "#!/bin/bash \n");
fwrite($open, "a1=$a1 \n");
fwrite($open, "a2=$a2 \n");
fwrite($open, "a3=$a3 \n");
fclose($open);
shell_exec( "/var/www/trogrj/public_html/fazer2.sh" );
}

?>
