<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votação</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Votação</h1>
    <main>
        <div class="container">
            <form method="post" action="<?= $_SERVER['PHP_SELF'] ?>">
                <div class="grupo">
                    <label for="numero">Digite um número inteiro:</label>
                    <input type="number" class="campo" name="numero" id="numero">
                </div>
                <div class="grupo">
                    <button type="submit" id="adiciona">Verificar</button>
                </div>
            </form>
            <?php
                if($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $numero = $_POST['numero'];
                    if($numero < 16) {
                        echo"Com $numero anos, não pode votar.";
                    }elseif($numero == 16 || $numero == 17) {
                        echo"Com $numero anos, é opcional votar";
                    }elseif($numero >= 18) {
                        echo"Com $numero anos, é obrigatório votar";
                    }
                }

                $numero = 5.53 * 1910;
                $formatar = number_format($numero, 2, ',','.');
                echo "<h3>$formatar</h3>";
            ?>
</body>
</html>