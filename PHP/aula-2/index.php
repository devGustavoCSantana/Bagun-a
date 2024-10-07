<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <h1>Arrays em PHP</h1>

    <?php
    $pessoa = [
        "nome" => 'Maria Clara',
        "idade" => '10',
        "cidade" => 'Ubatuba',
        "escola" => 'EE Josefina'
    ];
    //echo $pessoa['nome'] pode emprimir assim só que ele imprime um valor de cada vez

    foreach($pessoa as $chave => $valor) { // o as ele significa como.
        echo "<br>$chave:$valor"; // Esse  echo ele imprime a chave  e o valor que ele imprime tudo.
    }
    ?>
</body>
</html>