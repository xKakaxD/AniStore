<?php
session_start(); // Inicia a sessão

include '_componentes/conexao.php'; // Inclui o arquivo de conexão com o banco de dados

$mensagem_erro = ''; // Inicializa a variável de mensagem de erro

if (isset($_POST["login"])) { // Verifica se o formulário de login foi submetido
    $login = $_POST["login"]; // Recebe o login enviado pelo formulário
    $senha = hash('sha256', $_POST["senha"]); // Criptografa a senha usando SHA-256

    // Prepara uma consulta SQL para verificar o login e a senha no banco de dados
    $stmt = $conexao->prepare("SELECT * FROM tb_usuarios WHERE email = :login AND senha = :senha");
    $stmt->bindParam(':login', $login); // Vincula o parâmetro :login ao valor de $login
    $stmt->bindParam(':senha', $senha); // Vincula o parâmetro :senha ao valor de $senha
    $stmt->execute(); // Executa a consulta
    
    $usuario = $stmt->fetch(PDO::FETCH_ASSOC); // Busca o resultado da consulta

    if ($usuario) { // Verifica se um usuário foi encontrado
        $_SESSION["logado"] = true; // Define a sessão como logado
        $_SESSION["tipo_usuario"] = $usuario['tipo_usuario']; // Armazena o tipo de usuário na sessão
        $_SESSION["nome_usuario"] = $usuario['nome']; // Armazena o nome do usuário na sessão

        // Redireciona para a página de acordo com o tipo de usuário
        if ($usuario['tipo_usuario'] == 'F') { // Verifica se o tipo de usuário é 'F' (funcionário)
            header("Location: pagina_funcionario.php"); // Redireciona para a página de funcionário
        } elseif($usuario['tipo_usuario'] == 'C'){
              header("Location: pagina_cliente.php");
        } // Redireciona para a página de cliente
        else {
            header("Location: index.php"); // Redireciona para a página de cliente
        }
        exit; // Interrompe a execução do script após o redirecionamento
    } else {
        // Define a mensagem de erro caso o login falhe
        $mensagem_erro = "Usuário ou senha incorretos.";
    }
}

if (isset($_GET["logout"]) && $_GET["logout"] == true) { // Verifica se o usuário pediu para sair
    session_destroy(); // Destroi a sessão
    header("Location: index.php"); // Redireciona para a página de login
    exit; // Interrompe a execução do script após o redirecionamento
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AniStore - Login</title>
    <link rel="stylesheet" href="ecommerce.css">
</head>
<body>
    <h2>Autenticar</h2>
    <p>
        <?php 
        if (isset($_SESSION["logado"]) && $_SESSION["logado"] == true) { // Verifica se o usuário está logado
            echo "Usuário Autenticado"; // Exibe uma mensagem de usuário autenticado
            echo "<a href='login.php?logout=true'>Logout</a>"; // Exibe um link para logout
        } else {
            if (!empty($mensagem_erro)) echo "<p>$mensagem_erro</p>"; // Exibe uma mensagem de erro, se houver
        ?>
        <form action="login.php" method="post">
            Login: <input type="text" name="login" required /> <br> <!-- Campo para o login -->
            Senha: <input type="password" name="senha" required /> <br> <!-- Campo para a senha -->
            <input type="submit" value="Autenticar" /> <!-- Botão de envio -->
        </form>
        <?php } ?>
    </p>
</body>
</html>
