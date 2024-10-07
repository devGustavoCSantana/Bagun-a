<?php
    session_start();

    header("Content-Type: application/json");

    // Verifica se já existe dados na seção
    if (!isset($_SESSION["data"])) {
        // Simulação do banco de dados
        $_SESSION["data"] = [
            ["id" => 1, "name" => "Nerildo", "age" => "43"],
            ["id" => 2, "name" => "Paulo", "age"   => "19"]
        ];
    }

    // Criar variável para receber o método
    $requestMethod = $_SERVER["REQUEST_METHOD"];

    switch ($requestMethod) {
        case "GET":
            // Retorna os itens
            echo json_encode($_SESSION["data"]);
        break;

        case "POST":
            $input = json_decode(file_get_contents("php://input"), true);

            if (isset($input["name"]) && isset($input["age"])) {
                $newData = [
                    "id"   => count($_SESSION["data"]) + 1,
                    "name" => $input["name"],
                    "age"  => $input["age"]
                ];

                $_SESSION["data"][] = $newData;
                echo json_encode($_SESSION["data"]);
            } else {
                http_response_code(400);
                echo json_encode(["message" => "Nome ou idade não fornecido!"]);
            }
        break;

        default:
            // Imprime os erros de codificação
            http_response_code(405);
            echo json_encode(["message" => "Método não permitido!"]);
        break;
    }
?>