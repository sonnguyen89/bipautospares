<?php
if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'name' => 'Left Sidebar',
        'before_widget' => '<li>',
		
        'after_widget' => '</li>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));
	if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'name' => 'Right Sidebar',
        'before_widget' => '<li>',
        'after_widget' => '</li>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));
	add_theme_support('post-thumbnails');
	set_post_thumbnail_size('my_thumb',190,140,true);
	 // to call this thumbnail, put this in template:-> the_post_thumbnail('my_thumb'); 
	 
	 add_image_size('banner', 550,270, true);
	 add_image_size('galthumb', 160,122, true);
	 //its used to nearly resize images to nearest ratio. You can specify your size. to call this thumbnail, put this in template:-> the_post_thumbnail('banner'); 
	 
	 function excerpt($limit) {
$excerpt = explode(' ', get_the_excerpt(), $limit);
if (count($excerpt)>=$limit) {
array_pop($excerpt);
$excerpt = implode(" ",$excerpt).'';
} else {
$excerpt = implode(" ",$excerpt);
}
$excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
return $excerpt;
}  // limit excerpt length --> you can call ' echo excerpt(20) ' as an example

include('admin_option.php');

register_nav_menus(array('header_menu'=>'Header','information_menu'=>'Information','information_menu'=>'Information','blog_menu'=>'Blog','footer_menu'=>'Footer','sitemap_menu'=>'Sitemap'));
remove_action ('wp_head', 'rsd_link');
function get_attachment_id_from_src ($image_src) {

  global $wpdb;
  $query = "SELECT ID FROM {$wpdb->posts} WHERE guid='$image_src'";
  $id = $wpdb->get_var($query);
  return $id;

 }
//wp_nav_menu(array('theme_location'=>'header_menu','container'=>'','items_wrap'=>'%3$s'));      can be used to call nav menu in file. Remember call everything inside <?php and its closing tag.



/*function is_number( $result, $tag ) {
$type = $tag['type'];
$name = $tag['name'];

if ($name == 'phone' || $name == 'mobile') { // Validation applies to these textfield names. Add more with || inbetween
$stripped = preg_replace( '/\D/', '', $_POST[$name] );
$_POST[$name] = $stripped;
if( strlen( $_POST[$name] ) < 1) { // Number string must equal this
$result['valid'] = false;
$result['reason'][$name] = $_POST[$name] = '*Enter a valid phone number';
}
}
return $result;
}

add_filter( 'wpcf7_validate_text', 'is_number', 10, 2 );
add_filter( 'wpcf7_validate_text*', 'is_number', 10, 2 );
*/


// above commented function can be used for giving number validation for contact form 7.  To be noted is field name must be phone ie input field name like [your-name] must be [phone]


/*add_filter( 'pre_get_posts' , 'my_change_order' );
// Function accepting current query
function my_change_order( $query ) {
	// Check if the query is for an archive
	if($query->is_archive)
		// Query was for archive, then set order
		$query->set( 'order' , 'asc' );
	// Return the query (else there's no more query, oops!)
	return $query;
}*/ //this can be used above query post to change order of post fro descending to ascending. To be noted, it should be used before query post not to be uncomment here


?>
