<!-- 1. Exibir um Vetor Simples
Crie um vetor com 5 nomes e exiba-os em uma lista <ul> no HTML.-->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
		<title> Primeiro Exercício </title>
    </head>

    <body>
	    <h3> Lista de Nomes </h3>
	    <ul>
	    <?php 
			$nomes = array("Maria","Pedro","Carla","Clovis","João");
			foreach($nomes as $nome)
			{
			echo "<li>$nome</li>";
			}
		?>
	    </ul>
    </body>
</html>