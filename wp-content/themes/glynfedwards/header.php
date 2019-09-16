<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head profile="http://gmpg.org/xfn/11">
		<?php wp_head(); ?>
		<meta name="theme-color" content="#565656">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<script src="https://kit.fontawesome.com/bb20656c21.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700&display=swap" rel="stylesheet">
	</head>
	<body <?php body_class(); ?>>
<?php
		$social_twitter = get_field('social_twitter', 'option');
		$social_facebook = get_field('social_facebook', 'option');
		$social_instagram = get_field('social_instagram', 'option');
		$social_linkedin = get_field('social_linkedin', 'option');
		$contact_email = get_field('contact_email', 'option');
		$menu_title = get_field('menu_title', 'option');
		$menu_description =  get_field('menu_description', 'option');
?>
		<header>
			<ul id="slide-out" class="sidenav sidenav-fixed">
				<li class="logo">
					<a href="/" class="logo">
						<img src="<?php echo get_stylesheet_directory_uri().'/assets/images/logo.png'; ?>" class="site-logo">
					</a>
				</li>
				<li>
					<div class="social">
<?php
		if($social_twitter != "") {
			echo '<a href="https://twitter.com/'.$social_twitter.'" rel="parent nofollow" class="social-icon no-hover" title="Twitter"><i class="fab fa-2x fa-twitter"></i><div class="hidden-content">Twitter</div></a>';
		}
		if($social_facebook != "") {
			echo '<a href="'.$social_facebook.'" rel="parent nofollow" class="social-icon no-hover" title="Twitter"><i class="fab fa-2x fa-facebook"></i><div class="hidden-content">Facebook</div></a>';
		}
		if($social_instagram != "") {
			echo '<a href="'.$social_instagram.'" rel="parent nofollow" class="social-icon no-hover" title="Twitter"><i class="fab fa-2x fa-instagram"></i><div class="hidden-content">Instagram</div></a>';
		}
		if($social_linkedin != "") {
			echo '<a href="'.$social_linkedin.'" rel="parent nofollow" class="social-icon no-hover" title="Twitter"><i class="fab fa-2x fa-linkedin"></i><div class="hidden-content">LinkedIn</div></a>';
		}
		if($contact_email != "") {
			echo '<a href="'.$contact_email.'" rel="parent nofollow" class="social-icon no-hover" title="Email"><i class="fas fa-2x fa-envelope-square"></i><div class="hidden-content">'.$contact_email.'</div></a>';
		}
?>
					</div>
				</li>
				<li class="search">
					<div class="search-wrapper">
						<input id="search" placeholder="Search">
						<div class="search-results"></div>
					</div>
				</li>
				<li class="description"><?php echo $menu_description; ?></li>
				<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'menu_id' => 'main-menu' ) ); ?>
			</ul>
			<a href="#" data-target="slide-out" class="sidenav-trigger">
				<i class="fas fa-3x fa-bars"><div class="hidden-content">Menu</div></i>
			</a>
		</header>
