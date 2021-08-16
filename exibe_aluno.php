<html>
<title>Exibe Aluno</title>
<body bgcolor="gold">
<?php
$nome = $_POST["nome"];
$ligacao = mysqli_connect("localhost", "pmauser", "Senhanaoesquecer12345@", "ceep");
if (!$ligacao)
     die("Conecao falhou:" . mysqli_connect_error()) ; 
$resultado = mysqli_query($ligacao, "SELECT  * FROM aluno WHERE nome like '%$nome%' " );
  echo "<center><b><font size=6>Banco de Dados (Tabela Aluno)</b></center><br>";
  echo '<center>';
  echo '<table border="1" bgcolor=white>';
  echo '<tr>';
    echo '<td><b>NOME</b></td>';   
    echo '<td><b>CPF</b></td>';   
	echo '<td><b>CGM</b></td>'; 
	echo '<td><b>ALTERAR</b></td>';  	
    echo '</tr>';
  while ($linha=mysqli_fetch_assoc($resultado))  
     {
		$id_aluno=$linha['id_aluno'];
		$nome=$linha['nome'];
		$cpf=$linha['cpf'];
		$cgm=$linha['cgm'];
		echo'<tr>';
		echo '<td>';echo $nome;echo '</td>'; 
		echo '<td>';echo $cpf; echo '</td>'; 
		echo '<td>'; echo $cgm; echo '</td>';
        echo '<td>'; echo '<form action=altera_aluno.php method=POST>
		<input type=text name=id value=';	echo $id_aluno;
        echo '><input type=submit value=ALTERAR></form></td></tr>'; 
      }  
	 echo '</table>';
	 echo '</center>';
	 mysqli_close($ligacao);
?>
<br>
</body>
</html>