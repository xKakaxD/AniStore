<?php

require_once 'Produto.php';
require_once 'Database.php';

class ProdutoDAO
{
    private $conexao;

    public function __construct()
    {
        $database = new Database();
        $this->conexao = $database->getConection();
    }

    public function __destruct()
    {
        $this->conexao->close();
    }

    // Insere um novo produto
    /*public function inserirProduto($nome, $descricao, $preco)
    {
        $stmt = $this->conexao->prepare("INSERT INTO produtos (nome, descricao, preco) VALUES (?, ?, ?)");
        $stmt->bind_param("ssd", $nome, $descricao, $preco);
        $stmt->execute();
        $stmt->close();
    }*/

    // Atualiza um produto existente
    /*public function atualizarProduto($id, $nome, $descricao, $preco)
    {
        $stmt = $this->conexao->prepare("UPDATE produtos SET nome = ?, descricao = ?, preco = ? WHERE id = ?");
        $stmt->bind_param("ssdi", $nome, $descricao, $preco, $id);
        $stmt->execute();
        $stmt->close();
    }*/

// Deleta um produto pelo ID
public function excluirProduto($id)
{
    $stmt = $this->conexao->prepare("DELETE FROM tb_produtos WHERE id_produto = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
}
    
// Busca todos os produtos
public function buscarTodosProdutos()
{
    $stmt = $this->conexao->prepare("SELECT id_produto, image_url, nome, descricao, valor FROM tb_produtos");
    $stmt->execute();
    $result = $stmt->get_result();
    $produtos = $result->fetch_all(MYSQLI_ASSOC);
    $stmt->close();
    return $produtos;
}

// Busca um produto pelo ID
public function buscarProdutoPorId($id)
{
    $stmt = $this->conexao->prepare("SELECT * FROM tb_produtos WHERE id_produto = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $produto = $result->fetch_assoc();
    $stmt->close();
    return $produto;
}

// Busca produtos pelo DESTAQUE
public function buscarProdutoDestaque($destaque)
{
    $stmt = $this->conexao->prepare("SELECT id_produto, image_url, nome, descricao, valor FROM tb_produtos WHERE destaque = ?");
    $stmt->bind_param("i", $destaque);
    $stmt->execute();
    $result = $stmt->get_result();
    $produtos_destaque = $result->fetch_all(MYSQLI_ASSOC);
    $stmt->close();
    return $produtos_destaque;
}
    
}

?>
