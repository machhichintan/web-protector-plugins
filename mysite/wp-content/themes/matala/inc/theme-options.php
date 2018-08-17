<?php
/**
 * Matala Theme Options (now all 100% Customizer)
 *
 * @package WordPress
 * @subpackage Matala
 */

add_action( 'customize_register', 'matala_customize_register' );
function matala_customize_register( $wp_customize ) {	
	$wp_customize->get_section('background_image')->description= __( 'Because of the special design of the Matala theme, a background image is not recommended.', 'matala' );
	$wp_customize->get_section('header_image')->description= __( 'Because of the special design of the Matala theme, a header image is not recommended.', 'matala' );
	
	$wp_customize->add_section( 'matala_random_photos', array(
		'title'          => __( 'Random Photos', 'matala' ),
		'priority'       => 90,
		'active_callback' => 'matala_is_attachment',
		'description'    => __( 'On Image Attachment pages, Matala can show three random photos from your photo galleries at the bottom of the page, linked to those photos. A fun way to browse your photo galleries!', 'matala' ),
	) );
	
	$wp_customize->add_setting( 'matala_theme_options[show_random_photos]', array(
		'default'        => false,
		'type'           => 'option',
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'matala_sanitize_boolean',
	) );
	
	$wp_customize->add_setting( 'matala_theme_options[random_photos_header]', array(
		'default'           => __('Random Photos', 'matala'),
		'type'              => 'option',
		'capability'        => 'edit_theme_options',
		'description'       => __('Text to use for the header above the random photos area.','matala'),
		'sanitize_callback' => 'sanitize_text_field',
		'transport'         => 'postMessage',
	) );

	$wp_customize->add_control( 'matala_show_random_photos', array(
		'settings' => 'matala_theme_options[show_random_photos]',
		'label'    => __( 'Show Random Photos?', 'matala' ),
		'section'  => 'matala_random_photos',
		'type'     => 'checkbox',
	) );

	$wp_customize->add_control( 'matala_random_photos_header', array(
		'settings' => 'matala_theme_options[random_photos_header]',
		'label'    => __( 'Random Photos Gallery header', 'matala' ),
		'section'  => 'matala_random_photos',
		'type'     => 'text',
		'active_callback' => 'matala_is_random_photos_enabled',
	) );
	
	if ( $wp_customize->is_preview() && ! is_admin() ) {
		add_action( 'wp_footer', 'matala_customize_preview', 21);
	}
}

function matala_customize_preview() {
    ?>
    <script type="text/javascript">
    ( function( $ ){
    wp.customize('matala_theme_options[random_photos_header]',function( value ) {
        value.bind(function(to) {
            $('.random-gallery-title').text(to);
        });
    });
    } )( jQuery )
    </script>
    <?php 
} 

function matala_is_attachment() {
	return is_singular('attachment');
}

function matala_is_random_photos_enabled( $control ) {
	return $control->manager->get_setting( 'matala_theme_options[show_random_photos]')->value();
}

function matala_sanitize_boolean( $input ) {
	return (bool) $input;
}
