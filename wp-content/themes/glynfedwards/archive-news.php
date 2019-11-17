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
			$this_date_day = get_the_date('j');
			$this_date_month = get_the_date('F');
			$this_date_year = get_the_date('Y');
			$this_img = get_the_post_thumbnail_url($this_id, 'article-thumbnail');
			$this_published = get_the_date();
			$this_modified = get_the_modified_date();
			$this_author = get_the_author_meta('display_name');
?>
			<article>
				<div class="date">
					<span class="day"><?php echo $this_date_day; ?></span> 
					<span class="month"><?php echo $this_date_month; ?></span> 
					<span class="year"><?php echo $this_date_year; ?></span>
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
			<script type=application/ld+json>
				{
					"@context": "http://schema.org",
					"@type": "BreadcrumbList",
					"itemListElement": [
						{"@type": "ListItem","position": 1,"item": {"@id": "https://www.glynedwardspoet.co.uk", "name": "Home"}},
						{"@type": "ListItem","position": 2,"item": {"@id": "https://www.glynedwardspoet.co.uk"/news, "name": "News"}}
					]
				}
			</script>
<?php
	get_footer();