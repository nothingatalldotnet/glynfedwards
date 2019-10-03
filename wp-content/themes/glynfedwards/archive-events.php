<?php
	get_header();
?>
	<div class="content">
		<h2>Events</h2>
<?php
	if(have_posts()) {
		while (have_posts()) {
			the_post();
			$this_title = get_the_title();
			$this_url = get_the_permalink();
			$this_excerpt = get_the_excerpt();
			$this_date = get_the_date();
			$this_img = get_the_post_thumbnail();
			$this_published = get_the_date();
			$this_modified = get_the_modified_date();
			$this_author = get_the_author_meta('display_name');
?>
		<article>
			<h3><?php echo $this_title; ?></h3>
			<div><?php echo $this_excerpt; ?></div>
			<a href="<?php echo $this_url; ?>">Read More</a>
		</article>

<?php
		}
	}

	get_footer();