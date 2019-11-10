<?php
	get_header();
	$scrap_title = get_the_title();
	$scrap_url = get_the_permalink();
	$scrap_image = get_field('scrap_image');
	$scrap_image = wp_get_attachment_image_src($scrap_image, 'full');
?>
	<div class="content">
		<h2>Scrapbook</h2>
		<div class="soon"><?php echo $scrap_title; ?></div>
		<div class="scrap">
			<a href=""><img src="<?php echo $scrap_image[0]; ?>" alt="<?php echo $scrap_title; ?>"></a>
		</div>
<?php
	get_footer();