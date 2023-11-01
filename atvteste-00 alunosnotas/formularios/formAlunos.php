<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aulinha do Marcelinho carioca</title>
</head>
<body>
    <form action="../rotinas/controleAluno.php" method="GET">
        <p><label for="matr">Matricula</label></p>
        <p><input type="number" name="matri" id="matr"></p>

        <p><label for="nome">Nome</label></p>
        <p><input type="text" name="nome" id="nome"></p>
        
        <p><input type="submit" value="incluir" name="botao"></p>
        <p><input type="submit" value="excluir" name="botao"></p>
    </form>
</body>
</html>