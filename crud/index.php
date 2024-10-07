<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>

<body>
    <?php
    include_once "conexao.php";
    ?>
    <h1>CRUD PHP usando PDO</h1>
    <a href="cadastro.php">Cadastrar</a>
    <?php
    
    $select = $conexao->prepare("SELECT * FROM usuario");
    $select->execute();
    ?>
    <table>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Email</th>
            <th>CPF</th>
            <th>Senha</th>
        </tr>
        <?php
        //fetch pega o proximo registro
        //enquanto existir registros para exibir o loop continua
        while($resultado = $select->fetch(PDO::FETCH_ASSOC)) {
            echo '
            <tr>
                <td>' . $resultado['id_usuario'] . '</td>
                <td>' . $resultado['nome'] . '</td>
                <td>' . $resultado['email'] . '</td>
                <td>' . $resultado['cpf'] . '</td>
                <td>' . $resultado['senha'] . '</td>
            </tr>';
        }
        ?>
    </table>
</body>

</html>