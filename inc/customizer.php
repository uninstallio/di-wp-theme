<?php
/**
 * deepinsights Theme Customizer.
 *
 * @package deepinsights
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function deepinsights_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	$wp_customize->add_setting( 'footer_logo' );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'footer_logo', array(
        'label'    => __( 'Upload Logo for footer', 'footer' ),
        'section'  => 'title_tagline',
        'settings' => 'footer_logo',
  )));
}
add_action( 'customize_register', 'deepinsights_customize_register' );

// Logo Controls


/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function deepinsights_customize_preview_js() {
	wp_enqueue_script( 'deepinsights_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'deepinsights_customize_preview_js' );
