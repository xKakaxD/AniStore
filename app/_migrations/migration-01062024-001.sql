CREATE DATABASE anistore;--fazer separado se nao precisa dizer qual DB nos creates xD

CREATE TABLE tb_usuarios(
ID_USUARIO INT AUTO_INCREMENT PRIMARY KEY,
NOME VARCHAR(80) NOT NULL , 
EMAIL VARCHAR(100) NOT NULL , 
SENHA VARCHAR(255) NOT NULL , 
TIPO_USUARIO CHAR(1) NOT NULL);


-- Criar a tabela categorias
CREATE TABLE tb_categorias (
    id_categoria INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50) NOT NULL,
    descricao TEXT NULL
);

-- Insere categorias
INSERT INTO tb_categorias (nome, descricao)
VALUES
('Casa', 'Almofadas, enfeites, figure actions, etc...'),
('Roupas', 'Vestuário masculino, feminino e infantil'),
('Calçados', 'Botas, chinelos, tênis, etc...'),
('Livros', 'Mangás e HQS');


-- Criar a tabela produtos
CREATE TABLE tb_produtos (
    id_produto INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    descricao TEXT,
    image_url VARCHAR(255),
    valor DOUBLE(10, 2) NOT NULL,
    id_categoria INT NOT NULL,
    estoque INT DEFAULT 0,
    data_criacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_categoria) REFERENCES tb_categorias(id_categoria)
);

CREATE TABLE tb_clientes (
    id_cliente INT AUTO_INCREMENT PRIMARY KEY,
    id_usuario INT NOT NULL,
	compras_realizadas INT DEFAULT 0,
    telefone VARCHAR(20),
    FOREIGN KEY (id_usuario) REFERENCES tb_usuarios(id_usuario)
);

CREATE TABLE tb_funcionarios (
    id_funcionario INT AUTO_INCREMENT PRIMARY KEY,
    id_usuario INT NOT NULL,
    cargo VARCHAR(100) NOT NULL,
    FOREIGN KEY (id_usuario) REFERENCES tb_usuarios(id_usuario)
);

CREATE TABLE tb_vendas (
    id_venda INT AUTO_INCREMENT PRIMARY KEY,
    id_cliente INT NOT NULL,
    id_produto INT NOT NULL,
    quantidade INT NOT NULL,
    valor_total DOUBLE(10, 2) NOT NULL,
    data_venda TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_cliente) REFERENCES tb_clientes(id_cliente),
    FOREIGN KEY (id_produto) REFERENCES tb_produtos(id_produto)
);
