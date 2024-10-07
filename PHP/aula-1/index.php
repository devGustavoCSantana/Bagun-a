<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeira página em PHP</title>
</head>

<body>
    <h1>Primeira página em PHP</h1>
    <h2>Criando variáveis</h2>
    <?php
    echo "Nomes de váriaveis não podem ter :<br>";
    echo "<ul>";
    echo "<li>Espaço</li>";
    echo "<li>Caracteres especiais</li>";
    echo "<li>Acentos</li>";
    echo "<li>Não começar com números</li>";
    echo "</ul>";
    echo "Podemos ter :<br>";
    echo "<ul>";
    echo '<li>underline_ Ex.: $_nome_variavel</li>';
    echo '<li>Camel Case $nomeVariavel</li>';
    echo "</ul>"
    ?>
    <a href="variaveis.php">Variaveis</a>
    <a href="estruturas.php">Estruturas</a>
</body>

</html>