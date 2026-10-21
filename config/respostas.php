<?php
// Modelos de resposta JSON

function resposta_sucesso(string $mensagem, $dados = null){
    header('Content-Type: application/json');
    http_response_code(200);

    echo json_encode([
        "resultado" => "sucesso",
        "mensagem" => $mensagem,
        "dados" => $dados
    ]);
    exit;
}

function resposta_erro(string $mensagem, int $cod_http = 400){
    header('Content-Type: application/json');
    http_response_code($cod_http);

    echo json_encode([
        "resultado" => "erro",
        "mensagem" => $mensagem,
    ]);
    exit;
}