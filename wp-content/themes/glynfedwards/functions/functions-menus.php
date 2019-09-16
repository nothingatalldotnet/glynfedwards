<?php
	function navMenus() {
		register_nav_menu('main-menu',__('Main Menu'));
		register_nav_menu('footer-menu',__('Footer Menu'));
	}
	add_action('init', 'navMenus');

	function navCurrent ($classes, $item) {
		if (in_array('current-page-ancestor', $classes) || in_array('current-menu-item', $classes) ) {
			$classes[] = 'active ';
		}
		return $classes;
	}
	add_filter('nav_menu_css_class' , 'navCurrent' , 10 , 2);