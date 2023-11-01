<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="notas.php" method="GET">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" name="nome" placeholder="Nome"><br>

        <label for="matricula">Matricula</label> 
        <input type="number" name="matricula" id = ""placeholder="Matrícula"><br>
        
    <label>Cursos:</label>   
    <select name="Cursos"><br>
    <option > </option>
    <option >DES</option>
    <option >ADM</option>
    <option >LOG</option> 
    </select>

        Bimestre 1 <input type="number" class="form-control" name="bim1">
		Bimestre 2 <input type="number" class="form-control" name="bim2">
		Bimestre 3 <input type="number" class="form-control" name="bim3">
<br>	
		<input type="submit" name="media" value="media" id="media">
		<input type="reset" name="limpar" value="limpar">
			</form>

</body>
</html>