<?php
include('conexao.php');

if (isset($_POST['submit'])) {
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    // Verificando se o usuário já existe
    $verifica_usuario = $conexao->prepare("SELECT usuario FROM cadastro WHERE usuario = ?");
    $verifica_usuario->bind_param("s", $usuario);
    $verifica_usuario->execute();
    $resultado = $verifica_usuario->get_result();

    if ($resultado->num_rows > 0) {
        // Se o usuário já existir, exibe uma caixa de alerta e redireciona com JavaScript
        echo "<script>alert('Usuário já existe. Escolha outro nome de usuário.'); window.location.href='/projeto-final/HTML/cadastro.php';</script>";
    } else {
        // Criptografando a senha
        $senhaCriptografada = password_hash($senha, PASSWORD_DEFAULT);

        // Inserindo os dados no banco de dados usando Prepared Statement
        $inserir_usuario = $conexao->prepare("INSERT INTO cadastro (nome, sobrenome, usuario, senha) VALUES (?, ?, ?, ?)");
        $inserir_usuario->bind_param("ssss", $nome, $sobrenome, $usuario, $senhaCriptografada);

        if ($inserir_usuario->execute()) {
            // Se o usuário for cadastrado com sucesso, exibe um alerta e redireciona
            echo "<script>alert('Usuário cadastrado com sucesso.'); window.location.href='/projeto-final/index.php';</script>";
            exit;
        }
    }

    // Fechando as declarações preparadas
    $verifica_usuario->close();
    $inserir_usuario->close();
    $conexao->close();
}
?>
