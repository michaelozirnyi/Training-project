<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>

    <link rel="stylesheet" type="text/css" href="/style.css">

</head>
<body <?php body_class(); ?>>

	<div class="container">
		
		<header class="site-header">
			<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
			<h5><?php bloginfo('description'); ?><?php if ( is_page('portfolio') ) { ?>
				- Thank you for viewing our work 
			<?php } ?></h5>
			
			
			<nav class="site-nav">

				<?php 

					$args = array(
						'theme_location' => 'primary'
					);

				 ?>

				<?php wp_nav_menu( $args ); ?>
			</nav>

		</header> 


