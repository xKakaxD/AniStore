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

INSERT INTO tb_produtos (
    nome, descricao, image_url, valor, id_categoria, estoque, destaque
) VALUES
 ('Camisa Trio Kimetsu', 'A beleza do anime Kimetsu No Yaiba agora com você', 'https://i.imgur.com/fRPIUIP.jpeg', 90.00, 2, 11, FALSE),
 ('Blusa Algodão One Piece', 'O conforto do seu melhor anime com uma estampa digna', 'https://i.imgur.com/wCwRYlb.jpeg', 90.00, 2, 7, FALSE),
 ('Blusa The Starters', 'Uma bela camisa seguindo uma bela refência', 'https://i.imgur.com/Bu6Y9ML.jpeg', 90.00, 2, 19, FALSE),
 ('Camisa Gojo Satoru', 'Entre o céu e a terra, seja o mais honrado', 'https://i.imgur.com/7MMwQMb.jpeg', 90.00, 2, 22, FALSE),
 ('Almofada Luffy Gear 5', 'Macia e flexivel como borracha para maior conforto', 'https://i.imgur.com/4hEhFgf.jpeg', 28.90, 1, 4, FALSE),
 ('Camisa Sakura', 'Uma blusa que destaca sua beleza e força', 'https://i.imgur.com/3u9gn5f.jpeg', 90.00, 2, 12, FALSE),
 ('Camisa Sasuke', 'Seja forte e estiloso com essa novidade', 'https://i.imgur.com/lGrfCOC.jpeg', 90.00, 2, 26, FALSE),
 ('Firure action Crollo', 'Lider da trupe Fantasma', 'https://i.imgur.com/gOZNfWX.jpeg', 50.00, 1, 5, FALSE),
 ('Figure action Killua ', 'Killua Zoldyck', 'https://i.imgur.com/VWcf8Sr.jpeg', 50.00, 1, 8, FALSE)
;
