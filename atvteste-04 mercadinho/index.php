<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css/style.css">
    <title>mercadinho</title>
</head>
<body>
   <h1>Mercadinho</h1>
    <form action="promocao.php" method="GET">
      <label for="codproduto">Código do Produto</label>
      <input type="text" name="codproduto" placeholder="99.999"> <br>

      <label for="descricao">Descrição</label>
      <input type="text" name="descricao" placeholder="Descrição do seu produto"><br>

      <label for="valor">Valor R$</label>
      <input type="number" name="valor" ><br>

      <label for="quantidade">Quantidade</label>
      <input type="number" name="quantidade"><br>

      <label for="promocao" name="promocao">Promoção da Semana</label>

      <select>
      <option>Categorias</option>
      <option value ="01-5">01- 5% Bebida</option>
      <option value ="02-7">02- 7% Limpeza</option>
      <option value ="03-4">03- 4% Higiene </option></select><br>
     
      <p class="botoes">
      <input type="submit" placeholder="calcular" value="Calcular">
      <input type="reset" name="limpar" value="Limpar" >
      </p>
      

    </form>
</body>
</html>