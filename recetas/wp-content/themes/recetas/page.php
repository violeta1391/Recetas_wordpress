<?php 

    get_header(); 
    the_post();

    ?>
        <h1><?php the_title();?></h1>
        <?php the_content();?>

			<div id="columnas">

				<div id="contenido-izquierda">

                <h1><?php the_title();?></h1>

					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
					<p>

						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>

				</div>

				<div id="barra-lateral">
					<h4>Síguenos en:</h4>
					<img src= "<?php echo get_stylesheet_directory_uri();?>/imagenes/siguenos.jpg" />
				</div>

			</div>
    
    <?php

    get_template_part("partes/suscripcion");

    get_footer();


?>