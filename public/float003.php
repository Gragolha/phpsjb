<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Float</title>
</head>

<body>

    <?php
    $a = 1.23456789;
    $b = 1.23456780;
    $epsilon = 0.00001;

    if (abs($a - $b) < $epsilon) {
        echo "iguais";
    }
    ?>
    <?php
    $x = 8 - 6.4;  // which is equal to 1.6
    $y = 1.6;
    var_dump($x == $y); // is not true
    ?>



    <hr>
    <?php
    //PHP thinks that 1.6 (coming from a difference) is not equal to 1.6. To make it work, use round()
    var_dump(round($x, 2) == round($y, 2)); // this is true.
    ?>
</body>

</html>