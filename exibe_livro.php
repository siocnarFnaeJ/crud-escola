<html>
<title>Exibe Livro</title>
<body bgcolor="gold">
<?php
$titulo = $_POST["titulo"];
$ligacao = mysqli_connect("localhost", "pmauser", "Senhanaoesquecer12345@", "ceep");
if (!$ligacao) 
     die("Conecao falhou:" . mysqli_connect_error()) ; 
$resultado = mysqli_query($ligacao, "SELECT  * FROM livro WHERE titulo like '%$titulo%' " );
  echo "<center><b><font size=6>Banco de Dados (Tabela Livro)</b></center><br>";
  echo '<center>';
  echo '<table border="1" bgcolor=white>';
  echo '<tr>';
    echo '<td><b>TITULO</b></td>';   
    echo '<td><b>AUTOR</b></td>';   
	echo '<td><b>GENERO</b></td>'; 
    echo '</tr>';
  while ($linha=mysqli_fetch_assoc($resultado))   //enquanto tiver alguma coisa na tabela
     {
	  $id_livro=$linha['id_livro'];
	  $titulo=$linha['titulo'];
	  $autor=$linha['autor'];
	  $genero=$linha['genero'];
	  echo'<tr>';
	  echo '<td>';echo $titulo;echo '</td>'; 
	  echo '<td>'; echo $autor; echo '</td>';
	  echo '<td>'; echo $genero; echo'</td>';
	  echo'</tr>';	 
     }  
	 echo '</table>';
	 echo '</center>';
	 mysqli_close($ligacao);
?>
<br>
</body>
</html>