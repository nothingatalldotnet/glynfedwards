<?php
	get_header();
	$scrap_title = get_the_title();
	$scrap_url = get_the_permalink();
	$scrap_image = get_field('scrap_image');
	$scrap_image = wp_get_attachment_image_src($scrap_image, 'full');
?>
	<div class="content">
		<h2>Scrapbook</h2>
		<div class="information">
			<p class="back"><a href="/scrapbook" title="Back to scrapbook">&laquo; Back to scrapbook</a></p>
			<p><?php echo $scrap_title; ?></p>
		</div>
		<div class="scrap">
			<a href=""><img src="<?php echo $scrap_image[0]; ?>" alt="<?php echo $scrap_title; ?>"></a>
		</div>
		<script type=application/ld+json>
			{
				"@context": "http://schema.org",
				"@type": "BreadcrumbList",
				"itemListElement": [
					{"@type": "ListItem","position": 1,"item": {"@id": "https://www.glynedwardspoet.co.uk", "name": "Home"}},
					{"@type": "ListItem","position": 2,"item": {"@id": "https://www.glynedwardspoet.co.uk"/scrapbook, "name": "Scrapbook"}},
					{"@type": "ListItem","position": 3,"item": {"@id": "<?php echo $scrap_url; ?>", "name": "<?php echo $scrap_title; ?>"}}
				]
			}
		</script>
<?php
	get_footer();