<?php
//using a hook
//write a function to import stylesheet
function HotelManagement_resources(){
	//pass url of stylesheet
    wp_enqueue_style('style', get_stylesheet_uri());

}

//add this function
add_action('wp_enqueue_scripts', 'HotelManagement_resources');



//power get_top_ancestor_id()
function get_top_ancestor_id() {
	//make $post available
	global $post;
	if ($post->post_parent) {		
		//to get the top most parent
        $ancestors = array_reverse(get_post_ancestors($post->ID));
        return $ancestors[0];
	}
	return $post->ID;//return the id of the page
}
//Does page have children
function has_children() {
	global $post;
	get_pages('child_of=' .$post->ID);
	return count($pages);
}

//Theme setup
function learningWordPress_setup() {

    //Navigation Menus
    register_nav_menus(array(
        'primary' => __('Primary Menu'),
        'footer' => __('Footer Menu'),
	));
	//Add featured image support
	add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'learningWordPress_setup');
