<!-- 10. Criar uma Agenda Simples
Crie uma matriz nomeada para armazenar 3 contatos (nome, telefone e e-mail) e exiba os dados acessando os índices diretamente. -->


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
		<title> Decimo Exercício </title>
    </head>

    <body>
	    <h3> Opções de Contatos </h3>
        <table border="1">

        <?php  
        $contatos = [
            ["nome" => "Antonio", "telefone" => "1422222222", "email" => "Antonio@gmail.com"],
            ["nome" => "João", "telefone" => "1499999999", "email" => "João@gmail.com"],
            ["nome" => "Nicoly", "telefone" => "1455555555", "email" => "Nicoly@gmail.com"]
        ];

        echo "</tr>";  
        echo "<th>Nome</th>";
        echo "<th>Telefone</th>";
	    echo "<th>E-mail</th>";
        echo "<tr>"; 
    
        for ($contato = 0; $contato < 3; $contato++) {
			echo "<tr>";
			echo "<td>" . $contatos[$contato]["nome"] . "</td>";  
            echo "<td>" . $contatos[$contato]["telefone"] . "</td>";
            echo "<td>" . $contatos[$contato]["email"] . "</td>";
			echo "</tr>";
            // para acessar o valor de uma chave vc deve colocar o nome da chave está como ali em cima ["nome"]
        }
		?>
	    </ul>
    </body>
</html>


