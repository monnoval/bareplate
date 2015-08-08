<?php

/**
 * Enqueue styles and scripts
 */
function bareplate_scripts() {

  bareplate_js();
  bareplate_css();

  page_template( 'tpl-home' );
  page_template( 'tpl-location' );

}
add_action( 'wp_enqueue_scripts', 'bareplate_scripts' );


/**
 * Base scripts
 */
function bareplate_js() {
  $min = false;
  wp_dequeue_script(    'jquery' );
  wp_deregister_script( 'jquery' );
  wp_register_script(   'jquery', '//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery' .( $min ? '.min':'' ). '.js#defer', array(), '1.11.1', true );
  wp_enqueue_script(    'jquery' );

  wp_register_script( 'bare-core', get_template_directory_uri() . '/js/core' .( $min ? '.min':'' ). '.js#defer', array(), '', true );
  wp_enqueue_script(  'bare-core' );
}

/**
 * Base stylesheet
 */
function bareplate_css() {
  $style_name = 'style';

  $min = false;
  $style_name = $style_name . ( $min ? '.min':'' ) . '.css';
  wp_enqueue_style( 'bareplate', get_template_directory_uri() . '/' . $style_name );
}


/**
 * Template types
 */
function page_default( $name ) {
  global $post;
  if ( is_singular( 'page' ) && get_page_template_slug( $post->ID ) == "" ) {
    post_assets( $name );
  }
}

function error_template( $name ) {
  if ( is_404() )
    post_assets( $name );
}

function single_template( $name, $post_type ) {
  global $post;
  if ( $post->post_type == $post_type )
    post_assets( $name . '-' . $post_type );
}


function page_template( $name ) {
  if ( is_page_template( get_folder_path( $name, 'php' ) ) )
    post_assets( $name );
}


function taxonomy_template( $name, $taxonomy ) {
  if ( get_query_var('taxonomy') == $taxonomy )
    post_assets( $name );
}


/**
 * Template enqueue
 */
function post_assets( $name ) {

  $min = false;
  wp_enqueue_style(  $name, get_template_uri( get_folder_path( $name, ( $min ? 'min':'' ). '.css' ) ) );
  wp_enqueue_script( $name, get_template_uri( get_folder_path( $name, ( $min ? 'min':'' ). '.js#defer' ) ), array(), '', true );

}


/**
 * Add async/defer to script tag
 */
function bareplate_add_async($url) {
  if (strpos($url, '#async')===false && strpos($url, '#defer')===false) {
    return $url;
  } else if (is_admin()) {
    $output = str_replace('#async', '', $url);
    $output = str_replace('#defer', '', $output);
    return $output;
  } else {
    if (strpos($url,'#async') !== false) {
      return str_replace('#async', '', $url)."' async x='";
    } else if (strpos($url,'#defer') !== false) {
      return str_replace('#defer', '', $url)."' defer x='";
    }
  }
}
add_filter('clean_url', 'bareplate_add_async', 11, 1);