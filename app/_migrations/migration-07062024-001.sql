--SELECT PARA TODOS OS PRODUTOS OTIMIZADO SÓ COM OQ USA
SELECT image_url, nome, descricao, valor FROM tb_produtos;

--SELECT PARA OS PRODUTOS DESTAQUE OTIMIZADO SÓ COM OQ USA
SELECT image_url, nome, descricao, valor FROM tb_produtos WHERE destaque = TRUE;

