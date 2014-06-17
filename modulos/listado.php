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

</html>
    
