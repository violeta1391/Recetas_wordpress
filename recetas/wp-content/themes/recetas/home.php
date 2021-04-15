<?php 

    get_header(); 
    the_post();

?>
        <h1>Blog</h1>
        
		<img src= "<?php echo get_stylesheet_directory_uri();?>/imagenes/imagen-blog.jpg" />

		<?php get_template_part("partes/suscripcion"); ?>	
		
		<h2>Blog: nuestras últimas recetas</h2>

			<div id="columnas">

				<div id="contenido-izquierda">

					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>

					<div id="lista-recetas">						
						<?php					
							$args = array (
								'post_type'  => 'post',
								'post_per_page'  => '-1'
							);
							
						$the_query = new WP_Query( $args ) ?>

						<?php if ( $the_query->have_posts() ) : ?>		

						<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?> 

						<div class="receta-listada">

							<?php the_post_thumbnail(); ?>

							<h3><?php the_title();?></h3>

							<div class="informacion">
								<?php echo get_the_date();?> - <?php the_author();?>
							</div>
						
							<?php the_excerpt();?>
							<a href="<?php the_permalink();?>">Ver receta</a>							
							
						</div>
													
						<?php endwhile; ?>

						<?php wp_reset_postdata(); ?>
							
						<?php else : ?>
							<h2><?php _e('sorry'); ?></h2>				
						<?php endif; ?>						
					</div>
				</div>
				

				<div id="barra-lateral">
					<h4>Síguenos en:</h4>
					<img src= "<?php echo get_stylesheet_directory_uri();?>/imagenes/siguenos.jpg" />
				</div>

			</div>
    
<?php get_footer(); ?>

