<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Validar CPF</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

<div class="validator-container">

    <h1>Validar CPF</h1>

    <form method="POST">

        <div class="form-group">
            <label>Nome</label>
            <input type="text" name="nome" required>
        </div>

        <div class="form-group">
            <label>CPF</label>
            <input type="text" name="cpf" required>
        </div>

        <button type="submit">Validar</button>

    </form>

    <?php

    if ($_POST) {

        $nome = $_POST["nome"];
        $numero = $_POST["cpf"];

        $numeros = preg_replace('/[^0-9]/', '', $numero);

        $caracteres = str_split($numeros);

        $inteiro1 = ($caracteres[0] * 10) + ($caracteres[1] * 9) + ($caracteres[2] * 8) + ($caracteres[3] * 7) + ($caracteres[4] * 6) + ($caracteres[5] * 5) + ($caracteres[6] * 4) + ($caracteres[7] * 3) + ($caracteres[8] * 2);

        $resto1 = $inteiro1 % 11;
        $resto1 = 11 - $resto1;

        if ($resto1 >= 10) {
            $resto1 = 0;
        }

        $inteiro2 = ($caracteres[0] * 11) + ($caracteres[1] * 10) + ($caracteres[2] * 9) + ($caracteres[3] * 8) + ($caracteres[4] * 7) + ($caracteres[5] * 6) + ($caracteres[6] * 5) + ($caracteres[7] * 4) + ($caracteres[8] * 3) + ($resto1 * 2);

        $resto2 = $inteiro2 % 11;
        $resto2 = 11 - $resto2;

        if ($resto2 >= 10) {
            $resto2 = 0;
        }

        echo '<div class="resultado">';

        echo "<h2>Nome: <strong>$nome</strong></h2>";
        echo "<h2>CPF: <strong>$numeros</strong></h2>";

        if ($resto1 == $caracteres[9] && $resto2 == $caracteres[10]) {

            echo '<div class="status-alert valido">';
            echo 'CPF Válido';
            echo '</div>';

        } else {

            echo '<div class="status-alert invalido">';
            echo 'CPF Inválido';
            echo '</div>';

        }

        echo '<a href="' . $_SERVER['PHP_SELF'] . '" class="nova-consulta">Nova Consulta</a>';
        //usei IA aqui pois nao sabia como reiniciar sem os valores ficarem na tela.

        echo '</div>';
    }

    ?>

</div>

</body>
</html>