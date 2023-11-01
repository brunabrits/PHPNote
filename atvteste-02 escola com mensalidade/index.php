<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet"  type=”text/css”  href="style.css">
	<meta charset="utf-8">
	<title> Sistema de Cadastro </title>
</head>
<body>

<center>

<header><h1>Sistema de Cadastro</h1></header>

	<form action="controle.php" method="get">
			<p><input type="int" name="codproduto" placeholder="Código do Produto"></p>
			<p><input type="text" name="descricao" placeholder="Descrição"></p>
			<p><input type="decimal" name="valor" placeholder="Valor"></p>
		
			<p>Selecione a forma de pagamento:</p>
			<p><input type="radio" id="char" name="formadepagamento" value="v"></p>
			<label for="html">Á vista</label><br>
			<p><input type="radio" id="char" name="formadepagamento" value="p"></p>
			<label for="html">Á prazo</label><br>

		<p><input type="submit" name="botao" value="incluir"></p>
		<p><input type="submit" name="botao" value="consultar"></p>
		

	</form>
	
</center>

</body>
</html>


