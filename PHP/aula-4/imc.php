<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>IMC</title>
</head>
<body>
<h1>Calculo do IMC</h1>
    <main>
        <div class="container">
            <form method="post" action="<?= $_SERVER['PHP_SELF'] ?>">
                <div class="grupo">
                    <label for="peso">Digite o seu peso:</label>
                    <input type="peso" class="campo" name="peso" id="peso">
                </div>

                <div class="grupo">
                    <label for="dinheiro">Digite sua altura:</label>
                    <input type="altura" class="campo" name="altura" id="altura">
                </div>
                <div class="grupo">
                    <button type="submit" id="adiciona">Verificar</button>
                </div>
            </form>
            <?php
                if($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $peso = $_POST['peso'];
                    $altura = $_POST['altura'];
                    $imc = $peso / ($altura * $altura);
                    if($imc < 18.5) {
                        echo"Abaixo do peso.";
                    }elseif($imc >= 18.5 && $imc <= 24.9) {
                        echo"Peso normal";
                    }elseif($imc >= 25 && $imc <= 29.9) {
                        echo"Sobrepeso";
                    }elseif($imc > 40) {
                        echo"Obesidade";
                    }
                }
            ?>
        </div>
    </main>
</body>
</html>