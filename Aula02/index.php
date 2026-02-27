<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02</title>
</head>
<body>
    <h1>Aula 02 - PHP E HTML</h1>
    <?php
        $nome = "Artur";
        $a = 10;
        $b = 5;
        $soma = $a + $b;
        echo "<p>Bem vindo $nome</p>";
        echo "<p>Bem vindo " . $nome . "</p>";
        echo "<p style='color:red;'>A soma é: $soma </p>";

    ?>
</body>
</html>