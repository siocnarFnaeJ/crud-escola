<html>
     <head>
	     <title>Insere livro na base</title>
	 </head>
	 <body bgcolor="gold">
	     <br><br><center>
		 <?php
			$ligacao = mysqli_connect("localhost", "pmauser", "Senhanaoesquecer12345@", "ceep");
			if (!$ligacao) ( die("Conecao falhou:" . mysqli_connect_error())) ;
			echo"BD conectado com sucesso.<br>";
		 
		    $titulo=$_POST["titulo"];
		    $autor=$_POST["autor"];
    		$genero=$_POST["genero"];
		 
		    $sql="INSERT INTO livro (titulo, autor,genero) VALUES
		      ('$titulo', '$autor', '$genero')";
			  
		    if (mysqli_query($ligacao, $sql)) {
                 echo "Dados inseridos com sucesso.";
		       }else {
			             echo "Erro nao consegui inserir:" . $sql . "<br>" . mysqli_error($ligacao);
			    } 
		    mysqli_close($ligacao); 
         ?>
     </body>
</html>
