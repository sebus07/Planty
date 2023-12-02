<?php
/**
 * Recommended way to include parent theme styles.
 * (Please see http://codex.wordpress.org/Child_Themes#How_to_Create_a_Child_Theme)
 *
 */  

 add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
 function theme_enqueue_styles()
 {
	 wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
	 wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
 }

 /* admin visible si conecté*/
add_filter( 'wp_nav_menu_items','add_admin_link', 10, 2 );
				function add_admin_link( $items, $args ) {
					if (is_user_logged_in()) {
						$items .= '<li><a href="'. get_admin_url() .'">Admin</a></li>';
					}
					return $items;
				
				}


/**
 * Your code goes below.
 */

