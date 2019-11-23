
<?php
	/**
	* Template Name: Contact
	*/

	get_header();
	$form = get_field('form');
?>
	<div class="content">
		<h2>Contact</h2>
		<div class="article-wrapper contact">
			<div class="col">
				<?php echo $form; ?>
			</div>
			<div class="col">
				<?php echo wpautop(get_the_content()); ?>
			</div>
		</div>

		<script type=application/ld+json>
			{
				"@context": "http://schema.org",
				"@type": "BreadcrumbList",
				"itemListElement": [
					{"@type": "ListItem","position": 1,"item": {"@id": "https://www.glynedwardspoet.co.uk", "name": "Home"}},
					{"@type": "ListItem","position": 2,"item": {"@id": "https://www.glynedwardspoet.co.uk/contact", "name": "Contact"}}
				]
			}
		</script>
<?php
	get_footer();