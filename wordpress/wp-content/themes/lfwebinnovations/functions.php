<?php

function lfwebinnovations_scripts() {

  wp_enqueue_style('lfwebinnovations-theme-styles', get_template_directory_uri() . '/css/styles.css','','1.0',false);
  wp_enqueue_style('lfwebinnovations-styles', get_stylesheet_uri(),'','1.0',false);

  wp_enqueue_script('lfwebinnovations-javascript', get_template_directory_uri() . '/js/index.js','','1.0',true);
}

add_action('wp_enqueue_scripts', 'lfwebinnovations_scripts');

function lfwebinnovations_widgets_init() {

	register_sidebar( array(
		'name'          => 'Contact Form',
		'id'            => 'contact_form'
	) );

}
add_action( 'widgets_init', 'lfwebinnovations_widgets_init' );