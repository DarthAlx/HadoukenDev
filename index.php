<?php include "../revslider/embed.php"; ?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Hadouken Dev</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.js"></script>
        <!-- jQuery REVOLUTION Slider  -->
        <script type="text/javascript" src="js/jquery.themepunch.plugins.min.js"></script>
        <script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>
        <!-- REVOLUTION BANNER CSS SETTINGS -->
        <link rel="stylesheet" type="text/css" href="css/extralayers.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="css/settings.css" media="screen" />
        <?php RevSliderEmbedder::headIncludes(); ?>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">Estas usando un Navegador <strong>Muy desactualizado</strong>. Porfavor <a href="http://browsehappy.com/">actualiza tu navegador</a> para una mejor experiencia.</p>
        <![endif]-->
      <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Abrir Navegación</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand hidden-xs" href="/"><img src="img/logo.png" alt=""></a>
            <a class="navbar-brand visible-xs" href="/"><img src="img/logo-mini.png" alt="" class="img-responsive"></a>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="#">Inicio</a></li>
              <li><a href="#">Nosotros</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Servicios <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Rediseños</a></li>
                  <li><a href="#">Imágen Corporativa</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#">Páginas Web</a></li>
                  <li><a href="#">Tiendas Virtuales</a></li>
                  <li><a href="#">Sitios Administrables</a></li>
                  <li><a href="#">Sistemas Web</a></li>
                </ul>
              </li>
              <li><a href="#">Contacto</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
      </nav>
      <!--inicia Slider-->
      <?php RevSliderEmbedder::putRevSlider('principal'); ?>
      <!--termina Slider-->
      <section class="iconos">
        <div class="container">
          <div class="row text-center">
            <div class="icono col-md-3 col-sm-6">
              <i class="fa fa-mobile" aria-hidden="true"></i>
              <h2>Diseño Responsivo.</h2>
              <p>Lleva tu idea a cualquier dispositivo con solo diseñarlo una vez.</p>
            </div>
            <div class="icono col-md-3 col-sm-6">
              <i class="fa fa-flask" aria-hidden="true"></i>
              <h2>Ultima Tecnología.</h2>
              <p>Tu sitio desarrollado con las mejores y más actuales herramientas.</p>
            </div>
            <div class="icono col-md-3 col-sm-6">
              <i class="fa fa-rocket" aria-hidden="true"></i>
              <h2>Máximo Alcance.</h2>
              <p>Has llegar tus ideas a esos lugares que jamas imaginaste.</p>
            </div>
            <div class="icono col-md-3 col-sm-6">
              <i class="fa fa-wrench" aria-hidden="true"></i>
              <h2>Proyectos Adaptables.</h2>
              <p>Te presentamos los recursos justos para tus necesidades.</p>
            </div>
          </div>
        </div>
      </section><!--iconos-->
      <section class="coding">
        <div class="contenido">
          <h1>La Tecnología a tu Servicio </h1>
          <div class="row">
            <div class="col-xs-10 col-xs-offset-1">
              <p>Nuestro trato es 100% personal, asi podemos adecuar nuestras herramientas a tus necesidades. </p>
            </div>
          </div>
          <div class="botones">
            <a class="b1" href="#">Contáctanos</a>
          </div>
        </div>
      </section><!--/coding-->
      <!-- MailChimp -->
      <section class="mailchimp">
        <div class="container">
          <div id="mc_embed_signup">
            <form action="//hadoukendev.us13.list-manage.com/subscribe/post?u=1b365a2620ec20f5442e95b55&amp;id=3189da9fc7" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank">
                <div class="titulo-news text-center">
            	     <h2>Suscríbete y recibe ofertas impresionantes!</h2>
                </div>
                <div class="row tex-center">
                  <div class="input-group col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8 col-xs-10 col-xs-offset-1">
                  	<span class="input-group-addon correo-chimp">Correo Electrónico  <span class="asterisk">*</span></span>
                  	<input type="email" value="" name="EMAIL" class="form-control required email" id="mce-EMAIL" required>
                    <span class="input-group-btn">
                      <input type="submit" value="Suscribete" name="subscribe" id="mc-embedded-subscribe" class="btn btn-default">
                    </span>
                  </div>
                  <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                  <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_1b365a2620ec20f5442e95b55_3189da9fc7" tabindex="-1" value=""></div>
                </div>
            </form>
          </div>
        </div>
      </section><!--MailChimp /-->
      <!--footer-->
      <footer>
        <div class="container">
          <div class="row">
            <div class="social col-md-6 col-xs-12">
              <a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
              <a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
              <a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
              <a href="#"><i class="fa fa-youtube-square" aria-hidden="true"></i></a>
            </div>
            <div class="copyright col-md-6 col-xs-12">
              <p>© 2016 Hadouken Dev. Todos los derechos reservados.</p>
            </div>
          </div>
        </div>
      </footer>
      <!--/footer-->
      <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
      <script src="js/vendor/bootstrap.min.js"></script>
      <script src="js/main.js"></script>

      <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
      <script>
          (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
          function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
          e=o.createElement(i);r=o.getElementsByTagName(i)[0];
          e.src='//www.google-analytics.com/analytics.js';
          r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
          ga('create','UA-XXXXX-X','auto');ga('send','pageview');
      </script>
    </body>
</html>
