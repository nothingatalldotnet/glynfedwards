<?php
	get_header();
?>
	<div class="content">
		<h2>Testimonials</h2>
<?php
	if(have_posts()) {
		while (have_posts()) {
			the_post();
			$this_title = get_the_title();
			$this_testimonial = get_field('testimonial_text');
			$this_link = get_field('testimonial_link');
?>
		<article class="testimonial">
			<div><?php echo $this_testimonial; ?></div>
			<h4><?php echo $this_title; ?></h4>
		</article>

<?php
		}
	}

	get_footer();