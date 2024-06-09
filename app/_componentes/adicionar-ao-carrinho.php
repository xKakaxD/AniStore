<?php 
    session_start();

    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        // Verifique se a session 'carrinho' já existe
        if (!isset($_SESSION['carrinho'])) {
            $_SESSION['carrinho'] = array(); // Se não existe, crie um array vazio
        }
        
        // Adicione o ID do produto à session 'carrinho'
        $_SESSION['carrinho'][] = $_GET['id'];
    
        // Redirecione de volta para a página anterior ou para a página do carrinho
        header("Location: /faculdade/anistore/app/carrinho.php");
        exit();
    } else {
        // Se o ID do produto não foi passado ou não é um número válido, redirecione para a página inicial
        header("Location: index.php");
        exit();
    }
    
?>