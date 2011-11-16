<?php

// Load a jQuery from WordPress the local copy. and enqueue all other scripts
function my_scripts_method() {
    wp_register_script('customs',get_template_directory_uri() . '/javascripts/jquery.reveal.js','','',true);
    wp_register_script('orbitcc',get_template_directory_uri() . '/javascripts/jquery.orbit-1.3.0.js','','',true);
    wp_register_script('customformscc',get_template_directory_uri() . '/javascripts/jquery.customforms.js','','',true);
    wp_register_script('placeholdercc',get_template_directory_uri() . '/javascripts/jquery.placeholder.min.js','','',true);
    wp_register_script('jswipecc',get_template_directory_uri() . '/javascripts/jswipe.js','','',true);
    wp_register_script('tooltipcc',get_template_directory_uri() . '/javascripts/tooltip.js','','',true);
    wp_register_script('appcc',get_template_directory_uri() . '/javascripts/app.js','','',true);

    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'customs' );
    wp_enqueue_script( 'orbitcc' );
    wp_enqueue_script( 'customformscc' );
    wp_enqueue_script( 'placeholdercc' );
    wp_enqueue_script( 'jswipecc' );
    wp_enqueue_script( 'tooltipcc' );
    wp_enqueue_script( 'appcc' );
}    
 
add_action('wp_enqueue_scripts', 'my_scripts_method');

// Disable the admin bar, set to true if you want it to be visible.
show_admin_bar(FALSE);

add_theme_support( 'post-thumbnails' );
add_theme_support( 'automatic-feed-links' );

// Orbit, for WordPress

add_action('init', 'Orbit');

function Orbit(){
	$Orbit_args = array(
		'label'	=> __('Orbit'),
		'singular_label' =>	__('Orbit'),
		'public'	=>	true,
		'show_ui'	=>	true,
		'capability_type'	=>	'post',
		'hierarchical'	=>	false,
		'rewrite'	=>	true,
		'supports'	=>	array('title', 'editor','page-attributes','thumbnail')
		);
		register_post_type('Orbit', $Orbit_args);
}

// Orbit, for WordPress
// Call this where you want the slider

function SliderContent(){

	$args = array( 'post_type' => 'Orbit');
	$loop = new WP_Query( $args );
		while ( $loop->have_posts() ) : $loop->the_post();
						the_post_thumbnail();
		endwhile;

}
?>