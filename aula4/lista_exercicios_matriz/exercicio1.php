<?php
	/*1. Exibir um Vetor Simples
		 Crie um vetor com 5 nomes e exiba-os em uma lista <ul> no HTML.*/
		 
		 $nomes = array("Maria", "Pedro", "Carla", "Clovis", "João");
		 
		 echo "<ul>";
		 
		 foreach($nomes as $nome)
		 {
			echo "<li>$nome</li>";
		 }
		 echo "</ul>";
?>