<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de php</title>
    <link rel="stylesheet" href="../styles.css">
</head>

<body>
    <?php

    use pessoa as GlobalPessoa;

    class pessoa
    {
        function falar()
        {
            echo "olá";
        }
    }


    $matt = new pessoa();

    $matt->$nome = "Hasbulla";

    echo $matt->$nome;
    echo "<br>";
    echo $matt->falar();
    ?>


</body>

</html>