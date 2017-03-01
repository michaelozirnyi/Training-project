<?php 

	get_header();

	if( have_posts() ){
		while( have_posts() ) { 
			the_post(); 

			get_template_part( 'content-single');

		} 
	} else {
			echo '<p>No content foud</p>';
		}

	get_footer();

 ?>