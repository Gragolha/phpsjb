<?php
session_start();



if (isset($_POST['acao'])) {
    echo "form enviado!";
    $tarefa = strip_tags($_POST['tarefa']);

    if (!isset($_SESSION['tarefa'])) {
        $_SESSION['tarefas'] = array();
        $_SESSION['tarefas'][] = $tarefa;
    } else {
        $_SESSION['tarefas'][] = $tarefa;
    }
}
?>







<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listas de tarefas</title>
    <style type="text/css">
        /*.dad {
            display: flex;
            width: 100%;
            height: fit-content;
            margin-top: 20%;
            flex-direction: column;


        }

        * {
            <?php
            echo "margin:auto";


            ?>
        }*/
    </style>

</head>

<body>
    <div class="dad">
        <form method="post">
            <input type="text" name="tarefa" placeholder="Digite sua tarefa" />
            <input type="submit" name="acao" value="Enviar" />
        </form>
        <br />
        <h3>Sua tarefas</h3>
    </div>


</body>

</html>