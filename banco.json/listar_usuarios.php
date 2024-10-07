<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar dados JSON</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            max-width: 600px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 10px;
        }

        th {
            background-color: #888;
        }
    </style>
</head>

<body>
    <h1>Listar dados do banco JSON</h1>
    <?php
    $dados = [];
    $arquivo = "banco.json"; // vai guardar as informações do json
      //verificando se o arquivo existe
    if (file_exists($arquivo)) {
        $extrai_dados = file_get_contents($arquivo); // estou pegando dados do arquivo
        $dados = json_decode($extrai_dados, true); //decodifica dados do json json $dados = json_decode($extrai_dados);
        //O 'true' extrai dados e transforma em um array associativo, sem o 'true' ele extrai um objeto  $dados = json_decode($extrai_dados, true);
    }
    ?>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($dados as $id => $dado) {

            ?>
                <tr>
                    <td><?= $id ?></td><!--estou mandando imprimir de um jeito simplificado-->
                    <td><?= $dado['nome'] ?></td>
                    <td><?= $dado['email'] ?></td>
                    <td><a href="editar.php?id=<?= $id ?>"> <!--Esse ?id= eu estou chamando o id-->
                    <i class="fa fa-edit"></i></a>
                   | <a href="apagar.php?id=<?= $id ?>">
                    <i class="fa fa-trash"></i>
                    </a>
                </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>

</html>