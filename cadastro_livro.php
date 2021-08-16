<html>
   <head>
     <title>CADASTRO LIVRO</title>
   <head>
   <body bgcolor="gold">
         <br><br><center><font size="5" color="black">
		     CADASTRO DE DADOS DO LIVRO<br>
			 </font>
			 <br><br>
			 <form action="insere_livro.php" method="POST">
			 <table>
			     <tr><td>TITULO :</td> <td><input type="text" name="titulo"></td></tr>
				 <tr><td>AUTOR :</td> <td><input type="text" name="autor"></td></tr>
            	 <tr><td>GENERO :</td> <td>
	                <select name="genero">
                       <option value="Romance">Romance</option>
	     			   <option value="Aventura">Aventura</option>
		    		   <option value="Infantil">Infantil</option>
			        </select></td></tr>
			 </table><br>
			 <input type="submit" value="CADASTRAR">
			 </form>
	</body>
</html>