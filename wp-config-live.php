<?php
	define('DB_NAME', 'wp_glyn');
	define('DB_USER', 'glyn_usr');
	define('DB_PASSWORD', 'W-f?jfy8U26&PzUF');
	define('DB_HOST', 'localhost');
	define('DB_CHARSET', 'utf8mb4');
	define('DB_COLLATE', '' );

	define('AUTH_KEY',         '%6garB~NDSBD~2B9(:1LLb8mC Q]_-&q6#Y2ao11r+k1nbU}LVLDfL+_$6U,-NZF');
	define('SECURE_AUTH_KEY',  ';|F,vzXt3:-pJX,[,NN3bfUARDwSRn66Rm5xU`pl=%Uvo0I+osu;dIb`0iSDa{)D');
	define('LOGGED_IN_KEY',    'D+Z&`O.P3+$*f`8|8.OK=7FS#*<wlb5{&-y|4p/]IO$Sx+F-sHWg,Am6N?quY+GY');
	define('NONCE_KEY',        'K}:n<`FQ/g]R8V+2V3XL#%sK+/k#bV:g-a|K2S;^Q}UOaS%em5:^?cGc6h(1fjsW');
	define('AUTH_SALT',        'f<n6bs*6$gs5Uc+m)Cse9W@k-HAf~0?rO57zQ;4WEFV6( .[-g+,t3rPQ`ff/f9r');
	define('SECURE_AUTH_SALT', 'T[/]a*`@{V ZtiD-]{5()+BtQ-qW%&/Md&Iu|c0kkp^^~A`?0nyX&$`)mJ^D)^+v');
	define('LOGGED_IN_SALT',   'otCc%G_f%wbmhz=^D+ytRJTl,8KVf`O>zJ2HqEr|jUNiNA=TPLQiEr.Cl0K~y{Jj');
	define('NONCE_SALT',       'MY[&9x*L3)f2mNeWb;$?IYTGLc2ZNu|lh9W8C|ejQFRg+EUJNeH80aiMIZ12[FZX');

	$table_prefix = 'gfe_';

	define('WP_DEBUG', false);
	define('WP_DEBUG_LOG', false);
	define('WP_DEBUG_DISPLAY', false);
	define('WP_AUTO_UPDATE_CORE', false);
	define('AUTOMATIC_UPDATER_DISABLED', true);
	define('FORCE_SSL_ADMIN', true);
	define('DISALLOW_FILE_EDIT', true);

	define('WP_HOME', 'https://www.glynedwardspoet.co.uk/');
	define('WP_SITEURL', 'https://www.glynedwardspoet.co.uk/);

	if(!defined('ABSPATH')) {
		define('ABSPATH', dirname( __FILE__ ) . '/');
	}

	require_once( ABSPATH . 'wp-settings.php' );