<?php

$bareplate_minify = false;

/**
 * Enqueue styles and scripts
 */
function bareplate_scripts() {

	bareplate_js();
	bareplate_css();

	bareplate_tpl_page( 'tpl-home' );
	bareplate_tpl_page( 'tpl-location' );

}
add_action( 'wp_enqueue_scripts', 'bareplate_scripts' );


/**
 * Base scripts
 */
function bareplate_js() {

	wp_dequeue_script(    'jquery' );
	wp_deregister_script( 'jquery' );
	wp_register_script(   'jquery', '//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery' .( $GLOBALS['bareplate_minify'] ? '.min':'' ). '.js', array(), '1.11.1', true );
	wp_enqueue_script(    'jquery' );

	wp_register_script( 'bareplate', bareplate_tpl_uri( 'js/core' .( $GLOBALS['bareplate_minify'] ? '.min':'' ). '.js' ), array(), '', true );
	wp_enqueue_script(  'bareplate' );
}

/**
 * Base stylesheet
 */
function bareplate_css() {
	$style_name = 'style';
	$style_name = $style_name . ( $GLOBALS['bareplate_minify'] ? '.min':'' ) . '.css';
	wp_enqueue_style( 'bareplate', bareplate_tpl_uri( $style_name ) );
}


/**
 * Template types
 */
function bareplate_tpl_page_default( $name ) {
	global $post;
	if ( is_singular( 'page' ) && get_page_template_slug( $post->ID ) == "" ) {
		bareplate_tpl_assets( $name );
	}
}

function bareplate_tpl_404( $name ) {
	if ( is_404() )
		bareplate_tpl_assets( $name );
}

function bareplate_tpl_single( $name, $post_type ) {
	global $post;
	if ( $post->post_type == $post_type )
		bareplate_tpl_assets( $name . '-' . $post_type );
}

function bareplate_tpl_page( $name ) {
	if ( is_page_template( bareplate_tpl_path( $name, 'php' ) ) )
		bareplate_tpl_assets( $name );
}


function bareplate_tpl_taxonomy( $name, $taxonomy ) {
	if ( get_query_var('taxonomy') == $taxonomy )
		bareplate_tpl_assets( $name );
}


/**
 * Template assets
 */
function bareplate_tpl_assets( $name ) {

	wp_enqueue_style(  $name, bareplate_tpl_uri( bareplate_tpl_path( $name, ( $GLOBALS['bareplate_minify'] ? 'min':'' ). '.css' ) ) );
	wp_enqueue_script( $name, bareplate_tpl_uri( bareplate_tpl_path( $name, ( $GLOBALS['bareplate_minify'] ? 'min':'' ). '.js' ) ), array(), '', true );

}


/**
 * Template paths
 */
function bareplate_tpl_path( $name, $ext ) {

	if ( substr( $ext, 0, 1 ) === '-' ||
			 substr( $ext, 0, 1 ) === '.' )
		$path = trailingslashit( $name ) . $name . $ext;
	else
		$path = trailingslashit( $name ) . $name . '.' . $ext;

	return $path;

}

function bareplate_tpl_uri( $path ) {
	return trailingslashit( get_stylesheet_directory_uri() ) . $path;
}