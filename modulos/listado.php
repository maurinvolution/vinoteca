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
            <li><a href="#">más</a></li>
        </ul>
    </li>
    <li class="oculto">Cepa 
        <ul class="sombra">
            <?php
            while ( $resu_cepa = @mysql_fetch_array($sql_cepa) ) 
            {
                echo '<li><a href="#">'.$resu_cepa[descripcion].'</a></li>';
            }
            ?>
            <li><a href="#">más</a></li>
        </ul>
    </li>
    <li class="oculto">Bodega 
        <ul class="sombra">
            <?php
            while ( $resu_bodega = @mysql_fetch_array($sql_bodega) ) 
            {
                echo '<li><a href="#">'.$resu_bodega[descripcion].'</a></li>';
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
     <?php
        while ( $resu_prod = @mysql_fetch_array($sql_cepa) ) 
        {
            echo "<img src='$resu_sql[img]'>";
            echo "<h1>$resu_prod[marca]</h1>"; //<!-- nombre de prod -->
            echo "<h3>$resu_prod[precio]</h3>";  // <!-- precio -->
            echo "<p>$resu_prod[stock]</p>"; //<!-- stock -->
            echo "<p>$resu_prod[caracteristica]</p>";    //<!-- caracteristicas -->
        }?>
    </div>
</section>
