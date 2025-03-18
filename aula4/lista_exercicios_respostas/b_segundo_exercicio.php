<!-- 2. Somar Elementos de um Vetor
Crie um vetor com 5 números inteiros e some manualmente os valores acessando cada índice diretamente. -->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Segundo Exercício </title>
    </head>

    <body>
        <h3> Soma de Elementos </h3>
        <h3>
            <?php 
                $nums = array(0,1,2,3,4);
                $soma = 0;
                 
                for($lin=0; $lin < 5; $lin++)
                {
                    $soma = $soma + $nums[$lin];

                    if($lin < 4)
                    {
                        echo "<p>A soma deu = " . $soma . "</p>"; // no php o . serve de concatenação invés de +
                    }
                }
				
                echo "<p>O total é = " . $soma . "</p>";
            ?>
        </h3>
    </body>
</html>