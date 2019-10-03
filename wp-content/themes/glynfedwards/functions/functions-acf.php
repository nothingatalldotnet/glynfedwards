<?php

	function acfMapsKey() {
		acf_update_setting('google_api_key', 'AIzaSyBU_po7B-zsXyGkLaeuTsWmwbd08-pil3A');
	}
	add_action('acf/init', 'acfMapsKey');