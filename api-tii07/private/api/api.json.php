<?php
    error_reporting(E_ALL);
    ini_set("display_error", 1);

    header("Content-Type: application/json");

    $filePath = "data.json";

    // Lê os dados do arquivo JSON, ou inicializa um array vazio se não existir
    $data = [];

    if (file_exists($filePath)) {
        $data = json_decode(file_get_contents($filePath), true);
    }

    $requestMethod = $_SERVER["REQUEST_METHOD"];

    switch ($requestMethod) {
        case "GET":
            echo json_encode($data);
        break;

        case "POST":
            $input = json_decode(file_get_contents("php://input"), true);
            // Gera um novo ID com base no maior ID existente
            $newId = max(array_column($data, "id")) + 1;

            // Prepara a nova linha
            $newData = [
                "id"   => $newId,
                "name" => $input["name"],
                "age"  => $input["age"]
            ];

            // Adiciona a linha na matriz "$data"
            $data[] = $newData;

            // Grava no arquivo "data.json"
            file_put_contents($filePath, json_encode($data, JSON_PRETTY_PRINT));
            echo json_encode($data);
        break;

        case "PUT":
            $input = json_decode(file_get_contents("php://input"), true);

            if ($input["id"]) {
                foreach($data as &$item) {
                    if ($input["id"] == $item["id"]) {
                        // Preparando para atualizar "name" e "age"
                        if (isset($input["name"]) && !empty($input["name"])) {
                            $item["name"] = $input["name"];
                        }

                        if (isset($input["age"]) && !empty($input["age"])) {
                            $item["age"] = $input["age"];
                        }

                        // Atualiza os dados de volta no arquivo "data.json"
                        file_put_contents($filePath, json_encode($data, JSON_PRETTY_PRINT));
                        echo json_encode($item);
                        exit;
                    } // else {
                    //     http_response_code(404);
                    //     echo json_encode(["message" => "Amigo não encontrado"]);
                    // }
                }
                http_response_code(404);
                echo json_encode(["message" => "Amigo não encontrado"]);
            } else {
                http_response_code(404);
                echo json_encode(["message" => "Id não fornecido"]);
            }
        break;
        case 'DELETE':
            //$input = json_decode(file_get_contents('php://input', true));
            $input = json_decode(file_get_contents('php://input'), true);

            if (isset($input['id'])){
                
                foreach($data as $key => $item){
                    if ($input['id'] == $item['id']){
                        //Remove o item do array
                        uset($data[$key]);
                        file_put_contents($filePath, json_encode(array_values($data), JSON_PRETTY_PRINT));
                        echo json_encode(['message' => 'Amigo deletado com sucesso!']);
                    }else{
                        echo json_encode(['message' => 'Amigo não encontrado']);
                    }
                }
                    }else{
                        http_response_code(400);
                        echo json_encode(['message' => 'Id não fornecido']);
                    
                
            }
            break;

        default:
            http_response_code(405);
            echo json_encode(["message" => "Método não permitido"]);
        break;
    }
?>