
<div class="loja-banner" name="loja-banner" id="top">
            <a href="telaInicialCliente.php">
                <img src="img/AniStore.png" alt="AniStore-logo">
            </a>
        </div>
        <!--Início da barra de tarefas-->
        <div name="nav-bar" class="nav-bar">
            <div class="menu-btn">
                <button id="menu-btn" onclick="toggleMenu()">&#9776;</button>
            </div>
            
            <div class="busca">
                <input type="text" placeholder="PRODUTOS,ANIMES E OFERTAS..." >
                <button type="submit">Buscar</button>
            </div>
    
            <div class="carrinho">
                <a href="carrinho.php">
                    <img src="img/cart-icon.png" alt="Carrinho">
                </a> 
            </div>
             <!--Inicio do menu lateral-->
            <div class="sidebar" id="sidebar">
                <div>
                    <button id="exit-btn" onclick="toggleMenu()"></button>
                    <h1>Menu Principal</h1>
                </div>
        
                <div class="navegacao-sidebar">
                    <a href="login.php">Fazer Login</a>
                    <a href="produtos.php">Produtos</a>
                    <a href="carrinho.php">Meus Produtos</a>
                    <a href="noticias.php">Noticias</a>
                    <a href="faleconosco.php">Ajuda</a>
                </div>
                
            </div><!--Final menu lateral-->
        </div>
        <!--Final da barra de tarefas-->   
