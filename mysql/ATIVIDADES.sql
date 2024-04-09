SELECT 
	* 
FROM 
	tb_clientes
WHERE 
	idade >= 29
ORDER BY 
	idade ASC;

ALTER TABLE tb_clientes 
	ADD sexo  CHAR(1) NOT NULL,
    ADD endereco VARCHAR(150) DEFAULT NULL;
 
UPDATE 
	tb_clientes
SET 
	sexo = 'M'
WHERE 
	id_cliente in (1,2);
    
UPDATE 
	tb_clientes
SET 
	sexo = 'F'
WHERE 
	id_cliente BETWEEN 4 AND 5 OR id_cliente BETWEEN 8 AND 10;
    
SELECT 
	c.id_cliente,
    c.nome,
    c.idade,
    prod.produto,
    prod.valor
FROM tb_clientes as c 
	INNER JOIN tb_pedidos as ped ON (c.id_cliente = ped.id_cliente)
	INNER JOIN tb_pedidos_produtos as tpp ON (tpp.id_pedido = ped.id_pedido)
    LEFT JOIN tb_produtos as prod ON (prod.id_produto = tpp.id_produto);