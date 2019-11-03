<?php
	get_header();
?>
	<div class="content">
		<h2>Testimonials</h2>
		<div class="article-wrapper">
<?php
	if(have_posts()) {
		while (have_posts()) {
			the_post();
			$this_id = get_the_ID();
			$this_title = get_the_title();
			$this_url = get_the_permalink();
			$this_testimonial = get_field('testimonial_text');
			$this_link = get_field('testimonial_link');
			$this_published = get_the_date();
			$this_modified = get_the_modified_date();
			$this_author = get_the_author_meta('display_name');
?>
			<article class="testimonial">
				<div class="info">
					<h3><?php echo $this_testimonial; ?></h3>
					<p><?php echo $this_title; ?></p>
				</div>
			</article>
<?php
		}
	}

	get_footer();