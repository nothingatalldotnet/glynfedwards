<?php
	get_header();
?>
	<div class="content">
		<h2>News</h2>
		<div class="article-wrapper">
<?php
	if(have_posts()) {
		while (have_posts()) {
			the_post();
			$this_id = get_the_ID();
			$this_title = get_the_title();
			$this_url = get_the_permalink();
			$this_excerpt = get_the_excerpt();
			$this_date = get_the_date();
			$this_img = get_the_post_thumbnail_url($this_id, 'article-thumbnail');
			$this_published = get_the_date();
			$this_modified = get_the_modified_date();
			$this_author = get_the_author_meta('display_name');
?>
			<article>
				<div class="date">
					<span class="day">16</span> 
					<span class="month">August</span> 
					<span class="year">2013</span>
				</div>
				<img src="<?php echo $this_img; ?>" alt="<?php echo $this_title; ?>">
				<div class="info">
					<h3><?php echo $this_title; ?></h3>
					<p><?php echo $this_excerpt; ?></p>
					<p><a href="<?php echo $this_url; ?>">Read More</a></p>
				</div>
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
			</article>
<?php
		}
	}
	archivePagination();
?>
		</div>
<?php
	get_footer();