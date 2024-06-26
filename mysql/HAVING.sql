SELECT	
	estado, COUNT(*) as total_de_registros_por_estado
FROM 
	tb_alunos
GROUP BY 
	estado;
    
SELECT	
	estado, COUNT(*) as total_de_registros_por_estado
FROM 
	tb_alunos
GROUP BY 
	estado
HAVING
	total_de_registros_por_estado >= 5;

SELECT	
	estado, COUNT(*) as total_de_registros_por_estado
FROM 
	tb_alunos
GROUP BY 
	estado
HAVING
	estado IN ('MG', 'SP');

SELECT	
	estado, COUNT(*) as total_de_registros_por_estado
FROM 
	tb_alunos
GROUP BY 
	estado
HAVING
	estado IN ('CE', 'SC') AND total_de_registros_por_estado > 4;

SELECT	
	estado, COUNT(*) as total_de_registros_por_estado
FROM 
	tb_alunos
WHERE
	interesse != 'Esporte'
GROUP BY 
	estado
HAVING
	total_de_registros_por_estado > 3;