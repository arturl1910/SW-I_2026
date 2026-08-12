<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Testando Bibliotecas</title>
</head>
<body>

    <h1>Testando Bibliotecas</h1>

    <h2>Calculadora de IMC</h2>

    <form method="POST">

        <label>Peso:</label>
        <input type="text" name="peso">

        <br><br>

        <label>Altura:</label>
        <input type="text" name="altura">

        <br><br>

        <button type="submit">Calcular IMC</button>

    </form>


    <h2>Validador de CPF</h2>

    <form method="POST">

        <label>CPF:</label>
        <input type="text" name="cpf">

        <br><br>

        <button type="submit">Validar CPF</button>

    </form>


<?php

require_once 'BibliotecaLocal/autoload.php';

$imc = new imc();

echo "<br><br>";

$cpf = new cpf();

if ($_POST) {

    if (isset($_POST["peso"]) && isset($_POST["altura"])) {

        $peso = $_POST["peso"];
        $altura = $_POST["altura"];

        echo $imc->calcular($peso, $altura);

        echo "<br><br>";
    }

    if (isset($_POST["cpf"])) {

        $numero = $_POST["cpf"];

        echo $cpf->validar($numero);
    }
}

?>

</body>
</html>