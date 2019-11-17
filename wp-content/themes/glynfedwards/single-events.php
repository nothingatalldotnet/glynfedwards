<?php
	get_header();

	$this_id = get_the_ID();
	$this_title = get_the_title();
	$this_url = get_the_permalink();
	$this_description = get_the_content();
	$this_event_date = get_field('event_date');
	$this_event_date = DateTime::createFromFormat('d/m/Y', $this_event_date);
	$this_event_date_day = $this_event_date->format('j');
	$this_event_date_month = $this_event_date->format('F');
	$this_event_date_year = $this_event_date->format('Y');
	$this_event_phone = get_field('event_telephone');
	$this_event_price = get_field('event_price');

	$this_img = get_the_post_thumbnail_url($this_id, 'article-thumbnail');
	$this_published = get_the_date();
	$this_modified = get_the_modified_date();
	$this_author = get_the_author_meta('display_name');

	$this_location = get_field('event_location');
?>
	<div class="content">
		<article class="single event">
			<h2><?php echo $this_title; ?></h2>

			<div class="flex-grid">
				<div class="col">
					<img src="<?php echo $this_img; ?>" alt="<?php echo $this_title; ?>">
				</div>
				<div class="col details">
					<ul>
						<li>Details</li>
						<li>Contact: <?php echo $this_event_phone; ?></li>
						<li>Where:</li>
						<li>When:</li>
						<li>Time:</li>
						<li>Cost: <?php echo $this_event_price; ?></li>
						<li>
							<a href="">Get tickets here</a>
						</li>
					</ul>
<?php
	if(get_field('event_social_links')) {
		echo '<ul class="social single-items">';
		echo '<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>';
		echo '<li><a href="#"><i class="fab fa-twitter"></i></a></li>';
		echo '<li><a href="#"><i class="fab fa-instagram"></i></a></li>';
		echo '<li><a href="#"><i class="far fa-envelope"></i></a></li>';
		echo '</ul>';
	}
?>
				</div>
				<div class="col"></div>
			</div>

			<div class="flex-grid">
				<div class="col">
<?php
	if($this_location) {
?>
    <div class="acf-map" data-zoom="16">
        <div class="marker" data-lat="<?php echo esc_attr($this_location['lat']); ?>" data-lng="<?php echo esc_attr($this_location['lng']); ?>"></div>
    </div>
<?php
	}
?>
				</div>
				<div class="col"><?php echo $this_description; ?></div>
			</div>
		</article>
		<script type=application/ld+json>
			{
				"@context": "http://schema.org",
				"@type": "BreadcrumbList",
				"itemListElement": [
					{"@type": "ListItem","position": 1,"item": {"@id": "https://www.glynedwardspoet.co.uk", "name": "Home"}},
					{"@type": "ListItem","position": 2,"item": {"@id": "https://www.glynedwardspoet.co.uk"/events, "name": "Events"}},
					{"@type": "ListItem","position": 3,"item": {"@id": "<?php echo $this_url; ?>", "name": "<?php echo $this_title; ?>"}}
				]
			}
		</script>
<?php
	get_footer();