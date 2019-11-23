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
	$this_event_tickets = get_field('event_ticket_link');

	$this_img = get_the_post_thumbnail_url($this_id, 'article-thumbnail');
	$this_published = get_the_date();
	$this_modified = get_the_modified_date();
	$this_author = get_the_author_meta('display_name');

	$this_location = get_field('event_location');
	$this_address = explode( "," , $this_location['address']);

	$this_event_where = "";
	if($this_address[0] != "") {
		$this_event_where .= $this_address[0];
	}
	if($this_address[1] != "") {
		$this_event_where .= $this_address[1];
	}
	if($this_address[2] != "") {
		$this_event_where .= $this_address[2];
	}
?>
	<div class="content">
		<h2 class="share-title"><?php echo $this_title; ?></h2>
		<div class="information">
			<p class="back"><a href="/events" title="Back to events">&laquo; Back to events</a></p>
		</div>
		<article class="article-wrapper event">
			<div class="flex-grid">
				<div class="col1">
					<img src="<?php echo $this_img; ?>" alt="<?php echo $this_title; ?>">
				</div>
				<div class="col2 details">
					<ul>
						<li><h4>Details</h4></li>
<?php
	if($this_event_phone != "") {
		echo "<li>Contact: ".$this_event_phone."</li>";
	}

	if($this_event_where != "") {
		echo "<li>Where: ".$this_event_where."</li>";
	}

	if($this_event_when != "") {
		echo "<li>When: ".$this_event_when."</li>";
	}

	if($this_event_time != "") {
		echo "<li>Time: ".$this_event_time."</li>";
	}

	if($this_event_price != "") {
		echo "<li>Cost: ".$this_event_price."</li>";
	}
	if($this_event_tickets != "") {
		echo "<li><a href='".$this_event_tickets."'>Get tickets here</a></li>";
	}
?>
					</ul>
<?php
	if(get_field('event_social_links')) {
		echo '<ul class="social single-items">';
		echo '<li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>';
		echo '<li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>';
		echo '<li><a href="#" class="email"><i class="far fa-envelope"></i></a></li>';
		echo '</ul>';
	}

	if($this_location) {
?>
				    <div class="acf-map" data-zoom="16">
        				<div class="marker" data-lat="<?php echo esc_attr($this_location['lat']); ?>" data-lng="<?php echo esc_attr($this_location['lng']); ?>"></div>
    				</div>
<?php
	}
?>


				</div>
			</div>

			<div><?php echo wpautop($this_description); ?></div>
		</article>
		<script type=application/ld+json>
			{
				"@context": "http://schema.org",
				"@type": "BreadcrumbList",
				"itemListElement": [
					{"@type": "ListItem","position": 1,"item": {"@id": "https://www.glynedwardspoet.co.uk", "name": "Home"}},
					{"@type": "ListItem","position": 2,"item": {"@id": "https://www.glynedwardspoet.co.uk/events", "name": "Events"}},
					{"@type": "ListItem","position": 3,"item": {"@id": "<?php echo $this_url; ?>", "name": "<?php echo $this_title; ?>"}}
				]
			}
		</script>
<?php
	get_footer();