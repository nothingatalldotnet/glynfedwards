<?php
	get_header();
	$query = new WP_Query(array(
		'post_status' => 'publish',
		'post_type' => 'scrapbook',
		'orderby' => 'rand',
		'posts_per_page' => '1'
	));

	while($query->have_posts()) {
		$query->the_post();
		$scrap_title = get_the_title();
		$scrap_url = get_the_permalink();
		$scrap_image = get_field('scrap_image');
		$scrap_image = wp_get_attachment_image_src($scrap_image, 'full');
	}
?>
	<div class="content">
		<h2>Scrapbook</h2>
		<div class="information">
			<p>Random: <a href="<?php echo $scrap_url; ?>"><?php echo $scrap_title; ?></a></p>
		</div>
		<div class="scrap">
			<img src="<?php echo $scrap_image[0]; ?>" alt="<?php echo $scrap_title; ?>">
		</div>
		<script type=application/ld+json>
			{
				"@context": "http://schema.org",
				"@type": "BreadcrumbList",
				"itemListElement": [
					{"@type": "ListItem","position": 1,"item": {"@id": "https://www.glynedwardspoet.co.uk", "name": "Home"}},
					{"@type": "ListItem","position": 2,"item": {"@id": "https://www.glynedwardspoet.co.uk"/scrapbook, "name": "Scrapbook"}}
				]
			}
		</script>
<?php
	wp_reset_postdata();
	get_footer();