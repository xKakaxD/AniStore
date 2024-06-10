<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ecommerce.css">
    <script src="_js/menu.js"></script>
    <script src="_js/formulario.js"></script>
    <title>Fale conosco</title>
</head>
<body>
    <header>
    <?php include "_componentes/header.php" ?>
    </header>
    <main>
        <!--Inicio do fale conosco-->
        <div class="fale-conosco">
            <h2>Entre em Contato Conosco</h2>
            <form id=contatoForm action="#" method="post">
                <label for="name">Nome:</label>
                <input type="text" id="name" name="name" required placeholder="Digite seu nome">

                <label for="email">E-mail:</label>
                <input type="text" id="email" name="email" required placeholder="exemplo@gmail.com">

                <label for="message">Mensagem:</label>
                <textarea id="message" name="message" equired placeholder="Escreva a sua mensagem"></textarea>

                <input type="submit" value="Enviar" onclick="validaForm()">
            </form>
        </div>
    </main>

    <footer>
         <?php include "_componentes/footer.php" ?>
    </footer>
    
    </body>
    </html>
</body>
</html>