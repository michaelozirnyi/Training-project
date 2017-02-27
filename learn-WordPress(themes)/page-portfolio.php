<?php 

	get_header();

	if( have_posts() ){
		while( have_posts() ) { 
			the_post(); ?>


			<article class="post page">

				<div class="column-container clearfix">

					<div class="title-column">
						<h2><?php the_title(); ?></h2>
					</div>

					<div class="text-columm">
						<?php the_content(); ?>
					</div>
					

				</div>
				
			</article>	

		<?php

		} 
	} else {
			echo '<p>No content foud</p>';
		}

	get_footer();

 ?>