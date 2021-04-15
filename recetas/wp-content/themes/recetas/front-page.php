<?php 

    get_header(); 
    the_post();

    ?>
        <h1><?php the_title();?></h1>
        <?php the_content();?>

    		<div id="contenido-principal">
			<img src= "<?php echo get_stylesheet_directory_uri();?>/imagenes/imagen-home.jpg" />
			<h2>Ultimas Recetas</h2>
			<div id="lista-recetas">
				<div class="receta-listada">
					<img src= "<?php echo get_stylesheet_directory_uri();?>/imagenes/receta-1.jpg" />
					<h3>Pollo en Samuela al Limón</h3>
					<p>
						Retira la piel (pellejo) del pollo, excepto el de las alas, y deshazte del mismo. Pon todos los pedazos de pollo en una bolsa de plástico con cierre de tamaño grande; colócala en un molde poco profundo.
						Combina 2 tazas de agua con la cáscara de limón amarillo, la sal, el ajo y con las hierbas en una cacerola y haz que hiervan. Retira la cacerola del fuego; vierte su contenido en un tazón grande. Agrega el resto del agua, el aderezo y el hielo; revuelve hasta que se derrita el hielo. Vierte esta salmuera sobre el pollo; cierra la bolsa. Refrigera el pollo toda la noche.
						<a href="#">Ver receta</a>
					</p>
				</div>
				<div class="receta-listada">
                    <img src= "<?php echo get_stylesheet_directory_uri();?>/imagenes/receta-2.jpg" />
					<h3>Pizzas a la parrilla de pan pita con tomates y albahaca</h3>
					<p>
						Esta receta es fácil, rápida y se convertirá en el centro de atención de tu próxima parrillada. Prepara hoy mismo estas pizzas a la parrilla de pan pita.
						Para que se te haga más fácil picar la albahaca fresca, agarra las hojas por los tallos y colócalas sobre una tabla para cortar. Utilizando un cuchillo de chef con la punta hacia abajo, corta la albahaca con un movimiento de vaivén...
						<a href="#">Ver receta</a>
					</p>
				</div>
			</div>
    
    <?php

    get_template_part("partes/suscripcion");

    get_footer();


?>