<?php

/**
 * Neve functions.php file
 *
 * Author: Adrien P <a.pats@hotmail.fr>
 * Created on: 06/09/2023
 *
 * @package Neve
 */


add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');
function my_theme_enqueue_styles()
{
	$parenthandle = 'parent-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.
	$theme        = wp_get_theme();
	wp_enqueue_style(
		$parenthandle,
		get_template_directory_uri() . '/style.css',
		array(),  // If the parent theme code has a dependency, copy it to here.
		$theme->parent()->get('Version')
	);
	wp_enqueue_style(
		'child-style',
		get_stylesheet_uri(),
		array($parenthandle),
		$theme->get('Version') // This only works if you have Version defined in the style header.
	);
}

function add_admin_link_to_menu($items, $args)
{
	if (is_user_logged_in() && current_user_can('administrator') && $args->theme_location == 'primary') {
		$admin_url = admin_url();
		$items .= '<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-47"><div class="wrap"><a href="' . esc_url($admin_url) . '">Admin</a></div></li>';
	}
	return $items;
}
add_filter('wp_nav_menu_items', 'add_admin_link_to_menu', 10, 2);
