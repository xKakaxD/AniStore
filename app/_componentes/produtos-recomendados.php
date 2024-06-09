<?php
require_once '_dao/ProdutoDAO.php';
require_once '_dao/DataBase.php';

// Instância da classe de conexão com o banco de dados
$db = new Database();
$conexao = $db->getConection();

// Instância do ProdutoDAO
$produtoDAO = new ProdutoDAO($conexao);

// Buscar produtos em destaque
$produtosDestaque = $produtoDAO->buscarProdutoDestaque(1);

?>

<div class="prod-recomendados">
    <h2 id="margem-esquerda">Produtos Recomendados</h2>
    <a id="prod-recomendados" href="produtos.php">Ver todos produtos</a>
</div>
<div class="destaques">
    <!-- Conteúdo do banner com produtos recomendados -->
    <div class="recomendados">
        <?php if (!empty($produtosDestaque)) : ?>
            <?php foreach ($produtosDestaque as $produto_destaque) : ?>
                <?php 
                $id_produto = isset($produto_destaque['id_produto']) ? $produto_destaque['id_produto'] : null; // Verificando se $produto_destaque é um array e contém a chave 'id_produto'

                // Verificando se $id_produto não está vazio antes de buscar o produto
                if (!empty($id_produto)) {
                    $produto = $produtoDAO->buscarProdutoPorId($id_produto); // Altere 'id_produto' para o nome correto do campo na sua tabela
                    include "_componentes/cartao-produto.php";
                } else {
                    echo "Erro: ID do produto não encontrado.";
                }
                ?>
            <?php endforeach; ?>
        <?php else : ?>
            <p>Não há produtos recomendados no momento.</p>
        <?php endif; ?>
    </div>
</div> 
