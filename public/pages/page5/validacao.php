<?php
$validacoes = [];

if (count($_POST) > 0) {
    if (!($_POST["nome"])) {
        $validacoes[] = "Por favor, preencha o seu nome";
    }
}
?>
<!DOCTYPE html>
<html laog="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php if (count($validacoes)) : ?>
        <ul>
            <?php foreach ($validacoes as $validacao) : ?>
                <li><?php $validacao ?></li>
            <?php endforeach ?>
        </ul>
    <?php endif ?>
    <form action="validacao.php" method="POST">
        <div><input type="text" name="nome" placeholder="Seu nome"></div>
        <div><input type="text" name="email" placeholder="Seu E-mail"></div>
        <div><input type="password" name="senha" placeholder="Sua senha"></div>
        <div><input type="text" name="confirmacao" placeholder="Confirme sua senha"></div>
        <div><input type="submit" name="button"></div>
    </form>

</body>

</html>