<?php
$dados = [];
$arquivo = 'banco.json'; // vai guardar as informações do json
//VERIFICAR SE O FORMULARIO FOI ENVIADO
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        //verificando se o arquivo existe
        if(file_exists($arquivo)) {
            $extrai_dados = file_get_contents($arquivo);// estou pegando dados do arquivo
            $dados = json_decode($extrai_dados, true);
             //decodifica dados do json json $dados = json_decode($extrai_dados);
            //O 'true' extrai dados e transforma em um array associativo, sem o 'true' ele extrai um objeto  $dados = json_decode($extrai_dados, true);
        }
        //sempre pega pelo name do formulario
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $cpf = $_POST['cpf'];
        $senha = $_POST['senha'];
        //Criptografa a senha digitada pelo usuário password_hash
        //PASSWORD_DEFAULT esse comando é padrão
        //Cria um código de 60 caracteres com a senha com esse comando
        $senha_criptografada = password_hash($senha, PASSWORD_DEFAULT);

        //array 
        $novo_usuario = [
            'nome' => $nome,
            'email' => $email,
            'cpf' => $cpf,
            'senha' => $senha_criptografada
        ];
        $dados[] = $novo_usuario;
        //inserir dados dentro de um arquivo passo nome do arquivo e os dados a serem gravados
       if( file_put_contents($arquivo, json_encode($dados))) {
        //redireciona a pagina para cadastrese.php
            header('location: cadastrese.php');
       } else {
        echo "Deu ruim";
       }


        // estou pegando os dados do array e tranformando em json
       // echo json_encode($novo_usuario);


        //imprimindo dados confirindo os dados
        //echo "<h1>Dados do Usuário</h1>";
       // echo "Nome: $nome<br>";
       // echo "Email: $email<br>";
       // echo "CPF: $cpf<br>";
       // echo "Senha: $senha => $senha_criptografada";
    }
?>