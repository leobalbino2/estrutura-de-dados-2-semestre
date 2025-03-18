<!--5. Tabela de Produtos (Array nomeado)
Crie um array nomeado onde a chave é o nome de um produto e o valor é seu preço. Exiba os produtos em uma tabela HTML. -->

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title> Quinto Exercício</title>
</head>
<body>
    <h3> Tabela de Produtos </h3>
    <table border="1">
    <?php  
    $array = array(
        "Farinha" => 8.99,
        "Açucar" => 4.49
    );
        
    echo "<tr>"; 
    echo "<th>Produto</th>";
    echo "<th>Preço</th>";
    echo "</tr>";

        foreach ($array as $chave => $valor) {
            echo "<tr>";  
            
            echo "<td> $chave</td>";
            echo "<td> $valor</td>";
            echo "</tr>";  
        }
   
    ?>
</table>
</body>
</html>