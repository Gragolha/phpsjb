<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <?php
    echo "<h2>Estudo de arrays</h2>";
    echo "<hr>";
    $array =
        [
            "foo" => "bar",
            "bar" => "foo",
        ];

    echo "teste $array[bar]";
    echo "<hr>";


    $array = array(
        1    => "a",
        "1"  => "b",
        1.5  => "c",
        true => "0",
    );
    var_dump($array);
    echo "<hr>";

    $array = array(
        "foo" => "bar",
        "bar" => "foo",
        100   => -100,
        -100  => 100,
    );
    var_dump($array);

    echo "<hr>";

    $array = array(
        "a",
        "b",
        9 => "c",
        "d",
    );
    var_dump($array);

    echo "texto $array[10]";

    echo "<hr>";
    echo "<h2>Acessando um array com colchetes</h2>";
    echo "<hr>";

    $array = array(
        "fooo" => "bard",
        42    => 24,
        "multi" => array(
            "dimensional" => array(
                "array" => "foo"
            )
        )
    );


    var_dump($array["fooo"]);
    var_dump($array["multi"]["dimensional"]["array"]);
    echo "<hr>";

    function getArray()
    {
        return array(1, 2, 3);
    }

    $secondElement = getArray()[1];


    $array = array(1, 2, 3, 4, 5);
    echo "<pre>";
    print_r($array);
    echo "</pre>";
    echo "<hr>";

    foreach ($array as $i => $value) {
        unset($array[$i]);
    }

    //atribuindo um uma valor na array
    print_r($array);
    $array[2] = 6;
    echo '<pre>';
    print_r($array);
    echo '</pre>';

    echo "novo valor inserido:  $array[2]";

    echo "<hr>";

    $array = array_values($array);
    $array[] = 7;
    print_r($array);

    echo '<pre>';
    print_r($array);
    echo '</pre>';

    echo "<hr>";
    $source_array = ['foo', 'bar', 'baz'];


    echo '<pre>';
    print_r($source_array);
    echo '</pre>';

    [$foo, $bar, $baz] = $source_array;

    echo $foo;    // imprime "foo"
    echo $bar;    // imprime "bar"
    echo $baz;    // imprime "baz"

    echo "<hr>";

    $source_array = [
        [1, 'John'],
        [2, 'Jane'],
    ];

    foreach ($source_array as [$id, $name]) {
        // Aqui $id e $name podem ser utilizados
    }


    $source_array = ['foo', 'bar', 'baz'];

    // Atribui o elemento de índice 2 na variável $baz
    [,, $baz] = $source_array;

    echo $baz;    // imprime "baz"



    $teste = array("cachorro", "gato", "passaro");

    echo '<pre>';
    print_r($teste);
    echo '</pre>';

    $teste[1] = "galinha";

    echo '<pre>';
    print_r($teste);
    echo '</pre>';


    ?>


</body>

</html>