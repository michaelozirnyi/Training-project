<?php 

/*
Template Name: Special Template
*/

	get_header();

	if( have_posts() ){
		while( have_posts() ) { 
			the_post(); ?>


			<article class="post">
				<h2><?php the_title(); ?></h2>

				<div class="info-box">
					<h4>Disclamer Title</h4>
					<p>Lorem ipsum dolor dummy text, sit amet, ipsum dolor dummy text, sit amet,...</p>
				</div>

				<?php the_content(); ?>
			</article>	

		<?php

		} 
	} else {
			echo '<p>No content foud</p>';
		}

	get_footer();

 ?>