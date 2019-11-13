<?php
	get_header();

	$this_title = get_the_title();
?>
	<div class="content">
		<div class="article-wrapper">
			<h2><?php echo $this_title; ?></h2>
<?php
	echo '</div>';
	get_footer();