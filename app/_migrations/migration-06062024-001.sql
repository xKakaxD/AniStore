--Adiciona o campo de destaque na tabela de produtos
ALTER TABLE tb_produtos
ADD COLUMN destaque BOOLEAN NOT NULL DEFAULT FALSE;

INSERT INTO tb_produtos (
    nome, descricao, image_url, valor, id_categoria, estoque, destaque
) VALUES
 ('Blusa tudo em um', 'Blusa dos animes Dragon Ball, Naruto, One Punch Man, One Piece e My Hero Academia.', 'https://i.imgur.com/ZtAP6z5.jpg', 90.00, 2, 10, TRUE),
 ('Conjunto de casal', 'Duas belas camisas para serem utilizadas com seu amor otaku ou otame.', 'https://i.imgur.com/Ubtvgys.jpg', 120.00, 2, 5, TRUE),
 ('Tênis Air Jordan', 'Pegue seus oponenes no basquete como o Inosuke de Demon Slayer pega suas presas com esse lindíssimo Air Jordan.', 'https://i.imgur.com/LW1mWt6.jpg', 1400.00, 2, 8, TRUE) 
;
