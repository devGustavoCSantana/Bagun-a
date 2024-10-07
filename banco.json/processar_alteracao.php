<?php
     $dados = [];
     $arquivo = "banco.json"; // vai guardar as informações do json
       //verificando se o arquivo existe
     if (file_exists($arquivo)) {
         $extrai_dados = file_get_contents($arquivo); // estou pegando dados do arquivo
         $dados = json_decode($extrai_dados, true); //decodifica dados do json json $dados = json_decode($extrai_dados);
         //O 'true' extrai dados e transforma em um array associativo, sem o 'true' ele extrai um objeto  $dados = json_decode($extrai_dados, true);
     }
     if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $email = $_POST['email'];
        $senha = $POST['senha'];
        $dados[$id] = [
            'nome' => $nome,
            'cpf' => $cpf,
            'email' => $email,
            'senha' => $senha
        ];
        if(file_put_contents($arquivo, json_encode($dados))) {
            header('location: listar_usuarios.php');
        }
     }
