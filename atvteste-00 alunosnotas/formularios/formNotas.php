<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aulinha do Marcelinho carioca das notas, vulgo pé de anjo</title>
</head>
<body>
    <form action="../rotinas/controleNota.php" method="GET">
        <p><label for="matri">Matricula</label></p>
        <p><input type="number" name="matri" id="matri"></p>
        <p><label for="n1">Nota 1</label></p>
        <p><input type="number" name="n1" id="n1"></p>
        <p><label for="n2">Nota 2</label></p>
        <p><input type="number" name="n2" id="n2"></p>
        <p><input type="submit" value="incluir" name="botao"></p>
        <p><input type="submit" value="excluir" name="botao"></p>
    </form>
</body>
</html>