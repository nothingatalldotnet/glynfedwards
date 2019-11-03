
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
	get_footer();