<?php
include('conexao.php');

if (isset($_POST['usuario']) && isset($_POST['senha'])) {

    $usuario = $conexao->real_escape_string($_POST['usuario']);
    $senha = $conexao->real_escape_string($_POST['senha']);

    $sql_code = "SELECT * FROM cadastro WHERE usuario = '$usuario'";
    $sql_query = $conexao->query($sql_code) or die("Falha na execução do código SQL: " . $conexao->error);

    if ($sql_query->num_rows > 0) {
        $usuario = $sql_query->fetch_assoc();

        if (password_verify($senha, $usuario['senha'])) {
            session_start();

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['usuario'] = $usuario['usuario'];

            if ($usuario['isAdmin']) {
                // Se o usuário é um administrador, redireciona para o painel de administração
                echo "<script>alert('Login bem-sucedido!'); setTimeout(function(){ window.location.href='/projeto-final/grid/dashboard.html'; }, 500);</script>";
                exit();
            } else {
                // Se não for um administrador, redireciona para a página inicial
                echo "<script>alert('Login bem-sucedido!'); setTimeout(function(){ window.location.href='/projeto-final/index.php'; }, 500);</script>";
                exit();
            }
        } else {
            // Exibir alerta de erro com JavaScript se a senha estiver incorreta
            echo "<script>alert('Erro: Senha incorreta!'); setTimeout(function(){ window.location.href='/projeto-final/HTML/login.html'; }, 500);</script>";
            exit();
        }
    } else {
        // Exibir alerta de erro com JavaScript se o usuário não existir
        echo "<script>alert('Erro: Usuário não encontrado!'); setTimeout(function(){ window.location.href='/projeto-final/HTML/login.html'; }, 500);</script>";
        exit();
    }
}
?>
