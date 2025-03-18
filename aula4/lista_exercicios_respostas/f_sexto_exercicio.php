<!-- 6. Média de Notas dos Alunos
Armazene as notas de 2 alunos (cada um com 3 notas) e exiba a média de cada um. -->


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
		<title> Sexto Exercício </title>
    </head>

    <body>
	    <h3> Tabela de Notas </h3>
        <table border="1">
        <?php  
        $array = [
			["William", 3, 6, 9],
			["Alberto", 6, 10, 8],
		];
        
        echo "<tr>"; 
        echo "<th>Nome</th>";
        echo "<th>Primeira Nota</th>";
	    echo "<th>Segunda Nota</th>";
	    echo "<th>Terceira Nota</th>";
	    echo "<th>Média Final</th>";
        echo "</tr>";
    
		// esse laço de repetição acessa o aluno e depois o índice das variáveis dentro do array
        for ($aluno = 0; $aluno < 2; $aluno++) {

			$media = ($array[$aluno][1] + $array[$aluno][2] + $array[$aluno][3]) / 3;
        
			echo "<tr>";
			for ($indice = 0; $indice < 4; $indice++) {

				echo "<td>" . $array[$aluno][$indice] . "</td>";
			}
			
			echo "<td>" . ($media) . "</td>"; //

			echo "<tr>";
        }
   
		?>
	    </ul>
    </body>
</html>


