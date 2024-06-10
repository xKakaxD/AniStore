<div class="cartao-prod">       
    <img src="<?php echo htmlspecialchars($produto['image_url']); ?>" alt="<?php echo htmlspecialchars($produto['nome']); ?>">
    <h2><?php echo htmlspecialchars($produto['nome']); ?></h2>
    <p>R$<?php echo number_format($produto['valor'], 2, ',', '.'); ?> 3x No Cartão sem juros</p>
    <form action="_componentes/adicionar-ao-carrinho.php" method="GET">
        <input type="hidden" name="adicionar" value="<?php echo $produto['id_produto']; ?>">
        <button type="submit">Comprar</button>
    </form>

</div>
