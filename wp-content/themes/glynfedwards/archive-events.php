<?php
	get_header();
?>
	<div class="content">
		<h2>Events</h2>
		<div class="article-wrapper">
<?php
	if(have_posts()) {
		while (have_posts()) {
			the_post();
			$this_id = get_the_ID();
			$this_title = get_the_title();
			$this_url = get_the_permalink();
			$this_excerpt = get_the_excerpt();

			$this_event_date = get_field('event_date');
			$this_event_date = DateTime::createFromFormat('d/m/Y', $this_event_date);
			$this_event_date_day = $this_event_date->format('j');
			$this_event_date_month = $this_event_date->format('F');
			$this_event_date_year = $this_event_date->format('Y');

			$this_img = get_the_post_thumbnail_url($this_id, 'article-thumbnail');
			$this_published = get_the_date();
			$this_modified = get_the_modified_date();
			$this_author = get_the_author_meta('display_name');
?>
			<article>
				<div class="date">
					<span class="day"><?php echo $this_event_date_day; ?></span> 
					<span class="month"><?php echo $this_event_date_month; ?></span> 
					<span class="year"><?php echo $this_event_date_year; ?></span>
				</div>
				<img src="<?php echo $this_img; ?>" alt="<?php echo $this_title; ?>">
				<div class="info">
					<h3><?php echo $this_title; ?></h3>
					<p><?php echo $this_excerpt; ?></p>
					<p><a href="<?php echo $this_url; ?>">Read More</a></p>
				</div>
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
					{"@type": "ListItem","position": 2,"item": {"@id": "https://www.glynedwardspoet.co.uk/events", "name": "Events"}}
				]
			}
		</script>
<?php
	get_footer();