<?php
session_start();

if (isset($_GET['excluir']) && is_numeric($_GET['excluir'])) {
    $id_produto = $_GET['excluir'];

    // Verifica se o produto está no carrinho
    if (isset($_SESSION['carrinho']) && in_array($id_produto, $_SESSION['carrinho'])) {
        // Encontra o índice do produto no carrinho
        $indice = array_search($id_produto, $_SESSION['carrinho']);

        // Remove o produto do carrinho
        unset($_SESSION['carrinho'][$indice]);
    }

    // Redireciona de volta para a página do carrinho
    header("Location: /faculdade/anistore/app/carrinho.php");
    exit();
} else {
    // Se o ID do produto não foi passado ou não é um número válido, redirecione para a página inicial
    header("Location: /faculdade/anistore/app/index.php");
    exit();
}
?>
