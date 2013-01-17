<div class="grid_8">
        
        <h1> <?php echo h($palestrante['Palestrante']['nome']); ?> </h1>

        <?php
        	$site = $palestrante['Palestrante']['url'];
        ?>

        <h2> <a href="http://<?php echo $site ?>"><?php echo $site; ?></a> </h2>

        <?php echo h($palestrante['Palestrante']['descricao']); ?> 
        


</div>