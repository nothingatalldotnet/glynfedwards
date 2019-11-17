<?php
	get_header();

	$this_id = get_the_ID();
	$this_title = get_the_title();
	$this_url = get_the_permalink();
	$this_excerpt = get_the_excerpt();
	$this_date = get_the_date();
	$this_img = get_the_post_thumbnail_url($this_id, 'article-thumbnail');
	$this_published = get_the_date();
	$this_modified = get_the_modified_date();
	$this_modified_display = get_the_modified_date();
	$this_author = get_the_author_meta('display_name');

?>
	<div class="content">
		<article class="single">
			<h2><?php echo $this_title; ?></h2>
			<div class="information">
				<p class="back"><a href="/news" title="Back to news">&laquo; Back to news</a></p>
				<p class="date"><?php echo $this_modified_display; ?></p>
				<p class="author">Written by <?php echo $this_author; ?></p>
			</div>
<?php
	if(get_field('news_social_links')) {
		echo '<ul class="social social-items">';
		echo '<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>';
		echo '<li><a href="#"><i class="fab fa-twitter"></i></a></li>';
		echo '<li><a href="#"><i class="fab fa-instagram"></i></a></li>';
		echo '<li><a href="#"><i class="far fa-envelope"></i></a></li>';
		echo '</ul>';
	}
	echo '<div class="article-content">';
	echo the_content();
	echo '</div>';
	if(get_field('news_social_links')) {
		echo '<ul class="social single-items">';
		echo '<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>';
		echo '<li><a href="#"><i class="fab fa-twitter"></i></a></li>';
		echo '<li><a href="#"><i class="fab fa-instagram"></i></a></li>';
		echo '<li><a href="#"><i class="far fa-envelope"></i></a></li>';
		echo '</ul>';
	}
?>
			<script type="application/ld+json">
			{
				"@context": "https://schema.org",
				"@type": "NewsArticle",
				"mainEntityOfPage": {
					"@type": "WebPage",
					"@id": "<?php echo $this_url; ?>"
				},
				"headline": "<?php echo $this_title; ?>",
				"datePublished": "<?php echo $this_published; ?>",
				"dateModified": "<?php echo $this_modified; ?>",
				"author": {
					"@type": "Person",
					"name": "<?php echo $this_author; ?>"
				},
				"description": "<?php echo $this_excerpt; ?>"
			}
			</script>
			<script type=application/ld+json>
				{
					"@context": "http://schema.org",
					"@type": "BreadcrumbList",
					"itemListElement": [
						{"@type": "ListItem","position": 1,"item": {"@id": "https://www.glynedwardspoet.co.uk", "name": "Home"}},
						{"@type": "ListItem","position": 2,"item": {"@id": "https://www.glynedwardspoet.co.uk/news", "name": "News"}},
						{"@type": "ListItem","position": 3,"item": {"@id": "<?php echo $this_url; ?>", "name": "<?php echo $this_title; ?>"}}
					]
				}
			</script>
		</article>
<?php
	get_footer();