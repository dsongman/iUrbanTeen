<?php

// if Practice (or practice section)
if(is_page() && ($post->ID==4 || $post->post_parent==4)) {
	$menuName = 'Universities';
}

// print menu
$defaults = array(
	'menu'            => $menuName, 
	'menu_class'      => 'sub-nav',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
);
wp_nav_menu( $defaults );

?>