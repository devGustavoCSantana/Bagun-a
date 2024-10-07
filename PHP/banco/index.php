<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Caixa Eletrônico</title>
</head>

<body>
    <header>
        <h1>Caixa Eletrônico</h1>
        <h2>Escolha uma operação para começar</h2>
    </header>
    <main>
        <?php
        session_start(); //Inicia a sessão
        $saldo = 0; // Declaro a variavel saldo e atribuo a 0
        //if(isset($_SESSION['saldo'])) { //isset() para ferificar se a variavel existe (ou se não é nula)
        //  $saldo = $_SESSION['saldo'];
        //}
        $saldo = $_SESSION['saldo'] ?? 0;
        $id = $_GET['id'] ?? 0; //pego id no get
        $open = ""; //crio variável open
        if ($id > 0) { //verifico se o id é maior que zero
            $open = "open"; // se for então ele recebe o texto open
        }
        //iniciando uma  sessão
        // session_start();
        //$_SESSION['teste'] = "Sessão aberta";
        //echo $_SESSION['teste']; //imprime o valor
        //unset ($_SESSION['teste']);// ele apaga a variavel
        //echo $_SESSION['teste'];
        //?? ele significa if
        //no link que criei depois do id ele é chamado de parametro
        ?>
        <div class="container">
            <ul>
                <li><a href="index.php?id=1">SAQUE</a></li>
                <li><a href="index.php?id=2">DEPÓSITO</a></li>
                <li><a href="index.php?id=3">SALDO</a></li>
                <li><a href="index.php?id=4">Sair</a></li>
            </ul>
            <dialog <?php echo $open; ?>> <!-- imprime a avariavel open -->
                <?php
                if ($id > 0 && $id < 3) { // verifico se o id é maior que zero e menor que 3, se for então exibe o formulário
                ?>
                    <form method="post" action="index.php?id=<?php echo $id; ?>"> <!-- < ?= $id ?> tanto faz usar esse dois modos -->
                        <div class="grupo">
                            <input type="number" name="valor" id="valor" step="0.01" class="campo">
                        </div>

                        <div class="grupo">
                            <button id="btn">ENTER</button>
                        </div>
                    </form>
                <?php
                }
                if ($_SERVER['REQUEST_METHOD'] == 'POST') { //Ele verifica se o formulario foi enviado
                    $valor = floatval($_POST['valor']); // pega o valor do campo "valor"
                    if ($id == 1) { // verifico se id é 1, se for, a operação é saque
                        echo "<h2> SAQUE </h2>";
                        if ($saldo >= $valor && $valor > 0) { // verifico se o saldo disponivel é maior que o valor solicitado
                            $_SESSION['saldo'] = $saldo - $valor; //gravo novo saldo
                            echo "Saque de $valor efetuado com sucesso!";
                        } else {
                            echo "Saldo insuficiente"; // se o saldo for menor que o valor solicitado exibe a mensagem de saldo insulficiente
                        }
                    } else if ($id == 2) { // verifico se id é 2, se for, a operação é dpositado
                        echo "<h2> DEPOSITO </h2>";
                        if ($valor > 0) {
                            $_SESSION['saldo'] = $saldo + $valor;//gravo novo saldo somando valor digitado
                            echo "Depósito de $valor efetuado com sucesso!";
                        }
                    }
                }
                if ($id == 3) {
                    echo "<h2> SALDO </h2>";
                    echo "Saldo disponível $saldo";
                }
                ?>
            </dialog>
        </div>
    </main>
</body>

</html>