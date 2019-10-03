<?php
	/**
	* Template Name: Home page
	*/
	get_header();

	$home_title = get_field('home_title'); 
	$home_text = get_field('home_text');
?>

<div class="content">
	<h2><?php echo $home_title; ?></h2>
	<div><?php echo $home_text; ?></div>

</div>

<?php
	get_footer();