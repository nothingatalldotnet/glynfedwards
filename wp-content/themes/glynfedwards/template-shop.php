<?php
	/**
	* Template Name: Shop home page
	*/

	get_header();
	global $product;
?>
	<div class="content">
		<h2>Shop</h2>
		<div class="article-wrapper">
			<?php echo the_content(); ?>
			<div class="vertebrae">
<?php
	// Loop shop items
	$vertebrae = new WP_Query(array(
		'post_type' => 'product',
		'post_status' => 'publish',
		'posts_per_page' => -1,
		'product_cat' => 'vertebrae'
	));

	if($vertebrae->have_posts()) {
		while($vertebrae->have_posts()) {
			$vertebrae->the_post();
			$product_id = get_the_id();
			$product = wc_get_product($product_id);
			$product_title = $product->get_name();
			$product_desc = $product->get_short_description();
			$product_price = $product->get_price();
			$product_type = $product->get_type();
			$product_buy = $product->add_to_cart_url();
			$product_buy_text = $product->add_to_cart_text();
			$product_stock = $product->get_stock_quantity();

			echo '<div>';
			echo '<h3>'.$product_title.'</h3>';
			echo '<p>'.$product_desc.'</p>';
			echo '<p>Price: '.$product_price.'</p>';
			if($product_type == "external") {
				echo '<a href="'.$product_buy.'" target="_blank" title="'.$product_buy_text.'">'.$product_buy_text.'</a>';
			} else {
				if($product_stock > 0) {
					echo '<a href="'.get_site_url().'/checkout/?add-to-cart='.$product_id.'" title="'.$product_buy_text.'">'.$product_buy_text.'</a>';
				} else {
					echo "Sorry, out of stock";
				}
			}
			echo '</div>';
		}
	}
?>
			</div>
		</div>
		<script type=application/ld+json>
			{
				"@context": "http://schema.org",
				"@type": "BreadcrumbList",
				"itemListElement": [
					{"@type": "ListItem","position": 1,"item": {"@id": "https://www.glynedwardspoet.co.uk", "name": "Home"}},
					{"@type": "ListItem","position": 2,"item": {"@id": "https://www.glynedwardspoet.co.uk/shop", "name": "Shop"}}
				]
			}
		</script>
		<script type="application/ld+json">
			{
				"@context":"https://schema.org",
				"@type":"Book",
				"name" : "Vertebrae",
				"isbn": "9781916498754",
				"author": {
					"@type":"Person",
					"name":"Glyn Edwards"
				},
				"url" : "https://www.glynedwardspoet.co.uk/shop",
				"offers": {
					"@type": "AggregateOffer",
					"highPrice": "£9.99",
					"lowPrice": "£9.99",
					"offerCount": "3",
					"offers": [{
						"@type": "Offer",
						"url": "https://www.glynedwardspoet.co.uk/shop"
					}, {
						"@type": "Offer",
						"url": "https://thelonelycrowd.org/vertebrae-by-glyn-edwards/"
					}, {
						"@type": "Offer",
						"url": "https://www.waterstones.com/book/vertebrae/glyn-edwards/9781916498754"
					}]
				}
			}
		</script>
<?php
	get_footer();