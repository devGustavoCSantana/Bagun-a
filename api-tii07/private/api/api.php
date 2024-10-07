<?php
    header("Content-Type: application/json");

    // Simulação de um banco de dados
    $data = [
        ["id" => 1, "name" => "Nerildo"],
        ["id" => 2, "name" => "Paulo"]
    ];

    echo json_encode($data);
?>