<?php
include('conexao.php');

session_start();

if (isset($_POST['secao'])) {
    $secao = $conexao->real_escape_string($_POST['secao']);
    $usuario_id = $_SESSION['id'];

    // Verifica se já há um registro para esta seção e usuário
    $verifica_registro = $conexao->prepare("SELECT id FROM cliques WHERE usuario_id = ? AND secao = ?");
    $verifica_registro->bind_param("is", $usuario_id, $secao);
    $verifica_registro->execute();
    $verifica_registro->store_result();

    if ($verifica_registro->num_rows > 0) {
        // Se já houver um registro, atualiza o número de cliques
        $atualiza_cliques = $conexao->prepare("UPDATE cliques SET cliques = cliques + 1 WHERE usuario_id = ? AND secao = ?");
        $atualiza_cliques->bind_param("is", $usuario_id, $secao);
        $atualiza_cliques->execute();
    } else {
        // Correção: Adiciona o terceiro parâmetro para o número de cliques
        $insere_cliques = $conexao->prepare("INSERT INTO cliques (usuario_id, secao, cliques) VALUES (?, ?, 1)");
        $insere_cliques->bind_param("iss", $usuario_id, $secao, 1);
        $insere_cliques->execute();
    }
}
?>
