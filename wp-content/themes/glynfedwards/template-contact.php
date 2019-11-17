
<?php
	/**
	* Template Name: Contact
	*/

	get_header();
?>
	<div class="content">
		<h2>Contact</h2>
<?php
	echo do_shortcode('[contact-form-7 id="168" title="General"]');
?>
			<script type=application/ld+json>
				{
					"@context": "http://schema.org",
					"@type": "BreadcrumbList",
					"itemListElement": [
						{"@type": "ListItem","position": 1,"item": {"@id": "https://www.glynedwardspoet.co.uk", "name": "Home"}},
						{"@type": "ListItem","position": 2,"item": {"@id": "https://www.glynedwardspoet.co.uk"/contact, "name": "Contact"}}
					]
				}
			</script>
<?php
	get_footer();