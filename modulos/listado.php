<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Su Bodega</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <header>
        <nav id="nav">
        <ul>
            <li><a href="#">Vinos</a></li>
            <li><a href="#">Whiskies</a></li>
            <li><a href="#">Champagne</a></li>
            <li><a href="#">Regalos empresariales</a></li>
            <li><a href="#">Bebidas de alto grado</a></li>
            <li><a href="#">Accesorios</a></li>
            <li><a href="#">Buscar</a></li>
            <li><a href="#">Promocioness</a></li>
            
        </ul>
        </nav>
        </header>

        <aside>
        <nav>
            <ul>
                <li class="oculto">Color 
                    <ul class="sombra">
                        <li><a href="#">Tintos</a></li>
                        <li><a href="#">Blancos</a></li>
                        <li><a href="#">Rosé</a></li>
                        <li><a href="#">Otro+</a></li>
                    </ul>
                </li>
                <li class="oculto">Cepa 
                    <ul class="sombra">
                        <?php
                        while ( $resu_cepa = @mysql_fetch_array($sql_cepa) ) 
                        {
                            echo '<li><a href="#">'.$resu_os[descripcion].'</a></li>';
                        }                        
                        ?>
                        <li><a href="#">más</a></li>
                    </ul>
                </li>
                <li class="oculto">Bodega 
                    <ul class="sombra">
                        <?php
                        while ( $resu_cepa = @mysql_fetch_array($sql_cepa) ) 
                        {
                            echo '<li><a href="#">'.$resu_os[descripcion].'</a></li>';
                        }                        
                        ?>
                        <li><a href="#">más</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        </aside>


        <section>
            <div id="producto">
                <img src="#">
                <p></p>
            </div>
        </section>
    
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>
    