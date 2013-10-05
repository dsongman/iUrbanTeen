<?php

// if Practice (or practice section)
if(is_page()) {
	switch ($post->ID) {
		case 6:
			$menuName = 'about us';
			break;
		case 74:
			$menuName = 'hire mark jewell';
			break;
		case 66:
			$menuName = 'training events';
			break;
		case 96:
			$menuName = 'the institute';
		case 67:
			$menuName = 'attendees';
	}
	
	switch ($post->post_parent) {
		case 6:
			$menuName = 'about us';
			break;
		case 74:
			$menuName = 'hire mark jewell';
			break;
		case 66:
			$menuName = 'training events';
			break;
		case 96:
			$menuName = 'the institute';
		case 67:
			$menuName = 'attendees';
	}
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