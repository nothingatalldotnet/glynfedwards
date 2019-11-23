<?php
	/**
	* Template Name: Home page
	*/
	get_header();

	$home_image = get_field('home_banner_image');
	$home_image = wp_get_attachment_image_src($home_image, 'home-banner');
	$home_title = get_field('home_title'); 
	$home_text = get_field('home_text');
	$home_ctas = get_field('home_ctas');
?>

<div class="content">
	<h2><?php echo $home_title; ?></h2>
	<div class="article-wrapper">
		<img class="banner" src="<?php echo $home_image[0]; ?>">	
		<div class="bang"><?php echo $home_text; ?></div>
<?php
	if($home_ctas) {
		echo "<div class='ctas'>";
		foreach($home_ctas as $cta) {
			$cta_permalink = get_the_permalink($cta);
			$cta_title = get_the_title($cta);
			$cta_img = get_the_post_thumbnail_url($cta);
			echo '<a href="'.$cta_permalink.'"><div class="cta" style="background-image:url('.$cta_img.');"><span>'.$cta_title.'</span></div></a>';
		}
		echo "</div>";
	}
?>
	</div>
	<script type=application/ld+json>
		{
			"@context": "http://schema.org",
			"@type": "BreadcrumbList",
			"itemListElement": [
				{"@type": "ListItem","position": 1,"item": {"@id": "https://www.glynedwardspoet.co.uk", "name": "Home"}}
			]
		}
	</script>
<?php
	get_footer();