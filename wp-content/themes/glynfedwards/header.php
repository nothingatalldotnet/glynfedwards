<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head profile="http://gmpg.org/xfn/11">
		<?php wp_head(); ?>
		<meta name="theme-color" content="#ffffff">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<script src="https://kit.fontawesome.com/bb20656c21.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

	</head>
	<body <?php body_class(); ?>>

		<header>
			<nav class="fixed-nav-bar">
				<div id="menu" class="menu">
					<a class="logo" href="https://www.glynedwardspoet.co.uk/new">
						<img src="<?php echo get_stylesheet_directory_uri().'/assets/images/logo.png'; ?>" class="site-logo">
					</a>
					<div class="menus">
						<ul class="social menu-items">
							<li><i class="fab fa-facebook-f"></i></li>
							<li><i class="fab fa-twitter"></i></li>
							<li><i class="fab fa-instagram"></i></li>
							<li><i class="far fa-envelope"></i></li>
						</ul>
						<?php
							wp_nav_menu(array('theme_location' => 'main-menu', 'menu_id' => 'nav', 'menu_class' => 'menu-items', 'container' => ''));
						?>
					</div>
				</div>
			</nav>
		</header>