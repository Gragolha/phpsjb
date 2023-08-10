<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>int</title>
</head>

<body>
    <?php
    var_dump(25 / 7);         // float(3.5714285714286)
    var_dump((int) (25 / 7)); // int(3)
    var_dump(round(25 / 7));  // float(4)

    //float
    $n1 = 55;
    $n2 = 7;
    echo "Float = " .  ($n1 / $n2);
    ?>
    <hr>
    <?php
    //int
    $n3 = 55;
    $n4 = 7;
    echo  "Int = " . (int)($n3 / $n4);
    ?>
    <hr>
    <?php
    $n5 = 55;
    $n6 = 7;
    echo "round = " . round($n5 / $n6);
    ?>
    <hr>
</body>

</html>