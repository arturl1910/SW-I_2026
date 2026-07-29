<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>testando replace</title>
</head>
<body>
    <h1>Testando replace</h1>

<?php
require_once 'BibliotecaLocal/autoload.php';
$texto = new texto();
$calc = new calcular();
$contar = new caracteres();
$repl = new repla();
echo $calc->somar(10,20);
echo "<br><br>";
echo $texto->maiusculo("etec mcm");
echo "<br><br>";
echo $calc->multiplicar(10,20);
echo "<br><br>";
echo $contar->contar("123678888");
echo"<br><br>";
echo $repl->replace("R$ 1.234,56 ABC");
?>
</body>
</html>
