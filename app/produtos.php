<?php

require_once '_dao/DataBase.php';
require_once '_dao/ProdutoDAO.php';

session_start();
$mensagem = "";

// Instanciar a conexão com o banco de dados e o ProdutoDAO
$db = new DataBase();
$produtoDAO = new ProdutoDAO($db);

// Verifica se tem algum produto para remover
if (isset($_GET["excluir"])) {
    $id_produto = $_GET["excluir"];
    $produtoDAO->excluirProduto($id_produto);
    $mensagem = "Produto removido!";
}

// Adiciona produto ao carrinho
if (isset($_GET["adicionar"])) {
    $_SESSION['carrinho'][] = $_GET["adicionar"];
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ecommerce.css">
    <script src="_js/menu.js"></script>
    <title>Produtos</title>
</head>
<body>
    <header>
        <?php include '_componentes/header.php'; ?>
    </header>
    <main>
        <div class="produtos">
            <h2 id="margem-esquerda">Lista de Produtos</h2>
            <?php if (!empty($mensagem)): ?>
                <p><?php echo $mensagem; ?></p>
            <?php endif; ?>
            <?php include '_componentes/lista-de-produtos.php'; ?>
        </div>
    </main>
    <footer>
        <?php include '_componentes/footer.php'; ?>
    </footer>
</body>
</html>
