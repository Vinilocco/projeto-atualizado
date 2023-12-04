<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastro.css">
    <title>Cadastro</title>
</head>

<body>
    <div class="form">
        <form action="./inserir_dados.php" method="post" enctype="multipart/form-data">
            <div class="form-header">
                <div class="title">
                    <h1>Cadastre-se</h1>
                </div>
            </div>

            <p>Os dados inseridos são somente usados para ter um relatório sobre dificuldades!</p>

            <div class="input-group">
                <div class="input-box">
                    <label for="primeiro_nome">Primeiro Nome</label>
                    <input id="nome" type="text" name="nome" placeholder="Digite seu primeiro nome" required>
                </div>

                <div class="input-box">
                    <label for="sobrenome">Sobrenome</label>
                    <input id="sobrenome" type="text" name="sobrenome" placeholder="Digite seu sobrenome" required>
                </div>

                <div class="input-box">
                    <label for="usuario">Usuário</label>
                    <input id="usuario" type="text" name="usuario" placeholder="Digite seu usuário" required>
                </div>

                <div class="input-box">
                    <label for="senha">Senha</label>
                    <input id="senha" type="password" name="senha" placeholder="Digite sua senha" required>
                </div>

                <div class="input-box">
                    <label for="confirmPassword">Confirme sua Senha</label>
                    <input id="confirmPassword" type="password" name="confirmPassword" placeholder="Digite sua senha novamente" required>
                </div>
            </div>

            <div class="input-box continue-button">
                <button type="submit" name="submit">Continuar</button>
            </div>

        </form>
    </div>
</body>

</html>
