<!-- 8. Exibir a Diagonal Principal de uma Matriz 3x3
Crie uma matriz 3x3 fixa e exiba apenas os números da diagonal principal (onde o índice da linha é igual ao da coluna). -->


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
		<title> Oitavo Exercício </title>
    </head>

    <body>
        <h3> Matriz 3x3 </h3>
	    <table border="1">
        <?php 
            $numeros = [[8,2,3],
                        [1,8,3],
                        [1,2,8]
                       ];
            
            for ($i = 0; $i < 3; $i++) {
                echo "<tr>";

                for ($j = 0; $j < 3; $j++) {
                    echo "<td>";
                    if ($i == $j) {
                        echo $numeros[$i][$i];
                    } else {
                        echo "Vazio";
                    }
                    echo "</td>";
                }
                echo "</tr>";
            }
        ?>
        </table>
	    </ul>
    </body>
</html>