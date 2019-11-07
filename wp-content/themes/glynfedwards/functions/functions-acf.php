<?php

	function acfMapsKey() {
		acf_update_setting('google_api_key', 'AIzaSyBU_po7B-zsXyGkLaeuTsWmwbd08-pil3A');
	}
	add_action('acf/init', 'acfMapsKey');

	function acfMapsKeyAgain($api){
		$api['key'] = 'AIzaSyBU_po7B-zsXyGkLaeuTsWmwbd08-pil3A';
		return $api;
	}
	add_filter('acf/fields/google_map/api', 'acfMapsKeyAgain');

	function orderPreGetPosts($query) {
    	if(is_admin()) {
        	return $query;
        }
		else if(isset($query->query_vars['post_type'])&&$query->query_vars['post_type'] == 'events') {
	        $query->set('orderby', 'meta_value_num');
	        $query->set('meta_key', 'event_date');
	        $query->set('order', 'DESC');
    	} else {
    		return $query;
    	}

    }
    add_action('pre_get_posts', 'orderPreGetPosts');