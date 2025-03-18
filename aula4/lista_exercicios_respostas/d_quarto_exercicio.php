<!-- 4. Matriz 2x2 Estática
Crie uma matriz 2x2 e exiba seus valores em uma tabela HTML, usando comando for. -->

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title> Quarto Exercício</title>
</head>
<body>
    <h3> Matriz 2x2 </h3>
    <table border="1">
    <?php  
    $matriz = array(
        array("João", "08/09/1974"),
        array("Maria", "25/03/1952")
    );

    for($lin = 0; $lin < 2; $lin++) {
        echo "<tr>";  
        
        echo "<td>" . $matriz[$lin][0] . "</td>";  
        echo "<td>" . $matriz[$lin][1] . "</td>";  
        
        echo "</tr>"; 
    }
    ?>
</table>
</body>
</html>