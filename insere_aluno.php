<html>
     <head>
	     <title>Insere dados na base</title>
	 </head>
	 <body bgcolor="gold">
	     <br><br><center>
		 <?php
 
 			$ligacao = mysqli_connect("localhost", "pmauser", "Senhanaoesquecer12345@", "ceep");
 			if (!$ligacao) ( die("Conecao falhou:" . mysqli_connect_error()) 
		                 ) ;
			echo"BD conectado com sucesso.<br>";
		 
		 $nome=$_POST["nome"];
		 $cpf=$_POST["cpf"];
		 $cgm=$_POST["cgm"];
		 
		 $sql="INSERT INTO aluno (nome, cpf, cgm) VALUES
		      ('$nome', '$cpf', '$cgm')";
			   
		if (mysqli_query($ligacao, $sql)) {
               echo "Dados inseridos com sucesso.";
		}else {
			             echo "Erro nao consegui inserir:" . $sql . "<br>" . mysqli_error($ligacao);
			 } 
		mysqli_close($ligacao); 
         ?>
     </body>
</html>

		 