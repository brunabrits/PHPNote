<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Bem vinda!</title>
</head>
<body>
<center>
   <div style="color:pink"> <h1> Sistema de Cadastro da Aluna</h1> </div>

	<form action="controle.php" method="POST">
		<p><input type="text" name="matricula" placeholder="matricula"></p>
		<p><input type="text" name="nome" placeholder="nome"></p>
		<p><input type="text" name="nascimento" placeholder="nascimento"></p>
		<p><input type="text" name="mensalidade" placeholder="mensalidade"></p>
<div class="row" >
		 <p><input style="background-color: pink;" type="submit" name="botao" 
			value="cadastrar"></p>
		<p><input style="background-color: pink;"type="submit" name="botao" 
			value="buscar"></p>
		<p><input style="background-color: pink;" type="submit" name="botao" 
			value="atualizar"></p>
		<p><input style="background-color: pink;" type="submit" name="botao" 
			value="deletar"></p>
</div>
	</form>
</center>
</body>
</html>
