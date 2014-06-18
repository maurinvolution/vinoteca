<section>
    <div id="producto">
    	<?php
        echo "<img src='$resu_sql[img]'>";
        echo "<h1>$resu_sql[marca]</h1>";   //<!-- nombre de prod -->
        echo "<h3>$resu_sql[precio]</h3>";	// <!-- precio -->
        echo "<p>$resu_sql[stock]</p>";	    //<!-- stock -->
        echo "<p>$resu_sql[caracteristica]</p>";	//<!-- caracteristicas -->
        echo "<p>$resu_sql[descripcion]</p>"; 	//<!-- descripcion -->
        ?>
    </div>
</section>
