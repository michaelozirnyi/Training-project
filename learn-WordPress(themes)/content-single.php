<article class="post">

	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

	<p class="post-info">
		<?php the_time('F jS, Y'); ?> | by <a href="<?php echo get_author_posts_url( get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> | Posted in

		<?php 
			$categories = get_the_category();
			$separator = ', ';
			$output = '';

			if( $categories ) {

				foreach ($categories as $category ) {
					
					$output .= '<a href=" ' . get_category_link( $category->term_id ) . ' "> ' . $category->cat_name . '</a>' . $separator;

				}

				echo trim( $output, $separator );
			}
		 ?>
	</p>

	<?php  the_post_thumbnail( 'bunner-image' ); ?>

	<?php the_content(); ?>

	<div class="about-author">
		<div class="about-author-img">
			<?php echo get_avatar( get_the_author_meta( 'ID' ), 150 ); ?>
			<p><?php echo get_the_author_meta( 'nickname' ); ?></p>
		</div>

		<?php $otherAuthorPosts = new WP_Query( array(
			'author'		 => get_the_author_meta( 'ID' ),
			'posts_per_page' => 3,
			'posts__not_in'  => array( get_the_ID()) 

		)); ?>

		<div class="about-author-text">
			<h3>About author</h3>
			<?php echo get_the_author_meta( 'description' ); ?>

			<?php if ( $otherAuthorPosts->have_posts()) { ?>
				<div class="other-post-by">
					<h5>Other Posts by <?php echo get_the_author_meta( 'nickname' );?></h5>
					<ul>
						<?php while( $otherAuthorPosts->have_posts()) {
							$otherAuthorPosts->the_post(); ?>

							<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

						<?php } wp_reset_postdata(); ?>

						<?php if( count_user_posts( get_the_author_meta('ID')) >3 ) { ?>
							<a class="btn-a" href="<?php echo get_author_posts_url( get_the_author_meta('ID')); ?>">View all posts by <?php echo get_the_author_meta('nickname'); ?></a>
						<?php } ?>
					</ul>
				</div>
			<?php } ?>
		</div>
	</div>

</article>	