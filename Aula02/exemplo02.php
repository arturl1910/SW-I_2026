<?php
    $nome = "João";
    $idade = 25;
    $altura = 1.75;
    $status = false;

    //exibir valores na tela
    echo "O nome é: $nome"; //primeira forma
    echo "<br>";
    echo'O nome é: ' . $nome; //segunda forma
    echo"<br>";
    echo $nome;

    //verificar tipo e valor de uma variável
    var_dump($altura); //mostra o resultado e tipo de variável
    echo"<br>";
    print_r($altura); //mostar apenas o resultado da variável
    echo"<br>";

    //curiosidade do php a respeito de valores booleanos
    echo "o status é: $status";
?>