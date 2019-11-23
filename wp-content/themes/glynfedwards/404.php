
<?php
	get_header();
	$title = get_field('404_title', 'option');
	$text = get_field('404_text', 'option');
?>
	<div class="content">
		<h2><?php echo $title; ?></h2>
		<div class="article-wrapper">
		<?php echo $text; ?>
	</div>
	<script type=application/ld+json>
		{
			"@context": "http://schema.org",
			"@type": "BreadcrumbList",
			"itemListElement": [
				{"@type": "ListItem","position": 1,"item": {"@id": "https://www.glynedwardspoet.co.uk", "name": "Home"}},
				{"@type": "ListItem","position": 2,"item": {"@id": "https://www.glynedwardspoet.co.uk/404", "name": "404"}}
			]
		}
	</script>
<?php
	get_footer();