<?php 

    get_header(); 
    the_post();

    ?>
        <h1><?php the_title();?></h1>
        <?php the_content();?>

    
    <?php

    get_template_part("partes/suscripcion");

    get_footer();


?>