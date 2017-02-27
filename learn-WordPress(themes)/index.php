<?php 

	get_header();

	if( have_posts() ){
		while( have_posts() ) { 
			the_post(); ?>


			<article class="post">
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

				<p class="post-info"><?php the_time('F jS, Y'); ?> | <?php the_author(); ?></p>

				<?php the_content(); ?>
			</article>	

		<?php

		} 
	} else {
			echo '<p>No content foud</p>';
		}

	get_footer();

 ?>