<?php
// Conecta ao banco de dados (substitua as configurações conforme necessário)
include('conexao.php');

if ($conexao->connect_error) {
    die('Erro na conexão com o banco de dados: ' . $conexao->connect_error);
}

// Consulta SQL para obter os dados
$sql = "SELECT secao, cliques FROM cliques";
$result = $conexao->query($sql);

if ($result === false) {
    die('Erro na consulta SQL: ' . $conexao->error);
}

// Array para armazenar os dados
$dados = array();

while ($row = $result->fetch_assoc()) {
    $dados[] = $row;
}

// Fecha a conexão com o banco de dados
$conexao->close();

// Retorna os dados como JSON
header('Content-Type: application/json');
echo json_encode($dados);
