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

  wp_register_script( 'bareplate', get_template_directory_uri() . '/js/core' .( $GLOBALS['bareplate_minify'] ? '.min':'' ). '.js', array(), '', true );
  wp_enqueue_script(  'bareplate' );
}

/**
 * Base stylesheet
 */
function bareplate_css() {
  $style_name = 'style';
  $style_name = $style_name . ( $GLOBALS['bareplate_minify'] ? '.min':'' ) . '.css';
  wp_enqueue_style( 'bareplate', get_template_directory_uri() . '/' . $style_name );
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
  if ( is_page_template( get_folder_path( $name, 'php' ) ) )
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

  wp_enqueue_style(  $name, get_template_uri( get_folder_path( $name, ( $GLOBALS['bareplate_minify'] ? 'min':'' ). '.css' ) ) );
  wp_enqueue_script( $name, get_template_uri( get_folder_path( $name, ( $GLOBALS['bareplate_minify'] ? 'min':'' ). '.js' ) ), array(), '', true );

}