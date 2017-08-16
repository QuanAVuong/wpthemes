<?php 

function simple_theme_setup()
{
	// Featured Image Support
	add_theme_support("post-thumbnails");
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

 ?>

