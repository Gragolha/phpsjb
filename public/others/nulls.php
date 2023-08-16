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
    echo NULL;

    $nome = null;

    if (is_null($nome)) {
        echo "valor é null";
    }
    echo "<br>";
    $nome = "jorge";
    if (is_null($nome)) {
        echo "valor é null";
    } else {
        echo "é... não é NULL";
    }



    ?>

</body>

</html>