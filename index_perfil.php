<?
	require('../_class/_class_csf.php');
	$csf = new csf;
	
	$total = $csf->total_bolsistas();
?>
<body style="font-family: Arial;border: 0 none;">
<div style="text-align: justify">

</div>


<!--Chama metodo que gerar os dados -->
<!--	<center><?php echo $csf->estudante_perfil();     ?></center>
<!--	<center><?php echo $csf->estudantes_em_viagem(); ?></center>
<!--	<center><?php echo $csf->estudantes_em_viagem_campus(); ?></center>	
<!--Chama metodo que gera a relacao dos alunos por curso e pais -->		
<!--	<center><?php echo $csf->lista_inscritos();?></center>-->		
<!--<center><?php echo $csf->query_todos();?></center>
<!--<center><?php echo $csf->aluno_por_universidade();?></center>-->
<center><?php echo $csf->estudantes_genero();?></center>
<center><?php echo $csf->grafico_estudantes_genero();?></center>






 	