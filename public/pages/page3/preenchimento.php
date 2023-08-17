<?php

$usuario = [
    "Nome" => "Anderson",
    "Idade" => 29,
    "Profissão" => "Dev"
];



if ($usuario) {
    $nome = $usuario["Nome"];
    $idade = $usuario["Idade"];
    $profissao = $usuario["Profissão"];
};


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="preenchimento.php">
        <div><input type="text" name="nome" value="<?= $nome ?>"></div>
        <div><input type="number" name="nome" value="<?= $idade ?>"></div>
        <div><input type="text" name="nome" value="<?= $profissao ?>"></div>

    </form>

</body>

</html>