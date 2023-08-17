<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="cadastro.php" method="POST">
        <div><input placeholder="Marca" type="text" name="marca"></div>
        <div><input placeholder="Preço" type="number" name="preco"></div>
        <div><input type="checkbox" value="Teto solar" name="opcional[]"> Teto solar</div>
        <div> <input type="checkbox" value="Banco de couro" name="opcional[]"> Banco de couro</div>

        <input type="submit" value="Cadastrar">
    </form>

</body>

</html>