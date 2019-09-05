<?php
	$tab = $_POST['n'];
	$mult = 0;
		echo "<br> Tabuada do $tab <br><br>";
	for ($mult=0; $mult<=10; $mult++){
		$res = ($tab * $mult);
		echo "$tab x $mult = $res <br>";
	}
?>

<html>
	<link rel="stylesheet" type="text/css" href="estilo.css">
		<meta charset="utf-8" lang="pt-br">
	<br><br><br><br><a href="index.html">Voltar</a>
</html>