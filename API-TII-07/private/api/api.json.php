<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    header('Content-Type: application/json');

    $filePath = 'data.json';
    //Lê os dados do arquivo JSON, ou inicializa um array vazio se não existir
    $data = [];

    if(file_exists($filePath)){
        $data = json_decode(file_get_contents($filePath), true);
    }
    //decode o PHP recebe os dados, encode envia os dados

    $requestMethod = $_SERVER['REQUEST_METHOD'];

    switch ($requestMethod) {
        case 'GET':
            echo json_encode($data);
        break;

        case 'POST':
                $input = json_decode(file_get_contents('php://input'), true);
                // Gera um novo 10 com base no maior ID existente
                $newId = max(array_column($data, 'id')) +1;

                // Prepara a nova linha
                $newData = [
                    'id'=> $newId,
                    'name'=> $input['name'],
                    'age'=> $input['age']
                ];

                // Adicona a linha na matriz '$data'
                $data[] = $newData;
                
                // Grava no arquivo 'data.json'
                file_put_contents($filePath, json_encode($data, JSON_PRETTY_PRINT));

                echo json_encode($data);
        break;
            
        default:
            http_response_code(405);
            echo json_encode(['messagem' =>'Metodo não permitido']);
        break;
    }
?>
