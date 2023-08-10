<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String</title>
</head>

<body>
    <?php
    echo 'isto é uma string comum';

    echo 'Você pode incluir novas linhas em strings,
dessa maneira que estará
tudo bem';

    // Imprime: Arnold disse uma vez: "I'll be back"
    echo 'Arnold disse uma vez: "I\'ll be back"';

    // Imprime: Você tem certeza em apagar C:\*.*?
    echo 'Você tem certeza em apagar C:\\*.*?';

    // Imprime: Você tem certeza em apagar C:\*.*?
    echo 'Você tem certeza em apagar C:\*.*?';

    // Imprime: Isto não será substituido: \n uma nova linha
    echo 'Isto não será substituido: \n uma nova linha';

    // Imprime: Variáveis $também não $expandem
    echo 'Variáveis $também não $expandem';
    ?><?php
        echo 'isto é uma string comum';

        echo 'Você pode incluir novas linhas em strings,
dessa maneira que estará
tudo bem';

        // Imprime: Arnold disse uma vez: "I'll be back"
        echo 'Arnold disse uma vez: "I\'ll be back"';

        // Imprime: Você tem certeza em apagar C:\*.*?
        echo 'Você tem certeza em apagar C:\\*.*?';

        // Imprime: Você tem certeza em apagar C:\*.*?
        echo 'Você tem certeza em apagar C:\*.*?';

        // Imprime: Isto não será substituido: \n uma nova linha
        echo 'Isto não será substituido: \n uma nova linha';

        // Imprime: Variáveis $também não $expandem
        echo 'Variáveis $também não $expandem';
        ?>
    <hr>
    <?php
    $frutas = array("banana", "uva", "pitaya");

    echo "Joana gosta de $frutas[0], ";
    echo "João gosta de $frutas[1] e  ";
    echo "Humberto gosta de $frutas[2]";
    ?>
    <hr>
    <?php
    class pessoa
    {
        public $john = "João da silva";
        public $wesley = "Wesley Machado";
        public $luke = "Lucas Rodrigues";
    };
    $pessoa = new pessoa();
    echo ("$pessoa->john bebeu cachaça e ficou ruim");
    echo "<br/>";
    echo "$pessoa->wesley não gosta de $frutas[2].";

    ?>
    <hr>
    <?php
    $string = 'string';
    echo "O caractere no índice -2 é $string[-2].", PHP_EOL;
    $string[-3] = 'o';
    echo "Alterar o caractere no índice -3 para o dá $string.", PHP_EOL;

    echo "<hr>";


    $great = "fantástico";

    echo "isso é {$great}.";
    ?>
</body>

</html>