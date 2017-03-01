<?php 

	function learningWordPress_resources() {

		wp_enqueue_style('style', get_stylesheet_uri());
	}

	add_action('wp_enqueue_scripts', 'learningWordPress_resources');



// Get top ancestor 
function get_top_ancestor_id() {

	global $post;

	if( $post-> post_parent ) {
		$ancestors = array_reverse(get_post_ancestors( $post->ID ));
		return $ancestors[0];

	}

	return $post->ID;
}


// Does page have children?

function has_children() {

	global $post;

	$pages = get_pages( 'child_of=' . $post->ID );
	return count( $pages );
}

// Customize excerpt word count ltnght
function custom_excerpt_lenght() {
	return 25;
}

add_filter( 'excerpt_lenght', 'custom_excerpt_lenght' );


// Theme Setup
function setup_featured_image() {

	// Navigation Menus
	register_nav_menus( array(
		'primary' => __( 'Primary Menu' ),
		'footer' => __( 'Footer Menu' ),

	));

	// Add featured image support
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'small-thumbnail', 180, 120, true );
	add_image_size( 'bunner-image', 920, 270, array( 'left', 'top' ));

	// Add post format support
	add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link' ));

}

add_action( 'after_setup_theme', 'setup_featured_image' );


// Add Our Widget Locations
function ourWidgetInit() {

	register_sidebar( array(
			'name' 			=> 'Sidebar',
			'id'   			=> 'sidebar1',
			'before_widget' => '<div class="widget-item">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="my-spesial-class">',
			'after_title'   => '</h4>'
	));

	register_sidebar( array(
			'name' => 'Foter Area 1',
			'id'   => 'footer1'
	));

	register_sidebar( array(
			'name' => 'Foter Area 2',
			'id'   => 'footer2'
	));

	register_sidebar( array(
			'name' => 'Foter Area 3',
			'id'   => 'footer3'
	));

	register_sidebar( array(
			'name' => 'Foter Area 4',
			'id'   => 'footer4'
	));
}

add_action( 'widgets_init', 'ourWidgetInit' );


// Cuspomize Appearance Options
function learningWordPress_customize_rigister( $wp_customize ) {

	$wp_customize->add_setting( 'lwp_link_color', array(
		'default'   => '#006ec3',
		'transport' => 'refresh',
	));

	$wp_customize->add_setting( 'lwp_btn_color', array(
		'default'   => '#006ec3',
		'transport' => 'refresh',
	));

	$wp_customize->add_section( 'lwp_standard_colors', array(
		'title'    => __('Standard Colors', 'LearningWP'),
		'priority' => 30,
	));

	$wp_customize->add_control( new WP_customize_Color_control( $wp_customize, 'lwp_link_color_control', array(
		'label'    => __('Link Color', 'LearningWP'),
		'section'  => 'lwp_standard_colors',
		'settings' => 'lwp_link_color',
	))); 

	$wp_customize->add_control( new WP_customize_Color_control( $wp_customize, 'lwp_btn_color_control', array(
		'label'    => __('Button Color', 'LearningWP'),
		'section'  => 'lwp_standard_colors',
		'settings' => 'lwp_btn_color',
	))); 
}

add_action( 'customize_register', 'learningWordPress_customize_rigister' );


// Output Customize CSS
function learningWordPress_customize_css() { ?>
	
	<style type="text/css">

		a:link,
		a:visited {
			color: <?php echo get_theme_mod( 'lwp_link_color' ); ?>;
		}

		.site-header nav ul li.current-menu-item a:link,
		.site-header nav ul li.current-menu-item a:visited,
		.site-header nav ul li.current-page-ancestor a:link,
		.site-header nav ul li.current-page-ancestor a:visited {
			background-color: <?php echo get_theme_mod( 'lwp_link_color' ); ?>;
		}

		div.hd-search #searchsubmit
		/* Add here Buttons selector for customize styling */
		{
			background-color: <?php echo get_theme_mod( 'lwp_btn_color' ); ?>;
		}

	</style>


<?php }

add_action( 'wp_head', 'learningWordPress_customize_css' );


// Add Footer callout section to admin appereance customize screen
function lwp_footer_callout( $wp_customize ) {
	$wp_customize->add_section( 'lwp-footer-callout-section', array(
		'title' => 'Footer Callout',
	));




	$wp_customize->add_setting( 'lwp-footer-callout-display', array(
		'default' => 'No',
	));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'lwp-footer-callout-display-control', array(
		'label'    => 'Display this section?',
		'section'  => 'lwp-footer-callout-section',
		'settings' => 'lwp-footer-callout-display',
		'type'     => 'select',
		'choices'  => array( 'No' => 'No', 'Yes' => 'Yes')
	)));



	$wp_customize->add_setting( 'lwp-footer-callout-headline', array(
		'default' => 'Example Headline Text!',
	));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'lwp-footer-callout-headline-control', array(
		'label'    => 'Headline',
		'section'  => 'lwp-footer-callout-section',
		'settings' => 'lwp-footer-callout-headline',
	)));

	$wp_customize->add_setting( 'lwp-footer-callout-text', array(
		'default' => 'Example paragraph text...',
	));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'lwp-footer-callout-text-control', array(
		'label'    => 'Text',
		'section'  => 'lwp-footer-callout-section',
		'settings' => 'lwp-footer-callout-text',
		'type'     => 'textarea'
	)));

	$wp_customize->add_setting( 'lwp-footer-callout-link' );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'lwp-footer-callout-link-control', array(
		'label'    => 'Link',
		'section'  => 'lwp-footer-callout-section',
		'settings' => 'lwp-footer-callout-link',
		'type'     => 'dropdown-pages'
	)));

	$wp_customize->add_setting( 'lwp-footer-callout-img' );

	$wp_customize->add_control( new WP_Customize_Cropped_Image_Control( $wp_customize, 'lwp-footer-callout-img-control', array(
		'label'    => 'Image',
		'section'  => 'lwp-footer-callout-section',
		'settings' => 'lwp-footer-callout-img',
		'width'    => 750,
		'height'   => 500

	)));
}

add_action( 'customize_register', 'lwp_footer_callout' );