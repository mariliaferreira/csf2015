<?php

	require('../_class/_class_csf.php');
	$csf = new csf;
	$total = $csf->total_bolsistas();
	
	echo '<div id="content">';
	echo '<div style="text-align: justify">';
	$txt = msg("csf_mapa");
	$txt = troca($txt,' 50 ',' '.$total.' '); 
	echo $txt;
	echo '</div>';
	
	echo $csf->estudante_perfil();
	echo '</div>';

?>
