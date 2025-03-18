<!doctype html>
<html>
	<head>
		<title>Exercício 1</title>
		<meta charset="UTF-8">
	</head>
	<body>
		<!--1. Exibir um Vetor Simples
		 Crie um vetor com 5 nomes e exiba-os em uma lista <ul> no HTML.-->
		<h3>Lista de Nomes</h3>
		<ul>
			<?php
				$nomes = array("Maria", "Pedro", "Carla", "Clovis", "João");
				foreach($nomes as $nome)
				{
					echo "<li>$nome</li>";
				}
			?>
		</ul>
	</body>
</html>