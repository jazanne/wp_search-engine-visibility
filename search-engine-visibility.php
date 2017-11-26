<?php
/*
Plugin Name: Is My Site Public?
Description: Change the color of the admin bar when site is set to discourage search engines from indexing
Author: Jaz White
Version: 1.0
Author URI: jazanne.com
*/

add_action( 'admin_enqueue_scripts', 'sev_add_seo_css' );
function sev_add_seo_css() {
  if ( !get_option('blog_public') ){
    wp_register_style( 'sev_admin_stylesheet', plugins_url( '/style.css', __FILE__ ) );
    wp_enqueue_style( 'sev_admin_stylesheet' );
  }
}

?>
