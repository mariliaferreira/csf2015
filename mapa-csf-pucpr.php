<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Ci�ncias sem Fronteiras</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/caroussel.css" rel="stylesheet">
    <link href="css/font-stylesheet.css" rel="stylesheet">

    
    <link rel="stylesheet" type="text/css" href="css/tabs.css" />
    <link rel="stylesheet" type="text/css" href="css/tabstyles.css" />

    <script src="js/modernizr.custom.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/npm.js"></script>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <?php
        require('componentes/nav.php');
        ?>



        <div class="page-header">
          <h1>Mapa dos bolsistas Ci�ncia sem Fronteiras</h1>
        </div>

        <div class="indicadores-paragrafo">

          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>

        </div>
        

        <section>
          <div class="tabs tabs-style-iconbox">
            <nav>
              <ul>
                <li><button><a href="#section-iconbox-1">Todos</a></button></li>
                <li><button><a href="#section-iconbox-2">Am�rica do Norte</a></button></li>
                <li><button><a href="#section-iconbox-3">�sia</a></button></li>
                <li><button><a href="#section-iconbox-4">Europa</a></button></li>
                <li><button><a href="#section-iconbox-5">�frica</a></button></li>
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
            </div><!-- /content -->
          </div><!-- /tabs -->
      </section>


      


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


  