<?php
function address(){

	$html=get_option('address');
	return $html;
}

add_shortcode('address', 'address');

###########

function sitecash(){

	$html='<strong>'.get_option('sitecash').'</strong>';
	return $html;
}
add_shortcode('price', 'sitecash');

########

function phone(){

	$html='<a href="tel:'.str_replace(array(" ","(",")"),"",get_option('phone')).'" title="'.get_option('phone').'" class="phn"><i class="fa fa-phone"></i>'.get_option('phone').'</a>';

	return $html;

}

add_shortcode('phone', 'phone');


###########
function fax(){

	$html=get_option('fax');

	return $html;

}

add_shortcode('fax', 'fax');
###########
function map(){

	$html=get_option('map');

	return $html;

}

add_shortcode('map', 'map');
###########

function email(){

	$html='<a href="mailto:'.get_option('email').'" title="'.get_option('email').'">'.get_option('email').'</a>';

	return $html;

}
add_shortcode('email', 'email');
###########

function sitemap(){

	$html='<ul class="sitmp"><li>'.wp_nav_menu(array('theme_location'=>'sitemap_menu','container'=>'','items_wrap'=>'%3$s')).'</li></ul>';

	return $html;

}
add_shortcode('sitemap', 'sitemap');
?>
