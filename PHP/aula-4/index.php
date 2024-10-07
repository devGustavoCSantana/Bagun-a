<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title></title>
</head>
<body>
<h1>Valor da Gasolina</h1>
    <main>
        <div class="container">
            <form method="post" action="<?= $_SERVER['PHP_SELF'] ?>">
                <div class="grupo">
                    <label for="gasolina">Valor da gasolina:</label>
                    <input type="gasolina" class="campo" name="gasolina" id="gasolina">
                </div>

                <div class="grupo">
                    <label for="dinheiro">Valor do dinheiro:</label>
                    <input type="dinheiro" class="campo" name="dinheiro" id="dinheiro">
                </div>
                <div class="grupo">
                    <button type="submit" id="adiciona">Verificar</button>
                </div>
            </form>
            <?php
                if($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $gasolina = $_POST['gasolina'];
                    $dinheiro = $_POST['dinheiro'];
                    $resultado = $dinheiro / $gasolina;
                    $resultado = $dinheiro / $gasolina;
                    $formatar = number_format($resultado, 2, ',','.');
                    echo"Você tem $ $dinheiro reais e pode comprar $formatar litros de gasolina";
                    
                }

            ?>
        </div>
    </main>
</body>
</html>