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
    echo "<h2>Array assoc</h2>";
    $pessoas = ["pessoa1" => array("Nome" => "Welder", "Etnia" => "Russa", "idade" => 17), "pessoa2" => array("Nome" => "Roberto", "Etnia" => "Europeu", "idade" => 18)];


    echo $verificaIdade;
    if ($pessoas["pessoa1"]["idade"] >= 18) {
        echo $pessoas["pessoa1"]["Nome"] . " é maior de idade";
    } else {
        echo $pessoas["pessoa1"]["Nome"] . " é menor de idade";
    };

    echo "<br>";

    if ($pessoas["pessoa2"]["idade"] >= 18) {
        echo $pessoas["pessoa2"]["Nome"] . " é maior de idade";
    } else {
        echo $pessoas["pessoa2"]["Nome"] . " é menor de idade";
    };


    /*echo '<pre>';
    print_r($pessoas["pessoa1"]["idade"]);
    echo '</pre>';*/


    ?>

</body>

</html>