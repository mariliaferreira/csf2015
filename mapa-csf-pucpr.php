<?php
require("cab.php");
?>
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <?php
        require('componentes/nav.php');
        ?>



        <div class="page-header">
          <h1>Mapa dos bolsistas Ciência sem Fronteiras</h1>
        </div>

        <div class="indicadores-paragrafo">

          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>

        </div>
        
<!--
        <section>
          <div class="tabs tabs-style-iconbox">
            <nav>
              <ul>
                <li><button><a href="#section-iconbox-1">Todos</a></button></li>
                <li><button><a href="#section-iconbox-2">América do Norte</a></button></li>
                <li><button><a href="#section-iconbox-3">Ásia</a></button></li>
                <li><button><a href="#section-iconbox-4">Europa</a></button></li>
                <li><button><a href="#section-iconbox-5">África</a></button></li>
                <li><button><a href="#section-iconbox-6">Oceania</a></button></li>
              </ul>
            </nav>
            
            <div class="content-wrap">
              <section id="section-iconbox-1">
                <p>1</p>
              </section>
              <section id="section-iconbox-2"><p>2</p></section>
              <section id="section-iconbox-3"><p>3</p></section>
              <section id="section-iconbox-4"><p>4</p></section>
              <section id="section-iconbox-5"><p>5</p></section>
              <section id="section-iconbox-6"><p>6</p></section>
            </div>
          </div>
      </section>
-->
      <?php
        require("index_students.php");
      ?>

      <!-- FOOTER -->
      <?php
        require('componentes/footer.php');
        ?>

    </div><!-- /.container -->

    </div>
  </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="js/vendor/holder.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>

    <script src="js/cbpFWTabs.js"></script>
    <script>
      (function() {

        [].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
          new CBPFWTabs( el );
        });

      })();
    </script>
  </body>
</html>


  