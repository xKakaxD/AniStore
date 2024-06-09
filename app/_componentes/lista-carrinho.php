<!--Inicio Carrinho-->
<div>
    <div class="titulo-carrinho">
        <h2 id="margem-esquerda">Sua sacola</h2>
    </div>
    <!--Começo dos produtos no carrinho-->
    <div class="conteiner-carrinho">
        <div class="lista-prod">
            <?php
            session_start();
            require_once '_dao/DataBase.php';
            require_once '_dao/ProdutoDAO.php';

            // Instanciar a conexão com o banco de dados e o ProdutoDAO
            $db = new DataBase();
            $produtoDAO = new ProdutoDAO($db);

            if (!empty($_SESSION['carrinho'])) {
                $produtos_no_carrinho = array();

                // Buscar os detalhes dos produtos no carrinho
                foreach ($_SESSION['carrinho'] as $produto_id) {
                    $produto = $produtoDAO->buscarProdutoPorId($produto_id);
                    if ($produto) {
                        $produtos_no_carrinho[] = $produto;
                    }
                }

                if (!empty($produtos_no_carrinho)) {
                    // Exibe os produtos no carrinho
                    foreach ($produtos_no_carrinho as $produto) {
            ?>
                        <div class="cartao-prod-selec">
                            <?php include "_componentes/cartao-produto-carrinho.php" ?>
                        </div>
            <?php
                    }
                } else {
                    echo "<p>Não há produtos no carrinho.</p>";
                }
            } else {
                echo "<p>Não há produtos no carrinho.</p>";
            }
            ?>
        </div>
    </div><!--Final dos produtos no carrinho-->
</div>
