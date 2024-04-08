SELECT * FROM tb_alunos;

UPDATE 
	tb_alunos
SET 
	nome = 'João'
WHERE
	id_aluno = 13;

SELECT * FROM tb_alunos WHERE idade >= 80;

UPDATE 
	tb_alunos
SET 
	interesse = 'Saúde'
WHERE 
	idade >= 80;

UPDATE 
	tb_alunos
SET 
	nome = 'José', idade = 25, email = 'jose@gmail.com'
WHERE
	id_aluno = 18;
    
SELECT
	*
FROM
	tb_alunos
WHERE
	idade between 18 and 25 and estado = 'PA';

UPDATE 
	tb_alunos
SET 
	nome = 'Maria'
WHERE
	idade between 18 and 25 and estado = 'PA';