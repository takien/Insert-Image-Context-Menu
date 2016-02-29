<?php
/*
Plugin Name: Insert Image Context Menu
Plugin URI: http://takien.com
Description: Add context menu on WordPress editor contains link to insert image.
Author: Takien
Version: 1.0
*/


add_action( 'admin_init', 'insert_imagecontextmenu_tinymce_button' );
add_filter( 'tiny_mce_before_init', 'insert_imagecontextmenu_context_menu' );

function insert_imagecontextmenu_tinymce_button() {
     if ( current_user_can( 'edit_posts' ) && current_user_can( 'edit_pages' ) ) {
          add_filter( 'mce_external_plugins', 'insert_imagecontextmenu_add_tinymce_button' );
     }
}


function insert_imagecontextmenu_add_tinymce_button( $plugin_array ) {
     $plugin_array['contextmenu'] = plugins_url( '/tinymce/plugins/contextmenu/plugin.min.js', __FILE__ ) ;
     $plugin_array['image_contextmenu'] = plugins_url( '/tinymce/plugins/image-contextmenu/image-contextmenu.js', __FILE__ ) ;
     return $plugin_array;
}

function insert_imagecontextmenu_context_menu( $in ) {
	$in['contextmenu'] = 'image_contextmenu';
	return $in;
}
