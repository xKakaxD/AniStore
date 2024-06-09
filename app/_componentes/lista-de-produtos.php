<?php
require_once '_dao/DataBase.php';
require_once '_dao/ProdutoDAO.php';

// Instanciar a conexão com o banco de dados e o ProdutoDAO
$db = new DataBase();
$produtoDAO = new ProdutoDAO($db);

// Buscar todos os produtos
$lista_produto = $produtoDAO->buscarTodosProdutos();
?>

<div class="lista-prod">
    <?php if (!empty($lista_produto)) : ?>
        <?php foreach ($lista_produto as $produto) : ?>
            <?php include '_componentes/cartao-produto.php'; ?>
        <?php endforeach; ?>
    <?php else : ?>
        <p>Não há produtos disponíveis no momento.</p>
    <?php endif; ?>
</div>
