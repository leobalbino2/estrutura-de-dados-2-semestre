<!-- 9. Criar um Vetor de Cores e Exibi-las em HTML
Crie um vetor de cores e use-o para exibir quadrados coloridos (<div style="width:50px; height:50px; background-color:cor;"></div>). -->


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
		<title> Nono Exercício </title>
    </head>

    <body>
	    <h3> Vetor de Cores </h3>
        <table border="1"">
        <?php  
        
        for ($i = 0; $i < 3; $i++) {
            echo "<tr>";
            echo "<td>";
            echo "<div style='width:50px; height:50px; background-color:red;'></div>";
            echo "</td>";
            echo "</tr>";
        };
		?>
        </table>
    </body>
</html>


