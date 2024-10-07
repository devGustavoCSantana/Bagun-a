<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de tarefas</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Recuperando dados do Formulario com PHP</h1>
    </header>
    <main>
        <div class="container">
            <form id="formulario" method="POST">
                <div class="grupo">
                    <label for="tarefa">Nome </label>
                    <input type="text" class="campo" name="nome" id="nome">
                </div>
                <div class="grupo">
                    <label for="cidade">Cidade</label>
                    <input type="text" class="campo" name="cidade" id="cidade">
                </div>
                <div class="grupo">
                    <label for="profissao">Profissão</label>
                    <input type="text" class="campo" name="profissao" id="profissao">
                </div>
                <div class="grupo">
                    <button type="submit" id="adiciona"><i class="fa fa-check"></i> ENVIAR</button>
                </div>
            </form>
            <?php
            //print_r($_Post);

            //echo"<pre>";
            //print_r($_SERVER);

            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $nome = $_POST['nome'];
                $cidade = $_POST['cidade'];
                $profissao = $_POST['profissao'];
    
                echo "<div>Nome: $nome</div>";
                echo "<div>Cidade: $cidade</div>";
                echo "<div>Profissão: $profissao</div>";     
            }

            ?>;
        </div>
    </main>
</body>

</html>