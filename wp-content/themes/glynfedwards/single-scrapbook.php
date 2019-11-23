<?php
	get_header();
	$scrap_title = get_the_title();
	$scrap_url = get_the_permalink();
	$scrap_type = get_field('type');
?>
	<div class="content">
		<h2>Scrapbook</h2>
		<div class="information">
			<p class="back"><a href="/scrapbook" title="Back to scrapbook">&laquo; Back to scrapbook</a></p>
			<p><?php echo $scrap_title; ?></p>
		</div>
		<div class="scrap">
<?php
	if($scrap_type == "img") {
		$scrap_image = get_field('scrap_image');
		$scrap_image = wp_get_attachment_image_src($scrap_image, 'full');
		echo '<img src="'.$scrap_image[0].'" alt="'.$scrap_title.'">';
	} else if($scrap_type == "fbv") {
		$scrap_facebook = get_field('scrap_facebook');
		preg_match('/src="(.+?)"/', $scrap_facebook, $matches);
		$src = $matches[1];
		$params = array(
			'controls' => 0,
			'hd' => 1,
			'autohide' => 1
		);
		$new_src = add_query_arg($params, $src);
		$scrap_facebook = str_replace($src, $new_src, $scrap_facebook);
		$attributes = 'frameborder="0"';
		$scrap_facebook = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $scrap_facebook);
		echo $scrap_facebook;
	} else if($scrap_type == "poe") {
	} else if($scrap+type == "vid") {
		$scrap_vid = get_field('scrap_video');
		echo '<video controls>';
		echo '<source src="'.$scrap_vid.'" type="video/mp4">';
		echo "Your browser does not support the video tag.";
		echo "</video>";
	} else {
		$scrap_image = get_field('scrap_image');
		$scrap_image = wp_get_attachment_image_src($scrap_image, 'full');
		echo '<img src="'.$scrap_image[0].'" alt="'.$scrap_title.'">';
	}
?>
		</div>
		<script type=application/ld+json>
			{
				"@context": "http://schema.org",
				"@type": "BreadcrumbList",
				"itemListElement": [
					{"@type": "ListItem","position": 1,"item": {"@id": "https://www.glynedwardspoet.co.uk", "name": "Home"}},
					{"@type": "ListItem","position": 2,"item": {"@id": "https://www.glynedwardspoet.co.uk/scrapbook", "name": "Scrapbook"}},
					{"@type": "ListItem","position": 3,"item": {"@id": "<?php echo $scrap_url; ?>", "name": "<?php echo $scrap_title; ?>"}}
				]
			}
		</script>
<?php
	get_footer();