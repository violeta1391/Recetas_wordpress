<!DOCTYPE HTML>
<html>
<head>
   <meta charset='utf-8'>
   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
   <title><?php bloginfo("name") ?> | <?php bloginfo("description") ?> </title>
    <?php wp_head(); ?>

</head>

<body>

	<div id="contenedor">

		<div id="encabezado">

			<a href="<?php echo home_url()."/"; ?>" class="logo">
				<img src= "<?php echo get_stylesheet_directory_uri();?>/imagenes/logo.jpg" />
			</a>

            <?php get_template_part("partes/menu");?>

		</div>
