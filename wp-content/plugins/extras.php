<?php
/**
 * @package Extras
 * @version 0.0.1
 */
/*
Plugin Name: Extras4Lilsy
Plugin URI: http://alilallovertheplace.com
Description: Various extra functions to improve this and that.
Author: Danny Guinther
Version: 0.0.1
Author URI: https://github.com/tdg5
*/


// remove wp version param from any enqueued scripts
function vc_remove_wp_ver_css_js( $src ) {
    if ( strpos( $src, 'ver=' ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}
add_filter( 'style_loader_src', 'vc_remove_wp_ver_css_js', 9999 );
add_filter( 'script_loader_src', 'vc_remove_wp_ver_css_js', 9999 );

// remove wp version from <head> and RSS
function my_remove_version_info() {
     return '';
}
add_filter('the_generator', 'my_remove_version_info');

?>
