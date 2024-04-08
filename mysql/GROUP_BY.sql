SELECT	
	interesse, COUNT(*) as total_por_interesse
FROM 
	tb_alunos
GROUP BY interesse;

SELECT	
	estado, COUNT(*) as total_por_estado
FROM 
	tb_alunos
GROUP BY 
	estado;
    
SELECT	
	*
FROM 
	tb_alunos
WHERE
	estado = 'ES';