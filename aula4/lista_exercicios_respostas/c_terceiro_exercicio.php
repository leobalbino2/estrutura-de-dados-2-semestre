<!--3. Ordenação Manual de um Vetor
Crie um vetor de 3 números e ordene-os manualmente (sem usar sort()), comparando e trocando os valores, se necessário. -->

<!-- Dois loops, um para selecionar o índice por ordem e o outro para compara-lo -->

<!-- ----------------------- Não consegui finalizar ----------------------- -->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Terceiro Exercício </title>
    </head>

    <body>
        <h3> Ordenando Números </h3>
        <h3> Não consigo fazer esse </h3>
        <h3>
        <?php 
                $nums = array(10,3,7);
                $ordenado = []; 
                 
                for($indice = 0; $indice < 3; $indice++) {
                    for($comparado = 0; $comparado < 3; $comparado++) {
                        if ($nums[$indice] < $nums[$comparado]) {
                            $ordenado[$indice] = $nums[$comparado]; 
                        }
                    }
                }

                echo $ordenado;
            ?>
        </h3>
    </body>
</html>