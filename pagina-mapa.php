<?php
require('cab.php');
?>
  <body>
    <div class="navbar-wrapper">
      	<div class="container">
	        <?php
	        require('componentes/nav.php');
	        ?>
	        <div class="page-header">
	          	<h1>Bolsistas Ci�ncia sem Fronteiras no mundo</h1>
	        </div>
	        <div class="container">
	        	<p>Voltar para <a href="http://www2.pucpr.br/reol/cienciasemfronteiras/indicadores.php">indicadores</a></p>
	        </div>
	      	<?php
	        require('index_students.php');
	        ?>
	      	<!-- FOOTER -->
	      	<?php
	        require('componentes/footer.php');
	        ?>
    	</div><!-- /.container -->
    </div>
  </div>
  </body>
</html>