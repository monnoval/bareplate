<?php

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