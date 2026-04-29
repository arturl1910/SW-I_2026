<?php
$_MENU = [
    'Home' => '<h1>Página inicial</h1>',
    'Sobre' => '<h1>Sobre page aqui</h1>',
    'Contato' => '<h1>Contato page aqui</h1>',
    'Experiencias' => '<h1>Experiências page aqui</h1>',
    'Projetos' => '<h1>Projetos page aqui</h1>',
];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Aula 07</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>

<header class="Logo">

    <a class="logo">
        <img src="logoo.png" alt="Logo">
    </a>

    <nav>
        <?php
        foreach($_MENU as $key => $value){
            echo '<a href="?page='.$key.'">'.$key.'</a> | ';
        }
        ?>
    </nav>

</header>

<main>

    <?php
    $pagina = isset($_GET['page']) ? $_GET['page'] : 'Home';

    if(array_key_exists($pagina, $_MENU)){
        echo $_MENU[$pagina];
    } else {
        echo '<h1>Página não encontrada</h1>';
    }
    ?>

</main>

</body>
</html>