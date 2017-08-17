<?php 

function simple_theme_setup()
{
	// Featured Image Support
	add_theme_support("post-thumbnails");

	// Menus
	register_nav_menus(array(
		"primary" => __("Primary Menu")
	));
}

// add_action(): add/create something
add_action("after_setup_theme", "simple_theme_setup");

/*    Excerpt Length   */
function set_excerpt_length()
{
	return 20;
}

// add_filter(): change something
add_filter("excerpt_length", "set_excerpt_length" );

// WIDGET LOCATION
function init_widgets($id)
{
	register_sidebar(array(
		"name" => "Sidebar",
		"id" => "sidebar", // usually same, lowercase
		"before_widget" => "<div class='side-widget'>",
		"after_widget" => "</div>",
		"before_title"  => "<h3>",
		"after_title"  => "</h3>",
	));
}

add_action("widgets_init", "init_widgets");

 ?>

