<?php 

	get_header(); ?>

	<div class="site-content">		

		<?php if( have_posts() ){
			while( have_posts() ) { 
				the_post(); ?>


				<article class="post page">

					<?php 

						if ( has_children() OR $post->post_parrent > 0 ) { ?>

							<nav class="site-nav children-links clearfix">
								<span class="parent-link">
									<a href="<?php echo get_the_permalink(get_top_ancestor_id()); ?>"><?php echo get_the_title(get_top_ancestor_id()); ?></a>
								</span>

								<ul>
									<?php 
										$args = array(
											'child_of' => get_top_ancestor_id(),
											'title_li' => ''

										)
									?>

									<?php wp_list_pages( $args ); ?>

								</ul>
							</nav>

						<?php } ?>

					<h2><?php the_title(); ?></h2>
					<?php the_content(); ?>
				</article>	

			<?php

			} 
		} else {
				echo '<p>No content foud</p>';
			} ?>

		<h2>Blog Posts About Us</h2>
		<?php 

			$ourCurrentPage = get_query_var( 'paged' );

			$aboutPosts = new WP_Query( array(
				'category_name' => 'about',
				'posts_per_page' => 2,
				'paged' => $ourCurrentPage
			));

			if ( $aboutPosts->have_posts()) {
				while ( $aboutPosts-> have_posts()) { 
					$aboutPosts->the_post(); ?>

					<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

				<?php }
				echo paginate_links( array(
					'total' => $aboutPosts->max_num_pages
				));
			} 
		 ?>
	</div>	

	<?php get_footer();

 ?>