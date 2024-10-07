<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificando Número</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Verificando se ele é PAR ou IMPAR</h1>
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
                    if($numero % 2 == 0) {
                        echo "O número é PAR";
                    }else {
                        echo "O número é IMPAR";
                    }
                }
            ?>
</body>
</html>