
<?php 

	get_header(); ?>

		<div class="site-content clearfix">
			
			<h3>Custom HTML Here</h3>

			<?php if( have_posts() ){
				while( have_posts() ) { 
					the_post(); 

					the_content();

				} 
			} else {
					echo '<p>No content foud</p>';
				} ?>

			<div class="home-columns clearfix">
				<div class="one-half">
					<?php
					// Opinion posts loop begins here
					$opinionPosts = new WP_Query( 'cat=8&posts_per_page=2' );

					if ( $opinionPosts->have_posts()) {
						while ( $opinionPosts->have_posts()){
							$opinionPosts->the_post(); ?>

							<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

							<?php the_excerpt(); ?>

						<?php
						}
					} else {
						//fallback no content message here
					}
					wp_reset_postdata(); ?>
				</div>

				<div class="one-half last">
					<?php // News posts loop begins here
						$newsPosts = new WP_Query( 'cat=9&posts_per_page=2' );

						if ( $newsPosts->have_posts()) {
							while ( $newsPosts->have_posts()){
								$newsPosts->the_post(); ?>

								<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
								<?php the_excerpt(); ?>
								
							<?php
							}
						} else {
							//fallback no content message here
						}
						wp_reset_postdata();
					?>
				</div>
			</div>
		</div>

	<?php get_footer();

 ?>